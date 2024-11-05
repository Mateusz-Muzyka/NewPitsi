-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Lis 2024, 10:34
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `quiz`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kontent`
--

INSERT INTO `kontent` (`id`, `pytanie`, `odpZ`, `odpZ2`, `odpZ3`, `odpG`) VALUES
(1, 'Jaki kolor ma gruszka?', 'Czerwony', 'Zolty', 'Pomaranczowy', 'Zielony');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyniki`
--

CREATE TABLE `wyniki` (
  `id` tinyint(4) NOT NULL,
  `gracz` text NOT NULL,
  `wynik` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kontent`
--
ALTER TABLE `kontent`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `wyniki`
--
ALTER TABLE `wyniki`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
