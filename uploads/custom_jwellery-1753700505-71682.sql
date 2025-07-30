-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2025 at 10:14 AM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shingnkm_shingavi_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `web_owner_desk_details`
--

CREATE TABLE `web_owner_desk_details` (
  `owner_desk_id` int(11) NOT NULL,
  `owner_desk_title` text NOT NULL,
  `owner_desk_desc` text NOT NULL,
  `owner_desk_image` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_owner_desk_details`
--

INSERT INTO `web_owner_desk_details` (`owner_desk_id`, `owner_desk_title`, `owner_desk_desc`, `owner_desk_image`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'Shingavi desk', 'Information can be thought of as the resolution of uncertainty;<br />\r\n it is that which answers the question of \"What an entity is\" and thus defines both its essence and nature of its<br />\r\n characteristics. The concept of information has different meanings in different contexts.<br />\r\n', 'owner-desk-1606127095-26671.jpg', 'deleted', '4', '1606127095'),
(2, 'Shingavi desk1', 'Information can be thought of as the resolution of uncertainty; it is that which answers the question of ``What an entity is`` and thus defines both its essence and nature of its characteristics. The concept of information has different meanings in different contexts.', 'owner-desk-1612611163-86830.jpg', 'deleted', '4', '1606127587'),
(3, 'From Director\'s Desk', 'At Shingavi Jewellers Pvt. Ltd., we are proud torchbearers of a legacy that began over six decades ago with the passion and perseverance of our founders, Suvalalji and Rasiklalji Shingavi. What started as a modest venture in Mirajgaon has now grown into a trusted name across Maharashtra — a journey built on trust, purity, and an unwavering commitment to our customers.<br /><br />\r\n<br /><br />\r\nWe’ve come a long way from our humble beginnings, overcoming challenges, earning the trust of generations, and expanding our presence in Ahmednagar, Solapur, and Mirajgaon. Each showroom we open is a reflection of our heritage and our desire to serve every customer with honesty, authenticity, and excellence.<br /><br />\r\n<br /><br />\r\nAs we proudly step into our 66th year, now led by the fourth generation of the Shingavi family, our values remain unchanged. We continue to uphold our promise of offering BIS Hallmarked jewellery with unmatched purity — 18K, 22K, and 24K — backed by innovative design and personalized service.<br /><br />\r\n<br /><br />\r\nOur showrooms are not just places of purchase — they are experiences where tradition meets trend, and where each ornament tells a story of craftsmanship and care.<br /><br />\r\n<br /><br />\r\nWe thank our customers, team, and well-wishers who have stood by us throughout this incredible journey. Your trust is our true treasure.<br /><br />\r\n<br /><br />\r\nWarm regards,<br /><br />\r\nGunjan S. Shingavi<br /><br />\r\nDirector<br /><br />\r\nShingavi Jewellers Pvt. Ltd.', 'owner-desk-1747721141-15261.png', 'active', '4', '1747472039');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web_owner_desk_details`
--
ALTER TABLE `web_owner_desk_details`
  ADD PRIMARY KEY (`owner_desk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web_owner_desk_details`
--
ALTER TABLE `web_owner_desk_details`
  MODIFY `owner_desk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
