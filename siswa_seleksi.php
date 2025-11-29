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
<div class="container">    
    <div class="card my-2 o-hidden border-0 shadow-lg">

        <!-- heading Data seleksi Siswa -->
        <h5 class="card-header text-center"><i class="fas fa-user-cog"></i> PESERTA SELEKSI</h5>
        <div class="card-body container o-hidden border-0 shadow-lg">
            
            <!-- Tabel data seleksi siswa -->
         
                    
            <table class="table table-bordered wrap" id="dataTable">
                
                <!-- header tabel -->
                <thead class="thead-light">
                    <tr>
                        <th>NO</th>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>ASAL SEKOLAH</th>
						<th>BAYAR PENDAFTARAN</th>
                        <th>DETAIL</th>
                    </tr>
                </thead>

                <!-- body tabel -->
                <tbody>
                    
                <?php  

                    // mengambil data tabel pendaftaran dengan kondisi status Masih Seleksi
                    $query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE status='Masih Seleksi'");
                    $data = mysqli_fetch_array($query);

                    // cek kolom dari pendaftaran
                    if(mysqli_num_rows($query) >0) {
                        $no = 1;
                        
                        // loop data tabel pendaftaran kondisi masih seleksi
                        do{

                ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data['nik'];?></td>
                        <td><?=$data['nama'];?></td>
                        <td><?=$data['sekolah_asal'];?></td>
                       
						<td><?=$data['bayardaftar'];?></td>
                        <td>
              <a role="button" name="submit" href="detail.php?id=<?=$data['id'];?>"  class="btn mx-2 btn-warning">Detail</a>       
                            
                            
                         
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