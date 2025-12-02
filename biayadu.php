<?php

// sesi
session_start();

// import koneksi.php
include 'koneksi.php';

// fungsi pengecekan sesi
if(isset($_SESSION['sesi'])){

    $header = "- Biaya Daftar Ulang";
    // import header.php
    include 'header.php';
}
?>

<!-- Container -->
<div class="container py-3">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-white py-3">
            <h5 class="m-0 font-weight-bold text-dark text-center">
                <i class="fas fa-money-check-alt mr-2 text-primary-custom"></i> INFORMASI BIAYA DAFTAR ULANG
            </h5>
        </div>
        <div class="card-body text-center p-4">
            <img src="Registrasi-PSB.png" alt="Rincian Biaya Daftar Ulang" style="width:100%; max-width:900px; height:auto;">
            <div class="mt-3">
                <a href="Registrasi-PSB.png" target="_blank" class="btn btn-success">
                    <i class="fas fa-download mr-2"></i> Download Gambar
                </a>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>
