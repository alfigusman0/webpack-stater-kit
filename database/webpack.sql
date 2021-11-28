-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 29, 2021 at 12:01 AM
-- Server version: 5.7.36-0ubuntu0.18.04.1-log
-- PHP Version: 7.2.34-26+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpack`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_jwt`
--

CREATE TABLE `ci_jwt` (
  `id` int(100) NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `jwt_token` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_session`
--

INSERT INTO `ci_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('8iojmsef4jh30eo2r45ksv6fjo17f2io', '::1', 1638116676, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383131363637363b),
('asl2rl8j6r2rc9or3nncpfmovav7u7fu', '::1', 1638117280, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383131373238303b),
('ict4u6cn8vqcd4eq8cbq040lhdvrsct6', '::1', 1638118342, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383131383334323b),
('iqnf58mgvem0etag30288tarnc7up8rc', '::1', 1638116979, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383131363937393b),
('lcas07sndid3cdq3bauderjdrsvmtd5u', '::1', 1638116272, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383131363237323b),
('q5i1mehkam5ot79afovti2suf8cd38pn', '::1', 1638117943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383131373934333b),
('qckectgpd7oio5qr8j630efablk1hprf', '::1', 1638118706, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383131383730363b),
('r791oaqdog89vuv8bon0lg66ebss0n2n', '::1', 1638117591, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383131373539313b),
('vse04n8ipuikal0tmhf9m3pof24k7e27', '::1', 1638118845, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383131383730363b);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting_default`
--

CREATE TABLE `tbl_setting_default` (
  `id` int(11) NOT NULL,
  `kolom_1` varchar(50) NOT NULL,
  `kolom_2` enum('0','1') NOT NULL DEFAULT '1' COMMENT ' 0 : False, 1 : True',
  `created_by` int(11) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL DEFAULT '1',
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_setting_default`
--

INSERT INTO `tbl_setting_default` (`id`, `kolom_1`, `kolom_2`, `created_by`, `date_created`, `updated_by`, `date_updated`) VALUES
(1, 'TEST 1', '1', 1, '2020-11-28 16:29:57', 1, '2021-11-28 16:57:46'),
(2, 'TEST 2', '0', 1, '2020-11-28 16:30:06', 1, '2021-11-28 16:58:00'),
(3, 'TEST 3', '1', 1, '2021-11-28 16:30:15', 1, '2021-11-28 16:30:15'),
(4, 'TEST 4', '0', 1, '2021-11-28 16:30:22', 1, '2021-11-28 16:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting_users`
--

CREATE TABLE `tbl_setting_users` (
  `id_setting_users` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('DEVELOPMENT','ADMIN') NOT NULL,
  `keterangan` varchar(255) NOT NULL DEFAULT '-',
  `ip_login` varchar(20) NOT NULL DEFAULT '-',
  `login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_logout` varchar(20) NOT NULL DEFAULT '-',
  `logout` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_setting_users`
--

INSERT INTO `tbl_setting_users` (`id_setting_users`, `nama`, `username`, `password`, `level`, `keterangan`, `ip_login`, `login`, `ip_logout`, `logout`, `date_created`, `date_updated`) VALUES
(1, 'ALFI GUSMAN', 'alfi.gusman@development', '9c613d814075935e61903bf3077e0eed', 'DEVELOPMENT', '-', '103.147.9.123', '2021-11-28 17:44:07', '140.0.239.55', '2021-04-28 21:35:52', '2019-03-19 16:48:10', '2021-11-28 10:44:07'),
(2, 'PISCAL PRATAMA PUTRA', 'piscal@development', '69a625aa0d98a0d436c60cc65aafc4c8', 'DEVELOPMENT', '-', '::1', '2021-11-26 15:03:04', '10.166.162.61', '2021-04-15 17:47:47', '2019-03-19 16:48:10', '2021-11-26 08:03:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_jwt`
--
ALTER TABLE `ci_jwt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tbl_setting_default`
--
ALTER TABLE `tbl_setting_default`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_setting_agama_ibfk_1` (`created_by`),
  ADD KEY `tbl_setting_agama_ibfk_2` (`updated_by`);

--
-- Indexes for table `tbl_setting_users`
--
ALTER TABLE `tbl_setting_users`
  ADD PRIMARY KEY (`id_setting_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_jwt`
--
ALTER TABLE `ci_jwt`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_setting_default`
--
ALTER TABLE `tbl_setting_default`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_setting_users`
--
ALTER TABLE `tbl_setting_users`
  MODIFY `id_setting_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_setting_default`
--
ALTER TABLE `tbl_setting_default`
  ADD CONSTRAINT `tbl_setting_default_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_setting_users` (`id_setting_users`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_setting_default_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `tbl_setting_users` (`id_setting_users`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
