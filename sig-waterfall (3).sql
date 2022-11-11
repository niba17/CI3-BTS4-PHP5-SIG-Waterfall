-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 10:06 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig-waterfall`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabeladmin`
--

CREATE TABLE `tabeladmin` (
  `id` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabeladmin`
--

INSERT INTO `tabeladmin` (`id`, `username`, `password`) VALUES
(45, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tabelbpp`
--

CREATE TABLE `tabelbpp` (
  `id` int(128) NOT NULL,
  `idkecamatan` int(128) NOT NULL,
  `idkelurahan` int(128) NOT NULL,
  `nmusaha` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nmpemilik` varchar(128) NOT NULL,
  `notdup` varchar(128) NOT NULL,
  `link` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelbpp`
--

INSERT INTO `tabelbpp` (`id`, `idkecamatan`, `idkelurahan`, `nmusaha`, `alamat`, `nmpemilik`, `notdup`, `link`) VALUES
(2, 1, 14, 'CV. CALISTA', 'JL.Ade Irma I No. 9', 'BAMBANG SUMARSONO', '-', ''),
(3, 1, 14, 'MAPAN BANA SINDO ABADI', 'JL.Ade Irma I No. 9', 'BAMBANG SUMARSONO', '-', NULL),
(4, 1, 14, 'PT. STINDO STAR', 'Jl. Perintis Kemerdekaan', 'FRANSISCA VICTORINA ELIM', '-', NULL),
(8, 1, 14, 'ATIFAH TOUR & TRAVEL', 'Jl.Hans Kapitan', ' FARHANAH HASAN ALBONEH	', '-', NULL),
(9, 1, 19, 'PT.CHYA & CHAY TOUR and TRAVEL', 'Jl. Timor Raya', 'ERIANA PANDIE', 'Budpar.430/0252/PW/VIII/ 016', NULL),
(10, 1, 19, 'PT. KHALIFAH INTERNASIO NAL BUSSINESS', 'Jl. Timor Raya', ' YANU ARMAL	', 'Budpar.430/0699/PW/IX/2016', NULL),
(11, 1, 19, 'CV. SINAR HARAPAN', ' Jl. Damai	 ', ' SUHERMANTO, SE', '-', NULL),
(12, 1, 19, 'PT. SEFACA', ' RT.046/RW.015	', 'YANTI RIKSA', '-', NULL),
(13, 1, 19, 'PT. TIMOR TOUR AND TRAVEL', 'Jl. Timor Raya', 'HENGKY FAMDALE, SH', 'Budpar.430/0271/PW/VIII/2016', NULL),
(14, 1, 17, 'PT. DWI PUTRA NUSA INDO TRAVEL', 'Jl. Timor Raya', 'PETTERS SINLAE', '-', NULL),
(15, 1, 17, 'PT. LESTE OESTE TRAVEL', 'Jl. Pulau Indah', 'VINCEN TJUNG MIADY', '-', NULL),
(16, 1, 3, 'PT. LEONTIN ABADI TOUR & TRAVEL', 'Jl. Sitarda No. 20', 'KALUMBAN L. MALI, SE', '-', NULL),
(17, 6, 8, 'PT. JOLIE TOUR and TRAVEL', 'Jl. Bhakti Karang', 'RUSLY LACOMBE MAUBOY', '-', NULL),
(18, 6, 8, 'PT. NORAITO AMALATU ABADI', 'Jl. Hati Suci No. 22', 'LENDA HOBERTHINA PALIAMA', 'Budpar.430/0739/PW/IX/2016', NULL),
(19, 6, 8, 'PT. FLOBAMOR JAYA TRAVEL', 'Jl. Hati Suci No. 24', 'ABEDNEGO FRANS, SH, M.Hum', '-', NULL),
(20, 6, 8, 'PT. BILBA NUSAN SEJAHTERA', 'RT.003/RW.002', 'IWAN Y.S. MAWARDI', '-', NULL),
(21, 6, 8, 'PT. RIA WISATA ABADI', 'Jl. Palapa No. 3', 'RIRI FITRIA MARIA', '-', NULL),
(22, 6, 8, 'PT. JAVA TIMOR JAYA MAKMUR', 'Jl. W.J. Lalamentik', ' ABA HANDIKA', '-', NULL),
(23, 6, 8, 'PT. MARI TOUR AND TRAVEL', ' Jl. Hati Suci No. 08	 ', 'MARI WIEJE FRANS', '-', NULL),
(24, 6, 8, 'PT. NAULI MANDIRI TRAVEL', ' Jl.Bakti Karang	', ' JANNUS RUMAH HORBO', '-', NULL),
(25, 6, 8, 'PT. ANDROMEGA NUSA PELANGI', 'Oebobo', 'ANTONIUS DA COSTA RAO', '-', NULL),
(26, 6, 8, 'PT. JESKIEL JAYA KUPANG TRAVEL', ' Jl. Hati Mulia No. 05	 ', 'JENY FITRIANA DJARI', '-', NULL),
(27, 6, 8, 'CV. JENNIKA', ' Jl. Perintis Kemerdekaan	 ', 'CHRISTIENE P. ANGKOTAM ONY', '-', NULL),
(28, 6, 56, 'PT. PANCA MULIA JAYA', ' Jl. R. W. Monginsidi	 ', 'ROBBY JORDAN TEKY', '-', NULL),
(29, 6, 56, 'SINAR KARYA TIMOR MANDIRI', ' Ruko Lontar Permai', 'FERDI ELIM', '-', NULL),
(30, 6, 56, 'CV. GENERASI TOUR & TRAVEL', ' Shopping Centre	', ' INA APRIANA', '-', NULL),
(31, 6, 56, 'PT. PRIMA GRACIA TRAVEL', ' Jl. R. W. Monginsidi	', ' ELISABETH A. SEDA SEGA', '-', NULL),
(32, 6, 56, 'CV. SADAR TOUR & TRAVEL	  	', 'Jl. Shopping Centre', '  INA HIRA', '-', NULL),
(33, 6, 56, 'PT. BALI NUSA SOLOR PARADISE', ' Jl. Thamrin Gg. Buntu 8	', ' YOHANES KORNELIS KEBAN', '-', NULL),
(34, 6, 56, 'DOLPHIN TOUR & TRAVEL', ' Jl.W.R.Mongi sidi 3 No.28	', ' BASUKI RAHMAD	 ', 'Budpar.430 / 0840 / PW / X / 2016', NULL),
(35, 6, 59, 'VALLEY DESERT TOUR & TRAVEL', ' Jl. Pemuda	 ', 'FRANSISCO F.L. DE SENAB', '-', NULL),
(36, 6, 59, 'PT. KASIH SAYANG BUNDA	', ' RT. 004 / RW. 002	', ' IVONY CHRISTIAN NOMLENI', '-', NULL),
(37, 6, 59, 'PT. LIFAU	 ', 'Jl.Pemuda No.20	', ' J. BARETO', '-', NULL),
(38, 6, 59, 'PT. GANI ANUGRAH	', ' Jl.Cak Doko No.47	 ', 'ETY FOEH ADU', '-', NULL),
(39, 6, 59, '36. GERY ANUGERAH TRAVEL		', 'RT.023/RW.007	', 'HETTY FOE – MBATU', 'Budpar.430 / 0299 / PW / VIII / 2016', NULL),
(40, 6, 20, 'CV. ALYEN BERLIAN	 	 ', 'RT.019 / RW.005', 'ALOYSIUS SALINA', '-', NULL),
(41, 6, 20, ' PT. TROISAL TOUR & TRAVEL		 ', ' RT.027 / RW.007', 'YOSIA Y. B. MAUBOI', '-', NULL),
(42, 6, 20, 'PT. PRIMA ASTALINDO DHARMA		 ', ' Jl. TDM III', 'YULIANUS HALE BAU', '-', NULL),
(43, 6, 20, 'PT. WASHENG TOUR	  ', 'Perum. OBF. Permai	', 'RENTJE HERNI SAKUL', '-', NULL),
(44, 6, 20, 'PT. BILBA NUSAN SEJAHTERA	 	', 'RT. 003 / RW. 002', ' IWAN Y. S. MAWARDI', '-', NULL),
(45, 6, 20, 'PT.LINTAS ARUNG TOUR & TRAVEL		', ' Jl.Bundaran PU No.109 C', ' SANTI MULYANTO', '-', NULL),
(46, 6, 20, 'PT. PRIMA ASTALINDO DHARMA	 	 ', 'Jl. TDM III Gg. Petrus', 'YULIANUS HALE BAU', '-', NULL),
(47, 6, 58, 'PT. ARTHA ABADI NUSANTARA		', ' Jl. Adi Sucipto', 'CINDY DEWIJANTY', '-', NULL),
(48, 6, 13, 'PT. WANLY			', ' Bundaran PU', ' HELENA ADOE', ' Budpar.430 / 0920 / PW / X / 2016', NULL),
(49, 6, 13, 'PT. T‐ XPRESS JAYA MAKMUR	', ' Jl. W. J. Lalamentik	 ', 'IKI LEO	', ' Budpar. 430 / 0840 / PW / X / 2016', NULL),
(50, 6, 13, 'RIZKY TRAVEL	 	 	 ', 'Jl. Bundaran PU', 'ANTHONIA JOMINA TOTU NDANUS', 'Budpar. 430 / 0547 / PW / IX / 2016', NULL),
(51, 6, 13, 'PT. BINTANG TIMOR MANDIRI	 	', 'Jl. Amabi', ' CHARLES LUKEN PINTO', '-', NULL),
(52, 6, 13, 'PT. GRACEGIO HARAPAN		', ' Jl. W. J. Lalamentik', ' MAX CHRIST FAMDALE', '-', NULL),
(53, 6, 13, 'CV. M2M REIZEN	 	 ', 'RT. 005 / RW. 001', 'MARGARETHA M. BATAONA', '-', NULL),
(54, 6, 13, 'TRAVEL R–L PURA		 ', ' Jl. Perintis Kemerdekaan II', 'RAFAEL LADO PURA', '-', NULL),
(55, 6, 13, 'CV. JENNIKA	 	 ', 'Jl. Perintis Kemerdekaan II', ' CHRISIENE P. ANGKOTAM ONY', 'Budpar. 430 / 0081 / PW / VII / 2016', NULL),
(56, 6, 13, ' CV. KHARISMA CENDANA TOUR & TRAVEL		', 'Jl. Bundaran PU', 'FAHMI CAHYA RAMADHAN', '-', NULL),
(57, 6, 13, 'PT. T – XPRESS JAYA MAKMUR', ' Jl. W.J. Lalamentik	', ' IKI LEO', '-', NULL),
(58, 6, 13, 'EDO RENCART	 	', 'Jl. W. J. Lalamentik	 ', 'EDDY REINALDY PII', ' Budpar. 430 / 0293 / PW / VIII / 2016', NULL),
(59, 6, 13, ' CV. GANA	 ', 'Kompleks Flobamor Mall	', 'YOSIA RENALDO GANA	', '  Budpar. 430 / 0840 / PW / X / 2016', NULL),
(60, 6, 57, 'PT. NAJWAH TOUR & TRAVEL	 	 	', 'Jl. K.H. Ahmad Dahlan', 'R A C H M A T', ' Budpar. 430 / 0962 / PW / XI / 2016', NULL),
(61, 6, 57, ' PT. ANGELTA PUTRI MANDIRI		', ' RT. 030 / RW. 008', ' ANGELIKA M. S. BETEKENENG', '-', NULL),
(62, 6, 57, ' CV. DAYA ABADI		', ' Jl. Ahmad Dahlan', ' ASMIDAR SIDIN', '-', NULL),
(63, 2, 46, 'PT. SINTAMA ABADI JAYA	  ', 'Jl. R.W. Monginsidi	', 'SRI MARYATI BUDIMAN', '-', NULL),
(64, 2, 46, 'PT. ADENA TOUR & TRAVEL		 ', ' Jl. Timor Raya', 'NILLA FONITA LOUK – FANGGIE', '-', NULL),
(65, 2, 46, 'PT. ATIFAH TOUR and TRAVEL			', 'Jl. Timor Raya', 'HERLIN YUNITA MAAT', 'Budpar. 430 / 0576 / PW / IX / 2016', NULL),
(66, 2, 44, 'PT. REDEWIKA PRIMA		 ', ' RT.011/RW.004', 'CORNEL R. KAPITAN', '-', NULL),
(67, 2, 44, 'PT. ALDITIA DHARMA JAYA	 ', 'Jl. Ranamese Raya', 'NUROCHMAN', '-', NULL),
(68, 2, 44, 'SRI SULTAN TOUR & TRAVEL		', ' Jl. Ranamese	', ' BAHARUDDIN', ' Budpar. 430 / 0568 / PW / IX / 2016', NULL),
(69, 2, 45, 'KOPERASI KARYAWAN USAHA SEJAHTERA	 	', 'Jl. Timor Raya	', ' SAUL ZEVANYA NGGAUK', ' Budpar. 430 / 0686 / PW / IX / 2016', NULL),
(70, 2, 45, 'RIVANDI TRAVEL			', ' Jl. Timor Raya', ' RIFKY TAUFIK AKLIS', ' Budpar. 430 / 0145 / PW / VIII / 2016', NULL),
(71, 2, 43, 'PT. Y & T TOUR and TRAVEL	 	  ', 'Jl. Urip Sumoharjo', 'MARIA YANTI MOGO	', 'Budpar. 430 / 0771 / PW / X / 2016', NULL),
(72, 2, 43, 'TIMOR MENTARI INDAH		 ', ' Jl. Kelimutu No. 38	', ' NURHAYATI J. F. B. S. BELADJAM', 'Budpar. 430 / 0081 / PW / VII / 2016', NULL),
(73, 2, 48, 'SURYA SEJAHTERA TOUR & TRAVEL	 	', 'Jl. Sumatera No.31', ' ELBERT MANAFE, SE', '-', NULL),
(74, 2, 47, 'PT. KUPANG TOUR & TRAVEL	 ', 'Jl. Garuda', 'HANDRI	 ', 'Budpar. 430 / 0615 / PW / IX / 2016', NULL),
(75, 2, 47, 'FAMILY		 	 ', ' Jl. Gunung Mutis', 'FAIZAL BELADJAM', 'Budpar. 430 / 0067 / PW / VII / 2016', NULL),
(76, 2, 47, 'PT. ARSA BUANA	 	 	', 'Jl.Sunan Gng. Jati', 'ARMA ARIFUDIN LAMAYA', ' Budpar. 430 / 0607 / PW / IX / 2016', NULL),
(77, 2, 41, 'PT. ANNAJMI GOLDEN TOUR & TRAVEL	 	 ', 'Jl. Nuri', 'MILA SHANTI SAIDUN ALI', '-', NULL),
(78, 2, 4, 'PT. KARUNIA JAYA ANGKASA	   ', 'Jl. Siliwangi No. 56	', 'S U S A N E', '-', NULL),
(79, 2, 4, 'PT. TEDDY’S WISATA		 ', ' Jl. Ikan Tongkol No. 1', 'TEDDY TANONEF', '-', NULL),
(80, 4, 6, 'PT. SALFA HARMONI		 ', ' Jl. Siwalan RT.016/RW.006', 'APLYATI YAHYA', '-', NULL),
(81, 4, 6, 'ANGEL’S TOUR & TRAVEL		', 'JL. Lontar Permai 2', 'ANTONIUS ASAN GANA, A.Ma', '-', NULL),
(82, 4, 51, 'CV. LA GALIGO		', ' Perum BTN Blok XI', ' SUBAIDAH A. WAHAB', '-', NULL),
(83, 4, 51, 'CV. CAKRAWALA	 	', 'Perum BTN Blok Y', ' HOIFATUL AISYAH', '-', NULL),
(84, 4, 51, 'CV. TIMOR PERKASA MANDIRI		', ' Jl. Fetor Foenay', ' RUDY RIKONY, SE', '-', NULL),
(85, 4, 51, 'CV. CAHAYA LENTERA MAS	 	 ', 'Perum BTN Blok EF/20', 'FEBRIANA MARIA PELLO', '-', NULL),
(86, 4, 51, 'CV. JELAJAH NTT		', ' BTN Kolhua Blok H / 01', ' ELOK FAIQOTUL HIMAH', '-', NULL),
(87, 4, 21, 'CV. J M C	 	 ', 'Jl. Adisucipto', 'JHON ADRIAN AGUSTINUS LUTU', '-', NULL),
(88, 4, 55, 'PT. MAHARANI TOUR & TRAVEL		', ' RT.009 / RW.004', 'CHRISTINA J. SIHASALE', ' Budpar. 430 / 0840 / PW / X / 2016', NULL),
(89, 4, 54, 'PT. VICTORY JANETH INDAH		', ' Jl. Jend. Soeharto', ' PETRY NELLA GIE, SE', '-', NULL),
(90, 4, 52, 'PT. FEODORA BHAKTI MANDIRI		', 'Jl. Kecubung No. 17', 'JEANE MARLINA NYOKO', '-', NULL),
(91, 4, 53, 'PT. DIAN PERMATA TIMOR			 ', ' RT.011/RW.004', ' JUNEZAR ROBYOD W. MALESI', 'Budpar. 430 / 0906 / PW / X / 2016', NULL),
(92, 5, 39, 'PT. NUSATIN TOUR & TRAVEL		 ', ' Jl. Jend. Sudirman No.48', 'ERNY H. SAMAPATY', '-', NULL),
(93, 5, 39, 'PT. TRI TUNGGAL KUPANG	 	', 'Jl. Jend. Sudirman No.130', ' DHARMAWAN SANTOSO', '-', NULL),
(94, 5, 39, 'PT. PITOBI TOUR AND TRAVEL			', ' Jl. Jend. Sudirman', ' TONY T. PITOBY', ' Budpar. 430 / 0450 / PW / VIII / 2016', NULL),
(95, 5, 39, 'CV. BINTANG		', ' Jl. Benteng', ' HOSEA TANDOYO', '-', NULL),
(96, 5, 39, 'PT. DHEANDRA JAYA ABADI		', ' JL. C. KOTADIA', ' ROBERT A. ABINENO', '-', NULL),
(97, 5, 39, 'PT. ADELADE TOUR & TRAVEL		', ' JL. A. NISNONI', ' PDT. ESTER LITELNONI', '-', NULL),
(98, 5, 16, 'CV. METALVIN KARYA JAYA		', ' Jl. Moh. Hatta No.28', ' FERDINAND M. LOLANG', '-', NULL),
(99, 5, 16, 'DIAN ASTRA GLOBAL			', 'Jl. Moh. Hatta', 'NI KETUT SRINASIH', 'Budpar. 430 / 0954 / PW / X / 2016', NULL),
(100, 5, 37, 'PT. FRIDELINS FOBERS PERMAI	', 'Jl. Swakarya I	 ', ' SHERLY FANGGIDAE', '-', NULL),
(101, 5, 37, 'DEVAN TOUR AND TRAVEL		', ' Jl. Pocoranaka No. 22', ' DELFIANA MARINCE DAMALEDO', '-', NULL),
(102, 5, 37, 'MAJESTY TIMOR HOLIDAYS		', ' Jl. Pemuda', ' YETTY MARTHISAY	 ', 'Budpar. 430 / 0407 / PW / VIII / 2016', NULL),
(103, 5, 7, 'BPW FLORESA WISATA	 ', 'Jl. Mawar No. 15', 'MARTINUS KLAU	', ' Budpar. 430 / 0504 / PW / IX / 2016', NULL),
(104, 5, 38, 'PT. DUTA TIMOR SENTOSA			', ' Jl. P Da Cunha', ' CESILIA A. FERNANDEZ', ' Budpar. 430 / 0477 / PW / VIII / 2016', NULL),
(105, 5, 38, 'GRAHARA			', ' Jl.Herewila', ' FEBBY DJARANJOER A‐RISA', ' Budpar. 430 / 0406 / PW / VIII / 2016', NULL),
(106, 3, 30, 'PT. ADIL UTAMA TOUR & TRAVEL			 ', ' Jl. Pahlawan', ' H. ZAINAL ABIDIN A. KADIR', 'Budpar. 430 / 0614 / PW / IX / 2016', NULL),
(107, 3, 30, 'PT. PILAR BETA WISATA		', 'Jl. Tanjung Karang', 'ERNA MEYNERS GEBANG', '-', NULL),
(108, 3, 30, 'PT. PILAR ENTERPRISE		', ' Jl. Tanjung Karang', ' ERNA MEYNERS GEBANG', '-', NULL),
(109, 3, 27, 'PT.VERO & JYCHIA		', ' RT.002 / RW.001', ' NIXON NDOEN', '-', NULL),
(110, 3, 33, 'TRAVEL SHINTA	 	', 'Jl. A. Baitanu', ' DEWI SINTHA MUHAMMAD', '-', NULL),
(111, 3, 33, 'MITRA TAOUR AND TRAVEL		 ', ' Jl Lembor No. 5', 'HARDY PRASETIA HERDIYANTO', '-', NULL),
(112, 3, 33, 'TIRTA BUANA	 	', 'Jl. Waikelo', ' HERMAN SUDIN', '-', NULL),
(113, 3, 33, 'TRESSA TRAVEL		', 'Penkase Oeleta', ' SUTRISNO OEMATAN', '-', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabelhotel`
--

CREATE TABLE `tabelhotel` (
  `id` int(128) NOT NULL,
  `idkecamatan` int(128) NOT NULL,
  `idkelurahan` int(128) NOT NULL,
  `nmusaha` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nmpemilik` varchar(128) NOT NULL,
  `notdup` varchar(128) NOT NULL,
  `link` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelhotel`
--

INSERT INTO `tabelhotel` (`id`, `idkecamatan`, `idkelurahan`, `nmusaha`, `alamat`, `nmpemilik`, `notdup`, `link`) VALUES
(2, 1, 14, 'SASANDO HOTEL', ' Jl. R. A. Kartini	 	 ', 'STANISLAUS SANGA AMA', 'Budpar. 430 / 0204 / AK / VIII / 2016', NULL),
(3, 1, 14, 'PELANGI	 	 	 ', 'Jl. Veteran', 'DIKKY MOOY', 'Dispar . 430 / 00081 / AK / VII / 2019', NULL),
(6, 1, 14, 'CITRA		 	 ', ' Jl. Timor Raya', 'SAMIN HENDRIK TAKA', 'Dispar. 430 / 000239 / AK/ VIII/ 2018', NULL),
(7, 1, 14, 'KELAPA LIMA INDAH	 		 ', 'Jl. Hans Kapitan', ' ALETHA SALOMI DERICA KALE – PA', 'Budpar.430 / 0289 / AK / VIII / 2016', NULL),
(8, 1, 14, 'ON THE ROCK	 	 ', 'Jl. Timor Raya	', ' GUNAWAN SATIA DARMA', 'Dispar . 430 / 00067 / AK / VI / 2019', NULL),
(9, 1, 14, 'INA BOI', ' Jl. Cokroaminoto', ' FROUKE HEGE BUBU, BSc', ' Budpar.430 / 0166 / AK / VIII / 2016', NULL),
(10, 1, 14, 'ASTON KUPANG		 	', ' Jl. Timor Raya', 'MARTHIN FANGGIDAE', ' Dispar. 430 / 00150 /AK / VII /2019', NULL),
(11, 1, 14, 'M. BOUTIQUE		 	', ' Jl. Timor Raya', 'HENKY MAKKSAU', ' Dispar. 430 / 00361 / AK / III / 2016', NULL),
(12, 1, 14, 'EDHOTEL TIMOR			 ', ' Jl. S. K. Lerik', ' JENI J. P. KABINANI – BHASARIE', 'Dispar. 430 / 00464 / AK / VI / 2017', NULL),
(13, 1, 14, 'HOTEL NELAYAN			', ' Jl. Ade Irma II', ' Robertus Manek Lay', ' Dispar. 430 / 00588 / AK / X / 2017', NULL),
(14, 1, 17, ' IMA	 	 ', ' Jl. Timor Raya	', 'FREDY ONGKO SAPUTRA', 'Budpar.430 / 0651 / AK / IX / 2016', NULL),
(15, 1, 17, 'TRANSERA			', ' Jl. Pulau Indah', ' H. R. SANTOSO', ' Budpar. 430 / 0500 / AK / IX / 2016', NULL),
(16, 1, 17, 'ROYAL		 	', ' Jl. Timor Raya', 'ACUNG ROTINGGO', ' Dispar. 430 / 00139 / AK / VII / 2019', NULL),
(17, 1, 17, 'KING STONE		 	', ' Jl. Timor Raya', 'SAMIN HENDRIK TAKA', ' Budpar. 430 / 0656 / AK / IX / 2016', NULL),
(18, 1, 19, 'WINSLOW	 	 	', 'Jl. Timor Raya', 'LUDIA EFRODIA ISLIKO – TAKA', ' Budpar. 430 / 0033 / AK / VII / 2016', NULL),
(19, 1, 19, 'TI\'I LANGGA			', ' Jl. Timor Raya', ' HELENA MANDALA', ' Dispar. 430 / 00093 / AK / VII / 2019', NULL),
(20, 1, 19, 'BRENTON			 ', ' Jl. Timor Raya', ' BENYAMIN MOSES MANDALA', 'Budpar. 430 / 0725 / AK / IX / 2016', NULL),
(21, 1, 19, 'NEO HOTEL BY ASTON			 ', ' Jl. Piet A. Tallo', ' TONI SINATRA', 'Budpar. 430 / 0200 / AK / VIII / 2016', NULL),
(22, 1, 34, 'PT. NUSA WISATA INDAH / SAHID T- MORE KUPANG	 	 	', 'Jl. Piet. A. Tallo', 'JUVENILE JODJANA', ' Dispar. 430 / 000138 / AK / IV / 2018', NULL),
(23, 1, 34, 'HOTEL LE - DETADU	   	', ' Jl. Matahari	', 'YADI HARISMAN RIWU KORE', '  Budpar. 430 / 0196 / AK / VIII / 2016', NULL),
(24, 1, 34, 'HOTEL YOTOWAWA	  		 ', 'Jl. Farmasi', '  BENYAMIN MOSES MANDALA', ' Budpar. 430 / 0726 / AK / IX / 2016', NULL),
(25, 2, 46, 'SWISS-BELLIN KRISTAL	 	 	', 'Jl. Timor Raya No. 59', 'DAVID FULBERTUS', ' Dispar. 430 / 00142 / AK / VIII / 2019', NULL),
(26, 2, 46, 'SOTIS PREMIER HOTEL			', 'Jl. Timor Raya', 'IVO SEBASTIAN MONGKAREN', 'Dispar.430 / 0529 / AK / VIII / 2017', NULL),
(27, 2, 48, 'HOTEL RESTORAN PANTAI TIMOR	  	 ', 'Jl. Sumatra No. 44	', 'DEDY TANONEF', 'Dispar.430 / 000284 / AK / MM / XII / 2018', NULL),
(28, 2, 48, 'MAYA		 ', ' Jl. Sumatra No. 31	', ' J. N. MANAFE', 'Budpar.430 / 0588 / AK / IX / 2016', NULL),
(29, 2, 48, 'MALIANA	 ', ' Jl. Sumatra	', 'BOBBY ANDREY TOEBE, SE	', ' Budpar.430 / 0590 / AK / IX / 2016', NULL),
(30, 2, 47, 'RAHMAT		 	 ', ' Jl. Sunan Gunung Jati', 'RIDLO RAHMAN HASAN', 'Budpar.430 / 0872 / AK / X / 2016', NULL),
(31, 2, 47, 'FAMILY		', ' Jl. Gunung Mutis', ' FAIZAL BELADJAM	', ' Budpar.430 / 0066 / AK / VII / 2016', NULL),
(32, 2, 4, 'SURYA KENCANA		 	', ' Jl. Soekarno', 'DENY SURYA', ' Budpar.430 / 0676 / AK / IX / 2016', NULL),
(33, 2, 4, ' INSANA		 	', ' Jl. Soekarno', 'EDDY R. INGGUNAU', ' Budpar. 430 / 0677 / AK / IX / 2016', NULL),
(34, 2, 45, 'NUSANTARA	 	', ' Jl. Timor Raya	', 'ADRIANUS NDOLU', ' Budpar. 430 / 0884 / AK / X / 2016', NULL),
(35, 2, 43, ' MUSTIKA FATULEU	 	 	', 'Jl. Gunung Fatuleu', 'MICHEAL JOHN SIDNEY SINE', ' Budpar. 430 / 0844 / AK / X / 2016', NULL),
(36, 2, 43, 'KUPANG INDAH			', ' Jl. Kelimutu No. 38', ' NURHAYATY J.F.B. SAHERTIAN', ' Budpar. 430 / 0531 / AK / VIII / 2016', NULL),
(37, 2, 43, 'HOTEL SYARIAH KELIMUTU GROUP	', 'Jl. Kelimutu No. 38', ' HALID BELADJAM	 ', ' Budpar. 430 / 0041 / AK / VII / 2016', NULL),
(38, 2, 43, 'LAGUNA INN	 		 ', 'Jl. Gunung Kelimutu', ' LOUIS RONALD YERMIA LOS', 'Budpar.430 / 0591 / AK / IX / 2016', NULL),
(39, 2, 43, 'ORCHID GARDEN	 	 ', 'Jl. Gunung Fatuleu', ' NON LAKUSA	', 'Budpar. 430 / 0834 / AK / X / 2016', NULL),
(40, 2, 43, 'MARINA	 	 	', 'Jl. Ahmad Yani', 'PATRICIA MARIA PORSIANA', ' Budpar. 430 / 0575 / AK / IX / 2016', NULL),
(41, 2, 43, 'SYARIAH KOMODO	 		 ', 'Jl. Gunung Kelimutu No.38', ' HALID BALADJAM', 'Budpar. 430 / 0042 / AK / VII / 2016', NULL),
(42, 2, 43, 'SYARIAH KUPANG INDAH			 ', ' Jl. Gunung Kelimutu No.25', 'HALID BALADJAM', 'Budpar. 430 / 01172 / AK / XII / 2016', NULL),
(43, 2, 41, 'SALUNGA			', ' Jl. Kakatua', ' HJ. PIPIE ROFIAH', ' Budpar. 430 / 0783 / AK / IX/ 2016', NULL),
(44, 2, 41, 'NIRWANA			 ', ' Jl. Merpati No 13', ' NURSYAMSI SAKA', 'Budpar. 430 / 0858 / AK / X/ 2016', NULL),
(45, 6, 8, 'CARVITHA		 	 ', ' Jl. W.J Lalamentik', 'TODO ANWAR MALESSY', 'Budpar. 430 / 0774 / AK / IX / 2016', NULL),
(46, 6, 8, 'JOLLY		', 'Jl. R. Seoprapto', 'MARVEL J. P. LEDO	 ', 'Budpar. 430 / 0712 / AK / IX / 2016', NULL),
(47, 6, 8, 'GRENIA		 ', ' Jl. Hati Mulia', 'MARLIN EKA NINGSIH SEME	', ' Dispar. 430 / 00074 / AK / VII / 2019', NULL),
(48, 6, 8, 'CENDANA		', ' Jl. El Tari No. 23', ' YOHANA HELENA LADA - SITA', 'Budpar. 430 / 0370 / AK / VIII / 2016', NULL),
(49, 6, 13, 'ROMYTA	 	 	 ', 'Jl. W.J. Lalamentik', 'THOMAS DJONE ORA', 'Dispar. 430 /00125 / AK / VII / 2019', NULL),
(50, 6, 13, 'PAPA JOHN’S	 	 	 ', 'Jl. W.J. Lalamentik', 'YOHANES PAULUS TESMAN', 'Budpar. 430 / 0645 / AK / IX / 2016', NULL),
(51, 6, 57, 'OLIVE	 		', 'Jl. Dua Lontar', ' YOHANA H. LADA SITTA', ' Budpar. 430 / 0380 / AK / VIII / 2016', NULL),
(52, 6, 57, 'JONIAR	 	', ' Jl. Dua Lontar	', 'JULIANA FRANS – HABA DJINGI', ' Dispar. 430 / 00123 / AK / VII /2019', NULL),
(53, 6, 57, 'ELMILYA	 	 	 ', 'Jl. Perintis Kemerdekaan', 'HARDIAN AMALIA', 'Budpar. 430 / 0275 / AK / VIII / 2016', NULL),
(54, 6, 57, 'KUPANG INN		 ', ' Jl. Perintis Kemerdekaan', ' CHRISTIANA SUHARTININGSIH	', 'Budpar. 430 / 0417 / AK / VIII / 2016', NULL),
(55, 6, 20, 'AMARIS		 	', ' Jl. Bundaran PU', 'CHRISTOPHER MALONDA', ' Dispar. 430 / 00012 / AK / I / 2018', NULL),
(56, 6, 59, 'DEWATA			', ' Jl. Tompelo', ' PAULUS LODWYK LERRICK', ' Dispar. 430 / 000267 / AK / X / 2018', NULL),
(57, 6, 56, 'MERRY CHRISMAS		', 'Jl. Bajawa', ' ANDREAS SINYO LANGODAY', ' Budpar. 430 / 0490 / AK / VIII / 2016', NULL),
(58, 6, 56, 'DEBITOS	 		 ', 'Jl. Frans Seda', ' PASKASITUS M. B. SOLA', 'Dispar.430 / 00092 / AK / VII / 2019', NULL),
(59, 6, 56, 'NAKA	 ', ' Jl. Frans Seda	', ' IR. CHARLES J. ANGKIRIWANG	', 'Budpar.430 / 0134 / AK / VIII / 2016', NULL),
(60, 6, 58, 'LAVENDER		 	', ' Jl. Kiu Leu', 'ELIZABETH ALBERTINA LADA', ' Dispar.430 / 00085 / AK / III / 2018', NULL),
(61, 6, 58, 'LA - HASIENDA			', ' Jl. Adisucipto', ' IZAAK MELIANUS TOMASOWA', ' Budpar.430 / 0197 / AK / VIII / 2016', NULL),
(62, 5, 38, 'CAHAYA BAPA	 		 ', 'Jl. Herewila', ' DANDO REGINA', 'Dispar. 430 / 00124 / AK / VII / 2019', NULL),
(63, 5, 37, 'PT. FLOBAMOR CITY	   ', 'Jl. Jendral Sudirman	', 'CHARLY USBOKO	', 'Dispar. 430 /00579 / AK / X / 2017', NULL),
(64, 5, 39, 'ASTITI			 ', ' Jl. Jendral Sudirman', ' MADE ADI KUSUMA', 'Budpar. 430 / 0735 / AK / IX / 2016', NULL),
(65, 5, 7, 'SILVIA	 		 ', 'Jl. Soeharto', ' DANIEL ADOLF NGGAI', 'Dispar. 430 / 00032 / AK / V 2019', NULL),
(66, 5, 7, 'DEWI INDAH	 	 	 ', 'Jl. Anggur', 'EDYANTO FULBERTUS', 'Budpar. 430 / 0782 / AK / X / 2016', NULL),
(67, 5, 7, 'VANYA’S HOTEL		 	 		', 'HERLOFINA B. SABA', 'Jl. Soeharto No. 55	', 'Dispar. 430 / 00326 / AK / II / 2017', NULL),
(68, 5, 16, 'GAJAH MADA	 	', 'Jl. Gajah Mada', ' NAEMNUKE LIADI	', ' Budpar. 430 / 0788 / AK / X / 2016', NULL),
(69, 5, 16, 'BELLA VITA	 	 ', 'Jl. Moh. Hatta	', ' CHRISTINA TJIE SIU TJU', 'Dispar. 430 / 00109 / AK / VII / 2019', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tabelkategori`
--

CREATE TABLE `tabelkategori` (
  `id` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `marker` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelkategori`
--

INSERT INTO `tabelkategori` (`id`, `nama`, `marker`) VALUES
(1, 'Pantai', 'footstepsMarker.png'),
(2, 'Goa Alam', 'finishMarker1.png'),
(3, 'Hutan Lindung', ''),
(4, 'Mata Air', ''),
(5, 'Tempat Ibadah', ''),
(6, 'Monumen', ''),
(7, 'Kolam Renang', ''),
(8, 'Bendungan', ''),
(9, 'Taman', ''),
(10, 'Situs Sejarah', ''),
(11, 'Wisata Kuliner', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabelkecamatan`
--

CREATE TABLE `tabelkecamatan` (
  `id` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `geojson` varchar(128) DEFAULT NULL,
  `warnaFill` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelkecamatan`
--

INSERT INTO `tabelkecamatan` (`id`, `nama`, `geojson`, `warnaFill`) VALUES
(1, 'Kelapa Lima', 'kelapa-lima.geojson', '#50a050'),
(2, 'Kota Lama', 'kota-lama.geojson', '#464722'),
(3, 'Alak', 'alak.geojson', '#d1e825'),
(4, 'Maulafa', 'maulafa.geojson', '#50aadd'),
(5, 'Kota Raja', 'kota-raja.geojson', '#e82a19'),
(6, 'Oebobo', 'oebobo.geojson', '#142870');

-- --------------------------------------------------------

--
-- Table structure for table `tabelkelurahan`
--

CREATE TABLE `tabelkelurahan` (
  `id` int(128) NOT NULL,
  `idkecamatan` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelkelurahan`
--

INSERT INTO `tabelkelurahan` (`id`, `idkecamatan`, `nama`) VALUES
(3, 1, 'Lasiana'),
(4, 2, 'Lahilai Bissi Kopan'),
(5, 3, 'Fatufeto'),
(6, 4, 'Maulafa'),
(7, 5, 'Naikoten I'),
(8, 6, 'Oebobo'),
(9, 3, 'Nunbaun Delha'),
(13, 6, 'Oebufu'),
(14, 1, 'Kelapa Lima'),
(15, 5, 'Bakunase II'),
(16, 5, 'Fontein'),
(17, 1, 'Oesapa Barat'),
(18, 3, 'Batuplat'),
(19, 1, 'Oesapa'),
(20, 6, 'Tuak Daun Merah'),
(21, 4, 'Penfui'),
(25, 3, 'Alak'),
(26, 3, 'Mantasi'),
(27, 3, 'Manulai II'),
(28, 3, 'Manutapen'),
(29, 3, 'Naioni'),
(30, 3, 'Namosain'),
(31, 3, 'Nunbaun Sabu'),
(32, 3, 'Nunhila'),
(33, 3, 'Penkase Oeleta'),
(34, 1, 'Oesapa Selatan'),
(35, 5, 'Airnona'),
(36, 5, 'Bakunase'),
(37, 5, 'Kuanino'),
(38, 5, 'Naikoten II'),
(39, 5, 'Nunleu'),
(40, 2, 'Air Mata'),
(41, 2, 'Bonipoi'),
(42, 2, 'Fatubesi'),
(43, 2, 'Merdeka'),
(44, 2, 'Nefonaek'),
(45, 2, 'Oeba'),
(46, 1, 'Pasir Panjang'),
(47, 2, 'Solor'),
(48, 2, 'Tode Kiser'),
(49, 4, 'Belo'),
(50, 4, 'Fatukoa'),
(51, 4, 'Kolhua'),
(52, 4, 'Naikolan'),
(53, 4, 'Naimata'),
(54, 4, 'Oepura'),
(55, 4, 'Sikumana'),
(56, 6, 'Fatululi'),
(57, 6, 'Kayu Putih'),
(58, 6, 'Liliba'),
(59, 6, 'Oetete');

-- --------------------------------------------------------

--
-- Table structure for table `tabelobwis`
--

CREATE TABLE `tabelobwis` (
  `id` int(128) NOT NULL,
  `idkategori` int(128) NOT NULL,
  `idkecamatan` int(11) NOT NULL,
  `idkelurahan` int(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `lat` varchar(128) NOT NULL,
  `lng` varchar(128) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(128) DEFAULT NULL,
  `link` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabelobwis`
--

INSERT INTO `tabelobwis` (`id`, `idkategori`, `idkecamatan`, `idkelurahan`, `nama`, `alamat`, `lat`, `lng`, `deskripsi`, `gambar`, `link`) VALUES
(65, 1, 1, 3, 'Pantai Lasiana', 'Lasiana, Kec. Kelapa Lima, Kota Kupang, Nusa Tenggara Timur ', '-10.1288336', '123.6652009', 'Didalam Pantai Lasiana banyak di jumpai Lopo-lopo bangunan khas timor yang beratap alang-alang atau ilalang. di Pantai Lasiana anda dapat melakukan berbagai kegiatan seperti memancing, berenang, berselancar, bermain sepak bola, karaoke dan berjemur. Pantai ini memiliki luas sekitar 3,5 hektar. Pada bagian barat pantai bisa terlihat daratan yang membentuk bukit kecil. Bukit kecil ini menjadi latar belakang yang menambah keindahan Pantai Lasiana. Di atas lahan pantai ini ditumbuhi banyak pohon kelapa dan juga tanaman lontar. Bila tiba di pantai itu, Anda dapat menyaksikan di sepanjang pinggir pantai banyak terdapat pohon tinggi yang makin mempercantik pemandangan Pantai Lasiana. Pasir Pantai Lasiana memiliki pasir  yang berwarna putih cocok untuk bermain volley di kawasan pantai ini. keindahan lainnya yang terdapat di Pantai Lasiana ini adalah anda dapat melihat atau menikmati Sunrise dan sunset.', 'download1.jpg', 'www.google.com'),
(66, 1, 1, 19, 'Pantai Nunsui', 'Oesapa, Kec. Kelapa Lima, Kota Kupang, Nusa Tenggara Timur', '-10.1367065', '123.657965', ' Berpayung langit cerah, dan pantai yang dangkal dengan hamparan pasir putih dan karang. Itulah Pantai Nunsui di Kupang, Nusa Tenggara Timur. Bermain air biasanya menjadi pilihan utama warga yang datang ke Pantai Nunsui. Meski ada juga yang sekadar berjalan di pantai di antara gumpalan rumput laut yang terempas. Kendati jadi tempat melepas kejenuhan, sebagian pengunjung menyayangkan ketiadaan campur tangan pemerintah setempat dan membiarkan swasta mengelolanya dengan fasilitas minim. Jarak dari Kupang menuju pantai hanya terpaut tiga kilometer. Dekatnya jarak dan akses masuk gratis membuat Pantai Nunsui yang berhias pohon lontar dan beringin ini, hampir setiap hari tak luput dari kunjungan wisatawan domestik untuk pelepas lelah bersama keluarga', 'Pantai_Nunsui_2.JPG', NULL),
(67, 6, 6, 8, 'Patung El Tari', 'Oebobo, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '-10.1715683', '123.6074691', 'Nama El Tari selalu identik dengan penghijauan. Tak heran gubernur NTT era 1966-1978 ini dikenang dengan mematrikan namanya pada sejumlah tempat diantaranya nama ruas jalan boulevard, bandara dan aula. Almarhum mempunyai moto “tanam, tanam sekali lagi tanam…”\r\n\r\n\r\nRuas jalan boulevard yang memakai namanya akhirnya diberi perlakuan yang benar-benar menggambarkan sosok cinta hijau beliau.\r\n\r\nDan prosesnya tidaklah gampang.\r\nPada tanggal 1 Oktober 1981, diberi tugas mendandani wajah kota Kupang agar tampak tidak terlalu sangar. Dan Almarhum Bapak Timothius Natoen memulainya dari area Jalan Raya El Tari yang dianggapnya sebagai ruang yang paling pertama kali dilihat oleh pengunjung kota Kupang. \r\nDalam mendandani ruas jalan ini beserta beberapa area lain di wilayah kota Kupang, beliau dibantu anggota keluarga dan sejumlah kenalan Om Tius menghijaukan kawasan sepanjang 1.500 meter. Asal tahu saja, ini bukanlah proyek khusus dengan anggaran khusus. Hanya dengan modal tekad untuk memberi yang terbaik bagi tanah airlah, Om Tius berhasil menuntaskan amanat hijau yang diembannya, sehingga mencapai wujudnya yang seperti sekarang ini. Jika kita merasa asing dengan nama ini, mungkin ini menjadi petunjuk bahwa beliau adalah sosok yang terlupakan.', 'patung_el_tari.jpg', NULL),
(68, 4, 4, 55, 'Mata Air Oelon', 'Sikumana, Kec. Maulafa, Kota Kupang, Nusa Tenggara Timur', '-10.2031587', '123.61502', 'Oelon, di kelurahan Sikumana Kecamatan Maulafa, Kota Kupang. Tempat air mengalir tiada henti. Sejauh mata memendang kita akan menemukan hamparan persawahan, pohon kelapa, anak-anak memancing. Di sisi barat mata kita bertubrukan dengan bagian belakang gereja Katholik Sancta Familia Sikumana. Mata air Oelon berada dalam lingkungan pagar setinggi sekitar 3 meter. Pagar berbentuk kotak ini punya sebuah pintu. Mata air tersebut ditata menjadi sebuah kolam. Sebatang pohon beringin tumbuh di pinggir kolam. Anak-anak suka sekali mandi di dalam kolam ini. Dari kolam air dialirkan keluar dari lingkungan pagar melalui sebuah lobang yang menyatu dengan selokan. Selokan ini bermuara di saluran air sawah dan kolam kecil. Mata air Oelon berada dalam lingkungan pagar setinggi sekitar 3 meter. Pagar berbentuk kotak ini punya sebuah pintu. Mata air tersebut ditata menjadi sebuah kolam. Sebatang pohon beringin tumbuh di pinggir kolam. Anak-anak suka sekali mandi di dalam kolam ini. Dari kolam air dialirkan keluar dari lingkungan pagar melalui sebuah lobang yang menyatu dengan selokan. Selokan ini bermuara di saluran air sawah dan kolam kecil.', 'mata_air_oelon.jpg', NULL),
(79, 5, 5, 16, 'Masjid Raya Nurhuda', 'Fontein, Kec. Kota Raja, Kota Kupang, Nusa Tenggara Timur', '-10.1645738', '123.5793602', 'Masjid Raya Nurhuda yang terletak di Jalan Soekarno, Kupang, Nusa Tenggara Timur ini dibangun pada 2012, dan menghabiskan dana sebesar Rp 8 miliar dari Anggaran Pendapatan Belanja Negara (APBN). Masjid itu baru diresmikan pada 2014 Kawasan masjid tersebut, juga dilengkapi dengan Islamic Center, yang merupakan pusat dakwah di Kota Kupang tersebut. Di kawasan masjid itu juga terdapat asrama yatim piatu yang menampung sekitar 50 anak yatim piatu dari sejumlah daerah di Nusa Tenggara Timur.', 'masjid_raya_nurussaadah.jpg', NULL),
(95, 7, 5, 35, 'Kolam Air Nona', 'Air Nona, Kec. Kota Raja, Kota Kupang, Nusa Tenggara Timur', '-10.1809846', '123.5853527', 'Teriknya sinar matahari di Kota Kupang banyak membuat pelancong gerah dan ingin mencari tempat yang sejuk dan nyaman.\r\nSalah satu pilihanya Anda bisa berkunjung ke Kolam Air Nona yang berada di Jalan Kancil, Kelurahan Air Nona, Kecamatan Kota Raja, Kota Kupang, NTT.\r\n\r\nKolam tradisional yang memiliki diameter 80 meter kali 40-an meter itu siap menyejukkan dan menyegarkan badan Anda tatkala kegerahan lantaran kepanasan setelah berkeliling di beberapa tempat wisata di Kota Kupang.\r\n\r\nTak hanya bisa untuk berenang, Pemerintah Kota Kupang membangun fasilitas beberapa tempat duduk, dilengkapi atap yang diletakkan di titik sekitar kolam tersebut.\r\n\r\nJadi, bila Anda malas berenang, tinggal mencari tempat duduk yang nyaman sambil menyaksikan riuhnya anak-anak setempat berenang di kolam tersebut.\r\n\r\nAnda pun dapat menyaksikan relief yang mengisahkan asal-usul Kolam Air Nona bagian utara kolam tersebut.\r\n\r\nPemerintah setempat juga membuat beberapa arena permainan anak yang siap memanjakan anak-anak Anda yang ikut berkunjug ke Kolam Air Nona.\r\n', 'kolam_air_nona.jpg', NULL),
(96, 9, 2, 42, 'Taman Kalpataru', 'Fatubesi, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Timur', '-10.1577171', '123.5894127', 'Taman Kalpataru berlokasi di Kelurahan Fatubesi, Kecamatan Kota Lama, Kota Kupang. Kita punya Taman sekaligus ada monumen didalamnya sejak hampir 20 tahun lalu. Kalpataru adalah penghargaan yang diberikan kepada perorangan atau kelompok atas jasanya dalam melestarikan lingkungan hidup di Indonesia. Kalpataru sendiri adalah bahasa Sanskerta yang berarti pohon kehidupan (Kalpavriksha). Kalpataru memiliki 4 kategori penghargaan, yaitu: Perintis Lingkungan, Pengabdi Lingkungan, Penyelamat Lingkungan dan Pembina Lingkungan. ', 'Taman_Kalpataru.JPG', NULL),
(97, 8, 5, 15, 'Bendungan Biknoi', 'Bakunase II, Kec. Kota Raja, Kota Kupang, Nusa Tenggara Timur', '-10.1915562', '123.5963567', 'Kali Biknoit memisahkan Labat dengan Naikolan. Tahun 2011 sebuah bendungan selesai dibangun kemudian diresmikan oleh walikota waktu itu Daniel Adoe. Kawasan sekitar kali ditata dengan baik. Ada jalan setapak disepanjang tepi kali. Ada sarana MCKnya juga.', 'bendungan_biknoi1.jpg', NULL),
(98, 8, 5, 16, 'Bendungan Kali Dendeng', 'Fontein, Kec. Kota Raja, Kota Kupang, Nusa Tenggara Timur', '-10.1701296', '123.5803473', 'Ada 3 tingkat bendungan. Airnya jernih dan segar. Sejuk sepanjang hari karena banyak sekali pepohonan. Suara air yg tenang dan tidak terlalu berisik, udara yang segar, tempatnya sunyi. Cocok untuk tempat meditasi dan menenangkan diri. Kalau weekend banyak warga yang datang mencuci pakaian di bendungan paling bawah. Bukan hanya warga sekitar, banyak juga yang datang dari jauh. Tentunya saja ini karena airnya terkenal bersih dan tidak ada  sampah di tempat ini.', 'Bendungan_Kali_Dendeng_11.png', NULL),
(99, 3, 1, 17, 'Hutan Mangrove', 'Oesapa Barat, Kec. Kelapa Lima, Kota Kupang, Nusa Tenggara Timur', '-10.1456487', '123.6352746', 'Tidak hanya berfungsi sebagai penahan abrasi alami air laut dan mengurangi dampak gelombang tsunami di pesisir pantai, hutan bakau atau mangrove juga dapat dimanfaatkan sebagai Obyek Daya Tarik Wisata Alam (ODTWA) yang juga bernilai edukasi. Salah satunya hutan mangrove yang ada di Pantai Oesapa, Taman Wisata Alam (TWA) Teluk Kupang, Kota Kupang, Propvinsi Nusa Tenggara Timur (NTT). Saat berwisata alam menjelajah hutan mangrove, kamu dapat ber swafoto, bersantai di gazebo, berjalan di titian jembatan kayu yang membelah hutan mangrove dan termasuk mendapatkan informasi dan edukasi fungsi hutan mangrove. Terlihat banyak spot intragamable dan menarik sepanjang jembatan mangrove. Pohon mangrove jenis Rhizopora berukuran besar-besar nampak terlihat cantik dengan akar-akar tunjangnya. Terlihat sebagian  ranting-ranting pohon mangrove dengan daunnya  menutupi atas jembatan. Jadi, saat kami melewatinya, seperti berjalan di bawah lorong hutan mangrove.\r\nHutan mangrove Pantai Oesapa, juga merupakan salah satu spot terbaik untuk melihat magis dan romantisnya waktu senja atau saat matahari terbenam kembali ke peraduannya.', 'Hutan_Mangrove.jpg', NULL),
(101, 6, 5, 38, 'Patung HKSN', 'Naikoten II, Kec. Kota Raja, Kota Kupang, Nusa Tenggara Timur', '-10.1786912', '123.5976709', 'Monumen Kesetiakawanan Sosial terletak di persimpangan tiga Jalan El Tari dan Jalan Soeharto kelurahan Naikoten. Pertigaan ini menjadi perlintasan dari beberapa trayek angkot. Monumen berdiri tepat di boulevard Jalan Raya El Tari. Di bagian puncak monumen terdapat patung. Patung ini menggambarkan dua orang. Yang seorang pria, berpakaian kaos oblong dan celana pendek. Bajunya sobek di bagian dada, pastilah mewakili kalangan menengah ke bawah, atau barangkali ada makna filosofis lain yang dapat dikonotasikan dengan kemiskinan. Pria yang berbaju sobek sedang terjatuh dan kakinya menggantung di sisi monumen. Nampaknya si pria benar-benar sedang kepayahan. Tapi gerakan jatuhnya yang meyakinkan beku disitu karena di belakangnya ada seorang lain sedang menahan tubuhnya agar tidak benar-benar merosot dari monumen. Sang penolong mengenakan setelan jas lengkap dengan dasinya yang melambai tertiup angin. Dia juga mengenakan celana panjang.\r\n\r\nNampak jelas makna dari pemandangan ini. Bahwa kesenjangan dalam lingkungan janganlah makin diperparah dengan ketidakpedulian. Monumen ini dibangun sekaligus dalam momen pelaksanaan rehabilitasi sosial derah kumuh Kabupaten Kupang. Diresmikan oleh Menteri Muda Perdagangan Republik Indonesia yang dijabat Dr.. J. Soedradjat Djiwandono pada tanggal 11 Maret 1992.', 'patung_hksn.jpg', NULL),
(103, 9, 6, 13, 'Taman Nostalgia', 'Oebufu, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '-10.1593297', '123.6153717', 'Hal pas untuk dilakukan apabila kalian sedang berada di Nusa Tenggara Timur tepatnya Kupang.  Sebuah taman di Kota Kupang, Nusa Tenggara diberi nama yang cukup unik yaitu Taman Nostalgia. Taman ini terletak di lokasi yang sangat strategis dan bisa dimanfaatkan warga Kota Kupang atau warga dari luar Kota Kupang untuk menikmati sore yang indah. Taman yang diresmikan oleh Presiden Republik Indonesia Susilo Bambang Yudhoyono ini memiliki luas kurang lebih setengah hektare atau 5.000 meter. Taman ini sering digunakan sebagai area berkumpul dengan teman dan keluarga di sore hari. Bahkan di bulan puasa taman ini tetap ramai karena digunakan sebagai tempat ngabuburit.\r\n\r\nBanyak hal yang bisa dilakukan di taman ini karena banyak fasilitas yang disediakan kalian bisa bermain basket bersama teman atau sekedar melakukan jogging ringan atau bahkan menemani anak – anak bermain di area yang sudah disiapkan. Taman Nostalgia yang bisa Anda jelajahi jika kebetulan berada di pusat kota Kupang. Warga sekitar sendiri sangat sering menghabiskan waktu sore hari mereka di taman ini. Dimana Taman Nostalgia tersebut menyediakan jogging track, monumen Gong Perdamaian Nusantara, dan masih banyak lagi fasilitas lainnya.\r\n\r\n', 'tamanNostalgia.jpg', NULL),
(104, 9, 5, 15, 'Taman Pondok Bonak', 'Bakunase II, Kec. Kota Raja, Kota Kupang, Nusa Tenggara Timur', '-10.1933301', '123.5927585', 'Pada lahan sekuas satu hektar lebih yang dikelilingi pepohonan rimbun itu ada sejumlah \'wahana\' mengasyikkan yang bisa menjadi pilihan pengunjung untuk dinikmati. Saat melewati pintu masuk, di sebelah kiri ada deretan pagar besi yang di dalamnya terdapat sejumlah kandang berisi ternak.\r\n\r\nKandang pertama dihuni oleh 10 ternak rusa. Kadang lain berisi 20-an ekor ternak sapi. Ada juga tujuh ternak kuda besar dan tangguh berwarna coklat mengkilat.\r\nDi depan kandang kuda itu terdapat tiga lopo untuk tempat berteduh sambil menikmati suasana sekitar. Tepat di depan lopo terbentang kolam ikan berukuran besar sekitar 20 x 30 meter dengan kedalaman sekitar 2 meter lebih. Kolam itu tidak terlalu jernih, namun dari permukaan airnya kita bisa melihat sejumlah \'anak ikan\' yang berseliweran.\r\n\r\nSuasana makin sejuk dan nyaman saat melihat pepohonan besar dan rimbun di sekeliling kolam dan lokasi PBB Kupang. Belum lagi bunyi percikan air bersih yang mengalir masuk dan keluar ke dan dari kolam itu. Plus kicauan burung nuri, kutilang, burung koak atau kokak dan burung lainnya, juga terdengar merdu. Burung kutilang dan nuri itu khusus didatangkan dari Bali dan kini sudah \'beranak pinak\' di lokasi itu.\r\n\r\nTak hanya itu, di sana kita juga bisa menyaksikan puluhan bebek berkejaran dan \'menari\' di permukaan kolam. Dan, jika beruntung, kita bisa menyaksikan sejumlah ayam hutan yang berkeliaran di pinggiran kolam.\r\n\r\nIkan-ikan yang ada di kolam itu bisa dipancing oleh pengunjung, bahkan hasil pancingan ikan dimaksud bisa dibakar oleh pengelola PBB untuk dimakan. Pondok Baca Bonak ini buka setiap hari Jumat, Sabtu, Minggu. Hanya dengan Rp 1.000 Anda sudah bisa masuk ke PBB.\r\n', 'taman_pondok_bonak.jpg', NULL),
(127, 2, 1, 46, 'Goa Monyet Kelapa Lima', 'Pasir Panjang, Kec. Klp Lima, Kota Kupang, Nusa Tenggara Timur', '-10.1506039', '123.611943', 'Destinasi berikutnya sangat cocok dikunjungi bagi Anda yang menginginkan suasana teduh saat matahari sedang terik teriknya bersinar di kota Kupang. Karena suasana taman ini memang begitu rindang dan sejuk.  objek wisata Gua Monyet sangat dekat dengan pemukiman warga dan jalan raya dengan arus lalulintas yang padat. Sehingga untuk tidak menganggu pengguna jalan dan warga sekitar, objek wisata Gua Monyet dialih fungsikan menjadi wisata kuliner dan kesenian. ', 'gm11.png', NULL),
(128, 1, 1, 14, 'Pantai Paradiso', 'Kelapa Lima, Kec. Kelapa Lima, Kota Kupang, Nusa Tenggara Timur', '-10.1409534', '123.6244119', 'Pantai Paradiso merupakan pantai yang berada di Kota Kupang. Pantai ini merupakan objek wisata yang bisa menjadi pilihan berlibur Anda bersama dengan teman atau keluarga. Pantai Paradiso memiliki air jernih dengan pemandangan yang cantik dan hanya memiliki sepenggal pantai berpasir putih di bawah rimbunan pohon ketapang. Selebihnya, adalah pantai karang yang ditumbuhi pohon bakau (mangrove) sebagai tanaman pelindung pantai dari kemungkinan terjadinya abrasi. Suasana di sekitar kawasan pantai karang itu begitu menyegarkan. Selain ada pohon bakau dan ketapang, juga tumbuh beraneka pohon yang menambah keteduhan di wilayah pantai itu. Pantai ini memiliki kubus kubusan beton penahan abrasi yang sekaligus turut menambah nilai estetika, di pantai ini juga ada sebuah gugusan pohon di dalam laut, ada juga yg hidup tunggal sendiri di dalam laut seakan menantang kerasnya ombak di lautan. selain itu ada juga hutan bakau yang hijau seakan terlihat kontras dengan birunya lautan dan angkasa semesta', 'pantai_paradiso.jpg', NULL),
(129, 1, 2, 4, 'Pantai LLBK', 'Lahilai Bissi Kopan, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Timur', '-10.1611363', '123.5766964', 'Lokasi\" Pantai\' Tedis LLBK Kota Lama menampilkan desain dengan gaya klasik modern yang mana suasana seperti layaknya di Malioboro, Yogyakarta Jika anda ke tempat wisata Tedis, anda akan disuguhi pemandangan Sunset dan kuliner-kuliner khas seperti Jagung\nSejauh mata memandang, objek wisata yang terletak di Kelurahan LLBK, Kecamatan Kota Lama, Kota Kupang ini memiliki daya tarik tersendiri bagi siapa saja yang berkunjung kesana', 'pantai-LLBK.jpg', NULL),
(130, 1, 1, 14, 'Pantai Kelapa Lima', 'Kelapa Lima, Kec. Kelapa Lima, Kota Kupang, Nusa Tenggara Timur', '-10.1453419', '123.6142452', 'Pantai kelapa lima merupakan pantai yang berada di Kota Kupang. Pantai ini merupakan objek wisata yang bisa menjadi pilihan berlibur Anda bersama dengan teman atau keluarga.\r\nPantai kelapa lima memiliki air jernih dengan pemandangan yang cantik. Pantai Kelapa Lima memiliki matahari terbenam yang cantik. Meski demikian, areal pesisirnya tak begitu luas karena sebagian tertutup paving block. Namun bentangnya cukup panjang, sehingga bisa dijelajahi dengan nyaman.\r\nAnda yang ingin mencari inspirasi bisa merenung di sini sambil ditemani rona jingga dan semilir angin sepoi-sepoi.', 'pantai_kelapa_lima_.jpeg', NULL),
(131, 1, 2, 48, 'Pantai Ketapang Satu', 'Tode Kiser, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Timur', '-10.1567226	', '123.5826929', 'Pantai ini mudah di akses karena letaknya tepat berada di pinggir jalan raya. Selain itu, ada yang menarik dari pantai Ketapang Satu, dimana pesisirnya tidak dipenuhi oleh hamparan pasir berwarna kecokelatan saja, melainkan juga kerikil-kerikil kecil serta lumut hijau. Sayangnya, garis pantai yang tak begitu panjang membuat pantai ini kurang diminati oleh para wisatawan. Namun, bagi Anda yang menyukai suasana tenang, pantai ini cocok buat dikunjungi. Bentangnya terbilang masih alami karena belum banyak mendapat sentuhan modern. Di sini, perairannya juga cukup dangkal sehingga aman buat disinggahi oleh anak-anak.', 'pantai_ketapang_satu1.jpg', NULL),
(132, 1, 1, 46, 'Pantai Pasir Panjang', 'Pasir Panjang, Kec. Kelapa Lima, Kota Kupang, Nusa Tenggara Timur', '-10.1506552', '123.6025288', 'Objek wisata Kupang yang satu ini menawarkan hamparan pasir yang lembut dan memanjang mencapai 1 km. Kecantikan pasir putih disertai dengan warna air laut yang biru menjadi kawasan wisata pantai ini banyak dikunjungi para wisatawan baik wisatawan lokal maupun mancanegara. Jika langit sedang cerah maka pengunjung akan menyaksikan keunikan luar biasa dari pantai ini yakni pantulan cahaya gemerlap pada birunya laut yang seakan membawa kita dalam suasana berlibur di pulau tropis. Di Pantai Pasir Panjang ini para pengunjung juga dapat melakukan berbagai aktivitas menarik lainnya seperti berolahraga voli pantai dan juga sepak bola pantai. Pantai ini juga sangat cocok digunakan untuk aktivitas selancar air dan memancing. Hal ini karena Pantai Pasir Panjang memiliki ombak yang cukup deras sehingga banyak ikan yang memilih kawasan pantai ini sebagai rumah mereka. Daya tarik menarik lainnya yang dimiliki oleh Pantai Pasir Panjang ini adalah pemandangan matahari terbenam yang ada di balik pulau di kawasan pantai. Anda dapat menyaksikan langsung detik-detik terbenamnya matahari di tepi atau pinggiran pantai. Selain itu anda juga memilih spot dari pondok-pondok wisata yang tersedia di kawasan pantai ini.\r\n\r\nBukan hanya itu saja, para pengunjung juga akan disuguhi dengan pemandangan menarik berupa aktivitas keseharian para masyarakat kampung setempat yang mana lokasinya tidak terlalu jauh dari kawasan pantai wisata ini. Anda dapat melihat bagaimana masyarakat nelayan yang ramah hidup rukun antara satu dengan yang lainnya. Mereka saling bekerjasama untuk mencari ikan karena profesi mereka yang rata-rata adalah nelayan.', 'Pantai_Pasir_Panjang1.jpg', NULL),
(134, 1, 1, 19, 'Pantai Warna Oesapa', 'Oesapa, Kec. Klp. Lima, Kota Kupang, Nusa Tenggara Timur', '-10.1423522', '123.653844', 'Bagi anda yang hanya mendengar nama pantai warna dan belum melihat kondisi sebenarnya, maka orang akan berpikir pasir pantai tersebut berwarna-warni. Namun, bila ditelusuri lebih lanjut maka kita akan melihat banyaknya ornamen berwarna-warni di sepanjang hamparan bibir pantai yang berlokasi di kelurahan Oesapa, Kecamatan Kelapa Lima, Kota Kupang. Suasana ini yang membuat pantai ini disebut Pantai Warna-warni.\r\n\r\nBila anda datang ke sini pada malam hari anda akan mendapat suguhan aneka macam warna dari hiasan dan aksesoris yang ditampilkan setiap kafe yang berjejer dengan aneka menu makanan yang bervariasi dan bisa dijadikan tempat untuk berkaraoke.\r\n\r\nSelain itu, saat mentari kembali ke peraduanya dan berganti malam, suasana menjadi gemerlap dan terkesan romantis dengan cahaya lampu yang exotic.\r\n\r\nBagi yang suka mengabadikan momen, di tempat tersebut tersedia tempat duduk, payung dan umbul-umbul dengan warna yang beraneka ragam sehingga membuat pantai tersebut mempunyai ciri khas tersendiri dari pantai yang lain yang ada di Kota Kupang\r\nAyo datang dan nikmati aneka macam warna dari ornamen, lampu yang gemerlap, bisa berkaraoke, sunset yang indah dan kuliner yang lezat, di pantai warna Oesapa.', 'Cuplikan_layar_2022-08-26_112756.png', NULL),
(135, 1, 3, 5, 'Pantai Nunhila', 'Fatufeto, Kec. Alak, Kota Kupang, Nusa Tenggara Timur', '-10.1695427', '123.5655069', 'Jangan dibayangin ini daerah yang memiliki garis pantai yang panjang ya. Pantai Nunhila itu kebanyakan dipenuhi karang-karang yang tinggi yang langsung berpapasan dengan laut. Nah di banyak kondisi itu, ada sebuah cekungan yang disamping kiri kanannya dipagari karang-karang terjal. Secara umum pantai ini khas pantai daerah kawasan Timur Indonesia yang umumnya berpasir putih (gak putih-putih amat sih), dan warna airnya yang kehijauan menunjukkan kalau airnya masih bening. Karena pantainya miring ke arah barat laut cenderung utara, jadi kalau mau lihat sunset harus dari ujung cekungan. Atau kalau lebih gampang naik saja ke arah karang-karang yang menjorok ke laut.', 'pantai_nunhila.jpg', NULL),
(136, 1, 3, 9, 'Pantai Nunbaun Delha', 'Nunbaun Delha, Kec. Alak, Kota Kupang, Nusa Tenggara Timur', '-10.1692444', '123.5657966', 'Tak lengkap rasanya jika kamu belum pernah menikmati sederet keindahan dan keelokan pantai di Kota Kupang. Wisata pantai di Kota Kupang terkenal dengan pantainya yang masih asri. Hal inilah yang membuat pantai di Kota Kupang memiliki kecantikan tersendiri dibanding pantai di daerah lain. selain memiliki keindahan dan pesona yang memikat mata serta juga memiliki panorama yang khas yang tentu saja berbeda dengan pantai lainnya di kota Kupang dan daerah lain. Bagi yang berkunjung ke Kota Kupang, jangan lupa untuk singgah dan menikmati pesona dan keindahan Pantai Nunbaun Delha ini.', 'pantai_NBD.jpg', NULL),
(137, 1, 3, 30, 'Pantai Namosain', 'Namosain, Kec. Alak, Kota Kupang, Nusa Tenggara Timur', '-10.1726416', '123.5522796', 'Pantai Namosain adalah spot terbaik yang bisa dikunjungi saat liburan. Air Pantai terlihat biru dengan ombak putih yang membuat suasana semakin alami. Bahkan ombak diketahui tidak terlalu besar meskipun mengalami pasang surut. Pantai Namosain tepat berada di Jalan Pahlawan, Kupang, Nusa Tenggara Timur. Keindahan Pantai selalu menjadi incaran traveller untuk pergi kesana ketika hari libur. Wisata yang menyediakan aspal mulus itu tidak sulit dilewati mobil atau sepeda motor. Apalagi lokasi Pantai hits ini dekat dengan pusat kota serta tidak jauh dari jalan besar yang terlihat jelas.\r\nSelama berkeliling di sekitar kawasan Anda boleh menyiapkan kamera. Setiap tempat memang menyuguhkan kecantikan seperti pohon kelapa, pasir, serta biota yang sering muncul. Para tamu yang ingin berfoto bisa mengambil gambar sesuai keinginan dari angle manapun.\r\n\r\n\r\nBeranjak ke sudut lain Anda akan melihat tempat duduk yang nyaman. Apalagi udara terasa sejuk karena banyak pohon di area kursi Pantai Namosain, Kupang. Sehingga menghabiskan waktu disana menjadi pilihan yang tepat di sela-sela waktu luang. Daya Tarik Wisata Pantai Namosain yaitu Pantai Namosain mempunyai sejumlah biota laut dengan jenis berbeda. Ketika jam tertentu ada ikan kecil yang bermunculan di tepian. Tak hanya itu, rumput laut dan kerang pun melengkapi keindahan biota yang cukup mudah dijumpai. Selain itu, jernihnya air laut dan pasir putih yang ada di sepanjang kawasan Pantai Namosain terlihat bersih dan memukau juga menambah kecantikan pantai ini.', 'Pantai-Namosain.jpg', NULL),
(138, 1, 3, 32, 'Pantai Batu Kepala', 'Nunhila, Kec. Alak, Kota Kupang, Nusa Tenggara Timur', '-10.1652661', '123.5683457', 'Indonesia memiliki banyak sekali pantai-pantai indah. Salah satunya yang belum terjamah adalah Pantai Batu Kepala di wilayah Nunhila, Kota Kupang, Nusa Tenggara Timur (NTT). Dipantai ini terdapat tebing karang, dengan tumpukan batu karang dengan ukuran yang besar. Batu karang berukuran besar inilah yang dinamakan \'batu kepala\'. Dan diatas batu karang ini dibangun sejumlah lopo atau gazebo yang bisa dimanfaatkan wisatawan.\r\nUntuk bisa menikmati batu kepala ini, tersedia 3 pintu yang bisa dipilih oleh wisatawan. \r\n\r\nPintu pertama berada di sebelah kanan tepatnya diujung lapangan futsal. Di lokasi ini setidaknya ada 3 lopo (gazebo) yang bisa dijadikan tempat berteduh wisatawan.\r\n\r\nSetiap lopo memiliki sekitar 4 bangku yang terbuat dari semen. Dua buah lopo berada diatas dan sebuah lopo berada sedikit di bawah sehingga wisatawan mesti menuruni sejumlah anak tangga.\r\n\r\nDari sini, wisatawan bisa menikmati keindahan pantai dari atas ketingian.\r\n\r\nSementara itu pintu pertama dan pintu kedua yang berada di bagian kiri lapangan futsal itu, muaranya saling terhubung.\r\n\r\nDi area ini terdapat sekitar 5 lopo yang jarak satu sama lainnya sekitar 5-10 meter.\r\n\r\nLopo-lopo itu dibangun diatas batu karang dengan ketinggian bervariasi. Tapi wisatawan tak perlu kuatir karena di setiap tebing sudah dipasang pagar kayu untuk pengaman.\r\n\r\nDi tebing karang ini juga terdapat sejumlah pohon yang membuat teduh suasana disana. \r\n\r\nAir laut dipantai itu sangat tenang, berwarna biru, hijau. Bagi yang suka berenang, bisa memanfaatkan ketenangan pantai disini.\r\n', 'Pantai_Batu_Kepala.JPG', NULL),
(139, 1, 3, 25, 'Pantai Kelapa Satu', 'Alak, Kec. Alak, Kota Kupang, Nusa Tenggara, Timur', '-10.1819722', '123.5297425', 'Pantai Kelapa Satu, Kelurahan Alak, Kecamatan Alak, Kota Kupang adalah pilihan yang tidak salah. Yaah! Tidak salah untuk menghabiskan hari libur kali ini. Pesona dari Tanjung Lontar memang belum dikenal oleh khalayak banyak, namun bukan berarti tidak mampu memikat hati setiap pengunjung.\r\n\r\nRiuh suara sekawanan monyet yang tidak mau kalah dari hiruk pikuk arus lalu lintas Jalan M. Praja akan menyambut setiap pengunjung. Dari dalam hutan bidara dan kusambi, kicuan beraneka jenis burung memanjangkan telinga. Demikian hempasan gelombang laut dan buih di atas karang pantai.\r\n\r\nKeindahan laut biru Tanjung Lontar baru setiap orang yang hendak melepas lelah pada hari libur dari segala kepenatan. Hutan kusambi dan bidara yang tumbuh rimbun di sekitar areal pantai sepanjang kurang lebih 2.000 meter ini akan menyajikan udara nan sejuk di siang hari. Begitupun cahaya kuning keemasan dari matahari ketika hendak kembali ke perut bumi terlihat indah saat menyentuh dahan-dahan pohon di hutan', 'Pantai_Kelapa_Satu.jpg', NULL),
(140, 2, 4, 21, 'Goa Jepang', 'Penfui, Kec. Maulafa, Kota Kupang, Nusa Tenggara Timur', '-10.1852861', '123.6613844', 'Gua bersejarah ini memiliki posisi yang cukup strategis, dikatakan demikian, karena tempat ini berada di posisi yang tidak jauh dengan keramaian Kota Kupang. Rute menuju ke lokasi, anda akan di hadapkan pada medan yang cukup menantang dan seru, sehingga medan ini sangat cocok bagi anda yang tertarik dengan dunia petualangan.\r\n\r\nAkses menuju lokasi anda akan menemukan sedikit jalan yang berbatuan serta tanjakan yang menantang. Akses menuju ke sana juga memberikan kesan menyatu dengan alam, karena anda akan menemukan semak belukar dan juga rerumputan yang hijau. Disarankan bagi anda yang berkunjung ke tempat wisata ini untuk mengendarai roda dua baik motor maupun sepada gunung.', 'gua_jepang1.png', NULL),
(141, 3, 4, 50, 'Hutan Lindung Fatukoa', 'Fatukoa, Kec. Maulafa, Kota Kupang, Nusa Tenggara Timur', '-10.2391608', '123.6109001', 'KHDTK Litbang Kehutanan Oelsonbai mempunyai potensi flora dan fauna endemik NTT yang sebagian merupakan hasil dari kegiatan penelitian dan yang sebagian lainnya merupakan jenis yang memang tumbuh dan hidup secara alami. Hidayat (2016) menyatakan bahwa KHDTK Litbang Kehutanan Oelsonbai menjadi kantong biodiversitas di Kota Kupang sehingga keberadaannya perlu dijaga dan dilestarikan. Ini dapat dijustifikasi dari hasil analisis tutupan lahan hutan menggunakan citra Sentinel-2 (tanggal akuisisi citra 23 Juli tahun 2019) yang menunjukkan bahwa tutupan lahan hutan yang menjadi kantong biodiversitas tidak banyak tersedia di Kota Kupang dan KHDTK Litbang Kehutanan Oelsonbai menjadi salah satu diantaranya.\r\n\r\nFauna yang hidup liar di KHDTK Litbang Kehutanan Oelsonbai antara lain berbagai jenis burung yang jumlahnya mencapai 41 spesies dari 23 famili (Tabel 2.2) yang terdiri dari burung penetap (resident) dan migran. Penulis yang sama juga menyatakan bahwa jumlah tersebut masih sangat mungkin bertambah mengingat burung merupakan satwa yang memiliki tingkat mobilitas yang tinggi (Hidayat, 2016). Selain itu, KHDTK Litbang Kehutanan Oelsonbai juga merupakan habitat alami bagi biawak timor (Varanus timorensis).  Sedangkan fauna yang merupakan hasil dari penelitian yaitu rusa timor, burung bayan, dan kura-kura leher ular rote.', 'Hutan_Lindung_fatukoa.JPG', NULL),
(143, 4, 4, 54, 'Mata Air Oepura', 'Oepura, Kec. Maulafa, Kota Kupang, Nusa Tenggara Timur', '-10.1927644', '123.6060246', 'Panasnya cuaca  dikala musim panas membuat masyarakat  di NTT, khususnya wilayah Kota Kupang dan sekitarnya selalu gencar untuk mencari sumber air demi memuaskan kesegaran jiwa. Selain aliran sungai dan bendungan yang belakangan viral diserbu pengujung, ada juga salah satu sumber air irigasi yang lagi buming. Sumber air ini merupakan sumur bor yang dikelilingi oleh bak  berukuran sekitar 3 x 3 meter. Airnya akan selalu ada sepanjang tahun, namun saat musim hujan debit air lebih banyak sehingga air meluap keluar. Oleh masyarakat sekitar berperan untuk membantu irigasi persawahan dan juga untuk sayur-sayuran. Selain menikmati kesegaran air, lokasi sumur yang dikelilingi oleh area persawahan menghadirkan keindahan panorama alam ditengah kota. Di sini kita juga dapat menyaksikan indahnya sang surya muncul diufuk timur.\r\n\r\nLokasinya berada di Kelurahan Oepura, Kota Kupang, Nusa Tenggara Timur. Jika dari arah Naikoten, ambil belokan ke kiri setelah Supermarket Glory Oepura menuju arah belakang GOR Oepoi. Setelah tempat pengisian air tengki, ikuti jalan setapak melewati aliran air dan perswahan menuju arah kanan. Terdapat bangunan rumah berukuran kecil yang digunakan untuk menyimpan dynamo dan juga bak air. Saat melewati area persawahan, pastikan kita tidak merusak tanaman yang ada.', 'mata_air_oepura.png', NULL),
(144, 5, 2, 41, 'Gereja Katedral Kristus Raja', 'Bonipoi, Kec. Kota. Lama, Kota Kupang, Nusa Tenggara Timur', '-10.1623849', '123.5821364', 'SENGATAN terik mentari tak menyurutkan langkah para misionaris menyebarkan kabar gembira di Pulau Timor. Sekitar tahun 1556-1560, para Misionaris Dominikan mencatat ada sekitar 5000 penduduk asli pulau itu yang menjadi pemeluk Katolik. Terdengar juga nama seorang imam Pastor Antonio Tancipo, yang pada pertengahan abad XVI itu sudah berkarya di sana. Pengembaraan pewartaan sukacita Kristus di tanah Timor pun mendulang harapan.\r\n\r\nPerkembangan umat Katolik di Kupang dan sekitarnya semakin pesat. Oleh karena itu, dibutuhkan keseriusan untuk mendirikan sebuah rumah pastoran di Kupang. Mimpi tersebut mulai dikonstruksikan pada tahun 1936. Akhirnya melalui usaha dan doa diperoleh sebidang tanah yang dipakai untuk mendirikan rumah pastoran sederhana.\r\n\r\nKini tempat pastoran itu berdiri Katedral Kristus Raja Kupang. Katedral Kupang yang berlindung di bawah nama Kristus Raja ini berdiri pada tanggal 15 Agustus 1967. Kini gedung tinggi itu berada di Jl Ir Soekarno No 1, Bonipoi, Kupang, Nusa Tenggara Timur (NTT).', 'gereja_katedral_kristus_raja.jpg', NULL),
(145, 5, 4, 6, 'Pura Hindu', 'Maulafa, Kec. Maulafa, Kota Kupang, Nusa Tenggara Timur', '-10.2014766', '123.6265151', 'Pada awal dibentuknya, jumlah anggota tidak terlalu banyak kurang lebih 10 – 15 KK seiring dengan adanya beberapa Umat Sedharma yang ijrah ke Kota/Kab. Kupang karena melaksanakan tugas Negara (Dharma Negara) dan dengan motivasi sendiri untuk mengadu nasib di Kota/Kab. Kupang. Jalinan kasih Umat Sedharma yang ada pada saat itu ibaratnya seperti tempat kapur sirih pinang yang selalu menyatu satu sama lainnya (semuanya adalah saudara) dengan tidak memandang darimana asalnya di Bali; yang penting di Kupang adalah Saudara. Banjar Dharma Agung Kupang mulai dibentuk, karena saking lamanya serta kurang adanya yang memperhatikan perlu atau tidaknya suatu sejarah untuk berdirinya sebuah organisasi yang kita agungkan dan diberi nama BANJAR DHARMA AGUNG KUPANG. Banjar Dharma Agung Kupang pada awalnya benama Banjar Suka Duka Kupang yang mulai dibentuk di Kota/Kab. Kupang sekitar tahun 1950.', 'Pura_Hindu.png', NULL),
(146, 5, 2, 4, 'Klenteng Kupang', 'Lahilai Bissi Kopan, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Timur', '-10.1625731', '123.5765836', 'Klenteng Lay di Kelurahan LLBK, Kecamatan Kota Lama, Kota Kupang berdiri sejak tahun 1865. Bangunan kuno ini merupakan bukti sejarah bahwa budaya Tiongkok adalah bagian dari peradaban bangsa Indonesia. Salah satu keluarga pengelola klenteng, Ferry Ngahu mengatakan sampai hari ini klenteng tersebut sudah berusia 156 tahun. Bangunan suci itu dibangun oleh Keluarga Lay yakni 2 orang arsitek saat itu Lay Foetl in dan Lay Lanfi.', 'Klenteng_Kupang.jpg', NULL),
(147, 5, 6, 8, 'Gua Lourdez', 'Oebobo, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '-10.1656905', '123.5938865', 'Di lingkungan Keuskupan Agung Kupang, ada sebuah Goa Maria, tempat sembahyang umat Katholik yang bernama Goa Lourdes. Diambil dari nama kota kecil di barat daya Prancis, dimana seorang gadis gembala, Bernadete Subirous, 14 tahun, mendapat serangkaian kunjungan dari Santa Maria, ibu Yesus Kristus, yang dimulai pada 11 Februari 1858, di sebuah goa. Di Lourdes, Prancis juga terdapat juga mata air ajaib yang digali oleh Bernadet.\r\n\r\nDalam rangka melakukan devosi kepada Bunda Maria yang menampakkan diri tersebut, maka di Kupang dibuat juga sebuah goa do’a sebagai tempat umat Katholik berdoa. Goa ini dibuat dibuat di sebuah lahan berkontur menurun di kelurahan Oebobo. Nama jalan di sekitar sini akhirnya menjadi jalan Lourdes.', 'Gua_Lourdes.jpg', NULL),
(148, 6, 2, 43, 'Patung Sonbai', 'Merdeka, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Timur', '-10.1631569', '123.5822085', 'Relief-relief pada dinding Monumen Sonbai mengisahkan penjajahan kolonialisme dan perjuangan rakyat Timor melawan penjajah. Terdapat gambar rantai yang terputus mengandung makna perjuangan meraih kemerdekaan dari tangan penjajah.\r\n\r\nSeorang Raja menunggang kuda mencerminkan Jiwa kesatriaan, patriotisme, yang memiliki cinta dan kasih sayang terhadap rakyat Timor, menyingsingkan lengan baju tanpa pamrih untuk membela dan mempertahankan hak-hak rakyatnya yang di rampas oleh bangsa penjajah. Siapakah Sang Raja pahlawan berkuda itu ?Dia adalah Sobe Sonbai llI..Putra kelahiran Bikauniki sekitar tahun 1882, Dia adalah pejuang yang konsisten menolak kolonialisme dalam bentuk apa pun, lebih tegas lagi menolak untuk berunding, tidak pernah sekalipun menandatangani perjanjian takluk kepada Belanda sehingga dengan tegas menolak bekerja sama dengan kolonialisme.', 'monumen_sonbai1.jpg', NULL),
(150, 6, 6, 20, 'Monumen Tirosa', 'Tuak Daun Merah, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '-10.1562384', '123.6328897', 'Patung Tirosa adalah salah satu patung yang ternama di Kota Kupang, Nusa tenggara Timur. Patung Tirosa sendiri dibangun oleh Bapak Gubernur Paul Lawa Rihi yang menjabat sebagai Gubernur NTT pada saat itu, Dia memerintahkan supaya Patung Tirosa ini dibuat agar generasi berikut yang sementara bertumbuh dapat mengetahui sejarah dan arti dari Patung Tirosa tersebut. Patung ini di beri nama Patung Tirosa karena patung ini terdiri dari tiga pulau besar yaitu: Pulau Timor, Rote dan Sabu. Patung Tirosa merupakan gambaran dari tiga tokoh dari Nusa Tenggara Timur yang terkenal karena keinginan dan tekad yang kuat supaya dapat merubah kehidupan di Nusa Tenggara Timur, khususnya kota Kupang agar menjadi kota yang disegani setiap pulau dan juga dapat menunjukan di seluruh Indonesia khususnya bahwa nusa Tenggara timur khususnya Kota Kupang memiliiki orang-orang yang mempunya tekad yang kuat dalam membawa sebuah perubahan. Tiga tokoh tersebut adalah Bapak Hendrik Arnol Koroh, yang berasal dari Pulau Timor dengan memimpin setiap raja-raja yang ada di Timor sebagai Ketua atau orang pertama yang mendahului setiuap raja-raja yang ada di Timor. Bapak Hendrik Arnol Koroh terkenal dengan cara pengembangbiakan sapi di Pulau Timor. Selain itu dari Pulau  Rote adalah Prof.Dr. Heman Yohanes yang merupakan Rektor pertama di Universitas Gajah Mada dan juga dia termasuk orang yang sangat penting di era Bapak Presiden Soekarnao, bapak Herman Yohanes merupakan pejuang pendidikan yang membawa Obor dibagian tangan kanannya sebagai lambang pendidikan bagi kegelapan di Nusa Tenggara Timur khususnya Kota Kupang. da juga Bapak Eltari yang merupakan putra dari Pulau Sabu, Bapak Eltari merupakan Gubernur Nusa Tenggara Timur yang kedua setelah Bapak W.J. Lalamentik yang merupakan Gubernur NTT yang pertama namun, dia berpindah ke Jakarta dan posisinya sebagai Gubernur digantikan oleh Bapak Eltari sebagai Gubernur NTT yang kedua dengan semboyan dalam membangun Provinsi Nusa Tenggara Timur adalah Tanam, Tanam dan sekali lagi Tanam. Oleh karena itu untuk mengenang jasa dari setiap tokoh yang dengan gagah perkasa membangun Provinsi Nusa Tenggara Timur maka dia adakan Jalan Bundaran  Eltari dan bandara Eltari.', 'Monumen_Tirosa.JPG', NULL),
(151, 7, 5, 16, 'Kolam Renang Wirasakti', 'Fontein, Kec. Kota Raja, Kota Kupang, Nusa Tenggara Timur', '-10.1649123', '123.5799617', 'Kolam renang ini berlokasi di Jl. Cak Malada Fontein\r\nKupang yang merupakan salah satu kolam renang yang berada di Kota Kupang. Kolam renang ini sering dimanfaatkan oleh warga Kota Kupang untuk olahraga renang dan rekreasi air. Kolam Renang Wirasakti memiliki kolam desain dengan baik, aman, terawat, air jernih serta dilengkapi fasilitas yang lengkap seperti kantin, kamar ganti dan kamar mandi. Kolam renang ini terbuka untuk umum dengan harga tiket masuk yang murah dan terjangkau. Kolam renang wira sakti untuk anda yang ingin berenang dengan nyaman dan pandangan yang indah, dan dengan fasilitas fasilitas yang tergolong lengkap dan pastinya kebersihan terjaga. Dengan berlokasi di area kota kupang. Dengan tiket masuk yg terjangkau. Dengan semua golongan usia bisa untuk menikmati wisata air ini. Disediakan lokasi parkir untuk yang membawa kendaraan.', 'kolam_renang_wirasakti.jpg', NULL),
(152, 7, 3, 18, 'Kolam Renang Air Sagu', 'Batuplat, Kec. Alak, Kota Kupang, Nusa Tenggara, Timur', '-10.2012141', '123.5814158', 'Jika umumnya orang berenang di kolam renang buatan yang ada di hotel, villa, penginapan, atau tempat rekreasi, maka tak ada salahnya mencoba bagaimana keseruan mandi dikolam alami langsung dari sumber  mata air. Kolam ini telah dibangun bak keliling 30 x 45 meter yang beberapa bagian sudah putus dan roboh, kedalamannya sekitar 1,5 hingga 2 meter. Terdapat beberapa mata air disekitar sini yang digunakan untuk keperluan irigasi lahan pertanian, bahkan ada yang digunakan oleh PDAM. Cukup banyak warga yang datang untuk mandi atau mencuci pakaian, saat hari sabtu dan minggu sangat ramai. Daya tarik air yang jernih dan pepohonan disekitar kolam membuat pengujung akan betah berlama-lama, ada juga area yang tak terlalu dalam untuk  anda yang tak bisa berenang. Pasca badai siklon tropis seroja yang melanda sebagian besar wilayah NTT membuat debit air semakin banyak. Waktu terbaik untuk berkunjung adalah saat pagi hari, karena tak banyak orang. Tempat ini dikenal dengan nama Air Sagu Batuplat, karena disekitar mata air terdapat pohon sagu.\r\n\r\nLetak tempat ini di RT 012 RW 005, Kelurahan Batuplat, Kecamatan Alak, Kota Kupang, NTT. Dari jalur perempatan polda ambil belokan menuju Air Nona, Bakunase, Kantor Pos, Kantor Lurah Batuplat. Setelah Kantor Lurah sekitar 250 meter ambil belokan kiri pertama dengan gang kecil. Lurus kebagian bawah maka kolam akan terlihat dibagian kiri.\r\n\r\n', '177800773_991555414933555_6697176540367423809_n.jpg', NULL),
(153, 7, 1, 46, 'Subasuka Waterpark', 'Pasir Panjang, Kec. Kelapa Lima, Kota Kupang, Nusa Tenggara Timur', '-10.149072', '123.606826', 'Subasuka Waterpark menawarkan wahana air yang bisa dimanfaatkan untuk berbagai aktifitas. Selain untuk anak-anak, di tempat wisata ini juga tersedia wahana bermain orang dewasa. Suasana taman air dengan konsep menyatu pada alam menjadikan para pengunjung dapat menikmati suasana di waterpark ini dengan puas dan antusias. Saat pengunjung berada di Subasuka Waterpark akan terasa suasana segar dan sejuk sehingga menjadikan siapa saja merasa betah.\r\n\r\nSubasuka Waterpark merupakan salah satu alternatif tepat untuk menghabiskan waktu bersantai bersama keluarga dan teman. Wahana air ini sangat representatif seperti wahana yang ada di Jawa dan Bali. Selain itu, tarifnya yang ramah dikantong dan akses jalannya yang mudah dijangkau menjadikan daya tarik tersendiri bagi para pengunjung untuk selalu mengunjungi tempat wisata menarik di Nusa Tenggara Timur ini. Saat masuk pada area permandian, wisatawan dapat menikmati beragama wahana air yang tersedia misalnya seperti plaza air mancur, perosotan, kolam renang, family raising hingga ember tumpah. Wahana air yang lengkap ini dapat anda nikmati satu per satu dengan harga yang murah. Kolam renang yang tersedia di wahana air ini pun juga sangat memadai. Selain itu, wisatawan juga dapat menikmati waktu beristirahat di gazebo bambu sambil menikmati makanan dan melihat pemandangan indah yang disuguhkan. Gazebo yang ada di Subasuka Waterpark berjumlah kurang lebih 50 gazebo. ', 'subasuka_waterpark.jpg', NULL),
(154, 7, 6, 13, 'Kupang Waterpark', 'Oebufu, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '-10.1759574', '123.6139805', 'Kupang Waterpark hadir dari inisiatif pemuda daerah Kupang, ibu kota NTT, untuk membuat tempat wisata keluarga baru. Tempat ini berhasil meramaikan area di sekitarnya, yang tadinya berupa daerah sepi dan penuh tumbuhan liar. Kupang Waterpark menjadi tempat populer bagi para keluarga di Kupang untuk membawa keluarga mereka berlibur.\r\n\r\nKupang Waterpark berlokasi di area seluas satu hektar, dikelilingi pepohonan rindang. Tempat wisata ini memiliki 22 wahana, seperti perosotan kuning sepanjang delapan meter (Yellow Racing), kolam dangkal dengan ember tumpah dan tempat bermain anak, kolam arus sepanjang 100 meter, hingga kolam orang dewasa. Ada juga tiga perosotan panjang warna-warni yang berombak-ombak, cocok untuk menantang adrenalin.\r\n\r\nIngin merasakan sensasi “hujan-hujanan” yang menyegarkan? Masuklah ke Plaza Air Mancur. Area datar ini memiliki banyak air mancur yang menyembur dari lantai, membahasi setiap orang yang menginjak tempat ini. Total ada delapan kolam renang di Kupang Waterpark, lengkap dengan permainan unik.\r\n\r\nAnda tidak hanya bisa bermain air di Kupang Waterpark. Tempat ini juga menyediakan wahana dan permainan “kering”. Rasakan serunya naik komedi putar. Sewa sepeda tandem untuk berkeliling di rute yang asri bersama keluarga. Jika ingin sesuatu yang lebih menegangkan, cobalah menyewa ATV.', 'kupang_waterpark1.jpg', NULL),
(155, 8, 3, 28, 'Cekdam Manutapen', 'Manutapen, Kec. Alak, Kota Kupang, Nusa Tenggara, Timur', '-10.1790674', '123.5770012', 'ekdam ini terletak di daerah Manutapen. Cekdam ini saat musim tertentu dipenuhi oleh eceng gondok yang bermekaran. Ada juga tumbuhan air lain seperti teratai yang menambah keindahan lokasi ini. Sambil menikmati keindahan kita bisa melihat anak-anak kecil yang memancing sambil beristirahat sejenak di bawah pohon yang rindang di pinggir jalan. Banyak yang berkunjung ke lokasi ini hanya sekedar untuk menikmati pemandangan yang indah atau mengambil gambar untuk kepentingan pribadi, bahkan untuk di kepentingan pernikahan. Lokasi ini hanya menawarkan keindahan pada saat tertentu karena bersifat musiman khususnya saat bulan Mei-Awal Juli.\r\n\r\nUntuk kelokasi Cekdam 1 Manutapen. Kupang jembatan Selam-Kiri (Arah menuju mesjid, ada pangkalan ojek)-papan selamat datang di Manutapen-Tugu – Cabang ada penjual sembako di pinggir jalan- belok kanan (ada tiang listrik)-sekitar 2 menit dari cabang akan terlihat lokasi dari sisi kanan jalan.', 'Cekdam_Naioni.png', NULL),
(156, 9, 5, 15, 'Taman Arjuna ', 'Bakunase II, Kec. Kota Raja, Kota Kupang, Nusa Tenggara Timur', '-10.1940212', '123.5910805', 'TAMAN WISATA ARJUNA (Kampung amnesi, kelurahan Bakunase 2 Kota Kupang NTT)\r\nDibuka untuk masyarakat umum mulai tgl 14 Februari 2018.\r\nSilahkan menikmati suasana alam Amnesi, buka Senin sd Jumat jam 15.00 sd  19.00 Wita Sabtu & Minggu jam 10.00 sd 19.00.\r\nWisata alam yg sangat natural, dikeliling sawah yg padinya mulai bertumbuh, dan juga kolam pancing ikan nila, kolam ikan mas, kolam ikan bawel. Terdapat juga Lopo kolam pancing, Lopo santai, Lopo lesehan rame2 dan juga kolam renang buat anak2 serta saluran air alam yg menyerupai kali2 kecil.\r\nTiket masuk hanya Rp. 10.000.\r\nSilahkan menikmati suasana alam ditengah kota untuk melepas lelah anda.\r\nJalan masuk melalui depan puskemas Bakunase melewati daerah persawahan, hanya 5 menit dari perempatan Polda NTT. Lokasi tersebut dapat digunakan juga secara khusus/tersendiri untuk kegiatan2 komunitas, refresing kantoran, kelompok arisan, pertemuan alumni, perkemahan ataupun acara2 lainnya yg dilakukan secara internal tanpa adanya tamu luar. Luas lokasi cukup menunjang yakni 1 hektare. Arah jalan >>\r\nDidepan Puskesmas Bakunase ada belokan ke kiri ke arah persawahan, melewati jalan ini akan sampai di lokasi dalam 3 menit, lokasi disebelah kanan jalan ada Gapura Taman Wisata Arjuna\r\n\r\nPerkiraan dari pusat kota : 10 menit dari Perempatan Polda NTT ke arah bakunase.', 'Taman_Arjuna.jpg', NULL),
(157, 9, 6, 56, 'Funworld Prima (Lippo Plaza)', 'Fatululi, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '-10.158877', '123.6112188', 'Lippo Plaza Kupang hadir dengan konsep super blok (mixed use) melengkapi kehadiran RS. Siloam Kupang yang telah terlebih dahulu diresmikan pada tanggal 20 Desember 2014 dan akan terintegrasi dengan mixed development lainnya seperti Convention Center, Bank, Sekolah, dan Hotel.\r\n \r\nPusat perbelanjaan yang terdiri dari 4 lantai ini dibangun di area lahan seluas 1,6 hektare dengan total Gross Floor Area (GFA) kurang lebih 33.000 meter persegi dan Net Leasable Area (NLA) kurang lebih 27.000 meter persegi.\r\n\r\nLippo Plaza Kupang memiliki lebih dari 70 tenant yang terdiri dari tenant fashion dan aksesoris, beauty & health, food and beverages, entertainment dengan Matahari Department Store, Hypermart, Cinemaxx, Ace hardware dan Informa sebagai anchor tenant yang kehadirannya sudah sangat dinantikan oleh masyarakat Kupang.\r\n\r\nLippo Malls Indonesia pada tahun 2015 merencanakan membuka pusat perbelanjaan  baru sebanyak tujuh pusat perbelanjaan, meliputi Pusat perbelanjaan di wilayah Tangerang, Jakarta, Yogyakarta, Jambi, Bogor, dan Buton, Sulawesi Tenggara dan  Lippo Plaza Kupang merupakan pusat perbelanjaan pertama yang dibuka pada tahun ini.\r\n\r\nDalam kurun waktu lima tahun ke depan, Lippo Malls Indonesia berencana menambah jumlah mal yang dikelolanya hingga mencapai 120 mall dengan jangkauan 51 kota dan kabupaten di Indonesia, yang meliputi pembangunan mal baru di kota-kota di Indonesia Timur antara lain Bau Bau, Manado, Makassar, Ambon, dan Bitung yang hingga saat ini memiliki total tenaga kerja lebih dari 250 ribu.\r\n\r\nLippo Plaza Kupang  merupakan pusat perbelanjaan ke 60 yang dikelola Lippo Malls saat ini. Dengan keberagaman katagori tenant yang dimiliki Lippo Plaza Kupang, kami yakin pusat perbelanjaan ini memungkinkan seluruh anggota keluarga di segala usia dapat melakukan aktifitas dan kegiatan belanja sesuai dengan kebutuhan dan selera.', 'Funworld_Prima(Lippo_Plaza).jpg', NULL);
INSERT INTO `tabelobwis` (`id`, `idkategori`, `idkecamatan`, `idkelurahan`, `nama`, `alamat`, `lat`, `lng`, `deskripsi`, `gambar`, `link`) VALUES
(158, 9, 6, 56, 'Trans Studio Mini', 'Fatululi, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '-10.1700792', '123.6094366', 'gerai yang pertama di kota kupang ini kan mengusung konsef 4 in 1 (berbelanja, bersantap, bermain dan menonton) ini merupakan inovasi dan trasnformasi ritel modern yang sedang di kembangkan oleh Pt. Trans Retal Indonesia, yang special dari Transmart kupang adalah arena bermain indoor yang berkelas dunia yaitu “trans Studio Mini” yang ada dilantai F3, sehingga masyarakat NTT tidak lagi jauh-jauh ke bandung atau makasar untuk bermain di trans Studio.\r\n\r\n“Ada banyak wanana permainan seperti Mini Train, Bumper Car, Sky Rider, Roal Coaster dan 120 mesin Games, Redamption, Kiddy Ride seperti Transformer, Jurassic part, Over Takedan masih banyak games lainnya yang sangan menantang dengan harga tiket yang cukup murah mulai dari Rp. 3.900 sampai dengan Rp 30.000 (s&k) dan juga TRansmart menawarkan barang-barang yang beragam dengan harga yang bersaing,” imbuhnya.\r\n\r\nDengan adanya Trans Mini Studi ini kami berharap tempat ini menjadi destinasi belanja pilihan bagi masyarakat NTT khususnya Kota Kupang serta dapat membantu meningkatkan ekonomi masyarakat kota kupang. Dengan semangat perusahan yang focus dalam memebrikan akses kepada pelaku UMKM di transmart terdapat produk local dan produk UMKM sejumlah 386 item produk yang dijual di area display barang jualan.', 'Trans_Studio_Mini.jpg', NULL),
(160, 10, 2, 40, 'Penjara Belanda', 'Air Mata, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Tim.', '-10.1645348', '123.5779641', 'deskripsi', 'penjara_lama.png', NULL),
(161, 10, 3, 32, 'Situs Kuburan Belanda', 'Nunhila, Kec. Alak, Kota Kupang, Nusa Tenggara Timur', '-10.1646777', '123.5730295', 'deskripsi', 'situs_kuburan_belanda.jpg', NULL),
(162, 10, 3, 9, 'Meriam Sekutu Nunbaun Delha', 'Nunbaun Delha, Kec. Alak, Kota Kupang, Nusa Tenggara Timur', '-10.1718957', '123.5732261', 'deskripsi', 'meriam_sekutu_nunbaun_delha.jpg', NULL),
(163, 10, 3, 5, 'Benteng Concordia', 'Fatufeto, Kec. Alak, Kota Kupang, Nusa Tenggara, Timur', '-10.135424', '123.5396925', 'Tak jauh dari Tugu Pancasila terdapat sebuah Markas Yonif 743/SYB Kupang. Markas itu dulunya adalah sebuah benteng pasukan Australia (pro Hindia Belanda) yang diberi nama Benteng Concordia.\r\n\r\nSejarah benteng ini dimulai tahun 1613 dimana VOC yang berkedudukan di Batavia mulai melakukan kegiatan perdagangannya di NTT dengan mengirim tiga kapal yang dipimpin oleh Apolonius Scotte menuju Pulau Timor dan mendarat di Teluk Kupang.\r\nVOC semakin menyadari penting wilayah NTT bagi kepentingan perdagangannya, sehingga pada tahun 1625-1663 VOC melakukan perlawanan ke daerah kedudukan Portugis di Pulau Solor. Dengan bantuan orang-orang islam di Solor, benteng Portugis Ford Henricus Concordia berhasil direbut dan jatuh ke tangan VOC.\r\nDi area Yonif 743/SYB itu terdapat sebuah bunker atau Benteng Concordia serta sebuah kuburan sejarah yang berada di area depan pintu gerbang keluar.\r\n\r\nTerdapat pula sejumlah meriam sisa peninggalan Portugis dan VOC yang sudah dipindahkan dari tempat aslinya, semula di belakang Yonif, kini diletakkan di sejumlah area di depan Yonif 743/SYB.\r\n\r\n', 'BENTENG_CONCORDIA_1.png', NULL),
(164, 10, 3, 28, 'Kuburan Raja Taebenu', 'Manutapen, Kec. Alak, Kota Kupang, Nusa Tenggara, Timur', '-10.1724956', '123.5797582', 'deskripsi', 'kuburan_raja_taebenu.jpg', NULL),
(165, 10, 1, 14, 'Meriam Jepang Kelapa Lima', 'Kelapa Lima, Kec. Kelapa Lima, Kota Kupang, Nusa Tenggara Timur', '-10.1464624', '123.617393', 'deskripsi', 'Meriam_Jepang_Kelapa_Lima.jpg', NULL),
(166, 10, 2, 4, 'Tugu Pancasila', 'Lahilai Bissi Kopan, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Timur', '-10.135424', '123.5404559', 'Monumen itu sarat makna.\r\nMakna yang sangat esensial terkait \'Human Right\' atau hak asasi manusia (HAM). Dari segi penamaan, Four Freedom\'s bermakna kebebasan, anti kolonialisme dan imperialisme. Bahkan, Peter A Rohi sebagaimana dikutip dari laman net, menyebutkan,  sebelum deklarasi of human  right tahun 1948, monumen ini sudah lebih dulu ada. \"Monumen ini dibangun  tahun 1946,\" ujar wartawan senior itu.\r\n\r\nDisaksikan Pos Kupang awal Agustus 2014 lalu, monumen setinggi kurang lebih 17 meter itu di atasnya berbentuk meruncing. Warnanya didominasi putih.  Di bawahnya terdapat lima garis yang diberi cat warna merah.\r\n\r\nGaris itu melambangkan lima sila dalam ideologi negara kita, Pancasila. Karenanya tak heran jika monumen empat kebebasan itu juga disebut sebagai Tugu Pancasila.\r\n\r\nPada  salah satu dinding,  terpampang plakat yang sudah samar tapi terbaca jelas bertuLiskan, 17 AUG 1945 - 23 DEC 1949.\r\n\r\nDi bawah tulisan tahun pembuatan, tertera tulisan SATU: BANGSA! BAHASA! BENDERA! TANAH AIR! LAGU KEBANGSAAN!.\r\n\r\nSementara di dinding tugu sebaliknya, terpampang plakat kuno bertuliskan  EMPAT KEMERDEKAAN\" -  FOUR FREEDOM\'S\", dikuti empat kebebasan di bawahnya: DARI RASA KETAKUTAN, DARI KEKURANGAN, BERIBADAT, BERBICARA.\r\nDi sebelah teks bahasa Indonesia, tertulis: FOUR FREEDOM\'S: FROM FEAR, FROM WANT, OF WORSHIP, OF SPEECH.\r\n', 'tp.png', NULL),
(167, 10, 4, 21, 'Tugu Jepang Penfui', 'Penfui, Kec. Maulafa, Kota Kupang, Nusa Tenggara Timur', '-10.1805731', '123.656524', 'deskripsi', 'Tugu_Jepang_Penfui.jpg', NULL),
(168, 10, 6, 57, 'Museum Negeri NTT', 'Kayu Putih, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '-10.1588243', '123.6153079', 'Unit Pelaksana Teknis (UPT) Museum Daerah NTT didirikan pada 1977/1978. Melalui Surat Keputusan Menteri Pendidikan dan Kebudayaan 9 Januari 1991 museum tersebut ditetapkan sebagai Museum Negeri Provinsi NTT dan menjadi Unit Pelaksana Teknis (UPT). Pada 1999/2000, maka status Museum Negeri Provinsi NTT berubah menjadi Museum Daerah NTT dan dengan demikian menjadi UPT Daerah (UPTD) yang bertanggungjawa kepada Pemerintah Daerah Povinsi NTT dan bernaung di bawah pembinaan Dinas Pendidikan dan Kebudayaan Provinsi NTT.\r\n\r\nMuseum memiliki luas lahan sekitar 3 ha dan berada di pusat Kota Kupang. Museum ini berjarak sekitar 4 km dari Bandar Udara El Tari Kupang atau sekitar 10 menit dengan kendaraan roda empat.\r\n\r\nMuseum Daerah Provinsi NTT didirikan sebagai “rumah” yang menampung berbagai benda alam dan budaya masyarakat NTT sebagai pusat informasi budaya, sejarah dan peradaban. Adapun misi museum ini menekankan peran untuk menyelamatkan, memelihara, memanfatkan benda-benda warisan sejarah alam dan budaya masyarakat NTT untuk memperkuat identitas diri, mendorong kreativitas, memupuk toleransi, menunjang pendidikan dan pariwisata serta menampilkan kekayaan budaya daerah NTT ke ajang yang lebih luas.\r\n\r\nKoleksi Museum NTT Koleksi Museum Daerah NTT memiliki 10 jenis koleksi dengan jumlah 8999 koleksi yang berasal dari kelompok-kelompok etnis yang mendiami 14 kabupaten dan kota di Wilayah Provinsi NTT. Koleksi museum yang diperoleh dari hibah, ganti rugi/pembelian, dan bentuk lainnya berupa benda-benda arkeologi, biologi, geografi, etnografi, historis, numismatik, heraldik, senirupa, filologi, dan teknologi. Sebagian koleksi dipamerkan pada ruang pamer tetap. Ruang Pameran Tetap Museum Daerah NTT telah mendapatkan dana revitalisasi dari APBN Kementerian Pendidikan dan Kebudayaan pada anggaran 2014, sehingga tata pamernya telah mengalami perubahan dan didesain sedmikian rupa sehingga diharapkan penataan tata pamer akan dapat meningkatkan pelayanan terhadap pengunjung museum.', 'Museum_NTT.png', NULL),
(169, 10, 5, 16, 'Museum El Tari', 'Fontein, Kec. Kota Raja, Kota Kupang, Nusa Tenggara Timur', '-10.1690292', '123.5833358', 'Museum yang ada di Kota Kupang. Museum ini melayani kebutuhan publik dalam usaha mengoleksi dan memamerkan benda bernilai sejarah pada masyarakat untuk kepentingan studi, pendidikan dan wisata.\r\n\r\nSelain menyimpan benda-benda bersejarah, musium ini juga menjadi objek wisata di Kota Kupang yang dapat dimanfaatkan untuk berlibur bersama keluarga dan teman.', 'Museum_El_Tari.png', NULL),
(170, 11, 2, 47, 'Kuliner Pasar Malam', 'Solor, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Timur', '-10.1589367', '123.5805004', 'Bagi Anda penyuka Seafood, maka bersyukurlah, ternyata di Kupang ini juga tersedia tempat kuliner yang merupakan Surganya Seafood. Semua ikan yang disediakan di sini di olah dengan sangat enak. Berbagai jenis ikan seperti kakap merah, kerapu, baronang,  dusun, kue, bulat dan berbagai jenis ikan lainnya yang siap untuk disantap dengan dibakar, digoreng, atau dijadikan kuah asam, makanan khas Kupang.Tidak hanya ikan, biasanya para pedagang juga menjajakan beraneka ragam seafood seperti kerang, kepiting, udang dan cumi yang siap menjadi santapan yang tak kalah lezatnya. Kita bisa meminta sang juru masak untuk menjadikan seafood pilihan kita untuk dimasak dengan goreng tepung, atau bisa juga dengan saos padang.Sebagai pelengkap kita juga bisa memesan sayur seperti cah kangkung, cah bunga pepaya dan cap cay. Untuk minumannya, masing–masing lapak juga tersedia berbagai pilihan mulai dari air mineral, es teh, es jeruk hingga beraneka jus buah.Soal harga tidak perlu khawatir, makan di Pasar Malam Kampung Solor tidak akan membuat isi dompet kita terkuras. Harga ikan baik yang disajikan dengan dibakar atau digoreng terbilang bersahabat, sebagai contoh ikan kerapu ukuran sedang dibanderol dengan harga Rp 55 ribu, ikan kakap biasanya lebih murah yakni Rp 45 ribu, lengkap dengan lalapan seperti timun, potongan kol, kemangi dan sambal yang siap menggoyang lidah.\"Harga tersebut bisa lebih murah apabila kondisi cuaca laut sedang bagus” ujar Diana, salah seorang pedagang ikan bakar di Kampung Solor. Namun bagi traveler yang alergi makan ikan, maupun seafood tidak perlu risau, karena di Pasar Malam Kampung Solor juga ada yang menjual makanan lainnya seperti sate ayam, ayam goreng atau bakar, nasi goreng dan gado–gado.', 'KULINERLLBK1.png', NULL),
(171, 11, 6, 8, 'Kuliner Oepoi', 'Oebufu, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '-10.1744819', '123.6173515', 'Jika kita menyusuri Jln. W. J. Lalamentik di Kota Kupang, kita akan mendapati tempat Wisata Kuliner Oepoi yang lokasinya berhadapan dengan kantor BPJS Kesehatan.\r\n\r\nDi lokasi yang tak jauh dari Gelanggang Olah Raga (GOR) Oepoi tersebut, berdiri 40 lapak yang sebagian besarnya telah disewa. Pada tahun 2012, daerah itu hanyalah sebatas tempat jual para kuliner dengan gerobak-gerobak berjejer di pinggir jalan.\r\n\r\nKini, telah berdiri bangunan permanen, dihiasi spanduk-spanduk iklan pada bagian depan lapak.\r\n\r\nDari 40 lapak yang dibangun, sebanyak 28 lapak telah disewa. Tinggal 12 lapak yang masih kosong.\r\n Sebuah rumah makan dengan nama Rumah Makan Kedaung Steak kini hadir dengan gerai baru  di kawasan Wisata Kuliner Oepoi . Steak biasanya dikenal sebagai makanan restoran yang mahal. Jarang kita jumpai steak (terutama di Kupang) yang dijajakan di Rumah Makan “pinggir jalan”.\r\n\r\nNamun Paman Hasan Daeng, dengan Rumah Makan Kedaung miliknya, mencoba mengubah persepsi itu. Di area Wisata Kuliner Oepoi, pria kelahiran Makasar itu menjadikan steak sebagai menu andalan di Rumah Makan “pinggir jalan” Kedaung Kedaung Steak dikenal sebagai rumah makan yang selalu menghadirkan menu istimewa dengan harga terjangkau bagi warga Kota Kupang. Berbagai menu istimewa yang disiapkan diantaranya, Ayam Goreng, Ayam Bakar, Steak Ayam, Steak Daging  dan lainnya. Meski menunya istimewa, namun harganya pun dibandor Rp15 ribu perporsi. Selain itu juga disiapkan menu bakso, soto dan lainnya, serta aneka minuman seperti jus, es the dan lain-lain.', 'Cuplikan_layar_2022-09-02_134510.png', NULL),
(172, 11, 2, 4, 'Kuliner LLBK', 'Lahilai Bissi Kopan, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Timur', '-10.1612827', '123.5768245', 'Menikmati pisang bakar dan jagung bakar sambil nongkrong di pinggir jalan sudah jamak ditemui di berbagai pelosok kota besar di Indonesia.\r\nTetapi menikmati buliran jagung bakar manis plus pisang bakar gurih dicampur dengan keju dan susu sambil menyaksikan indahnya matahari terbenam bisa jadi hanya ditemui di Kota Kupang, Ibu Kota Nusa Tenggara Timur. Mayoritas penjaja makanan menyuguhkan jagung bakar yang dioles sambal khas, harganya Rp 5.000 saja. Sambal khas Kupang ini merupakan campuran cabai, tomat, daun-daunan, dan jeruk nipis yang difermentasi. Rasanya agak asam, namun segar!\r\n\r\nSelain jagung bakar, ada pula pisang penyet dengan pilihan 2 toping: keju-cokelat atau kacang-gula. Pisang setengah matang dibakar di atas arang, kemudian ditaburkan topping dan disiram susu cokelat kental manis. Harga seporsi pisang penyet Rp 8.000 saja.\r\nBeberapa penjaja makanan lain menyuguhkan bakso (Rp 10.000 per porsi), terang bulan alias martabak. Soal minum, setiap pedagang jagung bakar menyediakan aneka minuman ringan dari air mineral hingga jus buah beraneka rasa.', 'kulinerllbk.png', NULL),
(173, 11, 1, 3, 'Kuliner Pujasera Pantai Lasiana', 'Lasiana, Kec. Kelapa Lima, Kota Kupang, Nusa Tenggara Timur', '-10.1331047', '123.6686583', 'Pisang gepeng, kelapa muda dan saboak (buah lontar) jadi jajanan yang laris manis dan membawa berkah bagi para pedagang kuliner di Pantai Lasiana, Kota Kupang. Kuliner asli Kupang ini menjadi ciri khas salah satu objek wisata favorit di Kota Kupang ini.  lokasi wisata yang berdekatan dengan Jalur Trans Timor Raya itu, tak begitu ramai. Namun rindangnya pepohonan di pesisir pantai memberikan daya tarik. Para pedagang kecil menjajakan aneka kuliner yang setiap saat bisa dibeli oleh para pengunjung. kuliner khas seperti pisang gepeng, kelapa muda dan saboak menjadi jajanan terfavorit. Tiga jenis jajanan ini paling diminati. Tak hanya oleh pengunjung lokal, tapi juga warga dari daerah lain. Jenis jajanan ini memang bisa ditemui di banyak lokasi lain di Kota Kupang, namun menikmatinya di Pantai Lasiana memberi kenikmatan tersendiri. Harganya 1 porsi Rp13.000. Sedangkan untuk jajanan lainnya seperti kelapa muda segar dibanderol dengan Rp10.000 dan saboak seharga Rp5.000 per buah. Tak hanya itu, ada juga aneka jenis soft drink lainnya.', 'kuliner_pantai_lasiana.jpg', NULL),
(174, 11, 4, 21, 'Kuliner Jalan EL Tari', 'Penfui, Kec. Maulafa, Kota Kupang, Nusa Tenggara Timur', '-10.1718513', '123.605455', 'Bila Anda datang ke Kota Kupang, Ibu Kota NTT, tidak akan lengkap bila Anda belum menikmati jagung bakar yang dijual di sepanjang Jalan El Tari Kupang. Dua jenis jagung bakar yang disajikan yakni jagung bakar manis dan jagung bakar pulut siap menjadi santapan menu kecil sore Anda.\r\nApalagi jika dinikmati sembari nongkrong sore hari di depan deretan gedung pemerintah di bilangan Jalan El Tari Kupang.\r\n\r\nUntuk menikmati jagung bakar pilihan, Anda tidak akan merogoh kocek dalam.\r\n\r\nSatu buah jagung bakar hanya Rp 7.000.\r\n\r\nTinggal Anda memilih jagung manis atau jagung pulut. Dua-duanya sama enaknya.\r\n\r\nTergantung selera Anda masing-masing. Selain itu Anda juga bisa menikmati pisang bakar khas Kupang NTT dilumuri susu yang dijual Rp 10.000 per porsinya. Rata-rata belasan penjual jagung bakar membuka lapaknya sekitar pukul 16.00 setiap hari di pinggir jalan El Tari Kupang.\r\nBila Anda tidak menyukai jagung, tak jauh dari penjual jagung, Anda dapat menjumpai penjual bubur kacang hijau dan ketan hitam.\r\n\r\nSoal harga, murah meriah. Satu mangkok bubur kacang hijau yang panas hanya Rp 5.000. Murah bukan.\r\n\r\nKalau Anda tertarik menikmati jagung bakar El Tari Kupang, Anda dapat mengunjungi lokasi itu dengan menumpang angkutan umum bernomor lampu tujuh.\r\n\r\nAnda dapat turun di depan Kantor DPRD NTT atau rumah jabatan Gubernur NTT. Lokasi jagung bakar berada di seberang jalan.\r\n\r\nTinggal Anda memilih tempat lantaran banyak pedagang yang berjualan jagung bakar di pinggir jalan tersebut.\r\n', 'Kuliner_Jalan_El_Tari.jpg', NULL),
(175, 11, 4, 21, 'Kuliner Penfui', 'Penfui, Kec. Maulafa, Kota Kupang, Nusa Tenggara Timur', '-10.1657268', '123.6570703', 'Restoran dengan menu yang cukup lengkap, terutama variasi menu seafood dan makanan khas NTT seperti olahan daging Se\'i. Suasana restoran ini pun sangat asik dengan berbagai ornamen dan desain etnik, cocok sebagai tempat untuk menjamu tamu dari luar kota yang bosan dengan suasana restoran biasa. Lokasi agak jauh dari keramaian tapi dekat Bandara dan Hotel Neo/ Hotel T-More. Tempatnya yang didesain ECORESTAURANT menambah daya tarik untuk makan di tempat ini desain dan konsep restonya, sangat berkarakter  seperti berada di tempat pedalaman terpencil dengan masakan yang modern. Namun, terdapat menu spesial JAGUNG BOSE makanan khas orang Timor yang akan menambah kekayaan/koleksi kuliner anda. . Anda juga dapat menikmati live music mulai pukul 18.00 -Selesai Untuk menemani tamu menyantap hidangan. ', 'Kuliner_Penfui.jpg', NULL),
(176, 11, 1, 14, 'Kuliner Taman Nostalgia', 'Kelapa Lima, Kec. Klp Lima, Kota Kupang, Nusa Tenggara Timur', '-10.1584427', '123.6161732', 'Salome Tamnos merupakan jajanan khas dari Kupang yang memiliki bentuk layaknya makanan dari daerah Jawa yang sering disebut cilok. Yang membedakan antara cilok dengan salome ini yaitu rasa gurihnya dari lumuran telur yang digoreng dengan tambahan bumbu kacang. Jajanan khas Kupang ini terbuat dari campuran tepung terigu dan olahan daging. Bagi Anda yang tertarik untuk mencicipi hidangan khas Kupang ini, bisa mengunjungi Taman Nostalgia yang berada di daerah Walikota Kupang.\r\n\r\nPada destinasi wisata kuliner tersebut, Anda dapat menemukan Salome Tamnos dengan beragam varian berbeda seperti salome goreng, salome rebus, hingga salome kentang. Anda bisa menikmati kelezatan jajanan khas Kupang ini sambil menikmati pemandangan matahari terbenam di Taman Nostalgia ini. Apalagi harga yang ditawarkan untuk jajanan ini sangatlah terjangkau, sehingga akan memanjakan lidah anda.', 'Salome-Taman-Nostalgia-scaled.jpg', NULL),
(177, 11, 1, 19, 'Kuliner Oesapa', 'Oesapa, Kec. Kelapa Lima, Kota Kupang, Nusa Tenggara Timur', '-10.1424956', '123.6540197', 'deskripsi', 'kuliner_oesapa.jpg', NULL),
(178, 11, 5, 16, 'Kuliner Fontein ', 'Fontein, Kec. Kota Raja, Kota Kupang, Nusa Tenggara Timur', '-10.1674063', '123.5838734', 'deskripsi', 'Kuliner_Fontein.png', NULL),
(179, 11, 6, 8, 'Kuliner Oebobo', 'Oebobo, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '-10.1771996', '123.6070329', 'deskripsi', 'kulineroebobo1.png', NULL),
(180, 10, 4, 21, 'Bunker Jepang Bandara El Tari', 'Penfui, Kec. Maulafa, Kota Kupang, Nusa Tenggara Timur', '-10.1673561', '123.6674295', 'Lanud Bandara El Tari Kupang saat ini tengah menginvetarisasi sejumlah bungker dan goa-goa bekas Perang Dunia II untuk dikembangkan sebagai kawasan wisata sejarah.\r\n\r\n', 'bungker_jepang_1.png', NULL),
(181, 2, 3, 25, 'Gua Monyet Kelapa Satu', 'Alak, Kec. Alak, Kota Kupang, Nusa Tenggara, Timur', '-10.1813192', '123.5317121', 'Taman Rekreasi Gua Monyet merupakan salah satu tempat rekreasi unik yang dapat kamu kunjungi, karena disini kamu dapat melihat atau bahkan berinteraksi dengan ratusan monyet. Menurut pengelola setempat di sini terdapat sekitar 327 ekor monyet yang terbagi kedalam 4 kelompok. Kelompok terbanyak berjumlah 180 ekor, sedangkan kelompok terkecil berjumlah sekitar 40 ekor saja. Monyet-monyat yang ada di taman rekreasi ini terbilang sudah jinak dan tidak asing dengan kehadiran pengunjung. Kamu dapat melihat mereka berkeliaran kesana kemari. Kamu pun dapat memberi mereka makanan, seperti kacang-kacangan, buah-buahan atau lain sebagainya. Lokasinya berada di pesisir Pantai Alak.', 'gua_monyet_kelapa_satu.png', NULL),
(182, 2, 6, 58, 'Gua Jepang Liliba', 'Liliba, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '-10.177984', '123.647258', 'Masyarakat sekitar Cagar alam mayoritas berasal dari suku Rote memberi nama lokal terhadap goa itu, kolo kaha (Goa Empat Lubang). Goa ini terdiri dari empat lubang (pintu) yang di dalamnya terdapat lorong-lorong yang saling menghubungkan satu dengan yang lainnya. Ada pun tujuan dari pembuatan goa pertahanan ini yaitu sebagai pertahanan diri terhadap serangan Sekutu. Pintu-pintu goa ini menghadap kearah Barat dan dibangun di atas tanah perbukitan. Alasan pemilihan lokasi ini dikarenakan letaknya sangat strategis berdekatan dengan bandara. Sehingga goa ini menjadi area pengawas bagi pesawat sekutu yang ingin memasuki Kupang. Kemudian melaporkan kepada tentara Jepang yang berada di Kelapa Lima via HT untuk segera menembak pesawat musuh dengan meriam yang terletak di belakang Hotel Aston sekarang.', 'gua_jepang_liliba.jpg', NULL),
(183, 5, 2, 4, 'Gereja Kota Kupang', 'Lahilai Bissi Kopan, Kec. Kota Lama, Kota Kupang, Nusa Tenggara Timur', '-10.1626521', '123.577708', 'GMIT Jemaat Kota Kupang dalam wilayah pelayanan Klasis Kota Kupang adalah salah satu jemaat tua di Gereja Masehi Injili di Timor (GMIT) yang telah berdiri sejak era VOC. Gereja ini dilindungi oleh Undang-undang Benda Cagar Budaya No. 5 Tahun 1992.Terletak di Jalan Soekarno No. 23, Kelurahan Lahi-Lai Bisi Koepan, Kecamatan Kota Lama, Kota Kupang, Provinsi Nusa Tenggara Timur (NTT), gereja Kristen Kota Kupang masih berdiri kokoh. Dalam peta lama Kota Kupang, tempo dulu, gereja ini berada di kawasan inti Kota Affedeling Kupang (kini eks Kantor Bupati Kupang) yang strategis dan ramai.Jemaat Kota Kupang sejak berdirinya hingga kini telah banyak mengalami perubahan dari waktu ke waktu, baik dalam hal misi pelayanan maupun fisik gedung akibat dari rehabilitasi dari Pendeta yang bertugas dalam kurun waktu pelayanannya. Jemaat Kota Kupang adalah salah satu Jemaat tertua dalam GMIT yang bertumbuh, bersama dengan berdirinya Benteng VOC di Kupang. Embrio pelayanan selaku Jemaat dimulai pada tahun 1614 di dalam Benteng Fort Concordia (asrama Benteng TNI sekarang). Terbentuknya gereja Kota Kupang berawal dari datangnya seorang Pendeta Belanda bernama Ds. Matheos Van den Broeck yang dipindahkan oleh Pemerintah VOC dari Saparua, Ambon. Pada masa Out Hollandshe Zending (1614 - 1819), Perkembangan misi Kristen Protestan di Timor berawal dengan kehadiran (Ds) Matheos Van den Broeck pada tahun 1614 di Kupang, sebagai misioner dengan tugas utamanya adalah memelihara/merawat rohani pegawai tentara (VOC) yang ada dalam Benteng Concordia dan sewaktu-waktu menggelarkan pekabaran Injil di luar benteng. Pada tahun 1670, datang (Ds) C. Keysero Kind melayani Jemaat Kupang yang masih tersisa 10 orang hingga mencapai jumlah 59 orang saat ia meninggal dunia.', 'Gereja_Kota_Kupang.png', NULL),
(184, 10, 5, 7, 'Rumah Raja Taebenu', 'Naikoten I, Kec. Kota Raja, Kota Kupang, Nusa Tenggara Timur', '-10.1828536', '123.5775501', 'Latar budaya dari Rumah Raja Taebenu adalah kolonial dengan periode 17-18 masehi.\r\nBangunan ini menghadap ke arah utara dengan pintu masuk di sebelah utara. Rumah terdiri dari dua bagian, bagian depan dan belakang. Rumah di bagian depan merupakan rumah utama Raja yang terdiri dari 12 ruangan yaitu ruang tamu, kamar tidur, ruang kerja, gudang, ruang keluarga, ruang ganti, serta ruang tinggal penjaga. Didalam ruangan terlihat beberapa furnitur yang tidak terawat serta foto-foto keluarga Raja. Beberapa di ruangan menggantung lampu-lampu klasik serta hiasan dinding berupa piring keramik. Lantai ruangan berwarna abu-abu dan di beberapa bagian bermotif warna oranye, kondisi lantai di beberapa bagian telah rusak begitu pula dinding dengan cat yang sudah mengelupas serta retak. Atap bangunan utama terbuat dari seng dan telah mengalami pergantian bahan, sedangkan bagian plafonnya terbuat dari papan-papan kayu. Sedangkan di bagian belakang dahulu merupakan gudang penyimpanan, kamar mandi, dapur, serta kamar pembantu, akan tetapi saat ini hanya digunakan sebagai dapur serta gudang penyimpanan oleh penjaga.', 'Rumah_Raja_Taebenu.jpg', NULL),
(185, 4, 4, 6, 'Mata Air Tofa', 'Maulafa, Kec. Maulafa, Kota Kupang, Nusa Tenggara Timur', '-10.1859368	', '123.6203882', 'Satu lagi Mata air yang bisa menjadi pilihan untuk disinggahi yaitu Mat air Tofa yang berlokasi di Jalan Frans Da Romes - Tofa, RT.20/RW.08, Maulafa, Kota Kupang ini menyediakan tempat santai dan nyaman untuk melepas lelah. Airnya bersih dan sejuk namun disarankan bagi orang tua yang membawa anak agar mengawasinya karena lumayan dalam. Mandi di sini sekitar bulan febuari hingga mei setiap tahunnya GRATIS, air nya segar karena langsung dari mata air yg keluar dari bawah akar pohon selain itu, Mata air ini terus mengalir dan tidak kotor sehingga diharapkan bagi pengunjung agar tetap menjaga kebersihan sekitar area Mata air ini.', 'mata_air_tofa2.png', NULL),
(186, 6, 6, 57, 'Patung Kirab Remaja', 'Kkayu Putih, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '-10.1603998	', '123.6129767	', 'Diresmikan oleh putri penguasa Orde Baru Soeharto, Siti Hardianti Rukmana, 26 November 1991', 'patung_kirab23.png', NULL),
(187, 4, 5, 15, 'Mata Air Bakunase', 'Bakunase II, Kec. Kota Raja, Kota Kupang, Nusa Tenggara Timur', '-10.1863866', '123.586797', 'Mata air Amnesi atau lebih dikenal dengan sebutan Kolam Amnesi menjadi salah satu tempat wisata di Kota Kupang. Kolam ini juga menjadi salah satu sumber air baku di Kota Kupang.\r\nDi kolam ini sudah dikenal warga Kota Kupang ,karena selain sebagai sumber air baku untuk kebutuhan air ,juga menjadi satu tempat wisata.\r\n\r\nKolam ini terletak di sekitar pemukiman warga dan dikelilingi pepohonan. Kolam yang dibentuk bak dengan ukuran sekitar 10 x 14 meter ini selalu dijadikan tempat mandi. Sebagai tempat wisata, karena pengunjung bisa berekreasi di sekitar kolam juga bisa untuk renang.\r\nRimbunnya pepohonan disekitar kolam ini memberi kesejukan bagi para pengunjung Air Amnesi.\r\n\r\nDi kolam ini setiap pengunjung dapat menghabiskan waktu untuk berenang. Tempat ini tidak pernah sepi pengunjung, terutama pada hari libur.\r\n\r\nAda sejumlah pohon besar di tepi kolam, bahkan di bagian hilir terdapat sagu yang turut manjakan mata pengunjung.\r\n\r\nDi samping kolam ada bangunan toilet permanen dan dilengkapi dua profil tank /fiber untuk penampungan air yang digunakan untuk keperluan di toilet. Sementara pada bagian timur kolam ada bak khusus yang dibuat untuk air minum. Bak itu dilengkapi tutup dari seng.\r\n', 'IMG-20210315-WA0033-1024x768.jpg', NULL),
(189, 3, 2, 4, 'awd', 'awd', 'ad', 'awd', 'awd', 'finishMarker.png', NULL),
(190, 1, 2, 4, 'wrere', 'qwe', 'wer', 'wer', 'wer', '', 'www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `tabeltokocinderamata`
--

CREATE TABLE `tabeltokocinderamata` (
  `id` int(128) NOT NULL,
  `idkecamatan` int(128) NOT NULL,
  `idkelurahan` int(128) NOT NULL,
  `nmusaha` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nmpemilik` varchar(128) NOT NULL,
  `link` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabeltokocinderamata`
--

INSERT INTO `tabeltokocinderamata` (`id`, `idkecamatan`, `idkelurahan`, `nmusaha`, `alamat`, `nmpemilik`, `link`) VALUES
(2, 6, 56, 'Souvenir Shop', 'Jl. Frans Seda', 'Ir. Charles Angkiriwang', NULL),
(3, 6, 56, 'UD. Rumah Kebaya dan Tenun Ikat', 'Jl. Frans Seda', 'Dian Ariesta Isabela Jimmy, S.Kom, M.Ap', NULL),
(9, 6, 56, 'Jula Huba Ethnic Artshop', 'Jl. Frans Seda', 'Welmince Lulu Ratu', NULL),
(10, 5, 7, 'Cinta Kasih Artshop', 'Jl. Srikaya', 'Cornelis Djada Koro', NULL),
(11, 1, 14, 'Gizka Butik', 'Jl. R.A.Kartini', 'Felisitas Gizka Erviani', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabeladmin`
--
ALTER TABLE `tabeladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelbpp`
--
ALTER TABLE `tabelbpp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkecamatan` (`idkecamatan`),
  ADD KEY `idkelurahan` (`idkelurahan`);

--
-- Indexes for table `tabelhotel`
--
ALTER TABLE `tabelhotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkecamatan` (`idkecamatan`),
  ADD KEY `idkelurahan` (`idkelurahan`);

--
-- Indexes for table `tabelkategori`
--
ALTER TABLE `tabelkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelkecamatan`
--
ALTER TABLE `tabelkecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelkelurahan`
--
ALTER TABLE `tabelkelurahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkecamatan` (`idkecamatan`);

--
-- Indexes for table `tabelobwis`
--
ALTER TABLE `tabelobwis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkategori` (`idkategori`),
  ADD KEY `idkecamatan` (`idkecamatan`),
  ADD KEY `idkelurahan` (`idkelurahan`);

--
-- Indexes for table `tabeltokocinderamata`
--
ALTER TABLE `tabeltokocinderamata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idkecamatan` (`idkecamatan`),
  ADD KEY `idkelurahan` (`idkelurahan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabeladmin`
--
ALTER TABLE `tabeladmin`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tabelbpp`
--
ALTER TABLE `tabelbpp`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tabelhotel`
--
ALTER TABLE `tabelhotel`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tabelkategori`
--
ALTER TABLE `tabelkategori`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tabelkecamatan`
--
ALTER TABLE `tabelkecamatan`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabelkelurahan`
--
ALTER TABLE `tabelkelurahan`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tabelobwis`
--
ALTER TABLE `tabelobwis`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `tabeltokocinderamata`
--
ALTER TABLE `tabeltokocinderamata`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabelbpp`
--
ALTER TABLE `tabelbpp`
  ADD CONSTRAINT `tabelbpp_ibfk_1` FOREIGN KEY (`idkecamatan`) REFERENCES `tabelkecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabelbpp_ibfk_2` FOREIGN KEY (`idkelurahan`) REFERENCES `tabelkelurahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabelhotel`
--
ALTER TABLE `tabelhotel`
  ADD CONSTRAINT `tabelhotel_ibfk_1` FOREIGN KEY (`idkecamatan`) REFERENCES `tabelkecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabelhotel_ibfk_2` FOREIGN KEY (`idkelurahan`) REFERENCES `tabelkelurahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabelkelurahan`
--
ALTER TABLE `tabelkelurahan`
  ADD CONSTRAINT `tabelkelurahan_ibfk_1` FOREIGN KEY (`idkecamatan`) REFERENCES `tabelkecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabelobwis`
--
ALTER TABLE `tabelobwis`
  ADD CONSTRAINT `tabelobwis_ibfk_1` FOREIGN KEY (`idkelurahan`) REFERENCES `tabelkelurahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabelobwis_ibfk_2` FOREIGN KEY (`idkecamatan`) REFERENCES `tabelkecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabelobwis_ibfk_3` FOREIGN KEY (`idkategori`) REFERENCES `tabelkategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabeltokocinderamata`
--
ALTER TABLE `tabeltokocinderamata`
  ADD CONSTRAINT `tabeltokocinderamata_ibfk_1` FOREIGN KEY (`idkecamatan`) REFERENCES `tabelkecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabeltokocinderamata_ibfk_2` FOREIGN KEY (`idkelurahan`) REFERENCES `tabelkelurahan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
