-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 07:59 AM
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
  `a_id` int(10) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_mobile` int(13) NOT NULL,
  `a_mail` varchar(30) NOT NULL,
  `a_position` varchar(30) NOT NULL,
  `a_img` longtext NOT NULL,
  `a_joining` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `password_confirm` varchar(15) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_mobile`, `a_mail`, `a_position`, `a_img`, `a_joining`, `password`, `password_confirm`, `type`) VALUES
(1, 'abdullah', 2147483647, 'abdull@1', 'Technical Head', 'user-1.jpg', '2023-06-11 11:18:43', 'abdullah@1', 'abdullah@1', 'admin'),
(2, 'Abdullah M', 2147483647, 'abdullah.bca98@gmail.com', 'red', 'testimonial-2.jpg', '2023-07-02 16:38:00', '1234', '1234', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `b_id` int(3) NOT NULL,
  `b_name` varchar(15) NOT NULL,
  `b_content` varchar(600) NOT NULL,
  `b_img` longtext NOT NULL,
  `b_date` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`b_id`, `b_name`, `b_content`, `b_img`, `b_date`, `status`) VALUES
(1, 'eye', 'Most reliable and economical driver on demand', 'a.jpg', '2023-07-06T15:4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `id` int(10) NOT NULL,
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

--
-- Dumping data for table `cancel`
--

INSERT INTO `cancel` (`id`, `name`, `email`, `phone`, `pick_up`, `drop_in`, `ride_type`, `time_ride`, `date`, `time`, `v_name`, `v_type`, `driver_name`, `payment`, `payment_type`, `status`) VALUES
(1, 'gopal', 'gopal@gmail.com', 987654321, 'edapalli', 'erunakulaam', 'one_ride', 'pick_up', '2023-06-22', '09:00:00', 'BMW', 'automatic', '', 0, '', 'Cancel'),
(2, 'gopal', 'gopal@gmail.com', 987654321, 'edapalli', 'erunakulaam', 'one_ride', 'pick_up', '2023-06-22', '09:00:00', 'BMW', 'automatic', '', 0, '', 'Cancel'),
(3, 'hema', 'hema@gmail.com', 987654342, 'velachery', 'tambaram', 'one_ride', 'immediate_trip', '2023-07-04', '15:10:09', 'BMW', 'manual', '', 0, '', 'Cancel'),
(4, 'hema56', 'hema56@gmail.com', 765984342, 'elvachery', 'mbataram', 'round_ride', 'immediate_trip', '2023-07-24', '08:10:09', '', '', '', 0, '', 'Cancel');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(20) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_name`, `car_type`) VALUES
(1, 'TOYOTA', ''),
(2, 'Hyundai', ''),
(3, 'Audi', ''),
(4, 'Volkswagen', ''),
(5, 'BMW', ''),
(6, 'Ford', ''),
(7, 'Kia', ''),
(8, 'Renault', ''),
(9, 'Honda', '');

-- --------------------------------------------------------

--
-- Table structure for table `casual_leave`
--

CREATE TABLE `casual_leave` (
  `l_id` int(10) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `l_mail` varchar(50) NOT NULL,
  `l_mobile` varchar(20) NOT NULL,
  `l_days` varchar(10) NOT NULL,
  `l_reason` varchar(600) NOT NULL,
  `l_type` varchar(20) NOT NULL,
  `l_start` varchar(10) NOT NULL,
  `l_end` varchar(10) NOT NULL,
  `l_city` varchar(50) NOT NULL,
  `l_file` tinytext NOT NULL,
  `l_status` varchar(30) NOT NULL
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

--
-- Dumping data for table `complete_ride`
--

INSERT INTO `complete_ride` (`id`, `name`, `email`, `phone`, `pick_up`, `drop_in`, `ride_type`, `time_ride`, `date`, `time`, `v_name`, `v_type`, `driver_name`, `payment`, `payment_type`, `status`) VALUES
(1, 'hema', 'hema@gmail.com', 987654343, 'dtsgyd', 'ghoul', 'one_trip', 'schedule', '2023-07-03', '19:41:43', 'BMW', 'automatic', 'karthick', 2500, 'g-pay', 'Complete'),
(2, 'red', 'red@gmail.com', 987654343, 'dtsgyd', 'ghoul', 'round_trip', 'schedule', '2023-07-23', '19:41:43', 'BMW', 'automatic', 'jijo', 2500, 'phonepay', 'Complete'),
(3, 'gold', 'gold@gmail.com', 543439876, 'ghoul', 'dtsgyd', 'hospital_trip', 'schedule', '2023-05-23', '19:41:43', 'BMW', 'automatic', 'siva', 2500, 'phonepay', 'Complete'),
(4, 'vicky', 'vicky@gmail.com', 1234567890, 'dtsgyd', 'ftesae', 'round_trip', 'immediate_trip', '2023-07-11', '14:59:57', 'BMW', 'manual', 'siva', 3100, 'paytm', 'Complete'),
(5, 'yogy', 'yogy@gmail.com', 2147483647, 'ftesae', 'dtsgyd', 'hospital_trip', 'immediate_trip', '2023-07-01', '14:59:57', 'BMW', 'manual', 'vali', 1100, 'gpay', 'Complete'),
(6, 'ldfhkhf', 'nlzsdnl@gnjxfk', 2147483647, 'gsygfnhcfghb', 'zdrcbgdrtgzsdegt', 'one_trip', 'schedule_trip', '2023-06-12', '16:10:00', 'HatchBack', 'Manaual', 'kanna', 1200, 'G-pay', 'Completed'),
(7, 'sonic', 'sonic@gmail.com', 2147483647, 'jpg', 'aluva', 'round_trip', 'schedule_trip', '2023-07-10', '10:10:00', 'BMW', 'Automatic', 'siva', 1200, 'G-pay', ' Complete');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `pick_up` varchar(40) NOT NULL,
  `drop_in` varchar(40) NOT NULL,
  `ride_type` varchar(30) NOT NULL,
  `time_ride` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
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
(1, 'Abdullah M', 'abdullah.bca98@gmail', '2147483647', 'srtaert', 'eafwrse', 'one_trip', 'immediate_trip', '2023-06-11', '07:06', 'HatchBack', 'Automatic', '', '', '0', ''),
(2, 'Abdullah M', 'abdullah.bca98@gmail', '2147483647', 'srtaert', 'eafwrse', 'round_trip', 'immediate_trip', '2023-06-12', '09:06', 'HatchBack', 'Automatic', '', '', '0', ''),
(5, 'Abdullah M', 'abdullah.bca98@gmail', '2147483647', 'sdasd', 'ASadaws', 'one_trip', 'immediate_trip', '2023-06-12', '12:43', 'HatchBack', 'Automatic', 'siva', '', '0', 'Driver Assigned'),
(6, 'Abdullah M', 'abdullah.bca98@gmail', '8489351923', 'srtaert', 'eafwrse', 'round_trip', 'immediate_trip', '2023-06-12', '12:48', 'Sedan', 'Automatic', 'Amal', '', '0', 'Confirm'),
(7, 'Abdullah M', 'abdullah.bca98@gmail', '8489351923', 'sdasd', 'eafwrse', 'one_trip', 'schedule_trip', '2023-06-13', '10:25', 'HatchBack', 'Automatic', 'jijo', 'G-pay', '100000', '0'),
(8, 'gopal', 'gopal@gmail.com', '12343212', 'dtsgyd', 'ftesae', 'hospital_trip', 'schedule_trip', '2023-06-21', '14:44', 'sedan', 'manual', '', '', '', 'Cancel'),
(9, 'gopal', 'gopal@gmail.com', '12343212', 'dtsgyd', 'ftesae', 'round_trip', 'schedule_trip', '2023-06-21', '14:44', 'sedan', 'manual', 'Amal', '', '1000', 'Re-Schedule'),
(10, 'gopal', 'gopal@gmail.com', '12343212', 'vela', 'ghoul', 'hospital_trip', 'immediate_trip', '2023-07-04', '18:51', 'Innova', 'automatic', 'Amal', '', '', 'Driver Assigned'),
(11, 'gopal', 'gopal@gmail.com', '9876543214', 'dtsgyd', 'ftesae', 'one_trip', 'schedule_trip', '2023-07-04', '11:33', 'BMW', 'automatic', '', '', '', 'Re_Schedule'),
(12, 'Red', 'red@gmail.com', '123453214', 'dtsgyd', 'ftesae', 'round_ride', 'schedule_trip', '2023-07-06', '11:33', 'BMW', 'manual', '', '', '', 'Re_Schedule'),
(13, 'ned', 'ned@gmail.com', '123453214', 'dtsgyd', 'ftesae', 'hospital_trip', 'schedule_trip', '2023-07-16', '11:33', 'toyoto', 'manual', '', '', '', 'Driver Assigned'),
(14, 'dash', 'dash@gmail.com', '9876543210', 'aluva', 'JPG', 'one_trip', 'immediate_trip', '09-07-2023', '18:10', 'innova', 'Automatic', '', '', '', ''),
(15, 'dash', 'dash@gmail.com', '9876543210', 'aluva', 'JPG', 'one_trip', 'schedule_trip', '10-07-2023', '12:10', 'innova', 'Automatic', '', '', '', ''),
(16, 'sonic', 'sonic@gmail.com', '9876543210', 'jpg', 'aluva', 'round_trip', 'immediate_trip', '', '18:10', 'innova', 'Automatic', '', '', '', ' Confirm'),
(18, 'jay', 'jay@gmail.com', '9246875321', 'erunakulaam', 'jpg', '-- select --', 'immediate_trip', '10-07-2023', '02:20:56pm', '', '', '', '', '', ''),
(19, 'meghana', 'meg@gmail.com', '9887765432', 'town', 'jpg', 'round_trip', 'schedule_trip', '', '', '', '', '', '', '', ''),
(20, '', '', '', '', '', 'hospital_trip', 'immediate_trip', '10-07-2023', '14:33:09pm', '', '', '', '', '', ''),
(21, '', '', '', '', '', 'hospital_trip', 'immediate_trip', '10-07-2023', '02:33:55:pm', '', '', '', '', '', ''),
(22, 'Jijo', 'jijo@gmail.com', '6789054321', 'Aluva', 'edapally', 'one_trip', 'schedule_trip', '2023-07-12', '10:05', 'hghgj', 'xdgfh', '', '', '', ''),
(23, 'Jijo', 'jijo@gmail.com', '6789054321', 'Aluva', 'edapally', 'one_trip', 'immediate_trip', '12-07-2023', '07:37:22:am', 'hghgj', 'Automatic', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `d_id` int(10) NOT NULL,
  `d_joining` varchar(20) NOT NULL,
  `d_type` varchar(10) NOT NULL,
  `d_name` varchar(30) NOT NULL,
  `d_mobile` varchar(13) NOT NULL,
  `d_mail` varchar(30) NOT NULL,
  `d_position` varchar(30) NOT NULL,
  `d_img` tinytext NOT NULL,
  `d_password` varchar(20) NOT NULL,
  `d_password_confirm` varchar(20) NOT NULL,
  `d_date` varchar(20) NOT NULL,
  `d_status` varchar(20) NOT NULL,
  `d_complete` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`d_id`, `d_joining`, `d_type`, `d_name`, `d_mobile`, `d_mail`, `d_position`, `d_img`, `d_password`, `d_password_confirm`, `d_date`, `d_status`, `d_complete`) VALUES
(5, '2023-07-06', 'Driver', 'Abdullah M', '08489351923', 'abdullah.bca98@gmail.com', 'team b ', 'team-5.jpg', '1234', '1234', '', 'waiting  next', '23'),
(6, '', '', 'siva', '1234567890', 'siva@gmail.com', '', '', '', '', '', '', ''),
(7, '', '', 'siva', '1234567890', 'siva@gmail.com', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `t_joining` varchar(20) NOT NULL,
  `t_type` varchar(20) NOT NULL,
  `t_name` varchar(30) NOT NULL,
  `t_mail` varchar(30) NOT NULL,
  `t_mobile` varchar(30) NOT NULL,
  `t_position` varchar(30) NOT NULL,
  `t_img` longtext NOT NULL,
  `t_password` varchar(20) NOT NULL,
  `t_password_confirm` varchar(20) NOT NULL,
  `t_date` varchar(20) NOT NULL,
  `t_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `t_joining`, `t_type`, `t_name`, `t_mail`, `t_mobile`, `t_position`, `t_img`, `t_password`, `t_password_confirm`, `t_date`, `t_status`) VALUES
(1, '2023-06-12 11:25:00', '', 'Manikandan Ak', '', '', 'CEO', 'ceo1.jpg', '', '', '', ''),
(2, '2023-07-06 12:36:04', '', 'Stephin Jose ', '', '', 'Account HR', 'account.jpg', '', '', '', ''),
(3, '2023-03-16 16:03:00', '', 'Arun Chandrasekaran', '', '', 'COO', 'coo.jpg', '', '', '', ''),
(4, '2023-06-01 16:13:00', '', 'Josen Kuriakose', '', '', 'Operations Head', 'team-5.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
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
(6, '2023-06-11 11:47:00', 'NANCY JACOB', 'I recently experienced the professional driver assistance service provided by DAFY,\r\n                                    and I am delighted to share my positive experience. \r\n                                    From the moment I engaged with the driver, he displayed a high level of professionalism, \r\n                                    attentiveness, and respect, making me feel safe and comfortable throughout my journeys. \r\n                                    He is very attentive to my specific needs and preferences like adjusting the temperature, \r\n                                    ensuring');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `complete_ride`
--
ALTER TABLE `complete_ride`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`d_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `b_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cancel`
--
ALTER TABLE `cancel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `complete_ride`
--
ALTER TABLE `complete_ride`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
