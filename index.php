<?php

session_start();
error_reporting(E_ERROR | E_PARSE);
include_once 'koneksi.php';
include 'koneksidm.php';
date_default_timezone_set("Asia/Bangkok");
$currentDate = date('Y-m-d');
$currentDate2= date('d-M-Y H:i:s');
$angka1 = 995000;

//$jumlah = $angka1 + $angka2;
if(isset($_SESSION['sesi'])) {
$angka2 =number_format($_SESSION['sesi']);
    $header = "";
    include_once 'header.php';
// memasukkan data 
//<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="http://103.84.206.51:888/psbdm/images/asrama1.png?size=626&ext=png" alt="...">
//

$idlog= $_SESSION['sesi'];
$query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$_SESSION[sesi]'");
    //$data = mysqli_fetch_array($query); 
    while ($result=mysqli_fetch_array($query))
   { $namasantri=$result["nama"];}    
$query2 = mysqli_query($db, "SELECT * FROM user WHERE id='$_SESSION[sesi]'");
   // $data2 = mysqli_fetch_array($query2);   
     while ($result2=mysqli_fetch_array($query2))
   { $namawali=$result2["wali"];}    
$jumlah = $angka1 + $angka2;
   

        
        $query = mysqli_query($dm, "SELECT gelombang FROM m_semester ");
    $data = mysqli_fetch_array($query);
    $dataGEL = $data['gelombang'];
    //<h3>Laporan Calon Santri GELOMBANG <?php echo $data['gelombang'];
    if ($dataGEL == "PERTAMA") {
        $dataGEL2="1";
    }else if($dataGEL == "KEDUA") 
        {$dataGEL2="2";}
    else if($dataGEL == "KETIGA") 
        {$dataGEL2="3";}
    else if($dataGEL == "KEEMPAT") 
        {$dataGEL2="4";}
        else if($dataGEL == "TERAKHIR") 
        {$dataGEL2="5";}    
   
?>
 
<!-- container -->
<div class="container">
<form class="card m-4 p-4 o-hidden border-0 shadow-lg">
       <p></p><h2 class="text-secondary text-left"><img src="dmlogo.png" alt="" style="width:60;height:60px;"><font size=5>  Assalamu'alaikum, <?php echo $_SESSION['nama'];?></font> &nbsp;&nbsp;&nbsp;&nbsp;      </h2>
    
    
     <div class="text-secondary text-right"><font size=2><i class="fas fa-calendar-alt"></i> &nbsp;<?php echo $currentDate2; ?></font></div> 
    <p> </p>
    
<fieldset>   
   
        <div class="card my-9 o-hidden border-0 shadow-lg">
        <div class="card-header border-0 shadow-lg py-2">
<!-- form login --------------------------------------------------------------------->
    <div class="text-left">
            <h6 class="m-0 font-weight-bold text-dark"><i class="fa fa-check-circle"></i> PROSEDUR PENDAFTARAN SANTRI BARU GELOMBANG <?php echo $data['gelombang'];?></h6>
      </div>      
        </div>
    <div class="card-body">
     <div class="form-row">       
            
<br>
<p>
1. Calon Santri Baru mendaftar/register via online melaui link  
  <?
if($idlog<>1){
?>
<a href="http://103.84.206.51:888/psbdm/login.php" target="_blank"> <font color="green">REGISTER</font></a>
  (1 peserta didik 1 id login, bisa mendaftarkan lebih dari 1 peserta dengan username dan password berbeda saat register).                 
  <?php
                } else {
    // Process form data here
   echo " REGISTER (1 peserta didik 1 id login, bisa mendaftarkan lebih dari 1 peserta dengan username dan password berbeda saat register).";
}
?>
           </p>       
  
    
<p>       
2. Login dengan username dan password saat register kemudian lakukan pengisian data pendaftaran di menu 

<?
if($idlog<>1){
?>
<a href="http://103.84.206.51:888/psbdm/pendaftaran.php" target="_blank"><font color="green"> PENDAFTARAN</font>  </a>
                  <?php
                } else {
    // Process form data here
   echo "PENDAFTARAN";
}
?>
           </p>     
                
                




3. Membayar uang administrasi Pendaftaran sebesar  &nbsp;
        <div class="card shadow mb-2">
        <div class="card-header py-1">
        <b>  <font color="red" size="4" >Rp.<?php echo number_format($jumlah, 0, ',', '.');?></font></b>,- 
        </div>      
        </div> &nbsp; (3 Digit Terakhir no unik untuk pengecekan ) </p>
<br>
 </div> 
       
 <div class="text-left">
            <b>Transfer ke satu di antara No. Rekening berikut:</b> <br>
            <i class="fa fa-institution"></i>
            Bank Mandiri   <b>134-000-680-5815</b> a.n Darul Ma’arif<br>
            <i class="fa fa-institution"></i>
            Bank BRI <b>0165-01-000704-56-7</b> a.n BDM Yayasan Darul Ma’arif<p> </p>
      </div>      
dengan perincian sebagai berikut:
<br>
Pendaftaran Tes : Rp. 470.000,-
Medical Check Up : Rp. 400.000,-
Psikotes &amp; Interview : Rp. 120.000,-
Admin Bank Darul Ma&#8217;arif: Rp. 5.000,-


 </div> 
        
</div> 
 
<!-- form login ---------------------------------------------------------------------> 
<p></p>
        <div class="card my-9 o-hidden border-0 shadow-lg">
        <div class="card-header border-0 shadow-lg py-2">
   <div class="text-secondary text-left">
            <h6 class="m-0 font-weight-bold text-dark"><i class="fa fa-check-circle"></i> KONFIRMASI PEMBAYARAN ADMINISTRASI PENDAFTARAN</h6>
        </div>  
        </div>
    <div class="card-body">
      <div class="text-center">
Selanjutnya bukti pembayaran dikonfirmasikan via WA ke dua nomor berikut:
<br><i class="fab fa-whatsapp"></i>
<b>085314943737</b> a.n Bank Darul Ma’arif
atau 
<i class="fab fa-whatsapp"></i>
<b>0895373630990</b> a.n Jihan Khotun Thohir (Bendahara PSB)
<br>



 
      <br>
        KIRIM KE WA KONFIRMASI:
     <br>
        <div class="card shadow mb-6">
        <div class="card-header py-1">
            <p><b><font color="red">TRANSAKSI 
            /<?php echo $namasantri; ?>
            /<?php echo $namawali;?>
            /<?php echo $currentDate; ?> 
            /<?php echo number_format($jumlah, 0, ',', '.');?>
            /<?php echo $dataGEL2; ?> </font></b> 
            </p>
      
        </div>  
        </div> 

        FORMAT:
        <br> 
     TRANSAKSI/CALONSANTRI/WALI/TANGGALTRANSFER/JUMLAH/GELOMBANG
    
        
   </div>    
   </div> 
 <br>
 </div> 
 <p></p>
 <!-- form login ---------------------------------------------------------------------> 
        <div class="card my-9 o-hidden border-0 shadow-lg">
        <div class="card-header border-0 shadow-lg py-2">
   <div class="text-secondary text-left">
            <h6 class="m-0 font-weight-bold text-dark"><i class="fa fa-check-circle"></i> TES DAN HASIL </h6>
        </div>  </div>
    <div class="card-body">
4. Mengikuti tes Penerimaan Santri Baru sesuai jadwal dengan materi:
<br>
    Tes Psikotes & Interview,
    tes Praktek & Lisan,
    tes Kesehatan,
    tes Kebugaran,
    Medical Check Up
    <br>
<br>
5. Hasil tes calon santri baru dinyatakan Lulus/Tidak Lulus akan diinformasikan panitia atau bisa di lihat pada menu  

<?
if($idlog<>1){
?>
<a href="http://103.84.206.51:888/psbdm/status.php" target="_blank"><font color="green">STATUS</font></a>
                  <?php
                } else {
    // Process form data here
   echo "STATUS";
}
?>
             





</div> 
 </div> 
<p></p>
 <!-- form login ---------------------------------------------------------------------> 
        <div class="card my-9 o-hidden border-0 shadow-lg">
        <div class="card-header border-0 shadow-lg py-2">
   <div class="text-secondary text-left">
            <h6 class="m-0 font-weight-bold text-dark"><i class="fa fa-check-circle"></i> REGISTRASI DAFTAR ULANG </h6>
        </div>  </div>
    <div class="card-body">
6. Apabila dinyatakan Lulus agar segera menyelesaikan pembayaran sesuai ketentuan pada laman <a href="biayadu.php" target="_blank"><font color="green">BIAYA REGISTRASI DAFTAR ULANG</font></a>

<br>
a. Via transfer ke:
<br><i class="fa fa-institution"></i>
Bank Mandiri <b>134-000-680-5815</b> a.n Darul Ma’arif atau
<br><i class="fas fa-university"></i>
Bank BRI <b>0165-01-000704-56-7</b> a.n BDM Yayasan Darul Ma’arif

<br><br>
Selanjutnya dikonfirmasikan via WA ke dua nomor berikut:
<br><i class="fab fa-whatsapp"></i>
<b>085314943737</b> a.n Bank Darul Ma’arif,
<br><i class="fab fa-whatsapp"></i>
<b>0895373630990</b> a.n Jihan Khotun Thohir (Bendahara PSB)
<br><br>
b. Datang langsung ke kantor BDM (Bank Darul Ma’arif)
<br>
Pastikan <b>LUNAS</b> sebelum batas akhir waktu per Gelombangnya agar mendapatkan <b>DISCOUNT</b>.
<br>
<br>
7. Setelah menyelesaikan administrasi, santri masuk ke pesantren sesuai jadwal yang ditentukan kemudian;
<br>
Untuk informasi lebih lanjut, silahkan hubungi narahubung berikut ini:
<br><i class="fab fa-whatsapp"></i>
Admin PSB : <b>082219699610</b>
<br>

</div> 
 </div> 
</fieldset>

   
   <br>
   
       
    </form>
</div>

<?php

include_once 'footer.php';

} else {
    echo "<script>
        alert('Silahkan LOGIN! atau DAFTAR jika belum mempunyai akun');
        window.location = 'login.php';
</script>";
}

?>