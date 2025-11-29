<?php

// session
session_start();

// import koneksi
include 'koneksi.php';

// cek session
if(isset($_SESSION['sesi'])){

        $header = "- Siswa Seleksi";
    
        // import header
        include 'header.php';

?>

<!-- container -->
<div class="container py-4">    
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h4 class="text-dark font-weight-bold mb-0"><i class="fas fa-user-cog mr-2"></i> PESERTA SELEKSI</h4>
        <a href="dashboard.php" class="btn btn-sm btn-secondary"><i class="fas fa-arrow-left mr-1"></i> Kembali</a>
    </div>

    <div class="card border-0 shadow-lg">
        <div class="card-body">
            
            <!-- Tabel data seleksi siswa -->
            <div class="table-responsive">
                <table class="table table-hover table-striped" id="dataTable" width="100%" cellspacing="0">
                    
                    <!-- header tabel -->
                    <thead class="thead-dark">
                        <tr>
                            <th width="5%">NO</th>
                            <th>NIK</th>
                            <th>NAMA LENGKAP</th>
                            <th>ASAL SEKOLAH</th>
                            <th>STATUS BAYAR</th>
                            <th width="10%">AKSI</th>
                        </tr>
                    </thead>

                    <!-- body tabel -->
                    <tbody>
                        
                    <?php  

                        // mengambil data tabel pendaftaran dengan kondisi status Masih Seleksi
                        $query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE status='Masih Seleksi'");
                        
                        // cek kolom dari pendaftaran
                        if(mysqli_num_rows($query) >0) {
                            $no = 1;
                            
                            // loop data tabel pendaftaran kondisi masih seleksi
                            while($data = mysqli_fetch_assoc($query)){

                    ?>
                        <tr>
                            <td align="center"><?=$no++;?></td>
                            <td><?=$data['nik'];?></td>
                            <td class="font-weight-bold"><?=$data['nama'];?></td>
                            <td><?=$data['sekolah_asal'];?></td>
                           
                            <td>
                                <?php if($data['bayardaftar'] == 'LUNAS'): ?>
                                    <span class="badge badge-success px-2 py-1">LUNAS</span>
                                <?php else: ?>
                                    <span class="badge badge-warning px-2 py-1"><?=$data['bayardaftar'];?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="detail.php?id=<?=$data['id'];?>" class="btn btn-sm btn-warning btn-block shadow-sm font-weight-bold">
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