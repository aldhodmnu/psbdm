<?php
// File untuk setup tabel rincian_biaya otomatis
include 'koneksi.php';

// Cek apakah tabel sudah ada
$cek_tabel = mysqli_query($db, "SHOW TABLES LIKE 'rincian_biaya'");

if(mysqli_num_rows($cek_tabel) == 0) {
    // Buat tabel jika belum ada
    $create = "CREATE TABLE `rincian_biaya` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `nama` varchar(100) NOT NULL,
      `nominal` int(11) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
    
    mysqli_query($db, $create);
    echo "Tabel rincian_biaya berhasil dibuat!<br>";
}

// Cek apakah sudah ada data
$cek_data = mysqli_query($db, "SELECT COUNT(*) as jml FROM rincian_biaya");
$data = mysqli_fetch_array($cek_data);

if($data['jml'] == 0) {
    // Insert data default
    mysqli_query($db, "INSERT INTO `rincian_biaya` (`nama`, `nominal`) VALUES
    ('Pendaftaran Tes', 470000),
    ('Medical Check Up', 400000),
    ('Psikotes & Interview', 120000),
    ('Admin Bank', 5000)");
    
    echo "Data default berhasil diinsert!<br>";
}

echo "<br><strong>Setup selesai!</strong><br>";
echo "<a href='index.php'>Kembali ke Halaman Utama</a> | <a href='biaya.php'>Ke Halaman Admin Biaya</a>";
?>
