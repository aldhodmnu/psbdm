

CREATE TABLE `pendaftaran` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `no_seri_ijazah` varchar(50) DEFAULT NULL,
  `no_seri_skhun` varchar(50) DEFAULT NULL,
  `nisn` varchar(25) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `no_kk` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `jumlah_saudara` int(11) DEFAULT NULL,
  `penyakit` varchar(128) DEFAULT NULL,
  `no_hp` varchar(64) DEFAULT NULL,
  `no_whatsapp` varchar(64) DEFAULT NULL,
  `akun_instagram` varchar(128) DEFAULT NULL,
  `akun_facebook` varchar(128) DEFAULT NULL,
  `masuk_sebagai` varchar(128) NOT NULL,
  `berat_tinggi` varchar(128) NOT NULL,
  `ukuran_baju` varchar(4) NOT NULL,
  `rt` varchar(12) NOT NULL,
  `rw` varchar(12) NOT NULL,
  `dusun` varchar(128) NOT NULL,
  `kelurahan` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `kabupaten` varchar(128) NOT NULL,
  `provinsi` varchar(128) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `ekstrakurikuler` varchar(128) NOT NULL,
  `sekolah_asal` varchar(128) NOT NULL,
  `prestasi` varchar(128) DEFAULT NULL,
  `kode_pos` varchar(12) DEFAULT NULL,
  `jenjang` varchar(128) NOT NULL,
  `kesediaan` varchar(32) DEFAULT '3',
  `alasan` varchar(32) NOT NULL,
  `kaisar` varchar(12) DEFAULT NULL,
  `informasi_dari` varchar(32) NOT NULL,
  `p_informasi` varchar(128) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `nik_ayah` varchar(64) NOT NULL,
  `tahun_lahir_ayah` varchar(128) NOT NULL,
  `pendidikan_ayah` varchar(128) NOT NULL,
  `pernah_pondok_ayah` varchar(12) NOT NULL,
  `pesantren_ayah` varchar(128) DEFAULT NULL,
  `pekerjaan_ayah` varchar(32) NOT NULL,
  `penghasilan_ayah` varchar(32) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nik_ibu` varchar(64) NOT NULL,
  `tahun_lahir_ibu` varchar(128) NOT NULL,
  `pendidikan_ibu` varchar(32) NOT NULL,
  `pernah_pondok_ibu` varchar(12) NOT NULL,
  `pesantren_ibu` varchar(128) DEFAULT NULL,
  `pekerjaan_ibu` varchar(32) NOT NULL,
  `penghasilan_ibu` varchar(32) NOT NULL,
  `tahun` varchar(10) DEFAULT '2025',
  `tanggal` varchar(100) DEFAULT '2025-01-01',
  `status` varchar(20) DEFAULT 'Masih Seleksi',
  `statussantri` varchar(10) DEFAULT 'BARU',
  `klssekolah` varchar(10) DEFAULT 'X',
  `asrpontren` varchar(25) DEFAULT 'JOKOWI',
  `ajaran` varchar(10) DEFAULT '2025/2026',
  `gelombang` varchar(10) DEFAULT 'PERTAMA',
  `bayardaftar` varchar(10) DEFAULT 'BELUM',
  `bayarulang` varchar(10) DEFAULT 'BELUM',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO pendaftaran VALUES("1","TES","","","98765-","","","-","2025-08-03","-","","","","","","","","","","","","","","","","","","-","","","","","","","","","","","","","","","","","","","","","","","","","","","2025","2025-01-01","-","BARU","X","JOKOWI","2025/2026","-","-","-");
INSERT INTO pendaftaran VALUES("17","KAYLA HANA SHAFIRA","0","0","0133586264","3213155210130001","3213150502150003","Subang","2010-10-12","P","1","2","-","082315971113","082315971113","-","Nayyara make up","SB","160","L","14","06","Mangir","Compreng","Compreng","Subang","Jawabarat","Dsn compreng rt14/06 dsa compreng kec compreng kab subang","PMR","Sdit al hidayah","-","41258","SMP","3","SENDIRI","TIDAK","Teman","Teman teman sekolah y","Aan rudianto ","3213302308850001","1985","S1","T","-","GURU",">7.000.000","Sukaesih","3213156008920002","1992","SLTA","T","-","WIRASWASTA",">7.000.000","2025","2025-01-01","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","BELUM","BELUM");
INSERT INTO pendaftaran VALUES("22","REIZA DHAFIN HANIF","111202508445009","0","202115221","3209071703130003","32090721121200005","Kota cirebon","2013-03-17","L","1","2","0","082127810810","082127810810","0","0","SP","40/160","L","23","07","Dusun 03","Sarajaya","Lemahabang","Cirebon","Jawa barat","Sarajaya, lemahabang, cirebon, jawa barat","BASKET","SMP NEGERI 1 Karangsembung","0","45183","SMP","3","SENDIRI","TIDAK","Teman","Saudara","Dwny haryanto","3209062502860003","1986","S1","T","Tidak","KARYAWAN","<5.000.000","Silfia fitriani","3209075604910009","1991","S1","T","Tidak","IRT","<5.000.000","2025","2025-01-01","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","DIBAYAR","BELUM");
INSERT INTO pendaftaran VALUES("23","ALESHA BELLVANIA NAPRILIS","1","1","0134337553","3520036012130001","3215212310150004","magetan","2013-02-01","P","1","2","-","+62895359110008","62895359110008","Sulistiastiwi_rasit","Ssulistiastiwi Rasit","","51kg/152","XL","57","11","DC","Bengle","Majalaya","Karawang","jawa barat","perum citra kebun mas blok DC no 36 DS.Bengle RT:57 RW:11 Kec.:Majalaya Kab :Karawang","","MI Ar Rahmah","peringkat 10 besar","41370","SMP","3","SENDIRI","TIDAK","Teman","Bu Parti","supriyono","3520021211840002","1984","SLTA","T","bukan","KARYAWAN",">7.000.000","Sulistiastiwi Indah Ratnasari","3520035101870001","1987","SLTA","T","bukan","IRT","<3.000.000","2025","2025-01-01","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","DIBAYAR","BELUM");
INSERT INTO pendaftaran VALUES("26","AZMI FAUZAN HARRAS","0000","0000","0141222232","3212310906140002","3216072504180016","Indramayu","2014-06-09","L","1","2","-","087779396614","087779396614","faisal_ichongk","Faisal Akhmad Harras","SB","Bb 38 & Tb 147","XL","001","016","Perum Puri lestari blok C10 no. 17","Sukajaya","Cibitung","Bekasi","Jawa barat","Perumahan puri lestari blok c10 . No.17. rt/RW 001/016 . Desa sukajaya. Kec. Cibitung. Kab. Bekasi. Provinsi jawa barat","FUTSAL","SDN sukajaya 02","Rangking 6 di kelas 5","17520","SMP","3","SENDIRI","TIDAK","Instagram","-","FAISAL AKHMAD HARRAS","3212240312910002","1991","SLTA","T","-","KARYAWAN",">7.000.000","NURJANAH","3212315506930002","1993","SLTA","T","-","IRT","","2025","2025-01-01","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","DIBAYAR","BELUM");
INSERT INTO pendaftaran VALUES("30","AGHNA FARID ANDRIKA","00000","00000","3147197677","3215262704140004","3215262101130012","Karawang","2014-04-27","L","1","1","Tidak Ada","081574904200","081574904200","wibowoandriawan","Andriawan Wibowo","SB","37 kg / 130","XL","002","005","Cinangoh Barat 1 GG.Beo","Karawang Wetan","Karawang Timur","Karawang","Jawa Barat","Cinangoh Barat 1 GG.Beo RT: 002 RW: 005 Kel.Karawang Wetan Kec.Karawang Timur Kab.Karawang 41314","FUTSAL","SDIT AT-TAUBAH","Tidak Ada","41314","SMP","3","SENDIRI","TIDAK","Instagram","-","Andriawan Wibowo","3216070709860010","1986","SLTA","Y","PonPes Al-Husain Krakitan Magelang","KARYAWAN",">7.000.000","Rika Barkah","3215016706870008","1987","SLTA","T","-","IRT","<3.000.000","2025","2025-01-01","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","DIBAYAR","BELUM");
INSERT INTO pendaftaran VALUES("31","ABIDZAR JUNIOR ROSAMANTA","0","0","0","3213101606130001","3213102204080021","subang","2013-12-06","L","2","2","0","085134309706","0","0","0","SB","0","","2","6","dusun kalen tambo 2","kalentambo","pusakanegara","subang","jawa barat","dusun kalentambo 2 rw.06 rt.02 kec. pusakanegara","","SD","0","41255","SMP","3","","","","tahu sendiri","sumanta","32131000706800010","1980","","","0","","","anisa rosiana","3213106011810004","1981","","","0","","","2025","2025-01-01","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","DIBAYAR","BELUM");
INSERT INTO pendaftaran VALUES("33","ALI SAPUTRA ","0","0","0","3213151909130002","3213150307120020","subang","2013-09-19","L","1","1","0","083176682729","0","0","0","SB","0","","007","003","dusun compreng","compreng","compreng","subang","jawa barat","dusun compreng rw.07 rt.03 kec. compreng kab.subang provinsi jawa barat","","SD","0","41258","SMP","3","","","","tahu sendiri","angga riyanto","321315210390001","1989","","","0","","","ika palaguna","3213155707930001","1993","","","0","","","2025","2025-01-01","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","BELUM","BELUM");
INSERT INTO pendaftaran VALUES("35","WIHAYA NADIA CHERLYN","0","0","0","3212056311130001","3212051212130003","indramayu","2013-11-23","P","1","1","tidak ada","0895414838788","0895414838788","momy_cherlyn","wihaya nadia cherlyn","SB","26kg/145cm","M","02","01","A","Nunuk","Lelea","Indramayu","Jawa barat","desa. nunuk blok A RT.02 RW.01","PRAMUKA","SD negeri nunuk 1","tidak ada","45261","SMP","3","SENDIRI","TIDAK","Website","tidak ada","Irvan anggara","3212050508920003","1992","SLTA","T","tidak","WIRASWASTA","<5.000.000","Ika nur indah","3212055205940004","1994","SLTA","T","tidak","IRT","<5.000.000","2025","2025-01-01","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","DIBAYAR","BELUM");
INSERT INTO pendaftaran VALUES("37","ARTA AIDAN SYAHM","0","0","0","0","0","Tangsel","2013-11-01","L","1","1","Tidak ada","087716626448","087716626448","Mizianita Utami","Zianita Utami","SB","45/130","L","4","1","BLOK B8 SAWAH","SAWAH LAMA","CIPUTAT","TANGSEL","BANTEN","JL.ELANG 4 BLOK B8 SAWAH - CIPUTAT, TANGSEL ","FUTSAL","SDIT AL-UMMAH","MEDALI TAEKWONDO","15413","SMP","3","SENDIRI","TIDAK","INSTAGRAM","DARI INSTAGRAM","ARI IBNU JARIR","3175071711790013","1979","S1","T","-","WIRASWASTA",">7.000.000","ZIANITA UTAMI","3674067103860002","1986","S1","T","-","IRT","<3.000.000","2025","2025-01-01","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","BELUM","BELUM");
INSERT INTO pendaftaran VALUES("38","GEFFAN ADHEAN NAUFAL","0","0","0","3212020109130002","3212022110210001","Indramayu","2013-09-01","L","1","1","-","081322773762","081322773762","Umira","Umira","SB","141 cm / 35 kg","M","003","001","TEMIYANGSARI BLOK GEBUR","TEMIYANGSARI","KROYA","INDRAMAYU","JAWA BARAT","BLOK GEBUR TEMIYANGSARI KROYA, INDRAMAYU JAWA BARAT 003/001","FUTSAL","SD ISLAM AL-JANNAH","-","45265","SMP","3","SENDIRI","TIDAK","TEMAN","TEMAN","DIDI SUPRIYADI","0","0","SLTP","T","Tidak","WIRASWASTA","<5.000.000","UMIRAH BINTI NURDIYAH","3212026506850005","1986","SLTA","T","Tidak","PETANI","<3.000.000","2025","09-Aug-2025 11:03:45","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","DIBAYAR","BELUM");
INSERT INTO pendaftaran VALUES("39","FAEYZA GHAISAN PUTRA DANURI ","0","0","0","3213130802140001","3215151411190002","Karawang","2014-08-02","L","1","2","tidak ada","08989468876","08989468876","-","-","SB","45 kg / 145 cm","M","003","009","BUNUT DUSUN. KETIMPAL","CILAMAYA","CILAMAYA WETAN ","KARAWANG","JAWA BARAT","BUNUT DUSUN. KETIMPAL CILAMAYA WETAN KARAWANG JAWA BARAT ","PRAMUKA","SDN 4 CILAMAYA KARAWANG","BELUM DICANTUMKAN ","41386","SMP","3","SENDIRI","TIDAK","TEMAN","TEMAN","VERI DANURI ","3213131009820002","1982","SLTA","T","tidak ","WIRASWASTA","<3.000.000","DEWI BANDAWATI","3213134911900003","1990","SLTA","T","tidak ","WIRASWASTA","<5.000.000","2025","09-Aug-2025 11:46:52","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","BELUM","BELUM");
INSERT INTO pendaftaran VALUES("40","SAFRIJAL NADHIR WIBOWO","0","0","0","3212130103140001","3212243007180006","Indramayu ","2014-03-01","L","1","2","-","087717722011","087717722011","-","-","SB","60/175","XL","01","02","BLOK 2","TEGALTAMAN ","SUKRA","INDRAMAYU ","JAWA BARAT ","BLOK 2 TEGALTAMAN RT. 01 RW.02","PRAMUKA","SDN 1 TEGALTAMAN","-","45257","SMP","3","SENDIRI","TIDAK","FACEBOOK","FB","HASBY ASHIDIQI WIBOWO ","32122132706880002","1988","S1","Y","PPIM & Ponpes Ashidiqiyyah ","WIRASWASTA","<5.000.000","JUNENGSIH ","3212","1988","D3","Y","AFMI Babakan Ciwaringin ","PERAWAT","<5.000.000","2025","09-Aug-2025 15:01:57","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","BELUM","BELUM");
INSERT INTO pendaftaran VALUES("41","FAHRI ALVIAN FIRDAUS","0","0","111232150042201013","3215290209130004","3215290503200009","KARAWANG","2013-09-02","L","2","3","-","082269092861","082269092861","-","-","SB","45 / 147","XL","27","10","M 5","SARIMULYA","KOTABARU","KARAWANG","JAWA BARAT ","PERUMAHAN SUKASEURI BLOK M NO 5, KOTABARU, KARAWANG, JAWA BARAT","HADROH","MI NURUL HUDA CIKAMPEK","-","41377","SMP","3","SENDIRI","TIDAK","KELUARGA","SHIVA AURELIA FIRDAUS","ROYYAN YOSERIZAL FIRDAUS ","3204440908810005","1981","S1","T","-","WIRASWASTA",">7.000.000","LAURA KURNIA ","3215294805800003","1980","SLTA","T","-","IRT",">7.000.000","2025","10-Aug-2025 12:44:51","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","BELUM","BELUM");
INSERT INTO pendaftaran VALUES("42","ANISA DAIVA PRAMESWARI","0","0","0","3213155702130001","3213150404062589","Subang ","2013-02-17","P","3","2","Tidak ada","087720560871","087720560871","Tidak ada","Tidak ada","SB","40/148","M","09","04","COMPRENG","COMPRENG","COMP5","SUBANG ","JAWA BARAT","COMPRENG RT 09 RW 04 DS.COMPRENG KEC. COMPRENG KAB.COMPRENG","PRAMUKA","MI BAHRUL HUDA","TIDAK ADA","41258","SMP","3","SENDIRI","TIDAK","KELUARGA","KELUARGA","ENTANG FITRIANA","3213150509780003","05091978","S1","T","_","WIRASWASTA","<5.000.000","IIN SUHAENI","3213154802800010","08021980","S1","T","Babakan Ciwaringin ","IRT","<5.000.000","2025","10-Aug-2025 09:59:20","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","DIBAYAR","BELUM");
INSERT INTO pendaftaran VALUES("43","GURUH PRAYOGA AKID HARYANTO","0","0","0","3213030208140003","3213030612120005","Subang ","2014-08-02","L","1","1","Tidak ada ","085134902374","085134902374","Tidak ","Tidak ada ","SB","40/145","M","082","024","CIGADUNG","CIGADUNG","SUBANG ","SUBANG ","JAWA BARAT ","PERUM GRIYA PRATAMA ASRI BLOK A NO 12 CIGADUNG - SABANG ","PRAMUKA","MI BAHRUL HUDA ","TIDAK ADA ","41214","SMP","3","SENDIRI","TIDAK","KELUARGA","KELUARGA ","HARYANTO ","3213032507830005","1983","S1","T","Tidak","TNI","<5.000.000","NIA KURNIAWATI","3213155801900001","1990","S1","T","Tidak","IRT","<5.000.000","2025","10-Aug-2025 10:14:22","Diterima","BARU","X","JOKOWI","2025/2026","PERTAMA","DIBAYAR","BELUM");



CREATE TABLE `temp_laporan` (
  `a1` varchar(5) DEFAULT NULL,
  `a` varchar(250) NOT NULL,
  `b` varchar(250) NOT NULL,
  `c` varchar(250) NOT NULL,
  `d` varchar(250) NOT NULL,
  `e` varchar(250) NOT NULL,
  `f` varchar(250) NOT NULL,
  `g` varchar(250) NOT NULL,
  `h` varchar(250) NOT NULL,
  `i` varchar(250) NOT NULL,
  `j` varchar(250) NOT NULL,
  `k` varchar(250) NOT NULL,
  `l` varchar(250) NOT NULL,
  `m` varchar(250) NOT NULL,
  `n` varchar(250) NOT NULL,
  `o` varchar(250) NOT NULL,
  `p` varchar(250) NOT NULL,
  `q` varchar(250) NOT NULL,
  `r` varchar(250) NOT NULL,
  `r1` varchar(50) DEFAULT NULL,
  `r2` varchar(50) DEFAULT NULL,
  `s` varchar(250) NOT NULL,
  `t` varchar(250) NOT NULL,
  `u` varchar(250) NOT NULL,
  `v` varchar(250) NOT NULL,
  `w` varchar(250) NOT NULL,
  `x` varchar(250) NOT NULL,
  `y` varchar(250) NOT NULL,
  `z` varchar(250) NOT NULL,
  `aa` varchar(250) NOT NULL,
  `bb` varchar(250) NOT NULL,
  `cc` varchar(250) NOT NULL,
  `dd` varchar(250) NOT NULL,
  `ee` varchar(250) NOT NULL,
  `ff` varchar(250) NOT NULL,
  `gg` varchar(250) NOT NULL,
  `hh` varchar(250) NOT NULL,
  `ii` varchar(250) NOT NULL,
  `jj` varchar(250) NOT NULL,
  `kk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO temp_laporan VALUES("17","KAYLA HANA SHAFIRA","0133586264","3213155210130001","Subang","2010-10-12","P","1","2","-","082315971113","082315971113","-","Nayyara make up","SB","160","L","1406-Mangir-Compreng","Compreng","Subang","Jawabarat","Dsn compreng rt14/06 dsa compreng kec compreng kab subang","PMR","Sdit al hidayah","-","SMP","3","SENDIRI","TIDAK","Teman","Teman teman sekolah y","Aan rudianto -S1-GURU->7.000.000","Sukaesih-SLTA-WIRASWASTA->7.000.000","Diterima","PERTAMA","995.017","BELUM","BELUM","2025","2025-01-01");
