<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Diagnosis - Glucose Plus</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .result-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            padding: 40px;
            margin: 50px auto;
            max-width: 900px;
        }
        .diagnosis-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
        }
        .cf-badge {
            background: rgba(255,255,255,0.2);
            border-radius: 20px;
            padding: 5px 15px;
            font-weight: 600;
        }
        .treatment-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
        }
        .btn-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .btn-custom:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            color: white;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-primary" href="/">
                <i class="fas fa-heartbeat me-2"></i>Glucose Plus
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-custom ms-3" href="/screening">Diagnosis Ulang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="result-container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary mb-3">
                    <i class="fas fa-file-medical me-2"></i>Hasil Diagnosis
                </h2>
                <p class="text-muted">Berikut adalah hasil diagnosis berdasarkan gejala yang Anda pilih.</p>
            </div>

            @if($diagnosis)
            @if(isset($results) && count($results) > 1)
                @foreach($results as $index => $result)
                <!-- Diagnosis Result -->
                <div class="diagnosis-card">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="fw-bold mb-3">
                                <i class="fas fa-stethoscope me-2"></i>Diagnosis {{ $index + 1 }}: {{ $result['penyakit']->name }}
                            </h3>
                            <p class="mb-3">{{ $result['penyakit']->desc }}</p>
                            <div class="cf-badge">
                                <i class="fas fa-percentage me-1"></i>Tingkat Kepastian: {{ number_format($result['cf'] * 100, 2) }}%
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-chart-pie" style="font-size: 5rem; opacity: 0.8;"></i>
                        </div>
                    </div>
                </div>

                <!-- Treatment Recommendations -->
                <div class="treatment-card">
                    <h4 class="fw-bold text-primary mb-3">
                        <i class="fas fa-pills me-2"></i>Rekomendasi Penanganan untuk {{ $result['penyakit']->name }}
                    </h4>
                    <p>{{ $result['penyakit']->penanganan }}</p>
                </div>
                @endforeach
            @else
                <!-- Single Diagnosis Result -->
                <div class="diagnosis-card">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h3 class="fw-bold mb-3">
                                <i class="fas fa-stethoscope me-2"></i>Diagnosis: {{ $diagnosis['penyakit']->name }}
                            </h3>
                            <p class="mb-3">{{ $diagnosis['penyakit']->desc }}</p>
                            <div class="cf-badge">
                                <i class="fas fa-percentage me-1"></i>Tingkat Kepastian: {{ number_format($diagnosis['cf'] * 100, 2) }}%
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-chart-pie" style="font-size: 5rem; opacity: 0.8;"></i>
                        </div>
                    </div>
                </div>

                <!-- Treatment Recommendations -->
                <div class="treatment-card">
                    <h4 class="fw-bold text-primary mb-3">
                        <i class="fas fa-pills me-2"></i>Rekomendasi Penanganan
                    </h4>
                    <p>{{ $diagnosis['penyakit']->penanganan }}</p>
                </div>
            @endif
            @else
            <!-- No Diagnosis -->
            <div class="alert alert-info text-center" role="alert">
                <h4 class="alert-heading">
                    <i class="fas fa-info-circle me-2"></i>Tidak Ditemukan Diagnosis
                </h4>
                <p>Berdasarkan gejala yang Anda pilih, tidak ditemukan kecocokan yang signifikan dengan penyakit diabetes yang ada dalam sistem kami.</p>
                <hr>
                <p class="mb-0">Silakan konsultasikan dengan dokter untuk pemeriksaan lebih lanjut.</p>
            </div>
            @endif

            <!-- Diagnosis Summary -->
            @if($diagnosis)
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">
                        <i class="fas fa-clipboard-check me-2"></i>Kesimpulan Diagnosis
                    </h5>
                </div>
                <div class="card-body">
                    @if(isset($results) && count($results) > 1)
                        <p class="mb-3"><strong>Berdasarkan gejala yang Anda alami, sistem mendeteksi {{ count($results) }} jenis diabetes yang mungkin sesuai:</strong></p>
                        <ul class="list-group list-group-flush">
                            @foreach($results as $index => $result)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                {{ $result['penyakit']->name }}
                                <span class="badge bg-primary rounded-pill">{{ number_format($result['cf'] * 100, 2) }}% kepastian</span>
                            </li>
                            @endforeach
                        </ul>
                        <p class="mt-3 text-muted">
                            <i class="fas fa-info-circle me-1"></i>
                            <strong>Rekomendasi:</strong> Silakan konsultasikan hasil ini dengan dokter spesialis untuk pemeriksaan lebih lanjut dan penanganan yang tepat.
                        </p>
                    @else
                        <p class="mb-3"><strong>Berdasarkan gejala yang Anda alami, sistem mendeteksi jenis diabetes berikut:</strong></p>
                        <div class="alert alert-info">
                            <h6 class="alert-heading">{{ $diagnosis['penyakit']->name }}</h6>
                            <p class="mb-1">Dengan tingkat kepastian: <strong>{{ number_format($diagnosis['cf'] * 100, 2) }}%</strong></p>
                            <hr>
                            <p class="mb-0">
                                <i class="fas fa-info-circle me-1"></i>
                                <strong>Rekomendasi:</strong> Silakan konsultasikan hasil diagnosis ini dengan dokter spesialis untuk konfirmasi dan penanganan yang tepat.
                            </p>
                        </div>
                    @endif
                </div>
            </div>
            @endif

            <!-- Patient Information -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <h5 class="mb-0">
                        <i class="fas fa-user me-2"></i>Informasi Pasien
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Nama:</strong> {{ $pasien->nama }}</p>
                            <p><strong>Email:</strong> {{ $pasien->email }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Jenis Kelamin:</strong> {{ $pasien->jeniskelamin }}</p>
                            <p><strong>Tanggal Konsultasi:</strong> {{ \Carbon\Carbon::parse($pasien->tanggalkonsultasi)->format('d M Y') }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Selected Symptoms -->
            <div class="card">
                <div class="card-header bg-light">
                    <h5 class="mb-0">
                        <i class="fas fa-list-check me-2"></i>Gejala yang Dipilih
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @php
                            $selectedGejalas = \App\Models\Gejala::whereIn('id', $selectedGejalaIds)->get();
                        @endphp
                        @foreach($selectedGejalas as $gejala)
                        <div class="col-md-6 mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>{{ $gejala->nama_gejala }}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="/screening" class="btn btn-custom">
                    <i class="fas fa-redo me-2"></i>Diagnosis Ulang
                </a>
                <a href="/" class="btn btn-outline-primary ms-3">
                    <i class="fas fa-home me-2"></i>Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
