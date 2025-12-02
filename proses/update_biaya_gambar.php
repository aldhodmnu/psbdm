<?php
session_start();
include '../koneksi.php';

if(isset($_POST['biaya_pendaftaran'])) {
    $biaya = $_POST['biaya_pendaftaran'];
    
    // Update atau insert biaya pendaftaran
    $cek = mysqli_query($db, "SELECT * FROM pengaturan WHERE nama='biaya_pendaftaran'");
    if(mysqli_num_rows($cek) > 0) {
        mysqli_query($db, "UPDATE pengaturan SET nilai='$biaya' WHERE nama='biaya_pendaftaran'");
    } else {
        mysqli_query($db, "INSERT INTO pengaturan (nama, nilai) VALUES ('biaya_pendaftaran', '$biaya')");
    }
    
    // Proses upload gambar jika ada
    if(isset($_FILES['gambar_biaya']) && $_FILES['gambar_biaya']['error'] == 0) {
        $file = $_FILES['gambar_biaya'];
        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $nama_file = 'Biaya-Daftar-Ulang-' . time() . '.' . $ext;
        
        if(move_uploaded_file($file['tmp_name'], '../' . $nama_file)) {
            // Update nama file gambar di database
            $cek_gambar = mysqli_query($db, "SELECT * FROM pengaturan WHERE nama='gambar_daftar_ulang'");
            if(mysqli_num_rows($cek_gambar) > 0) {
                mysqli_query($db, "UPDATE pengaturan SET nilai='$nama_file' WHERE nama='gambar_daftar_ulang'");
            } else {
                mysqli_query($db, "INSERT INTO pengaturan (nama, nilai) VALUES ('gambar_daftar_ulang', '$nama_file')");
            }
        }
    }
    
    echo "<script>
        alert('Pengaturan berhasil disimpan!');
        window.location = '../biaya.php';
    </script>";
} else {
    echo "<script>
        alert('Gagal menyimpan!');
        window.location = '../biaya.php';
    </script>";
}
?>
