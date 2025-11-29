<?php

// sesi
session_start();

// import koneksi.php
include 'koneksi.php';

// fungsi pengecekan sesi
if(isset($_SESSION['sesi'])){
    // import header.php
    $header = "- Status Siswa";
    include 'header.php';

    // ambil data tabel pendaftaran
    $query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$_SESSION[sesi]'");
    $data = mysqli_fetch_array($query);

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
    
     $query2 = mysqli_query($db, "SELECT * FROM user WHERE id='$_SESSION[sesi]'");
    $data2 = mysqli_fetch_array($query2);  
?>

<!-- Container -->
<div class="container py-3">
    <div class="card">

        <!-- Card Header -->
         <p></p>
                <div class="text-secondary text-center"><img src="dmlogo.png" alt="" style="width:100px;height:100px;"> <p></p></div> 
          <h4 class="text-center" >STATUS PENDAFTARAN</h4>

        <!-- Card Body -->
        <div class="card-body o-hidden border-0 shadow-lg ">

            <!-- Card Data Siswa -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nama Lengkap</h6>
                        </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['nama']; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">NISN</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['nisn']; ?>
                    </div>
                </div>
                <hr>
                 <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">NIK</h6>
                    </div>
                        <div class="col-sm-9 text-secondary">
                        <?php echo $data['nik']; ?>
                        </div>
                 </div> 
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Jenis Kelamin</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['jenis_kelamin']; ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                <div class="col-sm-3">
                        <h6 class="mb-0">Tempat / Tanggal Lahir</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo  $data['tempat_lahir'] .  ", " . tanggal_indo($data['tanggal_lahir']); ?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Asal Sekolah</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <?php echo $data['sekolah_asal']; ?>
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
                        <h6 class="mb-0">Status Pendaftaran</h6>
                    </div>
                    <div class="col-sm-9 text-secondary font-weight-bold">
                        <?php echo $data['status']; ?>
                    </div>
            
                
                    <div class="col-sm-3">
                        <h6 class="mb-0">Status Bayar Pendaftaran</h6>
                    </div>
                    <div class="col-sm-9 text-secondary font-weight-bold">
                        <?php echo $data2['bayardaftar']; ?>
                    </div>
                
                    <div class="col-sm-3">
                        <h6 class="mb-0">Status Bayar Daftar Ulang</h6>
                    </div>
                    <div class="col-sm-9 text-secondary font-weight-bold">
                        <?php echo $data2['bayarulang']; ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
            
            window.print();
        </script>"              


<?php

    include 'footer.php';

} else {
    echo "<script>
            alert('Silahkan Login Terlebih Dahulu!');
            window.location = 'login.php';
        </script>";
}

?>