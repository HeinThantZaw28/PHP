-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 10:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `user_id`, `post_id`, `created_date`, `modified_date`) VALUES
(1, 'one', 4, 16, '2022-02-09', '2022-02-09'),
(2, 'two', 4, 16, '2022-02-09', '2022-02-09'),
(3, 'hein', 4, 16, '2022-02-09', '2022-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `like_data`
--

CREATE TABLE `like_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `like_data`
--

INSERT INTO `like_data` (`id`, `user_id`, `post_id`) VALUES
(12, 4, 12),
(13, 4, 14),
(14, 4, 15),
(15, 2, 15),
(16, 2, 14),
(17, 6, 15),
(18, 6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `online_user`
--

CREATE TABLE `online_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `active_date` datetime NOT NULL,
  `login_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_photo` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `user_id`, `post_photo`, `created_date`, `modified_date`) VALUES
(1, 'abcd', 'defh', 2, '', '2022-02-07', '2022-02-07'),
(8, 'abcd', 'defh', 2, '', '2022-02-07', '2022-02-07'),
(9, 'abcd', 'defh', 4, 'english.jpg', '2022-02-07', '2022-02-07'),
(11, 'abcd', 'defh', 2, '', '2022-02-07', '2022-02-07'),
(12, 'English Language', 'abcdefg', 2, '', '2022-02-07', '2022-02-07'),
(14, 'View', 'mountain', 4, 'views.jpg', '2022-02-07', '2022-02-08'),
(15, 'About me', 'I am hoo', 4, '', '2022-02-08', '2022-02-08'),
(16, 'Same view', 'i like hiking', 6, '620227fb82af2.jpg', '2022-02-08', '2022-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `modified_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `cpassword`, `phone`, `dob`, `gender`, `photo`, `address`, `created_date`, `modified_date`) VALUES
(2, 'kyaw', 'kyaw@gmail.com', '234', '234', '0976542167', '2022-02-08', 'Male', 'view.jpg', 'Yangon', '2022-02-03', '2022-02-03'),
(4, 'Hoo', 'hoo@gmail.com', '123', '123', '67890985678', '0000-00-00', 'Male', 'empty.png', 'Yangon', '2022-02-04', '2022-02-04'),
(5, 'tom holland', 'tomholland@gmail.com', 'tom', 'tom', '0976567433', '2007-06-22', 'Male', 'tomholland.jpg', 'Washington', '2022-02-07', '2022-02-07'),
(6, 'Loki', 'loki@gmail.com', 'loki', 'loki', '123456765', '2000-06-29', 'Male', 'loki.jpg', 'Asgard', '2022-02-07', '2022-02-07'),
(7, 'Dr.Strange', 'drstrange@gmail.com', 'strange', 'strange', '456787654', '2013-01-08', 'Male', 'drstrange.jpg', 'New York', '2022-02-07', '2022-02-07'),
(8, 'Hulk', 'hulk@gmail.com', 'hulk', 'hulk', '5678909876', '2019-02-05', 'Male', 'hulk.jpg', 'London', '2022-02-07', '2022-02-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_data`
--
ALTER TABLE `like_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_user`
--
ALTER TABLE `online_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `like_data`
--
ALTER TABLE `like_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `online_user`
--
ALTER TABLE `online_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
