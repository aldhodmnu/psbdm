<?php

session_start();
// import koneksi.php
include 'koneksi.php';  
$currentDate = date('Y-m-d');
$currentDate2= date('d-M-Y H:i:s');

if(isset($_SESSION['sesi'])){

$header = "- Pendaftaran";

// import header
include 'headernew.php';

$id_siswa = $_SESSION['sesi'];
$cekusername = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$_SESSION[sesi]'");
        if (mysqli_num_rows($cekusername) == 0)
        { 
?>

<!-- container -->
<div class="container">
    <form class="card m-4 p-4 o-hidden border-0 shadow-lg" method="post" action="proses/proses_pendaftaran.php" enctype="multipart/form-data">
        
        <!-- heading -->
        
        
         <div class="text-secondary text-center"><img src="dmlogo.png" alt="" style="width:100px;height:100px;"> <p></p></div> 
         <h4 class="m-0 font-weight text-center text-dark">FORMULIR PENDAFTARAN SANTRI BARU </h4>
        
        
        <p></p>
        <fieldset>
          
           

            <input type="number" name="id" value="<?php echo $id_siswa; ?>" hidden>
            
            <div class="card my-9 o-hidden border-0 shadow-lg">
            <div class="card-header border-0 shadow-lg py-2">
            <h5 class="m-0 font-weight-bold text-dark">
            <i color="green" class="fas fa-book-reader"></i>    
            
            CALON SANTRI </h5>

        </div>
        <div class="card-body">
                <!-- input nama -->
        <div class="form-row">
                     <div class="form-group col-md-3">
                    <label for="name" class="form-label">NAMA LENGKAP</label>
                    <input maxlength="40" type="text" class="form-control" name="nama" placeholder="" required />
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="noijasah" class="form-label">NO SERI IJAZAH</label>
                    <input maxlength="10" type="number" class="form-control" name="noijasah" placeholder="" required />
                     </div>
                    <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="noskhun" class="form-label">NO SERI SKHUN</label>
                    <input maxlength="25" type="number" class="form-control" name="noskhun" placeholder="" required />
                     </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input maxlength="25" type="number" class="form-control" name="nisn" placeholder="" required />
                    </div>
        </div>
        
        
                 <!-- input nama -->
        <div class="form-row">
                     <div class="form-group col-md-3">
                    <label for="nik" class="form-label">NIK <font color="green" size="0.5" >WAJIB DI ISI </font></label>
                    <input maxlength="25" type="number" class="form-control" name="nik" placeholder="" required />
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="nokk" class="form-label">NOMOR KK</label>
                    <input maxlength="25" type="number" class="form-control" name="nokk" placeholder="" required />
                     </div>
                <!-- input tempat tanggal lahir -->
                
                    <div class="form-group col-md-3">
                        <label for="ttl" class="form-label">TEMPAT LAHIR</label>
                        <input maxlength="60" type="text" class="form-control" name="ttl" placeholder="" required />
                    </div>
                    <div class="form-group col-md-3">
                        <label for="ttg" class="form-label">TANGGAL LAHIR</label>
                        <input type="date" class="form-control" name="ttg">
                    </div>
        </div>
        
        
          
                 <!-- input  jenis kelamin -->
        <div class="form-row">
                     <div class="form-group col-md-3">
                    <label for="jk" class="form-label">JENIS KELAMIN</label>
                    <select id="jk" name="jk" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="L"selected>Laki laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="anak" class="form-label">ANAK KE</label>
                    <input maxlength="2" type="number" class="form-control" name="anak" placeholder="" required />
                     </div>
                <!-- input tempat tanggal lahir -->
                
                    <div class="form-group col-md-3">
                        <label for="saudara" class="form-label">JUMLAH SAUDARA</label>
                        <input maxlength="20" type="number" class="form-control" name="saudara" placeholder="" required />
                    </div>
                    <div class="form-group col-md-3">
                        <label for="penyakit" class="form-label">Penyakit yang pernah diderita</label>
                        <input maxlength="120" type="text" class="form-control" name="penyakit" placeholder="" required />
                    </div>
        </div>
        
        
                   <!-- input nama -->
        <div class="form-row">
                     <div class="form-group col-md-3">
                    <label for="nohp" class="form-label">NO HP Wali/Ortu</label>
                    <input maxlength="13" type="number" class="form-control" name="nohp" placeholder="" required />
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="nowa" class="form-label">NO WHATSAPP Wali/Ortu</label>
                    <input maxlength="13" type="number" class="form-control" name="nowa" placeholder="" required />
                     </div>
                    <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="ig" class="form-label">Instagram Wali/Ortu</label>
                   <input maxlength="100" type="text" class="form-control" name="ig" placeholder="" required />
                     </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="fb" class="form-label">Facebook Wali/Ortu</label>
                    <input maxlength="100" type="text" class="form-control" name="fb" placeholder="" required />
                    </div>
        </div>
        
        
           
                 <!-- input  jenis kelamin -->
        <div class="form-row">
                     <div class="form-group col-md-4">
                    <label for="mp" class="form-label">Masuk Pesantren ini sebagai</label>
                    <select id="mp" name="mp" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="SB" selected>SANTRI BARU</option>
                        <option value="SP" >SANTRI PINDAHAN</option>
                        
                    </select>
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-4">
                    <label for="bb" class="form-label">BERAT / TINGGI BADAN</label>
                    <input maxlength="25" type="text" class="form-control" name="bb" placeholder="" required />
                     </div>
                <!-- input tempat tanggal lahir -->
                
                    <div class="form-group col-md-4">
                    <label for="sizeb" class="form-label">UKURAN BAJU</label>
                    <select id="sizeb" name="sizeb" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="M" selected>M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    </select>
                    </div>
                    
        </div>
        
            </div>        
        </fieldset>
        
        <p></p>
<!-- MINAT -------------------------------------------------------------------------------------------------------------------->
          </fieldset>
              <div class="card my-9 o-hidden border-0 shadow-lg">
               <div class="card-header border-0 shadow-lg py-2">
                <h5 class="m-0 font-weight-bold text-dark">
                    <i color="green" class="fas fa-award"></i>    
                    KESEDIAAN | MINAT</h5>
                </div>
                <div class="card-body">
    
                   <!-- input nama -->
        <div class="form-row">
                     <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="exkul" class="form-label">MINAT EKSTRAKULIKULER </label>
                    <select id="exkul" name="exkul" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="PRAMUKA"selected>PRAMUKA</option>
                         <option value="PASKIBRA">PASKIBRA</option>
                        <option value="PMR">PMR</option>
                         <option value="DESIGN">DESIGN GRAFIK</option>
                         <option value="TIK">TIK</option>
                        <option value="ROBOTIK">ROBOTIK</option>
                         <option value="KEAGAMAAN">KEAGAMAAN</option>
                         <option value="TARI">TARI</option>
                        <option value="TEATER">TEATER</option>
                         <option value="BASKET">BASKET</option>
                         <option value="FUTSAL">FUTSAL</option>
                        <option value="BULUTANGKIS">BULU TANGKIS</option>
                         <option value="VOLI">VOLI</option>
                        <option value="TENISMEJA">TENIS MEJA</option>
                        <option value="JURNALIS">JURNALIS</option>
                         <option value="OLAHRAGA">OLAHRAGA</option>

                        <option value="TAMYIZ">TAMYIZ</option>
                         <option value="QORI">QORI</option>
                        <option value="QIROATULKUTUB">QIROATUL KUTUB</option>
                        <option value="HADROH">HADROH</option>
                         <option value="KALIGRAFI">KALIGRAFI</option>
                                                
                       
                    </select>
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="prestasi" class="form-label">PRESTASI YANG PERNAH DI RAIH</label>
                    <input maxlength="125" type="text" class="form-control" name="prestasi" placeholder="" required />
                     </div>
                    <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="sekolahasal" class="form-label">SEKOLAH ASAL</label>
                   <input maxlength="125" type="text" class="form-control" name="sekolahasal" placeholder="" required />
                     </div>
                <!-- input nisn -->
                      <div class="form-group col-md-3">
                    <label for="jenjang" class="form-label">MENDAFTAR PADA JENJANG </label>
                    <select id="jenjang" name="jenjang" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        
                        <option value="SMP"selected>SMP NU</option>
                         <option value="SMA">SMA NU</option>
                                                
                       
                    </select>
                    </div>
        </div>
        
         <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="kesediaan" class="form-label">KESEDIAAN MESANTREN  </label>
                    <select id="kesediaan" name="kesediaan" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        
                        <option value="3"selected>3 TAHUN</option>
                         <option value="6">6 TAHUN</option>
                                                
                       
                    </select>
                    </div>
                <!-- input nisn -->
                   <div class="form-group col-md-3">
                    <label for="alasan" class="form-label">ALASAN MEMILIH PESANTREN </label>
                    <select id="alasan" name="alasan" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        
                        <option value="SENDIRI"selected>Keinginan Sendiri </option>
                         <option value="ORTU">Keinginan Orang tua</option>
                                                
                       
                    </select>
                    </div>
                    <!-- input nisn -->
                       <div class="form-group col-md-3">
                    <label for="kaisar" class="form-label">PERNAH IKUT LOMBA KAISAR? </label>
                    <select id="kaisar" name="kaisar" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                         <option value="TIDAK"selected>TIDAK PERNAH </option>
                         <option value="PERNAH">PERNAH TAPI TIDAK JUARA</option>
                        <option value="SMPJUARA">SMP JADI JUARA </option>
                         <option value="SMAJUARA">SMA JADI JUARA </option>
                                                
                       
                    </select>
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="infodari" class="form-label">MEMPEROLEH INFORMASI DARI</label>
                    <select id="infodari" name="infodari" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="Youtube">Youtube</option>
                         <option value="Facebook">Facebook</option>
                        <option value="Instagram">Instagram</option>
                         <option value="Website">Website</option>
                         <option value="Tiktok">Tiktok</option>
                        <option value="Teman">Teman</option>
                         <option value="Guru">Guru</option>
                         <option value="Tetangga">Tetangga</option>
                        <option value="Keluarga"selected>Keluarga</option>
                    </select>
                    </div>
                    

        </div>
                <!-- input Asal Sekolah -->
                <div class="mb-3">
                    <label for="darimana" class="form-label">Tuliskan nama jika informasi dari "Teman, Guru, Tetangga atau Keluarga"</label>
                    <input maxlength="100" type="text" class="form-control" name="darimana" placeholder="" required />
                </div>
      
        
            </div>      </div>        
        </fieldset>
        <p></p> 
        
        
        
<!-- ALAMAT/DOMISILI -------------------------------------------------------------------------------------------------------------------------------->
          </fieldset>
               <div class="card my-9 o-hidden border-0 shadow-lg">
               <div class="card-header border-0 shadow-lg py-2">
                    
                <h5 class="m-0 font-weight-bold text-dark">
                    <i  color="green" class="fas fa-address-book"></i>    ALAMAT | DOMISILI</h5>
                </div>
                <div class="card-body">
    
                   <!-- input nama -->
        <div class="form-row">
                     <div class="form-group col-md-3">
                    <label for="rt" class="form-label">RT</label>
                    <input maxlength="4" type="number" class="form-control" name="rt" placeholder="" required />
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="rw" class="form-label">RW</label>
                    <input maxlength="4" type="number" class="form-control" name="rw" placeholder="" required />
                     </div>
                    <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="dusun" class="form-label">BLOK/DUSUN</label>
                    <input maxlength="50" type="text" class="form-control" name="dusun" placeholder="" required />
                     </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="kel" class="form-label">DESA/KELURAHAN</label>
                   <input maxlength="50" type="text" class="form-control" name="kel" placeholder="" required />
                    </div>
        </div>
        
         <div class="form-row">
                     <div class="form-group col-md-3">
                    <label for="kec" class="form-label">KECAMATAN</label>
                    <input maxlength="50" type="text" class="form-control" name="kec" placeholder="" required />
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="kab" class="form-label">KABUPATEN</label>
                    <input maxlength="50" type="text" class="form-control" name="kab" placeholder="" required />
                     </div>
                    <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="prov" class="form-label">PROPINSI</label>
                    <input maxlength="50" type="text" class="form-control" name="prov" placeholder="" required />
                     </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="kdpos" class="form-label">KODEPOS</label>
                    <input maxlength="6" type="number" class="form-control" name="kdpos" placeholder="" required />
                    </div>
                    

        </div>
                <!-- input alamat -->
                <div class="mb-3">
                    <label for="alamat" class="form-label">ALAMAT LENGKAP</label>
                    <input maxlength="200" type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Lengkap" required />
                </div>
      
        
            </div>      </div>        
        </fieldset>
        <p></p>
     
<!-- AYAH -------------------------------------------------------------------------------------------------------------------------------->
         <fieldset>
              <div class="card my-9 o-hidden border-0 shadow-lg">
                <div class="card-header border-0 shadow-lg py-2">
                <h5 class="m-0 font-weight-bold text-dark">
                     <i  color="green" class="fas fa-user-edit"></i>  
                    WALI | AYAH</h5>
                </div>
                <div class="card-body">
    
                   <!-- input nama -->
        <div class="form-row">
                     <div class="form-group col-md-3">
                    <label for="ayah" class="form-label">NAMA LENGKAP </label>
                    <input maxlength="40" type="text" class="form-control" name="ayah" placeholder="" required />
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="nikayah" class="form-label">NIK</label>
                    <input maxlength="15" type="number" class="form-control" name="nikayah" placeholder="" required />
                     </div>
                    <!-- input nisn -->
                    <div class="form-group col-md-3">
                    <label for="ttlayah" class="form-label">TAHUN LAHIR</label>
                    <input type="number" class="form-control" name="ttlayah" placeholder="" required />
                     </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="penayah" class="form-label">PENDIDIKAN TERAKHIR </label>
                    <select id="penayah" name="penayah" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="SD">SD</option>
                        <option value="SLTP">SLTP/SMP</option>
                        <option value="SLTA">SLTA/SMA</option>
                        <option value="D3">D3</option>
                         <option value="S1"selected>S1</option>
                        <option value="S2">S2</option>
                         <option value="S3">S3</option>
                       
                    </select>
                    </div>
                    
        </div>
        
        
        
                     <!-- input nama -->
        <div class="form-row">
            <div class="form-group col-md-3">
                      <label for="mondokayah" class="form-label">PERNAH MONDOK?</label>
                    <select id="mondokayah" name="mondokayah" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="Y">YA</option>
                        <option value="T"selected>TIDAK</option>
                    </select>
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="alumayah" class="form-label">ALUMNI PONTREN ?</label>
                    <input maxlength="100" type="text" class="form-control" name="alumayah" placeholder="" required />
                     </div>
                    <!-- input nisn -->
                    <div class="form-group col-md-3">
                    <label for="kerjaayah" class="form-label">PEKERJAAN  </label>
                    <select id="kerjaayah" name="kerjaayah" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="PNS">PNS</option>
                        <option value="GURU">GURU</option>
                        <option value="POLRI">POLRI</option>
                        <option value="TNI">TNI</option>
                         <option value="DOKTER">DOKTER</option>
                        <option value="PERAWAT">PERAWAT</option>
                         <option value="PEDAGANG">PEDAGANG</option>
                          <option value="KARYAWAN">KARYAWAN</option>
                        <option value="PETANI">PETANI</option>
                         <option value="WIRASWASTA"selected>WIRASWASTA</option>
                         <option value="Pensiunan/ALM">Pensiunan atau Almarhum</option>
                        
                       
                    </select>
                    </div>
                <!-- input nisn -->
                      <div class="form-group col-md-3">
                    <label for="hasilayah" class="form-label">PENGHASILAN PERBULAN  </label>
                    <select id="hasilayah" name="hasilayah" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="<3.000.000">Kurang dari Rp. 3.000.000</option>
                             <option value="<5.000.000"selected>Kurang dari Rp. 5.000.000 </option>
                         <option value=">7.000.000">Lebih dari Rp. 7.000.000</option>


                       
                    </select>
                    </div>
        </div>
        
            </div>        
        </fieldset>
        
        
        <p></p>
<!-- IBU -------------------------------------------------------------------------------------------------------------------------------->
          </fieldset>
               <div class="card my-9 o-hidden border-0 shadow-lg">
               <div class="card-header border-0 shadow-lg py-2">
                <h5 class="m-0 font-weight-bold text-dark">
                    <i  color="green" class="fas fa-user-edit"></i>  
                    WALI | IBU</h5>
                </div>
                <div class="card-body">
    
                   <!-- input nama -->
        <div class="form-row">
                     <div class="form-group col-md-3">
                    <label for="ibu" class="form-label">NAMA LENGKAP</label>
                    <input maxlength="50" type="text" class="form-control" name="ibu" placeholder="" required />
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="nikibu" class="form-label">NIK</label>
                    <input maxlength="15" type="number" class="form-control" name="nikibu" placeholder="" required />
                     </div>
                    <!-- input nisn -->
                    <div class="form-group col-md-3">
                    <label for="ttlibu" class="form-label">TAHUN LAHIR </label>
                    <input type="number" class="form-control" name="ttlibu" placeholder="" required />
                     </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="penibu" class="form-label">PENDIDIKAN TERAKHIR  </label>
                    <select id="penibu" name="penibu" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="SD">SD</option>
                        <option value="SLTP">SLTP/SMP</option>
                        <option value="SLTA">SLTA/SMA</option>
                        <option value="D3">D3</option>
                         <option value="S1"selected>S1</option>
                        <option value="S2">S2</option>
                         <option value="S3">S3</option>
                       
                    </select>
                    </div>
                    
        </div>
        
        
        
                     <!-- input nama -->
        <div class="form-row">
            <div class="form-group col-md-3">
                      <label for="mondokibu" class="form-label">PERNAH MONDOK?</label>
                    <select id="mondokibu" name="mondokibu" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="Y">YA</option>
                        <option value="T"selected>TIDAK</option>
                    </select>
                    </div>
                <!-- input nisn -->
                     <div class="form-group col-md-3">
                    <label for="alumibu" class="form-label">ALUMNI PONTREN?</label>
                    <input maxlength="100" type="text" class="form-control" name="alumibu" placeholder="" required />
                     </div>
                    <!-- input nisn -->
                    <div class="form-group col-md-3">
                    <label for="kerjaibu" class="form-label">PEKERJAAN  </label>
                    <select id="kerjaibu" name="kerjaibu" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                       <option value="PNS">PNS</option>
                        <option value="GURU">GURU</option>
                        <option value="POLRI">POLRI</option>
                        <option value="TNI">TNI</option>
                         <option value="DOKTER">DOKTER</option>
                        <option value="PERAWAT">PERAWAT</option>
                         <option value="PEDAGANG">PEDAGANG</option>
                          <option value="KARYAWAN">KARYAWAN</option>
                        <option value="PETANI">PETANI</option>
                         <option value="WIRASWASTA">WIRASWASTA</option>
                         <option value="IRT"selected>IBU RUMAH TANGGA </option>
                         <option value="Pensiunan/ALM">Pensiunan atau Almarhum</option>
                      
                       
                    </select>
                    </div>
                <!-- input nisn -->
                      <div class="form-group col-md-3">
                    <label for="hasilibu" class="form-label">PENGHASILAN PERBULAN  </label>
                    <select id="hasilibu" name="hasilibu" class="custom-select" aria-label="Default select example">
                        <option selected disabled>Pilih salah satu</option>
                        <option value="<3.000.000">Kurang dari Rp. 3.000.000</option>
                             <option value="<5.000.000"selected>Kurang dari Rp. 5.000.000 </option>
                         <option value=">7.000.000">Lebih dari Rp. 7.000.000</option>


                       
                    </select>
                    </div>
        </div>
</fieldset>

</form>
            </div>        
        
      <!-- tombol submit -->
            <div class="text-center">
            <button type="submit" name="simpan" class="btn btn-success font-weight-bold">SIMPAN</button>
                 
            <p><font size="1">Pastikan DATA FORMULIR PENDAFTARAN Terisi semua dan diisi dengan data yang sebenar-benarnya.      </font> </p> 
            </div>
</div>
               
                
           
              
                

    

<?php

// import footer
include 'footer.php';

} //else {
 //   echo "<script>
 //           alert('Silahkan Login Terlebih Dahulu!');
 //           window.location = 'login.php';
 //       </script>";
//}

else {
        echo "<script>
        alert('ANDA SUDAH TERDAFTAR.. ANDA AKAN DI ALIHKAN KE MENU STATUS');
 window.location = 'status.php';
       </script>";
        }
}       
        
?>