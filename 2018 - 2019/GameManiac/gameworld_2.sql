-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 14 dec 2018 om 12:39
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameworld 2`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category`
--

CREATE TABLE `category` (
  `categoryId` int(5) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`) VALUES
(1, 'XBOX'),
(2, 'Playstation'),
(3, 'PC');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `games`
--

CREATE TABLE `games` (
  `gameId` int(5) NOT NULL,
  `gameTitle` varchar(100) NOT NULL,
  `gamePrice` decimal(7,2) NOT NULL,
  `gameDesciption` varchar(1000) NOT NULL,
  `gameImage` varchar(100) NOT NULL,
  `categoryId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `games`
--

INSERT INTO `games` (`gameId`, `gameTitle`, `gamePrice`, `gameDesciption`, `gameImage`, `categoryId`) VALUES
(1, 'GTA V', '50.00', 'Grand Theft Auto V is an open world action-adventure video game developed by Rockstar North and published by Rockstar Games. The game was released on 17 September 2013 for the PlayStation 3 and Xbox 360, on 18 November 2014 for the PlayStation 4 and Xbox One, and on 14 April 2015 for Microsoft Windows. It is the first main entry in the Grand Theft Auto series since 2008\'s Grand Theft Auto IV. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three criminals and their efforts to commit heists while under pressure from a government agency. The open world design lets players freely roam San Andreas\'s open countryside and fictional city of Los Santos, based on Los Angeles.', 'img/gtav.jpg', 1),
(2, 'F1 2016', '55.00', 'F1 2016 is a racing game which is based on the 2016 Formula One season and was developed by Codemasters Birmingham, published by Codemasters, distributed by Square Enix in North America and Ubisoft in Japan. The game is the eighth instalment in the F1 franchise developed by Codemasters.The game was released on 19 August 2016 on PlayStation 4, Xbox One and PC. It has been announced that the game will release for iOS, Android and tvOS in the coming months', 'img/f12016.jpg', 1),
(3, 'Fifa 17', '60.00', 'FIFA 17 is an association football video game in the FIFA series, released on 27 September 2016 in North America and 29 September 2016 for the rest of the world. This is the first FIFA game in the series to use the Frostbite game engine.[1] On 21 July 2016, it was announced that, after a public vote, Marco Reus would feature on the cover of the game.[2] The demo was released on 13 September 2016. The Play First Trial was released on 22 September 2016 in Microsoft Windows\'s Origin Access and Xbox One\'s EA Access. The game has received positive reviews upon release, with gameplay, the Frostbite engine, sound and presentation all criticality acclaimed albeit The Journey receiving a polarized reception. FIFA 17 has been the fastest selling edition of the franchise.', 'img/fifa17.jpg', 2),
(4, 'Call of Duty: Infinite Warfare - Legacy Edition', '69.00', 'Call of Duty: Infinite Warfare is a first-person shooter video game developed by Infinity Ward and published by Activision. It is the thirteenth primary installment in the Call of Duty series and was released for Microsoft Windows, PlayStation 4, and Xbox One on November 4, 2016.\nDevelopment of Infinite Warfare began during 2014. It is the first title by Infinity Ward under the new three-year development cycle for the Call of Duty series. The game\'s campaign is centered around a battle for the Solar System, which the Settlement Defense Front (SDF), a hostile force who are the main antagonists, are attempting to take over. The player takes control of Captain Nick Reyes of the Special Combat Air Recon (SCAR). They have their own transforming fighter, named \"Jackal\", that they can customize as well as a central hub world named Retribution.', 'img/CODIF.jpg', 2),
(5, 'Farming Simulator 17', '30.00', 'Farming Simulator is a farming simulation video game series developed by Giants Software. The locations are based on American and European environments. Players are able to farm, breed livestock, grow crops and sell all assets created from farming. The game has sold over four million copies.', 'img/fs17.jpg', 3),
(6, 'Planet Coaster', '30.00', 'Planet Coaster is a construction and management simulation video game developed and published by Frontier Developments for Microsoft Windows, which released in November 2016. The game is a spiritual successor to the RollerCoaster Tycoon series, with the third game in the series previously being developed by Frontier.\r\nPlanet Coaster is a construction and management simulation video game. Similar to its spiritual predecessor, the game allows players to build different theme park rides and roller-coasters. These player-created attractions can be shared through a mechanic called \"global village\".[1]\r\nFirst unveiled at EGX 2016, the game also features a dedicated mode called the \"crash mode\" which allows players to construct incomplete coasters and let them crash into the park\'s visitors.[2]\r\nSimilar to the The Sims\' Simlish language, guests in the park speak their own original language, \"Planco\".[3][4]', 'img/planetcoaster.jpg', 3),
(7, 'GTA V', '50.00', 'Grand Theft Auto V is an open world action-adventure video game developed by Rockstar North and published by Rockstar Games. The game was released on 17 September 2013 for the PlayStation 3 and Xbox 360, on 18 November 2014 for the PlayStation 4 and Xbox One, and on 14 April 2015 for Microsoft Windows. It is the first main entry in the Grand Theft Auto series since 2008\'s Grand Theft Auto IV. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three criminals and their efforts to commit heists while under pressure from a government agency. The open world design lets players freely roam San Andreas\'s open countryside and fictional city of Los Santos, based on Los Angeles.', 'img/gtavPS4.jpg', 2),
(8, 'GTA V', '50.00', 'Grand Theft Auto V is an open world action-adventure video game developed by Rockstar North and published by Rockstar Games. The game was released on 17 September 2013 for the PlayStation 3 and Xbox 360, on 18 November 2014 for the PlayStation 4 and Xbox One, and on 14 April 2015 for Microsoft Windows. It is the first main entry in the Grand Theft Auto series since 2008\'s Grand Theft Auto IV. Set within the fictional state of San Andreas, based on Southern California, the single-player story follows three criminals and their efforts to commit heists while under pressure from a government agency. The open world design lets players freely roam San Andreas\'s open countryside and fictional city of Los Santos, based on Los Angeles.', 'img/gtavPC.jpg', 3),
(9, 'F1 2016', '55.00', 'F1 2016 is a racing game which is based on the 2016 Formula One season and was developed by Codemasters Birmingham, published by Codemasters, distributed by Square Enix in North America and Ubisoft in Japan. The game is the eighth instalment in the F1 franchise developed by Codemasters.The game was released on 19 August 2016 on PlayStation 4, Xbox One and PC. It has been announced that the game will release for iOS, Android and tvOS in the coming months', 'img/f12016PS4.jpg', 2),
(10, 'f1 2016', '55.00', 'F1 2016 is a racing game which is based on the 2016 Formula One season and was developed by Codemasters Birmingham, published by Codemasters, distributed by Square Enix in North America and Ubisoft in Japan. The game is the eighth instalment in the F1 franchise developed by Codemasters.The game was released on 19 August 2016 on PlayStation 4, Xbox One and PC. It has been announced that the game will release for iOS, Android and tvOS in the coming months', 'img/f12016PC.jpg', 3),
(11, 'Call of Duty: Infinite Warfare - Legacy Edition', '69.00', 'Call of Duty: Infinite Warfare is a first-person shooter video game developed by Infinity Ward and published by Activision. It is the thirteenth primary installment in the Call of Duty series and was released for Microsoft Windows, PlayStation 4, and Xbox One on November 4, 2016. Development of Infinite Warfare began during 2014. It is the first title by Infinity Ward under the new three-year development cycle for the Call of Duty series. The game\'s campaign is centered around a battle for the Solar System, which the Settlement Defense Front (SDF), a hostile force who are the main antagonists, are attempting to take over. The player takes control of Captain Nick Reyes of the Special Combat Air Recon (SCAR). They have their own transforming fighter, named \"Jackal\", that they can customize as well as a central hub world named Retribution.', 'img/CODIFXBOXjpg.jpg', 1),
(12, 'Call of Duty: Infinite Warfare - Legacy Edition', '69.00', 'Call of Duty: Infinite Warfare is a first-person shooter video game developed by Infinity Ward and published by Activision. It is the thirteenth primary installment in the Call of Duty series and was released for Microsoft Windows, PlayStation 4, and Xbox One on November 4, 2016. Development of Infinite Warfare began during 2014. It is the first title by Infinity Ward under the new three-year development cycle for the Call of Duty series. The game\'s campaign is centered around a battle for the Solar System, which the Settlement Defense Front (SDF), a hostile force who are the main antagonists, are attempting to take over. The player takes control of Captain Nick Reyes of the Special Combat Air Recon (SCAR). They have their own transforming fighter, named \"Jackal\", that they can customize as well as a central hub world named Retribution.', 'img/CODIFPC.jpg', 3),
(13, 'Fifa 17', '60.00', 'FIFA 17 is an association football video game in the FIFA series, released on 27 September 2016 in North America and 29 September 2016 for the rest of the world. This is the first FIFA game in the series to use the Frostbite game engine.[1] On 21 July 2016, it was announced that, after a public vote, Marco Reus would feature on the cover of the game.[2] The demo was released on 13 September 2016. The Play First Trial was released on 22 September 2016 in Microsoft Windows\'s Origin Access and Xbox One\'s EA Access. The game has received positive reviews upon release, with gameplay, the Frostbite engine, sound and presentation all criticality acclaimed albeit The Journey receiving a polarized reception. FIFA 17 has been the fastest selling edition of the franchise.', 'img/fifa17XBOX.jpg', 1),
(14, 'Fifa 17', '60.00', 'FIFA 17 is an association football video game in the FIFA series, released on 27 September 2016 in North America and 29 September 2016 for the rest of the world. This is the first FIFA game in the series to use the Frostbite game engine.[1] On 21 July 2016, it was announced that, after a public vote, Marco Reus would feature on the cover of the game.[2] The demo was released on 13 September 2016. The Play First Trial was released on 22 September 2016 in Microsoft Windows\'s Origin Access and Xbox One\'s EA Access. The game has received positive reviews upon release, with gameplay, the Frostbite engine, sound and presentation all criticality acclaimed albeit The Journey receiving a polarized reception. FIFA 17 has been the fastest selling edition of the franchise.', 'img/fifa17pc.jpg', 3),
(15, 'Farming Simulator 17', '43.00', 'Farming Simulator is a farming simulation video game series developed by Giants Software. The locations are based on American and European environments. Players are able to farm, breed livestock, grow crops and sell all assets created from farming. The game has sold over four million copies.', 'img/fs17XBOX.jpg', 1),
(16, 'Farming Simulator 17', '43.00', 'Farming Simulator is a farming simulation video game series developed by Giants Software. The locations are based on American and European environments. Players are able to farm, breed livestock, grow crops and sell all assets created from farming. The game has sold over four million copies.', 'img/fs17PS4.jpg', 2),
(17, 'Dying Light: The Following - Enhanced Edition', '40.99', 'Dying Light: The Following is an expansion pack for the open-world first-person survival horror video game Dying Light. The game was developed by Techland, published by Warner Bros. Interactive Entertainment, and released for Microsoft Windows, Linux, PlayStation 4, and Xbox One on February 9, 2016. The expansion introduces new characters, a new story campaign, new weapons, and new gameplay mechanics. Dying Light: The Following – Enhanced Edition includes this expansion, the original Dying Light game, and all of the downloadable content released for the original game.', 'img/dlXBOX.jpg', 1),
(18, 'Dying Light: The Following - Enhanced Edition', '40.99', 'Dying Light: The Following is an expansion pack for the open-world first-person survival horror video game Dying Light. The game was developed by Techland, published by Warner Bros. Interactive Entertainment, and released for Microsoft Windows, Linux, PlayStation 4, and Xbox One on February 9, 2016. The expansion introduces new characters, a new story campaign, new weapons, and new gameplay mechanics. Dying Light: The Following – Enhanced Edition includes this expansion, the original Dying Light game, and all of the downloadable content released for the original game.', 'img/dlPS4.jpg', 2),
(19, 'Dying Light: The Following - Enhanced Edition', '40.99', 'Dying Light: The Following is an expansion pack for the open-world first-person survival horror video game Dying Light. The game was developed by Techland, published by Warner Bros. Interactive Entertainment, and released for Microsoft Windows, Linux, PlayStation 4, and Xbox One on February 9, 2016. The expansion introduces new characters, a new story campaign, new weapons, and new gameplay mechanics. Dying Light: The Following – Enhanced Edition includes this expansion, the original Dying Light game, and all of the downloadable content released for the original game.', 'img/dlPC.jpg', 3),
(20, 'Watch Dogs 2', '57.99', 'Watch Dogs 2 (stylized as WATCH_DOGS2) is an open world action-adventure video game developed by Ubisoft Montreal and published by Ubisoft. The sequel to 2014\'s Watch Dogs, it was released worldwide for PlayStation 4, Xbox One, and Microsoft Windows in November 2016.', 'img/wdXBOX.jpg', 1),
(21, 'Watch Dogs', '57.99', 'Watch Dogs 2 (stylized as WATCH_DOGS2) is an open world action-adventure video game developed by Ubisoft Montreal and published by Ubisoft. The sequel to 2014\'s Watch Dogs, it was released worldwide for PlayStation 4, Xbox One, and Microsoft Windows in November 2016.', 'img/wdPS4.jpg', 2),
(22, 'Titanfall 2', '40.00', 'Titanfall 2 is a first-person shooter video game developed by Respawn Entertainment and published by Electronic Arts. The sequel to Titanfall (2014), the game was released in October 2016 for Microsoft Windows, PlayStation 4, and Xbox One. The plot focuses on a infantry soldier named Jack Cooper, who aspires to be a pilot of a Titan, which are large mechas used for war.\r\nTitanfall 2 was released to positive reviews. Praise was given to the game\'s addition to a deeper single-player campaign, multiplayer and gameplay, with many critics agreeing it to be a large improvement over its predecessor.', 'img/titanfall2XBOX.jpg', 1),
(23, 'Titanfall 2', '40.00', 'Titanfall 2 is a first-person shooter video game developed by Respawn Entertainment and published by Electronic Arts. The sequel to Titanfall (2014), the game was released in October 2016 for Microsoft Windows, PlayStation 4, and Xbox One. The plot focuses on a infantry soldier named Jack Cooper, who aspires to be a pilot of a Titan, which are large mechas used for war.\r\nTitanfall 2 was released to positive reviews. Praise was given to the game\'s addition to a deeper single-player campaign, multiplayer and gameplay, with many critics agreeing it to be a large improvement over its predecessor.', 'img/titanfall2PS4.jpg', 2),
(24, 'Titanfall 2', '40.00', 'Titanfall 2 is a first-person shooter video game developed by Respawn Entertainment and published by Electronic Arts. The sequel to Titanfall (2014), the game was released in October 2016 for Microsoft Windows, PlayStation 4, and Xbox One. The plot focuses on a infantry soldier named Jack Cooper, who aspires to be a pilot of a Titan, which are large mechas used for war.\r\nTitanfall 2 was released to positive reviews. Praise was given to the game\'s addition to a deeper single-player campaign, multiplayer and gameplay, with many critics agreeing it to be a large improvement over its predecessor.', 'img/titanfall2PC.jpg', 3),
(25, 'Forza horizon 3 Xbox one and PC', '60.00', 'Forza Horizon 3 is an open world racing video game developed by Playground Games and published by Microsoft Studios for Xbox One and Microsoft Windows. The game features cross-platform play between the two platforms. The game was released on 23 September 2016 for \"Ultimate Edition\" players, and 27 September 2016 for standard and \"Deluxe Edition\" players. It is the third Forza Horizon and the ninth instalment in the Forza series. As with previous Horizon games, Turn 10 Studios assisted Playground Games in the game\'s development.', 'img/fh3.jpg', 1),
(26, 'Forza horizon 3 Xbox one and PC', '60.00', 'Forza Horizon 3 is an open world racing video game developed by Playground Games and published by Microsoft Studios for Xbox One and Microsoft Windows. The game features cross-platform play between the two platforms. The game was released on 23 September 2016 for \"Ultimate Edition\" players, and 27 September 2016 for standard and \"Deluxe Edition\" players. It is the third Forza Horizon and the ninth instalment in the Forza series. As with previous Horizon games, Turn 10 Studios assisted Playground Games in the game\'s development.', 'img/fh3.jpg', 3),
(27, 'Battlefield 1', '52.00', 'Battlefield 1 is een first-person shooter ontwikkeld door EA DICE. Het spel werd uitgegeven door Electronic Arts en kwam op 21 oktober 2016 uit voor PlayStation 4, Windows en Xbox One.[1] Het spel speelt zich af in de Eerste Wereldoorlog. De eerst uitgegeven trailer gebruikte een door de glitch mob aangepast nummer van The White Stripes, namelijk Seven Nation Army. [2] De ontvangst van de bekendmaking van het spel was zeer goed. De onthullingstrailer had dan ook het meeste aantal likes op een computerspeltrailer ooit, namelijk 2 miljoen.', 'img/bfPS.jpg', 3),
(28, 'Battlefield 1', '52.00', 'Battlefield 1 is een first-person shooter ontwikkeld door EA DICE. Het spel werd uitgegeven door Electronic Arts en kwam op 21 oktober 2016 uit voor PlayStation 4, Windows en Xbox One.[1] Het spel speelt zich af in de Eerste Wereldoorlog. De eerst uitgegeven trailer gebruikte een door de glitch mob aangepast nummer van The White Stripes, namelijk Seven Nation Army. [2] De ontvangst van de bekendmaking van het spel was zeer goed. De onthullingstrailer had dan ook het meeste aantal likes op een computerspeltrailer ooit, namelijk 2 miljoen.', 'img/bfPS4.jpg', 2),
(29, 'Battlefield 1', '52.00', 'Battlefield 1 is een first-person shooter ontwikkeld door EA DICE. Het spel werd uitgegeven door Electronic Arts en kwam op 21 oktober 2016 uit voor PlayStation 4, Windows en Xbox One.[1] Het spel speelt zich af in de Eerste Wereldoorlog. De eerst uitgegeven trailer gebruikte een door de glitch mob aangepast nummer van The White Stripes, namelijk Seven Nation Army. [2] De ontvangst van de bekendmaking van het spel was zeer goed. De onthullingstrailer had dan ook het meeste aantal likes op een computerspeltrailer ooit, namelijk 2 miljoen.', 'img/bfXBOX.jpg', 1),
(30, 'Uncharted 4: A Thief\'s End', '30.00', 'Uncharted 4: A Thief\'s End is een action-adventure- en third-person shooter-spel, het laatste deel ontwikkeld door Naughty Dog. Het is het vierde spel in de Uncharted-serie en op 10 mei 2016 door Sony Computer Entertainment uitgebracht.[1] Het spel is uitsluitend voor PlayStation 4 beschikbaar.\r\nUncharted 4 is het laatste deel met Nathan Drake als protagonist.[2]', 'img/ucPS4.jpg', 2),
(31, 'Mafia 3', '37.99', 'Mafia III is een third-person shooter ontwikkeld door Hangar 13. Het spel werd op 7 oktober 2016 uitgebracht door 2K Games voor de PlayStation 4, Windows en Xbox One.[1] Het spel is het vervolg op Mafia II, ontwikkeld door 2K Czech.', 'img/mfXBOX.jpg', 1),
(32, 'Mafia 3', '41.50', 'Mafia III is een third-person shooter ontwikkeld door Hangar 13. Het spel werd op 7 oktober 2016 uitgebracht door 2K Games voor de PlayStation 4, Windows en Xbox One.[1] Het spel is het vervolg op Mafia II, ontwikkeld door 2K Czech.', 'img/mfPS4.jpg', 2),
(33, 'Mafia 3', '27.99', 'Mafia III is een third-person shooter ontwikkeld door Hangar 13. Het spel werd op 7 oktober 2016 uitgebracht door 2K Games voor de PlayStation 4, Windows en Xbox One.[1] Het spel is het vervolg op Mafia II, ontwikkeld door 2K Czech.', 'img/mfPC.jpg', 3),
(34, 'Assassins Creed - The Ezio Collection', '44.99', '\r\nAssassin\'s Creed® The Ezio Collection contains three games:\r\n\r\n• Assassin\'s Creed II\r\n• Assassin\'s Creed Brotherhood\r\n• Assassin\'s Creed Revelations\r\n\r\nMake history as the legendary Assassin, Ezio Auditore da Firenze in Assassin\'s Creed® The Ezio Collection. This includes the critically acclaimed single-player campaigns Assassin\'s Creed® II Assassin\'s Creed® Brotherhood and Assassin\'s Creed® Revelations, and was designed for Xbox One and PlayStation®4.', 'img/acXBOX.jpg', 1),
(35, 'Assassins Creed - The Ezio Collection', '44.99', '\r\nAssassin\'s Creed® The Ezio Collection contains three games:\r\n\r\n• Assassin\'s Creed II\r\n• Assassin\'s Creed Brotherhood\r\n• Assassin\'s Creed Revelations\r\n\r\nMake history as the legendary Assassin, Ezio Auditore da Firenze in Assassin\'s Creed® The Ezio Collection. This includes the critically acclaimed single-player campaigns Assassin\'s Creed® II Assassin\'s Creed® Brotherhood and Assassin\'s Creed® Revelations, and was designed for Xbox One and PlayStation®4.', 'img/acPS4.jpg', 2),
(36, 'Steep', '57.99', 'Steep is an upcoming open world extreme sports video game developed by Ubisoft Annecy and published by Ubisoft for Microsoft Windows, PlayStation 4 and Xbox One. The game places a great emphasis on online multiplayer, focusing on competing in various winter sporting challenges with other players online.', 'img/steepXBOX.jpg', 1),
(37, 'Steep', '57.99', 'Steep is an upcoming open world extreme sports video game developed by Ubisoft Annecy and published by Ubisoft for Microsoft Windows, PlayStation 4 and Xbox One. The game places a great emphasis on online multiplayer, focusing on competing in various winter sporting challenges with other players online.', 'img/steepPS4.jpg', 2),
(38, 'Red Dead Redemption 2', '59.99', 'Red Dead Redemption 2 is developed by Rockstar Studios.[3]\r\nRockstar Games announced the game on October 18, 2016, with the first trailer being released on October 20.[4][5] In the two days prior, the company had used various social media platforms as well as their own website to release two teaser images in the color and theme of Red Dead Redemption.[6][7][8][9] The teaser images led to considerable attention and raised the stock price of its distributor Take-Two Interactive nearly six percent.[10][11] On the day of its announcement for the PlayStation 4 and Xbox One, some fans started petitioning Rockstar for the game to be made available on Microsoft Windows as well.[12] Per an exclusivity agreement with Sony Interactive Entertainment, certain online game content will be timed exclusives for the PlayStation 4.[13]', 'img/rdrXBOX.jpg', 1),
(39, 'Red Dead Redemption 2', '59.99', 'Red Dead Redemption 2 is developed by Rockstar Studios.[3]\r\nRockstar Games announced the game on October 18, 2016, with the first trailer being released on October 20.[4][5] In the two days prior, the company had used various social media platforms as well as their own website to release two teaser images in the color and theme of Red Dead Redemption.[6][7][8][9] The teaser images led to considerable attention and raised the stock price of its distributor Take-Two Interactive nearly six percent.[10][11] On the day of its announcement for the PlayStation 4 and Xbox One, some fans started petitioning Rockstar for the game to be made available on Microsoft Windows as well.[12] Per an exclusivity agreement with Sony Interactive Entertainment, certain online game content will be timed exclusives for the PlayStation 4.[13]', 'img/rdrPS4.jpg', 2),
(40, 'Ghost Recon: Wildlands', '59.99', 'Tom Clancy\'s Ghost Recon Wildlands is an upcoming open world tactical shooter video game in development by Ubisoft Paris. It will be the tenth installment in the Tom Clancy\'s Ghost Recon franchise and will be the first Ghost Recon game to feature an open world environment. The game will move away from the futuristic setting introduced in Tom Clancy\'s Ghost Recon Advanced Warfighter and will instead feature a setting similar to the original Tom Clancy\'s Ghost Recon. Ubisoft has described it as one of the biggest open world games that they have ever published, with the game world including a wide variety of environments such as mountains, forests, deserts and salt flats. The game will be playable on Microsoft Windows, PlayStation 4 and Xbox One. It will come out on March 7, 2017.', 'img/grwXBOX.jpg', 1),
(41, 'Ghost Recon: Wildlands', '59.99', 'Tom Clancy\'s Ghost Recon Wildlands is an upcoming open world tactical shooter video game in development by Ubisoft Paris. It will be the tenth installment in the Tom Clancy\'s Ghost Recon franchise and will be the first Ghost Recon game to feature an open world environment. The game will move away from the futuristic setting introduced in Tom Clancy\'s Ghost Recon Advanced Warfighter and will instead feature a setting similar to the original Tom Clancy\'s Ghost Recon. Ubisoft has described it as one of the biggest open world games that they have ever published, with the game world including a wide variety of environments such as mountains, forests, deserts and salt flats. The game will be playable on Microsoft Windows, PlayStation 4 and Xbox One. It will come out on March 7, 2017.', 'img/grwPS4.jpg', 2),
(42, 'Crash Bandicoot', '59.99', 'Crash Bandicoot is a video game franchise of platform video games. The series, originally exclusive to the Sony PlayStation, was created by Andy Gavin and Jason Rubin during their tenure at Naughty Dog for Sony Computer Entertainment. Since its conception at Naughty Dog, the series has appeared on multiple platforms and gone through various developers and spans numerous genres. The series has a total of eighteen games and shipped over 50 million copies worldwide.', 'img/crashbPS4.jpg', 2);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexen voor tabel `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `games`
--
ALTER TABLE `games`
  MODIFY `gameId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
