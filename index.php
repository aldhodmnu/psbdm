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

$idlog= $_SESSION['sesi'];
$namasantri = "";
$jenjang_santri = "";

$query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$_SESSION[sesi]'");
    //$data = mysqli_fetch_array($query); 
    while ($result=mysqli_fetch_array($query))
   { 
       $namasantri=$result["nama"];
       $jenjang_santri=$result["jenjang"]; 
   }    
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
   
    // Persiapan Data untuk Format WA
    $wa_nama_pendaftar = $namasantri ?: "[Nama Pendaftar]";
    $wa_nama_pengirim = $namawali ?: "[Nama Pengirim]";
    $wa_tgl_transfer = date('d/m/Y');
    $wa_jumlah = number_format($jumlah, 0, ',', '.');
    $wa_gelombang = $dataGEL2;
    $wa_jenjang = $jenjang_santri ?: "[Jenjang]";

    $pesan_wa_template = "TRANSAKSI {$wa_nama_pendaftar} {$wa_nama_pengirim} {$wa_tgl_transfer} {$wa_jumlah} PENDAFTAR PSB GEL {$wa_gelombang} {$wa_jenjang} PP. Darul Ma'arif";
    $pesan_wa_url = rawurlencode($pesan_wa_template);
?>
 
<!-- container -->
<div class="container py-4">
    
    <!-- Welcome Header -->
    <div class="d-flex align-items-center justify-content-between mb-4 bg-white p-4 rounded shadow-sm">
        <div class="d-flex align-items-center">
            <img src="dmlogo.png" alt="" style="width:60px;height:60px;" class="mr-3">
            <div>
                <h4 class="mb-1 font-weight-bold text-dark">Assalamu'alaikum, <?php echo $_SESSION['nama'];?></h4>
                <span class="text-muted small">Selamat datang di Sistem Penerimaan Santri Baru</span>
            </div>
        </div>
        <div class="text-right d-none d-md-block">
             <div class="text-secondary font-weight-bold"><i class="fas fa-calendar-alt mr-1"></i> <?php echo date('d M Y'); ?></div>
        </div>
    </div>

    <!-- Gelombang Info -->
    <div class="alert alert-success shadow-sm border-0 mb-4 d-flex align-items-center">
        <i class="fas fa-info-circle fa-2x mr-3"></i>
        <div>
            <h6 class="font-weight-bold mb-0">GELOMBANG PENDAFTARAN SAAT INI: <?php echo $data['gelombang'];?></h6>
            <small>Silahkan ikuti prosedur pendaftaran di bawah ini secara berurutan.</small>
        </div>
    </div>

    <!-- Steps Container -->
    <div class="row">
        <div class="col-12">
            
            <!-- Step 1: Register & Daftar -->
            <div class="step-card d-flex align-items-start">
                <div class="step-number flex-shrink-0">1</div>
                <div class="w-100">
                    <h5 class="font-weight-bold text-dark">Registrasi & Pengisian Data</h5>
                    <p class="mb-2">Calon Santri Baru wajib membuat akun dan melengkapi data pendaftaran.</p>
                    <div class="mt-2">
                        <a href="pendaftaran.php" class="btn btn-sm btn-success"><i class="fas fa-edit mr-1"></i> Isi Formulir Pendaftaran</a>
                    </div>
                </div>
            </div>

            <!-- Step 2: Pembayaran -->
            <div class="step-card d-flex align-items-start">
                <div class="step-number flex-shrink-0">2</div>
                <div class="w-100">
                    <h5 class="font-weight-bold text-dark">Pembayaran Administrasi</h5>
                    <p class="mb-2">Lakukan pembayaran uang pendaftaran sebesar:</p>
                    
                    <div class="bg-light p-3 rounded border mb-3 d-inline-block">
                        <h4 class="text-danger font-weight-bold mb-0">Rp. <?php echo number_format($jumlah, 0, ',', '.');?>,-</h4>
                        <small class="text-muted font-italic">*3 digit terakhir adalah kode unik Anda</small>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-white border-0 shadow-sm mb-2">
                                <div class="card-body p-3">
                                    <h6 class="font-weight-bold"><i class="fas fa-university mr-2 text-primary-custom"></i>Bank Mandiri</h6>
                                    <p class="mb-0 h5 text-dark font-weight-bold">134-000-680-5815</p>
                                    <small class="text-muted">a.n Darul Ma’arif</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-white border-0 shadow-sm mb-2">
                                <div class="card-body p-3">
                                    <h6 class="font-weight-bold"><i class="fas fa-university mr-2 text-primary-custom"></i>Bank BRI</h6>
                                    <p class="mb-0 h5 text-dark font-weight-bold">0165-01-000704-56-7</p>
                                    <small class="text-muted">a.n BDM Yayasan Darul Ma’arif</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-3 p-3 bg-info text-white rounded shadow-sm" style="opacity: 0.9;">
                        <strong>Rincian Biaya:</strong><br>
                        <ul class="mb-0 pl-3 small">
                            <li>Pendaftaran Tes : Rp. 470.000,-</li>
                            <li>Medical Check Up : Rp. 400.000,-</li>
                            <li>Psikotes & Interview : Rp. 120.000,-</li>
                            <li>Admin Bank : Rp. 5.000,-</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Step 3: Konfirmasi -->
            <div class="step-card d-flex align-items-start">
                <div class="step-number flex-shrink-0">3</div>
                <div class="w-100">
                    <h5 class="font-weight-bold text-dark">Konfirmasi Pembayaran</h5>
                    <p class="mb-3">Setelah melakukan transfer, silakan konfirmasi dengan menekan tombol WA di bawah. Data berikut akan otomatis dimuat ke pesan WhatsApp Anda.</p>
                    
                    <div class="card border-0 shadow-sm bg-light mb-3">
                        <div class="card-body p-3">
                            <h6 class="font-weight-bold text-dark mb-3"><i class="fas fa-file-alt mr-2"></i> Preview Data Konfirmasi</h6>
                            <form>
                                <div class="form-row">
                                    <div class="col-md-6 mb-2">
                                        <label class="small text-muted font-weight-bold mb-0">Nama Pendaftar</label>
                                        <input type="text" class="form-control form-control-sm bg-white" value="<?php echo $wa_nama_pendaftar; ?>" readonly>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="small text-muted font-weight-bold mb-0">Nama Pengirim (Wali)</label>
                                        <input type="text" class="form-control form-control-sm bg-white" value="<?php echo $wa_nama_pengirim; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-2">
                                        <label class="small text-muted font-weight-bold mb-0">Tanggal Transfer</label>
                                        <input type="text" class="form-control form-control-sm bg-white" value="<?php echo $wa_tgl_transfer; ?>" readonly>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="small text-muted font-weight-bold mb-0">Nominal Transfer</label>
                                        <input type="text" class="form-control form-control-sm bg-white" value="Rp. <?php echo $wa_jumlah; ?>" readonly>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label class="small text-muted font-weight-bold mb-0">Gelombang</label>
                                        <input type="text" class="form-control form-control-sm bg-white" value="<?php echo $wa_gelombang; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group mt-2">
                                    <label class="small text-muted font-weight-bold mb-0">Pesan Otomatis (Dikirim ke WA)</label>
                                    <textarea class="form-control bg-white text-success font-weight-bold" rows="2" readonly><?php echo $pesan_wa_template; ?></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <p class="mb-2 font-weight-bold">Kirim Konfirmasi ke:</p>
                    <div class="d-flex flex-wrap">
                        <a href="https://wa.me/6285314943737?text=<?php echo $pesan_wa_url; ?>" target="_blank" class="btn btn-success mb-2 mr-2 shadow-sm">
                            <i class="fab fa-whatsapp mr-1"></i> 0853-1494-3737 (Bank DM)
                        </a>
                        <a href="https://wa.me/62895373630990?text=<?php echo $pesan_wa_url; ?>" target="_blank" class="btn btn-outline-success mb-2 shadow-sm">
                            <i class="fab fa-whatsapp mr-1"></i> 0895-3736-30990 (Bendahara)
                        </a>
                    </div>
                    <small class="text-muted font-italic">*Pilih salah satu nomor tujuan saja.</small>
                </div>
            </div>
            
            <!-- Step 4: Tes -->
            <div class="step-card d-flex align-items-start">
                <div class="step-number flex-shrink-0">4</div>
                <div class="w-100">
                    <h5 class="font-weight-bold text-dark">Tes Seleksi & Pengumuman</h5>
                    <p>Mengikuti tes sesuai jadwal (Psikotes, Interview, Praktek, Kesehatan). Hasil tes dapat dilihat pada menu Status.</p>
                    <a href="status.php" class="btn btn-sm btn-info"><i class="fas fa-clipboard-check mr-1"></i> Cek Status Kelulusan</a>
                </div>
            </div>

            <!-- Step 5: Daftar Ulang -->
            <div class="step-card d-flex align-items-start">
                <div class="step-number flex-shrink-0">5</div>
                <div class="w-100">
                    <h5 class="font-weight-bold text-dark">Daftar Ulang</h5>
                    <p>Jika dinyatakan <strong>LULUS</strong>, segera selesaikan pembayaran daftar ulang.</p>
                    <a href="biayadu.php" class="btn btn-sm btn-primary"><i class="fas fa-money-check-alt mr-1"></i> Lihat Biaya Daftar Ulang</a>
                    
                    <div class="mt-3 p-3 bg-light border rounded">
                        <h6 class="font-weight-bold text-dark"><i class="fas fa-headset mr-2"></i>Butuh Bantuan?</h6>
                        <p class="mb-2 small text-muted">Jika ada kesulitan, hubungi admin kami:</p>
                        <a href="https://wa.me/6282219699610" target="_blank" class="btn btn-outline-success btn-sm"><i class="fab fa-whatsapp mr-1"></i> 0822-1969-9610 (Admin PSB)</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
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