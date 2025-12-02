-- Script untuk memperbaiki status siswa yang kosong atau 0
-- Jalankan query ini di database untuk memperbaiki data yang sudah ada

-- Update status yang kosong, NULL, 0, atau - menjadi "Masih Seleksi"
UPDATE pendaftaran 
SET status = 'Masih Seleksi' 
WHERE status = '' OR status IS NULL OR status = '0' OR status = '-';

-- Cek hasil update
SELECT id, nama, gelombang, status 
FROM pendaftaran 
ORDER BY gelombang, id;
