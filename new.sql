-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 10:24 AM
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
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admitted_patients`
--

CREATE TABLE `admitted_patients` (
  `id` int(10) NOT NULL,
  `ward_name` varchar(255) NOT NULL,
  `diagonisis` varchar(255) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `patient_id` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `patient_number` varchar(200) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `patient_condation` varchar(200) NOT NULL,
  `DOA` date NOT NULL DEFAULT current_timestamp(),
  `DOD` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admitted_patients`
--

INSERT INTO `admitted_patients` (`id`, `ward_name`, `diagonisis`, `patient_no`, `patient_id`, `status`, `patient_number`, `patient_name`, `patient_condation`, `DOA`, `DOD`) VALUES
(25, 'Ward D', '', 'Invoice No-  0230333', '52', '1', '1', 'Sample Patient 2', '', '2021-06-27', ''),
(26, 'Ward B', '', 'Invoice No-  33933232', '53', '1', '1', 'jane doe', '', '2021-06-27', '');

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `cashier_id` tinyint(5) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `staff_id` varchar(10) NOT NULL,
  `postal_address` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashier_id`, `first_name`, `last_name`, `staff_id`, `postal_address`, `phone`, `email`, `username`, `password`, `date`) VALUES
(6, 'Will', 'Williams', 'C001', 'AvenueSt', '8520006970', 'willams@gmail.com', 'cashier', 'password', '2018-04-14 11:56:30');

-- --------------------------------------------------------

--
-- Table structure for table `damaged`
--

CREATE TABLE `damaged` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `damaged`
--

INSERT INTO `damaged` (`id`, `name`, `price`, `amount`, `capacity`) VALUES
(2, 'Piliton', '50', '100', '2'),
(3, 'Cetrizin', '25', '125', '5'),
(4, 'Brufen', '30', '60', '2'),
(5, 'Piliton', '50', '50', '1'),
(6, 'Jadell', '500', '2500', '5');

-- --------------------------------------------------------

--
-- Table structure for table `diagnosis`
--

CREATE TABLE `diagnosis` (
  `patient_no` varchar(200) NOT NULL,
  `id` int(10) NOT NULL,
  `diagnosis_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnosis`
--

INSERT INTO `diagnosis` (`patient_no`, `id`, `diagnosis_name`, `description`) VALUES
('Invoice No-  55336060', 27, 'Malaria', 'test'),
('Invoice No-  3823030', 28, 'Malaria', 'test description'),
('Invoice No-  3823030', 29, 'Cold', 'description test'),
('Invoice No-  0230333', 30, 'Cold', 'hfdg'),
('Invoice No-  33933232', 31, 'Cold', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `diagonisis_list`
--

CREATE TABLE `diagonisis_list` (
  `id` int(10) NOT NULL,
  `diagonisis_name` varchar(255) NOT NULL,
  `symptoms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagonisis_list`
--

INSERT INTO `diagonisis_list` (`id`, `diagonisis_name`, `symptoms`) VALUES
(1, 'Malaria', 'Fever'),
(2, 'Cold', 'fever'),
(3, 'Cold', 'Head-ache');

-- --------------------------------------------------------

--
-- Table structure for table `dicharge_process`
--

CREATE TABLE `dicharge_process` (
  `id` int(20) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_id` tinyint(5) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `staff_id` varchar(10) NOT NULL,
  `postal_address` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_id`, `first_name`, `last_name`, `staff_id`, `postal_address`, `phone`, `email`, `username`, `password`, `date`) VALUES
(55, 'Johnonn', 'Hemsorthn', 'PMS35', 'Micikann', '9978541230', 'fumsjo@gmail.co', 'Doctor', 'password', '2018-04-14 12:35:25'),
(60, 'man', 'mane', 'pm13', 'harar', '0926822454', 'mastualem@gmail.com', 'haha', '12314', '2022-05-02 11:09:35'),
(62, 'misikir', 'alex', 'pm22', 'jk', '0926822454', 'mastualem@gmail.com', 'lolol', 'lolol123', '2022-05-02 23:10:30'),
(63, 'john', 'oyo', 'pm54', 'wal', '0926822454', 'mastualem@gmail.com', 'wal', 'wal123', '2022-05-03 01:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `expired_medince`
--

CREATE TABLE `expired_medince` (
  `id` int(10) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `date_expired` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expired_medince`
--

INSERT INTO `expired_medince` (`id`, `medicine_name`, `date_expired`, `amount`, `capacity`) VALUES
(1, 'cetcine ', '2021-12-01', '50', '5'),
(2, 'ciprofloxacin ', '2022-12-31', '300', '8'),
(14, 'll ', '2022-04-13', '12500', '250');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `opening_date` varchar(255) NOT NULL,
  `closing_balance` varchar(255) NOT NULL,
  `opening_balance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `address`, `phone_no`, `email`, `opening_date`, `closing_balance`, `opening_balance`) VALUES
(5, 'gudd', 'bjd', 'nkn', 'kjnksd@hbd.com', '2022-04-02', '2022-04-07', '1');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(10) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `qty_item` varchar(255) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory_tests`
--