INSERT INTO temp_laporan VALUES("22","REIZA DHAFIN HANIF","202115221","3209071703130003","Kota cirebon","2013-03-17","L","1","2","0","082127810810","082127810810","0","0","SP","40/160","L","2307-Dusun 03-Sarajaya","Lemahabang","Cirebon","Jawa barat","Sarajaya, lemahabang, cirebon, jawa barat","BASKET","SMP NEGERI 1 Karangsembung","0","SMP","3","SENDIRI","TIDAK","Teman","Saudara","Dwny haryanto-S1-KARYAWAN-<5.000.000","Silfia fitriani-S1-IRT-<5.000.000","Diterima","PERTAMA","995.022","DIBAYAR","BELUM","2025","2025-01-01");
INSERT INTO temp_laporan VALUES("23","ALESHA BELLVANIA NAPRILIS","0134337553","3520036012130001","magetan","2013-02-01","P","1","2","-","+62895359110008","62895359110008","Sulistiastiwi_rasit","Ssulistiastiwi Rasit","","51kg/152","XL","5711-DC-Bengle","Majalaya","Karawang","jawa barat","perum citra kebun mas blok DC no 36 DS.Bengle RT:57 RW:11 Kec.:Majalaya Kab :Karawang","","MI Ar Rahmah","peringkat 10 besar","SMP","3","SENDIRI","TIDAK","Teman","Bu Parti","supriyono-SLTA-KARYAWAN->7.000.000","Sulistiastiwi Indah Ratnasari-SLTA-IRT-<3.000.000","Diterima","PERTAMA","995.023","DIBAYAR","BELUM","2025","2025-01-01");
INSERT INTO temp_laporan VALUES("26","AZMI FAUZAN HARRAS","0141222232","3212310906140002","Indramayu","2014-06-09","L","1","2","-","087779396614","087779396614","faisal_ichongk","Faisal Akhmad Harras","SB","Bb 38 & Tb 147","XL","001016-Perum Puri lestari blok C10 no. 17-Sukajaya","Cibitung","Bekasi","Jawa barat","Perumahan puri lestari blok c10 . No.17. rt/RW 001/016 . Desa sukajaya. Kec. Cibitung. Kab. Bekasi. Provinsi jawa barat","FUTSAL","SDN sukajaya 02","Rangking 6 di kelas 5","SMP","3","SENDIRI","TIDAK","Instagram","-","FAISAL AKHMAD HARRAS-SLTA-KARYAWAN->7.000.000","NURJANAH-SLTA-IRT-","Diterima","PERTAMA","995.026","DIBAYAR","BELUM","2025","2025-01-01");
INSERT INTO temp_laporan VALUES("30","AGHNA FARID ANDRIKA","3147197677","3215262704140004","Karawang","2014-04-27","L","1","1","Tidak Ada","081574904200","081574904200","wibowoandriawan","Andriawan Wibowo","SB","37 kg / 130","XL","002005-Cinangoh Barat 1 GG.Beo-Karawang Wetan","Karawang Timur","Karawang","Jawa Barat","Cinangoh Barat 1 GG.Beo RT: 002 RW: 005 Kel.Karawang Wetan Kec.Karawang Timur Kab.Karawang 41314","FUTSAL","SDIT AT-TAUBAH","Tidak Ada","SMP","3","SENDIRI","TIDAK","Instagram","-","Andriawan Wibowo-SLTA-KARYAWAN->7.000.000","Rika Barkah-SLTA-IRT-<3.000.000","Diterima","PERTAMA","995.030","DIBAYAR","BELUM","2025","2025-01-01");
INSERT INTO temp_laporan VALUES("31","ABIDZAR JUNIOR ROSAMANTA","0","3213101606130001","subang","2013-12-06","L","2","2","0","085134309706","0","0","0","SB","0","","26-dusun kalen tambo 2-kalentambo","pusakanegara","subang","jawa barat","dusun kalentambo 2 rw.06 rt.02 kec. pusakanegara","","SD","0","SMP","3","","","","tahu sendiri","sumanta---","anisa rosiana---","Diterima","PERTAMA","995.031","DIBAYAR","BELUM","2025","2025-01-01");
INSERT INTO temp_laporan VALUES("33","ALI SAPUTRA ","0","3213151909130002","subang","2013-09-19","L","1","1","0","083176682729","0","0","0","SB","0","","007003-dusun compreng-compreng","compreng","subang","jawa barat","dusun compreng rw.07 rt.03 kec. compreng kab.subang provinsi jawa barat","","SD","0","SMP","3","","","","tahu sendiri","angga riyanto---","ika palaguna---","Diterima","PERTAMA","995.033","BELUM","BELUM","2025","2025-01-01");
INSERT INTO temp_laporan VALUES("35","WIHAYA NADIA CHERLYN","0","3212056311130001","indramayu","2013-11-23","P","1","1","tidak ada","0895414838788","0895414838788","momy_cherlyn","wihaya nadia cherlyn","SB","26kg/145cm","M","0201-A-Nunuk","Lelea","Indramayu","Jawa barat","desa. nunuk blok A RT.02 RW.01","PRAMUKA","SD negeri nunuk 1","tidak ada","SMP","3","SENDIRI","TIDAK","Website","tidak ada","Irvan anggara-SLTA-WIRASWASTA-<5.000.000","Ika nur indah-SLTA-IRT-<5.000.000","Diterima","PERTAMA","995.035","DIBAYAR","BELUM","2025","2025-01-01");
INSERT INTO temp_laporan VALUES("37","ARTA AIDAN SYAHM","0","0","Tangsel","2013-11-01","L","1","1","Tidak ada","087716626448","087716626448","Mizianita Utami","Zianita Utami","SB","45/130","L","41-BLOK B8 SAWAH-SAWAH LAMA","CIPUTAT","TANGSEL","BANTEN","JL.ELANG 4 BLOK B8 SAWAH - CIPUTAT, TANGSEL ","FUTSAL","SDIT AL-UMMAH","MEDALI TAEKWONDO","SMP","3","SENDIRI","TIDAK","INSTAGRAM","DARI INSTAGRAM","ARI IBNU JARIR-S1-WIRASWASTA->7.000.000","ZIANITA UTAMI-S1-IRT-<3.000.000","Diterima","PERTAMA","995.037","BELUM","BELUM","2025","2025-01-01");
INSERT INTO temp_laporan VALUES("38","GEFFAN ADHEAN NAUFAL","0","3212020109130002","Indramayu","2013-09-01","L","1","1","-","081322773762","081322773762","Umira","Umira","SB","141 cm / 35 kg","M","003001-TEMIYANGSARI BLOK GEBUR-TEMIYANGSARI","KROYA","INDRAMAYU","JAWA BARAT","BLOK GEBUR TEMIYANGSARI KROYA, INDRAMAYU JAWA BARAT 003/001","FUTSAL","SD ISLAM AL-JANNAH","-","SMP","3","SENDIRI","TIDAK","TEMAN","TEMAN","DIDI SUPRIYADI-SLTP-WIRASWASTA-<5.000.000","UMIRAH BINTI NURDIYAH-SLTA-PETANI-<3.000.000","Diterima","PERTAMA","995.038","DIBAYAR","BELUM","2025","09-Aug-2025 11:03:45");
INSERT INTO temp_laporan VALUES("39","FAEYZA GHAISAN PUTRA DANURI ","0","3213130802140001","Karawang","2014-08-02","L","1","2","tidak ada","08989468876","08989468876","-","-","SB","45 kg / 145 cm","M","003009-BUNUT DUSUN. KETIMPAL-CILAMAYA","CILAMAYA WETAN ","KARAWANG","JAWA BARAT","BUNUT DUSUN. KETIMPAL CILAMAYA WETAN KARAWANG JAWA BARAT ","PRAMUKA","SDN 4 CILAMAYA KARAWANG","BELUM DICANTUMKAN ","SMP","3","SENDIRI","TIDAK","TEMAN","TEMAN","VERI DANURI -SLTA-WIRASWASTA-<3.000.000","DEWI BANDAWATI-SLTA-WIRASWASTA-<5.000.000","Diterima","PERTAMA","995.039","BELUM","BELUM","2025","09-Aug-2025 11:46:52");
INSERT INTO temp_laporan VALUES("40","SAFRIJAL NADHIR WIBOWO","0","3212130103140001","Indramayu ","2014-03-01","L","1","2","-","087717722011","087717722011","-","-","SB","60/175","XL","0102-BLOK 2-TEGALTAMAN ","SUKRA","INDRAMAYU ","JAWA BARAT ","BLOK 2 TEGALTAMAN RT. 01 RW.02","PRAMUKA","SDN 1 TEGALTAMAN","-","SMP","3","SENDIRI","TIDAK","FACEBOOK","FB","HASBY ASHIDIQI WIBOWO -S1-WIRASWASTA-<5.000.000","JUNENGSIH -D3-PERAWAT-<5.000.000","Diterima","PERTAMA","995.040","BELUM","BELUM","2025","09-Aug-2025 15:01:57");
INSERT INTO temp_laporan VALUES("41","FAHRI ALVIAN FIRDAUS","111232150042201013","3215290209130004","KARAWANG","2013-09-02","L","2","3","-","082269092861","082269092861","-","-","SB","45 / 147","XL","2710-M 5-SARIMULYA","KOTABARU","KARAWANG","JAWA BARAT ","PERUMAHAN SUKASEURI BLOK M NO 5, KOTABARU, KARAWANG, JAWA BARAT","HADROH","MI NURUL HUDA CIKAMPEK","-","SMP","3","SENDIRI","TIDAK","KELUARGA","SHIVA AURELIA FIRDAUS","ROYYAN YOSERIZAL FIRDAUS -S1-WIRASWASTA->7.000.000","LAURA KURNIA -SLTA-IRT->7.000.000","Diterima","PERTAMA","995.041","BELUM","BELUM","2025","10-Aug-2025 12:44:51");
INSERT INTO temp_laporan VALUES("42","ANISA DAIVA PRAMESWARI","0","3213155702130001","Subang ","2013-02-17","P","3","2","Tidak ada","087720560871","087720560871","Tidak ada","Tidak ada","SB","40/148","M","0904-COMPRENG-COMPRENG","COMP5","SUBANG ","JAWA BARAT","COMPRENG RT 09 RW 04 DS.COMPRENG KEC. COMPRENG KAB.COMPRENG","PRAMUKA","MI BAHRUL HUDA","TIDAK ADA","SMP","3","SENDIRI","TIDAK","KELUARGA","KELUARGA","ENTANG FITRIANA-S1-WIRASWASTA-<5.000.000","IIN SUHAENI-S1-IRT-<5.000.000","Diterima","PERTAMA","995.042","DIBAYAR","BELUM","2025","10-Aug-2025 09:59:20");
INSERT INTO temp_laporan VALUES("43","GURUH PRAYOGA AKID HARYANTO","0","3213030208140003","Subang ","2014-08-02","L","1","1","Tidak ada ","085134902374","085134902374","Tidak ","Tidak ada ","SB","40/145","M","082024-CIGADUNG-CIGADUNG","SUBANG ","SUBANG ","JAWA BARAT ","PERUM GRIYA PRATAMA ASRI BLOK A NO 12 CIGADUNG - SABANG ","PRAMUKA","MI BAHRUL HUDA ","TIDAK ADA ","SMP","3","SENDIRI","TIDAK","KELUARGA","KELUARGA ","HARYANTO -S1-TNI-<5.000.000","NIA KURNIAWATI-S1-IRT-<5.000.000","Diterima","PERTAMA","995.043","DIBAYAR","BELUM","2025","10-Aug-2025 10:14:22");



