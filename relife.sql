-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 04, 2022 at 11:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relife`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcondition`
--

CREATE TABLE `addcondition` (
  `condition_id` int(11) NOT NULL,
  `condition_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcondition`
--

INSERT INTO `addcondition` (`condition_id`, `condition_name`) VALUES
(1, 'Corona'),
(2, 'Diabetes'),
(3, 'Pressure'),
(4, 'Heart '),
(5, 'Pregnant'),
(6, 'Virus C'),
(7, 'Animia'),
(14, 'Non of the above');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_address` varchar(255) NOT NULL,
  `admin_phone` varchar(255) NOT NULL,
  `admin_gender` varchar(255) NOT NULL,
  `admin_birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `admin_email`, `admin_pass`, `admin_address`, `admin_phone`, `admin_gender`, `admin_birthdate`) VALUES
(12, 'omar', 'omar samer', 'omar@gmail.com', '12345678', 'dokki', '01022271062', 'male', '2000-04-10'),
(13, 'hussien adawi', 'hussien', 'hussien@gmail.com', '1234567891011', 'faisal', '01022271062', 'male', '2022-09-02'),
(14, 'aisha salah', 'aisha', 'aisha@gmail.com', '1234567891011', '20 Nasr City', '01022271066', 'female', '2022-09-10'),
(15, 'ezz', 'ezz', 'ezz@gmail.com', '1234567891011', 'shekh zaid', '01263518957', 'male', '2022-09-22'),
(16, 'Mostafa Ali', 'Mostafa', 'mostafa@yahoo.com', 'mostafa123', '29 Nasr City', '11111111111', 'male', '2022-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `feedback` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`feedback`, `user_id`, `contact_id`) VALUES
('Very Good Experiance', 12, 4),
('Very Good', 14, 6),
('Good To Visit ', 16, 7),
('Thank you for your help Mr Ahmed Mohamed', 11, 10);

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `don_id` int(11) NOT NULL,
  `last_check` date NOT NULL,
  `location` varchar(255) NOT NULL,
  `day` date NOT NULL,
  `time` time NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`don_id`, `last_check`, `location`, `day`, `time`, `user_id`) VALUES
(28, '2022-09-01', 'dokki', '2022-09-01', '21:06:42', 11),
(29, '2022-09-10', 'dokki', '2022-09-06', '23:24:33', 15),
(30, '2022-09-28', 'hadaik el quba', '2022-09-16', '25:24:56', 16),
(31, '2022-09-10', 'hurghada', '2022-09-12', '22:25:25', 14),
(33, '2021-01-06', 'feisal', '2022-09-19', '15:33:00', 25);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `liter` varchar(255) NOT NULL,
  `file` longtext DEFAULT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `reason`, `liter`, `file`, `bloodtype`, `address`, `user_id`) VALUES
(12, 'Need Blood', '3', 'unnamed.png', 'A+', 'dokki', 12),
(13, 'Need Blood', '2', 'unnamed.png', 'A+', 'dokki', 13),
(14, 'Need Blood', '1', 'unnamed.png', 'AB+', 'dokki', 14),
(15, 'Need Blood', '2', 'unnamed.png', 'o+', 'dokki', 11),
(16, 'Need Blood', '5', 'unnamed.png', 'A+', 'maadi', 17),
(17, 'Gonna Die', '3', 'unnamed.png', 'AB+', 'hadaik el quba', 18),
(18, 'hello', '99', NULL, 'AB+', 'djhvdd', 11);

-- --------------------------------------------------------

--
-- Table structure for table `situation`
--

CREATE TABLE `situation` (
  `user_id` int(11) NOT NULL,
  `condition_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `situation`
--

INSERT INTO `situation` (`user_id`, `condition_id`) VALUES
(12, 2),
(15, 1),
(14, 7),
(13, 5),
(16, 3),
(11, 1),
(11, 2),
(12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_birthdate` date NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `bloodtype` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_birthdate`, `user_address`, `bloodtype`, `user_gender`, `user_phone`) VALUES
(11, 'noura', 'noura@gmail.com', 'noura123', '2014-09-18', 'tagamoaa', 'A+', 'female', '01055569321'),
(12, 'omar ', 'omarr@gmail.com', '1234567891011', '2022-09-02', 'hadayk el quba', 'O-', 'Male', '01446833660'),
(13, 'menna', 'menna@gmail.com', '1234567891011', '2022-09-01', 'faisal', 'AB', 'female', '01019969945'),
(14, 'aya', 'aya@gmail.com', '1234567891011', '2022-09-02', 'faisal', 'A+', 'female', '01089615238'),
(15, 'mayar', 'mayar@gmail.com', '1234567891011', '2022-09-08', 'fayoum', 'A+', 'female', '01045862519'),
(16, 'mostafa', 'mostafa@gmail.com', '1234567891011', '2022-09-14', 'dokki', 'AB-', 'male', '011658932015'),
(17, 'moatasem', 'moatasem@gmail.com', '1234567891011', '2022-09-01', 'dokki', 'A+', 'male', '01256943328'),
(18, 'hana', 'hana@gmail.com', '1234567891011', '2022-09-22', 'maadi', 'A+', 'female', '015489635862'),
(20, 'Yassin', 'yassin@gmail.com', 'yassin123', '2022-09-16', '218 nasr city', 'B-', 'M', '11111111111'),
(21, 'salma', 'salma@gmail.com', 'salma123', '2022-09-23', '210 nasr city', 'B-', 'F', '77777777777'),
(23, 'yasser', 'yasser@gmail.com', '12345678', '2000-04-10', 'dokki', 'O+', 'M', '1022271062'),
(25, 'mostafaa', 'mostafaa@gmail.com', '12345678', '2003-03-05', 'feisal', 'A+', 'M', '01121520162');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcondition`
--
ALTER TABLE `addcondition`
  ADD PRIMARY KEY (`condition_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`don_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `situation`
--
ALTER TABLE `situation`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `condition_id` (`condition_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcondition`
--
ALTER TABLE `addcondition`
  MODIFY `condition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doner`
--
ALTER TABLE `doner`
  MODIFY `don_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contactus`
--
ALTER TABLE `contactus`
  ADD CONSTRAINT `contactus_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doner`
--
ALTER TABLE `doner`
  ADD CONSTRAINT `doner_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `situation`
--
ALTER TABLE `situation`
  ADD CONSTRAINT `situation_ibfk_1` FOREIGN KEY (`condition_id`) REFERENCES `addcondition` (`condition_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `situation_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
