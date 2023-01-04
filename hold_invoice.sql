-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2022 at 03:57 PM
-- Server version: 5.7.38
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erp_pos_bimla_traders`
--

-- --------------------------------------------------------

--
-- Table structure for table `pos_hold_invoice`
--

CREATE TABLE `pos_hold_invoice` (
  `id` int(11) NOT NULL,
  `selectNameid` int(11) NOT NULL,
  `ref_id` varchar(50) NOT NULL,
  `invoice_dtl` text NOT NULL,
  `inclusiveOnOff` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `branch_unit_id` int(11) NOT NULL,
  `created_by_cid` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pos_hold_invoice`
--
ALTER TABLE `pos_hold_invoice`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
