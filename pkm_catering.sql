-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 04:14 PM
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image` longtext NOT NULL,
  `attributes` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image`, `attributes`) VALUES
('https://raw.githubusercontent.com/santhosh6565/catering-service/main/uploads/1-min.png', ''),
('https://raw.githubusercontent.com/santhosh6565/catering-service/main/uploads/12-min.png', ''),
('https://raw.githubusercontent.com/santhosh6565/catering-service/main/uploads/14-min.png', ''),
('https://raw.githubusercontent.com/santhosh6565/catering-service/main/uploads/11-min.png', ''),
('https://raw.githubusercontent.com/santhosh6565/catering-service/main/uploads/3-min.png', ''),
('https://raw.githubusercontent.com/santhosh6565/catering-service/main/uploads/7-min.png', ''),
('https://raw.githubusercontent.com/santhosh6565/catering-service/main/uploads/4-min.png', ''),
('https://raw.githubusercontent.com/santhosh6565/catering-service/main/uploads/5-min.png', '');

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
  `secdayaftercou` int(20) DEFAULT NULL,
  `secdayeve` longtext DEFAULT NULL,
  `secdayevecou` int(20) DEFAULT NULL,
  `secdaydinner` longtext DEFAULT NULL,
  `secdaydinnercou` int(20) DEFAULT NULL,
  `guestfood` longtext DEFAULT NULL,
  `guestfoodcou` int(20) DEFAULT NULL,
  `packetfood` longtext DEFAULT NULL,
  `packetfoodcou` int(20) DEFAULT NULL,
  `firdayaft` longtext NOT NULL,
  `secdayaft` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `uname`, `unumber`, `uemail`, `ucity`, `usdate`, `uedate`, `upartydetails`, `uhalldetails`, `malaifirday`, `wedmalaiset`, `kasiyathiraiset`, `samangalset`, `wedplateset`, `toiletset`, `vedicset`, `carrybag`, `carrybagcou`, `carrybagweat`, `carrybagsweatcou`, `carrybagcookie`, `carrybagcookiecou`, `firdaymor`, `firdaymorcou`, `firdayaftcou`, `firdayeve`, `firdayevecou`, `firdaydrink`, `firdaycooldrinkcou`, `firdaysnack`, `firdaysnackcou`, `firdaydinner`, `firdaydinnercou`, `secdaymor`, `secdaymorcou`, `secdayaftercou`, `secdayeve`, `secdayevecou`, `secdaydinner`, `secdaydinnercou`, `guestfood`, `guestfoodcou`, `packetfood`, `packetfoodcou`, `firdayaft`, `secdayaft`) VALUES
