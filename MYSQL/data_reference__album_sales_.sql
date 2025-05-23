-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2025 at 02:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `album_sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_reference__album_sales_`
--

CREATE TABLE `data_reference__album_sales_` (
  `Artist` varchar(18) DEFAULT NULL,
  `Album` varchar(48) DEFAULT NULL,
  `2022 Sales` varchar(10) DEFAULT NULL,
  `Date Released` varchar(13) DEFAULT NULL,
  `Last Update` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `data_reference__album_sales_`
--

INSERT INTO `data_reference__album_sales_` (`Artist`, `Album`, `2022 Sales`, `Date Released`, `Last Update`) VALUES
('Artist', 'Album', '2022 Sales', 'Date Released', 'Last Update'),
('AB6IX', 'Complete with You: Special Album', '43058.00', '220117', '220131'),
('aespa', 'Savage', '19629.00', '211005', '220430'),
('Apink', 'Horn', '58641.00', '220214', '220228'),
('ATEEZ', 'Zero: Fever Epilogue', '3578.00', '211210', '220131'),
('BAE173', 'Intersection: Blaze', '16801.00', '220330', '220430'),
('BamBam', 'B', '87540.00', '220118', '220131'),
('Bang Yongguk', '2', '6933.00', '220302', '220331'),
('Billlie', 'The Collective Soul and Unconscious: Chapter One', '66885.00', '220223', '220430'),
('Blitzers', 'Bobbin', '17719.00', '220103', '220131'),
('Bolbbalgan4', 'Seoul', '2596.00', '220420', '220430'),
('Brave Girls', 'Thank You', '33605.00', '220315', '220331'),
('BTOB', 'Be Together', '121528.00', '220221', '220331'),
('Choi Yena', 'Smiley', '84346.00', '220117', '220331'),
('Cravity', 'Liberty: In Our Cosmos Part.2', '123922.00', '220322', '220430'),
('Cherry Bullet', 'Cherry Wish', '20250.00', '220302', '220331'),
('Def.', 'Love', '41148.00', '220126', '220131'),
('DKZ', 'Chase, Ep.2-Maum', '118583.00', '220412', '220430'),
('Dreamcatcher', 'Apocalypse: Save Us', '94706.00', '220412', '220430'),
('Drippin', 'Villian', '37535.00', '220117', '220430'),
('E\'LAST', 'Roar', '48695.00', '220427', '220430'),
('Enhypen', 'Dimension: Dilemma', '27591.00', '211012', '220430'),
('Enhypen', 'Dimension: Answer', '621425.00', '220110', '220430'),
('Epex', 'Book of Anxiety Chapter1. 21st Century Boys', '71584.00', '220411', '220430'),
('Epik High', 'Epik High is Here', '5382.00', '220214', '220228'),
('Eric Nam', 'There and Back Again', '2183.00', '220107', '220430'),
('Everglow', 'Return of the Girl', '2450.00', '211201', '220131'),
('fromis_9', 'Midnight Guest', '120245.00', '220117', '220331'),
('(G)I-dle', 'I Never Die', '198589.00', '220314', '220430'),
('Ghost9', 'Arcade: V', '9311.00', '220407', '220430'),
('Ha Sungwoon', 'You', '18717.00', '220209', '220228'),
('Highlight', 'Daydream', '86293.00', '220321', '220430'),
('ILY:1', 'Love in Bloom', '3181.00', '220404', '220430'),
('IVE', 'Eleven', '37284.00', '211201', '220430'),
('IVE', 'Love Dive', '440067.00', '220405', '220430'),
('Jinjin & Rocky', 'Restore', '57401.00', '220117', '220228'),
('Just B', 'Just Begun', '51504.00', '220414', '220430'),
('Kai', 'Peaches', '5373.00', '211130', '220131'),
('Kang Hyewon', 'Winter Special Album: W', '18305.00', '220104', '220131'),
('Kep1er', 'First Impact', '271048.00', '220103', '220430'),
('Kihyun', 'Voyager', '141407.00', '220315', '220430'),
('Kim Jaehwan', 'The Letter', '9639.00', '211228', '220131'),
('Kim Junsu', 'Dimension', '55470.00', '220317', '220430'),
('Kim Sungkyu', 'Savior', '28082.00', '220422', '220430'),
('Kim Wooseok', 'Reve: 3rd Desire', '67957.00', '220307', '220331'),
('Kim Yohan', 'Illusoin', '51754.00', '220110', '220131'),
('Kingdom', 'History of Kingdom: Pt. 4: Dann', '19450.00', '220331', '220430'),
('Kwon Eunbi', 'Color', '55923.00', '220404', '220430'),
('Kyuhyun', 'Love Story (4 Season Project 季)', '37215.00', '220125', '220228'),
('Lee Seokhoon', 'Same Spot', '7673.00', '220324', '220331'),
('Lee Seungyoon', 'Even if it becomes ruins', '7640.00', '211124', '220228'),
('Lisa', 'Lalisa', '73336.00', '210910', '220430'),
('LUNA', 'Moonlight', '3705.00', '220117', '220131'),
('Max Changmin', 'Devil', '21831.00', '220113', '220228'),
('Mirae', 'Marvelous', '48067.00', '220112', '220131'),
('Miyeon', 'My', '90064.00', '220427', '220430'),
('Monsta X', 'No Limit', '23015.00', '211119', '220228'),
('Monsta X', 'Shape of Love', '284668.00', '220426', '220430'),
('Moonbin & Sanha', 'Refuge', '144205.00', '220315', '220430'),
('Moonbyul', '6equence', '78120.00', '220119', '220228'),
('Moonbyul', 'CITT: Cheese in the Trap', '86508.00', '220428', '220430'),
('NCT 127', 'Sticker', '31194.00', '210917', '220430'),
('NCT 127', 'Favorite', '30331.00', '211025', '220331'),
('NCT 2021', 'Universe', '118633.00', '211214', '220430'),
('NCT Dream', 'Glitch Mode', '1649993.00', '220328', '220430'),
('NINE.i', 'New World', '3618.00', '220330', '220430'),
('NMIXX', 'Ad Mare', '406936.00', '220222', '220430'),
('NU\'EST', 'Need & Bubble: Nu\'est the Best Album', '63446.00', '220315', '220331'),
('Oh My Girl', 'Real Love', '66912.00', '220328', '220430'),
('Omega X', 'Love Me Like', '86941.00', '220105', '220131'),
('Onew', 'Dice', '119006.00', '220411', '220430'),
('ONEWE', 'Planet Nine: Voyager', '18075.00', '220104', '220228'),
('ONF', 'Goosebumps', '4396.00', '211203', '220131'),
('OnlyOneOf', 'Instint, Pt.2', '49362.00', '220114', '220131'),
('P1Harmony', 'Disharmony: Find Out', '91969.00', '220103', '220131'),
('Pentagon', 'In:Vite U', '90114.00', '220124', '220228'),
('Purple Kiss', 'Memem', '32266.00', '220329', '220331'),
('Ravi', 'Love & Fight', '10359.00', '220208', '220228'),
('Red Velvet', 'The Reve Festival 2022: Feel My Rhythm', '560838.00', '220321', '220430'),
('Rocket Punch', 'Yellow Punch', '20055.00', '220228', '220430'),
('Seventeen', 'Attacca', '30049.00', '211022', '220430'),
('Solar', 'Face', '43599.00', '220316', '220430'),
('SMTOWN', '2021 Winter SMTOWN: SMCU Express', '56940.00', '211227', '220131'),
('SMTOWN', '2021 Winter SMTOWN: SMCU Express', '12971.00', '211227', '220331'),
('SMTOWN', '2021 Winter SMTOWN: SMCU Express', '5974.00', '211227', '220331'),
('SMTOWN', '2021 Winter SMTOWN: SMCU Express', '74162.00', '211227', '220331'),
('SMTOWN', '2021 Winter SMTOWN: SMCU Express', '74087.00', '211227', '220331'),
('SMTOWN', '2021 Winter SMTOWN: SMCU Express', '41833.00', '211227', '220331'),
('SMTOWN', '2021 Winter SMTOWN: SMCU Express', '5265.00', '211227', '220131'),
('SMTOWN', '2021 Winter SMTOWN: SMCU Express', '62545.00', '211227', '220331'),
('SMTOWN', '2021 Winter SMTOWN: SMCU Express', '14336.00', '211227', '220131'),
('SMTOWN', '2021 Winter SMTOWN: SMCU Express', '2218.00', '211227', '220131'),
('Suho', 'Gray Suit', '186465.00', '220404', '220430'),
('StayC', 'Young-Luv.com', '182131.00', '220221', '220430'),
('Stray Kids', 'Christmas EveL', '14418.00', '211129', '220430'),
('Stray Kids', 'Oddinary', '1000088.00', '220318', '220430'),
('Super Junior', 'The Road: Winter for Spring', '142663.00', '220228', '220430'),
('Super Junior - D&E', 'Countdown Zero (Epilogue)', '8458.00', '211209', '220131'),
('Taeyeon', 'INVU', '179611.00', '220214', '220430'),
('Tempest', 'It\'s Me, It\'s We', '82307.00', '220302', '220430'),
('Tan', 'Limited Edition \'1TAN\'', '8870.00', '220310', '220430'),
('The Boyz', 'Maverick', '5566.00', '211101', '220228'),
('The Boyz', 'Webtoon Level Up Alone (OST)', '10573.00', '220318', '220331'),
('Treasure', 'The Second Step: Chapter One', '668539.00', '220215', '220430'),
('Trendz', 'Blue Set Chapter 1. Tracks', '6170.00', '220105', '220131'),
('Twice', 'Formula of Love: OT=<3', '8293.00', '211217', '220331'),
('UP10TION', 'Novella', '31415.00', '220103', '220430'),
('Verivery', 'Serioues O-Round 3: Whole', '97187.00', '220425', '220430'),
('Victon', 'Chronograph', '60959.00', '220118', '220228'),
('Viviz', 'Beam of Prism', '43638.00', '220210', '220228'),
('Weeekly', 'Play Game: Awake', '81537.00', '220307', '220331'),
('WEi', 'Love Pt. 1: First Love', '119853.00', '220316', '220331'),
('Wheein', 'Whee', '69470.00', '220117', '220131'),
('Wonho', 'Obsession', '56627.00', '220216', '220331'),
('Wonpil', 'Pilmography', '33668.00', '220210', '220228'),
('WJSN Chocome', 'Super Yuppers!', '15135.00', '220105', '220131'),
('Younha', 'End Theory Final Ed.', '7001.00', '220330', '220331'),
('Yoon Jisung', 'Miro', '6595.00', '220427', '220430'),
('Younite', 'Youni-Birth', '21927.00', '220422', '220430'),
('Yuju', 'Rec.', '22970.00', '220121', '220131');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
