<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\User;
use App\Models\Penyakit;
use App\Models\Pasien;

class AdminDashboard extends Controller
{
    public function index()
    {
        $totalGejala = Gejala::count();
        $totalUser = User::count();
        $totalPenyakit = Penyakit::count();
        $totalPasien = Pasien::count();
        $data = [
            'content' => 'admin/dashboard',
            'totalGejala' => $totalGejala,
            'totalUser' => $totalUser,
            'totalPenyakit' => $totalPenyakit,
            'totalPasien' => $totalPasien,
        ];
        return view('admin.layouts.wrapper', $data);
    }
}
