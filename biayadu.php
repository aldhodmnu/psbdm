<?php

//  buka sesi
session_start();
error_reporting(E_ERROR | E_PARSE);
// import koneksi
include 'koneksi.php';
include 'koneksidm.php';
date_default_timezone_set("Asia/Bangkok");
$currentDate = date('Y-m-d');
$currentDate2= date('d-M-Y H:i:s');
$angka1 = 995000;

// fungsi set sesi jika true
//$jumlah = $angka1 + $angka2;
// fungsi set sesi jika true
if(isset($_SESSION['sesi'])){
    $header = "- Biayadu";
    include_once 'header.php';

	
$idlog= $_SESSION['sesi'];
$namasantri = "";
$jka = "";
$jenjang_santri = "";

// Ambil data dari tabel pendaftaran (jika sudah isi formulir)
$query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$_SESSION[sesi]'");
while ($result=mysqli_fetch_array($query)) { 
   $namasantri=$result["nama"];
	 $jka=$result["jenis_kelamin"];
   $jenjang_santri=$result["jenjang"]; 
}

?>

<!-- container -->
	<div class="container py-4">
		
		 <div class="card border-0 shadow-lg">       
			 <div class="card-header bg-white py-3">
				       		 
					<?php 
                    
                        //mengambil data dari tabel user 
                 $querys = mysqli_query($db, "SELECT sum(biaya)as totdu FROM biayadu where jk='$jka' and tingkat='$jenjang_santri'");
                       // loop semua data tabel user
                            while($datas = mysqli_fetch_assoc($querys)){
                                $tbbiaya=$datas['totdu'];
							}
                        ?>
				 
       					 
                							
			
                        <div class="card-body text-center p-4 bg-white rounded">
                            <h6 class="text-uppercase text-muted font-weight-bold mb-2 letter-spacing-1">Total Biaya Daftar Ulang</h6>
							<h8 class="text-uppercase text-muted font-weight-bold mb-2 letter-spacing-1">(data belum valid)</h8>
                            <h1 class="display-4 font-weight-bold text-danger mb-0">
								<td><?=number_format($tbbiaya, 0, ',', '.');?></td>
                                
                            </h1>
                            <div class="badge badge-warning px-3 py-2 mt-3 text-dark font-weight-bold shadow-sm">
                                <i class="fas fa-exclamation-circle mr-1"></i> Untuk Pelunasan Bisa Langsung Ke BDM
                            </div>
                        </div>
                    
			<div class="card border-0 shadow-lg">       
			 <div class="card-header bg-white py-3">
          
			<h5 class="section-title"><i class="fas fa-calculator mr-2"></i>Rincian Biaya Daftar Ulang</h5>
        
        <div class="card-body">

            <!-- Tabel daftar pengguna -->
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>NO</th>
                            
                            <th>TINGKAT</th>
                            <th>JK</th>
                            <th>NAMA</th>
                            <th>BIAYA</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        
                  <?php 
                    
                        //mengambil data dari tabel user 
                        $queryb = mysqli_query($db, "SELECT * FROM biayadu where jk='$jka' and tingkat='$jenjang_santri'");
                       
                        
                      // fungsi cek kolom data tabel
                        if(mysqli_num_rows($queryb) >0) {
                            $nom = 1;
                        
                       // loop semua data tabel user
                            while($data = mysqli_fetch_assoc($queryb)){
                                
                                $tingkat=$data['tingkat'];
								$jk=$data['jk'];
								$nama=$data['nama'];
                                $biaya=$data['biaya'];
                               
							
						
                    ?>
                    
                        <tr>
                            <td><?=$nom++;?></td>
                            
                            <td><?=$tingkat;?></td>
							<td><?=$jk;?></td>
							<td><?=$nama;?></td>
							<td><?=number_format($biaya, 0, ',', '.');?></td>
							 <?php 
                            }
                        }else{
                           
                        }
                    ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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