-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 17 mars 2019 kl 17:10
-- Serverversion: 10.1.37-MariaDB
-- PHP-version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `chmgrupp5.0`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(8) UNSIGNED NOT NULL,
  `Name` varchar(20) NOT NULL,
  `CatDescription` varchar(1000) NOT NULL,
  `CatImage` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `categories`
--

INSERT INTO `categories` (`CategoryID`, `Name`, `CatDescription`, `CatImage`) VALUES
(1, 'Grafikkort', 'Ett grafikkort är ett gränssnitt i datorsystem som tolkar och bearbetar en dators binära information till en videosignal som kan visas på en bildskärm. Moderna grafikkort, som sådana som används för bildbehandling, CAD och datorspel, utför ofta mycket av arbetet med att konstruera den slutgiltiga bilden som syns på skärmen.', 'grafikkort.jpg'),
(2, 'Hårddiskar', 'En hårddisk innehåller en eller flera roterande skivor belagda med ett magnetiskt material. En läsarm rör sig över skivan och skriver eller läser när rätt ställe på skivan befinner sig under läshuvudet.', 'harddrive.jpg'),
(3, 'Moderkort', 'Ett moderkort (äldre benämningar är systemkort och bakplan) är ett centralt kretskort försett med ett antal uttag där mindre kretskort kan kopplas in. Ett moderkort binder på så vis samman delarna i ett elektroniskt system, exempelvis i en dator, där uttagen till stor del utgörs av buss-anslutningar och anslutningar för andra kablar.', 'moderkort.jpg'),
(4, 'Processor', 'En processor är enheten som exekverar program i en dator, genom att från primärminnet läsa in programmets maskininstruktioner till processorns instruktionsregister, och därefter utföra begärda operationer som beräkningar och datahantering.', 'processor.jpg'),
(5, 'RAM', 'Random Access Memory eller RAM är ett minne där man kan nå varje minnescell direkt utan att behöva läsa igenom andra delar av minnet, till skillnad från minnen som läses sekventiellt.', 'RAM.jpg');

-- --------------------------------------------------------

--
-- Tabellstruktur `category_relations`
--

