-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 24, 2018 at 09:50 AM
-- Server version: 10.1.37-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mixfagvm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `product` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `user`, `product`, `pass`) VALUES
(1, 'sagar.saha.cse@ulab.edu.bd', 'hi', 'O(2UaBq8'),
(2, 'sagar.saha.cse@ulab.edu.bd', 'fb', '9YW#b@)D'),
(3, 'sagar.saha.cse@ulab.edu.bd', 'aaa', 'oQ2KW4@m'),
(4, 'sagar.saha.cse@ulab.edu.bd', 'aaaa', '$4(167XX'),
(5, 'ananna.abedushe.cse@ulab.edu.bd', 'email', 'YiQCSgZ$'),
(6, 'ananna.bedushe.cse@ulab.edu.bd', 'email', '^%IxSRHh'),
(7, 'ananna.bedushe.cse@ulab.edu.bd', 'facebook', '4%BPkWx&'),
(8, 'ananna.bedushe.cse@ulab.edu.bd', 'ewq', '3ewt6wb('),
(9, 'aftab.alvie.cse@ulab.edu.bd', 'facebook', '56)!*i43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `gender` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `pass`, `gender`) VALUES
(3, 'sagar', 'saha', 'sagar.saha.cse@ulab.edu.bd', '1df1854015e31ca286d015345eaff29a6c6073f70984a3a746823d4cac16b075', 'boy'),
(7, 'Ananna ', 'Bedushe', 'ananna.bedushe.cse@ulab.edu.bd', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5', 'girl'),
(6, 'Ananna ', 'Bedushe', 'ananna.abedushe.cse@ulab.edu.bd', 'c775e7b757ede630cd0aa1113bd102661ab38829ca52a6422ab782862f268646', 'girl'),
(8, 'ZAP', 'ZAP', 'foo-bar@example.com', '94f173f4b39c02cbc426a652756eab754b9c2c67bd9c3b4efcbbc90edea005a4', 'girl'),
(9, 'aftab', 'alvie', 'aftab.alvie.cse@ulab.edu.bd', '1df1854015e31ca286d015345eaff29a6c6073f70984a3a746823d4cac16b075', 'boy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
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
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
