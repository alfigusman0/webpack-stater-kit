-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2022 at 07:44 PM
-- Server version: 5.7.40-0ubuntu0.18.04.1-log
-- PHP Version: 7.4.30

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
  `id_jwt` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `token` mediumtext NOT NULL,
  `expire_at` varchar(50) NOT NULL,
  `expired` enum('0','1') NOT NULL,
  `keterangan` enum('LOGIN','LOGOUT','EXPIRED BY SYSTEM') NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ci_session`
--

CREATE TABLE `ci_session` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbs_default`
--

CREATE TABLE `tbs_default` (
  `id` varchar(50) NOT NULL,
  `kolom_1` varchar(50) NOT NULL,
  `status` enum('YA','TIDAK') NOT NULL DEFAULT 'YA' COMMENT 'Aktif: Ya / Tidak',
  `created_by` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(50) NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbs_users`
--

CREATE TABLE `tbs_users` (
  `id_user` varchar(50) NOT NULL DEFAULT '0',
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('DEVELOPMENT','ADMIN','EDITOR','AUTHOR','INDIVIDU','LEMBAGA') NOT NULL,
  `status` enum('NOT VERIFICATION','ALREADY VERIFICATION','IS BANNED','IS DELETE') NOT NULL,
  `keterangan` varchar(255) NOT NULL DEFAULT '-',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbs_users`
--

INSERT INTO `tbs_users` (`id_user`, `nama`, `username`, `password`, `level`, `status`, `keterangan`, `date_created`, `date_updated`) VALUES
('1641973513530', 'ALFI GUSMAN', 'alfi.gusman@development', '$2b$12$M4FJ3G9EsDBfLbH27GuYtOr4JNhm8KHYpOt55LWfA3ke4p.hQpGGu', 'DEVELOPMENT', 'ALREADY VERIFICATION', '-', '2022-01-12 07:45:14', '2022-01-25 12:51:05'),
('1642754768302', 'PISCAL PRATAMA P', 'piscal@development', '$2b$12$zj/6s/m0wyBGNRKKXg8m0.F.3eOprUGsK8Jqqpf3NXRQMhLZT8sae', 'DEVELOPMENT', 'ALREADY VERIFICATION', '-', '2022-01-21 08:46:08', '2022-02-16 15:00:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_jwt`
--
ALTER TABLE `ci_jwt`
  ADD PRIMARY KEY (`id_jwt`),
  ADD KEY `id_jwt` (`id_jwt`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ci_session`
--
ALTER TABLE `ci_session`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tbs_default`
--
ALTER TABLE `tbs_default`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_setting_agama_ibfk_1` (`created_by`),
  ADD KEY `tbl_setting_agama_ibfk_2` (`updated_by`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tbs_users`
--
ALTER TABLE `tbs_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_setting_user` (`id_user`),
  ADD KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ci_jwt`
--
ALTER TABLE `ci_jwt`
  ADD CONSTRAINT `ci_jwt_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbs_users` (`id_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
