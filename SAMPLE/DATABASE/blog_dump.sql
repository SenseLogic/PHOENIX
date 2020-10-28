CREATE TABLE `ARTICLE` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `SectionId` INT UNSIGNED NULL, 
  `UserId` INT UNSIGNED NULL, 
  `Title` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` VARCHAR( 45 ) NULL, 
  `Date` DATE NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `ARTICLE` (`Id`, `SectionId`, `UserId`, `Title`, `Text`, `Image`, `Date`) VALUES
(1, 5, 4, 'Pilgrims you shackle and beautifully.', 'Exchanged some time would then also become great respect, I\'ll think if there you take it. Straightened up in anything yesterday of wealth the submission, then for much longer to act of robbers. Long nails grew up here for nothing.', 'picture_16.jpg', '2008-06-08'),
(2, 2, 5, 'Body and clear his refuge to belong to.', 'They\'ve become completely concentrated soul die his mourning, daily he pondered deeply it sounded new. Past I shall know love him you well, look which wondrously reminded him foamed at once.', 'picture_13.jpg', '2013-12-04'),
(3, 2, 5, 'Name neither felt deep contemplation spoke to.', 'Lost but in himself from on chance not happened, turned up a knowledgeable one has this hour. Curious more I wouldn\'t we who seek knowledge.', 'picture_5.jpg', '2012-05-01'),
(4, 2, 1, 'Bowed deeply thinking is better things in ear.', 'You seen this terrible world of among people, majority of merciless self-denial practised meditation through your heart. Nothing he learned my way with him, man and offered him except to death. Knowing patient is our boat the courtesan\'s greeting.', 'picture_13.jpg', '2014-12-26'),
(5, 2, 5, 'Then so I understand spoke.', 'This pointless was annoyed and still missing in grief. Stood at several of contemplation washing his way, death where from wisdom always good as ever.', 'picture_3.jpg', '2013-07-03'),
(6, 3, 3, 'Read out over freezing shoulders his stakes.', 'Fine food for it could it says. Laughed it voices joined it completely filled with, himself was chewing a passionately painful yearning got lost. Opened the light what do with hunger.', 'picture_10.jpg', '2001-05-27'),
(7, 1, 4, 'Always he become sacred offerings.', 'So my very smart face was holy, body inside and necessary came when has got here. Good just too spoke slowly among carters and obedience.', 'picture_15.jpg', '2014-09-18'),
(8, 3, 2, 'Smiled quietly dangling hand from death.', 'Tears as defeated as any work beautiful. Ah most as old men among the, out from an old tired his own.', 'picture_5.jpg', '2014-03-12'),
(9, 1, 2, 'Her cheek turned black ones.', 'I used to live with awe the beat him, been presented so now from now so much. Cared little pleasures and right was it.', 'picture_19.jpg', '2003-03-18'),
(10, 4, 5, 'Were like and sorrow.', 'Majority of pain at yourself though she asked himself, you\'ve learned what pain filled himself mocking voice, sleep with very good sir and lots of offerings. Enjoyed his worldly and ate neither perished nor thinking, willingness my place to salvation as `learning\'.', 'picture_4.jpg', '2007-10-09'),
(11, 4, 1, 'Full of mere words.', 'Asked himself despised at me honourable one, for possessions and ferried travellers of patience. That\'s their holy to dress at once. Teachings but so venerable among hundreds of a, among all there gray in perfumed waters.', 'picture_3.jpg', '2002-01-07'),
(12, 4, 3, 'Asked many days by throwing out badly.', 'Near thus open his childhood friend of monks, ablutions nor thinking is holding your hospitality my heart. Conducted him my being loved most shameful life, thing both followed by was time she him.', 'picture_11.jpg', '2014-02-04'),
(13, 5, 1, 'Death is holding your birth magic spells.', 'Touched and looked up I knew it, few four or foolish or worth keeping he exclaimed. Enjoyed his possession and call of wise, lust had received as shining his chest. Body and spoke disembarking on so beautiful things.', 'picture_11.jpg', '2000-02-10'),
(14, 3, 5, 'Eyes today because you insist upon.', 'Mute who scorns diversity who breathed of others. Waiting thinking his breath was sleeping answered, even now a few he awaited the father, did his perfumed waters and loaning money for me.', 'picture_11.jpg', '2009-09-10'),
(15, 4, 1, 'Watched them my heart.', 'Haven\'t learned here on an accusation in good journey, broke loose embraced wrapped up felt unable to breathe. Afterwards when has entered your birth magic words exclaimed, times had perceived it turned back after another person.', 'picture_10.jpg', '2001-01-11');

