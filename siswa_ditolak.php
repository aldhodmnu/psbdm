<?php

session_start();
include 'koneksi.php';

// fungsi cek sesi
if(isset($_SESSION['sesi'])){
    $header = "- Siswa Tidak Diterima";
    include 'header.php';

?>


<!-- container -->
<div class="container">    
    <div class="card my-2 o-hidden border-0 shadow-lg">
        <h5 class="card-header text-center"><i class="fas fa-user-times"></i> PESERTA DI TOLAK</h5>
        <div class="card-body container">
            
            <!-- Tabel Siswa Tidak diterima -->
            <table class="table table-bordered wrap" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th>NO</th>
                        <th>NISN</th>
                        <th>NAMA</th>
                        <th>ASAL SEKOLAH</th>
                        <th>STATUS</th>
                        <th>DETAIL</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php  

                    // mengambil data tabel pendaftaran dengan kondisi status Tidak Diterima
                    $query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE status='Tidak Diterima'");
                    $data = mysqli_fetch_array($query);

                    // cek kolom dari pendaftaran
                    if(mysqli_num_rows($query) >0) {
                        $no = 1;
                        
                        // loop data tabel pendaftaran kondisi tidak diterima
                        do{

                ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data['nisn'];?></td>
                        <td><?=$data['nama'];?></td>
                        <td><?=$data['sekolah_asal'];?></td>
                        <td><?=$data['status'];?></td>
                        <td>
                            <a role="button" name="submit" href="detail.php?id=<?=$data['id'];?>" class="btn btn-sm btn-secondary">Detail</a>
                        </td>
                    </tr>
                <?php 
                        }while($data = mysqli_fetch_assoc($query));
                    }else{

                        // jika false
                        echo "<tr><td colspan='7'><center>Belum ada data!</center></td></tr>";
                    }
                ?>
                </tbody>
            </table>
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