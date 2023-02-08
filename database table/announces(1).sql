-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 01:24 PM
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
-- Database: `homedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `announces`
--

CREATE TABLE `announces` (
  `id` int(11) NOT NULL,
  `title` varchar(199) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `description` varchar(199) NOT NULL,
  `location` varchar(199) NOT NULL,
  `space` int(111) NOT NULL,
  `price` int(111) NOT NULL,
  `date` date NOT NULL,
  `typeofhouse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announces`
--

INSERT INTO `announces` (`id`, `title`, `image`, `description`, `location`, `space`, `price`, `date`, `typeofhouse`) VALUES
(36, 'omi', 'https://dnm.nflximg.net/api/v6/BvVbc2Wxr2w6QuoANoSpJKEIWjQ/AAAAQZUkwT6XhdDnNqAsPrZiQWWHvhpJo0cviRndWweNeFE0G6sOOa7ltzrwXSocCIsqRqAcruHZtEk-MBx_qLAJz-43yAbJAJXmEYKEMD78GRjJ3ro5x5T97jaAj0NwMiaHvO4mNGLRmwNAPE2yA0LWWV1UfQI.jpg?r=48b%C2%A3', 'fzefz', 'miami', 3, 2, '2023-02-15', 'For sale'),
(38, 'WELCOME HOUSE', 'https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8bW9kZXJuJTIwaG91c2V8ZW58MHx8MHx8&w=1000&q=80', 'eetet', 'zertyy', 200, 599998, '2023-03-01', 'For rent'),
(40, 'saada', 'https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fzefz', 'fz', 3, 2, '2023-02-15', 'For rent'),
(41, 'desyty', 'https://images.pexels.com/photos/1029599/pexels-photo-1029599.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'zz', 'ezfz', 400, 400, '2023-02-16', 'For Sale'),
(43, 'saadooo', 'https://images.pexels.com/photos/164558/pexels-photo-164558.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fzefz', 'fz', 10, 2000, '2023-02-15', 'For rent'),
(46, 'mansion', 'https://images.pexels.com/photos/280222/pexels-photo-280222.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'fzefz', 'fz', 3, 2, '2023-02-15', 'For rent'),
(47, 'the monster', 'https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'tangier', 400, 400, '2023-02-16', 'For Sale'),
(48, 'the big house', 'https://images.pexels.com/photos/259962/pexels-photo-259962.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley', 'tangier', 400, 10000, '2023-02-16', 'For Sale'),
(49, 'the ant', 'https://images.pexels.com/photos/209296/pexels-photo-209296.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'is simply dummy text of the printing and typesetting industry.', 'tangier', 400, 10000000, '2023-02-16', 'For Sale'),
(50, 'the ant', 'https://images.pexels.com/photos/323775/pexels-photo-323775.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'is simply dummy text of the printing and typesetting industry.', 'tangier', 400, 10000000, '2023-02-16', 'For Sale'),
(51, 'the dodjy', 'https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'is simply dummy text of the printing and typesetting industry.', 'tangier', 200, 500, '2023-02-16', 'For Sale'),
(52, '3 Rooms house', 'https://images.pexels.com/photos/209296/pexels-photo-209296.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'is simply dummy text of the printing and typesetting industry.', 'tangier', 200, 500, '2023-02-16', 'For Rent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announces`
--
ALTER TABLE `announces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announces`
--
ALTER TABLE `announces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
