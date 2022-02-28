-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 28, 2022 alle 15:26
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minimvc`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `created`) VALUES
(1, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac libero vel odio semper vulputate. Morbi pellentesque augue est, sed suscipit orci consequat eu. Nulla aliquet lacinia ipsum a mollis. Donec velit felis, porta vitae magna at, ullamcorper pharetra tellus. Praesent ut lacus tincidunt, euismod lectus sed, ultrices lorem. Maecenas quis turpis scelerisque, gravida diam quis, tincidunt purus. Aenean consectetur commodo elit in dapibus. Pellentesque at justo ut nisi tempor cursus. Donec tellus mauris, scelerisque nec tincidunt in, ullamcorper vitae dui. In molestie sodales libero ut commodo. Suspendisse auctor tortor sed mauris sodales venenatis. Etiam a rhoncus ex. Mauris ut justo vitae nibh dignissim facilisis. Aenean cursus pharetra eros, et vulputate lectus auctor faucibus.', '2022-02-28 15:24:18'),
(2, 'Pellentesque euismod', 'Pellentesque euismod purus eget ipsum convallis rutrum. Vivamus in diam tempus, ultrices libero ut, cursus purus. Integer luctus sodales nibh, quis hendrerit dui elementum vulputate. Duis sollicitudin ex ligula, sit amet facilisis ipsum efficitur sit amet. Donec ornare leo vitae ipsum tempus, et aliquet neque interdum. Ut commodo, mi et lobortis volutpat, eros purus pulvinar libero, vitae convallis arcu purus sit amet neque. Maecenas quis neque leo. Quisque in sem in nisl condimentum volutpat. Donec sed varius sem. Sed dignissim hendrerit enim, vitae consectetur erat accumsan in.', '2022-02-28 14:26:01');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_idx` (`title`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
