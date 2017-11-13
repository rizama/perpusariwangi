#
# TABLE STRUCTURE FOR: anggota
#

DROP TABLE IF EXISTS `anggota`;

CREATE TABLE `anggota` (
  `kode_anggota` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` char(1) COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `telepon` varchar(13) COLLATE latin1_general_ci NOT NULL,
  `paroki` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `image` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`kode_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES ('ID001', 'Hadi Firmansyah', '1995-01-08', 'L', 'Jl. Sindang Sari 1 No 30 Bandung', '2016-09-17', '08112288856', '-', 'hadifirmans@ymail.com', '1.jpg');
INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES ('ID002', 'Abdul Azis A', '1996-04-11', 'L', 'Jl. Kosar No 10 Cijambe', '2016-09-17', '08911223123', '-', 'abdultjk18@gmail.com', '');
INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES ('ID003', 'Ishal Jaya', '1995-03-09', 'L', 'Jl. Rancaekek 20 No 100 Kab. Bandung', '2016-09-17', '081672631233', '-', 'isjay2020@gmail.com', '');
INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES ('ID005', 'Muhammad Albaihaqi', '1996-11-14', 'L', 'Jl. Kopo Indah No 200 Bandung', '2016-09-17', '085243112111', '-', 'alfikahfi100@gmail.com', '');
INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES ('ID006', 'Sigit Stepanus Sitepu', '1996-04-20', 'L', 'Jl. Cinunuk Permai No 10 Kab. Bandung', '2016-09-17', '081321221123', '-', 'asssigit@gmail.com', '');
INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES ('ID007', 'Abdillah Maliq F', '1997-05-17', 'L', 'Jl. Ciganitri No 10 Bandung', '2016-09-17', '081654261212', '-', 'abdillahmaliq@gmail.com', '');
INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES ('ID008', 'Bobby Bhakti R', '1997-03-14', 'L', 'Jl. Geger Tali No 200 Cimahi', '2016-09-17', '081231233367', '-', 'bobbybhakti10@gmail.com', '');
INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES ('ID009', 'Jihad Baddarudin', '1997-03-18', 'L', 'Jl. Jurang No 30 Setiabudhi Bandung', '2016-09-17', '0811152526112', '-', 'jihadbddr@gmail.com', '');
INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES ('ID010', 'Nurul Aini Priatna', '2016-10-19', 'P', 'Jl. Mawar Indah No 30 Cijambe Bandung', '2016-09-17', '0877555213412', '-', 'nurulainiprtn@gmail.com', '');
INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES ('ID011', 'Chandro Gunawan F', '1997-06-27', 'L', 'Jl. Margahayu Raya No 30 Bandung', '2016-09-17', '089877721122', '-', 'chandrogunawan@gmail.com', 'face80x80.jpg');
INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES ('ID012', 'Ade Mughni R', '1997-06-12', 'L', 'Jl. Logam 2 No 20 Bandung', '2016-09-22', '082211231222', '-', 'ademug@gmail.com', '');
INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES ('ID013', 'Dwi Satrio', '1993-03-04', 'L', 'Buah Batu - Bandung', '2016-09-22', '08976489712', '-', 'dwisatrio@gmail.com', '');


#
# TABLE STRUCTURE FOR: buku
#

DROP TABLE IF EXISTS `buku`;

CREATE TABLE `buku` (
  `kode_buku` char(8) COLLATE latin1_general_ci NOT NULL,
  `judul_buku` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `penulis` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `penerbit` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tahun` char(4) COLLATE latin1_general_ci NOT NULL,
  `klasifikasi` varchar(7) COLLATE latin1_general_ci NOT NULL,
  `no_rak` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '1',
  `tanggal` date NOT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun`, `klasifikasi`, `no_rak`, `stock`, `tanggal`) VALUES ('16AA297', 'Cijambe Teriak', 'Abdul Azis Agung', 'Gunung', '2010', '297', '4', '1', '2016-08-17');
INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun`, `klasifikasi`, `no_rak`, `stock`, `tanggal`) VALUES ('16ACD188', 'Sherlock Holmes - Study In Scarlet', 'Arthur Conan Doyle', 'Gramedia', '1995', '188', '3', '-2', '2016-08-09');
INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun`, `klasifikasi`, `no_rak`, `stock`, `tanggal`) VALUES ('16DL200', 'Merangkak Dalam Duka', 'Abdillah', 'Gramedia', '2001', '200', '3', '0', '2016-09-17');
INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun`, `klasifikasi`, `no_rak`, `stock`, `tanggal`) VALUES ('16JKR202', 'Harry Potter and The Chamber of Secret', 'JK. Rowling', 'Gramedia', '1990', '202', '3', '1', '2016-09-17');
INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun`, `klasifikasi`, `no_rak`, `stock`, `tanggal`) VALUES ('16JKR203', 'Harry Potter and The Order of Phoenix', 'JK. Rowling', 'Gramedia', '1998', '203', '3', '2', '2016-09-17');
INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun`, `klasifikasi`, `no_rak`, `stock`, `tanggal`) VALUES ('16KUI198', 'Menikah Muda', 'Ishal Jaya', 'Mizan', '2009', '198', '3', '1', '2016-09-17');
INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun`, `klasifikasi`, `no_rak`, `stock`, `tanggal`) VALUES ('16MAK100', 'Tugas? Ada Abdul', 'M Alfi Kahfi', 'Gugus', '2001', '100', '3', '1', '2016-09-17');
INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun`, `klasifikasi`, `no_rak`, `stock`, `tanggal`) VALUES ('16MAK200', 'Jomblo Sampe Halal bi Halal', 'M Aditya Kartun', 'Jones', '2009', '200', '4', '0', '2016-09-17');
INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun`, `klasifikasi`, `no_rak`, `stock`, `tanggal`) VALUES ('16RD209', 'Marmut Merah Jambu', 'Raditya Dika', 'Gramedia', '2000', '209', '3', '4', '2016-09-17');
INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun`, `klasifikasi`, `no_rak`, `stock`, `tanggal`) VALUES ('16UI288', 'Ghazi', 'Felix', 'Mizan', '2007', '288', '4', '2', '2016-09-17');


#
# TABLE STRUCTURE FOR: detail_kas
#

DROP TABLE IF EXISTS `detail_kas`;

CREATE TABLE `detail_kas` (
  `kode_transaksi` char(10) COLLATE latin1_general_ci NOT NULL,
  `uraian` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jenis` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

