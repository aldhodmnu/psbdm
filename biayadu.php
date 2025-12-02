<?php

//  buka sesi
session_start();
error_reporting(E_ERROR | E_PARSE);
// import koneksi
include 'koneksi.php';

// fungsi set sesi jika true
if(isset($_SESSION['sesi'])){
    $header = "- Biaya Daftar Ulang";
    include_once 'header.php';
?>

<!-- container -->
<div class="container py-4">
    
    <!-- Gambar Rincian Biaya Daftar Ulang -->
    <div class="card shadow-lg border-0">
        <div class="card-header bg-white py-3">
            <h5 class="m-0 font-weight-bold text-dark text-center">
                <i class="fas fa-money-check-alt mr-2 text-primary-custom"></i> INFORMASI BIAYA DAFTAR ULANG
            </h5>
        </div>
        <div class="card-body text-center p-4">
            <img src="Registrasi-PSB.png" alt="Rincian Biaya Daftar Ulang" style="width:100%; max-width:900px; height:auto;" class="mb-3">
            
            <div class="alert alert-info mt-3">
                <i class="fas fa-info-circle mr-2"></i>
                <strong>Informasi:</strong> Semua rincian biaya sudah tertera pada gambar di atas. Untuk pembayaran dan konfirmasi, silakan hubungi admin atau datang langsung ke BDM.
            </div>
            
            <div class="mt-3">
                <a href="Registrasi-PSB.png" target="_blank" class="btn btn-success mr-2">
                    <i class="fas fa-download mr-2"></i> Download Gambar
                </a>
                <a href="https://wa.me/6282219699610" target="_blank" class="btn btn-primary">
                    <i class="fab fa-whatsapp mr-2"></i> Hubungi Admin
                </a>
            </div>
        </div>
    </div>
    
</div>

<?php

include 'footer.php';

} else {
    echo "<script>
            alert('Silahkan Login Terlebih Dahulu!');
            window.location = 'login.php';
        </script>";
}

?>
