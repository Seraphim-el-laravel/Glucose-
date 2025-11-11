<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screening Diabetes - Glucose Plus</title>
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
        .screening-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            padding: 40px;
            margin: 50px auto;
            max-width: 800px;
        }
        .form-check-input:checked {
            background-color: #667eea;
            border-color: #667eea;
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
                        <a class="btn btn-custom ms-3" href="/login">Login Sebagai Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="screening-container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary mb-3">
                    <i class="fas fa-clipboard-check me-2"></i>Screening Diabetes
                </h2>
                <p class="text-muted">Silakan isi data diri Anda dan pilih gejala yang Anda alami untuk mendapatkan diagnosis awal.</p>
            </div>

            <form action="/result" method="POST">
                <?php echo csrf_field(); ?>

                <!-- Personal Information -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-bold">Jenis Kelamin</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="laki" value="Laki-laki" required>
                                <label class="form-check-label" for="laki">
                                    Laki-laki
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="perempuan" value="Perempuan" required>
                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Symptoms Selection -->
                <div class="mb-4">
                    <label class="form-label fw-bold">Gejala yang Dialami</label>
                    <p class="text-muted small">Pilih semua gejala yang Anda alami dalam beberapa hari terakhir:</p>

                    <div class="row">
                        <?php $__currentLoopData = $gejalas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gejala): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="gejalas[]" value="<?php echo e($gejala->id); ?>" id="gejala<?php echo e($gejala->id); ?>">
                                <label class="form-check-label" for="gejala<?php echo e($gejala->id); ?>">
                                    <?php echo e($gejala->nama_gejala); ?>

                                </label>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- No Symptoms Checkbox -->
                        <div class="col-md-6 mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="no_symptoms" value="1" id="no_symptoms">
                                <label class="form-check-label fw-bold" for="no_symptoms">
                                    Tidak mengalami gejala di atas
                                </label>
                            </div>
                            <p class="text-muted small mt-1">Centang jika Anda tidak mengalami gejala apa pun dari daftar di atas.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-custom btn-lg">
                        <i class="fas fa-search me-2"></i>Diagnosa Sekarang
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH D:\A. 1Tugas Kulyah\Semester 3\Kecerdasan Buatan\Projek\diabetes\resources\views/screening.blade.php ENDPATH**/ ?>