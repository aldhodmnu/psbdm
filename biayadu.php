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
    
    <!-- Gambar Rincian Biaya Daftar Ulang -->
    <div class="card shadow-lg border-0 mb-4">
        <div class="card-header bg-white py-3">
            <h5 class="m-0 font-weight-bold text-dark text-center">
                <i class="fas fa-money-check-alt mr-2 text-primary-custom"></i> INFORMASI BIAYA DAFTAR ULANG
            </h5>
        </div>
        <div class="card-body text-center p-4">
            <img src="Registrasi-PSB.png" alt="Rincian Biaya Daftar Ulang" style="width:100%; max-width:900px; height:auto;" class="mb-3">
            <div class="mt-3">
                <a href="Registrasi-PSB.png" target="_blank" class="btn btn-success">
                    <i class="fas fa-download mr-2"></i> Download Gambar
                </a>
            </div>
        </div>
    </div>
    
    <!-- Rincian Biaya Detail -->
    <div class="card border-0 shadow-lg">       
        <div class="card-header bg-white py-3">
            <?php 
                //mengambil data dari tabel user 
                $querys = mysqli_query($db, "SELECT sum(biaya)as totdu FROM biayadu where jk='$jka' and tingkat='$jenjang_santri'");
                while($datas = mysqli_fetch_assoc($querys)){
                    $tbbiaya=$datas['totdu'];
                }
            ?>
            
            <div class="card-body text-center p-4 bg-white rounded">
                <h6 class="text-uppercase text-muted font-weight-bold mb-2 letter-spacing-1">Total Biaya Daftar Ulang</h6>
                <p class="text-uppercase text-muted font-weight-bold mb-2 small">(Estimasi - Konfirmasi ke BDM untuk detail final)</p>
                <h1 class="display-4 font-weight-bold text-danger mb-0">
                    Rp <?=number_format($tbbiaya, 0, ',', '.');?>
                </h1>
                <div class="badge badge-warning px-3 py-2 mt-3 text-dark font-weight-bold shadow-sm">
                    <i class="fas fa-exclamation-circle mr-1"></i> Untuk Pelunasan Bisa Langsung Ke BDM
                </div>
                
                <!-- Info Rekening -->
                <div class="row mt-4">
                    <div class="col-md-6 mb-2">
                        <div class="card bg-light border-0">
                            <div class="card-body p-3">
                                <h6 class="font-weight-bold text-dark"><i class="fas fa-university mr-2 text-primary-custom"></i>Bank Mandiri</h6>
                                <div class="h5 mb-0 font-weight-bold text-dark">134-000-680-5815</div>
                                <small class="text-muted">a.n Darul Ma'arif</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="card bg-light border-0">
                            <div class="card-body p-3">
                                <h6 class="font-weight-bold text-dark"><i class="fas fa-university mr-2 text-primary-custom"></i>Bank BRI</h6>
                                <div class="h5 mb-0 font-weight-bold text-dark">0165-01-000704-56-7</div>
                                <small class="text-muted">a.n BDM Yayasan Darul Ma'arif</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Kontak Admin -->
                <div class="mt-3 p-3 bg-light border rounded">
                    <h6 class="font-weight-bold text-dark"><i class="fas fa-headset mr-2"></i>Butuh Bantuan?</h6>
                    <p class="mb-2 small text-muted">Hubungi admin untuk konfirmasi pembayaran:</p>
                    <a href="https://wa.me/6282219699610" target="_blank" class="btn btn-success btn-sm mr-2"><i class="fab fa-whatsapp mr-1"></i> 0822-1969-9610 (Admin PSB)</a>
                    <a href="https://wa.me/6285314943737" target="_blank" class="btn btn-outline-success btn-sm"><i class="fab fa-whatsapp mr-1"></i> 0853-1494-3737 (Bank DM)</a>
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
                                    </tr>
                                    <?php 
                                            }
                                        }
                                    ?>
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
