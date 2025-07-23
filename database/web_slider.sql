-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2025 at 06:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `web_slider`
--

CREATE TABLE `web_slider` (
  `web_slider_id` int(11) NOT NULL,
  `web_slider_image` text NOT NULL,
  `web_slider_url` text NOT NULL,
  `web_slider_title` text NOT NULL,
  `web_slider_desc` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `web_slider`
--

INSERT INTO `web_slider` (`web_slider_id`, `web_slider_image`, `web_slider_url`, `web_slider_title`, `web_slider_desc`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'slider-1740141242-66028.webp', 'https://shingavijewellers.com/uploads/slider-1740141242-66028.webp', '', '', 'active', '4', '1740141242'),
(2, 'slider-1742367423-87509.mp4', 'https://www.shingavijewellers.com/uploads/slider-1742367423-87509.mp4', '', '', 'deleted', '4', '1742367423'),
(3, 'slider-1744266486-46655.webp', 'https://shingavijewellers.com/uploads/slider-1744266486-46655.webp', '', '', 'deleted', '4', '1744266486'),
(4, 'slider-1744266539-27449.webp', 'https://shingavijewellers.com/uploads/slider-1744266539-27449.webp', '', '', 'deleted', '4', '1744266539'),
(5, 'slider-1746602064-15514.', '', '', '', 'deleted', '4', '1746602064'),
(6, 'slider-1747720955-3615.webp', 'https://jewelnagar.com/uploads/slider-1747720955-3615.webp', '', '', 'deleted', '4', '1747225903'),
(7, 'slider-1747740858-65798.webp', 'https://jewelnagar.com/uploads/slider-1747740858-65798.webp', '', '', 'deleted', '4', '1747722641'),
(8, 'slider-1747922957-56972.', 'https://www.jewelnagar.com/uploads/slider-1747922957-56972.', '', '', 'deleted', '4', '1747922957'),
(9, 'slider-1748685080-74046.jpg', 'https://www.jewelnagar.com/uploads/slider-1748685080-74046.jpg', '', '', 'active', '4', '1748685080'),
(10, 'slider-1748685721-95628.jpg', 'https://www.jewelnagar.com/uploads/slider-1748685721-95628.jpg', '', '', 'active', '4', '1748685721');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `web_slider`
--
ALTER TABLE `web_slider`
  ADD PRIMARY KEY (`web_slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `web_slider`
--
ALTER TABLE `web_slider`
  MODIFY `web_slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