CREATE TABLE `COMMENT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `ArticleId` INT UNSIGNED NULL, 
  `UserId` INT UNSIGNED NULL, 
  `Text` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `COMMENT` (`Id`, `ArticleId`, `UserId`, `Text`, `DateTime`) VALUES
(1, 1, 2, 'Ran along your son\'s upbringing. When would feel life told him.', '2010-06-23 00:44:10'),
(2, 6, 2, 'Greeted her and know this, wanted to inform his impending death, latter had drowned and find his bed. When would believe that\'s everything.', '2015-09-04 23:54:43'),
(3, 13, 5, 'Ferryman ate could also still found friendship, who has a high trees and offerings.', '2006-10-18 20:10:53'),
(4, 4, 3, 'Young woman\'s smiling and fresh as true. Shouldn\'t I don\'t force him, travellers of sympathy for twenty-eight days.', '2010-10-28 16:56:55'),
(5, 3, 5, 'Friend children are wise she admitted, venerable chiefly his nor was sleeping.', '2005-07-19 02:37:07'),
(6, 12, 3, 'Without seeing monks saw you with mockery, most hurriedly walking along pondered.', '2012-09-12 15:41:27'),
(7, 2, 2, 'Don\'t forget him had laughed, let\'s not comprehend any given me on. River never upset by me and, can go a day exalted one\'s body.', '2013-08-12 08:08:14'),
(8, 13, 4, 'Much money wasted time from an. Son to opinions in agreement with, or devote himself of that. Lovely couldn\'t recognise the non-self.', '2000-03-12 05:08:48'),
(9, 10, 4, 'Black snake fled to avoid evil. Non-eternal things and becomes void.', '2014-04-14 08:22:16'),
(10, 13, 1, 'You\'re exclaimed indignantly but not necessary, ah you still awaiting him leaving. Reached and walked at head so irrefutably.', '2014-03-03 03:47:39'),
(11, 10, 3, 'Nevertheless renewed themselves intended to experience. Boat recognised though without thinking.', '2005-07-02 09:19:07'),
(12, 9, 1, 'Deeply and villages to accept his path. Had gone to identify the room.', '2011-04-22 11:26:22'),
(13, 3, 4, 'False god more nor self-castigation, many things they received in your thoughts, close to divide it laughed. You\'re stronger with one wants.', '2006-08-15 08:23:49'),
(14, 8, 3, 'Sir from me since his hands, monk as bathing performing the courtesan\'s greeting.', '2013-01-16 09:25:52'),
(15, 10, 2, 'Shimmered his learning this can understand, has lived the mother\'s house from horror. Lacked all pretended to pretty.', '2014-12-26 11:35:42'),
(16, 3, 4, 'Daily in again you\'re wearing fine clothes, leaned against them should incessantly hit. Fully become tired felt thirst tiredness.', '2000-01-13 06:00:29'),
(17, 1, 3, 'You have liked this world, read a game the uncertain. Would die ten thousand times the many, half unconsciousness a desire was a.', '2015-03-04 05:57:14'),
(18, 14, 1, 'Quietly moving on which so rich man. Tomorrow morning noon he saw, nothing and often I wish without food. Read them after another time.', '2004-08-15 18:05:39'),
(19, 4, 2, 'Stone was shimmering in love, years compare this to himself.', '2009-10-16 22:15:30'),
(20, 13, 2, 'Where did his stakes and tenacity, full the searching so she him.', '2015-06-16 12:22:06'),
(21, 8, 5, 'Speak harsh and clear to burn, children already all one suffering, sleep again now become gray. Evening with great thinkers do this.', '2014-11-04 11:56:26'),
(22, 4, 2, 'Whom is small near it. Weren\'t you as one always everything. We\'ll continue demonstrating his blissfulness of worship.', '2011-02-25 16:41:05'),
(23, 12, 4, 'Where stayed behind from myself from me, worry said this wearing the submission. Over all alone I think is present, entire world strangers and ultimate part.', '2013-05-28 17:52:36'),
(24, 6, 1, 'Son of wrinkles of dreams flowed on, curious more and sparkling the one. Which wondrously reminded him still awaiting him.', '2004-03-24 19:31:16'),
(25, 1, 1, 'Glance with love are submissive all this. Friend was among these verses. Old he bent over as true.', '2000-09-22 02:11:07'),
(26, 2, 2, 'Told to awake joyful source in heat, could demonstrate his farewell to. Other travellers and finally drown.', '2006-05-25 01:06:30'),
(27, 3, 3, 'I\'ll learn in that teachings, offerings for gods together with. Love having honestly told him, come back to giving me.', '2009-11-04 17:51:05'),
(28, 4, 4, 'Wouldn\'t like my cousin in, sir am a longing to serve. Mouth twitched with their fearfulness.', '2013-08-20 20:20:54'),
(29, 11, 5, 'And wishes of people can\'t, saw rising from everywhere at him. Questions but smiled quietly as I do.', '2006-04-02 11:01:16'),
(30, 13, 4, 'Smart as and it tasted the moon. Were still had prepared rice there.', '2007-01-12 14:00:37');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Stclairholmes', 'leodora.wolford@outlook.com', 'Araferaucoq', '2004-01-19 06:26:31'),
(2, 'Kemp', 'annmarie.loucel@live.com', 'Essandy', '2000-12-14 23:57:27'),
(3, 'Zumhagen', 'joellen.burkhardt@hotmail.com', 'Mufoerku', '2005-07-13 07:30:48'),
(4, 'Dilen', 'reva.tauscher@hotmail.com', 'Ommockotke', '2011-02-13 03:54:55'),
(5, 'Witkowski', 'farooq.boroski@yahoo.com', 'Kylavuonerri', '2000-09-05 21:34:29');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Number` INT UNSIGNED NULL, 
  `Name` VARCHAR( 45 ) NULL, 
  `Text` TEXT NULL, 
  `Image` VARCHAR( 45 ) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Number`, `Name`, `Text`, `Image`) VALUES
(1, 586, 'Sports', 'Out this ferry at once a deception, has taught you wouldn\'t want back after year. Shall please you subject to spend many secrets.', 'picture_12.jpg'),
(2, 644, 'Lifestyle', 'World that of worry said in their worries, does really feel life still any further. Heard shuddering with painful confession into your river.', 'picture_2.jpg'),
(3, 650, 'Business', 'Passed to bitter despair until no time, put into it intoxicated him under their goal, salvation by annoyance and walked along my father. High stakes that full height of ill-humour of wealth.', 'picture_4.jpg'),
(4, 180, 'Technology', 'Curious more and turned back at him. Hours looked around they received no other hand, young face of them without reason he dreamed this. You\'re stronger than could win him calculations.', 'picture_1.jpg'),
(5, 71, 'History', 'Leapt in every aspect of you he got lost, moderate living according to suffer a precise rule, know my back up again start his life. Remained standing where snakes often I\'ll see all secrets.', 'picture_13.jpg');

CREATE TABLE `SUBSCRIBER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` VARCHAR( 45 ) NULL, 
  `IpAddress` TEXT NULL, 
  `Browser` TEXT NULL, 
  `Latitude` DOUBLE NULL, 
  `Longitude` DOUBLE NULL, 
  `CountryCode` VARCHAR( 2 ) NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SUBSCRIBER` (`Id`, `Email`, `IpAddress`, `Browser`, `Latitude`, `Longitude`, `CountryCode`, `DateTime`) VALUES
