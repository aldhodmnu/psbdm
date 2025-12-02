<?php

session_start();

include 'koneksi.php';

if(isset($_SESSION['sesi'])) {

    $header = "- Dashboard";
    include_once 'header.php';


    $query_seleksi = mysqli_query($db, "SELECT id FROM pendaftaran WHERE status='Masih Seleksi'");
    $num_seleksi = mysqli_num_rows($query_seleksi);

    $query_diterima = mysqli_query($db, "SELECT id FROM pendaftaran WHERE status='Diterima'");
    $num_diterima = mysqli_num_rows($query_diterima);

    //$query_cadangan = mysqli_query($db, "SELECT id FROM pendaftaran WHERE status='Cadangan'");
    //$num_cadangan = mysqli_num_rows($query_cadangan);

    $query_ditolak = mysqli_query($db, "SELECT id FROM pendaftaran WHERE status='Tidak Diterima'");
    $num_ditolak = mysqli_num_rows($query_ditolak);
//container-fluid px-4
?>

<div class="container py-4">
    
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h4 class="text-dark font-weight-bold"><i class="fas fa-tachometer-alt mr-2 text-primary-custom"></i> Dashboard Admin</h4>
    </div>

    <div class="row">
        <!-- Card Seleksi -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Santri Seleksi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_seleksi ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-clock fa-2x text-gray-300" style="color: #f6c23e;"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0 d-flex align-items-center justify-content-between">
                    <a class="small text-warning font-weight-bold stretched-link" href="siswa_seleksi.php">Lihat Detail</a>
                    <div class="small text-warning"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!-- Card Diterima -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Santri Diterima</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_diterima ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-graduate fa-2x text-gray-300" style="color: #1cc88a;"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0 d-flex align-items-center justify-content-between">
                    <a class="small text-success font-weight-bold stretched-link" href="siswa_diterima.php">Lihat Detail</a>
                    <div class="small text-success"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <!-- Card Ditolak -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Santri Ditolak</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $num_ditolak ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-times fa-2x text-gray-300" style="color: #e74a3b;"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0 d-flex align-items-center justify-content-between">
                    <a class="small text-danger font-weight-bold stretched-link" href="siswa_ditolak.php">Lihat Detail</a>
                    <div class="small text-danger"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        
       
    
    <!-- Quick Actions / Info -->
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3">
                    <h6 class="m-0 font-weight-bold text-primary-custom">Informasi Sistem</h6>
                </div>
                <div class="card-body">
                    <p>Selamat datang di panel admin PSB. Gunakan menu navigasi di atas untuk mengelola data santri, mengunduh laporan, dan pengaturan akun.</p>
                    <a href="download_index_all.php" class="btn btn-primary btn-sm shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Download Rekap Data
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include_once 'foot.php';

} else {
    echo "<script>
        alert('Silahkan Login Terlebih Dahulu!');
        window.location = 'login.php';
    </script>";
};

?>