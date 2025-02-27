<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Perusahaan</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <!-- Owl Carousel CSS (via CDN) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">TechCorp</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">Tentang Kami</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio">Portofolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

<!-- Hero Section -->
<section id="home" class="hero-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Kolom Kiri: Teks dan Tombol CTA -->
      <div class="col-md-6">
        <h1 class="display-4 fw-bold">Membangun Solusi Digital untuk Masa Depan</h1>
        <p class="lead">Kami adalah tim profesional yang berdedikasi untuk menciptakan inovasi teknologi. Dengan pengalaman bertahun-tahun, kami siap membantu bisnis Anda berkembang.</p>
        <a href="#contact" class="btn btn-primary btn-lg">Hubungi Kami</a>
      </div>

      <!-- Kolom Kanan: Gambar class="img-fluid rounded shadow"> -->
      <div class="col-md-6 text-center">
        <img src="assets/images/hero.jpg" alt="Hero Image" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section>

  <!-- About Us -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="assets/images/team.jpg" alt="Tim Kami" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
          <h2>Tentang Kami</h2>
          <p>Kami adalah perusahaan teknologi yang berfokus pada pengembangan solusi digital inovatif. Dengan pengalaman bertahun-tahun, kami telah membantu banyak klien mencapai tujuan mereka.</p>
          <p><strong>Visi:</strong> Menjadi pemimpin dalam industri teknologi dengan memberikan solusi terbaik.</p>
        </div>
      </div>
    </div>
  </section>

<!-- Services Section -->
<section id="services" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">Layanan Kami</h2>
    <div class="row gy-5"> <!-- Tambahkan "gy-5" untuk jarak vertikal antar kolom -->
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0 text-center p-4 h-100 bg-white">
          <i class="fas fa-code fa-3x mb-4 text-primary"></i>
          <h4 class="card-title fw-bold fs-3">Pengembangan Web</h4>
          <p class="card-text fs-6 text-muted">Kami merancang dan mengembangkan situs web yang responsif dan modern.</p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0 text-center p-4 h-100 bg-white">
          <i class="fas fa-mobile-alt fa-3x mb-4 text-primary"></i>
          <h4 class="card-title fw-bold fs-3">Aplikasi Mobile</h4>
          <p class="card-text fs-6 text-muted">Membangun aplikasi mobile lintas platform untuk bisnis Anda.</p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0 text-center p-4 h-100 bg-white">
          <i class="fas fa-brain fa-3x mb-4 text-primary"></i>
          <h4 class="card-title fw-bold fs-3">Kecerdasan Buatan</h4>
          <p class="card-text fs-6 text-muted">Solusi AI untuk meningkatkan efisiensi dan inovasi.</p>
        </div>
      </div>
    </div>
  </div>
</section>

 <!-- Portfolio Section -->
 <section id="portfolio" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Portofolio</h2>

      <!-- Owl Carousel -->
      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="card">
            <img src="assets/images/project1.jpg" alt="Proyek 1" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Proyek E-Commerce</h5>
              <p class="card-text">Platform e-commerce yang dirancang untuk skala besar.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <img src="assets/images/project2.jpg" alt="Proyek 2" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Aplikasi Mobile Kesehatan</h5>
              <p class="card-text">Aplikasi untuk memantau kesehatan pengguna secara real-time.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <img src="assets/images/project3.jpg" alt="Proyek 3" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Sistem Manajemen Proyek</h5>
              <p class="card-text">Alat kolaborasi tim untuk manajemen proyek dan tugas.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <img src="assets/images/project4.jpg" alt="Proyek 4" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Website Berita Online</h5>
              <p class="card-text">Portal berita modern dengan fitur pencarian cerdas.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card">
            <img src="assets/images/project5.jpg" alt="Proyek 5" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Aplikasi Pendidikan Interaktif</h5>
              <p class="card-text">Platform pembelajaran online dengan video interaktif.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Hubungi Kami</h2>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nama</label>
              <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Pesan</label>
              <textarea class="form-control" id="message" rows="5" placeholder="Tulis pesan Anda"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-4">
    <div class="container text-center">
      <p>&copy; 2023 TechCorp. All rights reserved.</p>
      <div class="social-icons">
        <a href="#" class="text-white me-3"><img src="assets/icons/linkedin.svg" alt="LinkedIn" width="24"></a>
        <a href="#" class="text-white me-3"><img src="assets/icons/github.svg" alt="GitHub" width="24"></a>
        <a href="#" class="text-white"><img src="assets/icons/twitter.svg" alt="Twitter" width="24"></a>
      </div>
    </div>
  </footer>

<!-- jQuery (Required for Owl Carousel) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Custom JS -->
  <script>
    $(document).ready(function () {
      $(".owl-carousel").owlCarousel({
        loop: true, // Membuat slider berputar terus-menerus
        margin: 20, // Jarak antar item
        nav: false, // Menampilkan tombol navigasi (panah)
        dots: true, // Menyembunyikan dots
        responsive: {
          0: {
            items: 1, // 1 item pada layar kecil
          },
          768: {
            items: 2, // 2 item pada tablet
          },
          992: {
            items: 3, // 3 item pada desktop
          },
        },
      });
    });
  </script>
</body>
</html>