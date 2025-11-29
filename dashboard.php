<?php

session_start();

include 'koneksi.php';

if(isset($_SESSION['sesi'])) {

    $header = "- Dashboard";
    include_once 'header.php';


    $query_seleksi = mysqli_query($db, "SELECT id FROM pendaftaran WHERE status='Masih Seleksi'");
    $num_seleksi = mysqli_num_rows($query_seleksi);

    $query_diterima = mysqli_query($db, "SELECT id FROM pendaftaran WHERE status='Diterima'");
    $num_diterima = mysqli_num_rows($query_diterima);

    $query_cadangan = mysqli_query($db, "SELECT id FROM pendaftaran WHERE status='Cadangan'");
    $num_cadangan = mysqli_num_rows($query_cadangan);

    $query_ditolak = mysqli_query($db, "SELECT id FROM pendaftaran WHERE status='Tidak Diterima'");
    $num_ditolak = mysqli_num_rows($query_ditolak);
//container-fluid px-4
?>


  <div class="container-fluid px-4" >  
   <br>
    <div class="row ">
        <div class="col-xl-3 col-md-6 ">
            <div class="card  text-white mb-4 border-0 shadow-lg" style="background-color: #e3e5e6">
                <div class="card-body font-weight-bolder d-flex align-items-center justify-content-between">
                    <div><font color="black">Santri Seleksi</font> </div>
                    <div><font color="black"><?php echo $num_seleksi ?></font> </div>
                    <div><i class="fas fa-user-edit fa-2x" color="black"></i></div>
                </div>
                <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link"  href="siswa_seleksi.php">
						<font color="#1d1e1f">Lihat Detail</font></a>
                    <div class="small text-black" ><i class="fas fa-angle-right" ></i></div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6">
			<div class="card  text-white mb-4 border-0 shadow-lg" style="background-color: #e3e5e6">
                <div class="card-body font-weight-bolder d-flex align-items-center justify-content-between">
                    <div><font color="#116646">Santri Diterima</font> </div>
                    <div><font color="#116646"><?php echo $num_diterima ?></font> </div>
                    <div><i class="fas fa-user-graduate fa-2x" color="#116646"></i></div>
                </div>
                <div class="card-footer border-0 d-flex align-items-center justify-content-between" >
                    <a class="small stretched-link" href="siswa_diterima.php">
							<font color="#116646">Lihat Detail</font></a> 
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
			<div class="card  text-white mb-4 border-0 shadow-lg" style="background-color: #e3e5e6">
                <div class="card-body font-weight-bolder d-flex align-items-center justify-content-between">
                    <div><font color="#9c0514">Santri Ditolak</font> </div>
                    <div><font color="#9c0514"><?php echo $num_ditolak ?></font> </div>
				
                    <div><i class="fas fa-user-times fa-2x" color="#9c0514"></i></div>
                </div>
                <div class="card-footer border-0 d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="siswa_ditolak.php">
						<font color="#9c0514">Lihat Detail</font></a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include_once 'foot.php';

} else {
    echo "<script>
        alert('Silahkan Login Terlebih Dahulu!');
        window.location = 'login.php';
    </script>";
};

?>