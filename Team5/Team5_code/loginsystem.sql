-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2018 at 01:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(10) NOT NULL,
  `rec_id` int(10) DEFAULT NULL,
  `job_location` varchar(256) DEFAULT NULL,
  `job_salary` int(10) DEFAULT NULL,
  `job_keyword` varchar(256) DEFAULT NULL,
  `job_description` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `rec_id`, `job_location`, `job_salary`, `job_keyword`, `job_description`) VALUES
(1, 4, 'San Jose', 100000, 'ML', 'Test1'),
(2, 5, 'Arlington', 120000, 'CSS', 'Test2');

-- --------------------------------------------------------

--
-- Table structure for table `job_student`
--

CREATE TABLE `job_student` (
  `user_id` int(10) DEFAULT NULL,
  `job_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_student`
--

INSERT INTO `job_student` (`user_id`, `job_id`) VALUES
(3, 1),
(2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `rec_id` int(10) NOT NULL,
  `rec_first` varchar(256) NOT NULL,
  `rec_last` varchar(256) NOT NULL,
  `rec_email` varchar(256) NOT NULL,
  `rec_uname` varchar(256) NOT NULL,
  `rec_pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`rec_id`, `rec_first`, `rec_last`, `rec_email`, `rec_uname`, `rec_pass`) VALUES
(4, 'Suma', 'Madhuri', 'suma@gmail.com', 'suma', '$2y$10$CXKKXMoibHYsPkvTiTa72eoWWSboSaPjPJ.38ds.5L..1pGSgPckS'),
(5, 'Raghul', 'Kanagaraj', 'raghul@gmail.com', 'raghul', '$2y$10$K0F1rIRfAZq.Sq5uyzrTuOAiV7vfSpOMBpMVh1ZiocZUAZJcWltg2');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `user_id` int(10) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL,
  `user_degree` varchar(256) DEFAULT NULL,
  `user_degree_in` varchar(256) DEFAULT NULL,
  `user_graduation_semester` varchar(256) DEFAULT NULL,
  `user_graduation_year` varchar(256) DEFAULT NULL,
  `user_skills` varchar(1024) DEFAULT NULL,
  `user_relocation` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`, `user_degree`, `user_degree_in`, `user_graduation_semester`, `user_graduation_year`, `user_skills`, `user_relocation`) VALUES
(3, 'Karthik', 'Gadiraju', 'gkvarma9177@gmail.com', 'kv1458', '$2y$10$IQ2HzbzL3.TUtLvEZ97d6.Xkwe1Fvc0ZAM8jnMHy/shbgL6g9uCL6', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Ivan', 'Huang', 'ivan@gmail.com', 'ivan', '$2y$10$yAn13kv2NxxSaTGL8uuAPOmByS7SGnsjciBddpvelPp7m/9C492ku', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'SudeepKumar', 'Shetty', 'sudeep@gmail.com', 'sudeep', '$2y$10$8n.oTEKlTuW/1drlxsiytutrWOTfHI50BHhCLpRUCRjd3dE.wpING', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `rec_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
