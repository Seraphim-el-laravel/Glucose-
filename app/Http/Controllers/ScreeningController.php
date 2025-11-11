<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Pasien;

class ScreeningController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('screening', compact('gejalas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
            'gejalas' => 'nullable|array',
            'gejalas.*' => 'exists:gejalas,id',
            'no_symptoms' => 'nullable|boolean',
        ]);

        // Custom validation: either symptoms or no_symptoms must be provided
        if (empty($request->gejalas) && !$request->no_symptoms) {
            return back()->withErrors(['gejalas' => 'Silakan pilih gejala yang dialami atau centang "Tidak mengalami gejala di atas".']);
        }

        // Save patient data
        $pasien = Pasien::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'jeniskelamin' => $request->jeniskelamin,
            'tanggalkonsultasi' => now()->toDateString(),
        ]);

        // Get selected symptoms
        $selectedGejalaIds = $request->gejalas ?? [];

        // If no symptoms selected but no_symptoms is checked, directly diagnose Normal
        if (empty($selectedGejalaIds) && $request->no_symptoms) {
            $normalPenyakit = Penyakit::where('name', 'Normal')->first();
            if ($normalPenyakit) {
                $results = [
                    [
                        'penyakit' => $normalPenyakit,
                        'cf' => 1.0,
                    ]
                ];
            } else {
                $results = [];
            }
        } else {
            // Calculate CF for each disease
            $penyakits = Penyakit::with('gejalas')->get();
            $results = [];

            foreach ($penyakits as $penyakit) {
                $cfValues = [];

                foreach ($selectedGejalaIds as $gejalaId) {
                    $gejala = $penyakit->gejalas->where('id', $gejalaId)->first();
                    if ($gejala) {
                        $cfValues[] = $gejala->pivot->cf;
                    }
                }

                if (!empty($cfValues)) {
                    $cfTotal = max($cfValues); // Use maximum CF among selected symptoms
                    $results[] = [
                        'penyakit' => $penyakit,
                        'cf' => $cfTotal,
                    ];
                }
            }

            // Sort by CF descending
            usort($results, function($a, $b) {
                return $b['cf'] <=> $a['cf'];
            });

            $highestCf = $results[0]['cf'] ?? 0;

            // If highest CF < 0.3, add Normal with CF = 1 - highest CF
            // This makes Normal less frequent, only when symptoms don't strongly indicate any diabetes type
            if ($highestCf < 0.3) {
                $normalPenyakit = Penyakit::where('name', 'Normal')->first();
                if ($normalPenyakit) {
                    $results[] = [
                        'penyakit' => $normalPenyakit,
                        'cf' => 1 - $highestCf,
                    ];
                    // Re-sort to put Normal at top if its CF is higher
                    usort($results, function($a, $b) {
                        return $b['cf'] <=> $a['cf'];
                    });
                }
            } else {
                // If highest CF >= 0.3, remove Normal if it exists
                $results = array_filter($results, function($result) {
                    return $result['penyakit']->name !== 'Normal';
                });
            }
        }

        $diagnosis = $results[0] ?? null;

        // Save diagnosis result to patient record
        if ($diagnosis) {
            $diagnosisText = $diagnosis['penyakit']->name . ' (' . number_format($diagnosis['cf'] * 100, 2) . '% kepastian)';
            if (count($results) > 1) {
                $diagnosisText .= ' - Multiple diagnoses detected';
            }
            $pasien->update(['hasil_diagnosis' => $diagnosisText]);
        }

        return view('result', compact('pasien', 'diagnosis', 'selectedGejalaIds', 'results'));
    }
}
