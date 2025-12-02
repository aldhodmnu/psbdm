-- Tabel untuk menyimpan pengaturan biaya dan gambar
CREATE TABLE IF NOT EXISTS `pengaturan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nilai` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert data default
INSERT INTO `pengaturan` (`nama`, `nilai`) VALUES
('biaya_pendaftaran', '995000'),
('gambar_daftar_ulang', 'Registrasi-PSB.png')
ON DUPLICATE KEY UPDATE nilai=VALUES(nilai);
