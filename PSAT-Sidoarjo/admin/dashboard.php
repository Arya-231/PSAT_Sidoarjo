<?php
$title = "Dashboard Admin";
$custom_css = "dashboard.css";
include 'header.php'; 
include 'sidebar.php';
?>

<div class="content-wrapper">


<!-- RINGKASAN CEPAT -->
<div class="row g-3 dashboard-cards">

    <div class="col-md-3 col-6">
        <div class="cardd">
            <h5>Total Pelaku Usaha</h5>
            <div class="value">12</div>
        </div>
    </div>

    <div class="col-md-3 col-6">
        <div class="cardd">
            <h5>Produk Tersertifikasi</h5>
            <div class="value">27</div>
        </div>
    </div>

    <div class="col-md-3 col-12">
    <div class="cardd">
        <h5>Status Label</h5>

        <div class="label-status">
            <div class="label-item">
                <span class="label-dot putih"></span>
                Putih
                <span class="count">10</span>
            </div>

            <div class="label-item">
                <span class="label-dot hijau"></span>
                Hijau
                <span class="count">14</span>
            </div>

            <div class="label-item">
                <span class="label-dot merah"></span>
                Merah
                <span class="count">3</span>
            </div>
        </div>
    </div>
</div>


    <div class="col-md-3 col-6">
        <div class="cardd">
            <h5>Sertifikat Akan Habis</h5>
            <div class="value">4</div>
        </div>
    </div>

</div>

<br>

<!-- GRAFIK -->
<div class="card chart-card">
    <h5>Grafik Sertifikat Aktif / Kadaluarsa</h5>
    <canvas id="chartSertifikat"></canvas>
</div>

<br>

<div class="card list-card">
    <h5>Pengingat Sertifikat</h5>

    <div class="alert-list">

        <div class="alert-item warning">
            <i class="bi bi-exclamation-circle"></i>
            <span>
                <b>4 Sertifikat</b> akan habis dalam <b>< 30 hari</b>.  
                Segera lakukan komunikasi dengan pelaku usaha.
            </span>
        </div>

        <div class="alert-item danger">
            <i class="bi bi-x-circle"></i>
            <span>
                <b>2 Sertifikat</b> telah <b>kadaluarsa</b> dan perlu tindakan verifikasi lanjutan.
            </span>
        </div>

        <div class="alert-item info">
            <i class="bi bi-check-circle"></i>
            <span>
                <b>3 Sertifikat</b> telah diperbarui minggu ini.  
                Pastikan data sistem sudah diperbaharui.
            </span>
        </div>

        <div class="alert-item success">
            <i class="bi bi-arrow-left-right"></i>
            <span>
                <b>1 Produk</b> mengalami <b>perubahan label</b> (Putih → Hijau).
            </span>
        </div>

    </div>
</div>

</div>

<?php include 'footer.php'; ?>
