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
<div class="container py-4">
    <div class="card shadow-lg border-0">
        <div class="card-header bg-white py-3">
            <h5 class="m-0 font-weight-bold text-dark text-center">
                <i class="fas fa-money-check-alt mr-2 text-primary-custom"></i> INFORMASI BIAYA DAFTAR ULANG
            </h5>
        </div>
        <div class="card-body text-center p-4">
            
            <div class="alert alert-info mb-4">
                <i class="fas fa-info-circle mr-2"></i> Silahkan cermati rincian biaya daftar ulang di bawah ini. Gambar dapat diperbesar jika kurang jelas.
            </div>

            <div class="img-container shadow-sm rounded overflow-hidden d-inline-block" style="max-width: 100%;">
                <img src="Registrasi-PSB.png" alt="Rincian Biaya Daftar Ulang" class="img-fluid" style="max-height: 80vh;">
            </div>
            
            <div class="mt-4">
                <a href="Registrasi-PSB.png" target="_blank" class="btn btn-success">
                    <i class="fas fa-search-plus mr-2"></i> Lihat Ukuran Penuh / Download
                </a>
            </div>

        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>
