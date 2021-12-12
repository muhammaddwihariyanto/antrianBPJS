-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 02:05 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrean_rs`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrean`
--

CREATE TABLE `antrean` (
  `id` int(11) NOT NULL,
  `kodebooking` varchar(20) NOT NULL,
  `jenispasien` varchar(20) NOT NULL,
  `nomorkartu` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `kodepoli` varchar(20) NOT NULL,
  `namapoli` varchar(20) NOT NULL,
  `pasienbaru` varchar(20) NOT NULL,
  `norm` varchar(20) NOT NULL,
  `tanggalperiksa` varchar(20) NOT NULL,
  `kodedokter` varchar(20) NOT NULL,
  `namadokter` varchar(20) NOT NULL,
  `jampraktek` varchar(20) NOT NULL,
  `jeniskunjungan` varchar(20) NOT NULL,
  `nomorreferensi` varchar(20) NOT NULL,
  `nomorantrean` varchar(20) NOT NULL,
  `angkaantrean` varchar(20) NOT NULL,
  `estimasidilayani` varchar(20) NOT NULL,
  `sisakuotajkn` varchar(20) NOT NULL,
  `kuotajkn` varchar(20) NOT NULL,
  `sisakuotanonjkn` varchar(20) NOT NULL,
  `kuotanonjkn` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `wakturs` varchar(50) DEFAULT NULL,
  `taskname` varchar(50) DEFAULT NULL,
  `taskid` varchar(20) DEFAULT NULL,
  `waktu` varchar(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrean`
--

INSERT INTO `antrean` (`id`, `kodebooking`, `jenispasien`, `nomorkartu`, `nik`, `nohp`, `kodepoli`, `namapoli`, `pasienbaru`, `norm`, `tanggalperiksa`, `kodedokter`, `namadokter`, `jampraktek`, `jeniskunjungan`, `nomorreferensi`, `nomorantrean`, `angkaantrean`, `estimasidilayani`, `sisakuotajkn`, `kuotajkn`, `sisakuotanonjkn`, `kuotanonjkn`, `keterangan`, `wakturs`, `taskname`, `taskid`, `waktu`, `deleted_at`) VALUES
(1, '16032021A001', 'JKN', '00012345678', '3212345678987654', '085635228888', 'ANA', 'Anak', '0', '123345', '2021-01-28', '12345', 'Dr. Hendra', '08:00-16:00', '1', '0001R0040116A000001', 'A-12', '12', '1615869169000', '5', '30', '5', '30', 'Terjadi perubahan jadwal dokter, silahkan daftar kembali', '16-03-2021 11:32:49 WIB', 'mulai waktu tunggu admisi', '1', '1616559330000', '2021-11-07 23:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwaldokter`
--

CREATE TABLE `jadwaldokter` (
  `id` int(11) NOT NULL,
  `kodesubspesialis` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `kapasitaspasien` varchar(100) NOT NULL,
  `libur` varchar(100) NOT NULL,
  `namahari` varchar(100) NOT NULL,
  `buka` varchar(11) DEFAULT NULL,
  `tutup` varchar(11) DEFAULT NULL,
  `jadwal` varchar(100) NOT NULL,
  `namasubspesialis` varchar(100) NOT NULL,
  `namadokter` varchar(100) NOT NULL,
  `kodepoli` varchar(100) NOT NULL,
  `namapoli` varchar(100) NOT NULL,
  `kodedokter` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwaldokter`
--

INSERT INTO `jadwaldokter` (`id`, `kodesubspesialis`, `hari`, `kapasitaspasien`, `libur`, `namahari`, `buka`, `tutup`, `jadwal`, `namasubspesialis`, `namadokter`, `kodepoli`, `namapoli`, `kodedokter`, `tanggal`) VALUES
(1, 'ANA', '4', '4', '0', 'KAMIS', NULL, NULL, '08:00 - 12:00', 'ANAK', 'DR. OKTORA WAHYU WIJAYANTO, SP.A', 'SS', 'ANAK', '33690', '2021-11-05'),
(2, 'ANA', '1', '20', '0', 'KAMIS', '08:00', '11:00', '13:00 - 17:00', 'ANAK', 'DR. OKTORA WAHYU WIJAYANTO, SP.A', 'ANA', 'ANAK', '33691', '2021-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_dokter`
--

CREATE TABLE `tabel_dokter` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_dokter`
--

INSERT INTO `tabel_dokter` (`id`, `kode`, `nama`) VALUES
(1, '27923', 'Retno Pudjiastuti, dr, SpOG'),
(2, '32360', 'dr. Ditya Arisanti, Sp.A.'),
(3, '32555', 'Dr. Evi Diyah Ambarwati'),
(4, '32563', 'Drg. Dyah Tri Wahyuni'),
(5, '32571', 'DR. Dr. Meddy Setiawan, Sp.PD.'),
(6, '32577', 'Dr. Dyah Retno Wulandari, Sp.PD.'),
(7, '32607', 'Dr. Lucia Pujiastuti, Sp.S.'),
(8, '32627', 'Dr. Yasmine, Sp.M.'),
(9, '32654', 'Dr. Margareta, Sp. Rad.'),
(10, '32667', 'Dr. Wara Pertiwi, Sp.P.'),
(11, '32694', 'Dr. Agustini Rahayu'),
(12, '32709', 'Dr. Nur Aisyah'),
(13, '32729', 'Dr. Dyah Kusuma Rahmawati'),
(14, '35290', 'dr. Maya Chusniah,Sp.A'),
(15, '260886', 'HAYKAL AFFANDI'),
(16, '279321', 'TITIS KURNIAWAN'),
(17, '280237', 'NUKI ARIYANA, S.KED.AL'),
(18, '342077', 'VENY MAYANGSARI');

-- --------------------------------------------------------

--
-- Table structure for table `tbdaftardokter`
--

CREATE TABLE `tbdaftardokter` (
  `IdDokter` int(20) NOT NULL,
  `NamaDokter` varchar(75) DEFAULT NULL,
  `PangkatCorps` varchar(75) DEFAULT NULL,
  `NRP` varchar(45) DEFAULT NULL,
  `Spesialisasi` int(50) DEFAULT NULL,
  `Kategori` int(10) NOT NULL,
  `NoTelp` varchar(25) DEFAULT NULL,
  `Keterangan` text DEFAULT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'aktif',
  `IdBPJS` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbdaftardokter`
--

INSERT INTO `tbdaftardokter` (`IdDokter`, `NamaDokter`, `PangkatCorps`, `NRP`, `Spesialisasi`, `Kategori`, `NoTelp`, `Keterangan`, `Status`, `IdBPJS`) VALUES
(2, 'dr. DJOKO TJAHJONO WAHJUTOMO, Sp.PD', NULL, NULL, 4, 1, '-', NULL, 'aktif', '12785'),
(3, 'dr. SUKO BASUKI, Sp,An', NULL, NULL, 10, 1, '-', NULL, 'aktif', ''),
(4, 'dr. MUTIA SINTA, Sp.S', NULL, NULL, 18, 1, '-', NULL, 'aktif', '12794'),
(5, 'dr. Pebri Rahadian Ramle, Sp.PD', NULL, NULL, 4, 1, '-', NULL, 'aktif', '12787'),
(6, 'dr. I NYOMAN SUMERTA, Sp.An', NULL, NULL, 10, 1, '-', NULL, 'aktif', ''),
(7, 'dr. TIKTO WAHYONO, Sp.A', NULL, NULL, 5, 1, '-', NULL, 'aktif', '12790'),
(8, 'dr. TONNY HARTONO, Sp.B', NULL, NULL, 3, 1, '-', NULL, 'aktif', '38506'),
(9, 'dr. SAUT IDOAN SIJABAT, Sp. B', NULL, NULL, 3, 1, '-', NULL, 'aktif', '12788'),
(10, 'dr. BUDI PURWANTO, Sp.BS', NULL, NULL, 19, 1, '-', NULL, 'aktif', ''),
(11, 'dr. SLAMET WIDODO,Sp.THT-KL', NULL, NULL, 14, 1, '-', NULL, 'aktif', '12504'),
(12, 'dr. I WAYAN MERTHA, Sp.PD', NULL, NULL, 4, 1, '-', NULL, 'aktif', '12947'),
(13, 'dr. FARHAT, Sp.OT', NULL, NULL, 167, 1, '-', NULL, 'aktif', '12796'),
(14, 'dr. ARIEF PRIJATNA, Sp. OG', NULL, NULL, 6, 1, '-', NULL, 'aktif', '12789'),
(15, 'dr. POEDJIHARI, Sp.Rad', NULL, NULL, 7, 1, '021', NULL, 'aktif', ''),
(16, 'dr. KRISBIYANTO, Sp.P', NULL, NULL, 17, 1, '-', NULL, 'aktif', '12797'),
(17, 'dr. ANTIEK PRIMARDIANTI, Sp.PK', NULL, NULL, 11, 1, '0212222', NULL, 'aktif', ''),
(18, 'dr. INDRA DWIYANTO WIBOWO, Sp.KJ', NULL, NULL, 12, 1, '-', NULL, 'aktif', '38540'),
(19, 'dr. RIZA MAZIDU , Sp U', NULL, NULL, 21, 1, '-', NULL, 'aktif', '279886'),
(20, 'dr. DJEMIRAN', NULL, NULL, 1, 1, '-', NULL, 'aktif', ''),
(21, 'dr. AHMAD FIRMAN', NULL, NULL, 1, 1, '-', NULL, 'aktif', ''),
(22, 'dr. AHMAT THOHIR IHWAN', NULL, NULL, 1, 1, '-', NULL, 'aktif', ''),
(23, 'dr. MUHAMMAD NASIR', NULL, NULL, 1, 1, '-', NULL, 'aktif', ''),
(24, 'dr. EKA DEWI PRATITISSARI (TISA)', NULL, NULL, 1, 1, '-', NULL, 'nonaktif', ''),
(25, 'dr. IRMA MURTI', NULL, NULL, 1, 1, '-', NULL, 'aktif', ''),
(26, 'dr. MUKHLAS HAMIDY', NULL, NULL, 1, 1, '-', NULL, 'aktif', ''),
(27, 'dr. DANIK FAHMI ANISAH', NULL, NULL, 1, 1, '-', NULL, 'aktif', ''),
(28, 'dr. KUSUMA LUTHFIANA', NULL, NULL, 1, 1, '-', NULL, 'aktif', ''),
(29, 'dr. HUSNUL MILLATI', NULL, NULL, 1, 1, '-', NULL, 'aktif', ''),
(30, 'drg DHENOK ANGGI WIJAYANTI', NULL, NULL, 33, 1, '-', NULL, 'aktif', ''),
(31, 'drg. LILIN PANCAWATI', NULL, NULL, 33, 1, '-', NULL, 'aktif', '12783'),
(32, 'drg. SUKMASARI PUSPO SUDIBYO', NULL, NULL, 33, 1, '-', NULL, 'nonaktif', ''),
(33, 'dr. RAFIKA STUDIVIANI T', NULL, NULL, 1, 1, '-', NULL, 'aktif', ''),
(34, 'dr. GILANG IWANOSKI', NULL, NULL, 1, 1, '-', NULL, 'aktif', ''),
(35, 'dr. LAILI FITRIA NI\'AMITA', NULL, NULL, 1, 0, '0', NULL, 'aktif', ''),
(36, 'dr. KHUSNUL', NULL, NULL, 1, 0, '-', NULL, 'aktif', ''),
(37, 'dr. EKO JAENUDIN, Sp.A', NULL, NULL, 5, 0, '-', NULL, 'nonaktif', ''),
(38, 'dr. Mirza Failasufi, SP.JP', NULL, NULL, 166, 0, '-', NULL, 'aktif', '291639'),
(39, 'drg. Dhenok Anggi Wijayanti', NULL, NULL, 34, 0, '-', NULL, 'aktif', '12784'),
(40, 'dr. Abu Bakar B., Sp.M', NULL, NULL, 13, 0, '0021212', NULL, 'aktif', '260908'),
(41, 'dr. Ani Nur Waluyo, Sp.M', NULL, NULL, 13, 0, '1211111', NULL, 'aktif', '265426'),
(43, 'DR. PUTRI DZU NAFIAH', NULL, NULL, 1, 0, '-', NULL, 'aktif', ''),
(44, 'dr. RULI Sp.KK', NULL, NULL, 15, 0, '-', NULL, 'aktif', ''),
(45, 'dr. KAUTSAR PRASTUDIA EKO BINUKO Sp.A', NULL, NULL, 5, 0, '-', NULL, 'aktif', '319672'),
(46, 'dr Ratna Widyastuti, Sp OG', NULL, NULL, 6, 0, '-', NULL, 'aktif', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbpoli`
--

CREATE TABLE `tbpoli` (
  `IdPoli` int(25) NOT NULL,
  `NamaPoli` varchar(55) DEFAULT '-',
  `KodePoli` varchar(10) NOT NULL,
  `TipePoli` int(1) NOT NULL,
  `Spesialis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpoli`
--

INSERT INTO `tbpoli` (`IdPoli`, `NamaPoli`, `KodePoli`, `TipePoli`, `Spesialis`) VALUES
(1, 'POLI PENYAKIT DALAM', 'INT', 0, '[\"4\"]'),
(2, 'POLI THT', 'THT', 0, '[\"14\"]'),
(3, 'POLI GIGI', 'GIG', 1, '[\"33\",\"35\",\"36\",\"164\"]'),
(4, 'POLI ANAK', 'ANAK', 0, '[\"5\"]'),
(5, 'POLI SARAF', 'SAR', 0, '[\"18\"]'),
(7, 'POLI JIWA', 'JIW', 0, '[\"12\"]'),
(8, 'GIZI', 'GIZ', 0, '[\"1\",\"31\"]'),
(9, 'POLI PARU', 'PAR', 0, '[\"17\"]'),
(11, 'RADIOLOGI', 'RAD', 3, '[\"7\"]'),
(12, 'POLI UMUM', '-', 1, '[]'),
(13, 'POLI KANDUNGAN', 'OBG', 0, '[\"6\"]'),
(14, 'POLI BEDAH UMUM', 'BED', 0, '[\"3\"]'),
(20, 'HEMODIALISA', 'HDL', 0, '[\"4\"]'),
(25, 'POLI UROLOGI', 'URO', 0, '[\"21\"]'),
(26, 'POLI ORTHOPEDI', 'ORT', 0, '[\"20\",\"167\"]'),
(28, 'LABORATORIUM', 'LAB', 3, '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\",\"32\",\"33\",\"34\",\"35\",\"36\",\"37\",\"163\",\"164\",\"165\",\"166\",\"167\"]'),
(29, 'IGD', 'IGD', 2, '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\",\"32\",\"33\",\"34\",\"35\",\"36\",\"37\",\"163\",\"164\",\"165\"]'),
(30, 'FISIOTERAPI', 'FIS', 3, '[]'),
(31, 'POLI BEDAH SARAF', 'SRF', 0, '[\"19\"]'),
(32, 'POLI JANTUNG', 'JAN', 0, '[\"166\"]'),
(33, 'IGD PONEK', 'PONEK', 0, '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\",\"32\",\"33\",\"34\",\"35\",\"36\",\"37\",\"163\",\"164\",\"165\"]'),
(34, 'VK', 'VK', 0, 'null'),
(35, 'POLI MATA', 'MAT', 0, '[\"13\"]'),
(37, 'POLI KBS', 'KBS', 0, '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\",\"32\",\"33\",\"34\",\"35\",\"36\",\"37\",\"163\",\"164\",\"165\"]');

-- --------------------------------------------------------

--
-- Table structure for table `waktutunggu`
--

CREATE TABLE `waktutunggu` (
  `id` int(11) NOT NULL,
  `kdppk` varchar(20) NOT NULL,
  `waktu_task1` varchar(20) NOT NULL,
  `avg_waktu_task4` varchar(20) NOT NULL,
  `jumlah_antrean` varchar(20) NOT NULL,
  `avg_waktu_task3` varchar(20) NOT NULL,
  `namapoli` varchar(20) NOT NULL,
  `avg_waktu_task6` varchar(20) NOT NULL,
  `avg_waktu_task5` varchar(20) NOT NULL,
  `nmppk` varchar(20) NOT NULL,
  `avg_waktu_task2` varchar(20) NOT NULL,
  `avg_waktu_task1` varchar(20) NOT NULL,
  `kodepoli` varchar(20) NOT NULL,
  `waktu_task5` varchar(20) NOT NULL,
  `waktu_task4` varchar(20) NOT NULL,
  `waktu_task3` varchar(20) NOT NULL,
  `insertdate` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `waktu_task2` varchar(20) NOT NULL,
  `waktu_task6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waktutunggu`
--

INSERT INTO `waktutunggu` (`id`, `kdppk`, `waktu_task1`, `avg_waktu_task4`, `jumlah_antrean`, `avg_waktu_task3`, `namapoli`, `avg_waktu_task6`, `avg_waktu_task5`, `nmppk`, `avg_waktu_task2`, `avg_waktu_task1`, `kodepoli`, `waktu_task5`, `waktu_task4`, `waktu_task3`, `insertdate`, `tanggal`, `waktu_task2`, `waktu_task6`) VALUES
(1, '1311R002', '0', '0', '1', '0', '0', '0', '0', 'RSU AISYIYAH', '0', '0', 'BED', '0', '0', '0', '1627873951000', '2021-04-16', '0', '0'),
(2, '1311R002', '0', '0', '1', '0', '0', '0', '0', 'RSU AISYIYAH', '0', '0', 'BED', '0', '0', '0', '1627873951000', '2021-05-16', '0', '0'),
(3, '1311R002', '0', '0', '1', '0', '0', '0', '0', 'RSU AISYIYAH', '0', '0', 'BED', '0', '0', '0', '1627873951000', '2021-04-16', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrean`
--
ALTER TABLE `antrean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwaldokter`
--
ALTER TABLE `jadwaldokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbpoli`
--
ALTER TABLE `tbpoli`
  ADD PRIMARY KEY (`IdPoli`);

--
-- Indexes for table `waktutunggu`
--
ALTER TABLE `waktutunggu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrean`
--
ALTER TABLE `antrean`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwaldokter`
--
ALTER TABLE `jadwaldokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_dokter`
--
ALTER TABLE `tabel_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbpoli`
--
ALTER TABLE `tbpoli`
  MODIFY `IdPoli` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `waktutunggu`
--
ALTER TABLE `waktutunggu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
