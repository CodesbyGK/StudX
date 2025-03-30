-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `GOA`

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--
Create Database goa;

CREATE TABLE `customer` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` bigint(15) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `confirm` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` ( `name`,`email`,`contact`, `password`, `confirm`) VALUES
('Gopal', 'gopal@gmail.com' , 9786943210, 'ABC','ABC' ),
('Ayush', 'ayush@gmail.com', 98765467822, 'ABC', 'ABC'),
('Om', 'om@gmail.com', 7796543214,'ABC','ABC' );

--
-- Products sold
-- 
CREATE TABLE `product` (
  `Productname` varchar(100) DEFAULT NULL,
  `price`  bigint(15) DEFAULT NULL,
  `sold` bigint(15) DEFAULT NULL,
  `demand` bigint(15) DEFAULT NULL,
  `supply`  bigint(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `product` 
( `Productname`,`price`,`sold`, `demand`, `supply`) 
VALUES
('AQT1', 53999 , 210, 85, 70),
('R31',  129999, 60, 20, 50),
( `G26`,  39799, 48, 45, 50),
('A1',  45999, 48, 45 , 50),
('029', 35749 , 48, 45, 50),
('Snowboard', 29999 , 548, 70, 60),
('Woods', 45999 , 358, 65, 60),
('Casuals R41', 34999 , 489, 70, 70);

select * from product;

--
--   To find demand and supply ratio
--

-- Demand is more
--
select * from product where product.demand >= product.supply;

-- Supply is more
--
select * from product where product.demand <= product.supply;