CREATE TABLE `laboratory_tests` (
  `id` int(10) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laboratory_tests`
--

INSERT INTO `laboratory_tests` (`id`, `test_name`, `price`) VALUES
(1, 'CT-SCAN', '1000'),
(2, 'New Sample Test name', '000'),
(3, 'Malaria', '250');

-- --------------------------------------------------------

--
-- Table structure for table `lab_results`
--

CREATE TABLE `lab_results` (
  `id` int(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `test_name` varchar(200) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lab_test`
--

CREATE TABLE `lab_test` (
  `id` int(10) NOT NULL,
  `description` longtext NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` tinyint(5) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `staff_id` varchar(10) NOT NULL,
  `postal_address` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `first_name`, `last_name`, `staff_id`, `postal_address`, `phone`, `email`, `username`, `password`, `date`) VALUES
(4, 'misikir', 'alex', 'pm12', 'jinka', '0926822454', 'mastualem@gmail.com', 'lish', 'lis123', '2022-05-03 08:08:11'),
(5, 'Albert1', 'Dunford', 'pm125', 'none', '8520000010', 'mastualem@gmail.com', 'haha', 'haha123', '2022-05-19 03:15:12'),
(6, 'Albert', 'Dunford', 'pm17', 'none', '8520000010', 'mastualem@gmail.com', 'haha11', 'haha12345', '2022-05-19 04:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(10) NOT NULL,
  `patient_no` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT '0',
  `patient_condation` varchar(200) NOT NULL,
  `admission_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `patient_no`, `patient_name`, `location`, `dob`, `status`, `patient_condation`, `admission_status`) VALUES
(55, 'Invoice No-  242222', 'John Doe', 'Kenya', '2021-06-02', '0', '', ''),
(56, 'Invoice No-  372057', 'Sample Patient 2', 'Kenya', '2021-06-23', '1', '', ''),
(57, 'Invoice No-  2802732', 'jane doe', 'Kenya', '2021-05-31', '1', '', ''),
(58, 'Invoice No-  2020303', 'you', 'rr', '2022-04-05', '1', '', ''),
(59, 'Invoice No-  2352003', 'new', 'g', '2022-04-20', '1', '', ''),
(60, 'Invoice No-  032539', 'man', 'l', '2022-04-23', '1', '', ''),
(61, 'Invoice No-  723322', 'man', 'as', '2022-04-26', '1', '', ''),
(62, 'Invoice No-  38230', 'named', 'mmmm', '2022-04-27', '1', '', ''),
(63, 'Invoice No-  20240', 'neww', 'mine', '2022-04-29', '1', '', ''),
(64, 'Invoice No-  3022', 'msikir', 'here', '2022-04-13', '1', '', ''),
(65, 'Invoice No-  3022', 'msikir', 'here', '2022-04-13', '1', '', ''),
(66, 'Invoice No-  0222883', '', '', '0000-00-00', '1', '', ''),
(67, 'Invoice No-  32923222', 'kaka', 'llo', '2022-04-15', '1', '', ''),
(68, 'Invoice No-  07232', 'kj', 'here', '2022-04-27', '1', '', ''),
(69, 'Invoice No-  323430', 'msikir', 'asella', '2022-05-07', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `pharmacist_id` tinyint(5) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `staff_id` varchar(10) NOT NULL,
  `postal_address` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`pharmacist_id`, `first_name`, `last_name`, `staff_id`, `postal_address`, `phone`, `email`, `username`, `password`, `date`) VALUES
(24, 'Johnson', 'Hemsworth', 'PMS24', 'Michikan', '7896541230', 'hemsjo@gmail.co', 'pharmacist', 'password', '2018-04-14 12:35:25'),
(25, 'Narco', 'Rodriguez', 'PMS52', 'Michikan', '9754448500', 'narcor@gmail.c', 'narco', 'pass', '2018-04-14 12:39:40'),
(26, 'Tom', 'Miller', 'PMS29', 'Durham', '1257888880', 'millertom@gmail.com', 'tom', 't0m@#$%', '2018-04-14 12:40:33'),
(27, 'Terri', 'Silva', 'PMS00', 'Ladora', '7894561320', 'ladorateri@gmail.', 'terri', 'teri', '2018-04-14 12:45:07'),
(28, 'Jeff', 'Montano', 'PMS28', 'Fullerton', '1378554540', 'jeffff@gmail.com', 'jeffm', 'pass@w', '2018-04-14 12:45:56'),
(29, 'Andy', 'Thompson', 'PMS69', 'Newark', '5210000069', 'andypandy@gmail.com', 'andy', 'thompsonpw', '2018-04-14 12:46:52'),
(30, 'Sophie', 'Turner', 'PMS16', 'Ladora', '6969696969', 'sophie@gmail.com', 'sophie', 'password', '2018-04-14 12:48:41'),
(31, 'Annie', 'Franklin', 'PMS84', 'Oregoon', '2478881000', 'annief@gmail.com', 'annie', 'pass', '2018-04-14 12:49:52'),
(32, 'Rosa', 'Miers', 'PMS96', 'Michikan', '6545552220', 'rosa96@gmail.com', 'rosa', 'r0s@', '2018-04-14 12:51:44'),
(33, 'Hannah', 'M', 'PMS02', 'Kentucky', '7894561250', 'hannaho@gmail.com', 'hannah', 'p@$$w0rd', '2018-04-14 12:53:05'),
(34, 'John', 'Stuart', 'PMS39', 'Chariton', '4582220010', 'john@gmail.com', 'john', 'password', '2018-04-14 17:08:51');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_stock`
--

CREATE TABLE `pharmacy_stock` (
  `id` int(10) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `pharmacy_Qty` varchar(255) NOT NULL DEFAULT '0',
  `expiry_date` date NOT NULL DEFAULT current_timestamp(),
  `amount` varchar(255) NOT NULL,
  `stock_out` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL DEFAULT '0',
  `capacity` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `sale_date` varchar(200) NOT NULL,
  `dosage_sold` varchar(255) NOT NULL,
  `dosage` varchar(255) NOT NULL,
  `price_dosage` varchar(255) NOT NULL DEFAULT '0',
  `app` varchar(255) NOT NULL,
  `half_dosage_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy_stock`
--

INSERT INTO `pharmacy_stock` (`id`, `medicine_name`, `pharmacy_Qty`, `expiry_date`, `amount`, `stock_out`, `price`, `capacity`, `type`, `sale_date`, `dosage_sold`, `dosage`, `price_dosage`, `app`, `half_dosage_price`) VALUES
(1, 'Brufen', '12', '2023-06-15', '', '', '30', '10', 'tablet', '', '', '', '', '', 0),
(2, 'Piliton', '8', '2023-06-15', '', '', '50', '50mg', 'tablet', '', '', '', '', '', 0),
(3, 'Cetrizin', '10', '0000-00-00', '', '', '25', '50mg', 'tablet', '', '', '', '', '', 0),
(4, 'Jadell', '6', '2023-10-17', '', '', '500', '60mg', 'tablet', '', '', '', '', '', 0),
(5, 'Piliton', '40', '2023-10-18', '', '', '', '60ml', 'Tablet', '', 'Yes', '10', '100', '100', 50),
(6, 'Paracetamal', '0', '2027-02-27', '', '', '100', '50mg', 'Tablet', '', '', '', '', '', 0),
(19, 'hello', '20', '2022-05-06', '', '', '30', '250', 'tablet', '', '', '', '', '', 0),
(20, 'amc', '5', '2022-05-06', '', '', '10', '55', 'tablet', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_stock_items`
--

CREATE TABLE `pharmacy_stock_items` (
  `id` int(10) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `expiry_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy_stock_items`
--

INSERT INTO `pharmacy_stock_items` (`id`, `item_name`, `capacity`, `price`, `expiry_date`) VALUES
(3, 'needles', '34', '500', '2021-05-25 13:21:17.445208'),
(4, 'Catheter', '', '', '2021-05-26 17:14:07.607543'),
(5, 'test', '', '', '2021-05-29 18:03:42.684105'),
(6, '', '', '', '2021-05-29 18:06:06.156792'),
(7, 'podi', '', '', '2021-05-29 18:28:48.730678'),
(8, 'pop', '', '', '2022-04-15 07:13:15.597079'),
(9, 'pip', '', '', '2022-04-15 07:23:54.174051'),
(10, 'youra', '', '', '2022-04-15 07:50:14.498399');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `purchase_id` int(10) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `supplier` varchar(244) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT '0',
  `purchase_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`purchase_id`, `medicine_name`, `price`, `qty`, `supplier`, `status`, `purchase_no`) VALUES
(3, 'Panadol', '15', '2', 'supplier', '1', 'Purchase No-  53020');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `sales_date` date NOT NULL DEFAULT current_timestamp(),
  `customer` varchar(100) NOT NULL,
  `medicine_name` varchar(100) NOT NULL,
  `price` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `payment_change` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `time` time(6) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `invoice`, `sales_date`, `customer`, `medicine_name`, `price`, `qty`, `payment`, `payment_change`, `total`, `time`) VALUES
(78, 'Invoice No-  0230333', '2021-06-29', 'Sample Patient 2', 'Piliton ', '50', '1', '1500', '380', '1120', '21:23:47.000000'),
(90, 'Invoice No-  0230333', '2021-06-29', 'Sample Patient 2', 'Piliton ', '50', '1', '1500', '380', '1120', '21:54:38.000000'),
(91, 'Invoice No-  0230333', '2021-06-29', 'Sample Patient 2', 'Piliton ', '50', '1', '1500', '380', '1120', '21:54:38.000000'),
(92, 'Invoice No-  0230333', '2021-06-29', 'Sample Patient 2', 'Piliton ', '50', '1', '1500', '380', '1120', '21:54:38.000000'),
(153, 'Invoice No-  20240', '2022-04-21', 'neww', 'Piliton', '100', '1', '110', '10', '100', '05:44:41.000000'),
(154, 'Invoice No-  2802732', '2022-04-27', 'jane doe', 'Brufen', '30', '5', '1000', '0', '1000', '01:46:26.000000'),
(155, 'Invoice No-  2802732', '2022-04-27', 'jane doe', 'Brufen', '30', '5', '1000', '0', '1000', '01:46:27.000000'),
(156, 'Invoice No-  2802732', '2022-04-27', 'jane doe', 'Piliton', '100', '3', '1000', '0', '1000', '01:46:27.000000'),
(157, 'Invoice No-  2802732', '2022-04-27', 'jane doe', 'Piliton', '100', '3', '1000', '0', '1000', '01:46:27.000000'),
(158, 'Invoice No-  2802732', '2022-04-27', 'jane doe', 'Piliton', '100', '1', '1000', '0', '1000', '01:46:27.000000'),
(159, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '100', '1', '500', '0', '500', '08:11:51.000000'),
(160, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:11:51.000000'),
(161, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '100', '1', '500', '0', '500', '08:18:37.000000'),
(162, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:18:37.000000'),
(163, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:18:37.000000'),
(164, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '100', '1', '500', '0', '500', '08:20:19.000000'),
(165, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:20:19.000000'),
(166, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:20:19.000000'),
(167, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:20:19.000000'),
(168, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '100', '1', '500', '0', '500', '08:23:42.000000'),
(169, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:23:42.000000'),
(170, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:23:42.000000'),
(171, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:23:42.000000'),
(172, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:23:42.000000'),
(173, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '100', '1', '500', '0', '500', '08:24:27.000000'),
(174, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:24:27.000000'),
(175, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:24:27.000000'),
(176, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:24:27.000000'),
(177, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:24:27.000000'),
(178, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:24:27.000000'),
(179, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '100', '1', '500', '0', '500', '08:30:47.000000'),
(180, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:30:47.000000'),
(181, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:30:47.000000'),
(182, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:30:47.000000'),
(183, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:30:47.000000'),
(184, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:30:47.000000'),
(185, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:30:47.000000'),
(186, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '100', '1', '500', '0', '500', '08:39:26.000000'),
(187, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:39:26.000000'),
(188, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:39:26.000000'),
(189, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:39:26.000000'),
(190, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:39:26.000000'),
(191, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:39:26.000000'),
(192, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:39:26.000000'),
(193, 'Invoice No-  2352003', '2022-04-27', 'new', 'Piliton', '50', '1', '500', '0', '500', '08:39:26.000000'),
(194, 'Invoice No-  07232', '2022-04-27', 'kj', 'Piliton', '100', '1', '690', '690', '0', '08:47:11.000000'),
(195, 'Invoice No-  07232', '2022-04-27', 'kj', 'Piliton', '100', '1', '690', '690', '0', '08:59:37.000000'),
(196, 'Invoice No-  07232', '2022-04-27', 'kj', 'Piliton', '100', '1', '690', '690', '0', '08:59:37.000000'),
(197, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Piliton ', '100', '1', '', '', '', '01:12:01.000000'),
(198, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Piliton ', '100', '1', '', '', '', '01:12:01.000000'),
(199, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Piliton ', '100', '1', '', '', '', '01:12:01.000000'),
(200, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Brufen ', '30', '1', '', '', '', '01:12:01.000000'),
(201, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Piliton ', '50', '1', '', '', '', '01:12:02.000000'),
(202, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Piliton ', '50', '1', '', '', '', '01:12:02.000000'),
(203, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Brufen ', '30', '3', '', '', '', '01:12:02.000000'),
(204, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Piliton', '50', '2', '', '', '', '01:12:02.000000'),
(205, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Piliton', '50', '5', '', '', '', '01:12:02.000000'),
(206, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Piliton', '100', '2', '', '', '', '01:12:02.000000'),
(207, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Brufen', '30', '2', '', '', '', '01:12:02.000000'),
(208, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Piliton', '50', '2', '', '', '', '01:12:02.000000'),
(209, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Piliton', '50', '2', '', '', '', '01:12:02.000000'),
(210, 'Invoice No-  242222', '2022-04-28', 'John Doe', 'Piliton', '100', '1', '', '', '', '01:12:02.000000'),
(211, 'Invoice No-  2352003', '2022-04-28', 'new', 'Piliton', '100', '1', '500', '0', '500', '01:18:41.000000'),
(212, 'Invoice No-  2352003', '2022-04-28', 'new', 'Piliton', '50', '1', '500', '0', '500', '01:18:41.000000'),
(213, 'Invoice No-  2352003', '2022-04-28', 'new', 'Piliton', '50', '1', '500', '0', '500', '01:18:41.000000'),
(214, 'Invoice No-  2352003', '2022-04-28', 'new', 'Piliton', '50', '1', '500', '0', '500', '01:18:41.000000'),
(215, 'Invoice No-  2352003', '2022-04-28', 'new', 'Piliton', '50', '1', '500', '0', '500', '01:18:41.000000'),
(216, 'Invoice No-  2352003', '2022-04-28', 'new', 'Piliton', '50', '1', '500', '0', '500', '01:18:41.000000'),
(217, 'Invoice No-  2352003', '2022-04-28', 'new', 'Piliton', '50', '1', '500', '0', '500', '01:18:41.000000'),
(218, 'Invoice No-  2352003', '2022-04-28', 'new', 'Piliton', '50', '1', '500', '0', '500', '01:18:41.000000'),
(219, 'Invoice No-  2352003', '2022-04-28', 'new', 'Piliton', '50', '1', '500', '0', '500', '01:18:41.000000'),
(220, 'Invoice No-  07232', '2022-04-29', 'kj', 'Piliton', '100', '1', '690', '690', '0', '11:39:43.000000'),
(221, 'Invoice No-  07232', '2022-04-29', 'kj', 'Piliton', '100', '1', '690', '690', '0', '11:39:43.000000'),
(222, 'Invoice No-  07232', '2022-04-29', 'kj', 'Piliton', '100', '1', '690', '690', '0', '11:39:43.000000'),
(223, 'Invoice No-  323430', '2022-05-07', 'msikir', 'Brufen', '30', '1', '50', '20', '30', '00:27:55.000000');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `transaction_id` int(10) NOT NULL,
  `invoice` varchar(255) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `admission_status` varchar(255) NOT NULL DEFAULT '0',
  `date` date DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT '0',
  `patient_no` varchar(200) NOT NULL,
  `medicine_name_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`transaction_id`, `invoice`, `medicine_name`, `qty`, `amount`, `price`, `customer`, `admission_status`, `date`, `status`, `patient_no`, `medicine_name_id`) VALUES
(117, 'Invoice No-  3823030', 'Piliton ', '2', '100', '50', 'John Doe', '', '2021-06-27', '1', '51', '2'),
(118, 'Invoice No-  3823030', 'Brufen ', '2', '60', '30', 'John Doe', '', '2021-06-27', '1', '51', '1'),
(119, 'Invoice No-  0230333', 'ABZ ', '1', '20', '20', 'Sample Patient 2', '0', '2021-06-27', '1', '52', '7'),
(120, 'Invoice No-  33933232', 'Piliton ', '2', '100', '50', 'jane doe', '1', '2021-06-27', '1', '53', '2'),
(121, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(122, 'Invoice No-  3823030', 'Piliton ', '1', '50', '50', 'John Doe', '0', '2021-06-29', '1', '51', '2'),
(123, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(124, 'Invoice No-  3823030', 'Piliton ', '1', '50', '50', 'John Doe', '0', '2021-06-29', '1', '51', '2'),
(125, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(126, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(127, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(128, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(129, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(130, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(131, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(132, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(133, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(134, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(135, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(136, 'Invoice No-  0230333', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '2'),
(137, 'Invoice No-  0230333', 'Piliton ', '1', '100', '100', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '5'),
(138, 'Invoice No-  0230333', 'Piliton ', '1', '100', '100', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '5'),
(139, 'Invoice No-  0230333', 'Piliton ', '1', '100', '100', 'Sample Patient 2', '0', '2021-06-29', '1', '52', '5'),
(140, 'Invoice No-  0230333', 'ABZ ', '1', '20', '20', 'Sample Patient 2', '0', '2021-06-29', '0', '52', '7'),
(141, 'Invoice No-  3823030', 'Piliton ', '10', '1000', '100', 'John Doe', '0', '2021-06-29', '1', '51', '5'),
(142, 'Invoice No-  0230333', 'Piliton ', '2', '200', '100', 'Sample Patient 2', '0', '2021-06-29', '0', '52', '5'),
(143, 'Invoice No-  0230333', 'Piliton ', '2', '200', '100', 'Sample Patient 2', '0', '2021-06-29', '0', '52', '5'),
(144, 'Invoice No-  0230333', 'Piliton ', '1', '100', '100', 'Sample Patient 2', '0', '2021-06-29', '0', '52', '5'),
(145, '<br />\r\n<b>Notice</b>:  Undefined variable: patient_no in <b>C:xampphtdocsnewdashboardpos.php</b> on line <b>284</b><br />\r\n', 'Piliton ', '1', '50', '50', '', '0', '2021-06-29', '0', 'Invoice No-  0230333 ', '2'),
(146, 'Invoice No-  242222', 'Piliton ', '1', '100', '100', 'John Doe', '0', '2021-06-29', '0', '55', '5'),
(147, 'Invoice No-  242222', 'Piliton ', '1', '100', '100', 'John Doe', '0', '2021-06-29', '0', '55', '5'),
(148, 'Invoice No-  242222', 'Piliton ', '1', '100', '100', 'John Doe', '0', '2021-06-29', '0', '55', '5'),
(149, 'Invoice No-  242222', 'Brufen ', '1', '30', '30', 'John Doe', '0', '2021-06-29', '0', '55', '1'),
(150, 'Invoice No-  372057', 'Piliton ', '3', '150', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '56', '2'),
(151, 'Invoice No-  372057', 'ABZ ', '1', '20', '20', 'Sample Patient 2', '0', '2021-06-29', '1', '56 ', '7'),
(152, 'Invoice No-  372057', 'Piliton ', '1', '100', '100', 'Sample Patient 2', '0', '2021-06-29', '1', '56', '5'),
(153, 'Invoice No-  372057', 'ABZ ', '1', '20', '20', 'Sample Patient 2', '0', '2021-06-29', '1', '56 ', '7'),
(154, 'Invoice No-  372057', 'Cetrizin ', '1', '25', '25', 'Sample Patient 2', '0', '2021-06-29', '1', '56', '3'),
(155, 'Invoice No-  372057', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '56', '2'),
(156, 'Invoice No-  372057', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '56', '2'),
(157, 'Invoice No-  372057', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '56', '2'),
(158, 'Invoice No-  372057', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '56', '2'),
(159, 'Invoice No-  372057', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-29', '1', '56 ', '2'),
(160, 'Invoice No-  372057', 'Piliton ', '2', '100', '50', 'Sample Patient 2', '0', '2021-06-30', '1', '56', '2'),
(161, 'Invoice No-  372057', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-30', '1', '56', '2'),
(162, 'Invoice No-  372057', 'Piliton ', '2', '100', '50', 'Sample Patient 2', '0', '2021-06-30', '1', '56', '2'),
(163, 'Invoice No-  372057', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-30', '1', '56', '2'),
(164, 'Invoice No-  372057', 'Piliton ', '2', '100', '50', 'Sample Patient 2', '0', '2021-06-30', '1', '56', '2'),
(165, 'Invoice No-  372057', 'Piliton ', '2', '200', '100', 'Sample Patient 2', '0', '2021-06-30', '1', '56', '5'),
(166, 'Invoice No-  372057', 'Piliton ', '1', '50', '50', 'Sample Patient 2', '0', '2021-06-30', '1', '56', '2'),
(167, 'Invoice No-  242222', 'Piliton ', '1', '50', '50', 'John Doe', '0', '2021-06-30', '0', '55', '2'),
(168, 'Invoice No-  372057', 'Piliton ', '2', '100', '50', 'Sample Patient 2', '0', '2021-06-30', '1', '56', '2'),
(169, 'Invoice No-  372057', 'Piliton ', '1', '100', '100', 'Sample Patient 2', '0', '2021-06-30', '1', '56', '5'),
(170, 'Invoice No-  242222', 'Piliton ', '1', '50', '50', 'John Doe', '0', '2022-04-11', '0', '55', '2'),
(171, '<br />\r\n<b>Notice</b>:  Undefined variable: patient_no in <b>C:xampphtdocs\nndashboardpos.php</b> on line <b>233</b><br />\r\n', 'Piliton ', '2', '100', '50', '', '0', '2022-04-11', '0', '<br /><b>Notice</b>:  Undefined variable: patient_id in <b>C:xampphtdocs\nndashboardprescription.php</b> on line <b>223</b><br />', '2'),
(172, 'Invoice No-  723322', 'Brufen ', '2', '60', '30', 'man', '0', '2022-04-11', '1', '61', '1'),
(173, 'Invoice No-  723322', 'Brufen ', '2', '60', '30', 'man', '0', '2022-04-11', '0', '61', '1'),
(174, 'Invoice No-  242222', 'Brufen ', '3', '90', '30', 'John Doe', '0', '2022-04-12', '0', '55', '1'),
(175, 'Invoice No-  242222', 'Brufen ', '', '0', '30', 'John Doe', '0', '2022-04-12', '0', '55', '1'),
(176, '<br />\r\n<b>Notice</b>:  Undefined variable: patient_no in <b>C:xampphtdocs\nndashboardpos.php</b> on line <b>233</b><br />\r\n', 'Brufen ', '', '0', '30', '', '0', '2022-04-12', '0', '<br /><b>Notice</b>:  Undefined variable: patient_id in <b>C:xampphtdocs\nndashboardprescription.php</b> on line <b>223</b><br />', '1'),
(177, '<br />\r\n<b>Notice</b>:  Undefined variable: patient_no in <b>C:xampphtdocs\nndashboardpos.php</b> on line <b>233</b><br />\r\n', 'Brufen ', '', '0', '30', '', '0', '2022-04-12', '0', '<br /><b>Notice</b>:  Undefined variable: patient_id in <b>C:xampphtdocs\nndashboardprescription.php</b> on line <b>223</b><br />', '1'),
(178, '<br />\r\n<b>Notice</b>:  Undefined variable: patient_no in <b>C:xampphtdocs\nndashboardpos.php</b> on line <b>233</b><br />\r\n', 'Brufen ', '', '0', '30', '', '0', '2022-04-13', '0', '<br /><b>Notice</b>:  Undefined variable: patient_id in <b>C:xampphtdocs\nndashboardprescription.php</b> on line <b>223</b><br />', '1'),
(179, '<br />\r\n<b>Notice</b>:  Undefined variable: patient_no in <b>C:xampphtdocs\nndashboardpos.php</b> on line <b>233</b><br />\r\n', 'Brufen ', '', '0', '30', '', '0', '2022-04-13', '0', '<br /><b>Notice</b>:  Undefined variable: patient_id in <b>C:xampphtdocs\nndashboardprescription.php</b> on line <b>223</b><br />', '1'),
(180, '', 'Brufen ', '', '0', '30', 'jane doe', '0', '2022-04-13', '1', '57', '1'),
(181, '', 'Brufen ', '2', '60', '30', 'named', '0', '2022-04-13', '1', '62', '1'),
(182, '', 'Brufen ', '2', '60', '30', 'named', '0', '2022-04-13', '1', '62', '1'),
(183, '', 'Brufen ', '2', '60', '30', 'named', '0', '2022-04-13', '1', '62', '1'),
(184, '', 'Brufen ', '2', '60', '30', 'named', '0', '2022-04-13', '1', '62', '1'),
(185, '', 'Brufen ', '', '0', '30', 'named', '0', '2022-04-13', '1', '62', '1'),
(186, 'Invoice No-  38230', '', '', '0', '30', 'named', '0', '2022-04-13', '1', '62', ''),
(187, 'Invoice No-  38230', '', '4', '200', '50', 'named', '0', '2022-04-13', '1', '62', ''),
(188, 'Invoice No-  38230', '', '4', '200', '50', 'named', '0', '2022-04-13', '1', '62', ''),
(189, 'Invoice No-  38230', '', '4', '200', '50', 'named', '0', '2022-04-13', '1', '62', ''),
(190, 'Invoice No-  38230', '', '4', '200', '50', 'named', '0', '2022-04-13', '1', '62', ''),
(191, 'Invoice No-  38230', '', '4', '200', '50', 'named', '0', '2022-04-13', '1', '62', ''),
(192, 'Invoice No-  38230', 'Piliton', '', '0', '50', 'named', '0', '2022-04-13', '1', '62', ''),
(193, 'Invoice No-  38230', 'Piliton', '', '0', '50', 'named', '0', '2022-04-13', '1', '62', ''),
(194, 'Invoice No-  242222', '', '2', '60', '30', 'John Doe', '0', '2022-04-13', '0', '55', ''),
(195, 'Invoice No-  242222', '', '2', '60', '30', 'John Doe', '0', '2022-04-13', '0', '55', ''),
(196, 'Invoice No-  242222', 'Brufen', '', '0', '30', 'John Doe', '0', '2022-04-13', '0', '55', ''),
(197, 'Invoice No-  242222', 'Brufen', '', '0', '30', 'John Doe', '0', '2022-04-13', '0', '55', ''),
(198, 'Invoice No-  242222', 'Brufen', '', '0', '30', 'John Doe', '0', '2022-04-13', '0', '55', ''),
(199, 'Invoice No-  242222', 'Brufen', '', '0', '30', 'John Doe', '0', '2022-04-13', '0', '55', ''),
(200, 'Invoice No-  242222', 'Brufen', '', '0', '30', 'John Doe', '0', '2022-04-13', '0', '55', ''),
(201, 'Invoice No-  242222', 'Brufen', '', '0', '30', 'John Doe', '0', '2022-04-13', '0', '55', '1'),
(202, 'Invoice No-  242222', 'Brufen', '', '0', '30', 'John Doe', '0', '2022-04-13', '0', '55', '1'),
(203, 'Invoice No-  242222', 'Brufen', '', '0', '30', 'John Doe', '0', '2022-04-13', '0', '55', '1'),
(204, 'Invoice No-  242222', 'Brufen', '', '0', '30', 'John Doe', '0', '2022-04-13', '0', '55', '1'),
(205, 'Invoice No-  242222', 'Brufen', '', '', '30', 'John Doe', '0', '2022-04-13', '0', '55', '1'),
(206, 'Invoice No-  242222', 'Brufen', '', '', '30', 'John Doe', '0', '2022-04-13', '0', '55', '1'),
(207, 'Invoice No-  242222', 'Brufen', '', '', '30', 'John Doe', '0', '2022-04-13', '0', '55', '1'),
(208, 'Invoice No-  242222', 'Brufen', '', '', '30', 'John Doe', '0', '2022-04-13', '0', '55', '1'),
(209, 'Invoice No-  242222', 'Brufen', '', '0', '30', 'John Doe', '0', '2022-04-13', '0', '55', '1'),
(210, 'Invoice No-  242222', 'Brufen', '', '0', '30', 'John Doe', '0', '2022-04-13', '0', '55', '1'),
(211, 'Invoice No-  242222', 'Piliton', '2', '100', '50', 'John Doe', '0', '2022-04-13', '0', '55', '2'),
(212, 'Invoice No-  242222', 'Piliton', '5', '250', '50', 'John Doe', '0', '2022-04-13', '0', '55', '2'),
(213, 'Invoice No-  242222', 'Piliton', '', '0', '50', 'John Doe', '0', '2022-04-13', '0', 'Invoice No-  242222', '2'),
(214, 'Invoice No-  242222', 'Piliton', '', '0', '50', 'John Doe', '0', '2022-04-13', '0', '', '2'),
(215, 'Invoice No-  242222', 'Piliton', '', '0', '50', 'John Doe', '0', '2022-04-13', '0', '', '2'),
(216, 'Invoice No-  242222', 'Piliton', '', '0', '50', 'John Doe', '0', '2022-04-13', '0', '55', '2'),
(217, 'Invoice No-  242222', 'Piliton', '', '0', '50', 'John Doe', '0', '2022-04-13', '0', '55', '2'),
(218, 'Invoice No-  2020303', 'Brufen', '5', '150', '30', 'you', '0', '2022-04-13', '1', '58', '1'),
(219, 'Invoice No-  38230', 'Piliton', '2', '100', '50', 'named', '0', '2022-04-13', '1', '62', '2'),
(220, 'Invoice No-  38230', 'Piliton', '2', '100', '50', 'named', '0', '2022-04-13', '1', '62', '2'),
(221, 'Invoice No-  3022', 'Piliton', '-6', '-300', '50', 'msikir', '0', '2022-04-13', '1', '65', '2'),
(222, 'Invoice No-  3022', 'Piliton', '3', '150', '50', 'msikir', '0', '2022-04-13', '1', '65', '2'),
(223, 'Invoice No-  3022', 'Piliton', '3', '150', '50', 'msikir', '0', '2022-04-13', '1', '65', '2'),
(224, 'Invoice No-  3022', 'Piliton', '1', '50', '50', 'msikir', '0', '2022-04-13', '1', '65', '2'),
(225, 'Invoice No-  3022', 'Piliton', '', '0', '50', 'msikir', '0', '2022-04-13', '1', '65', '2'),
(226, 'Invoice No-  3022', 'Piliton', '1', '50', '50', 'msikir', '0', '2022-04-13', '1', '65', '2'),
(227, 'Invoice No-  032539', 'Piliton', '5', '500', '100', 'man', '0', '2022-04-13', '1', '60', '5'),
(228, 'Invoice No-  242222', 'Piliton', '2', '200', '100', 'John Doe', '0', '2022-04-15', '0', '55', '5'),
(229, 'Invoice No-  242222', 'Brufen', '2', '60', '30', 'John Doe', '0', '2022-04-15', '0', '55', '1'),
(230, 'Invoice No-  0222883', 'Piliton', '2', '100', '50', '', '0', '2022-04-15', '1', '66', '2'),
(231, 'Invoice No-  32923222', 'Cetrizin', '1', '25', '25', 'kaka', '0', '2022-04-15', '1', '67', '3'),
(232, 'Invoice No-  2802732', 'Brufen', '5', '150', '30', 'jane doe', '0', '2022-04-15', '1', '57', '1'),
(233, 'Invoice No-  2802732', 'Brufen', '5', '150', '30', 'jane doe', '0', '2022-04-15', '1', '57', '1'),
(234, 'Invoice No-  2802732', 'Piliton', '3', '300', '100', 'jane doe', '0', '2022-04-15', '1', '57', '5'),
(235, 'Invoice No-  2802732', 'Piliton', '3', '300', '100', 'jane doe', '0', '2022-04-15', '1', '57', '5'),
(236, 'Invoice No-  242222', 'Piliton', '2', '100', '50', 'John Doe', '0', '2022-04-15', '0', '55', '2'),
(237, 'Invoice No-  242222', 'Piliton', '2', '100', '50', 'John Doe', '0', '2022-04-15', '0', '55', '2'),
(238, 'Invoice No-  20240', 'Piliton', '1', '100', '100', 'neww', '0', '2022-04-21', '1', '63', '5'),
(239, 'Invoice No-  20240', 'Piliton', '1', '100', '100', 'neww', '0', '2022-04-21', '0', '63', '5'),
(240, 'Invoice No-  2020303', 'Piliton', '1', '100', '100', 'you', '0', '2022-04-21', '1', '58', '5'),
(241, 'Invoice No-  2020303', 'Piliton', '1', '100', '100', 'you', '0', '2022-04-21', '1', '58', '5'),
(242, 'Invoice No-  2020303', 'Piliton', '1', '100', '100', 'you', '0', '2022-04-21', '0', '58', '5'),
(243, 'Invoice No-  2802732', 'Piliton', '1', '100', '100', 'jane doe', '0', '2022-04-27', '1', '57', '5'),
(244, 'Invoice No-  2352003', 'Piliton', '1', '100', '100', 'new', '0', '2022-04-27', '1', '59', '5'),
(245, 'Invoice No-  2352003', 'Piliton', '1', '50', '50', 'new', '0', '2022-04-27', '1', '59', '2'),
(246, 'Invoice No-  2352003', 'Piliton', '1', '50', '50', 'new', '0', '2022-04-27', '1', '59', '2'),
(247, 'Invoice No-  2352003', 'Piliton', '1', '50', '50', 'new', '0', '2022-04-27', '1', '59', '2'),
(248, 'Invoice No-  2352003', 'Piliton', '1', '50', '50', 'new', '0', '2022-04-27', '1', '59', '2'),
(249, 'Invoice No-  2352003', 'Piliton', '1', '50', '50', 'new', '0', '2022-04-27', '1', '59', '2'),
(250, 'Invoice No-  2352003', 'Piliton', '1', '50', '50', 'new', '0', '2022-04-27', '1', '59', '2'),
(251, 'Invoice No-  2352003', 'Piliton', '1', '50', '50', 'new', '0', '2022-04-27', '1', '59', '2'),
(252, 'Invoice No-  07232', 'Piliton', '1', '100', '100', 'kj', '0', '2022-04-27', '1', '68', '5'),
(253, 'Invoice No-  07232', 'Piliton', '1', '100', '100', 'kj', '0', '2022-04-27', '1', '68', '5'),
(254, 'Invoice No-  242222', 'Piliton', '1', '100', '100', 'John Doe', '0', '2022-04-28', '0', '55', '5'),
(255, 'Invoice No-  2352003', 'Piliton', '1', '50', '50', 'new', '0', '2022-04-28', '1', '59', '2'),
(256, 'Invoice No-  07232', 'Piliton', '1', '100', '100', 'kj', '0', '2022-04-29', '1', '68', '5'),
(257, 'Invoice No-  323430', 'Brufen', '1', '30', '30', 'msikir', '0', '2022-05-07', '1', '69', '1');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(12) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `price`) VALUES
(1, 'Wood Checkup', '200'),
(2, 'Counseling', '100'),
(3, 'Jadel Insertion', '1000'),
(4, 'sample servise name', '500');

-- --------------------------------------------------------

--
-- Table structure for table `service_order`
--

CREATE TABLE `service_order` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `patient_no` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_order`
--

INSERT INTO `service_order` (`service_id`, `service_name`, `description`, `patient_no`, `price`, `status`) VALUES
(36, 'Counseling', 'counseling', 'Invoice No-  3823030', '100', '0'),
(37, 'sample servise name', 'sample description', 'Invoice No-  3823030', '1000', '0'),
(38, 'Wood Checkup', 'fdgg', 'Invoice No-  0230333', '100', '0'),
(39, 'Jadel Insertion', 'insertion', 'Invoice No-  33933232', '1000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(10) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `date_received` date NOT NULL,
  `Qty` varchar(255) NOT NULL DEFAULT '0',
  `expiry_date` date NOT NULL DEFAULT current_timestamp(),
  `amount` varchar(255) NOT NULL,
  `stock_out` varchar(255) NOT NULL DEFAULT '0',
  `bprice` varchar(255) NOT NULL DEFAULT '0',
  `price` varchar(255) NOT NULL DEFAULT '0',
  `dose` varchar(255) NOT NULL DEFAULT '0',
  `capacity` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `dosage_sold` varchar(255) NOT NULL,
  `dosage` varchar(255) NOT NULL,
  `price_dosage` varchar(255) NOT NULL DEFAULT '0',
  `app` varchar(255) NOT NULL,
  `half_dosage_price` int(11) NOT NULL,
  `confirm` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `medicine_name`, `date_received`, `Qty`, `expiry_date`, `amount`, `stock_out`, `bprice`, `price`, `dose`, `capacity`, `type`, `dosage_sold`, `dosage`, `price_dosage`, `app`, `half_dosage_price`, `confirm`) VALUES
(1, 'Brufen', '0000-00-00', '5', '2023-06-15', '', '0', '25', '25', '250mg', '10', 'tablet', '', '', '', '', 0, '0'),
(2, 'Piliton', '0000-00-00', '45', '2023-06-15', '', '0', '25', '25', '250mg', '50', 'tablet', '', '', '', '', 0, '0'),
(3, 'Cetrizin', '0000-00-00', '40', '2023-10-19', '', '0', '40', '40', '500mg', '50', 'tablet', '', '', '', '', 0, '1'),
(4, 'Jadell', '0000-00-00', '50', '2023-10-17', '', '0', '500', '40', '250mg', '60', 'tablet', '', '', '', '', 0, '0'),
(5, 'Piliton', '0000-00-00', '120', '2023-10-18', '', '0', '40', '', '500mg', '60', 'Tablet', 'Yes', '10', '100', '100', 50, '0'),
(6, 'Paracetamal', '0000-00-00', '15', '2027-02-27', '', '0', '40', '10', '250mg', '50', 'Tablet', '', '', '0', '', 0, '0'),
(7, 'ABZ', '0000-00-00', '14', '2023-06-20', '', '0', '40', '10', '250mg', '60', 'Tablet', '', '', '', '', 0, '0'),
(13, 'pimp', '0000-00-00', '0', '2022-04-12', '', '0', '40', '50', '250ml', '500', 'tablet', '', '', '', '', 0, '0'),
(18, 'kk', '0000-00-00', '0', '2022-06-07', '', '0', '20', '30', '250ml', '55', 'syrup', '', '', '', '', 0, '0'),
(19, 'hello', '0000-00-00', '230', '2022-05-06', '', '0', '20', '30', '250', '250', 'tablet', '', '', '', '', 0, '0'),
(20, 'amc', '0000-00-00', '50', '2022-05-06', '', '0', '5', '10', '500mg', '55', 'tablet', '', '', '', '', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `storecoordinator`
--

CREATE TABLE `storecoordinator` (
  `storecoordinator_id` tinyint(5) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `staff_id` varchar(10) NOT NULL,
  `postal_address` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storecoordinator`
--

INSERT INTO `storecoordinator` (`storecoordinator_id`, `first_name`, `last_name`, `staff_id`, `postal_address`, `phone`, `email`, `username`, `password`, `date`) VALUES
(1, 'Wiill', 'Wilm', 'C01', 'Avnuet', '852000670', 'noone@gmail', 'storecoordinator', 'password', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `store_items`
--

CREATE TABLE `store_items` (
  `id` int(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_items`
--

INSERT INTO `store_items` (`id`, `item_name`, `capacity`, `price`, `expiry_date`) VALUES
(3, 'needles', '75', '150', '2026-10-31'),
(4, 'Catheter', '38', '210', '2023-11-30'),
(8, 'pop', '', '', '0000-00-00'),
(9, 'pip', '', '', '0000-00-00'),
(10, 'youra', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` int(10) NOT NULL,
  `ward_name` varchar(255) NOT NULL,
  `capacity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `ward_name`, `capacity`) VALUES
(2, 'Ward A', 50),
(3, 'Ward B', 60),
(4, 'Ward C', 50),
(5, 'Ward D', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admitted_patients`
--
ALTER TABLE `admitted_patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`cashier_id`);

--
-- Indexes for table `damaged`
--
ALTER TABLE `damaged`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagonisis_list`
--
ALTER TABLE `diagonisis_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dicharge_process`
--
ALTER TABLE `dicharge_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_id`);

--
-- Indexes for table `expired_medince`
--
ALTER TABLE `expired_medince`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratory_tests`
--
ALTER TABLE `laboratory_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_results`
--
ALTER TABLE `lab_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_test`
--
ALTER TABLE `lab_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`pharmacist_id`);

--
-- Indexes for table `pharmacy_stock`
--
ALTER TABLE `pharmacy_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacy_stock_items`
--
ALTER TABLE `pharmacy_stock_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_order`
--
ALTER TABLE `service_order`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storecoordinator`
--
ALTER TABLE `storecoordinator`
  ADD PRIMARY KEY (`storecoordinator_id`);

--
-- Indexes for table `store_items`
--
ALTER TABLE `store_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admitted_patients`
--
ALTER TABLE `admitted_patients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `cashier_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `damaged`
--
ALTER TABLE `damaged`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `diagonisis_list`
--
ALTER TABLE `diagonisis_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dicharge_process`
--
ALTER TABLE `dicharge_process`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `expired_medince`
--
ALTER TABLE `expired_medince`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratory_tests`
--
ALTER TABLE `laboratory_tests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lab_results`
--
ALTER TABLE `lab_results`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lab_test`
--
ALTER TABLE `lab_test`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `pharmacist_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pharmacy_stock`
--
ALTER TABLE `pharmacy_stock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pharmacy_stock_items`
--
ALTER TABLE `pharmacy_stock_items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `purchase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `transaction_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_order`
--
ALTER TABLE `service_order`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `storecoordinator`
--
ALTER TABLE `storecoordinator`
  MODIFY `storecoordinator_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `store_items`
--
ALTER TABLE `store_items`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
