<?php

session_start();
include 'koneksi.php';

// fungsi cek sesi
if(isset($_SESSION['sesi'])){
    $header = "- Siswa Tidak Diterima";
    include 'header.php';

?>


<!-- container -->
<div class="container py-4">    
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h4 class="text-dark font-weight-bold mb-0"><i class="fas fa-user-times mr-2"></i> PESERTA DITOLAK</h4>
        <a href="dashboard.php" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left mr-1"></i> Kembali</a>
    </div>

    <div class="card border-0 shadow-lg">
        <div class="card-header bg-white py-3">
            <h6 class="m-0 font-weight-bold text-danger">Data Santri Tidak Lulus Seleksi</h6>
        </div>
        <div class="card-body">
            
            <!-- Tabel Siswa Tidak diterima -->
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-danger">
                        <tr>
                            <th>NO</th>
                            <th>NISN</th>
                            <th>NAMA</th>
                            <th>ASAL SEKOLAH</th>
                            <th>STATUS</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    <?php  

                        // mengambil data tabel pendaftaran dengan kondisi status Tidak Diterima
                        $query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE status='Tidak Diterima'");
                        
                        // cek kolom dari pendaftaran
                        if(mysqli_num_rows($query) >0) {
                            $no = 1;
                            
                            // loop data tabel pendaftaran kondisi tidak diterima
                            while($data = mysqli_fetch_assoc($query)){

                    ?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$data['nisn'];?></td>
                            
							<td class="font-weight-bold"><?=$data['nama'];?><br>
								<small>
								<i class="fas fa-archway mr-1"></i> <?=$data['gelombang'];?><br>
								<i class="fas fa-house-user mr-1"></i> <?=$data['jenjang'];?>
								</small>
                            <td><?=$data['sekolah_asal'];?></td>
                            <td>
                                <span class="badge badge-danger px-2">TIDAK DITERIMA</span>
                            </td>
                            <td>
                                <a href="detail.php?id=<?=$data['id'];?>" class="btn btn-sm btn-secondary shadow-sm">
                                    <i class="fas fa-info-circle mr-1"></i> Detail
                                </a>
                            </td>
                        </tr>
                    <?php 
                            }
                        }else{

                            // jika false
                            // echo "<tr><td colspan='6'><center>Belum ada data!</center></td></tr>";
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