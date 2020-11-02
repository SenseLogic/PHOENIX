CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Erling', 'kamlesh.kelbe@gmail.com', 'Wylolevendoc', '2005-03-13 19:43:10'),
(2, 'Rozumna', 'haroon.dorazio@hotmail.com', 'Emmyex', '2014-05-26 17:16:12'),
(3, 'Stemmler', 'alisa.dundin@yahoo.com', 'Olsaski', '2004-08-07 11:50:46'),
(4, 'Deguines', 'christine.arkesteijn@live.com', 'Iviraidi', '2012-01-07 19:25:32'),
(5, 'Mcinerney', 'shorwan.nall@mail.com', 'Omekieleg', '2011-09-25 14:18:47');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'teseldareg', 'Stood for so well my amusement in any given, looked inside and ferried across a lot. All I would join water a drunkard, put him embraced wrapped up to bear. Old age and brightly the wish you see him.'),
(2, 'irecmili', 'Ran the school of ointments of dice. Times real I envy you are smiling, distorted a daughter and waited and salvation, meditation had accompanied by myself the current listened silently. Would have rest to act upon himself.'),
(3, 'ovskoodwu', 'River sang and teachings passed on her breast. We\'ll continue squandering continue squandering continue demonstrating his eyes, now he remained silent for your heart. No softness no enlightenment has seen this understand spoke.'),
(4, 'aughtry', 'Half as never came he tilted his teachings, too spoke in circles we reach people thus deeply. Left and holy or the daytime with you, if I\'ll leave and behold here he has.'),
(5, 'uttejam', 'In nothingness stayed rigidly stayed the than his, boy remained thus awoken again in my pouch, I\'ll also in these teachings have feared.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'min.mustillo@gmail.com', 'minmustillo', 'icDha*t5', 0),
(3, 'tetsuyuki.smolin@mail.com', 'tetsuyukismolin', 'itt0@oLba', 1),
(4, 'balaji.cigay@gmail.com', 'balajicigay', 'ucklew3E-', 1),
(5, 'marcus.brennand@live.com', 'marcusbrennand', 'asYt5,e', 1);

ALTER TABLE `CONTACT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `TEXT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `USER`
  ADD PRIMARY KEY (`Id`);

