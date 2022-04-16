-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 11:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `type`, `title`, `author`, `content`, `created`) VALUES
(5, 'PHP', 'PHP Login Form with MySQL database ', 'Vincy o phppot', 'Login form – an entry point of a website to authenticate users. PHP login system requires users to register with the application first to log in later.', '2022-04-16 12:02:12'),
(9, 'PHP', 'Sendmail in PHP ', 'Vincy o phppot', 'Sendmail in PHP is possible with just single line of code. PHP contains built-in mail functions to send mail.', '2022-04-16 13:19:52'),
(10, 'MySql', 'Types of clauses in MySQL', 'Tutorials Maker Website', 'MySQL clauses tutorial point; Through this tutorial, we will demonstrate about MySQL clauses like DISTINCT, FROM, GROUP BY, ORDER BY, HAVING, WHERE.', '2022-04-16 13:22:01'),
(11, 'MySql', 'MySQL TIME_FORMAT Function', 'Tutorials Maker Website', 'MySQL TIME_FORMAT function; In this tutorial, we would love to share with you how to use TIME_FORMAT() function with the help of examples.', '2022-04-16 13:23:32'),
(12, 'Angular', 'Angular 13 example: CRUD Application ', 'bezkoder', 'In this tutorial, I will show you how to build an Angular 13 project with CRUD Application example to consume Rest APIs, display, modify & search data using HttpClient, Forms and Router.', '2022-04-16 13:25:00'),
(13, 'Angular', 'Angular 13 Pagination example', 'bezkoder', 'In this tutorial, I will show you how to make Angular 13 Pagination example with existing API (server-side pagination) using ngx-pagination.', '2022-04-16 13:29:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
