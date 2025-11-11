<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glucose Plus - Sistem Pakar Diagnosis Diabetes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 100px 0;
            min-height: 70vh;
            display: flex;
            align-items: center;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .hero-section p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }
        .features-section {
            padding: 80px 0;
            background-color: #f8f9fa;
        }
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            height: 100%;
        }
        .feature-card:hover {
            transform: translateY(-10px);
        }
        .feature-icon {
            font-size: 3rem;
            color: #667eea;
            margin-bottom: 20px;
        }
        .about-section {
            padding: 80px 0;
            background: white;
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 40px 0;
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
        .footer a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand text-primary" href="#">
                <i class="fas fa-heartbeat me-2"></i>Glucose Plus
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-custom ms-3" href="/login">Login Sebagai Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1>Selamat Datang di Glucose Plus</h1>
                    <p class="lead">Sistem Pakar Diagnosis Diabetes Berbasis Artificial Intelligence untuk membantu Anda memahami kondisi kesehatan dengan akurat dan cepat.</p>
                    <a href="/screening" class="btn btn-light btn-lg me-3">Mulai Diagnosis</a>
                    <a href="#features" class="btn btn-outline-light btn-lg">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-lg-6 text-center">
                    <i class="fas fa-stethoscope" style="font-size: 15rem; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-4 fw-bold text-primary">Fitur Unggulan</h2>
                    <p class="lead text-muted">Glucose Plus dilengkapi dengan teknologi terkini untuk diagnosis diabetes yang akurat</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h4 class="fw-bold">Sistem Pakar AI</h4>
                        <p>Algoritma cerdas yang menganalisis gejala dengan metode forward chaining untuk diagnosis yang tepat.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h4 class="fw-bold">Basis Data Lengkap</h4>
                        <p>Database gejala dan penyakit diabetes yang terus diperbarui berdasarkan penelitian medis terkini.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4 class="fw-bold">Laporan Diagnosa</h4>
                        <p>Hasil diagnosis disajikan dalam laporan lengkap dengan rekomendasi penanganan medis.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="fw-bold">Manajemen Pasien</h4>
                        <p>Sistem terintegrasi untuk mengelola data pasien dan riwayat diagnosis dengan aman.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="fw-bold">Keamanan Data</h4>
                        <p>Enkripsi data dan kontrol akses ketat untuk menjaga kerahasiaan informasi kesehatan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4 class="fw-bold">Responsive Design</h4>
                        <p>Interface yang responsif dan user-friendly, dapat diakses dari berbagai perangkat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-4 fw-bold text-primary mb-4">Tentang Glucose Plus</h2>
                    <p class="lead mb-4">Glucose Plus adalah aplikasi sistem pakar diagnosis diabetes yang dikembangkan menggunakan teknologi Artificial Intelligence untuk membantu tenaga medis dan masyarakat dalam mendeteksi dini penyakit diabetes.</p>
                    <p>Aplikasi ini menggunakan metode Certainty Factor dalam sistem pakar untuk menghitung tingkat kepastian diagnosis berdasarkan gejala yang dialami pasien. Dengan database gejala yang komprehensif dan algoritma yang telah divalidasi, Glucose Plus memberikan hasil diagnosis yang akurat dan dapat diandalkan.</p>
                    <div class="mt-4">
                        <div class="row">
                            <div class="col-6">
                                <h3 class="text-primary fw-bold">500+</h3>
                                <p>Kasus Terselesaikan</p>
                            </div>
                            <div class="col-6">
                                <h3 class="text-primary fw-bold">95%</h3>
                                <p>Akurasi Diagnosis</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://www.shutterstock.com/image-photo/diabetes-concept-blood-glucose-meter-600nw-2450980887.jpg" alt="Blood Glucose Monitoring Illustration" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">
                        <i class="fas fa-heartbeat me-2"></i>Glucose Plus
                    </h5>
                    <p>Sistem Pakar Diagnosis Diabetes Berbasis AI untuk kesehatan yang lebih baik.</p>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">Kontak</h5>
                    <p><i class="fas fa-envelope me-2"></i> info@glucoseplus.com</p>
                    <p><i class="fas fa-phone me-2"></i> +62 853 9754 5218</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Makassar, Indonesia</p>
                </div>
                <div class="col-lg-4 mb-4">
                    <h5 class="fw-bold mb-3">Tim Pengembang</h5>
                    <div>
                        <a href="https://www.instagram.com/irgadielpabisa/" target="_blank" class="text-white me-3" title="Instagram 1"><i class="fab fa-instagram"></i> Irgadiel</a><br>
                        <a href="https://www.instagram.com/_ezaazz/" target="_blank" class="text-white me-3" title="Instagram 2"><i class="fab fa-instagram"></i> Alfa Reza</a><br>
                        <a href="https://www.instagram.com/" target="_blank" class="text-white me-3" title="Instagram 3"><i class="fab fa-instagram"></i> Syahwal</a><br>
                        <a href="https://www.instagram.com/ic.christa/" target="_blank" class="text-white me-3" title="Instagram 4"><i class="fab fa-instagram"></i> Christa</a><br>
                        <a href="https://www.instagram.com/yun_rvll/" target="_blank" class="text-white me-3" title="Instagram 5"><i class="fab fa-instagram"></i> Wahyuni</a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; Kelompok 5. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Smooth Scroll -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
<?php /**PATH D:\A. 1Tugas Kulyah\Semester 3\Kecerdasan Buatan\Projek\diabetes\resources\views/index.blade.php ENDPATH**/ ?>