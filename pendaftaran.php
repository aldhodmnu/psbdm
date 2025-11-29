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

<style>
    .section-header {
        border-bottom: 2px solid var(--primary-green);
        margin-bottom: 1.5rem;
        padding-bottom: 0.5rem;
        color: var(--primary-green);
        display: flex;
        align-items: center;
    }
    .section-header i {
        margin-right: 10px;
    }
</style>

<!-- container -->
<div class="container py-4">
    <form class="card shadow-lg border-0" method="post" action="proses/proses_pendaftaran.php" enctype="multipart/form-data">
        
        <div class="card-body p-4 p-md-5">
            <!-- heading -->
            <div class="text-center mb-5">
                <img src="dmlogo.png" alt="" style="width:80px;height:80px;" class="mb-3">
                <h4 class="font-weight-bold text-dark">FORMULIR PENDAFTARAN SANTRI BARU</h4>
                <p class="text-muted">Mohon isi data dengan lengkap dan benar.</p>
            </div>
            
            <input type="number" name="id" value="<?php echo $id_siswa; ?>" hidden>
            
            <!-- 1. DATA CALON SANTRI -->
            <div class="mb-5">
                <h5 class="section-header">
                    <i class="fas fa-user-graduate fa-lg"></i> DATA PRIBADI SANTRI
                </h5>
                
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                        <input maxlength="40" type="text" class="form-control" name="nama" placeholder="Sesuai Akta Kelahiran" required />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="nik" class="form-label">NIK (Nomor Induk Kependudukan) <span class="text-danger">*</span></label>
                        <input maxlength="25" type="number" class="form-control" name="nik" placeholder="Lihat di Kartu Keluarga" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="ttl" class="form-label">Tempat Lahir <span class="text-danger">*</span></label>
                        <input maxlength="60" type="text" class="form-control" name="ttl" placeholder="Kota Kelahiran" required />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="ttg" class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="ttg" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="jk" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                        <select id="jk" name="jk" class="custom-select" required>
                            <option value="" selected disabled>-- Pilih --</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="anak" class="form-label">Anak Ke- <span class="text-danger">*</span></label>
                        <input maxlength="2" type="number" class="form-control" name="anak" placeholder="Contoh: 1" required />
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="saudara" class="form-label">Jumlah Saudara <span class="text-danger">*</span></label>
                        <input maxlength="2" type="number" class="form-control" name="saudara" placeholder="Contoh: 2" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="nisn" class="form-label">NISN</label>
                        <input maxlength="25" type="number" class="form-control" name="nisn" placeholder="Nomor Induk Siswa Nasional" required />
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="noijasah" class="form-label">No. Seri Ijazah SD/MI</label>
                        <input maxlength="20" type="text" class="form-control" name="noijasah" placeholder="Jika ada" required />
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="noskhun" class="form-label">No. Seri SKHUN/KK</label>
                        <input maxlength="25" type="number" class="form-control" name="noskhun" placeholder="Nomor KK" required />
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="bb" class="form-label">Berat / Tinggi Badan</label>
                        <input maxlength="25" type="text" class="form-control" name="bb" placeholder="Contoh: 45 kg / 150 cm" required />
                    </div>
                     <div class="col-md-6 form-group">
                        <label for="sizeb" class="form-label">Ukuran Baju Seragam</label>
                        <select id="sizeb" name="sizeb" class="custom-select" required>
                            <option value="" selected disabled>-- Pilih --</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </select>
                    </div>
                 </div>
                 
                 <div class="form-group">
                    <label for="penyakit" class="form-label">Riwayat Penyakit</label>
                    <input maxlength="120" type="text" class="form-control" name="penyakit" placeholder="Tulis '-' jika tidak ada" required />
                </div>
            </div>

            <!-- 2. ALAMAT -->
            <div class="mb-5">
                <h5 class="section-header">
                    <i class="fas fa-map-marker-alt fa-lg"></i> ALAMAT DOMISILI
                </h5>
                
                <div class="form-group">
                    <label for="alamat" class="form-label">Alamat Lengkap (Jalan/Gang)</label>
                    <textarea class="form-control" name="alamat" rows="2" placeholder="Nama Jalan, Nomor Rumah" required maxlength="200"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-3 form-group">
                        <label for="rt" class="form-label">RT</label>
                        <input maxlength="4" type="number" class="form-control" name="rt" required />
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="rw" class="form-label">RW</label>
                        <input maxlength="4" type="number" class="form-control" name="rw" required />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="dusun" class="form-label">Dusun / Blok</label>
                        <input maxlength="50" type="text" class="form-control" name="dusun" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="kel" class="form-label">Desa / Kelurahan</label>
                        <input maxlength="50" type="text" class="form-control" name="kel" required />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="kec" class="form-label">Kecamatan</label>
                        <input maxlength="50" type="text" class="form-control" name="kec" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 form-group">
                        <label for="kab" class="form-label">Kabupaten / Kota</label>
                        <input maxlength="50" type="text" class="form-control" name="kab" required />
                    </div>
                    <div class="col-md-5 form-group">
                        <label for="prov" class="form-label">Provinsi</label>
                        <input maxlength="50" type="text" class="form-control" name="prov" required />
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="kdpos" class="form-label">Kode Pos</label>
                        <input maxlength="6" type="number" class="form-control" name="kdpos" required />
                    </div>
                </div>
            </div>

            <!-- 3. MINAT DAN SEKOLAH -->
            <div class="mb-5">
                <h5 class="section-header">
                    <i class="fas fa-school fa-lg"></i> DATA SEKOLAH & MINAT
                </h5>
                
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="sekolahasal" class="form-label">Asal Sekolah <span class="text-danger">*</span></label>
                        <input maxlength="125" type="text" class="form-control" name="sekolahasal" placeholder="Nama Sekolah Sebelumnya" required />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="jenjang" class="form-label">Mendaftar Jenjang <span class="text-danger">*</span></label>
                        <select id="jenjang" name="jenjang" class="custom-select" required>
                            <option value="" selected disabled>-- Pilih --</option>
                            <option value="SMP">SMP NU</option>
                            <option value="SMA">SMA NU</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="mp" class="form-label">Status Masuk</label>
                        <select id="mp" name="mp" class="custom-select" required>
                            <option value="SB" selected>SANTRI BARU</option>
                            <option value="SP">SANTRI PINDAHAN</option>
                        </select>
                    </div>
                     <div class="col-md-6 form-group">
                        <label for="kesediaan" class="form-label">Rencana Mondok</label>
                        <select id="kesediaan" name="kesediaan" class="custom-select" required>
                            <option value="3" selected>3 TAHUN</option>
                            <option value="6">6 TAHUN</option>
                        </select>
                    </div>
                </div>
                
                <div class="row">
                     <div class="col-md-6 form-group">
                        <label for="exkul" class="form-label">Minat Ekstrakurikuler</label>
                        <select id="exkul" name="exkul" class="custom-select" required>
                            <option value="" selected disabled>-- Pilih --</option>
                            <option value="PRAMUKA">PRAMUKA</option>
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
                    <div class="col-md-6 form-group">
                         <label for="prestasi" class="form-label">Prestasi Akademik/Non-Akademik</label>
                        <input maxlength="125" type="text" class="form-control" name="prestasi" placeholder="Tulis '-' jika tidak ada" required />
                    </div>
                </div>

                 <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="alasan" class="form-label">Motivasi Masuk Pesantren</label>
                        <select id="alasan" name="alasan" class="custom-select" required>
                            <option value="SENDIRI" selected>Keinginan Sendiri</option>
                            <option value="ORTU">Dorongan Orang Tua</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="kaisar" class="form-label">Pengalaman Lomba KAISAR?</label>
                        <select id="kaisar" name="kaisar" class="custom-select" required>
                            <option value="TIDAK" selected>TIDAK PERNAH</option>
                            <option value="PERNAH">PERNAH (TIDAK JUARA)</option>
                            <option value="SMPJUARA">PERNAH (JUARA)</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="infodari" class="form-label">Sumber Informasi</label>
                        <select id="infodari" name="infodari" class="custom-select" required>
                            <option value="Keluarga" selected>Keluarga</option>
                            <option value="Teman">Teman</option>
                            <option value="Guru">Guru</option>
                            <option value="Tetangga">Tetangga</option>
                            <option value="Website">Website</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Tiktok">Tiktok</option>
                            <option value="Youtube">Youtube</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="darimana" class="form-label">Detail Sumber Informasi</label>
                        <input maxlength="100" type="text" class="form-control" name="darimana" placeholder="Nama Teman/Keluarga atau Akun Medsos" required />
                    </div>
                </div>

            </div>

            <!-- 4. DATA AYAH -->
            <div class="mb-5">
                <h5 class="section-header">
                    <i class="fas fa-male fa-lg"></i> DATA AYAH KANDUNG
                </h5>
                
                <div class="row">
                    <div class="col-md-8 form-group">
                        <label for="ayah" class="form-label">Nama Lengkap Ayah</label>
                        <input maxlength="40" type="text" class="form-control" name="ayah" required />
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="ttlayah" class="form-label">Tahun Lahir</label>
                        <input type="number" class="form-control" name="ttlayah" placeholder="Contoh: 1975" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="nikayah" class="form-label">NIK Ayah</label>
                        <input maxlength="16" type="number" class="form-control" name="nikayah" required />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="penayah" class="form-label">Pendidikan Terakhir</label>
                        <select id="penayah" name="penayah" class="custom-select" required>
                            <option value="" selected disabled>-- Pilih --</option>
                            <option value="SD">SD/Sederajat</option>
                            <option value="SLTP">SMP/Sederajat</option>
                            <option value="SLTA">SMA/Sederajat</option>
                            <option value="D3">Diploma (D3)</option>
                            <option value="S1">Sarjana (S1)</option>
                            <option value="S2">Magister (S2)</option>
                            <option value="S3">Doktor (S3)</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                     <div class="col-md-6 form-group">
                        <label for="kerjaayah" class="form-label">Pekerjaan Utama</label>
                        <select id="kerjaayah" name="kerjaayah" class="custom-select" required>
                            <option value="" selected disabled>-- Pilih --</option>
                            <option value="WIRASWASTA">Wiraswasta</option>
                            <option value="PETANI">Petani/Nelayan</option>
                            <option value="KARYAWAN">Karyawan Swasta</option>
                            <option value="PNS">PNS/ASN</option>
                            <option value="TNI">TNI/Polri</option>
                            <option value="GURU">Guru/Dosen</option>
                            <option value="PEDAGANG">Pedagang</option>
                            <option value="Pensiunan/ALM">Pensiunan / Almarhum</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="hasilayah" class="form-label">Penghasilan Rata-rata</label>
                        <select id="hasilayah" name="hasilayah" class="custom-select" required>
                             <option value="<3.000.000">Kurang dari Rp. 3.000.000</option>
                             <option value="<5.000.000">Rp. 3.000.000 - Rp. 5.000.000</option>
                             <option value=">7.000.000">Lebih dari Rp. 5.000.000</option>
                        </select>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="mondokayah" class="form-label">Pernah Mondok?</label>
                        <select id="mondokayah" name="mondokayah" class="custom-select" required>
                            <option value="T" selected>Tidak</option>
                            <option value="Y">Ya</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                         <label for="alumayah" class="form-label">Nama Pesantren (Jika Pernah)</label>
                         <input maxlength="100" type="text" class="form-control" name="alumayah" placeholder="-" required />
                    </div>
                 </div>
            </div>

            <!-- 5. DATA IBU -->
            <div class="mb-5">
                <h5 class="section-header">
                    <i class="fas fa-female fa-lg"></i> DATA IBU KANDUNG
                </h5>
                
                <div class="row">
                    <div class="col-md-8 form-group">
                        <label for="ibu" class="form-label">Nama Lengkap Ibu</label>
                        <input maxlength="50" type="text" class="form-control" name="ibu" required />
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="ttlibu" class="form-label">Tahun Lahir</label>
                        <input type="number" class="form-control" name="ttlibu" placeholder="Contoh: 1980" required />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="nikibu" class="form-label">NIK Ibu</label>
                        <input maxlength="16" type="number" class="form-control" name="nikibu" required />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="penibu" class="form-label">Pendidikan Terakhir</label>
                        <select id="penibu" name="penibu" class="custom-select" required>
                            <option value="" selected disabled>-- Pilih --</option>
                            <option value="SD">SD/Sederajat</option>
                            <option value="SLTP">SMP/Sederajat</option>
                            <option value="SLTA">SMA/Sederajat</option>
                            <option value="D3">Diploma (D3)</option>
                            <option value="S1">Sarjana (S1)</option>
                            <option value="S2">Magister (S2)</option>
                            <option value="S3">Doktor (S3)</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                     <div class="col-md-6 form-group">
                        <label for="kerjaibu" class="form-label">Pekerjaan Utama</label>
                        <select id="kerjaibu" name="kerjaibu" class="custom-select" required>
                            <option value="" selected disabled>-- Pilih --</option>
                            <option value="IRT" selected>Ibu Rumah Tangga</option>
                            <option value="WIRASWASTA">Wiraswasta</option>
                            <option value="PETANI">Petani/Nelayan</option>
                            <option value="KARYAWAN">Karyawan Swasta</option>
                            <option value="PNS">PNS/ASN</option>
                            <option value="TNI">TNI/Polri</option>
                            <option value="GURU">Guru/Dosen</option>
                            <option value="PEDAGANG">Pedagang</option>
                            <option value="Pensiunan/ALM">Pensiunan / Almarhumah</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="hasilibu" class="form-label">Penghasilan Rata-rata</label>
                        <select id="hasilibu" name="hasilibu" class="custom-select" required>
                             <option value="<3.000.000" selected>Kurang dari Rp. 3.000.000 (atau Tidak Ada)</option>
                             <option value="<5.000.000">Rp. 3.000.000 - Rp. 5.000.000</option>
                             <option value=">7.000.000">Lebih dari Rp. 5.000.000</option>
                        </select>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="mondokibu" class="form-label">Pernah Mondok?</label>
                        <select id="mondokibu" name="mondokibu" class="custom-select" required>
                            <option value="T" selected>Tidak</option>
                            <option value="Y">Ya</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                         <label for="alumibu" class="form-label">Nama Pesantren (Jika Pernah)</label>
                         <input maxlength="100" type="text" class="form-control" name="alumibu" placeholder="-" required />
                    </div>
                 </div>
            </div>

            <!-- 6. KONTAK WALI -->
            <div class="mb-4">
                 <h5 class="section-header">
                    <i class="fas fa-address-book fa-lg"></i> KONTAK WALI / ORANG TUA
                </h5>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="nohp" class="form-label">Nomor HP (Aktif)</label>
                        <input maxlength="15" type="number" class="form-control" name="nohp" placeholder="08xxxxxxxxxx" required />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="nowa" class="form-label">Nomor WhatsApp (Aktif)</label>
                        <input maxlength="15" type="number" class="form-control" name="nowa" placeholder="08xxxxxxxxxx" required />
                    </div>
                </div>
                 <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="ig" class="form-label">Akun Instagram (Opsional)</label>
                        <input maxlength="100" type="text" class="form-control" name="ig" placeholder="@username" required />
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="fb" class="form-label">Akun Facebook (Opsional)</label>
                        <input maxlength="100" type="text" class="form-control" name="fb" placeholder="Nama Akun" required />
                    </div>
                </div>
            </div>

            <!-- SUBMIT -->
            <div class="text-center pt-4 border-top">
                <button type="submit" name="simpan" class="btn btn-success btn-lg px-5 font-weight-bold shadow">
                    <i class="fas fa-save mr-2"></i> SIMPAN DATA PENDAFTARAN
                </button>
                <p class="mt-3 text-danger small font-weight-bold">
                    * Pastikan semua data yang diisi sudah benar sebelum menyimpan.
                </p>
            </div>

        </div>
    </form>
</div>

<?php

// import footer
include 'footer.php';

} else {
        echo "<script>
        alert('ANDA SUDAH TERDAFTAR.. ANDA AKAN DI ALIHKAN KE MENU STATUS');
 window.location = 'status.php';
       </script>";
        }
}       
        
?>