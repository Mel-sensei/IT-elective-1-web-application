-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 04:31 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogify_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'Melmark', '123');

-- --------------------------------------------------------

--
-- Table structure for table `logs_db`
--

CREATE TABLE `logs_db` (
  `log_id` int(11) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `reciever` varchar(30) NOT NULL,
  `DOC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message_table`
--

CREATE TABLE `message_table` (
  `mess_id` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `receiver` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `message_status` varchar(20) NOT NULL,
  `date_recieve` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_table`
--

INSERT INTO `message_table` (`mess_id`, `sender`, `receiver`, `content`, `message_status`, `date_recieve`) VALUES
(1, 24, 18, 'what the fuck men', 'recieved', '2021-12-15'),
(2, 18, 25, 'whut whut whut?!?!!?!??!', 'read', '2021-12-15'),
(3, 18, 26, 'wewewz', 'recieved', '2021-12-16'),
(4, 18, 27, 'asadasdasd', 'read', '2021-12-16'),
(5, 26, 24, 'asdasd', 'read', '2021-12-16'),
(6, 27, 26, 'asdadsasd', 'read', '2021-12-16'),
(7, 24, 25, 'asdadsass', 'read', '2021-12-17'),
(8, 27, 30, 'asdadadsads', 'read', '2021-12-16'),
(9, 27, 30, 'asdasdadsasdsa', 'read', '2021-12-16'),
(10, 29, 24, 'asdasdasasdsa', 'read', '2021-12-16'),
(11, 28, 25, 'asdasdasdas', 'recieved', '2021-12-16'),
(12, 40, 28, 'asdasdasdsds', 'read', '2021-12-16'),
(13, 25, 27, 'asdasdasdas', 'read', '2021-12-18'),
(14, 24, 25, 'asdadsa', 'read', '2021-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `pet_table`
--

CREATE TABLE `pet_table` (
  `pet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pet_image` varchar(30) NOT NULL,
  `pet_name` varchar(30) NOT NULL,
  `pet_breed` varchar(30) NOT NULL,
  `pet_age` varchar(11) NOT NULL,
  `pet_gender` varchar(30) NOT NULL,
  `pet_bio` varchar(90) NOT NULL,
  `pet_address` varchar(30) NOT NULL,
  `pet_stats` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet_table`
--

INSERT INTO `pet_table` (`pet_id`, `user_id`, `pet_image`, `pet_name`, `pet_breed`, `pet_age`, `pet_gender`, `pet_bio`, `pet_address`, `pet_stats`) VALUES
(34, 17, '1.jpg', 'asd', 'asd', '21', 'Female', 'asdasdasdjbasjdn,ajdashdaksdnaksdasd', 'asd', 'Active'),
(42, 13, '3.jpg', 'Asuna', 'Boston terrier', '14', 'Male', 'Hi I... want breeding partner?? ', 'Sallapadan', 'Not active'),
(45, 27, '6.jpg', 'shememe', 'greyhound', '14', 'Female', 'Hi I... want breeding partner?? ', 'Jabonga', 'Active'),
(46, 24, '7.jpg', 'shuna', 'Boston terrier', '14', 'Female', 'Hi I... want breeding partner?? ', 'Santa Josefa', 'Active'),
(47, 25, '8.jpg', 'wen wen', 'French bulldog', '12', 'Male', 'Hi I... want breeding partner?? ', 'Trento', 'Active'),
(48, 30, '9.jpg', 'Frey', 'French bulldog', '5', 'Female', 'Hi I... want breeding partner?? ', 'Daraga', 'Active'),
(49, 28, '10.jpg', 'shikamaru', 'greyhound', '9', 'Female', 'Hi I... want breeding partner?? ', 'Malilipot', 'Active'),
(50, 26, '11.jpg', 'naruto', 'French bulldog', '8', 'Male', 'Hi I... want breeding partner?? ', 'Santo Domingo', 'Active'),
(51, 26, '12.jpg', 'tanjiro', 'foxhound', '7', 'Male', 'Hi I... want breeding partner?? ', 'Bugasong', 'Active'),
(52, 29, '13.jpg', 'nezuko', 'foxhound', '6', 'Female', 'Hi I... want breeding partner?? ', 'Tobias Fornier', 'Active'),
(53, 28, '14.jpg', 'zenitsu', 'Finnish spitz', '7', 'Male', 'Hi I... want breeding partner?? ', 'Casiguran,aurora', 'Active'),
(54, 27, '15.jpg', 'hashi', 'Finnish spitz', '5', 'Female', 'Hi I... want breeding partner?? ', 'Dinalungan,basilan', 'Active'),
(55, 26, '16.jpg', 'mango', 'Finnish spitz', '9', 'Male', 'Hi I... want breeding partner?? ', 'Dinalungan,basilan', 'Active'),
(56, 30, '7.jpg', 'orange', 'Finnish spitz', '14', 'Female', 'Hi I... want breeding partner?? ', 'Maluso,basilan', 'Active'),
(57, 29, '6.jpg', 'bilog', 'Finnish spitz', '12', 'Female', 'Hi I... want breeding partner?? ', 'Tuburan, bataan', 'Active'),
(58, 25, '9.jpg', 'pakwan', 'German shepherd', '4', 'Male', 'Hi I... want breeding partner?? ', 'Orani,bataan', 'Active'),
(59, 26, '10.jpg', 'bili', 'German shepherd', '14', 'Female', 'Hi I... want breeding partner?? ', 'Calaca, batangas', 'Active'),
(60, 24, '11.jpg', 'chismis', 'German shepherd', '9', 'Male', 'Hi I... want breeding partner?? ', 'Nasugbu,batangas', 'Active'),
(61, 23, '12.jpg', 'kirito', 'German shepherd', '12', 'Male', 'Hi I... want breeding partner?? ', 'Baguio,benquet', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `post_table`
--

CREATE TABLE `post_table` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(30) NOT NULL,
  `th_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(30) NOT NULL,
  `user_image` varchar(30) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_cn` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_fullname`, `user_image`, `user_address`, `user_email`, `user_cn`, `password`) VALUES
(18, 'Mel markDela cruz', 'melmark.jpg', 'calapacuan', 'ggmelmark@gmail.com', '09123456789', '123456789'),
(24, 'Algen Carian', 'algen.jpg', 'Iram new cabalan', 'algen@gmail.com', '0912351245', '123456'),
(25, 'Berwyn Felismenia', 'berwyn.jpg', 'Calapandayan Subic,Zambales', 'Berwyn@gmail.com', '09124578963', 'BerwynSakalam'),
(26, 'Romeo Perez', 'romeo.jpg', 'Olongapo City', 'Romeo@gmail.com', '091124557', 'awitRomeo'),
(27, 'John wick', 'john.jpg', 'California USA', 'wick@john.com', '09124578999', '9821123'),
(28, 'Mr. Bean', 'bean.jpg', 'Unknown', 'bean@gmail.com', '09558746523', '123123123'),
(29, 'Michael Jackson', 'michael.jpg', 'USA', 'michael@gmail.com', '09123456789', '123131'),
(30, 'James Bond', 'james.jpg', 'San Andress', 'james@gmail.com', '09456789123', '1232112');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `logs_db`
--
ALTER TABLE `logs_db`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `message_table`
--
ALTER TABLE `message_table`
  ADD PRIMARY KEY (`mess_id`);

--
-- Indexes for table `pet_table`
--
ALTER TABLE `pet_table`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `post_table`
--
ALTER TABLE `post_table`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs_db`
--
ALTER TABLE `logs_db`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_table`
--
ALTER TABLE `message_table`
  MODIFY `mess_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pet_table`
--
ALTER TABLE `pet_table`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `post_table`
--
ALTER TABLE `post_table`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
