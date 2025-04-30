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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f7fb;
            scroll-behavior: smooth;
            overflow-x: hidden;
        }

        /* Navbar Styling */
        .navbar {
            background: linear-gradient(90deg, #ffffff, #f8f9fa);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            padding: 12px 0;
            transition: all 0.3s ease;
        }
        .navbar.scrolled {
            background: #ffffff;
            padding: 8px 0;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.9rem;
            color: #1e88e5 !important;
            display: flex;
            align-items: center;
        }
        .navbar-brand i {
            margin-right: 8px;
            color: #1e88e5;
        }
        .nav-link {
            color: #2d3748 !important;
            font-weight: 500;
            margin-left: 25px;
            position: relative;
            transition: color 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #1e88e5;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        .nav-link:hover,
        .nav-link.active {
            color: #1e88e5 !important;
        }
        .btn-login {
            background: linear-gradient(45deg, #1e88e5, #42a5f5);
            color: white;
            border-radius: 50px;
            padding: 10px 24px;
            font-weight: 500;
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(30, 136, 229, 0.4);
            color: white;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(30, 136, 229, 0.9), rgba(66, 165, 245, 0.7)), url('https://images.unsplash.com/photo-1584982751601-97dcc096659c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 140px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.2), transparent);
            z-index: 1;
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .hero-section h1 {
            font-size: 4rem;
            font-weight: 700;
            letter-spacing: -1px;
            animation: slideInDown 1s ease;
        }
        .hero-section p {
            font-size: 1.4rem;
            font-weight: 300;
            margin-bottom: 40px;
            animation: slideInUp 1s ease 0.3s;
            animation-fill-mode: both;
        }
        .btn-primary {
            background: linear-gradient(45deg, #ffffff, #e3f2fd);
            color: #1e88e5;
            border: none;
            padding: 14px 40px;
            font-size: 1.2rem;
            font-weight: 500;
            border-radius: 50px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, background 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(45deg, #e3f2fd, #ffffff);
            transform: translateY(-4px);
            color: #1565c0;
        }

        /* Features Section */
        .features-section {
            padding: 100px 0;
            background: linear-gradient(180deg, #ffffff, #f8fafc);
        }
        .features-section h2 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 60px;
        }
        .feature-card {
            text-align: center;
            padding: 40px 20px;
            border-radius: 20px;
            background: #ffffff;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
        }
        .feature-card i {
            color: #1e88e5;
            font-size: 3rem;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .feature-card:hover i {
            transform: scale(1.1);
        }
        .feature-card h4 {
            font-weight: 600;
            color: #1a202c;
            font-size: 1.5rem;
        }
        .feature-card p {
            color: #4a5568;
            font-size: 1rem;
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 100px 0;
            background: linear-gradient(180deg, #edf2f7, #e2e8f0);
        }
        .testimonials-section h2 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 60px;
        }
        .testimonial-card {
            background: #ffffff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .testimonial-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.12);
        }
        .testimonial-card::before {
            content: '"';
            font-size: 4rem;
            color: #1e88e5;
            position: absolute;
            top: 10px;
            left: 20px;
            opacity: 0.2;
        }
        .testimonial-card p {
            font-style: italic;
            color: #4a5568;
            font-size: 1.1rem;
        }
        .testimonial-card h5 {
            font-weight: 600;
            color: #1e88e5;
            font-size: 1.2rem;
            margin-top: 15px;
        }

        /* Contact Section */
        .contact-section {
            padding: 100px 0;
            background: #ffffff;
        }
        .contact-section h2 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 60px;
        }
        .contact-section .form-control {
            margin-bottom: 20px;
            border-radius: 12px;
            padding: 14px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .contact-section .form-control:focus {
            border-color: #1e88e5;
            box-shadow: 0 0 8px rgba(30, 136, 229, 0.2);
            background: #ffffff;
        }
        .contact-section .btn-primary {
            background: linear-gradient(45deg, #1e88e5, #42a5f5);
            color: white;
            padding: 14px;
            border-radius: 12px;
            font-weight: 500;
        }
        .contact-section .btn-primary:hover {
            background: linear-gradient(45deg, #1565c0, #1e88e5);
            transform: translateY(-4px);
        }

        /* Footer */
        footer {
            background: linear-gradient(90deg, #2d3748, #1a202c);
            color: #e2e8f0;
            padding: 40px 0;
            text-align: center;
        }
        footer p {
            margin: 0;
            font-size: 0.95rem;
        }
        footer a {
            color: #90cdf4;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: #63b3ed;
        }

        /* Animations */
        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.8rem;
            }
            .hero-section p {
                font-size: 1.2rem;
            }
            .navbar-brand {
                font-size: 1.6rem;
            }
            .nav-link {
                margin-left: 0;
                margin-top: 12px;
            }
            .features-section h2,
            .testimonials-section h2,
            .contact-section h2 {
                font-size: 2.2rem;
            }
            .feature-card,
            .testimonial-card {
                padding: 25px 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-clinic-medical"></i> Poliklinik Sehat Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Beranda</a>
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
                    <li class="nav-item">
                        <a href="/login" class="btn btn-login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container hero-content">
            <h1>Poliklinik Sehat Online</h1>
            <p>Berobat Mudah dari Rumah dengan Konsultasi Dokter Online</p>
            <a href="#contact" class="btn btn-primary">Buat Janji Sekarang</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="features">
        <div class="container">
            <h2 class="text-center">Mengapa Memilih Kami?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-video"></i>
                        <h4>Konsultasi Online</h4>
                        <p>Bertemu dokter profesional melalui video call dari kenyamanan rumah Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-calendar-check"></i>
                        <h4>Jadwal Fleksibel</h4>
                        <p>Pilih waktu konsultasi yang sesuai dengan jadwal Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <i class="fas fa-prescription"></i>
                        <h4>Resep Digital</h4>
                        <p>Dapatkan resep obat digital yang dikirim langsung ke ponsel Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section" id="testimonials">
        <div class="container">
            <h2 class="text-center">Apa Kata Pasien Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Konsultasi online sangat membantu! Dokternya ramah dan prosesnya cepat."</p>
                        <h5>- Ani, 34 tahun</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Saya bisa buat janji kapan saja, sangat praktis untuk ibu bekerja seperti saya."</p>
                        <h5>- Budi, 40 tahun</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Resep digital langsung dikirim ke apotek, sangat efisien!"</p>
                        <h5>- Citra, 28 tahun</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="text-center">Hubungi Kami</h2>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="/submit" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama Lengkap" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Nomor Telepon" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Pesan atau Pertanyaan" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>© 2025 <a href="#">Poliklinik Sehat Online</a>. Semua hak dilindungi.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS for Navbar Scroll Effect -->
    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>