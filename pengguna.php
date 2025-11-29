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

<div class="container">    
    <div class="card my-2 o-hidden border-0 shadow-lg">        
        <!-- heading -->
        <h5 class="card-header text-center"><i class="fas fa-user-friends"></i> AKUN TERDAFTAR</h5>
        <div class="card-body container">

            <!-- Tabel daftar pengguna -->
            <table class="table table-bordered wrap" id="dataTable">
                <thead class="thead-light">
                    <tr>
                        <th>NO</th>
                        <th>NO D</th>
                        <th>USER</th>
                        <th>PASSWORD</th>
                         <th>PENDAFTARAN</th>
                         <th>BAYAR </th>
                          <th>BIAYA </th>
                         <th>KONTAK</th>
                          <th>PROSES</th>
                        
                         
                    </tr>
                </thead>
                <tbody>
                    
                <?php 
                
                    //mengambil data dari tabel user 
                    $query = mysqli_query($db, "SELECT * FROM user where alamat <>'-'");
                    $data = mysqli_fetch_array($query);
                   
                    // fungsi cek kolom data tabel
                    if(mysqli_num_rows($query) >0) {
                        $no = 1;
                   
                   
                        // loop semua data tabel user
                        do{
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
                        <td><?=$data['pass'];?></td>
                <?php
                if ($daftars == "BELUM") {
                $color = "red";} else {$color = "black";}
                ?>
                <td><p style="color: <?php echo $color; ?>;"><?php echo $daftars; ?></p></td>
                
                <?php
                if ($tst == "BELUM") {
                 $color = "red";} else {$color = "black";}
							
				
							
                ?>
				
                <td><p style="color: <?php echo $color; ?>;"><?php echo $tst; ?></p></td>                      
               
                        <td><?php echo number_format($jumlah, 0, ',', '.');?></td>
                        <td ><?=$data['telepon']."<br>".
					           " Wali: ".$data['wali'].
					          "<br>"." Anak: ".$data['anak'];?></td>
                        
                       
                <td>
                    
                
                <?php
							
                if ($tst == "BELUM"){
                 ?>
                  <a role="button" name="submit" href="update_daftar.php?id=<?=$data['id'];?>" class="btn mx-2 btn-danger">BATAL</a>
                  
                  <?php
                } else {
    				
    				echo "SUKSES";
				}
				?>             
             
                    
                           
                            
                        </td>        
                    </tr>
                <?php 
                        }while($data = mysqli_fetch_assoc($query));
                    }else{

                        // jika false
                        echo "<tr><td colspan='6'><center>Belum ada data!</center></td></tr>";
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