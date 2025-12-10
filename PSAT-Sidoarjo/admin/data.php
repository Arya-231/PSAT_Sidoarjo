<?php
$title = "Daftar Pelaku Usaha / Produk";
$custom_css = "data.css";
include 'header.php'; 
include 'sidebar.php';
?>

<div class="content-wrapper">
<div class="page-container">

    <!-- Search + Filter -->
    <div class="toolbar">
        <input type="text" class="search-box" placeholder="Cari pelaku usaha / produk...">
        <select class="filter-status">
            <option value="">Filter Status</option>
            <option value="aktif">Aktif</option>
            <option value="kadaluarsa">Kadaluarsa</option>
            <option value="menunggu">Menunggu</option>
        </select>
    </div>

    <!-- TABEL UTAMA -->
    <div class="table-wrapper">
        <table class="main-table">
            <thead>
                <tr>
                    <th>Pelaku Usaha</th>
                    <th>Produk</th>
                    <th>Label</th>
                    <th>Tgl Terbit</th>
                    <th>Tgl Berakhir</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                <!-- DATA 1 -->
              <tr onclick="window.location='detail-pelaku-usaha.html?id=1'" class="clickable-row">
    <td>UD Sumber Makmur</td>
    <td>Kripik Pisang</td>
    <td>Label Hijau</td>
    <td>12-02-2024</td>
    <td>12-02-2025</td>
    <td><span class="badge badge-hijau">Aktif</span></td>
    <td class="actions">
        <a href="edit.html?id=1" class="btn btn-edit">Edit</a>
        <a href="detail.php" class="btn btn-detail">Detail</a>
        <button class="btn btn-notif">Kirim Notif</button>
        <a href="update.html?id=1" class="btn btn-update">Update</a>
        <button class="btn btn-delete">Hapus</button>
    </td>
</tr>


                <!-- DATA 2 -->
                <tr>
                    <td>Tirta Jaya</td>
                    <td>Air Mineral</td>
                    <td>Label Merah</td>
                    <td>02-01-2023</td>
                    <td>02-01-2024</td>
                    <td><span class="badge badge-merah">Kadaluarsa</span></td>
                    <td class="actions">
                        <button class="btn btn-edit">Edit</button>
                        <button class="btn btn-detail">Detail</button>
                        <button class="btn btn-notif">Kirim Notif</button>
                        <button class="btn btn-update">Update</button>
                        <button class="btn btn-delete">Hapus</button>
                    </td>
                </tr>

                <!-- DATA 3 -->
                <tr>
                    <td>Berkat Mandiri</td>
                    <td>Sambal Botol</td>
                    <td>Label Putih</td>
                    <td>10-03-2024</td>
                    <td>—</td>
                    <td><span class="badge badge-putih">Menunggu</span></td>
                    <td class="actions">
                        <button class="btn btn-edit">Edit</button>
                        <button class="btn btn-detail">Detail</button>
                        <button class="btn btn-notif">Kirim Notif</button>
                        <button class="btn btn-update">Update</button>
                        <button class="btn btn-delete">Hapus</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

<?php include "footer.php"; ?>