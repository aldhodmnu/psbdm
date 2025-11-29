<!DOCTYPE html>
<html lang="id">
<!-- Favicon -->
    
    <link rel="icon" type="image/x-icon" href="https://daftar.darulmaarif.net/assets/img/logo.png" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- title -->
    <title>Registrasi Penerimaan Santri Baru</title>

    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="styles/bootstrap/css/bootstrap.min.css">

    <!-- css register -->
    <link rel="stylesheet" href="styles/register.css">
</head>

<body>

<!-- container -->
    
<!-- container -->
<div class="container">
    <form class="card m-4 p-4 o-hidden border-0 shadow-lg" method="post" action="proses/proses_register.php" enctype="multipart/form-data">
        
        <!-- heading -->
        
         <div class="text-secondary text-center"><img src="dmlogo.png" alt="" style="width:100px;height:100px;"> <p></p></div> 
        <div class="text-center">
     
            <h4 class="m-0 font-weight-bold text-center text-dark">FORMULIR PERNYATAAN TANGGUNG JAWAB MUTLAK<br>(WALI/SANTRI) </h4>
        
       
        
        <fieldset>
            <br>
            <div class="text-left">
                
       <div class="card my-9 o-hidden border-0 shadow-lg">
        <div class="card-header border-0 shadow-lg py-1">
            
            
       Dengan ini menyatakan menyerahkan sepenuhnya anak kami kepada Pondok Pesantren Darul Ma’arif,
Kaplongan, Kec. Karangampel, Kab. Indramayu, dengan <b>KOMITMEN</b> dan <b>KESANGGUPAN</b> sebagai
berikut:
<br><br>
1. Menjaga nama baik Yayasan dan Pesantren di segala waktu dan tempat; baik secara lisan, tulisan,
maupun di berbagai media.
<br>
2. Mentaati semua kebijakan, tata tertib, disiplin Pesantren dan Sekolah, serta menerima konsekuensi
dari pelanggaran.
<br>
3. Memenuhi kewajiban administrasi dan lainnya sesuai ketentuan yang berlaku.
<br>
4. Tidak mencampuri manajemen, sistem pendidikan, atau administrasi Yayasan, Pesantren, Sekolah,
Organisasi atau yang terkait.
<br>
5. Membayar semua iuran tepat waktu, dan iuran bulanan paling lambat tanggal 5 setiap bulan.
<br>
6. Berperan sebagai Wali Santri yang proaktif dan melepaskan segala atribut atau jabatan yang dapat
mengganggu disiplin dan nama baik Pesantren.
<br>
7. Menerima tindakan disiplin dari Pesantren, Sekolah, atau Organisasi Santri sesuai tata tertib.
<br>
8. Menyetujui bahwa Santri dapat tidak naik kelas di sekolah, atau dokumen rapor/ijazah ditunda
penyerahannya jika ada tunggakan iuran atau kompetensi pembelajaran yang belum terpenuhi.
<br>
9. Bersedia melakukan pembayaran Pendaftaran, Daftar Ulang serta Biaya lainnya melalui Bank Darul Ma’arif. Dan <b><em><font color="red" size=4>Uang yang sudah kami bayarkan tidak akan kami ambil kembali</font></b></em>.

<br>
<br>
Demikian surat pernyataan ini kami buat dengan sebenar-benarnya tanpa ada paksaan dari pihak manapun dan dapat dipergunakan sebagaimana mestinya.
<br><br>
Saya telah membaca, memahami, dan bersedia mematuhi, melaksankan dan mengikuti semua panduan,
aturan, tata tertib, serta siap menerima konsekuensinya.
Surat ini dibuat dengan penuh kesadaran dan tanggung jawab untuk mendukung kelancaran pendidikan di
Pondok Pesantren Darul Ma’arif, semoga Allah selalu memberikan taufiq dan hidayah-Nya kepada kita semua.
Amin.
 <p></p> <p></p> 
               <br> 
			
		   </div>
               
           </div>
            
			
               </div>
			</fieldset>   
               
       <div class="card my-9 o-hidden border-0 shadow-lg">
        <div class="card-header border-0 shadow-lg py-2">
            
            <h5 class="m-0 font-weight-bold text-dark">
                <i  color="green" class="fas fa-user-circle"></i>  
              WALI SANTRI <font size="1"></font></h5>
        </div>
        <div class="card-body ">
       
       <div class="text-left">
           
           
 <div class="card-header border-0 shadow-lg py-2">
            <input type="number" name="id" value="<?php echo $id_siswa; ?>" hidden>

                <!-- input nama -->
                 <div class="form-row">
                     <div class="form-group col-md-4">
                    <label for="wali" class="form-label">Nama Orang Tua/Wali </label>
                     <input maxlength="40" type="text" class="form-control" name="wali" placeholder="Masukkan Nama Wali"required />
                   
                </div>
                
                
                   
               

                
                <!-- input tempat tanggal lahir -->
               
                    <div class="form-group col-md-4">
                        <label for="tempat" class="form-label">Tempat Lahir Wali</label>
                        <input maxlength="25" type="text" class="form-control" name="tempat" placeholder="Masukkan Kota Lahir Wali"required />
                    </div>
					 
					   <div class="form-group col-md-4">
                    <label for="anak" class="form-label">Nama Calon Santri </label>
                     <input maxlength="40" type="text" class="form-control" name="anak" placeholder="Masukkan Nama anak"required />
                   </div>
					 
                    <div class="form-group col-md-4">
                        <label for="tanggal" class="form-label">Tanggal Lahir Wali</label>
                        <input type="date" class="form-control" name="tanggal"required />
                    </div>
					 
					  <div class="form-group col-md-8">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input maxlength="200" type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Lengkap" required />
                </div>
					 
                </div>



                <!-- input alamat -->
                
                <div class="form-row">                <!-- input Asal Sekolah -->
                <div class="form-group col-md-4">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="text" class="form-control" name="telepon" placeholder="Masukkan no telepon" required />
                </div>
                
                <!-- input nama -->
                 
                 <div class="form-group col-md-4">
                    <label for="name" class="form-label">Nama user login </label>
                    <input maxlength="25" type="text" class="form-control form-control-user" id="name" name="name"
                                placeholder="Nama User"required />
                   
                </div>
                <!-- password -->
                <div class="form-group col-md-4">
                    <label for="pass" class="form-label">password login</label>
                            <input maxlength="25" type="password" class="form-control form-control-user" id="pass" name="pass"
                                placeholder="Password" required />
                        </div>
                           
			</div>
               
            </div>        
       
     </form>
     
     </div>
    
                </div>
                
            
            
                    <!-- tombol submit   <div class="mb-3 text-center d-grid gap-md-2 mx-auto">  </div> -->
              
            <div class="text-center">
        <button type="submit" class="btn btn-success btn-user" name="submit">SETUJU</button>
        <br><p class=" text-center "><font size="1">Setelah menyetujui FORMULIR PERNYATAAN TANGGUNG JAWAB MUTLAK WALI/SANTRI. Bpk/Ibu akan di alihkan ke pengisian FORMULIR PENDAFTARAN santri baru.      </font></p>               
        </div>
       
        
         </div>                    
                     

                                                    <!-- login -->
                        <p class=" text-center ">Sudah punya akun? <a class="text-decoration-none" href="login.php">Login</a></p>
        

    
    
    
<?php

include 'footer.php';

?>
