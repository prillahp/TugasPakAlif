-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 05:55 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mynotescode`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `nama`, `ukuran`, `tipe`) VALUES
(1, '20.png', 40923, 'image/png'),
(2, 'qeqe.jpg', 307646, 'image/jpeg'),
(3, 'BA.jpg', 16023, 'image/jpeg'),
(4, '0.PNG', 3031, 'image/png'),
(5, '1.PNG', 37924, 'image/png'),
(6, 'IMG_20190328_080556.jpg', 816002, 'image/jpeg'),
(7, 'Screenshot (1).png', 126774, 'image/png'),
(8, 'Screenshot (1).png', 126774, 'image/png'),
(9, '2af1ef44-58fe-4a7a-90b1-0949b736a98d.png', 3112, 'image/png'),
(10, '06-50-01-images.jpg', 15980, 'image/jpeg'),
(11, 'bgh h.png', 9838, 'image/png'),
(12, 'awal.jpg', 80742, 'image/jpeg'),
(13, 'bomb-md.png', 11085, 'image/png'),
(14, 'test 1.png', 18815, 'image/png'),
(16, 'click_to_start.png', 41184, 'image/png'),
(17, 'index.png', 8624, 'image/png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
