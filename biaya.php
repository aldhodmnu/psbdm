<?php

//  buka sesi
session_start();

// import koneksi
include 'koneksi.php';

// fungsi set sesi jika true
if(isset($_SESSION['sesi'])){
    $header = "- Biaya Daftar Ulang";
    include 'header.php';
    
    // Ambil data rincian biaya dari database
    $query_biaya = mysqli_query($db, "SELECT * FROM rincian_biaya ORDER BY id");
    $rincian = [];
    $total_biaya = 0;
    while($row = mysqli_fetch_array($query_biaya)) {
        $rincian[] = $row;
        $total_biaya += $row['nominal'];
    }
    
    // Jika belum ada data, set default
    if(empty($rincian)) {
        $rincian = [
            ['nama' => 'Pendaftaran Tes', 'nominal' => 470000],
            ['nama' => 'Medical Check Up', 'nominal' => 400000],
            ['nama' => 'Psikotes & Interview', 'nominal' => 120000],
            ['nama' => 'Admin Bank', 'nominal' => 5000]
        ];
        $total_biaya = 995000;
    }
    
    // Ambil nama file gambar dari database
    $query_gambar = mysqli_query($db, "SELECT * FROM pengaturan WHERE nama='gambar_daftar_ulang' LIMIT 1");
    if(mysqli_num_rows($query_gambar) > 0) {
        $data_gambar = mysqli_fetch_array($query_gambar);
        $nama_gambar = $data_gambar['nilai'];
    } else {
        $nama_gambar = 'Registrasi-PSB.png';
    }

?>

<!-- container -->
<div class="container py-4">
    
    <!-- Form Update Rincian Biaya -->
    <div class="card shadow-lg border-0 mb-4">
        <div class="card-header bg-primary text-white py-3">
            <h5 class="m-0 font-weight-bold">
                <i class="fas fa-calculator mr-2"></i> PENGATURAN RINCIAN BIAYA PENDAFTARAN (ADMIN)
            </h5>
        </div>
        <div class="card-body">
            <form action="proses/update_rincian_biaya.php" method="POST">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th width="50%">Nama Biaya</th>
                                <th width="40%">Nominal (Rp)</th>
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="tabelBiaya">
                            <?php foreach($rincian as $i => $item): ?>
                            <tr>
                                <td><input type="text" name="nama[]" class="form-control" value="<?php echo $item['nama']; ?>" required></td>
                                <td><input type="number" name="nominal[]" class="form-control hitung-total" value="<?php echo $item['nominal']; ?>" required></td>
                                <td><button type="button" class="btn btn-danger btn-sm hapus-baris"><i class="fas fa-trash"></i></button></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3">
                                    <button type="button" class="btn btn-success btn-sm" id="tambahBaris">
                                        <i class="fas fa-plus mr-1"></i> Tambah Baris
                                    </button>
                                </td>
                            </tr>
                            <tr class="table-info">
                                <td class="font-weight-bold">TOTAL BIAYA</td>
                                <td colspan="2" class="font-weight-bold">Rp <span id="totalBiaya"><?php echo number_format($total_biaya, 0, ',', '.'); ?></span></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                
                <div class="alert alert-warning">
                    <i class="fas fa-info-circle mr-2"></i>
                    <strong>Catatan Kode Unik:</strong> Sistem akan otomatis mengganti digit terakhir sesuai jumlah digit ID pendaftar. 
                    Contoh: ID 273 (3 digit) → ganti 3 digit terakhir total biaya dengan 273
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-2"></i> Simpan Rincian Biaya
                </button>
            </form>
        </div>
    </div>
    
    <!-- Form Update Gambar -->
    <div class="card shadow-lg border-0 mb-4">
        <div class="card-header bg-success text-white py-3">
            <h5 class="m-0 font-weight-bold">
                <i class="fas fa-image mr-2"></i> PENGATURAN GAMBAR BIAYA DAFTAR ULANG
            </h5>
        </div>
        <div class="card-body">
            <form action="proses/update_gambar_biaya.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="font-weight-bold">Upload Gambar Biaya Daftar Ulang</label>
                    <input type="file" name="gambar_biaya" class="form-control" accept="image/*" required>
                    <small class="text-muted">Format: JPG, PNG, atau GIF. Max 5MB</small>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-upload mr-2"></i> Upload Gambar Baru
                </button>
            </form>
        </div>
    </div>
    
    <!-- Preview Gambar -->
    <div class="card shadow-lg border-0">
        <div class="card-header bg-white py-3">
            <h5 class="m-0 font-weight-bold text-dark text-center">
                <i class="fas fa-eye mr-2 text-primary-custom"></i> PREVIEW - GAMBAR YANG DILIHAT USER
            </h5>
        </div>
        <div class="card-body text-center p-4">
            <img src="<?php echo $nama_gambar; ?>" alt="Rincian Biaya Daftar Ulang" style="width:100%; max-width:900px; height:auto;" class="mb-3">
            
            <div class="mt-3">
                <a href="<?php echo $nama_gambar; ?>" target="_blank" class="btn btn-success">
                    <i class="fas fa-download mr-2"></i> Download Gambar
                </a>
            </div>
        </div>
    </div>
    
</div>

<script>
// Hitung total otomatis
function hitungTotal() {
    let total = 0;
    document.querySelectorAll('.hitung-total').forEach(input => {
        total += parseInt(input.value) || 0;
    });
    document.getElementById('totalBiaya').textContent = total.toLocaleString('id-ID');
}

// Tambah baris
document.getElementById('tambahBaris').addEventListener('click', function() {
    const tbody = document.getElementById('tabelBiaya');
    const tr = document.createElement('tr');
    tr.innerHTML = `
        <td><input type="text" name="nama[]" class="form-control" placeholder="Nama Biaya" required></td>
        <td><input type="number" name="nominal[]" class="form-control hitung-total" placeholder="0" required></td>
        <td><button type="button" class="btn btn-danger btn-sm hapus-baris"><i class="fas fa-trash"></i></button></td>
    `;
    tbody.appendChild(tr);
    
    tr.querySelector('.hitung-total').addEventListener('input', hitungTotal);
    tr.querySelector('.hapus-baris').addEventListener('click', function() {
        tr.remove();
        hitungTotal();
    });
});

// Hapus baris
document.querySelectorAll('.hapus-baris').forEach(btn => {
    btn.addEventListener('click', function() {
        if(document.querySelectorAll('#tabelBiaya tr').length > 1) {
            this.closest('tr').remove();
            hitungTotal();
        } else {
            alert('Minimal harus ada 1 item biaya!');
        }
    });
});

// Event listener untuk input
document.querySelectorAll('.hitung-total').forEach(input => {
    input.addEventListener('input', hitungTotal);
});
</script>

<?php

include 'footer.php';

} else {
    echo "<script>
            alert('Silahkan Login Terlebih Dahulu!');
            window.location = 'login.php';
        </script>";
}

?>
