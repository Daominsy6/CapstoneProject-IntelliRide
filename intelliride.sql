-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2024 at 12:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intelliride`
--

-- --------------------------------------------------------

--
-- Table structure for table `busdata`
--

CREATE TABLE `busdata` (
  `id` int(11) NOT NULL,
  `plateNumber` varchar(50) NOT NULL,
  `serialCode` varchar(255) NOT NULL,
  `info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `busdata`
--

INSERT INTO `busdata` (`id`, `plateNumber`, `serialCode`, `info`) VALUES
(1, 'NIE 4338', '001', 'Jeepney Type'),
(2, 'NIM 6546', '002', 'Jeepney Type'),
(3, 'NIM 6547', '003', 'Jeepney Type'),
(4, 'NGU 9114', '004', 'Jeepney Type'),
(5, 'NGU 9115', '005', 'Jeepney Type'),
(6, 'NIU 9562', '006', 'Jeepney Type'),
(7, 'NKC 1814', '007', 'Bus Type'),
(8, 'NKC 1805', '008', 'Jeepney Type'),
(9, 'NKC 1812', '009', 'Jeepney Type'),
(10, 'NKC 1813', '010', 'Jeepney Type');

-- --------------------------------------------------------

--
-- Table structure for table `bus_locations`
--

CREATE TABLE `bus_locations` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `personnel_id` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `status` varchar(50) DEFAULT 'Available',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus_locations`
--

INSERT INTO `bus_locations` (`id`, `bus_id`, `personnel_id`, `latitude`, `longitude`, `status`, `timestamp`) VALUES
(1, 1, 1, 15.0604951, 120.8020029, 'Standing', '2024-11-26 14:50:01'),
(2, 2, 2, 15.0604922, 120.8020007, 'Available', '2024-11-26 05:51:53'),
(3, 3, 0, 15.0604961, 120.8020054, 'Available', '2024-11-26 08:04:03'),
(4, 4, 0, 15.0604958, 120.8020054, 'Unavailable', '2024-11-23 19:17:19'),
(5, 5, 0, 15.0604959, 120.8020055, 'Standing', '2024-11-24 14:30:53'),
(6, 6, 0, 15.0604961, 120.8020054, 'Full', '2024-11-23 21:10:56'),
(7, 7, 10, 15.0604959, 120.8020052, 'Full', '2024-11-28 13:11:18'),
(8, 8, 0, 15.0604996, 120.8020074, 'Available', '2024-11-26 05:53:28'),
(9, 9, 0, 15.0604955, 120.8020037, 'Available', '2024-11-26 06:13:14'),
(10, 10, 0, 15.0604965, 120.8020052, 'Available', '2024-11-24 16:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `fare`
--

CREATE TABLE `fare` (
  `id` int(10) NOT NULL,
  `discount` int(25) NOT NULL,
  `regular` decimal(50,2) NOT NULL,
  `increase` decimal(50,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fare`
--

