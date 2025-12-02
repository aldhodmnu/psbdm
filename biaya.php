<?php

//  buka sesi
session_start();

// import koneksi
include 'koneksi.php';

// fungsi set sesi jika true
if(isset($_SESSION['sesi'])){
    $header = "- Biaya Daftar Ulang";
    include 'header.php';
    
    // Ambil data biaya dari database
    $query_biaya = mysqli_query($db, "SELECT * FROM pengaturan WHERE nama='biaya_pendaftaran' LIMIT 1");
    if(mysqli_num_rows($query_biaya) > 0) {
        $data_biaya = mysqli_fetch_array($query_biaya);
        $biaya_pendaftaran = $data_biaya['nilai'];
    } else {
        $biaya_pendaftaran = 995000; // default
    }
    
    // Ambil nama file gambar dari database
    $query_gambar = mysqli_query($db, "SELECT * FROM pengaturan WHERE nama='gambar_daftar_ulang' LIMIT 1");
    if(mysqli_num_rows($query_gambar) > 0) {
        $data_gambar = mysqli_fetch_array($query_gambar);
        $nama_gambar = $data_gambar['nilai'];
    } else {
        $nama_gambar = 'Registrasi-PSB.png'; // default
    }

?>

<!-- container -->
<div class="container py-4">
    
    <!-- Form Update untuk Admin -->
    <div class="card shadow-lg border-0 mb-4">
        <div class="card-header bg-primary text-white py-3">
            <h5 class="m-0 font-weight-bold">
                <i class="fas fa-cog mr-2"></i> PENGATURAN BIAYA (ADMIN)
            </h5>
        </div>
        <div class="card-body">
            <form action="proses/update_biaya_gambar.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Biaya Pendaftaran (Rp)</label>
                        <input type="number" name="biaya_pendaftaran" class="form-control" value="<?php echo $biaya_pendaftaran; ?>" required>
                        <small class="text-muted">Biaya ini akan ditambah kode unik ID pendaftar</small>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="font-weight-bold">Upload Gambar Biaya Daftar Ulang</label>
                        <input type="file" name="gambar_biaya" class="form-control" accept="image/*">
                        <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar</small>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save mr-2"></i> Simpan Perubahan
                </button>
            </form>
        </div>
    </div>
    
    <!-- Preview Gambar Biaya Daftar Ulang -->
    <div class="card shadow-lg border-0">
        <div class="card-header bg-white py-3">
            <h5 class="m-0 font-weight-bold text-dark text-center">
                <i class="fas fa-money-check-alt mr-2 text-primary-custom"></i> PREVIEW - INFORMASI BIAYA DAFTAR ULANG
            </h5>
        </div>
        <div class="card-body text-center p-4">
            <img src="<?php echo $nama_gambar; ?>" alt="Rincian Biaya Daftar Ulang" style="width:100%; max-width:900px; height:auto;" class="mb-3">
            
            <div class="alert alert-info mt-3">
                <i class="fas fa-info-circle mr-2"></i>
                <strong>Informasi:</strong> Gambar ini yang akan dilihat oleh calon santri. Biaya pendaftaran saat ini: <strong>Rp <?php echo number_format($biaya_pendaftaran, 0, ',', '.'); ?></strong>
            </div>
            
            <div class="mt-3">
                <a href="<?php echo $nama_gambar; ?>" target="_blank" class="btn btn-success">
                    <i class="fas fa-download mr-2"></i> Download Gambar
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
