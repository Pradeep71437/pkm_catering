-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 02:32 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

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
(7, 'pradeep24', 343423434, 'edukwicorg@gmail.com', 'Chennai', '2024-02-25', 555, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Aval Kesari\";}', 'a:2:{i:0;s:11:\"Aval Kesari\";i:1;s:22:\"Pineapple Milk Pudding\";}', 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:22:\"Pineapple Milk Pudding\";i:2;s:22:\"Pineapple Milk Pudding\";}'),
(8, 'santhosh', 13341231, 'nexglimpse@gmail.com', 'chennai', '2024-03-12', 2131, 'a:7:{i:0;s:11:\"Ashoka alwa\";i:1;s:22:\"Pineapple Milk Pudding\";i:2;s:11:\"Aval Kesari\";i:3;s:22:\"Pineapple Milk Pudding\";i:4;s:11:\"Ashoka alwa\";i:5;s:11:\"Aval Kesari\";i:6;s:22:\"Pineapple Milk Pudding\";}', 'a:9:{i:0;s:11:\"Aval Kesari\";i:1;s:22:\"Pineapple Milk Pudding\";i:2;s:22:\"Pineapple Milk Pudding\";i:3;s:11:\"Ashoka alwa\";i:4;s:22:\"Pineapple Milk Pudding\";i:5;s:22:\"Pineapple Milk Pudding\";i:6;s:11:\"Ashoka alwa\";i:7;s:11:\"Aval Kesari\";i:8;s:22:\"Pineapple Milk Pudding\";}', 'a:5:{i:0;s:11:\"Aval Kesari\";i:1;s:22:\"Pineapple Milk Pudding\";i:2;s:11:\"Ashoka alwa\";i:3;s:11:\"Aval Kesari\";i:4;s:22:\"Pineapple Milk Pudding\";}'),
(9, 'Nexglimpse', 132132, 'nexglimpse@gmail.com', 'chennai', '2024-03-22', 2321, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Aval Kesari\";i:2;s:22:\"Pineapple Milk Pudding\";}', 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Aval Kesari\";i:2;s:22:\"Pineapple Milk Pudding\";}', 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Aval Kesari\";i:2;s:22:\"Pineapple Milk Pudding\";}'),
(10, 'Nexglimpse', 2321424213, 'nexglimpse@gmail.com', 'dwedrwedw', '2024-03-07', 0, 'a:14:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Aval Kesari\";i:2;s:22:\"Pineapple Milk Pudding\";i:3;s:22:\"Pineapple Milk Pudding\";i:4;s:22:\"Pineapple Milk Pudding\";i:5;s:22:\"Pineapple Milk Pudding\";i:6;s:22:\"Pineapple Milk Pudding\";i:7;s:22:\"Pineapple Milk Pudding\";i:8;s:22:\"Pineapple Milk Pudding\";i:9;s:11:\"Ashoka alwa\";i:10;s:11:\"Aval Kesari\";i:11;s:22:\"Pineapple Milk Pudding\";i:12;s:22:\"Pineapple Milk Pudding\";i:13;s:22:\"Pineapple Milk Pudding\";}', '', 'a:5:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Aval Kesari\";i:2;s:22:\"Pineapple Milk Pudding\";i:3;s:22:\"Pineapple Milk Pudding\";i:4;s:22:\"Pineapple Milk Pudding\";}'),
(11, 'Nexglimpse', 0, 'nexglimpse@gmail.com', 'dsad', '2024-03-15', 0, 'a:24:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Aval Kesari\";i:2;s:22:\"Pineapple Milk Pudding\";i:3;s:22:\"Pineapple Milk Pudding\";i:4;s:22:\"Pineapple Milk Pudding\";i:5;s:22:\"Pineapple Milk Pudding\";i:6;s:22:\"Pineapple Milk Pudding\";i:7;s:22:\"Pineapple Milk Pudding\";i:8;s:22:\"Pineapple Milk Pudding\";i:9;s:11:\"Ashoka alwa\";i:10;s:11:\"Aval Kesari\";i:11;s:22:\"Pineapple Milk Pudding\";i:12;s:22:\"Pineapple Milk Pudding\";i:13;s:22:\"Pineapple Milk Pudding\";i:14;s:11:\"Ashoka alwa\";i:15;s:11:\"Aval Kesari\";i:16;s:22:\"Pineapple Milk Pudding\";i:17;s:22:\"Pineapple Milk Pudding\";i:18;s:22:\"Pineapple Milk Pudding\";i:19;s:11:\"Ashoka alwa\";i:20;s:11:\"Aval Kesari\";i:21;s:22:\"Pineapple Milk Pudding\";i:22;s:22:\"Pineapple Milk Pudding\";i:23;s:22:\"Pineapple Milk Pudding\";}', 'a:7:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Aval Kesari\";i:2;s:22:\"Pineapple Milk Pudding\";i:3;s:22:\"Pineapple Milk Pudding\";i:4;s:22:\"Pineapple Milk Pudding\";i:5;s:11:\"Ashoka alwa\";i:6;s:11:\"Aval Kesari\";}', 'a:6:{i:0;s:22:\"Pineapple Milk Pudding\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Aval Kesari\";i:3;s:22:\"Pineapple Milk Pudding\";i:4;s:22:\"Pineapple Milk Pudding\";i:5;s:22:\"Pineapple Milk Pudding\";}');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(40) NOT NULL,
  `uname` text DEFAULT NULL,
  `unumber` int(20) DEFAULT NULL,
  `uemail` varchar(60) DEFAULT NULL,
  `ucity` varchar(30) DEFAULT NULL,
  `usdate` date DEFAULT NULL,
  `uedate` int(11) DEFAULT NULL,
  `upartydetails` mediumtext DEFAULT NULL,
  `uhalldetails` mediumtext DEFAULT NULL,
  `malaifirday` longtext DEFAULT '0',
  `wedmalaiset` longtext DEFAULT '0',
  `kasiyathiraiset` longtext DEFAULT '0',
  `samangalset` longtext DEFAULT '0',
  `wedplateset` longtext DEFAULT '0',
  `toiletset` longtext DEFAULT '0',
  `vedicset` longtext DEFAULT '0',
  `carrybag` longtext DEFAULT '0',
  `carrybagcou` int(20) DEFAULT NULL,
  `carrybagweat` longtext DEFAULT NULL,
  `carrybagsweatcou` int(20) DEFAULT NULL,
  `carrybagcookie` longtext DEFAULT NULL,
  `carrybagcookiecou` int(20) DEFAULT NULL,
  `firdaymor` longtext DEFAULT NULL,
  `firdaymorcou` int(20) DEFAULT NULL,
  `firdayaft` longtext DEFAULT NULL,
  `firdayaftcou` int(20) DEFAULT NULL,
  `firdayeve` longtext DEFAULT NULL,
  `firdayevecou` int(20) DEFAULT NULL,
  `firdaycooldrink` longtext DEFAULT NULL,
  `firdaycooldrinkcou` int(20) DEFAULT NULL,
  `firdaysnack` longtext DEFAULT NULL,
  `firdaysnackcou` int(20) DEFAULT NULL,
  `firdaydinner` longtext DEFAULT NULL,
  `firdaydinnercou` int(20) DEFAULT NULL,
  `secdaymor` longtext DEFAULT NULL,
  `secdaymorcou` int(20) DEFAULT NULL,
  `secdayafter` longtext DEFAULT NULL,
  `secdayaftercou` int(20) DEFAULT NULL,
  `secdayeve` longtext DEFAULT NULL,
  `secdayevecou` int(20) DEFAULT NULL,
  `secdaydinner` longtext DEFAULT NULL,
  `secdaydinnercou` int(20) DEFAULT NULL,
  `guestfood` longtext DEFAULT NULL,
  `guestfoodcou` int(20) DEFAULT NULL,
  `packetfood` longtext DEFAULT NULL,
  `packetfoodcou` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `uname`, `unumber`, `uemail`, `ucity`, `usdate`, `uedate`, `upartydetails`, `uhalldetails`, `malaifirday`, `wedmalaiset`, `kasiyathiraiset`, `samangalset`, `wedplateset`, `toiletset`, `vedicset`, `carrybag`, `carrybagcou`, `carrybagweat`, `carrybagsweatcou`, `carrybagcookie`, `carrybagcookiecou`, `firdaymor`, `firdaymorcou`, `firdayaft`, `firdayaftcou`, `firdayeve`, `firdayevecou`, `firdaycooldrink`, `firdaycooldrinkcou`, `firdaysnack`, `firdaysnackcou`, `firdaydinner`, `firdaydinnercou`, `secdaymor`, `secdaymorcou`, `secdayafter`, `secdayaftercou`, `secdayeve`, `secdayevecou`, `secdaydinner`, `secdaydinnercou`, `guestfood`, `guestfoodcou`, `packetfood`, `packetfoodcou`) VALUES
(2, 'Nexglimpse', 423424, 'nexglimpse@gmail.com', 'chennai', '2024-03-06', 2024, 'sfisdhfiojsdifjsidkgjdskgkdgflklvkfdkgfkdgofkdgokfdogkofdkgkfdpogkfdogkfdkg', 'dsfgmkdvkdkgkfdgkfdgjkdjfkdsfksdfksdfklsdflkdsf', 'a:9:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:70:\"மாப்பிள்ளை வரவேற்பு மாலை-1\";i:2;s:32:\"சரம் - 2 பந்து\";i:3;s:56:\"நிச்சயதார்த்த மாலை - 2\";i:4;s:11:\"ஜடை-1\";i:5;s:32:\"சரம் - 6 பந்து\";i:6;s:41:\"ரிசப்ஷன் மாலை - 2\";i:7;s:28:\"கைசெண்டு - 2\";i:8;s:62:\"ரிசப்ஷன் ப்ளேட் ரோஸ் - 200\";}', 'a:6:{i:0;s:29:\"விரத மாலை - 2\";i:1;s:35:\"மாத்து மாலை - 5\";i:2;s:44:\"முகூர்த்த மாலை - 2\";i:3;s:32:\"சரம் - 6 பந்து\";i:4;s:207:\" உதிரிப்பூ,முகூர்த்த மேடை பூ,அலங்காரம் ஊஞ்சல் பூ,அலங்காரம் நலுங்கு பூ - 3 பந்து\";i:5;s:32:\"சரம் - 6 பந்து\";}', 'a:5:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:30:\"Fancy தடி & குடை\";i:2;s:64:\"சுந்தரகாண்டம் புத்தகம்\";i:3;s:39:\"Fancy விசிறி & மணை -2\";i:4;s:96:\"பிடி சுற்றும் பித்தளை பாத்திரங்கள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:2:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";}', 'a:1:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";}', 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 231, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 23, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 321, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 321, ' a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 231, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 31, 's:11:\"Ashoka alwa\";', 31, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 0, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 234, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 342, ' a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 334, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 32, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 243, '', 224, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 24),
(3, 'Nexglimpse', 43243, 'nexglimpse@gmail.com', 'chennai', '2024-03-15', 2024, '34dfsggf', 'tegrett', 'a:9:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:70:\"மாப்பிள்ளை வரவேற்பு மாலை-1\";i:2;s:32:\"சரம் - 2 பந்து\";i:3;s:56:\"நிச்சயதார்த்த மாலை - 2\";i:4;s:11:\"ஜடை-1\";i:5;s:32:\"சரம் - 6 பந்து\";i:6;s:41:\"ரிசப்ஷன் மாலை - 2\";i:7;s:28:\"கைசெண்டு - 2\";i:8;s:62:\"ரிசப்ஷன் ப்ளேட் ரோஸ் - 200\";}', 'a:6:{i:0;s:29:\"விரத மாலை - 2\";i:1;s:35:\"மாத்து மாலை - 5\";i:2;s:44:\"முகூர்த்த மாலை - 2\";i:3;s:32:\"சரம் - 6 பந்து\";i:4;s:207:\" உதிரிப்பூ,முகூர்த்த மேடை பூ,அலங்காரம் ஊஞ்சல் பூ,அலங்காரம் நலுங்கு பூ - 3 பந்து\";i:5;s:32:\"சரம் - 6 பந்து\";}', 'a:5:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:30:\"Fancy தடி & குடை\";i:2;s:64:\"சுந்தரகாண்டம் புத்தகம்\";i:3;s:39:\"Fancy விசிறி & மணை -2\";i:4;s:96:\"பிடி சுற்றும் பித்தளை பாத்திரங்கள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', '', '', 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 324, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 43, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:22:\"Pineapple Milk Pudding\";}', 43, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 43, ' a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 43, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 432, 's:11:\"Ashoka alwa\";', 432, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 44, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 42, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 324, ' a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 432, '', 23, '', 32, '', 32, '', 432),
(4, 'Nexglimpse', 423424, 'nexglimpse@gmail.com', 'chennai', '2024-03-15', 2024, 'dgs', 'sfdfs', 'a:9:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:70:\"மாப்பிள்ளை வரவேற்பு மாலை-1\";i:2;s:32:\"சரம் - 2 பந்து\";i:3;s:56:\"நிச்சயதார்த்த மாலை - 2\";i:4;s:11:\"ஜடை-1\";i:5;s:32:\"சரம் - 6 பந்து\";i:6;s:41:\"ரிசப்ஷன் மாலை - 2\";i:7;s:28:\"கைசெண்டு - 2\";i:8;s:62:\"ரிசப்ஷன் ப்ளேட் ரோஸ் - 200\";}', 'a:6:{i:0;s:29:\"விரத மாலை - 2\";i:1;s:35:\"மாத்து மாலை - 5\";i:2;s:44:\"முகூர்த்த மாலை - 2\";i:3;s:32:\"சரம் - 6 பந்து\";i:4;s:207:\" உதிரிப்பூ,முகூர்த்த மேடை பூ,அலங்காரம் ஊஞ்சல் பூ,அலங்காரம் நலுங்கு பூ - 3 பந்து\";i:5;s:32:\"சரம் - 6 பந்து\";}', 'a:5:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:30:\"Fancy தடி & குடை\";i:2;s:64:\"சுந்தரகாண்டம் புத்தகம்\";i:3;s:39:\"Fancy விசிறி & மணை -2\";i:4;s:96:\"பிடி சுற்றும் பித்தளை பாத்திரங்கள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:2:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";}', 'a:1:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";}', 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 3213, '', 321, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 231, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 32, ' a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 212, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 21, 's:11:\"Ashoka alwa\";', 21, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 21, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 21, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 21, ' a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 54, '', 53, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 35, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 55, '', 33),
(5, 'Nexglimpse', 423424, 'nexglimpse@gmail.com', 'chennai', '2024-03-11', 2024, 'dsfds', 'fdssfdd', 'a:9:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:70:\"மாப்பிள்ளை வரவேற்பு மாலை-1\";i:2;s:32:\"சரம் - 2 பந்து\";i:3;s:56:\"நிச்சயதார்த்த மாலை - 2\";i:4;s:11:\"ஜடை-1\";i:5;s:32:\"சரம் - 6 பந்து\";i:6;s:41:\"ரிசப்ஷன் மாலை - 2\";i:7;s:28:\"கைசெண்டு - 2\";i:8;s:62:\"ரிசப்ஷன் ப்ளேட் ரோஸ் - 200\";}', 'a:6:{i:0;s:29:\"விரத மாலை - 2\";i:1;s:35:\"மாத்து மாலை - 5\";i:2;s:44:\"முகூர்த்த மாலை - 2\";i:3;s:32:\"சரம் - 6 பந்து\";i:4;s:207:\" உதிரிப்பூ,முகூர்த்த மேடை பூ,அலங்காரம் ஊஞ்சல் பூ,அலங்காரம் நலுங்கு பூ - 3 பந்து\";i:5;s:32:\"சரம் - 6 பந்து\";}', 'a:5:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:30:\"Fancy தடி & குடை\";i:2;s:64:\"சுந்தரகாண்டம் புத்தகம்\";i:3;s:39:\"Fancy விசிறி & மணை -2\";i:4;s:96:\"பிடி சுற்றும் பித்தளை பாத்திரங்கள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:2:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";}', 'a:1:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";}', 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 131, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 313, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 313, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 31, ' a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 31, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 31, 's:11:\"Ashoka alwa\";', 313, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 31, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 333, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 33, ' a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 33, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 33, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 333, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 11, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
