-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 12:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr10_szabo_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_szabo_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_szabo_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `isbn_code` varchar(55) NOT NULL,
  `title` varchar(55) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `author_first_name` varchar(55) NOT NULL,
  `author_last_name` varchar(55) NOT NULL,
  `short_description` varchar(300) DEFAULT NULL,
  `publisher_name` varchar(55) DEFAULT NULL,
  `publisher_size` varchar(55) DEFAULT NULL,
  `publisher_address` varchar(55) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `media_type` varchar(55) DEFAULT NULL,
  `status` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `isbn_code`, `title`, `image`, `author_first_name`, `author_last_name`, `short_description`, `publisher_name`, `publisher_size`, `publisher_address`, `publish_date`, `media_type`, `status`) VALUES
(1, '1', 'Lebe', '6083ea3db0e30.jpeg', 'Bigo', 'Lopu', 'Love', 'Dungi publishing', 'big', 'Obkirchergasse 1, 1190 Wien', '2020-12-30', 'book', 'reserved'),
(2, '2', 'Franz von Robertus', '60832e869e22d.jpeg', 'Ariel', 'Szabó', 'Love', 'White-publisher', 'big', 'Gemostrasse 27, 1010 Wien', '2010-12-01', 'book', 'available'),
(3, '3', 'Bingo', '60832eb503a36.jpeg', 'Big', 'Boss', 'Comedy', 'Heyho-publishing', 'medium', 'Großstrasse 27, 1010 Wien', '2021-04-08', 'DVD', 'available'),
(4, '4', 'Dingo', '6083ea75e12ae.jpeg', 'Ralf', 'Basta', 'Comedy', 'Yippii-publisher', 'big', 'Bustrasse 27, 1010 Wien', '2010-12-01', 'CD', 'available'),
(5, '5', 'Babyluu', '6083252ddc928.jpeg', 'Herrich', 'Dubal', 'Comedy ', 'Duda-publisher', 'small', 'Gemostrasse 27, 1010 Wien', '2006-10-01', 'book', 'available'),
(6, '6', 'Mäuschenbärli', '6083255b9618b.jpeg', 'Gaby', 'Gab', 'Comedy', 'Duda-publisher', 'small', 'Gemostrasse 27, 1010 Wien', '2010-12-01', 'DVD', 'available'),
(7, '7', 'Auf der alten Donau', '6083258399e2b.jpeg', 'Hugo', 'Wolf', 'Action', 'The Versailles', 'small', 'Ailostrasse 10, 1010 Wien', '2000-12-22', 'DVD', 'available'),
(8, '8', 'Die Ungarn', '6083256b42327.jpeg', 'Maria', 'van Coln', 'Comedy ', 'White-publisher', 'big', 'Mariahilferstarsse 27, 1010 Wien', '2010-12-01', 'book', 'available'),
(9, '9', 'Die 2', '60832577db7d2.jpeg', 'Marko', 'Gustav', 'Roman', 'White-publisher', 'big', 'Mariahilferstarsse 27, 1010 Wien', '2010-12-01', 'book', 'available'),
(62, '10', 'Noch nicht', '608327661fe45.jpeg', 'Sigi', 'Fridolin', 'short_description', 'Great publishing', 'big', 'Raffaelgasse 10', NULL, 'DVD', 'available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
