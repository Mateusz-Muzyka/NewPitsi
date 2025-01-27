-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 11:38 PM
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
-- Database: `plan_lekcji_marek`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `plan_lekcji`
--

CREATE TABLE `plan_lekcji` (
  `id` tinyint(4) NOT NULL,
  `godzina_lekcyjna` tinytext NOT NULL,
  `Pn` tinytext NOT NULL,
  `Wt` tinytext NOT NULL,
  `Sr` tinytext NOT NULL,
  `Czw` tinytext NOT NULL,
  `Pt` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plan_lekcji`
--

INSERT INTO `plan_lekcji` (`id`, `godzina_lekcyjna`, `Pn`, `Wt`, `Sr`, `Czw`, `Pt`) VALUES
(1, '8.00-8.45', 'Matematyka', 'Matematyka', 'Matematyka', 'Matematyka', 'Matematyka'),
(2, '8.55-9.40', 'Matematyka', 'Matematyka', 'Matematyka', 'J.Polski', 'Matematyka'),
(3, '9.50-10.35', 'Matematyka', 'Matematyka', 'J.Polski', 'J.Polski', 'J.Polski'),
(4, '10.45-11.30', 'Matematyka', 'Matematyka', 'Matematyka', 'J.Polski', 'Matematyka'),
(5, '11.50-12.35', 'Matematyka', 'Matematyka', 'Matematyka', 'Matematyka', 'Matematyka'),
(6, '12.55-13.40', 'Matematyka', 'Matematyka', 'Matematyka', 'Matematyka', 'Matematyka'),
(7, '13.50-14.35', 'Matematyka', 'Matematyka', 'Matematyka', 'Matematyka', 'Matematyka'),
(8, '14.45-15.30', 'Matematyka', 'Matematyka', 'Matematyka', 'Matematyka', 'Matematyka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmioty`
--

CREATE TABLE `przedmioty` (
  `id` tinyint(4) NOT NULL,
  `przedmiot` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `przedmioty`
--

INSERT INTO `przedmioty` (`id`, `przedmiot`) VALUES
(1, 'Matematyka'),
(2, 'J.Polski'),
(3, 'J.Angielski'),
(4, 'Chemia'),
(5, 'Fizyka'),
(6, 'Geografia');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `plan_lekcji`
--
ALTER TABLE `plan_lekcji`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `przedmioty`
--
ALTER TABLE `przedmioty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plan_lekcji`
--
ALTER TABLE `plan_lekcji`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `przedmioty`
--
ALTER TABLE `przedmioty`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
