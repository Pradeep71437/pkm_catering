-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 12:07 PM
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
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(40) NOT NULL,
  `uname` text DEFAULT NULL,
  `unumber` int(20) DEFAULT NULL,
  `uemail` varchar(60) DEFAULT NULL,
  `ucity` varchar(30) DEFAULT NULL,
  `usdate` date DEFAULT NULL,
  `uedate` date DEFAULT NULL,
  `upartydetails` mediumtext DEFAULT NULL,
  `uhalldetails` mediumtext DEFAULT NULL,
  `malaifirday` longtext DEFAULT NULL,
  `wedmalaiset` longtext DEFAULT NULL,
  `kasiyathiraiset` longtext DEFAULT NULL,
  `samangalset` longtext DEFAULT NULL,
  `wedplateset` longtext DEFAULT NULL,
  `toiletset` longtext DEFAULT NULL,
  `vedicset` longtext DEFAULT NULL,
  `carrybag` longtext DEFAULT NULL,
  `carrybagcou` int(20) DEFAULT NULL,
  `carrybagweat` longtext DEFAULT NULL,
  `carrybagsweatcou` int(20) DEFAULT NULL,
  `carrybagcookie` longtext DEFAULT NULL,
  `carrybagcookiecou` int(20) DEFAULT NULL,
  `firdaymor` longtext DEFAULT NULL,
  `firdaymorcou` int(20) DEFAULT NULL,
  `fir_day_after` longtext DEFAULT NULL,
  `firdayaftcou` int(20) DEFAULT NULL,
  `firdayeve` longtext DEFAULT NULL,
  `firdayevecou` int(20) DEFAULT NULL,
  `firdaydrink` longtext DEFAULT NULL,
  `firdaycooldrinkcou` int(20) DEFAULT NULL,
  `firdaysnack` longtext DEFAULT NULL,
  `firdaysnackcou` int(20) DEFAULT NULL,
  `firdaydinner` longtext DEFAULT NULL,
  `firdaydinnercou` int(20) DEFAULT NULL,
  `secdaymor` longtext DEFAULT NULL,
  `secdaymorcou` int(20) DEFAULT NULL,
  `sec_day_after` longtext DEFAULT NULL,
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

