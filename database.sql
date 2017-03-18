-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 03:46 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projectmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `text`) VALUES
(1, 'â”—|âˆµ|â”“é‡‘æ›œæ—¥ã®ãŠã¯ã‚ˆã†ï¼HoneyWorks feat.GUMI'),
(2, 'â”—|âˆµ|â”“ã‚»ãƒ„ãƒŠãƒˆãƒªãƒƒãƒ—ï¼HoneyWorks REMIX feat.é¡éŸ³ãƒ¬ãƒ³'),
(3, 'â”—|âˆµ|â”“å‰ç”°ã€å®¶å‡ºã™ã‚‹ã£ã¦ã‚ˆï¼HoneyWorks feat.åˆéŸ³ãƒŸã‚¯'),
(4, 'â”—|âˆµ|â”“ãƒ©ã‚ºãƒ™ãƒªãƒ¼ï¼Šãƒ¢ãƒ³ã‚¹ã‚¿ãƒ¼ï¼HoneyWorks feat.åˆéŸ³ãƒŸã‚¯'),
(5, 'â”—|âˆµ|â”“åƒ•ãŒåå‰ã‚’å‘¼ã¶æ—¥ï¼HoneyWorks feat.GUMI');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_role` enum('default','admin','developer') NOT NULL DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_role`) VALUES
(1, 'mannyseete', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'developer'),
(2, 'administrator', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'admin'),
(4, 'default', '37a8eec1ce19687d132fe29051dca629d164e2c4958ba141d5f4133a33f0688f', 'default');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
