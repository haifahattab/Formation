-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2020 at 09:19 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ma_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `num_f` int(8) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `ville` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fournisseurs`
--

INSERT INTO `fournisseurs` (`num_f`, `nom`, `ville`) VALUES
(1, 'darty', 'antibes'),
(2, 'fnac', 'cannes'),
(3, 'boulanger', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `fournitures`
--

CREATE TABLE `fournitures` (
  `num_f` int(8) NOT NULL,
  `code_p` int(8) NOT NULL,
  `quantite` int(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fournitures`
--

INSERT INTO `fournitures` (`num_f`, `code_p`, `quantite`) VALUES
(3, 4, 3),
(2, 3, 10),
(1, 2, 20),
(2, 1, 18),
(3, 2, 6),
(1, 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `code_p` int(8) NOT NULL,
  `libelle` varchar(40) NOT NULL,
  `origine` varchar(40) NOT NULL,
  `couleur` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`code_p`, `libelle`, `origine`, `couleur`) VALUES
(1, 'ordinateur', 'chine', 'bleu'),
(2, 'machine_à_laver', 'france', 'blanc'),
(3, 'lave_vaisselle', 'france', 'gris'),
(4, 'gaz', 'allemagne', 'noir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`num_f`);

--
-- Indexes for table `fournitures`
--
ALTER TABLE `fournitures`
  ADD KEY `fk_numf` (`num_f`),
  ADD KEY `fk_codep` (`code_p`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`code_p`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fournitures`
--
ALTER TABLE `fournitures`
  ADD CONSTRAINT `fk_codep` FOREIGN KEY (`code_p`) REFERENCES `produits` (`code_p`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_numf` FOREIGN KEY (`num_f`) REFERENCES `fournisseurs` (`num_f`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
