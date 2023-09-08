-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 07, 2023 at 05:42 PM
-- Server version: 5.7.42-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capildpro_Data`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Transactions`
--

INSERT INTO `Transactions` (`id`, `name`, `transaction_id`, `trxType`, `trxStatus`, `trxDate`, `Amount`, `coin`, `walletID`, `network`, `email`) VALUES
(57, 'May Cuaresma', 'Xzdghhnnnkkngrswefvujnkombgteefik', 'deposit', 'approved', '2023-05-24', 1000, 'usdt', NULL, 'Trc20', 'may.cuaresma30@gmail.com'),
(59, 'May Cuaresma', '101971521114161712', 'withdraw', 'declined', '2023-05-29', 2097, 'usdt', 'TSVS25jpCKtF35fDaNKgPkCD1svRvB6i9V', 'TRC20', 'may.cuaresma30@gmail.com'),
(60, '', '', 'deposit', 'declined', '2023-06-01', 6188, 'usdt', NULL, 'TRC20', ''),
(69, 'May Cuaresma', '911651511631813', 'withdraw', 'declined', '2023-06-05', 3196, 'usdt', 'TSVS25jpCKtF35fDaNKgPkCD1svRvB6i9V', 'TRC20', 'may.cuaresma30@gmail.com'),
(70, 'May Cuaresma', '17411214130162010', 'withdraw', 'declined', '2023-06-09', 3996, 'usdt', 'TBLQ1bTuHzXkw3yXYzragXZKgL6QKt3Cxk', 'TRC20', 'may.cuaresma30@gmail.com'),
(71, 'May Cuaresma', '10314619150111312', 'withdraw', 'declined', '2023-06-09', 3996, 'usdt', 'TBLQ1bTuHzXkw3yXYzragXZKgL6QKt3Cxk', 'TRC20', 'may.cuaresma30@gmail.com'),
(72, 'Vijay Gat', 'Cfdtghhbfdeegbjonnvcedchuipmbfdsxc', 'deposit', 'approved', '2023-06-20', 250, 'usdt', NULL, 'Trc20', 'gatvijay34@gmail.com'),
(73, 'Vijay Gat', '5141071918152080', 'withdraw', 'declined', '2023-06-24', 200, 'usdt', 'TWCfekHeuaYMrcd3misBag1vXmpDcNyTzw', 'Binance trc20', 'gatvijay34@gmail.com'),
(74, 'Vijay Gat', '171916181905142', 'withdraw', 'approved', '2023-06-26', 100, 'usdt', 'TWCfekHeuaYMrcd3misBag1vXmpDcNyTzw', 'Trc20', 'gatvijay34@gmail.com'),
(75, 'Steve', 'Thbbinbfessclknnbgfssszxftgvgubbh', 'deposit', 'approved', '2023-06-29', 300, 'btc', NULL, 'Bitcoin', 'stivybi@gmail.com'),
(88, 'May Cuaresma', '31991113121162017', 'withdraw', 'declined', '2023-06-30', 1000, 'usdt', '0x0d67749249f83c9d423a3dabc4c49b03b1a06768', 'ERC20', 'may.cuaresma30@gmail.com'),
(89, 'Steve', '7019214186111517', 'withdraw', 'declined', '2023-07-03', 100, 'btc', 'bc1qqzwmc4u2cajs27cnx3spr2r2227hca0ac38269', 'Steve', 'stivybi@gmail.com'),
(90, 'Steve', '10918135191712201', 'withdraw', 'declined', '2023-07-03', 2000, 'usdt', 'TAnJRfK6KWwuKQYCK74mUovXqGjofEMip1', 'Steve', 'stivybi@gmail.com'),
(91, 'Shukhrat Tokhtiev', 'Tfybubhvfdssvujokbtwdukmbcesionb', 'deposit', 'approved', '2023-07-04', 300, 'usdt', NULL, 'Trc20', 'uygur2007@bk.ru'),
(92, 'Shukhrat Tokhtiev', 'Yeoutewazdfgvhjknvrwfujinvdwsgujjv', 'deposit', 'declined', '2023-07-04', 300, 'usdt', NULL, 'Trc20', 'uygur2007@bk.ru'),
(93, 'ISKANDAR TUKHTAEV', 'Tdakovewcunkcsebngrswcjonvrezcbt', 'deposit', 'approved', '2023-07-05', 300, 'usdt', NULL, 'Trc20', 'shox070805@mail.ru'),
(94, 'ISKANDAR TUKHTAEV', '0141213919171420', 'withdraw', 'declined', '2023-07-07', 1000, 'usdt', 'TCSMWhqrPvArxb8WCD5Kn2kLx1HKT5fbEP', 'TRC20', 'shox070805@mail.ru'),
(95, 'Vijay Gat', 'Admin452371008', 'deposit', 'approved', '2023-07-07', 750, 'Usdt', NULL, 'Trc20', ' gatvijay34@gmail.com'),
(96, 'Vijay Gat', 'Admin270140356', 'deposit', 'approved', '2023-07-08', 630, 'Usdt', NULL, 'Trc20', ' gatvijay34@gmail.com'),
(97, 'Vijay Gat', '201617714151310123', 'withdraw', 'declined', '2023-07-09', 100, 'usdt', 'TWCfekHeuaYMrcd3misBag1vXmpDcNyTzw', 'Trc20', 'gatvijay34@gmail.com'),
(98, 'Alain Theophile', 'Vdaebkndwcom xsebomfazxjonb', 'deposit', 'approved', '2023-07-09', 500, 'usdt', NULL, 'Trc20', 'vardemodwest@tutanota.com'),
(99, 'ISKANDAR TUKHTAEV', '2111841281002017', 'withdraw', 'declined', '2023-07-10', 2000, 'usdt', 'TCSMWhqrPvArxb8WCD5Kn2kLx1HKT5fbEP', 'Tron(TRC20)', 'shox070805@mail.ru'),
(100, 'ISKANDAR TUKHTAEV', 'Admin006192378', 'deposit', 'approved', '2023-07-11', 1734, 'Usdt', NULL, 'Trc20', ' shox070805@mail.ru'),
(101, 'ISKANDAR TUKHTAEV', '153071411119182', 'withdraw', 'approved', '2023-07-11', 2000, 'usdt', 'TCSMWhqrPvArxb8WCD5Kn2kLx1HKT5fbEP', 'Tron(TRC20)', 'shox070805@mail.ru'),
(102, 'ISKANDAR TUKHTAEV', '67141916217101315', 'withdraw', 'declined', '2023-07-12', 300, 'usdt', 'TCSMWhqrPvArxb8WCD5Kn2kLx1HKT5fbEP', 'Tron(TRC20)', 'shox070805@mail.ru'),
(103, 'Shukhrat Tokhtiev', '718204114817165', 'withdraw', 'approved', '2023-07-13', 13420, 'usdt', 'TWnpWzPiJswTGspKjvvopRVmC8RAJUJnho', 'Trc20', 'uygur2007@bk.ru'),
(104, 'Shukhrat Tokhtiev', 'Cjtssvjnvdevjnbimbfscnombfwdjo', 'deposit', 'approved', '2023-07-14', 300, 'usdt', NULL, 'Trc20', 'uygur2007@bk.ru'),
(105, 'Tim Bavre', '17tchbcscjojbcsqeginvswykonvxsquokb', 'deposit', 'approved', '2023-07-16', 500, 'btc', NULL, 'Bitcoin', 'info.theonefx@gmail.com'),
(106, 'Alain Theophile', '971031813191616', 'withdraw', 'approved', '2023-07-16', 7647, 'usdt', 'TViYtQsLzYHV1E9GiAx4TzuwK8RXHfGvyX', 'TRC20', 'vardemodwest@tutanota.com'),
(107, 'Alain Theophile', '31371706101889', 'withdraw', 'approved', '2023-07-16', 500, 'usdt', 'TViYtQsLzYHV1E9GiAx4TzuwK8RXHfGvyX', 'TRC20', 'vardemodwest@tutanota.com'),
(108, 'May Cuaresma', '91120705321914', 'withdraw', 'approved', '2023-07-17', 3000, 'usdt', 'TBLQ1bTuHzXkw3yXYzragXZKgL6QKt3Cxk', 'TRC20', 'may.cuaresma30@gmail.com'),
(109, 'Alain Theophile', 'f8681628d5afa239a6a9acb6951f7b3b8963f589300b4f8fbd53a8c8e4c84981', 'deposit', 'approved', '2023-07-18', 494, 'usdt', NULL, 'TRC20', 'vardemodwest@tutanota.com'),
(110, 'Alain Theophile', 'Iswaiopbczcsxnmhfss', 'deposit', 'approved', '2023-07-18', 499, 'usdt', NULL, 'Trc20', 'vardemodwest@tutanota.com'),
(111, 'Alain Theophile', 'Kdsaqwbincxzsfjkooknvfewdhio', 'deposit', 'approved', '2023-07-18', 506, 'usdt', NULL, 'Trc20', 'vardemodwest@tutanota.com'),
(112, 'Alain Theophile', 'Admin350029784', 'deposit', 'approved', '2023-07-18', 566, 'Usdt', NULL, 'Trc20', ' vardemodwest@tutanota.com'),
(113, 'Alain Theophile', 'Kyvdeawopmbcdrewsvhibvftvnkmn', 'deposit', 'approved', '2023-07-18', 566, 'usdt', NULL, 'Trc20', 'vardemodwest@tutanota.com'),
(114, 'Tim Bavre', '17758641631013', 'withdraw', 'declined', '2023-07-20', 1000, 'btc', '35NhZBqnsuypLieb3bCXpB216X5PFhNDx3', 'Bitcoin', 'info.theonefx@gmail.com'),
(115, 'May Cuaresma', '5641216114101318', 'withdraw', 'approved', '2023-07-21', 1995, 'usdt', 'TBLQ1bTuHzXkw3yXYzragXZKgL6QKt3Cxk', 'TRC20', 'may.cuaresma30@gmail.com'),
(116, 'Alain Theophile', '10172420101893', 'withdraw', 'declined', '2023-07-22', 7057, 'eth', '0x7362a1D24EeD4D5b449cc6EE4C4336a5c4F4dc70', 'ARBITRUM', 'vardemodwest@tutanota.com'),
(117, 'Tim Bavre', '17510307151813', 'withdraw', 'declined', '2023-07-22', 3000, 'btc', '35NhZBqnsuypLieb3bCXpB216X5PFhNDx3', 'Bitcoin', 'info.theonefx@gmail.com'),
(118, 'ISKANDAR TUKHTAEV', '92819011431218', 'withdraw', 'declined', '2023-07-27', 300, 'usdt', 'TCSMWhqrPvArxb8WCD5Kn2kLx1HKT5fbEP', 'Tron(TRC20)', 'shox070805@mail.ru'),
(119, 'Suseta Setya Dika', 'Cdetbkbfefhmklnbhkmkbgfwdgbjk', 'deposit', 'approved', '2023-08-14', 400, 'usdt', NULL, 'Trc20', 'susetasetyadika@gmail'),
(120, 'Suseta Setya Dika', 'Admin798032456', 'deposit', 'approved', '2023-08-14', 380, 'Usdt', NULL, 'Trc20', ' susetasetyadika@gmail'),
(121, 'ITAMAH Godwin Oyarelemi', '2siscyenkpwagchbbhfsscjncdrgv', 'deposit', 'approved', '2023-08-25', 2001, 'usdt', NULL, 'Trc20', 'gitamah@gmail.com'),
(122, 'ISKANDAR TUKHTAEV', '01516182019314610', 'withdraw', 'pending', '2023-08-30', 100, 'usdt', 'TCSMWhqrPvArxb8WCD5Kn2kLx1HKT5fbEP', 'Tron(TRC20)', 'shox070805@mail.ru'),
(123, 'Mustapha Herrouz', 'Yarczkonmlhfddethiphrswxcyvybhuvcd', 'deposit', 'approved', '2023-08-30', 301, 'usdt', NULL, 'Trc20', 'mustapha30herrouz@gmail.com'),
(124, 'Mustapha Herrouz', 'Admin483276095', 'deposit', 'approved', '2023-08-30', 2, 'Usdt', NULL, 'Trc20', ' mustapha30herrouz@gmail.com'),
(125, 'Chimdike Kamsi Anagboso', 'top4rfjdvih4urewt7873yfgwhsa', 'deposit', 'pending', '2023-09-06', 2000, 'btc', NULL, 'BTC', 'ckamsi04@gmail.com');

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
  `phoneNumber` text,
  `walletAddress` varchar(200) DEFAULT NULL,
  `coin` text,
  `transferNetwork` varchar(11) DEFAULT NULL,
  `idName` text,
  `idImage` varchar(200) DEFAULT NULL,
  `IdNumber` varchar(200) DEFAULT NULL,
  `balance` int(200) DEFAULT '0',
  `bonus` int(11) DEFAULT NULL,
  `profit` int(200) DEFAULT '0',
  `investedAmount` int(20) DEFAULT NULL,
  `kycstatus` varchar(50) DEFAULT NULL,
  `idtype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `username`, `password`, `package`, `registration_date`, `referral`, `phoneNumber`, `walletAddress`, `coin`, `transferNetwork`, `idName`, `idImage`, `IdNumber`, `balance`, `bonus`, `profit`, `investedAmount`, `kycstatus`, `idtype`) VALUES
(19, 'May Cuaresma', 'may.cuaresma30@gmail.com', 'maycuaresma', ' bnYwUmV6N1R6bERqaVQyN0xrQTRHZz09', 'basic', '2023-05-24', '', '+97477953373', '0x0d67749249f83c9d423a3dabc4c49b03b1a06768', 'USDT', 'ERC20', NULL, NULL, NULL, 0, NULL, 3995, 0, NULL, ''),
(20, 'Vijay Gat', 'gatvijay34@gmail.com', 'Gat02', ' dzk5TkxWa3hjTWVZMUVjOGhJT1Fidz09', 'basic', '2023-06-20', '345', '+919011390900', NULL, NULL, NULL, NULL, NULL, NULL, 20963, NULL, 20863, 250, NULL, ''),
(21, 'Steve', 'stivybi@gmail.com', 'Steve09', ' cEtoZStGbHI1RC9NcHMyOGJFMVlKQT09', 'basic', '2023-06-29', '123', '+41799147713', NULL, NULL, NULL, NULL, NULL, NULL, 7176, NULL, 6876, 0, NULL, ''),
(22, 'Shukhrat Tokhtiev', 'uygur2007@bk.ru', 'Shuk83', ' L0FyZjJvY3MrOHVESGwxZ2JZbVNrZz09', 'basic', '2023-07-04', '021', '+996505900270', NULL, NULL, NULL, NULL, NULL, NULL, 6769, NULL, 19289, 300, NULL, ''),
(23, 'ISKANDAR TUKHTAEV', 'shox070805@mail.ru', 'Iska$', ' bnpLbC91bUw2ZG5JbUJMRlNlRGtudz09', 'basic', '2023-07-05', 'Jvdsxvjbvdchjbcd', '+998940275545', NULL, NULL, NULL, NULL, NULL, NULL, 7086, NULL, 8486, 300, NULL, ''),
(24, 'Alain Theophile', 'vardemodwest@tutanota.com', 'in2zeblue', 'VXc5bDZVaHppaVhGL0FnQzhQdndPZz09', 'basic', '2023-07-09', 'Hivescunvdwvjobcsxhjib', '+596696531422', NULL, NULL, NULL, NULL, NULL, NULL, 82371, NULL, 87953, 0, NULL, ''),
(25, 'Tim Bavre', 'info.theonefx@gmail.com', 'Tim7932', ' QTQ4emYwdEdMd2FQOWNZMlFYbisvUT09', 'basic', '2023-07-16', '33333', '+0032476794076', NULL, NULL, NULL, NULL, NULL, NULL, 13366, NULL, 13366, 500, NULL, ''),
(26, 'altagent', 'altybox@outlook.com', 'altagent', ' QkZERHdLRkZkWC9SbWJ6a05iUUNWdz09', 'platinium', '2023-07-25', 'Unknown', '968175269', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, NULL, ''),
(27, 'Suseta Setya Dika', 'susetasetyadika@gmail', 'Dika05', ' dVphZHZkcituUFRkV0tDTFh6ZVBwdz09', 'basic', '2023-08-14', '1759', '+6282229222011', NULL, NULL, NULL, NULL, NULL, NULL, 10622, NULL, 10222, NULL, NULL, ''),
(28, 'ITAMAH Godwin Oyarelemi', 'gitamah@gmail.com', 'ITAMAH17', ' cGRubzEyNGRnQzE3QzZhVWsvQWljdz09', 'basic', '2023-08-25', 'Hcecknvswdin', '+2348167778888', NULL, NULL, NULL, NULL, NULL, NULL, 4329, NULL, 4829, 2001, NULL, ''),
(29, 'Mustapha Herrouz', 'mustapha30herrouz@gmail.com', 'Mustapha$64', ' dnJCN3pYR2VNQk1HNGZzZVZPQ084UT09', 'basic', '2023-08-30', 'Yvbkombrdxxxccffcccfccccc', '', NULL, NULL, NULL, NULL, NULL, NULL, 120, NULL, 140, 301, NULL, ''),
(30, 'Chimdike Kamsi Anagboso', 'ckamsi04@gmail.com', 'Kamsi', 'TTg5cVhlRGxNZlR2NzZWZjlpZUM5UT09', 'basic', '2023-09-06', 'Abakpa Nike', '09027855617', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 0, NULL, '');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
