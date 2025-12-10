<?php ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Registrasi - OKKP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    /* SIDEBAR */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      height: 100vh;
      background-color: #fff;
      border-right: 1px solid #dee2e6;
      padding: 20px;
      overflow-y: auto;
    }

    .sidebar h4 {
      font-weight: 700;
      color: #198754;
      text-align: center;
      margin-bottom: 25px;
    }

    .sidebar .nav-link {
      border-radius: 8px;
      padding: 8px 12px;
      transition: 0.2s;
      font-weight: 500;
    }

    .sidebar .nav-link:hover {
      background-color: #e8f5e9;
      color: #198754;
    }

    .sidebar .nav-link.active {
      background-color: #d1e7dd;
      color: #198754;
    }

    .sidebar hr {
      margin: 20px 0;
    }

    /* CONTENT */
    .main-content {
      margin-left: 270px;
      padding: 40px;
    }

    .card {
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      background-color: #fff;
    }

    .section-title {
      font-weight: 700;
      font-size: 20px;
      color: #198754;
      margin-bottom: 25px;
    }

    .form-label {
      font-weight: 600;
      color: #333;
    }

    .btn-success {
      background-color: #198754;
      border: none;
      font-weight: 600;
    }

    .btn-success:hover {
      background-color: #157347;
    }
  </style>
</head>
<body>

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <h4>OKKP SIDOARJO</h4>
    <ul class="nav flex-column">
      <li class="nav-item mb-2"><a href="#" class="nav-link text-dark"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
      <li class="nav-item mb-2"><a href="#" class="nav-link active"><i class="bi bi-file-earmark-text me-2"></i>Registrasi & Sertifikat</a></li>
      <li class="nav-item mb-2"><a href="#" class="nav-link text-dark"><i class="bi bi-bezier me-2"></i>Pengujian</a></li>
      <li class="nav-item mb-2"><a href="#" class="nav-link text-dark"><i class="bi bi-folder2 me-2"></i>Pendataan</a></li>
      <li class="nav-item mb-2"><a href="#" class="nav-link text-dark"><i class="bi bi-person-badge me-2"></i>Kompetensi SDM</a></li>
    </ul>

    <hr>

    <h6 class="text-muted px-2">PENGATURAN</h6>
    <ul class="nav flex-column mt-2">
      <li class="nav-item mb-2"><a href="#" class="nav-link text-dark"><i class="bi bi-gear me-2"></i>Pengaturan Akun</a></li>
      <li class="nav-item"><a href="#" class="nav-link text-dark"><i class="bi bi-book me-2"></i>Panduan Pengguna</a></li>
    </ul>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="main-content">
    <div class="card p-4">
      <h5 class="section-title">Tambah Data Registrasi</h5>
      <form>
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Jenis Registrasi</label>
            <input type="text" class="form-control bg-light" value="Registrasi PDUK" readonly>
          </div>
          <div class="col-md-6">
            <label class="form-label">Nomor Registrasi</label>
            <input type="text" class="form-control" placeholder="Nomor Registrasi">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Nama Unit Usaha</label>
            <input type="text" class="form-control" placeholder="Nama Unit Usaha">
          </div>
          <div class="col-md-6">
            <label class="form-label">Alamat Unit Usaha</label>
            <input type="text" class="form-control" placeholder="Alamat Unit Usaha">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Nomor Telepon Unit Usaha</label>
            <input type="text" class="form-control" placeholder="Nomor Telepon">
          </div>
          <div class="col-md-6">
            <label class="form-label">Email Unit Usaha</label>
            <input type="text" class="form-control" placeholder="Email Unit Usaha">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Kabupaten/Kota</label>
            <input type="text" class="form-control bg-light" value="KAB. SIDOARJO" readonly>
          </div>
          <div class="col-md-6">
            <label class="form-label">Kecamatan</label>
            <input type="text" class="form-control bg-light" placeholder="Kecamatan">
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Alamat Unit Penanganan</label>
            <input type="text" class="form-control" placeholder="Alamat Unit Penanganan">
          </div>
          <div class="col-md-6">
            <label class="form-label">Nama Ilmiah</label>
            <input type="text" class="form-control" placeholder="contoh: Amorphophallus muelleri">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Nama Komoditas</label>
          <input type="text" class="form-control" placeholder="Pilih Nama Komoditas">
        </div>

        <div class="mb-3">
          <label class="form-label">Nama Dagang/Merek</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="merek" id="namaTeks" checked>
            <label class="form-check-label" for="namaTeks">Nama (teks)</label>
          </div>
          <input type="text" class="form-control mb-2" placeholder="Nama (teks)">
           <div class="form-check">
            <input class="form-check-input" type="radio" name="merek" id="logo">
            <label class="form-check-label" for="logo">Logo (.jpg/.png)</label>
          </div>
          <!-- Tambahan Upload Logo -->
          <input type="file" class="form-control mt-2" accept=".jpg,.jpeg,.png">
        </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Jenis PSAT</label>
            <input type="text" class="form-control" placeholder="Isi sesuai dengan lampiran teknis">
          </div>
          <div class="col-md-6">
            <label class="form-label">Klaim</label>
            <select class="form-select">
            <option value="">Pilih Klaim</option>
            <option value="klaim_gizi">Klaim Gizi</option>
            <option value="klaim_kesehatan">Klaim Kesehatan</option>
            <option value="klaim_fortifikasi">Klaim Fortifikasi</option>
            <option value="halal">Halal</option>
            <option value="organik">Organik</option>
            <option value="kelas_mutu">Kelas Mutu</option>
            <option value="klaim_beras_khusus">Klaim Beras Khusus</option>
            <option value="tidak_ada_klaim">Tidak ada klaim</option>
          </select>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Kemasan dan Berat Bersih</label>
          <input type="text" class="form-control" placeholder="contoh: 10 kg, 5 plastik">
        </div>

        <div class="mb-3">
          <label class="form-label">Label Hijau/Putih</label>
          <select class="form-select">
            <option value="">Pilih</option>
            <option>Hijau</option>
            <option>Putih</option>
          </select>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label class="form-label">Tanggal Penerbitan Sertifikat</label>
            <input type="date" class="form-control">
          </div>
          <div class="col-md-6">
            <label class="form-label">Tanggal Berakhir Sertifikat</label>
            <input type="date" class="form-control">
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">File Sertifikat (.pdf)</label>
          <input type="file" class="form-control" accept=".pdf">
        </div>

        <div class="mb-3">
          <label class="form-label">Foto Kemasan (Maksimal 3 file .jpg)</label>
          <input type="file" class="form-control" accept=".jpg,.jpeg,.png" multiple>
        </div>

        <button type="submit" class="btn btn-success px-4 mt-3">Simpan</button>
      </form>
    </div>
  </main>

</body>
</html>
