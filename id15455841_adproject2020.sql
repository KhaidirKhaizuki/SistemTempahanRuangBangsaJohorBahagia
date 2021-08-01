-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2021 at 05:33 AM
-- Server version: 10.3.13-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15455841_adproject2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accID` int(100) NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `no_ic` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `telno` longtext COLLATE utf8_unicode_ci NOT NULL,
  `postcode` longtext COLLATE utf8_unicode_ci NOT NULL,
  `address2` text COLLATE utf8_unicode_ci NOT NULL,
  `address3` text COLLATE utf8_unicode_ci NOT NULL,
  `address4` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accID`, `email`, `password`, `role`, `username`, `no_ic`, `fullname`, `address`, `telno`, `postcode`, `address2`, `address3`, `address4`) VALUES
(1, 'adminBJB@gmail.com', 'adminruang', 'admin', '', '', '', '', '', '', '', '', ''),
(2, 'nrulhusnaaa@gmail.com', 'husna', 'public', 'HusnaNasri', '991006-01-1819', 'Nurul Husna Md Nasri', 'gurun kedah', '0135028954', '86000', 'no 111 tmn idahpura', 'senai johor', 'Merak'),
(3, 'jiji@gmail.com', 'jiji', 'public', 'ZiziKirana', '201212-01-1819', 'Zizi Kirana Eh Eh', 'Johor', '01234567890', '256988', 'no 785', 'taman pering', 'Nuri'),
(4, 'membertech99@gmail.com', 'member', 'admin', 'membertech99', '', '', '', '', '', '', '', ''),
(5, 'joebiden@gmail.com', '12345', 'public', 'joebiden', '201120-01-1819', 'JoeBiden bin Donald Trump', 'Washingtonn', '01234567890', '42500', 'DC', 'United State', 'kenari'),
(7, 'amirhebat99@gmail.com', '1234', 'resident', 'amirhebat', '990927101819', 'amirhebat99', 'No 56 Jalam Nusa', '01234758964', '869400', 'Taman Nusajaya', 'Nusajaya Johor', 'jentayu'),
(9, 'razlin@gmail.com', 'razlin', 'public', 'Razlin', '000101085988', 'Razlin Shahira', 'No42 Jalan Anggun', '1234567', '89600', 'Tmn Anggun', 'Senai, Johor', 'nuri'),
(10, 'hanis@gmail.com', 'hanis', 'resident', 'Hanis Farhana', '990326082988', 'Hanis Farhana binti Jamil', 'No 10 Jalan Cempaka', '0198789065', '94500', 'Taman Cempaka', 'Skudai Johor', 'jentayu'),
(11, 'aimi@gmail.com', 'aimi', 'resident', 'Aimi Syahirah', '990802026776', 'Aimi Syahirah', 'No 45 Jalan Cahaya', '0987654', '23006', 'Taman Cahaya', 'Kluang Johor', 'jentayu'),
(23, 'nurnajihakhairul@gmail.com', '1234', 'resident', 'ziha', '965841685226', 'Wan Najiha ', 'No 330 Jalan Aman', '01364859755', '82130', 'Taman Sg Aman', 'Kluang Johor', 'kenari'),
(24, 'fanjenny98@gmail.com', '123456', 'resident', 'FAN', '980218015712', 'FAN JENNY', '11 jalan bukit impian 9', '0187753315', '81300', 'taman impian emas', 'JOHOR', 'merak');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'AHMAD KHAIDIR AMIR RODZMAN', 'khaidirkhaizuki@gmail.com', 'saya ada masalah sewa bilik', '2020-12-02 18:47:03'),
(5, 'Nur Dania', 'maisarahsehat@gmail.com', 'saje test', '2020-12-29 10:13:51'),
(6, 'AJo', 'joebiden@gmail.com', '123', '2021-02-05 07:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `forgot`
--

CREATE TABLE `forgot` (
  `forgotid` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `forgot`
--

INSERT INTO `forgot` (`forgotid`, `email`, `status`, `date`) VALUES
(13, 'joebiden@gmail.com', 'Pending', '2021-01-23 06:36:15'),
(14, 'fanjenny98@gmail.com', 'Pending', '2021-02-05 07:07:22'),
(15, 'joebiden@gmail.com', 'Pending', '2021-02-05 07:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `newacc`
--

CREATE TABLE `newacc` (
  `accid` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newacc`
--

INSERT INTO `newacc` (`accid`, `email`, `password`, `role`) VALUES
(1, 'khaidirkhaizuki@gmail.com', '1234', 'resident'),
(2, 'adminBJB@gmail.com', 'adminruang', 'admin'),
(3, 'nrulhusnaaa@gmail.com', 'husna', 'public'),
(4, 'jiji@gmail.com', 'jiji', 'public'),
(5, 'najiha@gmail.com', 'najiha', 'public'),
(6, 'joebiden@gmail.com', '1234', 'public'),
(7, 'maisarahsehat@gmail.co', '1234', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `newUser`
--

CREATE TABLE `newUser` (
  `reg_id` int(11) NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newUser`
--

INSERT INTO `newUser` (`reg_id`, `email`, `username`) VALUES
(1, 'nrulhusnaaa@gmail.com', 'nurulhusna'),
(2, 'jiji@gmail.com', 'jiji kirana'),
(3, 'najiha@gmail.com', 'najiha'),
(4, 'joebiden@gmail.com', 'joe'),
(5, 'maisarahsehat@gmail.com', 'mai'),
(6, 'nur_najiha11@yahoo.com', 'jiha'),
(8, 'luffy@gmail.com', 'luffy'),
(10, 'luffy@gmail.com', 'luffy'),
(12, 'luffy@gmail.com', 'monkey'),
(15, 'nezuko@gmail.com', 'nezuko'),
(22, 'khaidirkhaizuki@gmail.com', 'khaizuki');

-- --------------------------------------------------------

--
-- Table structure for table `profilepic`
--

CREATE TABLE `profilepic` (
  `idpic` int(3) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(10000) COLLATE utf8_unicode_ci NOT NULL,
  `filepath` varchar(10000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profilepic`
--

INSERT INTO `profilepic` (`idpic`, `email`, `filename`, `filepath`) VALUES
(6, 'jiji@gmail.com', 'nezuko.jpg', 'images/nezuko.jpg'),
(7, 'adminBJB@gmail.com', 'bokuto.jpg', 'images/bokuto.jpg'),
(8, 'adminBJ@gmail.com', 'none', 'images/no-image.png'),
(9, 'adminBJB@gmail.com', 'none', 'images/no-image.png'),
(10, 'maisarahsehat@gmail.com', 'levi.jpg', 'images/levi.jpg'),
(12, 'amirhebat99@gmail.com', 'profil1.JPG', 'images/profil1.JPG'),
(13, 'jiji@gmail.com', 'Capture.PNG', 'images/Capture.PNG'),
(14, 'hanis@gmail.com', 'hannah.JPG', 'images/hannah.JPG'),
(15, 'joebiden@gmail.com', 'none', 'images/no-image.png'),
(16, 'joebiden@gmail.com', '59ac8bd417000028002880e4.gif', 'images/59ac8bd417000028002880e4.gif');

-- --------------------------------------------------------

--
-- Table structure for table `public`
--

CREATE TABLE `public` (
  `public_id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `public_ic` longtext COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `telno` longtext COLLATE utf8_unicode_ci NOT NULL,
  `office_no` longtext COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `public`
--

INSERT INTO `public` (`public_id`, `email`, `username`, `public_ic`, `fullname`, `address`, `telno`, `office_no`, `job`) VALUES
(1, 'nrulhusnaaa@gmail.com', ' husna', '201006-01-1819', 'Husna Nasri', '', '', '', ''),
(2, 'joebiden@gmail.com', 'joebiden', '201018-01-1819', 'JoeBiden bin Donald Trump', 'Kangkar Pulai', '01234567890', '+441162798912', 'President'),
(3, 'jiji@gmail.com ', 'jiji kirana', '201211-01-1819', 'Zizi Kirana', 'Johor', '01234567890', '01229807645', 'Penyanyi'),
(4, 'najiha@gmail.com ', 'najiha', '991012-01-1819', 'Nur Najiha', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserve_id` int(11) NOT NULL,
  `space_id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telno` int(100) NOT NULL,
  `role` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_date` date NOT NULL,
  `end_time` time NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `komen` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reserve_id`, `space_id`, `email`, `fullname`, `telno`, `role`, `tujuan`, `start_date`, `start_time`, `end_date`, `end_time`, `status`, `komen`) VALUES
(2, 54, 'nrulhusnaaa@gmail.com', 'Nurul Husna Md Nasri', 135028954, 'public', 'homestay', '2021-04-10', '11:00:00', '2021-04-11', '12:00:00', 'Lulus', ''),
(3, 56, 'nrulhusnaaa@gmail.com', 'Nurul Husna Md Nasri', 135028954, 'public', 'homestay', '2021-04-23', '11:00:00', '2021-04-25', '12:00:00', 'Batal', 'Tarikh ini tidak dibuka untuk dibuat tempahan'),
(6, 41, 'jiji@gmail.com', 'Zizi Kirana Eh Eh', 1234567890, 'public', 'sukan', '2021-03-22', '09:00:00', '2021-03-24', '17:30:00', 'Lulus', ''),
(9, 62, 'razlin@gmail.com', 'Razlin Shahira', 1234567, 'public', 'bengkel', '2021-03-16', '09:00:00', '2021-03-17', '17:00:00', 'Dalam Permohonan', ''),
(10, 53, 'hanis@gmail.com', 'Hanis Farhana binti Jamil', 198789065, 'resident', 'perkahwinan', '2021-02-20', '09:00:00', '2021-02-21', '09:00:00', 'Lulus', ''),
(11, 54, 'hanis@gmail.com', 'Hanis Farhana binti Jamil', 198789065, 'resident', 'homestay', '2021-02-20', '09:00:00', '2021-02-21', '10:00:00', 'Lulus', ''),
(14, 60, 'nurnajihakhairul@gmail.com', 'Wan Najiha ', 1364859755, 'resident', 'sukan', '2021-03-18', '10:00:00', '2021-03-20', '17:00:00', 'Batal', 'Proses membaik pulih sport center '),
(15, 60, 'nurnajihakhairul@gmail.com', 'Wan Najiha ', 1364859755, 'resident', 'sukan', '2021-04-15', '09:00:00', '2021-04-17', '17:00:00', 'Dalam Permohonan', ''),
(16, 60, 'nurnajihakhairul@gmail.com', 'Wan Najiha ', 1364859755, 'resident', 'sukan', '2021-07-22', '09:00:00', '2021-07-24', '17:00:00', 'Lulus', ''),
(17, 56, 'hanis@gmail.com', 'Hanis Farhana binti Jamil', 198789065, 'resident', 'homestay', '2021-08-13', '09:00:00', '2021-08-14', '10:00:00', 'Dalam Permohonan', ''),
(19, 41, 'nrulhusnaaa@gmail.com', 'Nurul Husna Md Nasri', 135028954, 'public', 'sukan', '2021-06-24', '09:00:00', '2021-06-25', '17:30:00', 'Dalam Permohonan', ''),
(20, 53, 'nrulhusnaaa@gmail.com', 'Nurul Husna Md Nasri', 135028954, 'public', 'perkahwinan', '2021-02-26', '09:00:00', '2021-02-27', '15:30:00', 'Batal', 'the hall will be renovate in that day');

-- --------------------------------------------------------

--
-- Table structure for table `space`
--

CREATE TABLE `space` (
  `space_id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `block` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `price_public` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price_resident` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(200) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `filepath` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `space`
--

INSERT INTO `space` (`space_id`, `name`, `description`, `category`, `block`, `capacity`, `price_public`, `price_resident`, `status`, `filename`, `filepath`) VALUES
(41, 'Gelanggang Takraw', 'menyediakan jaring dan alatan permainan mencukupi                                        ', 'Tempat Beriadah', 'Jentayu', 20, '300', '252', 'ada', 'gelanggang.jpg', 'images/gelanggang.jpg'),
(53, 'Dewan Sri Halia', 'menyediakan pentas , bilik persalinan dan tempat letak kereta                    ', 'Dewan', 'Kenari', 400, '900', '850', 'ada', 'dewan 3.jpg', 'images/dewan 3.jpg'),
(54, 'Homestay Baiduri', 'menyediakan 3 tilam bujang, penghawa dingin', 'Rumah Penginapan', 'Merak', 8, '89', '80', 'ada', 'unnamed.jpg', 'images/unnamed.jpg'),
(55, 'Homestay Nuri', 'menyediakan 3 bilik , pendingin hawa dan tempat letak kenderaaan          ', 'Rumah Penginapan', 'Nuri', 8, '950', '700', 'ada', 'room1.jpeg', 'images/room1.jpeg'),
(56, 'Homestay Merak', 'menyediakan 4 bilik , pendingin hawa dan tempat letak kenderaan                    ', 'Rumah Penginapan', 'Jentayu', 10, '1000', '850', 'ada', 'homestay2.jpg', 'images/homestay2.jpg'),
(60, 'Sport Center', 'peralatanan sukan tidak disediakan          ', 'Tempat Beriadah', 'Kenari', 50, '300', '200', 'ada', 'sport scene.jpg', 'images/sport scene.jpg'),
(61, 'Gelanggang Futsal', 'peralatan sukan tidak disediakan          ', 'Tempat Beriadah', 'Nuri', 80, '300', '200', 'ada', 'futsal.jpg', 'images/futsal.jpg'),
(62, 'Kolong Nuri', 'menyediakan kipas                                        ', 'Kolong', 'Nuri', 130, '200', '50', 'ada', 'kolong 1.jpg', 'images/kolong 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaction_id` int(20) NOT NULL,
  `reserve_id` int(100) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trans_date` date NOT NULL,
  `trans_time` time NOT NULL,
  `rujukan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `filepath` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaction_id`, `reserve_id`, `email`, `role`, `trans_date`, `trans_time`, `rujukan`, `filename`, `filepath`) VALUES
(5, 10, 'hanis@gmail.com', 'resident', '2021-02-04', '12:51:00', '', '5.PNG', 'images/5.PNG'),
(6, 11, 'hanis@gmail.com', 'resident', '2021-02-04', '12:51:19', '', '5.PNG', 'images/5.PNG'),
(9, 16, 'nurnajihakhairul@gmail.com', 'resident', '2021-02-04', '12:57:06', '', '2.png', 'images/2.png'),
(10, 6, 'jiji@gmail.com', 'public', '2021-02-05', '09:57:56', '', '2.png', 'images/2.png'),
(12, 2, 'nrulhusnaaa@gmail.com', 'public', '2021-02-05', '03:26:09', 'for 2 days 1 night', '2.png', 'images/2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgot`
--
ALTER TABLE `forgot`
  ADD PRIMARY KEY (`forgotid`);

--
-- Indexes for table `newacc`
--
ALTER TABLE `newacc`
  ADD PRIMARY KEY (`accid`);

--
-- Indexes for table `newUser`
--
ALTER TABLE `newUser`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `profilepic`
--
ALTER TABLE `profilepic`
  ADD PRIMARY KEY (`idpic`);

--
-- Indexes for table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`public_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Indexes for table `space`
--
ALTER TABLE `space`
  ADD PRIMARY KEY (`space_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `accID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `forgot`
--
ALTER TABLE `forgot`
  MODIFY `forgotid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `newacc`
--
ALTER TABLE `newacc`
  MODIFY `accid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `newUser`
--
ALTER TABLE `newUser`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `profilepic`
--
ALTER TABLE `profilepic`
  MODIFY `idpic` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `public`
--
ALTER TABLE `public`
  MODIFY `public_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `space`
--
ALTER TABLE `space`
  MODIFY `space_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaction_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
