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
(1, 3, 3, 'Entire eternal are many an impatient tone.', 'Straightened up to in drifted through the new oar, among all lied it against his sexuality moving. Left but destitute so voluntarily suffering began.', 'uchebrau.png', '2003-10-20'),
(2, 3, 1, 'Who know there yesterday and purpose to friend.', 'Urged him saw corpses stretched out and hastiness. Another face in learning to teach me, kindly he believed his work there and your heart.', 'robooris.jpg', '2012-11-18'),
(3, 1, 4, 'Taught thoroughly starting out badly.', 'Both being alive of believers said quietly, example the fields nobody may go out. Learned men were rigid all knowledge and by letter.', 'miviwkor.jpg', '2005-09-10'),
(4, 5, 4, 'Easily happen that fragrant myth had something real.', 'Distant beach with himself anymore to read, cannot deny my pilgrimage together by wine had disappeared, thought wondrous is better opinion of waiting thinking. Knowing patient is to offer him except.', 'beninczo.png', '2010-05-08'),
(5, 4, 3, 'Than on in years which was.', 'Times stayed on in circles we you love them, while stopped to tackle it said quietly. Himself not open thus without suffering on water, what\'s the game which is obsessed by letter, thinking again I followed it miracles can think.', 'ergoredu.png', '2001-10-20'),
(6, 1, 3, 'Looked to occupy them from your thoughts.', 'Your riches had followed the day shone golden. At home at in being an ascetic, rich and time felt something from mine.', 'kolonsyj.gif', '2003-07-09'),
(7, 2, 2, 'Blossomed his head being I love words.', 'Close attention he presented so will receive thanks, enchantment which all vices through his stakes. Pilgrims shall live it before and talked incessantly hit.', 'ingendri.jpg', '2003-09-10'),
(8, 1, 2, 'Stopped looking at one the.', 'Since those people lead in loops perhaps your love, both thinking these teachings sound the high calling, well upholstered hell than learning from your great pity.', 'rainelea.gif', '2003-05-19'),
(9, 4, 1, 'Afterwards when losses he used crude swearwords.', 'Cared little which help you too learn thirsty man, they used the robe as old face. Pleasure cannot be expressed in all she was necessary, to play it all seemed not love words.', 'instorra.jpg', '2010-12-17'),
(10, 1, 5, 'Opposite of happy for people in its title.', 'Thought sprang forth and connected that very soon, someone is starting to kiss your servant his way, rarely laughed about knew everything smelled of teachings. Clothes they saw you now is waiting for him. Bowed with other ways leading away from it.', 'thipeari.jpg', '2007-08-27'),
(11, 2, 1, 'Indeed have a little.', 'Sadness has happened occasionally they actually was incessant cheerfulness, ate once seen working the listeners like him. Kindly spoke go then built my path, understood that was talking turned to him.', 'ulcitrot.jpg', '2001-10-10'),
(12, 1, 1, 'Lust like diving into friendly eyes to teach.', 'Sir always picked the mirror at bottom of love, years which already the exercise in thinking. So beautiful face was and wise one, dreams came he walked the good deed.', 'etsokoel.gif', '2015-07-13'),
(13, 1, 3, 'And drank sweetly and gaga.', 'After having honestly told him against its title, with anguish filled him because the mirror at him. Nevertheless transformed and wasting his lifetime this behind.', 'selettec.png', '2007-09-20'),
(14, 3, 2, 'Wonderful verses all thinking hours he thought.', 'On shoulder with thanks returned home that was enchanted, urged him my amusement in any different goal. Being one step behind him except to learn, walked quickly for himself than everything together with. Father thinking his wretched people with her.', 'olumason.jpg', '2008-12-13'),
(15, 3, 5, 'Say what do that.', 'Consciousness returned extremely satisfied from greed from an, river sparkling the than all encompassed by bees. Better things asked hesitantly and smiling thanked, of filth he posed to strive for it. Conducted him being open waiting nor any sleep.', 'escokraw.gif', '2013-10-16');

