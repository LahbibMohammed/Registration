-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 10 mai 2023 à 19:02
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `newdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `gestion_utilisateur`
--

CREATE TABLE `gestion_utilisateur` (
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Date_Of_Birthday` date NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `Level_Of_Study` varchar(255) NOT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `gestion_utilisateur`
--

INSERT INTO `gestion_utilisateur` (`First_Name`, `Last_Name`, `Adresse`, `Date_Of_Birthday`, `Nationality`, `Level_Of_Study`, `Gender`) VALUES
('lahbib', 'mohammed', 'hayyyy', '2003-01-02', 'Marocain', 'bac+2', 'male'),
('med', 'mohammed', 'hayyyy', '2003-01-02', 'Marocain', 'bac+2', 'male'),
('khalid', 'samir', 'hayyy', '2000-01-02', 'Marocain', 'bac+2', 'male'),
('khalid', 'samir', 'hayyy', '2000-01-02', 'Marocain', 'bac+2', 'male'),
('hossam', 'kadirii', 'hay zitoune N425', '1999-10-06', 'Francais', 'bac', 'male'),
('iman', 'fathi', 'hay el hanae N99', '1999-12-03', 'Marocain', 'LP', 'female'),
('iman', 'fathi', 'hay el hanae N99', '1999-12-03', 'Marocain', 'LP', 'female'),
('juhj', 'nij', 'jio', '1958-02-02', 'Marocain', 'bac+2', 'male'),
('yahya', 'khiari', 'lotissement al nour N22', '2000-12-02', 'Marocain', 'LP', 'male'),
('samir', 'khall', 'hay al naj', '2200-01-02', 'Marocain', 'bac+2', 'male'),
('said', 'kariouh', 'lotissement les roses', '2006-12-20', 'Marocain', 'bac', 'male'),
('said', 'kariouh', 'lotissement les roses', '2006-12-20', 'Marocain', 'bac', 'male'),
('soukaina', 'hachlaf', 'hay zaitoune h21 n44', '1996-09-02', 'Marocain', 'LP', 'female'),
('soukaina', 'hachlaf', 'hay zaitoune h21 n44', '1996-09-02', 'Marocain', 'LP', 'female'),
('soukaina', 'hachlaf', 'hay zaitoune h21 n44', '1996-09-02', 'Marocain', 'LP', 'female'),
('khali', 'nouri', 'hay al najd', '2002-01-01', 'Marocain', 'LP', 'male'),
('khali', 'nouri', 'hay al najd', '2002-01-01', 'Marocain', 'LP', 'male'),
('issam', 'issam', 'issamiissam', '2003-01-01', 'Francais', 'Master', 'male'),
('issam', 'issam', 'issamiissam', '1995-01-01', 'Marocain', 'Master', 'male'),
('morad', 'khalilli', 'ben charfa h 48 n11', '0002-02-01', 'Marocain', 'bac', ''),
('morad', 'khalilli', 'ben charfa h 48 n11', '0002-02-01', 'Marocain', 'bac', 'male'),
('med', 'mohammed', 'hay zitoune N425', '1997-11-26', 'Marocain', 'bac+2', ''),
('med', 'mohammed', 'hay zitoune N425', '1997-11-26', 'Marocain', 'bac+2', ''),
('bnhj kj', 'b ,;', ',, ; n,;', '2007-11-26', 'Marocain', 'bac+2', 'male'),
('bnhj kj', 'b ,;', ',, ; n,;', '2007-11-26', 'Marocain', 'bac+2', 'male'),
('bnhj kj', 'b ,;', ',, ; n,;', '2007-11-26', 'Marocain', 'bac+2', 'male'),
('bnhj kj', 'b ,;', ',, ; n,;', '2007-11-26', 'Marocain', 'bac+2', 'male'),
('bnhj kj', 'b ,;', ',, ; n,;', '2007-11-26', 'Marocain', 'bac+2', 'male'),
('souad', 'aynaiy', 'hay lajjjjj', '1888-12-25', 'Marocain', 'bac', 'female'),
('souad', 'aynaiy', 'hay lajjjjj', '1888-12-25', 'Marocain', 'bac', 'female'),
('med', 'mohammed', 'hayyyy', '2008-09-30', 'Marocain', 'LP', 'male'),
('khalid', 'issam', 'ben charfa h 48 n11', '2017-08-30', 'Francais', 'Master', 'male'),
('khalidd', 'issam', 'ben charfa h 48 n11', '2017-08-30', 'Francais', 'Master', 'male'),
('med', 'issam', 'ben charfa h 48 n11', '2022-12-27', 'Marocain', 'bac+2', ''),
('khalid', 'mohammed', 'hayyyy', '2022-11-30', 'Marocain', 'LP', 'male'),
('lahbib', 'mohammed', 'hay zitoune N425', '2003-01-02', 'Marocain', 'bac+2', 'male'),
('med', 'mohammed', 'hayyyy', '2023-12-31', 'Marocain', 'bac+2', 'male'),
('saad', 'al alli', 'hay el massira', '1990-07-19', 'Marocain', 'LP', 'male'),
('med', 'mohammed', 'hayyyy', '2023-12-31', 'Marocain', 'bac+2', 'male'),
('med', 'mohammed', 'hayyyy', '2023-12-31', 'Marocain', 'bac+2', 'female'),
('med', 'mohammed', 'hayyyy', '2023-12-31', 'Marocain', 'bac+2', 'male'),
('lahbib', 'lahbib', 'ben charfa h 48 n11', '2023-12-30', 'Marocain', 'LP', 'female'),
('morad', 'lahbib', 'ben charfa h 48 n11', '2021-11-29', 'Marocain', 'bac+2', 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
