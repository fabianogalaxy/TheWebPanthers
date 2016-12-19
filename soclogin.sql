-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 19, 2016 at 01:30 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soclogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `nick_name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `nick_name`, `email`, `password`) VALUES
(1, 'fabio', 'fabio', 'Donec.sollicitudin@musProinvel.org', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'warren', 'warren', 'Integer.urna@ac.edu', '912e79cd13c64069d91da65d62fbb78c'),
(9, 'Abel', 'Preston', 'Donec.est.Nunc@eratvolutpat.edu', '2066'),
(13, 'Ferris', 'Wing', 'velit.in.aliquet@parturientmontesnascetur.co.uk', '4006'),
(17, 'Clinton', 'Rigel', 'ac.mi.eleifend@molestietellusAenean.ca', '5998'),
(21, 'Kenneth', 'Jerome', 'ullamcorper.magna@nibhdolor.org', '2806'),
(25, 'Griffin', 'Ferdinand', 'pretium.neque@amet.com', '4399'),
(29, 'Barclay', 'Cairo', 'elementum.lorem.ut@necmollis.org', '4376'),
(33, 'Judah', 'Slade', 'Sed.dictum@Vivamusnibhdolor.co.uk', '1855'),
(37, 'Cole', 'Emerson', 'non.lobortis@mattisornare.edu', '4178');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `a1` varchar(100) NOT NULL,
  `a2` varchar(100) NOT NULL,
  `a3` varchar(100) NOT NULL,
  `a4` varchar(100) NOT NULL,
  `a5` varchar(100) NOT NULL,
  `a6` varchar(100) NOT NULL,
  `a7` varchar(100) NOT NULL,
  `a8` varchar(100) NOT NULL,
  `a9` varchar(100) NOT NULL,
  `a10` varchar(100) NOT NULL,
  `result` int(11) NOT NULL,
  `date` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `userId`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `result`, `date`) VALUES
(1, 0, '', '', '', '', '', '', '', '', '', '', 0, ''),
(5, 0, '', '', '', '', '', '', '', '', '', '', 0, ''),
(6, 0, '', '', '', '', '', '', '', '', '', '', 9, ''),
(26, 0, '', '', '', '', '', '', '', '', '', '', 1, ''),
(48, 0, '', '', '', '', '', '', '', '', '', '', 0, ''),
(49, 0, '', '', '', '', '', '', '', '', '', '', 0, ''),
(50, 0, '', '', '', '', '', '', '', '', '', '', 4, ''),
(51, 0, '', '', '', '', '', '', '', '', '', '', 3, ''),
(52, 0, '', '', '', '', '', '', '', '', '', '', 4, ''),
(53, 0, '', '', '', '', '', '', '', '', '', '', 4, ''),
(54, 0, '', '', '', '', '', '', '', '', '', '', 4, ''),
(55, 0, '', '', '', '', '', '', '', '', '', '', 4, ''),
(56, 0, '', '', '', '', '', '', '', '', '', '', 4, ''),
(57, 0, '', '', '', '', '', '', '', '', '', '', 4, ''),
(58, 0, '', '', '', '', '', '', '', '', '', '', 5, ''),
(59, 0, '', '', '', '', '', '', '', '', '', '', 2, ''),
(60, 0, '', '', '', '', '', '', '', '', '', '', 0, ''),
(61, 0, '', '', '', '', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `score` varchar(100) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `score`, `fullname`) VALUES
(1, 'Fabio', 'rtorres0@un.org', '1234', '', '0'),
(2, 'Cloé', 'bferguson1@geocities.com', '3ioSfFp', '', '0'),
(3, 'Géraldine', 'rwest2@purevolume.com', 'z0FXTT', '', '0'),
(4, 'Mylène', 'callen3@tmall.com', '9CPxZk', '', '0'),
(5, 'Maïlis', 'sjohnson4@yale.edu', 'ILl0Rccq', '', '0'),
(6, 'Erwéi', 'jcarroll5@usnews.com', 'CDP7Utuc', '', '0'),
(7, 'Geneviève', 'dalvarez6@microsoft.com', '9itPgJh', '', '0'),
(8, 'Simplifiés', 'dprice7@pcworld.com', '4ih0wt8gYR', '', '0'),
(9, 'Gaïa', 'gfreeman8@toplist.cz', '6bmKPxuzUR', '', '0'),
(10, 'Renée', 'rperez9@nba.com', 'rNPvi04PvV0', '', '0'),
(11, 'Laïla', 'druiza@telegraph.co.uk', 'ET5eLLGjL8M6', '', '0'),
(12, 'Pò', 'ggrahamb@is.gd', 'YtuefkZ62', '', '0'),
(13, 'Mélodie', 'mjordanc@yahoo.co.jp', 'K4owyV', '', '0'),
(14, 'Noémie', 'alopezd@cdc.gov', 'QcYsHinOmq5E', '', '0'),
(15, 'Bénédicte', 'rturnere@prlog.org', 'Yz1eFlyW5J9', '', '0'),
(16, 'Östen', 'sgonzalesf@wikipedia.org', 'FfDWPh4j08', '', '0'),
(17, 'Estève', 'khallg@oaic.gov.au', 'etAK5g1eW0nw', '', '0'),
(18, 'erty derty', 'faaaa@fefef.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '0'),
(19, 'Fabio Santos', 'fabio@fabio.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '45', '0'),
(20, 'Fabio Carlo', 'fabio@dfg.com', '2a8610aefdd0028c6bf074dd18721c0ef8bc43241cc7a653d7aedf2036bdf6b3', '', '0'),
(21, 'Warren Pherson', 'warren@pherson.com', '2a8610aefdd0028c6bf074dd18721c0ef8bc43241cc7a653d7aedf2036bdf6b3', '', ''),
(22, 'Jordan May', '1234@1234.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', ''),
(23, 'test', '1@1.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', ''),
(24, 'tet tet', '2@2.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
