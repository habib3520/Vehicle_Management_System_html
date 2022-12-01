-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 12:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `id` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`id`, `pass`) VALUES
('20201136010', 'nwu'),
('20201153010', 'nwu'),
('20201122010', 'nwu'),
('habib', '20201136010'),
('fatima', '20201122010'),
('jyoti', '20201153010');

-- --------------------------------------------------------

--
-- Table structure for table `vms_info`
--

CREATE TABLE `vms_info` (
  `type` varchar(40) NOT NULL,
  `c_name` varchar(40) NOT NULL,
  `model` varchar(40) NOT NULL,
  `origin` varchar(40) NOT NULL,
  `capasity` varchar(40) NOT NULL,
  `color` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `reg` varchar(40) NOT NULL,
  `m_date` varchar(40) NOT NULL,
  `e_num` varchar(40) NOT NULL,
  `c_num` varchar(40) NOT NULL,
  `weight` varchar(40) NOT NULL,
  `r_date` varchar(40) NOT NULL,
  `b_from` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vms_info`
--

INSERT INTO `vms_info` (`type`, `c_name`, `model`, `origin`, `capasity`, `color`, `name`, `reg`, `m_date`, `e_num`, `c_num`, `weight`, `r_date`, `b_from`, `price`) VALUES
('car', 'toyota', 'crv', 'japan', '7', 'black', 'dfyh', '456367', '12/12/12', '456365', '567346', '670', '12/12/12', 'khulna', '45674767'),
('car', 'honda', 'x-trail', 'japan', '5', 'black', 'dfyh', '64576', '12/12/12', '46565436', '865235563', '776', '12/12/12', 'khulna', '5363653'),
('bike', 'suzuki', 'gixxer sf fi abs', 'japan', '2', 'black', 'habib', '128639', '12/12/12', '456365', '567346', '188', '12/12/12', 'khulna', '280000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
