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
(1, 'Is useful to belong to build funeral pile.', 'is-useful-to-belong-to-build-funeral-pile', 'Apparently he realised that perfected one, exposed himself mocking me asking you force him. Stared at our venerable on gods together, with more strict and behold with out badly.', 'palm_tree.jpg', 'train.mp4', 'dorionmagnan'),
(2, 'Bent over came walking silently.', 'bent-over-came-walking-silently', 'Easily he walked at bottom of prayer admonition, when would ask you with each other voices very spot. Different games knew this dream warned seeker of concealed anxiety, friend I breathed and hesitantly and beggar.', 'surfer.jpg', 'bus.mp4', 'sridaran'),
(3, 'Oldest monks in ecstatic delight my exercises required.', 'oldest-monks-in-ecstatic-delight-my-exercises-required', 'Out a is also knew himself by it is, deep breath insensitivity against the sensation than obey your heart. Also learn from my cousin in.', 'surfer.jpg', 'bus.mp4', 'sridaran'),
(4, 'O he laughed at her gaze asked.', 'o-he-laughed-at-her-gaze-asked', 'Warrior gives such thing in him about words, source and encircled by myself the wrong manner and a.', 'surfer.jpg', 'train.mp4', 'dorionmagnan'),
(5, 'More willing to become dead.', 'more-willing-to-become-dead', 'O he himself by itself whether it laughed, most wretched things be attentively he hardly noticeable gesture. Speak harsh and just the work beautiful.', 'surfer.jpg', 'train.mp4', 'dorionmagnan'),
(6, 'Apparently he worked calmly he once heard everything.', 'apparently-he-worked-calmly-he-once-heard-everything', 'Waiting opened the creatures are different goal, have fled back hour of grass. Wanted for home and painted in memory.', 'beach.jpg', 'bus.mp4', 'musca'),
(7, 'Must decide I see the job of desires.', 'must-decide-i-see-the-job-of-desires', 'Wavered to like my eyes closed, pearls he slipped out motionless cold and lazy.', 'beach.jpg', 'train.mp4', 'musca'),
(8, 'Exchanged humorous banter with contempt when this breast.', 'exchanged-humorous-banter-with-contempt-when-this-breast', 'So will seek knowledge of life still all, us accept these pleasures of words.', 'surfer.jpg', 'bus.mp4', 'dorionmagnan'),
(9, 'Blind pride flared up paced to capture it.', 'blind-pride-flared-up-paced-to-capture-it', 'Boat and full height of in you, mumbled a sin to say. Ablutions the moon ran over in perfect everything is. Fear that lovers must follow him had disappeared.', 'palm_tree.jpg', 'bus.mp4', 'dorionmagnan'),
(10, 'Thought from greed from those to occupy them.', 'thought-from-greed-from-those-to-occupy-them', 'Long nails grew on water. Son laughed this ugly whenever he gathered around a smile. Words he posed to finally said, most foolish and while inhaling to me.', 'palm_tree.jpg', 'train.mp4', 'sridaran');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Labfive', 'syl.mofina@mail.com', 'Assippem', '2014-12-18 20:29:09'),
(2, 'Yenilmez', 'milka.humphrey@outlook.com', 'Ackhera', '2008-11-03 14:53:48'),
(3, 'Svilans', 'thoai.mccormack@live.com', 'Derovec', '2003-11-20 03:29:40'),
(4, 'Debernardo', 'joogeok.mcmann@outlook.com', 'Erinboek', '2003-09-12 16:41:05'),
(5, 'Moneypenny', 'leslie.szpilfogel@gmail.com', 'Epkoli', '2008-10-22 00:59:43');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Slug` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Name`, `Slug`) VALUES
(1, 'Musca', 'musca'),
(2, 'Sridaran', 'sridaran'),
(3, 'Dorionmagnan', 'dorionmagnan');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'igsbyhowighe', 'Arriving at length thought in each one himself, pilgrims you throw a bizarre thoughts through your son. Boat in my sleep into vapour and passion.'),
(2, 'ioanat', 'Glance at himself anymore to see it sounded new, travellers felt more like bees had stirred up. Mouth of sexual pleasure also know what, come over people had killed off all conceptions. He already of rice-wine he\'ll like only spoke eagerly.'),
(3, 'ottacrobbah', 'Wound still found friendship be satisfied from death, years simply thus alone without having passed by. Moderate living joy to mine but so clearly, been destitute so venerable father very hard my brothers. Silently his separation from drinking a fateful circle.'),
(4, 'itsurrephea', 'Here a healthy child from following day the morning, remained standing here opened his entire world, wants to bitter drink from now emptiness. One another thought a law of pain of thousands.'),
(5, 'casino', 'Pleasure and thus to you he\'ll find salvation, deaf and wretchedness he bowed touching him, other people\'s ways he allowed the herd of words.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'evangelo.picard@hotmail.com', 'evangelopicard', 'C9ad-gen', 0),
(3, 'lacy.efthim@live.com', 'lacyefthim', 'moIn/u1tkam', 1),
(4, 'natasja.skoberne@hotmail.com', 'natasjaskoberne', 'in2s/igdeQ', 0),
(5, 'shoshana.gallo@live.com', 'shoshanagallo', 'Y@ard3e', 0);

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

