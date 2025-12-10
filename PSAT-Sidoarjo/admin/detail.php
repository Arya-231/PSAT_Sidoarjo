<?php
$title = "Daftar Pelaku Usaha / Produk";
$custom_css = "detail.css";
include 'header.php'; 
include 'sidebar.php';
?>

<div class="detail-container">

    <!-- Tombol kembali -->
    <a href="data.php" class="btn-back">← Kembali</a>

    <h2 class="detail-title">Detail Pelaku Usaha</h2>

    <!-- SECTION 1 — DATA PELAKU USAHA -->
    <div class="card-section">
        <h3 class="section-title">Data Pelaku Usaha</h3>
        <div class="detail-grid">
            <div><span>Nama Usaha:</span> PT Maju Sejahtera</div>
            <div><span>Pemilik:</span> Budi Santoso</div>
            <div><span>Alamat:</span> Jl. Melati No. 22</div>
            <div><span>No. Telepon:</span> 0812-3344-5566</div>
            <div><span>Email:</span> info@maju.com</div>
            <div><span>NIB:</span> 1234567890</div>
        </div>
    </div>

    <!-- SECTION 2 — DATA PRODUK -->
    <div class="card-section">
        <h3 class="section-title">Data Produk</h3>
        <table class="detail-table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Jenis</th>
                    <th>Kemasan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Keripik Singkong Pedas</td>
                    <td>Makanan Kering</td>
                    <td>Plastik Vakum</td>
                    <td><span class="badge badge-hijau">Aktif</span></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- SECTION 3 — RIWAYAT -->
    <div class="card-section">
        <h3 class="section-title">Riwayat Pembaruan</h3>

        <div class="timeline">
            <div class="timeline-item">
                <div class="dot"></div>
                <div class="timeline-content">
                    <b>20 Januari 2025</b> — Perpanjangan Sertifikat
                </div>
            </div>

            <div class="timeline-item">
                <div class="dot"></div>
                <div class="timeline-content">
                    <b>02 Desember 2024</b> — Update Informasi Produk
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION 4 — STATUS LABEL -->
    <div class="card-section">
        <h3 class="section-title">Status Label Saat Ini</h3>

        <div class="label-current">
            <span class="badge badge-hijau">Aktif Hingga</span>
            <div class="date-info">20 Januari 2026</div>
        </div>
    </div>

    <!-- SECTION 5 — DOKUMEN PDF -->
    <div class="card-section">
        <h3 class="section-title">Dokumen Sertifikat (PDF)</h3>
        <a href="#" class="btn-download">📄 Download Sertifikat</a>
    </div>

    <!-- SECTION 6 — FOTO PRODUK -->
    <div class="card-section">
        <h3 class="section-title">Foto Kemasan Produk</h3>
        <img src="foto-produk.jpg" class="preview-img" alt="Foto Produk">
    </div>

    <!-- SECTION 7 — NOTIFIKASI -->
    <div class="card-section">
        <h3 class="section-title">Kirim Notifikasi</h3>

        <div class="notif-buttons">
            <button class="btn btn-wa">📱 WhatsApp</button>
            <button class="btn btn-email">📧 Email</button>
        </div>
    </div>

</div>

<?php include "footer.php"; ?>