-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2018 at 01:58 AM
-- Server version: 8.0.11
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogtp_1`
--

CREATE TABLE `blogtp_1` (
  `id` int(11) NOT NULL,
  `titulo_del_post` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `contenido_del_post` varchar(1200) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `imagen_upload` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogtp_1`
--

INSERT INTO `blogtp_1` (`id`, `titulo_del_post`, `contenido_del_post`, `imagen_upload`) VALUES
(12, 'Lorem ipsum', 'Mauris sodales nibh dolor, ut consectetur risus tincidunt vel. Quisque quis lacinia mi, nec lacinia arcu. Mauris ornare ante egestas neque semper dictum sit amet eget quam. Duis enim ante, vehicula nec semper a, pharetra dapibus diam. Suspendisse tristique varius semper. In non metus sed nulla posuere luctus commodo a nisl. In non turpis sit amet mi semper interdum eget id felis. Sed eget ligula vitae sapien bibendum faucibus. Duis nec erat mi. Proin ullamcorper metus eget laoreet egestas. In facilisis ipsum eu imperdiet semper. Quisque quis dui arcu. Phasellus elit ante, iaculis in consectetur quis, vestibulum in erat. ', '-img-portfolio_01.png'),
(13, 'Lorem ipsum2', 'Mauris sodales nibh dolor, ut consectetur risus tincidunt vel. Quisque quis lacinia mi, nec lacinia arcu. Mauris ornare ante egestas neque semper dictum sit amet eget quam. Duis enim ante, vehicula nec semper a, pharetra dapibus diam. Suspendisse tristique varius semper. In non metus sed nulla posuere luctus commodo a nisl. In non turpis sit amet mi semper interdum eget id felis. Sed eget ligula vitae sapien bibendum faucibus. Duis nec erat mi. Proin ullamcorper metus eget laoreet egestas. In facilisis ipsum eu imperdiet semper. Quisque quis dui arcu. Phasellus elit ante, iaculis in consectetur quis, vestibulum in erat. ', '-img-portfolio_01.png'),
(14, 'Lorem ipsum3', 'Mauris sodales nibh dolor, ut consectetur risus tincidunt vel. Quisque quis lacinia mi, nec lacinia arcu. Mauris ornare ante egestas neque semper dictum sit amet eget quam. Duis enim ante, vehicula nec semper a, pharetra dapibus diam. Suspendisse tristique varius semper. In non metus sed nulla posuere luctus commodo a nisl. In non turpis sit amet mi semper interdum eget id felis. Sed eget ligula vitae sapien bibendum faucibus. Duis nec erat mi. Proin ullamcorper metus eget laoreet egestas. In facilisis ipsum eu imperdiet semper. Quisque quis dui arcu. Phasellus elit ante, iaculis in consectetur quis, vestibulum in erat. ', '-img-portfolio_01.png'),
(15, 'Lorem ipsum4', 'Mauris sodales nibh dolor, ut consectetur risus tincidunt vel. Quisque quis lacinia mi, nec lacinia arcu. Mauris ornare ante egestas neque semper dictum sit amet eget quam. Duis enim ante, vehicula nec semper a, pharetra dapibus diam. Suspendisse tristique varius semper. In non metus sed nulla posuere luctus commodo a nisl. In non turpis sit amet mi semper interdum eget id felis. Sed eget ligula vitae sapien bibendum faucibus. Duis nec erat mi. Proin ullamcorper metus eget laoreet egestas. In facilisis ipsum eu imperdiet semper. Quisque quis dui arcu. Phasellus elit ante, iaculis in consectetur quis, vestibulum in erat. ', '-img-portfolio_01.png'),
(19, 'Lorem ipsum', 'Mauris sodales nibh dolor, ut consectetur risus tincidunt vel. Quisque quis lacinia mi, nec lacinia arcu. Mauris ornare ante egestas neque semper dictum sit amet eget quam. Duis enim ante, vehicula nec semper a, pharetra dapibus diam. Suspendisse tristique varius semper. In non metus sed nulla posuere luctus commodo a nisl. In non turpis sit amet mi semper interdum eget id felis. Sed eget ligula vitae sapien bibendum faucibus. Duis nec erat mi. Proin ullamcorper metus eget laoreet egestas. In facilisis ipsum eu imperdiet semper. Quisque quis dui arcu. Phasellus elit ante, iaculis in consectetur quis, vestibulum in erat. ', '-img-portfolio_01.png'),
(20, 'Lorem ipsum8', 'Mauris sodales nibh dolor, ut consectetur risus tincidunt vel. Quisque quis lacinia mi, nec lacinia arcu. Mauris ornare ante egestas neque semper dictum sit amet eget quam. Duis enim ante, vehicula nec semper a, pharetra dapibus diam. Suspendisse tristique varius semper. In non metus sed nulla posuere luctus commodo a nisl. In non turpis sit amet mi semper interdum eget id felis. Sed eget ligula vitae sapien bibendum faucibus. Duis nec erat mi. Proin ullamcorper metus eget laoreet egestas. In facilisis ipsum eu imperdiet semper. Quisque quis dui arcu. Phasellus elit ante, iaculis in consectetur quis, vestibulum in erat. ', '-img-portfolio_01.png'),
(21, 'Lorem ipsum9', 'Mauris sodales nibh dolor, ut consectetur risus tincidunt vel. Quisque quis lacinia mi, nec lacinia arcu. Mauris ornare ante egestas neque semper dictum sit amet eget quam. Duis enim ante, vehicula nec semper a, pharetra dapibus diam. Suspendisse tristique varius semper. In non metus sed nulla posuere luctus commodo a nisl. In non turpis sit amet mi semper interdum eget id felis. Sed eget ligula vitae sapien bibendum faucibus. Duis nec erat mi. Proin ullamcorper metus eget laoreet egestas. In facilisis ipsum eu imperdiet semper. Quisque quis dui arcu. Phasellus elit ante, iaculis in consectetur quis, vestibulum in erat. ', '-img-portfolio_01.png'),
(22, 'Lorem ipsum10', 'Mauris sodales nibh dolor, ut consectetur risus tincidunt vel. Quisque quis lacinia mi, nec lacinia arcu. Mauris ornare ante egestas neque semper dictum sit amet eget quam. Duis enim ante, vehicula nec semper a, pharetra dapibus diam. Suspendisse tristique varius semper. In non metus sed nulla posuere luctus commodo a nisl. In non turpis sit amet mi semper interdum eget id felis. Sed eget ligula vitae sapien bibendum faucibus. Duis nec erat mi. Proin ullamcorper metus eget laoreet egestas. In facilisis ipsum eu imperdiet semper. Quisque quis dui arcu. Phasellus elit ante, iaculis in consectetur quis, vestibulum in erat. ', '-img-portfolio_01.png');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'neli', 'neli123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogtp_1`
--
ALTER TABLE `blogtp_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogtp_1`
--
ALTER TABLE `blogtp_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
