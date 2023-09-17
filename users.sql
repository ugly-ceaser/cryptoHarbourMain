-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 07:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `fname` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `package` text NOT NULL,
  `registration_date` date NOT NULL,
  `referral` varchar(200) NOT NULL,
  `invitecode` varchar(10) NOT NULL,
  `phoneNumber` text DEFAULT NULL,
  `walletAddress` varchar(200) DEFAULT NULL,
  `coin` text DEFAULT NULL,
  `transferNetwork` varchar(11) DEFAULT NULL,
  `idName` text DEFAULT NULL,
  `idImage` varchar(200) DEFAULT NULL,
  `IdNumber` varchar(200) DEFAULT NULL,
  `balance` int(200) DEFAULT 0,
  `bonus` int(11) DEFAULT NULL,
  `profit` int(200) DEFAULT 0,
  `investedAmount` int(20) DEFAULT NULL,
  `kycstatus` varchar(50) DEFAULT NULL,
  `idtype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `username`, `password`, `package`, `registration_date`, `referral`, `invitecode`, `phoneNumber`, `walletAddress`, `coin`, `transferNetwork`, `idName`, `idImage`, `IdNumber`, `balance`, `bonus`, `profit`, `investedAmount`, `kycstatus`, `idtype`) VALUES
(1, 'martins ugo', 'martins.paraclet@gmail.com', 'Ceaser', 'TVZCQlZoUmgvaGtWV3ppZy9TQnZIQT09', 'basic', '2023-03-06', 'Ceaser', '', '07067179619', 'wewfgrhtfyjhbrd fsgvfredsv', 'btc', 'btc20', 'download.jpeg', 'Screen Shot 2022-11-10 at 10.13.47 AM.png', '123424343', 7000, 0, 4000, 2000, NULL, ''),
(2, 'Bella shum', 'jayrichard024@gmail.com', 'Shumbella001', ' blJKZ3drR1pCdjJxRXlxQTRodDg4QT09', 'basic', '2023-03-12', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8400, NULL, 3200, 4000, 'Unverified', ''),
(3, 'Sample Account', 'trustfundtrading2023@gmail.com', 'Ceaser2', ' YTZQRFlEbm53Vm5HS2RDa1JPMjU5Zz09', 'basic', '2023-03-16', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, 0, 2000, NULL, ''),
(4, 'Sample Account 2', 'paraclet@gmail.com', 'martins2', ' YTZQRFlEbm53Vm5HS2RDa1JPMjU5Zz09', 'basic', '2023-03-16', 'ceaser', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1300, NULL, 500, 2200, NULL, ''),
(5, 'Sharon Uranta', 'sharonsamuel151@gmail.com', 'Sharry', ' YTZQRFlEbm53Vm5HS2RDa1JPMjU5Zz09', 'basic', '2023-03-17', 'Ceaser', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5000, NULL, 0, 5000, NULL, ''),
(6, 'SampleUser', 'sample@gmail.com', 'SampleUser', ' YTZQRFlEbm53Vm5HS2RDa1JPMjU5Zz09', 'advance', '2023-03-18', 'ceaser', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13000, NULL, 12000, 14000, NULL, ''),
(7, 'Ganbold Ganbaatar', 'boldoomaa83@gmail.com', 'Ganbold23', ' NXltTUlMNG9xOHp3VUN6TG1SR1BHZz09', 'basic', '2023-03-24', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, 2000, 200, NULL, ''),
(8, 'Andrei', 'andreimaxx@gmail.com', 'Andrei123', ' aDdJM2pEYW5DNXBzSk4rbjlEYnJyUT09', 'basic', '2023-03-25', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4000, NULL, 4000, 500, NULL, ''),
(9, 'Armel Tiempo', 'armeltiempo@rocketmail.com', 'Djwawert25', ' dENXR0RidG5OQi9kWE9KK25zQmhCUno5Yi9hU3I0Mjg3R0ZnS', 'basic', '2023-03-25', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, ''),
(10, 'Giuseppe', 'giuseppe@libero.it', 'giuseppe123', ' MU5GNlo1UkoxLzRDNERhdXNMNGtUZz09', 'basic', '2023-03-30', '', '', '3496033741', 'TGvuyjzbJx3wLiDiQoAsbuHXepqudfAkoR', 'Usdt', 'Trc20', 'avant patente.jpg', 'avant patente.jpg', 'GIUSEPPE PORCHETTA', 2000, NULL, 2000, 200, 'Verified', ''),
(11, 'William', 'william.scotts4113@gmail.com', 'Scott', ' QUNsUFhvRHltclBPOFpVUVdrQUNZZz09', '', '2023-03-30', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `walletAddress` (`walletAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
