-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 06:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swacchob`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `user_id`, `name`, `email`, `subject`, `message`, `create_datetime`) VALUES
(1, 0, 'Samadhan', 'jabbar@getnada.com', 'sfdsfds', 'dfsdfsdefd', '2023-05-28 05:39:41'),
(2, 0, 'dfsdfsd', 'sufal@test.com', 'sdfsdf', 'dsfdsf', '2023-05-28 05:51:47'),
(11, 0, 'Sufal Kumar', 'sufaltest1@gmail.com', 'Test Contact', 'Demo message here', '2023-05-28 16:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `Id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `donation` varchar(255) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`Id`, `user_id`, `first_name`, `last_name`, `email`, `phone`, `donation`, `create_datetime`) VALUES
(1, 0, 'student', 'jabbar@getnada.com', 'jabbar@getnada.com', '01715562541', '100', '2023-05-28 05:36:09'),
(2, 0, 'student', 'samadhan@test.coms', 'samadhan@test.coms', '01756464646', '', '2023-05-28 05:39:06'),
(3, 0, 'student', 'jabbar@dfdsgetnada.com', 'jadsfdsbbar@getnada.com', '01716541235', '100', '2023-05-28 05:41:39'),
(4, 0, 'Sufal', 'Test', 'sufaltest@gmail.com', '01754635241', '500', '2023-05-28 16:43:31'),
(5, 0, 'Sukanta', 'Test', 'sukanta@gmail.com', '2412412412', '1000', '2023-05-28 18:19:38'),
(6, 0, 'Sukanta', 'Test', 'sukanta@gmail.com', '2412412412', '1000', '2023-05-28 18:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'newuser', 'amin@getnada.com', '117b320c031cb3498fbca3f8a6f35208', '2023-05-27 17:44:42'),
(2, 'samadhan@test.com', 'samadhan@test.com', '3c6c54891856a0f06c75cf090a78aa4c', '2023-05-28 04:16:34'),
(3, 'sal@test.com', 'sal@test.com', '35c9090b8e89d3f7ab2ebea8bf4e1a8a', '2023-05-28 04:18:28'),
(4, 'sal@test.coms', 'sal@test.coms', 'a02d287fdd4bf22fc1a390f96481f4c9', '2023-05-28 05:33:19'),
(5, 'sufal', 'sufal@test.com', 'a5e95a4a74faf5368202df9793801376', '2023-05-28 16:42:33'),
(6, 'sukanta', 'sukanta@gmail.com', '3452540750787df8836e3e5fe5881b1a', '2023-05-28 18:17:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