INSERT INTO `fare` (`id`, `discount`, `regular`, `increase`) VALUES
(1, 20, 14.00, 2.25);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `post_km` int(50) NOT NULL,
  `regular_fare` decimal(50,2) NOT NULL,
  `discounted_fare` decimal(50,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`, `post_km`, `regular_fare`, `discounted_fare`) VALUES
('1', 'Arayat', 0, 0.00, 0.00),
('2', 'Mesulo', 1, 0.00, 0.00),
('3', 'San Nicolas', 3, 0.00, 0.00),
('4', 'Quenabuan', 4, 0.00, 0.00),
('5', 'Sepung Ilog/Santiago', 5, 0.00, 0.00),
('6', 'San Bartolome', 6, 0.00, 0.00),
('7', 'San Juan/Sta. Ana', 7, 0.00, 0.00),
('8', 'San Pedro Camatchile', 8, 0.00, 0.00),
('9', 'Pelco/Sto. Domingo', 9, 0.00, 0.00),
('10', 'Pagulong/Tete Sasag', 10, 0.00, 0.00),
('11', 'San Pablo', 11, 0.00, 0.00),
('12', 'Sto. Rosario', 12, 0.00, 0.00),
('13', 'Mexico', 13, 0.00, 0.00),
('14', 'Sto. Cristo', 14, 0.00, 0.00),
('15', 'Lagundi', 15, 0.00, 0.00),
('16', 'SM/Beverly', 16, 0.00, 0.00),
('17', 'Green City/S&R', 17, 0.00, 0.00),
('18', 'Intersection', 18, 0.00, 0.00),
('19', 'JBL/Makabakle', 19, 0.00, 0.00),
('20', 'Makabali', 20, 0.00, 0.00),
('21', 'CSFD Palengke', 21, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `personnel_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `passengerdata`
--

CREATE TABLE `passengerdata` (
  `id` int(11) NOT NULL,
  `firstName` varchar(99) NOT NULL,
  `lastName` varchar(99) NOT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(99) NOT NULL,
  `creationDate` datetime NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passengerdata`
--

INSERT INTO `passengerdata` (`id`, `firstName`, `lastName`, `contact`, `email`, `creationDate`, `password`) VALUES
(7, 'qwertt', 'asda', '098', '01010001', '2024-10-26 00:00:00', ''),
(10, 'daooo', 'daoooo', 'daoooo', 'daoooo', '2024-10-26 00:00:00', ''),
(16, 'dao', 'yabut', '123', 'daominsyyabut6@gmail.com', '2024-10-26 00:00:00', 'dao'),
(17, '', '', '', '', '2024-11-17 00:00:00', '0'),
(18, 'dion', 'yabut', '8885', 'dion', '0000-00-00 00:00:00', 'dion'),
(19, 'hi', 'hi', '123', 'p', '2024-11-26 02:35:42', 'p'),
(20, 'User', 'Ako', '0939393939', 'pp', '2024-11-26 15:59:05', 'password'),
(21, 'dion', 'yabut', '8885', 'dion', '2024-11-28 21:12:12', 'dion');

-- --------------------------------------------------------

--
-- Table structure for table `personneldata`
--

CREATE TABLE `personneldata` (
  `id` int(11) NOT NULL,
  `firstName` varchar(99) NOT NULL,
  `lastName` varchar(99) NOT NULL,
  `position` varchar(99) NOT NULL,
  `number` varchar(15) DEFAULT NULL,
  `email` varchar(99) NOT NULL,
  `startingDate` date NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personneldata`
--

INSERT INTO `personneldata` (`id`, `firstName`, `lastName`, `position`, `number`, `email`, `startingDate`, `password`) VALUES
(1, 'Jesus', 'Sagcal', 'Driver', '09127800444', 'p1', '0000-00-00', 'P1'),
(2, 'Randy', 'Sanchez', 'Driver', '09972306316', 'p2', '0000-00-00', 'P2'),
(3, 'Jimmy', '', 'Driver', '09507146992', 'p3', '0000-00-00', 'P3'),
(4, 'Romeo', 'Modla', 'Driver', '09350582672', 'p4', '0000-00-00', 'P4'),
(5, 'Aristotle', 'Buan', 'Driver', '09616056781', 'p5', '0000-00-00', 'P5'),
(6, 'Marvin', 'Tiglao', 'Driver', '09675021436', 'p6', '0000-00-00', 'P6'),
(7, 'Allan', 'Munoz', 'Driver', '09665642857', 'p7', '0000-00-00', 'P7'),
(8, 'Ryan', 'Manalo', 'Driver', '09098381501', 'p8', '0000-00-00', 'P8'),
(9, 'Ronilo', 'Manambay Jr.', 'Driver', '09511172820', 'p9', '0000-00-00', 'P9'),
(10, 'Sebedeo', 'Cunanan', 'Driver', '09458475189', 'p10', '0000-00-00', 'P10'),
(11, 'Jun', 'Carillo', 'Driver', '09555643856', '', '0000-00-00', ''),
(12, 'Mark Anthony', 'Olimente', 'Driver', '09757840831', '', '0000-00-00', ''),
(13, 'Nilo', 'Ocampo', 'Driver', '09051634037', '', '0000-00-00', ''),
(14, 'Arnold', 'Miranda', 'Driver', '09976554546', '', '0000-00-00', ''),
(15, 'Ralph Philip', 'Miranda', 'PAO', '09059480189', '', '0000-00-00', ''),
(16, 'Criselda', 'Arce', 'PAO', '09359934349', '', '0000-00-00', ''),
(17, 'Aldrian', 'Miranda', 'PAO', '09350645884', '', '0000-00-00', ''),
(18, 'Jonathan', 'Pulusan', 'PAO', '09751818161', '', '0000-00-00', ''),
(19, 'Bryan', 'Simbilio', 'PAO', '09358411995', '', '0000-00-00', ''),
(20, 'Jerome', 'Galang', 'PAO', '09672661836', '', '0000-00-00', ''),
(21, 'Rowen Rey', 'Salazar', 'PAO', '09984196984', '', '0000-00-00', ''),
(22, 'Reynold', 'Delos Santos', 'PAO', '09265340017', '', '0000-00-00', ''),
(23, 'Ronald', 'Valencia', 'PAO', '09911948033', '', '0000-00-00', ''),
(24, 'Jester', 'Cordova', 'PAO', '09491465382', '', '0000-00-00', ''),
(25, 'Jethro', 'Maniago', 'PAO', '09551871420', '', '0000-00-00', ''),
(26, 'Andrian', 'Balbanero', 'PAO', '090675115331', '', '0000-00-00', ''),
(27, 'John Rei', 'Santos', 'PAO', '09619223864', '', '0000-00-00', ''),
(28, 'Christian Gabriel', 'Nidar', 'PAO', '09679913716', '', '0000-00-00', ''),
(29, 'Jayme', 'Venzon', 'PAO', '0969748308', '', '0000-00-00', ''),
(30, 'John Ian', 'De Guzman', 'PAO', '09365411191', '', '0000-00-00', ''),
(31, 'Jessie', 'Dela Cruz', 'PAO', '09633061859', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `transactiondata`
--

CREATE TABLE `transactiondata` (
  `Id` int(11) NOT NULL,
  `personnelId` varchar(25) NOT NULL,
  `busId` varchar(25) NOT NULL,
  `pickUpPoint` varchar(255) DEFAULT NULL,
  `destination` varchar(50) NOT NULL,
  `amount` decimal(25,2) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactiondata`
--

INSERT INTO `transactiondata` (`Id`, `personnelId`, `busId`, `pickUpPoint`, `destination`, `amount`, `date`) VALUES
(7, 'Unknown', 'BUS1', 'Intersection', 'Pelco/Sto. Domingo', 20.20, '2024-11-24 02:37:06'),
(8, 'Unknown', 'BUS7', 'San Juan/Sta. Ana', 'SM/Beverly', 20.20, '2024-11-24 02:48:05'),
(12, 'Unknown', 'BUS1', 'Mesulo', 'San Nicolas', 14.00, '2024-11-24 03:01:35'),
(13, 'Unknown', 'BUS1', 'Arayat', 'Arayat', 11.20, '2024-11-24 03:01:50'),
(14, 'Unknown', 'BUS4', 'Arayat', 'Arayat', 14.00, '2024-11-24 03:17:32'),
(15, '10', 'BUS1', 'San Pablo', 'Sto. Cristo', 14.00, '2024-11-24 04:05:59'),
(17, '5', 'BUS5', 'Arayat', 'Sepung Ilog/Santiago', 16.25, '2024-11-24 04:36:14'),
(18, '5', 'BUS5', 'Mesulo', 'San Nicolas', 14.00, '2024-11-24 04:37:21'),
(19, '5', 'BUS5', 'Quenabuan', 'Sepung Ilog/Santiago', 14.00, '2024-11-24 04:38:24'),
(20, '5', 'BUS5', 'Arayat', 'Arayat', 11.20, '2024-11-24 04:42:22'),
(21, '5', 'BUS5', 'San Pablo', 'San Bartolome', 16.25, '2024-11-24 04:43:48'),
(26, '9', 'BUS1', 'Green City/S&R', 'San Nicolas', 29.20, '2024-11-24 19:07:44'),
(27, '9', 'BUS1', 'Pagulong/Tete Sasag', 'Quenabuan', 18.50, '2024-11-24 19:08:13'),
(28, '9', 'BUS1', 'Arayat', 'Arayat', 14.00, '2024-11-24 19:10:24'),
(29, '9', 'BUS1', 'Quenabuan', 'Arayat', 14.00, '2024-11-24 19:11:01'),
(30, '1', 'BUS1', 'Arayat', 'Arayat', 14.00, '2024-11-24 20:17:55'),
(31, '1', 'BUS1', 'Arayat', 'Arayat', 11.20, '2024-11-24 20:18:17'),
(32, '1', 'BUS1', 'Sepung Ilog/Santiago', 'Sepung Ilog/Santiago', 11.20, '2024-11-24 21:24:32'),
(33, '1', 'BUS1', 'Arayat', 'Sepung Ilog/Santiago', 16.25, '2024-11-24 21:25:53'),
(34, '2', 'BUS5', 'Mesulo', 'Arayat', 14.00, '2024-11-24 22:29:42'),
(35, '10', 'BUS10', 'Arayat', 'Arayat', 11.20, '2024-11-24 23:59:23'),
(36, '10', 'BUS10', 'Arayat', 'Arayat', 11.20, '2024-11-25 00:05:14'),
(37, '10', 'BUS7', 'Sto. Rosario', 'Makabali', 18.40, '2024-11-25 01:20:48'),
(38, '10', 'BUS7', 'Arayat', 'Arayat', 14.00, '2024-11-28 21:11:28'),
(39, '10', 'BUS7', 'Arayat', 'Arayat', 11.20, '2024-11-28 21:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `webaccount`
--

CREATE TABLE `webaccount` (
  `admin` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `webaccount`
--

INSERT INTO `webaccount` (`admin`, `password`) VALUES
('Arayat Express', 'ae123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busdata`
--
ALTER TABLE `busdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus_locations`
--
ALTER TABLE `bus_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fare`
--
ALTER TABLE `fare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passengerdata`
--
ALTER TABLE `passengerdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personneldata`
--
ALTER TABLE `personneldata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactiondata`
--
ALTER TABLE `transactiondata`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `busdata`
--
ALTER TABLE `busdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bus_locations`
--
ALTER TABLE `bus_locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `passengerdata`
--
ALTER TABLE `passengerdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personneldata`
--
ALTER TABLE `personneldata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `transactiondata`
--
ALTER TABLE `transactiondata`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
