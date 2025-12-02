<?php

// import file koneksi
include '../koneksi.php';
include '../koneksidm.php';
$SUDAH = "SUDAH";
date_default_timezone_set("Asia/Bangkok");
$currentDate = date('Y-m-d');
$currentDate2= date('d-M-Y H:i:s');

$query = mysqli_query($dm, "SELECT gelombang FROM m_semester ");
$data = mysqli_fetch_array($query);
$dataGEL = $data['gelombang'];

// fungsi ketika tombol Simpan ditekan
if(isset($_POST['simpan'])){
    extract($_POST);

    // menginisialisasi variabel dengan data yang diinputkan
    $id = $_POST['id'];
    $nama = strtoupper ($_POST['nama']);

 $noijasah=$_POST['noijasah'];
 $noskhun=$_POST['noskhun'];
 $nisn=$_POST['nisn'];
 $nik=$_POST['nik'];
 $nokk=$_POST['nokk'];
 $ttl=$_POST['ttl'];
 $ttg =$_POST['ttg'];
 $jk=$_POST['jk'];
 $anak = strtoupper (str_replace("'","",$_POST['anak']));

 $saudara=$_POST['saudara'];
 $penyakit = strtoupper (str_replace("'","",$_POST['penyakit']));

 $nohp =$_POST['nohp'];
 $nowa=$_POST['nowa'];
 $ig=$_POST['ig'];
 $fb =$_POST['fb'];
 $mp =$_POST['mp'];
 $bb =$_POST['bb'];
 $sizeb =$_POST['sizeb'];

$rt  =$_POST['rt'];
 $rw  =$_POST['rw'];
 $dusun = strtoupper (str_replace("'","",$_POST['dusun']));
 $kel  =strtoupper ($_POST['kel']);
 $kec  =strtoupper ($_POST['kec']);
 $kab  =strtoupper ($_POST['kab']);
 $prov  =strtoupper ($_POST['prov']);
 $alamat = strtoupper (str_replace("'","",$_POST['alamat']));
 $exkul  =$_POST['exkul'];
 
 $sekolahasal  =strtoupper ($_POST['sekolahasal']);
 $prestasi  =strtoupper ($_POST['prestasi']);
 $kdpos  =$_POST['kdpos'];
 $jenjang  =strtoupper ($_POST['jenjang']);
 $kesediaan=$_POST['kesediaan'];
 $alasan  =strtoupper ($_POST['alasan']);
 $kaisar  =$_POST['kaisar'];
 $infodari  =strtoupper ($_POST['infodari']);
  $darimana = strtoupper (str_replace("'","",$_POST['darimana']));
	

$ayah = strtoupper (str_replace("'","",$_POST['ayah']));
 $nikayah =$_POST['nikayah'];
 $ttlayah =$_POST['ttlayah'];
 $penayah =$_POST['penayah'];
 $mondokayah =$_POST['mondokayah'];
 $alumayah =$_POST['alumayah'];
 $kerjaayah =$_POST['kerjaayah'];
 $hasilayah =$_POST['hasilayah'];
	
$ibu = strtoupper (str_replace("'","",$_POST['ibu']));	

 $nikibu =$_POST['nikibu'];
 $ttlibu =$_POST['ttlibu'];
 $penibu =$_POST['penibu'];
 $mondokibu =$_POST['mondokibu'];
 $alumibu =$_POST['alumibu'];
 $kerjaibu =$_POST['kerjaibu'];
 $hasilibu =$_POST['hasilibu'];
    
    
    
$cekusername = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id = '$id' ");
        if (mysqli_num_rows($cekusername) == 0)
        {   
    // memasukkan data inputan ke tabel pendaftaran
   // $query = mysqli_query($db, "INSERT INTO pendaftaran(id, nama, nisn, jenis_kelamin, tempat_lahir, tanggal_lahir, asal_sekolah, alamat, status) VALUE ('$id', '$nama', '$nisn', '$kelamin', '$tempat', '$tanggal', '$asal', '$alamat', '$status')");
    
$query = mysqli_query($db,"insert into pendaftaran 
 (id,nama,no_seri_ijazah,no_seri_skhun,nisn,nik,no_kk,tempat_lahir,tanggal_lahir,jenis_kelamin,
 anak_ke,jumlah_saudara,penyakit,no_hp,no_whatsapp,akun_instagram,akun_facebook,masuk_sebagai,berat_tinggi,ukuran_baju,
 rt,rw,dusun,kelurahan,kecamatan,kabupaten,provinsi,alamat,ekstrakurikuler,sekolah_asal,prestasi,kode_pos,jenjang,kesediaan,
 alasan,kaisar,informasi_dari,p_informasi,
 nama_ayah,nik_ayah,tahun_lahir_ayah,pendidikan_ayah,pernah_pondok_ayah,pesantren_ayah,pekerjaan_ayah,penghasilan_ayah,nama_ibu,nik_ibu,tahun_lahir_ibu,pendidikan_ibu,pernah_pondok_ibu,pesantren_ibu,pekerjaan_ibu,penghasilan_ibu,tanggal,gelombang,status) 
 values('$id','$nama','$noijasah','$noskhun','$nisn','$nik','$nokk','$ttl','$ttg','$jk','$anak','$saudara','$penyakit','$nohp','$nowa','$ig','$fb','$mp','$bb','$sizeb','$rt','$rw','$dusun','$kel','$kec','$kab','$prov','$alamat','$exkul',
 '$sekolahasal','$prestasi','$kdpos','$jenjang','$kesediaan','$alasan','$kaisar','$infodari','$darimana',
 '$ayah','$nikayah','$ttlayah','$penayah','$mondokayah','$alumayah','$kerjaayah','$hasilayah','$ibu','$nikibu','$ttlibu','$penibu','$mondokibu','$alumibu','$kerjaibu','$hasilibu','$currentDate2','$dataGEL','Masih Seleksi')");
     // memasukkan data inputan ke tabel pendaftaran
    //$queryuser = mysqli_query($db, "update user set anak='$id' where )");
$query2 = mysqli_query ($db, "UPDATE user SET daftar = '$SUDAH',anak='$nama' WHERE id ='$id'");
 
    
    // fungsi pengecekan $query
    if($query){

        // jika berhasil tampilkan alert berhasil dan load ke halaman status.php
        echo "<script>alert('berhasil')</script>";
        echo "<meta http-equiv='refresh' content='0; url=../status.php'>";
    } else {

        // jika gagal tampilkan alert Gagal
        echo "<script>alert('Gagal')</script>";
    }
}
 else {
        echo "1 ID USER LOGIN UNTUK 1 CALON SANTRI, SILAHKAN REGISTER KEMBALI JIKA INGIN MENDAFTARKAN";
        }

}


?>
