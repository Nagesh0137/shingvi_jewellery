-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2025 at 01:24 PM
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
-- Database: `shingavi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_authontication`
--

CREATE TABLE `admin_authontication` (
  `admin_authontication_id` int(11) NOT NULL,
  `admin_id` text DEFAULT NULL,
  `authontication_tbl_id` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_authontication`
--

INSERT INTO `admin_authontication` (`admin_authontication_id`, `admin_id`, `authontication_tbl_id`, `status`, `entry_by`, `entry_time`) VALUES
(1, '5', '1', 'active', '4', '1707724931'),
(2, '7', '1', 'deleted', '4', '1715928221'),
(3, '7', '2', 'active', '4', '1715928269');

-- --------------------------------------------------------

--
-- Table structure for table `admin_permission`
--

CREATE TABLE `admin_permission` (
  `admin_permission_id` int(11) NOT NULL,
  `admin_permission_urls_id` text DEFAULT NULL,
  `admin_position_id` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_permission`
--

INSERT INTO `admin_permission` (`admin_permission_id`, `admin_permission_urls_id`, `admin_position_id`, `entry_time`, `entry_date`, `entry_by`, `status`) VALUES
(105, '54', '1', '1751003180', '2025-06-27', '5', NULL),
(106, '53', '1', '1751003182', '2025-06-27', '5', NULL),
(108, '51', '1', '1751003184', '2025-06-27', '5', NULL),
(109, '4', '1', '1751003185', '2025-06-27', '5', NULL),
(110, '3', '1', '1751003186', '2025-06-27', '5', NULL),
(111, '2', '1', '1751003187', '2025-06-27', '5', NULL),
(112, '1', '1', '1751003188', '2025-06-27', '5', NULL),
(114, '52', '1', '1751005661', '2025-06-27', '5', NULL),
(115, '55', '1', '1751005694', '2025-06-27', '5', NULL),
(116, '52', '3', '1751006150', '2025-06-27', '5', NULL),
(117, '56', '1', '1751012886', '2025-06-27', '5', NULL),
(118, '57', '1', '1751012887', '2025-06-27', '5', NULL),
(119, '58', '1', '1751012888', '2025-06-27', '5', NULL),
(120, '59', '1', '1751012889', '2025-06-27', '5', NULL),
(121, '60', '1', '1751012890', '2025-06-27', '5', NULL),
(122, '61', '1', '1751012890', '2025-06-27', '5', NULL),
(123, '62', '1', '1751012891', '2025-06-27', '5', NULL),
(124, '63', '1', '1751012892', '2025-06-27', '5', NULL),
(125, '65', '1', '1751012894', '2025-06-27', '5', NULL),
(126, '64', '1', '1751012894', '2025-06-27', '5', NULL),
(127, '66', '1', '1751012896', '2025-06-27', '5', NULL),
(128, '67', '1', '1751012897', '2025-06-27', '5', NULL),
(129, '68', '1', '1751012898', '2025-06-27', '5', NULL),
(130, '69', '1', '1751012900', '2025-06-27', '5', NULL),
(131, '70', '1', '1751012900', '2025-06-27', '5', NULL),
(132, '71', '1', '1751013528', '2025-06-27', '5', NULL),
(133, '72', '1', '1751019070', '2025-06-27', '5', NULL),
(134, '73', '1', '1751272221', '2025-06-30', '5', NULL),
(135, '74', '1', '1751275513', '2025-06-30', '5', NULL),
(136, '75', '1', '1751283190', '2025-06-30', '5', NULL),
(137, '76', '1', '1751447907', '2025-07-02', '5', NULL),
(138, '77', '1', '1751454482', '2025-07-02', '5', NULL),
(139, '78', '1', '1751690299', '2025-07-05', '5', NULL),
(140, '79', '1', '1752298665', '2025-07-12', '5', NULL),
(141, '80', '1', '1752298975', '2025-07-12', '5', NULL),
(142, '81', '1', '1752299528', '2025-07-12', '5', NULL),
(143, '82', '1', '1752299961', '2025-07-12', '5', NULL),
(144, '83', '1', '1752302868', '2025-07-12', '5', NULL),
(145, '84', '1', '1752304070', '2025-07-12', '5', NULL),
(146, '85', '1', '1752304230', '2025-07-12', '5', NULL),
(147, '86', '1', '1752309239', '2025-07-12', '5', NULL),
(148, '87', '1', '1752309828', '2025-07-12', '5', NULL),
(149, '88', '1', '1752310989', '2025-07-12', '5', NULL),
(150, '89', '1', '1752311623', '2025-07-12', '5', NULL),
(151, '90', '1', '1752313522', '2025-07-12', '5', NULL),
(152, '91', '1', '1752313815', '2025-07-12', '5', NULL),
(153, '92', '1', '1752314160', '2025-07-12', '5', NULL),
(154, '93', '1', '1752314953', '2025-07-12', '5', NULL),
(155, '94', '1', '1752315458', '2025-07-12', '5', NULL),
(156, '95', '1', '1752316275', '2025-07-12', '5', NULL),
(157, '96', '1', '1752318426', '2025-07-12', '5', NULL),
(158, '97', '1', '1752318821', '2025-07-12', '5', NULL),
(159, '98', '1', '1752319304', '2025-07-12', '5', NULL),
(160, '99', '1', '1752320614', '2025-07-12', '5', NULL),
(161, '102', '1', '1752323012', '2025-07-12', '5', NULL),
(162, '101', '1', '1752323013', '2025-07-12', '5', NULL),
(163, '100', '1', '1752323014', '2025-07-12', '5', NULL),
(164, '106', '1', '1753348081', '2025-07-24', '5', NULL),
(165, '105', '1', '1753348082', '2025-07-24', '5', NULL),
(166, '104', '1', '1753348082', '2025-07-24', '5', NULL),
(167, '103', '1', '1753348083', '2025-07-24', '5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_permission_urls`
--

CREATE TABLE `admin_permission_urls` (
  `admin_permission_urls_id` int(11) NOT NULL,
  `admin_permission_url` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_permission_urls`
--

INSERT INTO `admin_permission_urls` (`admin_permission_urls_id`, `admin_permission_url`, `entry_time`, `entry_date`, `entry_by`, `status`) VALUES
(1, 'admin_permission_url', '1742621914', '2025-03-22', '5', 'active'),
(2, 'permission_setup', '1742622058', '2025-03-22', '5', 'active'),
(3, 'admin', '1742622082', '2025-03-22', '5', 'active'),
(4, 'admin_position', '1742622087', '2025-03-22', '5', 'active'),
(55, 'add_admin', '1751005688', '2025-06-27', '5', 'active'),
(72, 'index', '1751019065', '2025-06-27', '5', 'active'),
(76, 'social_media', '1751447901', '2025-07-02', '5', 'active'),
(78, 'reviews', '1751690213', '2025-07-05', '5', 'active'),
(80, 'add_gold_product', '1752298958', '2025-07-12', '5', 'active'),
(81, 'gst_manage', '1752299523', '2025-07-12', '5', 'active'),
(83, 'gender_category', '1752302856', '2025-07-12', '5', 'active'),
(84, 'main_category', '1752304065', '2025-07-12', '5', 'active'),
(85, 'manage_category', '1752304223', '2025-07-12', '5', 'active'),
(86, 'add_silver_product', '1752309235', '2025-07-12', '5', 'active'),
(87, 'exchange_policy', '1752309822', '2025-07-12', '5', 'active'),
(88, 'gold_product_list', '1752310983', '2025-07-12', '5', 'active'),
(89, 'silver_product_list', '1752311619', '2025-07-12', '5', 'active'),
(90, 'buyback', '1752313517', '2025-07-12', '5', 'active'),
(91, 'manage_product_group', '1752313808', '2025-07-12', '5', 'active'),
(92, 'gold_scheme_policy', '1752314150', '2025-07-12', '5', 'active'),
(93, 'shipping_policy', '1752314939', '2025-07-12', '5', 'active'),
(94, 'cancellation_policy', '1752315454', '2025-07-12', '5', 'active'),
(95, 'disclaimer_policy', '1752316271', '2025-07-12', '5', 'active'),
(96, 'privacy_policy', '1752318422', '2025-07-12', '5', 'active'),
(97, 'terms_of_use', '1752318816', '2025-07-12', '5', 'active'),
(98, 'insurance_policy', '1752319300', '2025-07-12', '5', 'active'),
(99, 'policies_page_name', '1752320608', '2025-07-12', '5', 'active'),
(100, 'rate_gold', '1752322995', '2025-07-12', '5', 'active'),
(101, 'rate_diamond', '1752323001', '2025-07-12', '5', 'active'),
(102, 'rate_silver', '1752323007', '2025-07-12', '5', 'active'),
(103, 'custom_jwellery', '1753348057', '2025-07-24', '5', 'active'),
(104, 'custom_jwellery_progress_list', '1753348065', '2025-07-24', '5', 'active'),
(105, 'custom_jwellery_confirm_list', '1753348070', '2025-07-24', '5', 'active'),
(106, 'custom_jwellery_cancel_list', '1753348075', '2025-07-24', '5', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `admin_position`
--

CREATE TABLE `admin_position` (
  `admin_position_id` int(11) NOT NULL,
  `admin_position` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_position`
--

INSERT INTO `admin_position` (`admin_position_id`, `admin_position`, `entry_time`, `entry_date`, `entry_by`, `status`) VALUES
(1, 'Master', '1742622006', '2025-03-22', '5', 'active'),
(2, 'Telecaller', '1742622015', '2025-03-22', '5', 'deleted'),
(3, 'staff', '1751005781', '2025-06-27', '5', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_tbl_id` int(11) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_mobile_no` varchar(15) DEFAULT NULL,
  `admin_profile_logo` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_address` text NOT NULL,
  `last_modified_date` datetime DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_by` int(11) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `admin_position` text NOT NULL,
  `admin_city` text NOT NULL,
  `admin_contry` text NOT NULL,
  `entry_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_tbl_id`, `admin_name`, `admin_mobile_no`, `admin_profile_logo`, `admin_email`, `admin_password`, `admin_address`, `last_modified_date`, `entry_time`, `entry_by`, `status`, `admin_position`, `admin_city`, `admin_contry`, `entry_date`) VALUES
(5, 'Admin Master', '8888430137', '175223711046367713.jpg', 'admin@gmail.com', 'admin', 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '2025-03-20 00:00:00', '1742467163', 4, 'active', '1', 'Nagar', 'India', '2025-03-20'),
(9, 'nageshsonawane870@gmail.com', '5456789876', '175100889982896658.png', 'nageshsonawane870@gmail.com', 'admin1', 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '2025-06-27 00:00:00', '1751006081', 5, 'active', '3', '', '', '2025-03-20'),
(12, NULL, NULL, '', '', NULL, '', '2025-06-27 00:00:00', '1751008249', 5, 'deleted', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `authontication_tbl`
--

CREATE TABLE `authontication_tbl` (
  `authontication_tbl_id` int(11) NOT NULL,
  `authontication_name` text DEFAULT NULL,
  `initial_url` text NOT NULL,
  `status` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `admin_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `authontication_tbl`
--

INSERT INTO `authontication_tbl` (`authontication_tbl_id`, `authontication_name`, `initial_url`, `status`, `entry_time`, `admin_id`) VALUES
(1, 'Master', 'https://shingavijewellers.com/jadmin/', 'active', '1707724916', '4'),
(2, 'Product Manager', 'https://shingavijewellers.com/jadmin/', 'active', '1707725189', '4');

-- --------------------------------------------------------

--
-- Table structure for table `authontication_urls`
--

CREATE TABLE `authontication_urls` (
  `authontication_urls_id` int(11) NOT NULL,
  `authontication_tbl_id` text DEFAULT NULL,
  `authontication_url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `authontication_urls`
--

INSERT INTO `authontication_urls` (`authontication_urls_id`, `authontication_tbl_id`, `authontication_url`) VALUES
(1, '1', 'gst_manage'),
(2, '2', 'add_gold_product');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `blog_comments_id` int(11) NOT NULL,
  `blog_id` text DEFAULT NULL,
  `author` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`blog_comments_id`, `blog_id`, `author`, `email`, `mobile`, `comment`, `user_id`, `status`, `entry_time`, `entry_date`) VALUES
(1, '2', 'Nagesh Balu Sonawane', 'nageshsonawane870@gmail.com', '8888430137', 'test', '92', 'active', '1753696705', '2025-07-28'),
(2, '2', 'Nagesh Balu Sonawane', 'nageshsonawane870@gmail.com', '8888430137', 'test', '92', 'active', '1753696712', '2025-07-28'),
(3, '2', 'Nagesh Balu Sonawane', 'nageshsonawane870@gmail.com', '8888430137', 'text', '92', 'active', '1753696796', '2025-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `buyback_tbl`
--

CREATE TABLE `buyback_tbl` (
  `buyback_tbl_id` int(11) NOT NULL,
  `buyback_name` text DEFAULT NULL,
  `buyback_details` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyback_tbl`
--

INSERT INTO `buyback_tbl` (`buyback_tbl_id`, `buyback_name`, `buyback_details`, `entry_by`, `entry_time`, `entry_date`, `status`) VALUES
(1, 'Gold Jewellery ', '94% buyback on the current Gold value (Not Applicable on Customized Products).', '5', '1752313929', '2025-07-12', 'active'),
(2, 'Silver articles / Jewellery', '99.9 purity:96% buyback on the silver value, Others: On the basis of purity there may be weight and rate deduction.\r\n', '5', '1752313943', '2025-07-12', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `cancellation_policy_tbl`
--

CREATE TABLE `cancellation_policy_tbl` (
  `cancellation_policy_tbl_id` int(11) NOT NULL,
  `cancellation_name` text DEFAULT NULL,
  `cancellation_details` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cancellation_policy_tbl`
--

INSERT INTO `cancellation_policy_tbl` (`cancellation_policy_tbl_id`, `cancellation_name`, `cancellation_details`, `entry_by`, `entry_time`, `entry_date`, `status`) VALUES
(1, 'CANCELLATION POLICY ', 'Cancellation of orders is allowed only before they are shipped. Cancellation of bullion orders is not allowed. Cancellation of orders is allowed only before they are shipped. (Cancellation charges applicable once order placed).\r\n', '5', '1752315972', '2025-07-12', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` text DEFAULT NULL,
  `category_details` text DEFAULT NULL,
  `category_image` text DEFAULT NULL,
  `udm` text NOT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_details`, `category_image`, `udm`, `status`, `entry_by`, `entry_time`) VALUES
(5, 'Gold', '\'Gold is a chemical element with the symbol Au (from Latin: aurum) and atomic number 79, making it one of the higher atomic number elements that occur naturally. In a pure form, it is a bright, slightly reddish yellow, dense, soft, malleable, and ductile metal.\'', 'category-1731127753-61027.jpeg', 'gm', 'active', '4', '1603256337'),
(6, 'Silver', '\'Silver is a chemical element with the symbol Ag (from the Latin argentum, derived from the Proto-Indo-European h?er?: \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"shiny\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\" or \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\"white\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\") and atomic number 47. A soft, white, lustrous transition metal, it exhibits the highest electrical conductivity, thermal conductivity, and reflectivity of any metal.\'', 'category-1740137872-38368.jpeg', 'gm', 'active', '4', '1603256378'),
(7, 'Platinum', '\'Platinum is a chemical element with the symbol Pt and atomic number 78. It is a dense, malleable, ductile, highly unreactive, precious, silverish-white transition metal. ... Platinum is a member of the platinum group of elements and group 10 of the periodic table of elements. It has six naturally occurring isotopes.\'', 'category-1603256434-76030.jpg', 'gm', 'deleted', '4', '1603256434'),
(8, 'Diamond ', '\'Diamond is the only gem made of a single element: It is typically about 99.95 percent carbon. ... The other 0.05 percent can include one or more trace elements, which are atoms that aren\\\\\\\'t part of the diamond\\\\\\\'s essential chemistry. Some trace elements can influence its color or crystal shape.\'', 'category-1603256465-80514.jpg', 'gm', 'deleted', '4', '1603256465'),
(9, 'Rakhi', '\'Rakshabandhan special Gold & Silver Rakhi \'', 'category-1628594659-66172.jpeg', '', 'deleted', '4', '1628594659'),
(10, 'Gift', '\'Gift articles for your loved ones\\r\\n\'', 'category-1740137854-34425.webp', '', 'active', '4', '1630741922'),
(11, 'COIN', '\'A gold coin is a coin that is made mostly or entirely of gold. ... Gold has been used as money for many reasons. It is fungible, with a low spread between the prices to buy and sell. Gold is also easily transportable, as it has a high value-to-weight ratio, compared to other commodities, such as silver.\'', 'category-1731127788-41245.jpeg', '', 'active', '4', '1632737766'),
(12, 'Silver coins', '\'https://images.unsplash.com/photo-1643393670648-23ddeffa5f06?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8c2lsdmVyJTIwY29pbnxlbnwwfHwwfHx8MA%3D%3D\'', 'category-1731128036-519.jpeg', 'gm', 'active', '4', '1603256378'),
(13, 'test ', '\'test\'', 'category-1753679597-33433.jpg', '', 'deleted', '5', '1753679597');

-- --------------------------------------------------------

--
-- Table structure for table `company_details_tbl`
--

CREATE TABLE `company_details_tbl` (
  `company_det_id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_address` text NOT NULL,
  `company_logo` text NOT NULL,
  `banner_img` text NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `header_slogan` text NOT NULL,
  `facebook_link` text NOT NULL,
  `instagram_link` text NOT NULL,
  `twitter_link` text NOT NULL,
  `linkedin_link` text NOT NULL,
  `map_link` text NOT NULL,
  `company_pdf` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `entry_by` varchar(20) NOT NULL,
  `entry_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `company_details_tbl`
--

INSERT INTO `company_details_tbl` (`company_det_id`, `company_name`, `company_address`, `company_logo`, `banner_img`, `company_email`, `mobile_no`, `header_slogan`, `facebook_link`, `instagram_link`, `twitter_link`, `linkedin_link`, `map_link`, `company_pdf`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'Shingvi Jewellery', 'Savedi,  Ahmednagar, Maharashtra 414003 \r\n\r\n', '175223735450566054.png', 'page_header_bg.jpg', 'contact@shingavijewellers.com', '9011144920', 'abcdefghijklmnoprstuvwxyz', 'https://www.facebook.com/', 'https://www.instagram.com/', '', 'https://in.linkedin.com/', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.052134329184!2d74.7277531750282!3d19.105368682105308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb17ca9d749e5%3A0x516744f9b2f35ec9!2sA2Z%20IT%20HUB%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1714985108667!5m2!1sen!2sin', '171637974464106219.pdf', 'active', '1', '1638960657');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `contact_form_id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `enquiry` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`contact_form_id`, `name`, `email`, `mobile`, `enquiry`, `user_id`, `status`, `entry_time`, `entry_date`) VALUES
(1, 'Julianne Chinn', 'julianne.chinn60@gmail.com', '353197173', 'Are you ready to earn money from your website with minimal effort?  With ForeMedia.net, you can start making revenue from ad impressions alone—clicks are just a bonus!\r\n\r\nHere’s why website owners love us:\r\n? Instant approval for new publishers\r\n? Earnings from traffic, not just clicks\r\n? Hassle-free setup in minutes\r\n\r\n Register Now Her: https://foremedia.pro/CU4W6 and start monetizing your traffic today!\r\n\r\nBest,\r\nThe ForeMedia Team', NULL, 'active', '1740093229', '2025-02-21'),
(2, 'OAjFxhwAGIwD', 'mckayfeob43@gmail.com', '2614530000', '', NULL, 'active', '1740198902', '2025-02-22'),
(3, 'Joanna Riggs', 'joannariggs278@gmail.com', '', 'Hi,\r\n\r\nI just visited shingavijewellers.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur videos cost just $195 USD for a 30 second video ($239 USD for 60 seconds) and include a full script, voice-over and video.\r\n\r\nI can show you some previous videos we\'ve done if you want me to send some over. Let me know if you\'re interested in seeing samples of our previous work.\r\n\r\nRegards,\r\nJoanna\r\n\r\nUnsubscribe: https://removeme.live/unsubscribe.php?d=shingavijewellers.com', NULL, 'active', '1740229613', '2025-02-22'),
(4, 'HPCTxAwqDeVYMK', 'spencertiroynxu8@gmail.com', '2376993324', '', NULL, 'active', '1740284086', '2025-02-23'),
(5, 'pzXHFFqipwsNBHc', 'uhinbokqfbsl@yahoo.com', '6647048816', '', NULL, 'active', '1740349932', '2025-02-24'),
(6, 'Janet Julian', 'ruchiuyou@gmail.com', '882892642', 'Hi. We run a YouTube growth service, which increases your number of subscribers both safety and practically.\r\n\r\n- We guarantee to gain you new 700 subscribers per month\r\n- People subscribe because they are interested in your videos/channel, increasing video likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any bots.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately. If you are interested and would like to see some of our previous work, let me know and we can discuss further.\r\n\r\nKind Regards,\r\n\r\nTo Unsubscribe, reply with the word unsubscribe in the subject.', NULL, 'active', '1740368082', '2025-02-24'),
(7, 'pvikCexyldVyZd', 'vjppym8x9ltefgbdk@yahoo.com', '6422869729', '', NULL, 'active', '1740526286', '2025-02-26'),
(8, 'Jayrn Marques', 'lea.evans72@googlemail.com', '7713257764', 'Hi Shingavijewellers,\r\n\r\nIn today’s competitive world of digital marketing, finding tools and systems that can help streamline the process while maximizing efficiency is essential. \r\n\r\nOne tool that has recently been gaining attention among savvy marketers is the PLR funnel.\r\n\r\nPLR (Private Label Rights) funnels provide an incredible opportunity for digital marketers to automate their lead generation and sales processes without reinventing the wheel. \r\n\r\nInstead of spending time and money creating content from scratch, marketers can leverage PLR products—which are ready-made, customizable, and ready to go.\r\n\r\nThis blog post will dive deep into why PLR funnels are the game-changer for marketers and how you can leverage them to scale your business rapidly. \r\n\r\nI will explore the benefits, the step-by-step process of setting up PLR funnels, and provide real-life examples to help you understand how you can use them effectively.\r\n\r\nLearn More Here: \r\nhttps://marketersmentor.com/game-changer-for-digital-marketers.php?refer=shingavijewellers.com\r\n\r\nTalk soon,\r\nJayrn\r\n\r\n\r\n\r\n\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=shingavijewellers.com', NULL, 'active', '1740551240', '2025-02-26'),
(9, 'uOHkwmQV', 'maysaryanyf50@gmail.com', '9336115485', '', NULL, 'active', '1740588245', '2025-02-26'),
(10, 'nSXrAtmlzvU', 'tranlluelinca2@gmail.com', '4011485447', '', NULL, 'active', '1740668156', '2025-02-27'),
(11, 'fqQvxZgQkScOdUP', 'vdennistx2@gmail.com', '8819226235', '', NULL, 'active', '1740751237', '2025-02-28'),
(12, 'eNCOfHUvxpkuw', 'klevlozano1987@gmail.com', '2325979240', '', NULL, 'active', '1740814077', '2025-03-01'),
(13, 'cRzqxBxpwkabxp', 'droeibctiaolvkq1e@yahoo.com', '4451890847', '', NULL, 'active', '1740880360', '2025-03-02'),
(14, 'tChNChkb', 'kismetiu77rift73@gmail.com', '2158915776', '', NULL, 'active', '1741003175', '2025-03-03'),
(15, 'aaxOvwiaDtfEVfm', 'mckeenolanm2006@gmail.com', '2640005057', '', NULL, 'active', '1741086245', '2025-03-04'),
(16, '???? Email: Operation 0.75714752 BTC. Next => https://telegra.ph/Binance-Support-02-18?hs=21422e8d9780b4eb83cca5c1f2837f1b& ????', 'aurorabnkwy@gmailbrt.com', '951561422654', 'de0xum', NULL, 'active', '1741088473', '2025-03-04'),
(17, 'LPzpThjNoYOKHG', 'greenbushnagou@yahoo.com', '8160831367', '', NULL, 'active', '1741178635', '2025-03-05'),
(18, 'JqLnVgUxvTE', 'zavalamidjlg@gmail.com', '2280191655', '', NULL, 'active', '1741292778', '2025-03-07'),
(19, 'Hello', 'fkfgwsal@do-not-respond.me', 'Alice', 'MREmSc MHyQwJJ AurXup BhmwTSGe Qlaqa', NULL, 'active', '1741328420', '2025-03-07'),
(20, 'Jayrn Marques', 'sharon.watterston@gmail.com', '7022313037', 'Hi Shingavijewellers,\r\n\r\nI still remember sitting at my desk, staring at my sales numbers, wondering why nothing was working. \r\n\r\nI had tried everything—running ads, tweaking my website, and offering discounts—but my results were frustratingly inconsistent. \r\n\r\nOne month would bring a flood of leads, and the next? Crickets.\r\n\r\nThen, I stumbled across a simple shift in strategy that changed everything. \r\n\r\nInstead of chasing customers, I learned how to pull them in naturally—creating messaging and systems that made my business the only logical choice. \r\n\r\nThe impact was immediate, and today, I’m sharing the exact strategies so you can do the same.\r\n\r\nLet\'s dive in: \r\nhttps://marketersmentor.com/attract-customers.php?refer=shingavijewellers.com\r\n\r\nTalk soon,\r\nJayrn\r\n\r\n\r\n\r\n\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=shingavijewellers.com', NULL, 'active', '1741390173', '2025-03-08'),
(21, 'jPPNawxzO', 'braavareles@yahoo.com', '2270828875', '', NULL, 'active', '1741396891', '2025-03-08'),
(22, 'Ariel Morley', 'ariel.morley@gmail.com', '', 'Are you struggling to reach your target audience? Let us help. We can blast your ad text to millions of website contact forms, ensuring that your message is seen by the right people. And with just one flat rate, you can reach a massive audience without worrying about per click costs.\r\n\r\n Let’s connect—contact me using the information provided below.\r\n\r\nRegards,\r\nAriel Morley\r\nEmail: Ariel.Morley@freshnewleads.my\r\nWebsite: http://r2jmfs.reach-more-clients.my\r\n', NULL, 'active', '1741416653', '2025-03-08'),
(23, 'szYYzqAHGX', 'acarpenterqu41@gmail.com', '3143927873', '', NULL, 'active', '1741457805', '2025-03-08'),
(24, 'blLUcXVhDEKvfE', 'meiknzipyt@gmail.com', '4069835224', '', NULL, 'active', '1741559153', '2025-03-10'),
(25, 'Jayrn Marques', 'elissa.kippax55@gmail.com', '4247530694', 'Hi Shingavijewellers,\r\n\r\nA few years ago, I found myself in a vicious cycle—one month, I had more clients than I could handle, and the next, my inbox was empty. \r\n\r\nI was stuck on the revenue rollercoaster, constantly worrying where my next sale would come from.\r\n\r\nThen, I discovered a game-changing realization: successful businesses don’t chase clients—they attract them.\r\n\r\nIf you’re tired of the feast-and-famine cycle, this post will walk you through a battle-tested system for client acquisition that brings in high-quality leads predictably and consistently.\r\n\r\nLet\'s dive in: \r\nhttps://marketersmentor.com/predictable-sales-pipeline.php?refer=shingavijewellers.com\r\n\r\nTalk soon,\r\nJayrn\r\n\r\n\r\n\r\n\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=shingavijewellers.com', NULL, 'active', '1741654669', '2025-03-11'),
(26, 'Katelyn Raiden', 'katelynraiden81@gmail.com', '', 'Hi there,\r\n\r\nWe run a Youtube growth service, where we can increase your subscriber count safely and practically. \r\n\r\n- Guaranteed: We guarantee to gain you 700-1500 new subscribers each month.\r\n- Real, human subscribers who subscribe because they are interested in your channel/videos.\r\n- Safe: All actions are done, without using any automated tasks / bots.\r\n\r\nOur price is just $60 (USD) per month and we can start immediately.\r\n\r\nIf you are interested then we can discuss further.\r\n\r\nKind Regards,\r\nKatelyn', NULL, 'active', '1741660078', '2025-03-11'),
(27, 'bggdBnGjwjIkJ', 'fglori1997@gmail.com', '2433452780', '', NULL, 'active', '1741707794', '2025-03-11'),
(28, 'Joanna Riggs', 'joannariggs278@gmail.com', '', 'Hi,\r\n\r\nI just visited shingavijewellers.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur prices start from just $195.\r\n\r\nLet me know if you\'re interested in seeing samples of our previous work.\r\n\r\nRegards,\r\nJoanna\r\n\r\nUnsubscribe: https://removeme.live/unsubscribe.php?d=shingavijewellers.com', NULL, 'active', '1741778011', '2025-03-12'),
(29, 'XKISDgJXbn', 'dlenorpm21@gmail.com', '7292648825', '', NULL, 'active', '1741855272', '2025-03-13'),
(30, 'Naomi Jackson', 'bonet.harriet@msn.com', '791733838', 'Our exclusive welcome offer: a 200% bonus up to €7,500 on your first deposit! \r\n\r\nhttps://online-888.casino\r\n\r\nBut that\'s not all. As a valued player, you\'ll also enjoy a 10% weekly cashback on your net losses, credited every Monday at 06:00 UTC—wager-free! \r\n\r\nWhy choose Instant Casino?\r\n- Instant Withdrawals: Say goodbye to waiting—your winnings are processed instantly.\r\n- High Betting Limits: Elevate your gaming with bigger bets for bigger wins.\r\n- Over 3,000 Games: From slots to live casino, find your next favorite game.?\r\nDon\'t miss out on this opportunity to boost your play and potential winnings. Click the link below to sign up and claim your bonus today!?\r\n\r\nStart earning now: https://online-888.casino', NULL, 'active', '1741918764', '2025-03-14'),
(31, 'Numbers Conrick', 'numbers.conrick@msn.com', '', 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!\r\n', NULL, 'active', '1741947125', '2025-03-14'),
(32, 'HlfEOGzeobAebu', 'brenkorepi42@gmail.com', '8554720380', '', NULL, 'active', '1741951991', '2025-03-14'),
(33, 'lbAZqIsMSlgETC', 'vivyanpg39@gmail.com', '3237701508', '', NULL, 'active', '1742021426', '2025-03-15'),
(34, 'HCNAyXTm', 'djemilet2001@gmail.com', '7612328634', '', NULL, 'active', '1742092581', '2025-03-16'),
(35, 'bibKgVPz', 'aelredhuffman@gmail.com', '3446579408', '', NULL, 'active', '1742153091', '2025-03-17'),
(36, 'uHdZnrPpgOo', 'vnoblep2002@gmail.com', '9051366686', '', NULL, 'active', '1742357525', '2025-03-19'),
(37, 'Jayrn Marques', 'nina.morford@gmail.com', '4822288486', 'Hi Shingavijewellers,\r\n\r\nImagine this: You’re scrolling through your phone, and you see yet another person talking about making money online. It seems too good to be true. \r\n\r\nYou think, They probably have years of experience, expensive courses, or some secret trick I’ll never understand.\r\n\r\nWhat if I told you that’s not true?\r\n\r\nWhat if I told you that regular people—teachers, truck drivers, stay-at-home parents, even broke college students—are quietly making money online, without creating products, writing sales pages, or learning complicated tech?\r\n\r\nI know because I’ve seen it firsthand.\r\n\r\nPeople like Mike, who used to work 12-hour shifts in a warehouse, and Sarah, a single mom looking for extra income, both built their online businesses without any special skills. \r\n\r\nThey didn’t have to figure out copywriting, build a brand, or spend months testing things.\r\n\r\nHow? They followed a simple system—one that I’m going to lay out for you in this guide.\r\n\r\nThis is not a theory. This is a blueprint that has been tested and proven. If you follow the steps exactly, you will see results.\r\n\r\nAnd no, you don’t need:\r\n? A website\r\n? Any marketing skills\r\n? Your own product\r\n? Complicated tech knowledge\r\n\r\nWhat you do need is:\r\n? A pre-built system that does the heavy lifting for you\r\n? A simple traffic strategy to send people to your system\r\n? The willingness to follow a proven step-by-step process\r\n\r\nThis Digital Gold Rush Blueprint is designed to take you from zero to your first online sale—and beyond, using done-for-you funnels from PLRFunnels and paid traffic sources from Solo Ads and Influencer Ads.\r\n\r\nLet’s get started:\r\n\r\nhttps://marketersmentor.com/digital-gold-rush-blueprint.php?refer=shingavijewellers.com\r\n\r\nTalk soon,\r\nJayrn\r\n\r\n\r\n\r\n\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=shingavijewellers.com', NULL, 'active', '1742440142', '2025-03-20'),
(38, 'tDuSInPqpWzuT', 'koylmanjo91@gmail.com', '5771511482', '', NULL, 'active', '1742458067', '2025-03-20'),
(39, 'ASFWQjYMUzGNF', 'mwutl1987@gmail.com', '6430971631', '', NULL, 'active', '1742516853', '2025-03-21'),
(40, 'BcAABQlwTzmfNuW', 'meiblstantona2004@gmail.com', '7983256196', '', NULL, 'active', '1742569182', '2025-03-21'),
(41, 'DErwuzycMZxo', 'sood_nathaniel379377@yahoo.com', '5846219569', '', NULL, 'active', '1742622342', '2025-03-22'),
(42, 'LeCceCSXy', 'rasmussenmetuac47@gmail.com', '7389045722', '', NULL, 'active', '1742677174', '2025-03-23'),
(43, 'FBkdphiZxtK', 'lorenthomas1997@gmail.com', '6075086396', '', NULL, 'active', '1742734995', '2025-03-23'),
(44, 'YDDWtBOU', 'brennavz39@gmail.com', '4476061069', '', NULL, 'active', '1742791386', '2025-03-24'),
(45, 'Billie Arellano', 'billie.arellano@googlemail.com', '', 'Looking for fast and easy content creation? Try these 3 Amazing AI Tools: \r\n**Create professional videos  \r\n**Generate content effortlessly  \r\n**Convert text to speech seamlessly  \r\nTake your content to the next level today! http://3amazingaitools.top/\r\n', NULL, 'active', '1742810044', '2025-03-24'),
(46, 'Jayrn Marques', 'shelley.pape@gmail.com', '672927341', 'Hey Shingavijewellers,\r\n\r\nImagine launching a product and selling out in 48 hours—without spending a fortune on ads. Sounds like a dream, right?\r\n\r\nThat’s exactly what happened to EcoStride, a sustainable sneaker brand. Instead of relying only on ads, they used a press release to get featured on Yahoo Finance, Google News, and 150+ media sites.\r\n\r\n? 11,400+ visitors in 5 days\r\n? 300+ sales before ads even started\r\n? 100% free organic traffic from media coverage\r\n\r\nAnd the best part? Writing a press release used to be time-consuming and difficult, but now EIN Presswire’s AI Press Release Generator makes it fast and effortless.\r\n\r\nJust enter your details, let AI craft a professional press release, and distribute it to top-tier media instantly.\r\n\r\nLaunch your next product the smart way.\r\n\r\nTry It Today: https://marketersmentor.com/sold-out-product-launch.php?refer=shingavijewellers.com&real=yes\r\n\r\nTo your success,\r\nJayrn\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=shingavijewellers.com&real=yes', NULL, 'active', '1742907821', '2025-03-25'),
(47, 'xMvpjGKskvS', 'derevasqut3@gmail.com', '5094371909', '', NULL, 'active', '1742918256', '2025-03-25'),
(48, 'Alba Flanery', 'flanery.alba87@outlook.com', '', 'Say goodbye to wasted ad spend. We deliver your message to website contact forms, where it’s guaranteed to be read. No per-click charges—just one flat rate for total exposure.  \r\n\r\nInterested? Get in touch today for more information.  \r\n\r\nRegards,  \r\nAlba Flanery  \r\nEmail: Alba.Flanery@freshnewleads.my  \r\nWebsite: https://adstocontactforms.top \r\n', NULL, 'active', '1742983366', '2025-03-26'),
(49, 'Lola Archibald', 'lola.archibald@gmail.com', '7874290363', 'Dear Sir/Madam,\r\nWe are exploring long-term business collaborations and found your company of interest. May we kindly request your product catalog and pricing? Please  contact me via WhatsApp : +48 722 131 604', NULL, 'active', '1743024812', '2025-03-27'),
(50, 'Katelyn Raiden', 'katelynraiden81@gmail.com', '', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers both safely and practically.\r\n\r\n- We guarantee to gain you 700-1500+ subscribers per month.\r\n- People subscribe because they are interested in your channel/videos, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any \'bots\'.\r\n- Channel Creation: If you haven\'t started your YouTube journey yet, we can create a professional channel for you as part of your initial order.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you have any questions, let me know, and we can discuss further.\r\n\r\nKind Regards,\r\nKatelyn', NULL, 'active', '1743126415', '2025-03-28'),
(51, 'TmUPmsCEGM', 'hpadjetx1990@gmail.com', '3107625987', '', NULL, 'active', '1743153872', '2025-03-28'),
(52, 'bQEDANTejLgurkq', 'gzanderma@gmail.com', '5067670790', '', NULL, 'active', '1743164303', '2025-03-28'),
(53, 'EzeSIALDBE', 'zoeialvarrf17@gmail.com', '2500566317', '', NULL, 'active', '1743213022', '2025-03-29'),
(54, 'Shayla Hutton', 'hutton.shayla@gmail.com', '2403738637', 'Need Funding to Grow Your Business?\r\nWe offer tailored business loan solutions with no upfront fees—just a simple notary approval! Get the capital you need to expand, innovate, and succeed.\r\n\r\n Email us today: info@financeworldwidehk.com\r\n\r\nBest regards,\r\nLaura Cha\r\nCustomer Service Representative\r\n', NULL, 'active', '1743288797', '2025-03-30'),
(55, 'John', 'tjvajzge@formtest.guru', 'John', 'wLU kBH wcsspDzm', NULL, 'active', '1743307066', '2025-03-30'),
(56, 'Torsten Northcote', 'northcote.torsten@yahoo.com', '', 'Hi there, I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting any type of business that gets customers from Google.  Can I share a testimonial \r\nfrom one of our clients in the same industry?  I\'d prefer to do a short zoom to \r\nillustrate their full case study if you have time for it? \r\nYou can reach me at marketing@mrmarketingres.com or 843-720-7301. And if this isn\'t a fit please feel free to email me and I\'ll be sure not to reach out again.  Thanks!\r\n', NULL, 'active', '1743365973', '2025-03-31'),
(57, 'hdLoKtOJN', 'webneillw@gmail.com', '9566407831', '', NULL, 'active', '1743481722', '2025-04-01'),
(58, 'Dee Denby', 'denby.dee@hotmail.com', '7064367205', 'Hi there,\r\n\r\nI wanted to introduce you to our Viral Quiz AI app that transforms single keywords into hundreds of engaging quiz videos in minutes.\r\n\r\nOur proprietary \"3E Formula\" (Engage, Excite, Explode) creates content that social algorithms love, helping you:\r\n\r\nGenerate massive traffic to your websites and offers.\r\nCreate viral content for YouTube, Instagram, and TikTok\r\nStand out in any niche with unique, addictive quiz videos\r\nIncrease conversions and engagement rates\r\n\r\nThe process is incredibly simple:\r\n\r\n1. Enter a keyword.\r\n2. Select from our professional templates.\r\n3. Customize and publish directly to your social platforms.\r\n\r\nThe price? Just $17.95.\r\n\r\nLearn more: https://furtherinfo.info/viralquiz\r\n\r\nThank you for your time,\r\nDee', NULL, 'active', '1743485370', '2025-04-01'),
(59, 'HcdibNHZvgHyTwO', 'garelen50@gmail.com', '5755947962', '', NULL, 'active', '1743536378', '2025-04-02'),
(60, 'hIvOBlESY', 'bisshg50@gmail.com', '2069806107', '', NULL, 'active', '1743620429', '2025-04-03'),
(61, 'cXgophRi', 'terrikm1981@gmail.com', '2620330101', '', NULL, 'active', '1743709073', '2025-04-04'),
(62, 'CtvbFobnqNg', 'hrojaspm15@gmail.com', '7123952025', '', NULL, 'active', '1743716155', '2025-04-04'),
(63, 'TFxuXwbarnOP', 'totparsonm9@gmail.com', '9506570275', '', NULL, 'active', '1743770412', '2025-04-04'),
(64, 'VSENCqBcCdYCZV', 'edwards.adam362064@yahoo.com', '8862632580', '', NULL, 'active', '1743827979', '2025-04-05'),
(65, 'vbwcfBKfGGvton', 'josephmeimmg2@gmail.com', '5702175076', '', NULL, 'active', '1743928133', '2025-04-06'),
(66, 'Vanessa Barkly', 'barkly.vanessa@msn.com', '', 'Looking to create engaging videos? Need content that stands out? These 3 Amazing AI Tools can help: \r\n**Create videos in minutes  \r\n**Generate amazing content  \r\n**Convert text into speech  \r\nExperience effortless content creation with AI! http://3amazingaitools.top/\r\n', NULL, 'active', '1743939487', '2025-04-06'),
(67, 'Rickey Herrick', 'herrick.rickey39@msn.com', '7842347668', 'Hey,\r\n\r\nEver feel like no matter how hard you try, success always seems just out of reach?\r\n\r\nMaybe you\'ve set big goals—starting a business, improving your health, or hitting a financial milestone—only to lose momentum. It’s frustrating, right?\r\n\r\nHere’s the thing: It’s not your fault.\r\n\r\nMost people don’t fail because they lack motivation. They fail because they don’t have a proven system to follow.\r\n\r\nWhat if I told you there’s a step-by-step process designed to help you finally break free and start achieving your biggest goals—without the guesswork?\r\n\r\nClick here to discover how it works: https://marketersmentor.com/formula-for-success.php?refer=shingavijewellers.com&real=yes\r\n\r\nTalk soon,\r\nRickey\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=shingavijewellers.com&real=yes', NULL, 'active', '1744009624', '2025-04-07'),
(68, 'eVbIIrcAmv', 'djanblantb16@gmail.com', '9621370191', '', NULL, 'active', '1744033592', '2025-04-07'),
(69, 'Chana Amundson', 'amundson.chana@gmail.com', '673450799', '\r\nDan Kennedy often uses a simple analogy to illustrate a common marketing mistake:\r\n\r\nImagine walking into a store and being swarmed by a salesperson who starts pitching everything they sell—refrigerators, running shoes, blenders—without once asking what you’re actually looking for. It’s frustrating, ineffective… and exactly what most businesses do in their marketing.\r\n\r\nInstead of speaking directly to prospects’ specific needs or concerns, most businesses blast the same generic message to everyone. And according to Dan, that’s a surefire way to water down your impact—and your profits.\r\n\r\nHe points to Weight Watchers as a prime example.\r\n\r\nThey serve two distinct types of customers:\r\n\r\nHealth Buyers – motivated by medical reasons, like a doctor’s orders or an upcoming surgery.\r\n\r\nEvent-Driven Buyers – focused on short-term goals, like fitting into a dress for a wedding or looking good for a vacation.\r\n\r\nThese two audiences have completely different motivations. One wants to avoid a health crisis. The other wants to feel confident on the beach. But for years, Weight Watchers hesitated to segment their leads and tailor their message accordingly—despite the fact that segmentation could’ve easily doubled their effectiveness.\r\n\r\nAnd this issue isn’t limited to weight loss companies.\r\n\r\nAt Magnetic Marketing, Dan Kennedy and his team have identified seven distinct interest categories among their audience—from wealth attraction to direct marketing and beyond. If they tried to send one message to all seven groups, they’d fail to deeply connect with any of them.\r\n\r\nDan compares this to politics: voters often care about one primary issue. Your leads are no different. Some are driven by fear. Others by ambition. And others by a very specific short-term goal.\r\n\r\nConsider three different prospects in the finance space:\r\n\r\nOne fears running out of money in retirement.\r\n\r\nAnother wants to protect wealth for their grandchildren.\r\n\r\nA third wants to maximize investment returns.\r\n\r\nA single message trying to appeal to all three ends up resonating with none of them.\r\n\r\nThat’s why segmentation is so powerful—and profitable.\r\n\r\nBy tailoring messages to meet prospects where they are mentally and emotionally, businesses instantly build trust, create relevance, and position themselves as the only solution that truly gets the customer.\r\n\r\nDan outlines a simple framework for doing this:\r\n\r\n1.Use a Self-Select Mechanism\r\nAsk your audience questions like:\r\n“Are you looking to grow your wealth?”\r\n“Do you want to protect your assets for your family?”\r\n\r\n2.Tailor the Follow-Up\r\nOnce they identify their concern, follow up with stories, testimonials, and offers that directly address it.\r\n\r\n3.Watch Response Rates Soar\r\nA personalized message turns cold leads into warm conversations—and buyers.\r\n\r\nDan stresses this strategy works in every industry. He’s seen it boost performance in colleges, financial firms, info-product businesses, and even local service providers.\r\n\r\nTake colleges, for example. A dad wants to know his kid will get a job after graduation. A mom wants safety and solid food options. The student just wants to know they’ll make friends. Smart schools speak directly to each one—and enrollment improves dramatically.\r\n\r\nIf segmentation sounds like a mystery to you, Dan lays it all out in plain English in The No B.S. Guide to Direct Marketing. In it, he reveals:\r\n\r\nThe art of message-to-market match—how to say the right thing to the right people.\r\n\r\nHow to build self-select mechanisms that get prospects to reveal what they want—without a survey.\r\n\r\nHis exact process for creating segmented campaigns that maximize every dollar spent.\r\n\r\n Click Here to Claim Your FREE Copy of The No B.S. Guide to Direct Marketing + $6,193 in Exclusive Bonuses:\r\n\r\nhttps://marketersmentor.com/direct-marketing-book.php?refer=shingavijewellers.com&real=yes\r\n\r\nDan Kennedy has watched businesses transform overnight simply by getting smarter with how they segment and speak to their audience.\r\n\r\nDon’t waste another marketing dollar talking to everyone. Start speaking to someone—the right someone—and watch your results soar.\r\n\r\nDedicated to Multiplying Your Income,\r\n\r\nChana\r\n\r\nP.S. Dan always reminds his clients:\r\nWhoever can spend the most to acquire a customer—wins.Segmentation helps you do just that… profitably.\r\n\r\n\r\nUnsubscribe: \r\nhttps://marketersmentor.com/unsubscribe.php?d=shingavijewellers.com&real=yes\r\n\r\n\r\n', NULL, 'active', '1744094028', '2025-04-08'),
(70, 'Shaun Luttrell', 'shaun.luttrell@gmail.com', '', 'Hi there,\r\n\r\nWe wanted to introduce you to a revolutionary system that helps you create AI-powered tools to generate steady, qualified leads without paid advertising.\r\n\r\nKey benefits:\r\n\r\nCreate AI tools in minutes with simple copy/paste templates \r\nDrive free, targeted traffic to any niche or offer  \r\nBuilt-in call-to-action system to funnel leads to your sales pages \r\nNo coding or technical experience needed\r\n\r\nWe\'re currently offering a special launch price of $17 (regular $97) which includes bonus training on traffic generation and AI monetization.\r\n\r\nFor more details, check out: https://furtherinfo.info/etb\r\n\r\nThanks,\r\nShaun', NULL, 'active', '1744133251', '2025-04-08'),
(71, 'WPwgakEJaBlx', 'hoypbt40@gmail.com', '4772373445', '', NULL, 'active', '1744160816', '2025-04-09'),
(72, 'rhKocZVqcKHoB', 'mack.jenny274994@yahoo.com', '2134636787', '', NULL, 'active', '1744225639', '2025-04-10'),
(73, 'VvmToyouLv', 'rochelcn95@gmail.com', '5702847494', '', NULL, 'active', '1744278502', '2025-04-10'),
(74, 'Joanna Riggs', 'joannariggs012@gmail.com', '', 'Hi,\r\n\r\nI just visited shingavijewellers.com and wondered if you\'d ever thought about having an engaging video to explain what you do?\r\n\r\nOur prices start from just $195.\r\n\r\nLet me know if you\'re interested in seeing samples of our previous work.\r\n\r\nRegards,\r\nJoanna', NULL, 'active', '1744284423', '2025-04-10'),
(75, 'RixtIPaXWX', 'hchadtu1988@gmail.com', '7515163105', '', NULL, 'active', '1744294982', '2025-04-10'),
(76, 'YvRdTpLcDcKSp', 'sibiloq86@gmail.com', '5950167137', '', NULL, 'active', '1744360482', '2025-04-11'),
(77, 'hTYynDnrFTi', 'kiasimsyz1995@gmail.com', '4085165381', '', NULL, 'active', '1744398591', '2025-04-12'),
(78, 'qteRfRMytre', 'harrelllisa866539@yahoo.com', '3477138108', '', NULL, 'active', '1744499747', '2025-04-13'),
(79, 'BNPZCGeYrbyWl', 'ginasantos620075@yahoo.com', '7848077920', '', NULL, 'active', '1744532320', '2025-04-13'),
(80, 'EOIwbfITovcW', 'bflemingr3@gmail.com', '6362355130', '', NULL, 'active', '1744546857', '2025-04-13'),
(81, 'UmjJxKwns', 'gardndjoettzn3@gmail.com', '3459183766', '', NULL, 'active', '1744643639', '2025-04-14'),
(82, 'dNRTnuKnSU', 'ilanahuffmangh6@gmail.com', '9619437813', '', NULL, 'active', '1744657177', '2025-04-15'),
(83, 'Lauren Blubaugh', 'lauren.blubaugh@hotmail.com', '696493847', ' Every day, businesses switch from Yelp, Angi & BBB to Vetted. Why? Because Vetted is **100% free forever**—join now! https://vettedprobusiness.my/  \r\n\r\n  \r\n', NULL, 'active', '1744679775', '2025-04-15'),
(84, 'Tarun Kumar', 'oliviareynolds.connect@gmail.com', '90689912200', 'Hi,\r\n\r\nWhat if you could automate 80% of your repetitive tasks and save over 10 hours a week—without hiring extra staff?\r\n\r\nAt Rankkking, we help businesses like yours grow faster with powerful AI & No-Code automation using tools like Make.com, n8n, and more.\r\n\r\n Automate daily tasks\r\n Boost productivity\r\n Cut costs with smart workflows\r\n\r\nWant to see real examples for your business? Just type “AI” and we’ll share proven solutions tailored for you.\r\n\r\n Explore services: https://hi.switchy.io/XgWW\r\n\r\nLet’s make automation work for you.\r\n\r\nBest,', NULL, 'active', '1745925203', '2025-04-29'),
(85, 'Carter James', 'carterjames.business@gmail.com', '90689912200', 'Hi,\r\n\r\nEver wonder how some founders work just 4 hours a day — and still scale fast?\r\n\r\nThey use AI automations.\r\nAnd now you can too (no code, no extra team, no tech headaches).\r\n\r\n? Automate 80% of your manual tasks\r\n? Save 10+ hours a week instantly\r\n? Boost revenue without hiring more people\r\n\r\nWant to see how? Just click here:\r\n https://hi.switchy.io/XgWW\r\n\r\nIt’s fast, proven, and designed for founders like you.\r\n\r\nBest\r\nCarter James\r\nAutomation Expert, Rankkking – No-Code AI Experts', NULL, 'active', '1747662879', '2025-05-19'),
(86, NULL, NULL, NULL, '', NULL, 'active', '1748029187', '2025-05-24'),
(87, 'Search Engine Index', 'register@escmb.com', '482546273', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://SearchRegister.net', NULL, 'active', '1748459683', '2025-05-29'),
(88, 'Lettie Putnam', 'putnam.lettie81@googlemail.com', '4445967', 'Access ChatGPT, Claude, Gemini Pro , Kling AI, LLaMA, Mistral, DALL.E, LLaMa & more—all from a single dashboard.\r\n\r\nNo subscriptions or no monthly fees—pay once and enjoy lifetime access.\r\n\r\nAutomatically switch between AI models based on task requirements.\r\n\r\nAnd much more ... hamsterkombat.expert/AIIntelliKit', NULL, 'active', '1748523727', '2025-05-29'),
(89, 'Matt Bacak', 'mattbacak2025@gmail.com', '50482478', '\r\nI just watched an AI build an entire marketing campaign.Videos, landing pages, ads, emails, everything done in under 60 seconds.\r\nNo team. No copywriters. No designers.Just AISellers, the all-in-one AI marketing platform I’ve been quietly testing... until now.\r\nThis [day], [date and time], I’m joining a special live webinar where AISellers will be revealed to the public for the first time.\r\n\r\nClick here for more info : https://jvz6.com/c/688203/418587/', NULL, 'active', '1748732266', '2025-06-01'),
(90, 'Manshi Sharma', 'sales@support.webxtalk.com', '9266141479', 'Hi,\r\n\r\nI\'m Manshi, and I\'m part of a leading SEO company based in India.\r\n\r\nWe specialize in achieving top rankings for our clients\' websites on Google and other major search engines, ensuring high revenue and top page rank within a guaranteed 3-4 months.\r\n\r\nWe\'re excited to present you with a special SEO package that includes:\r\n\r\n•Detailed Website Audit\r\n•Keyword research\r\n•Competitor Analysis\r\n•Meta tags optimizations\r\n•Content Optimization\r\n•Article Posting(Weekly)\r\n•Blog Posting\r\n•Guest Posting\r\n•Article Submissions\r\n•Blog Submissions\r\n•Heading tag changes\r\n•Alt tag changes\r\n•Interlinking wherever required.\r\n•Keyword Density in site content.\r\n•HTML Site Map\r\n•XML site map and Submission in webmaster tool\r\n•Link Building & Marketing\r\n\r\n\r\nIf you\'re interested, we\'d love to analyze your website and suggest the best strategy for you. Please share your website URL along with up to 10 keywords to get started.\r\n\r\nLooking forward to your positive reply.\r\n\r\nBest regards,\r\nManshi', NULL, 'active', '1749022420', '2025-06-04'),
(91, 'Search Engine Index', 'register@escmb.com', '3677228141', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://SearchRegister.net', NULL, 'active', '1749312484', '2025-06-07'),
(92, 'Search Engine Index', 'register@escmb.com', '8015919636', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://SearchRegister.net', NULL, 'active', '1750184446', '2025-06-17'),
(93, 'Ayoub Aouid', 'info@silklinks.online', '+212693165636', 'At SilkLinks.online, we believe premium digital products should be accessible, instant, and affordable — no subscriptions, no delays, no nonsense.\r\n\r\n From creating stunning designs with Canva Pro and Adobe Creative Cloud,\r\n To boosting your business with Ahrefs, Semrush, and AdSpy,\r\n And enhancing your productivity with ChatGPT Plus, Grammarly Premium, and more…\r\n\r\nYou get real value, real access, and now — real rewards.\r\n\r\n Get 5% Cashback on Every Order!\r\nThat’s right — every time you buy, you earn. Use your cashback on your next tools, accounts, or subscriptions. No points. No gimmicks. Just real money saved.\r\n\r\nWhy Thousands Trust SilkLinks.online:\r\n? Instant Delivery\r\n? Top-Tier Digital Products\r\n? Tested & Verified Accounts\r\n? Professional Support\r\n? 5% Cashback with Every Purchase\r\n\r\n? Ready to upgrade your digital life?\r\nBrowse our store, grab what you need, and enjoy fast access to the tools that drive your work, passion, or side hustle.\r\n\r\n Visit https://SilkLinks.online — Get More, Spend Less, Every Time.', NULL, 'active', '1750631268', '2025-06-23'),
(94, 'Marissa Brush', 'brush.marissa@gmail.com', '3086405951', 'Access ChatGPT, Claude, Gemini Pro , Kling AI, LLaMA, Mistral, DALL.E, LLaMa & more—all from a single dashboard.\r\n\r\nNo subscriptions or no monthly fees—pay once and enjoy lifetime access.\r\n\r\nAutomatically switch between AI models based on task requirements.\r\n\r\nAnd much more ... http://www.novaai.expert/AI-IntelliKit', NULL, 'active', '1750685415', '2025-06-23'),
(95, 'Mia Blubaugh', 'blubaugh.mia@googlemail.com', '8586465686', 'World’s First Universal AI App That Allows You To Search & Unlock Any AI Model In The World…\r\n\r\nAnd Access It With Just One Click From One Dashboard\r\n\r\nFinally, Access (ChatGPT,DeepSeek, Runaway ML, Leonardo AI, DALL-E, Pika Labs, Canva AI, Claude 3, Gemini, Copilot, Hugging Face, ElevenLab, Llama, MidJourney, AgentGPT, Jasper, Stable Diffusion, Synthesia, Perplexity AI, Open AI Whisper, and 350+ more) Without Paying Their Hefty Fees\r\n\r\nAnd much more ... http://www.novaai.expert/EveryAI', NULL, 'active', '1750750021', '2025-06-24'),
(96, 'Mira Gooch', 'mira.gooch@gmail.com', '3133746730', 'Tired of switching between ChatGPT, Claude, Gemini? \r\n\r\nGet  permanent access to ChatGPT, Claude, Gemini Pro, DALL·E, Mistral, LLaMA, Kling AI and more  — from a single, unified dashboard.\r\n\r\n    [? | » | ?] No subscriptions, no monthly fees — pay once, use forever\r\n\r\n    [? | » | ?] Auto-switch between models — let the system choose the best AI for each task\r\n\r\n    [? | » | ?]  Built for creators, pros, and AI power users\r\n\r\n*[! | ] Limited lifetime access — only available for the first 100  users\r\n\r\n >> Claim your all-in-one AI access  ? http://www.novaai.expert/AI-IntelliKit\r\n\r\n', NULL, 'active', '1750886158', '2025-06-26'),
(97, 'Jerrell Dunrossil', 'dunrossil.jerrell@gmail.com', '3204957764', 'The Futuristic All-In-One AI Voice Platform Clones Any Voice, Translates It Into 20+ Global Languages, & Creates Human-Like Voices In 60 Seconds Flat - With Real Emotions, Voice Modulations, Global  Accents & Multilingual Fluency.\r\n\r\nPowered By Revolutionary Vocal DNA Technology, That Turns Any Text, Audio, & Video Into A Human-Like Voice - That Sounds So REAL, As If A Human Is Talking…\r\n\r\nAnd much more ... http://www.novaai.expert/ToneCraftAI', NULL, 'active', '1750942586', '2025-06-26'),
(98, 'Erin Ryland', 'erin.ryland@gmail.com', '243965225', 'LAUNCH YOUR OWN AMAZON PUBLISHING EMPIRE IN 60 SECONDS!\r\n\r\nWorld\'s First Amazon Publishing AI Assistant\r\n\r\nInstantly Research Profitable Keywords, Create & Publish \r\n\r\nTo 310 Million Amazon Users Without Writing A Single Word\r\n\r\nNo Writing. No Tech Skills. No Experience Needed!\r\n\r\nmore http://www.novaai.expert/KindleMint\r\n', NULL, 'active', '1750948266', '2025-06-26'),
(99, 'Search Engine Index', 'register@escmb.com', '480951689', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://SearchRegister.net', NULL, 'active', '1751046258', '2025-06-27'),
(100, 'Lyda Courts', 'courts.lyda44@gmail.com', '3184949181', '30-Second Trick Turns My Phone Into a $500/Day Cash Machine”\r\nJust Tap The \"Secret Button\" To Cash In From This $385 Billion WiFi Profit Loophole!\r\n\r\nAnd much more ... https://www.novaai.expert/PassiveIncome', NULL, 'active', '1751255042', '2025-06-30'),
(101, 'Rosario Mullet', 'mullet.rosario10@googlemail.com', '3225014752', 'Bleeding cash on tokens and APIs?\r\n\r\nIt ends here.\r\n\r\nIntroducing a first-of-its-kind AI hub that gives you 1-click entry to over 350+ top-tier tools — with no API fees, no monthly charges, no hidden costs.\r\n\r\nUse Copy.ai from a single portal.\r\nNo dev skills. No setup. No waiting.\r\n\r\nAutomate workflows with ease.\r\nEverything you need. Nothing you don’t.\r\n\r\nWhy pay when you can grab it all for a fraction of what you\'re spending now?\r\n\r\nStart using it today  https://bilgame.online/2771628', NULL, 'active', '1751520326', '2025-07-03'),
(102, 'Nickolas Leake', 'leake.nickolas@hotmail.com', '483822062', 'You Don’t Need Tech Skills To Succeed. Just a Funnel That Handles the Heavy Lifting For You Ready to Go in Minutes From Now\r\nLaunch Your Own Funnel Featuring Share-Worthy AI Tools Built to Spark Engagement\r\nBuilt-In Tools Help You Get Traffic + Preloaded Emails Feature Your Affiliate Links\r\nNo Ads. No Writing. No Tech Skills Needed – Just Follow a Few Simple Steps\r\nEMAILS, GIVEAWAYS & BUILT-IN TRAFFIC TOOLS\r\n\r\nmore ... https://www.novaai.expert/WarriorFunnels', NULL, 'active', '1751653585', '2025-07-04'),
(103, NULL, NULL, NULL, '', NULL, 'active', '1751658319', '2025-07-05'),
(104, 'Elaine Fulton', 'elaine.fulton@googlemail.com', '2219833146', 'The Futuristic All-In-One AI Voice Platform Clones Any Voice, Translates It Into 20+ Global Languages, & Creates Human-Like Voices In 60 Seconds Flat - With Real Emotions, Voice Modulations, Global  Accents & Multilingual Fluency.\r\n\r\nPowered By Revolutionary Vocal DNA Technology, That Turns Any Text, Audio, & Video Into A Human-Like Voice - That Sounds So REAL, As If A Human Is Talking…\r\n\r\nAnd much more ... http://www.novaai.expert/ToneCraftAI', NULL, 'active', '1751807512', '2025-07-06'),
(105, NULL, NULL, NULL, '', NULL, 'active', '1751857130', '2025-07-07'),
(106, 'Search Engine Index', 'register@escmb.com', '6923993395', 'Hello,\r\n\r\nfor your website do be displayed in searches your domain needs to be indexed in the Google Search Index.\r\n\r\nTo add your domain to Google Search Index now, please visit \r\n\r\nhttps://SearchRegister.net', NULL, 'active', '1751911500', '2025-07-07'),
(107, 'Manshi Dubey', 'manshidubey028@gmail.com', '9192661 41479', 'Hi,\r\n \r\nI checked your website. You have an impressive site but ranking is not good on Google, Yahoo and Bing.\r\n \r\nWould you like to optimize your site?\r\n \r\nI will be happy to share with you our proposal with packages details.\r\n \r\nCan I send?\r\n\r\nWarm regards,\r\nManshi', NULL, 'active', '1752088559', '2025-07-10'),
(108, NULL, NULL, NULL, '', NULL, 'active', '1752114367', '2025-07-10'),
(109, 'Margo Mendenhall', 'mendenhall.margo3@gmail.com', '335646551', 'Create High-Quality Ebooks up to 180 Pages in Minutes Without Writing a Single Word Yourself…\r\n\r\nThe Ebook Gold Rush Isn’t Over…\r\nIt’s Just Getting Smarter\r\n\r\nmore ... https://www.novaai.expert/eBookWriterAI', NULL, 'active', '1752131696', '2025-07-10'),
(110, 'Lindsey Blaxland', 'lindsey.blaxland@googlemail.com', '29433601', 'Turns Any Adult Face Into Adorable, Talking Baby Videos Using Face Swap, Voice Cloning & Lip-Sync To Create Viral Content For Reels, Gifts, Social Media & More From One Simple Dashboard!\r\n\r\nGame-Changer: Forget Costly Video Editors, Studios & Complicated Tools This AI Baby Podcast Platform Does It All Without Monthly Fees\r\n\r\n\r\nTurn Anything Into a Viral Baby Video in Under 60 Seconds — Without Editing or Being on Camera.\r\n\r\nmore ... https://www.novaai.expert/AIBabyPodcast', NULL, 'active', '1752133010', '2025-07-10'),
(229, 'Sameer Dharmanath Palve', 'sameerpalve.2019@gmail.com', '7878787888', 'djsdjshdjhsdjhsdjhsjdh', NULL, 'active', '1752320690', '2025-07-12'),
(230, 'Gautam Adani', 'sandeep@gmail.com', '7666479649', 'sdjshdhsjsdsds', NULL, 'active', '1752320772', '2025-07-12'),
(231, 'Tejas Madan Tathe', 'tejastathe302@gmail.com', '9579535583', 'Lorem Tejas Tathe ', NULL, 'active', '1753700172', '2025-07-28'),
(232, 'Tejas Madan Tathe', 'tejastathe302@gmail.com', '9579535583', 'Tejas Tathe', NULL, 'active', '1753700203', '2025-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customers_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `firstname` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `mobile` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `address` text NOT NULL,
  `pincode` text NOT NULL,
  `confirm` text DEFAULT NULL,
  `pan_no` text NOT NULL,
  `gst_no` text NOT NULL,
  `reg_time` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `profile_photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customers_id`, `name`, `firstname`, `lastname`, `email`, `mobile`, `password`, `address`, `pincode`, `confirm`, `pan_no`, `gst_no`, `reg_time`, `status`, `profile_photo`) VALUES
(1, 'Tejas Tethe', 'Tejas', 'Tethe', 'tejastathe302@gmail.com', '9579535583', NULL, '', '', NULL, '', '', '1739188453', 'active', NULL),
(2, 'Manoj More', 'Manoj', 'More', 'moremanoj0123@gmail.com', NULL, NULL, '', '', NULL, '', '', '1740111129', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocIgLSK4mKKQSb6pUD0Xix-IICE33mhgJdvf5jCgpqvl0ADNO5jxxQ=s96-c'),
(3, 'khushaboo sonawane', 'khushaboo', 'sonawane', 'sokhushaboo202@gmail.com', NULL, NULL, '', '', NULL, '', '', '1740147879', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocKaKrOOdIoEIB1UgsHJh1fUOuexGl65E4dc1r4_nNkcrpgoTpY=s96-c'),
(4, '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', NULL, NULL, '7875455520', NULL, '', '', NULL, '', '', '1740402563', 'active', NULL),
(5, 'shripad  kulkarni', 'shripad ', 'kulkarni', '', '9309553291', NULL, '', '', NULL, '', '', '1740560821', 'active', NULL),
(6, 'laukik shingavi', 'laukik', 'shingavi', 'laukik_shingavi@live.com', '9850100025', NULL, '', '', NULL, '', '', '1740584356', 'active', NULL),
(7, 'Manoj More', 'Manoj', 'More', 'moremanoj0123@gmail.com', '7040487891', NULL, '', '', NULL, '', '', '1740630664', 'active', NULL),
(8, 'Gunjan Shingavi', 'Gunjan', 'Shingavi', 'gunjan.shingavi@gmail.com', '9850500025', NULL, '', '', NULL, '', '', '1740754553', 'active', NULL),
(9, 'Shruti Munot', 'Shruti', 'Munot', 'shrutimunot24@gmail.com', NULL, NULL, '', '', NULL, '', '', '1741956209', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocJDz-jIgPeuKzRvPP-LonYEKN9UoUTg9NSWtsoNcuSLYv9YHWM=s96-c'),
(10, 'Nikita Kalshetti', 'Nikita', 'Kalshetti', 'nikitakalshetti95@gmail.com', NULL, NULL, '', '', NULL, '', '', '1742135083', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocJRAbBMEt39G0WcEJxONB_x1Qn_rFQdO0zBavSIGfg6U94zpsM=s96-c'),
(11, 'Nilesh Borkar', 'Nilesh', 'Borkar', 'nilbor407@gmail.com', '9503077104', NULL, 'Balika Ashram Road, back Side Of New Arts College, Ahmednagar', '414001', NULL, '', '', '1742453902', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocJTf-bDWesaPbUcO3m55K3nPRhtr0xTr09a70wQu2PdLABUNLZeIQ=s96-c'),
(12, 'Varsha Khubchandani', 'Varsha', 'Khubchandani', 'varsha.khubchandani91@gmail.com', NULL, NULL, '', '', NULL, '', '', '1742749917', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocLlxM5qZthx9XmLHTBC80wA7fkZdkxVvNKzHquCok8XXpBcag=s96-c'),
(13, 'Tejaswini Gunjal', 'Tejaswini', 'Gunjal', 'tejaswinigunjal123@gmail.com', NULL, NULL, '', '', NULL, '', '', '1742832746', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocJxWi3ymAO8AwVI_TEgfJrwoHFuvFWggIEBLoblF6USQKCD4n4=s96-c'),
(15, 'Rohan Dhumal', 'Rohan', 'Dhumal', 'rohand2315@gmail.com', NULL, NULL, '', '', NULL, '', '', '1743240773', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocKkodcAzvwSBRRoxTZ3rU0Xhv9vV92JKJSWFVmcCB_ds1w1IDWp=s96-c'),
(16, 'khushaboo sonawane', 'khushaboo', 'sonawane', 'khushaboosonawane202@gmail.com', NULL, NULL, '', '', NULL, '', '', '1743301196', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocIQwkPce7J7L3_eW9RCFOGw7b0WvyxHzqlwqSBWeBdrb94LPT4=s96-c'),
(17, 'Kiran Chavan', 'Kiran', 'Chavan', 'kiranchavan3142@gmail.com', '9552546273', NULL, '', '', NULL, '', '', '1744102996', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocJMsqrVs8-eCWw1jhr5ojYRW9gSlARy9WvaSO2rbbMuLuULFqqa=s96-c'),
(18, 'Rahul Misal', 'Rahul', 'Misal', 'rahulmisal9632@gmail.com', '9158439277', NULL, '', '', NULL, '', '', '1745218090', 'active', NULL),
(28, 'Jadhav Vikas', 'Jadhav Vikas', NULL, 'vikas@gmail.com', '9766232951', NULL, '', '', NULL, '', '', NULL, 'active', NULL),
(30, 'Vaibhav', 'Vaibhav', NULL, 'vaibhav@gmail.com', '7666806174', NULL, '', '', NULL, '', '', NULL, 'active', NULL),
(31, 'Vikas Jadhav', 'Vikas', 'Jadhav', 'jadhavvikas578@gmail.com', NULL, NULL, '', '', NULL, '', '', '1745561709', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocIzQ8BwDeiiAN0voOZdI-16SgsicJ7BBsGA8JbL7-BRZUhW8-eQ=s96-c'),
(32, 'Rushil Gujarathi', 'Rushil Gujarathi', NULL, 'fotofast07@gmail.com', '8855041501', NULL, '', '', NULL, '', '', NULL, 'active', NULL),
(35, 'Manali Dhongade', 'Manali ', 'Dhongade', 'a2z.d.manali@gmail.com', '9075461110', NULL, 'Savedi', '', NULL, '', '', '1745842205', 'active', '17533467866806416.jpg'),
(36, 'Rushil Gujarathi', 'Rushil', 'Gujarathi', 'fotofast07@gmail.com', '88550410501', NULL, '', '', NULL, '', '', '1746279745', 'active', NULL),
(37, '', NULL, NULL, 'test@gmail.com', '8764745698', NULL, '', '', NULL, '', '', '1747810630', 'active', NULL),
(38, 'ONKAR KULKARNI', 'ONKAR', 'KULKARNI', 'onkarkulkarni22@gmail.com', NULL, NULL, '', '', NULL, '', '', '1750938143', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocI9Bz6q8xtm5XyoUWEGRqY4mNZm6vTyo1z9PooalDeSpCqnuw=s96-c'),
(39, 'ONKAR KULKARNI', 'ONKAR', 'KULKARNI', 'onkarkulkarni22@gmail.com', '7709550339', NULL, '', '', NULL, '', '', '1750955041', 'active', NULL),
(40, 'Preeti Mewani', 'Preeti', 'Mewani', 'preeti.mewani14@gmail.com', NULL, NULL, '', '', NULL, '', '', '1751262434', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocLJm3_FzHBU0dlovH0sOn7LXPAdOMyEg_27mbO1gM1L7lKoy8A=s96-c'),
(41, 'dev clients', 'dev', 'clients', 'devs.clients@gmail.com', '7040111357', NULL, '', '', NULL, '', '', '1752230962', 'active', 'https://lh3.googleusercontent.com/a/ACg8ocL04xUedmLl0KBm9HJ2agi9TLwCbaoZjF-BdF2okniGlQkllw=s96-c'),
(42, '', 'Sameer', 'Palve', 'sameerpalve.2019@gmail.com', '7666479649', NULL, '', '', NULL, '', '', '1753163569', 'active', '175318860298157309.png'),
(45, 'Nagesh Balu Sonawane', NULL, NULL, 'nageshsonawane870@gmail.com', '8888430137', NULL, 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '414203', NULL, '', '', '1753255213', 'active', NULL),
(46, 'Nagesh Balu Sonawane', NULL, NULL, 'nageshsonawane870@gmail.com', '8888430139', NULL, 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '414203', NULL, '', '', '1753256164', 'active', NULL),
(47, '', NULL, NULL, NULL, '9876787656', NULL, '', '', NULL, '', '', '1753334389', 'active', NULL),
(48, '', NULL, NULL, NULL, '9658485695', NULL, '', '', NULL, '', '', '1753334474', 'active', NULL),
(49, '', NULL, NULL, NULL, '8569658965', NULL, '', '', NULL, '', '', '1753335157', 'active', NULL),
(50, 'Nilesh Rambhau Borkar', NULL, NULL, 'nilbor407@gmail.com', '7756820215', NULL, 'Balika Ashram Road, back Side Of New Arts College, Ahmednagar', '414001', NULL, '', '', '1753335204', 'active', NULL),
(51, '', NULL, NULL, NULL, '7756820285', NULL, '', '', NULL, '', '', '1753335370', 'active', NULL),
(52, '', NULL, NULL, NULL, '7756820277', NULL, '', '', NULL, '', '', '1753335395', 'active', NULL),
(53, '', NULL, NULL, NULL, '8569658586', NULL, '', '', NULL, '', '', '1753335950', 'active', NULL),
(54, '', NULL, NULL, NULL, '9898765455', NULL, '', '', NULL, '', '', '1753336364', 'active', NULL),
(55, '', NULL, NULL, NULL, '9876787676', NULL, '', '', NULL, '', '', '1753336613', 'active', NULL),
(56, '', NULL, NULL, NULL, '9876787670', NULL, '', '', NULL, '', '', '1753336675', 'active', NULL),
(57, '', NULL, NULL, NULL, '8569586241', NULL, '', '', NULL, '', '', '1753336877', 'active', NULL),
(58, '', NULL, NULL, NULL, '7656454323', NULL, '', '', NULL, '', '', '1753336991', 'active', NULL),
(59, '', NULL, NULL, NULL, '9696363656', NULL, '', '', NULL, '', '', '1753338329', 'active', NULL),
(60, '', NULL, NULL, NULL, '8575646546', NULL, '', '', NULL, '', '', '1753338789', 'active', NULL),
(61, 'Nilesh Rambhau Borkar', NULL, NULL, 'nilbor407@gmail.com', '8695698569', NULL, 'Balika Ashram Road, back Side Of New Arts College, Ahmednagar', '414003', NULL, '', '', '1753339028', 'active', NULL),
(62, '', NULL, NULL, NULL, '7595759585', NULL, '', '', NULL, '', '', '1753340084', 'active', NULL),
(63, 'Nagesh Balu Sonawane', NULL, NULL, 'nageshsonawane870@gmail.com', '8888430166', NULL, 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '414203', NULL, '', '', '1753340143', 'active', NULL),
(64, 'Nilesh Rambhau Borkar', NULL, NULL, 'nilbor407@gmail.com', '9696587458', NULL, 'Balika Ashram Road, back Side Of New Arts College, Ahmednagar', '414002', NULL, '', '', '1753340259', 'active', NULL),
(65, 'RAHUL VITTHAL MISAL', NULL, NULL, 'nilbor407@gmail.com', '8458965858', NULL, 'Ahmednagar', '414001', NULL, '', '', '1753340446', 'active', NULL),
(66, 'SHREE HARI TRANSPORT SERVICES', NULL, NULL, 'SHREEHARIMARKETING7@GMAIL.COM', '9658954585', NULL, 'VASUNDHRA 41 SECTOR 21SCEAM 11, YMUNANAGAR NAGAR NIGDI, NEAR SAI TEMPLE', '414005', NULL, '', '', '1753340543', 'active', NULL),
(67, 'Nagesh Balu Sonawane', NULL, NULL, 'nageshsonawane870@gmail.com', '8888430165', NULL, 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '414203', NULL, '', '', '1753342202', 'active', NULL),
(68, 'manudhongade1@gmail.com', NULL, NULL, NULL, '8468908284', NULL, '', '', NULL, '', '', '1753530360', 'active', NULL),
(69, 'manudhongade1@gmail.com', NULL, NULL, NULL, '8468908284', NULL, '', '', NULL, '', '', '1753530389', 'active', NULL),
(70, 'manudhongade1@gmail.com', NULL, NULL, NULL, '8468908284', NULL, '', '', NULL, '', '', '1753530405', 'active', NULL),
(71, 'manudhongade1@gmail.com', NULL, NULL, NULL, '8468908284', NULL, '', '', NULL, '', '', '1753530421', 'active', NULL),
(72, 'manudhongade1@gmail.com', NULL, NULL, NULL, '8468908284', NULL, '', '', NULL, '', '', '1753530906', 'active', NULL),
(73, 'manudhongade1@gmail.com', NULL, NULL, NULL, '8468908284', NULL, '', '', NULL, '', '', '1753531057', 'active', NULL),
(74, 'manudhongade1@gmail.com', NULL, NULL, NULL, '8468908284', NULL, '', '', NULL, '', '', '1753531074', 'active', NULL),
(75, 'manudhongade1@gmail.com', NULL, NULL, NULL, '8468908284', NULL, '', '', NULL, '', '', '1753531091', 'active', NULL),
(76, 'manudhongade1@gmail.com', NULL, NULL, NULL, '8468908284', NULL, '', '', NULL, '', '', '1753531104', 'active', NULL),
(77, '', NULL, NULL, NULL, '9843843293', NULL, '', '', NULL, '', '', '1753531406', 'active', NULL),
(78, '', NULL, NULL, NULL, '8756789292', NULL, '', '', NULL, '', '', '1753531978', 'active', NULL),
(79, 'testUser@gmail.com', NULL, NULL, 'testUser@gmail.com', '8596908284', NULL, '', '', NULL, '', '', '1753532300', 'active', NULL),
(80, '', NULL, NULL, NULL, '9876776767', NULL, '', '', NULL, '', '', '1753532578', 'active', NULL),
(81, '', NULL, NULL, NULL, '9777877877', NULL, '', '', NULL, '', '', '1753532649', 'active', NULL),
(82, '', NULL, NULL, NULL, '9994884432', NULL, '', '', NULL, '', '', '1753532713', 'active', NULL),
(83, 'Shilpa Shetty', NULL, NULL, NULL, '9658965874', NULL, '', '', NULL, '', '', '1753532863', 'active', NULL),
(84, '', NULL, NULL, NULL, '9993838338', NULL, '', '', NULL, '', '', '1753533060', 'active', NULL),
(85, '', NULL, NULL, '', '9658236588', NULL, '', '', NULL, '', '', '1753533427', 'active', NULL),
(86, 'Rohan Dhumal', NULL, NULL, 'rohand2315@gmail.com', '9994448332', NULL, '', '', NULL, '', '', '1753533470', 'active', NULL),
(87, 'Rohan Dhumal', NULL, NULL, 'admin@gmail.com', '9938838322', NULL, '', '', NULL, '', '', '1753533620', 'active', NULL),
(88, 'Alia Bhat', NULL, NULL, 'aliabhatt@gmail.com', '9631593535', NULL, '', '', NULL, '', '', '1753535460', 'active', NULL),
(89, 'Deepika Padukone', NULL, NULL, 'dipikapadukone@gmail.com', '7596258645', NULL, '', '', NULL, '', '', '1753671402', 'active', NULL),
(90, 'Ranbir Kapoor', NULL, NULL, 'ranbirk@gmail.com', '7596258455', NULL, '', '', NULL, '', '', '1753672029', 'active', NULL),
(91, 'Ramchandra p', NULL, NULL, 'ram@gmail.com', '9595038373', NULL, 'Burhannagar', '414002', NULL, '', '', '1753676050', 'active', NULL),
(92, 'Nagesh Balu Sonawane', NULL, NULL, 'nageshsonawane870@gmail.com', '', NULL, 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '414203', NULL, '', '', '1753694511', 'active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `customer_address_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `pincode` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `status` text NOT NULL,
  `entry_time` text NOT NULL,
  `entry_by` text NOT NULL,
  `customers_id` text NOT NULL,
  `default_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`customer_address_id`, `address`, `pincode`, `city`, `state`, `status`, `entry_time`, `entry_by`, `customers_id`, `default_address`) VALUES
(1, 'FLAT NO 111 Name of Premises Building GAGANGIRI DREAMLAND WAKAD Block -  KASPATE VASTI City PUNE CITY 12', '414003', 'Ahmednagar', '', 'active', '1752751876', 'user', '35', ' '),
(2, 'FLAT NO 222 Name of Premises/ Building GAGANGIRI DREAMLAND WAKAD Block -  KASPATE VASTI City PUNE CITY', '414003', 'Pune City', '', 'deleted', '1752751876', 'user', '35', ''),
(3, 'FLAT NO 333 Name of Premises/ Building GAGANGIRI DREAMLAND WAKAD Block -  KASPATE VASTI City PUNE CITY', '414003', 'Nagar', '', 'deleted', '1752752056', 'user', '35', ''),
(4, 'Gulmohar Road Savedi', '414005', 'Ahmednagar', '', 'active', '1752753440', 'user', '35', 'yes'),
(5, 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '414203', 'Ashti', '', 'active', '1753254346', 'user', '43', 'yes'),
(8, 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '414203', 'Ashti', '', 'active', '1753255092', 'user', '44', 'yes'),
(11, 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '414203', 'Ashti', '', 'active', '1753255280', 'user', '45', 'yes'),
(12, 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '414203', 'Ashti', '', 'active', '1753256286', 'user', '46', 'yes'),
(13, 'Balika Ashram Road, back Side Of New Arts College, Ahmednagar', '414001', 'Ahmednagar', '', 'active', '1753263070', 'user', '11', 'yes'),
(14, 'Balika Ashram Road, back Side Of New Arts College, Ahmednagar', '414001', 'Ahmednagar', '', 'active', '1753335314', 'user', '50', 'yes'),
(15, 'Balika Ashram Road, back Side Of New Arts College, Ahmednagar', '414003', 'Ahmednagar', '', 'active', '1753339061', 'user', '61', 'yes'),
(16, 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '414203', 'Ashti', '', 'active', '1753340166', 'user', '63', 'yes'),
(17, 'Balika Ashram Road, back Side Of New Arts College, Ahmednagar', '414002', 'Ahmednagar', '', 'active', '1753340278', 'user', '64', 'yes'),
(18, 'Ahmednagar', '414001', 'Ahmednagar', '', 'active', '1753340505', 'user', '65', 'yes'),
(19, 'VASUNDHRA 41 SECTOR 21SCEAM 11, YMUNANAGAR NAGAR NIGDI, NEAR SAI TEMPLE', '414005', 'Ahmednagar', '', 'active', '1753340874', 'user', '66', 'yes'),
(20, 'room no.701 near bus stand', '425001', 'Jalgaon', '', 'active', '1753341706', 'user', '66', ' '),
(21, 'Sudke Mala, Balikashram Road, Ahilyanagar', '414002', 'Ahilyanagar', '', 'active', '1753342060', 'user', '66', ' '),
(22, 'Sudke Mala, Balikashram Road, Ahilyanagar', '414002', 'Ahilyanagar', '', 'active', '1753342060', 'user', '66', ' '),
(23, 'BalikaAshram Road Ahmednagar', '414003', 'Ahmednagar', '', 'active', '1753342111', 'user', '66', ' '),
(24, 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '414203', 'Ashti', '', 'active', '1753342220', 'user', '67', 'yes'),
(25, 'Hadapsar', '414000', 'pune', '', 'active', '1753529096', '', '35', ' '),
(26, 'Gulmohar Road Savedi', '414003', 'Ahmednagar', 'Maharashtra', 'active', '1753530389', '', '69', 'yes'),
(27, 'Gulmohar Road Savedi', '414003', 'Ahmednagar', 'Maharashtra', 'active', '1753530405', '', '70', 'yes'),
(28, 'Gulmohar Road Savedi', '414003', 'Ahmednagar', 'Maharashtra', 'active', '1753530421', '', '71', 'yes'),
(29, 'Jalgoan', '414208', 'jalgoan', '', 'active', '1753530491', '', '35', ' '),
(30, 'Gulmohar Road Savedi', '414003', 'Ahmednagar', 'Maharashtra', 'active', '1753530906', '', '72', 'yes'),
(31, 'Gulmohar Road Savedi', '414003', 'Ahmednagar', 'Maharashtra', 'active', '1753531057', '', '73', 'yes'),
(32, 'Gulmohar Road Savedi', '414003', 'Ahmednagar', 'Maharashtra', 'active', '1753531074', '', '74', 'yes'),
(33, 'Gulmohar Road Savedi', '414003', 'Ahmednagar', 'Maharashtra', 'active', '1753531091', '', '75', 'yes'),
(34, 'Gulmohar Road Savedi', '414003', 'Ahmednagar', 'Maharashtra', 'active', '1753531104', '', '76', 'yes'),
(35, 'Gulmohar Road Savedi', '414003', 'Ahmednagar', 'Maharashtra', 'active', '1753532300', '', '79', 'yes'),
(36, 'Mumbai', '414003', 'Ahmednagar', 'Maharashtra', 'active', '1753532863', '', '83', 'yes'),
(37, 'Nagar', '414001', 'nagar', '', 'active', '1753533548', '', '86', 'yes'),
(38, 'Nagar', '414001', 'nagar', '', 'active', '1753534058', '', '87', 'yes'),
(39, 'Gulmohar Road Savedi, Navi Mumbai', '400005', 'Mumbai', 'Maharashtra', 'active', '1753671402', '', '89', 'yes'),
(40, 'Harbour waterfront stands the iconic Gateway of India stone arch, built by the British Raj in 1924. Offshore, nearby Elephanta Island holds ancient cave temples dedicated to the Hindu god Shiva. ', '400001', 'Mumbai', 'Maharashtra', 'active', '1753672029', '', '90', 'yes'),
(41, 'Burhannagar', '414002', 'Nagar', '', 'active', '1753676087', 'user', '91', 'yes'),
(42, 'At. Chitali Po.Padali Tal.Pathardi Dist.Ahmednagar', '414505', 'Pathardi', '', 'active', '1753681630', 'user', '1', ' '),
(43, 'At. Chitali Po.Padali Tal.Pathardi Dist.Ahmednagar', '414505', 'Pathardi', '', 'active', '1753681923', 'user', '1', 'yes'),
(44, '', '', '', '', 'active', '1753694511', '', '92', 'yes'),
(45, 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', '414203', 'Ashti', '', 'active', '1753697554', 'user', '92', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `custom_jwellery`
--

CREATE TABLE `custom_jwellery` (
  `custom_jwellery_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gold_color` text NOT NULL,
  `budget` text NOT NULL,
  `name` text NOT NULL,
  `phone_number` text NOT NULL,
  `diamond_clarity` text NOT NULL,
  `gold_purity` text NOT NULL,
  `description` text NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `email` text NOT NULL,
  `status` text NOT NULL,
  `date_time` text NOT NULL,
  `prod_gold_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `custom_jwellery`
--

INSERT INTO `custom_jwellery` (`custom_jwellery_id`, `user_id`, `gold_color`, `budget`, `name`, `phone_number`, `diamond_clarity`, `gold_purity`, `description`, `address`, `image`, `email`, `status`, `date_time`, `prod_gold_id`) VALUES
(1, 0, '', '25000', 'Sameer Dharmanath Palve', '7878787878', '', '', 'dsnsndmnsdnsm', 'bsdbsdnsbdbsn', 'custom_jwellery-1752312876-81674.png', 'sameerpalve.2019@gmail.com', 'pending', '1752312876', 0),
(2, 0, '', '250000', 'Manali', '9586587458', '', '', 'Design Description', 'BalikaAshram Road Ahmednagar\r\nBalika Ashram Road', 'custom_jwellery-1753334780-28858.png', 'a2z.d.manali@gmail.com', 'confirm', '1753334780', 0),
(3, 0, '', '10000', 'nages', '8888430137', '', '', 'test', 'Sudke mala, Balika ashram road ahamednagar', 'custom_jwellery-1753686926-76437.jpg', 'nageshsonawane870@gmail.com', 'confirm', '1753686926', 0),
(4, 0, '', '5000', 'nagesh', '8888430137', '', '', 'ljklfjasdklf', 'Sudke mala, Balika ashram road ahamednagar', 'custom_jwellery-1753687358-90971.jpg', 'nageshsonawane870@gmail.com', 'cancel', '1753687358', 0),
(5, 0, '', '1000', 'Manali  Dhongade', '9075461110', '', '', 'Demo', 'Manali Madam', 'custom_jwellery-1753697899-22433.webp', 'a2z.d.manali@gmail.com', 'pending', '1753697899', 0),
(6, 45, '', '1000', '2000', '8888430137', '', '', ';fjlkdskls', 'At.Kapsi, Post-Doithan, Tal-Ashti, Dist-Beed, Maharashtra', 'custom_jwellery-1753701603-8259.jpg', 'nageshsonawane870@gmail.com', 'pending', '1753701603', 0);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_charges_per_tbl`
--

CREATE TABLE `delivery_charges_per_tbl` (
  `delivery_charges_per_tbl_id` int(11) NOT NULL,
  `minamt_purchase_product` text DEFAULT NULL,
  `purchase_percentage` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_charges_per_tbl`
--

INSERT INTO `delivery_charges_per_tbl` (`delivery_charges_per_tbl_id`, `minamt_purchase_product`, `purchase_percentage`, `entry_time`, `entry_date`, `status`, `entry_by`) VALUES
(2, '50000', '20', '1737457329', '2025-01-21', 'active', '4'),
(2, '50000', '20', '1737457329', '2025-01-21', 'active', '4');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_cycle_tbl`
--

CREATE TABLE `delivery_cycle_tbl` (
  `delivery_cycle_tbl_id` int(11) NOT NULL,
  `delivery_cycle_label` text DEFAULT NULL,
  `delivery_cycle_description` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery_cycle_tbl`
--

INSERT INTO `delivery_cycle_tbl` (`delivery_cycle_tbl_id`, `delivery_cycle_label`, `delivery_cycle_description`, `entry_time`, `entry_date`, `status`, `entry_by`) VALUES
(2, 'Order Placed', 'Your order has been successfully placed and is now being processed.', '1737544189', '2025-01-22', 'active', '4'),
(3, 'Order Confirmed', 'We have confirmed your order details and are preparing it for shipment.', '1737544198', '2025-01-22', 'active', '4'),
(4, 'Processing Order', 'Your items are being packed and prepared for dispatch.', '1737544211', '2025-01-22', 'active', '4'),
(5, 'Dispatched', 'Your order has left our facility and is on its way to you.', '1737544226', '2025-01-22', 'active', '4'),
(6, 'In Transit', 'Your order is currently in transit to the delivery address.', '1737544283', '2025-01-22', 'active', '4'),
(7, 'Out for Delivery', 'Your order is on the way. Please ensure someone is available to receive it.', '1737544291', '2025-01-22', 'active', '4'),
(8, 'Delivered', 'Your order has been successfully delivered to the provided address.', '1737544315', '2025-01-22', 'active', '4'),
(9, 'Delivery Attempt Failed', 'Our delivery agent attempted to deliver your package but was unable to. Please contact support to reschedule.', '1737544329', '2025-01-22', 'deleted', '4'),
(11, 'Returned to Warehouse', 'Your package has been returned to our warehouse due to failed delivery attempts or customer request.', '1737544345', '2025-01-22', 'deleted', '4'),
(12, 'Cancelled', 'our order has been cancelled as per your request or due to unforeseen issues.', '1737544358', '2025-01-22', 'deleted', '4'),
(2, 'Order Placed', 'Your order has been successfully placed and is now being processed.', '1737544189', '2025-01-22', 'active', '4'),
(3, 'Order Confirmed', 'We have confirmed your order details and are preparing it for shipment.', '1737544198', '2025-01-22', 'active', '4'),
(4, 'Processing Order', 'Your items are being packed and prepared for dispatch.', '1737544211', '2025-01-22', 'active', '4'),
(5, 'Dispatched', 'Your order has left our facility and is on its way to you.', '1737544226', '2025-01-22', 'active', '4'),
(6, 'In Transit', 'Your order is currently in transit to the delivery address.', '1737544283', '2025-01-22', 'active', '4'),
(7, 'Out for Delivery', 'Your order is on the way. Please ensure someone is available to receive it.', '1737544291', '2025-01-22', 'active', '4'),
(8, 'Delivered', 'Your order has been successfully delivered to the provided address.', '1737544315', '2025-01-22', 'active', '4'),
(9, 'Delivery Attempt Failed', 'Our delivery agent attempted to deliver your package but was unable to. Please contact support to reschedule.', '1737544329', '2025-01-22', 'deleted', '4'),
(11, 'Returned to Warehouse', 'Your package has been returned to our warehouse due to failed delivery attempts or customer request.', '1737544345', '2025-01-22', 'deleted', '4'),
(12, 'Cancelled', 'our order has been cancelled as per your request or due to unforeseen issues.', '1737544358', '2025-01-22', 'deleted', '4');

-- --------------------------------------------------------

--
-- Table structure for table `diamond_clarity`
--

CREATE TABLE `diamond_clarity` (
  `diamond_clarity_id` int(11) NOT NULL,
  `diamond_clarity` text NOT NULL,
  `dec_amt` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `diamond_clarity`
--

INSERT INTO `diamond_clarity` (`diamond_clarity_id`, `diamond_clarity`, `dec_amt`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'vvs', '0', 'active', '4', '1607664485'),
(2, 'vs', '5', 'active', '4', '1607664494'),
(3, 'SI', '10', 'active', '4', '1607664502'),
(4, 'wer', '234', 'deleted', '4', '1730780693'),
(5, 'fggh', '565676', 'deleted', '4', '1730780868'),
(1, 'vvs', '0', 'active', '4', '1607664485'),
(2, 'vs', '5', 'active', '4', '1607664494'),
(3, 'SI', '10', 'active', '4', '1607664502'),
(4, 'wer', '234', 'deleted', '4', '1730780693'),
(5, 'fggh', '565676', 'deleted', '4', '1730780868'),
(0, 'DiamonD', '303', 'deleted', '5', '1753445509');

-- --------------------------------------------------------

--
-- Table structure for table `diamond_color`
--

CREATE TABLE `diamond_color` (
  `diamond_color_id` int(11) NOT NULL,
  `diamond_color` text NOT NULL,
  `dec_amt` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `diamond_color`
--

INSERT INTO `diamond_color` (`diamond_color_id`, `diamond_color`, `dec_amt`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'E-F', '0', 'active', '4', '1607664443'),
(2, 'F-G', '5', 'active', '4', '1607664452'),
(3, 'G-W', '10', 'deleted', '4', '1607664460'),
(4, 'sdf', '345', 'deleted', '4', '1730723564'),
(1, 'E-F', '0', 'active', '4', '1607664443'),
(2, 'F-G', '5', 'active', '4', '1607664452'),
(3, 'G-W', '10', 'deleted', '4', '1607664460'),
(4, 'sdf', '345', 'deleted', '4', '1730723564'),
(0, 'A-R', '25', 'active', '5', '1753445472');

-- --------------------------------------------------------

--
-- Table structure for table `disclaimer_policy_tbl`
--

CREATE TABLE `disclaimer_policy_tbl` (
  `disclaimer_policy_tbl_id` int(11) NOT NULL,
  `disclaimer_name` text DEFAULT NULL,
  `disclaimer_details` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disclaimer_policy_tbl`
--

INSERT INTO `disclaimer_policy_tbl` (`disclaimer_policy_tbl_id`, `disclaimer_name`, `disclaimer_details`, `entry_by`, `entry_time`, `entry_date`, `status`) VALUES
(1, 'Diamond Jewellery ', '90% of invoice value\r\n', '5', '1752316648', '2025-07-12', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `event_tbl`
--

CREATE TABLE `event_tbl` (
  `event_tbl_id` int(11) NOT NULL,
  `event_name` text DEFAULT NULL,
  `event_desc` text DEFAULT NULL,
  `event_img` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_tbl`
--

INSERT INTO `event_tbl` (`event_tbl_id`, `event_name`, `event_desc`, `event_img`, `entry_by`, `entry_time`, `status`) VALUES
(1, 'Abhijeet Ikhe', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.', 'event-1675754090-14908.png', '4', '1675685254', 'deleted'),
(2, 'Abhay Kardile', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.', 'product-1675754160-5664.jpg||product-1675754160-89505.png||product-1675754160-78217.png||product-1675754160-92323.png||product-1675754160-4619.png', '4', '1675686540', 'deleted'),
(3, 'WOMENS DAY ', ' \r\nWorld wide 8th March is celebrated as  International Women’s day. As every year Shingavi jewellers pvt ltd take this opportunity  to celebrate this day with very enthusiastic. Its been 4 yrs Shingavi Jewellers is organizing this event (Treasure Hunt  ) for womens. Radio city is our main partner in organizing  this event. Before this event all the participants has to register to get entry in the game. Game is played with partner. All the participants has to find all clues one by one  which are kept hide at the different stores in savedi area. Participants has tocomplete the given task & reached to Shingavi Jewellers showroom. The pair who will reach first will be the winner for the game.  After the game Prizes are distributed  to the winners by honorable guest present.   This day is celebrated with very energy, fun, Masti & life long experience.', 'event-1675940232-31740.JPG||event-1675940232-44851.JPG||event-1675940232-86298.JPG||event-1675940232-23925.JPG||event-1675940232-6738.JPG||event-1675940232-49093.JPG||event-1675940232-26653.JPG||event-1675940232-18540.JPG||event-1675940232-15263.JPG||event-1675940232-19716.JPG||event-1675940232-6637.JPG||event-1675940232-96335.JPG||event-1675940232-18137.JPG||event-1675940232-17674.JPG||event-1675940232-32432.JPG', '4', '1675940232', 'active'),
(4, 'SANKRANT HALDI KUM- KUM', 'The program of Haldi kum kum was held on account of  Makarsankranti .The program was held on 28th january23. @ Hotel Rose Gold , savedi for very first time. Function was organized  for only ladies to enjoy at the fullest with fun, masti & dance. We have organized a few games like Put the Bindi , Ring master , ball basket . Every body were involved in playing all the games , many of them were winners & got gifts. All the ladies had enjoyed the whole program with the review to organized this type of program every year. At the end shingavi jewellers pvt ltd have distributed Vaan in a proper traditional manner.', 'event-1675942343-704.mp4||event-1675942343-85852.mp4||event-1675942343-18082.mp4||product-1675942391-78434.jpg||product-1675942391-42011.jpg||product-1675942391-26767.jpg||product-1675942391-40472.jpg||product-1675942391-15790.jpeg', '4', '1675942343', 'active'),
(1, 'Abhijeet Ikhe', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.', 'event-1675754090-14908.png', '4', '1675685254', 'deleted'),
(2, 'Abhay Kardile', 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.Lorem ipsum dolor sit amet consectetur adipisicing, elit. Saepe illo at harum, libero, eius minus consequatur laborum tempora quis officiis maiores architecto alias nesciunt dicta, necessitatibus distinctio itaque mollitia nemo.', 'product-1675754160-5664.jpg||product-1675754160-89505.png||product-1675754160-78217.png||product-1675754160-92323.png||product-1675754160-4619.png', '4', '1675686540', 'deleted'),
(3, 'WOMENS DAY ', ' \r\nWorld wide 8th March is celebrated as  International Women’s day. As every year Shingavi jewellers pvt ltd take this opportunity  to celebrate this day with very enthusiastic. Its been 4 yrs Shingavi Jewellers is organizing this event (Treasure Hunt  ) for womens. Radio city is our main partner in organizing  this event. Before this event all the participants has to register to get entry in the game. Game is played with partner. All the participants has to find all clues one by one  which are kept hide at the different stores in savedi area. Participants has tocomplete the given task & reached to Shingavi Jewellers showroom. The pair who will reach first will be the winner for the game.  After the game Prizes are distributed  to the winners by honorable guest present.   This day is celebrated with very energy, fun, Masti & life long experience.', 'event-1675940232-31740.JPG||event-1675940232-44851.JPG||event-1675940232-86298.JPG||event-1675940232-23925.JPG||event-1675940232-6738.JPG||event-1675940232-49093.JPG||event-1675940232-26653.JPG||event-1675940232-18540.JPG||event-1675940232-15263.JPG||event-1675940232-19716.JPG||event-1675940232-6637.JPG||event-1675940232-96335.JPG||event-1675940232-18137.JPG||event-1675940232-17674.JPG||event-1675940232-32432.JPG', '4', '1675940232', 'active'),
(4, 'SANKRANT HALDI KUM- KUM', 'The program of Haldi kum kum was held on account of  Makarsankranti .The program was held on 28th january23. @ Hotel Rose Gold , savedi for very first time. Function was organized  for only ladies to enjoy at the fullest with fun, masti & dance. We have organized a few games like Put the Bindi , Ring master , ball basket . Every body were involved in playing all the games , many of them were winners & got gifts. All the ladies had enjoyed the whole program with the review to organized this type of program every year. At the end shingavi jewellers pvt ltd have distributed Vaan in a proper traditional manner.', 'event-1675942343-704.mp4||event-1675942343-85852.mp4||event-1675942343-18082.mp4||product-1675942391-78434.jpg||product-1675942391-42011.jpg||product-1675942391-26767.jpg||product-1675942391-40472.jpg||product-1675942391-15790.jpeg', '4', '1675942343', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_policy_tbl`
--

CREATE TABLE `exchange_policy_tbl` (
  `exchange_policy_tbl_id` int(11) NOT NULL,
  `exchange_policy_name` text DEFAULT NULL,
  `exchange_policy_details` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exchange_policy_tbl`
--

INSERT INTO `exchange_policy_tbl` (`exchange_policy_tbl_id`, `exchange_policy_name`, `exchange_policy_details`, `entry_by`, `entry_time`, `entry_date`, `status`) VALUES
(1, 'Diamond Jewellery', '90% of invoice value.\r\n', '5', '1752310897', '2025-07-12', 'active'),
(3, 'Gold Jewellery ', '100% exchange on the current Gold value.', '5', '1752311003', '2025-07-12', 'active'),
(4, 'Bullion Gold', 'Not Applicable.', '5', '1752311012', '2025-07-12', 'active'),
(5, 'Silver articles', '999 purity: 96% exchange on the silver value, Others: On the basis of purity there may be weight and rate deduction.', '5', '1752311022', '2025-07-12', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `faq_tbl`
--

CREATE TABLE `faq_tbl` (
  `faq_tbl_id` int(11) NOT NULL,
  `faq_question` text DEFAULT NULL,
  `faq_answer` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq_tbl`
--

INSERT INTO `faq_tbl` (`faq_tbl_id`, `faq_question`, `faq_answer`, `entry_time`, `entry_date`, `status`) VALUES
(2, 'What materials are used in your jewelry', 'Our jewelry is crafted from high-quality materials such as 925 sterling silver, 18K gold, and platinum. We also use genuine gemstones and certified diamonds in our designs.', '1737542230', '2025-01-22', 'active'),
(3, 'How do I determine my ring size?', 'You can use our online ring size guide or visit a local jeweler to get an accurate measurement. We also provide a printable ring sizer on our website for your convenience.', '1737542253', '2025-01-22', 'active'),
(4, 'Do you offer custom jewelry designs?', ' Yes, we offer custom jewelry services. You can work with our designers to create a unique piece that reflects your style and preferences.\r\n', '1737542275', '2025-01-22', 'active'),
(5, 'What is your return and exchange policy?', 'We offer a 30-day return and exchange policy. Items must be returned in their original condition with proof of purchase. Personalized or custom-made items cannot be returned.', '1737542296', '2025-01-22', 'active'),
(6, ' How should I care for my jewelry?', 'o maintain the shine of your jewelry, avoid exposure to chemicals, moisture, and extreme temperatures. Store your jewelry in a soft pouch and clean it with a gentle jewelry cleaner.', '1737542310', '2025-01-22', 'active'),
(7, 'Do you offer free shipping?', 'Yes, we offer free standard shipping on all orders above 100. Express shipping options are also available at an additional cost.', '1737542320', '2025-01-22', 'active'),
(8, 'Are your diamonds and gemstones ethically sourced?', 'Absolutely! We are committed to ethical sourcing and ensure that all our diamonds and gemstones are conflict-free and sourced from reputable suppliers.', '1737542339', '2025-01-22', 'active'),
(9, 'Can I track my order?', 'Yes, once your order is shipped, you will receive a tracking number via email, which you can use to track your package in real time.', '1737542348', '2025-01-22', 'active'),
(10, 'Do you offer jewelry repair services?', 'Yes, we provide professional jewelry repair services, including resizing, stone replacement, and polishing to keep your jewelry looking its best.', '1737542360', '2025-01-22', 'active'),
(11, 'What payment methods do you accept?', 'We accept major credit and debit cards, PayPal, and other secure payment options to provide you with a seamless shopping experience.', '1737542372', '2025-01-22', 'active'),
(2, 'What materials are used in your jewelry', 'Our jewelry is crafted from high-quality materials such as 925 sterling silver, 18K gold, and platinum. We also use genuine gemstones and certified diamonds in our designs.', '1737542230', '2025-01-22', 'active'),
(3, 'How do I determine my ring size?', 'You can use our online ring size guide or visit a local jeweler to get an accurate measurement. We also provide a printable ring sizer on our website for your convenience.', '1737542253', '2025-01-22', 'active'),
(4, 'Do you offer custom jewelry designs?', ' Yes, we offer custom jewelry services. You can work with our designers to create a unique piece that reflects your style and preferences.\r\n', '1737542275', '2025-01-22', 'active'),
(5, 'What is your return and exchange policy?', 'We offer a 30-day return and exchange policy. Items must be returned in their original condition with proof of purchase. Personalized or custom-made items cannot be returned.', '1737542296', '2025-01-22', 'active'),
(6, ' How should I care for my jewelry?', 'o maintain the shine of your jewelry, avoid exposure to chemicals, moisture, and extreme temperatures. Store your jewelry in a soft pouch and clean it with a gentle jewelry cleaner.', '1737542310', '2025-01-22', 'active'),
(7, 'Do you offer free shipping?', 'Yes, we offer free standard shipping on all orders above 100. Express shipping options are also available at an additional cost.', '1737542320', '2025-01-22', 'active'),
(8, 'Are your diamonds and gemstones ethically sourced?', 'Absolutely! We are committed to ethical sourcing and ensure that all our diamonds and gemstones are conflict-free and sourced from reputable suppliers.', '1737542339', '2025-01-22', 'active'),
(9, 'Can I track my order?', 'Yes, once your order is shipped, you will receive a tracking number via email, which you can use to track your package in real time.', '1737542348', '2025-01-22', 'active'),
(10, 'Do you offer jewelry repair services?', 'Yes, we provide professional jewelry repair services, including resizing, stone replacement, and polishing to keep your jewelry looking its best.', '1737542360', '2025-01-22', 'active'),
(11, 'What payment methods do you accept?', 'We accept major credit and debit cards, PayPal, and other secure payment options to provide you with a seamless shopping experience.', '1737542372', '2025-01-22', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `filter_name`
--

CREATE TABLE `filter_name` (
  `filter_name_id` int(11) NOT NULL,
  `filter_name` text NOT NULL,
  `cat_id` text NOT NULL,
  `group_id` text NOT NULL,
  `filter_tit_id` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `filter_name`
--

INSERT INTO `filter_name` (`filter_name_id`, `filter_name`, `cat_id`, `group_id`, `filter_tit_id`, `status`, `entry_by`, `entry_time`) VALUES
(1, '24', '5', '9', '99', 'active', '4', '1740116623'),
(1, '24', '5', '9', '99', 'active', '4', '1740116623'),
(0, 'test', '5', '9', '99', 'deleted', '5', '1753679729');

-- --------------------------------------------------------

--
-- Table structure for table `filter_title`
--

CREATE TABLE `filter_title` (
  `filter_title_id` int(11) NOT NULL,
  `filter_title` text NOT NULL,
  `cat_id` text NOT NULL,
  `group_id` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `filter_title`
--

INSERT INTO `filter_title` (`filter_title_id`, `filter_title`, `cat_id`, `group_id`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'JHUMKA', '5', '8', 'deleted', '4', '1604910568'),
(2, 'TYPE', '5', '8', 'deleted', '4', '1604910863'),
(4, 'PURITY', '5', '8', 'active', '4', '1604910951'),
(5, 'METAL COLOR', '5', '8', 'active', '4', '1604910963'),
(6, 'OCCASION', '5', '10', 'active', '4', '1604911023'),
(7, 'ENGAGEMENT RING', '5', '10', 'deleted', '4', '1604911057'),
(8, 'WORKWEAR', '5', '10', 'deleted', '4', '1604911088'),
(9, 'DAILY WEAR', '5', '10', 'deleted', '4', '1604911108'),
(10, 'SHORT CHAIN', '5', '11', 'deleted', '4', '1604911448'),
(11, 'TYPE', '5', '11', 'active', '4', '1604911479'),
(12, 'GENDER', '5', '11', 'active', '4', '1604911507'),
(13, 'METAL COLOR', '5', '11', 'active', '4', '1604911521'),
(15, 'KAN CHAIN', '5', '8', 'deleted', '4', '1604911735'),
(16, 'SHORT MANGALSUTRA', '5', '15', 'deleted', '4', '1604911812'),
(17, 'LONG MANGALSUTRA', '5', '15', 'deleted', '4', '1604911831'),
(18, 'BALI', '5', '8', 'deleted', '4', '1604912387'),
(19, 'LATKAN', '5', '8', 'deleted', '4', '1604912407'),
(20, 'VEDHANI', '5', '39', 'deleted', '4', '1604912907'),
(21, 'HALF SET', '5', '13', 'deleted', '4', '1604913217'),
(22, 'LONG SET', '5', '13', 'deleted', '4', '1604913237'),
(23, 'DORLA', '5', '17', 'deleted', '4', '1604913425'),
(24, 'MUTHIYA', '5', '9', 'deleted', '4', '1604913666'),
(25, 'TEMPLE RING', '5', '10', 'deleted', '4', '1604914103'),
(26, 'KUNDAN RING', '5', '10', 'deleted', '4', '1604914129'),
(27, 'KALKATTE RING', '5', '10', 'deleted', '4', '1604914339'),
(28, 'ASTRO', '5', '10', 'deleted', '4', '1604914463'),
(29, 'PEARLS', '5', '10', 'deleted', '4', '1604914486'),
(31, 'GENDER', '6', '19', 'active', '4', '1604920307'),
(33, 'LADIES BRACELET', '5', '40', 'deleted', '4', '1604921440'),
(34, 'GENTS BRACELET', '5', '40', 'deleted', '4', '1604921483'),
(35, 'KID BRACELET', '5', '40', 'deleted', '4', '1604921507'),
(36, 'GENTS KADA BRACELET', '5', '40', 'deleted', '4', '1604921742'),
(37, 'JHUMKA', '6', '28', 'deleted', '4', '1605092443'),
(38, 'STUD', '6', '28', 'deleted', '4', '1605092470'),
(39, 'HOOP', '6', '28', 'deleted', '4', '1605092487'),
(40, 'DROP', '6', '28', 'deleted', '4', '1605092502'),
(42, 'PURITY', '6', '23', 'active', '4', '1605092568'),
(43, 'OCCASION', '6', '23', 'active', '4', '1605092597'),
(45, 'PURITY', '6', '19', 'active', '4', '1605092704'),
(46, 'TYPE', '6', '19', 'active', '4', '1605093148'),
(47, 'SOLID', '6', '27', 'active', '4', '1605093403'),
(48, 'GENTS BALI', '6', '28', 'deleted', '4', '1605093608'),
(49, 'LADIES BALI', '6', '28', 'deleted', '4', '1605093628'),
(50, 'HOLLOW ', '6', '27', 'active', '4', '1605094045'),
(52, 'PRODUCT', '6', '20', 'deleted', '4', '1605094387'),
(53, 'SHORT CHAIN', '6', '41', 'deleted', '4', '1605094805'),
(54, 'LONG CHAIN', '6', '41', 'deleted', '4', '1605094839'),
(55, 'NECK CHAIN', '6', '41', 'deleted', '4', '1605094875'),
(56, 'GENTS KADA BRACELET', '6', '20', 'deleted', '4', '1605095397'),
(57, 'TYPE', '6', '20', 'active', '4', '1605095433'),
(58, 'GHUNGARU PAYAL', '6', '26', 'deleted', '4', '1605095758'),
(59, 'KUNDAN PAYAL', '6', '26', 'deleted', '4', '1605095776'),
(60, 'PEARLS PAYAL', '6', '26', 'deleted', '4', '1605095890'),
(61, 'CHAIN PAYAL', '6', '26', 'deleted', '4', '1605096027'),
(62, 'PATTI PAYAL', '6', '26', 'deleted', '4', '1605096042'),
(63, 'STONE PAYAL', '6', '26', 'deleted', '4', '1605096375'),
(65, 'BANGADI', '8', '33', 'deleted', '4', '1605097122'),
(66, 'ENGAGEMENT RING', '8', '31', 'deleted', '4', '1605097176'),
(67, 'SINGLE SOLITAIRE RING', '8', '31', 'deleted', '4', '1605097216'),
(68, 'LADIES FINGER RING', '8', '31', 'deleted', '4', '1605097257'),
(69, 'GENTS FINGER RING', '8', '31', 'deleted', '4', '1605097268'),
(70, 'DIAMOND RINGA', '8', '32', 'deleted', '4', '1605097382'),
(71, 'DIAMOND STUD', '8', '32', 'deleted', '4', '1605097427'),
(72, 'HALF SET', '8', '35', 'deleted', '4', '1605097503'),
(73, 'SHORT MANGALSUTRA', '8', '43', 'deleted', '4', '1605097847'),
(74, 'MODAK', '6', '25', 'deleted', '4', '1605098188'),
(75, 'POOJA THALI', '6', '25', 'deleted', '4', '1605098216'),
(76, 'GHANTI', '6', '25', 'deleted', '4', '1605098229'),
(77, 'KARANDA', '6', '25', 'deleted', '4', '1605098319'),
(78, 'JOD KAMAL', '6', '25', 'deleted', '4', '1605098668'),
(79, 'KARANDA PLATE', '6', '25', 'deleted', '4', '1605098718'),
(80, 'PURITY', '6', '22', 'active', '4', '1605098753'),
(81, 'TAMBYA', '6', '25', 'deleted', '4', '1605098792'),
(82, 'NARAL', '6', '25', 'deleted', '4', '1605098864'),
(83, 'CHAIN SIZE', '5', '11', 'active', '4', '1605102194'),
(84, 'PURITY', '6', '41', 'active', '4', '1605102557'),
(85, 'OCCASION', '5', '8', 'active', '4', '1605104322'),
(87, 'PURITY', '5', '11', 'active', '4', '1605104521'),
(88, 'PURITY', '5', '10', 'active', '4', '1605104610'),
(89, 'RING SIZE', '5', '10', 'active', '4', '1605104633'),
(91, 'METAL COLOR', '5', '10', 'active', '4', '1605104732'),
(92, 'GENDER', '5', '10', 'active', '4', '1605104766'),
(95, 'PURITY', '5', '12', 'active', '4', '1605104969'),
(96, 'OCCASION', '5', '12', 'active', '4', '1605105010'),
(99, 'PURITY', '5', '9', 'active', '4', '1605105112'),
(100, 'BANGLE SIZE', '5', '9', 'active', '4', '1605105139'),
(101, 'METAL COLOR', '5', '9', 'active', '4', '1605105168'),
(102, 'TYPE', '5', '9', 'active', '4', '1605105192'),
(103, 'WIDTH', '5', '9', 'active', '4', '1605105231'),
(104, 'PURITY', '5', '13', 'active', '4', '1605105833'),
(106, 'METAL COLOR', '5', '13', 'active', '4', '1605105883'),
(107, 'OCCASION', '5', '13', 'active', '4', '1605105919'),
(110, 'MANGALSUTRA SIZE', '5', '15', 'active', '4', '1605106067'),
(111, 'PURITY', '5', '15', 'active', '4', '1605106103'),
(112, 'METAL COLOR', '5', '15', 'active', '4', '1605106179'),
(114, 'PURITY', '5', '17', 'active', '4', '1605106298'),
(116, 'METAL COLOR', '5', '17', 'active', '4', '1605106376'),
(118, 'PURITY', '5', '18', 'active', '4', '1605106513'),
(119, 'METAL COLOR', '5', '18', 'active', '4', '1605106532'),
(122, 'COIN WEIGHT', '5', '39', 'active', '4', '1605106693'),
(123, 'PURITY', '5', '39', 'active', '4', '1605106715'),
(124, 'TYPE', '5', '39', 'active', '4', '1605106738'),
(126, 'PRODUCT', '5', '40', 'deleted', '4', '1605106893'),
(128, 'GENDER', '5', '40', 'active', '4', '1605106948'),
(129, 'COLLECTION', '5', '40', 'active', '4', '1605106963'),
(131, 'PURITY', '6', '28', 'active', '4', '1605179685'),
(133, 'METAL COLOR', '6', '28', 'active', '4', '1605179735'),
(134, 'OCCASION', '6', '28', 'active', '4', '1605179801'),
(135, 'OCCASION', '6', '20', 'active', '4', '1605180743'),
(137, 'GENDER', '6', '20', 'active', '4', '1605181233'),
(138, 'COLLECTION', '6', '20', 'deleted', '4', '1605181244'),
(139, 'WEIGHT', '6', '22', 'active', '4', '1605182027'),
(140, 'TYPE', '6', '41', 'active', '4', '1605182198'),
(141, 'GENDER', '6', '41', 'active', '4', '1605182210'),
(142, 'METAL COLOR', '6', '41', 'active', '4', '1605182235'),
(144, 'CHAIN SIZE', '6', '41', 'active', '4', '1605182273'),
(146, 'SIZE', '6', '26', 'active', '4', '1605182968'),
(147, 'PURITY', '6', '26', 'active', '4', '1605182992'),
(149, 'OCCASION', '6', '26', 'active', '4', '1605183019'),
(150, 'STYLE', '6', '26', 'active', '4', '1605183068'),
(151, 'TYPE', '6', '26', 'active', '4', '1605183123'),
(153, 'TYPE', '6', '21', 'active', '4', '1605183221'),
(154, 'WEIGHT', '6', '21', 'active', '4', '1605183233'),
(155, 'PURITY', '6', '21', 'active', '4', '1605183248'),
(157, 'OCCASION', '6', '21', 'active', '4', '1605183274'),
(158, 'PRICE', '6', '24', 'active', '4', '1605183319'),
(159, 'PURITY', '6', '24', 'active', '4', '1605183329'),
(161, 'TYPE', '6', '24', 'active', '4', '1605183361'),
(162, 'OCCASION', '6', '24', 'active', '4', '1605183372'),
(163, 'METAL COLOR', '6', '24', 'active', '4', '1605183385'),
(164, 'WEIGHT', '6', '24', 'active', '4', '1605183433'),
(166, 'PURITY', '6', '25', 'active', '4', '1605183623'),
(168, 'METAL COLOR', '6', '25', 'active', '4', '1605183668'),
(169, 'OCCASION', '6', '25', 'active', '4', '1605183698'),
(170, 'TYPE', '6', '25', 'active', '4', '1605183715'),
(171, 'WEIGHT', '6', '25', 'active', '4', '1605183806'),
(173, 'TYPE', '8', '30', 'deleted', '4', '1605184074'),
(174, 'WEIGHT', '8', '30', 'active', '4', '1605184090'),
(175, 'DIAMOND COLOR', '8', '30', 'active', '4', '1605184210'),
(176, 'CLARITY', '8', '30', 'active', '4', '1605184247'),
(177, 'CUT SCALE', '8', '30', 'active', '4', '1605184298'),
(178, 'METAL COLOR', '8', '30', 'active', '4', '1605184401'),
(180, 'COLLECTION', '8', '30', 'active', '4', '1605184599'),
(182, 'TYPE', '8', '31', 'active', '4', '1605185380'),
(183, 'WEIGHT', '8', '31', 'active', '4', '1605185433'),
(184, 'DIAMOND COLOR', '8', '31', 'active', '4', '1605185448'),
(185, 'CLARITY', '8', '31', 'active', '4', '1605185464'),
(186, 'CUT SCALE', '8', '31', 'active', '4', '1605185479'),
(187, 'METAL COLOR', '8', '31', 'active', '4', '1605185556'),
(189, 'COLLECTION', '8', '31', 'active', '4', '1605185595'),
(191, 'TYPE', '8', '32', 'active', '4', '1605185644'),
(192, 'WEIGHT', '8', '32', 'active', '4', '1605185657'),
(193, 'DIAMOND COLOR', '8', '32', 'active', '4', '1605185693'),
(194, 'CLARITY', '8', '32', 'active', '4', '1605185720'),
(195, 'CUT SCALE', '8', '32', 'active', '4', '1605185730'),
(196, 'METAL COLOR', '8', '32', 'active', '4', '1605185748'),
(198, 'COLLECTION', '8', '32', 'active', '4', '1605185818'),
(200, 'TYPE', '8', '33', 'active', '4', '1605186127'),
(201, 'WEIGHT', '8', '33', 'active', '4', '1605186139'),
(202, 'DIAMOND COLOR', '8', '33', 'active', '4', '1605186157'),
(203, 'CLARITY', '8', '33', 'active', '4', '1605186178'),
(204, 'CUT SCALE', '8', '33', 'active', '4', '1605186194'),
(205, 'METAL COLOR', '8', '33', 'active', '4', '1605186227'),
(207, 'COLLECTION', '8', '33', 'active', '4', '1605186260'),
(209, 'TYPE', '8', '35', 'active', '4', '1605186340'),
(210, 'WEIGHT', '8', '35', 'active', '4', '1605186356'),
(211, 'DIAMOND COLOR', '8', '35', 'active', '4', '1605186378'),
(212, 'CLARITY', '8', '35', 'active', '4', '1605186397'),
(213, 'CUT SCALE', '8', '35', 'active', '4', '1605186408'),
(214, 'METAL COLOR', '8', '35', 'active', '4', '1605186449'),
(216, 'COLLECTION', '8', '35', 'active', '4', '1605186481'),
(218, 'TYPE', '8', '36', 'active', '4', '1605186552'),
(219, 'WEIGHT', '8', '36', 'active', '4', '1605186572'),
(220, 'DIAMOND COLOR', '8', '36', 'active', '4', '1605186589'),
(221, 'CLARITY', '8', '42', 'deleted', '4', '1605186673'),
(222, 'CLARITY', '8', '36', 'active', '4', '1605186709'),
(223, 'CUT SCALE', '8', '36', 'active', '4', '1605186728'),
(224, 'METAL COLOR', '8', '36', 'active', '4', '1605186742'),
(226, 'COLLECTION', '8', '36', 'active', '4', '1605186774'),
(228, 'TYPE', '8', '42', 'active', '4', '1605186849'),
(229, 'WEIGHT', '8', '42', 'active', '4', '1605186861'),
(230, 'DIAMOND COLOR', '8', '42', 'active', '4', '1605186878'),
(231, 'CLARITY', '8', '42', 'active', '4', '1605186895'),
(232, 'CUT SCALE', '8', '42', 'active', '4', '1605186914'),
(233, 'METAL COLOR', '8', '42', 'active', '4', '1605186926'),
(235, 'COLLECTION', '8', '42', 'active', '4', '1605186957'),
(237, 'TYPE', '8', '43', 'active', '4', '1605187015'),
(238, 'WEIGHT', '8', '43', 'active', '4', '1605187026'),
(239, 'DIAMOND COLOR', '8', '43', 'active', '4', '1605187043'),
(240, 'CLARITY', '8', '43', 'active', '4', '1605187084'),
(241, 'CUT SCALE', '8', '43', 'active', '4', '1605187097'),
(242, 'METAL COLOR', '8', '43', 'active', '4', '1605187111'),
(244, 'COLLECTION', '8', '43', 'active', '4', '1605187136'),
(245, 'GENDER', '5', '8', 'active', '4', '1605187519'),
(246, 'TYPE', '5', '8', 'active', '4', '1605243909'),
(247, 'METAL COLOR', '5', '12', 'active', '4', '1605516074'),
(248, 'PURITY', '5', '40', 'active', '4', '1605531652'),
(249, 'METAL COLOR', '5', '40', 'active', '4', '1605531784'),
(250, 'SIZE', '6', '19', 'active', '4', '1605595992'),
(251, 'PURITY', '6', '20', 'active', '4', '1605618096'),
(252, 'TYPE', '6', '22', 'active', '4', '1605620777'),
(254, 'PURITY', '6', '27', 'active', '4', '1605624429'),
(255, 'WEIGHT', '6', '27', 'active', '4', '1605624511'),
(257, 'TYPE', '6', '27', 'active', '4', '1605624593'),
(258, 'PRODUCT', '6', '24', 'active', '4', '1605783010'),
(259, 'PRODUCT', '6', '25', 'active', '4', '1605785127'),
(261, 'PURITY', '6', '29', 'active', '4', '1605787100'),
(262, 'TYPE', '6', '29', 'active', '4', '1605787113'),
(263, 'OCCASION', '6', '29', 'active', '4', '1605787171'),
(266, 'PURITY', '6', '44', 'active', '4', '1605788559'),
(267, 'WEIGHT', '6', '44', 'active', '4', '1605788573'),
(269, 'PURITY', '6', '45', 'active', '4', '1605788618'),
(270, 'TYPE', '6', '45', 'active', '4', '1605788650'),
(271, 'TYPE', '6', '44', 'active', '4', '1605788662'),
(272, 'WEIGHT', '6', '45', 'active', '4', '1605788674'),
(273, 'PURITY', '6', '46', 'active', '4', '1611225283'),
(274, 'TYPE', '6', '46', 'active', '4', '1611225291'),
(275, 'METAL COLOR', '6', '46', 'active', '4', '1611225299'),
(276, 'OCCASION', '6', '46', 'active', '4', '1611225339'),
(1, 'JHUMKA', '5', '8', 'deleted', '4', '1604910568'),
(2, 'TYPE', '5', '8', 'deleted', '4', '1604910863'),
(4, 'PURITY', '5', '8', 'active', '4', '1604910951'),
(5, 'METAL COLOR', '5', '8', 'active', '4', '1604910963'),
(6, 'OCCASION', '5', '10', 'active', '4', '1604911023'),
(7, 'ENGAGEMENT RING', '5', '10', 'deleted', '4', '1604911057'),
(8, 'WORKWEAR', '5', '10', 'deleted', '4', '1604911088'),
(9, 'DAILY WEAR', '5', '10', 'deleted', '4', '1604911108'),
(10, 'SHORT CHAIN', '5', '11', 'deleted', '4', '1604911448'),
(11, 'TYPE', '5', '11', 'active', '4', '1604911479'),
(12, 'GENDER', '5', '11', 'active', '4', '1604911507'),
(13, 'METAL COLOR', '5', '11', 'active', '4', '1604911521'),
(15, 'KAN CHAIN', '5', '8', 'deleted', '4', '1604911735'),
(16, 'SHORT MANGALSUTRA', '5', '15', 'deleted', '4', '1604911812'),
(17, 'LONG MANGALSUTRA', '5', '15', 'deleted', '4', '1604911831'),
(18, 'BALI', '5', '8', 'deleted', '4', '1604912387'),
(19, 'LATKAN', '5', '8', 'deleted', '4', '1604912407'),
(20, 'VEDHANI', '5', '39', 'deleted', '4', '1604912907'),
(21, 'HALF SET', '5', '13', 'deleted', '4', '1604913217'),
(22, 'LONG SET', '5', '13', 'deleted', '4', '1604913237'),
(23, 'DORLA', '5', '17', 'deleted', '4', '1604913425'),
(24, 'MUTHIYA', '5', '9', 'deleted', '4', '1604913666'),
(25, 'TEMPLE RING', '5', '10', 'deleted', '4', '1604914103'),
(26, 'KUNDAN RING', '5', '10', 'deleted', '4', '1604914129'),
(27, 'KALKATTE RING', '5', '10', 'deleted', '4', '1604914339'),
(28, 'ASTRO', '5', '10', 'deleted', '4', '1604914463'),
(29, 'PEARLS', '5', '10', 'deleted', '4', '1604914486'),
(31, 'GENDER', '6', '19', 'active', '4', '1604920307'),
(33, 'LADIES BRACELET', '5', '40', 'deleted', '4', '1604921440'),
(34, 'GENTS BRACELET', '5', '40', 'deleted', '4', '1604921483'),
(35, 'KID BRACELET', '5', '40', 'deleted', '4', '1604921507'),
(36, 'GENTS KADA BRACELET', '5', '40', 'deleted', '4', '1604921742'),
(37, 'JHUMKA', '6', '28', 'deleted', '4', '1605092443'),
(38, 'STUD', '6', '28', 'deleted', '4', '1605092470'),
(39, 'HOOP', '6', '28', 'deleted', '4', '1605092487'),
(40, 'DROP', '6', '28', 'deleted', '4', '1605092502'),
(42, 'PURITY', '6', '23', 'active', '4', '1605092568'),
(43, 'OCCASION', '6', '23', 'active', '4', '1605092597'),
(45, 'PURITY', '6', '19', 'active', '4', '1605092704'),
(46, 'TYPE', '6', '19', 'active', '4', '1605093148'),
(47, 'SOLID', '6', '27', 'active', '4', '1605093403'),
(48, 'GENTS BALI', '6', '28', 'deleted', '4', '1605093608'),
(49, 'LADIES BALI', '6', '28', 'deleted', '4', '1605093628'),
(50, 'HOLLOW ', '6', '27', 'active', '4', '1605094045'),
(52, 'PRODUCT', '6', '20', 'deleted', '4', '1605094387'),
(53, 'SHORT CHAIN', '6', '41', 'deleted', '4', '1605094805'),
(54, 'LONG CHAIN', '6', '41', 'deleted', '4', '1605094839'),
(55, 'NECK CHAIN', '6', '41', 'deleted', '4', '1605094875'),
(56, 'GENTS KADA BRACELET', '6', '20', 'deleted', '4', '1605095397'),
(57, 'TYPE', '6', '20', 'active', '4', '1605095433'),
(58, 'GHUNGARU PAYAL', '6', '26', 'deleted', '4', '1605095758'),
(59, 'KUNDAN PAYAL', '6', '26', 'deleted', '4', '1605095776'),
(60, 'PEARLS PAYAL', '6', '26', 'deleted', '4', '1605095890'),
(61, 'CHAIN PAYAL', '6', '26', 'deleted', '4', '1605096027'),
(62, 'PATTI PAYAL', '6', '26', 'deleted', '4', '1605096042'),
(63, 'STONE PAYAL', '6', '26', 'deleted', '4', '1605096375'),
(65, 'BANGADI', '8', '33', 'deleted', '4', '1605097122'),
(66, 'ENGAGEMENT RING', '8', '31', 'deleted', '4', '1605097176'),
(67, 'SINGLE SOLITAIRE RING', '8', '31', 'deleted', '4', '1605097216'),
(68, 'LADIES FINGER RING', '8', '31', 'deleted', '4', '1605097257'),
(69, 'GENTS FINGER RING', '8', '31', 'deleted', '4', '1605097268'),
(70, 'DIAMOND RINGA', '8', '32', 'deleted', '4', '1605097382'),
(71, 'DIAMOND STUD', '8', '32', 'deleted', '4', '1605097427'),
(72, 'HALF SET', '8', '35', 'deleted', '4', '1605097503'),
(73, 'SHORT MANGALSUTRA', '8', '43', 'deleted', '4', '1605097847'),
(74, 'MODAK', '6', '25', 'deleted', '4', '1605098188'),
(75, 'POOJA THALI', '6', '25', 'deleted', '4', '1605098216'),
(76, 'GHANTI', '6', '25', 'deleted', '4', '1605098229'),
(77, 'KARANDA', '6', '25', 'deleted', '4', '1605098319'),
(78, 'JOD KAMAL', '6', '25', 'deleted', '4', '1605098668'),
(79, 'KARANDA PLATE', '6', '25', 'deleted', '4', '1605098718'),
(80, 'PURITY', '6', '22', 'active', '4', '1605098753'),
(81, 'TAMBYA', '6', '25', 'deleted', '4', '1605098792'),
(82, 'NARAL', '6', '25', 'deleted', '4', '1605098864'),
(83, 'CHAIN SIZE', '5', '11', 'active', '4', '1605102194'),
(84, 'PURITY', '6', '41', 'active', '4', '1605102557'),
(85, 'OCCASION', '5', '8', 'active', '4', '1605104322'),
(87, 'PURITY', '5', '11', 'active', '4', '1605104521'),
(88, 'PURITY', '5', '10', 'active', '4', '1605104610'),
(89, 'RING SIZE', '5', '10', 'active', '4', '1605104633'),
(91, 'METAL COLOR', '5', '10', 'active', '4', '1605104732'),
(92, 'GENDER', '5', '10', 'active', '4', '1605104766'),
(95, 'PURITY', '5', '12', 'active', '4', '1605104969'),
(96, 'OCCASION', '5', '12', 'active', '4', '1605105010'),
(99, 'PURITY', '5', '9', 'active', '4', '1605105112'),
(100, 'BANGLE SIZE', '5', '9', 'active', '4', '1605105139'),
(101, 'METAL COLOR', '5', '9', 'active', '4', '1605105168'),
(102, 'TYPE', '5', '9', 'active', '4', '1605105192'),
(103, 'WIDTH', '5', '9', 'active', '4', '1605105231'),
(104, 'PURITY', '5', '13', 'active', '4', '1605105833'),
(106, 'METAL COLOR', '5', '13', 'active', '4', '1605105883'),
(107, 'OCCASION', '5', '13', 'active', '4', '1605105919'),
(110, 'MANGALSUTRA SIZE', '5', '15', 'active', '4', '1605106067'),
(111, 'PURITY', '5', '15', 'active', '4', '1605106103'),
(112, 'METAL COLOR', '5', '15', 'active', '4', '1605106179'),
(114, 'PURITY', '5', '17', 'active', '4', '1605106298'),
(116, 'METAL COLOR', '5', '17', 'active', '4', '1605106376'),
(118, 'PURITY', '5', '18', 'active', '4', '1605106513'),
(119, 'METAL COLOR', '5', '18', 'active', '4', '1605106532'),
(122, 'COIN WEIGHT', '5', '39', 'active', '4', '1605106693'),
(123, 'PURITY', '5', '39', 'active', '4', '1605106715'),
(124, 'TYPE', '5', '39', 'active', '4', '1605106738'),
(126, 'PRODUCT', '5', '40', 'deleted', '4', '1605106893'),
(128, 'GENDER', '5', '40', 'active', '4', '1605106948'),
(129, 'COLLECTION', '5', '40', 'active', '4', '1605106963'),
(131, 'PURITY', '6', '28', 'active', '4', '1605179685'),
(133, 'METAL COLOR', '6', '28', 'active', '4', '1605179735'),
(134, 'OCCASION', '6', '28', 'active', '4', '1605179801'),
(135, 'OCCASION', '6', '20', 'active', '4', '1605180743'),
(137, 'GENDER', '6', '20', 'active', '4', '1605181233'),
(138, 'COLLECTION', '6', '20', 'deleted', '4', '1605181244'),
(139, 'WEIGHT', '6', '22', 'active', '4', '1605182027'),
(140, 'TYPE', '6', '41', 'active', '4', '1605182198'),
(141, 'GENDER', '6', '41', 'active', '4', '1605182210'),
(142, 'METAL COLOR', '6', '41', 'active', '4', '1605182235'),
(144, 'CHAIN SIZE', '6', '41', 'active', '4', '1605182273'),
(146, 'SIZE', '6', '26', 'active', '4', '1605182968'),
(147, 'PURITY', '6', '26', 'active', '4', '1605182992'),
(149, 'OCCASION', '6', '26', 'active', '4', '1605183019'),
(150, 'STYLE', '6', '26', 'active', '4', '1605183068'),
(151, 'TYPE', '6', '26', 'active', '4', '1605183123'),
(153, 'TYPE', '6', '21', 'active', '4', '1605183221'),
(154, 'WEIGHT', '6', '21', 'active', '4', '1605183233'),
(155, 'PURITY', '6', '21', 'active', '4', '1605183248'),
(157, 'OCCASION', '6', '21', 'active', '4', '1605183274'),
(158, 'PRICE', '6', '24', 'active', '4', '1605183319'),
(159, 'PURITY', '6', '24', 'active', '4', '1605183329'),
(161, 'TYPE', '6', '24', 'active', '4', '1605183361'),
(162, 'OCCASION', '6', '24', 'active', '4', '1605183372'),
(163, 'METAL COLOR', '6', '24', 'active', '4', '1605183385'),
(164, 'WEIGHT', '6', '24', 'active', '4', '1605183433'),
(166, 'PURITY', '6', '25', 'active', '4', '1605183623'),
(168, 'METAL COLOR', '6', '25', 'active', '4', '1605183668'),
(169, 'OCCASION', '6', '25', 'active', '4', '1605183698'),
(170, 'TYPE', '6', '25', 'active', '4', '1605183715'),
(171, 'WEIGHT', '6', '25', 'active', '4', '1605183806'),
(173, 'TYPE', '8', '30', 'deleted', '4', '1605184074'),
(174, 'WEIGHT', '8', '30', 'active', '4', '1605184090'),
(175, 'DIAMOND COLOR', '8', '30', 'active', '4', '1605184210'),
(176, 'CLARITY', '8', '30', 'active', '4', '1605184247'),
(177, 'CUT SCALE', '8', '30', 'active', '4', '1605184298'),
(178, 'METAL COLOR', '8', '30', 'active', '4', '1605184401'),
(180, 'COLLECTION', '8', '30', 'active', '4', '1605184599'),
(182, 'TYPE', '8', '31', 'active', '4', '1605185380'),
(183, 'WEIGHT', '8', '31', 'active', '4', '1605185433'),
(184, 'DIAMOND COLOR', '8', '31', 'active', '4', '1605185448'),
(185, 'CLARITY', '8', '31', 'active', '4', '1605185464'),
(186, 'CUT SCALE', '8', '31', 'active', '4', '1605185479'),
(187, 'METAL COLOR', '8', '31', 'active', '4', '1605185556'),
(189, 'COLLECTION', '8', '31', 'active', '4', '1605185595'),
(191, 'TYPE', '8', '32', 'active', '4', '1605185644'),
(192, 'WEIGHT', '8', '32', 'active', '4', '1605185657'),
(193, 'DIAMOND COLOR', '8', '32', 'active', '4', '1605185693'),
(194, 'CLARITY', '8', '32', 'active', '4', '1605185720'),
(195, 'CUT SCALE', '8', '32', 'active', '4', '1605185730'),
(196, 'METAL COLOR', '8', '32', 'active', '4', '1605185748'),
(198, 'COLLECTION', '8', '32', 'active', '4', '1605185818'),
(200, 'TYPE', '8', '33', 'active', '4', '1605186127'),
(201, 'WEIGHT', '8', '33', 'active', '4', '1605186139'),
(202, 'DIAMOND COLOR', '8', '33', 'active', '4', '1605186157'),
(203, 'CLARITY', '8', '33', 'active', '4', '1605186178'),
(204, 'CUT SCALE', '8', '33', 'active', '4', '1605186194'),
(205, 'METAL COLOR', '8', '33', 'active', '4', '1605186227'),
(207, 'COLLECTION', '8', '33', 'active', '4', '1605186260'),
(209, 'TYPE', '8', '35', 'active', '4', '1605186340'),
(210, 'WEIGHT', '8', '35', 'active', '4', '1605186356'),
(211, 'DIAMOND COLOR', '8', '35', 'active', '4', '1605186378'),
(212, 'CLARITY', '8', '35', 'active', '4', '1605186397'),
(213, 'CUT SCALE', '8', '35', 'active', '4', '1605186408'),
(214, 'METAL COLOR', '8', '35', 'active', '4', '1605186449'),
(216, 'COLLECTION', '8', '35', 'active', '4', '1605186481'),
(218, 'TYPE', '8', '36', 'active', '4', '1605186552'),
(219, 'WEIGHT', '8', '36', 'active', '4', '1605186572'),
(220, 'DIAMOND COLOR', '8', '36', 'active', '4', '1605186589'),
(221, 'CLARITY', '8', '42', 'deleted', '4', '1605186673'),
(222, 'CLARITY', '8', '36', 'active', '4', '1605186709'),
(223, 'CUT SCALE', '8', '36', 'active', '4', '1605186728'),
(224, 'METAL COLOR', '8', '36', 'active', '4', '1605186742'),
(226, 'COLLECTION', '8', '36', 'active', '4', '1605186774'),
(228, 'TYPE', '8', '42', 'active', '4', '1605186849'),
(229, 'WEIGHT', '8', '42', 'active', '4', '1605186861'),
(230, 'DIAMOND COLOR', '8', '42', 'active', '4', '1605186878'),
(231, 'CLARITY', '8', '42', 'active', '4', '1605186895'),
(232, 'CUT SCALE', '8', '42', 'active', '4', '1605186914'),
(233, 'METAL COLOR', '8', '42', 'active', '4', '1605186926'),
(235, 'COLLECTION', '8', '42', 'active', '4', '1605186957'),
(237, 'TYPE', '8', '43', 'active', '4', '1605187015'),
(238, 'WEIGHT', '8', '43', 'active', '4', '1605187026'),
(239, 'DIAMOND COLOR', '8', '43', 'active', '4', '1605187043'),
(240, 'CLARITY', '8', '43', 'active', '4', '1605187084'),
(241, 'CUT SCALE', '8', '43', 'active', '4', '1605187097'),
(242, 'METAL COLOR', '8', '43', 'active', '4', '1605187111'),
(244, 'COLLECTION', '8', '43', 'active', '4', '1605187136'),
(245, 'GENDER', '5', '8', 'active', '4', '1605187519'),
(246, 'TYPE', '5', '8', 'active', '4', '1605243909'),
(247, 'METAL COLOR', '5', '12', 'active', '4', '1605516074'),
(248, 'PURITY', '5', '40', 'active', '4', '1605531652'),
(249, 'METAL COLOR', '5', '40', 'active', '4', '1605531784'),
(250, 'SIZE', '6', '19', 'active', '4', '1605595992'),
(251, 'PURITY', '6', '20', 'active', '4', '1605618096'),
(252, 'TYPE', '6', '22', 'active', '4', '1605620777'),
(254, 'PURITY', '6', '27', 'active', '4', '1605624429'),
(255, 'WEIGHT', '6', '27', 'active', '4', '1605624511'),
(257, 'TYPE', '6', '27', 'active', '4', '1605624593'),
(258, 'PRODUCT', '6', '24', 'active', '4', '1605783010'),
(259, 'PRODUCT', '6', '25', 'active', '4', '1605785127'),
(261, 'PURITY', '6', '29', 'active', '4', '1605787100'),
(262, 'TYPE', '6', '29', 'active', '4', '1605787113'),
(263, 'OCCASION', '6', '29', 'active', '4', '1605787171'),
(266, 'PURITY', '6', '44', 'active', '4', '1605788559'),
(267, 'WEIGHT', '6', '44', 'active', '4', '1605788573'),
(269, 'PURITY', '6', '45', 'active', '4', '1605788618'),
(270, 'TYPE', '6', '45', 'active', '4', '1605788650'),
(271, 'TYPE', '6', '44', 'active', '4', '1605788662'),
(272, 'WEIGHT', '6', '45', 'active', '4', '1605788674'),
(273, 'PURITY', '6', '46', 'active', '4', '1611225283'),
(274, 'TYPE', '6', '46', 'active', '4', '1611225291'),
(275, 'METAL COLOR', '6', '46', 'active', '4', '1611225299'),
(276, 'OCCASION', '6', '46', 'active', '4', '1611225339'),
(0, 'test', '11', '59', 'deleted', '5', '1753679674');

-- --------------------------------------------------------

--
-- Table structure for table `gender_category`
--

CREATE TABLE `gender_category` (
  `gender_category_id` int(11) NOT NULL,
  `gender_category_name` varchar(100) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gender_category`
--

INSERT INTO `gender_category` (`gender_category_id`, `gender_category_name`, `status`, `entry_time`, `entry_date`) VALUES
(1, 'Male', 'active', '1749627226', '2025-06-11'),
(2, 'Female', 'active', '1749627233', '2025-06-11'),
(3, 'Kids', 'active', '1749627237', '2025-06-11'),
(0, 'roahan', 'deleted', '1752303061', '2025-07-12'),
(1, 'Male', 'active', '1749627226', '2025-06-11'),
(2, 'Female', 'active', '1749627233', '2025-06-11'),
(3, 'Kids', 'active', '1749627237', '2025-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `gold_product_offer`
--

CREATE TABLE `gold_product_offer` (
  `product_offer_id` int(11) NOT NULL,
  `prod_gold_id` text DEFAULT NULL,
  `offer_tbl_id` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_product_offer`
--

INSERT INTO `gold_product_offer` (`product_offer_id`, `prod_gold_id`, `offer_tbl_id`, `status`, `entry_by`, `entry_time`) VALUES
(1, '35', '1', 'deleted', '4', '1674539834'),
(2, '35', '3', 'deleted', '4', '1674539843'),
(3, '37', '3', 'deleted', '4', '1674541862'),
(4, '36', '1', 'deleted', '4', '1674541865'),
(5, '35', '1', 'deleted', '4', '1674543456'),
(6, '35', '1', 'deleted', '4', '1674554192'),
(7, '346', '1', 'deleted', '4', '1674886485'),
(8, '346', '3', 'deleted', '4', '1674886510'),
(9, '349', '3', 'deleted', '4', '1674886522'),
(10, '351', '1', 'deleted', '4', '1674891834'),
(11, '357', '1', 'deleted', '4', '1674892005'),
(12, '357', '3', 'deleted', '4', '1674892106'),
(13, '357', '3', 'deleted', '4', '1674892165'),
(14, '357', '1', 'deleted', '4', '1674892177'),
(15, '357', '1', 'deleted', '4', '1674893239'),
(16, '357', '3', 'deleted', '4', '1674906590'),
(17, '352', '3', 'deleted', '4', '1675053513'),
(18, '353', '1', 'deleted', '4', '1675053520'),
(19, '351', '1', 'deleted', '4', '1675056397'),
(20, '357', '1', 'deleted', '4', '1675056409'),
(21, '357', '1', 'deleted', '4', '1675056418'),
(22, '357', '1', 'deleted', '4', '1675056426'),
(23, '357', '3', 'deleted', '4', '1675056429'),
(24, '464', '4', 'deleted', '4', '1676290102'),
(25, '500', '3', 'deleted', '4', '1676874890'),
(26, '500', '3', 'deleted', '4', '1676896510'),
(27, '35', '1', 'deleted', '4', '1678348859'),
(28, '35', '1', 'deleted', '4', '1678348863'),
(29, '502', '3', 'deleted', '4', '1678360345'),
(30, '35', '3', 'deleted', '4', '1679038586'),
(31, '274', '3', 'deleted', '4', '1679038847'),
(32, '274', '3', 'deleted', '4', '1679039131'),
(1, '35', '1', 'deleted', '4', '1674539834'),
(2, '35', '3', 'deleted', '4', '1674539843'),
(3, '37', '3', 'deleted', '4', '1674541862'),
(4, '36', '1', 'deleted', '4', '1674541865'),
(5, '35', '1', 'deleted', '4', '1674543456'),
(6, '35', '1', 'deleted', '4', '1674554192'),
(7, '346', '1', 'deleted', '4', '1674886485'),
(8, '346', '3', 'deleted', '4', '1674886510'),
(9, '349', '3', 'deleted', '4', '1674886522'),
(10, '351', '1', 'deleted', '4', '1674891834'),
(11, '357', '1', 'deleted', '4', '1674892005'),
(12, '357', '3', 'deleted', '4', '1674892106'),
(13, '357', '3', 'deleted', '4', '1674892165'),
(14, '357', '1', 'deleted', '4', '1674892177'),
(15, '357', '1', 'deleted', '4', '1674893239'),
(16, '357', '3', 'deleted', '4', '1674906590'),
(17, '352', '3', 'deleted', '4', '1675053513'),
(18, '353', '1', 'deleted', '4', '1675053520'),
(19, '351', '1', 'deleted', '4', '1675056397'),
(20, '357', '1', 'deleted', '4', '1675056409'),
(21, '357', '1', 'deleted', '4', '1675056418'),
(22, '357', '1', 'deleted', '4', '1675056426'),
(23, '357', '3', 'deleted', '4', '1675056429'),
(24, '464', '4', 'deleted', '4', '1676290102'),
(25, '500', '3', 'deleted', '4', '1676874890'),
(26, '500', '3', 'deleted', '4', '1676896510'),
(27, '35', '1', 'deleted', '4', '1678348859'),
(28, '35', '1', 'deleted', '4', '1678348863'),
(29, '502', '3', 'deleted', '4', '1678360345'),
(30, '35', '3', 'deleted', '4', '1679038586'),
(31, '274', '3', 'deleted', '4', '1679038847'),
(32, '274', '3', 'deleted', '4', '1679039131');

-- --------------------------------------------------------

--
-- Table structure for table `gold_scheme_policy_tbl`
--

CREATE TABLE `gold_scheme_policy_tbl` (
  `gold_scheme_policy_tbl_id` int(11) NOT NULL,
  `gold_scheme_name` text DEFAULT NULL,
  `gold_scheme_details` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gold_scheme_policy_tbl`
--

INSERT INTO `gold_scheme_policy_tbl` (`gold_scheme_policy_tbl_id`, `gold_scheme_name`, `gold_scheme_details`, `entry_by`, `entry_time`, `entry_date`, `status`) VALUES
(1, 'Sone pe sohaga yojana ', 'SONE PE SUHAGA YOJANA is a unique, well thought out and planned scheme to help you buy SHINGAVI JEWELLERS PVT LTD . The Gold Scheme is a safe , secure and convenient jewellery buying option. It allows customers to invest in asystematic manner and rewards with great benefits being offered by SHINGAVI Jewellers pvt ltd.', '5', '1752314581', '2025-07-12', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `gst`
--

CREATE TABLE `gst` (
  `gst_id` int(11) NOT NULL,
  `gst_label` text NOT NULL,
  `cgst` text NOT NULL,
  `sgst` text NOT NULL,
  `igst` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gst`
--

INSERT INTO `gst` (`gst_id`, `gst_label`, `cgst`, `sgst`, `igst`, `status`, `entry_by`, `entry_time`) VALUES
(8, '3', '1.5', '1.5', '3', 'active', '4', '1604662755'),
(9, '23', '11.5', '11.5', '23', 'deleted', '4', '1730711193'),
(10, '364', '182', '182', '364', 'deleted', '1', '1730716075'),
(11, '454', '227', '227', '454', 'deleted', '1', '1730716358'),
(12, '56', '28', '28', '56', 'deleted', '1', '1730716414'),
(13, '78', '39', '39', '78', 'deleted', '1', '1730716447'),
(14, '67', '33.5', '33.5', '67', 'deleted', '4', '1730721361'),
(15, '4', '2', '2', '4', 'deleted', '4', '1730779535'),
(8, '3', '1.5', '1.5', '3', 'active', '4', '1604662755'),
(9, '23', '11.5', '11.5', '23', 'deleted', '4', '1730711193'),
(10, '364', '182', '182', '364', 'deleted', '1', '1730716075'),
(11, '454', '227', '227', '454', 'deleted', '1', '1730716358'),
(12, '56', '28', '28', '56', 'deleted', '1', '1730716414'),
(13, '78', '39', '39', '78', 'deleted', '1', '1730716447'),
(14, '67', '33.5', '33.5', '67', 'deleted', '4', '1730721361'),
(15, '4', '2', '2', '4', 'deleted', '4', '1730779535'),
(16, '', '', '', '', 'deleted', '4', '1752299661'),
(0, '30', '15', '15', '30', 'deleted', '5', '1753445421');

-- --------------------------------------------------------

--
-- Table structure for table `job_applied_tbl`
--

CREATE TABLE `job_applied_tbl` (
  `job_applied_tbl_id` int(11) NOT NULL,
  `status` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_log`
--

CREATE TABLE `login_log` (
  `login_log_id` int(11) NOT NULL,
  `user_id` text DEFAULT NULL,
  `login_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_log`
--

INSERT INTO `login_log` (`login_log_id`, `user_id`, `login_time`) VALUES
(1, '2', '1740111129'),
(2, '2', '1740111139'),
(3, '3', '1740147879'),
(4, '3', '1740312164'),
(5, '3', '1740312187'),
(6, '9', '1741956209'),
(7, '10', '1742135083'),
(8, '10', '1742135097'),
(9, '11', '1742453902'),
(10, '11', '1742454150'),
(11, '11', '1742454161'),
(12, '11', '1742454210'),
(13, '11', '1742454232'),
(14, '11', '1742454274'),
(15, '11', '1742454301'),
(16, '11', '1742454494'),
(17, '11', '1742454720'),
(18, '11', '1742454811'),
(19, '11', '1742454896'),
(20, '11', '1742455039'),
(21, '11', '1742455076'),
(22, '11', '1742455108'),
(23, '11', '1742455145'),
(24, '11', '1742455239'),
(25, '11', '1742455424'),
(26, '11', '1742455528'),
(27, '11', '1742455764'),
(28, '11', '1742455774'),
(29, '11', '1742455823'),
(30, '11', '1742456705'),
(31, '11', '1742457514'),
(32, '11', '1742462674'),
(33, '12', '1742749917'),
(34, '13', '1742832746'),
(35, '14', '1742989805'),
(36, '2', '1743229255'),
(37, '15', '1743240773'),
(38, '16', '1743301196'),
(39, '17', '1744102996'),
(40, '14', '1745227964'),
(41, '11', '1745227991'),
(42, '11', '1745306436'),
(43, '2', '1745399110'),
(44, '19', '1745404285'),
(45, '19', '1745407731'),
(46, '19', '1745410841'),
(47, '19', '1745469208'),
(48, '19', '1745469517'),
(49, '19', '1745474610'),
(50, '11', '1745561217'),
(51, '31', '1745561709'),
(52, '14', '1745654356'),
(53, '14', '1745903245'),
(54, '38', '1750938143'),
(55, '40', '1751262434'),
(56, '41', '1752230962'),
(1, '2', '1740111129'),
(2, '2', '1740111139'),
(3, '3', '1740147879'),
(4, '3', '1740312164'),
(5, '3', '1740312187'),
(6, '9', '1741956209'),
(7, '10', '1742135083'),
(8, '10', '1742135097'),
(9, '11', '1742453902'),
(10, '11', '1742454150'),
(11, '11', '1742454161'),
(12, '11', '1742454210'),
(13, '11', '1742454232'),
(14, '11', '1742454274'),
(15, '11', '1742454301'),
(16, '11', '1742454494'),
(17, '11', '1742454720'),
(18, '11', '1742454811'),
(19, '11', '1742454896'),
(20, '11', '1742455039'),
(21, '11', '1742455076'),
(22, '11', '1742455108'),
(23, '11', '1742455145'),
(24, '11', '1742455239'),
(25, '11', '1742455424'),
(26, '11', '1742455528'),
(27, '11', '1742455764'),
(28, '11', '1742455774'),
(29, '11', '1742455823'),
(30, '11', '1742456705'),
(31, '11', '1742457514'),
(32, '11', '1742462674'),
(33, '12', '1742749917'),
(34, '13', '1742832746'),
(35, '14', '1742989805'),
(36, '2', '1743229255'),
(37, '15', '1743240773'),
(38, '16', '1743301196'),
(39, '17', '1744102996'),
(40, '14', '1745227964'),
(41, '11', '1745227991'),
(42, '11', '1745306436'),
(43, '2', '1745399110'),
(44, '19', '1745404285'),
(45, '19', '1745407731'),
(46, '19', '1745410841'),
(47, '19', '1745469208'),
(48, '19', '1745469517'),
(49, '19', '1745474610'),
(50, '11', '1745561217'),
(51, '31', '1745561709'),
(52, '14', '1745654356'),
(53, '14', '1745903245'),
(54, '38', '1750938143'),
(55, '40', '1751262434'),
(56, '41', '1752230962');

-- --------------------------------------------------------

--
-- Table structure for table `message_template`
--

CREATE TABLE `message_template` (
  `message_template_id` int(11) NOT NULL,
  `template_name` text NOT NULL,
  `msg_template` text DEFAULT NULL,
  `template_id` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message_template`
--

INSERT INTO `message_template` (`message_template_id`, `template_name`, `msg_template`, `template_id`, `status`, `entry_by`, `entry_time`) VALUES
(9, 'Offer Template', '\'{#var1#} {#var2#}\\r\\n\\r\\nat Shingavi Jewellers Pvt. Ltd. Ahmednagar.\\r\\n{#var3#}\'', '1207163411243319007', 'active', '4', '1635487166'),
(9, 'Offer Template', '\'{#var1#} {#var2#}\\r\\n\\r\\nat Shingavi Jewellers Pvt. Ltd. Ahmednagar.\\r\\n{#var3#}\'', '1207163411243319007', 'active', '4', '1635487166');

-- --------------------------------------------------------

--
-- Table structure for table `newslater_tbl`
--

CREATE TABLE `newslater_tbl` (
  `newslater_tbl_id` int(11) NOT NULL,
  `newslatertitle` text DEFAULT NULL,
  `newlater_description` text DEFAULT NULL,
  `newslater_first_image` text DEFAULT NULL,
  `newslater_second_image` text DEFAULT NULL,
  `newslater_thired_image` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newslater_tbl`
--

INSERT INTO `newslater_tbl` (`newslater_tbl_id`, `newslatertitle`, `newlater_description`, `newslater_first_image`, `newslater_second_image`, `newslater_thired_image`, `entry_time`, `entry_date`, `status`, `entry_by`) VALUES
(1, 'Register & Get 500 Off on your first', 'Valid on shopping above ₹2000', '17404901455880Pop Up 01.webp', '17404913089780Ear.webp', '17482402083133612pxX 408px Earring Newsletter page .webp', '1753683202', '2025-07-28', 'active', '5');

-- --------------------------------------------------------

--
-- Table structure for table `offer_tbl`
--

CREATE TABLE `offer_tbl` (
  `offer_tbl_id` int(11) NOT NULL,
  `offer_name` text DEFAULT NULL,
  `percentage` text DEFAULT NULL,
  `offer_start_date` text DEFAULT NULL,
  `offer_end_date` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offer_tbl`
--

INSERT INTO `offer_tbl` (`offer_tbl_id`, `offer_name`, `percentage`, `offer_start_date`, `offer_end_date`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'Payal & jodwe Mohotsav', '50', '2023-01-01', '2023-01-28', 'active', '4', '1674535695'),
(2, 'test 2', '0', '2023-01-25', '2023-01-13', 'deleted', '4', '1674537185'),
(3, 'Das ka Dhamaka', '10', '2023-01-12', '2023-01-18', 'active', '4', '1674537252'),
(4, 'Introductory Offer', '20', '2023-02-15', '2023-02-20', 'active', '4', '1676290075'),
(5, 'Silver jubilee discount', '25', '2023-02-15', '2023-02-20', 'active', '4', '1676355301'),
(6, 'Pearl Discount ', '30', '2023-02-15', '2023-02-20', 'active', '4', '1676355496'),
(7, 'Ruby Offer', '40', '2023-02-15', '2023-02-20', 'active', '4', '1676355585'),
(8, 'Golden dhamaka offer ', '50', '2023-02-15', '2023-02-20', 'active', '4', '1676355662'),
(9, 'Platinum discount', '75', '2023-02-15', '2023-02-20', 'active', '4', '1676355837');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_product`
--

CREATE TABLE `ordered_product` (
  `ordered_product_id` int(11) NOT NULL,
  `original_price` text DEFAULT NULL,
  `discount_amount` text DEFAULT NULL,
  `final_amount_after_discount` text DEFAULT NULL,
  `caret` text DEFAULT NULL,
  `purity` text DEFAULT NULL,
  `product_id` text DEFAULT NULL,
  `billing_type` text DEFAULT NULL,
  `gold_rate` text DEFAULT NULL,
  `silver_rate` text DEFAULT NULL,
  `cross_weight` text DEFAULT NULL,
  `other_weight` text DEFAULT NULL,
  `net_weight` text DEFAULT NULL,
  `labour_char` text DEFAULT NULL,
  `wastage_per` text DEFAULT NULL,
  `other_amt` text DEFAULT NULL,
  `gst_per` text DEFAULT NULL,
  `fixed_amount` text DEFAULT NULL,
  `fixed_gst_per` text DEFAULT NULL,
  `fixed_gst_amt` text DEFAULT NULL,
  `fixed_total_amt` text DEFAULT NULL,
  `total_discount_amt` text DEFAULT NULL,
  `category_name` text DEFAULT NULL,
  `group_id` text DEFAULT NULL,
  `prod_gold_id` text DEFAULT NULL,
  `customers_id` text DEFAULT NULL,
  `size` text DEFAULT NULL,
  `qty` text DEFAULT NULL,
  `subtotal` text DEFAULT NULL,
  `order_tbl_id` text DEFAULT NULL,
  `status` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordered_product`
--

INSERT INTO `ordered_product` (`ordered_product_id`, `original_price`, `discount_amount`, `final_amount_after_discount`, `caret`, `purity`, `product_id`, `billing_type`, `gold_rate`, `silver_rate`, `cross_weight`, `other_weight`, `net_weight`, `labour_char`, `wastage_per`, `other_amt`, `gst_per`, `fixed_amount`, `fixed_gst_per`, `fixed_gst_amt`, `fixed_total_amt`, `total_discount_amt`, `category_name`, `group_id`, `prod_gold_id`, `customers_id`, `size`, `qty`, `subtotal`, `order_tbl_id`, `status`, `entry_time`) VALUES
(1, '999', '0', '', '', '92.5', '2743s394', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', '969', NULL, NULL, NULL, '', 'Silver', '20', '111', NULL, 'NA', '2', '1998', '1', 'active', '1753674928'),
(2, '98726', '0', '98726.00', 'ct24', '92.5', '1212', 'fixed', '95850', '', '0', '0', '10', '0', '0', '0', '0', '95850', NULL, NULL, NULL, '0', 'Gold', '10', '117', NULL, '1', '1', '98726', '1', 'active', '1753674928'),
(3, '6999', '0', '', '', '92.5', '11565118', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', '6795', '3', '204', '6999', '', 'Silver', '20', '112', '91', 'NA', '[object HTMLInputElement]', '0', '2', 'active', '1753676098'),
(4, '6999', '0', '', '', '92.5', '11565118', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', '6795', '3', '204', '6999', '', 'Silver', '20', '112', '1', 'NA', '1', '6999', '3', 'active', '1753681581'),
(5, '6999', '0', '', '', '92.5', '11565118', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', '6795', '3', '204', '6999', '', 'Silver', '20', '112', '1', 'NA', '1', '6999', '4', 'active', '1753681634'),
(6, '6999', '0', '', '', '92.5', '11565118', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', '6795', NULL, NULL, NULL, '', 'Silver', '20', '112', NULL, 'NA', '3', '20', '5', 'active', '1753682128'),
(7, '6499', '0', '', '', '92.5', '2743s830', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', '6309', '3', '190', '6499', '', 'Silver', '20', '110', '35', 'NA', '1', '6499', '6', 'active', '1753686173'),
(8, '6999', '0', '', '', '92.5', '2743s396', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', '6795', NULL, NULL, NULL, '', 'Silver', '20', '106', NULL, 'NA', '1', '6999', '7', 'active', '1753688689'),
(9, '720', '21', '699.00', '', '70', '3262s56', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', '699', NULL, NULL, NULL, '21', 'Silver', '23', '63', NULL, 'NA', '1', '699', '8', 'active', '1753694511'),
(10, '0', '0', '0', '', '50', '98456', 'manual', '', '1155', '0', '0', '0.00', '0', '0', '0', '3', '0', '0', '0', '0', '0', 'Silver', '10', '122', '35', 'NA', '1', '0', '9', 'active', '1753697361'),
(11, '5999.75', '0', '5999.75', '', '92.5', '4060s47', 'fixed', '', '900', '0', '0', '0', '0', '0', '0', '0', '5825', '3', '174.750', '5999.75', '', 'Silver', '20', '95', '35', 'NA', '1', '5999.75', '10', 'active', '1753697450');

-- --------------------------------------------------------

--
-- Table structure for table `order_charges`
--

CREATE TABLE `order_charges` (
  `charges_id` int(11) NOT NULL,
  `charges_label` text NOT NULL,
  `rate` text NOT NULL,
  `percent` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_charges`
--

INSERT INTO `order_charges` (`charges_id`, `charges_label`, `rate`, `percent`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'Shipping Charges', '0', '', 'deleted', '4', '1611048956'),
(2, 'shipping charges', '0', '0', 'active', '4', '1635238165'),
(3, 'Insurance Charges', '0', '1.5', 'active', '4', '1642485665'),
(4, 'test', '100', '20', 'deleted', '5', '1753682984');

-- --------------------------------------------------------

--
-- Table structure for table `order_charges_det`
--

CREATE TABLE `order_charges_det` (
  `order_charges_det_id` int(11) NOT NULL,
  `order_tbl_id` text NOT NULL,
  `charges_id` text DEFAULT NULL,
  `charges_label` text DEFAULT NULL,
  `percent` text DEFAULT NULL,
  `rate` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_charges_det`
--

INSERT INTO `order_charges_det` (`order_charges_det_id`, `order_tbl_id`, `charges_id`, `charges_label`, `percent`, `rate`, `status`, `entry_time`) VALUES
(1, '1', '2', 'shipping charges', '0', '0', 'active', '1752815900'),
(2, '1', '3', 'Insurance Charges', '1.5', '97.485', 'active', '1752815900'),
(3, '2', '2', 'shipping charges', '0', '0', 'active', '1752818229'),
(4, '2', '3', 'Insurance Charges', '1.5', '97.485', 'active', '1752818229'),
(5, '3', '2', 'shipping charges', '0', '0', 'active', '1752818262'),
(6, '3', '3', 'Insurance Charges', '1.5', '97.485', 'active', '1752818262'),
(7, '4', '2', 'shipping charges', '0', '0', 'active', '1752818305'),
(8, '4', '3', 'Insurance Charges', '1.5', '97.485', 'active', '1752818305'),
(9, '5', '2', 'shipping charges', '0', '0', 'active', '1752818565'),
(10, '5', '3', 'Insurance Charges', '1.5', '14.985', 'active', '1752818565'),
(11, '6', '2', 'shipping charges', '0', '0', 'active', '1752818915'),
(12, '6', '3', 'Insurance Charges', '1.5', '1480.89', 'active', '1752818915'),
(13, '7', '2', 'shipping charges', '0', '0', 'active', '1752820442'),
(14, '7', '3', 'Insurance Charges', '1.5', '89.99625', 'active', '1752820442'),
(15, '8', '2', 'shipping charges', '0', '0', 'active', '1752820605'),
(16, '8', '3', 'Insurance Charges', '1.5', '89.99625', 'active', '1752820605'),
(17, '9', '2', 'shipping charges', '0', '0', 'active', '1752820897'),
(18, '9', '3', 'Insurance Charges', '1.5', '24.75', 'active', '1752820897'),
(19, '10', '2', 'shipping charges', '0', '0', 'active', '1752906011'),
(20, '10', '3', 'Insurance Charges', '1.5', '73.5', 'active', '1752906011'),
(21, '11', '2', 'shipping charges', '0', '0', 'active', '1752906033'),
(22, '11', '3', 'Insurance Charges', '1.5', '147', 'active', '1752906033'),
(23, '12', '2', 'shipping charges', '0', '0', 'active', '1753255457'),
(24, '12', '3', 'Insurance Charges', '1.5', '0', 'active', '1753255457'),
(25, '13', '2', 'shipping charges', '0', '0', 'active', '1753255850'),
(26, '13', '3', 'Insurance Charges', '1.5', '4442.67', 'active', '1753255850'),
(27, '14', '2', 'shipping charges', '0', '0', 'active', '1753255890'),
(28, '14', '3', 'Insurance Charges', '1.5', '7404.45', 'active', '1753255890'),
(29, '15', '2', 'shipping charges', '0', '0', 'active', '1753255942'),
(30, '15', '3', 'Insurance Charges', '1.5', '7404.45', 'active', '1753255942'),
(31, '16', '2', 'shipping charges', '0', '0', 'active', '1753255948'),
(32, '16', '3', 'Insurance Charges', '1.5', '7404.45', 'active', '1753255948'),
(33, '17', '2', 'shipping charges', '0', '0', 'active', '1753255996'),
(34, '17', '3', 'Insurance Charges', '1.5', '5923.56', 'active', '1753255997'),
(35, '18', '2', 'shipping charges', '0', '0', 'active', '1753256304'),
(36, '18', '3', 'Insurance Charges', '1.5', '0', 'active', '1753256304'),
(37, '19', '2', 'shipping charges', '0', '0', 'active', '1753259479'),
(38, '19', '3', 'Insurance Charges', '1.5', '220.5', 'active', '1753259479'),
(39, '20', '2', 'shipping charges', '0', '0', 'active', '1753261282'),
(40, '20', '3', 'Insurance Charges', '1.5', '0', 'active', '1753261282'),
(41, '21', '2', 'shipping charges', '0', '0', 'active', '1753261597'),
(42, '21', '3', 'Insurance Charges', '1.5', '0', 'active', '1753261597'),
(43, '22', '2', 'shipping charges', '0', '0', 'active', '1753262614'),
(44, '22', '3', 'Insurance Charges', '1.5', '4442.67', 'active', '1753262614'),
(45, '23', '2', 'shipping charges', '0', '0', 'active', '1753263080'),
(46, '23', '3', 'Insurance Charges', '1.5', '0', 'active', '1753263080'),
(47, '24', '2', 'shipping charges', '0', '0', 'active', '1753264583'),
(48, '24', '3', 'Insurance Charges', '1.5', '5923.56', 'active', '1753264583'),
(49, '25', '2', 'shipping charges', '0', '0', 'active', '1753330452'),
(50, '25', '3', 'Insurance Charges', '1.5', '1480.89', 'active', '1753330452'),
(51, '26', '2', 'shipping charges', '0', '0', 'active', '1753335322'),
(52, '26', '3', 'Insurance Charges', '1.5', '104.985', 'active', '1753335322'),
(53, '27', '2', 'shipping charges', '0', '0', 'active', '1753339619'),
(54, '27', '3', 'Insurance Charges', '1.5', '74.985', 'active', '1753339619'),
(55, '28', '2', 'shipping charges', '0', '0', 'active', '1753339843'),
(56, '28', '3', 'Insurance Charges', '1.5', '26.97', 'active', '1753339843'),
(57, '29', '2', 'shipping charges', '0', '0', 'active', '1753340172'),
(58, '29', '3', 'Insurance Charges', '1.5', '0', 'active', '1753340172'),
(59, '30', '2', 'shipping charges', '0', '0', 'active', '1753340284'),
(60, '30', '3', 'Insurance Charges', '1.5', '2961.78', 'active', '1753340284'),
(61, '31', '2', 'shipping charges', '0', '0', 'active', '1753342116'),
(62, '31', '3', 'Insurance Charges', '1.5', '122.985', 'active', '1753342116'),
(63, '32', '2', 'shipping charges', '0', '0', 'active', '1753342137'),
(64, '32', '3', 'Insurance Charges', '1.5', '122.985', 'active', '1753342137'),
(65, '33', '2', 'shipping charges', '0', '0', 'active', '1753342300'),
(66, '33', '3', 'Insurance Charges', '1.5', '2961.78', 'active', '1753342300'),
(67, '34', '2', 'shipping charges', '0', '0', 'active', '1753342348'),
(68, '34', '3', 'Insurance Charges', '1.5', '74.985', 'active', '1753342348'),
(69, '35', '2', 'shipping charges', '0', '0', 'active', '1753357104'),
(70, '35', '3', 'Insurance Charges', '1.5', '97.485', 'active', '1753357104'),
(71, '37', '2', 'shipping charges', '0', '0', NULL, NULL),
(72, '37', '3', 'Insurance Charges', '1.5', '119.97', NULL, NULL),
(73, '38', 'shipping charges', 'shipping charges', '0', '0', NULL, NULL),
(74, '38', 'Insurance Charges', 'Insurance Charges', '1.5', '119.97', NULL, NULL),
(75, '39', '2', 'shipping charges', '0', '0', NULL, NULL),
(76, '39', '3', 'Insurance Charges', '1.5', '119.97', NULL, NULL),
(77, '40', '2', 'shipping charges', '0', '0', NULL, NULL),
(78, '40', '3', 'Insurance Charges', '1.5', '119.97', NULL, NULL),
(79, '41', '2', 'shipping charges', '0', '0', NULL, NULL),
(80, '41', '3', 'Insurance Charges', '1.5', '119.97', NULL, NULL),
(81, '42', '2', 'shipping charges', '0', '0', NULL, NULL),
(82, '42', '3', 'Insurance Charges', '1.5', '119.97', NULL, NULL),
(83, '43', '2', 'shipping charges', '0', '0', NULL, NULL),
(84, '43', '3', 'Insurance Charges', '1.5', '119.97', NULL, NULL),
(85, '44', '2', 'shipping charges', '0', '0', NULL, NULL),
(86, '44', '3', 'Insurance Charges', '1.5', '119.97', NULL, NULL),
(87, '45', '2', 'shipping charges', '0', '0', NULL, NULL),
(88, '45', '3', 'Insurance Charges', '1.5', '119.97', NULL, NULL),
(89, '46', '2', 'shipping charges', '0', '0', NULL, NULL),
(90, '46', '3', 'Insurance Charges', '1.5', '119.97', NULL, NULL),
(91, '47', '2', 'shipping charges', '0', '0', NULL, NULL),
(92, '47', '3', 'Insurance Charges', '1.5', '122.985', NULL, NULL),
(93, '48', '2', 'shipping charges', '0', '0', NULL, NULL),
(94, '48', '3', 'Insurance Charges', '1.5', '202.47', NULL, NULL),
(95, '49', '2', 'shipping charges', '0', '0', NULL, NULL),
(96, '49', '3', 'Insurance Charges', '1.5', '14.985', NULL, NULL),
(97, '50', '2', 'shipping charges', '0', '0', NULL, NULL),
(98, '50', '3', 'Insurance Charges', '1.5', '14.985', NULL, NULL),
(99, '51', '2', 'shipping charges', '0', '0', NULL, NULL),
(100, '51', '3', 'Insurance Charges', '1.5', '14.985', NULL, NULL),
(101, '52', '2', 'shipping charges', '0', '0', NULL, NULL),
(102, '52', '3', 'Insurance Charges', '1.5', '14.985', NULL, NULL),
(103, '53', '2', 'shipping charges', '0', '0', NULL, NULL),
(104, '53', '3', 'Insurance Charges', '1.5', '14.985', NULL, NULL),
(105, '54', '2', 'shipping charges', '0', '0', NULL, NULL),
(106, '54', '3', 'Insurance Charges', '1.5', '112.47', NULL, NULL),
(107, '55', '2', 'shipping charges', '0', '0', NULL, NULL),
(108, '55', '3', 'Insurance Charges', '1.5', '1510.86', NULL, NULL),
(109, '1', '2', 'shipping charges', '0', '0', NULL, NULL),
(110, '1', '3', 'Insurance Charges', '1.5', '1510.86', NULL, NULL),
(111, '2', '2', 'shipping charges', '0', '0', 'active', '1753676098'),
(112, '2', '3', 'Insurance Charges', '1.5', '0', 'active', '1753676098'),
(113, '3', '2', 'shipping charges', '0', '0', 'active', '1753681581'),
(114, '3', '3', 'Insurance Charges', '1.5', '104.985', 'active', '1753681581'),
(115, '4', '2', 'shipping charges', '0', '0', 'active', '1753681634'),
(116, '4', '3', 'Insurance Charges', '1.5', '104.985', 'active', '1753681634'),
(117, '5', '2', 'shipping charges', '0', '0', NULL, NULL),
(118, '5', '3', 'Insurance Charges', '1.5', '314.955', NULL, NULL),
(119, '6', '2', 'shipping charges', '0', '0', 'active', '1753686173'),
(120, '6', '3', 'Insurance Charges', '1.5', '97.485', 'active', '1753686173'),
(121, '7', '2', 'shipping charges', '0', '0', NULL, NULL),
(122, '7', '3', 'Insurance Charges', '1.5', '104.985', NULL, NULL),
(123, '8', '2', 'shipping charges', '0', '0', NULL, NULL),
(124, '8', '3', 'Insurance Charges', '1.5', '10.485', NULL, NULL),
(125, '9', '2', 'shipping charges', '0', '0', 'active', '1753697361'),
(126, '9', '3', 'Insurance Charges', '1.5', '0', 'active', '1753697361'),
(127, '10', '2', 'shipping charges', '0', '0', 'active', '1753697450'),
(128, '10', '3', 'Insurance Charges', '1.5', '89.99625', 'active', '1753697450');

-- --------------------------------------------------------

--
-- Table structure for table `order_tbl`
--

CREATE TABLE `order_tbl` (
  `order_tbl_id` int(11) NOT NULL,
  `cOrderId` text NOT NULL,
  `customers_id` text DEFAULT NULL,
  `orderId` text NOT NULL,
  `c_name` text NOT NULL,
  `c_mobile` text NOT NULL,
  `c_email` text NOT NULL,
  `payment_type` text DEFAULT NULL,
  `cust_address` text DEFAULT NULL,
  `cust_pincode` text DEFAULT NULL,
  `cust_city` text DEFAULT NULL,
  `order_charges` text DEFAULT NULL,
  `sub_total_amount` text DEFAULT NULL,
  `total_amount` text DEFAULT NULL,
  `order_date` text DEFAULT NULL,
  `order_time` text DEFAULT NULL,
  `order_status` text NOT NULL,
  `processing_time` text NOT NULL,
  `processing_remark` text NOT NULL,
  `dispatch_time` text NOT NULL,
  `dispatch_remark` text NOT NULL,
  `delivered_time` text NOT NULL,
  `delivered_remark` text NOT NULL,
  `rejected_time` text NOT NULL,
  `rejected_remark` text NOT NULL,
  `pay_status` text NOT NULL,
  `paid_amount` text NOT NULL,
  `pay_date_time` text NOT NULL,
  `status` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_tbl`
--

INSERT INTO `order_tbl` (`order_tbl_id`, `cOrderId`, `customers_id`, `orderId`, `c_name`, `c_mobile`, `c_email`, `payment_type`, `cust_address`, `cust_pincode`, `cust_city`, `order_charges`, `sub_total_amount`, `total_amount`, `order_date`, `order_time`, `order_status`, `processing_time`, `processing_remark`, `dispatch_time`, `dispatch_remark`, `delivered_time`, `delivered_remark`, `rejected_time`, `rejected_remark`, `pay_status`, `paid_amount`, `pay_date_time`, `status`, `entry_time`) VALUES
(1, '2025072800001', '90', '', 'Ranbir Kapoor', '7596258455', 'ranbirk@gmail.com', 'cod', '', '400001', 'Mumbai', '1510.86', '100724', '102234.86', '2025-07-28', '1753674928', 'delivered', '1753679578', 'Order is Shifting to Process - At 10.42 28 July 2025', '1753679601', 'Order Shifted To Dispatched at 10.43 , 28 July 25', '1753680076', 'Order Sent To Delivery at 10.51', '', '', 'pending', '0', '', 'active', '1753674928'),
(2, '2025072800002', '91', '', 'Ramchandra p', '9595038373', 'ram@gmail.com', 'COD', 'Burhannagar', '414002', 'Nagar', '0', '0', '0', '2025-07-28', '1753676098', 'dispatch', '1753680002', 'Order is Shifting to Process - At 10.42 28 July 2025', '1753680025', 'Order Shifted To Dispatched at 10.41 , 28 July', '1753679950', 'Order Sent To Delivered on 28 July 25 , 10.49', '', '', 'pending', '0', '', 'active', '1753676098'),
(3, '2025072800003', '1', 'order_24376130UUKFQ4wiX8yQM5QhP7pBJxPDh', 'Tejas Tethe', '9579535583', 'tejastathe302@gmail.com', 'Online', NULL, NULL, NULL, '104.985', '6999', '7104', '2025-07-28', '1753681581', 'processing', '1753682718', 'Rejecting Order', '', '', '', '', '1753684713', 'gyfvhuij', 'pending', '0', '', 'active', '1753681581'),
(4, '2025072800004', '1', 'order_24376130UUQg6HoSSoD5bAh5P0xHXqKMw', 'Tejas Tethe', '9579535583', 'tejastathe302@gmail.com', 'Online', 'At. Chitali Po.Padali Tal.Pathardi Dist.Ahmednagar', '414505', 'Pathardi', '104.985', '6999', '7104', '2025-07-28', '1753681634', 'rejected', '', '', '', '', '', '', '1753682893', 'Order Rejected -- 28 July', 'pending', '0', '', 'active', '1753681634'),
(5, '2025072800005', '1', '', 'Tejas Tethe', '9579535583', 'tejastathe302@gmail.com', 'cod', '', '414505', 'Pathardi', '314.955', '20997', '21311.955', '2025-07-28', '1753682128', 'pending', '', '', '', '', '', '', '', '', 'pending', '0', '', 'active', '1753682128'),
(6, '2025072800006', '35', 'order_24376130Udd5YUr5CDU6BUAw4TKdkwH7N', 'Manali Dhongade', '9075461110', 'a2z.d.manali@gmail.com', 'Online', 'Jalgoan', '414208', 'jalgoan', '97.485', '6499', '6596', '2025-07-28', '1753686173', 'delivered', '1753688262', 'Your Order Has Been Processed - 28 July 2025 01.07 PM', '1753688473', 'Order Dispatcehd 28 July 25 01:11 PM', '1753688562', 'Order Delivered 28 July 2025 ,01:13 PM', '', '', 'pending', '0', '', 'active', '1753686173'),
(7, '2025072800007', '35', '', 'Manali Dhongade', '9075461110', 'a2z.d.manali@gmail.com', 'cod', 'Savedi', '414208', 'jalgoan', '104.985', '6999', '7103.985', '2025-07-28', '1753688689', 'rejected', '1753688784', 'Process Order', '', '', '', '', '1753688795', 'Order Rejecetd', 'pending', '0', '', 'active', '1753688689'),
(8, '2025072800008', '92', '', '', '', '', 'cod', '', '', '', '10.485', '699', '709.485', '2025-07-28', '1753694511', 'pending', '', '', '', '', '', '', '', '', 'pending', '0', '', 'active', '1753694511'),
(9, '2025072800009', '35', '', 'Manali Dhongade', '9075461110', 'a2z.d.manali@gmail.com', 'Online', 'Gulmohar Road Savedi', '414005', 'Ahmednagar', '0', '0', '0', '2025-07-28', '1753697361', 'pending', '', '', '', '', '', '', '', '', 'pending', '0', '', 'active', '1753697361'),
(10, '2025072800010', '35', 'order_24376130V0UQzb6VfPcd5le7c1H8lQn0G', 'Manali Dhongade', '9075461110', 'a2z.d.manali@gmail.com', 'Online', 'Gulmohar Road Savedi', '414005', 'Ahmednagar', '89.99625', '6000', '6090', '2025-07-28', '1753697450', 'pending', '', '', '', '', '', '', '', '', 'pending', '0', '', 'active', '1753697450');

-- --------------------------------------------------------

--
-- Table structure for table `otp_tbl`
--

CREATE TABLE `otp_tbl` (
  `otp_tbl_id` int(11) NOT NULL,
  `otp` text DEFAULT NULL,
  `mobile_number` text DEFAULT NULL,
  `status` text NOT NULL,
  `otp_entry_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp_tbl`
--

INSERT INTO `otp_tbl` (`otp_tbl_id`, `otp`, `mobile_number`, `status`, `otp_entry_time`) VALUES
(21, '3771', '9080706050', 'active', '1729918669'),
(25, '4500', '9665065113', 'active', '1729929112'),
(26, '7855', '9158439277', 'active', '1730980729'),
(27, '8265', '9075461110', 'active', '1731142642'),
(28, '8836', '9503077104', 'active', '1731144808'),
(29, '4847', '9595038373', 'active', '1731151442'),
(30, '9822', '9623157559', 'active', '1731470670'),
(40, '8061', '9579535583', 'active', '1731586728'),
(41, '6009', '7387545886', 'active', '1731602804'),
(42, '3806', '8855041501', 'active', '1735716117'),
(43, '6895', '9028201501', 'active', '1735800689'),
(44, '3097', '9850289449', 'active', '1735809281'),
(45, '7049', '9850289449', 'active', '1735809779'),
(46, '4975', '9766232951', 'active', '1735809818'),
(47, '6258', '9766232951', 'active', '1735810109'),
(48, '3416', '9766232951', 'active', '1735810307'),
(49, '3110', '9766232951', 'active', '1735811353'),
(50, '6065', '7040487891', 'active', '1735814016'),
(51, '5107', '9579535583', 'active', '1735829120'),
(52, '6602', '9623157559', 'active', '1736153611'),
(53, '9292', '7040487891', 'active', '1736167793'),
(54, '3590', '7040487891', 'active', '1736168735'),
(55, '2521', '7040487891', 'active', '1736169108'),
(56, '1293', '9623157559', 'active', '1736169476'),
(57, '3602', '9623157559', 'active', '1736169509'),
(58, '1280', '9095969694', 'active', '1736185610'),
(59, '1123', '9096959694', 'active', '1736185630'),
(60, '1418', NULL, 'active', '1736187232'),
(61, '7889', '7875175673', 'active', '1736221597'),
(62, '5951', '7875175673', 'active', '1736221697'),
(63, '5468', '7875175673', 'active', '1736221823'),
(64, '8617', '9689883794', 'active', '1736252941'),
(65, '5925', '7249390892', 'active', '1736269356'),
(66, '6991', '7038042059', 'active', '1736447298'),
(67, '2898', '9309553291', 'active', '1736578710'),
(68, '1269', '8080551376', 'active', '1736641899'),
(69, '2061', '7559325633', 'active', '1736694009'),
(70, '7791', '9689899996', 'active', '1736847384'),
(71, '3224', '9404626403', 'active', '1736862975'),
(72, '2278', '9850100025', 'active', '1737021035'),
(73, '4088', '7875455520', 'active', '1737021550'),
(74, '4992', '7875455520', 'active', '1737022932'),
(75, '8458', '7875455520', 'active', '1737023044'),
(76, '3770', '7875455520', 'active', '1737023398'),
(77, '8804', '7875455520', 'active', '1737023581'),
(78, '3091', '9028860927', 'active', '1737278909'),
(79, '5966', '9588605005', 'active', '1737395004'),
(80, '4710', '0000000000', 'active', '1737437142'),
(81, '5069', '9309793570', 'active', '1737439818'),
(82, '1650', '8421347583', 'active', '1737531402'),
(83, '9440', '9623157559', 'active', '1737721157'),
(84, '1481', '8421347583', 'active', '1737721181'),
(85, '9825', '9579535583', 'active', '1739188439'),
(86, '9550', '8421347583', 'active', '1740109111'),
(87, '3742', '9623157559', 'active', '1740109162'),
(88, '4201', '8421347583', 'active', '1740109229'),
(89, '4064', '8421347583', 'active', '1740109424'),
(90, '2362', '8421347583', 'active', '1740109919'),
(91, '3701', '8421347583', 'active', '1740110059'),
(92, '6913', '8421347583', 'active', '1740110225'),
(93, '4292', '8421347583', 'active', '1740110538'),
(94, '5848', '9623157559', 'active', '1740110861'),
(95, '1160', '7040487891', 'active', '1740111089'),
(96, '8567', '9623157559', 'active', '1740111140'),
(97, '9496', '8421347583', 'active', '1740111421'),
(98, '1546', '8421347583', 'active', '1740111478'),
(99, '7433', '9623157559', 'active', '1740113389'),
(100, '8032', '9623157559', 'active', '1740113869'),
(101, '3822', '9623157559', 'active', '1740114064'),
(102, '2331', '9623157559', 'active', '1740114395'),
(103, '5353', '9623157559', 'active', '1740114560'),
(104, '2164', '9623157559', 'active', '1740115224'),
(105, '2322', '9623157559', 'active', '1740115343'),
(106, '2405', '9623157559', 'active', '1740115489'),
(107, '5516', '9623157559', 'active', '1740115544'),
(108, '8654', '9623157559', 'active', '1740115603'),
(109, '5311', '9623157559', 'active', '1740115759'),
(110, '9534', '9623157559', 'active', '1740115967'),
(111, '8915', '9623157559', 'active', '1740120835'),
(112, '1847', '9623157559', 'active', '1740121264'),
(113, '1911', '9623157559', 'active', '1740121471'),
(114, '8093', '9623157559', 'active', '1740121714'),
(115, '1372', '9623157559', 'active', '1740122050'),
(116, '6085', '9623157559', 'active', '1740122693'),
(117, '9138', '9623157559', 'active', '1740123631'),
(118, '7552', '7875455520', 'active', '1740402536'),
(119, '4253', '7875455520', 'active', '1740402599'),
(120, '1237', '9309553291', 'active', '1740402658'),
(121, '1315', '7875455520', 'active', '1740402726'),
(122, '8935', '9075461110', 'active', '1740489546'),
(123, '2370', '9579535583', 'active', '1740490074'),
(124, '1758', '9579535583', 'active', '1740490124'),
(125, '3882', '9579535583', 'active', '1740490294'),
(126, '3872', '9579535583', 'active', '1740490343'),
(127, '9220', '9579535583', 'active', '1740490487'),
(128, '6570', '9579535583', 'active', '1740490829'),
(129, '3747', '9579535583', 'active', '1740490960'),
(130, '8010', '9579535583', 'active', '1740491172'),
(131, '7150', '9579535583', 'active', '1740491271'),
(132, '6793', '9579535583', 'active', '1740491406'),
(133, '5375', '9579535583', 'active', '1740491658'),
(134, '4694', '9579535583', 'active', '1740491724'),
(135, '2482', '9579535583', 'active', '1740491904'),
(136, '3092', '9579535583', 'active', '1740492072'),
(137, '5922', '9579535583', 'active', '1740492289'),
(138, '8645', '9579535583', 'active', '1740492351'),
(139, '4856', '9579535583', 'active', '1740492564'),
(140, '3231', NULL, 'active', '1740546320'),
(141, '7808', '9579535583', 'active', '1740554138'),
(142, '1399', '9579535583', 'active', '1740554270'),
(143, '1369', '7875455520', 'active', '1740560739'),
(144, '2824', '9309553291', 'active', '1740560798'),
(145, '1891', '9850100025', 'active', '1740584346'),
(146, '1701', '7040487891', 'active', '1740630623'),
(147, '5971', '9850500025', 'active', '1740754537'),
(148, '7168', NULL, 'active', '1740889055'),
(149, '5394', '9011034640', 'active', '1741055425'),
(150, '2242', '8485894868', 'active', '1741269955'),
(151, '2838', '8485894868', 'active', '1741269992'),
(152, '2193', '9850100025', 'active', '1741954559'),
(153, '1917', '7040487891', 'active', '1741955036'),
(154, '3583', '7040487891', 'active', '1742193182'),
(155, '5253', NULL, 'active', '1743166466'),
(156, '8151', NULL, 'active', '1743812954'),
(157, '6738', '8485894868', 'active', '1743967024'),
(158, '2359', NULL, 'active', '1744102972'),
(159, '3667', NULL, 'active', '1744282272'),
(160, '2062', '7040487891', 'active', '1744966753'),
(161, '3184', NULL, 'active', '1745041470'),
(162, '8799', '9158439277', 'active', '1745218079'),
(163, '2554', '9766232951', 'active', '1745406536'),
(164, '2751', '9766232951', 'active', '1745481096'),
(165, '4830', '9766232951', 'active', '1745481276'),
(166, '1785', '9766232951', 'active', '1745481395'),
(167, '7178', '9766232951', 'active', '1745483366'),
(168, '4637', '9766232951', 'active', '1745486495'),
(169, '7996', '9766232951', 'active', '1745486724'),
(170, '9842', '9766232951', 'active', '1745487763'),
(171, '7626', '9766232951', 'active', '1745488102'),
(172, '1317', '9766232951', 'active', '1745488132'),
(173, '8845', '9766232951', 'active', '1745488393'),
(174, '4259', '9766232951', 'active', '1745489933'),
(175, '4327', '9766232951', 'active', '1745490050'),
(176, '9527', '9766232951', 'active', '1745490159'),
(177, '2343', '9766232951', 'active', '1745490414'),
(178, '2683', '7666806174', 'active', '1745492369'),
(179, '2350', '7666806174', 'active', '1745492531'),
(180, '6826', '9766232951', 'active', '1745492746'),
(181, '8953', '9766232951', 'active', '1745492896'),
(182, '7357', '9766232951', 'active', '1745493085'),
(183, '3038', '9850100025', 'active', '1745580921'),
(184, '9075', '09850100025', 'active', '1745580963'),
(185, '4112', '8855041501', 'active', '1745651485'),
(186, '2474', '7040487891', 'active', '1745668647'),
(187, '4406', '09850100025', 'active', '1745757285'),
(188, '3430', '9850100025', 'active', '1745757570'),
(189, '6413', NULL, 'active', '1746376067'),
(190, '1713', '9075461110', 'active', '1746590906'),
(191, '9036', '9075461110', 'active', '1746591083'),
(192, '8681', '8626029764', 'active', '1747716543'),
(193, '7022', '8855041501', 'active', '1747722125'),
(194, '6910', NULL, 'active', '1748566019'),
(195, '8666', NULL, 'active', '1748719401'),
(196, '9578', NULL, 'active', '1748750796'),
(197, '7090', NULL, 'active', '1749269205'),
(198, '7961', NULL, 'active', '1749290290'),
(199, '7832', NULL, 'active', '1749821607'),
(200, '9055', NULL, 'active', '1750584093'),
(201, '9652', '9028564141', 'active', '1750661937'),
(202, '6992', '9898989898', 'active', '1750926393'),
(203, '7705', NULL, 'active', '1751007778'),
(204, '2013', NULL, 'active', '1751014298'),
(205, '1170', '7875175673', 'active', '1751262348'),
(206, '2749', NULL, 'active', '1751602336'),
(207, '8191', '8698095892', 'active', '1752230861'),
(208, '1152', '9075461110', 'active', '1752643839'),
(384, '3146', '8075461110', 'active', '1752646922'),
(385, '3849', '9075461110', 'active', '1752646961'),
(386, '8223', '9075461110', 'active', '1752647004'),
(387, '5711', '9075461110', 'active', '1752647013'),
(388, '9573', '9075461110', 'active', '1752647097'),
(389, '8692', '9075461110', 'active', '1752647132'),
(390, '9014', '9075461110', 'active', '1752647341'),
(391, '4052', '9075461110', 'active', '1752647494'),
(392, '1151', '9075461110', 'active', '1752647766'),
(393, '6494', '9075461110', 'active', '1752649871'),
(394, '7838', '9075461110', 'active', '1752649935'),
(395, '5081', '9075461110', 'active', '1752649961'),
(396, '8768', '9075461110', 'active', '1752650514'),
(397, '4338', '9075461110', 'active', '1752655956'),
(398, '1948', '9075461110', 'active', '1752656003'),
(399, '1795', '9075461110', 'active', '1752656040'),
(400, '7152', '9075461110', 'active', '1752656750'),
(401, '4858', '9075461110', 'active', '1752659607'),
(402, '4144', '9075461110', 'active', '1752665807'),
(403, '9653', '9075461110', 'active', '1752666052'),
(404, '7469', '9075461110', 'active', '1752668405'),
(405, '1084', '9075461110', 'active', '1752668409'),
(406, '7364', '9075461110', 'active', '1752668453'),
(407, '3600', '9075461110', 'active', '1752669078'),
(408, '8596', '9075461110', 'active', '1752669260'),
(409, '4248', '9075461110', 'active', '1752669439'),
(410, '1980', '9075461110', 'active', '1752669546'),
(411, '2531', '9075461110', 'active', '1752674250'),
(412, '3681', '9075461110', 'active', '1752674336'),
(413, '9579', '9075461110', 'active', '1752726564'),
(414, '4925', '9075461110', 'active', '1752737485'),
(415, '8963', '9075461110', 'active', '1752812523'),
(416, '5038', '9075461110', 'active', '1752814432'),
(417, '8228', '9075461110', 'active', '1752903808'),
(418, '7045', '9075461110', 'active', '1752904068'),
(419, '2130', '9075461110', 'active', '1752904158'),
(420, '2908', '9075461110', 'active', '1752904227'),
(421, '3078', '9075461110', 'active', '1752904389'),
(422, '2773', '9075461110', 'active', '1752904577'),
(423, '2829', '9075461110', 'active', '1752904718'),
(424, '1549', '9075461110', 'active', '1752905204'),
(425, '1287', '9075461110', 'active', '1752905265'),
(426, '5357', '9075461110', 'active', '1752905526'),
(427, '6332', '9595038373', 'active', '1752905574'),
(428, '8115', '9075461110', 'active', '1752905620'),
(429, '9574', '9075461110', 'active', '1752905874'),
(430, '6790', '9595038373', 'active', '1753093810'),
(431, '7364', '9595038373', 'active', '1753094218'),
(432, '3188', '9595038373', 'active', '1753098687'),
(433, '3279', '9595038373', 'active', '1753098909'),
(434, '2334', '9595038373', 'active', '1753098912'),
(435, '3763', '9595038373', 'active', '1753098913'),
(436, '2372', '9595038373', 'active', '1753099186'),
(437, '1031', '9595038373', 'active', '1753099344'),
(438, '5555', '9595038373', 'active', '1753158691'),
(439, '7864', '9595038373', 'active', '1753159754'),
(440, '5828', '7666479649', 'active', '1753162272'),
(441, '4373', '7666479649', 'active', '1753162362'),
(442, '5631', '7666479649', 'active', '1753162428'),
(443, '7213', '7666479649', 'active', '1753162923'),
(444, '7579', '7666479649', 'active', '1753163390'),
(445, '4676', '7666479649', 'active', '1753163569'),
(446, '2595', '7040111357', 'active', '1753164941'),
(447, '4740', '7666479649', 'active', '1753165104'),
(448, '8985', '9075461110', 'active', '1753167998'),
(449, '8159', '7666479649', 'active', '1753168143'),
(450, '7180', '9075461110', 'active', '1753246666'),
(451, '6275', '8888430137', 'active', '1753247996'),
(452, '2259', '8888430137', 'active', '1753248734'),
(453, '9020', '8888430137', 'active', '1753254932'),
(454, '2725', '8888430137', 'active', '1753255032'),
(455, '6151', '8888430137', 'active', '1753255213'),
(456, '1528', '8888430137', 'active', '1753255252'),
(457, '2830', '8888430139', 'active', '1753256164'),
(458, '7105', '8888430139', 'active', '1753256261'),
(459, '1166', '8888430137', 'active', '1753260851'),
(460, '1393', '8888430137', 'active', '1753261266'),
(461, '2271', '9503077104', 'active', '1753261323'),
(462, '4295', '8888430137', 'active', '1753261579'),
(463, '8859', '9503077104', 'active', '1753262689'),
(464, '8723', '9503077104', 'active', '1753263036'),
(465, '2882', '8888430137', 'active', '1753330441'),
(466, '7122', '9876787656', 'active', '1753334389'),
(467, '3476', '9658485695', 'active', '1753334474'),
(468, '8606', '8569658965', 'active', '1753335157'),
(469, '3294', '7756820215', 'active', '1753335204'),
(470, '5686', '7756820215', 'active', '1753335263'),
(471, '1537', '7756820285', 'active', '1753335370'),
(472, '5025', '7756820277', 'active', '1753335395'),
(473, '5288', '7756820277', 'active', '1753335412'),
(474, '2048', '7756820215', 'active', '1753335659'),
(475, '4616', '8569658586', 'active', '1753335950'),
(476, '5074', '9898765455', 'active', '1753336364'),
(477, '5051', '9876787676', 'active', '1753336613'),
(478, '3049', '9876787670', 'active', '1753336675'),
(479, '2859', '8569586241', 'active', '1753336877'),
(480, '2650', '7656454323', 'active', '1753336991'),
(481, '8156', '9696363656', 'active', '1753338329'),
(482, '4803', '8575646546', 'active', '1753338789'),
(483, '2159', '8695698569', 'active', '1753339028'),
(484, '2345', '7595759585', 'active', '1753340084'),
(485, '8460', '8888430166', 'active', '1753340143'),
(486, '4500', '9696587458', 'active', '1753340259'),
(487, '4278', '8458965858', 'active', '1753340446'),
(488, '5347', '9658954585', 'active', '1753340543'),
(489, '4626', '8888430165', 'active', '1753342202'),
(490, '5918', '9075461110', 'active', '1753346770'),
(491, '8709', '9075461110', 'active', '1753348004'),
(492, '8584', '9075461110', 'active', '1753355095'),
(493, '8385', '8888430137', 'active', '1753356693'),
(494, '3464', '9075461110', 'active', '1753416659'),
(495, '7015', '9075461110', 'active', '1753416660'),
(496, '2619', '9075461110', 'active', '1753429298'),
(497, '8369', '9075461110', 'active', '1753503243'),
(498, '4718', '9075461110', 'active', '1753508135'),
(499, '7631', '9075461110', 'active', '1753515346'),
(500, '7364', '9075461110', 'active', '1753515470'),
(501, '6351', '9075461110', 'active', '1753515484'),
(502, '1937', '9075461110', 'active', '1753515513'),
(503, '2046', '9075461110', 'active', '1753515569'),
(504, '1958', '9075461110', 'active', '1753518620'),
(505, '2908', '9075461110', 'active', '1753518620'),
(506, '3148', '9075461110', 'active', '1753518626'),
(507, '7622', '9075461110', 'active', '1753518743'),
(508, '7299', '9075461110', 'active', '1753518780'),
(509, '4196', '9075461110', 'active', '1753518818'),
(510, '5599', '9075461110', 'active', '1753518818'),
(511, '2776', '9075461110', 'active', '1753518818'),
(512, '1770', '9075461110', 'active', '1753518826'),
(513, '3673', '9075461110', 'active', '1753518831'),
(514, '2187', '9075461110', 'active', '1753518877'),
(515, '9972', '8888430137', 'active', '1753522861'),
(516, '5212', '9075461110', 'active', '1753530969'),
(517, '7207', '9075461110', 'active', '1753531173'),
(518, '8530', '9843843293', 'active', '1753531406'),
(519, '6664', '9075461110', 'active', '1753531612'),
(520, '3777', '8756789292', 'active', '1753531978'),
(521, '2043', '9075461110', 'active', '1753532035'),
(522, '6042', '8888430137', 'active', '1753532553'),
(523, '7958', '9876776767', 'active', '1753532578'),
(524, '7630', '9777877877', 'active', '1753532649'),
(525, '7163', '8888430137', 'active', '1753532697'),
(526, '6006', '9994884432', 'active', '1753532713'),
(527, '5340', '9993838338', 'active', '1753533060'),
(528, '4694', '9658236588', 'active', '1753533427'),
(529, '5648', '9994448332', 'active', '1753533470'),
(530, '5572', '9938838322', 'active', '1753533620'),
(531, '5571', '9631593535', 'active', '1753535460'),
(532, '2605', '9595038373', 'active', '1753676050'),
(533, '8631', '9075461110', 'active', '1753680237'),
(534, '8615', '9075461110', 'active', '1753680969'),
(535, '7180', '9579535583', 'active', '1753681088'),
(536, '6603', '9579535583', 'active', '1753681251'),
(537, '5187', '9579535583', 'active', '1753681324'),
(538, '3828', '9579535583', 'active', '1753681521'),
(539, '9720', '8888430137', 'active', '1753700952');

-- --------------------------------------------------------

--
-- Table structure for table `pages_details`
--

CREATE TABLE `pages_details` (
  `page_details_id` int(11) NOT NULL,
  `page_title` text NOT NULL,
  `page_title_description` text NOT NULL,
  `pages_name_id` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pages_details`
--

INSERT INTO `pages_details` (`page_details_id`, `page_title`, `page_title_description`, `pages_name_id`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'Diamond Jewellery', '90% of invoice value', '2', 'active', '4', '1610615555'),
(2, 'Gold Jewellery', '100% exchange on the current Gold value', '2', 'active', '4', '1610615574'),
(3, 'Bullion Gold', '	 Not Applicable', '2', 'active', '4', '1610615592'),
(4, 'Bullion Silver', 'Not Applicable', '2', 'active', '4', '1610615610'),
(5, 'Silver articles', '999 purity: 96% exchange on the silver value, Others: On the basis of purity there may be weight and rate deduction', '2', 'active', '4', '1610615627'),
(6, 'Silver jewellery', '30% exchange on the invoice value if the product is found in good condition and 20% exchange on the invoice value if the product is in damaged condition', '2', 'active', '4', '1610615646'),
(7, 'Making Charges, stones, excise, VAT and any other taxes', 'No exchange value', '2', 'active', '4', '1610615667'),
(8, 'Diamond Jewellery', '90% of invoice value (Not Applicable on Customized Products & Nose Pins)', '11', 'active', '4', '1610616205'),
(9, 'Gold Jewellery', '94% buyback on the current Gold value (Not Applicable on Customized Products)', '3', 'active', '4', '1610616236'),
(10, 'Bullion Gold', '	 Not Applicable', '11', 'active', '4', '1610616252'),
(11, 'Bullion Silver', 'Not Applicable', '11', 'active', '4', '1610616272'),
(12, 'Silver articles / Jewellery', '	 99.9 purity:96% buyback on the silver value, Others: On the basis of purity there may be weight and rate deduction', '3', 'active', '4', '1610616301'),
(13, 'Making Charges, stones, excise, VAT and any other taxes', 'No Buyback value', '2', 'delete', '4', '1610616369'),
(14, 'Sone pe sohaga yojana', 'SONE PE SUHAGA  YOJANA is a unique, well thought out and planned scheme to help you buy SHINGAVI JEWELLERS PVT LTD . The Gold  Scheme is a safe , secure and convenient jewellery buying option. It allows customers to invest in asystematic manner and rewards with great benefits being offered by SHINGAVI Jewellers  pvt ltd.', '4', 'active', '4', '1668428306'),
(15, 'SHIPPING', 'We have a streamlined process for shipping and delivery so that your product reaches you soon and safely.  Our shipping and delivery process includes 5 steps:-  1.	Order Received 2.	Order Confirmation 3.	Processing of order (product checking,packing,arranging shipping) 4.	Shipping – Products will be shipped after the order is confirmed by communication with the customer. Free shipping & home delivery to customers residing within India. Shipment (days) varies from product to product. 5.	Delivery- Tracking link is shared with the customer once an item is shipped. Customer sign is mandatory at the time of delivery. Our courier partner shall strive to make three attempts for the delivery of the product.', '5', 'delete', '4', '1668428541'),
(16, 'SHIPPING', 'We have a streamlined process for shipping and delivery so that your product reaches you soon and safely.  Our shipping and delivery process includes 5 steps:-  1.	Order Received 2.	Order Confirmation 3.	Processing of order (product checking,packing,arranging shipping) 4.	Shipping – Products will be shipped after the order is confirmed by communication with the customer. Free shipping & home delivery to customers residing within India. Shipment (days) varies from product to product. 5.	Delivery- Tracking link is shared with the customer once an item is shipped. Customer sign is mandatory at the time of delivery. ', '5', 'active', '4', '1668428953'),
(17, 'CANCELLATION POLICY', 'Cancellation of orders is allowed only before they are shipped. Cancellation of bullion orders is not allowed.  Cancellation of orders is allowed only before they are shipped. (Cancellation charges applicable once order placed).', '6', 'active', '4', '1668429068'),
(18, 'PRIVACY POLICY', 'We respect your privacy. Our privacy policy below is meant to help you understand what information we collect about you and how we use it. ', '8', 'active', '4', '1668429390'),
(19, 'INFORMATION COLLECTED', 'At times, you may decide to provide us with your personal information. We receive and store all the information provided by the customer. Personal information includes name, surname, billing address or email address. In addition to your contact information, we may collect information about your purchases, shipping address, gender, occupation, birthday, marital status, anniversary, interests, phone number or other contact information, and credit card information.', '8', 'active', '4', '1668429423'),
(20, 'DISCLOSURE: CONFIDENTIALITY OF YOUR INFORMATION', 'We will never release your personal details to any outside company for mailing or marketing purposes. Payments on the website are processed by a third party, which adheres to the privacy policy that is set out here. We have a non-disclosure agreement with this third party, and they are certified by all the major card issuers to hold details securely.', '8', 'active', '4', '1668429468'),
(21, 'test', 'test', '11', 'delete', '4', '1747891592');

-- --------------------------------------------------------

--
-- Table structure for table `pages_name`
--

CREATE TABLE `pages_name` (
  `pages_name_id` int(11) NOT NULL,
  `pages_name` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pages_name`
--

INSERT INTO `pages_name` (`pages_name_id`, `pages_name`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'Exchange Policy', 'delete', '4', '1610606875'),
(2, 'Exchange Policy', 'active', '4', '1610607622'),
(3, 'Buyback', 'active', '4', '1610616092'),
(4, 'Gold Scheme Policy', 'active', '4', '1610616099'),
(5, 'Shipping Policy', 'active', '4', '1610616106'),
(6, 'Cancellation Policy', 'active', '4', '1610616113'),
(7, 'Disclaimer Policy', 'active', '4', '1610616119'),
(8, 'Privacy Policy', 'active', '4', '1610616127'),
(9, 'Terms of Use', 'active', '4', '1610616135'),
(10, 'Insurance Policy', 'active', '4', '1642486866'),
(11, 'Return Policy', 'active', '4', '1747891550'),
(0, 'test', 'delete', '5', '1753683007');

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policy_tbl`
--

CREATE TABLE `privacy_policy_tbl` (
  `privacy_policy_tbl_id` int(11) NOT NULL,
  `privacy_policy_name` text DEFAULT NULL,
  `privacy_policy_details` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `privacy_policy_tbl`
--

INSERT INTO `privacy_policy_tbl` (`privacy_policy_tbl_id`, `privacy_policy_name`, `privacy_policy_details`, `entry_by`, `entry_time`, `entry_date`, `status`) VALUES
(1, 'PRIVACY POLICY ', 'We respect your privacy. Our privacy policy below is meant to help you understand what information we collect about you and how we use it.\r\n', '5', '1752318586', '2025-07-12', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `product_diamond_data`
--

CREATE TABLE `product_diamond_data` (
  `prod_d_d_id` int(11) NOT NULL,
  `product_id` text NOT NULL,
  `stone_type_id` text NOT NULL,
  `stone_type_name` text NOT NULL,
  `stone_shape_id` text NOT NULL,
  `stone_shape_name` text NOT NULL,
  `stone_color_id` text NOT NULL,
  `stone_color_name` text NOT NULL,
  `stone_quality_id` text NOT NULL,
  `stone_quality_name` text NOT NULL,
  `stone_pcs` text NOT NULL,
  `stone_caret` text NOT NULL,
  `stone_wt` text NOT NULL,
  `stone_amt` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_diamond_data`
--

INSERT INTO `product_diamond_data` (`prod_d_d_id`, `product_id`, `stone_type_id`, `stone_type_name`, `stone_shape_id`, `stone_shape_name`, `stone_color_id`, `stone_color_name`, `stone_quality_id`, `stone_quality_name`, `stone_pcs`, `stone_caret`, `stone_wt`, `stone_amt`, `status`) VALUES
(1, '25', '1', 'Diamond', '1', 'Round', '1', 'E-F', '1', 'vvs', '100', '0.25', '0.5', '13000', 'active'),
(2, '25', '1', 'Diamond', '1', 'Round', '1', 'E-F', '2', 'vs', '80', '0.20', '0.4', '9880', 'active'),
(3, '26', '1', 'Diamond', '1', 'Round', '1', 'E-F', '1', 'vvs', '10', '0.25', '0.5', '13000', 'active'),
(4, '26', '1', 'Diamond', '1', 'Round', '1', 'E-F', '2', 'vs', '100', '0.5', '1', '24700', 'active'),
(5, '27', '1', 'Diamond', '1', 'Round', '1', 'E-F', '1', 'vvs', '100', '0.25', '0.5', '13000', 'active'),
(6, '27', '1', 'Diamond', '1', 'Round', '1', 'E-F', '2', 'vs', '10', '.020', '0.04', '988', 'active'),
(7, '28', '1', 'Diamond', '1', 'Round', '1', 'E-F', '1', 'vvs', '10', '0.20', '0.4', '10400', 'active'),
(8, '28', '1', 'Diamond', '1', 'Round', '1', 'E-F', '2', 'vs', '10', '1.0', '2', '49400', 'active'),
(9, '29', '1', 'Diamond', '1', 'Round', '1', 'E-F', '1', 'vvs', '100', '1.02', '2.04', '66300', 'active'),
(10, '29', '1', 'Diamond', '1', 'Round', '1', 'E-F', '2', 'vs', '20', '0.20', '0.4', '12350', 'active'),
(11, '30', '1', 'Diamond', '1', 'Round', '1', 'E-F', '1', 'vvs', '200', '.10', '0.2', '6500', 'active'),
(12, '30', '1', 'Diamond', '1', 'Round', '1', 'E-F', '2', 'vs', '150', '2.02', '4.04', '124735', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `product_diamond_details`
--

CREATE TABLE `product_diamond_details` (
  `prod_dia_d_id` int(11) NOT NULL,
  `product_ref` text NOT NULL,
  `certificate_no` text NOT NULL,
  `style_no` text NOT NULL,
  `vendor_size` text NOT NULL,
  `design` text NOT NULL,
  `stone_rate` text NOT NULL,
  `prod_id` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_diamond_details`
--

INSERT INTO `product_diamond_details` (`prod_dia_d_id`, `product_ref`, `certificate_no`, `style_no`, `vendor_size`, `design`, `stone_rate`, `prod_id`, `status`) VALUES
(1, 'ref-1234', 'Cert-123', 'sty-532', '50x60', 'best', '52000', '25', 'active'),
(2, '-', '-', '-', '-', '-', '52000', '26', 'active'),
(3, '-', '-', '-', '-', '-', '52000', '27', 'active'),
(4, '123', '125', '123', '123', '125', '52000', '28', 'active'),
(5, 'ref-1234', 'Cert-123', 'style-786', '50x60', 'good', '65000', '29', 'active'),
(6, 'ref-1234', 'Cert-123', 'style-124', '50x60', 'good', '65000', '30', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `product_filter`
--

CREATE TABLE `product_filter` (
  `filter_id` int(11) NOT NULL,
  `prod` text NOT NULL,
  `cat` text NOT NULL,
  `group_id` text NOT NULL,
  `filter_title` text NOT NULL,
  `filter_name` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_filter`
--

INSERT INTO `product_filter` (`filter_id`, `prod`, `cat`, `group_id`, `filter_title`, `filter_name`, `status`, `entry_by`, `entry_time`) VALUES
(1, '18', '5', '9', '99', '1', 'active', '4', '1740116883'),
(2, '29', '5', '9', '99', '1', 'active', '4', '1740147845'),
(3, '31', '5', '9', '99', '1', 'active', '4', '1740147949'),
(4, '33', '5', '9', '99', '1', 'active', '4', '1740151250'),
(0, '120', '5', '9', '99', '1', 'active', '5', '1753679851'),
(0, '120', '5', '9', '99', '1', 'active', '5', '1753679851'),
(0, '120', '5', '9', '99', '1', 'active', '5', '1753679851'),
(0, '120', '5', '9', '99', '1', 'active', '5', '1753679851');

-- --------------------------------------------------------

--
-- Table structure for table `product_gold`
--

CREATE TABLE `product_gold` (
  `prod_gold_id` int(11) NOT NULL,
  `cat_id` text NOT NULL,
  `group_id` text NOT NULL,
  `special_days_id` text NOT NULL,
  `caret` text NOT NULL,
  `purity` text NOT NULL,
  `product_name` text NOT NULL,
  `product_qty` text NOT NULL,
  `product_details` text NOT NULL,
  `filter_title` text NOT NULL,
  `filter_name` text NOT NULL,
  `product_id` text NOT NULL,
  `billing_type` text NOT NULL,
  `gold_rate` text NOT NULL,
  `silver_rate` text NOT NULL,
  `cross_weight` text NOT NULL,
  `other_weight` text NOT NULL,
  `net_weight` text NOT NULL,
  `labour_char` text NOT NULL,
  `wastage_per` text NOT NULL,
  `other_amt` text NOT NULL,
  `gst_per` text NOT NULL,
  `product_image` text NOT NULL,
  `fixed_amount` text NOT NULL,
  `fixed_gst_per` text NOT NULL,
  `fixed_gst_amt` text NOT NULL,
  `fixed_total_amt` text NOT NULL,
  `total_discount_amt` text NOT NULL,
  `final_amount_after_discount` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL,
  `rating` text NOT NULL,
  `entry_type` text NOT NULL,
  `label` text NOT NULL,
  `age_category` text NOT NULL,
  `sizeChart` text NOT NULL,
  `ring_size` text NOT NULL,
  `size_guide` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_gold`
--

INSERT INTO `product_gold` (`prod_gold_id`, `cat_id`, `group_id`, `special_days_id`, `caret`, `purity`, `product_name`, `product_qty`, `product_details`, `filter_title`, `filter_name`, `product_id`, `billing_type`, `gold_rate`, `silver_rate`, `cross_weight`, `other_weight`, `net_weight`, `labour_char`, `wastage_per`, `other_amt`, `gst_per`, `product_image`, `fixed_amount`, `fixed_gst_per`, `fixed_gst_amt`, `fixed_total_amt`, `total_discount_amt`, `final_amount_after_discount`, `status`, `entry_by`, `entry_time`, `rating`, `entry_type`, `label`, `age_category`, `sizeChart`, `ring_size`, `size_guide`) VALUES
(1, '5', '66', '', 'ct24', '', 'Testing', '20', 'sersesres', '', '', '123', 'fixed', '', '', '0', '0', '0', '0', '0', '0', '0', '17391840147043647.jpg||product-1739184114-37167.jpg||product-1739184114-84513.png||product-1739184148-91159.png', '2350', '3', '71', '2421', '120', '2301.00', 'deleted', '4', '1739184014', '', '', 'New', 'women', '', '', ''),
(2, '6', '23', '', '', '92.5', 'Evil Eye', '1', 'Red Evil Eye', '', '', '4257s16', 'fixed', '', '960', '0', '0', '0', '0', '0', '0', '0', '173919185242309195.png', '585', '0', '0', '585', '0', '585.00', 'deleted', '4', '1739191856', '', '', '', 'women', '', '', ''),
(3, '6', '23', '', '', '70', 'stone pattern', '1', 'color stone with duck finished', '', '', '273s81', 'fixed', '', '960', '0', '0', '0', '0', '0', '0', '0', '173919241562879234.png', '1455', '3', '44', '1499', '0', '1499.00', 'deleted', '4', '1739192415', '', '', '', 'women', '', '', ''),
(4, '6', '23', '', '', '92.5', 'Regal Harmony Pendant', '1', 'The Regal Harmony Pendant is an elegant and vibrant piece of jewelry, showcasing a swan gracefully enclosed in a sparkling circular frame. The swan\'s body is adorned with a symphony of multicolored gemstones, including deep emerald greens, ruby reds, sapphire blues, canary yellows, and amethyst purples, each meticulously set to resemble ornate feathers. The circle is encrusted with shimmering white stones, adding a celestial aura to the piece. Symbolizing beauty, grace, and unity in diversity, this pendant is perfect for those who cherish artful elegance and meaningful design.', '', '', '1425s21', 'fixed', '', '960', '0', '0', '0', '0', '0', '0', '0', 'product-1745657050-41692.webp||product-1747731849-26416.webp', '1455', '3', '44', '1499', '0', '1499.00', 'active', '4', '1739192812', '5', '', 'New||Trending||Special||Top Selling', 'kids', '', '', ''),
(5, '6', '48', '', '', '92.5', 'Necklace 01', '1', '', '', '', '1287s25', 'fixed', '', '960', '0', '0', '0', '0', '0', '0', '0', '173919379939430442.webp', '13105', '3', '394', '13499', '0', '13499.00', 'deleted', '4', '1739193800', '', '', '', 'women', '', '', ''),
(6, '6', '48', '', '', '92.5', 'Necklace 01', '1', '', '', '', '1287s28', 'manual', '', '960', '86.340', '3.840', '82.50', '0', '0', '0', '0', '173985915637357987.webp', '0', '0', '0', '7920', '0', '7920.00', 'deleted', '4', '1739859158', '', '', '', 'women', '', '', ''),
(7, '6', '48', '', '', '92.5', 'Lotus Glory Choker', '1', 'The Lotus Glory Choker is a splendid piece of ethnic artistry, exuding traditional charm with a contemporary twist. Crafted with antique silver-toned metal, the choker features intricate spiral motifs along the band, beautifully enhanced by mirror-like accents and heart-shaped magenta stones. The centerpiece is a radiant lotus blossom formed with vivid green and magenta petals, enclosing a floral arrangement of glimmering white stones. Dangling pearls and bead clusters add fluidity and grace, making this choker perfect for festive occasions or to elevate any traditional attire with timeless elegance.', '', '', '1287s28', 'manual', '', '960', '86.340', '3.83340', '82.51', '125', '0', '0', '3', '173985947063448206.webp', '0', '0', '0', '18783', '0', '18783.00', 'active', '4', '1739859472', '', '', 'Top Selling||New', 'women', '', '', ''),
(8, '6', '48', '', '', '92.5', 'Peacock Bloom Necklace', '1', 'The Peacock Bloom Set is a majestic fusion of regal design and nature-inspired elegance. This captivating jewelry ensemble includes a statement necklace and matching earrings, crafted with antique gold tones and vivid gemstone inlays. The necklace features intricately layered leaf motifs on the sides, leading to a central arrangement of sea-green stones, violet enamel highlights, floral golden details, and mirror-like kundan accents. Complemented by delicate bead danglers in pastel greens and purples, it exudes a peacock-feather aura.  The matching earrings echo the same design philosophy, showcasing a floral top, almond-shaped sea-green centerpieces, and cascading drops. Together, they form a harmonious blend of traditional artistry and modern charm—ideal for festive, bridal, or grand cultural occasions.', '', '', '1287s31', 'manual', '', '960', '70.110', '9.110', '61.00', '160', '0', '0', '3', '173985967577466329.webp||173985967760202507.jpg', '0', '0', '0', '16085', '0', '16085.00', 'active', '4', '1739859678', '', '', 'New||Top Selling', 'women', '', '', ''),
(9, '6', '48', '', '', '92.5', 'Emerald Vaidehi', '1', 'Emerald Vaidehi is a luxurious temple-style set featuring a broad golden collar with peacock-feather-inspired motifs, complemented by turquoise green stones and vibrant accents of magenta and white. The earrings mirror the central pendant\'s elegance, forming a cohesive royal statement. Perfect for weddings and grand traditional events.', '', '', '1287s32', 'manual', '', '960', '104.500', '2.500', '102.00', '160', '0', '0', '3', '173986028393199718.webp||173986028576580631.webp', '0', '0', '0', '26896', '0', '26896.00', 'active', '4', '1739860287', '', '', 'New||Top Selling', 'women', '', '', ''),
(10, '6', '48', '', '', '92.5', 'Neelkamal Bloom', '0', 'A stunning fusion of heritage and bohemian spirit, the Neelkamal Bloom set features a bold oxidized silver base with intricate engravings and lotus motifs. Accented with turquoise stones, pearl-like beads, and a striking central enamel element, this set reflects a vibrant, cultural narrative. The earrings beautifully echo the pendant’s lotus design, making this set a statement piece for those who celebrate individuality and tradition.', '', '', '1287s30', 'manual', '', '960', '80.690', '4.190', '76.50', '125', '0', '0', '3', 'product-1739860504-86101.webp||product-1739860548-36765.webp', '0', '0', '0', '17415', '0', '17415.00', 'active', '4', '1739860431', '', '', 'New', 'women', '', '', ''),
(11, '6', '48', '', '', '92.5', 'Silver Bloom Necklace', '1', 'Immerse yourself in the radiance of regal artistry with the Silver Bloom Set— a statement of sophistication, heritage, and grace. Crafted in oxidized silver with intricate floral engravings, this ensemble pairs traditional craftsmanship with timeless design.The necklace features a flowing crescent silhouette adorned with floral filigree and a bold teardrop pendant, lavishly set with rich magenta gemstones and a luminous kundan centerpiece.', '', '', '1287s25', 'manual', '', '960', '61.200', '9.200', '52.00', '125', '0', '0', '3', '173986069686018037.webp||173986069882002299.webp', '0', '0', '0', '11837', '0', '11837.00', 'active', '4', '1739860700', '', '', 'Special', 'women', '', '', ''),
(12, '6', '48', '', '', '92.5', 'Gloden Boom Necklace', '0', 'Step into timeless elegance with the Golden Bloom set — a radiant expression of tradition and femininity. Intricate floral motifs paired with ruby and emerald accents celebrate nature’s grace, while the delicate pearl drop adds a regal finish. Perfect for weddings, festivals, or heirloom moments.', '', '', '1287s33', 'manual', '', '960', '62.700', '8.700', '54.00', '160', '0', '0', '3', '173986081960737566.webp||173986082168510763.webp', '0', '0', '0', '14239', '0', '14239.00', 'active', '4', '1739860822', '', '', 'New', 'men', '', '', ''),
(13, '6', '23', '', '', '92.5', 'Violet Bloom Pendant', '1', 'A radiant amethyst set in a blooming floral silver frame—Violet Bloom captures elegance in every petal. Perfect for a graceful statement with everyday wear.', '', '', '2869s168', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', 'product-1745657254-54454.webp', '899', '0', '0.000', '899.00', '', '899.00', 'active', '4', '1740060679', '', '', 'New', 'women', '', '', ''),
(14, '6', '23', '', '', '92.5', 'Celestial Flight Pendant', '1', 'A vibrant butterfly with sapphire-blue and ruby-pink wings dances through a moonlit honeycomb design. Celestial Flight is a symbol of transformation and elegance, perfect for dreamers and believers.', '', '', '273s100', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', 'product-1740060962-92234.jpg', '1099', '0', '0.000', '1099.00', '', '1099.00', 'active', '4', '1740060962', '', '', '', 'kids', '', '', ''),
(15, '6', '23', '', '', '92.5', 'Evil Eye Pendant', '1', 'Defend your aura with the power of red. The Crimson Guard features a striking red evil eye encased in a flowing silver frame—designed to shield you from negativity with bold, mystical energy.', '', '', '4257s16', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', 'product-1745662896-65323.webp', '899', '0', '0.000', '899.00', '', '899.00', 'active', '4', '1740061485', '', '', '', 'women', '', '', ''),
(16, '6', '23', '', '', '92.5', 'Pendant 05', '1', 'Evil Eye', '', '', '4257s2', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', '', '750.75', '3', '23', '774', '', '', 'deleted', '4', '1740061764', '', '', '', 'women', '', '', ''),
(17, '5', '9', '', 'ct22', '', 'Bangles', '12', '', '', '', '12', 'fixed', '81169', '', '0', '0', '0', '0', '0', '0', '0', 'product-1740111755-82680.webp', '0', '0', '0', '0', '', '', 'deleted', '4', '1740111755', '', '', 'New||Trending||Top Selling', 'women', '', '', ''),
(18, '5', '9', '', 'ct24', '', 'Bangales', '200', 'ass', '', '', '521', 'fixed', '86350', '', '0', '0', '0', '0', '0', '0', '0', '174011687842564518.jpeg||174011687884018934.jpeg||174011687896777199.jpeg||product-1740116913-53502.jpeg||product-1740116914-16616.jpeg', '20150', '3', '605', '20755', '100', '20655.00', 'deleted', '4', '1740116879', '', '', '', 'women', '', '', ''),
(19, '6', '19', '', '', '50', 'test', '520', 'ass', '', '', '5214', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', '174011710155942889.jpeg||174011710175607664.jpeg||174011710143714558.jpeg', '52140', '3', '1565', '53705', '200', '53505.00', 'deleted', '4', '1740117101', '', '', '', 'women', '', '', ''),
(20, '6', '19', '', '', '50', 'test demo123', '2000', 'assa', '', '', '8521', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', '174011722890677040.jpeg||174011722918760486.jpeg||174011722955351040.jpeg||product-1740117281-80484.jpeg', '12120', '3', '364', '12484', '200', '12284.00', 'deleted', '4', '1740117229', '', '', '', 'women', '', '', ''),
(21, '6', '22', '', '', '50', 'test1', '5000', 'test', '', '', '85698', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '174013901027341118.jpeg||174013901161303014.webp||174013901111119217.webp||174013901199271417.jpeg||17401390112168163.jpeg', '5210', '3', '157', '5367', '200', '5167.00', 'deleted', '4', '1740139012', '', '', '', 'women', '', '', ''),
(22, '6', '23', '', '', '70', 'testing ', '200', 'testing', '', '', '5213654', 'manual', '', '975', '2010', '20', '1990.00', '0', '20', '200', '3', '174013928933422284.jpeg||174013928925534783.webp||174013929095823545.webp||174013929026772595.jpeg', '0', '0', '0', '240021', '230', '239791.00', 'deleted', '4', '1740139290', '', '', '', 'women', '', '', ''),
(23, '6', '23', '', '', '50', 'New Pendent', '120', 'asde', '', '', '8541', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', '174014184013568955.webp||174014184022464481.jpeg||174014184044421040.jpeg', '2000', '3', '60', '2060', '0', '2060.00', 'deleted', '4', '1740141840', '', '', '', 'women', '', '', ''),
(24, '6', '23', '', '', '92.5', 'Evil Eye Pendant', '1', 'This striking pendant features a classic blue evil eye encircled by a radiant silver frame, offering both protection and style in one powerful charm.', '', '', '4257s2', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', 'product-1745663062-96916.webp||product-1745663062-30619.webp', '949', '0', '0.000', '949.00', '0', '949.00', 'active', '4', '1740142615', '', '', '', 'women', '', '', ''),
(25, '6', '23', '', '', '92.5', 'Knot Pendant', '1', 'Nw0.590gm@200', '', '', '2869s334', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', '17401467238605290.webp', '205', '0', '0', '205', '0', '205.00', 'deleted', '4', '1740146723', '', '', '', 'women', '', '', ''),
(26, '6', '23', '', '', '92.5', 'knot pandant', '1', 'This graceful pendant features a polished bow design, symbolizing elegance and charm with a timeless touch.', '', '', '2869s334', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', 'product-1745663115-69342.webp', '499', '0', '0.000', '499.00', '0', '499.00', 'active', '4', '1740146860', '', '', '', 'women', '', '', ''),
(27, '6', '23', '', '', '92.5', 'Starling pendant', '1', 'This charming pendant showcases a delicate cluster of sparkling heart-shaped gems, blending elegance with a touch of romance.', '', '', '2869s346', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', 'product-1745663264-50788.webp', '499', '0', '0.000', '499.00', '0', '499.00', 'active', '4', '1740147147', '', '', '', 'women', '', '', ''),
(28, '6', '23', '', '', '92.5', 'Pendant music ', '1', 'This elegant pendant features a sparkling musical note design, perfect for music lovers seeking a stylish and artistic accessory.', '', '', '2869s312', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', 'product-1745663318-52767.webp', '499', '0', '0.000', '499.00', '0', '499.00', 'active', '4', '1740147655', '', '', '', 'women', '', '', ''),
(29, '5', '9', '', 'ct24', '', 'Bangales', '20', 'testing', '', '', '312', 'fixed', '86010', '', '0', '0', '0', '0', '0', '0', '0', '174014784111696364.jpeg', '60000', '3', '1800', '61800', '0', '61800.00', 'deleted', '4', '1740147841', '', '', 'New', 'women', '', '', ''),
(30, '6', '23', '', '', '92.5', 'Sterling Pendant', '1', 'This sleek and modern pendant features a graceful swirl design accented with shimmering stones and a contrasting dark gem, exuding elegance and contemporary charm.', '', '', '2869s365', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', 'product-1745663399-69342.webp', '599', '0', '0.000', '599.00', '', '599.00', 'deleted', '4', '1740147925', '', '', '', 'women', '', '', ''),
(31, '5', '9', '', 'ct22', '', 'Bangales', '0', 'test', '', '', '456', 'manual', '80850', '', '300', '200', '100.00', '0', '0', '0', '3', '174014794491060029.webp', '0', '0', '0', '832755', '0', '832755.00', 'deleted', '4', '1740147945', '', '', '', 'women', '', '', ''),
(32, '6', '23', '', '', '92.5', 'letter Pendant ', '1', 'This elegant pendant features the letter \"R\" on a luminous mother-of-pearl base, encircled by sparkling stones for a touch of personalized brilliance and timeless charm.', '', '', '4121s36', 'fixed', '', '980', '0', '0', '0', '0', '0', '0', '0', 'product-1745663543-30063.webp', '899', '0', '0.000', '899.00', '0', '899.00', 'active', '4', '1740148154', '', '', 'Sale', 'women', '', '', ''),
(33, '5', '9', '', 'ct24', '', 'Bangales', '20', 'Bangales', '', '', '854', 'fixed', '86010', '', '0', '0', '0', '0', '0', '0', '0', 'product-1740151334-51691.jpeg', '50000', '3', '1500.000', '51500.00', '100', '51400.00', 'deleted', '4', '1740151247', '', '', 'Trending||wedding||Gift', 'women', '', '', ''),
(34, '5', '10', '', 'ct18', '92.5', 'Gold Ring', '1', 'This elegant rose gold ring features a twisted band design crowned with a brilliant solitaire stone, blending modern artistry with timeless romance.', '', '', '40773', 'manual', '69669', '965', '7.320', '0', '7.32', '0', '25', '0', '3', '', '0', '0', '0', '65661', '', '65661.00', 'deleted', '4', '1740151396', '', '', 'Trending||wedding', 'women', 'product-1748065781-84005.jpeg', '', ''),
(35, '6', '19', '', '', '92.5', 'Sterling Sliver Ring', '1', 'Gents', '', '', '3038s402', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', 'product-1740211906-27646.webp', '1675', '3', '51', '1726', '0', '1726.00', 'deleted', '4', '1740209288', '', '', '', 'women', '', '', ''),
(36, '6', '19', '', '', '92.5', 'Om Ring ', '1', '', '', '', '212s1031', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '174021099845598052.webp||174021099870816091.webp||174021099882125590.webp', '2669', '3', '81', '2750', '0', '2750.00', 'deleted', '4', '1740210998', '', '', '', 'women', '', '', ''),
(37, '6', '19', '', '', '92.5', 'Diamond Mobile Ring', '1', '', '', '', '3038s242', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '174022359143744956.webp||174022359191493965.webp', '2021.37', '3', '61', '2083', '0', '2083.00', 'deleted', '4', '1740223591', '', '', '', 'women', '', '', ''),
(38, '6', '19', '', '', '92.5', 'Fancy Finger Ring 02', '1', '', '', '', '3038s114', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '17402239753360611.webp||17402239753340826.webp||product-1740224691-35387.webp', '1849', '3', '56', '1905', '0', '1905.00', 'deleted', '4', '1740223975', '', '', '', 'women', '', '', ''),
(39, '6', '19', '', '', '92.5', 'Stone Finger Ring', '1', '', '', '', '151a16', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '174023143082177196.webp||174023143065127325.webp', '1037', '3', '32', '1069', '70', '999.00', 'deleted', '4', '1740231431', '', '', '', 'women', '', '', ''),
(40, '6', '19', '', '', '92.5', 'Marquise lapis Lazuli Ring', '1', '', '', '', '212s868', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '174023170212662048.webp||17402317027508368.webp', '3298', '3', '99', '3397', '98', '3299.00', 'deleted', '4', '1740231703', '', '', '', 'women', '', '', ''),
(41, '6', '19', '', '', '92.5', 'lines Ring ', '1', '', '', '', '2868s228', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '174023197091691881.webp||174023197030503076.webp', '3113', '3', '94', '3207', '58', '3149.00', 'deleted', '4', '1740231970', '', '', '', 'women', '', '', ''),
(42, '6', '19', '', '', '92.5', 'Band Ring', '1', '', '', '', '2868s65', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '174023224631761624.webp||174023224619260600.webp', '2235', '3', '68', '2303', '395', '1908.00', 'deleted', '4', '1740232246', '', '', '', 'women', '', '', ''),
(43, '6', '19', '', '', '92.5', 'Stone Ring', '1', '', '', '', '30383s402', 'manual', '', '970', '5.630', '0', '5.63', '315', '0', '0', '3', '174023504356814645.webp', '0', '0', '0', '1726', '0', '1726.00', 'deleted', '4', '1740235043', '', '', '', 'women', '', '', ''),
(44, '6', '19', '', '', '92.5', 'Om Finger Ring', '1', 'Ring size no-24, Wt-8.680gm, The Divine Echo ring is a tribute to sacred sound and spiritual strength. Featuring a striking Om emblem on a textured silver band, it connects you to the universe with every wear.', '', '', '212s1031', 'manual', '', '975', '8.680', '0', '8.68', '210', '0', '0', '3', '174023522292980530.webp||174023522276135460.webp||174023522236351244.webp', '0', '0', '0', '2751', '0', '2751.00', 'active', '4', '1740235223', '', '', '', 'women', '', '', ''),
(45, '6', '19', '', '', '92.5', 'Diamond Mobile Ring', '1', 'Ring size no-21, Wt-7.850gmSparkle meets tech in this dazzling ring shaped like a diamond-studded smartphone, perfect for digital trendsetters.', '', '', '3038s242', 'manual', '', '975', '7.850', '0', '7.85', '150', '0', '0', '3', '174023558125555873.webp||174023558271427390.webp', '0', '0', '0', '2003', '0', '2003.00', 'active', '4', '1740235582', '', '', '', 'women', '', '', ''),
(46, '6', '19', '', '', '92.5', 'Black Stone Ring', '1', 'Ring size no-27, Wt-7.500gm,Where black stone meets baroque curves—timeless elegance for the modern mystic.', '', '', '3038s114', 'manual', '', '975', '7.500', '0', '7.50', '139', '0', '0', '3', '174023581253667633.webp||174023581226879264.webp||174023581250289113.webp||product-1748176383-70670.', '0', '0', '0', '1829', '0', '1829.00', 'active', '4', '1740235812', '', '', '', 'women', '', '', ''),
(47, '6', '19', '', '', '92.5', 'Crownstone Ring', '1', 'Ring size no-19, Wt-5.120gm A regal blend of clustered gems and bold carvings—fit for modern royalty.', '', '', '151a16', 'manual', '', '975', '5.120', '0', '5.12', '100', '0', '0', '3', '174023600748998129.webp||174023600710277089.webp', '0', '0', '0', '1043', '0', '1043.00', 'active', '4', '1740236008', '', '', '', 'women', '', '', ''),
(48, '6', '19', '', '', '92.5', 'Lapis Lazuli Ring', '1', 'Ring size no-17, Wt-13.770gmA striking oval-cut Lapis Lazuli takes center stage, radiating deep celestial blue hues with natural golden flecks. Set in a vintage-inspired silver bezel with twisted detailing, this ring echoes ancient royalty and timeless wisdom—ideal for those who wear their strength with grace.', '', '', '212s868', 'manual', '', '975', '13.770', '0', '13.77', '132', '0', '0', '3', '174023626639343904.webp||174023626691470198.webp', '0', '0', '0', '3256', '0', '3256.00', 'active', '4', '1740236266', '', '', '', 'women', 'product-1748239762-52829.webp', '17', ''),
(49, '6', '19', '', '', '92.5', 'Line Finger Ring', '1', 'Ring size no-25, Wt-10.360gm, This eye-catching sterling silver ring showcases a distinctive zebra-stripe texture, making it a perfect statement piece for those who appreciate bold and artistic jewelry. Crafted with precision, the band features deep, darkened grooves that contrast beautifully against the polished silver surface, creating a dynamic and tactile pattern. The design is inspired by the natural beauty of animal prints, bringing a touch of the wild into a refined and wearable form. The band is moderately wide, offering a comfortable fit while maintaining a substantial presence on the finger.', '', '', '2868s228', 'manual', '', '975', '10.360', '0', '10.36', '188', '0', '0', '3', '174023641757462259.webp||174023641867984555.webp', '0', '0', '0', '3048', '0', '3048.00', 'active', '4', '1740236418', '', '', '', 'women', '', '', ''),
(50, '6', '19', '', '', '92.5', 'Band Ring', '1', 'This handcrafted silver ring showcases a layered design with rope and dotted patterns, giving it a bold and artisanal appeal. Its oxidized finish adds a touch of vintage character, making it a perfect accessory for everyday wear or boho-inspired looks.', '', '', '28368s65', 'manual', '', '975', '8.200', '0', '8.20', '125', '0', '0', '3', '174023673381856000.webp||174023673366830874.webp', '0', '0', '0', '1880', '0', '1880.00', 'active', '4', '1740236733', '', '', '', 'women', '', '', ''),
(51, '6', '19', '', '', '92.5', 'Haqeeq Stone Ring', '1', 'Ring size no-14, Wt-12.980gm, Experience timeless grace with this Haqeeq Stone Ring, featuring a polished oval carnelian (Haqeeq) stone set in an intricately crafted silver-tone band. The warm, earthy hue of the stone radiates calm and spiritual energy, while the detailed metalwork adds a touch of vintage elegance. ', '', '', '212s943', 'manual', '', '975', '12.980', '0', '12.98', '100', '0', '1800', '3', '174023705012070721.webp||174023705035519145.webp||174023705199288928.webp', '0', '0', '0', '4495', '0', '4495.00', 'active', '4', '1740237051', '', '', '', 'women', '', '', ''),
(52, '6', '19', '', '', '92.5', 'Azure Crest Ring', '1', 'Ring size no-21, Wt-6.700gm, Crowned with a vibrant turquoise cabochon,the Azure Crest ring fuses tradition with bold masculinity. Its textured silver setting offers a commanding presence and timeless charm.', '', '', '212s290', 'manual', '', '975', '6.700', '0', '6.70', '115', '0', '0', '3', '174031457180373675.webp||174031457180319114.webp', '0', '0', '0', '1468', '0', '1468.00', 'active', '4', '1740314571', '', '', '', 'women', '', '', ''),
(53, '6', '19', '', '', '92.5', 'Lady Finger Ring', '1', 'This enchanting ring is a true symbol of timeless love and elegance. At its heart lies a captivating green gemstone, glowing with depth and emotion—just like a cherished bond. Surrounding it, a beautifully crafted halo of sparkling baguette and round-cut diamonds forms a delicate embrace, reflecting the light of affection and connection', '', '', '2744s1240', 'manual', '', '970', '5.110', '0', '5.11', '283', '0', '0', '3', '174031476861326955.webp||174031476983540673.webp', '0', '0', '0', '1831', '0', '1831.00', 'active', '4', '1740314769', '', '', '', 'women', '', '', ''),
(54, '6', '19', '', '', '92.5', 'Symbol Finger Ring', '1', 'This stylish ring features a bold octagonal design with a center cluster of sparkling diamonds. Surrounded by baguette and round-cut stones, it adds a touch of elegance and shine. Set in a polished silver-tone metal, it\'s perfect for special occasions or everyday luxury.', '', '', '3038s324', 'manual', '', '975', '7.200', '0', '7.20', '150', '0', '0', '3', '174031490963127906.webp||174031490926378751.webp', '0', '0', '0', '1836', '0', '1836.00', 'active', '4', '1740314910', '', '', '', 'women', '', '', ''),
(55, '6', '19', '', '', '92.5', 'Lady Finger ring ', '1', 'Ring size no - 11, Wt-2.100gm,Rhodium Finished', '', '', '2744s125', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '174032012085891123.webp||17403201204630066.webp||174032012165948114.webp', '1552', '3', '47', '1599', '100', '1499.00', 'active', '4', '1740320121', '', '', '', 'women', '', '', ''),
(56, '6', '19', '', '', '92.5', 'Heart Finger Ring', '1', 'Ring size no-12, Wt-2.100gmThis delicate ring features a charming heart centerpiece flanked by subtle curves, set above a row of sparkling accent stones,perfect for everyday wear or as a symbol of love.', '', '', '27344s8733', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '174032058524174893.webp||174032058527962442.webp||174032058514230742.webp', '972', '3', '30', '1002', '103', '899.00', 'active', '4', '1740320585', '', '', '', 'women', '', '', ''),
(57, '6', '19', '', '', '92.5', 'Sterling Finger Ring', '1', 'Ring size no-24, Wt-4.400gm, This contemporary ring features a unique wrap-around design with a dazzling round-cut center stone, flanked by sleek bands accented with small sparkling diamonds. Crafted in a polished silver-tone metal, it blends modern elegance with timeless brilliance.', '', '', '27344s1246', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '174032130355126473.webp||17403213038989523.webp', '2526', '3', '76', '2602', '103', '2499.00', 'active', '4', '1740321303', '', '', '', 'women', '', '', ''),
(58, '6', '19', '', '', '92.5', '9 Graha Ring', '1', 'Ring size no-22, Wt- 6.070gm. This vibrant men\'s ring features a square setting adorned with nine colorful gemstones, representing the traditional Navratna (nine gems).', '', '', '212s1067', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '174032155070553932.webp||174032155166445840.webp||174032155156745920.webp||product-1748092076-34801.webp', '1998', '3', '60', '2058', '59', '1999.00', 'active', '4', '1740321551', '', '', '', 'women', '', '', ''),
(59, '6', '19', '', '', '92.5', 'Sterling Finger Ring', '1', 'Ring size no -22 , Wt- 6.080gm. Set in a polished white metal band, its clean lines and contemporary design make it a refined yet bold statement piece—perfect for everyday sophistication or special occasions.', '', '', '338s327', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '17403217227485240.webp||174032172334160730.webp||174032172312399882.webp||product-1748091995-72865.webp', '1589', '3', '48', '1637', '138', '1499.00', 'active', '4', '1740321723', '', '', '', 'women', '', '', ''),
(60, '6', '19', '', '', '92.5', 'Fancy Blue Stone Ring', '1', 'Ring no- 15 , Wt-8.600 gm. This luxurious statement ring showcases a stunning floral motif, expertly crafted to exude elegance and sophistication. At its heart lies a prominent oval-cut diamond, encircled by a double halo of finely set baguette and round-cut diamonds that enhance its brilliance. Surrounding the center are alternating teardrop-shaped blue sapphires and diamond-studded petals, arranged meticulously to resemble a blooming flower. The deep blue of the sapphires contrasts beautifully with the sparkle of the diamonds, creating a vibrant and eye-catching appeal.', '', '', '2744s1210', 'fixed', '', '975', '0', '0', '0', '0', '0', '0', '0', '174032191677637976.webp||174032191651218967.webp||product-1748091943-85234.webp', '3303', '3', '100', '3403', '104', '3299.00', 'active', '4', '1740321917', '', '', '', 'women', '', '', ''),
(61, '6', '23', '', '', '92.5', 'Shankar Maharaj Pendant', '1', 'This elegant Shankar Maharaj pendant in polished silver captures the saint’s calm and powerful presence, embodying divine grace, strength, and spiritual devotion.', '', '', '28730s156', 'fixed', '', '970', '0', '0', '0', '0', '0', '0', '0', '174040723872695582.webp', '1458', '3', '44', '1502', '103', '1399.00', 'active', '4', '1740407238', '', '', 'Special', 'women', '', '', ''),
(62, '6', '23', '', '', '92.5', 'Gajanan Maharaj Pendant', '1', 'This Gajanan Maharaj pendant features a detailed depiction of the revered saint in a seated pose, symbolizing devotion, wisdom, and spiritual protection in a timeless silver design.', '', '', '2870s64', 'fixed', '', '970', '0', '0', '0', '0', '0', '0', '0', '174040751814144746.webp', '1403', '3', '43', '1446', '247', '1199.00', 'active', '4', '1740407518', '', '', 'Special', 'women', '', '', ''),
(63, '6', '23', '', '', '70', 'Om Pendant', '1', 'Elevate your spiritual style with this sleek silver Om pendant, a timeless symbol of peace, balance, and inner strength. Crafted with fine detailing and a modern finish, it’s perfect for everyday wear or meaningful gifting.', '', '', '3262s56', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', '174047904975059455.webp', '699', '3', '21', '720', '21', '699.00', 'active', '4', '1740479049', '', '', 'New', 'women', '', '', ''),
(64, '6', '23', '', '', '92.5', 'saibaba Pendant', '1', 'This intricately detailed Saibaba pendant in silver captures the divine essence of the revered saint, symbolizing peace, guidance, and spiritual devotion in a timeless design.', '', '', '2870s92', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', '174048017260418396.webp', '999', '3', '30', '1029', '130', '899.00', 'active', '4', '1740480172', '', '', '', 'women', '', '', ''),
(65, '6', '28', '', '', '92.5', 'Jhumaka', '0', 'vj', '', '', '140521', 'fixed', '', '945', '0', '0', '0', '0', '0', '0', '0', 'product-1740809915-76543.webp', '2300', '3', '69', '2369', '', '', 'deleted', '4', '1740809915', '', '', '', 'women', '', '', ''),
(66, '6', '19', '', '', '92.5', 'Blooming Grace Ring', '1', 'Ring size no-13, Wt-2.800gm. This exquisite ring showcases a beautifully detailed flower design with sparkling gemstones forming delicate petals and a central bloom. The craftsmanship highlights intricate textures and patterns, evoking the elegance of nature in full bloom.', '', '', '2744s1520', 'fixed', '', '890', '0', '0', '0', '0', '0', '0', '0', 'product-1748091814-51668.webp||product-1748091826-67990.webp', '3729', '3', '112', '3841', '', '', 'active', '4', '1743945644', '', '', '', 'women', '', '', ''),
(67, '6', '19', '', '', '92.5', 'Radiant Orbit Ring', '1', 'This elegant ring features a modern yet intricate design, with a double band encrusted with shimmering stones that converge into a stunning centerpiece. The focal point is a curving pattern adorned with sparkling accents, giving the ring a sense of motion and flow.', '', '', '27344s1509', 'fixed', '', '890', '0', '0', '0', '0', '0', '0', '0', '', '3499', '3', '105', '3604', '', '', 'deleted', '4', '1743947233', '', '', '', 'women', '', '', ''),
(68, '6', '19', '', '', '92.5', 'Golden Bloom Ring', '1', 'This stunning ring features a radiant design inspired by nature. A sparkling central gemstone sits atop a golden flower-like setting. The petals are adorned with intricate patterns of smaller stones, creating a brilliant, layered effect.', '', '', '2744s1519', 'fixed', '', '890', '0', '0', '0', '0', '0', '0', '0', 'product-1743948073-87550.webp||product-1743948073-14780.webp||product-1743948073-76478.webp', '5555', '3', '167', '5722', '', '', 'deleted', '4', '1743948073', '', '', '', 'women', '', '', ''),
(69, '6', '19', '', '', '92.5', 'Butterfly Blossom Ring', '1', 'This delicate and enchanting ring features a butterfly design crafted from vibrant green stones for the wings, framed by sparkling white gemstones along its body. The open-band style adds a modern and airy touch, while a small white stone on the other end of the band balances the design perfectly.', '', '', '2744s1521', 'fixed', '', '890', '0', '0', '0', '0', '0', '0', '0', 'product-1743948435-43416.webp||product-1743948435-60531.webp', '2599', '3', '78', '2677', '', '', 'deleted', '4', '1743948435', '', '', '', 'women', '', '', ''),
(70, '6', '19', '', '', '92.5', 'Radiant Orbit Ring', '1', 'Wt-3.05gm.This elegant ring features a modern yet intricate design, with a double band encrusted with shimmering stones that converge into a stunning centerpiece. The focal point is a curving pattern adorned with sparkling accents, giving the ring a sense of motion and flow.', '', '', '27344s1509', 'fixed', '', '900', '0', '0', '0', '0', '0', '0', '0', 'product-1748091749-61428.webp||product-1748091751-16941.webp||product-1748091752-60526.webp||product-1748091754-49416.webp', '1499', '3', '45', '1544', '', '', 'active', '4', '1744012487', '', '', '', 'women', '', '', ''),
(71, '6', '19', '', '', '92.5', 'Golden Bloom Ring', '1', 'Ring size no- 14, Wt-4.67gm. This stunning ring features a radiant design inspired by nature, with a sparkling central gemstone that sits atop a golden flower-like setting. The petals are adorned with intricate patterns of smaller stones, creating a brilliant, layered effect.', '', '', '2744s1519', 'fixed', '', '900', '0', '0', '0', '0', '0', '0', '0', 'product-1748091624-84806.webp||product-1748091626-32749.webp||product-1748091627-62473.webp||product-1748091628-33265.webp', '2199', '3', '66', '2265', '', '', 'active', '4', '1744012615', '', '', '', 'women', '', '', ''),
(72, '6', '19', '', '', '92.5', 'Butterfly Blossom Ring', '1', 'Ring size no-13, Wt-2.12gm.This delicate and enchanting ring features a butterfly design crafted from vibrant green stones for the wings, framed by sparkling white gemstones along its body. The open-band style adds a modern and airy touch, while a small white stone on the other end of the band balances the design perfectly.', '', '', '2744s1521', 'fixed', '', '900', '0', '0', '0', '0', '0', '0', '0', 'product-1748091582-64044.webp||product-1748091583-50615.webp||product-1748091584-23699.webp', '899', '3', '27', '926', '', '', 'active', '4', '1744012830', '', '', '', 'women', '', '', ''),
(73, '6', '19', '', '', '50', '5454', '5454', '--', '', '', '5454', 'fixed', '', '900', '0', '0', '0', '0', '0', '0', '0', 'product-1744022344-87045.pngproduct-1744022344-42665.png', '0', '0', '0', '0', '', '', 'deleted', '4', '1744022344', '', '', '', 'women', '', '', ''),
(74, '6', '19', '', '', '92.5', 'Twirling Blossom Ring', '1', 'Wt-2.5gm. This elegant ring features a charming dragonfly motif as its centerpiece, made from sparkling white gemstones. The open-band design adds a contemporary twist, while a delicate single stone on the opposite end of the band creates a balance of simplicity and sophistication.', '', '', '2744s1522', 'fixed', '', '900', '0', '0', '0', '0', '0', '0', '0', 'product-1748091463-97213.webp||product-1748091464-12921.webp||product-1748091465-78021.webp', '1499', '3', '45', '1544', '', '', 'active', '4', '1744024140', '', '', '', 'women', '', '', ''),
(75, '6', '19', '', '', '92.5', 'Sunburst Bloom Ring', '1', 'Wt-4.94gm. This exquisite ring captures the beauty of nature and vibrant elegance. One side of the ring features a radiant floral design crafted from clear, sparkling gemstones arranged in a blooming pattern. The other side is adorned with a stunning yellow pear-shaped gemstone, radiating warmth and luxury.', '', '', '2744s1514', 'fixed', '', '900', '0', '0', '0', '0', '0', '0', '0', 'product-1748091428-30938.webp||product-1748091430-93269.webp', '2599', '3', '78', '2677', '', '', 'active', '4', '1744026287', '', '', '', 'women', '', '', ''),
(76, '6', '19', '', '', '92.5', 'Evil Eye Ring', '1', 'Wt- 2.21gm. This unique ring features a captivating design combining the symbol of infinity and protective charm elements. At its center, the sparkling infinity motif symbolizes endless love, connection, and eternity. The upper band is adorned with a row of delicate gemstones, interspersed with two striking blue ', '', '', '2744s1518', 'fixed', '', '900', '0', '0', '0', '0', '0', '0', '0', 'product-1748091336-16877.webp||product-1748091337-53127.webp', '999', '3', '30', '1029', '', '', 'active', '4', '1744029612', '', '', '', 'women', '', '', ''),
(77, '6', '19', '', '', '92.5', 'Diamond Vine Ring', '1', 'Wt-3.13gm. The ring in the image is an elegant and intricate piece featuring a bypass-style design. It showcases multiple oval and pear-shaped diamonds arranged in a floral or vine-like motif, with a pavé diamond band that gracefully curves around the central stones', '', '', '2744s1511', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1744030293-35057.jpg||product-1748091299-42150.webp||product-1748091300-43387.webp||product-1748091301-30436.webp', '1749', '3', '53', '1802', '', '', 'active', '4', '1744030293', '', '', '', 'women', '', '', ''),
(78, '6', '19', '', '', '92.5', 'Eternal Rose Ring', '1', 'Ring size no -3.070gm , Wt-3.07gm.This ring features a stunning openwork rose design, encrusted with diamonds along its delicate petal outlines. The intricate structure gives it a romantic and elegant appeal, resembling a blooming rose frozen in time.', '', '', '2744s1532', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748091145-10428.webp||product-1748091146-67003.webp', '1499', '3', '45', '1544', '', '', 'active', '4', '1744030444', '', '', '', 'women', '', '', ''),
(79, '6', '19', '', '', '92.5', 'Twin Sparkle Ring', '1', 'Wt-3.38gm. This ring features a dazzling twin-flower design, with two radiant diamond clusters resembling blooming blossoms. The bypass-style band, encrusted with pavé diamonds, gracefully intertwines, enhancing the ring\'s fluid and elegant appeal.', '', '', '2744s1513', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748091078-90480.webp||product-1748091079-46743.webp||product-1748091080-32916.webp', '1843', '3', '56', '1899', '', '', 'active', '4', '1744032416', '', '', '', 'women', '', '', ''),
(80, '6', '19', '', '', '92.5', 'Eternal Glow Solitaire Ring', '1', 'Wt-3.63gm. The band is adorned with a row of shimmering diamonds that extend along its sides, creating a luxurious and radiant effect. The design is both elegant and modern, with a touch of regal opulence.', '', '', '2744s1534', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748090941-18350.webp||product-1748090942-54281.webp||product-1748090943-81964.webp', '1940', '3', '59', '1999', '', '', 'active', '4', '1744033166', '', '', '', 'women', '', '', ''),
(81, '6', '19', '', '', '92.5', 'Owl Red Eye Ring', '1', 'ring size no-29, Wt-5.63gm. This ring is a bold and mesmerizing statement piece, featuring an intricately carved owl motif with piercing red eyes that seem to glow with an intense, almost supernatural energy. The oxidized silver detailing enhances the depth of the design, giving it an ancient and mystical appearance. The striking red gemstone eyes and the fierce, watchful gaze make this ring a powerful symbol of wisdom, mystery, and guardianship.', '', '', '212s1084', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748090818-49691.webp||product-1748090819-78842.webp||product-1748090821-18019.webp', '2329', '3', '70', '2399', '', '', 'active', '4', '1744033737', '', '', '', 'women', '', '', ''),
(82, '6', '19', '', '', '92.5', 'Owl Yellow Eye Ring', '1', 'Ring size no -19, Wt - 5.37gm. This ring features an intricately designed owl face with striking amber-colored eyes. The detailed silverwork mimics feathers, giving it a bold and mystical appearance. The owl\'s piercing gaze makes it a standout piece, perfect for those who love unique and symbolic jewelry.', '', '', '212s1085', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748090686-92300.webp||product-1748090687-20445.webp||product-1748090722-65187.webp', '2329', '3', '70', '2399', '', '', 'active', '4', '1744033903', '', '', '', 'women', '', '', ''),
(83, '6', '19', '', '', '92.5', 'Owl Blue Eye Ring', '1', 'Wt - 4.55gm. This striking ring features an intricately carved owl face with mesmerizing galaxy-inspired blue and purple eyes. The detailed silver design gives it a bold, mystical look, making it perfect for those who love unique and symbolic jewelry.', '', '', '212s1083', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748090591-82834.webp||product-1748090593-28242.webp||product-1748090611-13489.webp', '1940', '3', '59', '1999', '', '', 'active', '4', '1744034053', '', '', '', 'women', '', '', ''),
(84, '6', '19', '', '', '92.5', 'Infinity Embrace Ring ', '1', 'Wt - 1.59gm. Its organic curves create a sense of harmony and grace. A symbol of connection, balance, and timeless beauty.', '', '', '2744s1528', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748090462-54060.webp||product-1748090463-45121.webp||product-1748090477-75467.webp', '678', '3', '21', '699', '', '', 'active', '4', '1744034293', '', '', '', 'women', '', '', ''),
(85, '6', '19', '', '', '92.5', 'Eternal Radiance Ring', '1', 'Wt - 3.14gm.This ring features a dazzling princess-cut center stone, elevated in a regal setting. The band, encrusted with shimmering stones, exudes luxury from every angle. A true symbol of eternal elegance and refined beauty.', '', '', '2744s1537', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748090354-91904.webp||product-1748090356-78910.webp||product-1748090357-80268.webp||product-1748090375-92962.webp', '1649', '3', '50', '1699', '', '', 'active', '4', '1744034503', '', '', '', 'women', '', '', ''),
(86, '6', '19', '', '', '92.5', 'Starlight Embrace Ring', '1', 'Wt :- 2.790 gm, Solitaire ring with a radiant round-cut stone, gracefully set in an elegant prong setting. The delicate band is adorned with a row of shimmering accents, symbolizing a path of everlasting love.', '', '', '2744s1515', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748087403-71624.webp||product-1748087405-53099.webp||product-1748088328-99295.webp', '1261', '3', '38', '1299', '', '', 'active', '4', '1744034783', '', '', '', 'women', '', '', ''),
(87, '6', '19', '', '', '92.5', 'Aurora Solitaire Ring', '1', 'Wt - 3.06 gm. This is a silver or platinum-colored ring featuring a single central round-cut gemstone, most likely a cubic zirconia or diamond. The central stone is held in place with a four-prong setting and is encircled by a halo of smaller stones, adding a touch of sparkle and elegance.', '', '', '2744s1516', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748087144-61016.webp||product-1748087183-70311.webp', '1260', '3', '38', '1298', '', '', 'active', '4', '1744035102', '', '', '', 'women', '', '', ''),
(88, '6', '19', '', '', '92.5', 'Modern Glint Ring', '1', 'Ring Size 13 no, Wt - 0.020gm.This ring features a modern and unique design with a series of baguette-cut stones arranged in a staggered, zigzag-like pattern on the top. The band is adorned with smaller round stones on the sides, adding a touch of shimmer. The overall design blends contemporary elegance with geometric creativity, making it a standout piece.', '', '', '2744s1527', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748086798-84879.webp||product-1748086800-20754.webp||product-1748086828-66914.webp', '824', '3', '25', '849', '', '', 'active', '4', '1744035247', '', '', '', 'women', '', '', ''),
(89, '6', '19', '', '', '92.5', 'Infinity Sparkle Ring', '1', 'This ring features a floral-inspired design with clusters of small, round stones arranged in intricate, petal-like patterns. The arrangement forms a striking and elegant figure-eight or infinity shape, symbolizing eternity and continuity. The band is simple and polished, allowing the sparkling clusters to take center stage.', '', '', '2744s1531', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748086220-59215.webp||product-1748086221-45168.webp||product-1748086287-62291.webp', '1746', '3', '53', '1799', '', '', 'active', '4', '1744036186', '', '', '', 'women', '', '', ''),
(90, '6', '19', '', '', '92.5', 'Glow In Dark Ring', '1', 'Ring size no -22, Wt-4.930gm.  This exquisite ring beautifully combines classic and contemporary design elements. The central band showcases an intricate gold filigree pattern that evokes royal insignias and ancient artistry, meticulously woven into its structure. The surrounding silver frame provides a striking contrast, further enhancing the piece\'s luxurious appeal', '', '', '2868s236', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748085774-56692.webp||product-1748085775-32286.webp||product-1748086644-95166.webp', '1746', '3', '53', '1799', '', '', 'active', '4', '1744036579', '', '', '', 'women', '', '', ''),
(91, '6', '19', '', '', '92.5', 'Glow In Dark Spider Ring ', '1', 'Ring size no - 17, Wt-4.430gm. This ring is a fusion  of nature and modern craftsmanship. The vibrant yellow-green inlay, adorned with delicate silver branch-like etc hings, gives it an organic and earthy appeal.', '', '', '28683s237', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748085737-11218.webp||product-1748085738-50840.webp', '1746', '3', '53', '1799', '', '', 'active', '4', '1744036881', '', '', '', 'women', 'product-1748073916-28977.webp', '1,4,5,6', ''),
(92, '6', '19', '', '', '92.5', 'Lifeline Ring', '1', 'This ring has a minimalist yet meaningful design, featuring two sculpted hands delicately reaching towards each other. The open-ended band creates a sense of connection and unity, symbolizing love, care, or support. The polished silver-tone finish enhances its modern and artistic appeal, making it a statement piece with emotional significance.', '', '', '2744s1526', 'fixed', '', '910', '0', '0', '0', '0', '0', '0', '0', 'product-1748085679-74135.webp||product-1748085680-58006.webp||product-1748086561-43102.webp', '1090', '3', '33', '1123', '', '', 'active', '4', '1744038310', '', '', 'Trending', 'women', '', '', ''),
(93, '6', '19', '', '', '92.5', 'Dual Elegance Ring', '1', 'This ring features an elegant and modern design with two triangular elements meeting at the top to form a heart-like shape. One side is adorned with sparkling stones, adding a touch of brilliance, while the other side showcases a soft pink enamel or gemstone, creating a beautiful contrast. The band is polished and sleek, highlighting the duality of textures and colors in the centerpiece.', '', '', '27441523', 'fixed', '', '900', '0', '0', '0', '0', '0', '0', '0', 'product-1748085614-41825.webp||product-1748085615-28403.webp||product-1748086460-18968.webp', '969', '3', '30', '999', '', '', 'active', '4', '1744107481', '', '', '', 'women', '', '', ''),
(94, '6', '19', '', '', '92.5', 'Elegance Ring', '1', 'This ring has a unique and modern design, featuring a smooth mother-of-pearl inlay set in a sleek silver band. A row of sparkling stones adds extra shine, making it a stylish and elegant piece.', '', '', '2744s1524', 'fixed', '', '900', '0', '0', '0', '0', '0', '0', '0', 'product-1748085537-92505.webp||product-1748085539-30408.webp||product-1748086428-13695.webp', '969', '3', '30', '999', '', '', 'active', '4', '1744108231', '', '', '', 'women', '', '', ''),
(95, '6', '20', '', '', '92.5', 'Infinity Glow Braclet', '1', ' This bracelet is an elegant open cuff design, featuring sleek silver lines with delicate embellishments that taper into subtle, pointed ends. The minimalist yet luxurious look makes it a timeless and versatile piece.\r\n', '', '', '4060s47', 'fixed', '', '900', '0', '0', '0', '0', '0', '0', '0', 'product-1748178785-22001.webp||product-1748178786-85163.webp', '5825', '3', '174.750', '5999.75', '', '5999.75', 'active', '4', '1744181044', '', '', 'Trending', 'women', '', '', ''),
(96, '6', '19', '', '', '92.5', 'Infinite Grace Ring', '0', 'This ring features a dazzling infinity symbol as its centerpiece, encrusted with sparkling stones that add a sense of brilliance and timeless elegance. The infinity design represents eternal love, commitment, and endless possibilities. Its sleek and minimalistic band complements the radiant centerpiece, making it modern and symbolic.', '', '', '2744s1530', 'fixed', '', '920', '0', '0', '0', '0', '0', '0', '0', 'product-1748084888-66856.webp||product-1748084894-33739.webp||product-1748086380-99281.webp', '969', '3', '30', '999', '', '', 'active', '4', '1744201297', '', '', '', 'women', '', '', ''),
(97, '6', '19', '', '', '92.5', 'Evil Eye Stone Ring ', '16', 'Ring Size 10 no,The design represents eternal love, endless possibilities, and timeless beauty, making it a meaningful and stylish piece.', '', '', '2744s1529', 'fixed', '', '920', '0', '0', '0', '0', '0', '0', '0', 'product-1748084404-11456.webp||product-1748084406-28386.webp||product-1748086337-56340.webp', '872', '3', '27', '899', '', '', 'active', '4', '1744201539', '', '', '', 'kids', '', '4,5,6', '');
INSERT INTO `product_gold` (`prod_gold_id`, `cat_id`, `group_id`, `special_days_id`, `caret`, `purity`, `product_name`, `product_qty`, `product_details`, `filter_title`, `filter_name`, `product_id`, `billing_type`, `gold_rate`, `silver_rate`, `cross_weight`, `other_weight`, `net_weight`, `labour_char`, `wastage_per`, `other_amt`, `gst_per`, `product_image`, `fixed_amount`, `fixed_gst_per`, `fixed_gst_amt`, `fixed_total_amt`, `total_discount_amt`, `final_amount_after_discount`, `status`, `entry_by`, `entry_time`, `rating`, `entry_type`, `label`, `age_category`, `sizeChart`, `ring_size`, `size_guide`) VALUES
(98, '6', '20', '', '', '92.5', 'Panther Clasp', '0', 'This men\'s bracelet features a bold, captivating design with a sleek metallic finish. The centerpiece showcases a geometric, rose-gold panther head with intricate detailing and a fierce expression, holding a ring in its mouth. The bracelet band is textured like a chain, adorned with subtle stone accents for an added touch of luxury. Its combination of modern artistry and classic symbolism embodies strength, power, and sophistication.', '', '', '1158s256', 'fixed', '', '950', '0', '0', '0', '0', '0', '0', '0', 'product-1748178756-43293.webp||product-1748178758-41670.webp||product-1748178759-40603.webp||product-1748178760-62534.webp', '8736', '3', '263', '8999', '', '', 'active', '4', '1744614920', '', '', 'New', 'women', '', '', ''),
(99, '6', '20', '', '', '92.5', 'Cord & Chain Braclet', '1', 'This men\'s bracelet combines rugged charm with modern style. It features a bold silver chain link centerpiece, complemented by a sturdy black braided cord. The minimalistic yet edgy design strikes a balance between sophistication and casual flair, making it ideal for everyday wear or special occasions.', '', '', '3556s37', 'fixed', '', '950', '0', '0', '0', '0', '0', '0', '0', 'product-1744615119-78909.jpg||product-1744615119-77500.jpg||product-1744615119-54537.jpg', '7740', '3', '233', '7973', '', '', 'deleted', '4', '1744615119', '', '', '', 'women', '', '', ''),
(100, '6', '20', '', '', '92.5', 'Cord & Chain Braclet', '1', 'This men\'s bracelet combines rugged charm with modern style. It features a bold silver chain link centerpiece, complemented by a sturdy black braided cord. The minimalistic yet edgy design balances sophistication and casual flair, making it ideal for everyday wear or special occasions.', '', '', '3556s37', 'fixed', '', '950', '0', '0', '0', '0', '0', '0', '0', 'product-1748178727-18008.webp||product-1748178728-81306.webp||product-1748178729-35594.webp', '7960', '3', '239', '8199', '', '', 'active', '4', '1744621104', '', '', '', 'women', '', '', ''),
(101, '6', '20', '', '', '92.5', 'Crystal Charm Braclet', '1', 'The rectangular bar is encrusted with multiple rows of dazzling white stones, likely diamonds or cubic zirconia, creating a shimmering and luxurious look. The bracelet is accentuated by delicate double chain links on each side, adding a refined and modern touch.', '', '', '2743s393', 'fixed', '', '950', '0', '0', '0', '0', '0', '0', '0', 'product-1748178704-38125.webp||product-1748178706-41956.webp||product-1748178707-23303.webp', '1601', '3', '49', '1650', '', '', 'active', '4', '1744621301', '', '', '', 'women', '', '', ''),
(102, '6', '20', '', '', '92.5', 'Shimmer Blossom Braclet', '1', 'This elegant piece is a floral-inspired bracelet featuring two dazzling flower motifs as its centerpiece. Each flower is intricately designed with petals encrusted in radiant stones, creating a stunning blend of sparkle and sophistication. The band itself is slim and adorned with a continuous row of glittering stones, adding an extra touch of refinement. The overall design is delicate, feminine, and timeless.', '', '', '4060s44', 'fixed', '', '950', '0', '0', '0', '0', '0', '0', '0', 'product-1748178679-99258.webp||product-1748178681-12519.webp', '6989', '3', '210', '7199', '', '', 'active', '4', '1744621471', '', '', 'Top Selling', 'women', '', '', ''),
(103, '6', '20', '', '', '92.5', 'Sparkle Lattice Braclet', '1', 'This adjustable bracelet features a sleek and modern design with sparkling stones meticulously arranged in a double-row structure. The sliding clasp not only enhances its functionality but also adds a stylish and contemporary flair. The overall look is minimalistic yet luxurious, making it versatile for everyday wear or special occasions.', '', '', '2743s395', 'fixed', '', '950', '0', '0', '0', '0', '0', '0', '0', 'product-1748178648-83824.webp', '1939', '3', '59', '1998', '', '', 'active', '4', '1744621646', '', '', '', 'women', '', '', ''),
(104, '6', '20', '', '', '92.5', 'Petal Glow Band', '1', 'This elegant silver cuff bracelet features delicate floral motifs adorned with shimmering crystals and mother-of-pearl inlays, capturing a graceful and feminine charm.', '', '', '4060s45', 'fixed', '', '950', '0', '0', '0', '0', '0', '0', '0', 'product-1748177154-94183.webp||product-1748177155-41110.webp||product-1748177156-10934.webp', '6989', '3', '210', '7199', '', '', 'active', '4', '1744623149', '', '', '', 'women', '', '', ''),
(105, '6', '20', '', '', '92.5', 'Radiant Harmony Braclet', '1', 'This bracelet showcases a sophisticated design, blending classic elegance with modern flair. Its centerpiece features a rose gold geometric link, accented with a rainbow of vibrant gemstones, adding a pop of color and uniqueness to the sparkling silver-tone band. The band itself is adorned with a row of brilliant, evenly spaced stones, offering a timeless and luxurious appeal.', '', '', '2743s392', 'fixed', '', '950', '0', '0', '11.03', '0', '0', '0', '0', 'product-1748176794-34953.webp||product-1748176795-59443.webp||product-1748176796-29554.webp', '4853', '3', '146', '4999', '', '', 'active', '4', '1744627711', '', '', '', 'women', '', '', ''),
(106, '6', '20', '', '', '92.5', 'Metallic Flow Band', '1', 'This bracelet features a striking tri-tone design, blending yellow gold, rose gold, and silver tones in a woven mesh style. The interlocking strands create a sense of fluidity and elegance, while its minimalist yet bold design makes it perfect for layering or wearing as a statement piece. The magnetic clasp adds a seamless, modern touch to its functional and aesthetic appeal.', '', '', '2743s396', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', 'product-1748178627-53612.webp||product-1748178628-36796.webp', '6795', '3', '204', '6999', '', '', 'active', '4', '1744973722', '', '', '', 'women', '', '', ''),
(107, '6', '20', '', '', '92.5', 'Infinity Flora', '1', 'The design features a central floral motif, with a rose-gold-toned petal structure encircling a diamond-studded openwork centerpiece. The intricate infinity-inspired band, adorned with delicate diamonds, adds a touch of timeless grace.', '', '', '4060s43', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', 'product-1748178610-64040.webp||product-1748178611-21382.webp', '4853', '3', '146', '4999', '', '', 'active', '4', '1744974199', '', '', '', 'women', '', '', ''),
(108, '6', '20', '', '', '92.5', 'Silver Starlit', '1', 'This elegant bracelet exudes a celestial charm with its delicate silver-toned mesh band and a sparkling starburst pendant. The intricately designed star, adorned with a central gemstone and fine detailing, gives the piece a dreamy, ethereal feel.', '', '', '2743s397', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', 'product-1748178595-97624.webp', '2426', '3', '73', '2499', '', '', 'active', '4', '1744974507', '', '', '', 'women', '', '', ''),
(109, '6', '20', '', '', '92.5', 'Blossom Gleam Band', '1', 'This bracelet features a sleek, open cuff design with delicate floral accents and sparkling embellishments, exuding a harmonious blend of elegance and charm.', '', '', '4060s46', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', 'product-1748178574-48144.webp||product-1748178576-38460.webp', '7280', '3', '219', '7499', '', '', 'active', '4', '1744974822', '', '', '', 'women', '', '', ''),
(110, '6', '20', '', '', '92.5', 'Spectrum Glow Braclet', '0', 'This bracelet is a stunning display of elegance and vibrancy, featuring a series of multicolored gemstones arranged in square settings. A halo of sparkling crystals surrounds each stone, adding brilliance and contrast to the vivid hues. The combination of soft pastels and bold colors creates a playful yet sophisticated design, perfect for those who love colorful and eye-catching jewelry.', '', '', '2743s830', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', 'product-1748178548-94374.webp||product-1748178549-70086.webp||product-1748178551-81378.webp', '6309', '3', '190', '6499', '', '', 'active', '4', '1744975074', '', '', '', 'women', '', '', ''),
(111, '6', '20', '', '', '92.5', 'Divine Glance Braclet', '1', 'This elegant bracelet features a delicate silver chain with a striking eye-shaped charm. The charm has a soft pink center, surrounded by sparkling stones, giving it a modern yet meaningful touch. Often seen as a symbol of protection and good fortune, this design is both stylish and symbolic.', '', '', '2743s394', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', 'product-1748178523-85303.webp||product-1748178524-91566.webp', '969', '3', '30', '999', '', '', 'active', '4', '1744975409', '', '', '', 'women', '', '', ''),
(112, '6', '20', '', '', '92.5', 'Infinity Mesh Braclet', '1', 'Its polished silver finish adds a touch of elegance, making it suitable for both casual and formal wear.This sleek and modern bracelet features a geometric chain design with interlocking hexagonal links.', '', '', '11565118', 'fixed', '', '965', '0', '0', '0', '0', '0', '0', '0', 'product-1752320620-73063.webp||product-1748497610-82599.webp||product-1752316653-84138.png||product-1752320491-82619.webp', '6795', '3', '204', '6999', '', '', 'active', '4', '1744975598', '', '', '', 'women', '', '', ''),
(113, '5', '10', '', 'ct24', '', 'ring', '5', 'test', '', '', '122344', 'fixed', '95640', '', '0', '0', '0', '0', '0', '0', '0', '174800143620076546.webp||174800143695918968.webp||174800143661387679.webp', '300', '3', '9', '309', '10', '299.00', 'deleted', '4', '1748001436', '', '', '', 'women', '', '', ''),
(114, '5', '10', '', 'ct24', '', 'men finger ring', '10', 'test', '', '', '1234', 'fixed', '95640', '', '0', '0', '0', '0', '0', '0', '0', '174800172480131381.webp||product-1748002639-77814.webp', '95640', '3', '2870', '98510', '2000', '96510.00', 'deleted', '4', '1748001724', '', '', '', 'women', 'product-1748001724-50152.jpeg', '', ''),
(115, '5', '10', '', 'ct22', '92.5', 'ring ', '10', 'test ', '', '', '1213131', 'fixed', '90001', '', '0', '0', '10', '0', '0', '0', '0', '174806153052128730.jpg', '90001', '3', '2700', '92701', '', '92701.00', 'deleted', '4', '1748061530', '', '', '', 'women', 'product-1748061530-75757.jpeg', '', ''),
(116, '6', '19', '', '', '92.5', 'ring ', '1', 'test', '', '', '1213131', 'fixed', '', '985', '0', '0', '10', '0', '0', '0', '0', '174806844297109026.webp', '985', '3', '30', '1015', '0', '1015.00', 'deleted', '4', '1748068442', '', '', '', 'women', 'product-1748068442-98605.jpeg', '', ''),
(117, '5', '10', '', 'ct24', '92.5', 'ring', '1', 'test', '', '', '1212', 'fixed', '95850', '', '0', '0', '10', '0', '0', '0', '0', '17482378171320555.jpg||product-1748251809-93463.webp||product-1748251810-42172.webp||product-1752319712-29701.jpg', '95850', '3', '2876', '98726', '0', '98726.00', 'active', '4', '1748237817', '', '', 'Trending||Top Selling', 'women', '', '1,2,3,4,5,13,14,15,16,28,29', ''),
(118, '5', '9', '', 'ct24', '', 'Bangles', '10', 'Using existing bangles: Measure the inside diameter of a bangle you already own and compare it to the size charts.\r\nMeasuring your hand:\r\nMake your hand as small as possible, as if you were putting on bangles (bringing your thumb and little finger together).\r\nMeasure the widest part of your hand using a flexible tape measure or a strip of paper and a ruler. This is your hand\'s circumference.\r\nCompare this measurement to the bangle circumference in the charts to find the correct size.', '', '', '28683s237', 'manual', '97500', '', '30', '6', '0', '20', '0', '0', '3', '175256027714945936.webp||175256027818812539.jpg||175256027813141187.jpg', '0', '0', '0', '241515', '230', '241285.00', 'deleted', '5', '1752560278', '', '', '', 'men', '', '60.30 MM,61.90 MM', ''),
(119, '5', '9', '', 'ct24', '', 'Bangles', '10', 'Using existing bangles: Measure the inside diameter of a bangle you already own and compare it to the size charts.\r\nMeasuring your hand:\r\nMake your hand as small as possible, as if you were putting on bangles (bringing your thumb and little finger together).\r\nMeasure the widest part of your hand using a flexible tape measure or a strip of paper and a ruler. This is your hand\'s circumference.\r\nCompare this measurement to the bangle circumference in the charts to find the correct size.', '', '', '28683s237', 'manual', '97980', '', '30', '3', '0', '30', '0', '5000', '3', '175256155818969135.webp||175256156032812514.jpg||175256156076553056.jpg', '0', '0', '0', '278467', '250', '278217.00', 'deleted', '5', '1752561560', '', '', '', 'women', '', '60.30 MM,61.90 MM', ''),
(120, '5', '9', '5', 'ct24', '', 'test', '10', 'test', '', '', '98433', 'manual', '98725', '', '10', '2', '8.00', '0', '0', '0', '0', '175367983926148662.jpg', '0', '0', '0', '78980', '0', '78980.00', 'active', '5', '1753679839', '', '', '', 'men', '', '16.6MM', ''),
(121, '5', '10', '', 'ct24', '', 'test', '12', 'lore', '', '', '7856355', 'manual', '97860', '', '12', '2', '10.00', '0', '0', '0', '0', '175368341248838780.jpg', '0', '0', '0', '97860', '0', '97860.00', 'active', '5', '1753683412', '', '', '', 'men', '', '16.6MM', ''),
(122, '6', '10', '', '', '50', 'test', '10', 'test', '', '', '98456', 'manual', '', '1155', '0', '0', '0.00', '0', '0', '0', '3', '175368411562811243.jpg', '0', '0', '0', '0', '0', '0', 'active', '5', '1753684115', '', '', 'Trending', '', 'product-1753684115-19829.jpg', '', 'size_guide-1753684115-17154.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_gold_other_price_det`
--

CREATE TABLE `product_gold_other_price_det` (
  `product_gold_other_price_det_id` int(11) NOT NULL,
  `product_gold_id` text DEFAULT NULL,
  `other_desc_det` text DEFAULT NULL,
  `other_amt_det` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_gold_other_price_det`
--

INSERT INTO `product_gold_other_price_det` (`product_gold_other_price_det_id`, `product_gold_id`, `other_desc_det`, `other_amt_det`) VALUES
(1, '1', '', '0'),
(2, '2', '', '0'),
(3, '3', '', '0'),
(4, '4', '', '0'),
(5, '5', '', '0'),
(6, '6', '', '0'),
(7, '7', '', '0'),
(8, '8', '', '0'),
(9, '9', '', '0'),
(10, '10', '', '0'),
(11, '11', '', '0'),
(12, '12', '', '0'),
(13, '13', '', '0'),
(14, '14', '', '0'),
(15, '15', '', '0'),
(16, '16', '', '0'),
(17, '17', '', '0'),
(18, '18', '', '0'),
(19, '19', '', '0'),
(20, '20', '', '0'),
(21, '21', '', '0'),
(22, '22', '', '200'),
(23, '23', '', '0'),
(24, '24', '', '0'),
(25, '25', '', '0'),
(26, '26', '', '0'),
(27, '27', '', '0'),
(28, '28', '', '0'),
(29, '29', '', '0'),
(30, '30', '', '0'),
(31, '31', '10', '0'),
(32, '32', '', '0'),
(33, '33', '', '0'),
(34, '34', '', '0'),
(35, '35', '', '0'),
(36, '36', '', '0'),
(37, '37', '', '0'),
(38, '38', '', '0'),
(39, '39', '', '0'),
(40, '40', '', '0'),
(41, '41', '', '0'),
(42, '42', '', '0'),
(43, '43', '', ''),
(44, '44', '', '0'),
(45, '45', '', '0'),
(46, '46', '', '0'),
(47, '47', '', '0'),
(48, '48', '', '0'),
(49, '49', '', '0'),
(50, '50', '', '0'),
(51, '51', '', '1800'),
(52, '52', '', '0'),
(53, '53', '', '0'),
(54, '54', '', '0'),
(55, '55', '', '0'),
(56, '56', '', '0'),
(57, '57', '', '0'),
(58, '58', '', '0'),
(59, '59', '', '0'),
(60, '60', '', '0'),
(61, '61', '', '0'),
(62, '62', '', '0'),
(63, '63', '', '0'),
(64, '64', '', '0'),
(65, '65', '', '0'),
(66, '66', '', '0'),
(67, '67', '', '0'),
(68, '68', '', '0'),
(69, '69', '', '0'),
(70, '70', '', '0'),
(71, '71', '', '0'),
(72, '72', '', '0'),
(73, '73', '', '0'),
(74, '74', '', '0'),
(75, '75', '', '0'),
(76, '76', '', '0'),
(77, '77', '', '0'),
(78, '78', '', '0'),
(79, '79', '', '0'),
(80, '80', '', '0'),
(81, '81', '', '0'),
(82, '82', '', '0'),
(83, '83', '', '0'),
(84, '84', '', '0'),
(85, '85', '', '0'),
(86, '86', '', '0'),
(87, '87', '', '0'),
(88, '88', '', '0'),
(89, '89', '', '0'),
(90, '90', '', '0'),
(91, '91', '', '0'),
(92, '92', '', '0'),
(93, '93', '', '0'),
(94, '94', '', '0'),
(95, '95', '', '0'),
(96, '96', '', '0'),
(97, '97', '', '0'),
(98, '98', '', '0'),
(99, '99', '', '0'),
(100, '100', '', '0'),
(101, '101', '', '0'),
(102, '102', '', '0'),
(103, '103', '', '0'),
(104, '104', '', '0'),
(105, '105', '', '0'),
(106, '106', '', '0'),
(107, '107', '', '0'),
(108, '108', '', '0'),
(109, '109', '', '0'),
(110, '110', '', '0'),
(111, '111', '', '0'),
(112, '112', '', '0'),
(113, '113', '', '0'),
(114, '114', '', '0'),
(115, '115', '', '0'),
(116, '116', '', '0'),
(117, '117', '', '0'),
(0, '118', '', '0'),
(0, '119', '', '0'),
(0, '119', '', '0'),
(0, '119', '', '0'),
(0, '120', '', '0'),
(0, '121', '', '0'),
(0, '122', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product_group`
--

CREATE TABLE `product_group` (
  `product_group_id` int(11) NOT NULL,
  `product_group_name` text NOT NULL,
  `product_group_image` text NOT NULL,
  `product_group_details` text NOT NULL,
  `group_category` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_group`
--

INSERT INTO `product_group` (`product_group_id`, `product_group_name`, `product_group_image`, `product_group_details`, `group_category`, `status`, `entry_by`, `entry_time`) VALUES
(7, 'Ear Ring', '', '\'\'', '5', 'deleted', '4', '1604740642'),
(8, 'EAR RING', 'product_group-1624858399-23227.png', '\'details\\r\\n\'', '5', 'deactivated', '4', '1604740843'),
(9, 'BANGLES', 'product_group-1624858414-21079.png', '\'\'', '5', 'active', '4', '1604743225'),
(10, 'FINGER RING', 'product_group-1624858427-20198.png', '\'\'', '5', 'active', '4', '1604744821'),
(11, 'CHAIN', 'product_group-1624858438-81848.png', '\'\'', '5', 'active', '4', '1604745055'),
(12, 'CHAIN PENDANT', 'product_group-1737612777-59143.avif', '\'\'', '5', 'active', '4', '1604745148'),
(13, 'NECKLACE', 'product_group-1624858464-2979.png', '\'\'', '5', 'active', '4', '1604745228'),
(14, 'KANGAN', 'product_group-1604745414-71419.jpg', '\'\'', '5', 'deleted', '4', '1604745414'),
(15, 'MANGALSUTRA', 'product_group-1737530210-7053.avif', '\'\'', '5', 'active', '4', '1604745465'),
(16, 'MANGALSUTRA PENDANT', '', '\'\'', '5', 'deleted', '4', '1604745493'),
(17, 'MANGALSUTRA PENDANT', 'product_group-1604745542-88941.jpg', '\'\'', '5', 'active', '4', '1604745542'),
(18, 'NATH', 'product_group-1737530157-60578.avif', '\'\'', '5', 'active', '4', '1604745583'),
(19, 'FINGER RING', 'product_group-1624858525-96903.png', '\'\'', '6', 'active', '4', '1604747639'),
(20, 'BRACELET', 'product_group-1624858548-15237.png', '\'\'', '6', 'active', '4', '1604748379'),
(21, 'CHALLA', 'product_group-1624858571-45916.png', '\'\'', '6', 'active', '4', '1604748831'),
(22, 'COIN', 'product_group-1624858589-9533.png', '\'\'', '6', 'active', '4', '1604748915'),
(23, 'PENDANT', 'product_group-1624858616-74271.png', '\'\'', '6', 'active', '4', '1604749341'),
(24, 'SILVER UTENSILS', 'product_group-1624858671-54879.png', '\'\'', '6', 'active', '4', '1604749602'),
(25, 'POOJA SAMAN', 'product_group-1604749871-33614.jpg', '\'\'', '6', 'active', '4', '1604749871'),
(26, 'PAYAL', 'product_group-1604750407-6621.jpg', '\'\'', '6', 'active', '4', '1604750407'),
(27, 'MURTI', 'product_group-1604750877-47884.jpg', '\'\'', '6', 'active', '4', '1604750877'),
(28, 'SILVER EAR RINGS', 'product_group-1604751152-98807.jpg', '\'\'', '6', 'active', '4', '1604751152'),
(29, 'SILVER ORNAMENTS', 'product_group-1604751424-25452.jpg', '\'\'', '6', 'active', '4', '1604751424'),
(30, 'DIAMOND PENDANT', 'product_group-1624858694-912.png', '\'\'', '8', 'active', '4', '1604752059'),
(31, 'DIAMOND FINGER RING', 'product_group-1624858711-28785.png', '\'\'', '8', 'active', '4', '1604752894'),
(32, 'DIAMOND TOPS', 'product_group-1624858726-89351.png', '\'\'', '8', 'active', '4', '1604753127'),
(33, 'DIAMOND BANGLES', 'product_group-1624858747-56166.png', '\'\'', '8', 'active', '4', '1604753328'),
(34, 'DIAMOND NECKLACE', 'product_group-1604753494-84787.jpg', '\'\'', '8', 'deleted', '4', '1604753494'),
(35, 'DIAMOND NECKLACE', 'product_group-1624858763-28231.png', '\'\'', '8', 'active', '4', '1604753774'),
(36, 'DIAMOND BRACELET', 'product_group-1624858779-16495.png', '\'\'', '8', 'active', '4', '1604754371'),
(37, 'DIAMOND MANGALSUTRA', 'product_group-1604754819-15765.jpg', '\'\'', '8', 'deleted', '4', '1604754821'),
(38, 'COIN', '', '\'\'', '5', 'deleted', '4', '1604912539'),
(39, 'COIN', 'product_group-1737529479-94897.avif', '\'\'', '5', 'active', '4', '1604912834'),
(40, 'BRACELET', 'product_group-1604920692-19775.jpg', '\'\'', '5', 'active', '4', '1604920692'),
(41, 'CHAIN', 'product_group-1605094727-75614.jpg', '\'\'', '6', 'active', '4', '1605094727'),
(42, 'DIAMOND NOSE PIN', 'product_group-1605097020-58716.jpg', '\'\'', '8', 'active', '4', '1605097020'),
(43, 'DIAMOND MANGALSUTRA', 'product_group-1605097772-47328.jpg', '\'\'', '8', 'active', '4', '1605097772'),
(44, 'BICHHIYA', 'product_group-1605788359-48648.jpg', '\'\'', '6', 'active', '4', '1605788359'),
(45, 'JODVE', 'product_group-1737530749-89626.avif', '\'\'', '6', 'active', '4', '1605788450'),
(46, 'MANGALSUTRA', 'product_group-1605793171-76015.jpg', '\'\'', '6', 'active', '4', '1605793071'),
(47, 'NOSE PIN', 'product_group-1605793513-60976.jpg', '\'\'', '6', 'active', '4', '1605793513'),
(48, 'NECKLACE', 'product_group-1740147573-42916.jpg', '\'\'', '6', 'active', '4', '1605793653'),
(49, 'ATTARDANI', 'product_group-1613471943-25190.jpg', '\'\'', '6', 'active', '4', '1613471943'),
(50, 'RAKHI ', 'product_group-1628594150-44858.jpeg', '\'RAKSHABANDHAN\'', '6', 'deleted', '4', '1628594150'),
(51, 'RAKHI ', 'product_group-1628594865-53876.jpeg', '\'Rs 280\'', '9', 'deleted', '4', '1628594865'),
(52, 'RAKHI ', 'product_group-1628595105-60550.jpeg', '\'Rakshabandhan Special gold & Silver Rakhi\'', '9', 'deleted', '4', '1628595105'),
(53, 'RAKHI ', 'product_group-1628595564-49466.jpeg', '\'Rakshabandhan Special Silver & Gold Rakhi\'', '9', 'deleted', '4', '1628595564'),
(54, 'RAKHI ', 'product_group-1628595677-36655.jpeg', '\'Rakshabandhan Special Silver & Gold Rakhi\'', '6', 'deleted', '4', '1628595677'),
(55, 'RAKHI ', 'product_group-1628596012-66786.jpeg', '\'Rakshabandhan Special Silver & Gold Rakhi\'', '9', 'deleted', '4', '1628596012'),
(56, 'RAKHI ', 'product_group-1753530938-39095.png', '\'Rakshabandhan Special Silver & Gold Rakhi\'', '6', 'active', '4', '1628596594'),
(57, 'neckleess', 'product_group-1753529711-21825.png', '\'\'', '5', 'active', '4', '1629880193'),
(58, 'KRISHNA JANMASHTAMI ', 'product_group-1753530811-35639.png', '\'KRISHNA JANMAASHTAMI SPECIAL PRODUCT\\r\\n\'', '6', 'active', '4', '1630132139'),
(59, 'GOLD COIN', 'product_group-1632737926-65103.jpg', '\'A gold coin is a coin that is made mostly or entirely of gold. ... Gold has been used as money for many reasons. It is fungible, with a low spread between the prices to buy and sell. Gold is also easily transportable, as it has a high value-to-weight ratio, compared to other commodities, such as silver.\'', '11', 'active', '4', '1632737926'),
(60, 'SILVER COIN', 'product_group-1632738002-90857.jpg', '\'A silver coin is fungible: that is, one unit or piece must be equivalent to another. A silver coin has a certain weight, or measure, to be verifiably countable. A silver coin is long lasting and durable. A silver coin is not subject to decay.\'', '11', 'active', '4', '1632738002'),
(61, 'Cufflinks', '', '\'\'', '6', 'deleted', '4', '1686983301'),
(62, ' CUFFLINKS', 'product_group-1753530139-44090.png', '\' Cufflinks  are used to put on shirts\'', '6', 'active', '4', '1686983529'),
(63, 'Showpiece', 'product_group-1753530182-84932.png', '\'Can  gift to someone  or to decorate house\'', '6', 'active', '4', '1686991793'),
(64, 'Watches', 'product_group-1753530414-69627.png', '\'Silver Watches \'', '6', 'active', '4', '1687154966'),
(65, 'test', 'product_group-1737617799-63208.png', '\'test\'', '5', 'deleted', '4', '1737617799'),
(66, 'ABCD', 'product_group-1739183901-7876.jpg', '\'Testing\'', '5', 'deleted', '4', '1739183901'),
(67, 'ABCD', 'product_group-1753679632-82340.jpg', '\'test\'', '5', 'deleted', '5', '1753679632');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

CREATE TABLE `product_review` (
  `product_review_id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `prod_id` text DEFAULT NULL,
  `text` text DEFAULT NULL,
  `rating` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_review`
--

INSERT INTO `product_review` (`product_review_id`, `name`, `prod_id`, `text`, `rating`, `user_id`, `status`, `entry_time`, `entry_date`) VALUES
(1, 'Rahul  Misal', '61', 'Nice Product', '5', '22', 'active', '1615005358', '2021-03-06'),
(2, 'Rahul  Misal', '36', 'good\r\n', '5', '22', 'active', '1624869171', '2021-06-28'),
(3, 'Akshay Nikam', '35', 'Good Quality', '5', '27', 'active', '1627534419', '2021-07-29'),
(4, 'Saichhaya Rahane', '349', 'Nice', '5', '654', 'active', '1663062618', '2022-09-13'),
(5, 'Saichhaya Rahane', '258', 'good', '5', '654', 'active', '1663262845', '2022-09-15'),
(6, 'Sudhir Dolas', '340', 'Very nice design ', '5', '246', 'active', '1667739049', '2022-11-06'),
(7, 'Abhijeet Ikhe', '466', 'Good', '5', '916', 'active', '1675935736', '2023-02-09'),
(8, 'Nilesh Borkar', '489', 'Great', '5', '23', 'active', '1731145367', '2024-11-09'),
(9, 'khushaboo sonawane', '510', 'very nice product', '5', '1680', 'active', '1731153045', '2024-11-09'),
(10, 'khushaboo sonawane', '513', 'Nice Product', '5', '1680', 'active', '1731490393', '2024-11-13'),
(11, 'Tejas Tathe', '591', 'Its Realy Good Product', '5', '1589', 'active', '1736226743', '2025-01-07'),
(12, 'Manoj More', '4', 'Good product', '5', '2', 'active', '1743244235', '2025-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `product_visiter`
--

CREATE TABLE `product_visiter` (
  `product_visiter_id` int(11) NOT NULL,
  `prod_id` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `visit_date` text DEFAULT NULL,
  `ip_address` text DEFAULT NULL,
  `visit_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_visiter`
--

INSERT INTO `product_visiter` (`product_visiter_id`, `prod_id`, `user_id`, `visit_date`, `ip_address`, `visit_time`) VALUES
(1, '1', '1589', '2025-02-10', '103.38.68.225', '1739185636'),
(2, '1', '1589', '2025-02-10', '152.56.0.46', '1739188396'),
(3, '1', '1', '2025-02-10', '152.56.0.46', '1739188483'),
(4, '3', '1750', '2025-02-10', '117.223.153.65', '1739192525'),
(5, '3', '0', '2025-02-10', '203.192.235.169', '1739192668'),
(6, '1', '0', '2025-02-10', '106.216.245.40', '1739193475'),
(7, '5', '0', '2025-02-10', '106.216.251.40', '1739193867'),
(8, '1', '1360', '2025-02-11', '203.194.97.177', '1739248072'),
(9, '4', '1750', '2025-02-18', '203.192.235.169', '1739862212'),
(10, '12', '1750', '2025-02-20', '203.192.235.169', '1740045451'),
(11, '12', '0', '2025-02-20', '203.192.235.169', '1740047052'),
(12, '10', '1750', '2025-02-20', '203.192.235.169', '1740061028'),
(13, '356', '0', '2025-02-21', '40.77.167.54', '1740108088'),
(14, '15', '1360', '2025-02-21', '103.44.106.165', '1740111016'),
(15, '14', '0', '2025-02-21', '103.44.106.165', '1740111063'),
(16, '12', '0', '2025-02-21', '103.44.106.165', '1740111077'),
(17, '17', '0', '2025-02-21', '103.44.106.165', '1740111811'),
(18, '17', '0', '2025-02-21', '14.195.45.198', '1740132911'),
(19, '16', '0', '2025-02-21', '106.78.166.215', '1740140215'),
(20, '22', '0', '2025-02-21', '106.78.166.215', '1740140580'),
(21, '4', '0', '2025-02-21', '106.78.166.215', '1740140683'),
(22, '15', '0', '2025-02-21', '106.78.166.215', '1740140740'),
(23, '23', '0', '2025-02-21', '106.78.166.215', '1740141877'),
(24, '29', '0', '2025-02-21', '106.78.166.215', '1740147862'),
(25, '31', '0', '2025-02-21', '106.78.166.215', '1740147962'),
(26, '24', '0', '2025-02-21', '203.192.235.169', '1740149224'),
(27, '12', '0', '2025-02-21', '203.192.235.169', '1740150473'),
(28, '34', '0', '2025-02-21', '203.192.235.169', '1740151443'),
(29, '8', '0', '2025-02-21', '106.78.166.215', '1740151571'),
(30, '33', '0', '2025-02-21', '66.249.79.160', '1740154641'),
(31, '7', '0', '2025-02-21', '66.249.79.173', '1740154643'),
(32, '34', '0', '2025-02-21', '66.249.79.173', '1740154646'),
(33, '4', '0', '2025-02-21', '66.249.79.172', '1740154649'),
(34, '1', '0', '2025-02-21', '3.15.188.114', '1740155461'),
(35, '34', '0', '2025-02-22', '106.220.79.177', '1740192003'),
(36, '4', '0', '2025-02-22', '106.220.79.177', '1740198924'),
(37, '33', '0', '2025-02-22', '195.2.81.242', '1740198994'),
(38, '13', '0', '2025-02-22', '106.220.79.177', '1740199698'),
(39, '33', '0', '2025-02-22', '3.19.238.155', '1740209320'),
(40, '7', '0', '2025-02-22', '3.141.18.167', '1740209720'),
(41, '4', '0', '2025-02-22', '18.119.133.172', '1740210548'),
(42, '34', '0', '2025-02-22', '3.137.187.85', '1740210818'),
(43, '35', '0', '2025-02-22', '106.77.54.58', '1740214617'),
(44, '38', '1750', '2025-02-22', '117.223.153.65', '1740224015'),
(45, '36', '1750', '2025-02-22', '117.223.153.65', '1740232489'),
(46, '42', '1750', '2025-02-22', '117.223.153.65', '1740232596'),
(47, '39', '1750', '2025-02-22', '117.223.153.65', '1740233256'),
(48, '35', '1750', '2025-02-22', '117.223.153.65', '1740233322'),
(49, '10', '0', '2025-02-22', '66.249.79.101', '1740235344'),
(50, '28', '0', '2025-02-22', '3.145.215.54', '1740239794'),
(51, '24', '0', '2025-02-22', '3.139.86.170', '1740240052'),
(52, '8', '0', '2025-02-22', '3.144.84.91', '1740240111'),
(53, '26', '0', '2025-02-22', '13.58.99.179', '1740240166'),
(54, '14', '0', '2025-02-22', '3.138.142.146', '1740240326'),
(55, '32', '0', '2025-02-22', '18.218.67.239', '1740240343'),
(56, '10', '0', '2025-02-22', '3.18.110.214', '1740240759'),
(57, '11', '0', '2025-02-22', '3.139.236.174', '1740240895'),
(58, '9', '0', '2025-02-22', '3.137.215.122', '1740240918'),
(59, '30', '0', '2025-02-22', '3.149.235.190', '1740240973'),
(60, '15', '0', '2025-02-22', '18.190.160.135', '1740241072'),
(61, '13', '0', '2025-02-22', '3.18.110.214', '1740241470'),
(62, '12', '0', '2025-02-22', '3.145.158.111', '1740241712'),
(63, '27', '0', '2025-02-22', '3.135.218.210', '1740241849'),
(64, '33', '0', '2025-02-23', '80.85.245.37', '1740284185'),
(65, '47', '0', '2025-02-23', '106.78.167.54', '1740285724'),
(66, '51', '0', '2025-02-23', '106.78.167.54', '1740285765'),
(67, '33', '0', '2025-02-23', '106.78.167.54', '1740286592'),
(68, '34', '0', '2025-02-23', '106.78.167.54', '1740286605'),
(69, '4', '0', '2025-02-23', '106.79.178.122', '1740312095'),
(70, '52', '1750', '2025-02-23', '203.192.235.169', '1740315915'),
(71, '51', '0', '2025-02-23', '203.192.235.169', '1740315953'),
(72, '4', '0', '2025-02-23', '203.192.235.169', '1740316036'),
(73, '7', '0', '2025-02-23', '203.192.235.169', '1740316052'),
(74, '7', '1750', '2025-02-23', '203.192.235.169', '1740317382'),
(75, '413', '0', '2025-02-24', '40.77.167.73', '1740341539'),
(76, '33', '0', '2025-02-24', '80.85.245.5', '1740350017'),
(77, '59', '0', '2025-02-24', '152.57.5.48', '1740372795'),
(78, '4', '0', '2025-02-24', '103.38.68.4', '1740380515'),
(79, '7', '0', '2025-02-24', '103.38.68.4', '1740380539'),
(80, '7', '0', '2025-02-24', '223.233.84.162', '1740382350'),
(81, '33', '1', '2025-02-24', '202.148.63.106', '1740390946'),
(82, '12', '1750', '2025-02-24', '203.192.235.169', '1740395945'),
(83, '34', '1750', '2025-02-24', '203.192.235.169', '1740396363'),
(84, '11', '1750', '2025-02-24', '203.192.235.169', '1740396381'),
(85, '33', '0', '2025-02-24', '202.148.63.106', '1740397821'),
(86, '11', '0', '2025-02-24', '223.233.84.162', '1740398542'),
(87, '11', '0', '2025-02-24', '173.252.107.113', '1740398556'),
(88, '11', '0', '2025-02-24', '69.171.231.113', '1740398557'),
(89, '11', '0', '2025-02-24', '69.171.231.10', '1740398558'),
(90, '11', '0', '2025-02-24', '173.252.107.114', '1740398559'),
(91, '11', '0', '2025-02-24', '66.220.149.14', '1740398568'),
(92, '34', '1750', '2025-02-24', '117.223.153.65', '1740400040'),
(93, '53', '1750', '2025-02-24', '117.223.153.65', '1740404510'),
(94, '510', '0', '2025-02-25', '40.77.167.73', '1740421880'),
(95, '34', '1750', '2025-02-25', '203.192.235.169', '1740492265'),
(96, '454', '0', '2025-02-26', '40.77.167.57', '1740534037'),
(97, '4', '5', '2025-02-26', '223.233.80.114', '1740560847'),
(98, '412', '0', '2025-02-26', '213.180.203.195', '1740563844'),
(99, '11', '0', '2025-02-26', '173.252.107.113', '1740571846'),
(100, '11', '0', '2025-02-26', '173.252.107.6', '1740571847'),
(101, '11', '0', '2025-02-26', '173.252.107.1', '1740571848'),
(102, '11', '0', '2025-02-26', '173.252.107.115', '1740571849'),
(103, '11', '5', '2025-02-26', '223.233.80.114', '1740571868'),
(104, '7', '5', '2025-02-26', '223.233.80.114', '1740571900'),
(105, '7', '0', '2025-02-26', '203.192.235.169', '1740584323'),
(106, '7', '6', '2025-02-26', '203.192.235.169', '1740584454'),
(107, '7', '0', '2025-02-27', '152.59.61.41', '1740638965'),
(108, '43', '0', '2025-02-27', '152.56.5.241', '1740644422'),
(109, '44', '0', '2025-02-27', '152.56.5.241', '1740644440'),
(110, '47', '0', '2025-02-27', '152.56.5.241', '1740644452'),
(111, '15', '0', '2025-02-27', '152.56.5.241', '1740644520'),
(112, '454', '0', '2025-02-27', '40.77.167.131', '1740674756'),
(113, '4', '0', '2025-02-27', '40.77.167.45', '1740680957'),
(114, '412', '0', '2025-02-28', '40.77.167.3', '1740682981'),
(115, '34', '0', '2025-02-28', '57.141.5.5', '1740699652'),
(116, '33', '0', '2025-02-28', '40.77.167.42', '1740707860'),
(117, '34', '0', '2025-02-28', '152.59.61.218', '1740734681'),
(118, '7', '0', '2025-02-28', '106.221.217.235', '1740752607'),
(119, '53', '0', '2025-02-28', '203.192.235.169', '1740754381'),
(120, '53', '8', '2025-02-28', '203.192.235.169', '1740754746'),
(121, '34', '8', '2025-02-28', '203.192.235.169', '1740754775'),
(122, '46', '8', '2025-02-28', '203.192.235.169', '1740754853'),
(123, '34', '0', '2025-03-01', '152.59.6.57', '1740806246'),
(124, '65', '1750', '2025-03-01', '203.192.235.169', '1740809932'),
(125, '65', '0', '2025-03-01', '94.103.87.196', '1740814192'),
(126, '413', '0', '2025-03-01', '40.77.167.7', '1740821679'),
(127, '34', '0', '2025-03-01', '106.220.237.53', '1740839682'),
(128, '65', '0', '2025-03-02', '80.85.246.214', '1740880418'),
(129, '52', '0', '2025-03-02', '20.171.207.54', '1740889310'),
(130, '58', '0', '2025-03-02', '20.171.207.54', '1740889589'),
(131, '4', '0', '2025-03-02', '20.171.207.54', '1740889884'),
(132, '34', '0', '2025-03-02', '20.171.207.54', '1740889924'),
(133, '50', '0', '2025-03-02', '20.171.207.54', '1740889930'),
(134, '43', '0', '2025-03-02', '20.171.207.54', '1740889944'),
(135, '7', '0', '2025-03-02', '20.171.207.54', '1740889947'),
(136, '9', '0', '2025-03-02', '20.171.207.54', '1740889954'),
(137, '63', '0', '2025-03-02', '20.171.207.54', '1740889957'),
(138, '8', '0', '2025-03-02', '20.171.207.54', '1740889960'),
(139, '26', '0', '2025-03-02', '20.171.207.54', '1740889964'),
(140, '60', '0', '2025-03-02', '20.171.207.54', '1740889968'),
(141, '15', '0', '2025-03-02', '20.171.207.54', '1740889970'),
(142, '14', '0', '2025-03-02', '20.171.207.54', '1740889971'),
(143, '13', '0', '2025-03-02', '20.171.207.54', '1740889973'),
(144, '44', '0', '2025-03-02', '20.171.207.54', '1740889975'),
(145, '61', '0', '2025-03-02', '20.171.207.54', '1740889978'),
(146, '12', '0', '2025-03-02', '20.171.207.54', '1740889980'),
(147, '45', '0', '2025-03-02', '20.171.207.54', '1740889982'),
(148, '54', '0', '2025-03-02', '20.171.207.54', '1740889983'),
(149, '51', '0', '2025-03-02', '20.171.207.54', '1740889984'),
(150, '48', '0', '2025-03-02', '20.171.207.54', '1740889986'),
(151, '53', '0', '2025-03-02', '20.171.207.54', '1740889989'),
(152, '46', '0', '2025-03-02', '20.171.207.54', '1740889990'),
(153, '11', '0', '2025-03-02', '20.171.207.54', '1740890005'),
(154, '10', '0', '2025-03-02', '20.171.207.54', '1740890007'),
(155, '32', '0', '2025-03-02', '20.171.207.54', '1740890008'),
(156, '57', '0', '2025-03-02', '20.171.207.54', '1740890009'),
(157, '59', '0', '2025-03-02', '20.171.207.54', '1740890010'),
(158, '28', '0', '2025-03-02', '20.171.207.54', '1740890011'),
(159, '24', '0', '2025-03-02', '20.171.207.54', '1740890012'),
(160, '49', '0', '2025-03-02', '20.171.207.54', '1740890014'),
(161, '56', '0', '2025-03-02', '20.171.207.54', '1740890015'),
(162, '47', '0', '2025-03-02', '20.171.207.54', '1740890016'),
(163, '27', '0', '2025-03-02', '20.171.207.54', '1740890034'),
(164, '64', '0', '2025-03-02', '20.171.207.54', '1740890036'),
(165, '65', '0', '2025-03-02', '20.171.207.54', '1740890037'),
(166, '62', '0', '2025-03-02', '20.171.207.54', '1740890038'),
(167, '30', '0', '2025-03-02', '20.171.207.54', '1740890039'),
(168, '55', '0', '2025-03-02', '20.171.207.54', '1740890040'),
(169, '4', '0', '2025-03-03', '203.192.235.169', '1740985121'),
(170, '65', '0', '2025-03-03', '212.34.135.52', '1741003254'),
(171, '510', '0', '2025-03-03', '40.77.167.7', '1741008021'),
(172, '416', '0', '2025-03-04', '40.77.167.154', '1741030695'),
(173, '456', '0', '2025-03-04', '40.77.167.54', '1741035043'),
(174, '65', '0', '2025-03-04', '80.85.245.241', '1741086347'),
(175, '34', '0', '2025-03-04', '152.57.90.39', '1741092760'),
(176, '34', '0', '2025-03-04', '192.178.8.32', '1741092767'),
(177, '34', '0', '2025-03-04', '74.125.212.70', '1741092768'),
(178, '34', '0', '2025-03-04', '74.125.212.71', '1741092769'),
(179, '7', '0', '2025-03-04', '152.57.90.39', '1741092889'),
(180, '7', '0', '2025-03-04', '1.187.63.154', '1741106687'),
(181, '7', '0', '2025-03-05', '157.55.39.62', '1741178307'),
(182, '65', '0', '2025-03-05', '80.85.245.250', '1741178726'),
(183, '34', '0', '2025-03-05', '172.225.219.41', '1741198927'),
(184, '33', '0', '2025-03-06', '57.141.5.7', '1741202474'),
(185, '4', '0', '2025-03-06', '51.37.114.144', '1741209049'),
(186, '34', '0', '2025-03-06', '159.69.180.231', '1741248084'),
(187, '4', '0', '2025-03-06', '159.69.180.231', '1741248091'),
(188, '454', '0', '2025-03-06', '40.77.167.14', '1741268710'),
(189, '412', '0', '2025-03-06', '40.77.167.7', '1741269054'),
(190, '4', '0', '2025-03-06', '57.141.5.6', '1741285133'),
(191, '7', '0', '2025-03-06', '57.141.5.23', '1741285375'),
(192, '356', '0', '2025-03-07', '40.77.167.149', '1741287183'),
(193, '65', '0', '2025-03-07', '91.201.115.174', '1741292895'),
(194, '62', '0', '2025-03-07', '57.141.5.11', '1741310701'),
(195, '4', '0', '2025-03-07', '152.57.38.223', '1741315346'),
(196, '64', '0', '2025-03-07', '57.141.5.11', '1741318885'),
(197, '413', '0', '2025-03-07', '40.77.167.48', '1741332226'),
(198, '34', '0', '2025-03-07', '18.234.61.35', '1741360846'),
(199, '7', '0', '2025-03-07', '18.234.61.35', '1741360861'),
(200, '27', '0', '2025-03-07', '57.141.5.13', '1741361411'),
(201, '4', '0', '2025-03-07', '18.234.61.35', '1741361438'),
(202, '63', '0', '2025-03-07', '57.141.5.19', '1741363348'),
(203, '7', '0', '2025-03-07', '85.208.98.229', '1741367283'),
(204, '34', '0', '2025-03-07', '85.208.98.229', '1741367287'),
(205, '4', '0', '2025-03-07', '85.208.98.229', '1741367317'),
(206, '15', '0', '2025-03-08', '57.141.5.24', '1741391118'),
(207, '65', '0', '2025-03-08', '80.85.245.37', '1741396977'),
(208, '4', '0', '2025-03-08', '106.213.84.32', '1741407838'),
(209, '53', '0', '2025-03-08', '40.77.167.72', '1741418339'),
(210, '50', '0', '2025-03-08', '40.77.167.42', '1741419191'),
(211, '47', '0', '2025-03-08', '40.77.167.27', '1741420659'),
(212, '455', '0', '2025-03-08', '40.77.167.78', '1741421414'),
(213, '28', '0', '2025-03-08', '40.77.167.158', '1741422192'),
(214, '26', '0', '2025-03-08', '40.77.167.9', '1741422919'),
(215, '24', '0', '2025-03-08', '40.77.167.241', '1741423729'),
(216, '12', '0', '2025-03-08', '40.77.167.79', '1741425957'),
(217, '11', '0', '2025-03-08', '40.77.167.22', '1741426682'),
(218, '10', '0', '2025-03-08', '40.77.167.23', '1741427355'),
(219, '12', '0', '2025-03-08', '57.141.5.9', '1741435596'),
(220, '58', '0', '2025-03-08', '40.77.167.48', '1741446798'),
(221, '54', '0', '2025-03-08', '57.141.0.7', '1741451172'),
(222, '8', '0', '2025-03-08', '40.77.167.54', '1741455571'),
(223, '7', '0', '2025-03-08', '40.77.167.35', '1741457143'),
(224, '65', '0', '2025-03-08', '80.85.246.144', '1741457920'),
(225, '60', '0', '2025-03-09', '40.77.167.255', '1741462398'),
(226, '59', '0', '2025-03-09', '40.77.167.247', '1741464295'),
(227, '57', '0', '2025-03-09', '40.77.167.254', '1741465787'),
(228, '56', '0', '2025-03-09', '40.77.167.24', '1741467290'),
(229, '55', '0', '2025-03-09', '40.77.167.65', '1741468191'),
(230, '34', '0', '2025-03-09', '203.192.235.169', '1741512318'),
(231, '13', '0', '2025-03-09', '207.46.13.154', '1741539456'),
(232, '27', '0', '2025-03-09', '207.46.13.78', '1741541408'),
(233, '30', '0', '2025-03-09', '207.46.13.36', '1741543712'),
(234, '32', '0', '2025-03-10', '40.77.167.57', '1741546626'),
(235, '45', '0', '2025-03-10', '40.77.167.58', '1741549541'),
(236, '28', '0', '2025-03-10', '57.141.0.27', '1741551397'),
(237, '51', '0', '2025-03-10', '40.77.167.154', '1741551969'),
(238, '48', '0', '2025-03-10', '207.46.13.154', '1741555933'),
(239, '65', '0', '2025-03-10', '212.34.140.200', '1741559229'),
(240, '26', '0', '2025-03-10', '57.141.0.8', '1741598420'),
(241, '61', '0', '2025-03-10', '57.141.0.16', '1741610945'),
(242, NULL, '0', '2025-03-11', '206.198.216.100', '1741641031'),
(243, '52', '0', '2025-03-11', '157.55.39.6', '1741681630'),
(244, '61', '0', '2025-03-11', '157.55.39.49', '1741682662'),
(245, '65', '0', '2025-03-11', '80.85.245.37', '1741707930'),
(246, '49', '0', '2025-03-11', '207.46.13.130', '1741708873'),
(247, '54', '0', '2025-03-11', '40.77.167.73', '1741710436'),
(248, '4', '0', '2025-03-12', '152.57.51.107', '1741754060'),
(249, '7', '0', '2025-03-12', '18.234.61.35', '1741755681'),
(250, '34', '0', '2025-03-12', '223.233.81.123', '1741764037'),
(251, NULL, '0', '2025-03-12', '136.227.188.27', '1741768958'),
(252, '34', '0', '2025-03-12', '18.234.61.35', '1741773218'),
(253, '4', '0', '2025-03-12', '18.234.61.35', '1741774441'),
(254, '43', '0', '2025-03-12', '40.77.167.116', '1741785913'),
(255, '34', '0', '2025-03-12', '106.210.244.126', '1741786852'),
(256, '65', '0', '2025-03-13', '80.85.245.128', '1741855357'),
(257, '510', '0', '2025-03-13', '157.55.39.63', '1741883061'),
(258, '14', '0', '2025-03-14', '40.77.167.77', '1741898402'),
(259, '34', '0', '2025-03-14', '40.77.167.159', '1741900215'),
(260, '54', '0', '2025-03-14', '40.77.167.131', '1741902228'),
(261, '63', '0', '2025-03-14', '40.77.167.6', '1741906804'),
(262, '65', '0', '2025-03-14', '88.210.11.43', '1741952077'),
(263, '64', '8', '2025-03-14', '203.192.235.169', '1741952715'),
(264, '60', '8', '2025-03-14', '203.192.235.169', '1741952761'),
(265, '7', '0', '2025-03-14', '203.192.235.169', '1741954537'),
(266, '7', '6', '2025-03-14', '203.192.235.169', '1741954575'),
(267, '4', '7', '2025-03-14', '106.220.128.244', '1741955134'),
(268, '34', '0', '2025-03-14', '152.56.4.102', '1741956158'),
(269, '4', '0', '2025-03-14', '152.56.4.102', '1741956186'),
(270, '34', '0', '2025-03-15', '157.90.209.81', '1741979070'),
(271, '4', '0', '2025-03-15', '157.90.209.81', '1741979075'),
(272, '7', '0', '2025-03-15', '157.90.209.81', '1741979080'),
(273, '4', '0', '2025-03-15', '74.80.208.87', '1741987845'),
(274, '7', '0', '2025-03-15', '34.169.177.216', '1742013808'),
(275, '7', '0', '2025-03-15', '223.233.85.79', '1742016270'),
(276, '65', '0', '2025-03-15', '80.85.245.187', '1742021534'),
(277, '63', '0', '2025-03-15', '57.141.6.12', '1742054996'),
(278, '64', '0', '2025-03-15', '57.141.6.4', '1742055236'),
(279, '62', '0', '2025-03-15', '57.141.6.1', '1742055474'),
(280, '27', '0', '2025-03-15', '57.141.6.1', '1742055663'),
(281, '34', '0', '2025-03-15', '57.141.6.12', '1742061670'),
(282, '54', '0', '2025-03-16', '57.141.6.8', '1742064901'),
(283, '65', '0', '2025-03-16', '80.85.245.241', '1742092659'),
(284, '510', '0', '2025-03-16', '40.77.167.243', '1742096863'),
(285, '64', '0', '2025-03-16', '43.135.134.127', '1742127940'),
(286, '34', '0', '2025-03-16', '57.141.6.14', '1742133056'),
(287, '63', '0', '2025-03-16', '57.141.6.19', '1742133395'),
(288, '10', '0', '2025-03-16', '157.90.209.81', '1742134991'),
(289, '11', '0', '2025-03-16', '157.90.209.81', '1742135002'),
(290, '12', '0', '2025-03-16', '157.90.209.81', '1742135012'),
(291, '13', '0', '2025-03-16', '157.90.209.81', '1742135018'),
(292, '14', '0', '2025-03-16', '157.90.209.81', '1742135025'),
(293, '15', '0', '2025-03-16', '157.90.209.81', '1742135036'),
(294, '24', '0', '2025-03-16', '157.90.209.81', '1742135050'),
(295, '26', '0', '2025-03-16', '157.90.209.81', '1742135056'),
(296, '27', '0', '2025-03-16', '157.90.209.81', '1742135061'),
(297, '28', '0', '2025-03-16', '157.90.209.81', '1742135073'),
(298, '30', '0', '2025-03-16', '157.90.209.81', '1742135078'),
(299, '32', '0', '2025-03-16', '157.90.209.81', '1742135088'),
(300, '43', '0', '2025-03-16', '157.90.209.81', '1742135092'),
(301, '44', '0', '2025-03-16', '157.90.209.81', '1742135102'),
(302, '45', '0', '2025-03-16', '157.90.209.81', '1742135110'),
(303, '46', '0', '2025-03-16', '157.90.209.81', '1742135121'),
(304, '47', '0', '2025-03-16', '157.90.209.81', '1742135131'),
(305, '48', '0', '2025-03-16', '157.90.209.81', '1742135138'),
(306, '49', '0', '2025-03-16', '157.90.209.81', '1742135149'),
(307, '50', '0', '2025-03-16', '157.90.209.81', '1742135159'),
(308, '51', '0', '2025-03-16', '157.90.209.81', '1742135167'),
(309, '52', '0', '2025-03-16', '157.90.209.81', '1742135179'),
(310, '53', '0', '2025-03-16', '157.90.209.81', '1742135187'),
(311, '54', '0', '2025-03-16', '157.90.209.81', '1742135196'),
(312, '55', '0', '2025-03-16', '157.90.209.81', '1742135202'),
(313, '56', '0', '2025-03-16', '157.90.209.81', '1742135209'),
(314, '57', '0', '2025-03-16', '157.90.209.81', '1742135218'),
(315, '58', '0', '2025-03-16', '157.90.209.81', '1742135226'),
(316, '59', '0', '2025-03-16', '157.90.209.81', '1742135234'),
(317, '60', '0', '2025-03-16', '157.90.209.81', '1742135245'),
(318, '61', '0', '2025-03-16', '157.90.209.81', '1742135251'),
(319, '62', '0', '2025-03-16', '157.90.209.81', '1742135261'),
(320, '63', '0', '2025-03-16', '157.90.209.81', '1742135276'),
(321, '64', '0', '2025-03-16', '157.90.209.81', '1742135284'),
(322, '65', '0', '2025-03-16', '157.90.209.81', '1742135292'),
(323, '9', '0', '2025-03-16', '157.90.209.81', '1742135307'),
(324, '24', '0', '2025-03-16', '57.141.6.9', '1742138273'),
(325, '64', '0', '2025-03-16', '57.141.6.30', '1742148805'),
(326, '65', '0', '2025-03-17', '80.85.246.214', '1742153169'),
(327, '11', '0', '2025-03-17', '57.141.6.16', '1742154230'),
(328, '27', '0', '2025-03-17', '57.141.6.2', '1742164424'),
(329, '62', '0', '2025-03-17', '57.141.6.14', '1742165382'),
(330, '54', '0', '2025-03-17', '57.141.6.15', '1742166134'),
(331, '8', '0', '2025-03-17', '57.141.6.7', '1742172541'),
(332, '13', '0', '2025-03-17', '57.141.6.24', '1742179928'),
(333, '7', '0', '2025-03-17', '106.195.5.9', '1742191382'),
(334, '7', '0', '2025-03-17', '66.249.82.100', '1742191397'),
(335, '7', '0', '2025-03-17', '66.249.82.103', '1742191402'),
(336, '7', '0', '2025-03-17', '66.249.82.96', '1742191403'),
(337, '12', '0', '2025-03-17', '106.195.5.9', '1742191511'),
(338, '4', '7', '2025-03-17', '152.57.233.155', '1742193258'),
(339, '14', '0', '2025-03-17', '57.141.6.30', '1742194468'),
(340, '356', '0', '2025-03-17', '40.77.167.131', '1742202870'),
(341, '48', '0', '2025-03-17', '57.141.6.2', '1742203814'),
(342, '306', '0', '2025-03-17', '40.77.167.55', '1742205365'),
(343, '9', '0', '2025-03-17', '40.77.167.156', '1742207868'),
(344, '15', '0', '2025-03-18', '40.77.167.5', '1742265938'),
(345, '4', '0', '2025-03-18', '152.56.4.169', '1742267490'),
(346, '9', '0', '2025-03-18', '57.141.0.26', '1742288550'),
(347, '34', '0', '2025-03-18', '165.85.85.239', '1742310800'),
(348, '7', '0', '2025-03-18', '40.77.167.16', '1742315005'),
(349, '55', '0', '2025-03-18', '57.141.0.23', '1742317442'),
(350, '4', '0', '2025-03-18', '152.58.32.248', '1742322214'),
(351, '34', '0', '2025-03-18', '152.58.32.248', '1742322242'),
(352, '412', '0', '2025-03-19', '40.77.167.5', '1742343759'),
(353, '65', '0', '2025-03-19', '80.85.246.214', '1742357618'),
(354, '7', '0', '2025-03-19', '43.135.142.202', '1742358098'),
(355, '7', '0', '2025-03-19', '43.165.65.180', '1742361031'),
(356, '7', '0', '2025-03-19', '43.159.128.237', '1742364892'),
(357, '65', '0', '2025-03-19', '170.106.140.110', '1742366783'),
(358, '34', '0', '2025-03-19', '152.56.5.218', '1742367731'),
(359, '65', '0', '2025-03-19', '152.56.5.218', '1742369575'),
(360, '60', '0', '2025-03-19', '152.56.5.218', '1742369583'),
(361, '60', '0', '2025-03-19', '59.152.121.148', '1742370461'),
(362, '59', '0', '2025-03-19', '59.152.121.148', '1742376640'),
(363, '34', '0', '2025-03-19', '59.152.121.148', '1742385168'),
(364, '', '0', '2025-03-19', '43.131.243.61', '1742392705'),
(365, '65', '0', '2025-03-20', '57.141.0.27', '1742419182'),
(366, '63', '0', '2025-03-20', '57.141.0.27', '1742422855'),
(367, '44', '0', '2025-03-20', '207.46.13.52', '1742431311'),
(368, '46', '0', '2025-03-20', '40.77.167.235', '1742439417'),
(369, '34', '0', '2025-03-20', '57.141.0.2', '1742441299'),
(370, '62', '0', '2025-03-20', '157.55.39.60', '1742444790'),
(371, '34', '0', '2025-03-20', '59.152.121.148', '1742447640'),
(372, '4', '0', '2025-03-20', '59.152.121.148', '1742451273'),
(373, '60', '0', '2025-03-20', '59.152.121.148', '1742451315'),
(374, '45', '0', '2025-03-20', '59.152.121.148', '1742451328'),
(375, '64', '0', '2025-03-20', '59.152.121.148', '1742451329'),
(376, '43', '0', '2025-03-20', '59.152.121.148', '1742451342'),
(377, '60', '0', '2025-03-20', '27.59.109.146', '1742453440'),
(378, '65', '11', '2025-03-20', '27.59.109.146', '1742456773'),
(379, '4', '11', '2025-03-20', '27.59.109.146', '1742457077'),
(380, '34', '11', '2025-03-20', '27.59.109.146', '1742457533'),
(381, '65', '0', '2025-03-20', '88.218.62.29', '1742458058'),
(382, '', '11', '2025-03-20', '27.59.109.146', '1742459196'),
(383, '60', '0', '2025-03-20', '122.172.81.251', '1742461407'),
(384, '55', '0', '2025-03-20', '122.172.81.251', '1742461422'),
(385, '34', '11', '2025-03-20', '59.152.121.148', '1742462601'),
(386, '12', '11', '2025-03-20', '59.152.121.148', '1742462728'),
(387, '7', '0', '2025-03-20', '170.106.11.6', '1742465162'),
(388, '34', '0', '2025-03-20', '57.141.0.9', '1742485208'),
(389, '63', '0', '2025-03-20', '57.141.0.4', '1742488518'),
(390, '65', '0', '2025-03-21', '80.85.245.187', '1742516929'),
(391, '64', '0', '2025-03-21', '40.77.167.20', '1742550436'),
(392, '65', '0', '2025-03-21', '80.85.245.128', '1742569265'),
(393, '34', '0', '2025-03-21', '57.141.0.18', '1742571696'),
(394, '63', '0', '2025-03-22', '57.141.0.4', '1742583449'),
(395, '7', '0', '2025-03-22', '83.147.255.238', '1742605980'),
(396, '34\'', '0', '2025-03-22', '83.147.255.238', '1742606049'),
(397, '34', '0', '2025-03-22', '83.147.255.238', '1742606049'),
(398, '7\'', '0', '2025-03-22', '83.147.255.238', '1742606090'),
(399, '65', '0', '2025-03-22', '212.34.141.109', '1742622428'),
(400, '416', '0', '2025-03-23', '40.77.167.136', '1742668956'),
(401, '456', '0', '2025-03-23', '40.77.167.56', '1742670779'),
(402, '510', '0', '2025-03-23', '40.77.167.57', '1742672450'),
(403, '65', '0', '2025-03-23', '80.85.246.74', '1742677300'),
(404, '33', '0', '2025-03-23', '40.77.167.241', '1742734547'),
(405, '65', '0', '2025-03-23', '178.20.47.92', '1742735090'),
(406, '4', '0', '2025-03-23', '40.77.167.77', '1742744585'),
(407, '33', '0', '2025-03-24', '66.249.79.193', '1742754908'),
(408, '4', '0', '2025-03-24', '66.249.79.206', '1742755492'),
(409, '7', '0', '2025-03-24', '66.249.79.206', '1742757180'),
(410, '34', '0', '2025-03-24', '66.249.79.193', '1742758405'),
(411, '65', '0', '2025-03-24', '80.85.247.161', '1742791467'),
(412, '7', '60', '2025-03-24', '203.192.235.169', '1742796558'),
(413, '4', '0', '2025-03-25', '40.77.167.158', '1742887605'),
(414, '65', '0', '2025-03-25', '80.85.245.37', '1742918336'),
(415, '7', '11', '2025-03-26', '202.148.60.70', '1742963339'),
(416, '12', '0', '2025-03-26', '117.217.31.152', '1742964923'),
(417, '34', '11', '2025-03-26', '103.38.68.150', '1742979586'),
(418, '12', '11', '2025-03-26', '103.38.68.150', '1742979923'),
(419, '', '11', '2025-03-26', '103.38.68.150', '1742979938'),
(420, '7', '11', '2025-03-26', '103.38.68.150', '1742980727'),
(421, '4', '11', '2025-03-26', '103.38.68.150', '1742982191'),
(422, '4', '0', '2025-03-26', '84.239.43.57', '1742998050'),
(423, '7', '0', '2025-03-26', '84.239.43.57', '1742998052'),
(424, '16', '0', '2025-03-27', '40.77.167.48', '1743019625'),
(425, '7', '0', '2025-03-27', '136.243.228.177', '1743027742'),
(426, '4', '0', '2025-03-27', '136.243.228.177', '1743027923'),
(427, '34', '0', '2025-03-27', '136.243.228.177', '1743028011'),
(428, '7', '0', '2025-03-27', '152.59.7.39', '1743086404'),
(429, '65', '0', '2025-03-28', '85.10.192.147', '1743137357'),
(430, '60', '0', '2025-03-28', '40.77.167.20', '1743141905'),
(431, '7', '0', '2025-03-28', '40.77.167.46', '1743146561'),
(432, '8', '0', '2025-03-28', '40.77.167.77', '1743150927'),
(433, '65', '0', '2025-03-28', '212.34.155.126', '1743154166'),
(434, '454', '0', '2025-03-28', '40.77.167.156', '1743159843'),
(435, '65', '0', '2025-03-28', '40.77.167.149', '1743162025'),
(436, '65', '0', '2025-03-28', '91.84.104.205', '1743164485'),
(437, '13', '0', '2025-03-29', '40.77.167.9', '1743210723'),
(438, '65', '0', '2025-03-29', '80.85.247.161', '1743213108'),
(439, '58', '0', '2025-03-29', '20.171.207.74', '1743214147'),
(440, '4', '0', '2025-03-29', '20.171.207.74', '1743214167'),
(441, '34', '0', '2025-03-29', '20.171.207.74', '1743214173'),
(442, '50', '0', '2025-03-29', '20.171.207.74', '1743214174'),
(443, '8', '0', '2025-03-29', '20.171.207.74', '1743214177'),
(444, '43', '0', '2025-03-29', '20.171.207.74', '1743214178'),
(445, '63', '0', '2025-03-29', '20.171.207.74', '1743214179'),
(446, '7', '0', '2025-03-29', '20.171.207.74', '1743214181'),
(447, '9', '0', '2025-03-29', '20.171.207.74', '1743214182'),
(448, '26', '0', '2025-03-29', '20.171.207.74', '1743214184'),
(449, '60', '0', '2025-03-29', '20.171.207.74', '1743214187'),
(450, '13', '0', '2025-03-29', '20.171.207.74', '1743214189'),
(451, '15', '0', '2025-03-29', '20.171.207.74', '1743214190'),
(452, '14', '0', '2025-03-29', '20.171.207.74', '1743214192'),
(453, '44', '0', '2025-03-29', '20.171.207.74', '1743214194'),
(454, '61', '0', '2025-03-29', '20.171.207.74', '1743214196'),
(455, '12', '0', '2025-03-29', '20.171.207.74', '1743214197'),
(456, '45', '0', '2025-03-29', '20.171.207.74', '1743214198'),
(457, '54', '0', '2025-03-29', '20.171.207.74', '1743214201'),
(458, '46', '0', '2025-03-29', '20.171.207.74', '1743214202'),
(459, '48', '0', '2025-03-29', '20.171.207.74', '1743214203'),
(460, '53', '0', '2025-03-29', '20.171.207.74', '1743214204'),
(461, '51', '0', '2025-03-29', '20.171.207.74', '1743214208'),
(462, '52', '0', '2025-03-29', '20.171.207.74', '1743214209'),
(463, '10', '0', '2025-03-29', '20.171.207.74', '1743214224'),
(464, '11', '0', '2025-03-29', '20.171.207.74', '1743214225'),
(465, '32', '0', '2025-03-29', '20.171.207.74', '1743214226'),
(466, '59', '0', '2025-03-29', '20.171.207.74', '1743214227'),
(467, '57', '0', '2025-03-29', '20.171.207.74', '1743214228'),
(468, '28', '0', '2025-03-29', '20.171.207.74', '1743214229'),
(469, '56', '0', '2025-03-29', '20.171.207.74', '1743214231'),
(470, '49', '0', '2025-03-29', '20.171.207.74', '1743214232'),
(471, '24', '0', '2025-03-29', '20.171.207.74', '1743214233'),
(472, '47', '0', '2025-03-29', '20.171.207.74', '1743214234'),
(473, '27', '0', '2025-03-29', '20.171.207.74', '1743214251'),
(474, '64', '0', '2025-03-29', '20.171.207.74', '1743214253'),
(475, '65', '0', '2025-03-29', '20.171.207.74', '1743214254'),
(476, '62', '0', '2025-03-29', '20.171.207.74', '1743214255'),
(477, '30', '0', '2025-03-29', '20.171.207.74', '1743214256'),
(478, '55', '0', '2025-03-29', '20.171.207.74', '1743214257'),
(479, '27', '0', '2025-03-29', '40.77.167.65', '1743215001'),
(480, '32', '0', '2025-03-29', '40.77.167.54', '1743217512'),
(481, '47', '0', '2025-03-29', '40.77.167.41', '1743220028'),
(482, '50', '0', '2025-03-29', '40.77.167.4', '1743222753'),
(483, '7', '11', '2025-03-29', '103.58.152.1', '1743223299'),
(484, '34', '11', '2025-03-29', '103.58.152.1', '1743228700'),
(485, '4', '0', '2025-03-29', '103.58.152.1', '1743229238'),
(486, '34', '2', '2025-03-29', '103.58.152.1', '1743229259'),
(487, '58', '0', '2025-03-29', '40.77.167.158', '1743230542'),
(488, '4', '60', '2025-03-29', '203.192.235.169', '1743235107'),
(489, '4', '15', '2025-03-29', '103.58.152.1', '1743240804'),
(490, '34', '15', '2025-03-29', '103.58.152.1', '1743240821'),
(491, '4', '2', '2025-03-29', '103.58.152.1', '1743244208'),
(492, '58', '60', '2025-03-29', '203.192.235.169', '1743247958'),
(493, '24', '1689', '2025-03-30', '59.97.145.125', '1743301048'),
(494, '65', '1689', '2025-03-30', '59.97.145.125', '1743301163'),
(495, '11', '0', '2025-03-30', '40.77.167.72', '1743331535'),
(496, '413', '0', '2025-03-30', '40.77.167.65', '1743335584'),
(497, '51', '0', '2025-03-30', '40.77.167.4', '1743339668'),
(498, '12', '0', '2025-03-30', '40.77.167.46', '1743342379'),
(499, '59', '0', '2025-03-30', '49.36.41.10', '1743351954'),
(500, '34', '0', '2025-03-31', '152.56.0.202', '1743387564'),
(501, '7', '0', '2025-03-31', '106.211.123.237', '1743405553'),
(502, '34', '0', '2025-04-01', '65.21.113.254', '1743473950'),
(503, '4', '0', '2025-04-01', '65.21.113.254', '1743473953'),
(504, '7', '0', '2025-04-01', '65.21.113.254', '1743473955'),
(505, '34', '0', '2025-04-01', '103.58.152.91', '1743480001'),
(506, '65', '0', '2025-04-01', '80.85.247.231', '1743481752'),
(507, '34', '0', '2025-04-01', '40.77.167.36', '1743487541'),
(508, '7', '0', '2025-04-01', '152.58.15.128', '1743495692'),
(509, '65', '0', '2025-04-01', '157.55.39.15', '1743498171'),
(510, '34', '0', '2025-04-01', '152.58.89.5', '1743512568'),
(511, '64', '0', '2025-04-02', '34.74.171.93', '1743574973'),
(512, '65', '0', '2025-04-02', '34.74.171.93', '1743575644'),
(513, '12', '0', '2025-04-02', '34.74.171.93', '1743575651'),
(514, '8', '0', '2025-04-02', '83.99.151.64', '1743601254'),
(515, '52', '0', '2025-04-02', '83.99.151.64', '1743601313'),
(516, '12', '0', '2025-04-02', '83.99.151.71', '1743601373'),
(517, '13', '0', '2025-04-02', '83.99.151.71', '1743601404'),
(518, '50', '0', '2025-04-02', '83.99.151.70', '1743601414'),
(519, '10', '0', '2025-04-02', '83.99.151.71', '1743601453'),
(520, '47', '0', '2025-04-02', '83.99.151.70', '1743601524'),
(521, '44', '0', '2025-04-02', '83.99.151.70', '1743601573'),
(522, '48', '0', '2025-04-02', '83.99.151.71', '1743601584'),
(523, '7', '0', '2025-04-02', '83.99.151.71', '1743601603'),
(524, '54', '0', '2025-04-02', '83.99.151.71', '1743601634'),
(525, '24', '0', '2025-04-02', '83.99.151.70', '1743601664'),
(526, '15', '0', '2025-04-02', '83.99.151.68', '1743601723'),
(527, '34', '0', '2025-04-02', '83.99.151.71', '1743601825'),
(528, '26', '0', '2025-04-02', '83.99.151.71', '1743601863'),
(529, '4', '0', '2025-04-02', '83.99.151.71', '1743601893'),
(530, '64', '0', '2025-04-02', '83.99.151.71', '1743601914'),
(531, '28', '0', '2025-04-02', '83.99.151.69', '1743602015'),
(532, '51', '0', '2025-04-02', '83.99.151.67', '1743602054'),
(533, '59', '0', '2025-04-02', '83.99.151.64', '1743602165'),
(534, '9', '0', '2025-04-02', '83.99.151.64', '1743602175'),
(535, '14', '0', '2025-04-02', '40.77.167.7', '1743615772'),
(536, '65', '0', '2025-04-03', '185.157.214.24', '1743620461'),
(537, '64', '0', '2025-04-03', '57.141.6.11', '1743625743'),
(538, '54', '0', '2025-04-03', '40.77.167.116', '1743627443'),
(539, '7', '0', '2025-04-03', '213.180.203.202', '1743631216'),
(540, '34', '0', '2025-04-03', '213.180.203.217', '1743631217'),
(541, '4', '0', '2025-04-03', '213.180.203.202', '1743631316'),
(542, '34', '0', '2025-04-03', '213.180.203.202', '1743631793'),
(543, '4', '0', '2025-04-03', '43.133.69.37', '1743657422'),
(544, '7', '0', '2025-04-03', '43.159.139.164', '1743658014'),
(545, '4', '0', '2025-04-03', '43.130.67.33', '1743660435'),
(546, '10', '0', '2025-04-03', '40.77.167.54', '1743662966'),
(547, '56', '11', '2025-04-03', '45.118.104.7', '1743669637'),
(548, '27', '0', '2025-04-03', '57.141.6.16', '1743673708'),
(549, '28', '0', '2025-04-03', '40.77.167.76', '1743677142'),
(550, '45', '0', '2025-04-03', '40.77.167.70', '1743683210'),
(551, '7', '0', '2025-04-03', '40.77.167.20', '1743683732'),
(552, '62', '0', '2025-04-03', '57.141.6.24', '1743684546'),
(553, '64', '0', '2025-04-03', '43.135.185.59', '1743685659'),
(554, '455', '0', '2025-04-03', '40.77.167.48', '1743689007'),
(555, '454', '0', '2025-04-03', '40.77.167.5', '1743692913'),
(556, '55', '0', '2025-04-03', '40.77.167.20', '1743695528'),
(557, '4', '0', '2025-04-04', '43.166.136.24', '1743705629'),
(558, '65', '0', '2025-04-04', '80.85.245.37', '1743709104'),
(559, '8', '0', '2025-04-04', '43.157.202.235', '1743711524'),
(560, '8', '0', '2025-04-04', '43.153.15.51', '1743713429'),
(561, '7', '0', '2025-04-04', '49.51.253.26', '1743715170'),
(562, '65', '0', '2025-04-04', '80.85.246.74', '1743716190'),
(563, '412', '0', '2025-04-04', '66.249.69.104', '1743717672'),
(564, '510', '0', '2025-04-04', '66.249.69.104', '1743717774'),
(565, '48', '0', '2025-04-04', '3.144.109.245', '1743721124'),
(566, '54', '0', '2025-04-04', '3.134.86.4', '1743721164'),
(567, '51', '0', '2025-04-04', '13.58.175.32', '1743721289'),
(568, '47', '0', '2025-04-04', '13.58.175.32', '1743721289'),
(569, '61', '0', '2025-04-04', '13.58.175.32', '1743721289'),
(570, '43', '0', '2025-04-04', '3.135.237.153', '1743721329'),
(571, '53', '0', '2025-04-04', '3.135.237.153', '1743721329'),
(572, '45', '0', '2025-04-04', '18.224.72.117', '1743721368'),
(573, '55', '0', '2025-04-04', '18.224.72.117', '1743721368'),
(574, '44', '0', '2025-04-04', '3.145.176.132', '1743721417'),
(575, '57', '0', '2025-04-04', '3.145.176.132', '1743721417'),
(576, '56', '0', '2025-04-04', '3.145.176.132', '1743721417'),
(577, '52', '0', '2025-04-04', '18.189.6.59', '1743721466'),
(578, '60', '0', '2025-04-04', '18.189.6.59', '1743721466'),
(579, '50', '0', '2025-04-04', '3.133.83.123', '1743721514'),
(580, '62', '0', '2025-04-04', '3.133.83.123', '1743721514'),
(581, '59', '0', '2025-04-04', '18.221.139.13', '1743721562'),
(582, '58', '0', '2025-04-04', '18.221.139.13', '1743721562'),
(583, '63', '0', '2025-04-04', '18.219.30.90', '1743721610'),
(584, '64', '0', '2025-04-04', '18.219.30.90', '1743721610'),
(585, '65', '0', '2025-04-04', '3.17.181.199', '1743721659'),
(586, '46', '0', '2025-04-04', '3.17.181.199', '1743721659'),
(587, '10', '0', '2025-04-04', '65.21.113.254', '1743722109'),
(588, '11', '0', '2025-04-04', '65.21.113.254', '1743722111'),
(589, '12', '0', '2025-04-04', '65.21.113.254', '1743722113'),
(590, '13', '0', '2025-04-04', '65.21.113.254', '1743722115'),
(591, '14', '0', '2025-04-04', '65.21.113.254', '1743722119'),
(592, '15', '0', '2025-04-04', '65.21.113.254', '1743722121'),
(593, '24', '0', '2025-04-04', '65.21.113.254', '1743722124'),
(594, '26', '0', '2025-04-04', '65.21.113.254', '1743722126'),
(595, '27', '0', '2025-04-04', '65.21.113.254', '1743722128'),
(596, '28', '0', '2025-04-04', '65.21.113.254', '1743722130'),
(597, '30', '0', '2025-04-04', '65.21.113.254', '1743722132'),
(598, '32', '0', '2025-04-04', '65.21.113.254', '1743722136'),
(599, '43', '0', '2025-04-04', '65.21.113.254', '1743722138'),
(600, '44', '0', '2025-04-04', '65.21.113.254', '1743722141'),
(601, '45', '0', '2025-04-04', '65.21.113.254', '1743722143'),
(602, '46', '0', '2025-04-04', '65.21.113.254', '1743722145'),
(603, '47', '0', '2025-04-04', '65.21.113.254', '1743722147'),
(604, '48', '0', '2025-04-04', '65.21.113.254', '1743722149'),
(605, '49', '0', '2025-04-04', '65.21.113.254', '1743722151'),
(606, '50', '0', '2025-04-04', '65.21.113.254', '1743722153'),
(607, '51', '0', '2025-04-04', '65.21.113.254', '1743722155'),
(608, '52', '0', '2025-04-04', '65.21.113.254', '1743722157'),
(609, '53', '0', '2025-04-04', '65.21.113.254', '1743722159'),
(610, '54', '0', '2025-04-04', '65.21.113.254', '1743722161'),
(611, '55', '0', '2025-04-04', '65.21.113.254', '1743722164'),
(612, '56', '0', '2025-04-04', '65.21.113.254', '1743722166'),
(613, '57', '0', '2025-04-04', '65.21.113.254', '1743722168'),
(614, '58', '0', '2025-04-04', '65.21.113.254', '1743722170'),
(615, '59', '0', '2025-04-04', '65.21.113.254', '1743722172'),
(616, '60', '0', '2025-04-04', '65.21.113.254', '1743722174'),
(617, '61', '0', '2025-04-04', '65.21.113.254', '1743722176'),
(618, '62', '0', '2025-04-04', '65.21.113.254', '1743722178'),
(619, '63', '0', '2025-04-04', '65.21.113.254', '1743722180'),
(620, '64', '0', '2025-04-04', '65.21.113.254', '1743722182'),
(621, '65', '0', '2025-04-04', '65.21.113.254', '1743722184'),
(622, '8', '0', '2025-04-04', '65.21.113.254', '1743722186'),
(623, '9', '0', '2025-04-04', '65.21.113.254', '1743722188'),
(624, '34', '0', '2025-04-04', '40.77.167.116', '1743738036'),
(625, '30', '0', '2025-04-04', '40.77.167.224', '1743751643'),
(626, '7', '0', '2025-04-04', '3.82.141.11', '1743752451'),
(627, '34', '0', '2025-04-04', '3.82.141.11', '1743752458'),
(628, '4', '0', '2025-04-04', '3.82.141.11', '1743752542'),
(629, '28', '0', '2025-04-04', '40.77.167.131', '1743754609'),
(630, '48', '0', '2025-04-04', '40.77.167.54', '1743755840'),
(631, '64', '0', '2025-04-04', '49.51.52.250', '1743756169'),
(632, '63', '0', '2025-04-04', '43.153.74.75', '1743756747'),
(633, '65', '0', '2025-04-04', '94.103.87.196', '1743770473'),
(634, '61', '0', '2025-04-04', '40.77.167.18', '1743774730'),
(635, '59', '0', '2025-04-04', '40.77.167.131', '1743782372'),
(636, '7', '0', '2025-04-04', '85.208.98.229', '1743787147'),
(637, '34', '0', '2025-04-04', '85.208.98.229', '1743787158'),
(638, '4', '0', '2025-04-04', '85.208.98.229', '1743787172'),
(639, '34', '0', '2025-04-04', '85.208.98.224', '1743787199'),
(640, '455', '0', '2025-04-05', '66.249.66.195', '1743812956'),
(641, '456', '0', '2025-04-05', '66.249.66.194', '1743813015'),
(642, '65', '0', '2025-04-05', '195.2.70.209', '1743828022'),
(643, '7', '0', '2025-04-05', '49.38.37.9', '1743851178'),
(644, '65', '0', '2025-04-06', '91.84.111.136', '1743928168'),
(645, '62', '0', '2025-04-06', '57.141.6.27', '1743946731'),
(646, '12', '0', '2025-04-06', '203.192.235.169', '1743950874'),
(647, '34', '0', '2025-04-06', '43.156.168.214', '1743951436'),
(648, '57', '0', '2025-04-07', '40.77.167.150', '1743967149'),
(649, '416', '0', '2025-04-07', '66.249.79.192', '1743989758'),
(650, '16', '0', '2025-04-07', '66.249.79.192', '1743989790'),
(651, '356', '0', '2025-04-07', '66.249.79.206', '1743989889'),
(652, '306', '0', '2025-04-07', '66.249.79.192', '1743990005'),
(653, '454', '0', '2025-04-07', '66.249.79.206', '1743990458'),
(654, '69', '0', '2025-04-07', '66.249.79.206', '1743994138'),
(655, '68', '0', '2025-04-07', '66.249.79.193', '1743994259'),
(656, '66', '0', '2025-04-07', '66.249.79.192', '1743995732'),
(657, '413', '0', '2025-04-07', '40.77.167.19', '1743996176'),
(658, '43', '0', '2025-04-07', '40.77.167.72', '1744007105'),
(659, '34', '1750', '2025-04-07', '203.192.235.169', '1744013235'),
(660, '34', '60', '2025-04-07', '203.192.235.169', '1744013327'),
(661, '4', '60', '2025-04-07', '203.192.235.169', '1744013342'),
(662, '14', '60', '2025-04-07', '203.192.235.169', '1744013362'),
(663, '32', '0', '2025-04-07', '40.77.167.48', '1744018342'),
(664, '71', '0', '2025-04-07', '103.174.159.116', '1744021336'),
(665, '72', '60', '2025-04-07', '203.192.235.169', '1744023784'),
(666, '71', '60', '2025-04-07', '203.192.235.169', '1744023805'),
(667, '54', '60', '2025-04-07', '203.192.235.169', '1744024765'),
(668, '49', '60', '2025-04-07', '203.192.235.169', '1744024799'),
(669, '11', '60', '2025-04-07', '203.192.235.169', '1744024844'),
(670, '74', '60', '2025-04-07', '203.192.235.169', '1744025419'),
(671, '412', '0', '2025-04-07', '40.77.167.235', '1744028716'),
(672, '70', '0', '2025-04-07', '66.249.66.194', '1744030720'),
(673, '78', '60', '2025-04-07', '203.192.235.169', '1744031709'),
(674, '70', '60', '2025-04-07', '203.192.235.169', '1744032069'),
(675, '83', '60', '2025-04-07', '203.192.235.169', '1744035918'),
(676, '56', '0', '2025-04-07', '40.77.167.26', '1744036538'),
(677, '90', '60', '2025-04-07', '203.192.235.169', '1744036727'),
(678, '413', '0', '2025-04-07', '66.249.66.195', '1744039857'),
(679, '49', '0', '2025-04-07', '18.117.103.79', '1744049136'),
(680, '67', '0', '2025-04-08', '66.249.66.194', '1744061141'),
(681, '4', '0', '2025-04-08', '43.166.239.145', '1744066382'),
(682, '4', '0', '2025-04-08', '43.156.168.214', '1744069940'),
(683, '70', '0', '2025-04-08', '66.249.66.195', '1744072058'),
(684, '91', '0', '2025-04-08', '66.249.66.194', '1744073522'),
(685, '78', '0', '2025-04-08', '66.249.66.194', '1744073597'),
(686, '72', '0', '2025-04-08', '66.249.66.194', '1744082764'),
(687, '4', '2', '2025-04-08', '45.118.105.31', '1744093365'),
(688, '34', '2', '2025-04-08', '45.118.105.31', '1744093797'),
(689, '11', '2', '2025-04-08', '45.118.105.31', '1744093841'),
(690, '34', '15', '2025-04-08', '45.118.105.31', '1744094779'),
(691, '79', '0', '2025-04-08', '66.249.66.6', '1744099723'),
(692, '85', '0', '2025-04-08', '66.249.66.196', '1744101057'),
(693, '86', '0', '2025-04-08', '66.249.66.196', '1744101124'),
(694, '83', '0', '2025-04-08', '66.249.66.194', '1744101160'),
(695, '4', '0', '2025-04-08', '3.82.141.11', '1744103948'),
(696, '71', '0', '2025-04-08', '66.249.66.194', '1744110703'),
(697, '4', '11', '2025-04-08', '45.118.105.31', '1744112186'),
(698, '7', '11', '2025-04-08', '45.118.105.31', '1744112583'),
(699, '34', '11', '2025-04-08', '45.118.105.31', '1744112610'),
(700, '52', '0', '2025-04-08', '40.77.167.7', '1744112859'),
(701, '7', '0', '2025-04-08', '43.130.111.40', '1744114505'),
(702, '7', '0', '2025-04-08', '43.166.7.113', '1744115315'),
(703, '8', '0', '2025-04-08', '40.77.167.48', '1744123354'),
(704, '7', '0', '2025-04-08', '3.82.141.11', '1744132287'),
(705, '34', '0', '2025-04-08', '3.82.141.11', '1744132298'),
(706, '7', '0', '2025-04-09', '49.51.233.46', '1744140980'),
(707, '7', '0', '2025-04-09', '43.166.244.251', '1744144536'),
(708, '356', '0', '2025-04-09', '40.77.167.53', '1744165938'),
(709, '4', '0', '2025-04-09', '43.157.158.178', '1744171471'),
(710, '94', '0', '2025-04-09', '43.133.91.48', '1744176268'),
(711, '95', '1750', '2025-04-09', '203.192.235.169', '1744181971'),
(712, '95', '0', '2025-04-09', '43.130.16.212', '1744200129'),
(713, '95', '0', '2025-04-09', '43.134.141.244', '1744203081'),
(714, '24', '0', '2025-04-09', '40.77.167.72', '1744207190'),
(715, '95', '0', '2025-04-10', '43.153.85.46', '1744233584'),
(716, '77', '0', '2025-04-10', '152.59.7.250', '1744255983'),
(717, '10', '11', '2025-04-10', '103.58.155.137', '1744262111'),
(718, '63', '11', '2025-04-10', '103.58.155.137', '1744262398'),
(719, '26', '0', '2025-04-10', '40.77.167.35', '1744267723'),
(720, '53', '0', '2025-04-10', '40.77.167.18', '1744272652'),
(721, '55', '0', '2025-04-10', '40.77.167.55', '1744277457'),
(722, '13', '0', '2025-04-10', '43.130.38.235', '1744279941'),
(723, '13', '0', '2025-04-10', '66.249.73.15', '1744280321'),
(724, '9', '0', '2025-04-10', '66.249.73.1', '1744280325'),
(725, '63', '0', '2025-04-10', '66.249.73.1', '1744280325'),
(726, '95', '0', '2025-04-10', '66.249.73.15', '1744280327'),
(727, '12', '0', '2025-04-10', '66.249.73.15', '1744280339'),
(728, '8', '0', '2025-04-10', '66.249.73.15', '1744280339'),
(729, '92', '0', '2025-04-10', '66.249.73.15', '1744280341'),
(730, '63', '0', '2025-04-10', '43.157.168.43', '1744280416'),
(731, '13', '0', '2025-04-10', '162.62.213.187', '1744280994'),
(732, '61', '0', '2025-04-10', '207.46.13.17', '1744282238'),
(733, '59', '0', '2025-04-10', '207.46.13.157', '1744298710'),
(734, '84', '0', '2025-04-10', '66.249.73.15', '1744302585'),
(735, '88', '0', '2025-04-10', '66.249.73.1', '1744307044'),
(736, '510', '0', '2025-04-10', '40.77.167.3', '1744307496'),
(737, '52', '0', '2025-04-11', '40.77.167.4', '1744310701'),
(738, '96', '0', '2025-04-11', '66.249.65.97', '1744315261'),
(739, '63', '0', '2025-04-11', '43.166.250.187', '1744317762'),
(740, '34', '0', '2025-04-11', '43.153.12.58', '1744325728'),
(741, '72', '0', '2025-04-11', '66.249.73.15', '1744327603'),
(742, '87', '0', '2025-04-11', '66.249.73.2', '1744328307'),
(743, '76', '0', '2025-04-11', '66.249.73.15', '1744336646'),
(744, '85', '0', '2025-04-11', '57.141.6.13', '1744338141'),
(745, '75', '0', '2025-04-11', '57.141.6.8', '1744346872'),
(746, '79', '0', '2025-04-11', '57.141.6.18', '1744348357'),
(747, '91', '0', '2025-04-11', '57.141.6.6', '1744348869'),
(748, '88', '0', '2025-04-11', '57.141.6.10', '1744349015'),
(749, '13', '0', '2025-04-11', '66.249.65.97', '1744354557'),
(750, '44', '0', '2025-04-11', '40.77.167.55', '1744356963'),
(751, '95', '0', '2025-04-11', '66.249.65.105', '1744357624'),
(752, '63', '0', '2025-04-11', '66.249.65.96', '1744361587'),
(753, '85', '0', '2025-04-11', '66.249.73.2', '1744367073'),
(754, '79', '0', '2025-04-11', '66.249.73.1', '1744367258'),
(755, '81', '0', '2025-04-11', '57.141.6.22', '1744370791'),
(756, '34', '15', '2025-04-11', '103.58.155.137', '1744373306'),
(757, '53', '0', '2025-04-11', '66.249.65.97', '1744376068'),
(758, '34', '0', '2025-04-11', '27.59.101.146', '1744377129'),
(759, '34', '0', '2025-04-11', '103.121.70.143', '1744378201'),
(760, '57', '0', '2025-04-11', '40.77.167.235', '1744384561'),
(761, '28', '0', '2025-04-11', '66.249.65.97', '1744390306'),
(762, '97', '0', '2025-04-11', '66.249.73.1', '1744390781'),
(763, '12', '0', '2025-04-11', '66.249.73.15', '1744390796'),
(764, '81', '0', '2025-04-11', '66.249.73.2', '1744392475'),
(765, '84', '0', '2025-04-11', '66.249.73.1', '1744392509'),
(766, '76', '0', '2025-04-11', '66.249.73.1', '1744392529'),
(767, '10', '0', '2025-04-11', '66.249.73.2', '1744393900'),
(768, '11', '0', '2025-04-11', '66.249.73.15', '1744394305'),
(769, '97', '0', '2025-04-11', '66.249.65.96', '1744395801'),
(770, '77', '0', '2025-04-12', '66.249.73.15', '1744399446'),
(771, '71', '0', '2025-04-12', '3.136.234.122', '1744415792'),
(772, '72', '0', '2025-04-12', '3.15.226.5', '1744415971'),
(773, '66', '0', '2025-04-12', '3.135.246.64', '1744416105'),
(774, '75', '0', '2025-04-12', '18.188.163.236', '1744416504'),
(775, '70', '0', '2025-04-12', '13.58.169.239', '1744416987'),
(776, '74', '0', '2025-04-12', '52.14.229.130', '1744417687'),
(777, '7', '0', '2025-04-12', '34.106.12.33', '1744418559'),
(778, '83', '0', '2025-04-12', '66.249.73.1', '1744426151'),
(779, '81', '0', '2025-04-12', '66.249.73.2', '1744427718'),
(780, '7', '15', '2025-04-12', '103.10.226.195', '1744428892'),
(781, '12', '0', '2025-04-12', '223.233.80.221', '1744452494'),
(782, '95', '0', '2025-04-12', '223.233.80.221', '1744452706'),
(783, '95', '0', '2025-04-12', '115.96.217.253', '1744460218'),
(784, '34', '0', '2025-04-12', '115.96.217.253', '1744460227'),
(785, '92', '0', '2025-04-12', '207.46.13.92', '1744466829'),
(786, '79', '0', '2025-04-12', '57.141.6.5', '1744477636'),
(787, '13', '0', '2025-04-13', '69.171.231.113', '1744485806'),
(788, '72', '0', '2025-04-13', '57.141.6.12', '1744486308'),
(789, '510', '0', '2025-04-13', '207.46.13.87', '1744501297'),
(790, '86', '0', '2025-04-13', '66.249.73.1', '1744528958'),
(791, '59', '0', '2025-04-13', '157.55.39.63', '1744543791'),
(792, '10', '0', '2025-04-13', '203.192.235.169', '1744549388'),
(793, '12', '0', '2025-04-13', '66.249.65.97', '1744551064'),
(794, '87', '0', '2025-04-13', '57.141.6.9', '1744564512'),
(795, '95', '0', '2025-04-14', '43.166.238.12', '1744570547'),
(796, '54', '0', '2025-04-14', '57.141.6.11', '1744598329'),
(797, '98', '1750', '2025-04-14', '203.192.235.169', '1744615708'),
(798, '102', '1750', '2025-04-14', '203.192.235.169', '1744622011'),
(799, '100', '1750', '2025-04-14', '203.192.235.169', '1744622033'),
(800, '8', '0', '2025-04-14', '40.77.167.157', '1744633604'),
(801, '12', '0', '2025-04-14', '117.254.230.51', '1744634277'),
(802, '104', '0', '2025-04-14', '117.254.230.51', '1744634456'),
(803, '98', '0', '2025-04-14', '66.249.74.110', '1744634740'),
(804, '102', '0', '2025-04-14', '66.249.74.110', '1744639472'),
(805, '101', '0', '2025-04-14', '66.249.74.110', '1744639527'),
(806, '98', '0', '2025-04-14', '66.249.74.96', '1744639615'),
(807, '98', '0', '2025-04-14', '43.167.239.66', '1744640349'),
(808, '104', '0', '2025-04-14', '66.249.74.96', '1744641228'),
(809, '98', '0', '2025-04-14', '43.157.153.236', '1744641744'),
(810, '100', '0', '2025-04-14', '66.249.74.97', '1744646347'),
(811, '105', '0', '2025-04-14', '66.249.74.110', '1744647564'),
(812, '103', '0', '2025-04-14', '66.249.74.110', '1744647597'),
(813, '74', '0', '2025-04-14', '57.141.6.27', '1744653576'),
(814, '12', '0', '2025-04-14', '157.90.209.81', '1744654741'),
(815, '13', '0', '2025-04-14', '157.90.209.81', '1744654751'),
(816, '34', '0', '2025-04-14', '157.90.209.81', '1744654756'),
(817, '4', '0', '2025-04-14', '157.90.209.81', '1744654761'),
(818, '63', '0', '2025-04-14', '157.90.209.81', '1744654768'),
(819, '7', '0', '2025-04-14', '157.90.209.81', '1744654773'),
(820, '8', '0', '2025-04-14', '157.90.209.81', '1744654778'),
(821, '9', '0', '2025-04-14', '157.90.209.81', '1744654782'),
(822, '92', '0', '2025-04-14', '157.90.209.81', '1744654789');
INSERT INTO `product_visiter` (`product_visiter_id`, `prod_id`, `user_id`, `visit_date`, `ip_address`, `visit_time`) VALUES
(823, '102', '0', '2025-04-15', '66.249.74.97', '1744655538'),
(824, '34', '0', '2025-04-15', '40.77.167.157', '1744655617'),
(825, NULL, '0', '2025-04-15', '149.57.176.2', '1744663364'),
(826, '98', '0', '2025-04-15', '49.51.52.250', '1744666420'),
(827, '98', '0', '2025-04-15', '43.153.85.46', '1744670076'),
(828, '104', '0', '2025-04-15', '170.106.35.187', '1744672435'),
(829, '83', '0', '2025-04-15', '57.141.6.4', '1744677629'),
(830, '93', '0', '2025-04-15', '57.141.6.28', '1744685037'),
(831, '101', '0', '2025-04-15', '66.249.74.110', '1744688617'),
(832, '82', '0', '2025-04-15', '57.141.6.1', '1744691499'),
(833, '104', '0', '2025-04-15', '66.249.74.97', '1744692042'),
(834, '103', '0', '2025-04-15', '66.249.74.110', '1744692055'),
(835, '100', '0', '2025-04-15', '66.249.74.96', '1744692069'),
(836, '13', '0', '2025-04-15', '203.192.238.134', '1744695515'),
(837, '92', '0', '2025-04-15', '203.192.238.134', '1744695764'),
(838, '70', '0', '2025-04-15', '57.141.6.21', '1744701696'),
(839, '89', '0', '2025-04-15', '57.141.6.7', '1744703934'),
(840, '75', '0', '2025-04-15', '66.249.73.204', '1744711283'),
(841, '56', '0', '2025-04-15', '66.249.73.203', '1744711953'),
(842, '63', '0', '2025-04-15', '203.192.238.134', '1744712882'),
(843, '92', '0', '2025-04-15', '103.177.175.153', '1744715364'),
(844, '49', '0', '2025-04-15', '66.249.66.160', '1744719245'),
(845, '34', '0', '2025-04-16', '43.157.95.239', '1744768742'),
(846, '98', '0', '2025-04-17', '43.130.16.140', '1744847480'),
(847, '104', '0', '2025-04-17', '49.51.196.42', '1744851747'),
(848, '104', '0', '2025-04-17', '43.133.187.11', '1744855227'),
(849, '98', '0', '2025-04-17', '203.192.235.169', '1744878038'),
(850, '34', '7', '2025-04-18', '103.182.130.102', '1744966782'),
(851, '105', '0', '2025-04-18', '203.192.235.169', '1744973013'),
(852, '111', '0', '2025-04-18', '203.192.235.169', '1744975700'),
(853, '24', '0', '2025-04-18', '203.192.235.169', '1744980602'),
(854, '12', '0', '2025-04-18', '203.192.235.169', '1744982014'),
(855, '62', '0', '2025-04-18', '203.192.235.169', '1744982546'),
(856, '8', '0', '2025-04-19', '20.171.207.100', '1745041662'),
(857, '58', '0', '2025-04-19', '20.171.207.100', '1745063804'),
(858, '76', '0', '2025-04-19', '20.171.207.100', '1745068396'),
(859, '81', '0', '2025-04-19', '20.171.207.100', '1745068470'),
(860, '4', '0', '2025-04-19', '20.171.207.100', '1745068824'),
(861, '82', '0', '2025-04-19', '20.171.207.100', '1745069316'),
(862, '97', '0', '2025-04-19', '20.171.207.100', '1745069426'),
(863, '50', '0', '2025-04-19', '20.171.207.100', '1745069484'),
(864, '34', '0', '2025-04-19', '20.171.207.100', '1745069546'),
(865, '91', '0', '2025-04-19', '20.171.207.100', '1745069757'),
(866, '90', '0', '2025-04-19', '20.171.207.100', '1745069796'),
(867, '83', '0', '2025-04-19', '20.171.207.100', '1745069839'),
(868, '43', '0', '2025-04-19', '20.171.207.100', '1745070993'),
(869, '9', '0', '2025-04-19', '20.171.207.100', '1745071042'),
(870, '7', '0', '2025-04-19', '20.171.207.100', '1745071085'),
(871, '63', '0', '2025-04-19', '20.171.207.100', '1745071129'),
(872, '26', '0', '2025-04-19', '20.171.207.100', '1745071291'),
(873, '60', '0', '2025-04-19', '20.171.207.100', '1745071314'),
(874, '80', '0', '2025-04-19', '20.171.207.100', '1745071333'),
(875, '15', '0', '2025-04-19', '20.171.207.100', '1745071681'),
(876, '14', '0', '2025-04-19', '20.171.207.100', '1745071740'),
(877, '13', '0', '2025-04-19', '20.171.207.100', '1745071814'),
(878, '44', '0', '2025-04-19', '20.171.207.100', '1745071874'),
(879, '61', '0', '2025-04-19', '20.171.207.100', '1745072192'),
(880, '105', '0', '2025-04-19', '20.171.207.100', '1745072226'),
(881, '72', '0', '2025-04-19', '20.171.207.100', '1745072247'),
(882, '86', '0', '2025-04-19', '20.171.207.100', '1745072287'),
(883, '112', '0', '2025-04-19', '20.171.207.100', '1745072313'),
(884, '102', '0', '2025-04-19', '20.171.207.100', '1745072362'),
(885, '101', '0', '2025-04-19', '20.171.207.100', '1745072424'),
(886, '12', '0', '2025-04-19', '20.171.207.100', '1745072709'),
(887, '89', '0', '2025-04-19', '20.171.207.100', '1745072762'),
(888, '106', '0', '2025-04-19', '20.171.207.100', '1745073106'),
(889, '92', '0', '2025-04-19', '20.171.207.100', '1745073153'),
(890, '84', '0', '2025-04-19', '20.171.207.100', '1745073365'),
(891, '75', '0', '2025-04-19', '20.171.207.100', '1745073424'),
(892, '74', '0', '2025-04-19', '20.171.207.100', '1745073489'),
(893, '45', '0', '2025-04-19', '20.171.207.100', '1745073538'),
(894, '96', '0', '2025-04-19', '20.171.207.100', '1745073604'),
(895, '95', '0', '2025-04-19', '20.171.207.100', '1745073638'),
(896, '66', '0', '2025-04-19', '20.171.207.100', '1745073683'),
(897, '54', '0', '2025-04-19', '20.171.207.100', '1745073838'),
(898, '107', '0', '2025-04-19', '20.171.207.100', '1745073942'),
(899, '53', '0', '2025-04-19', '20.171.207.100', '1745074042'),
(900, '104', '0', '2025-04-19', '20.171.207.100', '1745074395'),
(901, '46', '0', '2025-04-19', '20.171.207.100', '1745074485'),
(902, '79', '0', '2025-04-19', '20.171.207.100', '1745074541'),
(903, '48', '0', '2025-04-19', '20.171.207.100', '1745074660'),
(904, '51', '0', '2025-04-19', '20.171.207.100', '1745074757'),
(905, '93', '0', '2025-04-19', '20.171.207.100', '1745074803'),
(906, '71', '0', '2025-04-19', '20.171.207.100', '1745074891'),
(907, '100', '0', '2025-04-19', '20.171.207.100', '1745075294'),
(908, '52', '0', '2025-04-19', '20.171.207.100', '1745075474'),
(909, '94', '0', '2025-04-19', '20.171.207.100', '1745075764'),
(910, '11', '0', '2025-04-19', '20.171.207.100', '1745076112'),
(911, '10', '0', '2025-04-19', '20.171.207.100', '1745076239'),
(912, '32', '0', '2025-04-19', '20.171.207.100', '1745076297'),
(913, '103', '0', '2025-04-19', '20.171.207.100', '1745076341'),
(914, '109', '0', '2025-04-19', '20.171.207.100', '1745076380'),
(915, '57', '0', '2025-04-19', '20.171.207.100', '1745076458'),
(916, '59', '0', '2025-04-19', '20.171.207.100', '1745076500'),
(917, '28', '0', '2025-04-19', '20.171.207.100', '1745076563'),
(918, '70', '0', '2025-04-19', '20.171.207.100', '1745076612'),
(919, '47', '0', '2025-04-19', '20.171.207.100', '1745076708'),
(920, '49', '0', '2025-04-19', '20.171.207.100', '1745076871'),
(921, '78', '0', '2025-04-19', '20.171.207.100', '1745076949'),
(922, '24', '0', '2025-04-19', '20.171.207.100', '1745077116'),
(923, '56', '0', '2025-04-19', '20.171.207.100', '1745077692'),
(924, '98', '0', '2025-04-19', '20.171.207.100', '1745077791'),
(925, '27', '0', '2025-04-19', '20.171.207.100', '1745078047'),
(926, '64', '0', '2025-04-19', '20.171.207.100', '1745078109'),
(927, '110', '0', '2025-04-19', '20.171.207.100', '1745078193'),
(928, '62', '0', '2025-04-19', '20.171.207.100', '1745078486'),
(929, '111', '0', '2025-04-19', '20.171.207.100', '1745078533'),
(930, '30', '0', '2025-04-19', '20.171.207.100', '1745078581'),
(931, '85', '0', '2025-04-19', '20.171.207.100', '1745078621'),
(932, '87', '0', '2025-04-19', '20.171.207.100', '1745078671'),
(933, '88', '0', '2025-04-19', '20.171.207.100', '1745078840'),
(934, '55', '0', '2025-04-19', '20.171.207.100', '1745078982'),
(935, '108', '0', '2025-04-19', '20.171.207.100', '1745079054'),
(936, '77', '0', '2025-04-19', '20.171.207.100', '1745079108'),
(937, '34', '18', '2025-04-21', '203.194.97.159', '1745218166'),
(938, '13', '0', '2025-04-21', '203.194.97.159', '1745224474'),
(939, '14', '0', '2025-04-21', '203.194.97.159', '1745224635'),
(940, '30', '0', '2025-04-21', '203.194.97.159', '1745224658'),
(941, '64', '0', '2025-04-21', '203.194.97.159', '1745224692'),
(942, '34', '0', '2025-04-21', '203.194.97.159', '1745227417'),
(943, '34', '11', '2025-04-21', '203.194.97.159', '1745228047'),
(944, '98', '11', '2025-04-21', '203.194.97.159', '1745235553'),
(945, '97', '0', '2025-04-21', '203.192.235.169', '1745241233'),
(946, '89', '0', '2025-04-21', '203.192.235.169', '1745241263'),
(947, '34', '0', '2025-04-21', '43.166.132.142', '1745245661'),
(948, '96', '0', '2025-04-21', '203.192.235.169', '1745246195'),
(949, '44', '0', '2025-04-21', '203.192.235.169', '1745246348'),
(950, '46', '0', '2025-04-21', '203.192.235.169', '1745246406'),
(951, '34', '0', '2025-04-21', '43.165.67.57', '1745246540'),
(952, '98', '0', '2025-04-22', '170.106.15.3', '1745269699'),
(953, '98', '0', '2025-04-22', '43.157.50.58', '1745273289'),
(954, '111', '0', '2025-04-22', '43.165.70.220', '1745293612'),
(955, '13', '14', '2025-04-22', '202.148.63.132', '1745294311'),
(956, '82', '14', '2025-04-22', '202.148.63.132', '1745294337'),
(957, '112', '0', '2025-04-22', '43.166.244.192', '1745295312'),
(958, '63', '11', '2025-04-22', '202.148.63.132', '1745306135'),
(959, '98', '0', '2025-04-22', '202.148.63.132', '1745306273'),
(960, '97', '11', '2025-04-22', '202.148.63.132', '1745306710'),
(961, '96', '11', '2025-04-22', '202.148.63.132', '1745306735'),
(962, '13', '0', '2025-04-23', '202.148.63.132', '1745398963'),
(963, '34', '2', '2025-04-23', '202.148.63.132', '1745399116'),
(964, '63', '20', '2025-04-23', '202.148.63.132', '1745406658'),
(965, '98', '0', '2025-04-23', '202.148.63.132', '1745407201'),
(966, '63', '0', '2025-04-23', '202.148.63.132', '1745407664'),
(967, '13', '19', '2025-04-23', '202.148.63.132', '1745407741'),
(968, '98', '19', '2025-04-23', '202.148.63.132', '1745407870'),
(969, '12', '19', '2025-04-23', '202.148.63.132', '1745407967'),
(970, '63', '19', '2025-04-23', '202.148.63.132', '1745410855'),
(971, '13', '0', '2025-04-24', '103.38.68.5', '1745467616'),
(972, '13', '19', '2025-04-24', '103.38.68.5', '1745469217'),
(973, '98', '11', '2025-04-24', '103.38.68.5', '1745470214'),
(974, '98', '0', '2025-04-24', '103.38.68.5', '1745470289'),
(975, '34', '0', '2025-04-24', '103.38.68.5', '1745470300'),
(976, '97', '0', '2025-04-24', '103.38.68.5', '1745470317'),
(977, NULL, '0', '2025-04-24', '103.38.68.5', '1745472130'),
(978, '34', '19', '2025-04-24', '103.38.68.5', '1745474619'),
(979, '63', '0', '2025-04-24', '103.38.68.5', '1745491199'),
(980, '12', '0', '2025-04-24', '103.38.68.5', '1745491366'),
(981, '92', '0', '2025-04-24', '117.223.153.65', '1745492121'),
(982, '98', '0', '2025-04-25', '103.38.68.5', '1745556429'),
(983, '92', '11', '2025-04-25', '103.38.68.5', '1745561225'),
(984, '63', '11', '2025-04-25', '103.38.68.5', '1745561363'),
(985, '13', '0', '2025-04-25', '103.38.68.5', '1745561383'),
(986, '63', '0', '2025-04-25', '152.57.207.95', '1745566175'),
(987, '98', '0', '2025-04-25', '203.192.235.169', '1745580884'),
(988, '34', '0', '2025-04-26', '170.106.192.3', '1745635313'),
(989, '63', '0', '2025-04-26', '203.192.235.169', '1745651414'),
(990, '28', '0', '2025-04-26', '203.192.235.169', '1745651553'),
(991, '63', '0', '2025-04-26', '103.58.152.197', '1745654304'),
(992, '13', '0', '2025-04-26', '106.220.175.95', '1745658576'),
(993, '4', '0', '2025-04-26', '203.192.235.169', '1745662650'),
(994, '13', '0', '2025-04-26', '203.192.235.169', '1745662717'),
(995, '34', '14', '2025-04-26', '106.213.81.73', '1745667935'),
(996, '63', '0', '2025-04-26', '103.58.153.192', '1745667937'),
(997, '13', '0', '2025-04-26', '103.58.153.192', '1745667967'),
(998, '34', '0', '2025-04-26', '103.58.153.192', '1745667992'),
(999, '112', '14', '2025-04-26', '106.213.81.73', '1745668015'),
(1000, '62', '0', '2025-04-26', '103.58.153.192', '1745668059'),
(1001, '62', '14', '2025-04-26', '106.213.81.73', '1745668064'),
(1002, '12', '0', '2025-04-26', '103.58.153.192', '1745668109'),
(1003, '64', '0', '2025-04-26', '103.58.153.192', '1745668539'),
(1004, '98', '0', '2025-04-27', '49.51.243.156', '1745692905'),
(1005, '98', '0', '2025-04-27', '43.130.71.237', '1745696411'),
(1006, '112', '0', '2025-04-27', '49.51.243.156', '1745699939'),
(1007, '98', '0', '2025-04-27', '43.153.104.196', '1745707501'),
(1008, '11', '0', '2025-04-27', '43.130.74.193', '1745709228'),
(1009, '11', '0', '2025-04-27', '43.166.131.228', '1745712226'),
(1010, '34', '0', '2025-04-27', '43.166.244.192', '1745725559'),
(1011, '111', '0', '2025-04-27', '170.106.113.235', '1745729537'),
(1012, '64', '0', '2025-04-27', '43.166.1.243', '1745749171'),
(1013, '112', '0', '2025-04-27', '43.166.134.47', '1745750981'),
(1014, '64', '0', '2025-04-27', '49.51.204.74', '1745752810'),
(1015, '98', '0', '2025-04-27', '203.192.235.169', '1745757267'),
(1016, '10', '0', '2025-04-27', '203.192.235.169', '1745757280'),
(1017, '63', '0', '2025-04-27', '203.192.235.169', '1745757388'),
(1018, '95', '0', '2025-04-28', '3.15.7.20', '1745808901'),
(1019, '4', '0', '2025-04-28', '18.218.54.80', '1745809058'),
(1020, '98', '0', '2025-04-28', '18.218.54.80', '1745809058'),
(1021, '9', '0', '2025-04-28', '18.221.248.199', '1745809353'),
(1022, '8', '0', '2025-04-28', '3.133.129.118', '1745809764'),
(1023, '10', '0', '2025-04-28', '3.135.63.86', '1745809921'),
(1024, '13', '0', '2025-04-28', '18.216.8.36', '1745810319'),
(1025, '7', '0', '2025-04-28', '3.147.8.255', '1745810515'),
(1026, '12', '0', '2025-04-28', '3.142.250.99', '1745810692'),
(1027, '63', '0', '2025-04-28', '18.191.222.230', '1745811305'),
(1028, '34', '0', '2025-04-28', '18.191.222.230', '1745811305'),
(1029, '92', '0', '2025-04-28', '18.191.222.230', '1745811305'),
(1030, '98', '14', '2025-04-28', '103.58.153.192', '1745817424'),
(1031, '34', '14', '2025-04-28', '103.58.153.192', '1745819919'),
(1032, '112', '14', '2025-04-28', '103.58.153.192', '1745820594'),
(1033, '13', '0', '2025-04-28', '103.58.153.192', '1745820813'),
(1034, '34', '0', '2025-04-28', '103.58.153.192', '1745821368'),
(1035, '97', '0', '2025-04-28', '103.58.153.192', '1745821390'),
(1036, '96', '0', '2025-04-28', '103.58.153.192', '1745821420'),
(1037, '98', '11', '2025-04-28', '103.58.153.192', '1745821825'),
(1038, '98', '0', '2025-04-28', '103.58.153.192', '1745822203'),
(1039, '108', '0', '2025-04-28', '103.58.153.192', '1745824968'),
(1040, '12', '0', '2025-04-28', '103.38.68.16', '1745832654'),
(1041, '34', '0', '2025-04-28', '103.38.68.16', '1745833804'),
(1042, '91', '0', '2025-04-28', '103.38.68.16', '1745834353'),
(1043, '7', '0', '2025-04-28', '103.38.68.16', '1745835913'),
(1044, '103', '0', '2025-04-28', '103.38.68.16', '1745837095'),
(1045, '13', '0', '2025-04-28', '103.38.68.16', '1745837168'),
(1046, '96', '0', '2025-04-28', '103.38.68.16', '1745838313'),
(1047, '63', '0', '2025-04-28', '203.192.235.169', '1745846147'),
(1048, '44', '0', '2025-04-28', '203.192.235.169', '1745851232'),
(1049, '106', '0', '2025-04-28', '3.145.17.123', '1745852524'),
(1050, '107', '0', '2025-04-28', '3.128.78.43', '1745852824'),
(1051, '110', '0', '2025-04-28', '18.218.135.221', '1745852961'),
(1052, '105', '0', '2025-04-28', '18.218.135.221', '1745852961'),
(1053, '103', '0', '2025-04-28', '3.135.215.148', '1745853256'),
(1054, '26', '0', '2025-04-28', '18.219.43.26', '1745853403'),
(1055, '61', '0', '2025-04-28', '18.218.189.170', '1745853556'),
(1056, '109', '0', '2025-04-28', '3.23.59.191', '1745853662'),
(1057, '11', '0', '2025-04-28', '3.23.59.191', '1745853662'),
(1058, '100', '0', '2025-04-28', '18.118.209.158', '1745853761'),
(1059, '14', '0', '2025-04-28', '18.118.209.158', '1745853762'),
(1060, '62', '0', '2025-04-28', '3.12.111.193', '1745853909'),
(1061, '101', '0', '2025-04-28', '3.12.111.193', '1745853909'),
(1062, '102', '0', '2025-04-28', '52.14.77.105', '1745854055'),
(1063, '24', '0', '2025-04-28', '52.14.77.105', '1745854055'),
(1064, '64', '0', '2025-04-28', '52.14.77.105', '1745854055'),
(1065, '15', '0', '2025-04-28', '52.14.77.105', '1745854055'),
(1066, '111', '0', '2025-04-28', '18.116.43.130', '1745854201'),
(1067, '30', '0', '2025-04-28', '18.116.43.130', '1745854201'),
(1068, '104', '0', '2025-04-28', '3.134.95.211', '1745854356'),
(1069, '108', '0', '2025-04-28', '3.137.177.255', '1745854655'),
(1070, '32', '0', '2025-04-28', '3.147.73.112', '1745855554'),
(1071, '28', '0', '2025-04-28', '3.17.129.242', '1745855703'),
(1072, '27', '0', '2025-04-28', '3.17.129.242', '1745855703'),
(1073, '89', '0', '2025-04-28', '3.137.223.8', '1745856389'),
(1074, '79', '0', '2025-04-28', '3.12.160.150', '1745857132'),
(1075, '87', '0', '2025-04-28', '3.12.160.150', '1745857132'),
(1076, '84', '0', '2025-04-28', '18.222.116.64', '1745857279'),
(1077, '91', '0', '2025-04-28', '18.217.140.32', '1745857433'),
(1078, '90', '0', '2025-04-28', '18.217.140.32', '1745857433'),
(1079, '80', '0', '2025-04-28', '3.129.10.46', '1745857580'),
(1080, '96', '0', '2025-04-28', '3.129.10.46', '1745857580'),
(1081, '97', '0', '2025-04-28', '18.216.106.224', '1745857725'),
(1082, '86', '0', '2025-04-28', '18.216.106.224', '1745857725'),
(1083, '88', '0', '2025-04-28', '3.148.107.92', '1745857872'),
(1084, '82', '0', '2025-04-28', '3.144.91.201', '1745858003'),
(1085, '77', '0', '2025-04-28', '3.144.91.201', '1745858003'),
(1086, '83', '0', '2025-04-28', '3.144.126.147', '1745858158'),
(1087, '93', '0', '2025-04-28', '3.128.205.62', '1745858311'),
(1088, '81', '0', '2025-04-28', '3.128.205.62', '1745858311'),
(1089, '78', '0', '2025-04-28', '3.144.41.22', '1745858460'),
(1090, '94', '0', '2025-04-28', '18.119.103.13', '1745860102'),
(1091, '48', '0', '2025-04-29', '18.219.65.132', '1745866789'),
(1092, '49', '0', '2025-04-29', '13.59.243.24', '1745866940'),
(1093, '54', '0', '2025-04-29', '3.141.6.24', '1745867231'),
(1094, '70', '0', '2025-04-29', '13.58.242.216', '1745867521'),
(1095, '51', '0', '2025-04-29', '13.58.242.216', '1745867521'),
(1096, '47', '0', '2025-04-29', '3.145.133.121', '1745867671'),
(1097, '53', '0', '2025-04-29', '3.145.133.121', '1745867671'),
(1098, '71', '0', '2025-04-29', '3.131.95.159', '1745867826'),
(1099, '43', '0', '2025-04-29', '3.131.95.159', '1745867826'),
(1100, '74', '0', '2025-04-29', '3.131.95.159', '1745867826'),
(1101, '45', '0', '2025-04-29', '3.131.95.159', '1745867826'),
(1102, '44', '0', '2025-04-29', '18.222.175.173', '1745867974'),
(1103, '60', '0', '2025-04-29', '18.222.175.173', '1745867974'),
(1104, '72', '0', '2025-04-29', '18.222.175.173', '1745867974'),
(1105, '59', '0', '2025-04-29', '18.222.109.133', '1745868123'),
(1106, '56', '0', '2025-04-29', '18.222.109.133', '1745868123'),
(1107, '52', '0', '2025-04-29', '18.222.109.133', '1745868123'),
(1108, '58', '0', '2025-04-29', '3.137.152.81', '1745868288'),
(1109, '66', '0', '2025-04-29', '3.137.152.81', '1745868288'),
(1110, '46', '0', '2025-04-29', '3.144.132.48', '1745869402'),
(1111, '110', '0', '2025-04-29', '103.58.154.162', '1745902139'),
(1112, '109', '0', '2025-04-29', '103.58.154.162', '1745902234'),
(1113, '112', '0', '2025-04-29', '203.192.235.169', '1745907746'),
(1114, '111', '0', '2025-04-30', '43.131.36.84', '1745960793'),
(1115, '63', '0', '2025-05-01', '157.32.213.168', '1746067386'),
(1116, '64', '0', '2025-05-01', '43.166.245.120', '1746102599'),
(1117, '64', '0', '2025-05-01', '124.156.226.179', '1746103795'),
(1118, '7', '0', '2025-05-01', '43.130.106.18', '1746120352'),
(1119, '8', '0', '2025-05-01', '43.166.226.186', '1746121126'),
(1120, '112', '0', '2025-05-02', '170.106.147.63', '1746132548'),
(1121, '63', '0', '2025-05-02', '43.153.79.218', '1746133816'),
(1122, '98', '0', '2025-05-02', '43.130.91.95', '1746148480'),
(1123, '34', '0', '2025-05-02', '43.155.27.244', '1746150076'),
(1124, '98', '0', '2025-05-02', '43.130.105.21', '1746150843'),
(1125, '112', '0', '2025-05-02', '49.51.38.193', '1746159031'),
(1126, '11', '0', '2025-05-02', '43.166.132.142', '1746189417'),
(1127, '98', '0', '2025-05-02', '43.130.110.130', '1746199972'),
(1128, '98', '0', '2025-05-02', '124.156.157.91', '1746201750'),
(1129, '63', '0', '2025-05-03', '66.249.73.9', '1746246400'),
(1130, '8', '0', '2025-05-03', '66.249.73.8', '1746246404'),
(1131, '64', '0', '2025-05-03', '66.249.73.8', '1746247742'),
(1132, '14', '0', '2025-05-03', '66.249.73.10', '1746248244'),
(1133, '9', '0', '2025-05-03', '66.249.73.9', '1746248247'),
(1134, '93', '0', '2025-05-03', '66.249.73.9', '1746248248'),
(1135, '81', '0', '2025-05-03', '66.249.73.9', '1746248249'),
(1136, '101', '0', '2025-05-03', '66.249.73.9', '1746248249'),
(1137, '48', '0', '2025-05-03', '66.249.73.8', '1746249614'),
(1138, '51', '0', '2025-05-03', '66.249.73.9', '1746249690'),
(1139, '66', '0', '2025-05-03', '66.249.73.9', '1746249692'),
(1140, '43', '0', '2025-05-03', '66.249.73.9', '1746249753'),
(1141, '47', '0', '2025-05-03', '66.249.73.9', '1746249781'),
(1142, '52', '0', '2025-05-03', '66.249.73.8', '1746250074'),
(1143, '56', '0', '2025-05-03', '66.249.73.9', '1746250314'),
(1144, '55', '0', '2025-05-03', '66.249.73.8', '1746251048'),
(1145, '54', '0', '2025-05-03', '66.249.73.8', '1746252008'),
(1146, '8', '0', '2025-05-03', '66.249.73.9', '1746252357'),
(1147, '92', '0', '2025-05-03', '66.249.73.10', '1746252746'),
(1148, '94', '0', '2025-05-03', '66.249.73.8', '1746259589'),
(1149, '13', '0', '2025-05-03', '66.249.73.8', '1746259756'),
(1150, '112', '0', '2025-05-03', '66.249.73.8', '1746259878'),
(1151, '80', '0', '2025-05-03', '66.249.73.8', '1746259885'),
(1152, '89', '0', '2025-05-03', '66.249.73.8', '1746259967'),
(1153, '61', '0', '2025-05-03', '66.249.73.8', '1746260150'),
(1154, '75', '0', '2025-05-03', '66.249.73.8', '1746260534'),
(1155, '27', '0', '2025-05-03', '66.249.73.8', '1746260589'),
(1156, '83', '0', '2025-05-03', '66.249.73.9', '1746260743'),
(1157, '81', '0', '2025-05-03', '66.249.73.8', '1746260795'),
(1158, '93', '0', '2025-05-03', '66.249.73.10', '1746260987'),
(1159, '110', '0', '2025-05-03', '66.249.73.8', '1746261002'),
(1160, '92', '0', '2025-05-03', '66.249.73.8', '1746261175'),
(1161, '103', '0', '2025-05-03', '66.249.73.10', '1746261247'),
(1162, '32', '0', '2025-05-03', '66.249.73.9', '1746261308'),
(1163, '95', '0', '2025-05-03', '66.249.73.10', '1746261367'),
(1164, '98', '0', '2025-05-03', '66.249.73.10', '1746265942'),
(1165, '87', '0', '2025-05-03', '66.249.73.10', '1746267575'),
(1166, '88', '0', '2025-05-03', '66.249.73.8', '1746267904'),
(1167, '90', '0', '2025-05-03', '66.249.73.10', '1746268056'),
(1168, '96', '0', '2025-05-03', '66.249.73.8', '1746268078'),
(1169, '106', '0', '2025-05-03', '66.249.73.10', '1746268166'),
(1170, '102', '0', '2025-05-03', '66.249.73.8', '1746268207'),
(1171, '107', '0', '2025-05-03', '66.249.73.8', '1746268266'),
(1172, '70', '0', '2025-05-03', '66.249.73.10', '1746268657'),
(1173, '86', '0', '2025-05-03', '66.249.73.8', '1746269453'),
(1174, '45', '0', '2025-05-03', '66.249.73.8', '1746271963'),
(1175, '78', '0', '2025-05-03', '66.249.73.10', '1746272204'),
(1176, '12', '0', '2025-05-03', '66.249.73.8', '1746274353'),
(1177, '59', '0', '2025-05-03', '66.249.73.9', '1746277686'),
(1178, '44', '0', '2025-05-03', '203.192.235.169', '1746279614'),
(1179, '111', '0', '2025-05-03', '66.249.73.9', '1746279798'),
(1180, '98', '0', '2025-05-03', '66.249.73.8', '1746279935'),
(1181, '109', '0', '2025-05-03', '66.249.73.9', '1746280031'),
(1182, '105', '0', '2025-05-03', '66.249.73.9', '1746280370'),
(1183, '80', '0', '2025-05-03', '66.249.73.9', '1746289011'),
(1184, '86', '0', '2025-05-03', '66.249.73.10', '1746289786'),
(1185, '108', '0', '2025-05-03', '66.249.73.10', '1746290167'),
(1186, '108', '0', '2025-05-03', '66.249.73.8', '1746290244'),
(1187, '109', '0', '2025-05-03', '66.249.73.8', '1746290289'),
(1188, '100', '0', '2025-05-03', '66.249.73.9', '1746294632'),
(1189, '100', '0', '2025-05-03', '66.249.73.8', '1746295158'),
(1190, '86', '0', '2025-05-04', '66.249.73.8', '1746298936'),
(1191, '12', '0', '2025-05-04', '66.249.73.9', '1746301030'),
(1192, '91', '0', '2025-05-04', '66.249.68.137', '1746313161'),
(1193, '9', '0', '2025-05-04', '66.249.68.137', '1746356508'),
(1194, '72', '0', '2025-05-04', '66.249.68.137', '1746361947'),
(1195, '82', '0', '2025-05-04', '66.249.68.137', '1746367770'),
(1196, '34', '0', '2025-05-04', '66.249.79.33', '1746369013'),
(1197, '12', '0', '2025-05-04', '66.249.79.35', '1746369237'),
(1198, '92', '0', '2025-05-04', '66.249.79.34', '1746369312'),
(1199, '98', '0', '2025-05-04', '66.249.79.33', '1746369383'),
(1200, '77', '0', '2025-05-04', '66.249.79.33', '1746371047'),
(1201, '81', '0', '2025-05-04', '66.249.79.35', '1746371140'),
(1202, '10', '0', '2025-05-04', '66.249.79.34', '1746371209'),
(1203, '46', '0', '2025-05-04', '66.249.79.34', '1746374684'),
(1204, '44', '0', '2025-05-04', '66.249.79.34', '1746374801'),
(1205, '9', '0', '2025-05-04', '66.249.79.35', '1746375205'),
(1206, '13', '0', '2025-05-04', '66.249.79.34', '1746375927'),
(1207, '8', '0', '2025-05-04', '66.249.79.35', '1746375930'),
(1208, '95', '0', '2025-05-04', '66.249.79.33', '1746375982'),
(1209, '45', '0', '2025-05-04', '66.249.79.34', '1746376274'),
(1210, '47', '0', '2025-05-04', '66.249.79.35', '1746376335'),
(1211, '48', '0', '2025-05-04', '66.249.79.33', '1746376453'),
(1212, '70', '0', '2025-05-04', '66.249.79.35', '1746376657'),
(1213, '74', '0', '2025-05-04', '66.249.79.33', '1746376793'),
(1214, '52', '0', '2025-05-04', '66.249.79.33', '1746378082'),
(1215, '76', '0', '2025-05-04', '66.249.79.35', '1746378186'),
(1216, '56', '0', '2025-05-04', '66.249.79.33', '1746378325'),
(1217, '71', '0', '2025-05-04', '66.249.79.34', '1746378393'),
(1218, '49', '0', '2025-05-04', '66.249.79.33', '1746378460'),
(1219, '53', '0', '2025-05-04', '66.249.79.33', '1746378536'),
(1220, '58', '0', '2025-05-04', '66.249.79.35', '1746378671'),
(1221, '50', '0', '2025-05-04', '66.249.79.33', '1746378779'),
(1222, '60', '0', '2025-05-04', '66.249.79.34', '1746379964'),
(1223, '55', '0', '2025-05-04', '66.249.79.35', '1746380038'),
(1224, '59', '0', '2025-05-04', '66.249.79.34', '1746380237'),
(1225, '54', '0', '2025-05-04', '66.249.79.34', '1746380299'),
(1226, '75', '0', '2025-05-04', '66.249.79.33', '1746381450'),
(1227, '85', '0', '2025-05-04', '66.249.79.34', '1746381698'),
(1228, '78', '0', '2025-05-04', '66.249.79.33', '1746382095'),
(1229, '87', '0', '2025-05-04', '66.249.79.33', '1746382183'),
(1230, '82', '0', '2025-05-04', '66.249.79.35', '1746382619'),
(1231, '86', '0', '2025-05-04', '66.249.79.34', '1746382689'),
(1232, '11', '0', '2025-05-04', '66.249.79.33', '1746382876'),
(1233, '66', '0', '2025-05-04', '66.249.79.33', '1746383301'),
(1234, '94', '0', '2025-05-05', '66.249.79.33', '1746383428'),
(1235, '90', '0', '2025-05-05', '66.249.79.35', '1746388162'),
(1236, '82', '0', '2025-05-05', '66.249.68.135', '1746389057'),
(1237, '72', '0', '2025-05-05', '66.249.79.35', '1746390201'),
(1238, '63', '0', '2025-05-05', '66.249.79.34', '1746391168'),
(1239, '34', '0', '2025-05-05', '170.106.163.48', '1746393195'),
(1240, '88', '0', '2025-05-05', '66.249.79.35', '1746394245'),
(1241, '43', '0', '2025-05-05', '66.249.79.35', '1746396879'),
(1242, '57', '0', '2025-05-05', '66.249.79.35', '1746399340'),
(1243, '93', '0', '2025-05-05', '66.249.79.34', '1746400225'),
(1244, '11', '0', '2025-05-05', '66.249.68.136', '1746403728'),
(1245, '89', '0', '2025-05-05', '66.249.79.35', '1746411162'),
(1246, '27', '0', '2025-05-05', '66.249.79.34', '1746412419'),
(1247, '111', '0', '2025-05-05', '66.249.79.33', '1746420956'),
(1248, '13', '0', '2025-05-05', '119.82.126.10', '1746435750'),
(1249, '13', '0', '2025-05-05', '111.93.132.230', '1746435757'),
(1250, '13', '0', '2025-05-05', '52.66.101.190', '1746435818'),
(1251, '101', '0', '2025-05-05', '66.249.79.33', '1746454055'),
(1252, '102', '0', '2025-05-05', '66.249.79.35', '1746454099'),
(1253, '108', '0', '2025-05-05', '66.249.79.33', '1746455037'),
(1254, '105', '0', '2025-05-05', '66.249.79.34', '1746455090'),
(1255, '104', '0', '2025-05-05', '66.249.79.34', '1746455109'),
(1256, '103', '0', '2025-05-05', '66.249.79.33', '1746455173'),
(1257, '107', '0', '2025-05-05', '66.249.79.33', '1746455203'),
(1258, '109', '0', '2025-05-05', '66.249.79.35', '1746455233'),
(1259, '100', '0', '2025-05-05', '66.249.79.33', '1746455274'),
(1260, '112', '0', '2025-05-05', '66.249.79.33', '1746455338'),
(1261, '110', '0', '2025-05-05', '66.249.79.34', '1746455413'),
(1262, '7', '0', '2025-05-05', '66.249.79.33', '1746455502'),
(1263, '4', '0', '2025-05-05', '66.249.79.34', '1746455593'),
(1264, '30', '0', '2025-05-05', '66.249.79.34', '1746456331'),
(1265, '85', '0', '2025-05-05', '66.249.68.135', '1746460759'),
(1266, '51', '0', '2025-05-05', '66.249.79.36', '1746460910'),
(1267, '106', '0', '2025-05-05', '66.249.79.34', '1746463402'),
(1268, '77', '0', '2025-05-05', '66.249.68.137', '1746467836'),
(1269, '77', '0', '2025-05-06', '66.249.68.137', '1746472689'),
(1270, '85', '0', '2025-05-06', '66.249.68.135', '1746479534'),
(1271, '58', '0', '2025-05-06', '66.249.68.136', '1746479784'),
(1272, '58', '0', '2025-05-06', '66.249.68.135', '1746479809'),
(1273, '46', '0', '2025-05-06', '66.249.68.135', '1746480192'),
(1274, '74', '0', '2025-05-06', '66.249.68.135', '1746480214'),
(1275, '103', '14', '2025-05-06', '45.118.105.43', '1746511726'),
(1276, '103', '35', '2025-05-06', '45.118.105.43', '1746511871'),
(1277, '30', '0', '2025-05-06', '203.192.235.169', '1746517967'),
(1278, '111', '0', '2025-05-06', '170.106.163.84', '1746523655'),
(1279, '79', '0', '2025-05-06', '66.249.68.134', '1746530174'),
(1280, '111', '0', '2025-05-06', '43.130.71.237', '1746537208'),
(1281, '111', '0', '2025-05-06', '43.130.67.33', '1746540719'),
(1282, '79', '0', '2025-05-06', '66.249.68.132', '1746546196'),
(1283, '87', '0', '2025-05-06', '66.249.68.134', '1746548302'),
(1284, '62', '0', '2025-05-07', '66.249.68.133', '1746558149'),
(1285, '96', '0', '2025-05-07', '66.249.68.133', '1746562366'),
(1286, '7', '0', '2025-05-07', '66.249.68.134', '1746575251'),
(1287, '112', '35', '2025-05-07', '157.119.44.67', '1746594658'),
(1288, '7', '0', '2025-05-07', '66.249.68.132', '1746594999'),
(1289, '56', '0', '2025-05-07', '66.249.68.132', '1746596447'),
(1290, '98', '0', '2025-05-07', '43.159.149.216', '1746599315'),
(1291, '10', '0', '2025-05-07', '66.249.68.132', '1746600752'),
(1292, '98', '0', '2025-05-07', '43.135.135.57', '1746602784'),
(1293, '10', '0', '2025-05-07', '66.249.68.133', '1746604288'),
(1294, '112', '0', '2025-05-07', '43.165.70.220', '1746607530'),
(1295, '112', '0', '2025-05-07', '43.166.244.251', '1746617901'),
(1296, '98', '0', '2025-05-07', '43.157.180.116', '1746632279'),
(1297, '56', '0', '2025-05-08', '66.249.68.133', '1746643409'),
(1298, '96', '7', '2025-05-08', '203.192.238.81', '1746681210'),
(1299, '92', '35', '2025-05-08', '203.192.238.81', '1746696364'),
(1300, '107', '35', '2025-05-08', '203.192.238.81', '1746696373'),
(1301, '101', '35', '2025-05-08', '203.192.238.81', '1746696405'),
(1302, '111', '35', '2025-05-08', '203.192.238.81', '1746696418'),
(1303, '63', '0', '2025-05-08', '203.192.238.81', '1746696574'),
(1304, '34', '0', '2025-05-08', '203.192.238.81', '1746696628'),
(1305, '34', '35', '2025-05-08', '203.192.238.81', '1746696644'),
(1306, '32', '0', '2025-05-09', '66.249.79.33', '1746747425'),
(1307, '12', '0', '2025-05-09', '106.210.214.81', '1746769871'),
(1308, '100', '35', '2025-05-09', '106.213.81.88', '1746771997'),
(1309, '111', '35', '2025-05-09', '106.213.81.88', '1746774757'),
(1310, '103', '35', '2025-05-09', '106.213.81.88', '1746783717'),
(1311, '88', '35', '2025-05-09', '106.213.81.88', '1746783943'),
(1312, '34', '0', '2025-05-09', '203.192.238.81', '1746783988'),
(1313, '63', '0', '2025-05-09', '157.32.220.193', '1746790541'),
(1314, '24', '0', '2025-05-09', '66.249.79.34', '1746791318'),
(1315, '28', '0', '2025-05-09', '66.249.79.34', '1746791372'),
(1316, '34', '0', '2025-05-10', '43.134.141.244', '1746822118'),
(1317, '26', '0', '2025-05-10', '66.249.79.34', '1746834132'),
(1318, '61', '0', '2025-05-10', '66.249.79.194', '1746834648'),
(1319, '32', '0', '2025-05-10', '157.180.7.88', '1746891414'),
(1320, '32\'', '0', '2025-05-10', '157.180.7.88', '1746891414'),
(1321, '32', '0', '2025-05-11', '157.180.7.88', '1746906665'),
(1322, '64', '0', '2025-05-11', '43.166.136.24', '1746926407'),
(1323, '111', '0', '2025-05-11', '43.167.232.38', '1746961658'),
(1324, '112', '0', '2025-05-12', '170.106.165.186', '1746992382'),
(1325, '98', '0', '2025-05-12', '170.106.82.209', '1747021775'),
(1326, '98', '0', '2025-05-12', '43.167.239.66', '1747024752'),
(1327, '112', '0', '2025-05-12', '43.153.67.21', '1747025960'),
(1328, '63', '0', '2025-05-12', '43.131.253.14', '1747033228'),
(1329, '63', '0', '2025-05-12', '43.153.102.138', '1747036630'),
(1330, '13', '0', '2025-05-12', '223.233.87.54', '1747039903'),
(1331, '63', '0', '2025-05-12', '223.233.87.54', '1747039927'),
(1332, '12', '0', '2025-05-12', '40.77.167.72', '1747045075'),
(1333, '98', '0', '2025-05-12', '43.165.65.180', '1747057437'),
(1334, '111', '0', '2025-05-12', '43.130.74.193', '1747060489'),
(1335, '63', '0', '2025-05-12', '203.192.235.169', '1747061997'),
(1336, '13', '0', '2025-05-12', '203.192.235.169', '1747062051'),
(1337, '98', '0', '2025-05-12', '106.195.10.96', '1747062197'),
(1338, '12', '0', '2025-05-12', '106.195.10.96', '1747062230'),
(1339, '13', '0', '2025-05-12', '106.195.10.96', '1747062241'),
(1340, '12', '0', '2025-05-13', '43.159.152.187', '1747086369'),
(1341, '12', '0', '2025-05-13', '43.135.183.82', '1747088436'),
(1342, '52', '0', '2025-05-13', '203.192.235.169', '1747145364'),
(1343, '102', '35', '2025-05-13', '106.213.85.62', '1747155043'),
(1344, '110', '35', '2025-05-13', '106.213.85.62', '1747155050'),
(1345, '76', '0', '2025-05-14', '157.180.7.88', '1747201356'),
(1346, '76\'', '0', '2025-05-14', '157.180.7.88', '1747201357'),
(1347, '9', '0', '2025-05-14', '40.77.167.247', '1747202655'),
(1348, '7', '0', '2025-05-14', '20.171.207.44', '1747207767'),
(1349, '12', '0', '2025-05-14', '20.171.207.44', '1747207828'),
(1350, '4', '0', '2025-05-14', '20.171.207.44', '1747207884'),
(1351, '14', '0', '2025-05-14', '20.171.207.44', '1747208909'),
(1352, '15', '0', '2025-05-14', '20.171.207.44', '1747209030'),
(1353, '11', '0', '2025-05-14', '20.171.207.44', '1747209244'),
(1354, '13', '0', '2025-05-14', '20.171.207.44', '1747210242'),
(1355, '8', '0', '2025-05-14', '20.171.207.44', '1747210306'),
(1356, '10', '0', '2025-05-14', '20.171.207.44', '1747210797'),
(1357, '9', '0', '2025-05-14', '20.171.207.44', '1747210979'),
(1358, '108', '0', '2025-05-14', '203.192.235.169', '1747224723'),
(1359, '104', '0', '2025-05-14', '203.192.235.169', '1747224736'),
(1360, '7', '0', '2025-05-14', '203.192.235.169', '1747225713'),
(1361, '14', '0', '2025-05-14', '66.249.79.34', '1747227385'),
(1362, '62', '0', '2025-05-14', '66.249.79.34', '1747235164'),
(1363, '64', '0', '2025-05-15', '66.249.79.33', '1747255677'),
(1364, '15', '0', '2025-05-15', '66.249.79.33', '1747255706'),
(1365, '93', '0', '2025-05-15', '51.8.102.37', '1747298744'),
(1366, '4', '0', '2025-05-16', '40.77.167.37', '1747337487'),
(1367, '10', '0', '2025-05-16', '66.249.79.33', '1747353718'),
(1368, '111', '0', '2025-05-16', '43.152.72.244', '1747389426'),
(1369, '12', '0', '2025-05-16', '43.152.72.244', '1747390626'),
(1370, '111', '0', '2025-05-16', '43.159.149.216', '1747392442'),
(1371, '62', '0', '2025-05-16', '66.249.68.136', '1747395373'),
(1372, '10', '0', '2025-05-16', '66.249.79.34', '1747416386'),
(1373, '98', '0', '2025-05-16', '43.157.153.236', '1747418038'),
(1374, '98', '0', '2025-05-16', '84.239.37.12', '1747419365'),
(1375, '92', '0', '2025-05-16', '84.239.37.12', '1747419371'),
(1376, '95', '0', '2025-05-16', '84.239.37.12', '1747419427'),
(1377, '13', '0', '2025-05-16', '84.239.37.12', '1747419433'),
(1378, '12', '0', '2025-05-16', '84.239.37.12', '1747419455'),
(1379, '7', '0', '2025-05-16', '84.239.37.12', '1747419467'),
(1380, '4', '0', '2025-05-16', '84.239.37.12', '1747419487'),
(1381, '63', '0', '2025-05-16', '84.239.37.12', '1747419497'),
(1382, '10', '0', '2025-05-16', '84.239.37.12', '1747419506'),
(1383, '9', '0', '2025-05-16', '84.239.37.12', '1747419508'),
(1384, '14', '0', '2025-05-16', '84.239.37.12', '1747419548'),
(1385, '34', '0', '2025-05-16', '84.239.37.12', '1747419584'),
(1386, '8', '0', '2025-05-16', '84.239.37.12', '1747419712'),
(1387, '9', '0', '2025-05-17', '66.249.79.33', '1747440555'),
(1388, '98', '0', '2025-05-17', '43.135.186.135', '1747450880'),
(1389, '11', '0', '2025-05-17', '66.249.79.34', '1747452398'),
(1390, '12', '0', '2025-05-17', '66.249.79.34', '1747460213'),
(1391, '7', '0', '2025-05-17', '66.249.79.35', '1747460235'),
(1392, '8', '0', '2025-05-17', '66.249.79.33', '1747460247'),
(1393, '34', '0', '2025-05-17', '49.51.50.147', '1747465399'),
(1394, '34', '0', '2025-05-17', '106.222.208.94', '1747482555'),
(1395, '34', '0', '2025-05-17', '43.166.226.186', '1747485268'),
(1396, '34', '0', '2025-05-17', '43.153.71.132', '1747488278'),
(1397, '112', '0', '2025-05-18', '43.166.134.47', '1747520345'),
(1398, '111', '0', '2025-05-18', '43.157.207.78', '1747521540'),
(1399, '112', '0', '2025-05-18', '43.135.144.126', '1747524037'),
(1400, '111', '0', '2025-05-18', '49.51.178.45', '1747525179'),
(1401, '7', '0', '2025-05-18', '66.249.68.137', '1747528848'),
(1402, '10', '0', '2025-05-18', '203.192.235.169', '1747573187'),
(1403, '13', '0', '2025-05-18', '203.192.235.169', '1747573206'),
(1404, '12', '0', '2025-05-18', '203.192.235.169', '1747573217'),
(1405, '63', '0', '2025-05-18', '203.192.235.169', '1747573324'),
(1406, '13', '0', '2025-05-18', '152.56.2.228', '1747575251'),
(1407, '34', '0', '2025-05-18', '152.56.1.248', '1747579992'),
(1408, '112', '0', '2025-05-18', '152.56.1.248', '1747580001'),
(1409, '111', '0', '2025-05-18', '152.56.1.248', '1747580013'),
(1410, '63', '0', '2025-05-19', '106.216.254.0', '1747621619'),
(1411, '97', '0', '2025-05-19', '117.223.153.43', '1747666981'),
(1412, '71', '0', '2025-05-19', '117.223.153.43', '1747667015'),
(1413, '80', '0', '2025-05-20', '117.223.153.43', '1747719099'),
(1414, '63', '0', '2025-05-20', '103.38.69.255', '1747720044'),
(1415, '63', '0', '2025-05-20', '203.192.235.169', '1747721839'),
(1416, '13', '0', '2025-05-20', '203.192.235.169', '1747721852'),
(1417, '98', '0', '2025-05-20', '203.192.235.169', '1747723454'),
(1418, '92', '0', '2025-05-20', '103.38.69.255', '1747723708'),
(1419, '34', '0', '2025-05-20', '203.192.235.169', '1747724930'),
(1420, '97', '0', '2025-05-20', '203.192.235.169', '1747725173'),
(1421, '72', '0', '2025-05-20', '203.192.235.169', '1747725232'),
(1422, '45', '0', '2025-05-20', '203.192.235.169', '1747725244'),
(1423, '46', '0', '2025-05-20', '203.192.235.169', '1747725256'),
(1424, '98', '0', '2025-05-20', '157.32.200.162', '1747725263'),
(1425, '98', '0', '2025-05-20', '66.249.83.5', '1747725278'),
(1426, '98', '0', '2025-05-20', '66.249.83.135', '1747725280'),
(1427, '98', '0', '2025-05-20', '66.249.83.137', '1747725280'),
(1428, '109', '0', '2025-05-20', '203.192.235.169', '1747725312'),
(1429, '98', '0', '2025-05-20', '27.97.86.192', '1747725352'),
(1430, '112', '0', '2025-05-20', '157.32.200.162', '1747725368'),
(1431, '96', '0', '2025-05-20', '203.192.235.169', '1747725374'),
(1432, '106', '0', '2025-05-20', '157.32.200.162', '1747725382'),
(1433, '10', '0', '2025-05-20', '27.97.86.192', '1747725395'),
(1434, '8', '0', '2025-05-20', '27.97.86.192', '1747725409'),
(1435, '53', '0', '2025-05-20', '203.192.235.169', '1747725416'),
(1436, '50', '0', '2025-05-20', '203.192.235.169', '1747725432'),
(1437, '43', '0', '2025-05-20', '203.192.235.169', '1747725444'),
(1438, '44', '0', '2025-05-20', '203.192.235.169', '1747725462'),
(1439, '47', '0', '2025-05-20', '203.192.235.169', '1747725480'),
(1440, '49', '0', '2025-05-20', '203.192.235.169', '1747725492'),
(1441, '55', '0', '2025-05-20', '203.192.235.169', '1747725511'),
(1442, '60', '0', '2025-05-20', '203.192.235.169', '1747725550'),
(1443, '112', '0', '2025-05-20', '27.97.86.192', '1747725564'),
(1444, '71', '0', '2025-05-20', '203.192.235.169', '1747725573'),
(1445, '101', '0', '2025-05-20', '203.192.235.169', '1747725744'),
(1446, '100', '0', '2025-05-20', '203.192.235.169', '1747725794'),
(1447, '110', '0', '2025-05-20', '203.192.235.169', '1747725829'),
(1448, '9', '0', '2025-05-20', '203.192.235.169', '1747726019'),
(1449, '7', '0', '2025-05-20', '203.192.235.169', '1747726048'),
(1450, '112', '0', '2025-05-20', '27.97.86.31', '1747726417'),
(1451, '11', '0', '2025-05-20', '203.192.235.169', '1747726612'),
(1452, '98', '0', '2025-05-20', '103.38.69.255', '1747729778'),
(1453, '102', '0', '2025-05-20', '103.38.69.255', '1747730462'),
(1454, '72', '0', '2025-05-20', '103.38.69.255', '1747730465'),
(1455, '96', '0', '2025-05-20', '103.38.69.255', '1747730959'),
(1456, '112', '0', '2025-05-20', '103.38.69.255', '1747731865'),
(1457, '4', '0', '2025-05-20', '103.38.69.255', '1747731871'),
(1458, '64', '0', '2025-05-20', '103.38.69.255', '1747732277'),
(1459, '34', '35', '2025-05-20', '103.38.69.255', '1747732408'),
(1460, '11', '0', '2025-05-20', '106.216.240.235', '1747733589'),
(1461, '62', '0', '2025-05-20', '103.38.69.255', '1747735591'),
(1462, '100', '0', '2025-05-20', '103.38.69.255', '1747738796'),
(1463, '13', '0', '2025-05-20', '103.38.69.255', '1747742245'),
(1464, '15', '0', '2025-05-20', '203.192.235.169', '1747742497'),
(1465, '71', '0', '2025-05-20', '117.223.153.43', '1747745823'),
(1466, '12', '0', '2025-05-20', '203.192.235.169', '1747745865'),
(1467, '107', '0', '2025-05-21', '103.38.69.255', '1747802235'),
(1468, '100', '0', '2025-05-21', '103.38.69.255', '1747803195'),
(1469, '34', '0', '2025-05-21', '103.38.69.255', '1747803370'),
(1470, '110', '0', '2025-05-21', '103.38.69.255', '1747804143'),
(1471, '105', '0', '2025-05-21', '103.38.69.255', '1747804174'),
(1472, '92', '0', '2025-05-21', '103.38.69.255', '1747805547'),
(1473, '43', '0', '2025-05-21', '103.38.69.255', '1747805749'),
(1474, '70', '0', '2025-05-21', '103.38.69.255', '1747805892'),
(1475, '112', '0', '2025-05-21', '103.38.69.255', '1747805928'),
(1476, '63', '0', '2025-05-21', '103.38.69.255', '1747808126'),
(1477, '94', '0', '2025-05-21', '103.38.69.255', '1747808978'),
(1478, '98', '0', '2025-05-21', '103.38.69.255', '1747808990'),
(1479, '63', '0', '2025-05-21', '223.233.85.21', '1747809258'),
(1480, '95', '0', '2025-05-21', '103.38.69.255', '1747809793'),
(1481, '106', '0', '2025-05-21', '103.38.69.255', '1747809830'),
(1482, '111', '0', '2025-05-21', '103.38.69.255', '1747809913'),
(1483, '109', '0', '2025-05-21', '103.38.69.255', '1747810129'),
(1484, '101', '0', '2025-05-21', '103.38.69.255', '1747811955'),
(1485, '98', '0', '2025-05-21', '103.182.130.133', '1747816118'),
(1486, '112', '0', '2025-05-21', '43.166.240.231', '1747817157'),
(1487, '112', '0', '2025-05-21', '170.106.82.209', '1747819449'),
(1488, '34', '0', '2025-05-21', '103.182.130.133', '1747822474'),
(1489, '92', '0', '2025-05-21', '103.182.130.133', '1747822587'),
(1490, '45', '0', '2025-05-21', '103.182.130.133', '1747822673'),
(1491, '57', '0', '2025-05-21', '103.182.130.133', '1747822699'),
(1492, '72', '0', '2025-05-21', '103.182.130.133', '1747822712'),
(1493, '75', '0', '2025-05-21', '103.182.130.133', '1747822730'),
(1494, '12', '0', '2025-05-21', '103.38.68.131', '1747827106'),
(1495, '12', '0', '2025-05-21', '106.210.207.9', '1747827170'),
(1496, '13', '0', '2025-05-21', '103.38.68.131', '1747827713'),
(1497, '8', '0', '2025-05-21', '103.38.68.131', '1747827917'),
(1498, '10', '0', '2025-05-21', '103.38.68.131', '1747827924'),
(1499, '4', '0', '2025-05-21', '103.38.68.131', '1747827941'),
(1500, '28', '0', '2025-05-21', '103.38.68.131', '1747827976'),
(1501, '26', '0', '2025-05-21', '103.38.68.131', '1747827982'),
(1502, '62', '0', '2025-05-21', '103.38.68.131', '1747827987'),
(1503, '64', '0', '2025-05-21', '103.38.68.131', '1747827992'),
(1504, '32', '0', '2025-05-21', '103.38.68.131', '1747827998'),
(1505, '106', '0', '2025-05-21', '103.38.68.131', '1747828015'),
(1506, '12', '0', '2025-05-21', '43.165.70.220', '1747828467'),
(1507, '92', '0', '2025-05-21', '103.38.68.131', '1747828605'),
(1508, '48', '0', '2025-05-21', '103.38.68.131', '1747828761'),
(1509, '72', '0', '2025-05-21', '103.38.68.131', '1747828785'),
(1510, '88', '0', '2025-05-21', '203.192.235.169', '1747829346'),
(1511, '12', '0', '2025-05-21', '43.166.129.247', '1747831517'),
(1512, '107', '0', '2025-05-21', '203.192.235.169', '1747833073'),
(1513, '95', '0', '2025-05-22', '40.77.167.16', '1747857169'),
(1514, '112', '0', '2025-05-22', '51.68.237.69', '1747885001'),
(1515, '110', '0', '2025-05-22', '51.68.237.69', '1747885007'),
(1516, '34\'', '0', '2025-05-22', '51.68.237.69', '1747885040'),
(1517, '34', '0', '2025-05-22', '51.68.237.69', '1747885040'),
(1518, '112\'', '0', '2025-05-22', '51.68.237.69', '1747885075'),
(1519, '110\'', '0', '2025-05-22', '51.68.237.69', '1747885094'),
(1520, '95\'', '0', '2025-05-22', '51.68.237.69', '1747885098'),
(1521, '95', '0', '2025-05-22', '51.68.237.69', '1747885098'),
(1522, '64\'', '0', '2025-05-22', '51.68.237.69', '1747885115'),
(1523, '64', '0', '2025-05-22', '51.68.237.69', '1747885116'),
(1524, '10', '0', '2025-05-22', '40.77.167.150', '1747886337'),
(1525, '98', '0', '2025-05-22', '103.38.68.131', '1747889762'),
(1526, '112', '0', '2025-05-22', '103.38.68.131', '1747890248'),
(1527, '108', '0', '2025-05-22', '103.38.68.131', '1747890348'),
(1528, '97', '0', '2025-05-22', '152.56.4.144', '1747891739'),
(1529, '96', '0', '2025-05-22', '203.192.235.169', '1747891773'),
(1530, '60', '0', '2025-05-22', '203.192.235.169', '1747894833'),
(1531, '34', '0', '2025-05-22', '43.130.111.40', '1747897237'),
(1532, '98', '0', '2025-05-22', '43.135.133.241', '1747899522'),
(1533, '98', '0', '2025-05-22', '49.51.52.250', '1747900760'),
(1534, '98', '0', '2025-05-22', '43.166.245.250', '1747903025'),
(1535, '34', '0', '2025-05-22', '103.38.68.131', '1747903051'),
(1536, '10', '0', '2025-05-22', '103.38.68.131', '1747903089'),
(1537, '7', '0', '2025-05-22', '103.38.68.131', '1747903119'),
(1538, '98', '0', '2025-05-22', '43.157.188.74', '1747904275'),
(1539, '64', '0', '2025-05-22', '43.135.145.117', '1747905636'),
(1540, '110', '35', '2025-05-22', '103.38.68.131', '1747909191'),
(1541, '95', '0', '2025-05-22', '103.38.68.131', '1747911834'),
(1542, '63', '35', '2025-05-22', '103.38.68.131', '1747914145'),
(1543, '97', '0', '2025-05-22', '203.192.235.169', '1747922211'),
(1544, '10', '0', '2025-05-22', '203.192.235.169', '1747924952'),
(1545, '98', '0', '2025-05-22', '203.192.235.169', '1747926361'),
(1546, '112', '0', '2025-05-23', '170.106.65.93', '1747957882'),
(1547, '112', '0', '2025-05-23', '43.130.78.203', '1747961383'),
(1548, '98', '0', '2025-05-23', '103.38.68.131', '1747983015'),
(1549, '63', '0', '2025-05-23', '103.38.68.131', '1747983798'),
(1550, '13', '0', '2025-05-23', '103.38.68.131', '1747984278'),
(1551, '95', '0', '2025-05-23', '103.38.68.131', '1747989003'),
(1552, '92', '0', '2025-05-23', '103.38.68.131', '1747989572'),
(1553, '92', '0', '2025-05-23', '20.171.207.23', '1747992021'),
(1554, '80', '0', '2025-05-23', '20.171.207.23', '1747992412'),
(1555, '77', '0', '2025-05-23', '20.171.207.23', '1747992482'),
(1556, '49', '0', '2025-05-23', '20.171.207.23', '1747993246'),
(1557, '71', '0', '2025-05-23', '20.171.207.23', '1747993256'),
(1558, '56', '0', '2025-05-23', '20.171.207.23', '1747993257'),
(1559, '78', '0', '2025-05-23', '20.171.207.23', '1747993259'),
(1560, '70', '0', '2025-05-23', '20.171.207.23', '1747993266'),
(1561, '59', '0', '2025-05-23', '20.171.207.23', '1747993268'),
(1562, '96', '0', '2025-05-23', '20.171.207.23', '1747993280'),
(1563, '57', '0', '2025-05-23', '20.171.207.23', '1747993282'),
(1564, '66', '0', '2025-05-23', '20.171.207.23', '1747993284'),
(1565, '90', '0', '2025-05-23', '20.171.207.23', '1747993341'),
(1566, '83', '0', '2025-05-23', '20.171.207.23', '1747993343'),
(1567, '82', '0', '2025-05-23', '20.171.207.23', '1747993348'),
(1568, '81', '0', '2025-05-23', '20.171.207.23', '1747993447'),
(1569, '46', '0', '2025-05-23', '20.171.207.23', '1747993451'),
(1570, '52', '0', '2025-05-23', '20.171.207.23', '1747993453'),
(1571, '53', '0', '2025-05-23', '20.171.207.23', '1747993455'),
(1572, '97', '0', '2025-05-23', '20.171.207.23', '1747993457'),
(1573, '54', '0', '2025-05-23', '20.171.207.23', '1747993495'),
(1574, '48', '0', '2025-05-23', '20.171.207.23', '1747993500'),
(1575, '79', '0', '2025-05-23', '20.171.207.23', '1747993502'),
(1576, '51', '0', '2025-05-23', '20.171.207.23', '1747993507'),
(1577, '75', '0', '2025-05-23', '20.171.207.23', '1747993511'),
(1578, '45', '0', '2025-05-23', '20.171.207.23', '1747993515'),
(1579, '93', '0', '2025-05-23', '20.171.207.23', '1747993519'),
(1580, '44', '0', '2025-05-23', '20.171.207.23', '1747993528'),
(1581, '84', '0', '2025-05-23', '20.171.207.23', '1747993535'),
(1582, '89', '0', '2025-05-23', '20.171.207.23', '1747993539'),
(1583, '91', '0', '2025-05-23', '20.171.207.23', '1747993605'),
(1584, '60', '0', '2025-05-23', '20.171.207.23', '1747993609'),
(1585, '86', '0', '2025-05-23', '20.171.207.23', '1747993614'),
(1586, '74', '0', '2025-05-23', '20.171.207.23', '1747993619'),
(1587, '72', '0', '2025-05-23', '20.171.207.23', '1747993627'),
(1588, '55', '0', '2025-05-23', '20.171.207.23', '1747993631'),
(1589, '88', '0', '2025-05-23', '20.171.207.23', '1747993633'),
(1590, '85', '0', '2025-05-23', '20.171.207.23', '1747993636'),
(1591, '87', '0', '2025-05-23', '20.171.207.23', '1747993639'),
(1592, '47', '0', '2025-05-23', '20.171.207.23', '1747993640'),
(1593, '94', '0', '2025-05-23', '20.171.207.23', '1747993701'),
(1594, '76', '0', '2025-05-23', '20.171.207.23', '1747993705'),
(1595, '43', '0', '2025-05-23', '20.171.207.23', '1747993707'),
(1596, '50', '0', '2025-05-23', '20.171.207.23', '1747993710'),
(1597, '58', '0', '2025-05-23', '20.171.207.23', '1747993721'),
(1598, '62', '0', '2025-05-23', '20.171.207.23', '1747993734'),
(1599, '101', '0', '2025-05-23', '20.171.207.23', '1747993735'),
(1600, '111', '0', '2025-05-23', '20.171.207.23', '1747993737'),
(1601, '102', '0', '2025-05-23', '20.171.207.23', '1747993740'),
(1602, '103', '0', '2025-05-23', '20.171.207.23', '1747993742'),
(1603, '100', '0', '2025-05-23', '20.171.207.23', '1747993746'),
(1604, '24', '0', '2025-05-23', '20.171.207.23', '1747993816'),
(1605, '109', '0', '2025-05-23', '20.171.207.23', '1747993822'),
(1606, '110', '0', '2025-05-23', '20.171.207.23', '1747993833'),
(1607, '104', '0', '2025-05-23', '20.171.207.23', '1747993838'),
(1608, '106', '0', '2025-05-23', '20.171.207.23', '1747993841'),
(1609, '112', '0', '2025-05-23', '20.171.207.23', '1747993863'),
(1610, '61', '0', '2025-05-23', '20.171.207.23', '1747993865'),
(1611, '105', '0', '2025-05-23', '20.171.207.23', '1747993906'),
(1612, '107', '0', '2025-05-23', '20.171.207.23', '1747993908'),
(1613, '27', '0', '2025-05-23', '20.171.207.23', '1747993909'),
(1614, '30', '0', '2025-05-23', '20.171.207.23', '1747993910'),
(1615, '64', '0', '2025-05-23', '20.171.207.23', '1747993913'),
(1616, '32', '0', '2025-05-23', '20.171.207.23', '1747993917'),
(1617, '108', '0', '2025-05-23', '20.171.207.23', '1747993921'),
(1618, '28', '0', '2025-05-23', '20.171.207.23', '1747993932'),
(1619, '26', '0', '2025-05-23', '20.171.207.23', '1747993938'),
(1620, '114', '0', '2025-05-23', '203.194.102.239', '1748001821'),
(1621, '34', '0', '2025-05-23', '203.194.102.239', '1748002521'),
(1622, '13', '0', '2025-05-24', '203.194.102.239', '1748059629'),
(1623, '34', '0', '2025-05-24', '203.194.102.239', '1748059840'),
(1624, '115', '0', '2025-05-24', '49.51.196.42', '1748064238'),
(1625, '91', '0', '2025-05-24', '203.192.235.169', '1748067378'),
(1626, '116', '0', '2025-05-24', '203.194.102.239', '1748068542');
INSERT INTO `product_visiter` (`product_visiter_id`, `prod_id`, `user_id`, `visit_date`, `ip_address`, `visit_time`) VALUES
(1627, '116', '0', '2025-05-24', '203.192.235.169', '1748069812'),
(1628, '97', '0', '2025-05-24', '203.194.105.223', '1748076903'),
(1629, '112', '0', '2025-05-24', '203.194.102.239', '1748077145'),
(1630, '106', '0', '2025-05-24', '203.194.102.239', '1748077195'),
(1631, '62', '0', '2025-05-24', '203.194.102.239', '1748077459'),
(1632, '63', '0', '2025-05-24', '203.194.102.239', '1748077470'),
(1633, '64', '0', '2025-05-24', '203.194.102.239', '1748077482'),
(1634, '109', '0', '2025-05-24', '203.192.235.169', '1748077556'),
(1635, '108', '0', '2025-05-24', '203.192.235.169', '1748077622'),
(1636, '100', '0', '2025-05-24', '203.192.235.169', '1748077658'),
(1637, '110', '0', '2025-05-24', '203.194.102.239', '1748077744'),
(1638, '79', '0', '2025-05-24', '203.194.102.239', '1748077929'),
(1639, '107', '0', '2025-05-24', '203.194.102.239', '1748078090'),
(1640, '103', '0', '2025-05-24', '203.194.102.239', '1748078106'),
(1641, '105', '0', '2025-05-24', '203.194.102.239', '1748078127'),
(1642, '45', '0', '2025-05-24', '203.194.102.239', '1748078494'),
(1643, '111', '0', '2025-05-24', '203.194.102.239', '1748078631'),
(1644, '98', '0', '2025-05-24', '203.194.102.239', '1748078643'),
(1645, '95', '0', '2025-05-24', '203.194.102.239', '1748078753'),
(1646, '104', '0', '2025-05-24', '203.194.102.239', '1748079514'),
(1647, '109', '0', '2025-05-24', '203.194.102.239', '1748080405'),
(1648, '61', '0', '2025-05-24', '106.193.216.242', '1748082241'),
(1649, '12', '0', '2025-05-24', '203.194.102.239', '1748082843'),
(1650, '10', '0', '2025-05-24', '106.193.216.242', '1748084401'),
(1651, '97', '0', '2025-05-24', '203.192.235.169', '1748084591'),
(1652, '96', '0', '2025-05-24', '203.192.235.169', '1748084973'),
(1653, '94', '0', '2025-05-24', '203.192.235.169', '1748085552'),
(1654, '93', '0', '2025-05-24', '203.192.235.169', '1748085632'),
(1655, '92', '0', '2025-05-24', '203.192.235.169', '1748085695'),
(1656, '90', '0', '2025-05-24', '203.192.235.169', '1748085783'),
(1657, '89', '0', '2025-05-24', '203.192.235.169', '1748086249'),
(1658, '88', '0', '2025-05-24', '203.192.235.169', '1748087044'),
(1659, '7', '0', '2025-05-24', '207.46.13.127', '1748087112'),
(1660, '86', '0', '2025-05-24', '203.192.235.169', '1748087376'),
(1661, '63', '0', '2025-05-24', '129.226.93.214', '1748087720'),
(1662, '63', '0', '2025-05-24', '43.167.232.38', '1748089075'),
(1663, '85', '0', '2025-05-24', '203.192.235.169', '1748090409'),
(1664, '74', '0', '2025-05-24', '203.192.235.169', '1748091509'),
(1665, '71', '0', '2025-05-24', '203.192.235.169', '1748091666'),
(1666, '70', '0', '2025-05-24', '203.192.235.169', '1748091729'),
(1667, '66', '0', '2025-05-24', '203.192.235.169', '1748091838'),
(1668, '63', '0', '2025-05-24', '43.166.7.113', '1748094757'),
(1669, '112', '0', '2025-05-24', '43.152.72.244', '1748097229'),
(1670, '92', '0', '2025-05-24', '66.249.79.35', '1748103098'),
(1671, '9', '0', '2025-05-25', '141.95.114.234', '1748111802'),
(1672, '9\'', '0', '2025-05-25', '141.95.114.234', '1748111802'),
(1673, '111', '0', '2025-05-25', '43.166.250.187', '1748120921'),
(1674, '112', '0', '2025-05-25', '203.192.235.169', '1748176485'),
(1675, '12', '0', '2025-05-25', '27.97.87.86', '1748179695'),
(1676, '10', '0', '2025-05-26', '66.249.79.34', '1748204904'),
(1677, '13', '0', '2025-05-26', '45.118.105.183', '1748232667'),
(1678, '117', '0', '2025-05-26', '45.118.105.183', '1748237853'),
(1679, '117', '0', '2025-05-26', '170.106.107.87', '1748240533'),
(1680, '117', '0', '2025-05-26', '43.153.96.79', '1748241375'),
(1681, '98', '0', '2025-05-26', '43.159.128.237', '1748245114'),
(1682, '98', '0', '2025-05-26', '43.159.143.139', '1748248099'),
(1683, '117', '0', '2025-05-26', '129.226.213.145', '1748249206'),
(1684, '117', '0', '2025-05-26', '106.221.11.145', '1748249394'),
(1685, '98', '0', '2025-05-26', '43.156.202.34', '1748249792'),
(1686, '117', '0', '2025-05-26', '170.106.167.214', '1748251673'),
(1687, '117', '0', '2025-05-26', '152.56.1.154', '1748253467'),
(1688, '109', '0', '2025-05-26', '106.221.11.145', '1748262779'),
(1689, '98', '0', '2025-05-26', '43.166.129.247', '1748278339'),
(1690, '98', '0', '2025-05-27', '49.51.243.156', '1748286042'),
(1691, '13', '0', '2025-05-27', '45.118.105.183', '1748318686'),
(1692, '28', '0', '2025-05-27', '45.118.105.183', '1748319441'),
(1693, '48', '0', '2025-05-27', '45.118.105.183', '1748320518'),
(1694, '47', '0', '2025-05-27', '45.118.105.183', '1748321053'),
(1695, '85', '0', '2025-05-27', '45.118.105.183', '1748321687'),
(1696, '91', '0', '2025-05-27', '45.118.105.183', '1748321993'),
(1697, '89', '0', '2025-05-27', '45.118.105.183', '1748322009'),
(1698, '91', '0', '2025-05-27', '106.221.11.134', '1748323924'),
(1699, '13', '0', '2025-05-27', '106.221.11.134', '1748324415'),
(1700, '112', '0', '2025-05-27', '106.221.11.134', '1748324421'),
(1701, '100', '0', '2025-05-27', '106.221.11.134', '1748324426'),
(1702, '85', '0', '2025-05-27', '106.221.11.134', '1748324449'),
(1703, '44', '0', '2025-05-27', '106.221.11.134', '1748324459'),
(1704, '44', '0', '2025-05-27', '64.233.173.160', '1748324465'),
(1705, '44', '0', '2025-05-27', '64.233.173.173', '1748324466'),
(1706, '48', '0', '2025-05-27', '106.221.11.134', '1748324688'),
(1707, '76', '0', '2025-05-27', '106.221.11.134', '1748327557'),
(1708, '76', '0', '2025-05-27', '64.233.173.160', '1748327563'),
(1709, '46', '0', '2025-05-27', '106.221.11.134', '1748327564'),
(1710, '76', '0', '2025-05-27', '64.233.172.71', '1748327565'),
(1711, '76', '0', '2025-05-27', '64.233.172.72', '1748327565'),
(1712, '46', '0', '2025-05-27', '45.118.105.183', '1748327632'),
(1713, '117', '0', '2025-05-27', '88.99.244.56', '1748331334'),
(1714, '117', '0', '2025-05-27', '45.118.105.183', '1748332538'),
(1715, '82', '0', '2025-05-27', '103.38.69.113', '1748347306'),
(1716, '13', '0', '2025-05-27', '103.38.69.113', '1748349092'),
(1717, '117', '0', '2025-05-27', '103.38.69.113', '1748349142'),
(1718, '12', '0', '2025-05-27', '203.192.235.169', '1748349589'),
(1719, '112', '0', '2025-05-28', '43.157.82.252', '1748414499'),
(1720, '112', '0', '2025-05-28', '170.106.179.68', '1748416325'),
(1721, '13', '0', '2025-05-28', '117.223.153.65', '1748429323'),
(1722, '12', '0', '2025-05-28', '117.223.153.65', '1748429351'),
(1723, '117', '0', '2025-05-28', '117.223.153.65', '1748429377'),
(1724, '117', '0', '2025-05-28', '203.192.235.169', '1748429510'),
(1725, '97', '0', '2025-05-28', '203.192.235.169', '1748429538'),
(1726, '53', '0', '2025-05-28', '203.192.235.169', '1748429579'),
(1727, '111', '0', '2025-05-28', '203.192.235.169', '1748431683'),
(1728, '98', '0', '2025-05-28', '203.192.235.169', '1748432569'),
(1729, '107', '0', '2025-05-28', '203.192.235.169', '1748432983'),
(1730, '105', '0', '2025-05-28', '203.192.235.169', '1748433001'),
(1731, '108', '0', '2025-05-28', '203.192.235.169', '1748433096'),
(1732, '112', '0', '2025-05-28', '203.192.235.169', '1748433264'),
(1733, '30', '0', '2025-05-28', '203.192.235.169', '1748433557'),
(1734, '117', '0', '2025-05-29', '43.133.14.237', '1748485942'),
(1735, '13', '0', '2025-05-29', '103.38.69.113', '1748489139'),
(1736, '117', '0', '2025-05-29', '43.156.109.53', '1748489518'),
(1737, '117', '0', '2025-05-29', '152.59.60.30', '1748493873'),
(1738, '117', '0', '2025-05-29', '49.51.243.95', '1748506557'),
(1739, '12', '0', '2025-05-29', '43.130.78.203', '1748507846'),
(1740, '110', '0', '2025-05-29', '203.192.235.169', '1748516374'),
(1741, '98', '0', '2025-05-29', '203.192.235.169', '1748516486'),
(1742, '117', '0', '2025-05-29', '203.192.235.169', '1748516535'),
(1743, '92', '0', '2025-05-29', '23.95.162.140', '1748528535'),
(1744, '\'', '0', '2025-05-29', '23.95.162.140', '1748528536'),
(1745, '64', '0', '2025-05-30', '43.159.143.187', '1748543570'),
(1746, '63', '0', '2025-05-30', '66.249.79.35', '1748560101'),
(1747, '112', '0', '2025-05-30', '49.51.50.147', '1748564260'),
(1748, '112', '0', '2025-05-30', '124.156.225.181', '1748565474'),
(1749, '92', '0', '2025-05-30', '66.249.79.34', '1748576558'),
(1750, '4', '0', '2025-05-30', '66.249.79.33', '1748583755'),
(1751, '117', '0', '2025-05-30', '103.58.152.142', '1748606113'),
(1752, '96', '0', '2025-05-30', '52.167.144.20', '1748623632'),
(1753, '63', '0', '2025-05-31', '66.249.79.34', '1748650463'),
(1754, '92', '0', '2025-05-31', '23.95.162.140', '1748657564'),
(1755, '34', '0', '2025-05-31', '52.167.144.147', '1748678332'),
(1756, '12', '0', '2025-06-01', '43.166.247.82', '1748727653'),
(1757, '98', '0', '2025-06-01', '40.77.167.7', '1748796387'),
(1758, '92', '0', '2025-06-02', '66.249.79.34', '1748804537'),
(1759, '85', '0', '2025-06-02', '52.167.144.232', '1748830099'),
(1760, '62', '0', '2025-06-02', '152.58.21.22', '1748836244'),
(1761, '78', '0', '2025-06-02', '40.77.167.159', '1748855196'),
(1762, '63', '0', '2025-06-02', '66.249.79.33', '1748860949'),
(1763, '83', '0', '2025-06-02', '52.167.144.209', '1748864235'),
(1764, '15', '0', '2025-06-02', '66.249.79.33', '1748866711'),
(1765, '14', '0', '2025-06-02', '66.249.79.35', '1748866761'),
(1766, '112', '0', '2025-06-02', '170.106.180.153', '1748868344'),
(1767, '62', '0', '2025-06-02', '152.58.20.214', '1748869682'),
(1768, '13', '0', '2025-06-02', '66.249.79.33', '1748879841'),
(1769, '7', '0', '2025-06-03', '66.249.68.137', '1748890832'),
(1770, '117', '0', '2025-06-03', '43.130.40.120', '1748893825'),
(1771, '10', '0', '2025-06-03', '57.129.4.123', '1748896886'),
(1772, '7', '0', '2025-06-03', '167.114.3.106', '1748896894'),
(1773, '117', '0', '2025-06-03', '43.153.67.21', '1748899523'),
(1774, '89', '0', '2025-06-03', '52.167.144.163', '1748937390'),
(1775, '117', '0', '2025-06-03', '43.157.172.39', '1748947132'),
(1776, '64', '0', '2025-06-03', '43.133.220.37', '1748947832'),
(1777, '12', '0', '2025-06-03', '43.166.129.247', '1748949628'),
(1778, '64', '0', '2025-06-03', '43.159.149.216', '1748951495'),
(1779, '12', '0', '2025-06-03', '43.157.170.13', '1748951918'),
(1780, '112', '0', '2025-06-04', '43.157.142.101', '1748984073'),
(1781, '10', '0', '2025-06-04', '57.141.0.18', '1749030129'),
(1782, '12', '0', '2025-06-04', '57.141.0.2', '1749030817'),
(1783, '8', '0', '2025-06-04', '57.141.0.17', '1749032675'),
(1784, '98', '0', '2025-06-04', '57.141.0.19', '1749033600'),
(1785, '92', '0', '2025-06-04', '57.141.0.11', '1749034284'),
(1786, '63', '0', '2025-06-04', '57.141.0.27', '1749034722'),
(1787, '95', '0', '2025-06-04', '57.141.0.9', '1749034978'),
(1788, '9', '0', '2025-06-04', '57.141.0.8', '1749034998'),
(1789, '13', '0', '2025-06-04', '57.141.0.24', '1749034999'),
(1790, '7', '0', '2025-06-04', '57.141.0.5', '1749035009'),
(1791, '4', '0', '2025-06-04', '57.141.0.11', '1749035027'),
(1792, '109', '0', '2025-06-04', '57.141.0.24', '1749035444'),
(1793, '96', '0', '2025-06-04', '57.141.0.20', '1749052839'),
(1794, '83', '0', '2025-06-05', '57.141.0.9', '1749069558'),
(1795, NULL, '0', '2025-06-05', '149.57.176.148', '1749070685'),
(1796, '105', '0', '2025-06-05', '52.167.144.189', '1749075475'),
(1797, '62', '0', '2025-06-05', '40.77.167.58', '1749078718'),
(1798, '63', '0', '2025-06-05', '152.57.60.49', '1749117264'),
(1799, '106', '0', '2025-06-05', '152.57.60.49', '1749117332'),
(1800, '63', '0', '2025-06-05', '66.249.68.136', '1749131435'),
(1801, '103', '0', '2025-06-05', '57.141.0.11', '1749139131'),
(1802, '92', '0', '2025-06-05', '185.187.243.4', '1749147474'),
(1803, '92', '0', '2025-06-06', '23.95.162.158', '1749150586'),
(1804, '78', '0', '2025-06-06', '57.141.0.24', '1749183507'),
(1805, '112', '0', '2025-06-06', '57.141.0.4', '1749193846'),
(1806, '51', '0', '2025-06-06', '57.141.0.13', '1749196859'),
(1807, '94', '0', '2025-06-06', '57.141.0.8', '1749210641'),
(1808, '92', '0', '2025-06-06', '57.141.0.7', '1749217846'),
(1809, '28', '0', '2025-06-06', '57.141.6.26', '1749224199'),
(1810, '24', '0', '2025-06-06', '57.141.6.6', '1749224279'),
(1811, '74', '0', '2025-06-06', '57.141.6.28', '1749225596'),
(1812, '54', '0', '2025-06-06', '57.141.6.21', '1749225891'),
(1813, '95', '0', '2025-06-06', '57.141.6.22', '1749228263'),
(1814, '48', '0', '2025-06-06', '57.141.6.5', '1749228487'),
(1815, '45', '0', '2025-06-06', '57.141.6.22', '1749229155'),
(1816, '64', '0', '2025-06-06', '57.141.6.19', '1749230712'),
(1817, '98', '0', '2025-06-06', '57.141.6.26', '1749230926'),
(1818, '100', '0', '2025-06-06', '57.141.6.12', '1749234020'),
(1819, '61', '0', '2025-06-06', '57.141.6.24', '1749234243'),
(1820, '9', '0', '2025-06-07', '66.249.68.137', '1749235238'),
(1821, '92', '0', '2025-06-07', '66.249.68.136', '1749235258'),
(1822, '4', '0', '2025-06-07', '57.141.6.8', '1749235946'),
(1823, '98', '0', '2025-06-07', '57.141.6.20', '1749236914'),
(1824, '63', '0', '2025-06-07', '66.249.79.33', '1749237324'),
(1825, '95', '0', '2025-06-07', '57.141.6.4', '1749239506'),
(1826, '57', '0', '2025-06-07', '57.141.6.21', '1749239818'),
(1827, '79', '0', '2025-06-07', '57.141.6.29', '1749242237'),
(1828, '14', '0', '2025-06-07', '40.77.167.38', '1749243989'),
(1829, '89', '0', '2025-06-07', '57.141.6.26', '1749246542'),
(1830, '106', '0', '2025-06-07', '57.141.6.30', '1749246995'),
(1831, '86', '0', '2025-06-07', '57.141.6.10', '1749250856'),
(1832, '112', '0', '2025-06-07', '43.130.106.18', '1749254250'),
(1833, '8', '0', '2025-06-07', '57.141.6.18', '1749254262'),
(1834, '7', '0', '2025-06-07', '57.141.6.5', '1749258045'),
(1835, '92', '0', '2025-06-07', '57.141.6.4', '1749258889'),
(1836, '9', '0', '2025-06-07', '57.141.6.29', '1749262617'),
(1837, '12', '0', '2025-06-07', '57.141.6.5', '1749263982'),
(1838, '63', '0', '2025-06-07', '157.119.45.189', '1749265048'),
(1839, '92', '0', '2025-06-07', '66.249.79.34', '1749267320'),
(1840, '13', '0', '2025-06-07', '57.141.6.31', '1749267808'),
(1841, '63', '0', '2025-06-07', '57.141.6.5', '1749268261'),
(1842, '100', '0', '2025-06-07', '20.171.207.122', '1749269408'),
(1843, '62', '0', '2025-06-07', '20.171.207.122', '1749269598'),
(1844, '14', '0', '2025-06-07', '20.171.207.122', '1749269604'),
(1845, '101', '0', '2025-06-07', '20.171.207.122', '1749269608'),
(1846, '111', '0', '2025-06-07', '20.171.207.122', '1749269612'),
(1847, '102', '0', '2025-06-07', '20.171.207.122', '1749269615'),
(1848, '103', '0', '2025-06-07', '20.171.207.122', '1749269619'),
(1849, '24', '0', '2025-06-07', '20.171.207.122', '1749269731'),
(1850, '15', '0', '2025-06-07', '20.171.207.122', '1749269734'),
(1851, '49', '0', '2025-06-07', '20.171.207.122', '1749269878'),
(1852, '80', '0', '2025-06-07', '20.171.207.122', '1749269895'),
(1853, '78', '0', '2025-06-07', '20.171.207.122', '1749269921'),
(1854, '56', '0', '2025-06-07', '20.171.207.122', '1749269926'),
(1855, '7', '0', '2025-06-07', '20.171.207.122', '1749269930'),
(1856, '77', '0', '2025-06-07', '20.171.207.122', '1749269969'),
(1857, '71', '0', '2025-06-07', '20.171.207.122', '1749269993'),
(1858, '4', '0', '2025-06-07', '20.171.207.122', '1749270000'),
(1859, '57', '0', '2025-06-07', '20.171.207.122', '1749270004'),
(1860, '96', '0', '2025-06-07', '20.171.207.122', '1749270009'),
(1861, '59', '0', '2025-06-07', '20.171.207.122', '1749270014'),
(1862, '66', '0', '2025-06-07', '20.171.207.122', '1749270018'),
(1863, '70', '0', '2025-06-07', '20.171.207.122', '1749270054'),
(1864, '12', '0', '2025-06-07', '20.171.207.122', '1749270137'),
(1865, '109', '2', '2025-06-07', '20.171.207.122', '1749270162'),
(1866, '11', '2', '2025-06-07', '20.171.207.122', '1749270266'),
(1867, '90', '2', '2025-06-07', '20.171.207.122', '1749270341'),
(1868, '83', '2', '2025-06-07', '20.171.207.122', '1749270365'),
(1869, '82', '2', '2025-06-07', '20.171.207.122', '1749270408'),
(1870, '110', '0', '2025-06-07', '20.171.207.122', '1749270493'),
(1871, '52', '0', '2025-06-07', '20.171.207.122', '1749270608'),
(1872, '81', '0', '2025-06-07', '20.171.207.122', '1749270624'),
(1873, '46', '0', '2025-06-07', '20.171.207.122', '1749270730'),
(1874, '97', '0', '2025-06-07', '20.171.207.122', '1749270766'),
(1875, '53', '0', '2025-06-07', '20.171.207.122', '1749271118'),
(1876, '54', '0', '2025-06-07', '20.171.207.122', '1749271280'),
(1877, '104', '0', '2025-06-07', '20.171.207.122', '1749271327'),
(1878, '51', '0', '2025-06-07', '20.171.207.122', '1749271513'),
(1879, '48', '0', '2025-06-07', '20.171.207.122', '1749271543'),
(1880, '79', '0', '2025-06-07', '20.171.207.122', '1749271570'),
(1881, '75', '0', '2025-06-07', '20.171.207.122', '1749271740'),
(1882, '93', '0', '2025-06-07', '20.171.207.122', '1749271789'),
(1883, '45', '0', '2025-06-07', '20.171.207.122', '1749271831'),
(1884, '44', '0', '2025-06-07', '20.171.207.122', '1749272240'),
(1885, '106', '0', '2025-06-07', '20.171.207.122', '1749272280'),
(1886, '89', '0', '2025-06-07', '20.171.207.122', '1749272781'),
(1887, '84', '0', '2025-06-07', '20.171.207.122', '1749272812'),
(1888, '91', '0', '2025-06-07', '20.171.207.122', '1749273070'),
(1889, '60', '0', '2025-06-07', '20.171.207.122', '1749273112'),
(1890, '86', '0', '2025-06-07', '20.171.207.122', '1749273340'),
(1891, '95', '0', '2025-06-07', '20.171.207.122', '1749273403'),
(1892, '74', '0', '2025-06-07', '20.171.207.122', '1749273551'),
(1893, '112', '0', '2025-06-07', '20.171.207.122', '1749273591'),
(1894, '72', '0', '2025-06-07', '20.171.207.122', '1749273628'),
(1895, '61', '0', '2025-06-07', '20.171.207.122', '1749273689'),
(1896, '105', '0', '2025-06-07', '20.171.207.122', '1749273738'),
(1897, '107', '0', '2025-06-07', '20.171.207.122', '1749274503'),
(1898, '55', '0', '2025-06-07', '20.171.207.122', '1749274734'),
(1899, '27', '0', '2025-06-07', '20.171.207.122', '1749274766'),
(1900, '88', '0', '2025-06-07', '20.171.207.122', '1749275409'),
(1901, '13', '0', '2025-06-07', '20.171.207.122', '1749275440'),
(1902, '87', '0', '2025-06-07', '20.171.207.122', '1749275615'),
(1903, '85', '0', '2025-06-07', '20.171.207.122', '1749275674'),
(1904, '8', '0', '2025-06-07', '20.171.207.122', '1749275723'),
(1905, '10', '0', '2025-06-07', '20.171.207.122', '1749275771'),
(1906, '47', '0', '2025-06-07', '20.171.207.122', '1749275812'),
(1907, '64', '0', '2025-06-07', '20.171.207.122', '1749275969'),
(1908, '32', '0', '2025-06-07', '20.171.207.122', '1749275980'),
(1909, '108', '0', '2025-06-07', '20.171.207.122', '1749275996'),
(1910, '', '0', '2025-06-07', '20.171.207.122', '1749276002'),
(1911, '9', '0', '2025-06-07', '20.171.207.122', '1749276004'),
(1912, '98', '0', '2025-06-07', '20.171.207.122', '1749277293'),
(1913, '28', '0', '2025-06-07', '20.171.207.122', '1749277837'),
(1914, '94', '0', '2025-06-07', '20.171.207.122', '1749277840'),
(1915, '92', '0', '2025-06-07', '20.171.207.122', '1749277843'),
(1916, '76', '0', '2025-06-07', '20.171.207.122', '1749277848'),
(1917, '63', '0', '2025-06-07', '20.171.207.122', '1749277852'),
(1918, '117', '0', '2025-06-07', '20.171.207.122', '1749277853'),
(1919, '50', '0', '2025-06-07', '20.171.207.122', '1749277855'),
(1920, '26', '0', '2025-06-07', '20.171.207.122', '1749277892'),
(1921, '58', '0', '2025-06-07', '20.171.207.122', '1749277893'),
(1922, '10', '0', '2025-06-07', '57.141.6.4', '1749281775'),
(1923, '44', '0', '2025-06-07', '57.141.6.18', '1749297492'),
(1924, '63', '0', '2025-06-07', '57.141.6.17', '1749303027'),
(1925, '97', '0', '2025-06-07', '57.141.6.5', '1749310124'),
(1926, '98', '0', '2025-06-07', '57.141.6.29', '1749311200'),
(1927, '110', '0', '2025-06-07', '57.141.6.8', '1749313119'),
(1928, '95', '0', '2025-06-07', '57.141.6.9', '1749313222'),
(1929, '80', '0', '2025-06-07', '57.141.6.1', '1749318373'),
(1930, '8', '0', '2025-06-07', '57.141.6.21', '1749319616'),
(1931, '62', '0', '2025-06-07', '57.141.6.4', '1749320718'),
(1932, '10', '0', '2025-06-08', '57.141.6.8', '1749324309'),
(1933, '46', '0', '2025-06-08', '57.141.6.16', '1749326737'),
(1934, '101', '0', '2025-06-08', '57.141.6.19', '1749329959'),
(1935, '4', '0', '2025-06-08', '57.141.6.8', '1749332402'),
(1936, '7', '0', '2025-06-08', '57.141.6.23', '1749337732'),
(1937, '13', '0', '2025-06-08', '57.141.6.22', '1749337779'),
(1938, '104', '0', '2025-06-08', '57.141.6.28', '1749341703'),
(1939, '82', '0', '2025-06-08', '57.141.6.23', '1749354111'),
(1940, '64', '0', '2025-06-08', '43.130.60.195', '1749355356'),
(1941, '12', '0', '2025-06-08', '57.141.6.9', '1749361987'),
(1942, '91', '0', '2025-06-08', '57.141.6.19', '1749362410'),
(1943, '10', '0', '2025-06-08', '72.14.201.187', '1749363557'),
(1944, '27', '0', '2025-06-08', '52.167.144.199', '1749369785'),
(1945, '102', '0', '2025-06-08', '57.141.6.27', '1749372926'),
(1946, '108', '0', '2025-06-08', '57.141.6.16', '1749372929'),
(1947, '107', '0', '2025-06-08', '57.141.6.28', '1749372983'),
(1948, '111', '0', '2025-06-08', '57.141.6.1', '1749373007'),
(1949, '117', '0', '2025-06-08', '57.141.6.12', '1749373048'),
(1950, '105', '0', '2025-06-08', '57.141.6.20', '1749373956'),
(1951, '105', '0', '2025-06-08', '57.141.6.8', '1749374159'),
(1952, '105', '0', '2025-06-08', '20.171.207.251', '1749377833'),
(1953, '117', '0', '2025-06-08', '43.157.50.58', '1749379747'),
(1954, '117', '0', '2025-06-08', '43.130.139.177', '1749381087'),
(1955, '71', '0', '2025-06-08', '57.141.6.24', '1749382376'),
(1956, '84', '0', '2025-06-08', '57.141.6.21', '1749385442'),
(1957, '63', '0', '2025-06-08', '57.141.6.16', '1749388178'),
(1958, '27', '0', '2025-06-08', '57.141.6.14', '1749388337'),
(1959, '107', '0', '2025-06-08', '57.141.6.26', '1749391419'),
(1960, '92', '0', '2025-06-08', '57.141.6.1', '1749391812'),
(1961, '56', '0', '2025-06-08', '57.141.6.12', '1749392666'),
(1962, '9', '0', '2025-06-08', '57.141.6.4', '1749393555'),
(1963, '4', '0', '2025-06-08', '57.141.6.30', '1749397005'),
(1964, '107', '0', '2025-06-08', '57.141.6.11', '1749397673'),
(1965, '15', '0', '2025-06-08', '57.141.6.31', '1749399646'),
(1966, '95', '0', '2025-06-08', '57.141.6.20', '1749401253'),
(1967, '66', '0', '2025-06-08', '57.141.6.17', '1749401341'),
(1968, '10', '0', '2025-06-08', '57.141.6.24', '1749406556'),
(1969, '80', '0', '2025-06-08', '57.141.6.18', '1749407035'),
(1970, '105', '0', '2025-06-08', '57.141.6.4', '1749407374'),
(1971, '63', '0', '2025-06-09', '57.141.6.5', '1749410100'),
(1972, '12', '0', '2025-06-09', '40.77.167.65', '1749411038'),
(1973, '64', '0', '2025-06-09', '129.226.93.214', '1749411591'),
(1974, '108', '0', '2025-06-09', '57.141.6.5', '1749412816'),
(1975, '112', '0', '2025-06-09', '43.153.123.3', '1749412888'),
(1976, '12', '0', '2025-06-09', '57.141.6.20', '1749414013'),
(1977, '96', '0', '2025-06-09', '57.141.6.28', '1749417438'),
(1978, '81', '0', '2025-06-09', '57.141.6.29', '1749418523'),
(1979, '10', '0', '2025-06-09', '40.77.167.247', '1749418594'),
(1980, '98', '0', '2025-06-09', '57.141.6.7', '1749439760'),
(1981, '9', '0', '2025-06-09', '57.141.6.3', '1749450702'),
(1982, '13', '0', '2025-06-09', '57.141.6.24', '1749452065'),
(1983, '92', '0', '2025-06-09', '57.141.6.11', '1749453260'),
(1984, '94', '0', '2025-06-09', '203.192.235.169', '1749467376'),
(1985, '83', '0', '2025-06-09', '57.141.6.3', '1749473000'),
(1986, '13', '0', '2025-06-09', '57.141.6.7', '1749477977'),
(1987, '55', '0', '2025-06-09', '57.141.6.5', '1749481421'),
(1988, '87', '0', '2025-06-09', '57.141.6.15', '1749482385'),
(1989, '59', '0', '2025-06-09', '57.141.6.11', '1749484322'),
(1990, '53', '0', '2025-06-09', '57.141.6.7', '1749485780'),
(1991, '97', '0', '2025-06-09', '57.141.6.8', '1749486685'),
(1992, '4', '0', '2025-06-09', '57.141.6.18', '1749488872'),
(1993, '4', '0', '2025-06-09', '57.141.6.29', '1749489039'),
(1994, '8', '0', '2025-06-09', '57.141.6.17', '1749489322'),
(1995, '49', '0', '2025-06-09', '57.141.6.3', '1749490927'),
(1996, '12', '0', '2025-06-09', '43.159.136.201', '1749492793'),
(1997, '101', '0', '2025-06-10', '57.141.6.18', '1749495736'),
(1998, '75', '0', '2025-06-10', '57.141.6.3', '1749496190'),
(1999, '7', '0', '2025-06-10', '57.141.6.2', '1749496716'),
(2000, '85', '0', '2025-06-10', '57.141.6.24', '1749497356'),
(2001, '77', '0', '2025-06-10', '57.141.6.10', '1749498955'),
(2002, '74', '0', '2025-06-10', '57.141.6.9', '1749499951'),
(2003, '8', '0', '2025-06-10', '57.141.6.24', '1749501134'),
(2004, '10', '0', '2025-06-10', '57.141.6.8', '1749502475'),
(2005, '92', '0', '2025-06-10', '57.141.6.29', '1749504259'),
(2006, '9', '0', '2025-06-10', '57.141.6.28', '1749506017'),
(2007, '7', '0', '2025-06-10', '57.141.6.8', '1749507651'),
(2008, '13', '0', '2025-06-10', '57.141.6.27', '1749511305'),
(2009, '11', '0', '2025-06-10', '57.141.6.15', '1749512480'),
(2010, '95', '0', '2025-06-10', '57.141.6.3', '1749513631'),
(2011, '98', '0', '2025-06-10', '57.141.6.26', '1749523223'),
(2012, '93', '0', '2025-06-10', '52.167.144.141', '1749527543'),
(2013, '102', '0', '2025-06-10', '57.141.6.12', '1749554730'),
(2014, '56', '0', '2025-06-10', '57.141.6.1', '1749554736'),
(2015, '64', '0', '2025-06-10', '52.167.144.215', '1749558195'),
(2016, '26', '0', '2025-06-10', '57.141.6.18', '1749563715'),
(2017, '96', '0', '2025-06-10', '57.141.6.22', '1749566103'),
(2018, '82', '0', '2025-06-10', '57.141.6.16', '1749569963'),
(2019, '11', '0', '2025-06-10', '57.141.6.1', '1749570382'),
(2020, '104', '0', '2025-06-10', '57.141.6.14', '1749572109'),
(2021, '70', '0', '2025-06-10', '57.141.6.31', '1749572497'),
(2022, '63', '0', '2025-06-10', '57.141.6.12', '1749572560'),
(2023, '9', '0', '2025-06-10', '57.141.6.15', '1749572720'),
(2024, '52', '0', '2025-06-10', '57.141.6.14', '1749573133'),
(2025, '117', '0', '2025-06-10', '57.141.6.18', '1749573733'),
(2026, '12', '0', '2025-06-10', '57.141.6.23', '1749574757'),
(2027, '94', '0', '2025-06-10', '57.141.6.27', '1749576364'),
(2028, '59', '0', '2025-06-10', '57.141.6.1', '1749577422'),
(2029, '78', '0', '2025-06-10', '57.141.6.17', '1749577574'),
(2030, '117', '0', '2025-06-10', '43.131.253.14', '1749578139'),
(2031, '66', '0', '2025-06-10', '57.141.6.30', '1749578288'),
(2032, '88', '0', '2025-06-10', '57.141.6.30', '1749578704'),
(2033, '82', '0', '2025-06-10', '57.141.6.4', '1749579237'),
(2034, '47', '0', '2025-06-10', '57.141.6.29', '1749580156'),
(2035, '102', '0', '2025-06-11', '57.141.6.17', '1749580599'),
(2036, '51', '0', '2025-06-11', '57.141.6.14', '1749580710'),
(2037, '91', '0', '2025-06-11', '57.141.6.22', '1749581052'),
(2038, '90', '0', '2025-06-11', '57.141.6.23', '1749581300'),
(2039, '88', '0', '2025-06-11', '57.141.6.27', '1749581980'),
(2040, '90', '0', '2025-06-11', '57.141.6.13', '1749584141'),
(2041, '109', '0', '2025-06-11', '57.141.6.11', '1749585176'),
(2042, '32', '0', '2025-06-11', '57.141.6.23', '1749586820'),
(2043, '4', '0', '2025-06-11', '57.141.6.9', '1749586917'),
(2044, '8', '0', '2025-06-11', '57.141.6.6', '1749587965'),
(2045, '101', '0', '2025-06-11', '57.141.6.6', '1749588503'),
(2046, '75', '0', '2025-06-11', '57.141.6.9', '1749592391'),
(2047, '112', '0', '2025-06-11', '52.167.144.211', '1749592645'),
(2048, '95', '0', '2025-06-11', '57.141.6.15', '1749594251'),
(2049, '92', '0', '2025-06-11', '57.141.6.29', '1749597165'),
(2050, '13', '0', '2025-06-11', '57.141.6.6', '1749603440'),
(2051, '10', '0', '2025-06-11', '57.141.6.30', '1749612722'),
(2052, '7', '0', '2025-06-11', '57.141.6.4', '1749625182'),
(2053, '111', '0', '2025-06-11', '57.141.6.6', '1749630903'),
(2054, '61', '0', '2025-06-11', '40.77.167.14', '1749632442'),
(2055, '53', '0', '2025-06-11', '57.141.6.24', '1749643307'),
(2056, '9', '0', '2025-06-11', '57.141.6.1', '1749643608'),
(2057, '117', '35', '2025-06-11', '36.255.88.226', '1749643976'),
(2058, '14', '35', '2025-06-11', '36.255.88.226', '1749643984'),
(2059, '50', '0', '2025-06-11', '57.141.6.12', '1749643987'),
(2060, '91', '35', '2025-06-11', '36.255.88.226', '1749644035'),
(2061, '86', '0', '2025-06-11', '57.141.6.8', '1749646219'),
(2062, '54', '0', '2025-06-11', '57.141.6.26', '1749646435'),
(2063, '50', '35', '2025-06-11', '36.255.88.226', '1749646865'),
(2064, '97', '35', '2025-06-11', '36.255.88.226', '1749647326'),
(2065, '93', '35', '2025-06-11', '36.255.88.226', '1749647334'),
(2066, '24', '0', '2025-06-11', '57.141.6.18', '1749653386'),
(2067, '77', '0', '2025-06-11', '57.141.6.2', '1749653696'),
(2068, '52', '0', '2025-06-11', '57.141.6.17', '1749654242'),
(2069, '58', '0', '2025-06-11', '57.141.6.13', '1749654977'),
(2070, '91', '0', '2025-06-11', '57.141.6.18', '1749655601'),
(2071, '71', '0', '2025-06-11', '57.141.6.19', '1749656191'),
(2072, '93', '0', '2025-06-11', '57.141.6.17', '1749656579'),
(2073, '72', '0', '2025-06-11', '57.141.6.26', '1749657812'),
(2074, '59', '0', '2025-06-11', '57.141.6.3', '1749658206'),
(2075, '14', '0', '2025-06-11', '57.141.6.29', '1749658549'),
(2076, '111', '0', '2025-06-11', '57.141.6.27', '1749658708'),
(2077, '60', '0', '2025-06-11', '57.141.6.18', '1749659385'),
(2078, '57', '0', '2025-06-11', '57.141.6.17', '1749659531'),
(2079, '14', '0', '2025-06-11', '57.141.6.1', '1749661340'),
(2080, '12', '0', '2025-06-11', '57.141.6.18', '1749661572'),
(2081, '72', '0', '2025-06-11', '57.141.6.24', '1749662478'),
(2082, '90', '0', '2025-06-11', '57.141.6.29', '1749665044'),
(2083, '10', '0', '2025-06-11', '57.141.6.24', '1749665394'),
(2084, '8', '0', '2025-06-11', '57.141.6.9', '1749666508'),
(2085, '108', '0', '2025-06-12', '57.141.6.23', '1749667113'),
(2086, '63', '0', '2025-06-12', '57.141.6.10', '1749668906'),
(2087, '92', '0', '2025-06-12', '57.141.6.12', '1749669701'),
(2088, '104', '0', '2025-06-12', '57.141.6.11', '1749671273'),
(2089, '112', '0', '2025-06-12', '57.141.6.12', '1749675525'),
(2090, '61', '0', '2025-06-12', '57.141.6.26', '1749676583'),
(2091, '10', '0', '2025-06-12', '57.141.6.28', '1749690884'),
(2092, '102', '0', '2025-06-12', '57.141.6.21', '1749695248'),
(2093, '7', '0', '2025-06-12', '57.141.6.21', '1749698571'),
(2094, '91', '35', '2025-06-12', '59.152.120.185', '1749702405'),
(2095, '97', '35', '2025-06-12', '59.152.120.185', '1749703770'),
(2096, '63', '0', '2025-06-12', '57.141.4.18', '1749705532'),
(2097, '95', '0', '2025-06-12', '57.141.4.23', '1749710636'),
(2098, '9', '0', '2025-06-12', '57.141.4.13', '1749710669'),
(2099, '32', '0', '2025-06-12', '52.167.144.145', '1749711013'),
(2100, '111', '0', '2025-06-12', '57.141.6.19', '1749717039'),
(2101, '117', '0', '2025-06-12', '57.141.6.24', '1749719241'),
(2102, '76', '0', '2025-06-12', '57.141.6.15', '1749724391'),
(2103, '112', '0', '2025-06-12', '43.166.251.233', '1749727778'),
(2104, '112', '0', '2025-06-12', '43.130.60.195', '1749730205'),
(2105, '76', '0', '2025-06-12', '57.141.6.24', '1749734603'),
(2106, '55', '0', '2025-06-12', '57.141.6.30', '1749737216'),
(2107, '64', '0', '2025-06-12', '57.141.6.2', '1749737426'),
(2108, '63', '0', '2025-06-12', '103.83.213.165', '1749737553'),
(2109, '81', '0', '2025-06-12', '57.141.6.10', '1749740646'),
(2110, '95', '0', '2025-06-12', '57.141.6.28', '1749748126'),
(2111, '98', '0', '2025-06-12', '57.141.6.17', '1749749752'),
(2112, '87', '0', '2025-06-12', '57.141.6.21', '1749749753'),
(2113, '45', '0', '2025-06-12', '57.141.6.28', '1749750041'),
(2114, '26', '0', '2025-06-12', '57.141.6.5', '1749752065'),
(2115, '102', '0', '2025-06-13', '57.141.6.19', '1749754879'),
(2116, '88', '0', '2025-06-13', '40.77.167.38', '1749755192'),
(2117, '45', '0', '2025-06-13', '57.141.6.22', '1749757314'),
(2118, '98', '0', '2025-06-13', '57.141.6.22', '1749757446'),
(2119, '49', '0', '2025-06-13', '57.141.6.23', '1749757909'),
(2120, '83', '0', '2025-06-13', '57.141.6.28', '1749758586'),
(2121, '117', '0', '2025-06-13', '101.32.208.70', '1749760983'),
(2122, '15', '0', '2025-06-13', '57.141.6.9', '1749763250'),
(2123, '84', '0', '2025-06-13', '57.141.6.7', '1749763282'),
(2124, '12', '0', '2025-06-13', '57.141.6.10', '1749764056'),
(2125, '117', '0', '2025-06-13', '57.141.6.20', '1749778766'),
(2126, '9', '35', '2025-06-13', '203.192.238.102', '1749788460'),
(2127, '10', '0', '2025-06-13', '57.141.6.22', '1749789071'),
(2128, '59', '35', '2025-06-13', '203.192.238.102', '1749791542'),
(2129, '98', '0', '2025-06-13', '57.141.6.12', '1749793565'),
(2130, '64', '0', '2025-06-13', '170.106.11.141', '1749794245'),
(2131, '97', '35', '2025-06-13', '203.192.238.102', '1749794414'),
(2132, '90', '0', '2025-06-13', '52.167.144.142', '1749797648'),
(2133, '4', '35', '2025-06-13', '203.192.238.102', '1749798959'),
(2134, '111', '0', '2025-06-13', '57.141.6.5', '1749802330'),
(2135, '62', '0', '2025-06-13', '66.249.79.34', '1749811929'),
(2136, '10', '35', '2025-06-13', '203.192.238.102', '1749813501'),
(2137, '117', '35', '2025-06-13', '203.192.238.102', '1749814644'),
(2138, '9', '0', '2025-06-13', '57.141.6.9', '1749817131'),
(2139, '8', '0', '2025-06-13', '57.141.6.8', '1749820475'),
(2140, '89', '0', '2025-06-13', '57.141.6.23', '1749822213'),
(2141, '89', '0', '2025-06-13', '57.141.6.5', '1749826216'),
(2142, '103', '0', '2025-06-13', '57.141.6.4', '1749827622'),
(2143, '8', '0', '2025-06-13', '57.141.6.10', '1749832454'),
(2144, '44', '0', '2025-06-13', '57.141.6.5', '1749835302'),
(2145, '98', '0', '2025-06-13', '173.169.235.48', '1749836156'),
(2146, '63', '0', '2025-06-13', '173.169.235.48', '1749836156'),
(2147, '13', '0', '2025-06-13', '173.169.235.48', '1749836157'),
(2148, '12', '0', '2025-06-13', '173.169.235.48', '1749836158'),
(2149, '10', '0', '2025-06-13', '173.169.235.48', '1749836158'),
(2150, '9', '0', '2025-06-13', '173.169.235.48', '1749836179'),
(2151, '8', '0', '2025-06-13', '173.169.235.48', '1749836179'),
(2152, '7', '0', '2025-06-13', '173.169.235.48', '1749836180'),
(2153, '95', '0', '2025-06-13', '173.169.235.48', '1749836181'),
(2154, '92', '0', '2025-06-13', '173.169.235.48', '1749836181'),
(2155, '4', '0', '2025-06-13', '173.169.235.48', '1749836182'),
(2156, '58', '0', '2025-06-14', '57.141.6.12', '1749839533'),
(2157, '47', '0', '2025-06-14', '57.141.6.9', '1749842177'),
(2158, '102', '0', '2025-06-14', '57.141.6.30', '1749842827'),
(2159, '111', '0', '2025-06-14', '57.141.6.27', '1749844333'),
(2160, '70', '0', '2025-06-14', '57.141.6.28', '1749848029'),
(2161, '58', '0', '2025-06-14', '57.141.6.9', '1749852930'),
(2162, '32', '0', '2025-06-14', '57.141.6.30', '1749853957'),
(2163, '98', '0', '2025-06-14', '57.141.6.18', '1749854626'),
(2164, '107', '0', '2025-06-14', '57.141.6.7', '1749854668'),
(2165, '64', '0', '2025-06-14', '49.51.252.146', '1749855457'),
(2166, '11', '0', '2025-06-14', '40.77.167.71', '1749856127'),
(2167, '111', '0', '2025-06-14', '57.141.6.9', '1749857416'),
(2168, '112', '0', '2025-06-14', '43.163.206.70', '1749858389'),
(2169, '98', '0', '2025-06-14', '57.141.6.23', '1749859205'),
(2170, '13', '0', '2025-06-14', '57.141.6.24', '1749862476'),
(2171, '12', '0', '2025-06-14', '57.141.6.30', '1749867836'),
(2172, '107', '0', '2025-06-14', '57.141.6.23', '1749869678'),
(2173, '117', '0', '2025-06-14', '57.141.6.29', '1749871531'),
(2174, '111', '0', '2025-06-14', '57.141.6.16', '1749872087'),
(2175, '111', '0', '2025-06-14', '52.167.144.18', '1749872898'),
(2176, '97', '35', '2025-06-14', '203.192.238.102', '1749879698'),
(2177, '117', '0', '2025-06-14', '57.141.6.1', '1749880580'),
(2178, '85', '35', '2025-06-14', '203.192.238.102', '1749883717'),
(2179, '92', '0', '2025-06-14', '57.141.6.30', '1749893880'),
(2180, '4', '0', '2025-06-14', '57.141.6.26', '1749895398'),
(2181, '77', '0', '2025-06-14', '40.77.167.47', '1749900507'),
(2182, '80', '0', '2025-06-14', '57.141.6.4', '1749906804'),
(2183, '46', '0', '2025-06-14', '57.141.6.23', '1749908465'),
(2184, '92', '0', '2025-06-14', '57.141.6.31', '1749909946'),
(2185, '80', '0', '2025-06-14', '57.141.6.11', '1749917768'),
(2186, '10', '0', '2025-06-14', '57.141.6.19', '1749918002'),
(2187, '46', '0', '2025-06-14', '57.141.6.12', '1749920354'),
(2188, '95', '0', '2025-06-14', '57.141.6.24', '1749920569'),
(2189, '85', '0', '2025-06-14', '57.141.6.13', '1749921003'),
(2190, '51', '0', '2025-06-14', '57.141.6.10', '1749921227'),
(2191, '12', '0', '2025-06-15', '43.153.123.4', '1749926650'),
(2192, '51', '0', '2025-06-15', '57.141.6.2', '1749929301'),
(2193, '80', '0', '2025-06-15', '57.141.6.22', '1749934619'),
(2194, '10', '0', '2025-06-15', '57.141.6.27', '1749935603'),
(2195, '79', '0', '2025-06-15', '52.167.144.174', '1749936970'),
(2196, '95', '0', '2025-06-15', '57.141.6.15', '1749940715'),
(2197, '110', '0', '2025-06-15', '57.141.6.26', '1749942667'),
(2198, '105', '0', '2025-06-15', '57.141.6.24', '1749952613'),
(2199, '4', '0', '2025-06-15', '57.141.6.4', '1749956988'),
(2200, '106', '0', '2025-06-15', '57.141.6.30', '1749963067'),
(2201, '93', '0', '2025-06-15', '57.141.6.31', '1749964182'),
(2202, '106', '0', '2025-06-15', '57.141.6.23', '1749970051'),
(2203, '81', '0', '2025-06-15', '52.167.144.194', '1749981546'),
(2204, '100', '0', '2025-06-15', '57.141.6.16', '1749982712'),
(2205, '87', '0', '2025-06-15', '57.141.6.9', '1749986313'),
(2206, '103', '0', '2025-06-15', '57.141.6.26', '1749986356'),
(2207, '9', '0', '2025-06-15', '57.141.6.4', '1749992588'),
(2208, '98', '0', '2025-06-15', '216.73.216.163', '1749996141'),
(2209, '92', '0', '2025-06-15', '216.73.216.163', '1749997876'),
(2210, '9', '0', '2025-06-15', '216.73.216.163', '1749997876'),
(2211, '63', '0', '2025-06-15', '216.73.216.163', '1749998208'),
(2212, '7', '0', '2025-06-15', '216.73.216.163', '1749998378'),
(2213, '4', '0', '2025-06-15', '216.73.216.163', '1749998580'),
(2214, '95', '0', '2025-06-15', '216.73.216.163', '1749998739'),
(2215, '27', '0', '2025-06-15', '57.141.6.12', '1749999074'),
(2216, '117', '0', '2025-06-15', '57.141.6.10', '1749999131'),
(2217, '50', '0', '2025-06-15', '57.141.6.26', '1750000206'),
(2218, '12', '0', '2025-06-15', '216.73.216.163', '1750001123'),
(2219, '13', '0', '2025-06-15', '216.73.216.163', '1750001302'),
(2220, '10', '0', '2025-06-15', '216.73.216.163', '1750001410'),
(2221, '107', '0', '2025-06-15', '57.141.6.17', '1750003420'),
(2222, '8', '0', '2025-06-15', '57.141.6.2', '1750003433'),
(2223, '62', '0', '2025-06-15', '57.141.6.31', '1750004328'),
(2224, '60', '0', '2025-06-15', '57.141.6.20', '1750007996'),
(2225, '117', '0', '2025-06-15', '43.153.122.30', '1750009519'),
(2226, '63', '0', '2025-06-15', '57.141.6.14', '1750011475'),
(2227, '8', '0', '2025-06-15', '57.141.6.7', '1750011584'),
(2228, '48', '0', '2025-06-16', '57.141.6.23', '1750015917'),
(2229, '92', '0', '2025-06-16', '57.141.6.19', '1750016738'),
(2230, '60', '0', '2025-06-16', '57.141.6.28', '1750019770'),
(2231, '80', '0', '2025-06-16', '52.167.144.140', '1750020469'),
(2232, '117', '0', '2025-06-16', '57.141.6.23', '1750021030'),
(2233, '7', '0', '2025-06-16', '57.141.6.15', '1750021190'),
(2234, '63', '0', '2025-06-16', '20.171.207.193', '1750022373'),
(2235, '', '0', '2025-06-16', '20.171.207.193', '1750022398'),
(2236, '12', '0', '2025-06-16', '57.141.6.10', '1750022617'),
(2237, '11', '0', '2025-06-16', '57.141.6.26', '1750023243'),
(2238, '100', '0', '2025-06-16', '216.73.216.163', '1750025960'),
(2239, '12', '0', '2025-06-16', '57.141.6.29', '1750026006'),
(2240, '81', '0', '2025-06-16', '216.73.216.163', '1750026128'),
(2241, '85', '0', '2025-06-16', '216.73.216.163', '1750026338'),
(2242, '105', '0', '2025-06-16', '57.141.6.16', '1750026347'),
(2243, '90', '0', '2025-06-16', '216.73.216.163', '1750026490'),
(2244, '27', '0', '2025-06-16', '216.73.216.163', '1750026561'),
(2245, '14', '0', '2025-06-16', '216.73.216.163', '1750026626'),
(2246, '109', '0', '2025-06-16', '216.73.216.163', '1750026861'),
(2247, '86', '0', '2025-06-16', '216.73.216.163', '1750027008'),
(2248, '117', '0', '2025-06-16', '216.73.216.163', '1750027112'),
(2249, '83', '0', '2025-06-16', '216.73.216.163', '1750027413'),
(2250, '26', '0', '2025-06-16', '216.73.216.163', '1750027446'),
(2251, '105', '0', '2025-06-16', '216.73.216.163', '1750027758'),
(2252, '91', '0', '2025-06-16', '216.73.216.163', '1750027922'),
(2253, '78', '0', '2025-06-16', '216.73.216.163', '1750028121'),
(2254, '64', '0', '2025-06-16', '216.73.216.163', '1750028121'),
(2255, '102', '0', '2025-06-16', '216.73.216.163', '1750028224'),
(2256, '112', '0', '2025-06-16', '216.73.216.163', '1750028624'),
(2257, '106', '0', '2025-06-16', '216.73.216.163', '1750028763'),
(2258, '80', '0', '2025-06-16', '216.73.216.163', '1750028763'),
(2259, '15', '0', '2025-06-16', '216.73.216.163', '1750028796'),
(2260, '79', '0', '2025-06-16', '216.73.216.163', '1750028824'),
(2261, '95', '0', '2025-06-16', '57.141.6.13', '1750029254'),
(2262, '104', '0', '2025-06-16', '216.73.216.163', '1750029373'),
(2263, '89', '0', '2025-06-16', '216.73.216.163', '1750029568'),
(2264, '77', '0', '2025-06-16', '216.73.216.163', '1750029765'),
(2265, '87', '0', '2025-06-16', '216.73.216.163', '1750029765'),
(2266, '13', '0', '2025-06-16', '57.141.6.13', '1750029924'),
(2267, '24', '0', '2025-06-16', '216.73.216.163', '1750029993'),
(2268, '117', '0', '2025-06-16', '57.141.6.26', '1750030026'),
(2269, '93', '0', '2025-06-16', '216.73.216.163', '1750030212'),
(2270, '110', '0', '2025-06-16', '216.73.216.163', '1750030213'),
(2271, '61', '0', '2025-06-16', '216.73.216.163', '1750030714'),
(2272, '28', '0', '2025-06-16', '216.73.216.163', '1750031102'),
(2273, '111', '0', '2025-06-16', '216.73.216.163', '1750031266'),
(2274, '88', '0', '2025-06-16', '216.73.216.163', '1750031560'),
(2275, '32', '0', '2025-06-16', '216.73.216.163', '1750031713'),
(2276, '84', '0', '2025-06-16', '216.73.216.163', '1750031713'),
(2277, '94', '0', '2025-06-16', '216.73.216.163', '1750031755'),
(2278, '97', '0', '2025-06-16', '216.73.216.163', '1750031795'),
(2279, '82', '0', '2025-06-16', '216.73.216.163', '1750031949'),
(2280, '62', '0', '2025-06-16', '216.73.216.163', '1750032132'),
(2281, '107', '0', '2025-06-16', '216.73.216.163', '1750032308'),
(2282, '108', '0', '2025-06-16', '216.73.216.163', '1750032447'),
(2283, '96', '0', '2025-06-16', '216.73.216.163', '1750032648'),
(2284, '103', '0', '2025-06-16', '216.73.216.163', '1750032725'),
(2285, '59', '0', '2025-06-16', '216.73.216.163', '1750033018'),
(2286, '74', '0', '2025-06-16', '216.73.216.163', '1750033052'),
(2287, '60', '0', '2025-06-16', '216.73.216.163', '1750033242'),
(2288, '72', '0', '2025-06-16', '216.73.216.163', '1750033510'),
(2289, '52', '0', '2025-06-16', '216.73.216.163', '1750033510'),
(2290, '75', '0', '2025-06-16', '216.73.216.163', '1750033558'),
(2291, '46', '0', '2025-06-16', '216.73.216.163', '1750033768'),
(2292, '50', '0', '2025-06-16', '216.73.216.163', '1750033981'),
(2293, '11', '0', '2025-06-16', '216.73.216.163', '1750034761'),
(2294, '58', '0', '2025-06-16', '216.73.216.163', '1750035345'),
(2295, '95', '0', '2025-06-16', '57.141.6.28', '1750035471'),
(2296, '47', '0', '2025-06-16', '216.73.216.163', '1750035782'),
(2297, '71', '0', '2025-06-16', '216.73.216.163', '1750035872'),
(2298, '111', '0', '2025-06-16', '57.141.6.23', '1750035915'),
(2299, '49', '0', '2025-06-16', '216.73.216.163', '1750036481'),
(2300, '70', '0', '2025-06-16', '216.73.216.163', '1750036644'),
(2301, '57', '0', '2025-06-16', '216.73.216.163', '1750036644'),
(2302, '56', '0', '2025-06-16', '216.73.216.163', '1750036843'),
(2303, '66', '0', '2025-06-16', '216.73.216.163', '1750036898'),
(2304, '45', '0', '2025-06-16', '216.73.216.163', '1750036988'),
(2305, '48', '0', '2025-06-16', '216.73.216.163', '1750037034'),
(2306, '55', '0', '2025-06-16', '216.73.216.163', '1750037078'),
(2307, '53', '0', '2025-06-16', '216.73.216.163', '1750037260'),
(2308, '76', '0', '2025-06-16', '57.141.6.30', '1750037492'),
(2309, '76', '0', '2025-06-16', '216.73.216.163', '1750037914'),
(2310, '95', '0', '2025-06-16', '57.141.6.7', '1750039198'),
(2311, '105', '0', '2025-06-16', '57.141.6.26', '1750042634'),
(2312, '102', '0', '2025-06-16', '57.141.6.6', '1750044610'),
(2313, '92', '0', '2025-06-16', '57.141.6.13', '1750048726'),
(2314, '10', '0', '2025-06-16', '57.141.6.23', '1750050052'),
(2315, '102', '0', '2025-06-16', '57.141.6.29', '1750050876'),
(2316, '103', '35', '2025-06-16', '157.119.44.228', '1750052571'),
(2317, '91', '35', '2025-06-16', '157.119.44.228', '1750053244'),
(2318, '9', '0', '2025-06-16', '57.141.6.9', '1750058002'),
(2319, '92', '0', '2025-06-16', '57.141.6.24', '1750062529'),
(2320, '107', '0', '2025-06-16', '57.141.6.4', '1750066117'),
(2321, '103', '0', '2025-06-16', '69.171.249.4', '1750067872'),
(2322, '117', '0', '2025-06-16', '173.252.87.3', '1750071317'),
(2323, '97', '35', '2025-06-16', '157.119.44.228', '1750074868'),
(2324, '8', '0', '2025-06-16', '57.141.6.6', '1750077780'),
(2325, '10', '0', '2025-06-16', '57.141.6.20', '1750080186'),
(2326, '4', '0', '2025-06-16', '57.141.6.29', '1750080345'),
(2327, '74', '0', '2025-06-16', '57.141.6.10', '1750084850'),
(2328, '56', '0', '2025-06-16', '57.141.6.27', '1750085087'),
(2329, '102', '0', '2025-06-16', '57.141.6.4', '1750085467'),
(2330, '111', '0', '2025-06-16', '57.141.6.20', '1750087042'),
(2331, '88', '0', '2025-06-16', '57.141.6.26', '1750087105'),
(2332, '4', '0', '2025-06-16', '57.141.6.16', '1750091418'),
(2333, '109', '0', '2025-06-16', '57.141.6.13', '1750092104'),
(2334, '47', '0', '2025-06-16', '57.141.6.29', '1750093686'),
(2335, '111', '0', '2025-06-17', '57.141.6.12', '1750099280'),
(2336, '107', '0', '2025-06-17', '57.141.6.7', '1750100050'),
(2337, '70', '0', '2025-06-17', '57.141.6.8', '1750103360'),
(2338, '8', '0', '2025-06-17', '57.141.6.28', '1750105623'),
(2339, '11', '0', '2025-06-17', '57.141.6.16', '1750107825'),
(2340, '13', '0', '2025-06-17', '57.141.6.28', '1750108923'),
(2341, '32', '0', '2025-06-17', '57.141.6.14', '1750109362'),
(2342, '97', '0', '2025-06-17', '57.141.6.23', '1750110224'),
(2343, '109', '0', '2025-06-17', '57.141.6.26', '1750111535'),
(2344, '101', '0', '2025-06-17', '57.141.6.6', '1750111646'),
(2345, '96', '0', '2025-06-17', '57.141.6.27', '1750113629'),
(2346, '45', '0', '2025-06-17', '216.73.216.51', '1750115464'),
(2347, '78', '0', '2025-06-17', '57.141.6.5', '1750118214'),
(2348, '75', '0', '2025-06-17', '57.141.6.22', '1750119832'),
(2349, '82', '0', '2025-06-17', '57.141.6.24', '1750120130'),
(2350, '95', '0', '2025-06-17', '57.141.6.24', '1750120823'),
(2351, '102', '0', '2025-06-17', '57.141.6.24', '1750121309'),
(2352, '63', '0', '2025-06-17', '57.141.6.6', '1750123131'),
(2353, '90', '0', '2025-06-17', '57.141.6.16', '1750123918'),
(2354, '104', '0', '2025-06-17', '57.141.6.8', '1750124298'),
(2355, '52', '0', '2025-06-17', '57.141.6.14', '1750128016'),
(2356, '94', '0', '2025-06-17', '57.141.6.1', '1750134949'),
(2357, '10', '0', '2025-06-17', '57.141.6.23', '1750137421'),
(2358, '82', '0', '2025-06-17', '52.167.144.16', '1750137666'),
(2359, '12', '0', '2025-06-17', '57.141.6.14', '1750141673'),
(2360, '9', '0', '2025-06-17', '57.141.6.14', '1750144374'),
(2361, '105', '0', '2025-06-17', '20.171.207.104', '1750150131'),
(2362, '8', '0', '2025-06-17', '66.249.68.137', '1750151750'),
(2363, '77', '0', '2025-06-17', '57.141.6.23', '1750159068'),
(2364, '82', '0', '2025-06-17', '57.141.6.1', '1750161527'),
(2365, '92', '0', '2025-06-17', '57.141.6.13', '1750162056'),
(2366, '90', '0', '2025-06-17', '57.141.6.27', '1750162712'),
(2367, '72', '0', '2025-06-17', '57.141.6.28', '1750164471'),
(2368, '54', '0', '2025-06-17', '57.141.6.17', '1750165130'),
(2369, '10', '0', '2025-06-17', '57.141.6.2', '1750167158'),
(2370, '8', '0', '2025-06-17', '69.171.249.4', '1750169078'),
(2371, '71', '0', '2025-06-17', '57.141.6.24', '1750172014'),
(2372, '112', '0', '2025-06-17', '57.141.6.16', '1750174758'),
(2373, '24', '0', '2025-06-17', '57.141.6.23', '1750175991'),
(2374, '28', '0', '2025-06-17', '57.141.6.16', '1750176919'),
(2375, '28', '0', '2025-06-17', '57.141.6.31', '1750178585'),
(2376, '84', '0', '2025-06-18', '52.167.144.188', '1750189267'),
(2377, '108', '0', '2025-06-18', '57.141.6.31', '1750191675'),
(2378, '104', '0', '2025-06-18', '57.141.6.12', '1750192603'),
(2379, '112', '0', '2025-06-18', '57.141.6.21', '1750194765'),
(2380, '9', '0', '2025-06-18', '57.141.6.15', '1750195650'),
(2381, '108', '0', '2025-06-18', '57.141.6.19', '1750196133'),
(2382, '11', '0', '2025-06-18', '20.171.207.30', '1750197993'),
(2383, '98', '0', '2025-06-18', '57.141.6.2', '1750199720'),
(2384, '87', '0', '2025-06-18', '57.141.6.29', '1750201590'),
(2385, '8', '0', '2025-06-18', '57.141.6.30', '1750203773'),
(2386, '102', '0', '2025-06-18', '57.141.6.23', '1750206464'),
(2387, '117', '0', '2025-06-18', '43.157.149.188', '1750206574'),
(2388, '66', '0', '2025-06-18', '57.141.6.1', '1750207057'),
(2389, '111', '0', '2025-06-18', '57.141.6.14', '1750212414'),
(2390, '104', '0', '2025-06-18', '57.141.6.13', '1750213811'),
(2391, '10', '0', '2025-06-18', '57.141.6.30', '1750219219'),
(2392, '28', '0', '2025-06-18', '57.141.6.18', '1750221841'),
(2393, '107', '0', '2025-06-18', '57.141.6.31', '1750224216'),
(2394, '112', '0', '2025-06-18', '101.33.66.34', '1750236337'),
(2395, '64', '0', '2025-06-18', '43.166.245.250', '1750237562'),
(2396, '112', '0', '2025-06-18', '43.156.156.96', '1750238739'),
(2397, '55', '0', '2025-06-18', '57.141.6.30', '1750257209'),
(2398, '86', '0', '2025-06-18', '57.141.6.12', '1750258056'),
(2399, '14', '0', '2025-06-18', '57.141.6.19', '1750258283'),
(2400, '57', '0', '2025-06-18', '57.141.6.14', '1750258316'),
(2401, '53', '0', '2025-06-18', '57.141.6.1', '1750259434'),
(2402, '63', '0', '2025-06-18', '57.141.6.12', '1750260932'),
(2403, '83', '0', '2025-06-18', '57.141.6.11', '1750262719'),
(2404, '61', '0', '2025-06-19', '57.141.6.11', '1750272400'),
(2405, '117', '0', '2025-06-19', '49.51.233.95', '1750289839'),
(2406, '112', '0', '2025-06-19', '43.166.247.155', '1750294098'),
(2407, '112', '0', '2025-06-19', '43.133.220.37', '1750296303'),
(2408, '64', '0', '2025-06-19', '43.157.147.3', '1750298111'),
(2409, '13', '0', '2025-06-19', '103.38.68.172', '1750306224'),
(2410, '83', '35', '2025-06-19', '103.38.68.172', '1750306311'),
(2411, '91', '35', '2025-06-19', '103.38.68.172', '1750306364'),
(2412, '87', '0', '2025-06-19', '40.77.167.19', '1750317061'),
(2413, '4', '0', '2025-06-19', '157.55.39.202', '1750319691'),
(2414, '58', '0', '2025-06-19', '57.141.6.31', '1750356329'),
(2415, '95', '0', '2025-06-20', '57.141.6.13', '1750358641'),
(2416, '15', '0', '2025-06-20', '57.141.6.29', '1750359038'),
(2417, '8', '0', '2025-06-20', '57.141.6.15', '1750364810'),
(2418, '44', '0', '2025-06-20', '57.141.6.3', '1750365056'),
(2419, '10', '0', '2025-06-20', '57.141.6.2', '1750369868'),
(2420, '49', '0', '2025-06-20', '57.141.6.15', '1750370180'),
(2421, '87', '0', '2025-06-20', '57.141.6.16', '1750371155'),
(2422, '32', '0', '2025-06-20', '57.141.6.9', '1750376148'),
(2423, '84', '0', '2025-06-20', '57.141.6.14', '1750378295'),
(2424, '117', '0', '2025-06-20', '57.141.6.19', '1750380242'),
(2425, '70', '0', '2025-06-20', '57.141.6.4', '1750380590'),
(2426, '81', '0', '2025-06-20', '57.141.6.9', '1750381078'),
(2427, '98', '0', '2025-06-20', '57.141.6.8', '1750383930'),
(2428, '45', '0', '2025-06-20', '57.141.6.4', '1750386160'),
(2429, '53', '35', '2025-06-20', '103.38.68.172', '1750411850'),
(2430, '57', '35', '2025-06-20', '103.38.68.172', '1750412038'),
(2431, '111', '0', '2025-06-20', '57.141.6.15', '1750418923'),
(2432, '112', '0', '2025-06-20', '103.38.68.172', '1750419698'),
(2433, '96', '0', '2025-06-20', '103.38.68.172', '1750419741'),
(2434, '91', '0', '2025-06-20', '103.38.68.172', '1750419745'),
(2435, '105', '0', '2025-06-20', '57.141.6.11', '1750425868'),
(2436, '86', '0', '2025-06-20', '52.167.144.206', '1750433385'),
(2437, '93', '0', '2025-06-20', '57.141.6.26', '1750434582');
INSERT INTO `product_visiter` (`product_visiter_id`, `prod_id`, `user_id`, `visit_date`, `ip_address`, `visit_time`) VALUES
(2438, '100', '0', '2025-06-20', '57.141.6.10', '1750437999'),
(2439, '47', '0', '2025-06-20', '57.141.6.3', '1750440407'),
(2440, '102', '0', '2025-06-20', '57.141.6.13', '1750441176'),
(2441, '106', '0', '2025-06-21', '57.141.6.4', '1750445713'),
(2442, '12', '0', '2025-06-21', '57.141.6.20', '1750450856'),
(2443, '95', '0', '2025-06-21', '57.141.6.21', '1750451696'),
(2444, '103', '0', '2025-06-21', '57.141.6.31', '1750454110'),
(2445, '117', '0', '2025-06-21', '43.153.135.208', '1750454701'),
(2446, '46', '0', '2025-06-21', '57.141.6.28', '1750457529'),
(2447, '89', '0', '2025-06-21', '57.141.6.11', '1750458194'),
(2448, '85', '0', '2025-06-21', '57.141.6.20', '1750458593'),
(2449, '117', '0', '2025-06-21', '57.141.6.12', '1750462575'),
(2450, '110', '0', '2025-06-21', '57.141.6.9', '1750465218'),
(2451, '8', '0', '2025-06-21', '57.141.6.29', '1750465408'),
(2452, '97', '0', '2025-06-21', '207.46.13.92', '1750466044'),
(2453, '4', '0', '2025-06-21', '57.141.6.21', '1750469913'),
(2454, '10', '0', '2025-06-21', '57.141.6.19', '1750476493'),
(2455, '95', '0', '2025-06-21', '57.141.6.5', '1750480222'),
(2456, '50', '0', '2025-06-21', '57.141.6.15', '1750508312'),
(2457, '12', '0', '2025-06-21', '57.141.6.29', '1750517354'),
(2458, '51', '0', '2025-06-21', '57.141.6.12', '1750523003'),
(2459, '13', '0', '2025-06-21', '57.141.6.3', '1750524066'),
(2460, '107', '0', '2025-06-21', '57.141.6.12', '1750524253'),
(2461, '105', '0', '2025-06-21', '57.141.6.9', '1750525610'),
(2462, '48', '0', '2025-06-21', '57.141.6.11', '1750526663'),
(2463, '60', '0', '2025-06-21', '57.141.6.3', '1750529844'),
(2464, '76', '0', '2025-06-22', '57.141.6.7', '1750531017'),
(2465, '102', '0', '2025-06-22', '57.141.6.2', '1750532294'),
(2466, '80', '0', '2025-06-22', '57.141.6.15', '1750534692'),
(2467, '117', '0', '2025-06-22', '57.141.6.29', '1750537902'),
(2468, '7', '0', '2025-06-22', '69.160.160.56', '1750538627'),
(2469, '13', '0', '2025-06-22', '69.160.160.56', '1750538629'),
(2470, '84', '0', '2025-06-22', '69.160.160.56', '1750538638'),
(2471, '96', '0', '2025-06-22', '69.160.160.56', '1750538639'),
(2472, '47', '0', '2025-06-22', '69.160.160.56', '1750538640'),
(2473, '92', '0', '2025-06-22', '57.141.6.9', '1750539515'),
(2474, '11', '0', '2025-06-22', '52.167.144.147', '1750541336'),
(2475, '4', '0', '2025-06-22', '57.141.6.26', '1750543069'),
(2476, '98', '0', '2025-06-22', '17.241.75.136', '1750543088'),
(2477, '61', '0', '2025-06-22', '66.249.79.34', '1750555342'),
(2478, '87', '0', '2025-06-22', '57.141.6.3', '1750562615'),
(2479, '88', '0', '2025-06-22', '66.249.79.35', '1750562697'),
(2480, '10', '0', '2025-06-22', '57.141.6.8', '1750564339'),
(2481, '8', '0', '2025-06-22', '57.141.6.9', '1750566018'),
(2482, '12', '0', '2025-06-22', '173.252.87.12', '1750579113'),
(2483, '101', '0', '2025-06-22', '52.167.144.158', '1750586008'),
(2484, '62', '0', '2025-06-22', '57.141.6.29', '1750593157'),
(2485, '4', '0', '2025-06-22', '57.141.6.7', '1750595570'),
(2486, '109', '0', '2025-06-22', '57.141.6.5', '1750600046'),
(2487, '109', '0', '2025-06-22', '57.141.6.14', '1750600292'),
(2488, '13', '0', '2025-06-22', '57.141.6.5', '1750600454'),
(2489, '97', '0', '2025-06-22', '57.141.6.8', '1750601465'),
(2490, '13', '0', '2025-06-22', '52.167.144.176', '1750603974'),
(2491, '61', '0', '2025-06-22', '69.171.230.14', '1750604563'),
(2492, '8', '0', '2025-06-22', '57.141.6.16', '1750605817'),
(2493, '27', '0', '2025-06-22', '57.141.6.29', '1750609910'),
(2494, '75', '0', '2025-06-22', '57.141.6.20', '1750610534'),
(2495, '111', '0', '2025-06-22', '57.141.6.4', '1750610537'),
(2496, '107', '0', '2025-06-22', '57.141.6.6', '1750611327'),
(2497, '7', '0', '2025-06-22', '57.141.6.2', '1750612798'),
(2498, '74', '0', '2025-06-22', '57.141.6.29', '1750615855'),
(2499, '52', '0', '2025-06-23', '57.141.6.10', '1750617161'),
(2500, '63', '0', '2025-06-23', '57.141.6.9', '1750619007'),
(2501, '11', '0', '2025-06-23', '57.141.6.2', '1750619219'),
(2502, '10', '0', '2025-06-23', '57.141.6.9', '1750625349'),
(2503, '4', '0', '2025-06-23', '57.141.6.13', '1750626378'),
(2504, '8', '0', '2025-06-23', '57.141.6.11', '1750634876'),
(2505, '117', '0', '2025-06-23', '43.166.237.57', '1750636080'),
(2506, '12', '0', '2025-06-23', '57.141.6.2', '1750645631'),
(2507, '87', '0', '2025-06-23', '57.141.6.28', '1750650803'),
(2508, '92', '0', '2025-06-23', '57.141.6.12', '1750652193'),
(2509, '13', '0', '2025-06-23', '57.141.6.27', '1750652901'),
(2510, '102', '0', '2025-06-23', '57.141.6.4', '1750654586'),
(2511, '12', '0', '2025-06-23', '43.166.132.142', '1750663145'),
(2512, '97', '0', '2025-06-23', '173.252.87.9', '1750664257'),
(2513, '112', '0', '2025-06-23', '43.156.204.134', '1750665458'),
(2514, '108', '0', '2025-06-23', '223.233.84.56', '1750668655'),
(2515, '117', '0', '2025-06-23', '58.84.60.242', '1750671577'),
(2516, '97', '0', '2025-06-23', '58.84.60.242', '1750671602'),
(2517, '111', '0', '2025-06-23', '58.84.60.242', '1750671655'),
(2518, '100', '0', '2025-06-23', '58.84.60.242', '1750671677'),
(2519, '56', '0', '2025-06-23', '57.141.6.21', '1750679914'),
(2520, '90', '0', '2025-06-23', '57.141.6.22', '1750680042'),
(2521, '63', '0', '2025-06-23', '69.171.249.5', '1750681172'),
(2522, '26', '0', '2025-06-23', '57.141.6.31', '1750683510'),
(2523, '82', '0', '2025-06-23', '57.141.6.8', '1750685303'),
(2524, '66', '0', '2025-06-23', '57.141.6.12', '1750689352'),
(2525, '112', '0', '2025-06-23', '27.97.87.91', '1750693609'),
(2526, '87', '0', '2025-06-23', '57.141.6.27', '1750694556'),
(2527, '26', '0', '2025-06-23', '40.77.167.71', '1750695986'),
(2528, '63', '0', '2025-06-23', '57.141.6.26', '1750697178'),
(2529, '10', '0', '2025-06-23', '57.141.6.8', '1750700822'),
(2530, '95', '0', '2025-06-23', '57.141.6.14', '1750701150'),
(2531, '28', '0', '2025-06-23', '57.141.6.21', '1750702251'),
(2532, '78', '0', '2025-06-23', '57.141.6.24', '1750702631'),
(2533, '54', '0', '2025-06-23', '57.141.6.30', '1750703093'),
(2534, '94', '0', '2025-06-24', '57.141.6.16', '1750704414'),
(2535, '88', '0', '2025-06-24', '57.141.6.26', '1750704751'),
(2536, '53', '0', '2025-06-24', '40.77.167.60', '1750705165'),
(2537, '104', '0', '2025-06-24', '57.141.6.16', '1750705858'),
(2538, '8', '0', '2025-06-24', '57.141.6.21', '1750706157'),
(2539, '24', '0', '2025-06-24', '52.167.144.196', '1750710104'),
(2540, '117', '0', '2025-06-24', '57.141.0.10', '1750711420'),
(2541, '64', '0', '2025-06-24', '170.106.65.93', '1750714042'),
(2542, '102', '0', '2025-06-24', '57.141.0.30', '1750714492'),
(2543, '64', '0', '2025-06-24', '43.130.150.80', '1750715536'),
(2544, '107', '0', '2025-06-24', '57.141.6.2', '1750717444'),
(2545, '10', '0', '2025-06-24', '57.141.6.12', '1750718647'),
(2546, '112', '0', '2025-06-24', '43.166.247.155', '1750723599'),
(2547, '4', '0', '2025-06-24', '57.141.6.2', '1750724177'),
(2548, '13', '0', '2025-06-24', '57.141.6.19', '1750729770'),
(2549, '60', '0', '2025-06-24', '40.77.167.37', '1750732536'),
(2550, '92', '0', '2025-06-24', '57.141.6.10', '1750735359'),
(2551, '10', '0', '2025-06-24', '66.249.68.135', '1750737819'),
(2552, '98', '0', '2025-06-24', '66.249.68.136', '1750738840'),
(2553, '111', '0', '2025-06-24', '57.141.6.5', '1750742995'),
(2554, '92', '0', '2025-06-24', '40.77.167.131', '1750743835'),
(2555, '62\'', '0', '2025-06-24', '45.138.16.250', '1750748567'),
(2556, '62', '0', '2025-06-24', '45.138.16.250', '1750748567'),
(2557, '12', '0', '2025-06-24', '43.135.186.135', '1750748585'),
(2558, '64', '0', '2025-06-24', '43.131.253.14', '1750749831'),
(2559, '12', '0', '2025-06-24', '43.157.179.227', '1750751581'),
(2560, '15', '0', '2025-06-24', '40.77.167.77', '1750773201'),
(2561, '71', '0', '2025-06-24', '57.141.0.27', '1750775500'),
(2562, '53', '0', '2025-06-24', '57.141.0.2', '1750776134'),
(2563, '108', '0', '2025-06-24', '57.141.0.28', '1750777392'),
(2564, '24', '0', '2025-06-24', '57.141.6.4', '1750780091'),
(2565, '72', '0', '2025-06-24', '57.141.6.13', '1750780845'),
(2566, '77', '0', '2025-06-24', '57.141.6.19', '1750781774'),
(2567, '9', '0', '2025-06-24', '57.141.6.4', '1750782523'),
(2568, '61', '0', '2025-06-24', '57.141.6.12', '1750782846'),
(2569, '92', '0', '2025-06-24', '57.141.6.4', '1750783177'),
(2570, '112', '0', '2025-06-24', '57.141.6.21', '1750783727'),
(2571, '80', '0', '2025-06-24', '66.249.68.135', '1750785104'),
(2572, '57', '0', '2025-06-24', '57.141.6.8', '1750785634'),
(2573, '102', '0', '2025-06-24', '40.77.167.13', '1750789485'),
(2574, '63', '0', '2025-06-25', '57.141.6.12', '1750790668'),
(2575, '14', '0', '2025-06-25', '57.141.6.20', '1750791430'),
(2576, '86', '0', '2025-06-25', '57.141.6.1', '1750792502'),
(2577, '77', '0', '2025-06-25', '66.249.79.33', '1750804908'),
(2578, '50', '0', '2025-06-25', '66.249.79.33', '1750806077'),
(2579, '56', '0', '2025-06-25', '66.249.79.33', '1750806749'),
(2580, '62', '0', '2025-06-25', '194.127.199.88', '1750810820'),
(2581, '62\'', '0', '2025-06-25', '194.127.199.88', '1750810821'),
(2582, '8', '0', '2025-06-25', '40.77.167.48', '1750813305'),
(2583, '100', '0', '2025-06-25', '40.77.167.6', '1750823268'),
(2584, '87', '0', '2025-06-25', '57.141.6.30', '1750830856'),
(2585, '95', '0', '2025-06-25', '57.141.6.19', '1750838630'),
(2586, '108', '0', '2025-06-25', '66.220.149.13', '1750839437'),
(2587, '10', '0', '2025-06-25', '57.141.6.21', '1750843145'),
(2588, '9', '0', '2025-06-25', '173.252.87.14', '1750843714'),
(2589, '63', '0', '2025-06-25', '17.241.75.195', '1750845642'),
(2590, '46', '0', '2025-06-25', '66.249.79.33', '1750846338'),
(2591, '8', '0', '2025-06-25', '57.141.6.11', '1750851861'),
(2592, '83', '0', '2025-06-25', '57.141.6.14', '1750851871'),
(2593, '70', '0', '2025-06-25', '57.141.6.9', '1750855405'),
(2594, '13', '0', '2025-06-25', '57.141.6.12', '1750858333'),
(2595, '109', '0', '2025-06-25', '52.167.144.22', '1750863098'),
(2596, '79', '0', '2025-06-25', '57.141.6.4', '1750865036'),
(2597, '10', '0', '2025-06-25', '57.141.6.9', '1750869657'),
(2598, '15', '0', '2025-06-25', '57.141.6.21', '1750873031'),
(2599, '95', '0', '2025-06-25', '57.141.6.7', '1750874002'),
(2600, '45', '0', '2025-06-25', '57.141.6.3', '1750874509'),
(2601, '81', '0', '2025-06-26', '57.141.6.5', '1750878670'),
(2602, '98', '0', '2025-06-26', '57.141.6.27', '1750880863'),
(2603, '86', '0', '2025-06-26', '66.249.68.136', '1750882897'),
(2604, '87', '0', '2025-06-26', '57.141.6.9', '1750883720'),
(2605, '32', '0', '2025-06-26', '57.141.6.20', '1750884631'),
(2606, '64', '0', '2025-06-26', '57.141.6.31', '1750884731'),
(2607, '49', '0', '2025-06-26', '57.141.6.24', '1750885066'),
(2608, '111', '0', '2025-06-26', '57.141.6.22', '1750886172'),
(2609, '84', '0', '2025-06-26', '57.141.6.22', '1750886507'),
(2610, '107', '0', '2025-06-26', '57.141.6.12', '1750887230'),
(2611, '55', '0', '2025-06-26', '57.141.6.19', '1750890234'),
(2612, '8', '0', '2025-06-26', '57.141.6.29', '1750916477'),
(2613, '45', '0', '2025-06-26', '40.77.167.156', '1750921950'),
(2614, '112', '0', '2025-06-26', '49.36.41.29', '1750925722'),
(2615, '62', '0', '2025-06-26', '203.192.204.84', '1750938030'),
(2616, '62', '38', '2025-06-26', '203.192.204.84', '1750938170'),
(2617, '91', '0', '2025-06-26', '40.77.167.32', '1750941594'),
(2618, '58', '0', '2025-06-26', '57.141.6.24', '1750943404'),
(2619, '100', '0', '2025-06-26', '57.141.6.29', '1750944566'),
(2620, '47', '0', '2025-06-26', '57.141.6.4', '1750944575'),
(2621, '46', '0', '2025-06-26', '57.141.6.19', '1750945076'),
(2622, '13', '0', '2025-06-26', '17.241.227.22', '1750945553'),
(2623, '103', '0', '2025-06-26', '57.141.6.23', '1750950476'),
(2624, '44', '0', '2025-06-26', '57.141.6.29', '1750950765'),
(2625, '56', '0', '2025-06-26', '40.77.167.51', '1750951800'),
(2626, '62', '39', '2025-06-26', '203.192.204.84', '1750955056'),
(2627, '98', '0', '2025-06-26', '57.141.6.19', '1750955705'),
(2628, '30', '0', '2025-06-26', '40.77.167.57', '1750959520'),
(2629, '75', '0', '2025-06-27', '52.167.144.160', '1750974906'),
(2630, '47', '0', '2025-06-27', '52.167.144.158', '1750978230'),
(2631, '89', '0', '2025-06-27', '57.141.6.16', '1750990063'),
(2632, '111', '0', '2025-06-27', '57.141.6.27', '1750994428'),
(2633, '105', '39', '2025-06-27', '103.215.164.41', '1750995153'),
(2634, '63', '0', '2025-06-27', '103.38.68.167', '1750998021'),
(2635, '15', '0', '2025-06-27', '103.38.68.167', '1750998041'),
(2636, '32', '0', '2025-06-27', '103.38.68.167', '1750998055'),
(2637, '102', '0', '2025-06-27', '57.141.6.30', '1751001626'),
(2638, '51', '0', '2025-06-27', '57.141.6.13', '1751022846'),
(2639, '85', '0', '2025-06-27', '57.141.6.22', '1751025348'),
(2640, '93', '0', '2025-06-27', '57.141.6.29', '1751027405'),
(2641, '80', '0', '2025-06-27', '57.141.6.22', '1751032179'),
(2642, '95', '0', '2025-06-27', '57.141.6.8', '1751037422'),
(2643, '12', '0', '2025-06-27', '57.141.6.30', '1751038344'),
(2644, '105', '0', '2025-06-27', '57.141.6.29', '1751039887'),
(2645, '74', '0', '2025-06-28', '52.167.144.140', '1751050408'),
(2646, '105', '0', '2025-06-28', '57.141.6.22', '1751050650'),
(2647, '8', '0', '2025-06-28', '57.141.6.11', '1751057437'),
(2648, '10', '0', '2025-06-28', '57.141.6.17', '1751060201'),
(2649, '95', '0', '2025-06-28', '57.141.6.6', '1751062138'),
(2650, '110', '0', '2025-06-28', '57.141.6.29', '1751063690'),
(2651, '106', '0', '2025-06-28', '57.141.6.9', '1751065619'),
(2652, '10', '0', '2025-06-28', '57.141.6.16', '1751084478'),
(2653, '117', '0', '2025-06-28', '43.159.139.164', '1751090541'),
(2654, '112', '0', '2025-06-28', '43.157.82.252', '1751094688'),
(2655, '8', '0', '2025-06-28', '57.141.6.14', '1751095676'),
(2656, '43', '0', '2025-06-28', '66.249.79.33', '1751101105'),
(2657, '57', '0', '2025-06-28', '66.249.79.34', '1751101285'),
(2658, '50', '0', '2025-06-28', '57.141.6.19', '1751126431'),
(2659, '8', '0', '2025-06-28', '57.141.6.18', '1751127025'),
(2660, '48', '0', '2025-06-28', '57.141.6.5', '1751130270'),
(2661, '64', '0', '2025-06-29', '43.128.156.124', '1751137281'),
(2662, '70', '0', '2025-06-29', '66.249.79.33', '1751157983'),
(2663, '52', '0', '2025-06-29', '66.249.79.34', '1751158151'),
(2664, '108', '0', '2025-06-29', '40.77.167.57', '1751159913'),
(2665, '94', '0', '2025-06-29', '40.77.167.70', '1751161895'),
(2666, '10', '0', '2025-06-29', '57.141.6.2', '1751162995'),
(2667, '71', '0', '2025-06-29', '66.249.79.33', '1751165215'),
(2668, '78', '0', '2025-06-29', '66.249.79.34', '1751165739'),
(2669, '54', '0', '2025-06-29', '66.249.79.35', '1751166476'),
(2670, '112', '0', '2025-06-29', '43.173.1.57', '1751171076'),
(2671, '12', '0', '2025-06-29', '170.106.180.153', '1751172788'),
(2672, '60', '0', '2025-06-29', '57.141.6.27', '1751174669'),
(2673, '12', '0', '2025-06-29', '43.133.91.48', '1751176427'),
(2674, '11', '0', '2025-06-29', '57.141.6.13', '1751177730'),
(2675, '107', '0', '2025-06-29', '66.249.79.34', '1751178727'),
(2676, '109', '0', '2025-06-29', '66.249.79.34', '1751179195'),
(2677, '112', '0', '2025-06-29', '66.249.79.33', '1751179222'),
(2678, '76', '0', '2025-06-29', '57.141.6.28', '1751187997'),
(2679, '62', '0', '2025-06-29', '57.141.6.31', '1751188388'),
(2680, '74', '0', '2025-06-29', '57.141.6.15', '1751190853'),
(2681, '8', '0', '2025-06-29', '57.141.6.15', '1751191792'),
(2682, '109', '0', '2025-06-29', '57.141.6.5', '1751197193'),
(2683, '76', '0', '2025-06-29', '52.167.144.166', '1751198331'),
(2684, '7', '0', '2025-06-29', '57.141.6.18', '1751199143'),
(2685, '78', '0', '2025-06-29', '57.141.6.13', '1751200584'),
(2686, '13', '0', '2025-06-29', '57.141.6.30', '1751201458'),
(2687, '56', '0', '2025-06-29', '57.141.6.12', '1751202051'),
(2688, '88', '0', '2025-06-29', '57.141.6.14', '1751205853'),
(2689, '26', '0', '2025-06-29', '57.141.6.19', '1751208848'),
(2690, '4', '0', '2025-06-29', '57.141.6.5', '1751214039'),
(2691, '94', '0', '2025-06-29', '57.141.6.31', '1751220068'),
(2692, '75', '0', '2025-06-29', '57.141.6.10', '1751220334'),
(2693, '97', '0', '2025-06-29', '57.141.6.21', '1751220454'),
(2694, '52', '0', '2025-06-30', '57.141.6.31', '1751221890'),
(2695, '85', '0', '2025-06-30', '66.249.68.137', '1751222221'),
(2696, '58', '0', '2025-06-30', '66.249.68.135', '1751229147'),
(2697, '44', '0', '2025-06-30', '66.249.79.35', '1751229707'),
(2698, '47', '0', '2025-06-30', '66.249.79.33', '1751229780'),
(2699, '45', '0', '2025-06-30', '66.249.79.34', '1751229789'),
(2700, '48', '0', '2025-06-30', '66.249.79.33', '1751229798'),
(2701, '74', '0', '2025-06-30', '66.249.79.33', '1751229826'),
(2702, '49', '0', '2025-06-30', '66.249.79.34', '1751229925'),
(2703, '53', '0', '2025-06-30', '66.249.79.33', '1751229930'),
(2704, '60', '0', '2025-06-30', '66.249.79.33', '1751229961'),
(2705, '55', '0', '2025-06-30', '66.249.79.33', '1751229965'),
(2706, '59', '0', '2025-06-30', '66.249.79.33', '1751229990'),
(2707, '75', '0', '2025-06-30', '66.249.79.33', '1751230044'),
(2708, '74', '0', '2025-06-30', '66.249.68.135', '1751230048'),
(2709, '79', '0', '2025-06-30', '66.249.68.137', '1751233243'),
(2710, '106', '0', '2025-06-30', '52.167.144.24', '1751241884'),
(2711, '117', '0', '2025-06-30', '43.166.250.187', '1751250324'),
(2712, '117', '0', '2025-06-30', '49.51.180.2', '1751253315'),
(2713, NULL, '0', '2025-06-30', '74.125.150.137', '1751254510'),
(2714, '13', '0', '2025-06-30', '203.192.235.169', '1751282755'),
(2715, '9', '0', '2025-06-30', '203.192.235.169', '1751282813'),
(2716, '108', '0', '2025-06-30', '203.192.235.169', '1751283775'),
(2717, '92', '0', '2025-06-30', '57.141.6.12', '1751286509'),
(2718, '112', '0', '2025-06-30', '57.141.6.22', '1751291063'),
(2719, '104', '0', '2025-06-30', '57.141.6.21', '1751294445'),
(2720, '54', '0', '2025-06-30', '57.141.6.14', '1751296842'),
(2721, '110', '0', '2025-06-30', '52.167.144.16', '1751303918'),
(2722, '111', '0', '2025-06-30', '106.221.212.147', '1751306386'),
(2723, '71', '0', '2025-07-01', '157.55.39.54', '1751308602'),
(2724, '82', '0', '2025-07-01', '57.141.6.10', '1751310321'),
(2725, '61', '0', '2025-07-01', '57.141.6.16', '1751313221'),
(2726, '90', '0', '2025-07-01', '57.141.6.15', '1751315745'),
(2727, '108', '0', '2025-07-01', '57.141.6.18', '1751317914'),
(2728, '24', '0', '2025-07-01', '57.141.6.12', '1751321526'),
(2729, '71', '0', '2025-07-01', '57.141.6.20', '1751325561'),
(2730, '28', '0', '2025-07-01', '57.141.6.30', '1751329177'),
(2731, '10', '0', '2025-07-01', '17.241.227.54', '1751331196'),
(2732, '10', '0', '2025-07-01', '57.141.6.20', '1751333791'),
(2733, '53', '0', '2025-07-01', '57.141.6.20', '1751333817'),
(2734, '72', '0', '2025-07-01', '57.141.6.24', '1751335198'),
(2735, '66', '0', '2025-07-01', '57.141.6.21', '1751336885'),
(2736, '9', '0', '2025-07-01', '57.141.6.21', '1751337767'),
(2737, '77', '0', '2025-07-01', '57.141.6.7', '1751341815'),
(2738, '8', '0', '2025-07-01', '57.141.6.9', '1751363038'),
(2739, '107', '0', '2025-07-01', '57.141.6.8', '1751363290'),
(2740, '55', '0', '2025-07-01', '57.141.6.15', '1751380750'),
(2741, '14', '0', '2025-07-01', '57.141.6.2', '1751386332'),
(2742, '62', '38', '2025-07-01', '203.192.244.84', '1751389803'),
(2743, '83', '0', '2025-07-01', '57.141.6.24', '1751394242'),
(2744, '45', '0', '2025-07-02', '57.141.6.4', '1751395533'),
(2745, '86', '0', '2025-07-02', '57.141.6.7', '1751400302'),
(2746, '98', '0', '2025-07-02', '57.141.6.26', '1751402831'),
(2747, '49', '0', '2025-07-02', '57.141.6.9', '1751403823'),
(2748, '64', '0', '2025-07-02', '57.141.6.10', '1751404186'),
(2749, '63', '0', '2025-07-02', '57.141.6.16', '1751406547'),
(2750, '84', '0', '2025-07-02', '57.141.6.28', '1751406576'),
(2751, '15', '0', '2025-07-02', '57.141.6.17', '1751406613'),
(2752, '98', '0', '2025-07-02', '95.108.213.151', '1751408061'),
(2753, '10', '0', '2025-07-02', '213.180.203.126', '1751408061'),
(2754, '4', '0', '2025-07-02', '213.180.203.157', '1751408195'),
(2755, '92', '0', '2025-07-02', '5.255.231.144', '1751408210'),
(2756, '12', '0', '2025-07-02', '95.108.213.151', '1751408212'),
(2757, '63', '0', '2025-07-02', '5.255.231.106', '1751408212'),
(2758, '13', '0', '2025-07-02', '213.180.203.157', '1751408227'),
(2759, '7', '0', '2025-07-02', '95.108.213.109', '1751408333'),
(2760, '98', '0', '2025-07-02', '213.180.203.157', '1751408407'),
(2761, '92', '0', '2025-07-02', '95.108.213.135', '1751408498'),
(2762, '12', '0', '2025-07-02', '5.255.231.181', '1751408579'),
(2763, '112', '0', '2025-07-02', '87.250.224.73', '1751408647'),
(2764, '93', '0', '2025-07-02', '87.250.224.119', '1751408647'),
(2765, '98', '0', '2025-07-02', '213.180.203.221', '1751408651'),
(2766, '107', '0', '2025-07-02', '95.108.213.241', '1751408706'),
(2767, '97', '0', '2025-07-02', '213.180.203.58', '1751408707'),
(2768, '111', '0', '2025-07-02', '213.180.203.152', '1751408708'),
(2769, '102', '0', '2025-07-02', '87.250.224.214', '1751408709'),
(2770, '109', '0', '2025-07-02', '213.180.203.245', '1751408709'),
(2771, '108', '0', '2025-07-02', '95.108.213.135', '1751408711'),
(2772, '94', '0', '2025-07-02', '5.255.231.199', '1751408711'),
(2773, '100', '0', '2025-07-02', '95.108.213.241', '1751408712'),
(2774, '110', '0', '2025-07-02', '213.180.203.221', '1751408713'),
(2775, '117', '0', '2025-07-02', '95.108.213.109', '1751408713'),
(2776, '95', '0', '2025-07-02', '95.108.213.109', '1751408781'),
(2777, '104', '0', '2025-07-02', '87.250.224.214', '1751408782'),
(2778, '101', '0', '2025-07-02', '213.180.203.245', '1751408888'),
(2779, '106', '0', '2025-07-02', '5.255.231.199', '1751408890'),
(2780, '105', '0', '2025-07-02', '5.255.231.181', '1751408890'),
(2781, '103', '0', '2025-07-02', '213.180.203.221', '1751408891'),
(2782, '98', '0', '2025-07-02', '213.180.203.58', '1751408892'),
(2783, '96', '0', '2025-07-02', '87.250.224.119', '1751408893'),
(2784, '9', '0', '2025-07-02', '213.180.203.175', '1751408966'),
(2785, '10', '0', '2025-07-02', '5.255.231.199', '1751408968'),
(2786, '8', '0', '2025-07-02', '213.180.203.152', '1751408972'),
(2787, '93', '0', '2025-07-02', '213.180.203.175', '1751408979'),
(2788, '100', '0', '2025-07-02', '5.255.231.181', '1751408987'),
(2789, '112', '0', '2025-07-02', '87.250.224.119', '1751408989'),
(2790, '97', '0', '2025-07-02', '87.250.224.73', '1751408990'),
(2791, '111', '0', '2025-07-02', '5.255.231.181', '1751409046'),
(2792, '9', '0', '2025-07-02', '213.180.203.58', '1751409166'),
(2793, '63', '0', '2025-07-02', '87.250.224.214', '1751409185'),
(2794, '98', '0', '2025-07-02', '95.108.213.241', '1751409213'),
(2795, '93', '0', '2025-07-02', '87.250.224.214', '1751409242'),
(2796, '109', '0', '2025-07-02', '95.108.213.167', '1751409243'),
(2797, '112', '0', '2025-07-02', '213.180.203.175', '1751409244'),
(2798, '111', '0', '2025-07-02', '95.108.213.109', '1751409245'),
(2799, '102', '0', '2025-07-02', '213.180.203.245', '1751409275'),
(2800, '106', '0', '2025-07-02', '213.180.203.152', '1751409275'),
(2801, '100', '0', '2025-07-02', '213.180.203.175', '1751409276'),
(2802, '13', '0', '2025-07-02', '95.108.213.135', '1751409277'),
(2803, '108', '0', '2025-07-02', '5.255.231.199', '1751409277'),
(2804, '97', '0', '2025-07-02', '213.180.203.152', '1751409325'),
(2805, '104', '0', '2025-07-02', '95.108.213.135', '1751409329'),
(2806, '110', '0', '2025-07-02', '5.255.231.199', '1751409343'),
(2807, '107', '0', '2025-07-02', '213.180.203.221', '1751409381'),
(2808, '117', '0', '2025-07-02', '213.180.203.175', '1751409408'),
(2809, '96', '0', '2025-07-02', '95.108.213.167', '1751409409'),
(2810, '94', '0', '2025-07-02', '95.108.213.135', '1751409409'),
(2811, '112', '0', '2025-07-02', '95.108.213.109', '1751409457'),
(2812, '105', '0', '2025-07-02', '213.180.203.58', '1751409483'),
(2813, '108', '0', '2025-07-02', '213.180.203.152', '1751409539'),
(2814, '97', '0', '2025-07-02', '95.108.213.167', '1751409541'),
(2815, '110', '0', '2025-07-02', '213.180.203.175', '1751409541'),
(2816, '100', '0', '2025-07-02', '95.108.213.109', '1751409544'),
(2817, '93', '0', '2025-07-02', '213.180.203.58', '1751409545'),
(2818, '111', '0', '2025-07-02', '87.250.224.119', '1751409545'),
(2819, '102', '0', '2025-07-02', '87.250.224.119', '1751409648'),
(2820, '117', '0', '2025-07-02', '213.180.203.152', '1751409698'),
(2821, '112', '0', '2025-07-02', '87.250.224.214', '1751409698'),
(2822, '96', '0', '2025-07-02', '213.180.203.175', '1751409698'),
(2823, '94', '0', '2025-07-02', '95.108.213.167', '1751409699'),
(2824, '107', '0', '2025-07-02', '5.255.231.181', '1751409700'),
(2825, '109', '0', '2025-07-02', '213.180.203.152', '1751409756'),
(2826, '111', '0', '2025-07-02', '5.255.231.199', '1751409758'),
(2827, '97', '0', '2025-07-02', '5.255.231.181', '1751409759'),
(2828, '108', '0', '2025-07-02', '95.108.213.109', '1751409760'),
(2829, '100', '0', '2025-07-02', '87.250.224.119', '1751409761'),
(2830, '106', '0', '2025-07-02', '87.250.224.214', '1751409817'),
(2831, '105', '0', '2025-07-02', '5.255.231.199', '1751409819'),
(2832, '103', '0', '2025-07-02', '95.108.213.241', '1751409820'),
(2833, '101', '0', '2025-07-02', '213.180.203.221', '1751409820'),
(2834, '95', '0', '2025-07-02', '95.108.213.241', '1751410015'),
(2835, '90', '0', '2025-07-02', '87.250.224.119', '1751410214'),
(2836, '80', '0', '2025-07-02', '213.180.203.58', '1751410214'),
(2837, '87', '0', '2025-07-02', '87.250.224.73', '1751410214'),
(2838, '91', '0', '2025-07-02', '5.255.231.54', '1751410215'),
(2839, '84', '0', '2025-07-02', '87.250.224.214', '1751410216'),
(2840, '81', '0', '2025-07-02', '213.180.203.175', '1751410216'),
(2841, '85', '0', '2025-07-02', '213.180.203.245', '1751410216'),
(2842, '78', '0', '2025-07-02', '95.108.213.167', '1751410217'),
(2843, '79', '0', '2025-07-02', '95.108.213.135', '1751410217'),
(2844, '83', '0', '2025-07-02', '95.108.213.241', '1751410219'),
(2845, '88', '0', '2025-07-02', '213.180.203.221', '1751410220'),
(2846, '89', '0', '2025-07-02', '213.180.203.58', '1751410220'),
(2847, '77', '0', '2025-07-02', '87.250.224.119', '1751410221'),
(2848, '82', '0', '2025-07-02', '87.250.224.73', '1751410221'),
(2849, '86', '0', '2025-07-02', '5.255.231.54', '1751410222'),
(2850, '88', '0', '2025-07-02', '87.250.224.214', '1751410526'),
(2851, '86', '0', '2025-07-02', '95.108.213.135', '1751410941'),
(2852, '66', '0', '2025-07-02', '207.46.13.151', '1751411090'),
(2853, '9', '0', '2025-07-02', '5.255.231.181', '1751411090'),
(2854, '88', '0', '2025-07-02', '213.180.203.157', '1751413225'),
(2855, '95', '0', '2025-07-02', '95.108.213.157', '1751413482'),
(2856, '57', '0', '2025-07-02', '57.141.6.7', '1751413519'),
(2857, '96', '0', '2025-07-02', '5.255.231.144', '1751413825'),
(2858, '92', '0', '2025-07-02', '95.108.213.188', '1751414076'),
(2859, '94', '0', '2025-07-02', '213.180.203.140', '1751414715'),
(2860, '105', '0', '2025-07-02', '213.180.203.196', '1751419634'),
(2861, '105', '0', '2025-07-02', '87.250.224.101', '1751421705'),
(2862, '107', '0', '2025-07-02', '57.141.6.19', '1751425783'),
(2863, '105', '0', '2025-07-02', '213.180.203.156', '1751435613'),
(2864, '105', '0', '2025-07-02', '87.250.224.74', '1751437717'),
(2865, '117', '0', '2025-07-02', '163.116.214.63', '1751450306'),
(2866, '117', '0', '2025-07-02', '96.126.163.83', '1751450374'),
(2867, '117', '0', '2025-07-02', '178.34.162.91', '1751450378'),
(2868, '78', '0', '2025-07-02', '163.116.199.113', '1751451081'),
(2869, '92', '0', '2025-07-02', '36.255.91.148', '1751459287'),
(2870, '4', '0', '2025-07-02', '36.255.91.148', '1751459314'),
(2871, '90', '0', '2025-07-02', '103.31.41.99', '1751459431'),
(2872, '79', '0', '2025-07-02', '57.141.6.14', '1751461183'),
(2873, '79', '0', '2025-07-02', '57.141.6.3', '1751461187'),
(2874, '103', '0', '2025-07-02', '52.167.144.161', '1751471776'),
(2875, '102', '0', '2025-07-02', '57.141.6.19', '1751472194'),
(2876, '70', '0', '2025-07-02', '57.141.6.7', '1751475733'),
(2877, '47', '0', '2025-07-02', '57.141.6.18', '1751475858'),
(2878, '107', '0', '2025-07-02', '40.77.167.42', '1751477550'),
(2879, '44', '0', '2025-07-02', '57.141.6.7', '1751478120'),
(2880, '87', '0', '2025-07-02', '57.141.6.20', '1751480945'),
(2881, '104', '0', '2025-07-03', '173.252.83.13', '1751490191'),
(2882, '107', '0', '2025-07-03', '57.141.6.8', '1751490696'),
(2883, '32', '0', '2025-07-03', '57.141.6.13', '1751498488'),
(2884, '12', '0', '2025-07-03', '43.153.71.12', '1751501098'),
(2885, '58', '0', '2025-07-03', '57.141.6.28', '1751503297'),
(2886, '8', '0', '2025-07-03', '57.141.6.18', '1751503787'),
(2887, '81', '0', '2025-07-03', '57.141.6.2', '1751503925'),
(2888, '95', '0', '2025-07-03', '57.141.6.3', '1751503952'),
(2889, '10', '0', '2025-07-03', '57.141.6.7', '1751517261'),
(2890, NULL, '0', '2025-07-03', '47.82.60.39', '1751518350'),
(2891, NULL, '0', '2025-07-03', '47.82.60.19', '1751520866'),
(2892, '61', '0', '2025-07-03', '173.252.87.13', '1751524001'),
(2893, '112', '0', '2025-07-03', '43.156.202.34', '1751525229'),
(2894, '117', '0', '2025-07-03', '43.133.187.11', '1751526517'),
(2895, '112', '0', '2025-07-03', '43.159.152.187', '1751527042'),
(2896, '110', '0', '2025-07-03', '57.141.6.16', '1751551255'),
(2897, '105', '0', '2025-07-03', '57.141.6.23', '1751558459'),
(2898, '95', '0', '2025-07-03', '57.141.6.19', '1751562035'),
(2899, '46', '0', '2025-07-03', '57.141.6.4', '1751563706'),
(2900, '51', '0', '2025-07-04', '57.141.6.12', '1751570038'),
(2901, '106', '0', '2025-07-04', '57.141.6.10', '1751577861'),
(2902, '93', '0', '2025-07-04', '57.141.6.27', '1751579160'),
(2903, '85', '0', '2025-07-04', '57.141.6.16', '1751585897'),
(2904, '100', '0', '2025-07-04', '57.141.6.22', '1751588219'),
(2905, '12', '0', '2025-07-04', '43.166.246.180', '1751595008'),
(2906, '112', '0', '2025-07-04', '43.153.87.54', '1751596138'),
(2907, '112', '0', '2025-07-04', '43.133.187.11', '1751599176'),
(2908, '89', '0', '2025-07-04', '57.141.6.5', '1751599437'),
(2909, '103', '0', '2025-07-04', '57.141.6.2', '1751599648'),
(2910, '108', '0', '2025-07-04', '106.210.228.180', '1751606428'),
(2911, '64', '0', '2025-07-04', '69.171.249.115', '1751614589'),
(2912, '10', '0', '2025-07-04', '57.141.6.18', '1751624071'),
(2913, '95', '0', '2025-07-04', '57.141.2.29', '1751641779'),
(2914, '11', '0', '2025-07-04', '57.141.2.9', '1751641901'),
(2915, '105', '0', '2025-07-05', '57.141.6.13', '1751655020'),
(2916, '48', '0', '2025-07-05', '57.141.6.7', '1751658694'),
(2917, '60', '0', '2025-07-05', '57.141.6.3', '1751666888'),
(2918, '50', '0', '2025-07-05', '57.141.6.19', '1751667310'),
(2919, '61', '0', '2025-07-05', '49.36.109.37', '1751668127'),
(2920, '76', '0', '2025-07-05', '57.141.6.12', '1751672107'),
(2921, '107', '0', '2025-07-05', '57.141.6.19', '1751672385'),
(2922, '117', '0', '2025-07-05', '170.106.179.68', '1751685965'),
(2923, '117', '0', '2025-07-05', '43.128.156.124', '1751686732'),
(2924, '12', '0', '2025-07-05', '36.255.90.253', '1751693935'),
(2925, '104', '0', '2025-07-05', '40.77.167.32', '1751698984'),
(2926, '104', '0', '2025-07-05', '40.77.167.116', '1751701646'),
(2927, '117', '0', '2025-07-05', '40.77.167.132', '1751737784'),
(2928, '8', '0', '2025-07-06', '57.141.6.13', '1751741187'),
(2929, '64', '0', '2025-07-06', '43.135.145.73', '1751743283'),
(2930, '78', '0', '2025-07-06', '57.141.6.31', '1751747376'),
(2931, '4', '0', '2025-07-06', '57.141.6.18', '1751748283'),
(2932, '97', '0', '2025-07-06', '57.141.6.27', '1751752952'),
(2933, '75', '0', '2025-07-06', '57.141.6.31', '1751775341'),
(2934, '62', '0', '2025-07-06', '47.82.60.12', '1751792375'),
(2935, '54', '0', '2025-07-06', '57.141.6.29', '1751815348'),
(2936, '10', '0', '2025-07-06', '57.141.6.23', '1751816739'),
(2937, '92', '0', '2025-07-06', '57.141.6.23', '1751817029'),
(2938, '66', '0', '2025-07-06', '57.141.6.9', '1751820970'),
(2939, '94', '0', '2025-07-06', '57.141.6.1', '1751822407'),
(2940, '24', '0', '2025-07-07', '57.141.6.20', '1751828001'),
(2941, '56', '0', '2025-07-07', '57.141.6.7', '1751837779'),
(2942, '112', '0', '2025-07-07', '57.141.6.26', '1751838743'),
(2943, '28', '0', '2025-07-07', '57.141.6.2', '1751846469'),
(2944, '90', '0', '2025-07-07', '57.141.6.1', '1751858242'),
(2945, '61', '0', '2025-07-07', '47.82.60.10', '1751863014'),
(2946, '52', '0', '2025-07-07', '157.55.39.50', '1751874974'),
(2947, '95', '0', '2025-07-07', '203.192.235.169', '1751895687'),
(2948, '77', '0', '2025-07-07', '57.141.6.12', '1751899686'),
(2949, '86', '0', '2025-07-07', '57.141.6.1', '1751900100'),
(2950, '53', '0', '2025-07-07', '57.141.6.31', '1751905656'),
(2951, '108', '0', '2025-07-07', '57.141.6.26', '1751912862'),
(2952, '57', '0', '2025-07-08', '57.141.6.18', '1751923350'),
(2953, '14', '0', '2025-07-08', '57.141.6.11', '1751927138'),
(2954, '63', '0', '2025-07-08', '57.141.6.12', '1751931967'),
(2955, '112', '0', '2025-07-08', '49.51.72.236', '1751934621'),
(2956, '71', '0', '2025-07-08', '57.141.6.17', '1751938769'),
(2957, '9', '0', '2025-07-08', '57.141.6.2', '1751940564'),
(2958, '61', '0', '2025-07-08', '57.141.6.28', '1751940991'),
(2959, '117', '0', '2025-07-08', '43.133.187.11', '1751958692'),
(2960, '117', '0', '2025-07-08', '124.156.226.179', '1751961264'),
(2961, '49', '0', '2025-07-08', '57.141.6.16', '1751974073'),
(2962, '81', '0', '2025-07-08', '57.141.6.30', '1751980371'),
(2963, '98', '0', '2025-07-08', '57.141.6.1', '1751986701'),
(2964, '79', '0', '2025-07-08', '57.141.6.6', '1751989606'),
(2965, '87', '0', '2025-07-08', '57.141.6.24', '1751992250'),
(2966, '84', '0', '2025-07-08', '57.141.6.9', '1751996440'),
(2967, '45', '0', '2025-07-08', '57.141.6.26', '1751996587'),
(2968, '32', '0', '2025-07-09', '57.141.6.13', '1751999788'),
(2969, '83', '0', '2025-07-09', '57.141.6.31', '1752001360'),
(2970, '55', '0', '2025-07-09', '57.141.6.13', '1752003492'),
(2971, '58', '0', '2025-07-09', '57.141.6.16', '1752005862'),
(2972, '44', '0', '2025-07-09', '57.141.6.2', '1752007070'),
(2973, '95', '0', '2025-07-09', '57.141.6.27', '1752008283'),
(2974, '64', '0', '2025-07-09', '43.133.91.48', '1752009361'),
(2975, '70', '0', '2025-07-09', '57.141.6.21', '1752009880'),
(2976, '55', '0', '2025-07-09', '40.77.167.158', '1752010372'),
(2977, '64', '0', '2025-07-09', '57.141.6.10', '1752010597'),
(2978, '107', '0', '2025-07-09', '57.141.6.15', '1752016332'),
(2979, '15', '0', '2025-07-09', '57.141.6.16', '1752021062'),
(2980, '92', '0', '2025-07-09', '66.249.68.135', '1752031466'),
(2981, '112', '0', '2025-07-09', '170.106.180.153', '1752041081'),
(2982, '112', '0', '2025-07-09', '43.166.131.228', '1752044752'),
(2983, '12', '0', '2025-07-09', '43.132.214.228', '1752045509'),
(2984, '98', '0', '2025-07-09', '17.241.219.107', '1752065015'),
(2985, '34', '0', '2025-07-09', '17.241.219.228', '1752066800'),
(2986, '111', '0', '2025-07-09', '57.141.6.12', '1752067040'),
(2987, '85', '0', '2025-07-09', '57.141.6.23', '1752067396'),
(2988, '102', '0', '2025-07-09', '57.141.6.12', '1752069563'),
(2989, '105', '0', '2025-07-09', '57.141.6.17', '1752070343'),
(2990, '89', '0', '2025-07-09', '57.141.6.28', '1752076129'),
(2991, '103', '0', '2025-07-09', '57.141.6.16', '1752079691'),
(2992, '107', '0', '2025-07-09', '57.141.6.1', '1752079897'),
(2993, '100', '0', '2025-07-09', '57.141.6.20', '1752079900'),
(2994, '47', '0', '2025-07-09', '57.141.6.23', '1752081402'),
(2995, '110', '0', '2025-07-09', '57.141.6.20', '1752082243'),
(2996, '106', '0', '2025-07-09', '57.141.6.6', '1752083852'),
(2997, '117', '0', '2025-07-10', '43.155.157.239', '1752087188'),
(2998, '117', '0', '2025-07-10', '43.153.135.208', '1752089438'),
(2999, '95', '0', '2025-07-10', '57.141.6.16', '1752096326'),
(3000, '46', '0', '2025-07-10', '57.141.6.19', '1752102435'),
(3001, '12', '0', '2025-07-10', '17.241.219.222', '1752104521'),
(3002, '10', '0', '2025-07-10', '17.241.75.199', '1752108833'),
(3003, '59', '0', '2025-07-10', '52.167.144.20', '1752114427'),
(3004, '7', '0', '2025-07-10', '17.241.227.51', '1752149082'),
(3005, '62', '0', '2025-07-10', '162.120.185.10', '1752150624'),
(3006, '80', '0', '2025-07-10', '57.141.6.8', '1752153188'),
(3007, '80', '0', '2025-07-10', '57.141.6.31', '1752153481'),
(3008, '72', '0', '2025-07-10', '52.167.144.236', '1752155080'),
(3009, '50', '0', '2025-07-10', '57.141.6.3', '1752156517'),
(3010, '95', '0', '2025-07-10', '57.141.6.12', '1752157469'),
(3011, '62', '0', '2025-07-10', '162.120.185.7', '1752157782'),
(3012, '63', '0', '2025-07-10', '66.249.68.136', '1752159282'),
(3013, '48', '0', '2025-07-10', '57.141.6.16', '1752159676'),
(3014, '76', '0', '2025-07-10', '57.141.6.15', '1752160271'),
(3015, '51', '0', '2025-07-10', '57.141.6.12', '1752164188'),
(3016, '89', '0', '2025-07-10', '69.171.249.4', '1752168960'),
(3017, '12', '0', '2025-07-10', '57.141.6.22', '1752169239'),
(3018, '60', '0', '2025-07-10', '57.141.6.26', '1752171584'),
(3019, '105', '0', '2025-07-11', '57.141.6.12', '1752172265'),
(3020, '64', '0', '2025-07-11', '43.157.53.115', '1752178193'),
(3021, '12', '0', '2025-07-11', '43.157.170.126', '1752193022'),
(3022, '95', '0', '2025-07-11', '17.241.75.85', '1752196099'),
(3023, '50', '0', '2025-07-11', '66.220.149.12', '1752219404'),
(3024, '13', '0', '2025-07-11', '203.192.235.169', '1752221528'),
(3025, '12', '5', '2025-07-11', '203.192.235.169', '1752221804'),
(3026, '10', '5', '2025-07-11', '203.192.235.169', '1752222066'),
(3027, '98', '5', '2025-07-11', '203.192.235.169', '1752222088'),
(3028, '100', '5', '2025-07-11', '203.192.235.169', '1752222515'),
(3029, '110', '5', '2025-07-11', '203.192.235.169', '1752222549'),
(3030, '117', '41', '2025-07-11', '103.249.243.143', '1752230972'),
(3031, '63', '41', '2025-07-11', '103.249.243.143', '1752231042'),
(3032, '112', '35', '2025-07-11', '202.148.63.61', '1752231623'),
(3033, '13', '0', '2025-07-11', '202.148.63.61', '1752231627'),
(3034, '13', '7', '2025-07-11', '202.148.63.61', '1752231629'),
(3035, '63', '0', '2025-07-11', '202.148.63.61', '1752231713'),
(3036, '117', '7', '2025-07-11', '202.148.63.61', '1752231757'),
(3037, '97', '0', '2025-07-11', '57.141.6.6', '1752233181'),
(3038, '74', '0', '2025-07-11', '57.141.6.26', '1752233195'),
(3039, '117', '0', '2025-07-11', '202.148.63.61', '1752236549');

-- --------------------------------------------------------

--
-- Table structure for table `rate_diamond`
--

CREATE TABLE `rate_diamond` (
  `rate_diamond_id` int(11) NOT NULL,
  `diamond_amt` text NOT NULL,
  `ratedate` date NOT NULL,
  `ratetime` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rate_diamond`
--

INSERT INTO `rate_diamond` (`rate_diamond_id`, `diamond_amt`, `ratedate`, `ratetime`, `status`, `entry_by`, `entry_time`) VALUES
(1, '52000', '2020-12-11', '10:50', 'active', '4', 1607664016),
(2, '65000', '2021-01-11', '01:30', 'active', '4', 1610352223),
(3, '53287', '2022-11-19', '11:19', 'active', '4', 1668837013),
(4, '65000', '2022-12-01', '04:46', 'active', '4', 1669893440),
(5, '80000', '2022-12-01', '04:47', 'active', '4', 1669893447),
(6, '45665667', '2024-11-05', '02:28', 'deleted', '4', 1730797169),
(7, '4566', '2024-11-05', '02:34', 'active', '4', 1730797478);

-- --------------------------------------------------------

--
-- Table structure for table `rate_gold`
--

CREATE TABLE `rate_gold` (
  `rate_gold_id` int(11) NOT NULL,
  `rateamt` text NOT NULL,
  `ratedate` date NOT NULL,
  `ratetime` time NOT NULL,
  `ct24` text NOT NULL,
  `ct22` text NOT NULL,
  `ct18` text NOT NULL,
  `ctpure` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rate_gold`
--

INSERT INTO `rate_gold` (`rate_gold_id`, `rateamt`, `ratedate`, `ratetime`, `ct24`, `ct22`, `ct18`, `ctpure`, `status`, `entry_by`, `entry_time`) VALUES
(1, '7500', '2025-02-10', '04:27:00', '7500', '7050', '6075', '7538', 'active', '4', '1739185070'),
(2, '86350', '2025-02-20', '07:36:00', '86350', '81169', '69944', '86782', 'active', '4', '1740060468'),
(3, '85850', '2025-02-21', '11:59:00', '85850', '80699', '69539', '86280', 'active', '4', '1740119387'),
(4, '86010', '2025-02-21', '18:04:00', '86010', '80850', '69669', '86441', 'active', '4', '1740141259'),
(5, '86275', '2025-02-22', '12:07:00', '86275', '81099', '69883', '86707', 'active', '4', '1740206239'),
(6, '86330', '2025-02-24', '11:46:00', '86330', '81151', '69928', '86762', 'active', '4', '1740377792'),
(7, '86490', '2025-02-24', '06:05:00', '86490', '81301', '70057', '86923', 'active', '4', '1740400515'),
(8, '86500', '2025-02-25', '12:03:00', '86500', '81310', '70065', '86933', 'active', '4', '1740465232'),
(9, '86650', '2025-02-25', '05:46:00', '86650', '81451', '70187', '87084', 'active', '4', '1740485796'),
(10, '86160', '2025-02-26', '11:34:00', '86160', '80991', '69790', '86591', 'active', '4', '1740549884'),
(11, '85585', '2025-02-27', '11:57:00', '85585', '80450', '69324', '86013', 'active', '4', '1740637660'),
(12, '85095', '2025-02-28', '12:04:00', '85095', '79990', '68927', '85521', 'active', '4', '1740724501'),
(13, '85000', '2025-03-02', '11:40:00', '85000', '79900', '68850', '85425', 'active', '4', '1740895861'),
(14, '85095', '2025-03-03', '12:29:00', '85095', '79990', '68927', '85521', 'active', '4', '1740985186'),
(15, '85320', '2025-03-03', '06:08:00', '85320', '80201', '69110', '85747', 'active', '4', '1741005510'),
(16, '85850', '2025-03-04', '11:29:00', '85850', '80699', '69539', '86280', 'active', '4', '1741067970'),
(17, '86385', '2025-03-04', '06:09:00', '86385', '81202', '69972', '86817', 'active', '4', '1741091986'),
(18, '86275', '2025-03-05', '11:49:00', '86275', '81099', '69883', '86707', 'active', '4', '1741155569'),
(19, '85475', '2025-03-06', '05:54:00', '85475', '80347', '69235', '85903', 'active', '4', '1741263890'),
(20, '85960', '2025-03-07', '11:59:00', '85960', '80803', '69628', '86390', 'active', '4', '1741328980'),
(21, '85960', '2025-03-10', '11:19:00', '85960', '80803', '69628', '86390', 'active', '4', '1741585778'),
(22, '85690', '2025-03-11', '11:58:00', '85690', '80549', '69409', '86119', 'active', '4', '1741674532'),
(23, '85960', '2025-03-11', '05:45:00', '85960', '80803', '69628', '86390', 'active', '4', '1741695377'),
(24, '86115', '2025-03-12', '11:55:00', '86115', '80949', '69754', '86546', 'active', '4', '1741760764'),
(25, '86700', '2025-03-13', '12:21:00', '86700', '81498', '70227', '87134', 'active', '4', '1741848692'),
(26, '86970', '2025-03-13', '05:51:00', '86970', '81752', '70446', '87405', 'active', '4', '1741868495'),
(27, '87445', '2025-03-14', '11:53:00', '87445', '82199', '70831', '87883', 'active', '4', '1741933418'),
(28, '88030', '2025-03-14', '03:20:00', '88030', '82749', '71305', '88471', 'active', '4', '1741945852'),
(29, '87870', '2025-03-15', '11:32:00', '87870', '82598', '71175', '88310', 'active', '4', '1742018561'),
(30, '88285', '2025-03-18', '12:05:00', '88285', '82988', '71511', '88727', 'active', '4', '1742279765'),
(31, '88455', '2025-03-18', '06:00:00', '88455', '83148', '71649', '88898', 'active', '4', '1742301033'),
(32, '88630', '2025-03-19', '11:35:00', '88630', '83313', '71791', '89074', 'active', '4', '1742364338'),
(33, '88725', '2025-03-20', '11:43:00', '88725', '83402', '71868', '89169', 'active', '4', '1742451240'),
(34, '88510', '2025-03-20', '05:56:00', '88510', '83200', '71694', '88953', 'active', '4', '1742473619'),
(35, '88285', '2025-03-21', '11:30:00', '88285', '82988', '71511', '88727', 'active', '4', '1742536835'),
(36, '87980', '2025-03-22', '11:32:00', '87980', '82702', '71264', '88420', 'active', '4', '1742623396'),
(37, '87820', '2025-03-24', '11:41:00', '87820', '82551', '71135', '88260', 'active', '4', '1742796671'),
(38, '87605', '2025-03-25', '11:42:00', '87605', '82349', '70961', '88044', 'active', '4', '1742883170'),
(39, '87500', '2025-03-26', '11:08:00', '87500', '82250', '70875', '87938', 'active', '4', '1742967521'),
(40, '87715', '2025-03-26', '05:29:00', '87715', '82453', '71050', '88154', 'active', '4', '1742990399'),
(41, '87980', '2025-03-27', '11:46:00', '87980', '82702', '71264', '88420', 'active', '4', '1743056223'),
(42, '88510', '2025-03-27', '11:47:00', '88510', '83200', '71694', '88953', 'active', '4', '1743078378'),
(43, '89310', '2025-03-28', '11:48:00', '89310', '83952', '72342', '89757', 'active', '4', '1743142729'),
(44, '89095', '2025-03-28', '05:33:00', '89095', '83750', '72167', '89541', 'active', '4', '1743163435'),
(45, '89350', '2025-03-29', '11:47:00', '89350', '83989', '72374', '89797', 'active', '4', '1743229057'),
(46, '89445', '2025-03-29', '06:01:00', '89445', '84079', '72451', '89893', 'active', '4', '1743251483'),
(47, '90370', '2025-03-31', '11:36:00', '90370', '84948', '73200', '90822', 'active', '4', '1743405654'),
(48, '91000', '2025-04-01', '12:35:00', '91000', '85540', '73710', '91455', 'active', '4', '1743491124'),
(49, '90745', '2025-04-02', '11:47:00', '90745', '85301', '73504', '91199', 'active', '4', '1743574682'),
(50, '91225', '2025-04-03', '11:28:00', '91225', '85752', '73893', '91682', 'active', '4', '1743659923'),
(51, '90000', '2025-04-04', '11:26:00', '90000', '84600', '72900', '90450', 'active', '4', '1743746202'),
(52, '88820', '2025-04-05', '11:31:00', '88820', '83491', '71945', '89265', 'active', '4', '1743832886'),
(53, '88820', '2025-04-06', '11:14:00', '88820', '83491', '71945', '89265', 'active', '4', '1743918256'),
(54, '88000', '2025-04-08', '11:46:00', '88000', '82720', '71280', '88440', 'active', '4', '1744093022'),
(55, '88935', '2025-04-09', '11:49:00', '88935', '83599', '72038', '89380', 'active', '4', '1744179552'),
(56, '89735', '2025-04-09', '02:00:00', '89735', '84351', '72686', '90184', 'active', '4', '1744187430'),
(57, '90415', '2025-04-09', '05:28:00', '90415', '84991', '73237', '90868', 'active', '4', '1744200341'),
(58, '91480', '2025-04-10', '11:50:00', '91480', '85992', '74099', '91938', 'active', '4', '1744266054'),
(59, '93030', '2025-04-11', '11:54:00', '93030', '87449', '75355', '93496', 'active', '4', '1744352660'),
(60, '93500', '2025-04-12', '11:34:00', '93500', '87890', '75735', '93968', 'active', '4', '1744437870'),
(61, '93300', '2025-04-14', '05:11:00', '93300', '87702', '75573', '93767', 'active', '4', '1744630905'),
(62, '92980', '2025-04-15', '10:43:00', '92980', '87402', '75314', '93445', 'active', '4', '1744698036'),
(63, '95265', '2025-04-18', '02:25:00', '95265', '89550', '77165', '95742', 'active', '4', '1744966582'),
(64, '98725', '2025-04-22', '01:48:00', '98725', '92802', '79968', '99219', 'active', '4', '1745309909'),
(65, '95735', '2025-04-24', '01:21:00', '95735', '89991', '77546', '96214', 'active', '4', '1745481141'),
(66, '95480', '2025-04-25', '08:35:00', '95480', '89752', '77339', '95958', 'active', '4', '1745593552'),
(67, '95960', '2025-04-26', '12:49:00', '95960', '90203', '77728', '96440', 'active', '4', '1745651977'),
(68, '95960', '2025-04-26', '12:49:00', '95960', '90203', '77728', '96440', 'active', '4', '1745652013'),
(69, '95850', '2025-04-29', '11:50:00', '95850', '90099', '77639', '96330', 'active', '4', '1745907664'),
(70, '93405', '2025-05-03', '07:07:00', '93405', '87801', '75659', '93873', 'active', '4', '1746279480'),
(71, '96385', '2025-05-06', '12:34:00', '96385', '90602', '78072', '96867', 'active', '4', '1746515060'),
(72, '97180', '2025-05-07', '12:34:00', '97180', '91350', '78716', '97666', 'active', '4', '1746601492'),
(73, '96800', '2025-05-08', '10:36:00', '96800', '90992', '78408', '97284', 'active', '4', '1746682883'),
(74, '96500', '2025-05-09', '05:37:00', '96500', '90710', '78165', '96983', 'active', '4', '1746792449'),
(75, '93085', '2025-05-12', '05:29:00', '93085', '87500', '75399', '93551', 'active', '4', '1747051213'),
(76, '93935', '2025-05-13', '12:09:00', '93935', '88299', '76088', '94405', 'active', '4', '1747118398'),
(77, '93725', '2025-05-14', '11:36:00', '93725', '88102', '75918', '94194', 'active', '4', '1747202772'),
(78, '93190', '2025-05-14', '06:13:00', '93190', '87599', '75484', '93656', 'active', '4', '1747226636'),
(79, '92980', '2025-05-17', '12:00:00', '92980', '87402', '75314', '93445', 'active', '4', '1747463416'),
(80, '93300', '2025-05-19', '11:17:00', '93300', '87702', '75573', '93767', 'active', '4', '1747633663'),
(81, '93510', '2025-05-19', '06:44:00', '93510', '87900', '75744', '93978', 'active', '4', '1747660501'),
(82, '92980', '2025-05-20', '11:24:00', '92980', '87402', '75314', '93445', 'active', '4', '1747720472'),
(83, '93615', '2025-05-20', '05:42:00', '93615', '87999', '75829', '94084', 'active', '4', '1747743183'),
(84, '95000', '2025-05-21', '11:33:00', '95000', '89300', '76950', '95475', 'active', '4', '1747807402'),
(85, '95095', '2025-05-21', '05:51:00', '95095', '89390', '77027', '95571', 'active', '4', '1747830110'),
(86, '95955', '2025-05-22', '11:33:00', '95955', '90198', '77724', '96435', 'active', '4', '1747893824'),
(87, '95640', '2025-05-23', '11:19:00', '95640', '89902', '77469', '96119', 'active', '4', '1747979355'),
(88, '95745', '2025-05-23', '05:44:00', '95745', '90001', '77554', '96224', 'active', '4', '1748002483'),
(89, '9600', '2025-05-24', '11:33:00', '9600', '9024', '7776', '9648', 'active', '4', '1748066637'),
(90, '96000', '2025-05-24', '06:53:00', '96000', '90240', '77760', '96480', 'active', '4', '1748093015'),
(91, '95850', '2025-05-25', '11:27:00', '95850', '90099', '77639', '96330', 'active', '4', '1748152640'),
(92, '95265', '2025-05-26', '11:12:00', '95265', '89550', '77165', '95742', 'active', '4', '1748238174'),
(93, '95735', '2025-05-26', '05:35:00', '95735', '89991', '77546', '96214', 'active', '4', '1748261134'),
(94, '95055', '2025-05-27', '05:41:00', '95055', '89352', '76995', '95531', 'active', '4', '1748347919'),
(95, '95640', '2025-05-28', '11:20:00', '95640', '89902', '77469', '96119', 'active', '4', '1748411457'),
(96, '95530', '2025-05-28', '05:53:00', '95530', '89799', '77380', '96008', 'active', '4', '1748435044'),
(97, '94785', '2025-05-29', '11:21:00', '94785', '89098', '76776', '95259', 'active', '4', '1748497892'),
(98, '95480', '2025-05-29', '05:58:00', '95480', '89752', '77339', '95958', 'active', '4', '1748521718'),
(99, '95215', '2025-05-30', '11:32:00', '95215', '89503', '77125', '95692', 'active', '4', '1748584945'),
(100, '95215', '2025-05-31', '12:31:00', '95215', '89503', '77125', '95692', 'active', '4', '1748674893'),
(101, '95735', '2025-06-02', '11:43:00', '95735', '89991', '77546', '96214', 'active', '4', '1748844822'),
(102, '96500', '2025-06-02', '03:26:00', '96500', '90710', '78165', '96983', 'active', '4', '1748858212'),
(103, '96915', '2025-06-03', '11:25:00', '96915', '91101', '78502', '97400', 'active', '4', '1748930115'),
(104, '96800', '2025-06-03', '05:45:00', '96800', '90992', '78408', '97284', 'active', '4', '1748952912'),
(105, '97285', '2025-06-05', '11:33:00', '97285', '91448', '78801', '97772', 'active', '4', '1749103447'),
(106, '98140', '2025-06-05', '05:01:00', '98140', '92252', '79494', '98631', 'active', '4', '1749123101'),
(107, '97395', '2025-06-06', '11:37:00', '97395', '91552', '78890', '97882', 'active', '4', '1749190050'),
(108, '97130', '2025-06-06', '05:48:00', '97130', '91303', '78676', '97616', 'active', '4', '1749212289'),
(109, '95960', '2025-06-07', '11:12:00', '95960', '90203', '77728', '96440', 'active', '4', '1749274945'),
(110, '95960', '2025-06-08', '11:51:00', '95960', '90203', '77728', '96440', 'active', '4', '1749363757'),
(111, '95640', '2025-06-09', '11:29:00', '95640', '89902', '77469', '96119', 'active', '4', '1749448752'),
(112, '95735', '2025-06-10', '12:01:00', '95735', '89991', '77546', '96214', 'active', '4', '1749537118'),
(113, '96065', '2025-06-10', '05:51:00', '96065', '90302', '77813', '96546', 'active', '4', '1749558082'),
(114, '96455', '2025-06-11', '06:10:00', '96455', '90668', '78129', '96938', 'active', '4', '1749645667'),
(115, '96970', '2025-06-12', '11:27:00', '96970', '91152', '78546', '97455', 'active', '4', '1749707880'),
(116, '97285', '2025-06-12', '05:44:00', '97285', '91448', '78801', '97772', 'active', '4', '1749730497'),
(117, '98925', '2025-06-13', '12:29:00', '98925', '92990', '80130', '99420', 'active', '4', '1749798001'),
(118, '99040', '2025-06-13', '05:47:00', '99040', '93098', '80223', '99536', 'active', '4', '1749817065'),
(119, '99445', '2025-06-14', '11:40:00', '99445', '93479', '80551', '99943', 'active', '4', '1749881449'),
(120, '99445', '2025-06-15', '12:25:00', '99445', '93479', '80551', '99943', 'active', '4', '1749970591'),
(121, '98190', '2025-06-16', '11:38:00', '98190', '92299', '79534', '98681', 'active', '4', '1750054103'),
(122, '99200', '2025-06-16', '12:47:00', '99200', '93248', '80352', '99696', 'active', '4', '1750058256'),
(123, '99095', '2025-06-16', '05:42:00', '99095', '93150', '80267', '99591', 'active', '4', '1750075953'),
(124, '98725', '2025-06-17', '12:14:00', '98725', '92802', '79968', '99219', 'active', '4', '1750142700'),
(125, '99040', '2025-06-18', '11:51:00', '99040', '93098', '80223', '99536', 'active', '4', '1750227696'),
(126, '99095', '2025-06-19', '11:42:00', '99095', '93150', '80267', '99591', 'active', '4', '1750313575'),
(127, '98405', '2025-06-20', '11:14:00', '98405', '92501', '79709', '98898', 'active', '4', '1750398271'),
(128, '98990', '2025-06-21', '11:16:00', '98990', '93051', '80182', '99485', 'active', '4', '1750484792'),
(129, '98775', '2025-06-23', '11:47:00', '98775', '92849', '80008', '99269', 'active', '4', '1750659475'),
(130, '99255', '2025-06-23', '05:40:00', '99255', '93300', '80397', '99752', 'active', '4', '1750680660'),
(131, '97715', '2025-06-24', '11:07:00', '97715', '91853', '79150', '98204', 'active', '4', '1750743466'),
(132, '97130', '2025-06-24', '02:37:00', '97130', '91303', '78676', '97616', 'active', '4', '1750756061'),
(133, '96915', '2025-06-26', '12:06:00', '96915', '91101', '78502', '97400', 'active', '4', '1750919792'),
(134, '96010', '2025-06-27', '12:00:00', '96010', '90250', '77769', '96491', 'active', '4', '1751005812'),
(135, '95690', '2025-06-27', '05:35:00', '95690', '89949', '77509', '96169', 'active', '4', '1751025915'),
(136, '95480', '2025-06-28', '06:00:00', '95480', '89752', '77339', '95958', 'active', '4', '1751113827'),
(137, '95735', '2025-06-30', '12:07:00', '95735', '89991', '77546', '96214', 'active', '4', '1751265457'),
(138, '95830', '2025-06-30', '05:51:00', '95830', '90081', '77623', '96310', 'active', '4', '1751286093'),
(139, '96700', '2025-07-01', '11:48:00', '96700', '90898', '78327', '97184', 'active', '4', '1751350714'),
(140, '1070', '2025-07-01', '11:48:00', '1070', '1006', '867', '1076', 'active', '4', '1751350722'),
(141, '97235', '2025-07-01', '05:34:00', '97235', '91401', '78761', '97722', 'active', '4', '1751371499'),
(142, '97500', '2025-07-03', '11:24:00', '97500', '91650', '78975', '97988', 'active', '4', '1751522103'),
(143, '97020', '2025-07-03', '05:38:00', '97020', '91199', '78587', '97506', 'active', '4', '1751544542'),
(144, '96860', '2025-07-04', '05:51:00', '96860', '91049', '78457', '97345', 'active', '4', '1751631712'),
(145, '97000', '2025-07-05', '11:28:00', '97000', '91180', '78570', '97485', 'active', '4', '1751695145'),
(146, '96700', '2025-07-07', '12:12:00', '96700', '90898', '78327', '97184', 'active', '4', '1751870559'),
(147, '97235', '2025-07-08', '11:31:00', '97235', '91401', '78761', '97722', 'active', '4', '1751954517'),
(148, '96915', '2025-07-08', '05:39:00', '96915', '91101', '78502', '97400', 'active', '4', '1751976551'),
(149, '96170', '2025-07-09', '11:51:00', '96170', '90400', '77898', '96651', 'active', '4', '1752042118'),
(150, '96700', '2025-07-10', '11:52:00', '96700', '90898', '78327', '97184', 'active', '4', '1752128547'),
(151, '97340', '2025-07-11', '11:26:00', '97340', '91500', '78846', '97827', 'active', '4', '1752213423'),
(152, '97500', '2025-07-11', '05:52:00', '97500', '91650', '78975', '97988', 'active', '4', '1752236547'),
(153, '97860', '2025-07-12', '11:44:00', '97860', '91989', '79267', '98350', 'active', '4', '1752300901'),
(154, '97980', '2025-07-14', '11:46:00', '97980', '92102', '79364', '98470', 'active', '4', '1752473798'),
(155, '97820', '2025-07-15', '05:36:00', '97820', '91951', '79235', '98310', 'active', '4', '1752581206'),
(156, '97285', '2025-07-16', '11:56:00', '97285', '91448', '78801', '97772', 'active', '4', '1752647224'),
(157, '97445', '2025-07-17', '11:28:00', '97445', '91599', '78931', '97933', 'active', '4', '1752731887'),
(158, '97860', '2025-07-18', '11:38:00', '97860', '91989', '79267', '98350', 'active', '4', '1752818906'),
(159, '98300', '2025-07-18', '05:54:00', '98300', '92402', '79623', '98792', 'active', '4', '1752841488'),
(160, '98200', '2025-07-19', '05:48:00', '98200', '92308', '79542', '98691', 'active', '4', '1752927505'),
(161, '98700', '2025-07-21', '11:41:00', '98700', '92778', '79947', '99194', 'active', '4', '1753078292'),
(162, '98830', '2025-07-21', '05:29:00', '98830', '92901', '80053', '99325', 'active', '4', '1753099156'),
(163, '99415', '2025-07-22', '11:57:00', '99415', '93451', '80527', '99913', 'active', '4', '1753165684'),
(164, '99575', '2025-07-22', '05:58:00', '99575', '93601', '80656', '100073', 'active', '4', '1753187303'),
(165, '99785', '2025-07-22', '06:37:00', '99785', '93798', '80826', '100284', 'active', '4', '1753189684'),
(166, '10160', '2025-07-23', '11:36:00', '10160', '9551', '8230', '10211', 'active', '4', '1753251216'),
(167, '100530', '2025-07-23', '05:55:00', '100530', '94499', '81430', '101033', 'active', '4', '1753273526'),
(168, '99200', '2025-07-24', '11:30:00', '99200', '93248', '80352', '99696', 'active', '4', '1753336845'),
(169, '99200', '2025-07-24', '11:30:00', '99200', '93248', '80352', '99696', 'active', '4', '1753336857'),
(170, '98725', '2025-07-24', '05:34:00', '98725', '92802', '79968', '99219', 'active', '4', '1753358702'),
(171, '98725', '2025-07-25', '04:05:00', '98725', '92802', '79968', '99219', 'deleted', '5', '1753439726'),
(172, '99860', '2025-07-25', '05:43:00', '99860', '93869', '80887', '100360', 'deleted', '5', '1753445625'),
(173, '97860', '2025-07-28', '10:46:00', '97860', '91989', '79267', '98350', 'active', '5', '1753679791');

-- --------------------------------------------------------

--
-- Table structure for table `rate_silver`
--

CREATE TABLE `rate_silver` (
  `rate_silver_id` int(11) NOT NULL,
  `silver_amt` text NOT NULL,
  `ratedate` date NOT NULL,
  `ratetime` text NOT NULL,
  `entry_by` int(11) NOT NULL,
  `entry_time` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rate_silver`
--

INSERT INTO `rate_silver` (`rate_silver_id`, `silver_amt`, `ratedate`, `ratetime`, `entry_by`, `entry_time`, `status`) VALUES
(1, '960', '2025-02-10', '04:37', 4, '1739186393', 'active'),
(2, '980', '2025-02-20', '07:36', 4, '1740060395', 'active'),
(3, '975', '2025-02-21', '11:59', 4, '1740119417', 'active'),
(4, '980', '2025-02-21', '18:04', 4, '1740141268', 'active'),
(5, '975', '2025-02-22', '12:07', 4, '1740206247', 'active'),
(6, '975', '2025-02-23', '18:25', 4, '1740315313', 'active'),
(7, '970', '2025-02-24', '11:46', 4, '1740377803', 'active'),
(8, '12', '2025-02-25', '10:30', 7, '1740459641', 'deleted'),
(9, '965', '2025-02-25', '12:03', 4, '1740465240', 'active'),
(10, '960', '2025-02-26', '11:34', 4, '1740549897', 'active'),
(11, '970', '2025-02-26', '05:45', 4, '1740572110', 'active'),
(12, '955', '2025-02-27', '11:57', 4, '1740637668', 'active'),
(13, '960', '2025-02-27', '05:50', 4, '1740658837', 'active'),
(14, '945', '2025-02-28', '12:05', 4, '1740724507', 'active'),
(15, '945', '2025-03-02', '11:41', 4, '1740895872', 'active'),
(16, '945', '2025-03-03', '12:30', 4, '1740985222', 'active'),
(17, '955', '2025-03-03', '06:08', 4, '1741005519', 'active'),
(18, '960', '2025-03-04', '11:29', 4, '1741067979', 'active'),
(19, '965', '2025-03-05', '11:49', 4, '1741155585', 'active'),
(20, '975', '2025-03-06', '11:10', 4, '1741239607', 'active'),
(21, '980', '2025-03-07', '11:59', 4, '1741328990', 'active'),
(22, '975', '2025-03-07', '05:49', 4, '1741349946', 'active'),
(23, '975', '2025-03-10', '11:19', 4, '1741585797', 'active'),
(24, '965', '2025-03-11', '11:59', 4, '1741674620', 'active'),
(25, '975', '2025-03-11', '05:46', 4, '1741695396', 'active'),
(26, '980', '2025-03-12', '11:56', 4, '1741760854', 'active'),
(27, '985', '2025-03-12', '11:57', 4, '1741780745', 'active'),
(28, '985', '2025-03-13', '12:21', 4, '1741848704', 'active'),
(29, '990', '2025-03-13', '05:51', 4, '1741868502', 'active'),
(30, '100', '2025-03-14', '11:53', 4, '1741933431', 'active'),
(31, '1005', '2025-03-15', '11:32', 4, '1742018569', 'active'),
(32, '101', '2025-03-18', '12:06', 4, '1742279781', 'active'),
(33, '1015', '2025-03-18', '06:00', 4, '1742301042', 'active'),
(34, '1005', '2025-03-20', '11:44', 4, '1742451260', 'active'),
(35, '990', '2025-03-20', '05:57', 4, '1742473627', 'active'),
(36, '985', '2025-03-21', '11:30', 4, '1742536856', 'active'),
(37, '980', '2025-03-22', '11:33', 4, '1742623429', 'active'),
(38, '985', '2025-03-24', '11:41', 4, '1742796702', 'active'),
(39, '980', '2025-03-25', '11:42', 4, '1742883184', 'active'),
(40, '985', '2025-03-25', '11:43', 4, '1742905622', 'active'),
(41, '995', '2025-03-26', '11:08', 4, '1742967529', 'active'),
(42, '1000', '2025-03-26', '11:08', 4, '1742990390', 'active'),
(43, '101', '2025-03-27', '05:56', 4, '1743078386', 'active'),
(44, '1015', '2025-03-28', '11:48', 4, '1743142739', 'active'),
(45, '1005', '2025-03-29', '11:47', 4, '1743229070', 'active'),
(46, '1010', '2025-03-29', '06:01', 4, '1743251497', 'active'),
(47, '1015', '2025-03-31', '12:50', 4, '1743405663', 'active'),
(48, '1005', '2025-04-01', '12:35', 4, '1743491145', 'active'),
(49, '100', '2025-04-02', '11:48', 4, '1743574710', 'active'),
(50, '985', '2025-04-03', '11:28', 4, '1743659934', 'active'),
(51, '940', '2025-04-04', '11:26', 4, '1743746233', 'active'),
(52, '890', '2025-04-05', '11:31', 4, '1743832900', 'active'),
(53, '890', '2025-04-06', '11:14', 4, '1743918262', 'active'),
(54, '900', '2025-04-07', '11:34', 4, '1744005903', 'active'),
(55, '910', '2025-04-07', '11:35', 4, '1744026886', 'active'),
(56, '900', '2025-04-08', '11:47', 4, '1744093034', 'active'),
(57, '910', '2025-04-09', '02:00', 4, '1744187439', 'active'),
(58, '920', '2025-04-09', '05:46', 4, '1744200974', 'active'),
(59, '935', '2025-04-10', '11:50', 4, '1744266064', 'active'),
(60, '925', '2025-04-10', '05:47', 4, '1744287471', 'active'),
(61, '925', '2025-04-10', '05:47', 4, '1744287476', 'active'),
(62, '935', '2025-04-11', '11:54', 4, '1744352667', 'active'),
(63, '940', '2025-04-11', '11:54', 4, '1744373308', 'active'),
(64, '960', '2025-04-12', '11:34', 4, '1744437889', 'active'),
(65, '950', '2025-04-14', '11:06', 4, '1744609014', 'active'),
(66, '960', '2025-04-15', '11:50', 4, '1744698055', 'active'),
(67, '965', '2025-04-18', '02:26', 4, '1744966612', 'active'),
(68, '970', '2025-04-22', '01:48', 4, '1745309933', 'active'),
(69, '985', '2025-04-24', '01:21', 4, '1745481110', 'active'),
(70, '980', '2025-04-25', '08:35', 4, '1745593533', 'active'),
(71, '975', '2025-04-26', '12:49', 4, '1745651969', 'active'),
(72, '975', '2025-04-26', '05:54', 4, '1745670261', 'active'),
(73, '975', '2025-04-28', '06:51', 4, '1745846476', 'active'),
(74, '970', '2025-04-29', '11:49', 4, '1745907608', 'active'),
(75, '940', '2025-05-03', '07:06', 4, '1746279442', 'active'),
(76, '970', '2025-05-06', '12:34', 4, '1746515047', 'active'),
(77, '970', '2025-05-07', '12:34', 4, '1746601482', 'active'),
(78, '960', '2025-05-08', '11:11', 4, '1746682909', 'active'),
(79, '970', '2025-05-09', '12:17', 4, '1746773271', 'active'),
(80, '945', '2025-05-12', '05:29', 4, '1747051184', 'active'),
(81, '970', '2025-05-13', '12:08', 4, '1747118357', 'active'),
(82, '970', '2025-05-14', '11:36', 4, '1747202819', 'active'),
(83, '960', '2025-05-14', '06:13', 4, '1747226620', 'active'),
(84, '960', '2025-05-17', '12:00', 4, '1747463429', 'active'),
(85, '965', '2025-05-19', '11:16', 4, '1747633631', 'active'),
(86, '960', '2025-05-20', '11:24', 4, '1747720481', 'active'),
(87, '965', '2025-05-20', '05:43', 4, '1747743192', 'active'),
(88, '980', '2025-05-21', '11:33', 4, '1747807415', 'active'),
(89, '995', '2025-05-22', '11:33', 4, '1747893836', 'active'),
(90, '975', '2025-05-22', '05:35', 4, '1747915535', 'active'),
(91, '985', '2025-05-23', '11:19', 4, '1747979365', 'active'),
(92, '975', '2025-05-23', '05:44', 4, '1748002502', 'active'),
(93, '985', '2025-05-24', '11:34', 4, '1748066651', 'active'),
(94, '985', '2025-05-26', '11:13', 4, '1748238258', 'active'),
(95, '980', '2025-05-27', '11:12', 4, '1748324544', 'active'),
(96, '975', '2025-05-27', '05:42', 4, '1748347930', 'active'),
(97, '985', '2025-05-28', '11:21', 4, '1748411466', 'active'),
(98, '985', '2025-05-29', '11:21', 4, '1748497908', 'active'),
(99, '990', '2025-05-29', '05:58', 4, '1748521726', 'active'),
(100, '980', '2025-05-30', '11:32', 4, '1748584957', 'active'),
(101, '95215', '2025-05-31', '10:25', 4, '1748674870', 'active'),
(102, '980', '2025-05-31', '12:31', 4, '1748674906', 'active'),
(103, '980', '2025-06-02', '11:43', 4, '1748844837', 'active'),
(104, '985', '2025-06-02', '03:26', 4, '1748858221', 'active'),
(105, '1010', '2025-06-03', '11:25', 4, '1748930133', 'active'),
(106, '990', '2025-06-03', '05:45', 4, '1748952922', 'active'),
(107, '102', '2025-06-04', '11:28', 4, '1749016700', 'active'),
(108, '1025', '2025-06-05', '11:34', 4, '1749103480', 'active'),
(109, '1060', '2025-06-05', '05:01', 4, '1749123124', 'active'),
(110, '1065', '2025-06-06', '05:48', 4, '1749212311', 'active'),
(111, '1065', '2025-06-08', '11:52', 4, '1749363775', 'active'),
(112, '1060', '2025-06-09', '11:29', 4, '1749448782', 'active'),
(113, '1070', '2025-06-09', '05:46', 4, '1749471399', 'active'),
(114, '1075', '2025-06-10', '05:51', 4, '1749558096', 'active'),
(115, '1065', '2025-06-11', '06:12', 4, '1749645767', 'active'),
(116, '1065', '2025-06-12', '11:28', 4, '1749707897', 'active'),
(117, '1070', '2025-06-13', '12:30', 4, '1749798013', 'active'),
(118, '1075', '2025-06-14', '11:42', 4, '1749881577', 'active'),
(119, '1075', '2025-06-15', '12:26', 4, '1749970613', 'active'),
(120, '1095', '2025-06-17', '05:43', 4, '1750162444', 'active'),
(121, '1100', '2025-06-18', '11:51', 4, '1750227712', 'active'),
(122, '1090', '2025-06-19', '11:43', 4, '1750313607', 'active'),
(123, '1065', '2025-06-20', '11:14', 4, '1750398287', 'active'),
(124, '1075', '2025-06-20', '05:44', 4, '1750421696', 'active'),
(125, '1075', '2025-06-23', '11:48', 4, '1750659484', 'active'),
(126, '1080', '2025-06-23', '05:41', 4, '1750680677', 'active'),
(127, '1075', '2025-06-24', '11:07', 4, '1750743475', 'active'),
(128, '1075', '2025-06-26', '12:06', 4, '1750919800', 'active'),
(129, '1080', '2025-06-26', '05:34', 4, '1750939445', 'active'),
(130, '1075', '2025-06-27', '12:00', 4, '1751005821', 'active'),
(131, '1065', '2025-06-27', '05:35', 4, '1751025930', 'active'),
(132, '1075', '2025-07-01', '05:35', 4, '1751371507', 'active'),
(133, '1085', '2025-07-03', '05:39', 4, '1751544559', 'active'),
(134, '1085', '2025-07-04', '05:52', 4, '1751631737', 'active'),
(135, '1080', '2025-07-07', '12:12', 4, '1751870567', 'active'),
(136, '108500', '2025-07-08', '11:31', 4, '1751954510', 'active'),
(137, '1075', '2025-07-10', '11:52', 4, '1752128558', 'active'),
(138, '1110', '2025-07-11', '11:27', 4, '1752213431', 'active'),
(139, '1130', '2025-07-12', '11:44', 4, '1752300893', 'active'),
(140, '1145', '2025-07-14', '11:46', 4, '1752473814', 'active'),
(141, '1130', '2025-07-15', '11:27', 4, '1752559060', 'active'),
(142, '1125', '2025-07-15', '05:37', 4, '1752581238', 'active'),
(143, '1120', '2025-07-16', '11:57', 4, '1752647265', 'active'),
(144, '1130', '2025-07-18', '11:38', 4, '1752818921', 'active'),
(145, '1140', '2025-07-18', '05:54', 4, '1752841495', 'active'),
(146, '11300', '2025-07-19', '11:34', 4, '1752905079', 'active'),
(147, '1135', '2025-07-19', '05:48', 4, '1752927521', 'active'),
(148, '1145', '2025-07-21', '05:29', 4, '1753099166', 'active'),
(149, '1150', '2025-07-22', '11:58', 4, '1753165702', 'active'),
(150, '1160', '2025-07-22', '05:58', 4, '1753187294', 'active'),
(151, '1165', '2025-07-23', '11:43', 4, '1753251226', 'active'),
(152, '1155', '2025-07-24', '11:31', 4, '1753336874', 'active'),
(153, '1155.00', '2025-07-24', '11:30', 4, '1753336889', 'active'),
(154, '1155', '2025-07-25', '04:05', 5, '1753439738', 'active'),
(155, '1130', '2025-07-25', '05:44', 5, '1753445672', 'deleted');

-- --------------------------------------------------------

--
-- Table structure for table `review_tbl`
--

CREATE TABLE `review_tbl` (
  `review_tbl_id` int(11) NOT NULL,
  `review_name` text DEFAULT NULL,
  `review_email` text DEFAULT NULL,
  `prod_gold_id` text NOT NULL,
  `review_stars` text NOT NULL,
  `review_message` text DEFAULT NULL,
  `review_img` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_tbl`
--

INSERT INTO `review_tbl` (`review_tbl_id`, `review_name`, `review_email`, `prod_gold_id`, `review_stars`, `review_message`, `review_img`, `user_id`, `status`, `entry_time`, `entry_date`) VALUES
(1, 'Rohan Dhumal', 'rohan@gmail.com', '117', '4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat impedit totam aliquid. Iste, quam pariatur repellat fugiat optio beatae soluta!\r\n', '175344209511260632.jpg', '35', 'active', '1753442095', '2025-07-25'),
(2, 'Shrikant Khade', 'shrikant@gmail.com', '89', '4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ducimus eaque. Nulla, odit quisquam quae molestias vel voluptatem sunt tempore?', '175344457553993214.jpg', '35', 'active', '1753444575', '2025-07-25'),
(3, 'Rohan Dhumal', 'rohan@gmail.com', '89', '5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, ducimus eaque. Nulla, odit quisquam quae molestias vel voluptatem sunt tempore?', '175344467350748048.csv', '35', 'active', '1753444673', '2025-07-25'),
(4, 'Rohan Dhumal', 'rohan@gmail.com', '90', '4', 'hgfreswa', NULL, '35', 'active', '1753445380', '2025-07-25'),
(5, 'Rohan Dhumal', 'rohan@gmail.com', '90', '4', 'ewq', NULL, '35', 'active', '1753445523', '2025-07-25'),
(6, 'Rohan Dhumal', 'rohan@gmail.com', '117', '4', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ab maxime at, tenetur repellat suscipit doloremque dignissimos deleniti quas officiis repudiandae, sapiente quidem, fugiat temporibus nihil. Animi, molestiae? Commodi, vitae!', 'img_688379f4824f4.jpg', '35', 'active', '1753446900', '2025-07-25'),
(7, 'Rohan Dhumal', 'rohan@gmail.com', '117', '4', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ab maxime at, tenetur repellat suscipit doloremque dignissimos deleniti quas officiis repudiandae, sapiente quidem, fugiat temporibus nihil. Animi, molestiae? Commodi, vitae!', 'img_68837a27075a6.jpg', '35', 'active', '1753446951', '2025-07-25'),
(8, 'Rohan Dhumal', 'shrikant@gmail.com', '117', '5', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla ab maxime at, tenetur repellat suscipit doloremque dignissimos deleniti quas officiis repudiandae, sapiente quidem, fugiat temporibus nihil. Animi, molestiae? Commodi, vitae!', 'img_68837a4f02331.jpg', '35', 'active', '1753446991', '2025-07-25'),
(9, 'Manali Dhongade', 'manudhongade@gmail.com', '117', '4', 'Demo', NULL, '35', 'active', '1753698519', '2025-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_policy_tbl`
--

CREATE TABLE `shipping_policy_tbl` (
  `shipping_policy_tbl_id` int(11) NOT NULL,
  `shipping_policy_name` text DEFAULT NULL,
  `shipping_policy_details` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipping_policy_tbl`
--

INSERT INTO `shipping_policy_tbl` (`shipping_policy_tbl_id`, `shipping_policy_name`, `shipping_policy_details`, `entry_by`, `entry_time`, `entry_date`, `status`) VALUES
(1, 'SHIPPING ', 'We have a streamlined process for shipping and delivery so that your product reaches you soon and safely. Our shipping and delivery process includes 5 steps:- 1. Order Received 2. Order Confirmation 3. Processing of order (product checking,packing,arranging shipping) 4. Shipping – Products will be shipped after the order is confirmed by communication with the customer. Free shipping & home delivery to customers residing within India. Shipment (days) varies from product to product. 5. Delivery- Tracking link is shared with the customer once an item is shipped. Customer sign is mandatory at the time of delivery.\r\n', '5', '1752315116', '2025-07-12', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `silver_product_offer`
--

CREATE TABLE `silver_product_offer` (
  `silver_product_offer_id` int(11) NOT NULL,
  `prod_silver_id` text DEFAULT NULL,
  `offer_tbl_id` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `silver_product_offer`
--

INSERT INTO `silver_product_offer` (`silver_product_offer_id`, `prod_silver_id`, `offer_tbl_id`, `status`, `entry_by`, `entry_time`) VALUES
(1, NULL, NULL, 'active', '4', '1676270361'),
(2, '78', '1', 'deleted', '4', '1676270366'),
(3, '78', '1', 'deleted', '4', '1676270542'),
(4, '488', '1', 'deleted', '4', '1676270670'),
(5, '428', '1', 'deleted', '4', '1676286596'),
(6, '428', '1', 'deleted', '4', '1676290362'),
(7, '441', '1', 'deleted', '4', '1676356475'),
(8, '440', '1', 'deleted', '4', '1676356550'),
(9, '434', '1', 'deleted', '4', '1676357010'),
(10, '488', '3', 'deleted', '4', '1676722465'),
(11, '474', '3', 'deleted', '4', '1676792270'),
(12, '488', '1', 'deleted', '4', '1676869668'),
(13, '78', '1', 'deleted', '4', '1676879734'),
(14, '488', '7', 'deleted', '4', '1676879988'),
(15, '78', '3', 'deleted', '4', '1679038540'),
(16, '367', '1', 'deleted', '4', '1704097363'),
(17, '367', '1', 'deleted', '4', '1704097437'),
(18, '430', '1', 'deleted', '4', '1704097477'),
(19, '432', '1', 'deleted', '4', '1704181375'),
(20, '433', '1', 'deleted', '4', '1704181381'),
(21, '440', '1', 'deleted', '4', '1704181389');

-- --------------------------------------------------------

--
-- Table structure for table `social_media_tbl`
--

CREATE TABLE `social_media_tbl` (
  `social_media_tbl_id` int(11) NOT NULL,
  `instagram` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `whatsapp` text DEFAULT NULL,
  `telegram` text DEFAULT NULL,
  `contact_no` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `added_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_media_tbl`
--

INSERT INTO `social_media_tbl` (`social_media_tbl_id`, `instagram`, `facebook`, `whatsapp`, `telegram`, `contact_no`, `address`, `email`, `added_by`, `entry_time`, `entry_by`, `status`) VALUES
(1, 'https://www.instagram.com/shingavijewellers/', 'https://www.facebook.com/shingavijewellerspvtltd/', 'https://api.whatsapp.com/send/?phone=918605500025&text&type=phone_number&app_absent=0', '#', '8605500025', 'Ahmednagar', 'contact@shingavijewellers.com', 'admin', '1753695215', '5', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `special_days`
--

CREATE TABLE `special_days` (
  `special_days_id` int(11) NOT NULL,
  `special_day` text DEFAULT NULL,
  `special_banner_image` text NOT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `special_days`
--

INSERT INTO `special_days` (`special_days_id`, `special_day`, `special_banner_image`, `entry_time`, `entry_date`, `status`, `entry_by`) VALUES
(2, 'Valentine\'s Day', '17376145954165images (1).jpeg', '1737219348', '2025-01-18', 'active', '4'),
(3, 'makar sankaranti', '173761456892061A-44.jpg', '1737219792', '2025-01-18', 'active', '4'),
(4, 'diwali', '17376145547706images.jpeg', '1737219879', '2025-01-18', 'active', '4'),
(5, 'Raksha Bandhan', '1737613838890817375311586226DALL·E 2025-01-20 12.22.45 - A festive illustration celebrating Raksha Bandhan, featuring a sister tying a rakhi on her brother\'s wrist, traditional Indian sweets, colorful rakhis.webp', '1737219893', '2025-01-18', 'active', '4'),
(6, 'dasara', '173761382452861737531232784217373556302811DALL·E 2025-01-20 12.16.52 - A high-quality image of a jewelry piece, sized 310px by 300px, suitable for a jewelry website. The image should feature a stylish and elegant gold nec.webp', '1737219983', '2025-01-18', 'active', '4'),
(7, 'Ganesh Chaturthi ', '1737613812466717375311831263DALL·E 2025-01-20 12.22.09 - A vibrant, festive illustration celebrating Ganesh Chaturthi, featuring Lord Ganesha in a traditional artistic pose, surrounded by flowers, modaks, an.webp', '1737353731', '2025-01-20', 'active', '4');

-- --------------------------------------------------------

--
-- Table structure for table `stone_shape`
--

CREATE TABLE `stone_shape` (
  `stone_shape_id` int(11) NOT NULL,
  `stone_shape_name` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `stone_shape`
--

INSERT INTO `stone_shape` (`stone_shape_id`, `stone_shape_name`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'Round', 'active', '4', '1607664528'),
(2, 'circle', 'active', '4', '1607664533'),
(3, 'cgfcgfc123', 'deleted', '4', '1730783456'),
(0, 'GOLD', 'deleted', '5', '1753445548');

-- --------------------------------------------------------

--
-- Table structure for table `stone_type`
--

CREATE TABLE `stone_type` (
  `stone_type_id` int(11) NOT NULL,
  `stone_type_name` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `stone_type`
--

INSERT INTO `stone_type` (`stone_type_id`, `stone_type_name`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'Diamond', 'active', '4', '1607664517'),
(2, 'vcnfgb123', 'deleted', '4', '1730782422'),
(3, 'dfgfh', 'deleted', '4', '1730782580'),
(0, 'GOLD', 'deleted', '5', '1753445535');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_customer_details`
--

CREATE TABLE `subscriber_customer_details` (
  `subscriber_customer_details_id` int(11) NOT NULL,
  `subcriber_details` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscriber_customer_details`
--

INSERT INTO `subscriber_customer_details` (`subscriber_customer_details_id`, `subcriber_details`, `entry_time`, `entry_date`, `entry_by`, `status`) VALUES
(1, 'sokhushaboo202@gmail.com', '1737207357', '2025-01-18', 'user', 'active'),
(2, 'helloer', '1737207392', '2025-01-18', 'user', 'active'),
(3, 'sokhushaboo202@gmail.com', '1737216539', '2025-01-18', 'user', 'active'),
(4, 'sacu@gmail.com', '1738405828', '2025-02-01', 'user', 'active'),
(5, 'murparruc3@gmail.com', '1740100778', '2025-02-21', 'user', 'active'),
(6, 'mckayfeob43@gmail.com', '1740198872', '2025-02-22', 'user', 'active'),
(7, 'mckayfeob43@gmail.com', '1740198958', '2025-02-22', 'user', 'active'),
(8, 'spencertiroynxu8@gmail.com', '1740284042', '2025-02-23', 'user', 'active'),
(9, 'spencertiroynxu8@gmail.com', '1740284145', '2025-02-23', 'user', 'active'),
(10, 'uhinbokqfbsl@yahoo.com', '1740349903', '2025-02-24', 'user', 'active'),
(11, 'uhinbokqfbsl@yahoo.com', '1740349979', '2025-02-24', 'user', 'active'),
(12, 'vjppym8x9ltefgbdk@yahoo.com', '1740526260', '2025-02-26', 'user', 'active'),
(13, 'maysaryanyf50@gmail.com', '1740588214', '2025-02-26', 'user', 'active'),
(14, 'maysaryanyf50@gmail.com', '1740588307', '2025-02-26', 'user', 'active'),
(15, 'tranlluelinca2@gmail.com', '1740668123', '2025-02-27', 'user', 'active'),
(16, 'tranlluelinca2@gmail.com', '1740668203', '2025-02-27', 'user', 'active'),
(17, 'vdennistx2@gmail.com', '1740751212', '2025-02-28', 'user', 'active'),
(18, 'vdennistx2@gmail.com', '1740751276', '2025-02-28', 'user', 'active'),
(19, 'klevlozano1987@gmail.com', '1740814039', '2025-03-01', 'user', 'active'),
(20, 'droeibctiaolvkq1e@yahoo.com', '1740880331', '2025-03-02', 'user', 'active'),
(21, 'droeibctiaolvkq1e@yahoo.com', '1740880391', '2025-03-02', 'user', 'active'),
(22, 'luckywaghashwini2018@gmail.com', '1740909375', '2025-03-02', 'user', 'active'),
(23, 'kismetiu77rift73@gmail.com', '1741003150', '2025-03-03', 'user', 'active'),
(24, 'kismetiu77rift73@gmail.com', '1741003214', '2025-03-03', 'user', 'active'),
(25, 'mckeenolanm2006@gmail.com', '1741086218', '2025-03-04', 'user', 'active'),
(26, 'mckeenolanm2006@gmail.com', '1741086296', '2025-03-04', 'user', 'active'),
(27, NULL, '1741109224', '2025-03-04', 'user', 'active'),
(28, 'greenbushnagou@yahoo.com', '1741178604', '2025-03-05', 'user', 'active'),
(29, 'greenbushnagou@yahoo.com', '1741178682', '2025-03-05', 'user', 'active'),
(30, 'zavalamidjlg@gmail.com', '1741292746', '2025-03-07', 'user', 'active'),
(31, 'zavalamidjlg@gmail.com', '1741292842', '2025-03-07', 'user', 'active'),
(32, 'braavareles@yahoo.com', '1741396867', '2025-03-08', 'user', 'active'),
(33, 'braavareles@yahoo.com', '1741396938', '2025-03-08', 'user', 'active'),
(34, 'acarpenterqu41@gmail.com', '1741457768', '2025-03-08', 'user', 'active'),
(35, 'acarpenterqu41@gmail.com', '1741457859', '2025-03-08', 'user', 'active'),
(36, 'meiknzipyt@gmail.com', '1741559121', '2025-03-10', 'user', 'active'),
(37, 'fglori1997@gmail.com', '1741707752', '2025-03-11', 'user', 'active'),
(38, 'fglori1997@gmail.com', '1741707856', '2025-03-11', 'user', 'active'),
(39, 'dlenorpm21@gmail.com', '1741855243', '2025-03-13', 'user', 'active'),
(40, 'dlenorpm21@gmail.com', '1741855314', '2025-03-13', 'user', 'active'),
(41, 'brenkorepi42@gmail.com', '1741951962', '2025-03-14', 'user', 'active'),
(42, 'brenkorepi42@gmail.com', '1741952039', '2025-03-14', 'user', 'active'),
(43, 'vivyanpg39@gmail.com', '1742021388', '2025-03-15', 'user', 'active'),
(44, 'vivyanpg39@gmail.com', '1742021478', '2025-03-15', 'user', 'active'),
(45, 'djemilet2001@gmail.com', '1742092551', '2025-03-16', 'user', 'active'),
(46, 'djemilet2001@gmail.com', '1742092618', '2025-03-16', 'user', 'active'),
(47, 'aelredhuffman@gmail.com', '1742153059', '2025-03-17', 'user', 'active'),
(48, 'aelredhuffman@gmail.com', '1742153131', '2025-03-17', 'user', 'active'),
(49, 'vnoblep2002@gmail.com', '1742357580', '2025-03-19', 'user', 'active'),
(50, 'mwutl1987@gmail.com', '1742516828', '2025-03-21', 'user', 'active'),
(51, 'mwutl1987@gmail.com', '1742516889', '2025-03-21', 'user', 'active'),
(52, 'meiblstantona2004@gmail.com', '1742569147', '2025-03-21', 'user', 'active'),
(53, 'meiblstantona2004@gmail.com', '1742569225', '2025-03-21', 'user', 'active'),
(54, 'sood_nathaniel379377@yahoo.com', '1742622320', '2025-03-22', 'user', 'active'),
(55, 'sood_nathaniel379377@yahoo.com', '1742622382', '2025-03-22', 'user', 'active'),
(56, 'rasmussenmetuac47@gmail.com', '1742677108', '2025-03-23', 'user', 'active'),
(57, 'lorenthomas1997@gmail.com', '1742734967', '2025-03-23', 'user', 'active'),
(58, 'lorenthomas1997@gmail.com', '1742735047', '2025-03-23', 'user', 'active'),
(59, 'brennavz39@gmail.com', '1742791355', '2025-03-24', 'user', 'active'),
(60, 'derevasqut3@gmail.com', '1742918230', '2025-03-25', 'user', 'active'),
(61, 'derevasqut3@gmail.com', '1742918293', '2025-03-25', 'user', 'active'),
(62, 'hpadjetx1990@gmail.com', '1743153819', '2025-03-28', 'user', 'active'),
(63, 'hpadjetx1990@gmail.com', '1743153993', '2025-03-28', 'user', 'active'),
(64, 'gzanderma@gmail.com', '1743164247', '2025-03-28', 'user', 'active'),
(65, 'gzanderma@gmail.com', '1743164394', '2025-03-28', 'user', 'active'),
(66, 'zoeialvarrf17@gmail.com', '1743212976', '2025-03-29', 'user', 'active'),
(67, 'zoeialvarrf17@gmail.com', '1743213065', '2025-03-29', 'user', 'active'),
(68, 'webneillw@gmail.com', '1743481699', '2025-04-01', 'user', 'active'),
(69, 'webneillw@gmail.com', '1743481740', '2025-04-01', 'user', 'active'),
(70, 'garelen50@gmail.com', '1743536216', '2025-04-02', 'user', 'active'),
(71, 'garelen50@gmail.com', '1743536528', '2025-04-02', 'user', 'active'),
(72, 'langkrispian8@gmail.com', '1743589042', '2025-04-02', 'user', 'active'),
(73, 'bisshg50@gmail.com', '1743620405', '2025-04-03', 'user', 'active'),
(74, 'bisshg50@gmail.com', '1743620452', '2025-04-03', 'user', 'active'),
(75, 'terrikm1981@gmail.com', '1743709053', '2025-04-04', 'user', 'active'),
(76, 'terrikm1981@gmail.com', '1743709094', '2025-04-04', 'user', 'active'),
(77, 'kbarrerax1980@gmail.com', '1743714506', '2025-04-04', 'user', 'active'),
(78, 'hrojaspm15@gmail.com', '1743716128', '2025-04-04', 'user', 'active'),
(79, 'hrojaspm15@gmail.com', '1743716178', '2025-04-04', 'user', 'active'),
(80, 'totparsonm9@gmail.com', '1743770374', '2025-04-04', 'user', 'active'),
(81, 'totparsonm9@gmail.com', '1743770443', '2025-04-04', 'user', 'active'),
(82, 'edwards.adam362064@yahoo.com', '1743827934', '2025-04-05', 'user', 'active'),
(83, 'edwards.adam362064@yahoo.com', '1743828010', '2025-04-05', 'user', 'active'),
(84, 'josephmeimmg2@gmail.com', '1743928106', '2025-04-06', 'user', 'active'),
(85, 'josephmeimmg2@gmail.com', '1743928159', '2025-04-06', 'user', 'active'),
(86, 'djanblantb16@gmail.com', '1744033569', '2025-04-07', 'user', 'active'),
(87, 'djanblantb16@gmail.com', '1744033613', '2025-04-07', 'user', 'active'),
(88, 'hoypbt40@gmail.com', '1744160790', '2025-04-09', 'user', 'active'),
(89, 'hoypbt40@gmail.com', '1744160841', '2025-04-09', 'user', 'active'),
(90, 'mack.jenny274994@yahoo.com', '1744225567', '2025-04-10', 'user', 'active'),
(91, 'mack.jenny274994@yahoo.com', '1744225688', '2025-04-10', 'user', 'active'),
(92, 'rochelcn95@gmail.com', '1744278470', '2025-04-10', 'user', 'active'),
(93, 'hchadtu1988@gmail.com', '1744294915', '2025-04-10', 'user', 'active'),
(94, 'hchadtu1988@gmail.com', '1744295054', '2025-04-10', 'user', 'active'),
(95, 'sibiloq86@gmail.com', '1744360451', '2025-04-11', 'user', 'active'),
(96, 'sibiloq86@gmail.com', '1744360462', '2025-04-11', 'user', 'active'),
(97, 'rishitabaldota@gmail.com', '1744388709', '2025-04-11', 'user', 'active'),
(98, 'kiasimsyz1995@gmail.com', '1744398548', '2025-04-12', 'user', 'active'),
(99, 'kiasimsyz1995@gmail.com', '1744398566', '2025-04-12', 'user', 'active'),
(100, 'harrelllisa866539@yahoo.com', '1744499689', '2025-04-13', 'user', 'active'),
(101, 'harrelllisa866539@yahoo.com', '1744499716', '2025-04-13', 'user', 'active'),
(102, 'ginasantos620075@yahoo.com', '1744532288', '2025-04-13', 'user', 'active'),
(103, 'ginasantos620075@yahoo.com', '1744532300', '2025-04-13', 'user', 'active'),
(104, 'johnhilton982471@yahoo.com', '1744542012', '2025-04-13', 'user', 'active'),
(105, 'johnhilton982471@yahoo.com', '1744542025', '2025-04-13', 'user', 'active'),
(106, 'bflemingr3@gmail.com', '1744546837', '2025-04-13', 'user', 'active'),
(107, 'bflemingr3@gmail.com', '1744546845', '2025-04-13', 'user', 'active'),
(108, 'gardndjoettzn3@gmail.com', '1744643599', '2025-04-14', 'user', 'active'),
(109, 'gardndjoettzn3@gmail.com', '1744643615', '2025-04-14', 'user', 'active'),
(110, 'ilanahuffmangh6@gmail.com', '1744657136', '2025-04-15', 'user', 'active'),
(111, 'ilanahuffmangh6@gmail.com', '1744657147', '2025-04-15', 'user', 'active'),
(112, 'gunjan.shingavi@gmail.com', '1747726246', '2025-05-20', 'user', 'active'),
(113, 'test@gmail.com', '1747730051', '2025-05-20', 'user', 'active'),
(114, '', '1747739712', '2025-05-20', 'user', 'active'),
(115, NULL, '1748214354', '2025-05-26', 'user', 'active'),
(116, NULL, '1748942793', '2025-06-03', 'user', 'active'),
(0, 'sameerpalve.2019@gmail.com', '1753100208', '2025-07-21', 'user', 'active'),
(0, '7666479649', '1753100216', '2025-07-21', 'user', 'active'),
(0, '9503077104', '1753259774', '2025-07-23', 'user', 'active'),
(0, '9503077104', '1753259784', '2025-07-23', 'user', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `system_log`
--

CREATE TABLE `system_log` (
  `sl_id` int(11) NOT NULL,
  `slog_title` text NOT NULL,
  `slog_desc` text NOT NULL,
  `slog_admin_id` text NOT NULL,
  `slog_date` text NOT NULL,
  `slog_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `system_log`
--

INSERT INTO `system_log` (`sl_id`, `slog_title`, `slog_desc`, `slog_admin_id`, `slog_date`, `slog_time`) VALUES
(1, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-10', '1739183667'),
(2, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-02-10', '1739185626'),
(3, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-10', '1739185646'),
(4, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-10', '1739190871'),
(5, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-11', '1739258825'),
(6, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-17', '1739800462'),
(7, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-18', '1739858325'),
(8, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-18', '1739884430'),
(9, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-20', '1740044855'),
(10, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-20', '1740044858'),
(11, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-20', '1740044869'),
(12, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-20', '1740044871'),
(13, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-20', '1740044877'),
(14, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-20', '1740055635'),
(15, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-02-20', '1740062464'),
(16, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-20', '1740063486'),
(17, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-20', '1740063516'),
(18, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-20', '1740063533'),
(19, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-21', '1740111565'),
(20, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-21', '1740116314'),
(21, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-21', '1740119370'),
(22, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-21', '1740128296'),
(23, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-21', '1740132797'),
(24, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-21', '1740134983'),
(25, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-21', '1740137591'),
(26, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-21', '1740141249'),
(27, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-21', '1740145817'),
(28, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-02-21', '1740150552'),
(29, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-21', '1740150646'),
(30, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-21', '1740150648'),
(31, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-21', '1740150654'),
(32, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-02-21', '1740151422'),
(33, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-22', '1740205287'),
(34, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-22', '1740206228'),
(35, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-22', '1740206263'),
(36, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-22', '1740207932'),
(37, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-22', '1740211710'),
(38, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-22', '1740211717'),
(39, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-22', '1740223067'),
(40, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-23', '1740280615'),
(41, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-23', '1740287007'),
(42, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-23', '1740308798'),
(43, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-02-23', '1740321977'),
(44, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-24', '1740377777'),
(45, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-24', '1740380235'),
(46, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-24', '1740380478'),
(47, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-02-24', '1740382072'),
(48, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-24', '1740388246'),
(49, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-24', '1740399918'),
(50, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-24', '1740400499'),
(51, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-25', '1740456983'),
(52, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-25', '1740456990'),
(53, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-25', '1740457029'),
(54, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-02-25', '1740457161'),
(55, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-25', '1740457178'),
(56, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-02-25', '1740457185'),
(57, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-25', '1740457201'),
(58, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-25', '1740457205'),
(59, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-25', '1740458010'),
(60, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-25', '1740459135'),
(61, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-25', '1740459155'),
(62, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-25', '1740459178'),
(63, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-25', '1740459194'),
(64, 'LogIn', 'Data Entry LogIn Success', '5', '2025-02-25', '1740459300'),
(65, 'LogOut', 'Data Entry LogOut Success', '5', '2025-02-25', '1740459356'),
(66, 'LogIn', 'Product LogIn Success', '7', '2025-02-25', '1740459377'),
(67, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-25', '1740465217'),
(68, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-25', '1740477622'),
(69, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-25', '1740485784'),
(70, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-02-25', '1740494552'),
(71, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-26', '1740549871'),
(72, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-26', '1740553038'),
(73, 'LogIn', 'LogIn Failed', 'no-admin', '2025-02-26', '1740553052'),
(74, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-26', '1740553091'),
(75, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-26', '1740554241'),
(76, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-26', '1740571616'),
(77, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-26', '1740572099'),
(78, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-27', '1740637647'),
(79, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-02-28', '1740724475'),
(80, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-01', '1740805355'),
(81, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-01', '1740809117'),
(82, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-01', '1740809835'),
(83, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-02', '1740895844'),
(84, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-03', '1740985158'),
(85, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-04', '1741067954'),
(86, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-06', '1741239592'),
(87, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-07', '1741328570'),
(88, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-08', '1741412372'),
(89, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-09', '1741513483'),
(90, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-10', '1741585745'),
(91, 'LogIn', 'LogIn Failed', 'no-admin', '2025-03-10', '1741587224'),
(92, 'LogIn', 'LogIn Failed', 'no-admin', '2025-03-10', '1741587232'),
(93, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-10', '1741587246'),
(94, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-11', '1741674501'),
(95, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-12', '1741760753'),
(96, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-13', '1741848677'),
(97, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-14', '1741933399'),
(98, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-15', '1742018547'),
(99, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-17', '1742187986'),
(100, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-17', '1742192886'),
(101, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-17', '1742192902'),
(102, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-18', '1742276080'),
(103, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-18', '1742276161'),
(104, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-19', '1742362214'),
(105, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-19', '1742364326'),
(106, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-21', '1742536808'),
(107, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-21', '1742540219'),
(108, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-22', '1742623324'),
(109, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-23', '1742709726'),
(110, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-24', '1742796498'),
(111, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-25', '1742883154'),
(112, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-26', '1742965441'),
(113, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-27', '1743056193'),
(114, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-28', '1743142711'),
(115, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-29', '1743223283'),
(116, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-29', '1743223761'),
(117, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-29', '1743224873'),
(118, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-29', '1743228428'),
(119, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-29', '1743229042'),
(120, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-03-31', '1743401180'),
(121, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-01', '1743491109'),
(122, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-02', '1743574659'),
(123, 'LogIn', 'LogIn Failed', 'no-admin', '2025-04-02', '1743579935'),
(124, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-02', '1743579938'),
(125, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-03', '1743657386'),
(126, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-03', '1743659903'),
(127, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-04', '1743746128'),
(128, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-05', '1743832870'),
(129, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-06', '1743918241'),
(130, 'LogIn', 'LogIn Failed', 'no-admin', '2025-04-06', '1743938408'),
(131, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-06', '1743938427'),
(132, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-04-06', '1743949715'),
(133, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-07', '1744005886'),
(134, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-07', '1744007755'),
(135, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-07', '1744012017'),
(136, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-07', '1744020583'),
(137, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-04-07', '1744038406'),
(138, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-08', '1744092932'),
(139, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-08', '1744093009'),
(140, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-08', '1744094730'),
(141, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-08', '1744095095'),
(142, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-04-08', '1744108291'),
(143, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-09', '1744179528'),
(144, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-09', '1744200980'),
(145, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-04-09', '1744201580'),
(146, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-10', '1744261532'),
(147, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-10', '1744266044'),
(148, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-10', '1744266437'),
(149, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-10', '1744278164'),
(150, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-10', '1744285272'),
(151, 'LogIn', 'LogIn Failed', 'no-admin', '2025-04-11', '1744349866'),
(152, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-11', '1744366502'),
(153, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-12', '1744434891'),
(154, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-14', '1744606621'),
(155, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-14', '1744612677'),
(156, 'LogIn', 'LogIn Failed', 'no-admin', '2025-04-14', '1744612975'),
(157, 'LogIn', 'LogIn Failed', 'no-admin', '2025-04-14', '1744612980'),
(158, 'LogIn', 'LogIn Failed', 'no-admin', '2025-04-14', '1744612984'),
(159, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-14', '1744612987'),
(160, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-14', '1744620689'),
(161, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-04-14', '1744640328'),
(162, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-15', '1744693927'),
(163, 'LogIn', 'LogIn Failed', 'no-admin', '2025-04-18', '1744956952'),
(164, 'LogIn', 'LogIn Failed', 'no-admin', '2025-04-18', '1744956963'),
(165, 'LogIn', 'LogIn Failed', 'no-admin', '2025-04-18', '1744956968'),
(166, 'LogIn', 'Shingavi Jewellers LogIn Success', '4', '2025-04-18', '1744957009'),
(167, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-18', '1744966459'),
(168, 'LogOut', 'Shingavi Jewellers LogOut Success', '4', '2025-04-18', '1744968713'),
(169, 'LogIn', 'LogIn Failed', 'no-admin', '2025-04-18', '1744968734'),
(170, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-18', '1744968743'),
(171, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-18', '1744968878'),
(172, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-04-18', '1744969226'),
(173, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-18', '1744972484'),
(174, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-04-18', '1744975751'),
(175, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-20', '1745128225'),
(176, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-21', '1745219834'),
(177, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-04-21', '1745234410'),
(178, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-21', '1745234418'),
(179, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-04-21', '1745234458'),
(180, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-21', '1745234481'),
(181, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-22', '1745302820'),
(182, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-22', '1745309876'),
(183, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-24', '1745481062'),
(184, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-25', '1745579696'),
(185, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-25', '1745593506'),
(186, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-26', '1745651942'),
(187, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-26', '1745668424'),
(188, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-27', '1745744278'),
(189, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-28', '1745814273'),
(190, 'LogIn', 'LogIn Failed', 'no-admin', '2025-04-28', '1745817349'),
(191, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-28', '1745817356'),
(192, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-28', '1745820496'),
(193, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-28', '1745822276'),
(194, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-28', '1745845911'),
(195, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-04-28', '1745846431'),
(196, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-28', '1745846433'),
(197, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-04-29', '1745907583'),
(198, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-03', '1746279350'),
(199, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-06', '1746513380'),
(200, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-07', '1746601422'),
(201, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-07', '1746601793'),
(202, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-07', '1746619736'),
(203, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-05-07', '1746620671'),
(204, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-07', '1746620697'),
(205, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-08', '1746680736'),
(206, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-08', '1746682026'),
(207, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-08', '1746682033'),
(208, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-08', '1746684441'),
(209, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-09', '1746773255'),
(210, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-09', '1746790752'),
(211, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-10', '1746851376'),
(212, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-10', '1746874003'),
(213, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-11', '1746943576'),
(214, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-12', '1747027466'),
(215, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-12', '1747069433'),
(216, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-13', '1747117644'),
(217, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-13', '1747156605'),
(218, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-14', '1747202756'),
(219, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-14', '1747225453'),
(220, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-15', '1747310778'),
(221, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-17', '1747463307'),
(222, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-17', '1747463383'),
(223, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-17', '1747464456'),
(224, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-17', '1747468763'),
(225, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-17', '1747471118'),
(226, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-17', '1747474081'),
(227, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-18', '1747549325'),
(228, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-19', '1747631491'),
(229, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-19', '1747660461'),
(230, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-20', '1747719737'),
(231, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-20', '1747720917'),
(232, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-20', '1747723164'),
(233, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-20', '1747731610'),
(234, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-20', '1747735738'),
(235, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-20', '1747740565'),
(236, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-20', '1747742697'),
(237, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-05-20', '1747746473'),
(238, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-21', '1747800023'),
(239, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-21', '1747828387'),
(240, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-21', '1747829032'),
(241, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-22', '1747890425'),
(242, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-22', '1747891167'),
(243, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-22', '1747903722'),
(244, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-22', '1747904195'),
(245, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-22', '1747914788'),
(246, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-22', '1747926144'),
(247, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-22', '1747926291'),
(248, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-23', '1747978060'),
(249, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-23', '1747995553'),
(250, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-23', '1747995560'),
(251, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-23', '1747995602'),
(252, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-23', '1747998836'),
(253, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-24', '1748059449'),
(254, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-24', '1748066823'),
(255, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-24', '1748081133'),
(256, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-24', '1748090026'),
(257, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-24', '1748092862'),
(258, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-25', '1748174235'),
(259, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-26', '1748232700'),
(260, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-26', '1748234015'),
(261, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-26', '1748234050'),
(262, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-26', '1748234054'),
(263, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-26', '1748234112'),
(264, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-26', '1748234164'),
(265, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-26', '1748234166'),
(266, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-26', '1748234173'),
(267, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-26', '1748234661'),
(268, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-26', '1748235501'),
(269, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-05-26', '1748236001'),
(270, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-26', '1748237870'),
(271, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-27', '1748319678'),
(272, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-27', '1748319708'),
(273, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-27', '1748319737'),
(274, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-27', '1748319752'),
(275, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-27', '1748327414'),
(276, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-05-27', '1748336964'),
(277, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-27', '1748336971'),
(278, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-05-27', '1748336986'),
(279, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-27', '1748346542'),
(280, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-27', '1748347108'),
(281, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-28', '1748429993'),
(282, 'LogIn', 'LogIn Failed', 'no-admin', '2025-05-28', '1748430008'),
(283, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-28', '1748430018'),
(284, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-28', '1748431943'),
(285, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-05-28', '1748433907'),
(286, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-29', '1748497357'),
(287, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-30', '1748590448'),
(288, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-05-30', '1748590533'),
(289, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-30', '1748612803'),
(290, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-05-31', '1748684012'),
(291, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-01', '1748779624'),
(292, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-05', '1749098864'),
(293, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-08', '1749363486'),
(294, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-10', '1749537645'),
(295, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-10', '1749540236'),
(296, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-06-10', '1749540269'),
(297, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-10', '1749577121'),
(298, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-11', '1749626896'),
(299, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-11', '1749640654'),
(300, 'LogOut', 'Jewel Nagar LogOut Success', '4', '2025-06-11', '1749640772'),
(301, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-11', '1749641017'),
(302, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-11', '1749645635'),
(303, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-24', '1750743384'),
(304, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-25', '1750851065'),
(305, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-06-29', '1751175452'),
(306, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-07-01', '1751350082'),
(307, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-07-02', '1751440142'),
(308, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-07-05', '1751699833'),
(309, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-07-11', '1752221168'),
(310, 'LogIn', 'Jewel Nagar LogIn Success', '4', '2025-07-11', '1752237424'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-12', '1752296610'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-12', '1752297219'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-12', '1752297658'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-12', '1752309608'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-12', '1752314915'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-15', '1752518342'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-17', '1752726455'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-18', '1752813596'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-19', '1752905835'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-19', '1752914123'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-24', '1753330085'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-24', '1753340727'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-24', '1753354990'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-24', '1753355172'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-25', '1753416617'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-25', '1753427261'),
(0, 'LogIn', 'LogIn Failed', 'no-admin', '2025-07-25', '1753434998'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-25', '1753435002'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-25', '1753436151'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-25', '1753438075'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-25', '1753438189'),
(0, 'LogOut', 'Admin Master LogOut Success', '5', '2025-07-25', '1753444903'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-25', '1753444915'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-26', '1753502721'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-26', '1753504393'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-26', '1753512830'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-26', '1753530934'),
(0, 'LogIn', 'LogIn Failed', 'no-admin', '2025-07-26', '1753532108'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-26', '1753532122'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-28', '1753670946'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-28', '1753671832'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-28', '1753679092'),
(0, 'LogOut', 'Admin Master LogOut Success', '5', '2025-07-28', '1753685418'),
(0, 'LogIn', 'Admin Master LogIn Success', '5', '2025-07-28', '1753685424');

-- --------------------------------------------------------

--
-- Table structure for table `system_notification`
--

CREATE TABLE `system_notification` (
  `system_notification_id` int(11) NOT NULL,
  `type` text NOT NULL,
  `msg` text NOT NULL,
  `sn_time` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `entry_date` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `system_notification`
--

INSERT INTO `system_notification` (`system_notification_id`, `type`, `msg`, `sn_time`, `admin_id`, `entry_date`, `entry_time`, `status`) VALUES
(1, 'Success', 'LogIn Success', '1656139167', 1, NULL, NULL, NULL),
(5357, 'Success', 'LogIn Success', '1711446456', 1, NULL, NULL, NULL),
(5358, 'Success', 'LogIn Success', '1711446486', 1, NULL, NULL, NULL),
(5359, 'Success', 'LogIn Success', '1711450593', 1, NULL, NULL, NULL),
(5360, 'Success', 'LogIn Success', '1711451808', 1, NULL, NULL, NULL),
(5361, 'Success', 'LogIn Success', '1711452906', 1, NULL, NULL, NULL),
(5362, 'Success', 'LogIn Success', '1711455462', 1, NULL, NULL, NULL),
(5363, 'Success', 'LogIn Success', '1711513109', 1, NULL, NULL, NULL),
(5364, 'Success', 'LogIn Success', '1711538006', 1, NULL, NULL, NULL),
(5365, 'Success', 'LogIn Success', '1711603170', 1, NULL, NULL, NULL),
(5366, 'Success', 'LogIn Success', '1711617528', 1, NULL, NULL, NULL),
(5367, 'Success', 'LogIn Success', '1711709075', 1, NULL, NULL, NULL),
(5368, 'Success', 'LogIn Success', '1711801089', 1, NULL, NULL, NULL),
(5369, 'Success', 'LogIn Success', '1712038717', 1, NULL, NULL, NULL),
(5370, 'Success', 'LogIn Success', '1712055153', 1, NULL, NULL, NULL),
(5371, 'Success', 'LogIn Success', '1712118823', 1, NULL, NULL, NULL),
(5372, 'Success', 'LogIn Success', '1712119643', 1, NULL, NULL, NULL),
(5373, 'Success', 'LogIn Success', '1712141634', 1, NULL, NULL, NULL),
(5374, 'Success', 'LogIn Success', '1712143242', 1, NULL, NULL, NULL),
(5375, 'Success', 'LogIn Success', '1712290709', 1, NULL, NULL, NULL),
(5376, 'Success', 'LogIn Success', '1712300281', 1, NULL, NULL, NULL),
(5377, 'Success', 'LogIn Success', '1712309968', 1, NULL, NULL, NULL),
(5378, 'Success', 'LogIn Success', '1712377997', 1, NULL, NULL, NULL),
(5379, 'Success', 'LogIn Success', '1712378133', 1, NULL, NULL, NULL),
(5380, 'Success', 'LogIn Success', '1712386177', 1, NULL, NULL, NULL),
(5381, 'Success', 'LogIn Success', '1712399866', 1, NULL, NULL, NULL),
(5382, 'Success', 'LogIn Success', '1712550103', 1, NULL, NULL, NULL),
(5383, 'Success', 'LogIn Success', '1712562483', 1, NULL, NULL, NULL),
(5384, 'Success', 'LogIn Success', '1712563123', 1, NULL, NULL, NULL),
(5385, 'Success', 'LogIn Success', '1712722797', 1, NULL, NULL, NULL),
(5386, 'Success', 'LogIn Success', '1712733957', 1, NULL, NULL, NULL),
(5387, 'Success', 'LogIn Success', '1712739666', 1, NULL, NULL, NULL),
(5388, 'Success', 'LogIn Success', '1712812437', 1, NULL, NULL, NULL),
(5389, 'Success', 'LogIn Success', '1712812438', 1, NULL, NULL, NULL),
(5390, 'Success', 'LogIn Success', '1712814259', 1, NULL, NULL, NULL),
(5391, 'Success', 'LogIn Success', '1712895771', 1, NULL, NULL, NULL),
(5392, 'Success', 'LogIn Success', '1712897466', 1, NULL, NULL, NULL),
(5393, 'Success', 'LogIn Success', '1712907593', 1, NULL, NULL, NULL),
(5394, 'Success', 'LogIn Success', '1712932828', 1, NULL, NULL, NULL),
(5395, 'Success', 'LogIn Success', '1712981862', 1, NULL, NULL, NULL),
(5396, 'Success', 'LogIn Success', '1712982722', 1, NULL, NULL, NULL),
(5397, 'Success', 'LogIn Success', '1713004598', 1, NULL, NULL, NULL),
(5398, 'Success', 'LogIn Success', '1713155456', 1, NULL, NULL, NULL),
(5399, 'Success', 'LogIn Success', '1713171828', 1, NULL, NULL, NULL),
(5400, 'Success', 'LogIn Success', '1713178710', 1, NULL, NULL, NULL),
(5401, 'Success', 'LogIn Success', '1713240016', 1, NULL, NULL, NULL),
(5402, 'Success', 'LogIn Success', '1713240956', 1, NULL, NULL, NULL),
(5403, 'Success', 'LogIn Success', '1713251409', 1, NULL, NULL, NULL),
(5404, 'Success', 'LogIn Success', '1713326524', 1, NULL, NULL, NULL),
(5405, 'Success', 'LogIn Success', '1713331705', 1, NULL, NULL, NULL),
(5406, 'Success', 'LogIn Success', '1713416070', 1, NULL, NULL, NULL),
(5407, 'Success', 'LogIn Success', '1713416192', 1, NULL, NULL, NULL),
(5408, 'Success', 'LogIn Success', '1713431104', 1, NULL, NULL, NULL),
(5409, 'Success', 'LogIn Success', '1713452512', 1, NULL, NULL, NULL),
(5410, 'Success', 'LogIn Success', '1713501819', 1, NULL, NULL, NULL),
(5411, 'Success', 'LogIn Success', '1713502270', 1, NULL, NULL, NULL),
(5412, 'Success', 'LogIn Success', '1713520463', 1, NULL, NULL, NULL),
(5413, 'Success', 'LogIn Success', '1713587232', 1, NULL, NULL, NULL),
(5414, 'Success', 'LogIn Success', '1713587258', 1, NULL, NULL, NULL),
(5415, 'Success', 'LogIn Success', '1713845738', 1, NULL, NULL, NULL),
(5416, 'Success', 'LogIn Success', '1713847525', 1, NULL, NULL, NULL),
(5417, 'Success', 'LogIn Success', '1713876969', 1, NULL, NULL, NULL),
(5418, 'Success', 'LogIn Success', '1713932585', 1, NULL, NULL, NULL),
(5419, 'Success', 'LogIn Success', '1713933399', 1, NULL, NULL, NULL),
(5420, 'Success', 'LogIn Success', '1713933520', 1, NULL, NULL, NULL),
(5421, 'Success', 'LogIn Success', '1713933620', 1, NULL, NULL, NULL),
(5422, 'Success', 'LogIn Success', '1713942862', 1, NULL, NULL, NULL),
(5423, 'Success', 'LogIn Success', '1713949413', 1, NULL, NULL, NULL),
(5424, 'Success', 'LogIn Success', '1713955017', 1, NULL, NULL, NULL),
(5425, 'Success', 'LogIn Success', '1714020312', 1, NULL, NULL, NULL),
(5426, 'Success', 'LogIn Success', '1714022636', 1, NULL, NULL, NULL),
(5427, 'Success', 'LogIn Success', '1714105928', 1, NULL, NULL, NULL),
(5428, 'Success', 'LogIn Success', '1714112498', 1, NULL, NULL, NULL),
(5429, 'Success', 'LogIn Success', '1714193246', 1, NULL, NULL, NULL),
(5430, 'Success', 'LogIn Success', '1714199396', 1, NULL, NULL, NULL),
(5431, 'Success', 'LogIn Success', '1714204556', 1, NULL, NULL, NULL),
(5432, 'Success', 'LogIn Success', '1714364913', 1, NULL, NULL, NULL),
(5433, 'Success', 'LogIn Success', '1714374514', 1, NULL, NULL, NULL),
(5434, 'Success', 'LogIn Success', '1714394650', 1, NULL, NULL, NULL),
(5435, 'Success', 'LogIn Success', '1714451704', 1, NULL, NULL, NULL),
(5436, 'Success', 'LogIn Success', '1714464164', 1, NULL, NULL, NULL),
(5437, 'Success', 'LogIn Success', '1714549231', 1, NULL, NULL, NULL),
(5438, 'Success', 'LogIn Success', '1714622450', 1, NULL, NULL, NULL),
(5439, 'Success', 'LogIn Success', '1714710540', 1, NULL, NULL, NULL),
(5440, 'Success', 'LogIn Success', '1714713013', 1, NULL, NULL, NULL),
(5441, 'Success', 'LogIn Success', '1714730552', 1, NULL, NULL, NULL),
(5442, 'Success', 'LogIn Success', '1714731393', 1, NULL, NULL, NULL),
(5443, 'Success', 'LogIn Success', '1714824061', 1, NULL, NULL, NULL),
(5444, 'Success', 'LogIn Success', '1714971277', 1, NULL, NULL, NULL),
(5445, 'Success', 'LogIn Success', '1714990005', 1, NULL, NULL, NULL),
(5446, 'Success', 'LogIn Success', '1715056162', 1, NULL, NULL, NULL),
(5447, 'Success', 'LogIn Success', '1715064672', 1, NULL, NULL, NULL),
(5448, 'Success', 'LogIn Success', '1715072310', 1, NULL, NULL, NULL),
(5449, 'Success', 'LogIn Success', '1715073472', 1, NULL, NULL, NULL),
(5450, 'Success', 'LogIn Success', '1715074827', 1, NULL, NULL, NULL),
(5451, 'Success', 'LogIn Success', '1715084305', 1, NULL, NULL, NULL),
(5452, 'Success', 'LogIn Success', '1715166497', 1, NULL, NULL, NULL),
(5453, 'Success', 'LogIn Success', '1715228466', 1, NULL, NULL, NULL),
(5454, 'Success', 'LogIn Success', '1715238061', 1, NULL, NULL, NULL),
(5455, 'Success', 'LogIn Success', '1715246560', 1, NULL, NULL, NULL),
(5456, 'Success', 'LogIn Success', '1715331868', 1, NULL, NULL, NULL),
(5457, 'Success', 'LogIn Success', '1715403324', 1, NULL, NULL, NULL),
(5458, 'Success', 'LogIn Success', '1715403889', 1, NULL, NULL, NULL),
(5459, 'Success', 'LogIn Success', '1715411700', 1, NULL, NULL, NULL),
(5460, 'Success', 'LogIn Success', '1715411853', 1, NULL, NULL, NULL),
(5461, 'Success', 'LogIn Success', '1715665719', 1, NULL, NULL, NULL),
(5462, 'Success', 'LogIn Success', '1715684475', 1, NULL, NULL, NULL),
(5463, 'Success', 'LogIn Success', '1715765073', 1, NULL, NULL, NULL),
(5464, 'Success', 'LogIn Success', '1715833494', 1, NULL, NULL, NULL),
(5465, 'Success', 'LogIn Success', '1715852577', 1, NULL, NULL, NULL),
(5466, 'Success', 'LogIn Success', '1715858113', 1, NULL, NULL, NULL),
(5467, 'Success', 'LogIn Success', '1715860932', 1, NULL, NULL, NULL),
(5468, 'Success', 'LogIn Success', '1715921721', 1, NULL, NULL, NULL),
(5469, 'Success', 'LogIn Success', '1715932139', 1, NULL, NULL, NULL),
(5470, 'Success', 'LogIn Success', '1715954106', 1, NULL, NULL, NULL),
(5471, 'Success', 'LogIn Success', '1716005653', 1, NULL, NULL, NULL),
(5472, 'Success', 'LogIn Success', '1716024928', 1, NULL, NULL, NULL),
(5473, 'Success', 'LogIn Success', '1716026542', 1, NULL, NULL, NULL),
(5474, 'Success', 'LogIn Success', '1716181481', 1, NULL, NULL, NULL),
(5475, 'Success', 'LogIn Success', '1716182863', 1, NULL, NULL, NULL),
(5476, 'Success', 'LogIn Success', '1716209761', 1, NULL, NULL, NULL),
(5477, 'Success', 'LogIn Success', '1716266763', 1, NULL, NULL, NULL),
(5478, 'Success', 'LogIn Success', '1716267524', 1, NULL, NULL, NULL),
(5479, 'Success', 'LogIn Success', '1716280502', 1, NULL, NULL, NULL),
(5480, 'Success', 'LogIn Success', '1716351745', 1, NULL, NULL, NULL),
(5481, 'Success', 'LogIn Success', '1716437791', 1, NULL, NULL, NULL),
(5482, 'Success', 'LogIn Success', '1716438311', 1, NULL, NULL, NULL),
(5483, 'Success', 'LogIn Success', '1716442840', 1, NULL, NULL, NULL),
(5484, 'Success', 'LogIn Success', '1716454460', 1, NULL, NULL, NULL),
(5485, 'Success', 'LogIn Success', '1716455056', 1, NULL, NULL, NULL),
(5486, 'Success', 'LogIn Success', '1716524904', 1, NULL, NULL, NULL),
(5487, 'Success', 'LogIn Success', '1716546469', 1, NULL, NULL, NULL),
(5488, 'Success', 'LogIn Success', '1716615373', 1, NULL, NULL, NULL),
(5489, 'Success', 'LogIn Success', '1716879516', 1, NULL, NULL, NULL),
(5490, 'Success', 'LogIn Success', '1716886975', 1, NULL, NULL, NULL),
(5491, 'Success', 'LogIn Success', '1716957422', 1, NULL, NULL, NULL),
(5492, 'Success', 'LogIn Success', '1717043499', 1, NULL, NULL, NULL),
(5493, 'Success', 'LogIn Success', '1717049516', 1, NULL, NULL, NULL),
(5494, 'Success', 'LogIn Success', '1717067349', 1, NULL, NULL, NULL),
(5495, 'Success', 'LogIn Success', '1717131391', 1, NULL, NULL, NULL),
(5496, 'Success', 'LogIn Success', '1717410849', 1, NULL, NULL, NULL),
(5497, 'Success', 'LogIn Success', '1717561916', 1, NULL, NULL, NULL),
(5498, 'Success', 'LogIn Success', '1717649063', 1, NULL, NULL, NULL),
(5499, 'Success', 'LogIn Success', '1717652611', 1, NULL, NULL, NULL),
(5500, 'Success', 'LogIn Success', '1717734105', 1, NULL, NULL, NULL),
(5501, 'Success', 'LogIn Success', '1717734133', 1, NULL, NULL, NULL),
(5502, 'Success', 'LogIn Success', '1717819788', 1, NULL, NULL, NULL),
(5503, 'Success', 'LogIn Success', '1717955012', 1, NULL, NULL, NULL),
(5504, 'Success', 'LogIn Success', '1718025608', 1, NULL, NULL, NULL),
(5505, 'Success', 'LogIn Success', '1718808513', 1, NULL, NULL, NULL),
(5506, 'Success', 'LogIn Success', '1718813924', 1, NULL, NULL, NULL),
(5507, 'Success', 'LogIn Success', '1718814568', 1, NULL, NULL, NULL),
(5508, 'Success', 'LogIn Success', '1719139628', 1, NULL, NULL, NULL),
(5509, 'Success', 'LogIn Success', '1719156805', 1, NULL, NULL, NULL),
(5510, 'Success', 'LogIn Success', '1719158357', 1, NULL, NULL, NULL),
(5511, 'Success', 'LogIn Success', '1719673568', 1, NULL, NULL, NULL),
(5512, 'Success', 'LogIn Success', '1720193512', 1, NULL, NULL, NULL),
(5513, 'Success', 'LogIn Success', '1720276980', 1, NULL, NULL, NULL),
(5514, 'Success', 'LogIn Success', '1721380702', 1, NULL, NULL, NULL),
(5515, 'Success', 'LogIn Success', '1723132819', 1, NULL, NULL, NULL),
(5516, 'Success', 'LogIn Success', '1723177111', 1, NULL, NULL, NULL),
(5517, 'Success', 'LogIn Success', '1723177494', 1, NULL, NULL, NULL),
(5518, 'Success', 'LogIn Success', '1723198175', 1, NULL, NULL, NULL),
(5519, 'Success', 'LogIn Success', '1723198195', 1, NULL, NULL, NULL),
(5520, 'Success', 'LogIn Success', '1723199029', 1, NULL, NULL, NULL),
(5521, 'Success', 'LogIn Success', '1723206205', 1, NULL, NULL, NULL),
(5522, 'Success', 'LogIn Success', '1723206240', 1, NULL, NULL, NULL),
(5523, 'Success', 'LogIn Success', '1723263134', 1, NULL, NULL, NULL),
(5524, 'Success', 'LogIn Success', '1723295096', 1, NULL, NULL, NULL),
(5525, 'Success', 'LogIn Success', '1724301413', 1, NULL, NULL, NULL),
(5526, 'Success', 'LogIn Success', '1751001096', 5, NULL, NULL, NULL),
(5527, 'Success', 'LogIn Success', '1751005059', 5, NULL, NULL, NULL),
(5528, 'Success', 'LogIn Success', '1751006118', 9, NULL, NULL, NULL),
(5529, 'Success', 'LogIn Success', '1751261382', 5, NULL, NULL, NULL),
(5530, 'Success', 'LogIn Success', '1751342858', 5, NULL, NULL, NULL),
(5531, 'Success', 'LogIn Success', '1751429395', 5, NULL, NULL, NULL),
(5532, 'Success', 'LogIn Success', '1751447844', 5, NULL, NULL, NULL),
(5533, 'Success', 'LogIn Success', '1751515640', 5, NULL, NULL, NULL),
(5534, 'Success', 'LogIn Success', '1751602145', 5, NULL, NULL, NULL),
(5535, 'Success', 'LogIn Success', '1751688626', 5, NULL, NULL, NULL),
(5536, 'Success', 'LogIn Success', '1751861734', 5, NULL, NULL, NULL),
(5537, 'Success', 'LogIn Success', '1751947628', 5, NULL, NULL, NULL),
(5538, 'Success', 'LogIn Success', '1752034009', 5, NULL, NULL, NULL),
(5539, 'Success', 'LogIn Success', '1752235130', 5, NULL, NULL, NULL),
(5540, 'Success', 'LogIn Success', '1752235375', 5, NULL, NULL, NULL),
(5541, 'Success', 'LogIn Success', '1752235831', 5, NULL, NULL, NULL),
(5542, 'Success', 'LogIn Success', '1752236090', 5, NULL, NULL, NULL),
(5543, 'Success', 'LogIn Success', '1752237334', 5, NULL, NULL, NULL),
(5544, 'Success', 'LogIn Success', '1752296610', 5, NULL, NULL, NULL),
(5545, 'Success', 'LogIn Success', '1752297219', 5, NULL, NULL, NULL),
(5546, 'Success', 'LogIn Success', '1752297658', 5, NULL, NULL, NULL),
(5547, 'success', 'category Updated Successfully..', '1752304879', 5, '2025-07-12', '1752304879', 'active'),
(5548, 'error', 'category Deleted Successfully..', '1752304894', 5, '2025-07-12', '1752304894', 'active'),
(5549, 'Success', 'LogIn Success', '1752309608', 5, NULL, NULL, NULL),
(5550, 'success', 'Exchange Policy Added Successfully..', '1752310903', 5, '2025-07-12', '1752310903', 'active'),
(5551, 'success', 'Exchange Policy Added Successfully..', '1752311003', 5, '2025-07-12', '1752311003', 'active'),
(5552, 'success', 'Exchange Policy Added Successfully..', '1752311012', 5, '2025-07-12', '1752311012', 'active'),
(5553, 'success', 'Exchange Policy Added Successfully..', '1752311022', 5, '2025-07-12', '1752311022', 'active'),
(5554, 'success', 'Successfully Updated Images', '1752312935', 5, '2025-07-12', '1752312935', 'active'),
(5555, 'success', 'Successfully Updated Images', '1752312950', 5, '2025-07-12', '1752312950', 'active'),
(5556, 'success', 'Successfully Updated Images', '1752313016', 5, '2025-07-12', '1752313016', 'active'),
(5557, 'success', 'Successfully Updated Images', '1752313060', 5, '2025-07-12', '1752313060', 'active'),
(5558, 'success', 'Successfully Updated Images', '1752313422', 5, '2025-07-12', '1752313422', 'active'),
(5559, 'success', 'Exchange Policy Updated Successfully..', '1752313437', 5, '2025-07-12', '1752313437', 'active'),
(5560, 'success', 'Exchange Policy Updated Successfully..', '1752313443', 5, '2025-07-12', '1752313443', 'active'),
(5561, 'success', 'Exchange Policy Updated Successfully..', '1752313448', 5, '2025-07-12', '1752313448', 'active'),
(5562, 'error', 'Exchange Policy Deleted Successfully..', '1752313490', 5, '2025-07-12', '1752313490', 'active'),
(5563, 'success', 'Buyback Added Successfully..', '1752313929', 5, '2025-07-12', '1752313929', 'active'),
(5564, 'success', 'Buyback Added Successfully..', '1752313943', 5, '2025-07-12', '1752313943', 'active'),
(5565, 'success', 'Product Group Updated Successfully..', '1752313958', 5, '2025-07-12', '1752313958', 'active'),
(5566, 'success', 'Buyback Updated Successfully..', '1752314076', 5, '2025-07-12', '1752314076', 'active'),
(5567, 'success', 'Buyback Updated Successfully..', '1752314081', 5, '2025-07-12', '1752314081', 'active'),
(5568, 'error', 'Buyback Deleted Successfully..', '1752314103', 5, '2025-07-12', '1752314103', 'active'),
(5569, 'success', 'Gold Scheme Policy Added Successfully..', '1752314581', 5, '2025-07-12', '1752314581', 'active'),
(5570, 'success', 'Gold Scheme Policy Updated Successfully..', '1752314874', 5, '2025-07-12', '1752314874', 'active'),
(5571, 'success', 'Product Group Deactivated Successfully..', '1752314875', 5, '2025-07-12', '1752314875', 'active'),
(5572, 'success', 'Gold Scheme Policy Updated Successfully..', '1752314878', 5, '2025-07-12', '1752314878', 'active'),
(5573, 'success', 'Product Group Deactivated Successfully..', '1752314892', 5, '2025-07-12', '1752314892', 'active'),
(5574, 'error', 'Gold Scheme Policy Deleted Successfully..', '1752314901', 5, '2025-07-12', '1752314901', 'active'),
(5575, 'Success', 'LogIn Success', '1752314915', 5, NULL, NULL, NULL),
(5576, 'success', 'Shipping Policy Added Successfully..', '1752315116', 5, '2025-07-12', '1752315116', 'active'),
(5577, 'success', 'Successfully Add New Images', '1752315164', 5, '2025-07-12', '1752315164', 'active'),
(5578, 'success', 'Successfully Add New Images', '1752315171', 5, '2025-07-12', '1752315171', 'active'),
(5579, 'success', 'Shipping Policy Updated Successfully..', '1752315321', 5, '2025-07-12', '1752315321', 'active'),
(5580, 'success', 'Shipping Policy Updated Successfully..', '1752315327', 5, '2025-07-12', '1752315327', 'active'),
(5581, 'error', 'Shipping Policy Deleted Successfully..', '1752315346', 5, '2025-07-12', '1752315346', 'active'),
(5582, 'success', 'Cancellation Policy Added Successfully..', '1752315972', 5, '2025-07-12', '1752315972', 'active'),
(5583, 'success', 'Cancellation Policy Updated Successfully..', '1752316199', 5, '2025-07-12', '1752316199', 'active'),
(5584, 'success', 'Cancellation Policy Updated Successfully..', '1752316204', 5, '2025-07-12', '1752316204', 'active'),
(5585, 'error', 'Cancellation Policy Deleted Successfully..', '1752316234', 5, '2025-07-12', '1752316234', 'active'),
(5586, 'success', 'Successfully Updated Images', '1752316632', 5, '2025-07-12', '1752316632', 'active'),
(5587, 'success', 'Disclaimer Policy Added Successfully..', '1752316648', 5, '2025-07-12', '1752316648', 'active'),
(5588, 'success', 'Successfully Updated Images', '1752316655', 5, '2025-07-12', '1752316655', 'active'),
(5589, 'success', 'Disclaimer Policy Updated Successfully..', '1752318352', 5, '2025-07-12', '1752318352', 'active'),
(5590, 'success', 'Disclaimer Policy Updated Successfully..', '1752318356', 5, '2025-07-12', '1752318356', 'active'),
(5591, 'success', 'Disclaimer Policy Updated Successfully..', '1752318360', 5, '2025-07-12', '1752318360', 'active'),
(5592, 'error', 'Disclaimer Policy Deleted Successfully..', '1752318380', 5, '2025-07-12', '1752318380', 'active'),
(5593, 'success', 'Privacy Policy Added Successfully..', '1752318586', 5, '2025-07-12', '1752318586', 'active'),
(5594, 'success', 'Privacy Policy Updated Successfully..', '1752318708', 5, '2025-07-12', '1752318708', 'active'),
(5595, 'success', 'Privacy Policy Updated Successfully..', '1752318713', 5, '2025-07-12', '1752318713', 'active'),
(5596, 'error', 'Privacy Policy Deleted Successfully..', '1752318737', 5, '2025-07-12', '1752318737', 'active'),
(5597, 'success', 'Terms of Use Added Successfully..', '1752319077', 5, '2025-07-12', '1752319077', 'active'),
(5598, 'success', 'Terms of Use Updated Successfully..', '1752319168', 5, '2025-07-12', '1752319168', 'active'),
(5599, 'success', 'Terms of Use Updated Successfully..', '1752319172', 5, '2025-07-12', '1752319172', 'active'),
(5600, 'error', 'Terms of Use Deleted Successfully..', '1752319193', 5, '2025-07-12', '1752319193', 'active'),
(5601, 'success', 'Successfully Add New Images', '1752319712', 5, '2025-07-12', '1752319712', 'active'),
(5602, 'success', 'Successfully Update Information', '1752319730', 5, '2025-07-12', '1752319730', 'active'),
(5603, 'success', 'Successfully Add New Images', '1752320491', 5, '2025-07-12', '1752320491', 'active'),
(5604, 'success', 'Successfully Updated Images', '1752320620', 5, '2025-07-12', '1752320620', 'active'),
(5605, 'success', 'Successfully Update Page Name ...', '1752320811', 5, '2025-07-12', '1752320811', 'active'),
(5606, 'success', 'Successfully Update Page Name ...', '1752320970', 5, '2025-07-12', '1752320970', 'active'),
(5607, 'success', 'Successfully Deleted Page Detail...', '1752320981', 5, '2025-07-12', '1752320981', 'active'),
(5608, 'success', 'Successfully Update Page Name ...', '1752320996', 5, '2025-07-12', '1752320996', 'active'),
(5609, 'success', 'Successfully Updated Images', '1752321180', 5, '2025-07-12', '1752321180', 'active'),
(5610, 'success', 'Successfully Update Billing Details...', '1752321185', 5, '2025-07-12', '1752321185', 'active'),
(5611, 'success', 'category Updated Successfully..', '1752321461', 5, '2025-07-12', '1752321461', 'active'),
(5612, 'success', 'New category Added Successfully..', '1752321528', 5, '2025-07-12', '1752321528', 'active'),
(5613, 'error', 'category Deleted Successfully..', '1752321536', 5, '2025-07-12', '1752321536', 'active'),
(5614, 'success', 'Todays Gold Rate Added Successfully..', '1752323310', 5, '2025-07-12', '1752323310', 'active'),
(5615, 'success', 'Todays Silver Rate Added Successfully..', '1752323336', 5, '2025-07-12', '1752323336', 'active'),
(5616, 'success', 'Todays diamond Rate Added Successfully..', '1752323352', 5, '2025-07-12', '1752323352', 'active'),
(5617, 'success', 'Todays diamond Rate Updated Successfully..', '1752323546', 5, '2025-07-12', '1752323546', 'active'),
(5618, 'success', 'Todays Silver Rate Updated Successfully..', '1752323586', 5, '2025-07-12', '1752323586', 'active'),
(5619, 'success', 'Todays Gold Rate Updated Successfully..', '1752323626', 5, '2025-07-12', '1752323626', 'active'),
(5620, 'Success', 'LogIn Success', '1752518342', 5, NULL, NULL, NULL),
(5621, 'success', 'New Gold product Add Successfully...', '1752560278', 5, '2025-07-15', '1752560278', 'active'),
(5622, 'success', 'Gold product Filter Add Successfully...', '1752560918', 5, '2025-07-15', '1752560918', 'active'),
(5623, 'success', 'Todays Gold Rate Added Successfully..', '1752561418', 5, '2025-07-15', '1752561418', 'active'),
(5624, 'success', 'New Gold product Add Successfully...', '1752561560', 5, '2025-07-15', '1752561560', 'active'),
(5625, 'error', 'Gold product Already Exist...', '1752562618', 5, '2025-07-15', '1752562618', 'active'),
(5626, 'error', 'Gold product Already Exist...', '1752562792', 5, '2025-07-15', '1752562792', 'active'),
(5627, 'Success', 'LogIn Success', '1752726455', 5, NULL, NULL, NULL),
(5628, 'success', 'Todays Gold Rate Added Successfully..', '1752726542', 5, '2025-07-17', '1752726542', 'active'),
(5629, 'success', 'Todays Silver Rate Added Successfully..', '1752726549', 5, '2025-07-17', '1752726549', 'active'),
(5630, 'Success', 'LogIn Success', '1752813596', 5, NULL, NULL, NULL),
(5631, 'success', 'Todays Gold Rate Added Successfully..', '1752813622', 5, '2025-07-18', '1752813622', 'active'),
(5632, 'success', 'Todays Silver Rate Added Successfully..', '1752813637', 5, '2025-07-18', '1752813637', 'active'),
(5633, 'Success', 'LogIn Success', '1752905835', 5, NULL, NULL, NULL),
(5634, 'success', 'Todays Silver Rate Added Successfully..', '1752905849', 5, '2025-07-19', '1752905849', 'active'),
(5635, 'Success', 'LogIn Success', '1752914123', 5, NULL, NULL, NULL),
(5636, 'Success', 'LogIn Success', '1753330085', 5, NULL, NULL, NULL),
(5637, 'Success', 'LogIn Success', '1753340727', 5, NULL, NULL, NULL),
(5638, 'Success', 'LogIn Success', '1753354990', 5, NULL, NULL, NULL),
(5639, 'Success', 'LogIn Success', '1753355172', 5, NULL, NULL, NULL),
(5640, 'Success', 'LogIn Success', '1753416617', 5, NULL, NULL, NULL),
(5641, 'error', 'Product Group Deleted Successfully..', '1753427344', 5, '2025-07-25', '1753427344', 'active'),
(5642, 'error', 'Product Group Deleted Successfully..', '1753427349', 5, '2025-07-25', '1753427349', 'active'),
(5643, 'Success', 'LogIn Success', '1753435002', 5, NULL, NULL, NULL),
(5644, 'Success', 'LogIn Success', '1753436151', 5, NULL, NULL, NULL),
(5645, 'success', 'Product Group Updated Successfully..', '1753437083', 5, '2025-07-25', '1753437083', 'active'),
(5646, 'Success', 'LogIn Success', '1753438075', 5, NULL, NULL, NULL),
(5647, 'Success', 'LogIn Success', '1753438189', 5, NULL, NULL, NULL),
(5648, 'success', 'Todays Gold Rate Added Successfully..', '1753439726', 5, '2025-07-25', '1753439726', 'active'),
(5649, 'success', 'Todays Silver Rate Added Successfully..', '1753439738', 5, '2025-07-25', '1753439738', 'active'),
(5650, 'Success', 'LogIn Success', '1753444915', 5, NULL, NULL, NULL),
(5651, 'success', 'GST Add Successfully...', '1753445421', 5, '2025-07-25', '1753445421', 'active'),
(5652, 'success', 'GST Updated Successfully...', '1753445430', 5, '2025-07-25', '1753445430', 'active'),
(5653, 'error', 'GST Deleted Successfully...', '1753445433', 5, '2025-07-25', '1753445433', 'active'),
(5654, 'success', 'Diamond Color Add Successfully...', '1753445472', 5, '2025-07-25', '1753445472', 'active'),
(5655, 'success', 'Diamond Color Updated Successfully...', '1753445488', 5, '2025-07-25', '1753445488', 'active'),
(5656, 'error', 'Diamond Color Deleted Successfully...', '1753445493', 5, '2025-07-25', '1753445493', 'active'),
(5657, 'success', 'Diamond Clarity Add Successfully...', '1753445509', 5, '2025-07-25', '1753445509', 'active'),
(5658, 'success', 'Diamond Clarity Updated Successfully...', '1753445517', 5, '2025-07-25', '1753445517', 'active'),
(5659, 'success', 'Diamond Clarity Deleted Successfully...', '1753445521', 5, '2025-07-25', '1753445521', 'active'),
(5660, 'error', 'This Stone Type Allready Exists...', '1753445529', 5, '2025-07-25', '1753445529', 'active'),
(5661, 'success', 'Stone Type Add Successfully...', '1753445535', 5, '2025-07-25', '1753445535', 'active'),
(5662, 'success', 'Stone Type Updated Successfully...', '1753445540', 5, '2025-07-25', '1753445540', 'active'),
(5663, 'error', 'Stone Type Deleted Successfully...', '1753445543', 5, '2025-07-25', '1753445543', 'active'),
(5664, 'success', 'Stone Shape Add Successfully...', '1753445548', 5, '2025-07-25', '1753445548', 'active'),
(5665, 'success', 'Stone Shape Deleted Successfully...', '1753445552', 5, '2025-07-25', '1753445552', 'active'),
(5666, 'success', 'Spcial Days Save Successfully ...', '1753445568', 5, '2025-07-25', '1753445568', 'active'),
(5667, 'success', 'Spcial Days Updated Successfully ...', '1753445580', 5, '2025-07-25', '1753445580', 'active'),
(5668, 'success', 'Spcial Days Deleted Successfully ...', '1753445585', 5, '2025-07-25', '1753445585', 'active'),
(5669, 'success', 'Delivery Charges Added Successfully ...', '1753445593', 5, '2025-07-25', '1753445593', 'active'),
(5670, 'success', 'Delivery Charges Updated Successfully ...', '1753445600', 5, '2025-07-25', '1753445600', 'active'),
(5671, 'error', 'Delivery Charges Deleted Successfully ...', '1753445604', 5, '2025-07-25', '1753445604', 'active'),
(5672, 'success', 'Todays Gold Rate Added Successfully..', '1753445625', 5, '2025-07-25', '1753445625', 'active'),
(5673, 'success', 'Todays Gold Rate Updated Successfully..', '1753445635', 5, '2025-07-25', '1753445635', 'active'),
(5674, 'success', 'Todays Gold Rate Deleted Successfully..', '1753445641', 5, '2025-07-25', '1753445641', 'active'),
(5675, 'success', 'Todays Gold Rate Deleted Successfully..', '1753445645', 5, '2025-07-25', '1753445645', 'active'),
(5676, 'success', 'Todays Silver Rate Added Successfully..', '1753445672', 5, '2025-07-25', '1753445672', 'active'),
(5677, 'error', 'Todays Silver Rate Deleted Successfully..', '1753445676', 5, '2025-07-25', '1753445676', 'active'),
(5678, 'error', 'Gold product Already Exist...', '1753445815', 5, '2025-07-25', '1753445815', 'active'),
(5679, 'error', 'Gold product Already Exist...', '1753445860', 5, '2025-07-25', '1753445860', 'active'),
(5680, 'success', 'Admin Updated Successfully..', '1753446584', 5, '2025-07-25', '1753446584', 'active'),
(5681, 'success', 'Successfully In Progress Order ...', '1753446913', 5, '2025-07-25', '1753446913', 'active'),
(5682, 'success', 'Successfully In Confirm Order ...', '1753446926', 5, '2025-07-25', '1753446926', 'active'),
(5683, 'Success', 'LogIn Success', '1753502721', 5, NULL, NULL, NULL),
(5684, 'Success', 'LogIn Success', '1753504393', 5, NULL, NULL, NULL),
(5685, 'success', 'Thumbnail Image Updated Successfully ...', '1753504450', 5, '2025-07-26', '1753504450', 'active'),
(5686, 'success', 'Order Charges Updated Successfully...', '1753504511', 5, '2025-07-26', '1753504511', 'active'),
(5687, 'Success', 'LogIn Success', '1753512830', 5, NULL, NULL, NULL),
(5688, 'success', 'Slider Images Added Successfully..', '1753513123', 5, '2025-07-26', '1753513123', 'active'),
(5689, 'error', 'Slider Image Deleted Successfully..', '1753513256', 5, '2025-07-26', '1753513256', 'active'),
(5690, 'success', 'Slider Images Updated Successfully..', '1753513706', 5, '2025-07-26', '1753513706', 'active'),
(5691, 'success', 'Slider Images Updated Successfully..', '1753513722', 5, '2025-07-26', '1753513722', 'active'),
(5692, 'success', 'Slider Images Updated Successfully..', '1753515315', 5, '2025-07-26', '1753515315', 'active'),
(5693, 'success', 'Slider Images Updated Successfully..', '1753515326', 5, '2025-07-26', '1753515326', 'active'),
(5694, 'success', 'Product Group Updated Successfully..', '1753529713', 5, '2025-07-26', '1753529713', 'active'),
(5695, 'success', 'Product Group Updated Successfully..', '1753530139', 5, '2025-07-26', '1753530139', 'active'),
(5696, 'success', 'Product Group Updated Successfully..', '1753530182', 5, '2025-07-26', '1753530182', 'active'),
(5697, 'success', 'Product Group Updated Successfully..', '1753530223', 5, '2025-07-26', '1753530223', 'active'),
(5698, 'success', 'Product Group Updated Successfully..', '1753530414', 5, '2025-07-26', '1753530414', 'active'),
(5699, 'success', 'Product Group Updated Successfully..', '1753530811', 5, '2025-07-26', '1753530811', 'active'),
(5700, 'Success', 'LogIn Success', '1753530934', 5, NULL, NULL, NULL),
(5701, 'success', 'Product Group Updated Successfully..', '1753530938', 5, '2025-07-26', '1753530938', 'active'),
(5702, 'Success', 'LogIn Success', '1753532123', 5, NULL, NULL, NULL),
(5703, 'success', 'testimonial Updated Success', '1753532774', 5, '2025-07-26', '1753532774', 'active'),
(5704, 'success', 'testimonial Updated Success', '1753532796', 5, '2025-07-26', '1753532796', 'active'),
(5705, 'success', 'testimonial Updated Success', '1753532851', 5, '2025-07-26', '1753532851', 'active'),
(5706, 'Success', 'LogIn Success', '1753670947', 5, NULL, NULL, NULL),
(5707, 'Success', 'LogIn Success', '1753671832', 5, NULL, NULL, NULL),
(5708, 'success', 'Order Successfully Shifted In Processing...', '1753676654', 5, '2025-07-28', '1753676654', 'active'),
(5709, 'success', 'Order Successfully Shifted In Processing...', '1753678507', 5, '2025-07-28', '1753678507', 'active'),
(5710, 'Success', 'LogIn Success', '1753679092', 5, NULL, NULL, NULL),
(5711, 'success', 'Order Successfully Shifted In Dispatched...', '1753679408', 5, '2025-07-28', '1753679408', 'active'),
(5712, 'success', 'Order Successfully Shifted In Dispatched...', '1753679498', 5, '2025-07-28', '1753679498', 'active'),
(5713, 'success', 'Order Successfully Shifted In Processing...', '1753679578', 5, '2025-07-28', '1753679578', 'active'),
(5714, 'success', 'New category Added Successfully..', '1753679597', 5, '2025-07-28', '1753679597', 'active'),
(5715, 'success', 'Order Successfully Shifted In Dispatched...', '1753679601', 5, '2025-07-28', '1753679601', 'active'),
(5716, 'success', 'category Updated Successfully..', '1753679607', 5, '2025-07-28', '1753679607', 'active'),
(5717, 'error', 'category Deleted Successfully..', '1753679612', 5, '2025-07-28', '1753679612', 'active'),
(5718, 'success', 'New Product Group Added Successfully..', '1753679632', 5, '2025-07-28', '1753679632', 'active'),
(5719, 'success', 'Product Group Deactivated Successfully..', '1753679638', 5, '2025-07-28', '1753679638', 'active'),
(5720, 'success', 'Product Group Deactivated Successfully..', '1753679646', 5, '2025-07-28', '1753679646', 'active'),
(5721, 'success', 'Product Group Updated Successfully..', '1753679653', 5, '2025-07-28', '1753679653', 'active'),
(5722, 'error', 'Product Group Deleted Successfully..', '1753679658', 5, '2025-07-28', '1753679658', 'active'),
(5723, 'success', 'New Filter Title Added Successfully..', '1753679674', 5, '2025-07-28', '1753679674', 'active'),
(5724, 'error', 'Filter Title Deleted Successfully..', '1753679695', 5, '2025-07-28', '1753679695', 'active'),
(5725, 'success', 'Filter name Added Successfully..', '1753679729', 5, '2025-07-28', '1753679729', 'active'),
(5726, 'error', 'Filter name Deleted Successfully..', '1753679736', 5, '2025-07-28', '1753679736', 'active'),
(5727, 'success', 'Todays Gold Rate Added Successfully..', '1753679791', 5, '2025-07-28', '1753679791', 'active'),
(5728, 'success', 'New Gold product Add Successfully...', '1753679839', 5, '2025-07-28', '1753679839', 'active'),
(5729, 'success', 'Gold product Filter Add Successfully...', '1753679851', 5, '2025-07-28', '1753679851', 'active'),
(5730, 'success', 'Order Successfully Shifted In Delivered...', '1753679950', 5, '2025-07-28', '1753679950', 'active'),
(5731, 'success', 'Order Successfully Shifted In Processing...', '1753680002', 5, '2025-07-28', '1753680002', 'active'),
(5732, 'success', 'Order Successfully Shifted In Dispatched...', '1753680025', 5, '2025-07-28', '1753680025', 'active'),
(5733, 'success', 'Order Successfully Shifted In Delivered...', '1753680076', 5, '2025-07-28', '1753680076', 'active'),
(5734, 'success', 'Failed To Shift Order In Processing...', '1753682572', 5, '2025-07-28', '1753682572', 'active'),
(5735, 'success', 'Failed To Shift Order In Processing...', '1753682582', 5, '2025-07-28', '1753682582', 'active'),
(5736, 'success', 'Order Successfully Shifted In Processing...', '1753682718', 5, '2025-07-28', '1753682718', 'active'),
(5737, 'success', 'Order Rejected...', '1753682893', 5, '2025-07-28', '1753682893', 'active'),
(5738, 'success', 'Order Charges Add Successfully...', '1753682984', 5, '2025-07-28', '1753682984', 'active'),
(5739, 'success', 'Order Charges Updated Successfully...', '1753682993', 5, '2025-07-28', '1753682993', 'active'),
(5740, 'success', 'Order Charges Deleted Successfully...', '1753682997', 5, '2025-07-28', '1753682997', 'active'),
(5741, 'success', 'Successfully Added Policies Page...', '1753683007', 5, '2025-07-28', '1753683007', 'active'),
(5742, 'error', 'Successfully Deleted Page Name ...', '1753683024', 5, '2025-07-28', '1753683024', 'active'),
(5743, 'success', 'New Gold product Add Successfully...', '1753683412', 5, '2025-07-28', '1753683412', 'active'),
(5744, 'success', 'Gold product Filter Add Successfully...', '1753683419', 5, '2025-07-28', '1753683419', 'active'),
(5745, 'success', 'New Silver product Add Successfully...', '1753684115', 5, '2025-07-28', '1753684115', 'active'),
(5746, 'error', 'Slider Image Deleted Successfully..', '1753684291', 5, '2025-07-28', '1753684291', 'active'),
(5747, 'success', 'Order Rejected...', '1753684713', 5, '2025-07-28', '1753684713', 'active'),
(5748, 'Success', 'LogIn Success', '1753685424', 5, NULL, NULL, NULL),
(5749, 'success', 'Successfully Add New Images', '1753685911', 5, '2025-07-28', '1753685911', 'active'),
(5750, 'success', 'Successfully Updated Images', '1753685919', 5, '2025-07-28', '1753685919', 'active'),
(5751, 'success', 'Successfully Update Information', '1753686621', 5, '2025-07-28', '1753686621', 'active'),
(5752, 'success', 'Successfully Update Information', '1753686637', 5, '2025-07-28', '1753686637', 'active'),
(5753, 'success', 'Successfully Update Information', '1753686647', 5, '2025-07-28', '1753686647', 'active'),
(5754, 'success', 'Successfully Update Billing Details...', '1753686669', 5, '2025-07-28', '1753686669', 'active'),
(5755, 'success', 'Successfully In Progress Order ...', '1753686948', 5, '2025-07-28', '1753686948', 'active'),
(5756, 'success', 'Successfully In Confirm Order ...', '1753686957', 5, '2025-07-28', '1753686957', 'active'),
(5757, 'success', 'Successfully Cancel Custom Jwellery ...', '1753687849', 5, '2025-07-28', '1753687849', 'active'),
(5758, 'success', 'Order Successfully Shifted In Processing...', '1753688262', 5, '2025-07-28', '1753688262', 'active'),
(5759, 'success', 'Order Successfully Shifted In Dispatched...', '1753688473', 5, '2025-07-28', '1753688473', 'active'),
(5760, 'success', 'Order Successfully Shifted In Delivered...', '1753688562', 5, '2025-07-28', '1753688562', 'active'),
(5761, 'success', 'Order Successfully Shifted In Processing...', '1753688784', 5, '2025-07-28', '1753688784', 'active'),
(5762, 'success', 'Order Rejected...', '1753688795', 5, '2025-07-28', '1753688795', 'active'),
(5763, 'success', 'History Details Updated Successfully...', '1753692071', 5, '2025-07-28', '1753692071', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `terms_of_use_tbl`
--

CREATE TABLE `terms_of_use_tbl` (
  `terms_of_use_tbl_id` int(11) NOT NULL,
  `terms_of_use_name` text DEFAULT NULL,
  `terms_of_use_details` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `terms_of_use_tbl`
--

INSERT INTO `terms_of_use_tbl` (`terms_of_use_tbl_id`, `terms_of_use_name`, `terms_of_use_details`, `entry_by`, `entry_time`, `entry_date`, `status`) VALUES
(1, 'Diamond Jewellery ', '90% of invoice value\r\n', '5', '1752319077', '2025-07-12', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `thumbnail_tbl`
--

CREATE TABLE `thumbnail_tbl` (
  `thumbnail_tbl_id` int(11) NOT NULL,
  `thumbnail_image` text DEFAULT NULL,
  `thumbnail_video` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thumbnail_tbl`
--

INSERT INTO `thumbnail_tbl` (`thumbnail_tbl_id`, `thumbnail_image`, `thumbnail_video`, `entry_time`, `entry_date`, `status`) VALUES
(1, '17535044503486Trending Designs in Gold for Your Wedding Jewellery Ranging from Mangtika to Payal_Blog 1.jpg', '17471274812672Untitled.mp4', '1753504450', '2025-07-26', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_billing_details`
--

CREATE TABLE `user_billing_details` (
  `user_billing_details_id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone_number` text DEFAULT NULL,
  `addr_street` text DEFAULT NULL,
  `addr_area` text DEFAULT NULL,
  `addr_village_city` text DEFAULT NULL,
  `addr_taluk` text DEFAULT NULL,
  `addr_dist` text DEFAULT NULL,
  `addr_state` text DEFAULT NULL,
  `addr_pin_code` text DEFAULT NULL,
  `alternate_mobile_no` text DEFAULT NULL,
  `customer_pan_no` text NOT NULL,
  `is_gift` text NOT NULL,
  `order_dispatch_status` text NOT NULL,
  `status` text DEFAULT NULL,
  `date_time` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `pay_amount` text DEFAULT NULL,
  `process_date` text NOT NULL,
  `dispatch_date` text NOT NULL,
  `delivered_date` text NOT NULL,
  `cancel_date` text NOT NULL,
  `pay_status` text DEFAULT NULL,
  `paid_amount` text NOT NULL,
  `payment_mode` text NOT NULL,
  `pay_failed_date_time` text NOT NULL,
  `system_bill_number` text NOT NULL,
  `courier_company` text NOT NULL,
  `tracking_id` text NOT NULL,
  `customer_gst_no` text NOT NULL,
  `pay_transaction_id` text DEFAULT NULL,
  `pay_date_time` text DEFAULT NULL,
  `order_id` text DEFAULT NULL,
  `orderId` text NOT NULL,
  `razorpay_signature` text NOT NULL,
  `bin_country` text NOT NULL,
  `billing_name` text NOT NULL,
  `amount` text NOT NULL,
  `bank_ref_no` text NOT NULL,
  `order_status` text NOT NULL,
  `failure_message` text NOT NULL,
  `currency` text NOT NULL,
  `card_name` text NOT NULL,
  `status_code` text NOT NULL,
  `status_message` text NOT NULL,
  `billing_address` text NOT NULL,
  `billing_city` text NOT NULL,
  `billing_state` text NOT NULL,
  `billing_zip` text NOT NULL,
  `billing_country` text NOT NULL,
  `billing_tel` text NOT NULL,
  `billing_email` text NOT NULL,
  `delivery_name` text NOT NULL,
  `delivery_address` text NOT NULL,
  `delivery_city` text NOT NULL,
  `offer_type` text NOT NULL,
  `delivery_state` text NOT NULL,
  `delivery_zip` text NOT NULL,
  `delivery_country` text NOT NULL,
  `delivery_tel` text NOT NULL,
  `merchant_param1` text NOT NULL,
  `merchant_param2` text NOT NULL,
  `merchant_param3` text NOT NULL,
  `merchant_param4` text NOT NULL,
  `merchant_param5` text NOT NULL,
  `vault` text NOT NULL,
  `offer_code` text NOT NULL,
  `discount_value` text NOT NULL,
  `mer_amount` text NOT NULL,
  `eci_value` text NOT NULL,
  `retry` text NOT NULL,
  `response_code` text NOT NULL,
  `billing_notes` text NOT NULL,
  `trans_date` text NOT NULL,
  `cca_payment_mode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_billing_details`
--

INSERT INTO `user_billing_details` (`user_billing_details_id`, `name`, `email`, `phone_number`, `addr_street`, `addr_area`, `addr_village_city`, `addr_taluk`, `addr_dist`, `addr_state`, `addr_pin_code`, `alternate_mobile_no`, `customer_pan_no`, `is_gift`, `order_dispatch_status`, `status`, `date_time`, `user_id`, `pay_amount`, `process_date`, `dispatch_date`, `delivered_date`, `cancel_date`, `pay_status`, `paid_amount`, `payment_mode`, `pay_failed_date_time`, `system_bill_number`, `courier_company`, `tracking_id`, `customer_gst_no`, `pay_transaction_id`, `pay_date_time`, `order_id`, `orderId`, `razorpay_signature`, `bin_country`, `billing_name`, `amount`, `bank_ref_no`, `order_status`, `failure_message`, `currency`, `card_name`, `status_code`, `status_message`, `billing_address`, `billing_city`, `billing_state`, `billing_zip`, `billing_country`, `billing_tel`, `billing_email`, `delivery_name`, `delivery_address`, `delivery_city`, `offer_type`, `delivery_state`, `delivery_zip`, `delivery_country`, `delivery_tel`, `merchant_param1`, `merchant_param2`, `merchant_param3`, `merchant_param4`, `merchant_param5`, `vault`, `offer_code`, `discount_value`, `mer_amount`, `eci_value`, `retry`, `response_code`, `billing_notes`, `trans_date`, `cca_payment_mode`) VALUES
(1, 'shripad  kulkarni', 'socialmedia.beyondbound@gmail.com', '9309553291', '', '', 'ahmednagar', 'nagar', 'ahmednagar', 'maharashtra ', '414001', '', '', '', 'ONTIME', 'rejected', '1740561011', '5', '1521.485', '', '', '', '1744038372', 'pending', '0', 'cod', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Gunjan Shingavi', 'gunjan.shingavi@gmail.com', '9850500025', 'Shingavi jewellers Pvt ltd', '', 'Professor chowk,savedi', 'nagar', 'ahmednagar', 'Opp akashwani kendra', '414003', '', '', '', 'ONTIME', 'rejected', '1741954671', '8', '68210.03', '', '', '', '1744038377', 'pending', '0', 'cod', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'laukik shingavi', 'laukik_shingavi@live.com', '9850100025', 'Maniknagar, Nagar Pune Road', '', 'Ahmednagar', 'Ahmednagar ', 'Ahmednagar ', 'Maharashtra', '414001', '', '', '', 'ONTIME', 'rejected', '1741954700', '6', '11646.11', '', '', '', '1744038386', 'pending', '0', 'cod', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'Jadhav Vikas', 'vikas@gmail.com', '9766232951', 'Nagar', NULL, 'Ahilynagar', NULL, NULL, 'Maharashtra', '414001', NULL, '', '', '', NULL, NULL, '28', NULL, '', '', '', '', NULL, '', '', '', '', '', '', '', NULL, NULL, '13', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 'Vaibhav', 'vaibhav@gmail.com', '7666806174', 'Nagar', NULL, 'Ahilyanagar', NULL, NULL, 'Maharashtra', '414001', NULL, '', '', '', NULL, NULL, '30', NULL, '', '', '', '', NULL, '', '', '', '', '', '', '', NULL, NULL, '13', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, 'Nilesh Borkar', 'nilbor407@gmail.com', '9503077104', 'Near Kamla Ayurvedic Hospital Back Side Of, New Arts College', 'Nagar', 'AHMADNAGAR', NULL, 'Nagar', 'MAHARASHTRA', '414001', '', '', '', 'ONTIME', 'rejected', '1745561289', '11', '11004.63', '', '', '', '1748238589', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(31, 'laukik shingavi', 'laukik_shingavi@live.com', '9850100025', 'Maniknagar, Nagar Pune Road', NULL, 'Ahmednagar', NULL, NULL, 'Maharashtra', '414001', NULL, '', '', '', NULL, NULL, '6', NULL, '', '', '', '', NULL, '', '', '', '', '', '', '', NULL, NULL, '98', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'Rushil Gujarathi', 'fotofast07@gmail.com', '8855041501', 'Ahilyanagar', NULL, 'Ahilyanagar', NULL, NULL, 'Maharashtra', '414001', NULL, '', '', '', NULL, NULL, '32', NULL, '', '', '', '', NULL, '', '', '', '', '', '', '', NULL, NULL, '63', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'Manoj More', 'moremanoj012@gmail.com', '7040487891', 'Balikashram', NULL, 'Ahilyanagar', NULL, NULL, 'Maharashtra', '414001', NULL, '', '', '', NULL, NULL, '7', NULL, '', '', '', '', NULL, '', '', '', '', '', '', '', NULL, NULL, '64', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'Rushil Gujarathi', 'fotofast07@gmail.com', '88550410501', 'Icon Public School ', 'Station Road ', 'Ahilyanagar', NULL, 'Ahilyanagar', 'Maharashtra', '414001', '', '', '', 'ONTIME', 'pending', '1746279745', '36', '2758.77', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414003', '', '', '', 'ONTIME', 'pending', '1746511801', '35', '74402.545', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414003', '', '', '', 'ONTIME', 'rejected', '1746514179', '35', '7610.47', '', '', '', '1746955030', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(37, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'FLAT NO 102 Name of Premises/ Building GAGANGIRI DREAMLAND WAKAD Block -  KASPATE VASTI City PUNE CITY', 'Savedi', 'Nagar', NULL, 'Ahmednagar', 'Maharashtra', '414001', '', '', '', 'ONTIME', 'rejected', '1746516823', '35', '1643.285', '', '', '', '1746955023', 'pending', '0', 'online', '', '', '', '', '', '', '1746529021', 'order_2437612wiG8pPUHbw256eIlaavyeial11', 'order_2437612wiG8pPUHbw256eIlaavyeial11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(38, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414003', '', '', '', 'ONTIME', 'rejected', '1746530298', '35', '1674.75', '', '', '', '1746955017', 'pending', '0', 'online', '1746594502', '', '', '', '', '', '', '', 'order_2437612wihSJvaB8FmrwXhA0v6Qysaxdi', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(39, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414003', '', '', '', 'ONTIME', 'rejected', '1746530689', '35', '912.485', '', '', '', '1746955014', 'pending', '0', 'online', '', '', '', '', '', '', '1746530751', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(40, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414003', '', '', '', 'ONTIME', 'rejected', '1746530810', '35', '1013.985', '', '', '', '1746955007', 'pending', '0', 'online', '', '', '', '', '', '', '1746530812', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(41, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'FLAT NO 102 Name of Premises/ Building GAGANGIRI DREAMLAND WAKAD Block -  KASPATE VASTI City PUNE CITY', 'Savedi', 'Nagar', NULL, 'Ahmednagar', 'Maharashtra', '414001', '', '', '', 'ONTIME', 'pending', '1746531783', '35', '7103.985', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414003', '', '', '', 'ONTIME', 'rejected', '1746533028', '35', '1139.845', '', '', '', '1748238562', 'paid', '1', 'online', '', '', '', '', '', '', '1746680556', 'order_2437612winmdnk1SJebWgd6WajNka7JMT', 'order_2437612winmdnk1SJebWgd6WajNka7JMT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(43, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'FLAT NO 102 Name of Premises/ Building GAGANGIRI DREAMLAND WAKAD Block -  KASPATE VASTI City PUNE CITY', 'Savedi', 'Nagar', NULL, 'Ahmednagar', 'Maharashtra', '414001', '', '', '', 'ONTIME', 'pending', '1746533640', '35', '7103.985', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(44, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'FLAT NO 102 Name of Premises/ Building GAGANGIRI DREAMLAND WAKAD Block -  KASPATE VASTI City PUNE CITY', 'Savedi', 'Nagar', NULL, 'Ahmednagar', 'Maharashtra', '414001', '', '', '', 'ONTIME', 'pending', '1746533716', '35', '5073.985', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(45, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414003', '', '', '', 'ONTIME', 'pending', '1746533934', '35', '7306.985', '', '', '', '', 'pending', '0', 'online', '1746594465', '', '', '', '', '', '', '', 'order_2437612wklzWvWiRo1L4evFhR5nYsaN3L', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(46, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414003', '', '', '', 'DELAYED', 'pending', '1746534044', '35', '1013.985', '', '', '', '', 'pending', '0', 'online', '1746679812', '', '', '', '', '', '', '', 'order_2437612wipP83HONvHLhPh4MBQPuZqlSs', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(47, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414003', '', '', '', 'DELAYED', 'user_cancel', '1746534459', '35', '2027.97', '', '', '', '1746535809', 'paid', '0', 'online', '', '', '', '', '', '', '1746534629', 'order_2437612wiptDxRg6LzwuPpNpBUOqjEzTX', 'order_2437612wiptDxRg6LzwuPpNpBUOqjEzTX', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(48, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414003', '', '', '', 'ONTIME', 'rejected', '1746534689', '35', '2536.485', '', '', '', '1748238580', 'pending', '0', 'online', '1746535092', '', '', '', '', '', '1746534707', 'order_2437612wiqM3IU5Oj8FHKGNMpmeYqwpgr', 'order_2437612wiqM3IU5Oj8FHKGNMpmeYqwpgr', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(49, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Goa', '414003', '', '', '', 'DELAYED', 'rejected', '1746535166', '35', '11009.705', '', '', '', '1747027483', 'pending', '0', 'online', '1746535179', '', '', '', '', '', '', '', 'order_2437612wirK44IB3s7f3NuZugPenkzU5R', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(50, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Goa', '414003', '', '', '', 'DELAYED', 'rejected', '1746594649', '35', '7103.985', '', '', '', '1747027480', 'pending', '0', 'cod', '', '', '', '', '', '', '', '', 'order_2437612wo63x1JqkANVMXSHZD848lL8sL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(51, ' Manoj More', 'moremanoj0123@gmail.com', '7040487891', 'balikashram road', 'balikashram road', 'Ahilyanagar', NULL, 'Ahilyanagar', 'Mahashtra', '414001', '', '', '', 'ONTIME', 'rejected', '1746681037', '7', '730.8', '', '', '', '1746955069', 'pending', '0', 'cod', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(52, 'Manoj More', 'moremanoj0123@gmail.com', '7040487891', 'Balikashra Road', 'Balikashra Road', 'A.Nagar', NULL, 'Maharashtra', 'Ahilyanagar', '414001', '', '', '', 'DELAYED', 'rejected', '1746681107', '7', '75298.79', '', '', '', '1746955001', 'pending', '0', 'online', '1746681155', '', '', '', '', '', '', '', 'order_2437612wnd86RJOdBHP9nQ43gafqU0wnW', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(53, 'Manoj More', 'moremanoj0123@gmail.com', '7040487891', 'Balikashra Road', 'Balikashra Road', 'A.Nagar', NULL, 'A.nagar', 'Maharashtra', '414001', '', '', '', 'ONTIME', 'delivered', '1746681312', '7', '1013.985', '', '1746688012', '1746688917', '', 'paid', '1', 'online', '', '', 'A2Z IT HUB', '78465321785421', '', '', '1746681352', '', 'order_2437612wndXn7PqRNW7qX2kk7b9EljV4e', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(54, ' Manoj', 'moremanoj0123@gmail.com', '7040487891', 'balikashram road', 'balikashram road', 'a.nagar', NULL, 'a.nagar', 'Maharashtra', '414001', '', '', '', 'DELAYED', 'rejected', '1746784061', '7', '75004.44', '', '', '', '1746954998', 'pending', '0', 'online', '', '', '', '', '', '', '', '', 'order_2437612wqzo1NywuQd0ajoXBzuaXTuFFR', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(55, ' Shripad', 'shripadsk16@gmail.com', '9309553291', 'sahakar bank colony', 'kedgaon', 'ahilyanagar', NULL, 'ahilyanagar', 'Maharashtra', '414005', '', '', '', 'ONTIME', 'rejected', '1747809306', '5', '730.8', '', '', '', '1748238576', 'pending', '0', 'online', '1747809328', '', '', '', '', '', '', '', 'order_2437612xOVrnKmIWVFpyclAOkQAGEO5Zf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, ' test', 'test@gmail.com', '8764745698', 'test', 'test', 'Mumbai', NULL, 'Thane', 'Maharashtra', '400002', '', '', '', 'ONTIME', 'rejected', '1747810630', '37', '9133.985', '', '', '', '1748238571', 'pending', '0', 'online', '', '', '', '', '', '', '', '', 'order_2437612xOYY8JwEF9I2J8EvNFkmjCb1oA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(57, ' ', 'test@gmail.com', '8764745698', 'test', 'test', 'Mumbai', NULL, 'Thane', 'Maharashtra', '400080', '', '', '', 'ONTIME', 'rejected', '1747810719', '37', '1013.985', '', '', '', '1748238569', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(58, ' test', 'test@gmail.com', '8764745698', 'test', 'test', 'Mumbai', NULL, 'Thane', 'Maharashtra', '400080', '', '', '', 'DELAYED', 'rejected', '1747810801', '37', '730.8', '', '', '', '1748238566', 'pending', '0', 'online', '', '', '', '', '', '', '', '', 'order_2437612xOYthI6AJgjCzZbIxziV4wDEob', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(59, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'FLAT NO 102 Name of Premises/ Building GAGANGIRI DREAMLAND WAKAD Block -  KASPATE VASTI City PUNE CITY', 'Savedi', 'Pune City', NULL, 'Pune City', 'MH', '411057', '', '', '', 'ONTIME', 'pending', '1749729142', '35', '2737.455', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', 'order_2437612yPHAKDmDMNvK7LlT9Tno1MIbJv', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(82, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'FLAT NO 102 Name of Premises/ Building GAGANGIRI DREAMLAND WAKAD Block -  KASPATE VASTI City PUNE CITY', 'Savedi', 'Nagar', NULL, 'Nagar', 'Maharashtra', '414001', '', '', '', 'ONTIME', 'pending', '1749731264', '35', '3650.955', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', 'order_2437612yPLT0gRyQaH6vbS7Le7Gefj1dc', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(83, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Goa', '414003', '', '', '', 'ONTIME', 'pending', '1749731453', '35', '2737.455', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', 'order_2437612yPLqpZ47zUSXDtok05m0UqtjDu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(84, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'FLAT NO 102 Name of Premises/ Building GAGANGIRI DREAMLAND WAKAD Block -  KASPATE VASTI City PUNE CITY', 'Savedi', 'Nagar', NULL, 'Nagar', 'Maharashtra', '414001', '', '', '', 'ONTIME', 'pending', '1749731623', '35', '6596.485', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', 'order_2437612yPMC9cFiUAMAkY0ufxjI4XbE5u', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(85, 'ONKAR KULKARNI', 'onkarkulkarni22@gmail.com', '7709550339', 'Flat 310', 'Adithya Celestial Jayamuni Nagar yelahanka behind ford showroom ', 'Bangalore ', NULL, 'Bangalore', 'Karnataka ', '560063', '', '', '', 'ONTIME', 'pending', '1750955041', '39', '0', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(86, 'ONKAR KULKARNI', 'onkarkulkarni22@gmail.com', '7709550339', 'Flat 310', 'Adithya Celestial Jayamuni Nagar yelahanka behind ford showroom ', 'Bangalore ', NULL, 'Bangalore', 'Karnataka ', '560063', '', '', '', 'ONTIME', 'pending', '1750955075', '39', '0', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(87, 'Shripad Kulkarni', 'shripadsk16@gmail.com', '9309553291', 'Vinayak Residency', 'Savedi', 'Ahilyanagar', NULL, 'Ahilyanagar', 'Maharashtra', '414001', '', '', '', 'ONTIME', 'pending', '1752221679', '5', '0', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(88, 'shripad  kulkarni', 'shripadsk6@gmail.com', '9309553291', 'Vinayak Residency', 'Savedi', 'ahmednagar', NULL, 'ahmednagar', 'maharashtra ', '414001', '', '', '', 'ONTIME', 'pending', '1752221757', '5', '0', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(89, 'shripad  kulkarni', 'shripadsk6@gmail.com', '9309553291', 'vinayak Residency', 'savedi', 'ahmednagar', NULL, 'ahmednagar', 'maharashtra ', '414001', '', '', '', 'ONTIME', 'pending', '1752221831', '5', '0', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(90, 'shripad  kulkarni', '', '9309553291', 'Vinayak Residency', 'Savedi', 'ahmednagar', NULL, 'ahmednagar', 'maharashtra ', '414001', '', '', '', 'ONTIME', 'pending', '1752222135', '5', '28008.925', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', 'order_2437612zimBzkpAWzD7EYrstYhFQRKYVW', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(91, 'shripad  kulkarni', 'shripadsk6@gmail.com', '9309553291', 'Vinayak Residency', 'Savedi', 'ahmednagar', NULL, 'ahmednagar', 'maharashtra ', '414001', '', '', '', 'DELAYED', 'pending', '1752222273', '5', '24434.095', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', 'order_2437612zimTOz1cp1J6kJvr9BkME5fBBZ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(92, ' Manoj More', 'moremanoj0123@gmail.com', '7040487891', 'Near Shiv Sport', 'Balikashram Road', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414001', '', '', '', 'ONTIME', 'pending', '1752230202', '7', '1013.985', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', 'order_2437612zj2XmYNPg3OXgsaM19o9qs2qtn', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(93, 'Manoj More', 'moremanoj0123@gmail.com', '7040487891', 'Near Kamala Ayurvedic Hospital', 'Ahmednagar', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414001', '', '', '', 'DELAYED', 'pending', '1752230308', '7', '1013.985', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', 'order_2437612zj2lA8g2coKgkANZkdHyA1gtA2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(94, 'Manali Dhongade', 'a2z.d.manali@gmail.com', '9075461110', 'Gulmohar Road Savedi', 'Savedi', 'Ahmednagar', NULL, 'Ahmednagar', 'Maharashtra', '414003', '', '', '', 'ONTIME', 'pending', '1752231646', '35', '0', '', '', '', '', 'pending', '0', 'online', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `user_cart_id` int(11) NOT NULL,
  `prod_id` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`user_cart_id`, `prod_id`, `user_id`, `status`, `entry_time`) VALUES
(20, '109', '45', 'active', '1753339306'),
(23, '98', '45', 'active', '1753339433'),
(30, '112', '67', 'active', '1753347922'),
(31, '109', '67', 'active', '1753347927'),
(32, '105', '67', 'active', '1753347937'),
(33, '117', '35', 'active', '1753348023'),
(38, '112', '35', 'active', '1753355973'),
(40, '108', '35', 'active', '1753356086'),
(41, '109', '35', 'active', '1753356110');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart_other_char`
--

CREATE TABLE `user_cart_other_char` (
  `char_other_id` int(11) NOT NULL,
  `char_name` text NOT NULL,
  `char_amt` text NOT NULL,
  `char_id` text NOT NULL,
  `billing_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_cart_other_char`
--

INSERT INTO `user_cart_other_char` (`char_other_id`, `char_name`, `char_amt`, `char_id`, `billing_id`) VALUES
(1, 'shipping charges', '0', '2', '1'),
(2, 'Insurance Charges', '22.485', '3', '1'),
(3, 'shipping charges', '0', '2', '2'),
(4, 'Insurance Charges', '1008.03', '3', '2'),
(5, 'shipping charges', '0', '2', '3'),
(6, 'Insurance Charges', '172.11', '3', '3'),
(7, 'shipping charges', '0', '2', '4'),
(8, 'Insurance Charges', '2038.935', '3', '4'),
(9, 'shipping charges', '0', '2', '5'),
(10, 'Insurance Charges', '894.135', '3', '5'),
(11, 'shipping charges', '0', '2', '6'),
(12, 'Insurance Charges', '22.485', '3', '6'),
(13, 'shipping charges', '0', '2', '7'),
(14, 'Insurance Charges', '89.94', '3', '7'),
(15, 'shipping charges', '0', '2', '8'),
(16, 'Insurance Charges', '89.94', '3', '8'),
(17, 'shipping charges', '0', '2', '9'),
(18, 'Insurance Charges', '89.94', '3', '9'),
(19, 'shipping charges', '0', '2', '10'),
(20, 'Insurance Charges', '89.94', '3', '10'),
(21, 'shipping charges', '0', '2', '11'),
(22, 'Insurance Charges', '67.455', '3', '11'),
(23, 'shipping charges', '0', '2', '12'),
(24, 'Insurance Charges', '67.455', '3', '12'),
(25, 'shipping charges', '0', '2', '13'),
(26, 'Insurance Charges', '1065.18', '3', '13'),
(27, 'shipping charges', '0', '2', '14'),
(28, 'Insurance Charges', '1020.21', '3', '14'),
(29, 'shipping charges', '0', '2', '15'),
(30, 'Insurance Charges', '1023.135', '3', '15'),
(31, 'shipping charges', '0', '2', '16'),
(32, 'Insurance Charges', '1023.135', '3', '16'),
(33, 'shipping charges', '0', '2', '17'),
(34, 'Insurance Charges', '1023.135', '3', '17'),
(35, 'shipping charges', '0', '2', '18'),
(36, 'Insurance Charges', '1074.18', '3', '18'),
(37, 'shipping charges', '0', '2', '19'),
(38, 'Insurance Charges', '14.235', '3', '19'),
(39, 'shipping charges', '0', '2', '20'),
(40, 'Insurance Charges', '15.03', '3', '20'),
(41, 'shipping charges', '0', '2', '21'),
(42, 'Insurance Charges', '15.03', '3', '21'),
(43, 'shipping charges', '0', '2', '22'),
(44, 'Insurance Charges', '15.03', '3', '22'),
(45, 'shipping charges', '0', '2', '23'),
(46, 'Insurance Charges', '15.03', '3', '23'),
(47, 'shipping charges', '0', '2', '24'),
(48, 'Insurance Charges', '13.485', '3', '24'),
(49, 'shipping charges', '0', '2', '30'),
(50, 'Insurance Charges', '162.63', '3', '30'),
(51, 'shipping charges', '0', '2', '34'),
(52, 'Insurance Charges', '40.77', '3', '34'),
(53, 'shipping charges', '0', '2', '35'),
(54, 'Insurance Charges', '1099.545', '3', '35'),
(55, 'shipping charges', '0', '2', '36'),
(56, 'Insurance Charges', '112.47', '3', '36'),
(57, 'shipping charges', '0', '2', '37'),
(58, 'Insurance Charges', '24.285', '3', '37'),
(59, 'shipping charges', '0', '2', '38'),
(60, 'Insurance Charges', '24.75', '3', '38'),
(61, 'shipping charges', '0', '2', '39'),
(62, 'Insurance Charges', '13.485', '3', '39'),
(63, 'shipping charges', '0', '2', '40'),
(64, 'Insurance Charges', '14.985', '3', '40'),
(65, 'shipping charges', '0', '2', '41'),
(66, 'Insurance Charges', '104.985', '3', '41'),
(67, 'shipping charges', '0', '2', '42'),
(68, 'Insurance Charges', '16.845', '3', '42'),
(69, 'shipping charges', '0', '2', '43'),
(70, 'Insurance Charges', '104.985', '3', '43'),
(71, 'shipping charges', '0', '2', '44'),
(72, 'Insurance Charges', '74.985', '3', '44'),
(73, 'shipping charges', '0', '2', '45'),
(74, 'Insurance Charges', '107.985', '3', '45'),
(75, 'shipping charges', '0', '2', '46'),
(76, 'Insurance Charges', '14.985', '3', '46'),
(77, 'shipping charges', '0', '2', '47'),
(78, 'Insurance Charges', '29.97', '3', '47'),
(79, 'shipping charges', '0', '2', '48'),
(80, 'Insurance Charges', '37.485', '3', '48'),
(81, 'shipping charges', '0', '2', '49'),
(82, 'Insurance Charges', '162.705', '3', '49'),
(83, 'shipping charges', '0', '2', '50'),
(84, 'Insurance Charges', '104.985', '3', '50'),
(85, 'shipping charges', '0', '2', '51'),
(86, 'Insurance Charges', '10.8', '3', '51'),
(87, 'shipping charges', '0', '2', '52'),
(88, 'Insurance Charges', '1112.79', '3', '52'),
(89, 'shipping charges', '0', '2', '53'),
(90, 'Insurance Charges', '14.985', '3', '53'),
(91, 'shipping charges', '0', '2', '54'),
(92, 'Insurance Charges', '1108.44', '3', '54'),
(93, 'shipping charges', '0', '2', '55'),
(94, 'Insurance Charges', '10.8', '3', '55'),
(95, 'shipping charges', '0', '2', '56'),
(96, 'Insurance Charges', '134.985', '3', '56'),
(97, 'shipping charges', '0', '2', '57'),
(98, 'Insurance Charges', '14.985', '3', '57'),
(99, 'shipping charges', '0', '2', '58'),
(100, 'Insurance Charges', '10.8', '3', '58'),
(101, 'shipping charges', '0', '2', '59'),
(102, 'Insurance Charges', '40.455', '3', '59'),
(103, 'shipping charges', '0', '2', '60'),
(104, 'Insurance Charges', '53.94', '3', '60'),
(105, 'shipping charges', '0', '2', '61'),
(106, 'Insurance Charges', '53.94', '3', '61'),
(107, 'shipping charges', '0', '2', '62'),
(108, 'Insurance Charges', '53.94', '3', '62'),
(109, 'shipping charges', '0', '2', '63'),
(110, 'Insurance Charges', '53.94', '3', '63'),
(111, 'shipping charges', '0', '2', '64'),
(112, 'Insurance Charges', '53.94', '3', '64'),
(113, 'shipping charges', '0', '2', '65'),
(114, 'Insurance Charges', '53.94', '3', '65'),
(115, 'shipping charges', '0', '2', '66'),
(116, 'Insurance Charges', '53.94', '3', '66'),
(117, 'shipping charges', '0', '2', '67'),
(118, 'Insurance Charges', '53.94', '3', '67'),
(119, 'shipping charges', '0', '2', '68'),
(120, 'Insurance Charges', '53.94', '3', '68'),
(121, 'shipping charges', '0', '2', '69'),
(122, 'Insurance Charges', '53.94', '3', '69'),
(123, 'shipping charges', '0', '2', '70'),
(124, 'Insurance Charges', '53.94', '3', '70'),
(125, 'shipping charges', '0', '2', '71'),
(126, 'Insurance Charges', '53.94', '3', '71'),
(127, 'shipping charges', '0', '2', '72'),
(128, 'Insurance Charges', '53.94', '3', '72'),
(129, 'shipping charges', '0', '2', '73'),
(130, 'Insurance Charges', '53.94', '3', '73'),
(131, 'shipping charges', '0', '2', '74'),
(132, 'Insurance Charges', '53.94', '3', '74'),
(133, 'shipping charges', '0', '2', '75'),
(134, 'Insurance Charges', '53.94', '3', '75'),
(135, 'shipping charges', '0', '2', '76'),
(136, 'Insurance Charges', '53.94', '3', '76'),
(137, 'shipping charges', '0', '2', '77'),
(138, 'Insurance Charges', '53.94', '3', '77'),
(139, 'shipping charges', '0', '2', '78'),
(140, 'Insurance Charges', '53.94', '3', '78'),
(141, 'shipping charges', '0', '2', '79'),
(142, 'Insurance Charges', '53.94', '3', '79'),
(143, 'shipping charges', '0', '2', '80'),
(144, 'Insurance Charges', '53.94', '3', '80'),
(145, 'shipping charges', '0', '2', '81'),
(146, 'Insurance Charges', '53.94', '3', '81'),
(147, 'shipping charges', '0', '2', '82'),
(148, 'Insurance Charges', '53.955', '3', '82'),
(149, 'shipping charges', '0', '2', '83'),
(150, 'Insurance Charges', '40.455', '3', '83'),
(151, 'shipping charges', '0', '2', '84'),
(152, 'Insurance Charges', '97.485', '3', '84'),
(153, 'shipping charges', '0', '2', '85'),
(154, 'Insurance Charges', '0', '3', '85'),
(155, 'shipping charges', '0', '2', '86'),
(156, 'Insurance Charges', '0', '3', '86'),
(157, 'shipping charges', '0', '2', '87'),
(158, 'Insurance Charges', '0', '3', '87'),
(159, 'shipping charges', '0', '2', '88'),
(160, 'Insurance Charges', '0', '3', '88'),
(161, 'shipping charges', '0', '2', '89'),
(162, 'Insurance Charges', '0', '3', '89'),
(163, 'shipping charges', '0', '2', '90'),
(164, 'Insurance Charges', '413.925', '3', '90'),
(165, 'shipping charges', '0', '2', '91'),
(166, 'Insurance Charges', '361.095', '3', '91'),
(167, 'shipping charges', '0', '2', '92'),
(168, 'Insurance Charges', '14.985', '3', '92'),
(169, 'shipping charges', '0', '2', '93'),
(170, 'Insurance Charges', '14.985', '3', '93'),
(171, 'shipping charges', '0', '2', '94'),
(172, 'Insurance Charges', '0', '3', '94');

-- --------------------------------------------------------

--
-- Table structure for table `user_visits`
--

CREATE TABLE `user_visits` (
  `user_visits_id` int(11) NOT NULL,
  `ip_address` text DEFAULT NULL,
  `user_id` text NOT NULL,
  `visits` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

CREATE TABLE `user_wishlist` (
  `user_wishlist_id` int(11) NOT NULL,
  `prod_id` text DEFAULT NULL,
  `user_id` text DEFAULT NULL,
  `entry_time` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_about_details`
--

CREATE TABLE `web_about_details` (
  `about_id` int(11) NOT NULL,
  `about_title` text NOT NULL,
  `about_desc` text NOT NULL,
  `about_image` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `web_about_details`
--

INSERT INTO `web_about_details` (`about_id`, `about_title`, `about_desc`, `about_image`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'Introduction', 'Any way you do the output will be the same but the browser itself strips double white spaces and renders as one.', '', 'deleted', '4', '1606124216'),
(2, 'History1', 'Any way you do the output will be the same but the browser itself strips double white spaces and renders as one.<br />\r\n Any way you do the output will be the same but the browser itself strips double white spaces and renders as one.', 'branch-1606124358-84698.jpg', 'deleted', '4', '1606124358'),
(3, 'Our Mission', 'At Shingavi Jewellers Pvt. Ltd., supporting small jewelry businesses is at the heart of everything we do. What started as a humble venture fueled by a young family\'s dreams and determination has grown into a trusted partner for thousands of jewelry studios worldwide. Sound familiar?\r\n\r\nOur mission is simple — to simplify your sourcing process so you can focus on what you do best: crafting stunning jewelry. While beads were the foundation of our early days, our offerings have since expanded far beyond that. Today, we’re a full-service jewelry supply company, catering to both boutique makers and large-scale studios across every segment of the industry (yes, pun intended!).\r\n\r\nJewelry artists count on us for high-quality chains, findings, and metals — delivered right to your doorstep, fast. Explore our culture and services to see how we can support your creative journey.\r\n', 'about-1731064035-72152.png', 'active', '4', '1610353206'),
(4, 'Our History', 'With over six decades of legacy, Shingavi Jewellers Pvt. Ltd. stands as one of the most trusted and leading jewellery houses in Western India. Established in 1959, our journey began in Mirajgaon, District Ahmednagar, Maharashtra, founded by the visionary brothers Suvalalji Shingavi and Rasiklalji Shingavi\r\n\r\nStarting from scratch, their passion for delivering pure gold and exceptional service gradually earned the trust of the local community, despite initial skepticism. Their dedication and honesty laid a strong foundation, and in time, Shingavi Jewellers became the most respected name in Mirajgaon.\r\n\r\nAfter a decade of unwavering hard work, the first branch was opened in Kapad Bazar, Ahmednagar, in 1970, followed by expansion into Solapur. Today, the legacy is proudly carried forward by the fourth generation, with a strong presence in:\r\n\r\nMirajgaon: 1 Gold & Silver showroom\r\nAhmednagar: 2 Gold, 2 Silver & 1 Diamond showroom\r\nSolapur: 2 Gold, 1 Silver & 1 Diamond showroom\r\n\r\nIn 2017, we extended our footprint in Ahmednagar with a new showroom in Savedi, marking another milestone in our growth.\r\n\r\nAs we celebrate 66 years of excellence, we remain committed to our core values — purity, trust, and customer satisfaction. Our elegant and spacious showrooms offer an exceptional shopping experience with a wide range of jewellery in Gold, Silver, Platinum, Diamonds, Gemstones, and Pearls.\r\n\r\nWhat truly sets us apart is our uncompromised focus on purity. We offer only BIS Hallmarked gold with purity levels of 18K, 22K, and 24K (up to 99.5%), far exceeding the standard 22K available in most markets.\r\n\r\nOur heritage, combined with innovative designs and ethical practices, continues to make Shingavi Jewellers a name synonymous with purity and excellence in the jewellery industry.', '17449619752253slider-1742203107-39677.png', 'active', '4', '1610353243');

-- --------------------------------------------------------

--
-- Table structure for table `web_banner`
--

CREATE TABLE `web_banner` (
  `web_banner_id` int(11) NOT NULL,
  `banner_size` text DEFAULT NULL,
  `banner_link` text DEFAULT NULL,
  `banner_img` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL,
  `banner_type` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `web_banner`
--

INSERT INTO `web_banner` (`web_banner_id`, `banner_size`, `banner_link`, `banner_img`, `status`, `entry_by`, `entry_date`, `banner_type`) VALUES
(1, 'half', 'https://shingavijewellers.com/index/show_products?cat_id=5&g_name=FINGER%20RING&g_id=10', 'banner-1731069039-60908.jpeg', 'active', '4', '2021-01-11', 'exclusive_collection'),
(2, 'half', 'https://shingavijewellers.com/index/show_products?cat_id=5&g_name=MANGALSUTRA&g_id=15', 'banner-1731069048-11451.jpeg', 'active', '4', '2021-01-11', 'exclusive_collection'),
(8, 'Silver', '', 'banner-1739884021-74639.webp', 'active', '4', '2021-10-12', 'exclusive_collection'),
(9, 'Silver', 'https://shingavijewellers.com/index/show_products?cat_id=6&g_name=NECKLACE&g_id=48', 'banner-1739883790-39881.webp', 'active', '4', '2021-10-12', 'exclusive_collection'),
(10, 'Gold', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtFROrba6e88dbaT906_TxqkPFmqqRybKSmg&s', 'banner-1740032724-71506.webp', 'active', '4', '2024-11-08', 'new_design'),
(12, 'full', '', 'banner-1748347171-67515.jpg', 'active', '4', '2025-03-18', NULL),
(13, 'Gold', '', 'banner-1748332439-8294.jpg', 'active', '4', '2025-05-22', 'new_design'),
(14, 'Gold', '', 'banner-1748330307-12902.jpg', 'active', '4', '2025-05-27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_blog`
--

CREATE TABLE `web_blog` (
  `web_blog_id` int(11) NOT NULL,
  `blog_by` text DEFAULT NULL,
  `blog_label` text DEFAULT NULL,
  `blog_type` text DEFAULT NULL,
  `blog_details` text DEFAULT NULL,
  `blog_image` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `web_blog`
--

INSERT INTO `web_blog` (`web_blog_id`, `blog_by`, `blog_label`, `blog_type`, `blog_details`, `blog_image`, `status`, `entry_by`, `entry_date`) VALUES
(1, 'Shingavi Jwellers', 'The Value of Critiques When Developing a Jewelry Collection', 'Image', 'Critiques can be one of the most intimidating aspects of making jewelry. But they can also help your work progress and open your jewelry to an all new group of people. Learn more from guest writer Vince Pontillo-Verrastro about how to make the most out of jewelry critiques.', 'blog-1610352717-84231.jpg', 'active', '4', '2021-01-11'),
(2, 'Shingavi Jwellers', 'Sterling Silver Necklaces for Easy Gift Sales', 'Image', 'Simple sterling silver necklaces make great gift options for your customers, without much effort from you. Simply adding charms to a necklace chain or earrings can help build out your inventory for seasonal surges.', 'blog-1610352776-20594.jpg', 'active', '4', '2021-01-11'),
(3, 'Shingavi Jwellers', 'How Jewelers Can Respond to Volatility in Gold and Silver Prices', 'Image', 'What do you do when commodity markets swing? This article will explore how jewelry artists should respond to changes in gold and silver prices.', 'blog-1610352838-41827.jpg', 'active', '4', '2021-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `web_branch_details`
--

CREATE TABLE `web_branch_details` (
  `branch_id` int(11) NOT NULL,
  `branch_name` text NOT NULL,
  `branch_mobile_no` text NOT NULL,
  `branch_phone_no` text NOT NULL,
  `branch_email` text NOT NULL,
  `branch_address` text NOT NULL,
  `branch_location` text NOT NULL,
  `branch_image` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `web_branch_details`
--

INSERT INTO `web_branch_details` (`branch_id`, `branch_name`, `branch_mobile_no`, `branch_phone_no`, `branch_email`, `branch_address`, `branch_location`, `branch_image`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'Savedi branch', '+918605500025', '02412553031', 'contact@shingavijewellers.com', 'Professor chowk , savedi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30158.20233746477!2d74.70282554626462!3d19.11751135608387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcba80e92dceb9%3A0xb4508942ab098a3!2sShingavi%20Jewellers%20Pvt.Ltd.!5e0!3m2!1sen!2sin!4v1667373062770!5m2!1sen!2sin', 'branch-1624419691-40646.jpg', 'active', '4', '1606120370'),
(2, 'Shingavi Jewellers KApadbazar', '7894561230', '7894561230', 'shingavijewellersshingavijewellers@gmail.com', 'shingavijewellers shingavijewellers shingavijewellers shingavijewellers shingavijewellers shingavijewellers shingavijewellers shingavijewellers shingavijewellers shingavijewellers shingavijewellers shingavijewellers ', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.05760272417!2d74.72818851405422!3d19.105128756022864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb17ca9d749e5%3A0x516744f9b2f35ec9!2sA2z%20Infotech!5e0!3m2!1sen!2sin!4v1624419642147!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'branch-1624419691-40646.jpg', 'deleted', '4', '1624419691'),
(3, 'Shingavi Jewellers', '7894561230', '7894561230', 'ShingaviJewellersShingaviJewellers@gmail.com', 'ShingaviJewellers ShingaviJewellers ShingaviJewellersShingaviJewellers ShingaviJewellers ShingaviJewellersShingaviJewellers ShingaviJewellers ShingaviJewellersShingaviJewellers ShingaviJewellers ShingaviJewellersShingaviJewellers ShingaviJewellers ShingaviJewellersShingaviJewellers ShingaviJewellers ShingaviJewellers', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.05760272417!2d74.72818851405422!3d19.105128756022864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb17ca9d749e5%3A0x516744f9b2f35ec9!2sA2z%20Infotech!5e0!3m2!1sen!2sin!4v1624419642147!5m2!1sen!2sin', 'branch-1624419863-1062.jpg', 'deleted', '4', '1624419863'),
(4, 'Shingavi jewellers pvt ltd.', '8087343030', '02412343030', 'shingaviandsonsjewellers@gmail.com', '3155, JUNA KAPAD BAZAR,AHMEDNAGAR, MAHARASHTRA, 414001', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30158.20233746477!2d74.70282554626462!3d19.11751135608387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdcb066c5817ecd%3A0xf5d620ff01d2a27c!2sShingavi%20Jewellers%20private%20limited!5e0!3m2!1sen!2sin!4v1667373118085!5m2!1sen!2sin', 'branch-1624419863-1062.jpg', 'active', '4', '1633438977');

-- --------------------------------------------------------

--
-- Table structure for table `web_contact_details`
--

CREATE TABLE `web_contact_details` (
  `cont_id` int(11) NOT NULL,
  `email1` text NOT NULL,
  `email2` text NOT NULL,
  `mobile_no` text NOT NULL,
  `mobile_no2` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `web_contact_details`
--

INSERT INTO `web_contact_details` (`cont_id`, `email1`, `email2`, `mobile_no`, `mobile_no2`, `logo`) VALUES
(1, 'contact@shingavijewellers.com', 'info@shingavijewellers.com', '(0241) 2553031', ' (+91) 8605500025', 'slider-1694759296-39399.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `web_history_details`
--

CREATE TABLE `web_history_details` (
  `history_id` int(11) NOT NULL,
  `history_title` text NOT NULL,
  `history_desc` text NOT NULL,
  `history_image` text NOT NULL,
  `status` text NOT NULL,
  `entry_by` text NOT NULL,
  `entry_time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `web_history_details`
--

INSERT INTO `web_history_details` (`history_id`, `history_title`, `history_desc`, `history_image`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'Our Journey', '<p><strong>SHINGAVI JEWELERS Pvt. Ltd</strong> is one of the leading jewellers in western India carrying the fervours of crafting jewelleries for <i><strong>63 years,</strong></i> as an organization we have been imparting trust among customers with a legacy of ethical business since 1959 . Our foundation was laid by Suvalalji Shingavi &amp; Rasiklalji Shingavi in <strong>MIRAJGAON </strong>dist. Ahmednagar Maharashtra. Both the brother were very passionate about there business. They started this business from scatch in mirajgaon. The people reaction towards them was not so positive but they did’t stop. Gradually people started believing on them as they were providing proper purity of gold &amp; good coustomer service. Slowly they were consider the best jewelers in mirajgaon. After hard work of 10 years they decided to grow more &amp; opened a branches in ahmednagar &amp; solapur 1st branch in Ahmednagar , kapad bazar in the<strong> year 1970</strong>. This business increased from generation to generation and now this business is run by there 4th generation which is running successfully in ahmednagar with there 2nd branch in savedi which was open in the year 2017. Currently they have branches Mirajgaon 1 gold &amp; silver Ahmednagar 2 gold , 2 silver &amp; 1 Dimonds Solapur 2 gold , 1 silver &amp; 1 Dimonds After establishing strong pillars of foundation and growing huge support of customers, it compelled us to open more jewellery retail outlets . As we are approaching towards new milestone of completing successful 63 years in the business, our clean approach helped us to extend 5 branches in Maharashtra. We have a rich heritage of serving customers, therefore by matching the place with the trends. At present our spacious showrooms provide a great ambience to customers shopping experience with widest range of jewellery products varying from Gold, Silver, Platinum and Gemstones to Pearls which adds value to our services. Our main focus has always remained on purity only. We offer genuine BIS Hallmark certified gold products with a purity <strong>of 18, 22, &amp; 24 Karats i.e. 99.5</strong>, whereas in India these ornaments are being sold with a purity of <strong>22 Karats.</strong> Competing with our creative designs has also played a major role in recognizing us as a symbol for purity that boosted our growth in the retail market.</p>', 'history-1744961946-93532.png', 'active', '4', '1606138527');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `web_owner_desk_details`
--

INSERT INTO `web_owner_desk_details` (`owner_desk_id`, `owner_desk_title`, `owner_desk_desc`, `owner_desk_image`, `status`, `entry_by`, `entry_time`) VALUES
(1, 'Shingavi desk', 'Information can be thought of as the resolution of uncertainty;<br />\r\n it is that which answers the question of \"What an entity is\" and thus defines both its essence and nature of its<br />\r\n characteristics. The concept of information has different meanings in different contexts.<br />\r\n', 'owner-desk-1606127095-26671.jpg', 'deleted', '4', '1606127095'),
(2, 'Shingavi desk1', 'Information can be thought of as the resolution of uncertainty; it is that which answers the question of ``What an entity is`` and thus defines both its essence and nature of its characteristics. The concept of information has different meanings in different contexts.', 'owner-desk-1612611163-86830.jpg', 'deleted', '4', '1606127587'),
(3, 'From Director\'s Desk', 'At Shingavi Jewellers Pvt. Ltd., we are proud torchbearers of a legacy that began over six decades ago with the passion and perseverance of our founders, Suvalalji and Rasiklalji Shingavi. What started as a modest venture in Mirajgaon has now grown into a trusted name across Maharashtra — a journey built on trust, purity, and an unwavering commitment to our customers.<br /><br />\r\n<br /><br />\r\nWe’ve come a long way from our humble beginnings, overcoming challenges, earning the trust of generations, and expanding our presence in Ahmednagar, Solapur, and Mirajgaon. Each showroom we open is a reflection of our heritage and our desire to serve every customer with honesty, authenticity, and excellence.<br /><br />\r\n<br /><br />\r\nAs we proudly step into our 66th year, now led by the fourth generation of the Shingavi family, our values remain unchanged. We continue to uphold our promise of offering BIS Hallmarked jewellery with unmatched purity — 18K, 22K, and 24K — backed by innovative design and personalized service.<br /><br />\r\n<br /><br />\r\nOur showrooms are not just places of purchase — they are experiences where tradition meets trend, and where each ornament tells a story of craftsmanship and care.<br /><br />\r\n<br /><br />\r\nWe thank our customers, team, and well-wishers who have stood by us throughout this incredible journey. Your trust is our true treasure.<br /><br />\r\n<br /><br />\r\nWarm regards,<br /><br />\r\nGunjan S. Shingavi<br /><br />\r\nDirector<br /><br />\r\nShingavi Jewellers Pvt. Ltd.', 'owner-desk-1747721141-15261.png', 'active', '4', '1747472039');

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
(1, 'slider-1753515315-62461.jpg', 'https://localhost/shingvi_jewellery/uploads/slider-1753515315-62461.jpg', '', '', 'active', '4', '1740141242'),
(2, 'slider-1742367423-87509.mp4', 'https://www.shingavijewellers.com/uploads/slider-1742367423-87509.mp4', '', '', 'deleted', '4', '1742367423'),
(3, 'slider-1744266486-46655.webp', 'https://shingavijewellers.com/uploads/slider-1744266486-46655.webp', '', '', 'deleted', '4', '1744266486'),
(4, 'slider-1744266539-27449.webp', 'https://shingavijewellers.com/uploads/slider-1744266539-27449.webp', '', '', 'deleted', '4', '1744266539'),
(5, 'slider-1746602064-15514.', '', '', '', 'deleted', '4', '1746602064'),
(6, 'slider-1747720955-3615.webp', 'https://jewelnagar.com/uploads/slider-1747720955-3615.webp', '', '', 'deleted', '4', '1747225903'),
(7, 'slider-1747740858-65798.webp', 'https://jewelnagar.com/uploads/slider-1747740858-65798.webp', '', '', 'deleted', '4', '1747722641'),
(8, 'slider-1747922957-56972.', 'https://www.jewelnagar.com/uploads/slider-1747922957-56972.', '', '', 'deleted', '4', '1747922957'),
(9, 'slider-1753515326-62240.jpg', 'https://localhost/shingvi_jewellery/uploads/slider-1753515326-62240.jpg', '', '', 'active', '4', '1748685080'),
(10, 'slider-1748685721-95628.jpg', 'https://www.jewelnagar.com/uploads/slider-1748685721-95628.jpg', '', '', 'deleted', '4', '1748685721'),
(11, 'slider-1753513123-67716.', 'https://localhost/shingvi_jewellery/uploads/slider-1753513123-67716.', '', '', 'deleted', '5', '1753513123');

-- --------------------------------------------------------

--
-- Table structure for table `web_testimonial`
--

CREATE TABLE `web_testimonial` (
  `web_testimonial_id` int(11) NOT NULL,
  `testimonial_person` text DEFAULT NULL,
  `testimonial_details` text DEFAULT NULL,
  `rating` text DEFAULT NULL,
  `testimonial_img` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `entry_by` text DEFAULT NULL,
  `entry_date` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `web_testimonial`
--

INSERT INTO `web_testimonial` (`web_testimonial_id`, `testimonial_person`, `testimonial_details`, `rating`, `testimonial_img`, `status`, `entry_by`, `entry_date`) VALUES
(1, 'Ajay Naik', 'It is nice to know that your company takes the time to get to know its customers.', '5', 'testimonial-1731148526-38048.jpeg', 'active', '4', '2021-01-11'),
(2, 'Vishal Bhosale', 'I bought a gold ring recently and it fits perfectly. Will shop again!', '5', 'testimonial-1731148546-66756.jpeg', 'active', '4', '2021-01-11'),
(3, 'Priya Nair', 'Graceful and timeless pieces. I’m very impressed with the packaging too.', '5', 'testimonial-1731148565-93811.jpeg', 'active', '4', '2021-01-11'),
(10, 'Neha Mehta', 'Great service and very professional team. Highly recommended for quality and support.', '5', 'testimonial-1753532774-85318.jpg', 'active', '4', '2021-01-11'),
(11, 'Priya Sharma', 'The team was responsive and completed the project before the deadline. Will work again.', '5', 'testimonial-1753532796-36707.jpg', 'active', '4', '2021-01-11'),
(12, 'Pooja Verma', 'Affordable pricing and fantastic output. My website looks amazing. Thank you!', '5', 'testimonial-1753532851-43759.png', 'active', '4', '2021-01-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_permission`
--
ALTER TABLE `admin_permission`
  ADD PRIMARY KEY (`admin_permission_id`);

--
-- Indexes for table `admin_permission_urls`
--
ALTER TABLE `admin_permission_urls`
  ADD PRIMARY KEY (`admin_permission_urls_id`);

--
-- Indexes for table `admin_position`
--
ALTER TABLE `admin_position`
  ADD PRIMARY KEY (`admin_position_id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_tbl_id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`blog_comments_id`);

--
-- Indexes for table `buyback_tbl`
--
ALTER TABLE `buyback_tbl`
  ADD PRIMARY KEY (`buyback_tbl_id`);

--
-- Indexes for table `cancellation_policy_tbl`
--
ALTER TABLE `cancellation_policy_tbl`
  ADD PRIMARY KEY (`cancellation_policy_tbl_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `company_details_tbl`
--
ALTER TABLE `company_details_tbl`
  ADD PRIMARY KEY (`company_det_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`contact_form_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customers_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`customer_address_id`);

--
-- Indexes for table `custom_jwellery`
--
ALTER TABLE `custom_jwellery`
  ADD PRIMARY KEY (`custom_jwellery_id`);

--
-- Indexes for table `disclaimer_policy_tbl`
--
ALTER TABLE `disclaimer_policy_tbl`
  ADD PRIMARY KEY (`disclaimer_policy_tbl_id`);

--
-- Indexes for table `exchange_policy_tbl`
--
ALTER TABLE `exchange_policy_tbl`
  ADD PRIMARY KEY (`exchange_policy_tbl_id`);

--
-- Indexes for table `gold_scheme_policy_tbl`
--
ALTER TABLE `gold_scheme_policy_tbl`
  ADD PRIMARY KEY (`gold_scheme_policy_tbl_id`);

--
-- Indexes for table `ordered_product`
--
ALTER TABLE `ordered_product`
  ADD PRIMARY KEY (`ordered_product_id`);

--
-- Indexes for table `order_charges`
--
ALTER TABLE `order_charges`
  ADD PRIMARY KEY (`charges_id`);

--
-- Indexes for table `order_charges_det`
--
ALTER TABLE `order_charges_det`
  ADD PRIMARY KEY (`order_charges_det_id`);

--
-- Indexes for table `order_tbl`
--
ALTER TABLE `order_tbl`
  ADD PRIMARY KEY (`order_tbl_id`);

--
-- Indexes for table `otp_tbl`
--
ALTER TABLE `otp_tbl`
  ADD PRIMARY KEY (`otp_tbl_id`);

--
-- Indexes for table `privacy_policy_tbl`
--
ALTER TABLE `privacy_policy_tbl`
  ADD PRIMARY KEY (`privacy_policy_tbl_id`);

--
-- Indexes for table `product_gold`
--
ALTER TABLE `product_gold`
  ADD PRIMARY KEY (`prod_gold_id`);

--
-- Indexes for table `product_group`
--
ALTER TABLE `product_group`
  ADD PRIMARY KEY (`product_group_id`);

--
-- Indexes for table `rate_diamond`
--
ALTER TABLE `rate_diamond`
  ADD PRIMARY KEY (`rate_diamond_id`);

--
-- Indexes for table `rate_gold`
--
ALTER TABLE `rate_gold`
  ADD PRIMARY KEY (`rate_gold_id`);

--
-- Indexes for table `rate_silver`
--
ALTER TABLE `rate_silver`
  ADD PRIMARY KEY (`rate_silver_id`);

--
-- Indexes for table `review_tbl`
--
ALTER TABLE `review_tbl`
  ADD PRIMARY KEY (`review_tbl_id`);

--
-- Indexes for table `shipping_policy_tbl`
--
ALTER TABLE `shipping_policy_tbl`
  ADD PRIMARY KEY (`shipping_policy_tbl_id`);

--
-- Indexes for table `social_media_tbl`
--
ALTER TABLE `social_media_tbl`
  ADD PRIMARY KEY (`social_media_tbl_id`);

--
-- Indexes for table `system_notification`
--
ALTER TABLE `system_notification`
  ADD PRIMARY KEY (`system_notification_id`);

--
-- Indexes for table `terms_of_use_tbl`
--
ALTER TABLE `terms_of_use_tbl`
  ADD PRIMARY KEY (`terms_of_use_tbl_id`);

--
-- Indexes for table `thumbnail_tbl`
--
ALTER TABLE `thumbnail_tbl`
  ADD PRIMARY KEY (`thumbnail_tbl_id`);

--
-- Indexes for table `user_billing_details`
--
ALTER TABLE `user_billing_details`
  ADD PRIMARY KEY (`user_billing_details_id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`user_cart_id`);

--
-- Indexes for table `user_visits`
--
ALTER TABLE `user_visits`
  ADD PRIMARY KEY (`user_visits_id`);

--
-- Indexes for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD PRIMARY KEY (`user_wishlist_id`);

--
-- Indexes for table `web_about_details`
--
ALTER TABLE `web_about_details`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `web_banner`
--
ALTER TABLE `web_banner`
  ADD PRIMARY KEY (`web_banner_id`);

--
-- Indexes for table `web_blog`
--
ALTER TABLE `web_blog`
  ADD PRIMARY KEY (`web_blog_id`);

--
-- Indexes for table `web_branch_details`
--
ALTER TABLE `web_branch_details`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `web_contact_details`
--
ALTER TABLE `web_contact_details`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `web_history_details`
--
ALTER TABLE `web_history_details`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `web_owner_desk_details`
--
ALTER TABLE `web_owner_desk_details`
  ADD PRIMARY KEY (`owner_desk_id`);

--
-- Indexes for table `web_slider`
--
ALTER TABLE `web_slider`
  ADD PRIMARY KEY (`web_slider_id`);

--
-- Indexes for table `web_testimonial`
--
ALTER TABLE `web_testimonial`
  ADD PRIMARY KEY (`web_testimonial_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_permission`
--
ALTER TABLE `admin_permission`
  MODIFY `admin_permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `admin_permission_urls`
--
ALTER TABLE `admin_permission_urls`
  MODIFY `admin_permission_urls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `admin_position`
--
ALTER TABLE `admin_position`
  MODIFY `admin_position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `blog_comments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `buyback_tbl`
--
ALTER TABLE `buyback_tbl`
  MODIFY `buyback_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cancellation_policy_tbl`
--
ALTER TABLE `cancellation_policy_tbl`
  MODIFY `cancellation_policy_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `company_details_tbl`
--
ALTER TABLE `company_details_tbl`
  MODIFY `company_det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `contact_form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `customer_address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `custom_jwellery`
--
ALTER TABLE `custom_jwellery`
  MODIFY `custom_jwellery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `disclaimer_policy_tbl`
--
ALTER TABLE `disclaimer_policy_tbl`
  MODIFY `disclaimer_policy_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exchange_policy_tbl`
--
ALTER TABLE `exchange_policy_tbl`
  MODIFY `exchange_policy_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gold_scheme_policy_tbl`
--
ALTER TABLE `gold_scheme_policy_tbl`
  MODIFY `gold_scheme_policy_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordered_product`
--
ALTER TABLE `ordered_product`
  MODIFY `ordered_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_charges`
--
ALTER TABLE `order_charges`
  MODIFY `charges_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_charges_det`
--
ALTER TABLE `order_charges_det`
  MODIFY `order_charges_det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `order_tbl`
--
ALTER TABLE `order_tbl`
  MODIFY `order_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `otp_tbl`
--
ALTER TABLE `otp_tbl`
  MODIFY `otp_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=540;

--
-- AUTO_INCREMENT for table `privacy_policy_tbl`
--
ALTER TABLE `privacy_policy_tbl`
  MODIFY `privacy_policy_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_gold`
--
ALTER TABLE `product_gold`
  MODIFY `prod_gold_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `product_group`
--
ALTER TABLE `product_group`
  MODIFY `product_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `rate_diamond`
--
ALTER TABLE `rate_diamond`
  MODIFY `rate_diamond_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rate_gold`
--
ALTER TABLE `rate_gold`
  MODIFY `rate_gold_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `rate_silver`
--
ALTER TABLE `rate_silver`
  MODIFY `rate_silver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `review_tbl`
--
ALTER TABLE `review_tbl`
  MODIFY `review_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shipping_policy_tbl`
--
ALTER TABLE `shipping_policy_tbl`
  MODIFY `shipping_policy_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media_tbl`
--
ALTER TABLE `social_media_tbl`
  MODIFY `social_media_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `system_notification`
--
ALTER TABLE `system_notification`
  MODIFY `system_notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5764;

--
-- AUTO_INCREMENT for table `terms_of_use_tbl`
--
ALTER TABLE `terms_of_use_tbl`
  MODIFY `terms_of_use_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thumbnail_tbl`
--
ALTER TABLE `thumbnail_tbl`
  MODIFY `thumbnail_tbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_billing_details`
--
ALTER TABLE `user_billing_details`
  MODIFY `user_billing_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `user_cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  MODIFY `user_wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `web_about_details`
--
ALTER TABLE `web_about_details`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `web_banner`
--
ALTER TABLE `web_banner`
  MODIFY `web_banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `web_blog`
--
ALTER TABLE `web_blog`
  MODIFY `web_blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `web_branch_details`
--
ALTER TABLE `web_branch_details`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `web_contact_details`
--
ALTER TABLE `web_contact_details`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_history_details`
--
ALTER TABLE `web_history_details`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_owner_desk_details`
--
ALTER TABLE `web_owner_desk_details`
  MODIFY `owner_desk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `web_slider`
--
ALTER TABLE `web_slider`
  MODIFY `web_slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `web_testimonial`
--
ALTER TABLE `web_testimonial`
  MODIFY `web_testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
