-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Jún 19. 09:20
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `esportakademia`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `bornDate` date DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `profileImg` varchar(255) DEFAULT NULL,
  `games` varchar(512) DEFAULT NULL,
  `badge` varchar(25) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `name` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `email` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `bornDate` date DEFAULT NULL,
  `type` varchar(25) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `pwd` varchar(512) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `profileImg` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `about` varchar(1024) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `links` varchar(512) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `badge` varchar(512) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `coupon` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `hobby` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `work` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `sport` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `music` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `addr` varchar(256) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `visible` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `uname`, `name`, `email`, `bornDate`, `type`, `pwd`, `profileImg`, `about`, `links`, `badge`, `coupon`, `level`, `hobby`, `work`, `sport`, `music`, `addr`, `phone`, `zip`, `city`, `visible`) VALUES
(1, 'admin', 'Ujj Norbert', 'norbert.ujj@gmail.com', '2003-03-17', 'admin', '$2y$10$axnKh8XT1CkNnd81f3w05.OLoYVB1FDYflqDYH8ZXfqdvdDOXzvQO', 'blank-user.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia.', ',,,,', 'főnök', 'NORBI', 1, 'Clash of Clans, Counter Strike Global Offensive,,,', 'programing,programing,programing,programing,programing', 'run,run,run,run,run', 'wellhelo,wellhelo,wellhelo,wellhelo,wellhelo', 'Malom utca 2/2', '+36704228587', 8200, 'Veszprém', 1),
(6, 'marci2', 'Ujj Marcell', 'marci2@marci.hu', '2005-08-27', 'user', '$2y$10$7MiKJqEBlh3JbNSpt.OJpuCQo4JUvCXqs5uE3XevvCoulKXy4FwUa', 'blank-user.png', '', 'www.pornhub.com,,,,', '-', '', 10, 'Clash of Clans,,,,', ',,,,', 'futás,,,,', ',,,,', '', '', 0, '', 0),
(9, 'marci55', 'Ujj Marcell', 'marci5@marci.hu', '2005-08-27', 'admin', '$2y$10$7MiKJqEBlh3JbNSpt.OJpuCQo4JUvCXqs5uE3XevvCoulKXy4FwUa', 'blank-user.png', 'Próba leírás', ',,,,', '-', '', 10, ',,,,', ',,,,', ',,,,', ',,,,', '', '', 0, '', 0),
(10, 'marci6', 'Ujj Marcell', 'marci6@marci.hu', '2005-08-27', 'admin', '$2y$10$7MiKJqEBlh3JbNSpt.OJpuCQo4JUvCXqs5uE3XevvCoulKXy4FwUa', 'blank-user.png', '', ',,,,', '-', 'MACI', 1, ',,,,', 'tanulas,tanulas,tanulas,tanulas,tanulas', 'acskodas,acskodas,acskodas,acskodas,acskodas', 'acskodas,acskodas,acskodas,acskodas,acskodas', 'Malom utca 2/2', '+36707228587', 8200, 'Veszprém', 0),
(11, 'marci7', 'Ujj Marcell', 'marci7@marci.hu', '2005-08-27', 'admin', '$2y$10$7MiKJqEBlh3JbNSpt.OJpuCQo4JUvCXqs5uE3XevvCoulKXy4FwUa', 'blank-user.png', '', ',,,,', '-', '', 1, ',,,,', '', '', '', NULL, NULL, NULL, NULL, 0),
(13, 'marci9', 'Ujj Marcell', 'marci9@marci.hu', '2005-08-27', 'admin', '$2y$10$7MiKJqEBlh3JbNSpt.OJpuCQo4JUvCXqs5uE3XevvCoulKXy4FwUa', 'blank-user.png', '', ',,,,', '-', '', 10, ',,,,', ',,,,', ',,,,', ',,,,', '', '', 0, '', 0),
(14, 'marci2546', 'Ujj Marcell', 'marci10@marci.hu', '2005-08-27', 'admin', '$2y$10$7MiKJqEBlh3JbNSpt.OJpuCQo4JUvCXqs5uE3XevvCoulKXy4FwUa', 'blank-user.png', '', ',,,,', '-', '', 5, ',,,,', '', '', '', NULL, NULL, NULL, NULL, 0),
(16, 'marci16', 'Ujj Marcell', 'marci16@marci.hu', '2005-08-27', 'admin', '$2y$10$7MiKJqEBlh3JbNSpt.OJpuCQo4JUvCXqs5uE3XevvCoulKXy4FwUa', 'blank-user.png', '', ',,,,', '-', '', 1, ',,,,', 'tanulas,tanulas,tanulas,tanulas,tanulas', 'acskodas,acskodas,acskodas,acskodas,acskodas', 'acskodas,acskodas,acskodas,acskodas,acskodas', NULL, NULL, NULL, NULL, 0),
(17, 'utibi', 'Ujj Tibor', 'tibi@tibi.hu', '1971-11-23', 'admin', '$2y$10$XReuLCzyOuz4YPTOpT.d5uuqR/PJ6l8S5Z6a4rNCAtqyUnFNS95pa', 'blank-user.png', '', ',,,,', '-', '', 0, ',,,,', ',,,,', ',,,,', ',,,,', '', '', 0, '', 1),
(19, 'fasza', 'Ujj Norbert', 'norberttttttttt.ujj@gmail.com', '2003-03-17', 'user', '$2y$10$cu/umgvDsHbScJ6/AdNwaOuCszKOaT0rxYt1RBpSmEhKmW6w0Jjv.', 'blank-user.png', '', ',,,,', 'Ranger', '', 1, ',,,,', ',,,,', ',,,,', ',,,,', '', '', 0, '', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `userslog`
--

CREATE TABLE `userslog` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `workType` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `uname` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `workerUser` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `userslog`
--

INSERT INTO `userslog` (`id`, `userId`, `date`, `workType`, `uname`, `workerUser`) VALUES
(12, 1, '04/03/2023 09:48:34 pm', 'adminUpdateUser', 'admin', 'marci9'),
(13, 1, '04/03/2023 09:57:38 pm', 'adminDeleteUser', 'admin', NULL),
(14, -1, '04/03/2023 10:04:55 pm', 'RegisterUser', '?', 'utibi'),
(15, 1, '04/03/2023 10:07:42 pm', 'adminLoginUser', 'admin', '1'),
(16, 1, '04/03/2023 10:08:31 pm', 'adminUpdateUser', 'admin', 'admin'),
(17, 1, '04/03/2023 10:09:13 pm', 'adminUpdateUser', 'admin', 'admin'),
(18, 1, '04/03/2023 10:35:34 pm', 'adminLoginUser', 'admin', '1'),
(19, 1, '04/03/2023 10:52:07 pm', 'adminLoginUser', 'admin', '1'),
(20, 1, '04/16/2023 09:12:30 pm', 'adminLoginUser', 'admin', '1'),
(21, 1, '06/14/2023 06:38:13 pm', 'adminLoginUser', 'admin', '1'),
(22, 1, '06/14/2023 06:57:27 pm', 'adminLoginUser', 'admin', '1');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- A tábla indexei `userslog`
--
ALTER TABLE `userslog`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT a táblához `userslog`
--
ALTER TABLE `userslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