(1, 'ardys.amlani@outlook.com', '62 Hawkes Avenue', 'Adjaneso', 61.81, 69.88, 'LS', '2009-06-08 02:58:14'),
(2, 'diana.witkowski@outlook.com', '23 Schwab Court', 'Asseonheiste', 83.46, 88.02, 'JO', '2009-08-24 19:17:15'),
(3, 'jaan.pimentel@live.com', '11 Freno Park', 'Labfivega', 50.64, 92.39, 'TF', '2010-08-01 18:18:48'),
(4, 'etheline.mcdevitt@mail.com', '84 Heile Court', 'Inczip', 86.59, 52.55, 'MD', '2000-06-06 02:01:20'),
(5, 'rori.kibler@live.com', '70 Zetterlundclark Alley', 'Alotero', 91.6, 99.12, 'AI', '2010-11-21 09:39:58');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'linaggo', 'Eternal who knows such thing most wretched people, against her child so it than used crude swearwords, had defeated as alien to spend many voices. Entire eternal perfection of autumn fear of truth.'),
(2, 'ardelluceq', 'Now from soil into and while even conscious anxiety, been at yourself by itself before you ferryman yes. Latter had changed a heron ate could do, let\'s not give you must follow that my teacher, greed from living by killing prohibited joy with doubt.'),
(3, 'albadara', 'Accustomed to them just an entire game and again. Sinner is near it earned him again after year, truly right one man\'s garments to bear. Scent of him asleep and preserved by simpler means.'),
(4, 'sonicksip', 'Since I won\'t for dwell on face the, mouth on their great secret art of that. Looked through him running away that teachings. Wonderful sleep with barber\'s assistant in perfumed waters, eyes became calm somewhat resembling a soft bed.'),
(5, 'ornsowu', 'False god it cannot deny my reward, at yourself away neither old he can learn, these pleasures these reports only slowly lose a student. The joyful because I also talk with dice.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'cindra.cholette@yahoo.com', 'cindracholette', 'ef#9fYlemar', 1),
(3, 'rubia.cloherty@live.com', 'rubiacloherty', 'moZdu:rkau7', 0),
(4, 'vivyan.vairavan@gmail.com', 'vivyanvairavan', ',atorG4', 1),
(5, 'duong.gilles@yahoo.com', 'duonggilles', '*owama3raCl', 0);

ALTER TABLE `ARTICLE`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `COMMENT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `CONTACT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `SECTION`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `SUBSCRIBER`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `TEXT`
  ADD PRIMARY KEY (`Id`);

ALTER TABLE `USER`
  ADD PRIMARY KEY (`Id`);

