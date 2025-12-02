<?php
session_start();
include '../koneksi.php';

if(isset($_FILES['gambar_biaya']) && $_FILES['gambar_biaya']['error'] == 0) {
    $file = $_FILES['gambar_biaya'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    
    // Validasi ekstensi
    if(!in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "<script>alert('Format file tidak valid! Gunakan JPG, PNG, atau GIF'); window.location = '../biaya.php';</script>";
        exit;
    }
    
    // Validasi ukuran (max 5MB)
    if($file['size'] > 5242880) {
        echo "<script>alert('Ukuran file terlalu besar! Max 5MB'); window.location = '../biaya.php';</script>";
        exit;
    }
    
    $nama_file = 'Biaya-Daftar-Ulang-' . time() . '.' . $ext;
    
    if(move_uploaded_file($file['tmp_name'], '../' . $nama_file)) {
        // Update nama file gambar di database
        $cek = mysqli_query($db, "SELECT * FROM pengaturan WHERE nama='gambar_daftar_ulang'");
        if(mysqli_num_rows($cek) > 0) {
            mysqli_query($db, "UPDATE pengaturan SET nilai='$nama_file' WHERE nama='gambar_daftar_ulang'");
        } else {
            mysqli_query($db, "INSERT INTO pengaturan (nama, nilai) VALUES ('gambar_daftar_ulang', '$nama_file')");
        }
        
        echo "<script>alert('Gambar berhasil diupload!'); window.location = '../biaya.php';</script>";
    } else {
        echo "<script>alert('Gagal upload gambar!'); window.location = '../biaya.php';</script>";
    }
} else {
    echo "<script>alert('Tidak ada file yang diupload!'); window.location = '../biaya.php';</script>";
}
?>
