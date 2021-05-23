-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 23, 2021 alle 11:13
-- Versione del server: 10.4.18-MariaDB
-- Versione PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sito`
--
CREATE DATABASE IF NOT EXISTS `sito` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sito`;

-- --------------------------------------------------------

--
-- Struttura della tabella `carrozza`
--

CREATE TABLE `carrozza` (
  `Codice_carrozza` int(11) NOT NULL,
  `Nome` varchar(225) DEFAULT NULL,
  `Immagine` varchar(225) DEFAULT NULL,
  `Descrizione` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `carrozza`
--

INSERT INTO `carrozza` (`Codice_carrozza`, `Nome`, `Immagine`, `Descrizione`) VALUES
(-1, 'Errore: Cabina Peggy', 'http://127.0.0.1/homework/20160328_122620.jpg', '---'),
(1, 'Carrozza 1', 'https://www.upperail.com/wp-content/uploads/2017/07/belmond-grand-hibernian-treno-lusso-vagone-panoramico-960x1149.jpg', 'Vagoni composti da due divani e ampie finestre'),
(2, 'Carrozza 2', 'https://onmyrailway.com/wp-content/uploads/2020/01/belmond-orient-express-cabina-suite.jpg', 'Adatta principalmente per chi è di sangue blu'),
(3, 'Carrozza 3', 'https://hips.hearstapps.com/elleit.h-cdn.co/assets/17/51/1513681330-treni-lusso-royal-scotsman.jpg', 'Arredamento ispirato al 221B di Baker Street');

-- --------------------------------------------------------

--
-- Struttura della tabella `offerta`
--

CREATE TABLE `offerta` (
  `CodiceT` int(11) NOT NULL,
  `IdTreno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `offerta`
--

INSERT INTO `offerta` (`CodiceT`, `IdTreno`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 1),
(10, 2),
(11, 1),
(12, 3),
(13, 5),
(14, 7),
(15, 8),
(16, 6),
(17, 2),
(18, 5),
(19, 8),
(20, 7),
(21, 3),
(22, 5),
(23, 7),
(24, 8),
(25, 4),
(26, 1),
(27, 3),
(28, 2),
(29, 6),
(30, 5),
(31, 8),
(32, 7),
(33, 6),
(34, 5),
(35, 8),
(36, 1),
(37, 5),
(38, 7),
(39, 4),
(40, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `tratta`
--

CREATE TABLE `tratta` (
  `CodiceT` int(11) NOT NULL,
  `Orario` time DEFAULT NULL,
  `Immagine` varchar(225) DEFAULT NULL,
  `CittàArrivo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `tratta`
--

INSERT INTO `tratta` (`CodiceT`, `Orario`, `Immagine`, `CittàArrivo`) VALUES
(1, '08:00:00', 'https://siviaggia.it/wp-content/uploads/sites/2/2021/05/New-York.jpg', 'New York'),
(2, '09:00:00', 'https://www.globalgeografia.com/europa/immagini/fr_parigi.jpg', 'Parigi'),
(3, '09:25:00', 'https://lindro.it/wp-content/uploads/2020/02/9CE54948-31E2-4D04-8A79-25D8675D3BF7-702x405.jpeg', 'Londra'),
(4, '10:15:00', 'https://www.viaggiemiraggi.org/wp-content/uploads/2019/12/visitare_madrid-768x432.jpg', 'Madrid'),
(5, '11:30:00', 'https://www.turituri.com/wp-content/uploads/Roma-2.jpg', 'Roma'),
(6, '11:45:00', 'https://www.turituri.com/wp-content/uploads/Roma-2.jpg', 'Roma'),
(7, '15:00:00', 'https://www.globalgeografia.com/europa/immagini/fr_parigi.jpg', 'Parigi'),
(8, '18:00:00', 'https://lindro.it/wp-content/uploads/2020/02/9CE54948-31E2-4D04-8A79-25D8675D3BF7-702x405.jpeg', 'Londra'),
(9, '19:30:00', 'https://www.costacrociere.it/content/dam/costa/inventory-assets/ports/IJM/ijm-amsterdam-ijmuiden-port-1.jpg', 'Amsterdam'),
(10, '20:00:00', 'https://www.holland.com/upload_mm/9/1/b/75231_fullimage_skyline%20erasmus%20brug%20in%20de%20avond%20rotterdam%20partners%20foto%20guido%20pijper.jpg', 'Rotterdam'),
(11, '10:03:00', 'https://siviaggia.it/wp-content/uploads/sites/2/2021/05/New-York.jpg', 'New York'),
(12, '12:35:00', 'https://siviaggia.it/wp-content/uploads/sites/2/2021/05/New-York.jpg', 'New York'),
(13, '16:32:00', 'https://siviaggia.it/wp-content/uploads/sites/2/2021/05/New-York.jpg', 'New York'),
(14, '20:11:00', 'https://siviaggia.it/wp-content/uploads/sites/2/2021/05/New-York.jpg', 'New York'),
(15, '10:37:00', 'https://www.globalgeografia.com/europa/immagini/fr_parigi.jpg', 'Parigi'),
(16, '23:11:00', 'https://www.globalgeografia.com/europa/immagini/fr_parigi.jpg', 'Parigi'),
(17, '01:10:00', 'https://lindro.it/wp-content/uploads/2020/02/9CE54948-31E2-4D04-8A79-25D8675D3BF7-702x405.jpeg', 'Londra'),
(18, '05:17:00', 'https://lindro.it/wp-content/uploads/2020/02/9CE54948-31E2-4D04-8A79-25D8675D3BF7-702x405.jpeg', 'Londra'),
(19, '06:27:00', 'https://lindro.it/wp-content/uploads/2020/02/9CE54948-31E2-4D04-8A79-25D8675D3BF7-702x405.jpeg', 'Londra'),
(20, '08:01:00', 'https://www.viaggiemiraggi.org/wp-content/uploads/2019/12/visitare_madrid-768x432.jpg', 'Madrid'),
(21, '17:05:00', 'https://www.viaggiemiraggi.org/wp-content/uploads/2019/12/visitare_madrid-768x432.jpg', 'Madrid'),
(22, '18:49:00', 'https://www.viaggiemiraggi.org/wp-content/uploads/2019/12/visitare_madrid-768x432.jpg', 'Madrid'),
(23, '04:00:00', 'https://www.turituri.com/wp-content/uploads/Roma-2.jpg', 'Roma'),
(24, '17:56:00', 'https://www.turituri.com/wp-content/uploads/Roma-2.jpg', 'Roma'),
(25, '23:50:00', 'https://www.turituri.com/wp-content/uploads/Roma-2.jpg', 'Roma'),
(26, '01:00:00', 'https://www.latitudeslife.com/wp-content/uploads/moscow-2742642_1280-e1541423792810.jpg', 'Mosca'),
(27, '05:00:00', 'https://www.latitudeslife.com/wp-content/uploads/moscow-2742642_1280-e1541423792810.jpg', 'Mosca'),
(28, '09:00:00', 'https://www.latitudeslife.com/wp-content/uploads/moscow-2742642_1280-e1541423792810.jpg', 'Mosca'),
(29, '20:00:00', 'https://www.latitudeslife.com/wp-content/uploads/moscow-2742642_1280-e1541423792810.jpg', 'Mosca'),
(30, '00:02:00', 'https://www.italiajapan.net/img/s68/i2/shibuya-crossing_51760207-600x400.jpg', 'Tokyo'),
(31, '00:30:00', 'https://www.italiajapan.net/img/s68/i2/shibuya-crossing_51760207-600x400.jpg', 'Tokyo'),
(32, '12:10:00', 'https://www.italiajapan.net/img/s68/i2/shibuya-crossing_51760207-600x400.jpg', 'Tokyo'),
(33, '22:01:00', 'https://www.italiajapan.net/img/s68/i2/shibuya-crossing_51760207-600x400.jpg', 'Tokyo'),
(34, '00:10:00', 'https://www.costacrociere.it/content/dam/costa/inventory-assets/ports/IJM/ijm-amsterdam-ijmuiden-port-1.jpg', 'Amsterdam'),
(35, '22:27:00', 'https://www.costacrociere.it/content/dam/costa/inventory-assets/ports/IJM/ijm-amsterdam-ijmuiden-port-1.jpg', 'Amsterdam'),
(36, '16:55:00', 'https://www.costacrociere.it/content/dam/costa/inventory-assets/ports/IJM/ijm-amsterdam-ijmuiden-port-1.jpg', 'Amsterdam'),
(37, '00:17:00', 'https://www.holland.com/upload_mm/9/1/b/75231_fullimage_skyline%20erasmus%20brug%20in%20de%20avond%20rotterdam%20partners%20foto%20guido%20pijper.jpg', 'Rotterdam'),
(38, '03:08:00', 'https://www.holland.com/upload_mm/9/1/b/75231_fullimage_skyline%20erasmus%20brug%20in%20de%20avond%20rotterdam%20partners%20foto%20guido%20pijper.jpg', 'Rotterdam'),
(39, '15:57:00', 'https://www.holland.com/upload_mm/9/1/b/75231_fullimage_skyline%20erasmus%20brug%20in%20de%20avond%20rotterdam%20partners%20foto%20guido%20pijper.jpg', 'Rotterdam'),
(40, '22:09:00', 'https://www.holland.com/upload_mm/9/1/b/75231_fullimage_skyline%20erasmus%20brug%20in%20de%20avond%20rotterdam%20partners%20foto%20guido%20pijper.jpg', 'Rotterdam');

-- --------------------------------------------------------

--
-- Struttura della tabella `treno`
--

CREATE TABLE `treno` (
  `ID` int(11) NOT NULL,
  `Agenzia` varchar(20) DEFAULT NULL,
  `Modello` varchar(20) DEFAULT NULL,
  `Cabina_montata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `treno`
--

INSERT INTO `treno` (`ID`, `Agenzia`, `Modello`, `Cabina_montata`) VALUES
(1, 'Wilford Ind.', 'Freccia Rossa', 1),
(2, 'Wilford Ind.', 'Freccia Verde', 2),
(3, 'Astrazeneca', 'Vaccino Sicuro', 1),
(4, 'Marvel inc.', 'Gemme infinito', 3),
(5, 'Marvel inc.', 'Iron Man', 1),
(6, 'Wilford Ind.', 'Snowpiercer', 2),
(7, 'Snow President', 'Capitol City', 3),
(8, 'Apex Legend', 'Crypto ', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `Username` varchar(20) NOT NULL,
  `Nome` varchar(20) DEFAULT NULL,
  `Cognome` varchar(20) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Pass` varchar(255) DEFAULT NULL,
  `Votazione` int(11) DEFAULT NULL,
  `Musica` varchar(225) DEFAULT NULL,
  `Libro` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`Username`, `Nome`, `Cognome`, `Email`, `Pass`, `Votazione`, `Musica`, `Libro`) VALUES
('Gionata32', 'Gimmy', 'Giurdanella', 'gionata2001@gmail.com', '$2y$10$zmJ.WHCsz6i8AHV1z7kQPucbPX4IUhWAS.JeN9mBt2ieZLG2hZ0pi', 1, 'Bach for the Background', 'De ui percussionis liber'),
('gionny', 'Giovanni', 'Bonanno', 'giovannibonanno2003@gmail.com', '$2y$10$GTH5Fuk1/Ron1PPu2lVl0OF8MJMgohYOBIjGbbHPaBCl2nj.Dvuha', 3, 'Discover Mozart', 'Sanremo è Sanremo'),
('LauraTheBest', 'Laura', 'Pausini', 'laura@gmail.com', '$2y$10$9a8uaoHCikUesvclHB/fReH0k0JgNdlG3Vir.AatX3dRn3gU5Rby2', 1, 'Rachmaninov: Piano Concerto No.2', 'Conservatorio del Baraccano'),
('leris', 'loris', 'bengala', 'lorisbengala03@gmail.com', '$2y$10$LfJ/wVsABM90i5mHkrAgne7jADBFiPJJOfQR2LE1sSqKS5FxLHyze', 2, 'Meditative Mozart', 'Variazioni per clavicembalo e percussioni.'),
('Lorena66', 'Lorena', 'Attardo', 'lorena@gmail.com', '$2y$10$WwXqeLvuyI5GwQ9jtNqf4.aZkcUOPBTdxstqVabAHUPpLP7k1Hoa.', 1, 'Chopin - Piano Works', 'Variazioni per clavicembalo e percussioni.'),
('Luca02', 'Luca', 'Arcidiacono', 'lucarcidiacono@gmail.com', '$2y$10$xIgtq.o3zXhMJX7PhoGStuztV4UpruCmHW2p0bp5eFiJGhTPehRtG', 2, 'Chopin - Piano Works', 'De ui percussionis liber'),
('lucry', 'Lucrezia', 'Genovese', 'lucryg003@gmail.com', '$2y$10$RrLCnF6boeWNhiqg3ADYTeH0R91iJaeT4rIeRNosOZa/LxT9dOkGO', 3, 'Chopin for the Background', 'De ui percussionis liber'),
('Newt24', 'Newt', 'Jackson', 'newt.jackson@gmail.com', '$2y$10$QQXcrG4c06b5rVZRxetH5eqeM58WAh.m6qzvX/H.VaKbDdYFTUYBe', 3, 'Mozart: Gran Partita - Wind Serenades K. 361 ', 'Acustica'),
('simonino', 'simone', 'marino', 'uououououo@gmail.com', '$2y$10$EZc19WWTV1fiTmeKnPT/FOT.BjVhHWPbNEez0fKI4ieq4mHQpptRK', NULL, 'Mozart: Piano Concertos Nos. 11, 12 ', NULL),
('Vincenzo24', 'Vincenzo', 'MICIELI', 'micieli.vincenzo@virgilio.it', '$2y$10$vgnzOGETMbgga/w9oHls4eiQu/pODQrRqExXXOFgtDtENkjKJV/um', 2, 'Chopin: Piano Works', 'De vi percussionis liber');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `carrozza`
--
ALTER TABLE `carrozza`
  ADD PRIMARY KEY (`Codice_carrozza`);

--
-- Indici per le tabelle `offerta`
--
ALTER TABLE `offerta`
  ADD PRIMARY KEY (`CodiceT`,`IdTreno`),
  ADD KEY `idx_codicet` (`CodiceT`),
  ADD KEY `idx_idtreno` (`IdTreno`);

--
-- Indici per le tabelle `tratta`
--
ALTER TABLE `tratta`
  ADD PRIMARY KEY (`CodiceT`);

--
-- Indici per le tabelle `treno`
--
ALTER TABLE `treno`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idx_id` (`Cabina_montata`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `idx_votazione` (`Votazione`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `tratta`
--
ALTER TABLE `tratta`
  MODIFY `CodiceT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT per la tabella `treno`
--
ALTER TABLE `treno`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `offerta`
--
ALTER TABLE `offerta`
  ADD CONSTRAINT `offerta_ibfk_1` FOREIGN KEY (`CodiceT`) REFERENCES `tratta` (`CodiceT`),
  ADD CONSTRAINT `offerta_ibfk_2` FOREIGN KEY (`IdTreno`) REFERENCES `treno` (`ID`);

--
-- Limiti per la tabella `treno`
--
ALTER TABLE `treno`
  ADD CONSTRAINT `treno_ibfk_1` FOREIGN KEY (`Cabina_montata`) REFERENCES `carrozza` (`Codice_carrozza`);

--
-- Limiti per la tabella `utenti`
--
ALTER TABLE `utenti`
  ADD CONSTRAINT `utenti_ibfk_1` FOREIGN KEY (`Votazione`) REFERENCES `carrozza` (`Codice_carrozza`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
