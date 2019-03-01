-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 01 mars 2019 kl 00:03
-- Serverversion: 10.1.37-MariaDB
-- PHP-version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `chmgrupp`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `categories`
--

CREATE TABLE `categories` (
  `CategoryID` varchar(8) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `CatDescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `category_relations`
--

CREATE TABLE `category_relations` (
  `ProductID` varchar(8) NOT NULL,
  `CategoryID` varchar(8) NOT NULL,
  `Discount` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `customers`
--

CREATE TABLE `customers` (
  `CustomerID` varchar(8) NOT NULL,
  `UserID` varchar(8) NOT NULL,
  `PersonNumber` bigint(12) UNSIGNED NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Adress` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `Subscription` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `orders`
--

CREATE TABLE `orders` (
  `OrderID` varchar(8) NOT NULL,
  `CustomerID` varchar(8) NOT NULL,
  `OrderDet_ID` varchar(8) NOT NULL,
  `OrderStatus` varchar(6) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `TotalCost` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `order_details`
--

CREATE TABLE `order_details` (
  `OrderDet_ID` varchar(8) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Quantity` smallint(3) UNSIGNED NOT NULL,
  `PaymentMethod` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `order_row`
--

CREATE TABLE `order_row` (
  `ProductID` varchar(8) NOT NULL,
  `OrderID` varchar(8) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `products`
--

CREATE TABLE `products` (
  `ProductID` varchar(8) NOT NULL,
  `UnitPrice` smallint(5) UNSIGNED NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Productdescription` varchar(100) NOT NULL,
  `ProductVolume` int(6) NOT NULL,
  `UnitsInStock` smallint(6) UNSIGNED NOT NULL,
  `ProductWeight` int(6) NOT NULL,
  `ImageURL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `shipping_details`
--

CREATE TABLE `shipping_details` (
  `ShippingID` varchar(8) NOT NULL,
  `OrderDet_ID` varchar(8) NOT NULL,
  `DeliveryOption` varchar(20) NOT NULL,
  `DeliveryStatus` varchar(20) NOT NULL,
  `Cost` decimal(15,2) NOT NULL,
  `FreightCompany` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `UserID` varchar(8) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Password` binary(60) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Index för tabell `category_relations`
--
ALTER TABLE `category_relations`
  ADD PRIMARY KEY (`ProductID`,`CategoryID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Index för tabell `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`),
  ADD KEY `UserID` (`UserID`);

--
-- Index för tabell `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `CustomerID` (`CustomerID`),
  ADD KEY `OrderDet_ID` (`OrderDet_ID`);

--
-- Index för tabell `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`OrderDet_ID`);

--
-- Index för tabell `order_row`
--
ALTER TABLE `order_row`
  ADD PRIMARY KEY (`ProductID`,`OrderID`);

--
-- Index för tabell `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Index för tabell `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD KEY `OrderDet_ID` (`OrderDet_ID`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- Restriktioner för dumpade tabeller
--

--
-- Restriktioner för tabell `category_relations`
--
ALTER TABLE `category_relations`
  ADD CONSTRAINT `category_relations_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`),
  ADD CONSTRAINT `category_relations_ibfk_2` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`);

--
-- Restriktioner för tabell `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Restriktioner för tabell `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CustomerID`) REFERENCES `customers` (`CustomerID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`OrderDet_ID`) REFERENCES `order_details` (`OrderDet_ID`);

--
-- Restriktioner för tabell `order_row`
--
ALTER TABLE `order_row`
  ADD CONSTRAINT `order_row_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`),
  ADD CONSTRAINT `order_row_ibfk_2` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`);

--
-- Restriktioner för tabell `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD CONSTRAINT `shipping_details_ibfk_1` FOREIGN KEY (`OrderDet_ID`) REFERENCES `order_details` (`OrderDet_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