(53, 'admin', 2147483647, 'nexglimpse@gmail.com', 'chennai', '2024-06-07', '2024-06-13', '43643', '43643', 'a:9:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:70:\"மாப்பிள்ளை வரவேற்பு மாலை-1\";i:2;s:32:\"சரம் - 2 பந்து\";i:3;s:56:\"நிச்சயதார்த்த மாலை - 2\";i:4;s:11:\"ஜடை-1\";i:5;s:32:\"சரம் - 6 பந்து\";i:6;s:41:\"ரிசப்ஷன் மாலை - 2\";i:7;s:28:\"கைசெண்டு - 2\";i:8;s:62:\"ரிசப்ஷன் ப்ளேட் ரோஸ் - 200\";}', 'a:6:{i:0;s:29:\"விரத மாலை - 2\";i:1;s:35:\"மாத்து மாலை - 5\";i:2;s:44:\"முகூர்த்த மாலை - 2\";i:3;s:32:\"சரம் - 6 பந்து\";i:4;s:76:\"அலங்காரம் நலுங்கு பூ - 3 பந்து\";i:5;s:76:\"சம்மந்தி விருந்து பூ - 2 பந்து\";}', 'a:5:{i:0;s:39:\"பட்டுபாய் (WITH NAME)\";i:1;s:30:\"Fancy தடி & குடை\";i:2;s:64:\"சுந்தரகாண்டம் புத்தகம்\";i:3;s:39:\"Fancy விசிறி & மணை -2\";i:4;s:96:\"பிடி சுற்றும் பித்தளை பாத்திரங்கள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:49:\"ஏலக்காய் - 100 கிராம்\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:14:{i:0;s:13:\"Shaving Brush\";i:1;s:5:\"Racer\";i:2;s:4:\"Foam\";i:3;s:6:\"Lotion\";i:4;s:9:\"Bath Soap\";i:5;s:7:\"Shampoo\";i:6;s:6:\"Mirror\";i:7;s:4:\"Comb\";i:8;s:8:\"Hair Oil\";i:9;s:11:\"Tooth Brush\";i:10;s:11:\"Tooth Paste\";i:11;s:10:\"Hand Towel\";i:12;s:14:\"Thiruman Petti\";i:13;s:12:\"Silver Kuchi\";}', 'a:18:{i:0;s:31:\"மஞ்சள் பொடி\";i:1;s:34:\"விரளி மஞ்சள்\";i:2;s:28:\"களி பாக்கு\";i:3;s:21:\"சந்தனம்\";i:4;s:24:\"வெற்றிலை\";i:5;s:27:\"நவதான்யம்\";i:6;s:24:\"நெல்பொறி\";i:7;s:30:\"வாழைப்பழம்\";i:8;s:24:\"திரிநூல்\";i:9;s:33:\"அரிசி - 15 கிலோ\";i:10;s:28:\"நெய் -1 கிலோ\";i:11;s:27:\"குங்குமம்\";i:12;s:24:\"கற்பூரம்\";i:13;s:18:\"வறட்டி\";i:14;s:18:\"சுள்ளி\";i:15;s:31:\"பாலிகை செட்\";i:16;s:37:\"விளக்கு எண்ணை\";i:17;s:29:\"தேங்காய் - 20\";}', 'a:12:{i:0;s:15:\"லட்டு\";i:1;s:31:\"மைசூர் பாக்\";i:2;s:31:\"பாதாம் கேக்\";i:3;s:37:\"முந்திரி கேக்\";i:4;s:21:\"நுக்கல்\";i:5;s:27:\"சோன்பப்டி\";i:6;s:31:\"நேஷனல் கேக்\";i:7;s:39:\"திரட்டிப்பால்\";i:8;s:18:\"அப்பம்\";i:9;s:40:\"தேங்காய் பர்பி\";i:10;s:30:\"கைமுறுக்கு\";i:11;s:21:\"மணோப்பு\";}', 43, 'a:4:{i:0;s:18:\"பாதுஷா\";i:1;s:31:\"மில்க் கேக்\";i:2;s:43:\"போர்ன்விடா கேக்\";i:3;s:21:\"மிக்ஸர்\";}', 43, 'a:2:{i:0;s:15:\"லட்டு\";i:1;s:21:\"மணோகரம்\";}', 54, 'a:15:{i:0;s:55:\"பைனாப்பிள் புட்டிங்\";i:1;s:31:\"அசோகா அல்வா\";i:2;s:28:\"அவல் கேசரி\";i:3;s:28:\"மினி இட்லி\";i:4;s:31:\"தட்டு இட்லி\";i:5;s:22:\"கல் தோசை\";i:6;s:21:\"பொங்கல்\";i:7;s:27:\"ஊத்தப்பம்\";i:8;s:35:\"வெஜ். கிச்சடி\";i:9;s:22:\"மெது வடை\";i:10;s:40:\"தேங்காய் சட்னி\";i:11;s:24:\"சாம்பார்\";i:12;s:12:\"காபி\";i:13;s:6:\"டீ\";i:14;s:12:\"பால்\";}', 54, 0, 'a:10:{i:0;s:28:\"காசி அல்வா\";i:1;s:34:\"பாதாம் அல்வா\";i:2;s:31:\"கேரட் அல்வா\";i:3;s:49:\"காஞ்சீபுரம் இட்லி\";i:4;s:31:\"ரவா பொங்கல்\";i:5;s:25:\"Veg கிச்சடி\";i:6;s:37:\"மைசூர் போண்டா\";i:7;s:22:\"Veg போண்டா\";i:8;s:34:\"உருளை போண்டா\";i:9;s:15:\"சமோசா\";}', 45, 'a:5:{i:0;s:30:\"பைனாப்பிள்\";i:1;s:18:\"க்ரேப்\";i:2;s:11:\"Water Melon\";i:3;s:10:\"Musk Melon\";i:4;s:30:\"Lemon மொஜிட்டோ\";}', 345, 'a:5:{i:0;s:24:\"பேல்பொறி\";i:1;s:24:\"பானிபூரி\";i:2;s:21:\"தஹிபூரி\";i:3;s:30:\"சமுசா - சாஸ்\";i:4;s:24:\"பாவ்பாஜி\";}', 534, 'a:11:{i:0;s:21:\"ரசமலாய்\";i:1;s:27:\"பதிர்பேனி\";i:2;s:24:\"சீரோட்டி\";i:3;s:52:\"மலாய் சான்ட்விட்ச்\";i:4;s:22:\"Veg புலாவ்\";i:5;s:18:\"Fried ரைஸ்\";i:6;s:40:\"தந்துரி புலாவ்\";i:7;s:34:\"பனீர் புலாவ்\";i:8;s:37:\"இளநீர் பாயசம்\";i:9;s:64:\"மில்க்மெய்டு கேரட்கீர்\";i:10;s:31:\"பாதாம் கீர்\";}', 554, 'a:5:{i:0;s:34:\"ட்ரை Fruit அல்வா\";i:1;s:31:\"அசோகா அல்வா\";i:2;s:15:\"இட்லி\";i:3;s:62:\"மசால் தோசை - மல்லி சட்னி\";i:4;s:65:\"மெது வடை - தேங்காய் சட்னி\";}', 435, 435, 'a:4:{i:0;s:18:\"ஸ்வீட்\";i:1;s:15:\"பஜ்ஜி\";i:2;s:40:\"தேங்காய் சட்னி\";i:3;s:12:\"காபி\";}', 53, 'a:4:{i:0;s:37:\"குலோப் ஜாமுன்\";i:1;s:31:\"பாதாம் கேக்\";i:2;s:33:\"தயிர்பச்சடி\";i:3;s:61:\"கத்திரிக்காய் பொறியல்\";}', 345, 'a:4:{i:0;s:31:\"புரூட் ஜாம்\";i:1;s:33:\"தயிர்பச்சடி\";i:2;s:40:\"உருளை பொடிமாஸ்\";i:3;s:36:\"நெய் & பருப்பு\";}', 35, 'a:3:{i:0;s:46:\"சர்க்கரை பொங்கல்\";i:1;s:48:\"புளியோதரை & வத்தல்\";i:2;s:55:\"தயிர் சாதம் & ஊறுகாய்\";}', 53, 'a:5:{i:0;s:30:\"மைசூர்பாகு\";i:1;s:24:\"ஜாங்கிரி\";i:2;s:61:\"காரபூந்தி தயிர்பச்சடி\";i:3;s:55:\"தக்காளி தயிர்பச்சடி\";i:4;s:31:\"பால் பாயசம்\";}', 'a:7:{i:0;s:12:\"Fruits Salad\";i:1;s:34:\"தக்காளி ஜாம்\";i:2;s:10:\"Fruits Jam\";i:3;s:38:\"பழம், சர்க்கரை\";i:4;s:45:\"வாழைக்காய்கறமது\";i:5;s:31:\"மைசூர் ரசம்\";i:6;s:40:\"அக்கார அடிசில்\";}'),
(54, 'admin', 2147483647, 'nexglimpse@gmail.com', 'chennai', '2024-06-12', '2024-06-13', '23214', '4214', 'a:9:{i:0;s:39:\"பெருமாள் மாலை-1\";i:1;s:70:\"மாப்பிள்ளை வரவேற்பு மாலை-1\";i:2;s:32:\"சரம் - 2 பந்து\";i:3;s:56:\"நிச்சயதார்த்த மாலை - 2\";i:4;s:11:\"ஜடை-1\";i:5;s:32:\"சரம் - 6 பந்து\";i:6;s:41:\"ரிசப்ஷன் மாலை - 2\";i:7;s:28:\"கைசெண்டு - 2\";i:8;s:62:\"ரிசப்ஷன் ப்ளேட் ரோஸ் - 200\";}', 'a:6:{i:0;s:29:\"விரத மாலை - 2\";i:1;s:35:\"மாத்து மாலை - 5\";i:2;s:44:\"முகூர்த்த மாலை - 2\";i:3;s:32:\"சரம் - 6 பந்து\";i:4;s:76:\"அலங்காரம் நலுங்கு பூ - 3 பந்து\";i:5;s:76:\"சம்மந்தி விருந்து பூ - 2 பந்து\";}', 'a:5:{i:0;s:39:\"பட்டுபாய் (WITH NAME)\";i:1;s:30:\"Fancy தடி & குடை\";i:2;s:64:\"சுந்தரகாண்டம் புத்தகம்\";i:3;s:39:\"Fancy விசிறி & மணை -2\";i:4;s:96:\"பிடி சுற்றும் பித்தளை பாத்திரங்கள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:49:\"ஏலக்காய் - 100 கிராம்\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:22:{i:0;s:62:\"குண்டு மஞ்சள் - 200 கிராம்\";i:1;s:41:\"சர்க்கரை - 5 கிலோ\";i:2;s:38:\"வெல்லம் - 1 கிலோ\";i:3;s:57:\"துவரம் பருப்பு - 2 கிலோ\";i:4;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:5;s:31:\"அரிசி 10 கிலோ\";i:6;s:29:\"மைதா - 1 கிலோ\";i:7;s:26:\"ரவை - 1 கிலோ\";i:8;s:49:\"முந்திரி - 500 கிராம்\";i:9;s:71:\"உலர்ந்த திராட்சை - 500 கிராம்\";i:10;s:63:\"பாதாம் பருப்பு 250 கிராம்\";i:11;s:51:\"கடலை பருப்பு - 1 கிலோ\";i:12;s:40:\"மிளகு - 200 கிராம்\";i:13;s:43:\"சீரகம் - 200 கிராம்\";i:14;s:37:\"நெய் - 500 கிராம்\";i:15;s:56:\"காபி பவுடர் - 500 கிராம்\";i:16;s:56:\"மஞ்சள் பொடி - 100 கிராம்\";i:17;s:55:\"வேர்க்கடலை - 500 கிராம்\";i:18;s:55:\"ஹார்லிக்ஸ் - 500 கிராம்\";i:19;s:48:\"டீ பவுடர் - 1 கிராம்\";i:20;s:49:\"ஜவ்வரிசி - 500 கிராம்\";i:21;s:30:\"காய்கறிகள்\";}', 'a:14:{i:0;s:13:\"Shaving Brush\";i:1;s:5:\"Racer\";i:2;s:4:\"Foam\";i:3;s:6:\"Lotion\";i:4;s:9:\"Bath Soap\";i:5;s:7:\"Shampoo\";i:6;s:6:\"Mirror\";i:7;s:4:\"Comb\";i:8;s:8:\"Hair Oil\";i:9;s:11:\"Tooth Brush\";i:10;s:11:\"Tooth Paste\";i:11;s:10:\"Hand Towel\";i:12;s:14:\"Thiruman Petti\";i:13;s:12:\"Silver Kuchi\";}', 'a:18:{i:0;s:31:\"மஞ்சள் பொடி\";i:1;s:34:\"விரளி மஞ்சள்\";i:2;s:28:\"களி பாக்கு\";i:3;s:21:\"சந்தனம்\";i:4;s:24:\"வெற்றிலை\";i:5;s:27:\"நவதான்யம்\";i:6;s:24:\"நெல்பொறி\";i:7;s:30:\"வாழைப்பழம்\";i:8;s:24:\"திரிநூல்\";i:9;s:33:\"அரிசி - 15 கிலோ\";i:10;s:28:\"நெய் -1 கிலோ\";i:11;s:27:\"குங்குமம்\";i:12;s:24:\"கற்பூரம்\";i:13;s:18:\"வறட்டி\";i:14;s:18:\"சுள்ளி\";i:15;s:31:\"பாலிகை செட்\";i:16;s:37:\"விளக்கு எண்ணை\";i:17;s:29:\"தேங்காய் - 20\";}', 'a:12:{i:0;s:15:\"லட்டு\";i:1;s:31:\"மைசூர் பாக்\";i:2;s:31:\"பாதாம் கேக்\";i:3;s:37:\"முந்திரி கேக்\";i:4;s:21:\"நுக்கல்\";i:5;s:27:\"சோன்பப்டி\";i:6;s:31:\"நேஷனல் கேக்\";i:7;s:39:\"திரட்டிப்பால்\";i:8;s:18:\"அப்பம்\";i:9;s:40:\"தேங்காய் பர்பி\";i:10;s:30:\"கைமுறுக்கு\";i:11;s:21:\"மணோப்பு\";}', 21, 'a:4:{i:0;s:18:\"பாதுஷா\";i:1;s:31:\"மில்க் கேக்\";i:2;s:43:\"போர்ன்விடா கேக்\";i:3;s:21:\"மிக்ஸர்\";}', 42, 'a:2:{i:0;s:15:\"லட்டு\";i:1;s:21:\"மணோகரம்\";}', 22, 'a:15:{i:0;s:55:\"பைனாப்பிள் புட்டிங்\";i:1;s:31:\"அசோகா அல்வா\";i:2;s:28:\"அவல் கேசரி\";i:3;s:28:\"மினி இட்லி\";i:4;s:31:\"தட்டு இட்லி\";i:5;s:22:\"கல் தோசை\";i:6;s:21:\"பொங்கல்\";i:7;s:27:\"ஊத்தப்பம்\";i:8;s:35:\"வெஜ். கிச்சடி\";i:9;s:22:\"மெது வடை\";i:10;s:40:\"தேங்காய் சட்னி\";i:11;s:24:\"சாம்பார்\";i:12;s:12:\"காபி\";i:13;s:6:\"டீ\";i:14;s:12:\"பால்\";}', 23, 0, 'a:7:{i:0;s:28:\"காசி அல்வா\";i:1;s:34:\"பாதாம் அல்வா\";i:2;s:31:\"கேரட் அல்வா\";i:3;s:49:\"காஞ்சீபுரம் இட்லி\";i:4;s:31:\"ரவா பொங்கல்\";i:5;s:25:\"Veg கிச்சடி\";i:6;s:28:\"அடை அவியல்\";}', 23, 'a:4:{i:0;s:30:\"பைனாப்பிள்\";i:1;s:18:\"க்ரேப்\";i:2;s:11:\"Water Melon\";i:3;s:10:\"Musk Melon\";}', 13, 'a:4:{i:0;s:24:\"பேல்பொறி\";i:1;s:24:\"பானிபூரி\";i:2;s:21:\"தஹிபூரி\";i:3;s:30:\"சமுசா - சாஸ்\";}', 33, 'a:11:{i:0;s:21:\"ரசமலாய்\";i:1;s:27:\"பதிர்பேனி\";i:2;s:24:\"சீரோட்டி\";i:3;s:52:\"மலாய் சான்ட்விட்ச்\";i:4;s:22:\"Veg புலாவ்\";i:5;s:18:\"Fried ரைஸ்\";i:6;s:40:\"தந்துரி புலாவ்\";i:7;s:34:\"பனீர் புலாவ்\";i:8;s:37:\"இளநீர் பாயசம்\";i:9;s:64:\"மில்க்மெய்டு கேரட்கீர்\";i:10;s:31:\"பாதாம் கீர்\";}', 213, 'a:8:{i:0;s:34:\"ட்ரை Fruit அல்வா\";i:1;s:40:\"பீட்ருட் அல்வா\";i:2;s:31:\"அசோகா அல்வா\";i:3;s:28:\"காசி அல்வா\";i:4;s:34:\"நெய் பொங்கல்\";i:5;s:62:\"மசால் தோசை - மல்லி சட்னி\";i:6;s:65:\"மெது வடை - தேங்காய் சட்னி\";i:7;s:68:\"மினிசாம்பார் வடை - Spl சட்னி\";}', 31, 32, 'a:3:{i:0;s:18:\"ஸ்வீட்\";i:1;s:15:\"பஜ்ஜி\";i:2;s:40:\"தேங்காய் சட்னி\";}', 32, 'a:6:{i:0;s:37:\"குலோப் ஜாமுன்\";i:1;s:31:\"பாதாம் கேக்\";i:2;s:68:\"மணத்தக்காளி வத்த குழம்பு\";i:3;s:34:\"தக்காளி ரசம்\";i:4;s:33:\"தயிர்பச்சடி\";i:5;s:61:\"கத்திரிக்காய் பொறியல்\";}', 21, 'a:6:{i:0;s:31:\"புரூட் ஜாம்\";i:1;s:33:\"தயிர்பச்சடி\";i:2;s:32:\"வெஜ். கூட்டு\";i:3;s:40:\"உருளை பொடிமாஸ்\";i:4;s:36:\"நெய் & பருப்பு\";i:5;s:23:\"வெஜ். வடை\";}', 32, 'a:3:{i:0;s:46:\"சர்க்கரை பொங்கல்\";i:1;s:48:\"புளியோதரை & வத்தல்\";i:2;s:55:\"தயிர் சாதம் & ஊறுகாய்\";}', 21, 'a:6:{i:0;s:30:\"மைசூர்பாகு\";i:1;s:24:\"ஜாங்கிரி\";i:2;s:34:\"அஜ்மீர் கேக்\";i:3;s:61:\"காரபூந்தி தயிர்பச்சடி\";i:4;s:55:\"தக்காளி தயிர்பச்சடி\";i:5;s:70:\"வெண்டைக்காய் தயிர்பச்சடி\";}', 'a:11:{i:0;s:12:\"Fruits Salad\";i:1;s:34:\"தக்காளி ஜாம்\";i:2;s:10:\"Fruits Jam\";i:3;s:38:\"பழம், சர்க்கரை\";i:4;s:33:\"தயிர்பச்சடி\";i:5;s:37:\"கல்யாண அவியல்\";i:6;s:37:\"மலபார் அவியல்\";i:7;s:101:\"பூசணிக்காய் மொச்சை புளிப்புக்கூட்டு\";i:8;s:55:\"சேனைக்கிழங்கு கறமது\";i:9;s:40:\"அக்கார அடிசில்\";i:10;s:52:\"பாசிபருப்பு பாயசம்\";}'),
(55, 'admin', 2147483647, 'nexglimpse@gmail.com', 'chennai', '2024-06-12', '2024-06-13', '57547', '57475', '', '', '', '', '', '', '', 'a:12:{i:0;s:15:\"லட்டு\";i:1;s:31:\"மைசூர் பாக்\";i:2;s:31:\"பாதாம் கேக்\";i:3;s:37:\"முந்திரி கேக்\";i:4;s:21:\"நுக்கல்\";i:5;s:27:\"சோன்பப்டி\";i:6;s:31:\"நேஷனல் கேக்\";i:7;s:39:\"திரட்டிப்பால்\";i:8;s:18:\"அப்பம்\";i:9;s:40:\"தேங்காய் பர்பி\";i:10;s:30:\"கைமுறுக்கு\";i:11;s:21:\"மணோப்பு\";}', 57, '', 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, '', ''),
(56, 'user', 2147483647, 'nexglimpse@gmail.com', 'chennai', '2024-06-19', '2024-07-19', '43543', '643436', '', '', '', '', '', '', '', 'a:12:{i:0;s:15:\"லட்டு\";i:1;s:31:\"மைசூர் பாக்\";i:2;s:31:\"பாதாம் கேக்\";i:3;s:37:\"முந்திரி கேக்\";i:4;s:21:\"நுக்கல்\";i:5;s:27:\"சோன்பப்டி\";i:6;s:31:\"நேஷனல் கேக்\";i:7;s:39:\"திரட்டிப்பால்\";i:8;s:18:\"அப்பம்\";i:9;s:40:\"தேங்காய் பர்பி\";i:10;s:30:\"கைமுறுக்கு\";i:11;s:21:\"மணோப்பு\";}', 64, '', 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, '', ''),
(57, 'user', 2147483647, 'nexglimpse@gmail.com', 'chennai', '2024-06-11', '2024-06-13', '46436436', '46436', '', '', '', '', '', '', '', 'a:12:{i:0;s:15:\"லட்டு\";i:1;s:31:\"மைசூர் பாக்\";i:2;s:31:\"பாதாம் கேக்\";i:3;s:37:\"முந்திரி கேக்\";i:4;s:21:\"நுக்கல்\";i:5;s:27:\"சோன்பப்டி\";i:6;s:31:\"நேஷனல் கேக்\";i:7;s:39:\"திரட்டிப்பால்\";i:8;s:18:\"அப்பம்\";i:9;s:40:\"தேங்காய் பர்பி\";i:10;s:30:\"கைமுறுக்கு\";i:11;s:21:\"மணோப்பு\";}', 66, '', 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, '', 0, 0, '', 0, '', 0, '', 0, '', 0, '', '');

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
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
