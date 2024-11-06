-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Lis 06, 2024 at 11:32 AM
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
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kontent`
--

CREATE TABLE `kontent` (
  `id` tinyint(4) NOT NULL,
  `pytanie` text NOT NULL,
  `odpZ` text NOT NULL,
  `odpZ2` text NOT NULL,
  `odpZ3` text NOT NULL,
  `odpG` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontent`
--

INSERT INTO `kontent` (`id`, `pytanie`, `odpZ`, `odpZ2`, `odpZ3`, `odpG`) VALUES
(1, 'Jaki kolor ma gruszka?', 'Czerwony', 'Zolty', 'Pomaranczowy', 'Zielony'),
(3, 'Gdzie znajduje sie tzw. Spodek?', 'Krakow', 'Warszawa', 'Gdansk', 'Katowice'),
(6, 'jaki kolor ma mars?', 'Zielony', 'Niebieski', 'Bialy', 'Czerwony'),
(7, 'najlepsza marka komputerowa', 'asus', 'acer', 'LG', 'Dell');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyniki`
--

CREATE TABLE `wyniki` (
  `id` tinyint(4) NOT NULL,
  `gracz` text NOT NULL,
  `wynik` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wyniki`
--

INSERT INTO `wyniki` (`id`, `gracz`, `wynik`) VALUES
(1, 'nazaer', 2),
(2, 'qwer', 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kontent`
--
ALTER TABLE `kontent`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wyniki`
--
ALTER TABLE `wyniki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontent`
--
ALTER TABLE `kontent`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wyniki`
--
ALTER TABLE `wyniki`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
