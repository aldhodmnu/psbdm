

CREATE TABLE `t_a_a` (
  `kode_kota` varchar(5) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_kota`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_a_b` (
  `kode_bank` varchar(5) NOT NULL DEFAULT '-',
  `nama_bank` varchar(20) DEFAULT '-',
  `persen` decimal(10,0) DEFAULT '0',
  PRIMARY KEY (`kode_bank`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_a_c` (
  `no_node` varchar(8) DEFAULT NULL,
  `no_akun` varchar(8) DEFAULT NULL,
  `nama_akun` varchar(150) DEFAULT NULL,
  `nama_akun_view` varchar(150) DEFAULT NULL,
  `group_tipe` varchar(1) DEFAULT NULL,
  `group_no` varchar(1) DEFAULT NULL,
  `group_level` varchar(8) DEFAULT NULL,
  `jumlah` decimal(18,2) DEFAULT NULL,
  `SAD` decimal(18,2) NOT NULL DEFAULT '0.00',
  `SAK` decimal(18,2) NOT NULL DEFAULT '0.00',
  `JD` decimal(18,2) NOT NULL DEFAULT '0.00',
  `JK` decimal(18,2) NOT NULL DEFAULT '0.00',
  `tanggal_awal` varchar(10) DEFAULT '-',
  `posisi` varchar(25) DEFAULT '-',
  `normal` varchar(10) DEFAULT '-',
  `kode_perusahaan` varchar(2) NOT NULL DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_a_j` (
  `kode_jabatan` varchar(5) NOT NULL DEFAULT '-',
  `nama_jabatan` varchar(20) NOT NULL DEFAULT '-',
  PRIMARY KEY (`kode_jabatan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_a_y` (
  `tahun1` varchar(50) DEFAULT NULL,
  `tahun2` varchar(50) DEFAULT NULL,
  `tahun3` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='set tahun ajaran';




CREATE TABLE `t_b_b` (
  `kode_siswa` int(11) NOT NULL,
  `kode_bayar` int(11) NOT NULL,
  `t_7` decimal(18,2) DEFAULT NULL,
  `t_8` decimal(18,2) DEFAULT NULL,
  `t_9` decimal(18,2) DEFAULT NULL,
  `t_10` decimal(18,2) DEFAULT NULL,
  `t_11` decimal(18,2) DEFAULT NULL,
  `t_12` decimal(18,2) DEFAULT NULL,
  `t_1` decimal(18,2) DEFAULT NULL,
  `t_2` decimal(18,2) DEFAULT NULL,
  `t_3` decimal(18,2) DEFAULT NULL,
  `t_4` decimal(18,2) DEFAULT NULL,
  `t_5` decimal(18,2) DEFAULT NULL,
  `t_6` decimal(18,2) DEFAULT NULL,
  `b_7` decimal(18,2) DEFAULT NULL,
  `b_8` decimal(18,2) DEFAULT NULL,
  `b_9` decimal(18,2) DEFAULT NULL,
  `b_10` decimal(18,2) DEFAULT NULL,
  `b_11` decimal(18,2) DEFAULT NULL,
  `b_12` decimal(18,2) DEFAULT NULL,
  `b_1` decimal(18,2) DEFAULT NULL,
  `b_2` decimal(18,2) DEFAULT NULL,
  `b_3` decimal(18,2) DEFAULT NULL,
  `b_4` decimal(18,2) DEFAULT NULL,
  `b_5` decimal(18,2) DEFAULT NULL,
  `b_6` decimal(18,2) DEFAULT NULL,
  `iskhusus` int(11) DEFAULT NULL,
  `isrutin` int(11) DEFAULT NULL,
  `istotal_dikartu` int(11) DEFAULT NULL,
  `isbeasiswa` int(11) DEFAULT NULL,
  `keterangan` varchar(256) DEFAULT NULL,
  `idbeasiswa` int(11) DEFAULT NULL,
  `uidup` varchar(32) DEFAULT NULL,
  `tahun` smallint(6) NOT NULL,
  `tahuna` smallint(6) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'B',
  `nik` varchar(40) DEFAULT '0',
  PRIMARY KEY (`kode_siswa`,`kode_bayar`,`tahun`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_b_b_temp` (
  `no` bigint(18) NOT NULL AUTO_INCREMENT,
  `kode_siswa` varchar(25) DEFAULT NULL,
  `nik` varchar(40) NOT NULL,
  `kode_bayar` int(11) NOT NULL,
  `nama_bayar` varchar(250) NOT NULL DEFAULT '-',
  `idbulan` varchar(5) NOT NULL,
  `urut` tinyint(2) DEFAULT NULL,
  `bulan` varchar(20) NOT NULL DEFAULT '-',
  `tahun` smallint(6) NOT NULL,
  `tahuna` smallint(6) DEFAULT NULL,
  `total` decimal(12,2) DEFAULT NULL,
  `bayar` decimal(12,2) DEFAULT NULL,
  `sisa` decimal(13,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_b_i` (
  `kode_siswa` int(11) NOT NULL,
  `kode_bayar` int(11) NOT NULL,
  `tarifbebas` decimal(18,2) DEFAULT NULL,
  `jmldibayar` decimal(18,2) DEFAULT NULL,
  `iskhusus` int(11) DEFAULT NULL,
  `isbeasiswa` int(11) DEFAULT NULL,
  `keterangan` varchar(256) DEFAULT NULL,
  `idbeasiswa` int(11) DEFAULT NULL,
  `uidup` varchar(32) DEFAULT NULL,
  `tahun` smallint(6) DEFAULT NULL,
  `tahuna` smallint(6) DEFAULT NULL,
  `flag` varchar(1) DEFAULT 'B',
  `nik` varchar(40) DEFAULT '0',
  PRIMARY KEY (`kode_siswa`,`kode_bayar`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_d_a_b` (
  `kode_bayar` int(11) NOT NULL,
  `kode_kas` int(11) DEFAULT NULL,
  `kode_group` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `nama_bayar` varchar(250) DEFAULT NULL,
  `tipe_bayar` varchar(50) DEFAULT NULL,
  `jmlbayaran` decimal(22,4) DEFAULT NULL,
  `ttljmlbayaran` decimal(22,4) DEFAULT NULL,
  `lv` int(11) DEFAULT NULL,
  `idup` int(11) DEFAULT NULL,
  `isdenda` int(11) DEFAULT NULL,
  `isrutin` int(11) DEFAULT NULL,
  `nourt` int(11) DEFAULT NULL,
  `isbukantunggakan` int(11) DEFAULT NULL COMMENT 'Apakah pembayaran ini akan TIDAK dihitung dalam laporan tunggakan\r\n0 = dihitung\r\n1 = tidak dihitung',
  `istotal_dikartu` int(11) DEFAULT NULL,
  PRIMARY KEY (`kode_bayar`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_d_a_g` (
  `kode_group` int(11) NOT NULL,
  `nama_group` varchar(32) DEFAULT NULL,
  `ket_group` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`kode_group`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_d_a_k` (
  `kode_kas` int(11) NOT NULL,
  `nama_kas` varchar(250) DEFAULT NULL,
  `kode_lembaga` varchar(10) DEFAULT NULL,
  `nama_lembaga` varchar(50) DEFAULT NULL,
  `ket_kas` varchar(256) DEFAULT NULL,
  `jenis_kas` varchar(50) DEFAULT NULL,
  `tipe_bayar` varchar(50) DEFAULT 'BEBAS',
  PRIMARY KEY (`kode_kas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_d_idx` (
  `kode_index` int(11) NOT NULL AUTO_INCREMENT,
  `nama_index` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_index`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_d_kls` (
  `kode_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `kode_lembaga` varchar(10) DEFAULT NULL,
  `nama_lembaga` varchar(50) DEFAULT NULL,
  `index_kelas` varchar(50) DEFAULT NULL,
  `tingkat_kelas` varchar(50) DEFAULT NULL,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  `sub_kelas` varchar(50) DEFAULT NULL,
  `nama_kelas` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`kode_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_d_lbg` (
  `kode_lembaga` varchar(10) NOT NULL DEFAULT '-',
  `nama_lembaga` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `kepsek` varchar(50) DEFAULT NULL,
  `wakasek` varchar(50) DEFAULT NULL,
  `bendahara` varchar(50) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `jenis` varchar(30) DEFAULT 'KAS',
  PRIMARY KEY (`kode_lembaga`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='lembaga';




CREATE TABLE `t_d_opt` (
  `kode_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_jurusan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_d_sis` (
  `kode_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(32) DEFAULT NULL,
  `nisn` varchar(32) DEFAULT NULL,
  `nama_siswa` varchar(64) DEFAULT NULL,
  `jk` varchar(15) DEFAULT NULL,
  `tmp_lahir` varchar(64) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nik` varchar(256) DEFAULT NULL,
  `kode_lembaga` varchar(10) DEFAULT NULL,
  `nama_lembaga` varchar(100) DEFAULT NULL,
  `kode_kelas` int(11) DEFAULT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `kelas_awal` varchar(100) DEFAULT NULL,
  `tingkat` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tahun_ajaran` varchar(9) DEFAULT '2010/2011',
  `tahun_kelulusan` int(11) DEFAULT NULL,
  `status_siswa` varchar(50) DEFAULT NULL,
  `nama_wali` varchar(64) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `kota` varchar(64) DEFAULT NULL,
  `telepon` varchar(64) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `foto_path` varchar(1024) DEFAULT NULL,
  `foto_pic` longblob,
  `usid` varchar(10) DEFAULT NULL,
  `ip` varchar(32) DEFAULT '-',
  `wk` datetime DEFAULT NULL,
  `jenis` varchar(30) DEFAULT 'KAS',
  `va` varchar(30) DEFAULT '-',
  PRIMARY KEY (`kode_siswa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_d_sis2` (
  `kode_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(32) DEFAULT NULL,
  `nisn` varchar(32) DEFAULT NULL,
  `nama_siswa` varchar(64) DEFAULT NULL,
  `jk` varchar(15) DEFAULT NULL,
  `tmp_lahir` varchar(64) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `nik` varchar(256) DEFAULT NULL,
  `kode_lembaga` varchar(10) DEFAULT NULL,
  `nama_lembaga` varchar(100) DEFAULT NULL,
  `kode_kelas` int(11) DEFAULT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `kelas_awal` varchar(100) DEFAULT NULL,
  `tingkat` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tahun_ajaran` varchar(9) DEFAULT '2010/2011',
  `tahun_kelulusan` int(11) DEFAULT NULL,
  `status_siswa` varchar(50) DEFAULT NULL,
  `nama_wali` varchar(64) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `kota` varchar(64) DEFAULT NULL,
  `telepon` varchar(64) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `foto_path` varchar(1024) DEFAULT NULL,
  `foto_pic` longblob,
  `usid` varchar(10) DEFAULT NULL,
  `ip` varchar(32) DEFAULT '-',
  `wk` datetime DEFAULT NULL,
  `jenis` varchar(30) DEFAULT 'KAS',
  `va` varchar(30) DEFAULT '-',
  PRIMARY KEY (`kode_siswa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_d_sis_d` (
  `kode_siswa` int(11) NOT NULL,
  `kode_kelas` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tingkat` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `uidup` varchar(32) DEFAULT NULL,
  `dtmup` datetime DEFAULT NULL,
  PRIMARY KEY (`kode_siswa`,`kode_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_d_sis_t` (
  `kode_siswa` int(11) NOT NULL,
  `kode_kelas` int(11) NOT NULL,
  `tahun` int(11) DEFAULT NULL,
  `tingkat` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `uidup` varchar(32) DEFAULT NULL,
  `dtmup` datetime DEFAULT NULL,
  PRIMARY KEY (`kode_siswa`,`kode_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_d_sub` (
  `kode_sub` int(11) NOT NULL AUTO_INCREMENT,
  `nama_sub` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_sub`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_d_tkt` (
  `kode_tingkat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tingkat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_tingkat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_g_db` (
  `a` varchar(250) NOT NULL DEFAULT '"C:\\"',
  `b` varchar(25) NOT NULL DEFAULT 'localhost',
  `c` varchar(50) NOT NULL DEFAULT 'root',
  `d` varchar(50) NOT NULL DEFAULT 'root',
  `e` varchar(50) NOT NULL DEFAULT 'symple_2013',
  `f` varchar(100) NOT NULL DEFAULT '"D:\\"',
  `g` char(2) NOT NULL DEFAULT '00',
  `h` char(10) NOT NULL DEFAULT '00:00:0060',
  `i` char(8) NOT NULL DEFAULT '00:00:00',
  `j` char(8) NOT NULL DEFAULT '00:00:00',
  UNIQUE KEY `a` (`a`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_g_g` (
  `a` varchar(250) NOT NULL DEFAULT '-',
  `b` mediumblob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_g_h` (
  `a` varchar(10) DEFAULT NULL,
  `b` varchar(25) DEFAULT NULL,
  `c` varchar(250) DEFAULT NULL,
  `d` varchar(15) NOT NULL DEFAULT 'FREE',
  `e` varchar(25) DEFAULT NULL,
  `f` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_gl` (
  `a` varchar(50) DEFAULT '00',
  `b` varchar(50) DEFAULT '00',
  `c` varchar(50) DEFAULT '00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO t_gl VALUES("2025-10-14","00","00");



CREATE TABLE `t_kurangan` (
  `kode_siswa` varchar(20) NOT NULL,
  `nama_siswa` varchar(150) NOT NULL,
  `iuran` varchar(50) DEFAULT '0',
  `bulanan` varchar(50) DEFAULT '0',
  `sampai` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




CREATE TABLE `t_p_s` (
  `a` varchar(10) NOT NULL DEFAULT '0.0.',
  `b` varchar(10) NOT NULL DEFAULT '.00.',
  `c` varchar(10) NOT NULL DEFAULT '9191',
  `d` varchar(10) NOT NULL DEFAULT '0000'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_pay` (
  `kode` varchar(50) DEFAULT NULL,
  `ks` varchar(50) DEFAULT NULL,
  `masuk` varchar(50) DEFAULT NULL,
  `tagihan` varchar(50) DEFAULT NULL,
  `charge` varchar(50) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




CREATE TABLE `t_s_p` (
  `kode_perusahaan` varchar(2) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahaan` varchar(250) DEFAULT NULL,
  `kota_perusahaan` varchar(20) DEFAULT NULL,
  `telepon_perusahaan` varchar(20) DEFAULT NULL,
  `fax_perusahaan` varchar(20) DEFAULT NULL,
  `npwp_perusahaan` varchar(25) DEFAULT NULL,
  `alamat_npwp` varchar(250) DEFAULT NULL,
  `tanggal_pkp` date DEFAULT NULL,
  `bank_perusahaan` varchar(30) NOT NULL DEFAULT '-',
  `norek_perusahaan` varchar(20) NOT NULL DEFAULT '-',
  `email_perusahaan` varchar(30) NOT NULL DEFAULT '-',
  `web_perusahaan` varchar(50) NOT NULL DEFAULT '-',
  `lokasi_perusahaan` varchar(20) DEFAULT NULL,
  `status_perusahaan` varchar(20) DEFAULT NULL,
  `pimpinan_perusahaan` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kode_perusahaan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_s_u` (
  `usid` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `alamat_karyawan` varchar(250) NOT NULL,
  `kota_karyawan` varchar(25) NOT NULL DEFAULT '-',
  `telepon_karyawan` varchar(20) DEFAULT NULL,
  `handphone_karyawan` varchar(20) DEFAULT NULL,
  `email_karyawan` varchar(30) NOT NULL DEFAULT '-',
  `bank_karyawan` varchar(50) NOT NULL DEFAULT '-',
  `norek_karyawan` varchar(20) NOT NULL DEFAULT '-',
  `kode_jabatan` varchar(20) NOT NULL,
  `status_user` varchar(10) NOT NULL,
  `pass` varchar(25) DEFAULT '123',
  `hak` varchar(40) NOT NULL,
  `ip_login` varchar(20) DEFAULT NULL,
  `nama_file` varchar(64) DEFAULT '-',
  `foto` longblob,
  PRIMARY KEY (`usid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_s_u_c` (
  `usid` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `analisa` char(1) NOT NULL DEFAULT '0',
  `bagian` varchar(50) NOT NULL DEFAULT '-',
  `status_user` varchar(10) DEFAULT NULL,
  `pass` varchar(25) DEFAULT '123',
  `ip_login` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`usid`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_s_ud` (
  `usid` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `alamat_karyawan` varchar(250) NOT NULL,
  `kota_karyawan` varchar(25) NOT NULL DEFAULT '-',
  `telepon_karyawan` varchar(20) DEFAULT NULL,
  `handphone_karyawan` varchar(20) DEFAULT NULL,
  `email_karyawan` varchar(30) NOT NULL DEFAULT '-',
  `bank_karyawan` varchar(50) NOT NULL DEFAULT '-',
  `norek_karyawan` varchar(20) NOT NULL DEFAULT '-',
  `kode_jabatan` varchar(20) NOT NULL,
  `status_user` varchar(10) NOT NULL,
  `pass` varchar(25) DEFAULT '123',
  `hak` varchar(40) NOT NULL,
  `ip_login` varchar(20) DEFAULT NULL,
  `nama_file` varchar(64) DEFAULT '-',
  `foto` longblob,
  PRIMARY KEY (`usid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_s_y` (
  `usid` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `alamat_karyawan` varchar(250) NOT NULL,
  `kota_karyawan` varchar(25) NOT NULL DEFAULT '-',
  `telepon_karyawan` varchar(20) DEFAULT NULL,
  `handphone_karyawan` varchar(20) DEFAULT NULL,
  `email_karyawan` varchar(30) NOT NULL DEFAULT '-',
  `bank_karyawan` varchar(50) NOT NULL DEFAULT '-',
  `norek_karyawan` varchar(20) NOT NULL DEFAULT '-',
  `kode_jabatan` varchar(20) NOT NULL,
  `status_user` varchar(10) NOT NULL,
  `pass` varchar(25) DEFAULT '123',
  `hak` varchar(40) NOT NULL,
  `ip_login` varchar(20) DEFAULT NULL,
  `nama_file` varchar(64) DEFAULT '-',
  `foto` longblob,
  PRIMARY KEY (`usid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE `t_t_bayar` (
  `kode_transaksi` varchar(50) NOT NULL,
  `tgl` date DEFAULT NULL,
  `jns` varchar(50) DEFAULT NULL,
  `kode_siswa` varchar(11) DEFAULT NULL,
  `masuk` decimal(18,2) DEFAULT NULL,
  `keluar` decimal(18,2) DEFAULT NULL,
  `bayar` decimal(18,2) DEFAULT NULL,
  `kembali` decimal(18,2) DEFAULT NULL,
  `transaktor_1` varchar(64) DEFAULT NULL,
  `transaktor_2` varchar(64) DEFAULT NULL,
  `ket` varchar(800) DEFAULT NULL,
  `terbilang` varchar(599) DEFAULT NULL,
  `usid` varchar(100) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `status_siswa` varchar(50) DEFAULT NULL,
  `nik` varchar(40) DEFAULT '0',
  PRIMARY KEY (`kode_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_t_bayar_d` (
  `kode_transaksi` varchar(50) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `kode_kas` int(11) DEFAULT NULL,
  `kode_bayar` int(11) DEFAULT NULL,
  `nama_bayar` varchar(500) DEFAULT NULL,
  `bulan` int(11) DEFAULT NULL,
  `iskhusus` int(11) DEFAULT NULL,
  `istotal_dikartu` int(11) DEFAULT NULL,
  `bayar` decimal(18,2) DEFAULT NULL,
  `sisa` decimal(18,2) DEFAULT NULL,
  `usid` varchar(10) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT '-',
  `status_siswa` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_t_bayar_d_temp` (
  `kode_transaksi` varchar(50) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `kode_kas` int(11) DEFAULT NULL,
  `kode_bayar` int(11) DEFAULT NULL,
  `nama_bayar` varchar(500) DEFAULT NULL,
  `bulan` int(11) DEFAULT NULL,
  `iskhusus` int(11) DEFAULT NULL,
  `istotal_dikartu` int(11) DEFAULT NULL,
  `bayar` decimal(18,2) DEFAULT NULL,
  `sisa` decimal(18,2) DEFAULT NULL,
  `usid` varchar(10) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT '-',
  `status_siswa` varchar(10) DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_t_bayar_no` (
  `kode_transaksi` varchar(50) NOT NULL,
  `tgl` date DEFAULT NULL,
  `jns` varchar(50) DEFAULT NULL,
  `kode_siswa` varchar(11) DEFAULT NULL,
  `masuk` decimal(18,2) DEFAULT NULL,
  `keluar` decimal(18,2) DEFAULT NULL,
  `bayar` decimal(18,2) DEFAULT NULL,
  `kembali` decimal(18,2) DEFAULT NULL,
  `transaktor_1` varchar(64) DEFAULT NULL,
  `transaktor_2` varchar(64) DEFAULT NULL,
  `ket` varchar(800) DEFAULT NULL,
  `terbilang` varchar(599) DEFAULT NULL,
  `usid` varchar(100) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `status_siswa` varchar(50) DEFAULT NULL,
  `nik` varchar(40) DEFAULT '0',
  PRIMARY KEY (`kode_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_t_bayar_not` (
  `kode_transaksi` varchar(50) NOT NULL,
  `tgl` date DEFAULT NULL,
  `jns` varchar(50) DEFAULT NULL,
  `kode_siswa` varchar(11) DEFAULT NULL,
  `masuk` decimal(18,2) DEFAULT NULL,
  `keluar` decimal(18,2) DEFAULT NULL,
  `bayar` decimal(18,2) DEFAULT NULL,
  `kembali` decimal(18,2) DEFAULT NULL,
  `transaktor_1` varchar(64) DEFAULT NULL,
  `transaktor_2` varchar(64) DEFAULT NULL,
  `ket` varchar(800) DEFAULT NULL,
  `terbilang` varchar(599) DEFAULT NULL,
  `usid` varchar(100) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `status_siswa` varchar(50) DEFAULT NULL,
  `nik` varchar(40) DEFAULT '0',
  PRIMARY KEY (`kode_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_t_bayar_t` (
  `kode_transaksi` varchar(50) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `kode_kas` int(11) DEFAULT NULL,
  `kode_bayar` int(11) DEFAULT NULL,
  `nama_bayar` varchar(500) DEFAULT NULL,
  `bulan` int(11) DEFAULT NULL,
  `iskhusus` int(11) DEFAULT NULL,
  `istotal_dikartu` int(11) DEFAULT NULL,
  `bayar` decimal(18,2) DEFAULT NULL,
  `sisa` decimal(18,2) DEFAULT NULL,
  `usid` varchar(10) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT '-',
  `status_siswa` varchar(10) DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_t_bayari` (
  `kode_transaksi` varchar(32) NOT NULL,
  `tgl` date DEFAULT NULL,
  `jns` varchar(50) DEFAULT NULL,
  `kode_siswa` int(11) DEFAULT NULL,
  `masuk` decimal(18,2) DEFAULT NULL,
  `keluar` decimal(18,2) DEFAULT NULL,
  `bayar` decimal(18,2) DEFAULT NULL,
  `kembali` decimal(18,2) DEFAULT NULL,
  `transaktor_1` varchar(64) DEFAULT NULL,
  `transaktor_2` varchar(64) DEFAULT NULL,
  `ket` varchar(256) DEFAULT NULL,
  `terbilang` varchar(256) DEFAULT NULL,
  `usid` varchar(10) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  PRIMARY KEY (`kode_transaksi`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_t_bayari_d` (
  `kode_transaksi` varchar(32) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `kode_kas` int(11) DEFAULT NULL,
  `kode_bayar` int(11) DEFAULT NULL,
  `nama_bayar` varchar(500) DEFAULT NULL,
  `bulan` int(11) DEFAULT NULL,
  `iskhusus` int(11) DEFAULT NULL,
  `istotal_dikartu` int(11) DEFAULT NULL,
  `bayar` decimal(18,2) DEFAULT NULL,
  `sisa` decimal(18,2) DEFAULT NULL,
  `usid` varchar(10) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_t_bayari_t` (
  `kode_transaksi` varchar(32) NOT NULL,
  `no_urut` int(11) NOT NULL,
  `kode_kas` int(11) DEFAULT NULL,
  `kode_bayar` int(11) DEFAULT NULL,
  `nama_bayar` varchar(500) DEFAULT NULL,
  `bulan` int(11) DEFAULT NULL,
  `iskhusus` int(11) DEFAULT NULL,
  `istotal_dikartu` int(11) DEFAULT NULL,
  `bayar` decimal(18,2) DEFAULT NULL,
  `sisa` decimal(18,2) DEFAULT NULL,
  `usid` varchar(10) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `ip` varchar(50) DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_temp_lap_bayar` (
  `kode_transaksi` varchar(50) DEFAULT NULL,
  `nama_bayar` varchar(500) DEFAULT NULL,
  `bulan` varchar(3) DEFAULT NULL,
  `sisa` double(15,2) DEFAULT NULL,
  `usid` varchar(10) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `kode_siswa` varchar(20) DEFAULT NULL,
  `transaktor_2` varchar(50) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `kode_kas` varchar(20) DEFAULT NULL,
  `nama_kas` varchar(250) DEFAULT NULL,
  `kode_lembaga` varchar(20) DEFAULT NULL,
  `nama_lembaga` varchar(250) DEFAULT NULL,
  `nama_siswa` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `t_temp_lap_inop` (
  `sisa` double(15,2) DEFAULT NULL,
  `usid` varchar(10) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `transaktor_2` varchar(50) DEFAULT NULL,
  `kode_lembaga` varchar(20) DEFAULT NULL,
  `nama_lembaga` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `t_temp_lap_pembayaran` (
  `kode_transaksi` varchar(50) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `nama_siswa` varchar(250) DEFAULT NULL,
  `masuk` double(15,2) DEFAULT NULL,
  `bayar` double(15,2) DEFAULT NULL,
  `kembali` double(15,2) DEFAULT NULL,
  `transaktor_2` varchar(30) DEFAULT NULL,
  `ket` varchar(500) DEFAULT NULL,
  `terbilang` varchar(500) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `kode_siswa` varchar(30) DEFAULT NULL,
  `nama_kelas` varchar(300) DEFAULT NULL,
  `usid` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `t_temp_lap_tabungan` (
  `kode_transaksi` varchar(50) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `masuk` double(15,2) DEFAULT NULL,
  `keluar` double(15,2) DEFAULT NULL,
  `bayar` double(15,2) DEFAULT NULL,
  `ket` varchar(256) DEFAULT NULL,
  `usid` varchar(10) DEFAULT NULL,
  `waktu` datetime DEFAULT NULL,
  `nis` varchar(30) DEFAULT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `nama_karyawan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `t_temp_tunggakan` (
  `no` bigint(18) NOT NULL AUTO_INCREMENT,
  `kode_siswa` varchar(25) DEFAULT NULL,
  `nik` varchar(40) DEFAULT NULL,
  `kode_bayar` int(11) DEFAULT NULL,
  `nama_bayar` varchar(500) DEFAULT '-',
  `idbulan` varchar(5) DEFAULT NULL,
  `urut` tinyint(2) DEFAULT NULL,
  `bulan` varchar(20) DEFAULT '-',
  `tahun` smallint(6) DEFAULT NULL,
  `tahuna` smallint(6) DEFAULT NULL,
  `total` decimal(12,2) DEFAULT NULL,
  `bayar` decimal(12,2) DEFAULT NULL,
  `sisa` decimal(13,2) DEFAULT '0.00',
  `userid` varchar(10) DEFAULT '-',
  PRIMARY KEY (`no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_temp_tunggakan_yayasan` (
  `kode_lembaga` varchar(8) DEFAULT NULL,
  `nama_lembaga` varchar(100) NOT NULL,
  `kode_kas` int(11) NOT NULL,
  `kode_bayar` int(11) NOT NULL,
  `nama_bayar` varchar(500) NOT NULL DEFAULT '-',
  `idbulan` varchar(5) NOT NULL,
  `urut` tinyint(2) DEFAULT NULL,
  `bulan` varchar(20) NOT NULL DEFAULT '-',
  `tahun` smallint(6) NOT NULL,
  `tahuna` smallint(6) DEFAULT NULL,
  `total` decimal(20,2) DEFAULT NULL,
  `bayar` decimal(20,2) DEFAULT NULL,
  `sisa` decimal(20,2) NOT NULL DEFAULT '0.00',
  `jenis` char(1) NOT NULL DEFAULT 'B',
  `userid` varchar(10) DEFAULT '-',
  `namasis` varchar(100) DEFAULT NULL,
  `statussis` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_temp_tunggakan_ydm` (
  `nama_lembaga` varchar(40) NOT NULL,
  `tahun` smallint(6) NOT NULL,
  `bayar` decimal(20,2) DEFAULT '0.00',
  `belum` decimal(20,2) DEFAULT NULL,
  `total` decimal(20,2) DEFAULT '0.00',
  `userid` varchar(10) DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;




CREATE TABLE `t_tunggakan` (
  `kode_siswa` varchar(50) DEFAULT '0',
  `tahun` varchar(50) DEFAULT '0',
  `nilai` double DEFAULT NULL,
  `status` varchar(50) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


