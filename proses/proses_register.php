<?php

// import file koneksi
include '../koneksi.php';

// fungsi ketika tombol register ditekan
if(isset($_POST['submit'])){
    extract($_POST);

    // mengambil data id tabel user
    $query1 = mysqli_query($db, "SELECT id FROM user");

    // mengecek banyak kolom id
    $data = mysqli_num_rows($query1);

    // mengambil data id dan ditambah 1 dan menginisialisasikannya
    $id_akk = $data+1;

    // menginisialisasi variabel dengan data yang diinputkan
    $id_akun = $id_akk;
    $nama = $_POST['name'];
    $wali = strtoupper (str_replace("'","",$_POST['wali']));
	$anak = strtoupper (str_replace("'","",$_POST['anak']));
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $pass = $_POST['pass'];
    $posisi = "siswa";

    // memasukkan data inputan ke tabel user
    
    $cekusername = mysqli_query($db, "SELECT * FROM user WHERE name = '$nama' and wali = '$wali'");
        if (mysqli_num_rows($cekusername) == 0)
        {   
           $query = mysqli_query($db, "INSERT INTO user(id, name, pass, type,wali,anak,tempatlahir,tgllahir,alamat,telepon) VALUE ('$id_akun','$nama','$pass', '$posisi','$wali','$anak','$tempat','$tanggal','$alamat','$telepon')");

            // fungsi pengecekan $query
                if($query) {
                    
//echo "<script>alert('Register SUKSES. SEGERA LAKUKAN PENGISIAN PENDAFTARAN')</script>";
        
        


// membuat session
    session_start();
    $_SESSION['sesi'] = null;

// import file koneksi
   

// fungsi ketika ditekan tombol login
if (isset($_POST['submit'])) {

    // pengecekan inputan user dan pass login
    $user = isset($_POST['name']) ? addslashes($_POST['name']) : "$nama";
    $pass = isset($_POST['pass']) ? $_POST['pass'] : "$pass";
    $qry = mysqli_query($db, "SELECT * FROM user WHERE name = '$user' and pass = '$pass'");
    $sesi = mysqli_num_rows($qry);

    // pengecekan sesi
    if ($sesi === 1) {
        $data_user = mysqli_fetch_array($qry);
        $_SESSION['id'] = $data_user['id'];

        // pengecekan level akun login
        if($data_user['type'] =="siswa"){
            $_SESSION['sesi'] = $data_user['id'];
            $_SESSION['type'] = "siswa";
            $_SESSION['nama'] = $data_user['name'];

            // jika siswa akan dibawa kehalaman status.php
			echo "<meta http-equiv='refresh' content='0; url=https://psbdm.darulmaarif.net/pendaftaran.php'>";
         
        }else{
            $_SESSION['sesi'] = $data_user['id'];
            $_SESSION['type'] = "admin";
            $_SESSION['nama'] = $data_user['name'];
            
            // jika admin akan dibawa ke halaman dashboard
            echo "<meta http-equiv='refresh' content='0; url=dashboard.php'>";   
        };
    } else {

        // jika salah akan ditampilkan alert gagal
        echo "<meta http-equiv='refresh' content='0; url=login.php'>";
        echo "<script>alert('Maaf, Anda Gagal Log in');</script>";
    }
} else {

    // import file login.php
 //   include 'login.php';
}


        
        
        
        
        
       // echo "<meta http-equiv='refresh' content='0; url=../login.php'>";
    }else{

        // jika gagal tampilkan alert gagal 
        echo "<script>alert('Maaf, anda gagal')</script>";
    }
}
}
?>
