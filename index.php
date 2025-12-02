<?php

session_start();
error_reporting(E_ERROR | E_PARSE);
include_once 'koneksi.php';
include 'koneksidm.php';
date_default_timezone_set("Asia/Bangkok");
$currentDate = date('Y-m-d');
$currentDate2= date('d-M-Y H:i:s');

if(isset($_SESSION['sesi'])) {
    
// Ambil total biaya dari database
$query_total = mysqli_query($db, "SELECT SUM(nominal) as total FROM rincian_biaya");
$data_total = mysqli_fetch_array($query_total);
$angka1 = $data_total['total'] ? $data_total['total'] : 995000;

// Hitung jumlah digit ID user
$id_user = $_SESSION['sesi'];
$jumlah_digit = strlen($id_user);

// Ganti digit terakhir sesuai jumlah digit ID
$angka1_str = (string)$angka1;
$angka1_tanpa_digit = substr($angka1_str, 0, -$jumlah_digit);
$jumlah = (int)($angka1_tanpa_digit . $id_user);

$angka2 =number_format($_SESSION['sesi']);
    $header = "";
    include_once 'header.php';

$idlog= $_SESSION['sesi'];
$namasantri = "";
$jenjang_santri = "";

// Ambil data dari tabel pendaftaran (jika sudah isi formulir)
$query = mysqli_query($db, "SELECT * FROM pendaftaran WHERE id='$_SESSION[sesi]'");
while ($result=mysqli_fetch_array($query)) { 
   $namasantri=$result["nama"];
   $jenjang_santri=$result["jenjang"]; 
}    

// Ambil data dari tabel user (data saat register)
$namawali = "";
$nama_anak_reg = ""; // Fallback nama santri dari registrasi
$query2 = mysqli_query($db, "SELECT * FROM user WHERE id='$_SESSION[sesi]'");
while ($result2=mysqli_fetch_array($query2)) { 
    $namawali=$result2["wali"];
    $nama_anak_reg=$result2["anak"];
}    

$jumlah = $angka1 + $angka2;
   
$query = mysqli_query($dm, "SELECT gelombang FROM m_semester ");
$data = mysqli_fetch_array($query);
$dataGEL = $data['gelombang'];

if ($dataGEL == "PERTAMA") { $dataGEL2="1"; }
else if($dataGEL == "KEDUA") { $dataGEL2="2"; }
else if($dataGEL == "KETIGA") { $dataGEL2="3"; }
else if($dataGEL == "KEEMPAT") { $dataGEL2="4"; }
else if($dataGEL == "TERAKHIR") { $dataGEL2="5"; }    

// Persiapan Data untuk Format WA (Prioritas: Pendaftaran > User Register > Placeholder)
$wa_nama_pendaftar = !empty($namasantri) ? $namasantri : (!empty($nama_anak_reg) ? $nama_anak_reg : "");
$wa_nama_pengirim = !empty($namawali) ? $namawali : "";
$wa_tgl_transfer = date('d/m/Y');
$wa_jumlah = number_format($jumlah, 0, ',', '.');
$wa_gelombang = $dataGEL2;
$wa_jenjang = !empty($jenjang_santri) ? $jenjang_santri : "SMP/SMA"; // Default jika belum pilih jenjang

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
                    <p class="mb-3">Mohon transfer dengan <strong>NOMINAL TEPAT</strong> (hingga 3 digit terakhir) agar verifikasi berjalan otomatis.</p>
                    
                    <div class="card border-danger shadow-sm mb-4">
                        <div class="card-body text-center p-4 bg-white rounded">
                            <h6 class="text-uppercase text-muted font-weight-bold mb-2 letter-spacing-1">TOTAL TRANSFER</h6>
                            <h1 class="display-4 font-weight-bold text-danger mb-0">
                                Rp <?php echo number_format($jumlah, 0, ',', '.'); ?>
                            </h1>
                            <div class="badge badge-warning px-3 py-2 mt-3 text-dark font-weight-bold shadow-sm">
                                <i class="fas fa-exclamation-circle mr-1"></i> PENTING: JANGAN DIBULATKAN!
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-header bg-light border-0 cursor-pointer" data-toggle="collapse" data-target="#rincianBiaya" aria-expanded="true">
                            <h6 class="mb-0 font-weight-bold text-primary-custom d-flex justify-content-between align-items-center">
                                <span><i class="fas fa-calculator mr-2"></i> Rincian Penghitungan Biaya</span>
                                <i class="fas fa-chevron-down small"></i>
                            </h6>
                        </div>
                        <div id="rincianBiaya" class="collapse show">
                            <table class="table table-sm table-borderless table-striped mb-0 small">
                                <tbody>
                                    <?php
                                    // Ambil rincian biaya dari database
                                    $query_rincian = mysqli_query($db, "SELECT * FROM rincian_biaya ORDER BY id");
                                    $subtotal = 0;
                                    while($item = mysqli_fetch_array($query_rincian)) {
                                        $subtotal += $item['nominal'];
                                    ?>
                                    <tr>
                                        <td class="pl-4"><?php echo $item['nama']; ?></td>
                                        <td class="text-right pr-4 text-dark font-weight-bold">Rp <?php echo number_format($item['nominal'], 0, ',', '.'); ?></td>
                                    </tr>
                                    <?php } ?>
                                    <tr class="border-top border-secondary">
                                        <td class="pl-4 font-weight-bold text-secondary">SUBTOTAL BIAYA</td>
                                        <td class="text-right pr-4 font-weight-bold text-secondary">Rp <?php echo number_format($subtotal, 0, ',', '.'); ?></td>
                                    </tr>
                                    <tr class="bg-warning-soft text-dark">
                                        <td class="pl-4 d-flex align-items-center font-weight-bold">
                                            <span class="badge badge-warning mr-2 text-dark">KODE UNIK</span>
                                            (ID: <?php echo $_SESSION['sesi']; ?>)
                                        </td>
                                        <td class="text-right pr-4 font-weight-bold text-danger">Ganti <?php echo strlen($_SESSION['sesi']); ?> digit terakhir</td>
                                    </tr>
                                    <tr class="bg-primary-custom text-white" style="font-size: 1.1em;">
                                        <td class="pl-4 py-3 font-weight-bold">TOTAL YANG HARUS DITRANSFER</td>
                                        <td class="text-right pr-4 py-3 font-weight-bold">Rp <?php echo number_format($jumlah, 0, ',', '.'); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="p-3 bg-white border-top small text-muted">
                                <i class="fas fa-info-circle mr-1 text-info"></i> <strong>Kode Unik:</strong> Sistem mengganti <?php echo strlen($_SESSION['sesi']); ?> digit terakhir dari subtotal dengan ID Anda (<?php echo $_SESSION['sesi']; ?>). Contoh: <?php echo number_format($subtotal, 0, ',', '.'); ?> → <?php echo number_format($jumlah, 0, ',', '.'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-white border-0 shadow-sm mb-2 h-100">
                                <div class="card-body p-3 d-flex flex-column justify-content-center">
                                    <h6 class="font-weight-bold text-dark"><i class="fas fa-university mr-2 text-primary-custom"></i>Bank Mandiri</h6>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="h5 mb-0 font-weight-bold text-dark" id="rekMandiri">134-000-680-5815</span>
                                        <button class="btn btn-sm btn-outline-secondary" onclick="copyToClipboard('rekMandiri')"><i class="far fa-copy"></i></button>
                                    </div>
                                    <small class="text-muted">a.n Darul Ma’arif</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-white border-0 shadow-sm mb-2 h-100">
                                <div class="card-body p-3 d-flex flex-column justify-content-center">
                                    <h6 class="font-weight-bold text-dark"><i class="fas fa-university mr-2 text-primary-custom"></i>Bank BRI</h6>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="h5 mb-0 font-weight-bold text-dark" id="rekBRI">0165-01-000704-56-7</span>
                                        <button class="btn btn-sm btn-outline-secondary" onclick="copyToClipboard('rekBRI')"><i class="far fa-copy"></i></button>
                                    </div>
                                    <small class="text-muted">a.n BDM Yayasan Darul Ma’arif</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<script>
function copyToClipboard(elementId) {
  var copyText = document.getElementById(elementId).innerText;
  navigator.clipboard.writeText(copyText).then(function() {
    alert("Nomor rekening berhasil disalin!");
  }, function(err) {
    console.error('Gagal menyalin: ', err);
  });
}
</script>

            <!-- Step 3: Konfirmasi -->
            <div class="step-card d-flex align-items-start">
                <div class="step-number flex-shrink-0">3</div>
                <div class="w-100">
                    <h5 class="font-weight-bold text-dark">Konfirmasi Pembayaran</h5>
                    <p class="mb-3">Setelah melakukan transfer, silakan konfirmasi dengan menekan tombol WA di bawah. Anda dapat mengedit data di bawah ini jika ada yang tidak sesuai.</p>
                    
                    <div class="card border-0 shadow-sm bg-light mb-3">
                        <div class="card-body p-3">
                            <h6 class="font-weight-bold text-dark mb-3"><i class="fas fa-edit mr-2"></i> Form Konfirmasi WA (Live Edit)</h6>
                            <form id="waForm">
                                <div class="form-row">
                                    <div class="col-md-6 mb-2">
                                        <label class="small text-muted font-weight-bold mb-0">Nama Pendaftar</label>
                                        <input type="text" class="form-control form-control-sm" id="wa_nama" value="<?php echo $wa_nama_pendaftar; ?>" placeholder="Nama Siswa">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="small text-muted font-weight-bold mb-0">Nama Pemilik Rekening / Pengirim</label>
                                        <input type="text" class="form-control form-control-sm" id="wa_pengirim" value="<?php echo $wa_nama_pengirim; ?>" placeholder="Nama Pengirim di Bukti Transfer">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-2">
                                        <label class="small text-muted font-weight-bold mb-0">Tanggal Transfer</label>
                                        <input type="text" class="form-control form-control-sm" id="wa_tgl" value="<?php echo $wa_tgl_transfer; ?>" placeholder="DD/MM/YYYY">
                                        <small class="text-xs text-muted">Bisa diedit jika tanggal beda.</small>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="small text-muted font-weight-bold mb-0">Nominal Transfer (Sesuai Kode Unik)</label>
                                        <input type="text" class="form-control form-control-sm bg-light" id="wa_jml" value="<?php echo $wa_jumlah; ?>" readonly>
                                        <small class="text-xs text-danger">*Nominal tidak dapat diubah.</small>
                                    </div>
                                </div>
                                <div class="form-row" style="display:none;">
                                    <input type="hidden" id="wa_gel" value="<?php echo $wa_gelombang; ?>">
                                    <input type="hidden" id="wa_jenjang" value="<?php echo $wa_jenjang; ?>">
                                </div>
                                
                                <div class="form-group mt-2">
                                    <label class="small text-muted font-weight-bold mb-0">Preview Pesan (Otomatis Berubah)</label>
                                    <textarea class="form-control bg-white text-success font-weight-bold" id="wa_preview" rows="3" readonly><?php echo $pesan_wa_template; ?></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <p class="mb-2 font-weight-bold">Kirim Konfirmasi ke salah satu nomor berikut:</p>
                    <div class="d-flex flex-wrap">
                        <a href="#" id="btn_wa_dm" target="_blank" class="btn btn-success mb-2 mr-2 shadow-sm text-left">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-whatsapp fa-2x mr-2"></i>
                                <div>
                                    <div class="font-weight-bold">0853-1494-3737</div>
                                    <small>a.n Bank Darul Ma’arif</small>
                                </div>
                            </div>
                        </a>
                        <a href="#" id="btn_wa_bendahara" target="_blank" class="btn btn-outline-success mb-2 shadow-sm text-left">
                            <div class="d-flex align-items-center">
                                <i class="fab fa-whatsapp fa-2x mr-2"></i>
                                <div>
                                    <div class="font-weight-bold">0895-3736-30990</div>
                                    <small>a.n Bendahara (Jihan K.T)</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <small class="text-muted font-italic">*Pastikan nominal transfer sesuai dengan yang tertera di Step 2 (Kode Unik).</small>
                </div>
            </div>

<script>
    // Live Edit WA Message
    document.addEventListener('DOMContentLoaded', function() {
        const inputs = ['wa_nama', 'wa_pengirim', 'wa_tgl', 'wa_jml', 'wa_gel', 'wa_jenjang'];
        const preview = document.getElementById('wa_preview');
        const btnDM = document.getElementById('btn_wa_dm');
        const btnBendahara = document.getElementById('btn_wa_bendahara');
        
        const baseDM = "https://wa.me/6285314943737?text=";
        const baseBendahara = "https://wa.me/62895373630990?text=";

        function updateMessage() {
            const nama = document.getElementById('wa_nama').value || '[Nama]';
            const pengirim = document.getElementById('wa_pengirim').value || '[Pengirim]';
            const tgl = document.getElementById('wa_tgl').value || '[Tgl]';
            const jml = document.getElementById('wa_jml').value || '[Jumlah]';
            const gel = document.getElementById('wa_gel').value;
            const jenjang = document.getElementById('wa_jenjang').value;

            // Format: TRANSAKSI [Nama Pendaftar] [Nama Pengirim] [Tgl.Transfer] [Jumlah Transfer] PENDAFTAR PSB GEL [Angka Gelombang] [Jenjang Sekolah] PP. Darul Ma'arif
            const message = `TRANSAKSI ${nama} ${pengirim} ${tgl} ${jml} PENDAFTAR PSB GEL ${gel} ${jenjang} PP. Darul Ma'arif`;
            
            preview.value = message;
            
            const encodedMsg = encodeURIComponent(message);
            btnDM.href = baseDM + encodedMsg;
            btnBendahara.href = baseBendahara + encodedMsg;
        }

        inputs.forEach(id => {
            document.getElementById(id).addEventListener('input', updateMessage);
        });

        // Initialize links
        updateMessage();
    });
</script>
            
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