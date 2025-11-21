<?php include 'includes/config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PSAT Kabupaten Sidoarjo</title>

  <!-- Bootstrap CSS (gunakan CDN agar selalu berfungsi) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/style.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body style="background-color: #fffefb;">

<?php include 'includes/nav.php'; ?>

  <!-- HERO SECTION -->
  <section class="hero-section d-flex align-items-center text-white">
    <div class="container mt-3 pt-2">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="fw-bold mb-3">Pangan Segar Asal Tumbuhan<br>Kabupaten Sidoarjo</h1>

          <div class="highlight-box mb-3">
            <h5 class="fw-bold text-white m-0">Apa Itu PSAT ?</h5>
          </div>

          <p class="fs-6 lh-lg">
            PSAT (Pangan Segar Asal Tumbuhan) adalah bahan pangan yang berasal dari tumbuhan dan belum diolah,
            seperti sayur, buah, dan beras, yang harus memenuhi standar keamanan dan mutu agar aman dikonsumsi
            dan layak edar sesuai aturan Kementerian Pertanian.
          </p>
        </div>

        <div class="col-lg-6 text-center">
          <img src="assets/img/agro.png" alt="Pertanian" class="img-fluid rounded-4 shadow">
        </div>
      </div>
    </div>
  </section>

  <!-- INFO SECTION (OKKP) -->
  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-md-6 text-center">
          <div class="info-box shadow-sm bg-light rounded-4 p-4 h-100">
            <p class="text-muted">pengertian atau arahan</p>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <div class="info-box shadow-sm bg-secondary-subtle rounded-4 p-4 h-100">
            <h5 class="fw-bold">OKKP<br>Otoritas Kompeten Keamanan Pangan</h5>
          </div>
        </div>

        <div class="col-md-6 text-center">
          <div class="info-box shadow-sm bg-secondary-subtle rounded-4 p-4 h-100">
            <h5 class="fw-bold">OKKP<br>Otoritas Kompeten Keamanan Pangan</h5>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <div class="info-box shadow-sm bg-light rounded-4 p-4 h-100">
            <p class="text-muted">pengertian atau arahan</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-success text-white text-center py-4">
    <p class="mb-0">&copy; <?= date('Y'); ?> PSAT Kabupaten Sidoarjo</p>
  </footer>

  <!-- JS -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
