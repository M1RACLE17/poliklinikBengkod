<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poliklinik Sehat Online - Berobat Mudah dari Rumah</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-dark: #4338ca;
            --secondary-color: #22d3ee;
            --accent-color: #facc15;
            --text-dark: #111827;
            --text-light: #6b7280;
            --bg-light: #f9fafb;
            --white: #ffffff;
            --gradient-1: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            --gradient-2: linear-gradient(135deg, #22d3ee 0%, #06b6d4 100%);
            --gradient-3: linear-gradient(135deg, #facc15 0%, #f97316 100%);
            --shadow-glass: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
            --backdrop-glass: blur(10px);
            --border-glass: 1px solid rgba(255, 255, 255, 0.18);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-light);
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.05), rgba(168, 85, 247, 0.05));
        }

        .floating-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            background: var(--gradient-1);
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: morph 8s ease-in-out infinite;
            opacity: 0.2;
        }

        .shape:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 15%;
            left: 5%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 150px;
            height: 150px;
            top: 65%;
            right: 5%;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 80px;
            height: 80px;
            bottom: 15%;
            left: 25%;
            animation-delay: 4s;
        }

        @keyframes morph {
            0%, 100% { transform: translateY(0) rotate(0deg); border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; }
            50% { transform: translateY(-30px) rotate(180deg); border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%; }
        }

        /* Navbar Styling */
        .navbar {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: var(--backdrop-glass);
            border-bottom: var(--border-glass);
            padding: 15px 0;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow-glass);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.7rem;
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link {
            color: var(--text-dark) !important;
            font-weight: 500;
            margin-left: 20px;
            position: relative;
            transition: all 0.3s ease;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: var(--gradient-1);
            transition: width 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero-section {
            background: var(--gradient-1);
            color: var(--white);
            padding: 160px 0 120px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="white" opacity="0.15"><path d="M0,0 L1000,0 L1000,80 C750,120 250,40 0,80 Z"/></svg>');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 25px;
            animation: fadeInUp 1s ease;
            line-height: 1.3;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .hero-section .subtitle {
            font-size: 1.3rem;
            margin-bottom: 40px;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.2s;
            animation-fill-mode: both;
            font-weight: 400;
        }

        .hero-buttons {
            animation: fadeInUp 1s ease 0.4s;
            animation-fill-mode: both;
        }

        .btn-hero {
            padding: 14px 40px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            margin: 10px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            backdrop-filter: var(--backdrop-glass);
        }

        .btn-hero-primary {
            background: rgba(255, 255, 255, 0.2);
            color: var(--white);
            border: var(--border-glass);
        }

        .btn-hero-primary:hover {
            background: var(--primary-color);
            transform: scale(1.05);
            box-shadow: var(--shadow-glass);
        }

        .btn-hero-outline {
            background: transparent;
            color: var(--white);
            border: 2px solid rgba(255, 255, 255, 0.7);
        }

        .btn-hero-outline:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
            color: var(--white);
        }

        /* Access Cards Section */
        .access-section {
            padding: 120px 0;
            background: var(--white);
            position: relative;
        }

        .access-section::before {
            content: '';
            position: absolute;
            top: -60px;
            left: 0;
            right: 0;
            height: 120px;
            background: var(--gradient-1);
            clip-path: polygon(0 60px, 100% 0, 100% 100%, 0 100%);
        }

        .access-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: var(--shadow-glass);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            height: 100%;
            backdrop-filter: var(--backdrop-glass);
            border: var(--border-glass);
        }

        .access-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: var(--gradient-1);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .access-card:hover::before {
            transform: scaleX(1);
        }

        .access-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: var(--shadow-glass);
        }

        .access-card:nth-child(1) .card-icon { background: var(--gradient-1); }
        .access-card:nth-child(2) .card-icon { background: var(--gradient-2); }
        .access-card:nth-child(3) .card-icon { background: var(--gradient-3); }

        .card-icon {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: var(--white);
            transition: transform 0.3s ease;
        }

        .access-card:hover .card-icon {
            transform: rotate(10deg) scale(1.1);
        }

        .access-card h4 {
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 15px;
        font-size: 1.5rem;
    }

    .access-card p {
        color: var(--text-light);
        margin-bottom: 30px;
        line-height: 1.7;
        font-size: 0.95rem;
    }

    .btn-access {
        background: transparent;
        border: 2px solid var(--primary-color);
        color: var(--primary-color);
        padding: 12px 30px;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
        position: relative;
        overflow: hidden;
    }

    .btn-access::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: var(--gradient-1);
        transition: all 0.3s ease;
        z-index: -1;
    }

    .btn-access:hover::after {
        left: 0;
    }

    .btn-access:hover {
        color: var(--white);
        transform: translateY(-2px);
        text-decoration: none;
    }

    /* Features Section */
    .features-section {
        padding: 120px 0;
        background: var(--bg-light);
    }

    .feature-card {
        background: rgba(255, 255, 255, 0.1);
        text-align: center;
        padding: 40px 30px;
        border-radius: 20px;
        box-shadow: var(--shadow-glass);
        margin-bottom: 30px;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        backdrop-filter: var(--backdrop-glass);
        border: var(--border-glass);
    }

    .feature-card::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: conic-gradient(from 0deg, transparent, rgba(99, 102, 241, 0.15), transparent);
        animation: rotate 10s linear infinite;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .feature-card:hover::before {
        opacity: 1;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: var(--shadow-glass);
    }

    .feature-card i {
        color: var(--primary-color);
        margin-bottom: 20px;
        font-size: 2.5rem;
        transition: transform 0.3s ease;
    }

    .feature-card:hover i {
        transform: scale(1.2);
    }

    .feature-card h4 {
        font-weight: 700;
        color: var(--text-dark);
        margin-bottom: 15px;
        font-size: 1.3rem;
    }

    .feature-card p {
        color: var(--text-light);
        line-height: 1.7;
        font-size: 0.95rem;
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /* Testimonials Section */
    .testimonials-section {
        padding: 120px 0;
        background: var(--white);
    }

    .testimonial-card {
        background: rgba(255, 255, 255, 0.1);
        padding: 30px;
        border-radius: 20px;
        box-shadow: var(--shadow-glass);
        margin-bottom: 30px;
        transition: all 0.4s ease;
        position: relative;
        backdrop-filter: var(--backdrop-glass);
        border: var(--border-glass);
    }

    .testimonial-card::before {
        content: '"';
        position: absolute;
        top: -5px;
        left: 20px;
        font-size: 3.5rem;
        color: var(--primary-color);
        opacity: 0.2;
        font-family: serif;
    }

    .testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-glass);
    }

    .testimonial-card p {
        font-style: italic;
        color: var(--text-light);
        margin-bottom: 20px;
        position: relative;
        z-index: 2;
        font-size: 0.95rem;
    }

    .testimonial-card h5 {
        font-weight: 600;
        color: var(--primary-color);
        font-size: 1.1rem;
    }

    /* Contact Section */
    .contact-section {
        padding: 120px 0;
        background: var(--bg-light);
    }

    .contact-form {
        background: rgba(255, 255, 255, 0.1);
        padding: 50px;
        border-radius: 20px;
        box-shadow: var(--shadow-glass);
        backdrop-filter: var(--backdrop-glass);
        border: var(--border-glass);
    }

    .contact-section .form-control {
        margin-bottom: 25px;
        border-radius: 15px;
        padding: 15px 20px;
        border: var(--border-glass);
        background: rgba(255, 255, 255, 0.05);
        color: var(--text-dark);
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }

    .contact-section .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        background: rgba(255, 255, 255, 0.1);
    }

    .btn-submit {
        background: var(--gradient-1);
        border: none;
        padding: 15px 40px;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 50px;
        color: var(--white);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .btn-submit:hover {
        transform: scale(1.05);
        box-shadow: var(--shadow-glass);
    }

    /* Footer */
    footer {
        background: var(--gradient-1);
        color: var(--white);
        padding: 60px 0 40px;
        text-align: center;
        position: relative;
    }

    footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    }

    /* Section Titles */
    .section-title {
        font-size: 2.8rem;
        font-weight: 800;
        color: var(--text-dark);
        margin-bottom: 60px;
        position: relative;
        display: inline-block;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: var(--gradient-1);
        border-radius: 2px;
    }

    /* Animations */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2.8rem;
        }
        .hero-section .subtitle {
            font-size: 1.1rem;
        }
        .section-title {
            font-size: 2.2rem;
        }
        .btn-hero {
            padding: 12px 30px;
            font-size: 1rem;
        }
        .access-card {
            margin-bottom: 30px;
        }
        .contact-form {
            padding: 30px;
        }
    }

    @media (max-width: 576px) {
        .hero-section {
            padding: 120px 0 80px;
        }
        .hero-section h1 {
            font-size: 2.2rem;
        }
        .access-section, .features-section, .testimonials-section, .contact-section {
            padding: 80px 0;
        }
    }
