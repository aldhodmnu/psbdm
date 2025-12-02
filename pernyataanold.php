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
    <div class="card">

        <!-- Card Header -->
        <h3 class="card-header text-center">
            SURAT PERNYATAAN TANGGUNG JAWAB MUTLAK<br>(WALISANTRI/SANTRI)
        </h3>

        
        <!-- Card Body -->
        <div class="card-body o-hidden border-0 shadow-lg ">

            <!-- Card Data Siswa -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama Wali</h6>
                        </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['wali']; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Alamat</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['alamat']; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Tempat / Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo  $data['tgllahir'] .  ", " . tanggal_indo($data['tgllahir']); ?>
                    </div>
                </div>
                <hr> 
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Tempat Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['tempatlahir']; ?>
                    </div>
                </div>
                <hr>
                 
                
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama Anak/calon santri</h6>
                        </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $dataanak['nama']; ?>
                    </div>
                     </div>
                 <hr>
                <div class="row  justify-content-center">
                    <a target="_blank" href="cetak_pernyataan.php" class="btn btn-primary">Cetak</a>      
                </div>
            </div>
        </div>
    </div>
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