-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 11:53 PM
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
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `space` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `typeofhouse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announces`
--

INSERT INTO `announces` (`id`, `title`, `image`, `description`, `location`, `space`, `price`, `date`, `typeofhouse`) VALUES
(61, 'the dream house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(62, 'the dream house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-28', 'For rent'),
(63, 'the dream house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(64, 'the dream house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(65, 'the dream house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(73, 'house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(74, 'house fire', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 1000, '2023-02-14', 'For Sale'),
(75, 'moroccan', 'https://cf.bstatic.com/xdata/images/hotel/max500/67319003.jpg?k=a8a52561b71e0a51391353eb0ee2af521593708fff8a02a7c1294d9300030fa6&o=&hp=1', 'dream house', 'san fransisco', 200, 1000, '2023-02-14', 'For Sale'),
(76, 'tradutional', 'https://cf.bstatic.com/xdata/images/hotel/max1024x768/331653071.jpg?k=cbf9d7e25749fbbd5b3ba9d235e9805a3da926e631cfd8a2f75369b4c12d61b4&o=&hp=1', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(77, 'mansion', 'https://cf.bstatic.com/xdata/images/hotel/max500/67319003.jpg?k=a8a52561b71e0a51391353eb0ee2af521593708fff8a02a7c1294d9300030fa6&o=&hp=1', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(78, 'american', 'https://www.jamesedition.com/stories/wp-content/uploads/2022/03/mansions_main_fin-1-942x628.jpg', 'dream house', 'san fransisco', 200, 100, '2023-02-14', 'For rent'),
(79, 'home town', 'https://cf.bstatic.com/xdata/images/hotel/max500/67319003.jpg?k=a8a52561b71e0a51391353eb0ee2af521593708fff8a02a7c1294d9300030fa6&o=&hp=1', 'dream house', 'san fransisco', 200, 1000, '2023-02-14', 'For rent'),
(80, 'best ', 'https://www.jamesedition.com/stories/wp-content/uploads/2022/03/mansions_main_fin-1-942x628.jpg', 'dream house', 'san fransisco', 200, 100, '2023-02-14', 'For Sale'),
(81, 'amzaing', 'https://images.pexels.com/photos/101808/pexels-photo-101808.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'Morocco', 200, 10000, '2023-02-14', 'For Sale'),
(82, 'the dream house', 'https://images.pexels.com/photos/2102587/pexels-photo-2102587.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'la', 200, 10000000, '2023-02-14', 'For Sale'),
(83, 'the dream', 'https://images.pexels.com/photos/2102587/pexels-photo-2102587.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(84, 'the dream', 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(85, 'lovely', 'https://images.pexels.com/photos/1115804/pexels-photo-1115804.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'hola', 'russia', 500, 9991, '2023-02-21', 'For rent'),
(86, 'house fire', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 1000, '2023-02-14', 'For Sale'),
(87, 'the dream', 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(88, 'the dream', 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(89, 'house fire', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 1000, '2023-02-14', 'For Sale'),
(90, 'the dream house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(91, 'home town', 'https://cf.bstatic.com/xdata/images/hotel/max500/67319003.jpg?k=a8a52561b71e0a51391353eb0ee2af521593708fff8a02a7c1294d9300030fa6&o=&hp=1', 'dream house', 'san fransisco', 200, 1000, '2023-02-14', 'For rent'),
(92, 'the dream', 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(93, 'the dream house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(94, 'lovely', 'https://images.pexels.com/photos/1115804/pexels-photo-1115804.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'hola', 'russia', 500, 9991, '2023-02-21', 'For rent'),
(95, 'the dream', 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(96, 'house fire', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 1000, '2023-02-14', 'For Sale'),
(97, 'the dream', 'https://images.pexels.com/photos/2102587/pexels-photo-2102587.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(98, 'house fire', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 1000, '2023-02-14', 'For Sale'),
(99, 'the dream house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(100, 'the dream house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(101, 'the dream', 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(102, 'the dream', 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(103, 'the dream', 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(104, 'the dream', 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(105, 'the dream house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(106, 'the dream house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(107, 'the dream', 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(108, 'the dream', 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(109, 'american', 'https://www.jamesedition.com/stories/wp-content/uploads/2022/03/mansions_main_fin-1-942x628.jpg', 'dream house', 'san fransisco', 200, 100, '2023-02-14', 'For rent'),
(110, 'home town', 'https://cf.bstatic.com/xdata/images/hotel/max500/67319003.jpg?k=a8a52561b71e0a51391353eb0ee2af521593708fff8a02a7c1294d9300030fa6&o=&hp=1', 'dream house', 'san fransisco', 200, 1000, '2023-02-14', 'For rent'),
(111, 'the dream', 'https://images.pexels.com/photos/2635038/pexels-photo-2635038.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(112, 'the dream house', 'https://www.camella.com.ph/wp-content/uploads/2020/06/Website_Camella-Homes-Series_Greta-960x600.jpg', 'dream house', 'san fransisco', 200, 10000000, '2023-02-14', 'For Sale'),
(113, 'best ', 'https://www.jamesedition.com/stories/wp-content/uploads/2022/03/mansions_main_fin-1-942x628.jpg', 'dream house', 'san fransisco', 200, 100, '2023-02-14', 'For Sale');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
