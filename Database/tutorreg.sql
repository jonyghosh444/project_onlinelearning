-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 06:53 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `c`
--

CREATE TABLE `c` (
  `video no` int(11) NOT NULL,
  `id` int(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c`
--

INSERT INTO `c` (`video no`, `id`, `video`, `tittle`) VALUES
(9, 19, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', 'car gaming'),
(10, 19, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', 'f'),
(11, 19, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', 'c #1'),
(12, 19, 'Learn PYTHON in 5 MINUTES.mp4', 'c #2'),
(13, 19, 'SFML - Setup on Dev c  .mp4', 'c #3'),
(14, 19, 'SFML - Setup on Dev c  .mp4', 'c #4'),
(15, 19, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', 'c #5'),
(16, 22, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '001 no tutorial'),
(17, 22, 'SFML - Setup on Dev c  .mp4', '002 no tutorial'),
(18, 22, 'SFML - Setup on Dev c  .mp4', '003 no tutorial'),
(19, 22, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', '004 no tutorial'),
(20, 22, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '005 no tutorial'),
(21, 22, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', '006 no tutorial'),
(22, 24, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', 'durjoy'),
(23, 22, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', '#6'),
(24, 25, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '1no'),
(25, 26, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', 'tutorial  #1'),
(26, 22, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', 'tutorial 10'),
(27, 27, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', 'tutorial 1'),
(28, 28, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '1 no tutorial');

-- --------------------------------------------------------

--
-- Table structure for table `cplus`
--

CREATE TABLE `cplus` (
  `video no` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cplus`
--

INSERT INTO `cplus` (`video no`, `id`, `video`, `tittle`) VALUES
(1, 19, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', 'dfd'),
(2, 19, 'Learn PYTHON in 5 MINUTES.mp4', 'jhhgj'),
(3, 22, 'SFML - Setup on Dev c  .mp4', '001 no tutorial'),
(4, 22, 'Learn PYTHON in 5 MINUTES.mp4', '002 no tutorial'),
(5, 22, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', '003 no tutorial'),
(6, 24, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '#1'),
(7, 25, 'SFML - Setup on Dev c  .mp4', 'paru'),
(8, 26, 'Learn PYTHON in 5 MINUTES.mp4', '1no'),
(9, 27, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', 'c++ 1'),
(10, 28, 'SFML - Setup on Dev c  .mp4', 'c++ 1');

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `video no` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `html`
--

INSERT INTO `html` (`video no`, `id`, `video`, `tittle`) VALUES
(1, 19, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', 'wdwdwd'),
(2, 19, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', 'wdd'),
(3, 22, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '001 no tutorial'),
(4, 22, 'SFML - Setup on Dev c  .mp4', '002 no tutorial'),
(5, 22, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', '003 no tutorial'),
(6, 28, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '#1 Html 5 ');

-- --------------------------------------------------------

--
-- Table structure for table `java`
--

CREATE TABLE `java` (
  `video no` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `java`
--

INSERT INTO `java` (`video no`, `id`, `video`, `tittle`) VALUES
(1, 19, 'SFML - Setup on Dev c  .mp4', 'wdwd'),
(2, 19, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', 'wdwd'),
(3, 22, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '001 no tutorial'),
(4, 22, 'Learn PYTHON in 5 MINUTES.mp4', '002 no tutorial'),
(5, 22, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', '003 no tutorial'),
(6, 26, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', 'tamim tutorial 2');

-- --------------------------------------------------------

--
-- Table structure for table `javascript`
--

CREATE TABLE `javascript` (
  `video no` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `javascript`
--

INSERT INTO `javascript` (`video no`, `id`, `video`, `tittle`) VALUES
(1, 19, 'SFML - Setup on Dev c  .mp4', 'wdwd'),
(2, 19, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '111wew'),
(3, 22, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '001 no tutorial'),
(4, 22, 'Learn PYTHON in 5 MINUTES.mp4', '002 no tutorial'),
(5, 22, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '003 no tutorial');

-- --------------------------------------------------------

--
-- Table structure for table `php`
--

CREATE TABLE `php` (
  `video no` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `php`
--

INSERT INTO `php` (`video no`, `id`, `video`, `tittle`) VALUES
(1, 19, 'SFML - Setup on Dev c  .mp4', 'gfh'),
(2, 19, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', 'dfdf'),
(3, 22, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '001 no tutorial'),
(4, 22, 'Learn PYTHON in 5 MINUTES.mp4', '002 no tutorial'),
(5, 22, 'SFML - Setup on Dev c  .mp4', '003 no tutorial'),
(6, 22, 'SFML - Setup on Dev c  .mp4', '004 no tutorial');

-- --------------------------------------------------------

--
-- Table structure for table `python`
--

CREATE TABLE `python` (
  `video no` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `python`
--

INSERT INTO `python` (`video no`, `id`, `video`, `tittle`) VALUES
(1, 19, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', 'effe'),
(2, 19, 'Learn PYTHON in 5 MINUTES.mp4', 'wdw'),
(3, 19, 'Learn PYTHON in 5 MINUTES.mp4', 'python #1'),
(4, 22, 'Learn PYTHON in 5 MINUTES.mp4', '001 no tutorial'),
(5, 22, 'Learn PYTHON in 5 MINUTES.mp4', '002 no tutorial'),
(6, 22, 'What is Python  Python Programming For Beginners  Python Tutorial  Edureka.mp4', '003 no tutorial'),
(7, 22, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4', '004 no tutorial');

-- --------------------------------------------------------

--
-- Table structure for table `studentsignup`
--

CREATE TABLE `studentsignup` (
  `id` int(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(16) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentsignup`
--

INSERT INTO `studentsignup` (`id`, `name`, `firstname`, `lastname`, `password`, `cpassword`, `email`, `age`, `image`) VALUES
(8, 'jonyjg', '   Jony', '   Ghosh', '1234', '1234', '   jonyghosh444@gmail.com', 24, 'Jony.jpg'),
(9, 'karim', '   Mr.', '  Karim', '1234', '1234', '   Karim@gmail.com', 48, 'karim.jpg'),
(14, 'rocky', ' Rocky', ' Vai', '1234', '1234', ' rocky@yahoo.com', 32, 'wp6574645.jpg'),
(16, 'Tanny', ' Tanny', ' Ghosh', '1234', '1234', ' tanny@gmail.com', 17, '151290249_287122922799504_8353720887636775290_n.jpg'),
(17, 'someone', ' some', ' one', '1234', '1234', ' some', 21, '1OuyUadphcgZuqzn469ZHsw.png'),
(18, 'saikat1', ' saikat', ' ghosh', '123456', '123456', ' saikat@gmail.com', 15, '64914113_662313444238096_8748267607884300288_n.jpg'),
(19, 'jon', ' Mr.', ' Jon', '1234', '1234', ' mr.jon@gmail.com', 23, '151290249_287122922799504_8353720887636790_n.jpg'),
(20, 'paru', ' Paromita', ' Ghosh', '1234', '1234', ' parularu@gmail.com', 19, 'PHOTO_20200922_190847.jpg'),
(21, 'rahul', ' Bakhtiar', ' Rabbani', '1234', '1234', ' bakhtiar@gmail.com', 23, '11223664_785519788225856_873942275391772355_o.jpg'),
(22, 'jony11', ' Jony', ' Ghosh', '1234', '1234', ' jonyghosh444@gmail.com', 23, 'Jony.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribec`
--

CREATE TABLE `subscribec` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribec`
--

INSERT INTO `subscribec` (`id`) VALUES
(8);

-- --------------------------------------------------------

--
-- Table structure for table `subscribecplus`
--

CREATE TABLE `subscribecplus` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribecplus`
--

INSERT INTO `subscribecplus` (`id`) VALUES
(22);

-- --------------------------------------------------------

--
-- Table structure for table `subscribehtml`
--

CREATE TABLE `subscribehtml` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribejava`
--

CREATE TABLE `subscribejava` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribejs`
--

CREATE TABLE `subscribejs` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribephp`
--

CREATE TABLE `subscribephp` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribephp`
--

INSERT INTO `subscribephp` (`id`) VALUES
(8);

-- --------------------------------------------------------

--
-- Table structure for table `subscribepython`
--

CREATE TABLE `subscribepython` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribepython`
--

INSERT INTO `subscribepython` (`id`) VALUES
(8),
(18),
(21),
(22);

-- --------------------------------------------------------

--
-- Table structure for table `tutorinfo`
--

CREATE TABLE `tutorinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(16) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorinfo`
--

INSERT INTO `tutorinfo` (`id`, `name`, `firstname`, `lastname`, `password`, `cpassword`, `email`, `age`, `image`) VALUES
(13, ' devid', 'devidjonson', 'jak', '', '', ' adsd', 24, 'Jony.jpg'),
(14, 'ff', 'q', 'w', '1', '1', 'r', 0, ''),
(15, ' jony', ' Jony', ' Ghosh', ' 1234', ' 1234', ' jonyghosh444@gmail.com', 24, 'Jony.jpg'),
(16, 'jony333', 'Jony', 'Ghosh', '1234', '1234', 'jonyghosh444@gmail.com', 0, ''),
(17, 'sakib', ' Sakib', ' hasan', '1234', '1234', '    sakib@gmail.com', 27, 'Jony.jpg'),
(18, 'emon', 'Emon', 'sarkar', '1234', '1234', 'emonsarkar@gmail.com', 0, ''),
(20, 'saikat11', 'saikat', 'Ghosh', '1234', '1234', 'saikat@gmail.com', 0, ''),
(21, 'karim', 'Karim', 'Rahaman', '1234', '1234', 'karim@tmail.com', 0, ''),
(22, 'jonyjg', '   Jony', '   Ghosh', '1234', '1234', '   jonyghosh444@gmail.com', 24, 'Jony.jpg'),
(23, 'neymarjr', ' Neymar', ' Junior', '1234', '1234', ' njr@gmail.com', 29, 'Neymar.jpg'),
(24, 'Durjoy333', ' Durjoy', ' Ghosh', '1234', '1234', ' durjoy@hotmail.com', 11, '57049088_365255647440201_3914596316432302080_n.jpg'),
(25, 'paru', ' paromita', ' Bardhan', '1234', '1234', ' parularu@gmail.com', 19, 'PHOTO_20200922_173324.jpg'),
(26, 'tamim', ' tamim', ' khan', '1234', '1234', ' tamim@gmail.com', 24, '152061861_2845400489049171_6686654720691887585_n.jpg'),
(27, 'jony11', ' Jony', ' Ghosh', '1234', '1234', ' jonyghosh444@gmail.com', 23, 'Jony.jpg'),
(28, 'jony444', ' Jony', ' Ghosh', '1234', '1234', ' jonyghosh444@gmail.com', 23, 'Jony.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`) VALUES
(26, 'Car Game in C   for Beginners  Easy Console Games Coding Tutorial.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c`
--
ALTER TABLE `c`
  ADD PRIMARY KEY (`video no`);

--
-- Indexes for table `cplus`
--
ALTER TABLE `cplus`
  ADD PRIMARY KEY (`video no`);

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`video no`);

--
-- Indexes for table `java`
--
ALTER TABLE `java`
  ADD PRIMARY KEY (`video no`);

--
-- Indexes for table `javascript`
--
ALTER TABLE `javascript`
  ADD PRIMARY KEY (`video no`);

--
-- Indexes for table `php`
--
ALTER TABLE `php`
  ADD PRIMARY KEY (`video no`);

--
-- Indexes for table `python`
--
ALTER TABLE `python`
  ADD PRIMARY KEY (`video no`);

--
-- Indexes for table `studentsignup`
--
ALTER TABLE `studentsignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribec`
--
ALTER TABLE `subscribec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribecplus`
--
ALTER TABLE `subscribecplus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribehtml`
--
ALTER TABLE `subscribehtml`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribejava`
--
ALTER TABLE `subscribejava`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribejs`
--
ALTER TABLE `subscribejs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribephp`
--
ALTER TABLE `subscribephp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribepython`
--
ALTER TABLE `subscribepython`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorinfo`
--
ALTER TABLE `tutorinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `c`
--
ALTER TABLE `c`
  MODIFY `video no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `cplus`
--
ALTER TABLE `cplus`
  MODIFY `video no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `html`
--
ALTER TABLE `html`
  MODIFY `video no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `java`
--
ALTER TABLE `java`
  MODIFY `video no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `javascript`
--
ALTER TABLE `javascript`
  MODIFY `video no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `php`
--
ALTER TABLE `php`
  MODIFY `video no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `python`
--
ALTER TABLE `python`
  MODIFY `video no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `studentsignup`
--
ALTER TABLE `studentsignup`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subscribec`
--
ALTER TABLE `subscribec`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subscribecplus`
--
ALTER TABLE `subscribecplus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subscribehtml`
--
ALTER TABLE `subscribehtml`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribejava`
--
ALTER TABLE `subscribejava`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subscribejs`
--
ALTER TABLE `subscribejs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subscribephp`
--
ALTER TABLE `subscribephp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subscribepython`
--
ALTER TABLE `subscribepython`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tutorinfo`
--
ALTER TABLE `tutorinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
