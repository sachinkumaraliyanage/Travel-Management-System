-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2017 at 03:38 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stw_travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gid` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `cate` varchar(15) NOT NULL,
  `gpath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `title`, `cate`, `gpath`) VALUES
(1, 'adven 1', 'adventure', 'img/gal/adventures 1 (2).jpg'),
(2, 'wildlife 1', 'wildlife', 'img/gal/wildlife 1 (1).jpg'),
(3, 'cal2', 'culture', 'img/gal/culture 1 (12).jpg'),
(4, 'be1', 'beaches', 'img/gal/beaches 1 (3).jpg'),
(5, 'beach_2', 'beaches', 'img/gal/beaches 1 (10).jpg'),
(6, 'adven 1', 'adventure', 'img/gal/adventures 1 (2).jpg'),
(7, 'wildlife 1', 'wildlife', 'img/gal/wildlife 1 (1).jpg'),
(8, 'cal2', 'culture', 'img/gal/culture 1 (12).jpg'),
(9, 'be1', 'beaches', 'img/gal/beaches 1 (3).jpg'),
(10, 'beach_2', 'beaches', 'img/gal/beaches 1 (10).jpg'),
(11, 'adventures 1 (5)', 'adventure', 'img/gal/adventures 1 (5).jpg'),
(12, 'adventures 1 (3)', 'adventure', 'img/gal/adventures 1 (3).jpg'),
(13, 'adventures 1 (4)', 'adventure', 'img/gal/adventures 1 (4).jpg'),
(14, 'adventures 1 (6)', 'adventure', 'img/gal/adventures 1 (6).jpg'),
(15, 'adventures 1 (7)', 'adventure', 'img/gal/adventures 1 (7).jpg'),
(16, 'adventures 1 (8)', 'adventure', 'img/gal/adventures 1 (8).JPG'),
(17, 'adventures 1 (10)', 'adventure', 'img/gal/adventures 1 (10).jpg'),
(18, 'adventures 1 (12)', 'adventure', 'img/gal/adventures 1 (12).jpg'),
(19, 'adventures 1 (13)', 'adventure', 'img/gal/adventures 1 (13).jpg'),
(20, 'adventures 1 (14)', 'adventure', 'img/gal/adventures 1 (14).jpg'),
(21, 'wildlife 1 (2)', 'wildlife', 'img/gal/wildlife 1 (2).jpg'),
(22, 'wildlife 1 (3)', 'wildlife', 'img/gal/wildlife 1 (3).jpg'),
(23, 'wildlife 1 (4)', 'wildlife', 'img/gal/wildlife 1 (4).jpg'),
(24, 'wildlife 1 (5)', 'wildlife', 'img/gal/wildlife 1 (5).jpg'),
(25, 'wildlife 1 (5)', 'wildlife', 'img/gal/wildlife 1 (6).jpg'),
(26, 'wildlife 1 (7)', 'wildlife', 'img/gal/wildlife 1 (7).jpg'),
(27, 'wildlife 1 (8)', 'wildlife', 'img/gal/wildlife 1 (8).jpg'),
(28, 'wildlife 1 (9)', 'wildlife', 'img/gal/wildlife 1 (9).jpg'),
(29, 'wildlife 1 (10)', 'wildlife', 'img/gal/wildlife 1 (10).jpg'),
(30, 'wildlife 1 (11)', 'wildlife', 'img/gal/wildlife 1 (11).jpg'),
(31, 'wildlife 1 (12)', 'wildlife', 'img/gal/wildlife 1 (12).jpg'),
(32, 'wildlife 1 (13)', 'wildlife', 'img/gal/wildlife 1 (13).jpg'),
(33, 'wildlife 1 (14)', 'wildlife', 'img/gal/wildlife 1 (14).jpg'),
(34, 'wildlife 1 (15)', 'wildlife', 'img/gal/wildlife 1 (15).jpg'),
(35, 'wildlife 1 (16)', 'wildlife', 'img/gal/wildlife 1 (16).jpg'),
(36, 'wildlife 1 (17)', 'wildlife', 'img/gal/wildlife 1 (17).jpg'),
(37, 'wildlife 1 (18)', 'wildlife', 'img/gal/wildlife 1 (18).jpg'),
(38, 'beaches 1 (1)', 'beaches', 'img/gal/beaches 1 (1).jpg'),
(39, 'beaches 1 (2)', 'beaches', 'img/gal/beaches 1 (2).jpg'),
(40, 'beaches 1 (4)', 'beaches', 'img/gal/beaches 1 (4).jpg'),
(41, 'beaches 1 (5)', 'beaches', 'img/gal/beaches 1 (5).jpg'),
(42, 'beaches 1 (6)', 'beaches', 'img/gal/beaches 1 (6).jpg'),
(43, 'beaches 1 (7)', 'beaches', 'img/gal/beaches 1 (7).jpg'),
(44, 'beaches 1 (8)', 'beaches', 'img/gal/beaches 1 (8).jpg'),
(45, 'beaches 1 (9)', 'beaches', 'img/gal/beaches 1 (9).jpg'),
(46, 'beaches 1 (11)', 'beaches', 'img/gal/beaches 1 (11).jpg'),
(47, 'beaches 1 (12)', 'beaches', 'img/gal/beaches 1 (12).jpg'),
(48, 'beaches 1 (13)', 'beaches', 'img/gal/beaches 1 (13).jpg'),
(49, 'beaches 1 (14)', 'beaches', 'img/gal/beaches 1 (14).jpg'),
(50, 'beaches 1 (15)', 'beaches', 'img/gal/beaches 1 (15).jpg'),
(51, 'beaches 1 (16)', 'beaches', 'img/gal/beaches 1 (16).jpg'),
(52, 'beaches 1 (17)', 'beaches', 'img/gal/beaches 1 (17).jpg'),
(53, 'beaches 1 (18)', 'beaches', 'img/gal/beaches 1 (18).jpg'),
(54, 'lifestyle 1 (1)', 'lifestyle', 'img/gal/lifestyle 1 (1).jpg'),
(55, 'lifestyle 1 (2)', 'lifestyle', 'img/gal/lifestyle 1 (2).jpg'),
(56, 'lifestyle 1 (3)', 'lifestyle', 'img/gal/lifestyle 1 (3).jpg'),
(57, 'lifestyle 1 (4)', 'lifestyle', 'img/gal/lifestyle 1 (4).jpg'),
(58, 'lifestyle 1 (5)', 'lifestyle', 'img/gal/lifestyle 1 (5).jpg'),
(59, 'lifestyle 1 (6)', 'lifestyle', 'img/gal/lifestyle 1 (6).jpg'),
(60, 'lifestyle 1 (7)', 'lifestyle', 'img/gal/lifestyle 1 (7).jpg'),
(61, 'lifestyle 1 (8)', 'lifestyle', 'img/gal/lifestyle 1 (8).jpg'),
(62, 'lifestyle 1 (9)', 'lifestyle', 'img/gal/lifestyle 1 (9).jpg'),
(63, 'lifestyle 1 (10)', 'lifestyle', 'img/gal/lifestyle 1 (10).jpg'),
(64, 'lifestyle 1 (11)', 'lifestyle', 'img/gal/lifestyle 1 (11).jpg'),
(65, 'lifestyle 1 (12)', 'lifestyle', 'img/gal/lifestyle 1 (12).jpg'),
(66, 'lifestyle 1 (13)', 'lifestyle', 'img/gal/lifestyle 1 (13).jpg'),
(67, 'lifestyle 1 (14)', 'lifestyle', 'img/gal/lifestyle 1 (14).jpg'),
(68, 'lifestyle 1 (15)', 'lifestyle', 'img/gal/lifestyle 1 (15).jpg'),
(69, 'lifestyle 1 (16)', 'lifestyle', 'img/gal/lifestyle 1 (16).jpg'),
(70, 'lifestyle 1 (17)', 'lifestyle', 'img/gal/lifestyle 1 (17).jpg'),
(71, 'lifestyle 1 (18)', 'lifestyle', 'img/gal/lifestyle 1 (18).jpg'),
(72, 'culture 1 (1)', 'culture', 'img/gal/culture 1 (1).jpg'),
(73, 'culture 1 (2)', 'culture', 'img/gal/culture 1 (2).jpg'),
(74, 'culture 1 (3)', 'culture', 'img/gal/culture 1 (3).jpg'),
(75, 'culture 1 (4)', 'culture', 'img/gal/culture 1 (4).jpg'),
(76, 'culture 1 (5)', 'culture', 'img/gal/culture 1 (5).jpg'),
(77, 'culture 1 (6)', 'culture', 'img/gal/culture 1 (6).jpg'),
(78, 'culture 1 (7)', 'culture', 'img/gal/culture 1 (7).jpg'),
(79, 'culture 1 (8)', 'culture', 'img/gal/culture 1 (8).jpg'),
(80, 'culture 1 (9)', 'culture', 'img/gal/culture 1 (9).jpg'),
(81, 'culture 1 (10)', 'culture', 'img/gal/culture 1 (10).jpg'),
(82, 'culture 1 (11)', 'culture', 'img/gal/culture 1 (11).jpg'),
(83, 'culture 1 (13)', 'culture', 'img/gal/culture 1 (13).jpg'),
(84, 'visit 1 (1)', 'others', 'img/gal/visit 1 (1).jpg'),
(85, 'visit 1 (2)', 'others', 'img/gal/visit 1 (2).jpg'),
(86, 'visit 1 (3)', 'others', 'img/gal/visit 1 (3).jpg'),
(87, 'visit 1 (4)', 'others', 'img/gal/visit 1 (4).jpg'),
(88, 'visit 1 (5)', 'others', 'img/gal/visit 1 (5).jpg'),
(89, 'visit 1 (6)', 'others', 'img/gal/visit 1 (6).jpg'),
(90, 'visit 1 (7)', 'others', 'img/gal/visit 1 (7).jpg'),
(91, 'visit 1 (8)', 'others', 'img/gal/visit 1 (8).jpg'),
(92, 'visit 1 (9)', 'others', 'img/gal/visit 1 (9).jpg'),
(93, 'visit 1 (10)', 'others', 'img/gal/visit 1 (10).jpg'),
(94, 'visit 1 (11)', 'others', 'img/gal/visit 1 (11).jpg'),
(95, 'visit 1 (12)', 'others', 'img/gal/visit 1 (12).jpg'),
(96, 'visit 1 (13)', 'others', 'img/gal/visit 1 (13).jpg'),
(97, 'visit 1 (14)', 'others', 'img/gal/visit 1 (14).jpg'),
(98, 'visit 1 (15)', 'others', 'img/gal/visit 1 (15).jpg'),
(99, 'visit 1 (16)', 'others', 'img/gal/visit 1 (16).jpg'),
(100, 'visit 1 (17)', 'others', 'img/gal/visit 1 (17).jpg'),
(101, 'visit 1 (18)', 'others', 'img/gal/visit 1 (18).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hcata`
--

CREATE TABLE `hcata` (
  `category` varchar(60) NOT NULL,
  `dis` text NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hcata`
--

INSERT INTO `hcata` (`category`, `dis`, `cid`) VALUES
('Luxury Hotel', 'LUXURY BOUTIQUE HOTELS IN SRI LANKA\r\nLuxury boutique hotels could have been invented in Sri Lanka in colonial days when planters built bungalows with guest rooms and a retinue of servants to look after their visitors. Today many of those bungalows have been restored or converted as luxury boutique hotel properties devoted to a handful of guests seeking holiday exclusivity in unusual locations, with fine food and caring attention.\r\n\r\nSri Lanka’s boutique hotel properties are found in secluded places throughout the island, especially in the interior where they are havens of luxury in scenic surroundings. Walkers Tours is familiar with all the privately-run luxury boutique hotels, both small and large, available for tourists who want a personalised holiday where they are considered as welcome, discerning guests and not as a room number. There are boutique hotels in Colombo too, some in converted Edwardian buildings providing the ultimate in sophisticated comfort, fine dining and glamour.', 2),
('VILLAS', 'A villa holiday in Sri Lanka with Walkers Tours guarantees the exclusivity of staying in a small property on your own or with just a few guests.', 3),
('AYURWEDIC HOTELS', 'Sri Lankan''s luxury hotel properties are found in secluded places throughout the island and are havens of luxury.', 4),
('LUXURY CAMPING', 'Luxury camping in Sri Lanka with Walkers Tours is a novel way of enjoying the island’s scenic beauty as well as getting close to nature.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hid` int(11) NOT NULL,
  `Hotel_name` text NOT NULL,
  `Hotel_rank` varchar(20) NOT NULL,
  `Hotel_cat` varchar(60) NOT NULL,
  `Hotel_location` varchar(30) NOT NULL,
  `Hotel_sdiscription` text NOT NULL,
  `Hotel_price` double NOT NULL,
  `img_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hid`, `Hotel_name`, `Hotel_rank`, `Hotel_cat`, `Hotel_location`, `Hotel_sdiscription`, `Hotel_price`, `img_path`) VALUES
(4, 'HERITANCE TEA FACTORY - NUWARA ELIYA', '5star', 'Luxury Hotel', 'Nuwra Eliya ', 'Upon entering be greeted by a warm cup of tea from the plantations of the worldâ€™s greatest tea. Giving the outlook of an old museum The Tea Factory comes with all modern facilities in all its 54 cosy rooms. If a nature trek isnâ€™t for you head out to the tea plantation and pluck and process your own tea, a little piece of Sri Lanka to take back with you', 5000, 'img/Hotel/Exterior-1-resize.jpg'),
(5, 'THE HILTON COLOMBO', '5star', 'Luxury Hotel', 'Colombo', 'The five-star Colombo Hilton upholds the standards expected from the chain. It is among the most sought-after hotels in the city and possesses an impressive range of creature comforts, including some of the best restaurants in town.', 6000, 'img/Hotel/hilton-331.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mail_validate`
--

CREATE TABLE `mail_validate` (
  `email` text NOT NULL,
  `password` text NOT NULL,
  `onepass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pament`
--

CREATE TABLE `pament` (
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `total` double NOT NULL,
  `psta` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pament`
--

INSERT INTO `pament` (`pid`, `uid`, `tid`, `hid`, `total`, `psta`) VALUES
(1, 1, 7, 0, 7000, 'true'),
(2, 1, 0, 1, 58287, 'false'),
(3, 3, 7, 0, 7000, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `passreset`
--

CREATE TABLE `passreset` (
  `email` varchar(60) NOT NULL,
  `onepass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tcat`
--

CREATE TABLE `tcat` (
  `tcatid` int(11) NOT NULL,
  `tcat` varchar(30) NOT NULL,
  `dis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tcat`
--

INSERT INTO `tcat` (`tcatid`, `tcat`, `dis`) VALUES
(1, 'HILL COUNTRY TOURS', '<br><h1 style="color: red">HILL COMFORT</h1>\r\n<p>\r\n	Kandy, the hill capital can be accessed by both land and air. The most popular land route is by train which offers amazing scenic views of the countryside. Trains leave daily from the Fort Railway Station in Colombo. Kandy is also accessible by air greatly reducing travelling time.<br>\r\n\r\nThe town of Nuwara Eliya still retains much of its British colonial charm that has earned it the nickname Little England. Nestled 2,000 metres above sea level it is one of the coldest regions of Sri Lanka with an annual average temperature of 15 degrees Celsius. Relax inside a colonial home and drink tea considered to be the best in the world. For the adventurous a trek through Horton Plains and Worlds End is a rewarding encounter with nature.\r\n\r\n</p><br>'),
(2, 'CULTURAL TOURS', '<br>\r\n<h1 style="color: red">CULTURAL TOURS, EXPERIENCE THE RICH SRI LANKAN HERITAGE</h1>\r\n<p>\r\n	Sri Lanka is home to some of South Asia’s most intriguing religious and cultural attractions, featuring elaborate art and architecture, and spectacular festivals, revealing the essence of the island’s fascinating history, and rich cultural heritage.\r\n\r\n    Historical sites such as Anuradhapura, Polonnaruwa and Dambulla, once home to ancient kingdoms, still retain many relics and artefacts of bygone eras. The famous rock fortress of Sigiriya and the Temple of the Sacred Tooth Relic of Kandy, are must-see places. A multi-religious country, Sri Lanka has many religious festivals that take place year around, such as Vesak for Buddhists, Nallur Festival for Hindus and Madhu Festival for Catholics.\r\n\r\n</p>\r\n<br>'),
(3, 'HILL COUNTRY TOURS', '<br><h1 style="color: red">HILL COMFORT</h1>\r\n<p>\r\n	Kandy, the hill capital can be accessed by both land and air. The most popular land route is by train which offers amazing scenic views of the countryside. Trains leave daily from the Fort Railway Station in Colombo. Kandy is also accessible by air greatly reducing travelling time.<br>\r\n\r\nThe town of Nuwara Eliya still retains much of its British colonial charm that has earned it the nickname Little England. Nestled 2,000 metres above sea level it is one of the coldest regions of Sri Lanka with an annual average temperature of 15 degrees Celsius. Relax inside a colonial home and drink tea considered to be the best in the world. For the adventurous a trek through Horton Plains and Worlds End is a rewarding encounter with nature.\r\n\r\n</p><br>'),
(4, 'CULTURAL TOURS', '<br>\r\n<h1 style="color: red">CULTURAL TOURS, EXPERIENCE THE RICH SRI LANKAN HERITAGE</h1>\r\n<p>\r\n	Sri Lanka is home to some of South Asia’s most intriguing religious and cultural attractions, featuring elaborate art and architecture, and spectacular festivals, revealing the essence of the island’s fascinating history, and rich cultural heritage.\r\n\r\n    Historical sites such as Anuradhapura, Polonnaruwa and Dambulla, once home to ancient kingdoms, still retain many relics and artefacts of bygone eras. The famous rock fortress of Sigiriya and the Temple of the Sacred Tooth Relic of Kandy, are must-see places. A multi-religious country, Sri Lanka has many religious festivals that take place year around, such as Vesak for Buddhists, Nallur Festival for Hindus and Madhu Festival for Catholics.\r\n\r\n</p>\r\n<br>'),
(5, 'AYURVEDIC TOURS', 'Ayurveda is an ancient, traditional wellness therapy based on harmonious balance within the body achieved through herbal diet and massage treatment'),
(6, 'BEACH TOURS', 'We know the best beaches, hidden bays and secret coves for sunbathing, swimming or surfing to reward you with an unforgettable beach holiday'),
(7, 'WILDLIFE & ADVENTURE TOURS', 'Sri Lanka is ideal for wildlife tours whether visiting National Parks to view elephants, jungle trekking, whale watching or even white-water rafting'),
(8, 'HONEYMOON TOURS', 'Private beach villas, secluded colonial bungalows, and luxurious hotel suites make Sri Lanka an ideal destination for honeymoons and weddings.');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tid` int(11) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `cat` varchar(30) NOT NULL,
  `sdis` text NOT NULL,
  `bdis` text NOT NULL,
  `price` double NOT NULL,
  `dura` int(11) NOT NULL,
  `tpath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tid`, `tittle`, `cat`, `sdis`, `bdis`, `price`, `dura`, `tpath`) VALUES
(7, 'HILL COMFORT', 'HILL COUNTRY TOURS', 'The hill country of Sri Lanka reflects the aspirations of 19th & 20th century British colonisers to create a home away from home in the tropics wi ...', 'gdfhf', 7000, 5, 'img/tour/Hill-Comfort.jpg'),
(9, 'yuiofrt', 'HILL COUNTRY TOURS', '56ty4wetur7tg8oii', '8io745rtgfp9', 456, 654, 'img/tour/Ayurvedic-Tours1.jpg'),
(10, 'SERENE SRI LANKA', 'AYURVEDIC TOURS', 'Sri Lanka has its own branch of Ayuverda that has been handed down for generations and utilises local herbs and oils for wellness therapy', 'AAAAAAAAAA', 100000, 10, 'img/tour/Serene-Sri-Lanka.jpg'),
(11, 'SUMMER RUSH AT THE SERENE PAVILIONS', 'BEACH TOURS', 'A proud winner of the "Asia Pacific Hotel Awards-2011" and "World Luxury Hotel Awards-2010"-Country Winner-Luxury Beach Resort for ...', 'AAAAA', 2000000, 8, 'img/tour/serenepavilions.jpg'),
(12, 'SUMMER RUSH AT THE SERENE PAVILIONS', 'BEACH TOURS', 'A proud winner of the "Asia Pacific Hotel Awards-2011" and "World Luxury Hotel Awards-2010"-Country Winner-Luxury Beach Resort for ...', 'AAAAA', 2000000, 8, 'img/tour/serenepavilions.jpg'),
(13, 'HILL COMFORT', 'HILL COUNTRY TOURS', 'The hill country of Sri Lanka reflects the aspirations of 19th & 20th century British colonisers to create a home away from home in the tropics wi ...', 'gdfhf', 7000, 5, 'img/tour/Hill-Comfort.jpg'),
(14, 'SERENE SRI LANKA', 'AYURVEDIC TOURS', 'Sri Lanka has its own branch of Ayuverda that has been handed down for generations and utilises local herbs and oils for wellness therapy', 'AAAAAAAAAA', 100000, 10, 'img/tour/Serene-Sri-Lanka.jpg'),
(15, 'SUMMER RUSH AT THE SERENE PAVILIONS', 'BEACH TOURS', 'A proud winner of the "Asia Pacific Hotel Awards-2011" and "World Luxury Hotel Awards-2010"-Country Winner-Luxury Beach Resort for ...', 'AAAAA', 2000000, 8, 'img/tour/serenepavilions.jpg'),
(16, 'SUMMER RUSH AT THE SERENE PAVILIONS', 'BEACH TOURS', 'A proud winner of the "Asia Pacific Hotel Awards-2011" and "World Luxury Hotel Awards-2010"-Country Winner-Luxury Beach Resort for ...', 'AAAAA', 2000000, 8, 'img/tour/serenepavilions.jpg'),
(17, 'CLASSIC CULTURAL', 'CULTURAL TOURS', 'Experience the history and culture of Sri Lanka in this tour that covers the most of what this ancient island has to offer.', 'qqwwwq', 12000, 10, 'img/tour/Classic-Cultural.jpg'),
(18, 'ROYAL HERITAGE', '	\nCULTURAL TOURS', 'Experience the beauty of Sri Lankan heritage and culture while enjoying the sophisticated luxury of boutique properties during your tour.', 'awsedrf', 100000, 10, 'img/tour/Royal-Heritage-m.jpg'),
(19, 'SRI LANKA HIGHLIGHTS', 'CULTURAL TOURS', 'Experience the highlights of Sri Lanka in this well-planned itinerary that showcases the jewels of our cultural heritage', 'awsedrf', 100000, 5, 'img/tour/Cultural-Tours1.jpg'),
(20, 'CENTRAL HIGHLANDS', 'HILL COUNTRY TOURS', 'Spend nine days experiencing the beauty of Sri Lankaâ€™s hill country.', 'awsedrf', 100000, 5, 'img/tour/Kandy-temple.jpg'),
(21, 'HILL COUNTRY HIGHLIGHTS', 'HILL COUNTRY TOURS', 'Enjoy a quick five day tour of the cool hill country of Sri Lanka. Set off from Colombo to visit the royal city of Kandy, home to the Temple of the To ...', 'awsedrf', 5000, 5, 'img/tour/wildlife_srilanka_1-horton.jpg'),
(22, 'HAPPILY EVER AFTER', 'HONEYMOON TOURS', 'Expereince the best of tropical paradise with our 7 day honeymoon tour which will take you through the amazing sights of Sri Lanka', 'awsedrf', 30000, 7, 'img/tour/Sri-Lanka-Honeymoon.jpg'),
(23, 'WEDDED BLISS', 'HONEYMOON TOURS', 'Weddings are a highlight of a coupleâ€™s life and so must be carried out in style. Celebrate yours in five-star luxury', 'awsedrf', 10000, 11, 'img/tour/Wedded-Bliss-m.jpg'),
(24, 'TROPICAL LUXURY', 'LUXURY TOURS', 'This tour has been specifically designed for those who want to experience paradise in luxury. Live in luxury you enjoy the sights of paradise', 'awsedrf', 900000, 15, 'img/tour/Flowerdew-Suite-Bedroom-aa.jpg'),
(25, 'TROPICAL LUXURY', 'LUXURY TOURS', 'This tour has been specifically designed for those who want to experience paradise in luxury. Live in luxury you enjoy the sights of paradise', 'awsedrf', 900000, 15, 'img/tour/Flowerdew-Suite-Bedroom-aa.jpg'),
(26, 'ANIMAL INSTINCT', 'WILDLIFE ADVENTURE TOURS', 'Sri Lanka is home to many animals including leopards, elephants, turtles and blue whales which are the main attractions', 'awsedrf', 50000, 13, 'img/tour/Animal-Instinct-m.jpg'),
(27, 'ANIMAL INSTINCT', 'WILDLIFE ADVENTURE TOURS', 'Sri Lanka is home to many animals including leopards, elephants, turtles and blue whales which are the main attractions', 'awsedrf', 50000, 13, 'img/tour/Animal-Instinct-m.jpg'),
(28, 'WILDLIFE PARADISE', 'WILDLIFE ADVENTURE TOURS', 'A visit to Sri Lanka is a must for all wildlife enthusiasts. The many national parks in Sri Lanka are home to majestic creatures', 'awsedrf', 20000, 10, 'img/tour/Wildlife-Paradise.jpg'),
(29, 'THE WANDERER', 'WILDLIFE ADVENTURE TOURS', 'There is no better way than to enjoy the awesome scenery of Sri Lanka than by trekking through its beautiful landscapes', 'awsedrf', 10000, 9, 'img/tour/The-Wanderer-m.jpg'),
(30, 'ROYAL HERITAGE', 'CULTURAL TOURS', 'Experience the beauty of Sri Lankan heritage and culture while enjoying the sophisticated luxury of boutique properties during your tour.', 'qwweew', 1000, 5, 'img/tour/Royal-Heritage-m (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pno1` int(20) NOT NULL,
  `pno2` int(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `ulavel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `email`, `password`, `fname`, `lname`, `pno1`, `pno2`, `country`, `address`, `ulavel`) VALUES
(1, 'sachin', 'sachin@gmail.com', '6cbf3fe817ac593e66e6d46063794e6e', 'sachin', 'liyanage', 773920012, 779026128, 'SriLanka', 'sachin hotel,\r\nnegambo road,\r\nmetiyagane', 'admin'),
(2, 'kumara', 'kumara@gmail.com', '6cbf3fe817ac593e66e6d46063794e6e', 'sachin', 'liyanage', 773920012, 779026128, 'SriLanka', 'sachin hotel,\r\nnegambo road,\r\nmetiyagane', 'staff'),
(3, 'liyanage', 'sachinhotel@gmail.com', '6cbf3fe817ac593e66e6d46063794e6e', 'sachin', 'liyanage', 773920012, 779026128, 'SriLanka', 'sachin hotel,\r\nnegambo road,\r\nmetiyagane', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `hcata`
--
ALTER TABLE `hcata`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `pament`
--
ALTER TABLE `pament`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tcat`
--
ALTER TABLE `tcat`
  ADD PRIMARY KEY (`tcatid`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `hcata`
--
ALTER TABLE `hcata`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pament`
--
ALTER TABLE `pament`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tcat`
--
ALTER TABLE `tcat`
  MODIFY `tcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
