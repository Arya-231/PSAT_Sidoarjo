<?php
// Kalau nanti mau pakai database atau session, bisa ditambah di sini
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan PSAT</title>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/panduan.css">


    <!-- ✅ JQUERY (WAJIB UNTUK TURN.JS) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- ✅ TURN.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/4.1.0/turn.min.js"></script>

    <!-- ✅ PDF.JS (AMBIL SALAH SATU SAJA, JANGAN DOBEL) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

</head>
<body>
<?php include 'includes/nav.php';?>

    <!-- NAVBAR
    <div class="top-menu">
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Layanan</a></li>

            <li class="logo-center">
                <img src="../User/gambar/logo dinas.png" alt="Logo">
            </li>

            <li><a href="#">Panduan</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </div> -->

    <!-- CONTENT -->
    <section class="content">

        <div class="left">
            <img src="crousent.jpeg" class="book-cover" id="openBook">
        </div>

        <div class="right">
            <h2>Petunjuk pengemasan dan pelabelan</h2>
            <p>
                Petunjuk pengemasan dan pelabelan dibuat agar produk PSAT tetap aman, segar, dan mudah 
                dikenali, sekaligus memberi informasi jelas kepada konsumen serta memenuhi standar 
                keamanan pangan pemerintah.
            </p>
        </div>
    </section>

    <!-- FLIPBOOK POPUP -->
    <div class="modal" id="modalBook">
        <div class="modal-content">
            <span class="close" id="closeBook">&times;</span>

            <div id="flipbook">
            </div>
        </div>
    </div>

    <script src="assets/js/panduan.js"></script>

</body>
</html>