</style>
</head>
<body>
    <!-- Animated Background -->
    <div class="animated-bg">
        <div class="floating-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-heartbeat me-2"></i>Poliklinik Sehat Online
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#access">Akses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="hero-content">
                <h1>Revolusi Kesehatan Digital</h1>
                <p class="subtitle">Konsultasi medis profesional dari kenyamanan rumah Anda dengan teknologi terdepan</p>
                <div class="hero-buttons">
                    <a href="#access" class="btn btn-hero btn-hero-primary">Mulai Konsultasi</a>
                    <a href="#features" class="btn btn-hero btn-hero-outline">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Access Section -->
    <section class="access-section" id="access">
        <div class="container">
            <h2 class="text-center section-title">Pilih Akses Anda</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="access-card">
                        <div class="card-icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h4>Daftar Sebagai Pasien</h4>
                        <p>Bergabunglah dengan ribuan pasien yang telah merasakan kemudahan konsultasi online. Daftar sekarang dan dapatkan akses ke layanan kesehatan terbaik.</p>
                        <a href="/register" class="btn-access">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="access-card">
                        <div class="card-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h4>Login Dokter</h4>
                        <p>Portal khusus untuk tenaga medis profesional. Akses dashboard dokter untuk mengelola jadwal konsultasi dan rekam medis pasien.</p>
                        <a href="/login" class="btn-access">Login Dokter</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="access-card">
                        <div class="card-icon">
                            <i class="fas fa-cog"></i>
                        </div>
                        <h4>Login Administrator</h4>
                        <p>Panel kontrol sistem untuk administrator. Kelola seluruh aspek platform, monitoring, dan konfigurasi sistem poliklinik online.</p>
                        <a href="/login" class="btn-access">Login Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <h2 class="text-center section-title">Mengapa Memilih Kami?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-video"></i>
                        <h4>Konsultasi HD Video</h4>
                        <p>Berkomunikasi dengan dokter melalui video call berkualitas tinggi dengan teknologi enkripsi end-to-end untuk menjamin privasi Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-clock"></i>
                        <h4>Layanan 24/7</h4>
                        <p>Akses layanan kesehatan kapan saja, di mana saja. Tim medis kami siap melayani Anda setiap hari tanpa terkecuali.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-prescription-bottle-alt"></i>
                        <h4>E-Prescription</h4>
                        <p>Terima resep digital langsung di smartphone Anda dan dapatkan obat melalui layanan antar apotek partner kami.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-shield-alt"></i>
                        <h4>Data Terenkripsi</h4>
                        <p>Keamanan data medis Anda adalah prioritas utama dengan sistem enkripsi tingkat militer dan sertifikasi ISO 27001.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-mobile-alt"></i>
                        <h4>Aplikasi Mobile</h4>
                        <p>Nikmati pengalaman yang optimal dengan aplikasi mobile yang user-friendly dan dapat diakses di semua perangkat.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-heartbeat"></i>
                        <h4>Monitoring Kesehatan</h4>
                        <p>Pantau kondisi kesehatan Anda secara real-time dengan integrasi perangkat wearable dan laporan kesehatan berkala.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonials">
        <div class="container">
            <h2 class="text-center section-title">Testimoni Pasien</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>Platform yang luar biasa! Konsultasi dengan dr. Sarah sangat membantu dan pelayanannya sangat profesional. Saya bisa mendapatkan diagnosis tanpa harus keluar rumah.</p>
                        <h5>Ani Kurniawati, 34 tahun</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>Sebagai pekerja yang sibuk, layanan ini sangat memudahkan saya. Bisa konsultasi di sela-sela waktu istirahat dan langsung dapat resep digital. Sangat efisien!</p>
                        <h5>Budi Santoso, 40 tahun</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>Fitur monitoring kesehatan sangat membantu saya mengontrol diabetes. Dokter bisa melihat data real-time dan memberikan saran yang tepat setiap saat.</p>
                        <h5>Citra Dewi, 28 tahun</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="text-center section-title">Hubungi Kami</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form action="/submit" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                            <input type="tel" class="form-control" placeholder="Nomor Telepon" required>
                            <textarea class="form-control" rows="5" placeholder="Pesan atau Pertanyaan Anda..." required></textarea>
                            <div class="text-center">
                                <button type="submit" class="btn btn-submit">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="mb-3">
                        <i class="fas fa-heartbeat me-2"></i>
                        <strong>Poliklinik Sehat Online</strong>
                    </p>
                    <p>© 2025 Poliklinik Sehat Online. Semua hak dilindungi undang-undang.</p>
                    <p class="mt-3">
                        <small>Terdaftar dan diawasi oleh Kementerian Kesehatan Republik Indonesia</small>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Enhanced animation on scroll
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) scale(1)';
                    entry.target.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.feature-card, .access-card, .testimonial-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(50px) scale(0.95)';
            observer.observe(el);
        });

        // Form submission animation with validation
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const submitBtn = form.querySelector('.btn-submit');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...';
                submitBtn.disabled = true;
                
                // Simulate form submission
                setTimeout(() => {
                    submitBtn.innerHTML = '<i class="fas fa-check me-2"></i>Terkirim!';
                    submitBtn.style.background = 'linear-gradient(135deg, #10b981 0%, #059669 100%)';
                    
                    setTimeout(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        submitBtn.style.background = '';
                        form.reset();
                    }, 2000);
                }, 1500);
            });
        }

        // Interactive card effects
        document.querySelectorAll('.access-card, .feature-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
                this.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Parallax effect for hero section
        window.addEventListener('scroll', function() {
            const heroSection = document.querySelector('.hero-section');
            const scrollPosition = window.pageYOffset;
            heroSection.style.backgroundPositionY = `${scrollPosition * 0.3}px`;
        });

        // Dynamic gradient animation
        let gradientAngle = 0;
        setInterval(() => {
            gradientAngle = (gradientAngle + 1) % 360;
            document.querySelector('.hero-section').style.background = 
                `linear-gradient(${gradientAngle}deg, #6366f1 0%, #a855f7 100%)`;
        }, 50);
    </script>
</body>
</html>