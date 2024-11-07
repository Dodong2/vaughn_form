-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 02:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_gender` varchar(255) NOT NULL,
  `student_age` int(255) NOT NULL,
  `student_course` varchar(255) NOT NULL,
  `last_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `student_email`, `student_gender`, `student_age`, `student_course`, `last_updated`) VALUES
(1, 'Vaughn', 'Vaughn@gmail.com', 'Male', 25, 'BSIT', '2024-11-07 13:00:29'),
(2, 'Vaughn', 'vaughn@gmail.com', 'Male', 23, 'BSIT', '2024-11-07 13:00:29'),
(3, 'Vaughn1', 'Vaughn1@gmail.com', 'Male', 23, 'HRM', '2024-11-07 13:00:29'),
(4, 'test1', 'test1@gmail.com', 'Male', 23, 'BSIT', '2024-11-07 13:00:29'),
(5, 'VaughnRovinGironella', 'VaughnRovinGironella@gmail.com', 'Male', 23, 'BSIT', '2024-11-07 13:00:29'),
(7, 'Gironellan Vaughn Rovin', 'VaughnRovinGironella@gmail.com', 'Male', 23, 'BSIT', '2024-11-07 13:01:45'),
(8, 'Vaughn', 'vaughn@gmail.com', 'Male', 4342, 'BSIT', '2024-11-07 13:01:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