#
# TABLE STRUCTURE FOR: detail_peminjaman
#

DROP TABLE IF EXISTS `detail_peminjaman`;

CREATE TABLE `detail_peminjaman` (
  `kode_peminjaman` char(10) COLLATE latin1_general_ci NOT NULL,
  `kode_buku` char(8) COLLATE latin1_general_ci NOT NULL,
  `kode_dvd` char(8) COLLATE latin1_general_ci NOT NULL,
  KEY `kode_peminjaman` (`kode_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091701', '16AA297', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091701', '16MAK200', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091701', '', 'DVD16001');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091702', '16JKR203', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091702', '16UI288', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091702', '', 'DVD16003');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091901', '16AA297', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091901', '16RD209', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091901', '', 'DVD16002');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091902', '16AA297', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091902', '', 'DVD16002');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091903', '16JKR202', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091903', '', 'DVD16004');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091904', '16DL200', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091904', '', 'DVD16002');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091905', '16ACD188', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091905', '', 'DVD16003');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16091906', '', 'DVD16001');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16092201', '16AA297', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16092202', '', 'DVD16003');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16092203', '16JKR203', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16092203', '', 'DVD16003');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16092301', '16ACD188', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16092301', '', 'DVD16003');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16092302', '16JKR203', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16092302', '16UI288', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16092302', '', 'DVD16003');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16092303', '16ACD188', '');
INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES ('BP16092304', '16DL200', '');


#
# TABLE STRUCTURE FOR: detail_rak
#

DROP TABLE IF EXISTS `detail_rak`;

CREATE TABLE `detail_rak` (
  `no_rak` int(11) NOT NULL,
  `sisi` char(1) COLLATE latin1_general_ci NOT NULL,
  `klasifikasi` varchar(7) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

#
# TABLE STRUCTURE FOR: dvd
#

DROP TABLE IF EXISTS `dvd`;

CREATE TABLE `dvd` (
  `kode_dvd` char(8) COLLATE latin1_general_ci NOT NULL,
  `judul_dvd` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tahun` char(4) COLLATE latin1_general_ci NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '1',
  `tanggal` date NOT NULL,
  PRIMARY KEY (`kode_dvd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `dvd` (`kode_dvd`, `judul_dvd`, `tahun`, `stock`, `tanggal`) VALUES ('DVD16001', 'Sherlock Holmes- Study Scarlet', '1998', '0', '2016-09-17');
INSERT INTO `dvd` (`kode_dvd`, `judul_dvd`, `tahun`, `stock`, `tanggal`) VALUES ('DVD16002', 'The Chronicles Of Narnia', '2000', '4', '2016-09-17');
INSERT INTO `dvd` (`kode_dvd`, `judul_dvd`, `tahun`, `stock`, `tanggal`) VALUES ('DVD16003', 'The Amazing Spider Man 2', '1998', '0', '2016-09-17');
INSERT INTO `dvd` (`kode_dvd`, `judul_dvd`, `tahun`, `stock`, `tanggal`) VALUES ('DVD16004', 'Cinta Fitri 7', '2006', '1', '2016-09-17');
INSERT INTO `dvd` (`kode_dvd`, `judul_dvd`, `tahun`, `stock`, `tanggal`) VALUES ('DVD16005', 'Manusia Setengah Kodok', '2008', '1', '2016-09-17');
INSERT INTO `dvd` (`kode_dvd`, `judul_dvd`, `tahun`, `stock`, `tanggal`) VALUES ('DVD16006', 'Kebelet Kawin', '2000', '1', '2016-09-17');
INSERT INTO `dvd` (`kode_dvd`, `judul_dvd`, `tahun`, `stock`, `tanggal`) VALUES ('DVD16007', 'Avatar - The Legend Of Aang', '2006', '1', '2016-09-17');
INSERT INTO `dvd` (`kode_dvd`, `judul_dvd`, `tahun`, `stock`, `tanggal`) VALUES ('DVD16008', 'Batman - Dawn Of Justice', '2010', '1', '2016-09-17');
INSERT INTO `dvd` (`kode_dvd`, `judul_dvd`, `tahun`, `stock`, `tanggal`) VALUES ('DVD16009', 'I\'m Legend', '2007', '1', '2016-09-17');
INSERT INTO `dvd` (`kode_dvd`, `judul_dvd`, `tahun`, `stock`, `tanggal`) VALUES ('DVD16010', 'Gerakan Seribu Kaki', '2001', '2', '2016-09-17');


#
# TABLE STRUCTURE FOR: head_kas
#

DROP TABLE IF EXISTS `head_kas`;

CREATE TABLE `head_kas` (
  `kode_transaksi` char(10) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`kode_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

#
# TABLE STRUCTURE FOR: head_peminjaman
#

DROP TABLE IF EXISTS `head_peminjaman`;

CREATE TABLE `head_peminjaman` (
  `kode_peminjaman` char(10) COLLATE latin1_general_ci NOT NULL,
  `kode_petugas` char(5) COLLATE latin1_general_ci NOT NULL,
  `kode_anggota` char(5) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `keterangan` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT 'Belum Kembali',
  PRIMARY KEY (`kode_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16091702', '', 'ID001', '2016-09-17', '2016-10-01', 'Sudah Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16091901', 'PT001', 'ID011', '2016-09-19', '2016-10-03', 'Sudah Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16091902', 'PT001', 'ID003', '2016-09-19', '2016-10-03', 'Sudah Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16091903', 'PT001', 'ID006', '2016-12-19', '2016-10-03', 'Sudah Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16091904', 'PT001', 'ID009', '2016-09-19', '2016-10-03', 'Sudah Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16091905', 'PT001', 'ID008', '2016-09-19', '2016-10-03', 'Belum Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16091906', 'PT001', 'ID002', '2016-09-19', '2016-10-03', 'Belum Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16092201', 'PT001', 'ID008', '2016-09-22', '2016-10-06', 'Belum Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16092202', 'PT001', 'ID002', '2016-09-22', '2016-10-06', 'Belum Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16092203', 'PT001', 'ID006', '2016-09-22', '2016-10-06', 'Sudah Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16092301', 'PT001', 'ID008', '2016-09-23', '2016-10-07', 'Belum Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16092302', 'PT001', 'ID001', '2016-09-23', '2016-10-07', 'Belum Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16092303', 'PT001', 'ID008', '2016-09-23', '2016-10-07', 'Belum Kembali');
INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES ('BP16092304', 'PT001', 'ID008', '2016-09-23', '2016-10-07', 'Belum Kembali');


#
# TABLE STRUCTURE FOR: head_rak
#

DROP TABLE IF EXISTS `head_rak`;

CREATE TABLE `head_rak` (
  `no_rak` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no_rak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

#
# TABLE STRUCTURE FOR: pengembalian
#

DROP TABLE IF EXISTS `pengembalian`;

CREATE TABLE `pengembalian` (
  `kode_pengembalian` char(10) COLLATE latin1_general_ci NOT NULL,
  `kode_peminjaman` char(10) COLLATE latin1_general_ci NOT NULL,
  `kode_petugas` char(5) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `denda` int(11) NOT NULL,
  PRIMARY KEY (`kode_pengembalian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('1', 'BP16083001', '', '2016-09-05', '9000');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('2', 'BP16083006', '', '2016-09-05', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('3', 'BP16090201', '', '2016-09-05', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16090502', 'BP16083007', '', '2016-09-05', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16090901', 'BP16083007', '', '2016-09-09', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16091001', 'BP16083001', '', '2016-09-10', '24000');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16091201', 'BP16091101', '', '2016-09-12', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16091401', 'BP16091101', '', '2016-09-14', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16091901', 'BP16091702', '', '2016-09-19', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16091906', '', 'PT001', '2016-09-19', '2000');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16092101', 'BP16091902', 'PT001', '2016-09-21', '2000');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16092102', 'BP16091901', 'PT001', '2016-09-21', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16092103', 'BP16091903', 'PT001', '2016-09-21', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16092104', 'BP16091904', 'PT001', '2016-09-21', '1000');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16092105', 'BP16091101', 'PT001', '2016-09-21', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16092201', 'BP16092203', 'PT001', '2016-09-22', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16092301', 'BP16091702', 'PT001', '2016-09-23', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16092302', 'BP16091702', 'PT001', '2016-09-23', '0');
INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES ('BK16092303', 'BP16091702', 'PT001', '2016-09-23', '0');


#
# TABLE STRUCTURE FOR: petugas
#

DROP TABLE IF EXISTS `petugas`;

CREATE TABLE `petugas` (
  `kode_petugas` char(5) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` char(1) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `telepon` varchar(13) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(6) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `image` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`kode_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `petugas` (`kode_petugas`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `telepon`, `username`, `password`, `status`, `image`) VALUES ('PT001', 'Hadi Firmansyah', '1995-01-08', 'L', ' Jl. Sindang Sari 1 No 30 Bandung ', '0811228880', 'hadifirmansyah', '1234', 'admin', '11.jpg');
INSERT INTO `petugas` (`kode_petugas`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `telepon`, `username`, `password`, `status`, `image`) VALUES ('US002', 'Nurul Aini Priatna', '1997-04-09', 'P', 'Jl. Mawar Indah No 20 Cijambe Bandung', '087213331288', 'nurulainiprtn', '1234', 'user', 'photo021.jpg');
INSERT INTO `petugas` (`kode_petugas`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `telepon`, `username`, `password`, `status`, `image`) VALUES ('US003', 'Jeany Dilla A', '1994-03-11', 'P', 'Bandung', '082177728772', 'user', 'user', 'user', 'photo025.jpg');


#
# TABLE STRUCTURE FOR: tmp_buku
#

DROP TABLE IF EXISTS `tmp_buku`;

CREATE TABLE `tmp_buku` (
  `kode_buku` char(8) COLLATE latin1_general_ci NOT NULL,
  `judul_buku` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `penulis` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

#
# TABLE STRUCTURE FOR: tmp_dvd
#

DROP TABLE IF EXISTS `tmp_dvd`;

CREATE TABLE `tmp_dvd` (
  `kode_dvd` char(8) COLLATE latin1_general_ci NOT NULL,
  `judul_dvd` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tahun` char(4) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

