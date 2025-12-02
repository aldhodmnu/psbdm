<?php

// sesi
session_start();

// import koneksi.php
include 'koneksi.php';

// fungsi pengecekan sesi
if(isset($_SESSION['sesi'])){

    
    $header = "- Status Pernyataan";
    // import header.php
    include 'header.php';

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
        
         <div class="text-secondary text-center"><img src="dmlogo.png" alt="" style="width:100px;height:100px;"> <p></p></div> 
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
                        <h6 class="mb-0">Tanggal Lahir</h6>
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
9. Bersedia melakukan pembayaran Pendaftaran, Daftar Ulang serta Biaya lainnya. Dan <b>Uang yang sudah kami bayarkan ke Pesantren</b> melalui Bank Darul Ma’arif <b>tidak akan kami ambil kembali</b>.

<br>
<br>
Demikian surat pernyataan ini kami buat dengan sebenar-benarnya tanpa ada paksaan dari pihak manapun dan dapat dipergunakan sebagaimana mestinya.
<br><br>
Saya telah membaca, memahami, dan bersedia mematuhi, melaksankan dan mengikuti semua panduan,
aturan, tata tertib, serta siap menerima konsekuensinya.
Surat ini dibuat dengan penuh kesadaran dan tanggung jawab untuk mendukung kelancaran pendidikan di
Pondok Pesantren Darul Ma’arif, semoga Allah selalu memberikan taufiq dan hidayah-Nya kepada kita semua.
Amin.

<br>
<p class="text-right">Kaplongan, ........................................  </p>
                <p class="text-right">Yang Membuat Pernyataan </p>
                <br><p class="text-right">Materai 10.000,- </p><br>
                
                <p class="text-right">........................................  </p>
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