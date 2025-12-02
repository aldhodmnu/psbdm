<?php
session_start();
include '../koneksi.php';

if(isset($_POST['nama']) && isset($_POST['nominal'])) {
    $nama = $_POST['nama'];
    $nominal = $_POST['nominal'];
    
    // Hapus data lama
    mysqli_query($db, "DELETE FROM rincian_biaya");
    
    // Insert data baru
    for($i = 0; $i < count($nama); $i++) {
        $n = mysqli_real_escape_string($db, $nama[$i]);
        $nom = (int)$nominal[$i];
        mysqli_query($db, "INSERT INTO rincian_biaya (nama, nominal) VALUES ('$n', '$nom')");
    }
    
    echo "<script>
        alert('Rincian biaya berhasil disimpan!');
        window.location = '../biaya.php';
    </script>";
} else {
    echo "<script>
        alert('Gagal menyimpan!');
        window.location = '../biaya.php';
    </script>";
}
?>
