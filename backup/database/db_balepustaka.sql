-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 06:03 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_balepustaka`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

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
  `image` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`kode_anggota`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `tanggal_daftar`, `telepon`, `paroki`, `email`, `image`) VALUES
('ID001', 'Hadi Firmansyah', '1995-01-08', 'L', 'Jl. Sindang Sari 1 No 30 Bandung', '2017-10-31', '08112288856', '-', 'hadifirmans@ymail.com', '1.jpg'),
('ID002', 'Abdul Azis A', '1996-04-11', 'L', 'Jl. Kosar No 10 Cijambe', '2017-11-15', '08911223123', '-', 'abdultjk18@gmail.com', ''),
('ID003', 'Ishal Jaya', '1995-03-09', 'L', 'Jl. Rancaekek 20 No 100 Kab. Bandung', '2016-09-17', '081672631233', '-', 'isjay2020@gmail.com', ''),
('ID005', 'Muhammad Albaihaqi', '1996-11-14', 'L', 'Jl. Kopo Indah No 200 Bandung', '2017-11-22', '085243112111', '-', 'alfikahfi100@gmail.com', ''),
('ID006', 'Sigit Stepanus Sitepu', '1996-04-20', 'L', 'Jl. Cinunuk Permai No 10 Kab. Bandung', '2017-11-22', '081321221123', '-', 'asssigit@gmail.com', ''),
('ID007', 'Abdillah Maliq F', '1997-05-17', 'L', 'Jl. Ciganitri No 10 Bandung', '2017-11-22', '081654261212', '-', 'abdillahmaliq@gmail.com', ''),
('ID008', 'Bobby Bhakti R', '1997-03-14', 'L', 'Jl. Geger Tali No 200 Cimahi', '2016-09-17', '081231233367', '-', 'bobbybhakti10@gmail.com', ''),
('ID009', 'Jihad Baddarudin', '1997-03-18', 'L', 'Jl. Jurang No 30 Setiabudhi Bandung', '2016-09-17', '0811152526112', '-', 'jihadbddr@gmail.com', ''),
('ID010', 'Nurul Aini Priatna', '2016-10-19', 'P', 'Jl. Mawar Indah No 30 Cijambe Bandung', '2016-09-17', '0877555213412', '-', 'nurulainiprtn@gmail.com', ''),
('ID012', 'Ade Mughni R', '1997-06-12', 'L', 'Jl. Logam 2 No 20 Bandung', '2016-09-22', '082211231222', '-', 'ademug@gmail.com', ''),
('ID013', 'Dwi Satrio', '1993-03-04', 'L', 'Buah Batu - Bandung', '2016-09-22', '08976489712', '-', 'dwisatrio@gmail.com', ''),
('ID014', 'Ichsan Agung', '1997-02-05', 'L', 'Bandung', '2016-10-06', '08767621662', '-', 'ichsan@gmail.com', '11112.PNG'),
('ID015', 'Tri Zaenal', '2016-10-04', 'L', 'Bandung', '2016-10-13', '08721212122', '-', 'tri@gmail.com', 'photo03.jpg'),
('ID016', 'Pratama', '1998-11-28', 'L', 'Bandung CIbiru', '2017-11-15', '085659122410', '-', 'pratama@gmail.com', '25EDA313B1B14E9BB59E790817B67E0C.jpg'),
('ID017', 'depi', '2017-11-03', 'P', 'bandug', '2017-11-22', '085659122410', '-', 'rizkysp07@gmail.com', 'BQkryWtCUAAf1Cv.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` char(8) COLLATE latin1_general_ci NOT NULL,
  `judul_buku` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `penulis` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `penerbit` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tahun` char(4) COLLATE latin1_general_ci NOT NULL,
  `klasifikasi` varchar(7) COLLATE latin1_general_ci NOT NULL,
  `no_rak` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '1',
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun`, `klasifikasi`, `no_rak`, `stock`, `tanggal`) VALUES
('16AA297', 'Cijambe Teriak', 'Abdul Azis Agung R', 'Gunung', '2010', '297', 4, 4, '2016-08-17'),
('16ACD188', 'Sherlock Holmes - Study In Scarlet', 'Arthur Conan Doyle', 'Gramedia', '1995', '188', 3, 1, '2016-08-09'),
('16ADE001', 'Narnia', 'Ade Mugni', 'Mizan', '2000', '200', 2, 3, '2016-10-13'),
('16DL200', 'Merangkak Dalam Duka', 'Abdillah', 'Gramedia', '2001', '200', 3, 1, '2016-09-17'),
('16JKR202', 'Harry Potter and The Chamber of Secret', 'JK. Rowling', 'Gramedia', '1990', '202', 3, 2, '2016-09-17'),
('16JKR203', 'Harry Potter and The Order of Phoenix', 'JK. Rowling', 'Gramedia', '1998', '203', 3, 0, '2016-09-17'),
('16KUI198', 'Menikah Muda', 'Ishal Jaya', 'Mizan', '2009', '198', 3, 2, '2016-09-17'),
('16MAK100', 'Tugas? Ada Abdul', 'M Alfi Kahfi', 'Gugus', '2001', '100', 3, 3, '2016-09-17'),
('16MAK202', 'Jomblo Sampe Halal bi Halal', 'M Aditya Kartun', 'Jones', '2009', '200', 4, 4, '2016-09-17'),
('16RD209', 'Marmut Merah Jambu', 'Raditya Dika', 'Gramedia', '2000', '209', 3, 2, '2016-09-17'),
('16UI288', 'Ghazi', 'Felix', 'Mizan', '2007', '288', 4, 1, '2016-09-17'),
('16YU200', 'Dikejar Deadline', 'Dwi Satrio', 'Kribo', '2014', '109', 3, 1, '2016-09-27'),
('17TER001', 'Tere Liye', 'Terajana', 'Terabit', '2016', '177', 9, 5, '2017-11-01'),
('17TER002', 'test', 'Terajana', 'Terabit', '1902', '177', 4, 12, '2017-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `detail_kas`
--

CREATE TABLE `detail_kas` (
  `kode_transaksi` char(10) COLLATE latin1_general_ci NOT NULL,
  `uraian` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jenis` varchar(6) COLLATE latin1_general_ci NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `kode_peminjaman` char(10) COLLATE latin1_general_ci NOT NULL,
  `kode_buku` char(8) COLLATE latin1_general_ci NOT NULL,
  `kode_dvd` char(8) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `detail_peminjaman`
--

INSERT INTO `detail_peminjaman` (`kode_peminjaman`, `kode_buku`, `kode_dvd`) VALUES
('BP16102501', '16JKR202', ''),
('BP16102502', '16ADE001', ''),
('BP16102503', '16ADE001', ''),
('BP16102504', '16KUI198', ''),
('BP16102505', '16MAK100', ''),
('BP16102506', '16KUI198', ''),
('BP16102601', '16ADE001', ''),
('BP16102602', '16MAK202', ''),
('BP16102603', '16MAK202', ''),
('BP16102604', '16MAK202', ''),
('BP16102605', '16MAK202', ''),
('BP16102606', '16RD209', ''),
('BP16102607', '16RD209', ''),
('BP16102608', '16ADE001', ''),
('BP16102609', '16JKR202', ''),
('BP16102610', '16JKR202', ''),
('BP16102611', '16MAK100', ''),
('BP16102612', '16ADE001', ''),
('BP16102612', '16JKR202', ''),
('BP16102612', '16MAK202', ''),
('BP16102612', '', 'DVD16006'),
('BP16102612', '', 'DVD16008'),
('BP16102613', '16ADE001', ''),
('BP16102614', '16JKR202', ''),
('BP17103101', '16ADE001', ''),
('BP17112201', '16JKR202', ''),
('BP17112202', '16ADE001', ''),
('BP17112203', '16ADE001', '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_rak`
--

CREATE TABLE `detail_rak` (
  `no_rak` int(11) NOT NULL,
  `sisi` char(1) COLLATE latin1_general_ci NOT NULL,
  `klasifikasi` varchar(7) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dvd`
--

CREATE TABLE `dvd` (
  `kode_dvd` char(8) COLLATE latin1_general_ci NOT NULL,
  `judul_dvd` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tahun` char(4) COLLATE latin1_general_ci NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '1',
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `dvd`
--

INSERT INTO `dvd` (`kode_dvd`, `judul_dvd`, `tahun`, `stock`, `tanggal`) VALUES
('DVD16001', 'Sherlock Holmes- Study Scarlet', '1998', 1, '2016-09-17'),
('DVD16002', 'The Chronicles Of Narnia', '2000', 4, '2016-09-17'),
('DVD16003', 'The Amazing Spider Man 2', '1998', 2, '2016-09-17'),
('DVD16004', 'Cinta Fitri 7', '2006', 0, '2016-09-17'),
('DVD16005', 'Manusia Setengah Kodok', '2008', 0, '2016-09-17'),
('DVD16006', 'Kebelet Kawin', '2000', 1, '2016-09-17'),
('DVD16007', 'Avatar - The Legend Of Aang', '2006', 1, '2016-09-17'),
('DVD16008', 'Batman - Dawn Of Justice', '2010', 1, '2016-09-17'),
('DVD16009', 'I\'m Legend', '2007', 1, '2016-09-17'),
('DVD16010', 'Gerakan Seribu Kaki', '2001', 1, '2016-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `head_kas`
--

CREATE TABLE `head_kas` (
  `kode_transaksi` char(10) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `head_peminjaman`
--

CREATE TABLE `head_peminjaman` (
  `kode_peminjaman` char(10) COLLATE latin1_general_ci NOT NULL,
  `kode_petugas` char(5) COLLATE latin1_general_ci NOT NULL,
  `kode_anggota` char(5) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `keterangan` varchar(15) COLLATE latin1_general_ci NOT NULL DEFAULT 'Belum Kembali'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `head_peminjaman`
--

INSERT INTO `head_peminjaman` (`kode_peminjaman`, `kode_petugas`, `kode_anggota`, `tanggal`, `tanggal_kembali`, `keterangan`) VALUES
('BP16102501', 'PT001', 'ID002', '2016-10-25', '2016-11-08', 'Sudah Kembali'),
('BP16102604', 'PT001', 'ID013', '2016-10-26', '2016-11-09', 'Sudah Kembali'),
('BP16102608', 'PT001', 'ID003', '2016-10-26', '2016-11-09', 'Sudah Kembali'),
('BP16102611', 'PT001', 'ID006', '2016-10-26', '2016-11-09', 'Sudah Kembali'),
('BP16102614', 'PT001', 'ID005', '2016-10-26', '2016-11-09', 'Sudah Kembali'),
('BP17112201', 'PT001', 'ID001', '2017-11-22', '2017-12-06', 'Sudah Kembali'),
('BP17112202', 'PT001', 'ID002', '2017-11-22', '2017-12-06', 'Belum Kembali'),
('BP17112203', 'PT001', 'ID005', '2017-11-22', '2017-12-06', 'Belum Kembali');

-- --------------------------------------------------------

--
-- Table structure for table `head_rak`
--

CREATE TABLE `head_rak` (
  `no_rak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operasional`
--

CREATE TABLE `operasional` (
  `id` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `lama_peminjaman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `operasional`
--

INSERT INTO `operasional` (`id`, `denda`, `lama_peminjaman`) VALUES
(1, 1000, 14);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `kode_pengembalian` char(10) COLLATE latin1_general_ci NOT NULL,
  `kode_peminjaman` char(10) COLLATE latin1_general_ci NOT NULL,
  `kode_petugas` char(5) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`kode_pengembalian`, `kode_peminjaman`, `kode_petugas`, `tanggal`, `denda`) VALUES
('BK16102601', 'BP16102602', 'PT001', '2016-10-26', 0),
('BK16102602', 'BP16102606', 'PT001', '2016-10-26', 0),
('BK16102603', 'BP16102607', 'PT001', '2016-10-26', 0),
('BK16102604', 'BP16102605', 'PT001', '2016-10-26', 0),
('BK16102605', 'BP16102501', 'PT001', '2016-10-26', 0),
('BK16102606', 'BP16102502', 'PT001', '2016-10-26', 0),
('BK16102607', 'BP16102503', 'PT001', '2016-10-26', 0),
('BK16102608', 'BP16102504', 'PT001', '2016-10-26', 0),
('BK16102609', 'BP16102505', 'PT001', '2016-10-26', 0),
('BK16102610', 'BP16102506', 'PT001', '2016-10-26', 0),
('BK16102611', 'BP16102601', 'PT001', '2016-10-26', 0),
('BK16102612', 'BP16102609', 'PT001', '2016-10-26', 0),
('BK16102613', 'BP16102610', 'PT001', '2016-10-26', 0),
('BK16102614', 'BP16102612', 'PT001', '2016-10-26', 0),
('BK17103101', 'BP17103101', 'PT001', '2017-10-31', 0),
('BK17110101', 'BP16102603', 'PT001', '2017-11-01', 357000),
('BK17112201', 'BP16102613', 'PT001', '2017-11-22', 378000),
('BK17112202', 'BP16102604', 'PT001', '2017-11-22', 378000),
('BK17112203', 'BP16102608', 'PT001', '2017-11-22', 378000),
('BK17112204', 'BP16102611', 'PT001', '2017-11-22', 378000),
('BK17112205', 'BP16102614', 'PT001', '2017-11-22', 378000),
('BK17112206', 'BP17112201', 'PT001', '2017-11-22', 0);

--
-- Triggers `pengembalian`
--
DELIMITER $$
CREATE TRIGGER `update_status` AFTER INSERT ON `pengembalian` FOR EACH ROW UPDATE head_peminjaman set keterangan='Sudah Kembali' where kode_peminjaman=new.kode_peminjaman
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

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
  `image` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`kode_petugas`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `telepon`, `username`, `password`, `status`, `image`) VALUES
('PT001', 'Rizky Sam Pratama', '1995-01-08', 'L', ' Jl. Sindang Sari 1 No 30 Bandung ', '0811228880', 'admin', 'admin', 'admin', 'admin.jpg'),
('US002', 'Devi Vitria', '1997-04-09', 'P', 'Jl. Manisi Kostan Mandiri no 15', '087213331288', 'vitria', '1234', 'user', 'IMG_14021.JPG'),
('US003', 'Devi Novita', '1994-03-11', 'P', 'Bandung', '082177728772', 'novita', 'user', 'user', 'dummy1.jpg'),
('US004', 'Irfan Hamid', '1998-11-28', 'L', 'Bandung', '085659122410', 'irfan', 'user', 'user', 'dummy.jpg'),
('US005', 'syam', '1998-11-28', 'P', 'Bandung', '085659122410', 'user', 'user', 'user', 'i_am_iron_man___avengers_by_ynnck-d64onyc.png'),
('US006', 'ujang', '1990-01-01', 'L', 'Bandung', '085659122410', 'qwerty', 'qwerty', 'user', 'i_am_iron_man___avengers_by_ynnck-d64onyc3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_buku`
--

CREATE TABLE `tmp_buku` (
  `kode_buku` char(8) COLLATE latin1_general_ci NOT NULL,
  `judul_buku` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `penulis` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_dvd`
--

CREATE TABLE `tmp_dvd` (
  `kode_dvd` char(8) COLLATE latin1_general_ci NOT NULL,
  `judul_dvd` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tahun` char(4) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`kode_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD KEY `kode_peminjaman` (`kode_peminjaman`);

--
-- Indexes for table `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`kode_dvd`);

--
-- Indexes for table `head_kas`
--
ALTER TABLE `head_kas`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indexes for table `head_peminjaman`
--
ALTER TABLE `head_peminjaman`
  ADD PRIMARY KEY (`kode_peminjaman`);

--
-- Indexes for table `head_rak`
--
ALTER TABLE `head_rak`
  ADD PRIMARY KEY (`no_rak`);

--
-- Indexes for table `operasional`
--
ALTER TABLE `operasional`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`kode_pengembalian`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`kode_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `head_rak`
--
ALTER TABLE `head_rak`
  MODIFY `no_rak` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `operasional`
--
ALTER TABLE `operasional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
