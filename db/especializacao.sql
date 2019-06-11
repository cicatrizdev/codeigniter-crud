-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2019 at 08:34 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter-crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `especializacao`
--

CREATE TABLE `especializacao` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `especializacao`
--

INSERT INTO `especializacao` (`id`, `name`) VALUES
(3, 'ALERGOLOGIA'),
(4, 'ANGIOLOGIA'),
(5, 'BUCO MAXILO'),
(6, 'CARDIOLOGIA CLINICA'),
(7, 'CARDIOLOGIA INFANTIL'),
(8, 'CIRURGIA CABEÇA E PESCOÇO'),
(9, 'CIRURGIA DE TORAX'),
(10, 'CIRURGIA CARDÍACA'),
(11, 'CIRURGIA DE CABEÇA/PESCOÇO'),
(12, 'CIRURGIA GERAL'),
(13, 'CIRURGIA PEDIÁTRICA'),
(14, 'CIRURGIA PLÁSTICA'),
(15, 'CIRURGIA TORÁCICA'),
(16, 'CIRURGIA VASCULAR'),
(17, 'CLINICA MEDICA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `especializacao`
--
ALTER TABLE `especializacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `especializacao`
--
ALTER TABLE `especializacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
