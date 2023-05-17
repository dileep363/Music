-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 09:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Mail_id` varchar(40) NOT NULL,
  `Mobile_number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`username`, `Password`, `Mail_id`, `Mobile_number`) VALUES
('admin', '12345', 'abc@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `song_name` varchar(40) NOT NULL,
  `artist_name` text DEFAULT NULL,
  `song_pic` text NOT NULL,
  `song_mp3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `username`, `song_name`, `artist_name`, `song_pic`, `song_mp3`) VALUES
(10, 'admin', 'Ela Ela', 'Panja', '1682232687_63740334238928_dsfgd.webp', '1682232687_24785439978048_[iSongs.info]_02_-_Ela_Ela.mp3'),
(16, 'admin', 'Bheemla Nayak', 'Bheemla Nayak', '1682654384_26520158968645_download.jpeg', '1682654384_83454728412209_[iSongs.info]_03_-_Lala_Bheemla.mp3'),
(17, 'admin', 'orange', 'orange', '1682654583_55406697824962_download_(1).jpeg', '1682654583_91708952624444_1-Ola_Olaala_Ala-SenSongsMp3.Co.mp3'),
(18, 'admin', 'Nenu Nuvu Antu', 'Orange', '1683284997_57319417185744_download_(1).jpeg', '1683284997_51931957126535_3-Nenu_Nuvvantu-SenSongsMp3.Co.mp3'),
(19, 'admin', 'Chilipiga Chusanila', 'Orange', '1683285026_2426348986909_download_(1).jpeg', '1683285026_39474313488362_2-Chilipiga-SenSongsMp3.Co.mp3'),
(20, 'admin', 'Orange loni di oo baby', 'Orange', '1683285061_97983848788960_download_(1).jpeg', '1683285061_48410951165480_5-_O_Range-SenSongsMp3.Co.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(30) NOT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `userpassword` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `emailid`, `userpassword`) VALUES
('abc', 'dileeppujala@gmail.com', '12345'),
('dileep363', 'dileeppujala363@gmai.com', '12345'),
('phani', 'phaniteja@gmai.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `song_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
