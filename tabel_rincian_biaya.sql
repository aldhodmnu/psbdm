-- Tabel untuk menyimpan rincian biaya pendaftaran
CREATE TABLE IF NOT EXISTS `rincian_biaya` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nominal` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert data default
INSERT INTO `rincian_biaya` (`nama`, `nominal`) VALUES
('Pendaftaran Tes', 470000),
('Medical Check Up', 400000),
('Psikotes & Interview', 120000),
('Admin Bank', 5000);
