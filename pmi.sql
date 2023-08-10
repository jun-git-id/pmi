-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 03:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `foto` text NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password`, `telepon`, `foto`, `hak_akses`, `status`) VALUES
(1, 'Udin', 'udin@gmail.com', 'adminudin', '085790768626', '', 1, 1),
(2, 'Admin', 'admin@gmail.com', 'admin', '085790768626', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `nama_agenda` varchar(100) NOT NULL,
  `tgl_agenda` date NOT NULL,
  `lokasi_agenda` varchar(100) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `nama_agenda`, `tgl_agenda`, `lokasi_agenda`, `jam_buka`, `jam_tutup`, `status`) VALUES
(1, 'Seminar Protokol Kesehatan', '2022-06-30', 'Rumah Sakit Ngudi Waluyo Malang', '13:00:00', '17:00:00', 0),
(2, 'Cek Kesehatan Lambung Gratis', '2022-07-02', 'Rumah Sakit Persada', '10:00:00', '14:30:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `tanggal_berita` date NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `status` int(11) NOT NULL,
  `penulis_berita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_pendonor` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jam_datang` time NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id_carousel` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `darah`
--

CREATE TABLE `darah` (
  `id_darah` int(11) NOT NULL,
  `jenis_darah` varchar(20) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `darah`
--

INSERT INTO `darah` (`id_darah`, `jenis_darah`, `last_updated`) VALUES
(1, 'WB', '2022-10-25 13:22:00'),
(9, 'TC', '2022-10-25 13:25:12'),
(10, 'PRC', '2022-10-25 13:25:09'),
(11, 'FFP Fraksionasi', '2022-10-25 13:22:43'),
(12, 'FFP', '2022-10-25 13:24:53'),
(13, 'AHF', '2022-10-25 13:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `detail_darah`
--

CREATE TABLE `detail_darah` (
  `id_detail_darah` int(11) NOT NULL,
  `id_darah` int(11) NOT NULL,
  `id_jenis_darah` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_darah`
--

