-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2014 at 09:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS cheapomaildb;

USE cheapomaildb;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cheapomaildb`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(4) DEFAULT NULL,
  `body` varchar(26) NOT NULL,
  `subject` varchar(26) NOT NULL,
  `user_id` int(4) NOT NULL,
  `recipient_ids` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message_read`
--

CREATE TABLE IF NOT EXISTS `message_read` (
`id` int(4) NOT NULL,
  `message_id` int(4) NOT NULL,
  `reader_id` int(4) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(4) NOT NULL,
  `firstname` varchar(26) NOT NULL,
  `lastname` varchar(26) NOT NULL,
  `password` varchar(8) NOT NULL,
  `username` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message_read`
--
ALTER TABLE `message_read`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message_read`
--
ALTER TABLE `message_read`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