CREATE TABLE `category_relations` (
  `ProductID` int(8) NOT NULL,
  `CategoryID` int(8) NOT NULL,
  `Discount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `category_relations`
--

INSERT INTO `category_relations` (`ProductID`, `CategoryID`, `Discount`) VALUES
(1, 1, 0),
(2, 2, 0),
(13, 1, 0),
(16, 1, 0),
(17, 1, 0),
(18, 4, 0),
(19, 4, 0),
(20, 4, 0),
(23, 4, 0),
(24, 3, 0),
(25, 3, 0),
(26, 3, 0),
(27, 3, 0),
(29, 2, 0),
(30, 2, 0),
(31, 2, 0),
(32, 5, 0),
(33, 5, 0),
(34, 5, 0),
(35, 5, 0);

-- --------------------------------------------------------

--
-- Tabellstruktur `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(8) UNSIGNED NOT NULL,
  `UserID` int(8) NOT NULL,
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
-- Tabellstruktur `newsletter_signup`
--

CREATE TABLE `newsletter_signup` (
  `ID` int(8) UNSIGNED NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(8) UNSIGNED NOT NULL,
  `OrderD_ID` int(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Adress` varchar(50) NOT NULL,
  `OrderStatus` varchar(6) NOT NULL,
  `DateAdded` datetime NOT NULL,
  `TotalCost` mediumint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `order_details`
--

CREATE TABLE `order_details` (
  `OrderD_ID` int(8) UNSIGNED NOT NULL,
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
  `ProductID` int(8) UNSIGNED NOT NULL,
  `Name` varchar(30) NOT NULL,
  `UnitPrice` smallint(5) UNSIGNED NOT NULL,
  `ProductDescription` varchar(1000) NOT NULL,
  `UnitsInStock` smallint(6) UNSIGNED NOT NULL,
  `ProductHeight` varchar(8) NOT NULL,
  `ProductWidth` varchar(8) NOT NULL,
  `ProductLength` varchar(8) NOT NULL,
  `ProductWeight` varchar(8) NOT NULL,
  `ImageURL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `products`
--

INSERT INTO `products` (`ProductID`, `Name`, `UnitPrice`, `ProductDescription`, `UnitsInStock`, `ProductHeight`, `ProductWidth`, `ProductLength`, `ProductWeight`, `ImageURL`) VALUES
(1, 'NVIDIA Titan RTX 24G', 28990, 'NVIDIA TITAN RTX är det snabbaste grafikkortet för PC någonsin.\r\nDet drivs av den prisbelönta Turing-arkitekturen och förser din dator med prestanda i form av 130 Tensor teraflops, 576- Tensor-kärnor och 24GB ultrasnabbt GDDR6-minne', 3, '112 mm', '40 mm', '267 mm', '2 kg', 'titan.jpg'),
(2, 'Corsair Force LE200 ', 599, 'Force LE serien använder den senaste TLC NAND teknologin för att ge dig en snabb disk där du får mycket gigabyte per krona.', 10, '10.6 cm', '1.7 cm', '13.2 cm', '0.068 kg', 'CorsairLE200.jpg'),
(13, 'ASUS GeForce RTX 206', 4990, 'GeForce RTX 2060 drivs av NVIDIA Turing™-arkitekturen, vilket ger enastående prestanda och möjligheten att dra nytta av ray-tracing i realtid samt DLSS i de senaste spelen.', 4, '132 mm', '50 mm', '300 mm', '2 kg', 'asusrog1.jpg'),
(16, 'PNY Quadro P6000 24G', 56999, 'Quadro P6000 är världens mest avancerade professionella grafiklösning någonsin och kombinerar den senaste grafikprocessorn, minnestypen och displayteknologin vilket resulterar i prestanda och genombrottskapacitet som saknar motstycke. Yrkesverksamma jorden runt kan nu skapa de mest komplexa designerna, lösa de mest komplexa visuella problemen och uppleva deras skapelser i de mest verklighetstrogna VR-miljöerna.', 10, '112 mm', '40 mm', ' 267 mm', '1.6 kg', 'pny.jpg'),
(17, 'MSI GeForce RTX 2080', 14999, 'NVIDIAs nyaste flaggskeppsgrafik är revolutionerande inom spelrealism och prestanda. Den kraftfulla NVIDIA Turing™ GPU-arkitekturen, banbrytande teknik och 11 GB av nästa generations ultrasnabba GDDR6-minne gör den till den mest optimala spel-GPU:n som finns.', 20, '140 mm', '55.6 mm', '327 mm', '2.4 kg', 'msi_geforce_rtx_2080_ti_1437452.jpg'),
(18, 'AMD Ryzen 7 2700 3.2', 3290, 'Andra generationens AMD Ryzen desktop processorer ger dig snabbare och jämnare datorupplevelse än någonsin tidigare. ', 22, '400 mm', '200 mm', '300 mm', '0.6kg', '2700.jpg'),
(19, 'Intel Core i5-8600X', 2990, 'Andra generationens AMD Ryzen desktop processorer ger dig snabbare och jämnare datorupplevelse än någonsin tidigare. ', 12, '400 mm', '200 mm', '300 mm', '0.6kg', 'hpit-493_hpit_493_01_800x800.jpg'),
(20, 'Intel Core i9-9820X ', 10290, 'Transformera din vision till verklighet med Intel Core i9 X-seriens processorer. Kombinerar höga klockfrekvenser med högre cache och antal kärnor/trådar.', 10, '400 mm', '200 mm', '300 mm', '0.6kg', 'i9series.jpg'),
(23, 'Intel Core i7-9800X ', 6999, 'Transformera din vision till verklighet med Intel Core i9 X-seriens processorer. Kombinerar höga klockfrekvenser med högre cache och antal kärnor/trådar.', 50, '400 mm', '200 mm', '300 mm', '0.6kg', 'intel-core-i7-9800x-3-8-ghz-16-5mb-s2066-9b6.jpg'),
(24, 'Gigabyte Z390 AORUS ', 6790, 'Extremt högpresterande moderkort som har dubbla med nätverkskort med 10Gbit + 1Gbit LAN. Intel Thunderbolt 3-stöd via USB-C på baksidan.', 50, '', ' 271 mm', ' ', '4 g', 'asusmoderkort.jpg'),
(25, 'MSI Z390 MEG GODLIKE', 6199, 'Intel Z390 chipset är en toppmodern plattform skapad för Intels 9:e generationens processorer. Med gott om funktionalitet och prestanda är detta en utmärkt grund för en modern, högpresterande PC.', 24, '', ' 272 mm', ' ', '3 kg', 'msi-meg_z390_godlike-pre-installed.png'),
(26, 'ASUS WS X299 SAGE/10', 7299, 'Sick moderboard', 12, '', ' 267 mm', ' ', '2.2 kg', 'ASUSWSX299SAGE.jpg'),
(27, 'Asus PRIME X299-DELU', 5699, 'Sick moderboard', 24, '', ' 244 mm', ' ', '2.8 kg', 'AsusPRIMEX299-DELUXE II.png'),
(29, 'Kingston A400 240GB ', 449, 'Kingstons stabila A400-enhet förbättrar dramatiskt upplevelsen av ditt befintliga system med otroliga start-, laddnings- och överföringstider jämfört med mekaniska hårddiskar. ', 60, '100 mm', ' 244 mm', '124 mm', '0.06 kg', 'kingston.jpg'),
(30, 'Samsung 860 EVO 500G', 1049, 'Uppdaterad version av världens mest sålda SATA SSD-serie, Samsung 860 EVO. Med den senaste V-NAND-tekniken och en robust kontroller kommer denna snabba och pålitliga SSD i flera olika formfaktorer och storlekar.', 60, '100 mm', ' 244 mm', '124 mm', '0.06 kg', 'samsungssd.jpg'),
(31, 'Toshiba OCZ TR200 24', 499, 'Att uppgradera från en HDD skall vara enkelt och prisvärt, det är här OCZ TR200 SSD hittar sin rätt. Designad för att snabba upp din laptop eller PC rejält, jämfört mot en traditionell HDD.', 60, '100 mm', ' 244 mm', '124 mm', '0.06 kg', 'toshiba.jpg'),
(32, 'HyperX 16GB 2x8GB', 1749, 'Uppgradera ditt system med prestandan och stilen det förtjänar! HyperX Predator RGB är högpresterande DDR4-minnen med RGB belysning på toppen av värmespridaren.', 50, '100 mm', ' 244 mm', '124 mm', '0.1 kg', 'hyperxram.jpg'),
(33, 'G.Skill 16GB 2x8GB', 1590, 'Ripjaws V serien är designade med maximal kompatibilitet och prestanda i åtanke. Byggda med de främsta komponenterna och testade under tuffa förhållanden, Ripjaws V är det perfekta valet för ett prestandasystem.', 50, '100 mm', ' 244 mm', '124 mm', '0.1 kg', 'gskill.jpg'),
(34, 'Corsair 16GB 2x8GB', 1346, 'Överklockningsvänliga minnen med en diskret och snygg kylare i låg profil för att matcha alla processorkylare och kompakta byggen.', 50, '100 mm', ' 244 mm', '124 mm', '0.1 kg', 'corsairram.jpg'),
(35, 'Ballistix 16GB 2x8G', 1799, 'Ballistix Tactical Tracer RGB är en serie riktigt snabba minnen med RGB-LED i 8 zoner som kontrolleras via Ballistix M.O.D.-verktyget eller moderkortets RGB-programvara, t.ex. ASUS Aura Sync, MSI Mystic Light samt Gigabyte AORUS Graphics Engine.', 50, '100 mm', ' 244 mm', '124 mm', '0.1 kg', 'balistics.jpg');

-- --------------------------------------------------------

--
-- Tabellstruktur `shipping_details`
--

CREATE TABLE `shipping_details` (
  `ShippingID` int(8) UNSIGNED NOT NULL,
  `OrderD_ID` varchar(8) NOT NULL,
  `DeliveryOption` varchar(20) NOT NULL,
  `DeliveryStatus` varchar(20) NOT NULL,
  `Cost` int(10) NOT NULL,
  `FreightCompany` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `shipping_details`
--

INSERT INTO `shipping_details` (`ShippingID`, `OrderD_ID`, `DeliveryOption`, `DeliveryStatus`, `Cost`, `FreightCompany`) VALUES
(1, '', 'Hemleverans', '', 99, 'DHL'),
(2, '', 'Hämta hos ombud', '', 59, 'DHL');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `UserID` int(8) UNSIGNED NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `Email`, `Password`, `Role`) VALUES
(1, 'bagge123', 'bagge39@hotmail.com', '$2y$10$qo/rTdqcsRzHOkRVC0JR5.5AbiT.M8TYiNN9C7PFXibThVQnsAee.', 'admin'),
(2, 'tuyvi', 'tuyvi@mail.se', '$2y$10$x5g4Q/tsK0.m780MJ3oAcuCkPC8MyMh9lDLKzm01Iq0aj/ihciuvy', 'admin');

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
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Index för tabell `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`),
  ADD KEY `UserID` (`UserID`);

--
-- Index för tabell `newsletter_signup`
--
ALTER TABLE `newsletter_signup`
  ADD PRIMARY KEY (`ID`);

--
-- Index för tabell `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `OrderD_ID` (`OrderD_ID`);

--
-- Index för tabell `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`OrderD_ID`);

--
-- Index för tabell `order_row`
--
ALTER TABLE `order_row`
  ADD PRIMARY KEY (`ProductID`,`OrderID`),
  ADD KEY `ProductID` (`ProductID`,`OrderID`);

--
-- Index för tabell `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Index för tabell `shipping_details`
--
ALTER TABLE `shipping_details`
  ADD PRIMARY KEY (`ShippingID`),
  ADD KEY `OrderD_ID` (`OrderD_ID`);

--
-- Index för tabell `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT för tabell `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT för tabell `newsletter_signup`
--
ALTER TABLE `newsletter_signup`
  MODIFY `ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT för tabell `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT för tabell `order_details`
--
ALTER TABLE `order_details`
  MODIFY `OrderD_ID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT för tabell `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT för tabell `shipping_details`
--
ALTER TABLE `shipping_details`
  MODIFY `ShippingID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT för tabell `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
