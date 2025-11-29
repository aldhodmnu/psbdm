<?php

session_start();
include 'koneksi.php';
$angka1 = 995000;
// fungsi cek sesi
if(isset($_SESSION['sesi'])){
    $header = "- Siswa Diterima";
    include 'header.php';

?>

<!-- container -->
<div class="container">    
    
        <div class="card my-2 o-hidden border-0 shadow-lg">
        <h5 class="card-header text-center"><i class="fas fa-user-check"></i> PESERTA DI TERIMA</h5>
        <div class="card-body container o-hidden border-0 shadow-lg">

            <!-- Tabel Siswa Diterima <th>ASAL SEKOLAH</th>--> 
            <table class="table table-bordered wrap" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th>NO</th>
                         <th>NO DAFTAR</th>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>STATUS</th>
                        <th>BAYAR</th>
                        <th>BIAYA </th>
                        
                        <th>DETAIL</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php  

                    // mengambil data tabel pendaftaran dengan kondisi status Diterima
                    $query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE status='Diterima'");
                    $data = mysqli_fetch_array($query);

                    // cek kolom dari pendaftaran
                    if(mysqli_num_rows($query) >0) {
                        $no = 1;
                        
                        // loop data tabel pendaftaran kondisi diterima<td><?=$data['sekolah_asal'];
                        
                        do{
                             $angka2 =number_format($data['id']);
                            $jumlah = $angka1 + $angka2;
                            $tst=$data['bayardaftar'];
                           
                         

                ?>
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=$data['id'];?></td>
                        <td><?=$data['nik'];?></td>
                        <td><?=$data['nama'];?></td>
                        <td><?=$data['status'];?></td>
                        
<?php
if ($tst == "BELUM") {
    $color = "red";} else {$color = "black";}
?>

<td><p style="color: <?php echo $color; ?>;"><?php echo $tst; ?></p></td>
    
    
    

                       
                        <td><?php echo number_format($jumlah, 0, ',', '.');?></td>
                        
                        <td>
                          <a role="button" name="submit" href="detail.php?id=<?=$data['id'];?>" class="btn mx-2 btn-success">Detail</a>   
                            
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