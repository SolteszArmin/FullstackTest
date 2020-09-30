-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Sze 30. 12:54
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `fullstack`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$MxkJ3wwb8e10xD5tx30t2eTmglbzBJzTrGBddyjSJaZZ2Beo6kcW2');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `wordpositions`
--

CREATE TABLE `wordpositions` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `wordId` int(11) NOT NULL,
  `position` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `wordpositions`
--

INSERT INTO `wordpositions` (`id`, `userId`, `wordId`, `position`) VALUES
(13, 1, 1, 3),
(14, 1, 2, 5),
(15, 1, 3, 0),
(16, 1, 4, 2),
(17, 1, 5, 4),
(18, 1, 6, 1),
(19, 1, 7, 5),
(20, 1, 8, 4),
(21, 1, 9, 0),
(22, 1, 10, 2),
(23, 1, 11, 3),
(24, 1, 12, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `words`
--

CREATE TABLE `words` (
  `id` int(11) NOT NULL,
  `tableNumber` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `words`
--

INSERT INTO `words` (`id`, `tableNumber`, `name`) VALUES
(1, 1, 'DOG'),
(2, 1, 'CAT'),
(3, 1, 'FROG'),
(4, 1, 'COW'),
(5, 1, 'SHEEP'),
(6, 1, 'LION'),
(7, 2, 'POUND'),
(8, 2, 'FISH'),
(9, 2, 'FOOT'),
(10, 2, 'MILK'),
(11, 2, 'SUPER'),
(12, 2, 'HEART');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `wordpositions`
--
ALTER TABLE `wordpositions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`) USING BTREE,
  ADD KEY `wordId` (`wordId`) USING BTREE;

--
-- A tábla indexei `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `wordpositions`
--
ALTER TABLE `wordpositions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT a táblához `words`
--
ALTER TABLE `words`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `wordpositions`
--
ALTER TABLE `wordpositions`
  ADD CONSTRAINT `userId-Id` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `wordId-Id` FOREIGN KEY (`wordId`) REFERENCES `words` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
