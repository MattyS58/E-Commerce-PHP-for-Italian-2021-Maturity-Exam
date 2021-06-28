-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Giu 28, 2021 alle 12:38
-- Versione del server: 10.4.19-MariaDB-cll-lve
-- Versione PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u663464904_magazzino`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Carica`
--

CREATE TABLE `Carica` (
  `ID_Operatore` int(11) NOT NULL,
  `ID_Prodotto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Carica`
--

INSERT INTO `Carica` (`ID_Operatore`, `ID_Prodotto`) VALUES
(58, 3),
(58, 5),
(58, 8),
(58, 16),
(74, 1),
(74, 6);

-- --------------------------------------------------------

--
-- Struttura della tabella `Collo`
--

CREATE TABLE `Collo` (
  `ID_Collo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Collo`
--

INSERT INTO `Collo` (`ID_Collo`) VALUES
(1561),
(2833),
(4156),
(4780),
(5963),
(6511),
(6846),
(9999);

-- --------------------------------------------------------

--
-- Struttura della tabella `Composto`
--

CREATE TABLE `Composto` (
  `ID_Composto` int(11) NOT NULL,
  `ID_Prodotto` int(11) NOT NULL,
  `Quantita` int(11) NOT NULL,
  `username` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `Consegna`
--

CREATE TABLE `Consegna` (
  `Data` date NOT NULL,
  `ID_Consegna` int(11) NOT NULL,
  `ID_Corriere` int(11) NOT NULL,
  `ID_Collo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Consegna`
--

INSERT INTO `Consegna` (`Data`, `ID_Consegna`, `ID_Corriere`, `ID_Collo`) VALUES
('2021-05-06', 215623, 1793, 4780);

-- --------------------------------------------------------

--
-- Struttura della tabella `Corriere`
--

CREATE TABLE `Corriere` (
  `ID_Corriere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Corriere`
--

INSERT INTO `Corriere` (`ID_Corriere`) VALUES
(1793),
(1946),
(5244),
(8734);

-- --------------------------------------------------------

--
-- Struttura della tabella `Disassembla`
--

CREATE TABLE `Disassembla` (
  `ID_Collo` int(11) NOT NULL,
  `ID_Operatore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Disassembla`
--

INSERT INTO `Disassembla` (`ID_Collo`, `ID_Operatore`) VALUES
(4780, 74),
(6511, 58),
(6846, 58),
(9999, 58);

-- --------------------------------------------------------

--
-- Struttura della tabella `Operatore`
--

CREATE TABLE `Operatore` (
  `ID_Operatore` int(11) NOT NULL,
  `Nome` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cognome` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Operatore`
--

INSERT INTO `Operatore` (`ID_Operatore`, `Nome`, `Cognome`) VALUES
(58, 'Mattia', 'Schipilliti'),
(74, 'Mario', 'Rossi');

-- --------------------------------------------------------

--
-- Struttura della tabella `Ordine`
--

CREATE TABLE `Ordine` (
  `ID_Ordine` int(11) NOT NULL,
  `Data` datetime DEFAULT current_timestamp(),
  `Prezzo_Complessivo` float NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Ordine`
--

INSERT INTO `Ordine` (`ID_Ordine`, `Data`, `Prezzo_Complessivo`, `username`) VALUES
(1, '2021-05-21 08:43:21', 10, 'Mattia'),
(2, '2021-05-22 10:12:45', 105, 'Mattia'),
(3, '0000-00-00 00:00:00', 2, 'Mattia'),
(4, '2021-05-22 10:14:33', 2, 'Mattia'),
(5, '2021-05-22 10:58:32', 360, 'Mattia'),
(6, '2021-05-22 12:56:16', 570, 'Mattia'),
(7, '2021-05-23 12:43:53', 99.75, 'Mario'),
(8, '2021-05-23 17:27:01', 749, 'Mattia'),
(9, '2021-05-24 07:37:45', 180, 'Mattia'),
(10, '2021-05-24 08:09:46', 360, 'Mattia'),
(11, '2021-05-24 08:16:04', 180, 'MAttia'),
(12, '2021-05-25 08:09:38', 180, 'Mattia'),
(14, '2021-05-30 08:53:14', 350, 'Mattia'),
(15, '2021-06-24 09:40:53', 120, 'mattia');

-- --------------------------------------------------------

--
-- Struttura della tabella `Prodotto`
--

CREATE TABLE `Prodotto` (
  `ID_Prodotto` int(11) NOT NULL,
  `Nome` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descrizione` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prezzo` float NOT NULL,
  `Quantita` int(11) NOT NULL,
  `Categoria` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `immagine` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Squadra` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Prodotto`
--

INSERT INTO `Prodotto` (`ID_Prodotto`, `Nome`, `Descrizione`, `Prezzo`, `Quantita`, `Categoria`, `immagine`, `Squadra`) VALUES
(1, 'Milan Maglia Gara Home 2021/22\r\n', 'NASCE UN NUOVO MILAN\r\n\r\nI nuovi grattacieli che sorgono nello skyline milanese, catturano perfettamente il nuovo stato d\'animo di Milano.\r\nDall\'Expo di Milano che si è tenuta nel 2015, la mentalità dei milanesi è cambiata. Sono diventati più aperti alle influenze internazionali e hanno deciso di guardare avanti invece di ricordare il passato.', 90, 199, 'Maglia', 'images/milanhome.jpg', 'Milan'),
(2, 'Milan Maglia Gara Home Authentic 2021/22', 'NASCE UN NUOVO MILAN\r\n\r\nI nuovi grattacieli che sorgono nello skyline milanese, catturano perfettamente il nuovo stato d\'animo di Milano.\r\nDall\'Expo di Milano che si è tenuta nel 2015, la mentalità dei milanesi è cambiata. Sono diventati più aperti alle influenze internazionali e hanno deciso di guardare avanti invece di ricordare il passato.', 120, 94, 'Maglia', 'images/milanautentic.jpg', 'Milan'),
(3, 'Milan Maglia Gara Home Authentic 2021/22 + Special Pack', 'NASCE UN NUOVO MILAN\r\n\r\nI nuovi grattacieli che sorgono nello skyline milanese, catturano perfettamente il nuovo stato d\'animo di Milano.\r\nDall\'Expo di Milano che si è tenuta nel 2015, la mentalità dei milanesi è cambiata. Sono diventati più aperti alle influenze internazionali e hanno deciso di guardare avanti invece di ricordare il passato.', 130, 76, 'Maglia', 'images/milanautenticspecial.jpg', 'Milan'),
(4, 'Milan Maglia Gara Home Portiere 2021/22', '100% poliestere. Maglia gara a manica corta. Sponsor stampato sul davanti. Loghi AC Milan e Puma.\r\nLA ROSA DEI GIOCATORI PRESENTE E\' QUELLA DELLA STAGIONE 2020/21.', 90, 85, 'Maglia', 'images/milanportiere.jpg', 'Milan'),
(5, 'Milan Calzettoni Gara Home 2021/22', '65% poliestere, 18% poliammide, 15% cotone, 2% elastane. Calzettoni gara.', 18, 98, 'Calzettoni', 'images/calzettoni_milan.jpg', 'Milan'),
(6, 'Milan Maglia Gara Home Bambino 2021/22', 'NASCE UN NUOVO MILAN\r\n\r\nI nuovi grattacieli che sorgono nello skyline milanese, catturano perfettamente il nuovo stato d\'animo di Milano.\r\nDall\'Expo di Milano che si è tenuta nel 2015, la mentalità dei milanesi è cambiata. Sono diventati più aperti alle influenze internazionali e hanno deciso di guardare avanti invece di ricordare il passato.', 70, 102, 'Maglia', 'images/milan_bambino.jpg', 'Milan'),
(7, 'Milan Pantaloncini Gara Authentic Neri 2021/22', '100% poliestere. Logo Ufficiale ACM a trasferimento termico in rilievo sulla gamba destra; Logo PUMA sulla gamba sinistra; tessuto strutturato con Tecnologia Shincool; DryCELL; Vestibilità regolare con girovita slim e performance.', 50, 99, 'Pantaloncini ', 'images/pantaloncini_milan.jpg', 'Milan'),
(8, 'JUVENTUS MAGLIA GARA HOME AUTHENTIC 2020/21', '\r\nPRODUCT DESCRIPTION\r\nCreatività e identità: sono questi i concetti che ispirano la nuova maglia Home Authentic del campionato 2020/2021. Le classiche strisce bianconere vengono reinterpretate in chiave grafica con pennellate che richiamano l’arte contemporanea e dettagli color oro che illuminano i successi dei grandi campioni. Il modello è realizzato in 100% poliestere con tecnologia traspirante HEAT.RDY, l\'innovativo sistema adidas che mantiene la pelle asciutta e protetta in ogni condizione di sforzo fisico.', 19.95, 114, 'Maglia', 'images/maglia_juve.jpg', 'Juventus'),
(9, 'JUVENTUS CALZETTONI GARA HOME 2020/21', 'Completa il tuo look da vero tifoso bianconero con i calzettoni ispirati alla divisa Home 2020/2021. Il modello è realizzato in misto poliestere e nylon stretch con design a compressione sulla caviglia e lungo l\'arco plantare. Il motivo grafico a righe oro su fondo bianco è il simbolo del nuovo campionato e delle grandi emozioni di sempre.', 19, 99, 'Calzettoni', 'images/juve_calzettoni.jpg', 'Juventus'),
(10, 'JUVENTUS MAGLIA GARA HOME 2020/21', 'Creata per veri tifosi\r\nCreata appositamente per i tifosi, ha un taglio regolare, leggermente più ampio rispetto al modello indossato dai giocatori.', 50, 70, 'Maglia', 'images/magliahome_juventus.jpg', 'Juventus'),
(12, 'Milan Minikit Gara Home Bambino 2021/22', '100% poliestere. Maglia gara a manica corta, pantaloncini e calzettoni. Loghi AC Milan e Puma.', 60, 100, 'Maglia', 'images/milan_garahomebambino.jpg', 'Milan'),
(13, 'Milan Babykit Gara Home Neonato 2021/22', '100% poliestere. Maglia gara a manica corta, pantaloncini e calzettoni. Loghi AC Milan e Puma.', 55, 50, 'Maglia', 'images/milan_garahomeneonato.jpg', 'Milan'),
(14, 'JUVENTUS MAGLIA GARA HOME BAMBINO 2021/22\r\n', 'La maglia in jersey del Kit Home Bambino 2021/22 è un omaggio al decimo anniversario dell\'Allianz Stadium e una sintesi di tradizione e innovazione. Il modello si caratterizza per le classiche strisce bianconere e le stelle sul petto che richiamano il Cammino delle Stelle, l\'accesso alle gradinate dello stadio. Realizzata in jersey di poliestere riciclato che rispetta l’ambiente, si caratterizza per la tecnologia AEROREADY per garantire la traspirabilità e regolare l\'umidità.', 70, 100, 'Maglia', 'images/juventu_garahomebambino.jpg', 'Juventus\r\n'),
(15, 'JUVENTUS MAGLIA GARA PORTIERE 2021/22', 'Coraggio, intuizione e prestanza fisica, il portiere Juventus è una certezza in area di rigore e questo campionato veste una maglia dai colori brillanti e distintivi. Il tessuto del modello contiene Primeblue, un materiale riciclato ad alte prestazioni realizzato in parte con Parley Ocean Plastic. Si caratterizza per la tecnologia AEROREADY che assorbe l\'umidità e garantisce la massima libertà di movimento.\r\n', 90, 100, 'Maglia', 'images/juventus_magliaportiere.jpg', 'Juventus'),
(16, 'JUVENTUS MAGLIA GARA HOME AUTHENTIC 2021/22', 'Dieci anni fa veniva inaugurato l\'Allianz Stadium e oggi Juventus ne celebra la storia con la maglia Home 2021/2022. Il nuovo modello omaggia non solo i grandi campioni ma anche i tifosi e si caratterizza per le classiche strisce bianconere e le stelle sul petto ispirate al celebre Cammino delle Stelle. Il modello è realizzato con materiali riciclati ad alte prestazioni Primegreen con tecnologia traspirante HEAT.RDY, l\'innovativo sistema adidas che mantiene la pelle asciutta e protetta in ogni condizione di sforzo fisico.\r\n', 140, 100, 'Maglia', 'images/juventu_maglia2021.jpg', 'Juventus');

-- --------------------------------------------------------

--
-- Struttura della tabella `Utente`
--

CREATE TABLE `Utente` (
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nome` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cognome` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Via` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CAP` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Citta` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_registrazione` datetime DEFAULT current_timestamp(),
  `ruolo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `Utente`
--

INSERT INTO `Utente` (`username`, `password`, `Nome`, `Cognome`, `Via`, `CAP`, `Citta`, `Telefono`, `data_registrazione`, `ruolo`) VALUES
('Mario', 'ChM92VnFMD8pw', 'Mario', 'Rossi', 'Via Roma 52', '00100', 'Roma', '3333333333', '2021-05-14 07:49:16', 'user'),
('Mattia', 'ChM92VnFMD8pw', 'Mattia', 'Schipilliti', 'Via Roma 123', '89015', 'Palmi', '+393471111111', '2021-05-14 07:48:09', 'admin'),
('Prova', 'ChM92VnFMD8pw', 'Luca', 'Rossi', 'Via Roma 12', '00100', 'Roma', '3333333333', '2021-05-29 21:48:54', 'admin');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Carica`
--
ALTER TABLE `Carica`
  ADD PRIMARY KEY (`ID_Operatore`,`ID_Prodotto`),
  ADD KEY `ID_Prodotto` (`ID_Prodotto`);

--
-- Indici per le tabelle `Collo`
--
ALTER TABLE `Collo`
  ADD PRIMARY KEY (`ID_Collo`);

--
-- Indici per le tabelle `Composto`
--
ALTER TABLE `Composto`
  ADD PRIMARY KEY (`ID_Composto`),
  ADD KEY `ID_Prodotto` (`ID_Prodotto`),
  ADD KEY `username` (`username`);

--
-- Indici per le tabelle `Consegna`
--
ALTER TABLE `Consegna`
  ADD PRIMARY KEY (`ID_Consegna`),
  ADD UNIQUE KEY `ID_Corriere` (`ID_Corriere`,`ID_Collo`),
  ADD KEY `ID_Collo` (`ID_Collo`);

--
-- Indici per le tabelle `Corriere`
--
ALTER TABLE `Corriere`
  ADD PRIMARY KEY (`ID_Corriere`);

--
-- Indici per le tabelle `Disassembla`
--
ALTER TABLE `Disassembla`
  ADD PRIMARY KEY (`ID_Collo`,`ID_Operatore`),
  ADD KEY `ID_Operatore` (`ID_Operatore`);

--
-- Indici per le tabelle `Operatore`
--
ALTER TABLE `Operatore`
  ADD PRIMARY KEY (`ID_Operatore`);

--
-- Indici per le tabelle `Ordine`
--
ALTER TABLE `Ordine`
  ADD PRIMARY KEY (`ID_Ordine`),
  ADD KEY `username` (`username`);

--
-- Indici per le tabelle `Prodotto`
--
ALTER TABLE `Prodotto`
  ADD PRIMARY KEY (`ID_Prodotto`);

--
-- Indici per le tabelle `Utente`
--
ALTER TABLE `Utente`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Composto`
--
ALTER TABLE `Composto`
  MODIFY `ID_Composto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT per la tabella `Ordine`
--
ALTER TABLE `Ordine`
  MODIFY `ID_Ordine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT per la tabella `Prodotto`
--
ALTER TABLE `Prodotto`
  MODIFY `ID_Prodotto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Carica`
--
ALTER TABLE `Carica`
  ADD CONSTRAINT `Carica_ibfk_1` FOREIGN KEY (`ID_Operatore`) REFERENCES `Operatore` (`ID_Operatore`),
  ADD CONSTRAINT `Carica_ibfk_2` FOREIGN KEY (`ID_Prodotto`) REFERENCES `Prodotto` (`ID_Prodotto`);

--
-- Limiti per la tabella `Composto`
--
ALTER TABLE `Composto`
  ADD CONSTRAINT `Composto_ibfk_1` FOREIGN KEY (`ID_Prodotto`) REFERENCES `Prodotto` (`ID_Prodotto`),
  ADD CONSTRAINT `Composto_ibfk_2` FOREIGN KEY (`username`) REFERENCES `Utente` (`username`);

--
-- Limiti per la tabella `Consegna`
--
ALTER TABLE `Consegna`
  ADD CONSTRAINT `Consegna_ibfk_1` FOREIGN KEY (`ID_Corriere`) REFERENCES `Corriere` (`ID_Corriere`),
  ADD CONSTRAINT `Consegna_ibfk_2` FOREIGN KEY (`ID_Collo`) REFERENCES `Collo` (`ID_Collo`);

--
-- Limiti per la tabella `Disassembla`
--
ALTER TABLE `Disassembla`
  ADD CONSTRAINT `Disassembla_ibfk_1` FOREIGN KEY (`ID_Collo`) REFERENCES `Collo` (`ID_Collo`),
  ADD CONSTRAINT `Disassembla_ibfk_2` FOREIGN KEY (`ID_Operatore`) REFERENCES `Operatore` (`ID_Operatore`);

--
-- Limiti per la tabella `Ordine`
--
ALTER TABLE `Ordine`
  ADD CONSTRAINT `Ordine_ibfk_1` FOREIGN KEY (`username`) REFERENCES `Utente` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
