-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 22, 2021 at 11:51 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Books`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `ISBN` varchar(25) NOT NULL,
  `pub_year` smallint(6) NOT NULL,
  `available` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `authorid`, `title`, `ISBN`, `pub_year`, `available`) VALUES
(1, 1, 'Nguyễn Hải Phong ', '12', 1, 1),
(2, 1, 'kaio', 'gay', 2021, 1),
(3, 1, 'kaio1', 'gay', 2021, 1),
(4, 1, 'title1', 'gay', 1, 1),
(5, 1, 'title1', 'gay', 1, 1),
(6, 1, 'luật bê đê', 'gay 100%', 2001, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
