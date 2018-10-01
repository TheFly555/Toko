-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 01 okt 2018 om 14:53
-- Serverversie: 10.1.32-MariaDB
-- PHP-versie: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(3) NOT NULL,
  `voornaam` varchar(55) NOT NULL,
  `achternaam` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `geboortedatum` date NOT NULL,
  `adres` varchar(55) NOT NULL,
  `postcode` varchar(7) NOT NULL,
  `plaats` varchar(55) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `voornaam`, `achternaam`, `email`, `geboortedatum`, `adres`, `postcode`, `plaats`, `wachtwoord`, `Admin`) VALUES
(2, 'lois', 'de Vlieger', 'lois@hejonet.nl', '2002-02-13', 'Baljuwerf 18', '3264SK', 'Nieuw-Beijerland', '1234', 0),
(3, 'Thijs', 'de Vlieger', 'thijs@hejonet.nl', '2018-09-29', 'Baljuwerf 18', '3264SK', 'Nieuw-Beijerland', '9607f2e120690a42a48aa9843d9b0170', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `teams`
--

CREATE TABLE `teams` (
  `id_team` int(11) NOT NULL,
  `team_naam` varchar(55) NOT NULL,
  `aantal_gewonnen` int(11) NOT NULL,
  `aantal_verloren` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `teams`
--

INSERT INTO `teams` (`id_team`, `team_naam`, `aantal_gewonnen`, `aantal_verloren`) VALUES
(1, 'Feyenoord', 13, 2),
(2, 'Ajax', 1, 12),
(3, 'Ado Den Haag', 3, 4),
(4, 'PSV', 6, 3);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexen voor tabel `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id_team`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
