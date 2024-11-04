-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 04, 2024 at 09:36 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plan_lekcji`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `plan`
--

CREATE TABLE `plan` (
  `godz.` tinytext NOT NULL,
  `Poniedzialek` tinytext NOT NULL,
  `Wtorek` tinytext NOT NULL,
  `Sroda` tinytext NOT NULL,
  `Czwartek` tinytext NOT NULL,
  `Piatek` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`godz.`, `Poniedzialek`, `Wtorek`, `Sroda`, `Czwartek`, `Piatek`) VALUES
('', '1', '2', '3', '4', '5'),
('', '1', '2', '3', '4', '5'),
('', '1', '2', '3', '4', '5'),
('', '1', '2', '3', '4', '5'),
('', '1', '2', '3', '4', '5');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmioty`
--

CREATE TABLE `przedmioty` (
  `id` tinyint(4) NOT NULL,
  `przedmioty` tinytext NOT NULL,
  `Godziny` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `przedmioty`
--

INSERT INTO `przedmioty` (`id`, `przedmioty`, `Godziny`) VALUES
(1, 'Matematyka', '7:10-7:55'),
(2, 'Polski', '8:00-8:45'),
(3, 'Angielski', '8:55-9:40'),
(4, 'Fizyka', '9:50-10:35'),
(5, 'Chemia', '10:55-11:40'),
(6, 'Biologia', '11:50-12:35');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `przedmioty`
--
ALTER TABLE `przedmioty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `przedmioty`
--
ALTER TABLE `przedmioty`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
