-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 02:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(255) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `lname`, `mob`, `email`, `pwd`, `role`) VALUES
(1, 'Sunil', 'Rathod', '8153862147', 'rathodsunil7013@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin'),
(2, 'Mitesh', 'Rathod', '7984298562', 'svr9437@gmail.com', 'e53cbff2b3a6d1b731ad0378a51072824dee3b03', ''),
(3, 'parthiv', 'patel', '7894568754', 'patelparthiv@gmail.com', 'd249b8154f8fe558f55b89e8e61e66198de9324e', ''),
(4, 'karan', 'patil', '8974859658', 'patilkaran12@gmail.com', '58d32dbca757de7b5f3cb1eccfff2000d792d7a3', ''),
(5, 'rutvik', 'patel', '9854678952', 'patelrut@gmail.com', '01b2810e1353bb96c86dff91a7fbef60e85f3bb0', ''),
(6, 'patel ', 'yash', '9784865987', 'patelyash@gmail.com', 'f6b43efc46e62068bb89460ff360dfcdbbcbefbc', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
