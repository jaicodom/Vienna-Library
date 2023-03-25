-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 03:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be18_cr4_jaimecoca_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `be18_cr4_jaimecoca_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `be18_cr4_jaimecoca_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `ISBN_code` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `type` varchar(10) NOT NULL,
  `author_first_name` varchar(30) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_address` text DEFAULT NULL,
  `publish_date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `image`, `ISBN_code`, `description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `status`) VALUES
(18, 'All Quiet on the Western Front', '641eef76ec9f7.jpg', '2345678913', 'A young German soldiers terrifying experiences and distress on the western front during World War I.', 'DVD', 'Edward', 'Berger', 'Netflix', 'Los Gatos, California', '2022-05-05', 'Available'),
(19, 'Exiles', '641ef411ba367.jpg', '2345673456', 'From New York Times bestselling and award-winning author Jane Harper comes Exiles, a captivating mystery about a missing mother.', 'Book', 'Aaron', 'Falk', 'Back Books', 'Los Angeles, California', '2023-01-25', 'Available'),
(20, 'The Kingdoms of Savannah', '641ef511a0faf.jpg', '1245985678', 'Savannah may appear to be some town out of a fable, with its vine flowers, turreted mansions, and ghost tours that romanticize the citys history. But look deeper and you will uncover secrets, past and present, that tell a more sinister tale.', 'Book', 'George', 'Dawes', 'Paradox', 'Via Toledo, Rome', '2022-07-14', 'Available'),
(21, 'A Mystery of Mysteries', '641ef5c0db497.jpg', '3456835412', 'A nuanced and page-turning introduction to the wonderful world of Edgar Allan Poe biography and scholarship.', 'Book', 'Mark', 'Dawidziak', 'London Books', 'Ships Avenue, London', '2020-08-14', 'Available'),
(22, 'The Promise', '641eff01eac45.jpg', '5798547834', '', 'CD', 'Il', 'Divo', 'Sony Music', '', '2008-03-03', 'Available'),
(23, 'The Foundling', '641ef748799f9.jpg', '9852457456', 'From the New York Times bestselling author of The Good House, the story of two friends, raised in the same orphanage, whose loyalty is put to the ultimate test when they meet years later at a controversial institution - one as an employee; the other, an inmate', 'Book', 'Ann', 'Learly', 'Grace Graham', 'Chicago, Illinois', '2014-02-05', 'Reserved'),
(24, 'The Great Displacement', '641ef7a42e0d0.jpg', '8567915275', 'Meticulously researched and compellingly written, The Great Displacement is a sobering account of how climate change is upending lives and destroying communities across the nation.', 'Book', 'Jake', 'Bittle', 'Phantom Books', 'New York City. New York', '2021-05-02', 'Reserved'),
(25, 'The Seven Moons of Maali Almeida', '641ef838f07ac.jpg', '5529485102', 'Winner of the 2022 Booker Prize, The Seven Moons of Maali Almeida is a searing satire set amid the mayhem of the Sri Lankan civil war.', 'Book', 'Shehan', 'Karunatilaka', 'Malaka Editors', 'Bombai', '2022-04-25', 'Available'),
(26, 'The Godfather', '641efc6a4161e.jpg', '9702475581', 'Epic tale of a 1940s New York Mafia family and their struggle to protect their empire from rival families as the leadership switches from the father (Marlon Brando) to his youngest son (Al Pacino). ', 'DVD', 'Francis', 'Ford Coppola', 'Paramount Pictures', 'Los Angeles, California', '1972-02-03', 'Reserved'),
(27, 'Cuba', '641efdd7ca584.jpg', '2554478501', '', 'Book', 'Ada', 'Ferrer', 'Cuba Books', 'La Habana, Cuba', '1978-12-12', 'Available'),
(29, 'Open Water', '641efeb38174b.jpg', '5587745124', 'A stunning first novel about two young Black artists in London falling in and out of love by a new literary virtuoso and finalist for the BBC Short Story Award, twenty six year old writer and photographer Caleb Azumah Nelson', 'Book', 'Caleb Azumah', 'Nelson', 'Paperback Original', 'Chicago, Illinois', '2021-08-12', 'Reserved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ISBN_code` (`ISBN_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
