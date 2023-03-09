-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 11:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `maba`
--

CREATE TABLE `maba` (
  `ID` int(10) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `kelompok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maba`
--

INSERT INTO `maba` (`ID`, `nama`, `kelompok`) VALUES
(1, 'GINANJAR ILMI NUR AVICENA', 'Bitcoin'),
(2, 'MUHAMMAD RAYHAN', 'Bitcoin'),
(3, 'RAFFA EL JUNDI', 'Bitcoin'),
(4, 'RAFLI PURNAMA PUTRA', 'Bitcoin'),
(5, 'RIFKY RIFALDI ADITIAWARMAN', 'Bitcoin'),
(6, 'RIZKY SAMPOERNA', 'Bitcoin'),
(7, 'AZIZURAHMAN ARAFAH MUFTI', 'Bitcoin'),
(8, 'AVIF ASSADAY', 'Bitcoin'),
(9, 'MUHAMMAD ZAHWAN LATIF', 'Bitcoin'),
(10, 'MUHAMMAD ZULFIKAR ALHAIDAR', 'Bitcoin'),
(11, 'RIFQI RAENANDA FAQIHH', 'Bitcoin'),
(12, 'RAKIIN DWIKI SAPUTRA', 'Bitcoin'),
(13, 'DAVID FRANKLIN MANDAK', 'Bitcoin'),
(14, 'HAFIDZ ROCHMAN', 'Bitcoin'),
(15, 'M REFKI SYAKI AGRANA PERMADI', 'Bitcoin'),
(16, 'MUHAMMAD ALFAROBY', 'Bitcoin'),
(17, 'SHEINA FATHUR RAHMAN', 'Bitcoin'),
(18, 'FADHILLAH SAHAD', 'Bitcoin'),
(19, 'MARIO ARDLYNSHA PICAULY', 'Bitcoin'),
(20, 'MUHAMMAD RAIHAN DANADYAKSA', 'Bitcoin'),
(21, 'MUHAMMAD RAIHAN PRIHAMBUDI', 'Bitcoin'),
(22, 'AMALIA RIZKI FEBRIANTI', 'Bitcoin'),
(23, 'JESSICA RAHMAN', 'Bitcoin'),
(24, 'ANNISA ERVANI FITRI', 'Bitcoin'),
(25, 'REGITA KUMALA PRAMESWARI', 'Bitcoin'),
(26, 'RIVELLA RAMADHANI', 'Bitcoin'),
(27, 'YUSOFF ZAKY JACOED', 'Etherium'),
(28, 'FERNANDO PUTRA SILALAHI', 'Etherium'),
(29, 'MUHAMMAD ILHAM BINTANG BAKRI', 'Etherium'),
(30, 'RYAN SHAH TEJA PERDANA', 'Etherium'),
(31, 'YAZID AN NAUFAL', 'Etherium'),
(32, 'NAUFAL BAGAS BAIHAQI HAKIM', 'Etherium'),
(33, 'ERVIN AMASIA SIANIPAR', 'Etherium'),
(34, 'KURNIA SETIATAMA', 'Etherium'),
(35, 'LAURENTIUS CHRISTIAN DWI NUGRAHA', 'Etherium'),
(36, 'MUHAMMAD HANIF FIRMANSYAH', 'Etherium'),
(37, 'SYAHDI GHARIZAH AHSAN', 'Etherium'),
(38, 'AFIF FATURACHMAN', 'Etherium'),
(39, 'DIMAS WAHYU NUGROHO', 'Etherium'),
(40, 'HUBERT IGOR HARYATMO TANDRI', 'Etherium'),
(41, 'TAUFIK HIDAYAT', 'Etherium'),
(42, 'WAHYU JATI', 'Etherium'),
(43, 'BASAULI HITAGOL', 'Etherium'),
(44, 'EDGHAR DANUWIJAYA', 'Etherium'),
(45, 'MUHAMMAD ROYYAN FAUZI', 'Etherium'),
(46, 'TETUKO WAHYU UTOMO', 'Etherium'),
(47, 'XAVIER SAMUEL MUHAMMAD FIDEL PILJAI', 'Etherium'),
(48, 'ELSA PUTRI ARYANTI', 'Etherium'),
(49, 'DINDA AMIRA PRAYUNITA', 'Etherium'),
(50, 'INKA PRADNYA PALUPI', 'Etherium'),
(51, 'PEBRILYANTI DOYA WISUDAWATI', 'Etherium'),
(52, 'SALSA ARIFAH ZAKKIYA', 'Etherium'),
(53, 'ALFITO FEBRIANSYAH', 'Doge'),
(54, 'AULIA WASKITA PRAYOGO HAKIKI', 'Doge'),
(55, 'IDA BAGUS PELING PRAYOGA', 'Doge'),
(56, 'SYAHREZA SATRIA ALFATH', 'Doge'),
(57, 'RUHAN MIN AMRINA', 'Doge'),
(58, 'MUHAMMAD AFIF FEBRIAN THAHIR', 'Doge'),
(59, 'ATHALLA FARSHAH WIJAYANTO', 'Doge'),
(60, 'AJMAL YAZID', 'Doge'),
(61, 'RIFQY ADIYATMA', 'Doge'),
(62, 'DERRYL REFLANDO TARIGAN', 'Doge'),
(63, 'YANI SOFYAN SYACH', 'Doge'),
(64, 'BAPTISTA GRATIANO ENRICO', 'Doge'),
(65, 'GREGORIO BONGGAL NOVENO ALVITO', 'Doge'),
(66, 'MUHAMMAD RAIHAN RAMADHAN', 'Doge'),
(67, 'NOVALDY T', 'Doge'),
(68, 'ROBBY ADRIANSYAH FADILLAH', 'Doge'),
(69, 'ANDHIKA PUTRA', 'Doge'),
(70, 'FERDY FADRIANSYAH', 'Doge'),
(71, 'IMAM SULTHONI SANTOSO', 'Doge'),
(72, 'MOH FAWWAZ ARRAUF', 'Doge'),
(73, 'MUHAMMAD RIZQI ABDILLAH', 'Doge'),
(74, 'MARY BOLUNG', 'Doge'),
(75, 'AULIYA AZ-ZAHRA', 'Doge'),
(76, 'RETNO FAUZIAH ISTIQOMAH', 'Doge'),
(77, 'PUTRI CHOIRUNIYAH', 'Doge'),
(78, 'AUDY AULIASHARON MUNAS', 'Doge'),
(79, 'REVI RAKA PUTRA', 'Elrond'),
(80, 'DAFFA ARYA HUTOMO PUTRA', 'Elrond'),
(81, 'DEWAKA RACHMANDA NAPARO BANGUN', 'Elrond'),
(82, 'MOCH RIZKY GUMELAR ERLANDYA', 'Elrond'),
(83, 'MUHAMMAD FAKHRI ARLA SYAFIQ', 'Elrond'),
(84, 'WIJDAN KHALIL', 'Elrond'),
(85, 'RAKA HIDAYAT FATUROCHMAN', 'Elrond'),
(86, 'YAFI NAUFAL HARTONO', 'Elrond'),
(87, 'MUHAMMAD ICHSAN ALFIAN', 'Elrond'),
(88, 'RIZQI MAULANA SATYA AKBAR', 'Elrond'),
(89, 'MUHAMMAD HARIS PAZELA', 'Elrond'),
(90, 'BAGAS RIYADI', 'Elrond'),
(91, 'DAFFA SATRIAGA', 'Elrond'),
(92, 'MUHAMMAD ALIF FARRAS', 'Elrond'),
(93, 'NABIL AHMAD NAUFAL', 'Elrond'),
(94, 'REIHAN AKMAL HARIMULYA', 'Elrond'),
(95, 'VALENT SATRIA DARMAWAN', 'Elrond'),
(96, 'HANDOKO TEJO ATMOKO', 'Elrond'),
(97, 'IQRA REZKY ALIGRAH MUHAMMAD', 'Elrond'),
(98, 'MOCHAMAD FAUZAN FATURAHMAN', 'Elrond'),
(99, 'YESANNA PININTA LAMRIA MARPAUNG', 'Elrond'),
(100, 'FRISKA PRASTI PUTRI', 'Elrond'),
(101, 'DEVINA TRI TEDDY SUWARJA', 'Elrond'),
(102, 'NUR ALAM NIA ARIEF', 'Elrond'),
(103, 'MARISSA SYIFA NAURA', 'Elrond'),
(104, 'ARTA NOVRIDA LUMBAN RAJA', 'Elrond'),
(105, 'JONATHAN ARYA WIBOWO', 'Theter'),
(106, 'KULAU AUREZA SELFI', 'Theter'),
(107, 'MIHARU IDHAN FIKRIANSYAH', 'Theter'),
(108, 'MOCHAMAD ALIF FANY TAFTAZANI', 'Theter'),
(109, 'MUHAMMAD HAIKAL', 'Theter'),
(110, 'MUHAMMAD ABDULLAH RIDHO', 'Theter'),
(111, 'SYAUQY RAHMAN NASUTION', 'Theter'),
(112, 'DANIEL PUTRA SURYAHADI', 'Theter'),
(113, 'GAVYN AHMAD FATA', 'Theter'),
(114, 'VENUS LIDZIKRI ADHITYA', 'Theter'),
(115, 'M HADIST', 'Theter'),
(116, 'AKBAR RIZKI ALDILA', 'Theter'),
(117, 'BAHRUR RIDLO IZZAQI', 'Theter'),
(118, 'EGGIFIAN SAPUTRA', 'Theter'),
(119, 'FARAS PERDANA SUBIANTO PUTRA', 'Theter'),
(120, 'RATANDI AHMAD FAUZAN', 'Theter'),
(121, 'BAGINDA MAULANAN NASCAN', 'Theter'),
(122, 'DARREL JOHAN', 'Theter'),
(123, 'FIRMAN ADE MOWOSE', 'Theter'),
(124, 'IBNU FARKHAN', 'Theter'),
(125, 'ZORIA ARISTA MOLANO', 'Theter'),
(126, 'ITSNA SIHA ARZAQI ADMA NASRUDDIN', 'Theter'),
(127, 'BONEFASIA SALVATORE STELAMARIS', 'Theter'),
(128, 'SITI NURUL ANNISA ASFIRA', 'Theter'),
(129, 'SITI NURUL ANNISA ASFIRA', 'Theter'),
(130, 'VIKKA DWI NAULI HARO RAJAGUKGUK', 'Theter'),
(131, 'ANUGRAH RIFKY PRATAMA', 'Ocean P'),
(132, 'BILLY YURIAAN', 'Ocean P'),
(133, 'M REZA YUANSYAH', 'Ocean P'),
(134, 'MUHAMMAD ALFI JUMRI', 'Ocean P'),
(135, 'MUSTAFA BAQIR', 'Ocean P'),
(136, 'OKA SAMDYA ADABI', 'Ocean P'),
(137, 'ARYA MAGHRIZAL PUTRA', 'Ocean P'),
(138, 'ALVITO ZULVA DEVARA', 'Ocean P'),
(139, 'KHOIRUL AZKIYA', 'Ocean P'),
(140, 'MUHAMMAD RIDHAN FIRDAUS', 'Ocean P'),
(141, 'ROMADHONA FAJAR NURROHMAN', 'Ocean P'),
(142, 'HIBRIZY JODISTIRA HIBATULLAH SULISTIYO', 'Ocean P'),
(143, 'IMAM BAGHIZ MAKARIM SAEYAZ', 'Ocean P'),
(144, 'MAUDHADI ARDIANSYAH', 'Ocean P'),
(145, 'MUHAMMAD SYARIFUL UMAM', 'Ocean P'),
(146, 'NAUFAL AHMAD NUR HAKIM', 'Ocean P'),
(147, 'HAFIDH RIZQULLAH FATTAH', 'Ocean P'),
(148, 'RIKI RENGGANA', 'Ocean P'),
(149, 'RAKHA SATRIA PRATAMA', 'Ocean P'),
(150, 'MUHAMMAD NADIM ABDURARAHMAN', 'Ocean P'),
(151, 'BULAN AYU SARI MUNTAI', 'Ocean P'),
(152, 'CUT HAYFA SYAFIATUDDINI', 'Ocean P'),
(153, 'ZIHAN KHALILA GUSNAN', 'Ocean P'),
(154, 'DITA JUDHA CAHYANI', 'Ocean P'),
(155, 'BLINDA CHEFRI LINGGI', 'Ocean P'),
(156, 'DIANA AZZAHRA', 'Ocean P');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `no_pel` int(10) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `kelompok` varchar(10) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tidakhadir` varchar(20) DEFAULT NULL,
  `kehadiran` varchar(50) DEFAULT NULL,
  `perilaku1` varchar(50) DEFAULT NULL,
  `perilaku2` varchar(50) DEFAULT NULL,
  `atribut1` varchar(50) DEFAULT NULL,
  `atribut2` varchar(50) DEFAULT NULL,
  `Total` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`no_pel`, `nama`, `kelompok`, `hari`, `tidakhadir`, `kehadiran`, `perilaku1`, `perilaku2`, `atribut1`, `atribut2`, `Total`) VALUES
(22, 'GINANJAR ILMI NUR AVICENA', 'Bitcoin', 'PROXIMITI DAY 1', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(23, 'MIHARU IDHAN FIKRIANSYAH', 'Theter', 'PROXIMITI DAY 1', NULL, 'Terlambat 45 Menit', '', '', '', '', 15),
(24, 'OKA SAMDYA ADABI', 'Ocean P', 'PROXIMITI DAY 1', NULL, '', '', '', 'Tidak Menggunakan VBG', 'Tidak Menggunakan Atribut Sesuai Ketentuan', 50),
(25, 'RAFLI PURNAMA PUTRA', 'Bitcoin', 'PROXIMITI DAY 1', NULL, 'Terlambat 60 Menit', 'Tidak on-cam', 'Berperilaku tidak sopan', 'Tidak Menggunakan VBG', 'Tidak Menggunakan Atribut Sesuai Ketentuan', 145),
(26, 'JESSICA RAHMAN', 'Bitcoin', 'PROXIMITI DAY 1', NULL, '', 'Tidak on-cam', '', '', '', 25),
(27, 'YUSOFF ZAKY JACOED', 'Etherium', 'PROXIMITI DAY 2', NULL, 'Terlambat 15 Menit', '', '', '', '', 5),
(28, 'MUHAMMAD RAIHAN PRIHAMBUDI', 'Bitcoin', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(29, 'ERVIN AMASIA SIANIPAR', 'Etherium', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(30, 'LAURENTIUS CHRISTIAN DWI NUGRAHA', 'Etherium', 'PROXIMITI DAY 6', NULL, 'Terlambat 60 Menit', '', '', '', '', 20),
(31, 'ROBBY ADRIANSYAH FADILLAH', 'Doge', 'PROXIMITI DAY 6', NULL, 'Terlambat 15 Menit', '', '', '', '', 5),
(32, 'IMAM SULTHONI SANTOSO', 'Doge', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(33, 'AUDY AULIASHARON MUNAS', 'Doge', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(34, 'FRISKA PRASTI PUTRI', 'Elrond', 'PROXIMITI DAY 6', NULL, '', 'Tidak on-cam', '', '', 'Tidak Menggunakan Atribut Sesuai Ketentuan', 50),
(35, 'VALENT SATRIA DARMAWAN', 'Elrond', 'PROXIMITI DAY 6', NULL, 'Terlambat 15 Menit', '', '', '', '', 5),
(36, 'YAFI NAUFAL HARTONO', 'Elrond', 'PROXIMITI DAY 6', NULL, 'Terlambat 15 Menit', '', '', '', '', 5),
(37, 'DEWAKA RACHMANDA NAPARO BANGUN', 'Elrond', 'PROXIMITI DAY 6', NULL, 'Terlambat 60 Menit', '', '', '', '', 20),
(38, 'M REZA YUANSYAH', 'Ocean P', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(39, 'MUHAMMAD ALFI JUMRI', 'Ocean P', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(40, 'OKA SAMDYA ADABI', 'Ocean P', 'PROXIMITI DAY 6', NULL, '', 'Tidak on-cam', '', '', '', 25),
(41, 'ALVITO ZULVA DEVARA', 'Ocean P', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(42, 'KHOIRUL AZKIYA', 'Ocean P', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(43, 'MUHAMMAD NADIM ABDURARAHMAN', 'Ocean P', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(44, 'DITA JUDHA CAHYANI', 'Ocean P', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(45, 'AMALIA RIZKI FEBRIANTI', 'Bitcoin', 'PROXIMITI DAY 6', NULL, 'Terlambat 15 Menit', '', '', '', '', 5),
(46, 'RAFFA EL JUNDI', 'Bitcoin', 'PROXIMITI DAY 6', NULL, '', 'Tidak on-cam', '', '', '', 25),
(47, 'DAVID FRANKLIN MANDAK', 'Bitcoin', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(48, 'FADHILLAH SAHAD', 'Bitcoin', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(49, 'M HADIST', 'Theter', 'PROXIMITI DAY 6', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0),
(50, 'BAGINDA MAULANAN NASCAN', 'Theter', 'PROXIMITI DAY 6', NULL, 'Terlambat 15 Menit', '', '', '', '', 5),
(51, 'VENUS LIDZIKRI ADHITYA', 'Theter', 'PROXIMITI DAY 6', NULL, 'Terlambat 15 Menit', '', '', '', '', 5),
(52, 'MUHAMMAD ABDULLAH RIDHO', 'Theter', 'PROXIMITI DAY 6', NULL, 'Terlambat 60 Menit', '', '', '', '', 20),
(53, 'RAFFA EL JUNDI', 'Bitcoin', 'PROXIMITI DAY 1', 'Tidak Hadir', NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `admin` varchar(10) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `admin`, `username`, `password`) VALUES
(1, '1', 'admin', 'cdtproxim'),
(2, NULL, 'cdt', 'cdtproxim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maba`
--
ALTER TABLE `maba`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`no_pel`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maba`
--
ALTER TABLE `maba`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `no_pel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