INSERT INTO `detail_darah` (`id_detail_darah`, `id_darah`, `id_jenis_darah`, `stok`, `updated_at`) VALUES
(5, 1, 1, 1, '2022-11-08 23:58:33'),
(6, 1, 3, 0, '2022-10-23 14:10:57'),
(7, 1, 2, 0, '2022-10-23 14:11:06'),
(8, 1, 4, 0, '2022-10-23 14:11:15'),
(21, 9, 1, 1, '2022-11-08 23:59:32'),
(22, 9, 2, 0, '2022-10-23 14:11:30'),
(23, 9, 3, 0, '2022-10-23 14:11:39'),
(24, 9, 4, 0, '2022-10-23 14:11:52'),
(25, 10, 1, 1, '2022-11-09 00:00:46'),
(26, 10, 2, 0, '2022-10-23 14:12:38'),
(27, 10, 3, 0, '2022-10-23 14:12:48'),
(28, 10, 4, 0, '2022-10-23 14:16:49'),
(29, 11, 1, 0, '2022-10-23 14:16:55'),
(30, 11, 2, 0, '2022-10-23 14:17:02'),
(31, 11, 3, 0, '2022-10-23 14:17:37'),
(32, 11, 4, 0, '2022-10-23 14:17:47'),
(33, 12, 1, 0, '2022-10-23 14:17:53'),
(34, 12, 2, 0, '2022-10-23 14:18:01'),
(35, 12, 3, 0, '2022-10-23 14:18:11'),
(36, 12, 4, 0, '2022-10-23 14:18:20'),
(37, 13, 1, 0, '2022-10-23 14:18:28'),
(38, 13, 2, 0, '2022-10-23 14:18:43'),
(39, 13, 3, 0, '2022-07-12 08:28:56'),
(40, 13, 4, 0, '2022-10-23 14:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul_informasi`, `deskripsi`, `status`) VALUES
(1, 'Hal yang Perlu Diperhatikan Sesudah Donor Darah', '<p style=\"font-size: 16px; margin: 10px 0px; color: #3b3738; font-family: LatoWeb, sans-serif;\">Agar tetap aman setelah mendonorkan darah, berikut ini adalah beberapa hal yang perlu Anda perhatikan dan lakukan:</p>\r\n<ul style=\"color: #3b3738; font-family: LatoWeb, sans-serif; font-size: 16px;\">\r\n<li>Jangan melepas plester pada area bekas tusukan jarum setidaknya selama 6 jam setelah donor darah.</li>\r\n<li>Hindari merokok paling tidak selama 2 jam setelah donor darah.</li>\r\n<li>Hindari mengangkat barang-barang berat.</li>\r\n<li>Perbanyak minum air putih.</li>\r\n<li>Konsumsi makanan yang mengandung&nbsp;<a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/5-alasan-tubuh-anda-membutuhkan-zat-besi\" target=\"_blank\" rel=\"noopener\">zat besi</a>, seperti daging dan kacang-kacangan, atau suplemen zat besi.</li>\r\n</ul>\r\n<p style=\"font-size: 16px; margin: 10px 0px; color: #3b3738; font-family: LatoWeb, sans-serif;\">Pada dasarnya donor darah adalah tindakan medis yang aman dilakukan. Kebanyakan orang tidak merasakan efek samping atau keluhan yang berarti setelah melakukan&nbsp;<a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/berbagai-manfaat-donor-darah-untuk-kesehatan\" target=\"_blank\" rel=\"noopener\">donor darah</a>.</p>\r\n<p style=\"font-size: 16px; margin: 10px 0px; color: #3b3738; font-family: LatoWeb, sans-serif;\">Namun, terkadang donor darah bisa menimbulkan efek samping, seperti rasa nyeri ringan atau memar di lokasi suntikan dan pusing. Apabila merasakan keluhan tertentu setelah mendonorkan darah, Anda bisa berkonsultasi ke&nbsp;<a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/cari-dokter/dokter-umum\" target=\"_blank\" rel=\"noopener\">dokter</a>&nbsp;untuk mendapatkan penanganan.</p>', 1),
(2, 'Syarat Donor Darah', '<p style=\"font-size: 16px; margin: 10px 0px; color: #3b3738; font-family: LatoWeb, sans-serif;\">Berikut ini adalah beberapa persyaratan dasar yang harus dipenuhi oleh orang yang hendak melakukan donor darah:</p>\r\n<ul style=\"color: #3b3738; font-family: LatoWeb, sans-serif; font-size: 16px;\">\r\n<li>Berusia 17&ndash;70 tahun</li>\r\n<li>Berat badan minimal 45 kg</li>\r\n<li>Nilai tekanan darah normal atau berkisar antara 90/60&ndash;120/80 mmHg</li>\r\n<li>Kadar hemoglobin sekitar 12,5-17 g/dL dan tidak lebih dari 20 g/dL</li>\r\n<li>Jarak waktu donor darah terakhir minimal 3 bulan atau 12 minggu, jika sebelumnya sudah pernah menjadi pendonor darah</li>\r\n<li>Tidak sedang dalam kondisi sakit atau memiliki keluhan tertentu, seperti lemas atau demam</li>\r\n<li><a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/donor-darah-saat-hamil-amankah\" target=\"_blank\" rel=\"noopener\">Tidak sedang hamil</a>&nbsp;atau menyusui</li>\r\n<li>Bersedia menyumbangkan darah secara sukarela dengan menyetujui&nbsp;<em><a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/inilah-pengertian-informed-consent-yang-penting-untuk-diketahui\" target=\"_blank\" rel=\"noopener\">informed consent</a></em></li>\r\n</ul>\r\n<p style=\"font-size: 16px; margin: 10px 0px; color: #3b3738; font-family: LatoWeb, sans-serif;\">Pendonor darah juga harus memiliki kondisi kesehatan yang baik dan tidak memiliki penyakit tertentu yang dapat menular melalui darah. Selain itu, ada beberapa kondisi lain yang &nbsp;tidak boleh dimiliki oleh seorang pendonor darah, di antaranya:</p>\r\n<ul style=\"color: #3b3738; font-family: LatoWeb, sans-serif; font-size: 16px;\">\r\n<li>Menderita penyakit tertentu, seperti diabetes, kanker, penyakit jantung, masalah paru-paru, atau gangguan fungsi ginjal</li>\r\n<li>Memiliki tekanan darah tinggi atau rendah</li>\r\n<li>Menderita epilepsi atau sering kejang</li>\r\n<li>Menderita penyakit menular atau berisiko tinggi terkena penyakit menular, seperti sifilis,&nbsp;<a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/hiv-aids\" target=\"_blank\" rel=\"noopener\">HIV/AIDS</a>, hepatitis B, hepatitis C, atau malaria</li>\r\n<li>Mengonsumsi obat-obatan atau sedang menjalani pengobatan tertentu</li>\r\n<li>Memiliki gangguan perdarahan, seperti&nbsp;<a style=\"text-decoration-line: none; color: #3570d2;\" href=\"https://www.alodokter.com/hemofilia\" target=\"_blank\" rel=\"noopener\">hemofilia</a></li>\r\n<li>Memiliki riwayat penggunaan narkoba dalam bentuk suntik</li>\r\n<li>Memiliki kecanduan terhadap minuman keras</li>\r\n</ul>', 1),
(3, 'Informasi Manfaat Donor', '<p><span style=\"font-family: arial, helvetica, sans-serif; font-size: 12pt;\">Menurunkan risiko terkena penyakit jantung dan pembuluh darah. Donor darah secara teratur diketahui dapat menurunkan kekentalan darah. Kekentalan darah merupakan salah satu faktor yang berperan dalam meningkatkan risiko terkena penyakit jantung.</span></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_donor`
--

CREATE TABLE `jadwal_donor` (
  `id_mobil` int(11) NOT NULL,
  `jam_buka` time NOT NULL,
  `jam_tutup` time NOT NULL,
  `jadwal` date NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `target` int(11) NOT NULL,
  `tipe` int(11) NOT NULL,
  `terisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_donor`
--

INSERT INTO `jadwal_donor` (`id_mobil`, `jam_buka`, `jam_tutup`, `jadwal`, `lokasi`, `target`, `tipe`, `terisi`) VALUES
(1, '13:00:00', '17:00:00', '2022-09-28', 'Taman Anggrek', 50, 2, 0),
(3, '10:40:00', '16:00:00', '2022-10-31', 'Plaza Araya (Samping Burger King)', 50, 2, 0),
(9, '09:00:00', '14:00:00', '2022-10-31', 'UDD PMI Kota Malang', 50, 1, 0),
(10, '12:00:00', '16:00:00', '2022-10-02', 'UDD PMI Kota Malang', 50, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_darah`
--

CREATE TABLE `jenis_darah` (
  `id_jenis_darah` int(11) NOT NULL,
  `nama_jenis_darah` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_darah`
--

INSERT INTO `jenis_darah` (`id_jenis_darah`, `nama_jenis_darah`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_darah` int(11) NOT NULL,
  `id_jenis_darah` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tipe` int(11) NOT NULL,
  `nik_pendonor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_darah`, `id_jenis_darah`, `nama`, `alamat`, `instansi`, `telp`, `tanggal`, `lokasi`, `tipe`, `nik_pendonor`) VALUES
(70, 1, 1, 'Guest 7', 'Jl. Wiromargo', 'Masyarakat', '081998765234', '2022-11-01', 'UDD PMI Kota Malang', 1, '01234567890007'),
(71, 9, 1, 'Guest 8', 'Jl. Ade Irma Suryani', 'Jl. Ade Irma SuryaniMasyarakat', '081345765345', '2022-11-02', 'UDD PMI Kota Malang', 1, '01234567890008'),
(72, 10, 1, 'Guest 9', 'Jl. Syarif Al-Qodri', 'Masyarakat', '081876567432', '2022-11-03', 'UDD PMI Kota Malang', 1, '01234567890009');

-- --------------------------------------------------------

--
-- Table structure for table `pendonor`
--

CREATE TABLE `pendonor` (
  `id_pendonor` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_pendonor` varchar(100) NOT NULL,
  `foto_pendonor` text DEFAULT NULL,
  `umur_pendonor` int(11) NOT NULL,
  `id_jenis_darah` int(11) NOT NULL,
  `alamat_pendonor` varchar(150) NOT NULL,
  `telepon_pendonor` varchar(20) NOT NULL,
  `donor_terakhir` date DEFAULT NULL,
  `donor_selanjutnya` date DEFAULT NULL,
  `email_pendonor` varchar(100) NOT NULL,
  `nik_pendonor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendonor`
--

INSERT INTO `pendonor` (`id_pendonor`, `password`, `nama_pendonor`, `foto_pendonor`, `umur_pendonor`, `id_jenis_darah`, `alamat_pendonor`, `telepon_pendonor`, `donor_terakhir`, `donor_selanjutnya`, `email_pendonor`, `nik_pendonor`) VALUES
(50, 'admin', 'Pendonor', 'http://localhost/pmi/assets/images/2b9693b208f34868de0ee562db583ee1.png', 29, 2, 'simpnag tiga', '081230042685', NULL, NULL, 'admin@admin.com', '1112321321231213');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `judul_profil` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `judul_profil`, `deskripsi`, `status`) VALUES
(9, 'Profil PMI Aceh Selatan', '<p>.</p>', 1),
(10, 'Visi & Misi', '<p><strong>VISI</strong></p>\r\n<p><span style=\"color: #222222; font-family: Muli; font-size: 17px; background-color: #ffffff;\">Terwujudnya PMI yang profesional dan berintegritas serta bergerak bersama masyarakat.</span></p>\r\n<p>&nbsp;</p>\r\n<p><strong>MISI</strong></p>\r\n<ol style=\"box-sizing: border-box; padding: 0px; margin-bottom: 26px; margin-left: auto; margin-right: auto; color: #222222; font-family: Muli; font-size: 17px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box; line-height: inherit; margin-left: 21px; margin-bottom: 10px;\">MEMELIHARA reputasi organisasi PMI di tingkat Nasional dan Internasional.</li>\r\n<li style=\"box-sizing: border-box; line-height: inherit; margin-left: 21px; margin-bottom: 0px;\">MENJADI organisasi kemanusiaan terdepan yang memberikan layanan berkualitas kepada masyarakat sesuai dengan prinsip-prinsip dasar Gerakan Palang Merah dan Bulan Sabit Merah</li>\r\n</ol>', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id_carousel`);

--
-- Indexes for table `darah`
--
ALTER TABLE `darah`
  ADD PRIMARY KEY (`id_darah`);

--
-- Indexes for table `detail_darah`
--
ALTER TABLE `detail_darah`
  ADD PRIMARY KEY (`id_detail_darah`),
  ADD KEY `id_darah` (`id_darah`) USING BTREE,
  ADD KEY `id_jenis_darah` (`id_jenis_darah`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `jadwal_donor`
--
ALTER TABLE `jadwal_donor`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `jenis_darah`
--
ALTER TABLE `jenis_darah`
  ADD PRIMARY KEY (`id_jenis_darah`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`id_pendonor`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id_carousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `darah`
--
ALTER TABLE `darah`
  MODIFY `id_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `detail_darah`
--
ALTER TABLE `detail_darah`
  MODIFY `id_detail_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jadwal_donor`
--
ALTER TABLE `jadwal_donor`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenis_darah`
--
ALTER TABLE `jenis_darah`
  MODIFY `id_jenis_darah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `id_pendonor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_darah`
--
ALTER TABLE `detail_darah`
  ADD CONSTRAINT `detail_darah_ibfk_1` FOREIGN KEY (`id_darah`) REFERENCES `darah` (`id_darah`),
  ADD CONSTRAINT `detail_darah_ibfk_2` FOREIGN KEY (`id_jenis_darah`) REFERENCES `jenis_darah` (`id_jenis_darah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
