-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Maj 2021, 16:36
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza na zadania`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczestnicy`
--

CREATE TABLE `uczestnicy` (
  `imie` varchar(45) NOT NULL,
  `nazwisko` varchar(45) NOT NULL,
  `wiek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
INSERT INTO `uczestnicy` (`imie`, `nazwisko`, `wiek`) VALUES ('Michal', 'Bąk', '32');
INSERT INTO `uczestnicy` (`imie`, `nazwisko`, `wiek`) VALUES ('Monika', 'Kaczka', '19');
-- Zrzut danych tabeli `uczestnicy`
--

INSERT INTO `uczestnicy` (`imie`, `nazwisko`, `wiek`) VALUES
('Michal', 'Bąk', 32),
('Michal', 'Bąk', 32),
('Monika', 'Kaczka', 19);
COMMIT;

UPDATE `uczestnicy` SET `imie`='Bogdan',`nazwisko`='Zajac',`wiek`='65' WHERE 2
DELETE FROM `uczestnicy` WHERE 3

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
