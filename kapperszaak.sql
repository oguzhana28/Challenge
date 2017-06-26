-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 jun 2017 om 14:17
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kapperszaak`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `Naam` varchar(50) NOT NULL,
  `adres` varchar(50) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `plaats` varchar(50) NOT NULL,
  `telefoon` varchar(50) NOT NULL,
  `mobiel` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `register`
--

INSERT INTO `register` (`id`, `Naam`, `adres`, `postcode`, `plaats`, `telefoon`, `mobiel`, `email`, `Password`) VALUES
(1, 'zlatan', 'van kaapstaat 2', '2313 kp', 'rotterdam', '0183627384', '0631231123', 'zlatan@live.nl', 'giresun28'),
(2, 'zlatan1', 'van kaapstaat 21', '2323 kp', 'amsterdam', '0183627385', '0631231124', 'zlatan@live.com', 'karadeniz0915'),
(3, 'zlatan1', 'van kaapstaat 21', '2323 kp', 'amsterdam', '0183627385', '0631231124', 'zlatan@live.com', 'karadeniz01');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
