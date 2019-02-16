-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 14 Feb 2016 pada 23.53
-- Versi Server: 5.5.46
-- Versi PHP: 5.4.45-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `facemash`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `victim_members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `EloPoint` float NOT NULL,
  `P` int(11) NOT NULL,
  `W` int(11) NOT NULL,
  `D` int(11) NOT NULL,
  `L` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `nama`, `EloPoint`, `P`, `W`, `D`, `L`) VALUES
(1, 'Ariella Calista Ichwan', 0, 0, 0, 0, 0),
(2, 'Cindy Hapsari Maharani Pujiantoro Putri', 0.0, 0, 0, 0, 0),
(3, 'Cindy Yuvia', 0.0, 0, 0, 0, 0),
(4, 'Della Delila', 0.0, 0, 0, 0, 0),
(5, 'Diani Amalia Ramadhani', 0.0, 0, 0, 0, 0),
(6, 'Feni Fitriyanti', 0.0, 0, 0, 0, 0),
(7, 'Frieska Anastasia Laksani', 0.0, 0, 0, 0, 0),
(8, 'Gabriela Margareth Warouw', 0.0, 0, 0, 0, 0),
(9, 'Michelle Christo Kusnadi', 0.0, 0, 0, 0, 0),
(10, 'Nurhayati', 0.0, 0, 0, 0, 0),
(11, 'Saktia Oktapyani', 0.0, 0, 0, 0, 0),
(12, 'Sania Julia Montolalu', 0.0, 0, 0, 0, 0),
(13, 'Shania Junianatha', 0.0, 0, 0, 0, 0),
(14, 'Sinka Juliani', 0.0, 0, 0, 0, 0),
(15, 'Stephanie Pricilla Indarto Putri', 0.0, 0, 0, 0, 0),
(16, 'Alicia Chanzia', 0.0, 0, 0, 0, 0),
(17, 'Aninditha Rahma Cahyadi', 0.0, 0, 0, 0, 0),
(18, 'Beby Chaesara Anadila', 0.0, 0, 0, 0, 0),
(19, 'Fransisca Saraswati Puspa Dewi', 0.0, 0, 0, 0, 0),
(20, 'Jennifer Rachel Natasya', 0.0, 0, 0, 0, 0),
(21, 'Kandiya Rafa Maulidita', 0.0, 0, 0, 0, 0),
(22, 'Maria Genoveva Natalia Desy Purnamasari Gunawan', 0.0, 0, 0, 0, 0),
(23, 'Nadila Cindi Wantari', 0.0, 0, 0, 0, 0),
(24, 'Natalia', 0.0, 0, 0, 0, 0),
(25, 'Ni Made Ayu Vania Aurellia', 0.0, 0, 0, 0, 0),
(26, 'Ratu Vienny Fitrilya', 0.0, 0, 0, 0, 0),
(27, 'Rona Anggreani', 0.0, 0, 0, 0, 0),
(28, 'Shani Indira Natio', 0.0, 0, 0, 0, 0),
(29, 'Shania Gracia', 0.0, 0, 0, 0, 0),
(30, 'Viviyona Apriani', 0.0, 0, 0, 0, 0),
(31, 'Adhisty Zara', 0.0, 0, 0, 0, 0),
(32, 'Adriani Elisabeth', 0.0, 0, 0, 0, 0),
(33, 'Ayana Shahab', 0.0, 0, 0, 0, 0),
(34, 'Ayu Safira Oktaviani', 0.0, 0, 0, 0, 0),
(35, 'Fidly Immanda Azzahra', 0.0, 0, 0, 0, 0),
(36, 'Gabryela Marcelina', 0.0, 0, 0, 0, 0),
(37, 'Hasyakyla Utami Kusumawardhani', 0.0, 0, 0, 0, 0),
(38, 'Jinan Safa Safira', 0.0, 0, 0, 0, 0),
(39, 'Melati Putri Rahel Sesilia', 0.0, 0, 0, 0, 0),
(40, 'Puti Nadhira Azalia', 0.0, 0, 0, 0, 0),
(41, 'Rinanda Syahputri', 0.0, 0, 0, 0, 0),
(42, 'Sonia Natalia', 0.0, 0, 0, 0, 0),
(43, 'Syahfira Angela Nurhaliza', 0.0, 0, 0, 0, 0),
(44, 'Tan Zhi Hui Celine', 0.0, 0, 0, 0, 0),
(45, 'Thalia Ivanka Elizabeth', 0.0, 0, 0, 0, 0),
(46, 'Aiko Harumi', 0.0, 0, 0, 0, 0),
(47, 'Anastasya Narwastu Tety Handuran', 0.0, 0, 0, 0, 0),
(48, 'Angelina Christy', 0.0, 0, 0, 0, 0),
(49, 'Aurel Mayori', 0.0, 0, 0, 0, 0),
(50, 'Azizi Asadel', 0.0, 0, 0, 0, 0),
(51, 'Dhea Angelia', 0.0, 0, 0, 0, 0),
(52, 'Eve Antoinette Ichwan', 0.0, 0, 0, 0, 0),
(53, 'Febi Komaril', 0.0, 0, 0, 0, 0),
(54, 'Febrina Diponegoro', 0.0, 0, 0, 0, 0),
(55, 'Febriola Sinambela', 0.0, 0, 0, 0, 0),
(56, 'Freya Jayawardana', 0.0, 0, 0, 0, 0),
(57, 'Gabriel Angelina', 0.0, 0, 0, 0, 0),
(58, 'Gita Sekar Andarini', 0.0, 0, 0, 0, 0),
(59, 'Graciella Ruth Wiranto', 0.0, 0, 0, 0, 0),
(60, 'Helisma Putri', 0.0, 0, 0, 0, 0),
(61, 'Jessica Chandra', 0.0, 0, 0, 0, 0),
(62, 'Jesslyn Callista', 0.0, 0, 0, 0, 0),
(63, 'Mutiara Azzahra', 0.0, 0, 0, 0, 0),
(64, 'Nabila Fitriana', 0.0, 0, 0, 0, 0),
(65, 'Rifa Fatmasari', 0.0, 0, 0, 0, 0),
(66, 'Riska Amelia Putri', 0.0, 0, 0, 0, 0),
(67, 'Shalza Grasita', 0.0, 0, 0, 0, 0),
(68, 'Viona Fadrin', 0.0, 0, 0, 0, 0),
(69, 'Yessica Tamara', 0.0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
