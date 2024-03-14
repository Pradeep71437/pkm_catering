-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 02:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkm_catering`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(64) NOT NULL,
  `user_name` text NOT NULL,
  `user_number` bigint(10) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_city` text NOT NULL,
  `event_date` varchar(50) NOT NULL,
  `total_guests` int(50) NOT NULL,
  `breakfast` varchar(2000) NOT NULL,
  `lunch` varchar(2000) NOT NULL,
  `dinner` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `user_number`, `user_mail`, `user_city`, `event_date`, `total_guests`, `breakfast`, `lunch`, `dinner`) VALUES
(6, 'Pradeep', 45345345435, 'edukwicorg@gmail.com', 'Chennai', '2024-03-10', 234, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Aval Kesari\";i:2;s:22:\"Pineapple Milk Pudding\";}', 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Aval Kesari\";}', 'a:2:{i:0;s:11:\"Aval Kesari\";i:1;s:22:\"Pineapple Milk Pudding\";}'),
(7, 'pradeep24', 343423434, 'edukwicorg@gmail.com', 'Chennai', '2024-02-25', 555, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Aval Kesari\";}', 'a:2:{i:0;s:11:\"Aval Kesari\";i:1;s:22:\"Pineapple Milk Pudding\";}', 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:22:\"Pineapple Milk Pudding\";i:2;s:22:\"Pineapple Milk Pudding\";}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