INSERT INTO `order_details` (`id`, `uname`, `unumber`, `uemail`, `ucity`, `usdate`, `uedate`, `upartydetails`, `uhalldetails`, `malaifirday`, `wedmalaiset`, `kasiyathiraiset`, `samangalset`, `wedplateset`, `toiletset`, `vedicset`, `carrybag`, `carrybagcou`, `carrybagweat`, `carrybagsweatcou`, `carrybagcookie`, `carrybagcookiecou`, `firdaymor`, `firdaymorcou`, `fir_day_after`, `firdayaftcou`, `firdayeve`, `firdayevecou`, `firdaydrink`, `firdaycooldrinkcou`, `firdaysnack`, `firdaysnackcou`, `firdaydinner`, `firdaydinnercou`, `secdaymor`, `secdaymorcou`, `sec_day_after`, `secdayaftercou`, `secdayeve`, `secdayevecou`, `secdaydinner`, `secdaydinnercou`, `guestfood`, `guestfoodcou`, `packetfood`, `packetfoodcou`) VALUES
(14, 'Nexglimpse', 2141124, 'nexglimpse@gmail.com', 'chennai', '2024-03-04', '2024-03-12', 'vsgfgrthrh', 'tytrhyrthyrte', 'a:9:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:70:\"மாப்பிள்ளை வரவேற்பு மாலை-1\";i:2;s:32:\"சரம் - 2 பந்து\";i:3;s:56:\"நிச்சயதார்த்த மாலை - 2\";i:4;s:11:\"ஜடை-1\";i:5;s:32:\"சரம் - 6 பந்து\";i:6;s:41:\"ரிசப்ஷன் மாலை - 2\";i:7;s:28:\"கைசெண்டு - 2\";i:8;s:62:\"ரிசப்ஷன் ப்ளேட் ரோஸ் - 200\";}', 'a:6:{i:0;s:29:\"விரத மாலை - 2\";i:1;s:35:\"மாத்து மாலை - 5\";i:2;s:44:\"முகூர்த்த மாலை - 2\";i:3;s:32:\"சரம் - 6 பந்து\";i:4;s:207:\" உதிரிப்பூ,முகூர்த்த மேடை பூ,அலங்காரம் ஊஞ்சல் பூ,அலங்காரம் நலுங்கு பூ - 3 பந்து\";i:5;s:32:\"சரம் - 6 பந்து\";}', 'a:5:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:30:\"Fancy தடி & குடை\";i:2;s:64:\"சுந்தரகாண்டம் புத்தகம்\";i:3;s:39:\"Fancy விசிறி & மணை -2\";i:4;s:96:\"பிடி சுற்றும் பித்தளை பாத்திரங்கள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:2:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";}', 'a:1:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";}', 'a:12:{i:0;s:5:\"Laddu\";i:1;s:9:\"Mysorepak\";i:2;s:10:\"Badam Cake\";i:3;s:11:\"Cashew Cake\";i:4;s:6:\"Nookol\";i:5;s:10:\"Soan Papdi\";i:6;s:13:\"National Cake\";i:7;s:11:\"Thirattipal\";i:8;s:5:\"Appam\";i:9;s:13:\"Coconut Burfi\";i:10;s:11:\"Kai Murukku\";i:11;s:7:\"Manoppu\";}', 13, 'a:5:{i:0;s:5:\"Laddu\";i:1;s:7:\"Badusha\";i:2;s:9:\"Milk Cake\";i:3;s:14:\"Bournvita Cake\";i:4;s:7:\"Mixture\";}', 31, 'a:2:{i:0;s:5:\"Laddu\";i:1;s:9:\"Manogaram\";}', 3131, 'a:8:{i:0;s:17:\"Pineapple Pudding\";i:1;s:11:\"Aval Kesari\";i:2;s:6:\"Pongal\";i:3;s:17:\"Pineapple Pudding\";i:4;s:11:\"Medhu Vadai\";i:5;s:11:\"Medhu Vadai\";i:6;s:11:\"Medhu Vadai\";i:7;s:11:\"Medhu Vadai\";}', 13, ' a:8:{i:0;s:17:\"Pineapple Pudding\";i:1;s:11:\"Aval Kesari\";i:2;s:6:\"Pongal\";i:3;s:17:\"Pineapple Pudding\";i:4;s:11:\"Medhu Vadai\";i:5;s:11:\"Medhu Vadai\";i:6;s:11:\"Medhu Vadai\";i:7;s:11:\"Medhu Vadai\";}', 31, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 313, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 13, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 0, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 133, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 313, NULL, 313, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 313, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 313, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 33, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 33),
(15, 'Nexglimpse', 6866, 'nexglimpse@gmail.com', 'chennai', '2024-03-07', '2024-03-08', 'bnghjghjhgj', 'kytktgjtg', 'a:9:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:70:\"மாப்பிள்ளை வரவேற்பு மாலை-1\";i:2;s:32:\"சரம் - 2 பந்து\";i:3;s:56:\"நிச்சயதார்த்த மாலை - 2\";i:4;s:11:\"ஜடை-1\";i:5;s:32:\"சரம் - 6 பந்து\";i:6;s:41:\"ரிசப்ஷன் மாலை - 2\";i:7;s:28:\"கைசெண்டு - 2\";i:8;s:62:\"ரிசப்ஷன் ப்ளேட் ரோஸ் - 200\";}', 'a:6:{i:0;s:29:\"விரத மாலை - 2\";i:1;s:35:\"மாத்து மாலை - 5\";i:2;s:44:\"முகூர்த்த மாலை - 2\";i:3;s:32:\"சரம் - 6 பந்து\";i:4;s:207:\" உதிரிப்பூ,முகூர்த்த மேடை பூ,அலங்காரம் ஊஞ்சல் பூ,அலங்காரம் நலுங்கு பூ - 3 பந்து\";i:5;s:32:\"சரம் - 6 பந்து\";}', 'a:5:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:30:\"Fancy தடி & குடை\";i:2;s:64:\"சுந்தரகாண்டம் புத்தகம்\";i:3;s:39:\"Fancy விசிறி & மணை -2\";i:4;s:96:\"பிடி சுற்றும் பித்தளை பாத்திரங்கள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:2:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";}', 'a:1:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";}', 'a:12:{i:0;s:5:\"Laddu\";i:1;s:9:\"Mysorepak\";i:2;s:10:\"Badam Cake\";i:3;s:11:\"Cashew Cake\";i:4;s:6:\"Nookol\";i:5;s:10:\"Soan Papdi\";i:6;s:13:\"National Cake\";i:7;s:11:\"Thirattipal\";i:8;s:5:\"Appam\";i:9;s:13:\"Coconut Burfi\";i:10;s:11:\"Kai Murukku\";i:11;s:7:\"Manoppu\";}', 244, 'a:5:{i:0;s:5:\"Laddu\";i:1;s:7:\"Badusha\";i:2;s:9:\"Milk Cake\";i:3;s:14:\"Bournvita Cake\";i:4;s:7:\"Mixture\";}', 24, 'a:2:{i:0;s:5:\"Laddu\";i:1;s:9:\"Manogaram\";}', 244, 'a:8:{i:0;s:17:\"Pineapple Pudding\";i:1;s:11:\"Aval Kesari\";i:2;s:6:\"Pongal\";i:3;s:17:\"Pineapple Pudding\";i:4;s:11:\"Medhu Vadai\";i:5;s:11:\"Medhu Vadai\";i:6;s:11:\"Medhu Vadai\";i:7;s:11:\"Medhu Vadai\";}', 33, 'a:8:{i:0;s:17:\"Pineapple Pudding\";i:1;s:11:\"Aval Kesari\";i:2;s:6:\"Pongal\";i:3;s:17:\"Pineapple Pudding\";i:4;s:11:\"Medhu Vadai\";i:5;s:11:\"Medhu Vadai\";i:6;s:11:\"Medhu Vadai\";i:7;s:11:\"Medhu Vadai\";}', 13, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 133, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 313, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 313, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 133, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 31, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 31, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 33, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 313, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 244, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 42),
(16, 'Nexglimpse', 67657, 'nexglimpse@gmail.com', 'chennai', '2024-03-21', '2024-03-21', 'kjjghkjhk', 'jkhkhlgh', 'a:9:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:70:\"மாப்பிள்ளை வரவேற்பு மாலை-1\";i:2;s:32:\"சரம் - 2 பந்து\";i:3;s:56:\"நிச்சயதார்த்த மாலை - 2\";i:4;s:11:\"ஜடை-1\";i:5;s:32:\"சரம் - 6 பந்து\";i:6;s:41:\"ரிசப்ஷன் மாலை - 2\";i:7;s:28:\"கைசெண்டு - 2\";i:8;s:62:\"ரிசப்ஷன் ப்ளேட் ரோஸ் - 200\";}', 'a:6:{i:0;s:29:\"விரத மாலை - 2\";i:1;s:35:\"மாத்து மாலை - 5\";i:2;s:44:\"முகூர்த்த மாலை - 2\";i:3;s:32:\"சரம் - 6 பந்து\";i:4;s:207:\" உதிரிப்பூ,முகூர்த்த மேடை பூ,அலங்காரம் ஊஞ்சல் பூ,அலங்காரம் நலுங்கு பூ - 3 பந்து\";i:5;s:32:\"சரம் - 6 பந்து\";}', 'a:5:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:30:\"Fancy தடி & குடை\";i:2;s:64:\"சுந்தரகாண்டம் புத்தகம்\";i:3;s:39:\"Fancy விசிறி & மணை -2\";i:4;s:96:\"பிடி சுற்றும் பித்தளை பாத்திரங்கள்\";}', '', '', '', '', 'a:12:{i:0;s:5:\"Laddu\";i:1;s:9:\"Mysorepak\";i:2;s:10:\"Badam Cake\";i:3;s:11:\"Cashew Cake\";i:4;s:6:\"Nookol\";i:5;s:10:\"Soan Papdi\";i:6;s:13:\"National Cake\";i:7;s:11:\"Thirattipal\";i:8;s:5:\"Appam\";i:9;s:13:\"Coconut Burfi\";i:10;s:11:\"Kai Murukku\";i:11;s:7:\"Manoppu\";}', 78, 'a:3:{i:0;s:5:\"Laddu\";i:1;s:7:\"Badusha\";i:2;s:9:\"Milk Cake\";}', 8658, 'a:2:{i:0;s:5:\"Laddu\";i:1;s:9:\"Manogaram\";}', 88, 'a:8:{i:0;s:17:\"Pineapple Pudding\";i:1;s:11:\"Aval Kesari\";i:2;s:6:\"Pongal\";i:3;s:17:\"Pineapple Pudding\";i:4;s:11:\"Medhu Vadai\";i:5;s:11:\"Medhu Vadai\";i:6;s:11:\"Medhu Vadai\";i:7;s:11:\"Medhu Vadai\";}', 88, 'a:8:{i:0;s:17:\"Pineapple Pudding\";i:1;s:11:\"Aval Kesari\";i:2;s:6:\"Pongal\";i:3;s:17:\"Pineapple Pudding\";i:4;s:11:\"Medhu Vadai\";i:5;s:11:\"Medhu Vadai\";i:6;s:11:\"Medhu Vadai\";i:7;s:11:\"Medhu Vadai\";}', 88, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 865, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 888888, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 886, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 6858, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 868, NULL, 88, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 88, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 688, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 88, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 88),
(17, 'santhosh', 423424, 'nexglimpse@gmail.com', 'chennai', '2024-03-08', '2024-03-19', 'dsafsafdsg', 'gddgertre', 'a:9:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:70:\"மாப்பிள்ளை வரவேற்பு மாலை-1\";i:2;s:32:\"சரம் - 2 பந்து\";i:3;s:56:\"நிச்சயதார்த்த மாலை - 2\";i:4;s:11:\"ஜடை-1\";i:5;s:32:\"சரம் - 6 பந்து\";i:6;s:41:\"ரிசப்ஷன் மாலை - 2\";i:7;s:28:\"கைசெண்டு - 2\";i:8;s:62:\"ரிசப்ஷன் ப்ளேட் ரோஸ் - 200\";}', 'a:6:{i:0;s:29:\"விரத மாலை - 2\";i:1;s:35:\"மாத்து மாலை - 5\";i:2;s:44:\"முகூர்த்த மாலை - 2\";i:3;s:32:\"சரம் - 6 பந்து\";i:4;s:207:\" உதிரிப்பூ,முகூர்த்த மேடை பூ,அலங்காரம் ஊஞ்சல் பூ,அலங்காரம் நலுங்கு பூ - 3 பந்து\";i:5;s:32:\"சரம் - 6 பந்து\";}', 'a:5:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:30:\"Fancy தடி & குடை\";i:2;s:64:\"சுந்தரகாண்டம் புத்தகம்\";i:3;s:39:\"Fancy விசிறி & மணை -2\";i:4;s:96:\"பிடி சுற்றும் பித்தளை பாத்திரங்கள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:2:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";}', 'a:1:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";}', 'a:12:{i:0;s:5:\"Laddu\";i:1;s:9:\"Mysorepak\";i:2;s:10:\"Badam Cake\";i:3;s:11:\"Cashew Cake\";i:4;s:6:\"Nookol\";i:5;s:10:\"Soan Papdi\";i:6;s:13:\"National Cake\";i:7;s:11:\"Thirattipal\";i:8;s:5:\"Appam\";i:9;s:13:\"Coconut Burfi\";i:10;s:11:\"Kai Murukku\";i:11;s:7:\"Manoppu\";}', 23, 'a:5:{i:0;s:5:\"Laddu\";i:1;s:7:\"Badusha\";i:2;s:9:\"Milk Cake\";i:3;s:14:\"Bournvita Cake\";i:4;s:7:\"Mixture\";}', 32, 'a:2:{i:0;s:5:\"Laddu\";i:1;s:9:\"Manogaram\";}', 33, 'a:8:{i:0;s:17:\"Pineapple Pudding\";i:1;s:11:\"Aval Kesari\";i:2;s:6:\"Pongal\";i:3;s:17:\"Pineapple Pudding\";i:4;s:11:\"Medhu Vadai\";i:5;s:11:\"Medhu Vadai\";i:6;s:11:\"Medhu Vadai\";i:7;s:11:\"Medhu Vadai\";}', 33, 'a:8:{i:0;s:17:\"Pineapple Pudding\";i:1;s:11:\"Aval Kesari\";i:2;s:6:\"Pongal\";i:3;s:17:\"Pineapple Pudding\";i:4;s:11:\"Medhu Vadai\";i:5;s:11:\"Medhu Vadai\";i:6;s:11:\"Medhu Vadai\";i:7;s:11:\"Medhu Vadai\";}', 33, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 33, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 0, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 33, 'a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 23, 'a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 33, ' a:2:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";}', 45, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 555, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 55, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 12, 'a:1:{i:0;s:11:\"Ashoka alwa\";}', 222),
(20, '', 0, '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', 0, '', 0, ' a:19:{i:0;s:31:\"மைசூர் பாக்\";i:1;s:24:\"ஜாங்கிரி\";i:2;s:34:\"தயிர் பச்சடி\";i:3;s:58:\"கத்திரிக்காய் கூட்டு\";i:4;s:32:\"சௌ சௌ கூட்டு\";i:5;s:58:\"வெண்டைக்காய் பொறியல்\";i:6;s:31:\"சேனை ரோஸ்ட்\";i:7;s:52:\"அவரைக்காய் பொறியல்\";i:8;s:56:\"கோஸ் பட்டாணி பொறியல்\";i:9;s:31:\"வாழை சிப்ஸ்\";i:10;s:11:\"Ashoka alwa\";i:11;s:35:\"சாம்பார்  வடை\";i:12;s:16:\"ரச வடை\";i:13;s:24:\"சாம்பார்\";i:14;s:12:\"ரசம்\";i:15;s:34:\"பால் பாயாசம்\";i:16;s:15:\"தயிர்\";i:17;s:21:\"ஊறுகாய்\";i:18;s:21:\"அப்பளம்\";}', 0, '', 0, '', 0, '', 0, '', 0, '', 0, ' a:3:{i:0;s:11:\"Ashoka alwa\";i:1;s:11:\"Ashoka alwa\";i:2;s:11:\"Ashoka alwa\";}', 313, '', 0, '', 0, '', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
