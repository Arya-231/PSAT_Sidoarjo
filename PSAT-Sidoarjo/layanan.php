<?php
$title = "Layanan";
include 'includes/config.php';
$custom_css = "layanan.css";
include 'includes/header.php';
include 'includes/nav.php';
?>

<div class="layanan-container">

  <h2 class="layanan-title">Layanan Informasi PSAT</h2>
  <p class="layanan-subtitle">
    Temukan layanan pengujian laboratorium dan fitur pengecekan status registrasi PSAT Kabupaten Sidoarjo.
  </p>

  <!-- ========== SECTION 1: Layanan Uji Laboratorium ========== -->
  <div class="layanan-section">
    <h3>Uji Laboratorium</h3>
    <p class="section-desc">
      Dinas Pangan dan Pertanian Kabupaten Sidoarjo menyediakan layanan pengujian keamanan pangan untuk memastikan kualitas dan keamanan produk PSAT.
    </p>

    <div class="cards">
      <div class="card">
        <h4>Uji Residu Pestisida</h4>
        <p>Mendeteksi kandungan residu pestisida pada buah dan sayuran.</p>
      </div>

      <div class="card">
        <h4>Uji Logam Berat</h4>
        <p>Menganalisis kandungan logam berat seperti Pb, Hg, dan Cd.</p>
      </div>

      <div class="card">
        <h4>Uji Mikrobiologi</h4>
        <p>Memastikan produk bebas dari mikroba berbahaya.</p>
      </div>

      <div class="card">
        <h4>Uji Kandungan Kimia</h4>
        <p>Pengecekan pH, kadar air, dan parameter kimia lainnya.</p>
      </div>
    </div>
  </div>

  <!-- ========== SECTION 2: Cek Status Registrasi ========== -->
  <div class="layanan-section">
    <h3>Cek Status Registrasi PSAT</h3>
    <p class="section-desc">
      Masukkan nama produk atau usaha untuk melihat status registrasi PSAT Anda.
    </p>

    <div class="search-box">
      <input type="text" placeholder="Cari nama produk atau nama usaha...">
      <button>Cari</button>
    </div>

    <table class="result-table">
      <thead>
        <tr>
          <th>Nama Produk</th>
          <th>Nama Usaha</th>
          <th>Status</th>
          <th>Tanggal Registrasi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Sayur Segar Premium</td>
          <td>UD Maju Jaya</td>
          <td><span class="badge-success">Terdaftar</span></td>
          <td>12 Januari 2025</td>
        </tr>
        <tr>
          <td>Buah Melon Manis</td>
          <td>CV Segar Abadi</td>
          <td><span class="badge-pending">Menunggu Verifikasi</span></td>
          <td>05 Januari 2025</td>
        </tr>
      </tbody>
    </table>
  </div>

</div>

<?php include 'includes/footer.php'; ?>
