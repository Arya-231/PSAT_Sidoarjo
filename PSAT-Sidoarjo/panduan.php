<?php
$title = "Panduan";
include 'includes/config.php';
$custom_css = "panduan.css";
include 'includes/header.php';
include 'includes/nav.php';
?>


<section class="panduan-container">

    <div class="panduan-wrapper">

        <div class="panduan-image">
            <img src="crousent.jpeg" alt="Panduan" class="panduan-cover" id="openBook">
        </div>

        <div class="panduan-text">
            <h2>Petunjuk Pengemasan & Pelabelan</h2>
            <p>
                Panduan ini membantu pelaku usaha PSAT memahami cara pengemasan dan pelabelan yang benar,
                aman, higienis, dan sesuai standar pemerintah. Informasi disajikan secara interaktif 
                agar mudah dipahami.
            </p>

            <button class="btn-buka-panduan" id="openBookBtn">
                Buka Panduan Lengkap
            </button>
        </div>

    </div>

</section>

<!-- MODAL FLIPBOOK -->
<div class="modal" id="modalBook">
    <div class="modal-content">
        <span class="close" id="closeBook">&times;</span>

        <div id="flipbook"></div>
    </div>
</div>

<script src="assets/js/panduan.js"></script>

<?php include 'includes/footer.php'; ?>