CREATE TABLE `user` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `type` varchar(20) NOT NULL,
  `wali` varchar(150) DEFAULT '-',
  `tempatlahir` varchar(150) DEFAULT NULL,
  `tgllahir` date NOT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `bayardaftar` varchar(10) DEFAULT 'BELUM',
  `bayarulang` varchar(10) DEFAULT 'BELUM',
  `daftar` varchar(10) DEFAULT 'BELUM',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","admin","admin.0","admin","-","","0000-00-00","-","","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("10","wawa","wawa","siswa","-","","0000-00-00","-","","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("11","a","a","siswa","ASEP","a","2025-06-03","-","a","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("12","b","b","siswa","B","b","2025-07-01","-","65656","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("13","c","c","siswa","BOOM","b","2025-07-11","-","655","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("14","bb","bb","siswa","B","BALI","2025-07-09","-","65656","BELUM","BELUM","SUDAH");
INSERT INTO user VALUES("15","Andi","andi","siswa","ANDI","Indramayu","1993-07-30","-","09763729","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("16","ErniHardiRiyanti","ayla1234","siswa","ERNI HARDI RIYANTI","Pemalang, ","1989-09-02","Perum. KIP Blok C 15/12, Karawang ","081281307576","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("17","Kayla","kayla121013","siswa","SUKAESIH","Subang","1992-08-20","Dsn compreng 14/06 dsa compreng kec compreng kab subang","082315971113","BELUM","BELUM","SUDAH");
INSERT INTO user VALUES("18","123maryam","123maryam","siswa","MAR","Subang","2025-08-07","-","08","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("19","Password","apssword","siswa","BAGAD","Karangsari","2025-08-30","-","082","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("2","siswa","siswa","siswa","-","","0000-00-00","-","","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("20","Muhammad1","Muhammad1","siswa","BAGAS","Subang","2025-08-29","-","0821","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("21","AghnaFaridAndrika","AFA2704","siswa","RIKA BARKAH","Karawang","1987-06-27","Cinangoh barat 1 gang beo rt 002 / rw 005 karawang wetan karawang timur karawang 41314","081912407881","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("22","Silfia","123Silfia","siswa","SILFIA ","Cirebon","1991-04-16","Sarajaya","082127810810","DIBAYAR","BELUM","SUDAH");
INSERT INTO user VALUES("23","alesha","551155","siswa","SUPRIYONO","magetan","1984-11-12","perum citra kebun mas blok DC no 36 Ds:Bengle Rt:57 Rw:11 Kec.Majalaya Kab:Karawang","+62895359110008","DIBAYAR","BELUM","SUDAH");
INSERT INTO user VALUES("24","Zafira Aqila","703703","siswa","HENDRA KURNIA","Karawang","1989-05-28","Dsn. ||| Citajaya RT. 14/05 Ds. Kali biaya Kec. Telagasari Kab. Karawang Jawa Barat","085779770001","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("25","AleshaBN","201213","siswa","SUPRIYONO","magetan","1984-11-12","-","0895359110008","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("26","Faisal Akhmad Harras","03121991","siswa","FAISAL AKHMAD HARRAS","Indramayu","1991-12-03","Perum puri lestari blok c 10 no 17.rt.01.rw.016.desa sukajaya kecamatan cibitung. Kabupaten bekasi","087779396614","DIBAYAR","BELUM","SUDAH");
INSERT INTO user VALUES("27","Lukman Hadi Saputra","Abinmalka1!","siswa","LUKMAN HADI SAPUTRA","Karawang","1984-07-05","Komp Harmoni Cihanjuang C.10, Rt.004/Rw.013, Desa.Cihanjuang, Kec.Parongpong, Kab.Bandung Barat, 40059","081226880000","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("28","RikaBarkah","RB270687","siswa","RIKA BARKAH","Karawang","1987-06-27","CINANGOH BARAT 1 GANG BEO RT 002/RW 005 KARAWANG WETAN, KARAWANG TIMUR, KARAWANG 41314","081912407881","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("29","Veri82","veri1009","siswa","VERI DANURI","Jakarta","1982-09-10","Bunut cilamaya kab karawang","08989468876","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("3","Denis Listiadi","12345","siswa","-","","0000-00-00","-","","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("30","Aghna Farid Andrika","Andrika07","siswa","ANDRIAWAN WIBOWO","Wonogiri","1986-09-07","Cinangoh Barat 1 GG.Beo RT: 002 RaW: 005 Kel.Karawang Wetan Kec.Karawang Timur Kab.Karawang 41314","081574904200","DIBAYAR","BELUM","SUDAH");
INSERT INTO user VALUES("31","abidzar13","abidzar","siswa","SUMANTA","subang","1980-07-06","dusun kalentambo 2 rw.06 rt.02 kec. pusakanegara","085134309706","DIBAYAR","BELUM","SUDAH");
INSERT INTO user VALUES("32","Coba","reza","siswa","REZA","Ggsjs","2025-08-06","-","019283y","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("33","ali saputra13","alisaputra","siswa","ANGGA RIYANTO","subang ","1989-02-03","dusun compreng rw.07 rt.03 kec. compreng kab.subang provinsi jawa barat","083176682729","BELUM","BELUM","SUDAH");
INSERT INTO user VALUES("34","RAFFISQI BAGUS YUDHISTIRA","Raffisqi2710","siswa","NANI HANDAYANI","Subang","1982-07-26","Dsn. Sindang Laut 2 Rt.01 Rw.02 Ds.Muara Kec.Blanakan Kab.Subang","087726602110","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("35","wihaya nadia cherlyn","508092","siswa","IRVAN ANGGARA","indramayu","1992-08-05","desa. nunuk blok A RT.02 RW.01","0895414838788","DIBAYAR","BELUM","SUDAH");
INSERT INTO user VALUES("36","Nairra Alinetamaayu S","Aline2014","siswa","NENENG TATI ROHAYATI","Subang","1983-11-21","Kp. Kamalsari Rt 15 Rw 03 Ds. Kertajaya Kec. Tambakdahan Kab. Subang","085715889561","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("37","Mizianita","011113","siswa","ZIANITA UTAMI","Jakarta","1986-03-31","Jl.Elang 4 Blok B8","087716626448","DIBAYAR","BELUM","SUDAH");
INSERT INTO user VALUES("38","Geffan Adhean Naufal","geffan01092013","siswa","UMIRAH BINTI NURDIYAB","Indramayu","1986-06-25","Blok Gebur Temiyangsari Kroya, Indramayu Jawa Barat 003/001","081322773762","DIBAYAR","BELUM","SUDAH");
INSERT INTO user VALUES("39","Faeyza Ghaisan","faeyza08","siswa","VERI DANURI","Jakarta ","1982-09-10","Bunut Dusun. Ketimpal Cilamaya Wetan Karawang Jawa Barat ","08989468876","BELUM","BELUM","SUDAH");
INSERT INTO user VALUES("4","Slamet","slamet","siswa","-","","0000-00-00","-","","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("40","Safrijal","Tegaltaman","siswa","HASBY ASHIDIQI WIBOWO","Indramayu ","1988-06-27","Blok 2 Tegaltaman RT. 01 RW.02","087717722011","BELUM","BELUM","SUDAH");
INSERT INTO user VALUES("41","Alfian","221200","siswa","ROYYAN YOSERIZAL FIRDAUS","Karawang","1981-08-09","Perumahan Sukaseuri Blok M no 5, Kotabaru, Karawang, Jawa Barat","082269092861","BELUM","BELUM","SUDAH");
INSERT INTO user VALUES("42","Anisa Daiva Prameswari","anisa170213","siswa","ENTANG FITRIANA","Subang ","1978-09-05","COMPRENG - SUBANG ","087720560871","DIBAYAR","BELUM","SUDAH");
INSERT INTO user VALUES("43","Guruh Prayoga ","guruh2814","siswa","HARYANTO","Boyolali","1983-07-25","Perumahan Griya Pratama Asri - Subang","085134902374","DIBAYAR","BELUM","SUDAH");
INSERT INTO user VALUES("44","teknikpakuan@gmail.com","haisya@84","siswa","RAHMAT WAHYUDIN","Bandung","1984-02-16","Pesona Cilebut 2 Blok IB 5 No.4 RT.14 RW.15 Kel.Cilebut Barat Kec.Sukaraja Kab.Bogor","085220059304","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("45","Siti","123mmm","siswa","KUSMI","Subang","2007-08-16","Subang","082127810810","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("46","Raisha","raisha25","siswa","RITA AGUSTINA","Indramayu","1984-10-24","Desa Rancamaya, blok Ceking, kec Gabuswetan","082158396412","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("47","Anah","1977","siswa","USWATUN HASANAH","Indramayu Jawa barat","1977-07-15","Blok boros RT/RW : 06/04 , desa Gunungsari  , kec Sukagumiwang , kab Indramayu Jawa barat ","+886 901308641","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("48","TES1","TES1","siswa","TES1","TES1","2025-07-28","-","TES1","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("5","Bejo","bejo","siswa","-","","0000-00-00","-","","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("6","Maikel","maikel","siswa","-","","0000-00-00","-","","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("7","Alex","alex","siswa","-","","0000-00-00","-","","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("8","murid","murid","siswa","-","","0000-00-00","-","","BELUM","BELUM","BELUM");
INSERT INTO user VALUES("9","adereza","ade","siswa","SAEP SHOW","borneo","2025-06-03","-","0.123","BELUM","BELUM","BELUM");

