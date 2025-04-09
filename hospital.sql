-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 08:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'hamza', 'pak', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(100) NOT NULL,
  `student_id` int(150) NOT NULL,
  `curr_date` date NOT NULL,
  `attendance_month` varchar(150) NOT NULL,
  `attendance_year` int(150) NOT NULL,
  `attendance` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `student_id`, `curr_date`, `attendance_month`, `attendance_year`, `attendance`) VALUES
(477, 1, '2024-03-21', 'Mar', 2024, 'L'),
(478, 8, '2024-03-21', 'Mar', 2024, 'A'),
(479, 14, '2024-03-21', 'Mar', 2024, 'A'),
(480, 2, '2024-03-21', 'Mar', 2024, 'A'),
(481, 7, '2024-03-21', 'Mar', 2024, 'A'),
(482, 9, '2024-03-21', 'Mar', 2024, 'A'),
(483, 13, '2024-03-21', 'Mar', 2024, 'A'),
(484, 3, '2024-03-21', 'Mar', 2024, 'A'),
(485, 6, '2024-03-21', 'Mar', 2024, 'A'),
(486, 10, '2024-03-21', 'Mar', 2024, 'A'),
(487, 12, '2024-03-21', 'Mar', 2024, 'A'),
(488, 4, '2024-03-21', 'Mar', 2024, 'A'),
(489, 5, '2024-03-21', 'Mar', 2024, 'A'),
(490, 11, '2024-03-21', 'Mar', 2024, 'A'),
(491, 1, '2024-03-22', 'Mar', 2024, 'P'),
(492, 2, '2024-03-22', 'Mar', 2024, 'P'),
(493, 3, '2024-03-22', 'Mar', 2024, 'P'),
(494, 4, '2024-03-22', 'Mar', 2024, 'P'),
(495, 5, '2024-03-22', 'Mar', 2024, 'P'),
(496, 6, '2024-03-22', 'Mar', 2024, 'P'),
(497, 7, '2024-03-22', 'Mar', 2024, 'P'),
(498, 8, '2024-03-22', 'Mar', 2024, 'P'),
(499, 9, '2024-03-22', 'Mar', 2024, 'P'),
(500, 10, '2024-03-22', 'Mar', 2024, 'P'),
(501, 11, '2024-03-22', 'Mar', 2024, 'P'),
(502, 12, '2024-03-22', 'Mar', 2024, 'P'),
(503, 13, '2024-03-22', 'Mar', 2024, 'P'),
(504, 14, '2024-03-22', 'Mar', 2024, 'P'),
(505, 1, '2024-02-14', 'Feb', 2024, 'P'),
(506, 2, '2024-02-14', 'Feb', 2024, 'P'),
(507, 3, '2024-02-14', 'Feb', 2024, 'P'),
(508, 4, '2024-02-14', 'Feb', 2024, 'P'),
(509, 5, '2024-02-14', 'Feb', 2024, 'P'),
(510, 6, '2024-02-14', 'Feb', 2024, 'P'),
(511, 7, '2024-02-14', 'Feb', 2024, 'P'),
(512, 8, '2024-02-14', 'Feb', 2024, 'P'),
(513, 9, '2024-02-14', 'Feb', 2024, 'P'),
(514, 10, '2024-02-14', 'Feb', 2024, 'P'),
(515, 11, '2024-02-14', 'Feb', 2024, 'P'),
(516, 12, '2024-02-14', 'Feb', 2024, 'P'),
(517, 13, '2024-02-14', 'Feb', 2024, 'P'),
(518, 14, '2024-02-14', 'Feb', 2024, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_students`
--

CREATE TABLE `attendance_students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_students`
--

INSERT INTO `attendance_students` (`id`, `student_name`) VALUES
(1, 'Ali'),
(2, 'Nabeel'),
(3, 'Haseeb'),
(4, 'Arif'),
(5, 'Junaid'),
(6, 'Sohail'),
(7, 'Sallar'),
(8, 'Bilal'),
(9, 'Saad'),
(10, 'Duraid'),
(11, 'Taha'),
(12, 'Shoaib'),
(13, 'Testing'),
(14, 'hamza');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `spec` varchar(150) NOT NULL,
  `dept` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `role` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `spec`, `dept`, `password`, `date`, `role`) VALUES
(8, 'DR. Arfan', 'liver', 'heath', 'pak', '2024-03-11', 'Doctor'),
(9, 'DR. hamza', 'liver', 'health', 'pak', '2024-03-11', 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `on_hold`
--

CREATE TABLE `on_hold` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(13) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `expire_date` date NOT NULL,
  `qty` bigint(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `cost` bigint(11) NOT NULL,
  `amount` bigint(11) NOT NULL,
  `profit_amount` bigint(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `on_hold`
--

INSERT INTO `on_hold` (`id`, `invoice_number`, `medicine_name`, `category`, `expire_date`, `qty`, `type`, `cost`, `amount`, `profit_amount`, `date`) VALUES
(1, 'CA-9390009', 'Biogesic', 'Painkiller', '2020-03-31', 1, 'Stp', 9, 9, 4, '02/22/2022'),
(2, 'CA-2200239', 'Biogesic', 'Painkiller', '2020-03-31', 298, 'Stp', 9, 2682, 1192, '02/22/2022'),
(4, 'CA-2099902', 'Paracetemol', 'Painkiller', '2019-08-15', 1, 'Bot', 2, 2, 1, '02/27/2022'),
(7, 'CA-2922209', 'Paracetemol', 'Painkiller', '2019-08-15', 3, 'Bot', 2, 6, 3, '02/27/2022'),
(17, 'CA-3920020', 'Paracetemol', 'Painkiller', '2019-02-28', 10, 'Bot', 2, 20, 10, '02/28/2022'),
(18, 'CA-9009003', 'Paracetemol', 'Painkiller', '2019-02-28', 3, 'Bot', 2, 6, 3, '02/28/2022'),
(19, 'CA-9092090', 'Paracetemol', 'Painkiller', '2019-02-28', 2, 'Bot', 2, 4, 2, '02/28/2022'),
(20, 'CA-9220309', 'Paracetemol', 'Painkiller', '2019-02-28', 2, 'Bot', 2, 4, 2, '03/01/2022'),
(21, 'CA-0322209', 'Paracetemol', 'Painkiller', '2019-02-28', 93, 'Bot', 2, 186, 93, '03/01/2022'),
(22, 'CA-2990220', 'Paracetemol', 'Painkiller', '2019-02-28', 8, 'Bot', 2, 16, 8, '03/01/2022'),
(23, 'CA-0939993', 'Paracetemol', 'Painkiller', '2019-02-28', 1, 'Bot', 2, 2, 1, '03/02/2022'),
(24, 'CA-9900203', 'Biogesic', 'Painkiller', '2019-11-14', 1, 'Sachet', 9, 9, 4, '03/02/2022'),
(25, 'CA-9900203', 'Paracetemol', 'Painkiller', '2019-09-19', 2, 'Stp', 2, 4, 2, '03/02/2022'),
(26, 'CA-9090000', 'Biogesic', 'Painkiller', '2019-11-14', 2, 'Sachet', 2, 4, 2, '03/02/2022'),
(27, 'CA-2233020', 'Biogesic', 'Painkiller', '2020-03-13', 5, 'Unit', 9, 45, 20, '03/02/2022'),
(29, 'CA-9292200', 'Biogesic', 'Painkiller', '2019-04-25', 1, 'Bot', 9, 9, 4, '03/02/2022'),
(30, 'CA-3009023', 'Paracetemol', 'Painkiller', '2019-08-14', 3, 'Unit', 2, 6, 3, '03/02/2022'),
(35, 'CA-0900090', 'Paracetemol', 'Painkiller', '2019-08-14', 2, 'Bot', 2, 4, 2, '03/02/2019'),
(37, 'CA-2099202', 'Paracetemol', 'painkiller', '2011-12-19', 1, 'Bot', 2, 2, 1, '03/04/2022'),
(51, 'CA-9292203', 'Paracetemol', 'Painkiller', '2019-08-03', 3, 'Stp', 2, 6, 3, '03/05/2022'),
(61, 'CA-0000032', 'Paracetemol', 'Painkiller', '2019-10-01', 5, 'Bot', 2, 10, 5, '03/05/2022'),
(62, 'CA-0000032', 'Biogesic', 'Painkiller', '2020-03-06', 4, 'Bot', 9, 36, 20, '03/05/2022'),
(63, 'CA-2909290', 'Paracetemol', 'Painkiller', '2019-10-01', 10, 'Bot', 2, 20, 10, '03/05/2022'),
(64, 'CA-2929293', 'Demo Med', 'Demo Category', '2023-07-06', 12, 'Tab', 18, 216, 96, '08/06/2022'),
(66, 'CA-0020090', 'Doxycycline', 'Antibiotics', '2025-08-09', 5, 'Tab', 4, 20, 10, '08/13/2022'),
(67, 'CA-0290929', 'Vitamin B12', 'Vitamins', '2026-11-10', 3, 'Tab', 19, 57, 27, '08/13/2022'),
(68, 'CA-9303020', 'Deplin', 'Vitamins', '2026-09-14', 6, 'Sachet', 141, 846, 168, '08/13/2022'),
(73, 'CA-2920002', 'Fluconazole', 'Antifungals', '2026-08-13', 3, 'Tab', 29, 87, 21, '08/13/2022'),
(74, 'CA-3020292', 'Estazolam', 'Sedatives', '2026-08-26', 12, 'Bot', 54, 648, 156, '08/13/2022'),
(76, 'CA-0092000', 'Econazole', 'Antifungals', '2027-11-17', 8, 'Sachet', 24, 192, 56, '08/13/2022'),
(78, 'CA-9092029', 'Vitamin B12', 'Vitamins', '2026-11-10', 7, 'Tab', 19, 133, 63, '08/13/2022'),
(79, 'CA-9092029', 'Econazole', 'Antifungals', '2027-11-17', 2, 'Sachet', 24, 48, 14, '08/13/2022'),
(80, 'CA-0009392', 'Fluconazole', 'Antifungals', '2026-08-13', 3, 'Tab', 29, 87, 21, '08/13/2022'),
(81, 'CA-2020390', 'Altretamine', 'Antineoplastics', '2026-08-12', 9, 'Sachet', 87, 783, 126, '08/13/2022'),
(82, 'CA-2030293', 'Mucinex', 'Expectorant', '2026-08-25', 14, 'Bot', 37, 518, 112, '08/13/2022'),
(83, 'CA-9090029', 'Methisazone', 'Antiviral', '2026-08-03', 4, 'Tab', 12, 48, 16, '08/13/2022'),
(84, 'CA-9090029', 'Alprazolam', 'Tranquilizer', '2026-10-06', 5, 'Tab', 19, 95, 45, '08/13/2022'),
(85, 'CA-3909093', 'Fluconazole', 'Antifungals', '2026-08-13', 5, 'Tab', 29, 145, 35, '08/13/2022'),
(100, 'CA-2092292', 'Alprazolam', 'Tranquilizer', '2026-10-06', 4, 'Tab', 19, 76, 36, '03/09/2024'),
(102, 'CA-0030020', 'Vitamin B12', 'Vitamins', '2026-11-10', 10, 'Tab', 19, 190, 90, '03/11/2024'),
(111, 'CA-9900220', 'Alprazolam', 'Tranquilizer', '2026-10-06', 1, 'Tab', 19, 19, 9, '03/12/2024'),
(113, 'CA-0920092', 'Paracetemol', 'Painkiller', '2022-10-01', 5, 'Bot', 2, 10, 5, '03/13/2024'),
(142, 'CA-0900929', 'Econazole', 'Antifungals', '2027-11-17', 15, 'Sachet', 24, 360, 105, '03/13/2024'),
(143, 'CA-9029000', 'Econazole', 'Antifungals', '2027-11-17', 180, 'Sachet', 24, 4320, 1260, '03/13/2024'),
(146, 'CA-0332230', 'Econazole', 'Antifungals', '2027-11-17', 5, 'Sachet', 24, 120, 35, '03/13/2024'),
(147, 'CA-9029992', 'Econazole', 'Antifungals', '2027-11-17', 5, 'Sachet', 24, 120, 35, '03/13/2024'),
(148, 'CA-9029992', 'Econazole', 'Antifungals', '2027-11-17', 4, 'Sachet', 24, 96, 28, '03/13/2024'),
(149, 'CA-3300092', 'Econazole', 'Antifungals', '2027-11-17', 9, 'Sachet', 24, 216, 63, '03/13/2024'),
(152, 'CA-2039039', 'Econazole', 'Antifungals', '2027-11-17', 5, 'Sachet', 24, 120, 35, '03/14/2024'),
(153, 'CA-2999900', 'Econazole', 'Antifungals', '2027-11-17', 5, 'Sachet', 24, 120, 35, '03/14/2024'),
(154, 'CA-0909099', 'Econazole', 'Antifungals', '2027-11-17', 5, 'Sachet', 24, 120, 35, '03/14/2024'),
(156, 'CA-2002399', 'Altretamine', 'Antineoplastics', '2026-08-12', 2, 'Bot', 87, 174, 28, '03/14/2024'),
(158, '$invoice_numb', 'Altretamine', 'Antineoplastics', '2026-08-12', 1, 'Bot', 87, 87, 14, '03/18/2024'),
(159, '$invoice_numb', 'Fluconazole', 'Antifungals', '2026-08-13', 5, 'Tab', 29, 145, 35, '03/18/2024'),
(160, '$invoice_numb', 'Econazole', 'Antifungals', '2027-11-17', 1, 'Sachet', 24, 24, 7, '03/18/2024'),
(161, '$invoice_numb', 'Fluconazole', 'Antifungals', '2026-08-13', 5, 'Tab', 29, 145, 35, '03/18/2024'),
(162, '$invoice_numb', 'Altretamine', 'Antineoplastics', '2026-08-12', 1, 'Bot', 87, 87, 14, '03/18/2024'),
(163, '$invoice_numb', 'Altretamine', 'Antineoplastics', '2026-08-12', 1, 'Bot', 87, 87, 14, '03/18/2024'),
(165, '', 'Biogesic', 'Painkiller', '2023-03-06', 5, 'Bot', 9, 45, 20, '03/18/2024'),
(167, 'CA-3022902', 'Biogesic', 'Painkiller', '2023-03-06', 4, 'Bot', 9, 36, 16, '03/18/2024'),
(168, 'CA-2092922', 'Econazole', 'Antifungals', '2027-11-17', 1, 'Sachet', 24, 24, 7, '03/18/2024');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `dept` varchar(150) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `dept` varchar(150) NOT NULL,
  `role` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`id`, `name`, `dept`, `role`, `password`, `date`) VALUES
(19, 'hamza', 'liver', 'pharmacist', 'pak', '2024-03-09');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `dep` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`id`, `name`, `dep`, `password`, `role`, `date`) VALUES
(15, 'hamza', 'liver', 'pak', 'Recptionist', '2024-03-15'),
(16, 'asgar', 'liver', 'pak', 'Recptionist', '2024-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `invoice_number` varchar(13) NOT NULL,
  `medicines` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `total_amount` bigint(11) NOT NULL,
  `total_profit` bigint(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `invoice_number`, `medicines`, `quantity`, `total_amount`, `total_profit`, `Date`) VALUES
(1, 'CA-9390009', 'Biogesic', '1(Stp)', 9, 4, '2022-07-06'),
(2, 'CA-0900090', 'Biogesic', '2(Stp)', 18, 8, '2022-07-06'),
(3, 'CA-2099902', 'Paracetemol', '1(Bot)', 2, 1, '2022-07-06'),
(4, 'CA-2922209', 'Paracetemol', '3(Bot)', 6, 3, '2022-07-07'),
(5, 'CA-3920020', 'Paracetemol', '10(Bot)', 20, 10, '2022-07-09'),
(6, 'CA-9009003', 'Paracetemol', '3(Bot)', 6, 3, '2022-07-09'),
(7, 'CA-9220309', 'Paracetemol', '2(Bot)', 4, 2, '2022-07-18'),
(8, 'CA-0322209', 'Paracetemol', '93(Bot)', 186, 93, '2022-07-19'),
(9, 'CA-0939993', 'Paracetemol', '1(Bot)', 2, 1, '2022-07-20'),
(10, 'CA-9900203', 'Biogesic,Paracetemol', '1(Sachet),2(Stp)', 13, 6, '2022-07-20'),
(11, 'CA-2233020', 'Biogesic', '5(Unit)', 45, 20, '2022-07-20'),
(12, 'CA-9292200', 'Biogesic', '1(Bot)', 9, 4, '2022-07-27'),
(13, 'CA-2099202', 'Paracetemol', '1(Bot)', 2, 1, '2022-07-27'),
(14, 'CA-9292203', 'Paracetemol', '3(Stp)', 6, 3, '2022-07-27'),
(15, 'CA-0000032', 'Paracetemol,Biogesic', '5(Bot),4(Bot)', 46, 21, '2022-07-27'),
(16, 'CA-2929293', 'Demo Med', '12(Tab)', 216, 96, '2022-08-06'),
(17, 'CA-0020090', 'Doxycycline', '5(Tab)', 20, 10, '2022-08-13'),
(18, 'CA-0290929', 'Vitamin B12', '3(Tab)', 57, 27, '2022-08-13'),
(19, 'CA-9303020', 'Deplin', '6(Sachet)', 846, 168, '2022-08-13'),
(20, 'CA-2920002', 'Fluconazole', '3(Tab)', 87, 21, '2022-08-13'),
(21, 'CA-3020292', 'Estazolam', '12(Bot)', 648, 156, '2022-08-13'),
(22, 'CA-0092000', 'Econazole', '8(Sachet)', 192, 56, '2022-08-13'),
(23, 'CA-9092029', 'Vitamin B12,Econazole', '7(Tab),2(Sachet)', 181, 77, '2022-08-13'),
(24, 'CA-0009392', 'Fluconazole', '3(Tab)', 87, 21, '2022-08-13'),
(25, 'CA-2020390', 'Altretamine', '9(Sachet)', 783, 126, '2022-08-13'),
(26, 'CA-2030293', 'Mucinex', '14(Bot)', 518, 112, '2022-08-13'),
(27, 'CA-9090029', 'Methisazone,Alprazolam', '4(Tab),5(Tab)', 143, 61, '2022-08-13'),
(28, 'CA-3909093', 'Fluconazole', '5(Tab)', 145, 35, '2022-08-13'),
(29, 'CA-2039039', 'Econazole', '5(Sachet)', 120, 35, '2024-03-14'),
(30, 'CA-2999900', 'Econazole', '5(Sachet)', 120, 35, '2024-03-14'),
(31, 'CA-0909099', 'Econazole', '5(Sachet)', 120, 35, '2024-03-14'),
(32, 'CA-2002399', 'Estazolam', '4(Bot)', 216, 52, '2024-03-14'),
(33, 'CA-2002399', 'Altretamine', '2(Bot)', 174, 28, '2024-03-14'),
(34, 'CA-2000002', 'Altretamine', '1(Bot)', 87, 14, '2024-03-15'),
(35, '', 'Biogesic', '5(Bot)', 45, 20, '2024-03-18'),
(36, 'CA-3022902', 'Biogesic', '4(Bot)', 36, 16, '2024-03-18'),
(37, 'CA-2092922', 'Econazole', '1(Sachet)', 24, 7, '2024-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(100) NOT NULL,
  `bar_code` varchar(255) NOT NULL,
  `medicine_name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `used_quantity` int(100) NOT NULL,
  `remain_quantity` int(100) NOT NULL,
  `act_remain_quantity` int(10) NOT NULL,
  `register_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `company` varchar(100) NOT NULL,
  `sell_type` varchar(100) NOT NULL,
  `actual_price` int(100) NOT NULL,
  `selling_price` int(100) NOT NULL,
  `profit_price` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `bar_code`, `medicine_name`, `category`, `quantity`, `used_quantity`, `remain_quantity`, `act_remain_quantity`, `register_date`, `expire_date`, `company`, `sell_type`, `actual_price`, `selling_price`, `profit_price`, `status`) VALUES
(21, '1112', 'Paracetemol', 'Painkiller', 20, 23, -3, 2, '2020-03-04', '2022-10-01', 'none', 'Bot', 1, 2, '1(100%)', 'Unavailable'),
(23, '1121', 'Biogesic', 'Painkiller', 50, 13, 37, 37, '2020-03-05', '2023-03-06', 'none', 'Bot', 5, 9, '4(80%)', 'Available'),
(24, '101', 'Demo Med', 'Demo Category', 100, 112, -12, 88, '2022-08-06', '2022-08-17', 'none', 'Tab', 10, 18, '8(80%)', 'Unavailable'),
(25, '1001', 'Doxycycline', 'Antibiotics', 203, 205, -2, 198, '2022-08-11', '2025-08-09', 'none', 'Tab', 2, 4, '2(100%)', 'Unavailable'),
(26, '1003', 'Methisazone', 'Antiviral', 300, 304, -4, 296, '2022-08-13', '2026-08-03', 'none', 'Tab', 8, 12, '4(50%)', 'Unavailable'),
(27, '1020', 'Deplin', 'Vitamins', 129, 206, -77, 123, '2022-08-10', '2026-09-14', 'none', 'Sachet', 113, 141, '28(25%)', 'Unavailable'),
(28, '1169', 'Vitamin B12', 'Vitamins', 300, 288, 12, 12, '2022-08-12', '2026-11-10', 'none', 'Bot', 10, 19, '9(90%)', 'Available'),
(29, '2220', 'Altretamine', 'Antineoplastics', 216, 214, 2, 4, '2022-08-13', '2026-08-12', 'none', 'Bot', 73, 87, '14(19%)', 'Available'),
(30, '2022', 'Econazole', 'Antifungals', 247, 245, 2, 2, '2022-08-13', '2027-11-17', 'none', 'Sachet', 17, 24, '7(41%)', 'Available'),
(31, '1779', 'Fluconazole', 'Antifungals', 155, 21, 134, 144, '2022-08-13', '2026-08-13', 'none', 'Tab', 22, 29, '7(32%)', 'Available'),
(32, '1906', 'Mucinex', 'Expectorant', 109, 5, 104, 95, '2022-08-13', '2026-08-25', 'none', 'Bot', 29, 37, '8(28%)', 'Available'),
(33, '2779', 'Estazolam', 'Sedatives', 366, 12, 354, 350, '2022-08-13', '2026-08-26', 'none', 'Bot', 41, 54, '13(32%)', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `father_name`, `gender`, `email_address`) VALUES
(1, 'Arif', 'Ahmed', 'Male', 'arif@live.com'),
(2, 'Ali', 'Asghar', 'Male', 'ali@live.com'),
(3, 'Saima', 'Khan', 'Female', 'fatima@live.com'),
(4, 'Shoaib', 'Akbar', 'Male', 'shoaib@live.com'),
(5, 'Haseeb', 'Ali', 'Male', 'haseeb@live.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`) VALUES
(1, 'admin', '6812f136d636e737248d365016f8cfd5139e387c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_students`
--
ALTER TABLE `attendance_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `on_hold`
--
ALTER TABLE `on_hold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=519;

--
-- AUTO_INCREMENT for table `attendance_students`
--
ALTER TABLE `attendance_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `on_hold`
--
ALTER TABLE `on_hold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
