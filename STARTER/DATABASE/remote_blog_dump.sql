CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Mayes', 'huub.bachmann@live.com', 'Poppyseros', '2000-02-13 07:14:02'),
(2, 'Kobeski', 'nicholas.garamvolgyi@hotmail.com', 'Idireif', '2002-01-13 00:32:32'),
(3, 'Tharby', 'kinghaut.moxham@yahoo.com', 'Uantrau', '2011-07-01 01:01:51'),
(4, 'Kortekaas', 'brenna.services@hotmail.com', 'Aurischeri', '2002-11-03 01:57:33'),
(5, 'Bugajski', 'jackelyn.strader@live.com', 'Ackburrezip', '2004-12-05 13:54:52');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'anhanketow', 'Wouldn\'t like life was once a whisper, early in holiness of eternity completely tasted bitter. Father not worthless and tired against hunger.'),
(2, 'deauwanersal', 'So said nothing left by that perfected one, else and answers and ever rising from death. As tomorrow and horror in again the shore. Deeply thinking had crouched there everything could tell.'),
(3, 'eribrieberuf', 'Rich man\'s glance was among his way, source a pain nor the injury of patience, anxiety in blissfulness did not waste words. Turned all voices when bathing it also do.'),
(4, 'vincegin', 'Deeply it all charms disappeared and tired, came walking in fine food in memory, been sitting under my present path lead in you.'),
(5, 'ermagy', 'Your breath now that mysterious was dead, salvation by annoyance and fed up paced to serve, near which the time was discovered all life.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'mustapha.peptis@outlook.com', 'mustaphapeptis', 'g:ai2Ftu', 1),
(3, 'blondell.maclean@gmail.com', 'blondellmaclean', 'me!rif2Cfik', 0),
(4, 'naji.sadler@outlook.com', 'najisadler', '=gyWur0csak', 1),
(5, 'crawford.azarshahi@outlook.com', 'crawfordazarshahi', 's8a&udYado', 0);

ALTER TABLE `CONTACT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `TEXT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `USER`
  ADD PRIMARY KEY (`Id`);

