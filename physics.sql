-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 05:13 PM
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
-- Database: `physics`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `ques_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `ques_number`, `is_correct`, `text`) VALUES
(1, 1, 0, '20m'),
(2, 1, 1, '400m'),
(3, 1, 0, '1440m'),
(4, 1, 0, '2880m'),
(5, 2, 0, 'b, -4d'),
(6, 2, 0, '-b, 2c'),
(7, 2, 1, 'b, 2c'),
(8, 2, 0, '2c, -4d');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `feedback`) VALUES
('d;jja', 'kfd@kjdkjd.com', 'ldlkldlk'),
('lsjs', 'kjasak@ksaksa.com', 'ijjsaj'),
('Kshitij Khaladkar', 'kkhaladkar55@gmail.com', 'asdfghjkl'),
('jakjaj', 'kkhaladkar56@gmail.com', 'kajljomlsj'),
('Shubham Sorap', 'shubham.sorap@gmail.com', 'Nice website :)');

-- --------------------------------------------------------

--
-- Table structure for table `formulae`
--

CREATE TABLE `formulae` (
  `id` int(11) NOT NULL,
  `formula_1` varchar(255) NOT NULL,
  `formula` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulae`
--

INSERT INTO `formulae` (`id`, `formula_1`, `formula`) VALUES
(1, 'Average Speed =', 'Total DIstance Travelled / Total Time Taken'),
(2, 'Velocity = ', 'ds/dt'),
(3, 'Force =', 'm(v-u)/t'),
(4, 'Motion Along Horizontal Surface', 'v^2 = u^2 + 2as'),
(5, 'Coefficient of Viscosity = \r\n', '2*r^2*(p-a)g/9v'),
(6, 'Energy transfer during change of state = ', ' l*dm'),
(7, 'Newton\'s Law Of Gravitation F=', 'G*m1*m2/r^2'),
(8, 'Mechanical Power P = ', 'Fv'),
(9, 'Resistors in Series Rs = ', 'R1 + R2 + ... + Rn'),
(10, 'Mass Energy Relationship E =', 'MC^2');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `user` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`user`, `pass`) VALUES
('ksk', 'ksk'),
('rish', 'rish');

-- --------------------------------------------------------

--
-- Table structure for table `questions_oscillation`
--

CREATE TABLE `questions_oscillation` (
  `ques_number` int(11) NOT NULL,
  `question` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions_projectile`
--

CREATE TABLE `questions_projectile` (
  `ques_number` int(11) NOT NULL,
  `question` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_projectile`
--

INSERT INTO `questions_projectile` (`ques_number`, `question`) VALUES
(1, 'If a car accelerates uniformly to a speed of 144kmph in 20s, then it covers a distance of '),
(2, 'The displacement of particle is given  by \r\ny = a + bt + ct^2 - dt^4. The initial velocity and acceleration of particle are');

-- --------------------------------------------------------

--
-- Table structure for table `questions_wave`
--

CREATE TABLE `questions_wave` (
  `ques_number` int(11) NOT NULL,
  `question` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(256) NOT NULL,
  `user` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `clgname` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `user`, `email`, `pass`, `clgname`) VALUES
('Kshitij Khaladkar', 'kkhaladkar55', 'kkhaladkar55@gmail.com', 'asdfg', 'jhskh'),
('Rishabh', 'rish123', 'princekhosla@gmail.com', 'khosla', 'Don Bosco ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `formulae`
--
ALTER TABLE `formulae`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `questions_oscillation`
--
ALTER TABLE `questions_oscillation`
  ADD PRIMARY KEY (`ques_number`);

--
-- Indexes for table `questions_projectile`
--
ALTER TABLE `questions_projectile`
  ADD PRIMARY KEY (`ques_number`);

--
-- Indexes for table `questions_wave`
--
ALTER TABLE `questions_wave`
  ADD PRIMARY KEY (`ques_number`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `formulae`
--
ALTER TABLE `formulae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
