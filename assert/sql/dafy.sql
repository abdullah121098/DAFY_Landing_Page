-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 03:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dafy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(3) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_mobile` int(13) NOT NULL,
  `a_mail` varchar(30) NOT NULL,
  `a_address` varchar(60) NOT NULL,
  `a_city` varchar(20) NOT NULL,
  `a_date` datetime NOT NULL,
  `password` varchar(15) NOT NULL,
  `password_congirm` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `a_name`, `a_mobile`, `a_mail`, `a_address`, `a_city`, `a_date`, `password`, `password_congirm`) VALUES
(1, 'abdullah', 0, 'abdull@1', '', '', '2023-06-11 11:18:43', 'abdullah@1', 'abdullah@1');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `b_id` int(3) NOT NULL,
  `b_name` varchar(15) NOT NULL,
  `b_content` varchar(600) NOT NULL,
  `b_img` longtext NOT NULL,
  `b_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(13) NOT NULL,
  `pick_up` varchar(40) NOT NULL,
  `drop_in` varchar(40) NOT NULL,
  `ride_type` varchar(30) NOT NULL,
  `time_ride` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `v_name` varchar(30) NOT NULL,
  `v_type` varchar(30) NOT NULL,
  `driver_name` varchar(30) NOT NULL,
  `payment` int(20) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complete_ride`
--

CREATE TABLE `complete_ride` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(13) NOT NULL,
  `pick_up` varchar(40) NOT NULL,
  `drop_in` varchar(40) NOT NULL,
  `ride_type` varchar(30) NOT NULL,
  `time_ride` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `v_name` varchar(30) NOT NULL,
  `v_type` varchar(30) NOT NULL,
  `driver_name` varchar(30) NOT NULL,
  `payment` int(20) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `pick_up` varchar(40) NOT NULL,
  `drop_in` varchar(40) NOT NULL,
  `ride_type` varchar(30) NOT NULL,
  `time_ride` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `v_name` varchar(30) NOT NULL,
  `v_type` varchar(30) NOT NULL,
  `driver_name` varchar(30) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `pick_up`, `drop_in`, `ride_type`, `time_ride`, `date`, `time`, `v_name`, `v_type`, `driver_name`, `payment_type`, `payment`, `status`) VALUES
(1, 'Abdullah M', 'abdullah.bca98@gmail', '2147483647', 'srtaert', 'eafwrse', 'one_trip', 'immediate_trip', '2023-06-11', '07:06:00', 'HatchBack', 'Automatic', '', '', '0', ''),
(2, 'Abdullah M', 'abdullah.bca98@gmail', '2147483647', 'srtaert', 'eafwrse', 'round_trip', 'immediate_trip', '2023-06-12', '09:06:00', 'HatchBack', 'Automatic', '', '', '0', ''),
(3, 'ldfhkhf', 'nlzsdnl@gnjxfk', '2147483647', 'gsygfnhcfghb', 'zdrcbgdrtgzsdegt', 'one_trip', 'schedule_trip', '2023-06-12', '16:10:00', 'HatchBack', 'Manaual', '', '', '0', ''),
(5, 'Abdullah M', 'abdullah.bca98@gmail', '2147483647', 'sdasd', 'ASadaws', 'one_trip', 'immediate_trip', '2023-06-12', '12:43:00', 'HatchBack', 'Automatic', 'siva', '', '0', 'Driver Assigned'),
(6, 'Abdullah M', 'abdullah.bca98@gmail', '8489351923', 'srtaert', 'eafwrse', 'round_trip', 'immediate_trip', '2023-06-12', '12:48:00', 'Sedan', 'Automatic', 'Amal', '', '0', 'Confirm'),
(7, 'Abdullah M', 'abdullah.bca98@gmail', '8489351923', 'sdasd', 'eafwrse', 'one_trip', 'schedule_trip', '2023-06-12', '16:25:00', 'HatchBack', 'Automatic', 'jijo', 'G-pay', '100000', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(13) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(3) NOT NULL,
  `t_date` datetime NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `t_position` varchar(30) NOT NULL,
  `t_img` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `t_date`, `t_name`, `t_position`, `t_img`) VALUES
(1, '2023-06-12 11:25:00', 'Manikandan Ak', 'CEO', 'ceo1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(4) NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(30) NOT NULL,
  `review` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `date`, `name`, `review`) VALUES
(1, '2023-06-11 11:42:00', 'SUJITH E R', 'I recently had the opportunity to avail myself the service provided by DAFY,and I am pleased to share my experience. One aspect that impressed me was their responsiveness.Whenever I needed assistance or had a question, their customer service team was readily available and provided prompt and helpful responses. Their efficiency in handling these matters was truly commendable.I highly recommend DAFY  service based on my positive experience. I a'),
(2, '2023-06-11 11:44:00', 'ANANDHU S', 'The efficiency and punctuality of the drivers provided by\r\n DAFY impressed me a lot. Whenever I needed a driver to take me and my friends to \r\n                                    various lounge and venues, they were always prompt and ready to assist. Their knowledge of \r\n                                    the local area and the best routes ensured that we reached our destinations without any hassle. \r\n                                    The drivers were polite, and courteous, and made us feel safe throughout the journey.'),
(3, '2023-06-11 11:45:00', 'JAYESH K', 'I recently had the pleasure of using the professional driver assistant service provided by DAFY for my family.\r\n                                    One aspect that stood out to me was the professionalism and expertise of the driver provided by DAFY.\r\n                                    He was not only skilled behind the wheel but also displayed a warm and friendly approach towards us. \r\n                                    We felt safe on the road, and the driver consistently exhibited the highest standards of professionalism and respect.\r\n                                    I would not hesitat'),
(4, '2023-06-11 11:45:00', 'SAJESH V', 'Using the driver service was a truly amazing experience for me. \r\n                                    It blew me away with its excellent service, The driver was attentive and professional, \r\n                                    ensuring that I had a comfortable and safe journey. \r\n                                    I was truly impressed with the level of service and would\r\n                                    definitely use it again.'),
(5, '2023-06-11 11:46:00', 'ARCHIT M D', 'I\'ve been using DAFY\'s driver/caretaker service for several months now, \r\n                                    and I must say they have exceeded my expectations in every way!Considering the exceptional service \r\n                                    and professionalism they provide; their charges are more than fair. They strike a perfect balance \r\n                                    between affordability and quality, making them a top choice in the industry.\r\n                                    I highly recommend DAFY for anyone seeking a driver/caretaker service.\r\n                               '),
(6, '2023-06-11 11:47:00', 'NANCY JACOB', 'I recently experienced the professional driver assistance service provided by DAFY,\r\n                                    and I am delighted to share my positive experience. \r\n                                    From the moment I engaged with the driver, he displayed a high level of professionalism, \r\n                                    attentiveness, and respect, making me feel safe and comfortable throughout my journeys. \r\n                                    He is very attentive to my specific needs and preferences like adjusting the temperature, \r\n                                    ensuring'),
(9, '2023-06-11 12:45:00', 'Abdullah M', 'test, test, test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `b_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
