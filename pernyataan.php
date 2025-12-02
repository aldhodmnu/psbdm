<?php

// sesi
session_start();

// import koneksi.php
include 'koneksi.php';

// fungsi pengecekan sesi
if(isset($_SESSION['sesi'])){

    
    $header = "- Pernyataan";
    // import header.php
    include 'header.php';
$cekusername = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$_SESSION[sesi]'");
        if (mysqli_num_rows($cekusername) <> 0)
        { 
    // ambil data tabel pendaftaran
    $query = mysqli_query($db, "SELECT * FROM user WHERE id='$_SESSION[sesi]'");
    $data = mysqli_fetch_array($query);
    $queryanak = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$_SESSION[sesi]'");
    $dataanak = mysqli_fetch_array($queryanak);
    // fungsi konversi tanggal 
    function tanggal_indo($tanggal){
    	$bulan = [  'bulan',
                    'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                ];

        // memecah tanggal bulan tahun
        $split = explode('-', $tanggal);
        return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
    }
?>

<!-- Container -->
<div class="container py-3">
<form class="card m-4 p-4 o-hidden border-0 shadow-lg">

        <!-- Card Header -->
        <div class="text-secondary text-center"><img src="dmlogo.png" alt="" style="width:100px;height:100px;"> <p></p></div> 
        <h4 class="m-0 font-weight text-center text-dark">SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK<br>(WALISANTRI/SANTRI) </h4>
       
        
<p></p>
        
        <!-- Card Body -->
        

           
                <div class="row  justify-content-center">
                    <a target="_blank" href="cetak_pernyataan.php" class="btn btn-primary">Cetak</a>      
                </div>
            </div>
 </form>
</div>

                    


<?php

    include 'footer.php';

} else {
    echo "<script>
        alert('SILAHKAN ISI FORMULIR PENDAFTARAN DAHULU! ANDA AKAN DI ALIHKAN KE MENU PENDAFTARAN');
 window.location = 'pendaftaran.php';
       </script>";
}
    
}
?>