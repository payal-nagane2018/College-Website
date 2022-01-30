-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 09:51 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `phone` int(200) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`) VALUES
(6, 'PAYAL RAMESH NAGANE', 'naganepayal28@gmail.com', 'Regarding Admission', 2147483647, 'i am interested to take admission in your college.');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `hod` varchar(500) NOT NULL,
  `body` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`id`, `name`, `hod`, `body`) VALUES
(1, 'Automobile Engineering ', '	Mr. Bandgar Raghunath T', 'Automobile Engineering is one of the most challenging careers now a days.Due to demand & passion on vehicles automobile engineers has lot many opportunaties in India & in abroad as well.It is the study of Engineering that deals with designing the vehicle,repairing,servicing vehicles.Automobile Engineer should be innovative & dedicating to their work.It envolves studying motor systems, design, technology & many more.'),
(2, 'Civil Engineering', '	Mr. Korabu Imam J', 'Civil Engineering is a professional engineering discipline that deals with the design, construction, and maintenance of the physical and naturally built environment, including works like roads, bridges, canals, dams, and buildings. Civil Engineering is the oldest engineering discipline after military engineering, and it was defined to distinguish non-military engineering from military engineering.'),
(3, ' Computer Technology ', 'Mr. Ghanawajeer Dnyaneshwar J.', 'The department with society concentrates on achieving the excellence in technical education. The department is upgraded infrastructure wise to meet the changing technological environment.'),
(4, 'Electrical Engineering', '	Mr. Korake Dattatraya M.', 'Electrical Engineering is one of the fundamental branches of engineering which deals with the technology of electricity, especially the design & application of circuitry & equipments for power generation & distribution, machine control & communication.');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `body` varchar(1000) NOT NULL,
  `starttime` time NOT NULL,
  `finishtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `body`, `starttime`, `finishtime`) VALUES
(1, 'Training Event', '2019-05-14', 'Practical Experience, Training Sessions, Theory Sessions', '14:21:00', '15:22:00'),
(2, 'Annual Gathering', '2000-09-07', 'Laughter, Learning, Sharing, Participation.', '12:34:00', '14:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `student_id` int(200) NOT NULL,
  `subject_id` int(200) NOT NULL,
  `mark` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`student_id`, `subject_id`, `mark`) VALUES
(1, 1, 98),
(1, 2, 85),
(1, 3, 88),
(1, 4, 66),
(2, 1, 60),
(2, 2, 50),
(2, 3, 30),
(2, 4, 50),
(3, 1, 60),
(3, 2, 66),
(3, 3, 59),
(3, 4, 66),
(4, 1, 40),
(4, 2, 60),
(4, 3, 60),
(4, 4, 40);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(100) NOT NULL,
  `roll_no` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mobile_no` int(200) NOT NULL,
  `email_id` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `roll_no`, `name`, `mobile_no`, `email_id`, `address`, `gender`, `password`) VALUES
(1, 3001, 'Pra', 1234567890, 'pra@gmail.com', 'Pune', 'Female', 'Pra@123'),
(2, 3002, 'Ajay', 2134567809, 'Ajay@gmail.com', 'Solapur', 'Male', 'Ajay@123'),
(4, 3004, 'Neha', 2147483647, 'Neha@gmail.com', 'Sangli', 'Female', 'Neha@123');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(100) NOT NULL,
  `sub_code` int(200) NOT NULL,
  `sub_name` varchar(500) NOT NULL,
  `out_of` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `sub_code`, `sub_name`, `out_of`) VALUES
(1, 3301, 'Java', 100),
(2, 3302, 'HTML', 100),
(3, 3303, 'MongoDB', 100),
(4, 3304, 'JavaScript', 100);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `dept_name` varchar(500) NOT NULL,
  `experience` int(100) NOT NULL,
  `dateofappointment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `designation`, `qualification`, `dept_name`, `experience`, `dateofappointment`) VALUES
(1, 'Mr. James Smith', 'Principal', 'M.Sc.Ed., M.Phil, DCO, DSM', 'Electrical Engineering', 3, '2022-01-09'),
(2, 'Miss. Maria Garcia', 'Head Mistress ', 'M.A., M.Ed., M.Phil', 'E & TC Department', 6, '2013-02-27'),
(4, 'Miss. Aarthi Garcia', 'Head Mistress ', 'M.Sc.Ed., M.Phil, DCO, DSM', 'Computer Technology', 3, '2024-06-12'),
(5, 'Mr. Ganesh James ', 'Head Mistress ', 'M.A., M.Ed., M.Phil', 'Electrical Engineering', 4, '2025-07-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