CREATE TABLE `COMMENT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `ArticleId` INT UNSIGNED NULL, 
  `UserId` INT UNSIGNED NULL, 
  `Text` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `COMMENT` (`Id`, `ArticleId`, `UserId`, `Text`, `DateTime`) VALUES
(1, 14, 4, 'Slowly become gray hairs among so well, smile of autumn and despair that ferry. Moderate living for twenty-eight days, wouldn\'t take its start feeling in heat.', '2004-09-17 06:22:28'),
(2, 4, 1, 'Wanted to identify the shore, fully understanding previously unknown people. The sunshine of their travels.', '2006-08-18 04:56:20'),
(3, 6, 2, 'Once and became her friend\'s face, children from soiling himself fall, you\'re very hard on an error. Ran invisibly had replaced my friend.', '2005-05-19 18:53:08'),
(4, 14, 2, 'Fear with doubt but his self, occasionally he drink from the. Non-eternal things can reach that this incarnation.', '2005-01-11 13:05:54'),
(5, 1, 1, 'Questions but so often dark, looked upon stronger than his. Don\'t forget that you\'re saying something real.', '2002-08-14 09:53:09'),
(6, 12, 3, 'Beckoned him anything else than in it, I can\'t go through him unconscious.', '2015-07-08 18:11:48'),
(7, 4, 5, 'All other again breathed and cooked rice. Life fading away neither body of robbers.', '2015-10-11 21:35:45'),
(8, 4, 3, 'High caste of bamboo forest started whining. Walking among so thus they commanded, again flowed on new man. Same bed in you don\'t I.', '2010-11-06 13:36:14'),
(9, 1, 4, 'I haven\'t stopped fighting in him, perhaps you pieces of knowledge that goal.', '2001-06-08 19:36:16'),
(10, 1, 2, 'High canopy of its voice she him. According to convince that perfected one, source dark call of wise.', '2004-11-04 11:02:51'),
(11, 8, 5, 'Out business-affairs they followed by on gods, read a hardly noticeable gesture. Past touched and made yesterday.', '2005-05-27 21:03:55'),
(12, 6, 4, 'Let anything yesterday wear many sweet things. Stopped thinking he lose him.', '2009-08-19 23:44:35'),
(13, 12, 2, 'Previous incarnation like it spoke eagerly, suddenly woke up impetuously hunting. I\'ll ever lost to belong to, walked out to throw a waiting for.', '2008-02-20 12:40:01'),
(14, 8, 5, 'Let\'s not look eternal not-finding, whenever it which seems I been.', '2003-12-10 22:36:39'),
(15, 7, 4, 'Friend now began that time, well tested sequence a of age. Softly perhaps enjoyable to sleep badly, ferryman to act really known yet sir.', '2009-09-13 11:00:03'),
(16, 6, 4, 'Afterwards insight came across this area, got lost but salvation as this day. Senses if the ever loved by many.', '2007-11-05 02:34:41'),
(17, 1, 3, 'Is dead and go on shoulder, past and eighty and tired. Sleep into her refuge in secrets.', '2005-11-12 04:58:25'),
(18, 3, 2, 'Well my mind he stopped suffering, looked upon stronger than I know, when after having passed by.', '2005-09-26 15:28:47'),
(19, 11, 4, 'Wavered to stay with sadness. Past rose had passed rose, hasn\'t it possible that exalted one. Leapt in love stronger with it.', '2005-07-07 15:05:08'),
(20, 12, 5, 'Put it rarely spoke little, means of destructive service before you like. Fell into and shy he could remember.', '2007-08-07 07:31:04'),
(21, 6, 4, 'Pleasure and sweet being without making poetry, fasting making any time ago. Speaking which could tell me leave, made gifts as alike to rest.', '2000-08-16 19:54:32'),
(22, 9, 1, 'Her shady grove in himself, then returned stepped in everything. Entered the process of rice-cake, wanted to speak lovely river.', '2003-04-02 01:31:57'),
(23, 1, 3, 'Smiled silently he turned against hunger. Wanted for several bows performed with equanimity, like into realizations through your father.', '2015-03-02 00:04:22'),
(24, 11, 1, 'Hut thinking the rig-veda being seen, previous incarnation like happiness and became unbearable.', '2015-10-01 00:05:31'),
(25, 8, 2, 'Placed two colours no payment for them, same day I love words exclaimed. Eyes the bite called himself from foolishness, more whether it voices a farewell.', '2002-05-05 23:56:57'),
(26, 4, 5, 'They\'ve become exuberant won\'t for nothing, cannot be without possession without mockery. Friend he called upon him, clothes for oneself and carefully he laughed.', '2010-03-15 01:09:17'),
(27, 13, 3, 'You succeed in meditation of joy, next morning distant son from.', '2001-07-12 21:35:31'),
(28, 3, 3, 'Way different life of paper. From all other and entered for both.', '2007-11-02 17:05:52'),
(29, 10, 1, 'Weren\'t you after having had died, body definitely not touching him.', '2013-03-09 07:16:24'),
(30, 6, 3, 'Down differently there again his moods, slowly walking among so beautiful, fell into words it\'s a hunter. Walked over to her house of love.', '2003-08-27 04:14:22');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Booking', 'mukund.singer@hotmail.com', 'Agedavakhal', '2008-01-06 21:49:12'),
(2, 'Winsborrow', 'minhphuc.ledou@mail.com', 'Itsari', '2015-10-24 11:53:22'),
(3, 'Constable', 'maren.chugha@live.com', 'Artegavinak', '2005-10-08 19:02:12'),
(4, 'Debernardo', 'estella.kiens@yahoo.com', 'Cetarte', '2012-08-19 16:13:49'),
(5, 'Volfe', 'kamlesh.morreale@hotmail.com', 'Davolewil', '2011-08-05 04:34:19');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Number` INT UNSIGNED NULL, 
  `Name` VARCHAR( 45 ) NULL, 
  `Text` TEXT NULL, 
  `Image` VARCHAR( 45 ) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Number`, `Name`, `Text`, `Image`) VALUES
(1, 655, 'Dalmard', 'Failed to laugh about you insist upon, late he presented his dream to like me. Awakened as clearly and come said quietly. This moment touched hers and being without money.', 'ovahsieh.png'),
(2, 168, 'Ficici', 'Bent down differently sound foolish but not you, death a simple person who came along at home. Yes he let us by them their way, the future his wishes he gathered no goal. That mouth with friendly and left that night here.', 'urrellwo.gif'),
(3, 709, 'Channell', 'Only seemingly only I love words exclaimed. Wanted to depart from one to her, placed two wise one I\'ll think about you. Ran invisibly had ever before and tenderness his walk, warrior gives strength is beginning now is my name.', 'musawacy.png'),
(4, 431, 'Talbott', 'Children with falling leaf which he after being seen, still have said let\'s be charged on gods, wavered to miracles can support them died once again. Loved ones not everything can love them.', 'ofstedur.gif'),
(5, 214, 'Records', 'Cannot be friends like an equal or entirely sinful, bad people for there again though these words, must be said not afraid of thirst. Stayed the knowledge has got near thus the ruins.', 'penunthe.gif');

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
(1, 'nikki.brewton@mail.com', '79 Dibenedetto Drive', 'Illena', 30.21, 76.98, 'CF', '2000-11-01 16:50:21'),
(2, 'robina.hockaday@hotmail.com', '87 Soyland Street', 'Ewigag', 65.09, 92.16, 'PE', '2001-06-25 07:54:14'),
(3, 'elias.cocco@hotmail.com', '54 Ainsworth Park', 'Kameko', 47.54, 10.66, 'VE', '2009-02-01 14:33:31'),
(4, 'phebe.ishak@live.com', '1 Rheaume Court', 'Mahshad', 91.69, 36.24, 'AQ', '2014-04-25 20:19:01'),
(5, 'damil.rowlandson@gmail.com', '73 Geoffrion Park', 'Aningerindop', 74.28, 67.23, 'NL', '2002-04-17 07:58:28');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'denahvasem', 'Late he let me being drawn on gods together, tell him satisfy his knowledge that you. Forgive me if I\'ll think is life, farewell to always watched it just too many years.'),
(2, 'ormaby', 'Always re-born received as had used to, this deep sleep any pain also thank you. Just too spoke their midst carried her side, herself had obtained knowledge I already on bed.'),
(3, 'ennykeriw', 'Hours and advice to spare your hospitality my brothers, leaned against her garden sitting opposite of wise, you follow his nor did his salvation was holy. Speaking I called timidly fled to weep.'),
(4, 'bonnaranicob', 'Thoughts brought his beard grew while stopped searching. Truly come are is coming into suffering of despair. Never he possessed and gifts as people own, different games knew neither felt at him. Clean and whether the daytime with your work.'),
(5, 'selestinal', 'Loved and why don\'t forget himself like them, ran along in new man than he so long. Turned slowly and sweet voice hovered over in ear. Nevertheless he bowed deeply this knowledge of anything.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'xyz', 1),
(2, 'bridgette.diogo@mail.com', 'est5eperZe%', 0),
(3, 'zongyi.mordecai@yahoo.com', '1ma!dBi', 1),
(4, 'kamran.demorest@live.com', 'mXa1rioli#', 1),
(5, 'geoff.morin@hotmail.com', 'ijmiAn=7de', 1);

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

