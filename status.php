<?php

// sesi
session_start();

// import koneksi.php
include 'koneksi.php';

// fungsi pengecekan sesi
if(isset($_SESSION['sesi'])){

    $header = "- Status";
    // import header.php
    include 'header.php';
    
    $id_siswa = $_SESSION['sesi'];

    $cekusername = mysqli_query($db, "SELECT id FROM pendaftaran WHERE id='$_SESSION[sesi]'");
    if (mysqli_num_rows($cekusername) <> 0)
    { 
        // ambil data tabel pendaftaran
        $query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$_SESSION[sesi]'");
        $data = mysqli_fetch_array($query);
     
        // fungsi konversi tanggal 
        function tanggal_indo($tanggal){
            $bulan = [  'bulan',
                        'Januari',
                        'Februari',
                        'Maret',
                        'April',
                        'Mei',
                        'Juni',
                        'Juli',
                        'Agustus',
                        'September',
                        'Oktober',
                        'November',
                        'Desember'
                    ];

            // memecah tanggal bulan tahun
            $split = explode('-', $tanggal);
            return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
        }
        $query2 = mysqli_query($db, "SELECT * FROM user WHERE id='$_SESSION[sesi]'");
        $data2 = mysqli_fetch_array($query2);   
?>

<script>
    // Track Purchase when user reaches this status page (meaning form is submitted)
    fbq('track', 'Purchase', {
        content_name: 'Pendaftaran Berhasil - Menunggu Pembayaran/Verifikasi',
        currency: 'IDR',
        value: 995000,
        content_type: 'product'
    });
</script>

<style>
    .status-card {
        transition: all 0.3s ease;
    }
    .status-label {
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        color: #6c757d;
        margin-bottom: 0.2rem;
    }
    .status-value {
        font-size: 1.1rem;
        font-weight: 600;
        color: #2d3748;
    }
    .status-badge {
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-weight: bold;
        font-size: 0.9rem;
        display: inline-block;
    }
    .status-success { background-color: #d4edda; color: #155724; }
    .status-warning { background-color: #fff3cd; color: #856404; }
    .status-danger { background-color: #f8d7da; color: #721c24; }
    
    .data-row {
        padding: 12px 0;
        border-bottom: 1px solid #e9ecef;
    }
    .data-row:last-child { border-bottom: none; }
</style>

<!-- Container -->
<div class="container py-4">

    <!-- Navigasi Menu -->
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body p-3">
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a href="index.php" class="btn btn-outline-primary btn-sm">
                    <i class="fas fa-home mr-1"></i> Beranda
                </a>
                <a href="pendaftaran.php" class="btn btn-outline-success btn-sm">
                    <i class="fas fa-edit mr-1"></i> Formulir Pendaftaran
                </a>
                <a href="status.php" class="btn btn-primary btn-sm">
                    <i class="fas fa-clipboard-check mr-1"></i> Status Kelulusan
                </a>
                <a href="biayadu.php" class="btn btn-outline-info btn-sm">
                    <i class="fas fa-money-check-alt mr-1"></i> Biaya Daftar Ulang
                </a>
                <a href="logout.php" class="btn btn-outline-danger btn-sm">
                    <i class="fas fa-sign-out-alt mr-1"></i> Logout
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Left Column: Status & Actions -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-sm border-0 mb-4 text-center">
                <div class="card-body pt-5 pb-4">
                    <img src="dmlogo.png" alt="Logo" style="width:80px;height:80px;" class="mb-3">
                    <h5 class="font-weight-bold text-dark"><?php echo $data['nama']; ?></h5>
                    <p class="text-muted small mb-4">Calon Santri Baru</p>
                    
                    <div class="d-grid gap-2">
                        <a target="_blank" href="cetak_status.php" class="btn btn-primary btn-block mb-2">
                            <i class="fas fa-print mr-2"></i> CETAK BUKTI
                        </a>
                        <a href="index.php" class="btn btn-warning btn-block text-white">
                            <i class="fas fa-money-bill-wave mr-2"></i> INFO PEMBAYARAN
                        </a>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-header bg-white font-weight-bold">
                    <i class="fas fa-info-circle mr-2 text-primary-custom"></i> Status Aplikasi
                </div>
                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
							
                            <div class="status-label">Status Kelulusan</div>
                            <div class="status-value">
                                <?php 
                                    $status = $data['status'];
                                    // Jika status kosong, null, 0, atau -, set default "Masih Seleksi"
                                    if(empty($status) || $status == '0' || $status == '-') {
                                        $status = 'Masih Seleksi';
                                    }
                                    
                                    $badgeClass = 'status-warning';
                                    if(strpos(strtolower($status), 'lulus') !== false || strpos(strtolower($status), 'diterima') !== false) {
                                        $badgeClass = 'status-success';
                                    } elseif(strpos(strtolower($status), 'tidak') !== false || strpos(strtolower($status), 'tolak') !== false) {
                                        $badgeClass = 'status-danger';
                                    }
                                ?>
                                <span class="status-badge <?php echo $badgeClass; ?>"><?php echo $status; ?></span>
                            </div>
                        </div>
                        <div class="list-group-item">
                            <div class="status-label">Pembayaran Pendaftaran</div>
                            <div class="status-value text-primary-custom"><?php echo $data2['bayardaftar']; ?></div>
                        </div>
                        <div class="list-group-item">
                            <div class="status-label">Pembayaran Daftar Ulang</div>
                            <div class="status-value text-primary-custom"><?php echo $data2['bayarulang']; ?></div>
                        </div>
						
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Biodata Detail -->
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-dark">
                        <i class="fas fa-user-check mr-2 text-success"></i> Data Terverifikasi
                    </h6>
                </div>
                <div class="card-body">
                    <div class="data-row row">
                        <div class="col-sm-4 text-muted">Nama Lengkap</div>
                        <div class="col-sm-8 font-weight-bold"><?php echo $data['nama']; ?></div>
                    </div>
                    
                    <div class="data-row row">
                        <div class="col-sm-4 text-muted">NISN</div>
                        <div class="col-sm-8 font-weight-bold"><?php echo $data['nisn']; ?></div>
                    </div>
                    
                    <div class="data-row row">
                        <div class="col-sm-4 text-muted">NIK</div>
                        <div class="col-sm-8 font-weight-bold"><?php echo $data['nik']; ?></div>
                    </div>
                    
                    <div class="data-row row">
                        <div class="col-sm-4 text-muted">Jenis Kelamin</div>
                        <div class="col-sm-8 font-weight-bold">
                            <?php echo ($data['jenis_kelamin'] == 'L') ? 'Laki-laki' : 'Perempuan'; ?>
                        </div>
                    </div>
                    
                    <div class="data-row row">
                        <div class="col-sm-4 text-muted">Tempat, Tanggal Lahir</div>
                        <div class="col-sm-8 font-weight-bold">
                            <?php echo $data['tempat_lahir'] . ", " . tanggal_indo($data['tanggal_lahir']); ?>
                        </div>
                    </div>
                    
                    <div class="data-row row">
                        <div class="col-sm-4 text-muted">Asal Sekolah</div>
                        <div class="col-sm-8 font-weight-bold"><?php echo $data['sekolah_asal']; ?></div>
                    </div>
                    
                    <div class="data-row row">
                        <div class="col-sm-4 text-muted">Alamat</div>
                        <div class="col-sm-8 font-weight-bold"><?php echo $data['alamat']; ?></div>
                    </div>
					
					<div class="data-row row">
						 <div class="col-sm-4 text-muted">Gelombang Pendaftaran</div>
                        <div class="col-sm-8 font-weight-bold"><?php echo $data['gelombang']; ?></div>
                          
                        </div>
                </div>
            </div>
            
            <div class="alert alert-info mt-4 shadow-sm border-0">
                <i class="fas fa-bullhorn mr-2"></i>
                <strong>Catatan:</strong> Jika terdapat kesalahan data, segera hubungi panitia atau admin PSB untuk perbaikan sebelum mencetak bukti pendaftaran.
            </div>
        </div>
    </div>
    
</div>

<?php
    include 'footer.php';
} else {
    echo "<script>
        alert('SILAHKAN ISI FORMULIR PENDAFTARAN DAHULU! ANDA AKAN DI ALIHKAN KE MENU PENDAFTARAN');
        window.location = 'pendaftaran.php';
    </script>";
}
}
?>