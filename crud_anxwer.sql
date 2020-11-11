-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 06:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_anxwer`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` longtext NOT NULL,
  `author` text NOT NULL,
  `tanggal` date NOT NULL,
  `image` text NOT NULL,
  `doc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `judul`, `isi`, `author`, `tanggal`, `image`, `doc`) VALUES
(9, 'Judul artikel B', 'Lorem ipsum lagi aja\r\n\n\r\ntriple enter test\r\n\n\n\n\r\nDibuat : 2020-10-08', 'Alan Go- Lorem', '2020-10-08', 'articles/default/image.jpg', 'articles/default/document.pdf'),
(10, 'dkjsbfdkjsfkjbn', 'dosifdkshnfdsnf', 'dskjnfdkjsnf', '2020-10-15', 'articles/default/image.jpg', 'articles/default/document.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` longtext NOT NULL,
  `author` text NOT NULL,
  `email` text NOT NULL,
  `tanggal` date NOT NULL,
  `approval_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `judul`, `isi`, `author`, `email`, `tanggal`, `approval_status`) VALUES
(1, 'JUDUL A', 'INI ISI YA', 'ALAN', 'alan@email.com', '2020-10-15', 1),
(3, 'asdasdas', 'asdasdasd', 'asdasd', 'asdasdas@adsd.com', '2020-10-15', 1),
(4, 'sdfdsf', 'dsfdsfsd', 'sdfdsf', 'sfdsf!ds@fas.com', '2020-10-15', 1),
(5, 'sdfdsf', 'dsfdsfsd', 'sdfdsf', 'sfdsf!ds@fas.com', '2020-10-15', 0),
(6, 'sdfdsf', 'dsfdsfsd', 'sdfdsf', 'sfdsf!ds@fas.com', '2020-10-15', 1),
(7, 'sdfdsf', 'dsfdsfsd', 'sdfdsf', 'sfdsf!ds@fas.com', '2020-10-15', 0),
(8, 'asdasd', 'adsasdsad', 'asdasd', 'asdasdas@adsd.com', '2020-10-15', 0),
(9, 'sdfdsf', 'dsfdsf', 'dsfdsf', 'sdfdsfdfds@dsvfdsf.com', '2020-10-15', 0),
(10, 'sdfdsf', 'dsfdsf', 'dsfdsf', 'sdfdsfdfds@dsvfdsf.com', '2020-10-15', 0),
(11, 'sdfdsf', 'dsfdsf', 'dsfdsf', 'sdfdsfdfds@dsvfdsf.com', '2020-10-15', 0),
(12, 'sdfdsf', 'dsfdsf', 'dsfdsf', 'sdfdsfdfds@dsvfdsf.com', '2020-10-15', 0),
(13, 'sdfdsf', 'dsfdsf', 'dsfdsf', 'sdfdsfdfds@dsvfdsf.com', '2020-10-15', 0),
(14, 'sdfdsf', 'dsfdsf', 'dsfdsf', 'sdfdsfdfds@dsvfdsf.com', '2020-10-15', 0),
(15, 'sdfdsf', 'dsfdsf', 'dsfdsf', 'sdfdsfdfds@dsvfdsf.com', '2020-10-15', 0),
(16, 'sdfdsf', 'dsfdsf', 'dsfdsf', 'sdfdsfdfds@dsvfdsf.com', '2020-10-15', 0),
(17, 'sdfdsf', 'dsfdsf', 'dsfdsf', 'sdfdsfdfds@dsvfdsf.com', '2020-10-15', 0),
(18, 'sdfdsf', 'dsfdsf', 'dsfdsf', 'sdfdsfdfds@dsvfdsf.com', '2020-10-15', 0),
(19, 'sdfdsf', 'dsfdsf', 'dsfdsf', 'sdfdsfdfds@dsvfdsf.com', '2020-10-15', 0),
(20, 'sdfdsf', 'dsfdsf', 'dsfdsf', 'sdfdsfdfds@dsvfdsf.com', '2020-10-15', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
