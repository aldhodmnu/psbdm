<?php

//  buka sesi
session_start();

// import koneksi
include 'koneksi.php';
include 'koneksidm.php';
date_default_timezone_set("Asia/Bangkok");
$currentDate = date('Y-m-d');
$currentDate2= date('d-M-Y H:i:s');
$angka1 = 995000;

// fungsi set sesi jika true
if(isset($_SESSION['sesi'])){
    $header = "- Biaya";

    // import header
    include 'header.php';
$idlog= $_SESSION['sesi'];
$namasantri = "";
$jk = "";
$jenjang_santri = "";

// Ambil data dari tabel pendaftaran (jika sudah isi formulir)
$query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$_SESSION[sesi]'");
while ($result=mysqli_fetch_array($query)) { 
   $namasantri=$result["nama"];
	 $jk=$result["jenis_kelamin"];
   $jenjang_santri=$result["jenjang"]; 
?>

<!-- container -->
	
					 <div class="card border-0 shadow-lg">       
					<div class="card-header bg-white py-3">
            
			<h5 class="section-title"><i class="fas fa-calculator mr-2"></i>Daftar Biaya Daftar Ulang</h5>
        
        <div class="card-body">

            <!-- Tabel daftar pengguna -->
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>NO</th>
                            <th>ID</th>
                            <th>TINGKAT</th>
                            <th>JK</th>
                            <th>NAMA</th>
                            <th>BIAYA</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        
                  <?php 
                    
                        //mengambil data dari tabel user 
                        $query = mysqli_query($db, "SELECT * FROM biayadu where jk='$jk' and tingkat='$jenjang_santri'");
                       
                        
                      // fungsi cek kolom data tabel
                        if(mysqli_num_rows($query) >0) {
                            $nom = 1;
                        
                       // loop semua data tabel user
                            while($data = mysqli_fetch_assoc($query)){
                                
                                $tingkat=$data['tingkat'];
								$jk=$data['jk'];
								$nama=$data['nama'];
                                $biaya=$data['biaya'];
                               
                           
                    ?>
                    
                        <tr>
                            <td><?=$nom++;?></td>
                            <td><?=$data['no'];?></td>
                            <td><?=$data['tingkat'];?></td>
							<td><?=$data['jk'];?></td>
							<td><?=$data['nama'];?></td>
							<td><?=number_format($biaya, 0, ',', '.');?></td>
							
                              <?php 
                            }
                        }else{
                            // jika false
                            // echo "<tr><td colspan='9'><center>Belum ada data!</center></td></tr>";
                        }
                    ?>
                        </tr>
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