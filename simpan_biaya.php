<?php

// import file koneksi
include 'koneksi.php';

// fungsi ketika tombol register ditekan
if(isset($_POST['submit'])){
    extract($_POST);

    $nama = $_POST['nama'];
    $tingkat = $_POST['tingkat'];
    $jk = $_POST['jk'];
    $biaya = $_POST['biaya'];

    // memasukkan data inputan ke tabel user
    
    $cekusername = mysqli_query($db, "SELECT * FROM biayadu WHERE nama = '$nama' and tingkat = '$tingkat' AND jk = '$jk'");
        if (mysqli_num_rows($cekusername) == 0)
        {   
     
           $query = mysqli_query($db, "INSERT INTO biayadu(tingkat,jk,nama,biaya) VALUE ('$tingkat','$jk','$nama', '$biaya')");

            // fungsi pengecekan $query 
                if($query) {
                    
           echo "<script>alert('SUKSES INPUT DATA BIAYA DAFTAR ULANG')</script>";

            echo "<meta http-equiv='refresh' content='0; url=biaya.php'>";   
        };
    }else{ 
			echo "<script>alert('DATA BIAYA DAFTAR ULANGSUDAH ADA, HAPUS DAHULU')</script>";
			 echo "<meta http-equiv='refresh' content='0; url=biaya.php'>";   
} 
 }

?>
