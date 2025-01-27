-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2024 at 07:24 AM
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
(44, 'Jakie jest rozwiazanie skrotu CSS', 'Cascading Styling Series', 'Coloring Style Sheet', 'Color Set Style', 'Cascading Style Sheets'),
(45, 'Jaka funkcja w JS pozwala na wciagniecie elementu z html do JS?', 'document.GetItemById();', '#body.getElementById();', 'html.getValueById();', 'document.getElementById();'),
(46, 'KtÃ³ry z wymienionych systemÃ³w nie jest systemem CMS?', 'WordPress', 'Joomla!', 'Drupal', 'Adobe Flash'),
(47, 'Co to jest DBMS?', 'Strukturalny jezyk zapytan do  bazy', 'DataBaseMachineSecurity', 'nie istnieje cos takiego', 'System zarzadzania baza danych'),
(48, 'WskaÅ¼ listÄ™ zawierajÄ…cÄ… jedynie technologie back-endowe', 'Python, Sinatra, Angular', 'Socket.io, SASS, RubyOnRails', 'Bootstrap, React, Gulp ', 'Node.js, Django, Laravel'),
(49, 'Kaskadowe arkusze stylÃ³w tworzy siÄ™ w celu', 'poÅ‚Ä…czenia struktury dokumentu strony z wÅ‚aÅ›ciwÄ… formÄ… jego prezentacji ', 'polaczenia sie z baza danych', 'dodawanie logiki do naszej strony', 'uÅ‚atwienia formatowania strony'),
(50, 'kod binarny sklada sie z?', 'dwoch liter \"a\" i \"z\"', 'trzech cyfr \"0\", \"1\", \"2\"', 'trzech liter \"a\", \"o\" i \"z\"', 'dwoch cyfr \"0\", \"1\"'),
(51, 'jakie sa 3 podstawowe petle w programowaniu?', 'fors,whiler,loops', 'do whiler, forms, repeat', 'repeat, circleThing, for', 'for,while,do while'),
(52, 'Aby zamieÅ›ciÄ‡ aplikacjÄ™ webowÄ… w internecie, naleÅ¼y jej pliki ÅºrÃ³dÅ‚owe skopiowaÄ‡ na serwer za pomocÄ… protokoÅ‚u...', 'AJAX', 'JSON', 'HTTP', 'FTP'),
(55, 'Jakie zdarzenie w WPF jest wywoływane, gdy użytkownik zmienia zawartość pola tekstowego (TextBox)?', 'MouseDown', 'Loaded', 'Click', 'TextChanged');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyniki`
--

CREATE TABLE `wyniki` (
  `id` int(11) NOT NULL,
  `gracz` tinytext NOT NULL,
  `wynik` tinytext NOT NULL,
  `sorter` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wyniki`
--

INSERT INTO `wyniki` (`id`, `gracz`, `wynik`, `sorter`) VALUES
(1, 'Qwezy', '9/10', 9),
(2, 'mate', '7/10', 7),
(3, 'Mietek', '0/10', 0);

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
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `wyniki`
--
ALTER TABLE `wyniki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
