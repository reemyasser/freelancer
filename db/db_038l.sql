-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 02:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_038l`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `passclient` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `email`, `passclient`) VALUES
(1, 'reem', 'reem@gmail.com', '22');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'rr', 'reem@gmail.com', 'e4rfwea');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_clients`
--

CREATE TABLE `contacts_clients` (
  `concli_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts_freelancers`
--

CREATE TABLE `contacts_freelancers` (
  `confree_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `freelancer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts_freelancers`
--

INSERT INTO `contacts_freelancers` (`confree_id`, `contact_id`, `freelancer_id`) VALUES
(1, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL,
  `commesion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `job`, `salary`, `commesion`) VALUES
(1, 'Ahmed', 'Developer', 5000, NULL),
(2, 'Ali', 'Designer', 4000, 100),
(3, 'Sara', 'Developer', 5500, 150),
(4, 'Tamer', 'IT', 3500, NULL),
(5, 'Morad', 'IT', 4000, NULL),
(6, 'Maged', 'Developer', 7000, NULL),
(7, 'Samir', 'Designer', 4500, 90);

-- --------------------------------------------------------

--
-- Table structure for table `freelancer`
--

CREATE TABLE `freelancer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title_job` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancer`
--

INSERT INTO `freelancer` (`id`, `name`, `title_job`, `email`, `password`, `photo`) VALUES
(1, 'reem', 'Full Stack php Developer', 'reem@gmail.com', '12345', ''),
(2, 'alaa', 'Front End Developer', 'alaa@gmail.com', '222', 'Programmer-512.png'),
(3, 'rahma', 'backend php developer', 'rahme@gmail.com', '333', 'Desert.jpg'),
(5, 'rahma', 'backend php developer', 'totayasser36@yahoo.com', '4444', 'Desert.jpg'),
(6, 'rahma', 'backend php developer', 'reemyasserfcis@gmail.com', '333', ''),
(7, 'reem yasser', 'backend php developer', 'reemyasserfcis@gmail.com', '1234', 'Lighthouse.jpg'),
(8, 'reem yasser', 'backend php developer', 'reemyasserfcis@gmail.com', '1234', 'Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

CREATE TABLE `langs` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `f_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `description`, `f_id`) VALUES
(1, 'php and mysql', 2),
(2, 'php', 1),
(3, 'php and .net mvc', 8);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL,
  `freelancer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `freelancer_id`) VALUES
(1, 'A', 2),
(2, 'B', 1),
(3, 'C', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `userpass` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `userpass`, `role`) VALUES
(12, 'reem', 'yasser', 'reem@gmail.com', '12345', 2),
(13, 'alaa', 'ayman mohamed', 'alaa@gmail.com', '222', 1),
(14, 'aml', 'emam', 'aml@gmail.com', '111', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `contacts_clients`
--
ALTER TABLE `contacts_clients`
  ADD PRIMARY KEY (`concli_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `contact_id` (`contact_id`);

--
-- Indexes for table `contacts_freelancers`
--
ALTER TABLE `contacts_freelancers`
  ADD PRIMARY KEY (`confree_id`),
  ADD KEY `contact_id` (`contact_id`),
  ADD KEY `freelancer_id` (`freelancer_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelancer`
--
ALTER TABLE `freelancer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD UNIQUE KEY `project_name` (`project_name`),
  ADD KEY `freelancer_id` (`freelancer_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts_clients`
--
ALTER TABLE `contacts_clients`
  MODIFY `concli_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts_freelancers`
--
ALTER TABLE `contacts_freelancers`
  MODIFY `confree_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `freelancer`
--
ALTER TABLE `freelancer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts_clients`
--
ALTER TABLE `contacts_clients`
  ADD CONSTRAINT `contacts_clients_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`),
  ADD CONSTRAINT `contacts_clients_ibfk_2` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`contact_id`);

--
-- Constraints for table `contacts_freelancers`
--
ALTER TABLE `contacts_freelancers`
  ADD CONSTRAINT `contacts_freelancers_ibfk_1` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`contact_id`),
  ADD CONSTRAINT `contacts_freelancers_ibfk_2` FOREIGN KEY (`freelancer_id`) REFERENCES `freelancer` (`id`);

--
-- Constraints for table `langs`
--
ALTER TABLE `langs`
  ADD CONSTRAINT `langs_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `freelancer` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`freelancer_id`) REFERENCES `freelancer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
