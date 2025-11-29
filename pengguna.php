<?php

//  buka sesi
session_start();

// import koneksi
include 'koneksi.php';
$angka1 = 995000;

// fungsi set sesi jika true
if(isset($_SESSION['sesi'])){
    $header = "- Pengguna";

    // import header
    include 'header.php';

?>

<!-- container -->

<div class="container py-4">    
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h4 class="text-dark font-weight-bold mb-0"><i class="fas fa-users mr-2"></i> KELOLA PENGGUNA</h4>
        <a href="dashboard.php" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left mr-1"></i> Kembali</a>
    </div>

    <div class="card border-0 shadow-lg">        
        <!-- heading -->
        <div class="card-header bg-white py-3">
            <h6 class="m-0 font-weight-bold text-primary-custom">Daftar Akun Terdaftar</h6>
        </div>
        <div class="card-body">

            <!-- Tabel daftar pengguna -->
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>STATUS DAFTAR</th>
                            <th>STATUS BAYAR</th>
                            <th>TOTAL BIAYA</th>
                            <th>KONTAK</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    <?php 
                    
                        //mengambil data dari tabel user 
                        $query = mysqli_query($db, "SELECT * FROM user where alamat <>'-'");
                       
                        // fungsi cek kolom data tabel
                        if(mysqli_num_rows($query) >0) {
                            $no = 1;
                       
                            // loop semua data tabel user
                            while($data = mysqli_fetch_assoc($query)){
                                $angka2 =number_format($data['id']);
                                $jumlah = $angka1 + $angka2;
                                $daftars=$data['daftar'];
                                $tst=$data['bayardaftar'];
                                $noid=$data['id'];
                    ?>
                    
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$data['id'];?></td>
                            <td><?=$data['name'];?></td>
                            <td class="text-muted small"><?=$data['pass'];?></td>
                            
                            <td>
                                <?php if($daftars == "BELUM"): ?>
                                    <span class="badge badge-danger px-2">BELUM</span>
                                <?php else: ?>
                                    <span class="badge badge-success px-2">SUDAH</span>
                                <?php endif; ?>
                            </td>
                            
                            <td>
                                <?php if($tst == "BELUM"): ?>
                                    <span class="badge badge-danger px-2">BELUM</span>
                                <?php else: ?>
                                    <span class="badge badge-success px-2">LUNAS</span>
                                <?php endif; ?>
                            </td>                      
                   
                            <td class="font-weight-bold">Rp. <?php echo number_format($jumlah, 0, ',', '.');?></td>
                            <td>
                                <small>
                                    <i class="fas fa-phone mr-1"></i> <?=$data['telepon'];?><br>
                                    <i class="fas fa-user mr-1"></i> <?=$data['wali'];?><br>
                                    <i class="fas fa-child mr-1"></i> <?=$data['anak'];?>
                                </small>
                            </td>
                            
                            <td>
                                <?php if($tst == "BELUM"): ?>
                                    <a href="update_daftar.php?id=<?=$data['id'];?>" class="btn btn-sm btn-danger shadow-sm" onclick="return confirm('Yakin ingin membatalkan?');">
                                        <i class="fas fa-times mr-1"></i> BATAL
                                    </a>
                                <?php else: ?>
                                    <span class="badge badge-light text-success"><i class="fas fa-check-circle"></i> OK</span>
                                <?php endif; ?>             
                            </td>        
                        </tr>
                    <?php 
                            }
                        }else{
                            // jika false
                            // echo "<tr><td colspan='9'><center>Belum ada data!</center></td></tr>";
                        }
                    ?>
                    </tbody>
                </table>
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