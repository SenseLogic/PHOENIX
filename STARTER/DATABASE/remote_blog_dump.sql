CREATE TABLE `ARTICLE` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Title` TEXT NULL, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Video` TEXT NULL, 
  `SectionSlug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `ARTICLE` (`Id`, `Title`, `Slug`, `Text`, `Image`, `Video`, `SectionSlug`) VALUES
(1, 'How distrustful and there.', 'how-distrustful-and-there', 'Heard his stakes that with dice, offerings to convince his way said tiredly.', 'surfer.jpg', 'train.mp4', 'kee'),
(2, 'Stared into its surface the manner laughed.', 'stared-into-its-surface-the-manner-laughed', 'Should also went the self, another loan welcome my teacher.', 'beach.jpg', 'train.mp4', 'dipierro'),
(3, 'Eternal entity which one hour when was left.', 'eternal-entity-which-one-hour-when-was-left', 'Him brightly out devoured up in it, time I\'ve already ascended many so I praise from him, truly I\'m seeing images appeared to death.', 'palm_tree.jpg', 'train.mp4', 'kee'),
(4, 'Walking swiftly smoothly moving water.', 'walking-swiftly-smoothly-moving-water', 'Perhaps reciprocate it sucked up impetuously hunting, time kissed with each one the, waiting thinking of physical forms.', 'palm_tree.jpg', 'train.mp4', 'dipierro'),
(5, 'Behold here on account of grass.', 'behold-here-on-account-of-grass', 'These you well ordered well tested sequence a saint, would he bend slightly weak at my friend. Having had noticed that aside and obedience.', 'palm_tree.jpg', 'train.mp4', 'dipierro'),
(6, 'Near to capture it.', 'near-to-capture-it', 'Haven\'t learned this so that servant prepared to friend, soul to work did you always picked them just consider. Offerings were discussing how once at every touch this birth, bowed touching the book of passion of it.', 'beach.jpg', 'bus.mp4', 'cesaratto'),
(7, 'Yes he lost to salvation.', 'yes-he-lost-to-salvation', 'Glance at you entirely sinful, speaking she wanted for knowledge which you\'ll hear more. Sounded new thirst felt as `learning\', teachings to remember something else were water into face.', 'beach.jpg', 'train.mp4', 'cesaratto'),
(8, 'Simply believed in memory.', 'simply-believed-in-memory', 'Occasionally they played with respect. How clear as defeated as possible for joy.', 'beach.jpg', 'train.mp4', 'dipierro'),
(9, 'Indignation is waiting opened the test.', 'indignation-is-waiting-opened-the-test', 'Pointed him between thoughts this area, understood him came forcefully out to devour him any longer. Over by his enlarged eyes glistening, ran and up here yellow cloak presenting his error.', 'palm_tree.jpg', 'bus.mp4', 'dipierro'),
(10, 'An eternal thirst they commanded.', 'an-eternal-thirst-they-commanded', 'River on loaned money lost jewelry and passion. Bold is why don\'t dare, body and into it already. Exalted has eaten and assumed a dead bird.', 'beach.jpg', 'train.mp4', 'dipierro');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Pell', 'halley.torrens@outlook.com', 'Anumol', '2008-04-25 19:07:08'),
(2, 'Moyce', 'juozas.skuce@outlook.com', 'Donawo', '2004-06-14 14:33:10'),
(3, 'Salb', 'bertie.cooney@gmail.com', 'Ordurkeyu', '2009-06-15 07:21:58'),
(4, 'Sztein', 'joletta.pagliarulo@mail.com', 'Ailrakstoder', '2014-10-07 07:07:45'),
(5, 'Cronk', 'joan.latella@live.com', 'Ulancas', '2006-07-24 09:48:42');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Cesaratto', 'cesaratto'),
(2, 'Dipierro', 'dipierro'),
(3, 'Kee', 'kee');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'comurneu', 'One many sweet dull was also do, language would bring happiness and under the evening\'s ablution. Thought like an ox-cart and then said.'),
(2, 'oulober', 'Taught my name is holding one\'s thoughts, sir is waiting of followers of talk, glance with respect to instruct them all. You\'re awake which roughly means that she went outside, father for two of perfection which goal.'),
(3, 'xenasobe', 'Proper it any longer a dark waters, write very old loincloth and every tavern of offerings. I\'ll continue gambling he smiled a coconut-tree. Exclaimed if this entire eternal characteristics as.'),
(4, 'telelbejo', 'Boy over every gesture every urge to death, wavered to burning woe just his suffering, simply thus alone in house there is so irrefutably.'),
(5, 'ichehe', 'Soon afterwards when she not my path, yesterday wear many who would ever harm me. Their way each one moment all being a, surrounded by drop by teachers is divine.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'claudine.vahary@live.com', 'claudinevahary', 's8en#aPssy', 0),
(3, 'narinder.wieland@gmail.com', 'narinderwieland', '3arka.balL', 1),
(4, 'evangelia.donak@gmail.com', 'evangeliadonak', 'liHc1a:', 1),
(5, 'martijn.seegobin@outlook.com', 'martijnseegobin', 'na6di:Pr', 1);

ALTER TABLE `ARTICLE`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `CONTACT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `SECTION`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `TEXT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `USER`
  ADD PRIMARY KEY (`Id`);

