-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2023 at 04:13 PM
-- Server version: 10.3.38-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fidenkoq_jay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `btcAddress` varchar(200) DEFAULT NULL,
  `btcImg` varchar(200) DEFAULT NULL,
  `ethAddress` varchar(200) DEFAULT NULL,
  `ethImg` varchar(200) DEFAULT NULL,
  `usdtAddress` varchar(200) DEFAULT NULL,
  `usdtImg` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `btcAddress`, `btcImg`, `ethAddress`, `ethImg`, `usdtAddress`, `usdtImg`) VALUES
(1, 'jay', 'jay$', 'bc1q6k4g8t970wewwj8vpdmmmhy6ffhg0qr5rr60wc', 'btc.jpg', '0xf3844B225F6eaeFE45B757b258fDc05cA9FE6E70', 'eth.jpg', 'TRuBwHUeRqgmzsLmm7FBdoTHZyD13NrTGR', 'usdt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Transactions`
--

CREATE TABLE `Transactions` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `transaction_id` varchar(200) NOT NULL,
  `trxType` text NOT NULL,
  `trxStatus` text NOT NULL,
  `trxDate` date NOT NULL,
  `Amount` int(10) NOT NULL,
  `coin` varchar(200) NOT NULL,
  `walletID` varchar(200) DEFAULT NULL,
  `network` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `Transactions`
--

INSERT INTO `Transactions` (`id`, `name`, `transaction_id`, `trxType`, `trxStatus`, `trxDate`, `Amount`, `coin`, `walletID`, `network`, `email`) VALUES
(28, 'Sample Account 2', 'dzxfvsdfx cvxedfcwsdfcvwesadfvcwed', 'deposit', 'approved', '2023-03-16', 3000, 'btc', NULL, 'BNB', 'paraclet@gmail.com'),
(29, 'Sample Account 2', 'dzxfvsdfx cvxedfcwsdfcvwesadfvcweddf', 'deposit', 'approved', '2023-03-16', 2000, 'usdt', NULL, 'tron', 'paraclet@gmail.com'),
(30, 'Sample Account 2', '21078124320139', 'withdraw', 'approved', '2023-03-16', 2000, 'btc', 'wdaxcwadsdcxwascxwascxaxcqesadc', 'btcNetwork', 'paraclet@gmail.com'),
(31, 'Bella shum', 'dzfxcvghhgghghfghkjhxghghfjghbjt', 'deposit', 'approved', '2023-03-16', 1000, 'usdt', NULL, 'Trc20', 'jayrichard024@gmail.com'),
(32, 'Sample Account', 'c qasc asc swasdcxsadcxqwasghvbfghfb', 'deposit', 'approved', '2023-03-16', 4000, 'btc', NULL, 'b20', 'trustfundtrading2023@gmail.com'),
(33, 'martins ugo', 'ewascweasfdc2ewqsfdc42ewsfdcewdxfgbght', 'deposit', 'approved', '2023-03-16', 5000, 'btc', NULL, 'Btn network', 'martins.paraclet@gmail.com'),
(35, 'Bella shum', '2388556789559', 'deposit', 'approved', '2023-03-17', 200, 'usdt', NULL, 'Trc20', 'jayrichard024@gmail.com'),
(36, 'Sharon Uranta', 'ewascweasfdc2ewqsfdc42ewsfdcewdxfgbghtjhhb', 'deposit', 'approved', '2023-03-17', 10000, 'btc', NULL, 'BtcNetwork', 'sharonsamuel151@gmail.com'),
(37, 'SampleUser', 'dzxfvsdfx cvxedfcwsdfcvwesadfvcwedsfgtefgv', 'deposit', 'approved', '2023-03-18', 15000, 'btc', NULL, 'BTC Network', 'sample@gmail.com'),
(38, 'Bella shum', 'ewascweasfdc2ewqsfdc42ewsfdcewdxfgbghtjhhbhfhb', 'deposit', 'approved', '2023-03-19', 5000, 'btc', NULL, 'Btc', 'jayrichard024@gmail.com'),
(39, 'Bella shum', 'dzxfvsdfx cvxedfcwsdfcvwesadfvcwedkhjgh', 'deposit', 'approved', '2023-03-19', 4000, 'btc', NULL, 'b20', 'jayrichard024@gmail.com'),
(40, 'Ganbold Ganbaatar', '12556684886536756', 'deposit', 'approved', '2023-03-24', 200, 'usdt', NULL, 'Trc20', 'boldoomaa83@gmail.com'),
(42, 'Andrei', '124657768980', 'deposit', 'approved', '2023-03-25', 500, 'usdt', NULL, 'Trc20', 'andreimaxx@gmail.com'),
(43, 'Bella shum', '11418161551721110', 'withdraw', 'approved', '2023-03-30', 1000, 'usdt', 'TBwLTggMQCfBimWGsoVqwNNf4s9rqLB2cg', 'Trc20', 'jayrichard024@gmail.com'),
(44, 'Giuseppe', '1739755097577765', 'deposit', 'approved', '2023-03-30', 200, 'usdt', NULL, 'Trc20', 'giuseppe@libero.it'),
(45, 'Giuseppe', '14401031521135', 'withdraw', 'declined', '2023-03-31', 1000, 'usdt', 'TGvuyjzbJx3wLiDiQoAsbuHXepqudfAkoR', 'Trc20', 'giuseppe@libero.it'),
(46, 'Giuseppe', '097191116514417', 'withdraw', 'declined', '2023-03-31', 1500, 'usdt', 'TGvuyjzbJx3wLiDiQoAsbuHXepqudfAkoR', 'Trc20', 'giuseppe@libero.it');

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

INSERT INTO `users` (`id`, `fname`, `email`, `username`, `password`, `package`, `registration_date`, `referral`, `phoneNumber`, `walletAddress`, `coin`, `transferNetwork`, `idName`, `idImage`, `IdNumber`, `balance`, `bonus`, `profit`, `investedAmount`, `kycstatus`, `idtype`) VALUES
(1, 'martins ugo', 'martins.paraclet@gmail.com', 'Ceaser', 'TVZCQlZoUmgvaGtWV3ppZy9TQnZIQT09', 'basic', '2023-03-06', 'Ceaser', '07067179619', 'wewfgrhtfyjhbrd fsgvfredsv', 'btc', 'btc20', 'download.jpeg', 'Screen Shot 2022-11-10 at 10.13.47 AM.png', '123424343', 7000, 0, 4000, 2000, NULL, ''),
(2, 'Bella shum', 'jayrichard024@gmail.com', 'Shumbella001', ' blJKZ3drR1pCdjJxRXlxQTRodDg4QT09', 'basic', '2023-03-12', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8400, NULL, 3200, 4000, 'Unverified', ''),
(3, 'Sample Account', 'trustfundtrading2023@gmail.com', 'Ceaser2', ' YTZQRFlEbm53Vm5HS2RDa1JPMjU5Zz09', 'basic', '2023-03-16', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, 0, 2000, NULL, ''),
(4, 'Sample Account 2', 'paraclet@gmail.com', 'martins2', ' YTZQRFlEbm53Vm5HS2RDa1JPMjU5Zz09', 'basic', '2023-03-16', 'ceaser', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1300, NULL, 500, 2200, NULL, ''),
(5, 'Sharon Uranta', 'sharonsamuel151@gmail.com', 'Sharry', ' YTZQRFlEbm53Vm5HS2RDa1JPMjU5Zz09', 'basic', '2023-03-17', 'Ceaser', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5000, NULL, 0, 5000, NULL, ''),
(6, 'SampleUser', 'sample@gmail.com', 'SampleUser', ' YTZQRFlEbm53Vm5HS2RDa1JPMjU5Zz09', 'advance', '2023-03-18', 'ceaser', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13000, NULL, 12000, 14000, NULL, ''),
(7, 'Ganbold Ganbaatar', 'boldoomaa83@gmail.com', 'Ganbold23', ' NXltTUlMNG9xOHp3VUN6TG1SR1BHZz09', 'basic', '2023-03-24', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2000, NULL, 2000, 200, NULL, ''),
(8, 'Andrei', 'andreimaxx@gmail.com', 'Andrei123', ' aDdJM2pEYW5DNXBzSk4rbjlEYnJyUT09', 'basic', '2023-03-25', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4000, NULL, 4000, 500, NULL, ''),
(9, 'Armel Tiempo', 'armeltiempo@rocketmail.com', 'Djwawert25', ' dENXR0RidG5OQi9kWE9KK25zQmhCUno5Yi9hU3I0Mjg3R0ZnS', 'basic', '2023-03-25', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, ''),
(10, 'Giuseppe', 'giuseppe@libero.it', 'giuseppe123', ' MU5GNlo1UkoxLzRDNERhdXNMNGtUZz09', 'basic', '2023-03-30', '', '3496033741', 'TGvuyjzbJx3wLiDiQoAsbuHXepqudfAkoR', 'Usdt', 'Trc20', 'avant patente.jpg', 'avant patente.jpg', 'GIUSEPPE PORCHETTA', 2000, NULL, 2000, 200, 'Verified', ''),
(11, 'William', 'william.scotts4113@gmail.com', 'Scott', ' QUNsUFhvRHltclBPOFpVUVdrQUNZZz09', '', '2023-03-30', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Transactions`
--
ALTER TABLE `Transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transaction_id` (`transaction_id`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Transactions`
--
ALTER TABLE `Transactions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
