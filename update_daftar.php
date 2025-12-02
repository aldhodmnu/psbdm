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

$query2 = mysqli_query ($db, "UPDATE user SET alamat = '-' WHERE id='$id'");
//  fungsi pengecekan $query 
if($query2){

    // jika berhasil load ke halaman index.php
    echo "<meta http-equiv='refresh' content='0; url=pengguna.php'>";
}else{

    // jika gagal tampilkan alert Gagal
    echo "<script type='text/javascript'>
    onload =function(){
        alert('Gagal');
    }
    </script>";
}


?>