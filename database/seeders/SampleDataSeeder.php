<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gejala;
use App\Models\Penyakit;

class SampleDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create symptoms based on Tabel 2 and CF Pakar from Tabel 3
        $gejalas = [
            ['kode_gejala' => 'G1', 'nama_gejala' => 'Sering haus', 'nilai_cf' => 0.75],
            ['kode_gejala' => 'G2', 'nama_gejala' => 'Sering lapar', 'nilai_cf' => 0.5],
            ['kode_gejala' => 'G3', 'nama_gejala' => 'Sering kencing lebih dari 8 kali sehari', 'nilai_cf' => 0.6],
            ['kode_gejala' => 'G4', 'nama_gejala' => 'Penurunan berat badan', 'nilai_cf' => 0.11],
            ['kode_gejala' => 'G5', 'nama_gejala' => 'Usia antara 0-14 tahun', 'nilai_cf' => 0.7],
            ['kode_gejala' => 'G6', 'nama_gejala' => 'Mudah lelah', 'nilai_cf' => 0.15],
            ['kode_gejala' => 'G7', 'nama_gejala' => 'Mata kabur', 'nilai_cf' => 0.12],
            ['kode_gejala' => 'G8', 'nama_gejala' => 'Kesemutan', 'nilai_cf' => 0.9],
            ['kode_gejala' => 'G9', 'nama_gejala' => 'Gatal-gatal seluruh tubuh tanpa sebab', 'nilai_cf' => 0.25],
            ['kode_gejala' => 'G10', 'nama_gejala' => 'Timbul bisul yang bernanah', 'nilai_cf' => 0.2],
            ['kode_gejala' => 'G11', 'nama_gejala' => 'Impotensi (L)/ keputihan (P)', 'nilai_cf' => 0.15],
            ['kode_gejala' => 'G12', 'nama_gejala' => 'Infeksi', 'nilai_cf' => 0.3],
            ['kode_gejala' => 'G13', 'nama_gejala' => 'Keturunan keluarga diabetes melitus', 'nilai_cf' => 0.3],
            ['kode_gejala' => 'G14', 'nama_gejala' => 'Masa kehamilan', 'nilai_cf' => 0.4],
            ['kode_gejala' => 'G15', 'nama_gejala' => 'Peningkatan kadar gula pada masa kehamilan', 'nilai_cf' => 0.8],
            ['kode_gejala' => 'G16', 'nama_gejala' => 'Mempunyai riwayat melahirkan bayi besar', 'nilai_cf' => 0.1],
            ['kode_gejala' => 'G17', 'nama_gejala' => 'Mukosa bibir kering', 'nilai_cf' => 0.5],
            ['kode_gejala' => 'G18', 'nama_gejala' => 'Keputihan', 'nilai_cf' => 0.9],
            ['kode_gejala' => 'G19', 'nama_gejala' => 'Sering konsumsi obat steroid seperti obat untuk peradangan, astma, atau rheumatik', 'nilai_cf' => 0.875],
        ];

        foreach ($gejalas as $gejala) {
            Gejala::create($gejala);
        }

        // Create diseases based on Tabel 1 (D1-D4) and Normal (D5)
        $penyakits = [
            [
                'name' => 'Diabetes melitus tipe 1',
                'desc' => 'Sering haus, Sering lapar, Sering kencing lebih dari 8 kali sehari, Penurunan berat badan, Sering merasa lelah, Mata kabur, Kesemutan, Gatal-gatal seluruh tubuh tanpa sebab, Timbul bisul yang bernanah, Impotensi (L)/ keputihan (P), Infeksi, Keturunan keluarga diabetes melitus, Usia antara 0-14 tahun.',
                'penanganan' => 'Pengobatan seumur hidup dengan insulin, diet seimbang, olahraga teratur, dan pemantauan kadar gula darah.'
            ],
            [
                'name' => 'Diabetes melitus gestasional',
                'desc' => 'Penurunan berat badan pada masa kehamilan, Peningkatan kadar gula pada masa kehamilan, Mempunyai riwayat melahirkan bayi besar, Mukosa bibir kering, Mudah lelah, Mata kabur, Keputihan, Sering haus, Sering lapar, Sering kencing lebih dari 8 kali sehari, Penurunan berat badan, Keturunan keluarga diabetes melitus.',
                'penanganan' => 'Perubahan gaya hidup, diet rendah karbohidrat, olahraga teratur, obat oral, dan dalam beberapa kasus insulin.'
            ],
            [
                'name' => 'Diabetes melitus tipe 2',
                'desc' => 'Mudah lelah, Mata kabur, Kesemutan, Gatal-gatal seluruh tubuh tanpa sebab, Timbul bisul yang bernanah, Impotensi (L)/ keputihan (P).',
                'penanganan' => 'Perubahan gaya hidup, diet sehat, olahraga teratur, dan pemantauan kadar gula darah secara berkala.'
            ],
            [
                'name' => 'Diabetes melitus tipe lain',
                'desc' => 'Sering haus, Sering lapar, Sering kencing lebih dari 8 kali sehari, Sering konsumsi obat steroid, seperti obat untuk peradangan, astma atau rheumatic, Infeksi.',
                'penanganan' => 'Pengobatan sesuai dengan penyebab spesifik, konsultasi dengan dokter spesialis.'
            ],
            [
                'name' => 'Normal',
                'desc' => 'Tidak terdeteksi gejala diabetes yang signifikan.',
                'penanganan' => 'Lanjutkan gaya hidup sehat, diet seimbang, olahraga teratur, dan lakukan pemeriksaan kesehatan berkala.'
            ],
        ];

        foreach ($penyakits as $penyakit) {
            Penyakit::create($penyakit);
        }

        // Create relationships based on Rules from Tabel 4, using CF [H,E] from Tabel 3
        $relationships = [
            // R1: IF G1 AND G2 AND G3 AND G4 AND G5 AND G11 AND G15 THEN D1
            ['gejala_id' => 1, 'penyakit_id' => 1, 'cf' => 0.675], // G1
            ['gejala_id' => 2, 'penyakit_id' => 1, 'cf' => 0.4],   // G2
            ['gejala_id' => 3, 'penyakit_id' => 1, 'cf' => 0.42],  // G3
            ['gejala_id' => 4, 'penyakit_id' => 1, 'cf' => 0.055], // G4
            ['gejala_id' => 5, 'penyakit_id' => 1, 'cf' => 0.21],  // G5
            ['gejala_id' => 11, 'penyakit_id' => 1, 'cf' => 0.015], // G11
            ['gejala_id' => 15, 'penyakit_id' => 1, 'cf' => 0.64],  // G15

            // R2: IF G4 AND G5 AND G6 AND G7 AND G9 AND G10 AND G12 THEN D2
            ['gejala_id' => 4, 'penyakit_id' => 2, 'cf' => 0.055], // G4
            ['gejala_id' => 5, 'penyakit_id' => 2, 'cf' => 0.21],  // G5
            ['gejala_id' => 6, 'penyakit_id' => 2, 'cf' => 0.09],  // G6
            ['gejala_id' => 7, 'penyakit_id' => 2, 'cf' => 0.108], // G7
            ['gejala_id' => 9, 'penyakit_id' => 2, 'cf' => 0.05],  // G9
            ['gejala_id' => 10, 'penyakit_id' => 2, 'cf' => 0.08], // G10
            ['gejala_id' => 12, 'penyakit_id' => 2, 'cf' => 0.21], // G12

            // R3: IF G3 AND G8 AND G13 AND G14 AND G15 AND G16 THEN D3
            ['gejala_id' => 3, 'penyakit_id' => 3, 'cf' => 0.42],  // G3
            ['gejala_id' => 8, 'penyakit_id' => 3, 'cf' => 0.45],  // G8
            ['gejala_id' => 13, 'penyakit_id' => 3, 'cf' => 0.15], // G13
            ['gejala_id' => 14, 'penyakit_id' => 3, 'cf' => 0.08], // G14
            ['gejala_id' => 15, 'penyakit_id' => 3, 'cf' => 0.64], // G15
            ['gejala_id' => 16, 'penyakit_id' => 3, 'cf' => 0.04], // G16

            // R4: IF G8 AND G11 AND G13 AND G17 AND G18 AND G19 THEN D4
            ['gejala_id' => 8, 'penyakit_id' => 4, 'cf' => 0.45],  // G8
            ['gejala_id' => 11, 'penyakit_id' => 4, 'cf' => 0.015], // G11
            ['gejala_id' => 13, 'penyakit_id' => 4, 'cf' => 0.15], // G13
            ['gejala_id' => 17, 'penyakit_id' => 4, 'cf' => 0.3],  // G17
            ['gejala_id' => 18, 'penyakit_id' => 4, 'cf' => 0.18], // G18
            ['gejala_id' => 19, 'penyakit_id' => 4, 'cf' => 0.2625], // G19
        ];

        foreach ($relationships as $rel) {
            \DB::table('gejala_penyakit')->insert($rel);
        }
    }
}
