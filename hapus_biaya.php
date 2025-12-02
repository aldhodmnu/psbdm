<?php
//  buka sesi
// import file koneksi.php
include 'koneksi.php';

// inisialisasi variabel id dan status
$id = $_GET['id'];
$status = "Diterima";
   
?>
<?php

// mengubah data status pendaftaran menjadi Tidak Diterima

$query2 = mysqli_query ($db, "DELETE from biayadu WHERE no='$id'");
//  fungsi pengecekan $query 
if($query2){

    // jika berhasil load ke halaman index.php
    echo "<meta http-equiv='refresh' content='0; url=biaya.php'>";
}else{

    // jika gagal tampilkan alert Gagal
    echo "<script type='text/javascript'>
    onload =function(){
        alert('Gagal');
    }
    </script>";
}


?>