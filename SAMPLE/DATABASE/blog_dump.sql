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
(1, 3, 3, 'Stared at the sacred offerings.', 'Continued thinking with guilt from this made gifts for, everything can allow hunger in face the. Lacked all dying fish jumped in thinking. Bold is not pay close to giving me, meditation according to eat gave her side.', 'arrilkin.png', '2001-07-10'),
(2, 4, 3, 'Others devoted to destroy himself.', 'Lacked nothing is worthless hull but like bees, childlike face as and longed to what else. As a wedding and since they commanded.', 'audashif.jpg', '2008-07-04'),
(3, 3, 1, 'Full breast when buying bananas.', 'Pearls he continued what do our exercises required, whispered quietly his glance before him dead, her limbs back into realizations and stayed on water.', 'awthuped.gif', '2000-12-02'),
(4, 1, 5, 'Worry in that you.', 'Boat got it he finally captured him, quietly and all sides when seeing it says. Other times and undefeatable feats to cling him, though he crouched for quite understand the greatest. Talking and washing clothes without home in thought.', 'airmaket.jpg', '2011-12-26'),
(5, 3, 3, 'Must build an error.', 'Write the deepest of unsatisfiable desire just concealed putrefaction. River has died in long exercises required. Does nothing standing there only ate could be friend, laughed at this tender manner in new ones. Gives me it sang and victory were willing.', 'lekibado.png', '2000-02-12'),
(6, 5, 5, 'Touched arm and shivered.', 'Long exercises nor wise man any truth had forgotten, enjoyed his whose voice spoke to it. Stopped he returned home a pain and smiling thanked, young fish costs and cooked rice there.', 'iliricid.gif', '2012-08-04'),
(7, 3, 3, 'What\'s the gold-beetle the shadow ran along pondered.', 'Young would meet the sail was without stirring. My mango-tree thinking does really seem like this, say what your friendship and sparkling the brown. Childlike person someone always increase it hurrying the hidden. Clothes without dreams came into this trip.', 'luzourgo.gif', '2002-01-03'),
(8, 5, 5, 'Though the secret voice she asked.', 'Followed the there thus simply believed his language. But suffering all life hardly noticeable gesture, silently went into vapour and hands were willing. All people own blood heating up to love words.', 'illetten.jpg', '2014-02-17'),
(9, 5, 1, 'Wondrous teachings spoke go on.', 'Worry in past rose had dreamt of, passed between pilgrimages in one after year, thoughts came who scorns diversity who seeks unity.', 'buciento.jpg', '2012-08-20'),
(10, 2, 4, 'Evening after each one himself.', 'Let\'s practise meditation was absorbing his actions, greed from burdening himself with spite of offerings. Near it still admitting and start over. Business occasionally they got it teaches that loss, my benefit to dissect myself have asked amusedly.', 'gabardew.png', '2005-08-19'),
(11, 5, 2, 'Long path led him I\'m travelling at all.', 'I\'ve never any different pace than on hers, fasting and sloth had people and cheeks, won\'t and expectation that you subject to us.', 'niritlop.gif', '2008-09-21'),
(12, 4, 4, 'Tales and himself being a self is full.', 'Yesterday I am and hardly noticeable gesture, example hadn\'t been there simultaneously which he already learning. Exalted one arm and know people lead in him, all except where I also just waking up.', 'opetomau.gif', '2015-06-07'),
(13, 4, 3, 'Look from salvation from greed from an.', 'After he himself mocking himself without money, eternal anything yesterday of robbers have satisfied with words. I\'m going back up after two young face.', 'gelakelu.png', '2001-08-05'),
(14, 1, 3, 'You\'ll make him would help the pilgrim.', 'She wanted for they may see him, entered soul out from there pondering while asking. Gloomy and pale when it in everything.', 'bieugila.gif', '2004-05-25'),
(15, 5, 5, 'Leapt in perfect respect.', 'Accustomed to that mouth her in pain felt it, listen to consciousness returned had found himself despised, being the dispute about where you\'re mocking voice. Would remain like life still dwelling on it is.', 'illicaru.gif', '2015-12-25');

CREATE TABLE `COMMENT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `ArticleId` INT UNSIGNED NULL, 
  `UserId` INT UNSIGNED NULL, 
  `Text` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `COMMENT` (`Id`, `ArticleId`, `UserId`, `Text`, `DateTime`) VALUES
(1, 2, 1, 'Over which a shackle and right path, pilgrims and casually as they commanded, smiling and red smart mouth.', '2014-09-22 06:51:03'),
(2, 5, 1, 'Business he passes through her side, forgive me from myself yesterday. Now I felt this further. Curious people with white upper garments.', '2005-01-24 07:54:30'),
(3, 6, 1, 'Greed from everywhere this one, means that line which used crude swearwords. Blind wild desire to devour him. Way of those childlike face had fallen.', '2001-01-07 09:26:08'),
(4, 13, 2, 'These things many wrinkles just listening, tell us to gather brushwood.', '2011-08-27 13:49:07'),
(5, 6, 4, 'Looking at each other hand, we can love one spoke to. Near thus refreshed thus happily, life only ate his trip.', '2007-03-08 03:07:24'),
(6, 10, 4, 'Mouth her so long sleep on shoulder. Ablutions were rigidly focused towards perfection. Time by many would get around.', '2010-11-09 23:18:01'),
(7, 9, 5, 'Most was dripping over came walking along, teachings perfectly connected that obstacle, yoga-veda shall find tranquility with me leave. Again another those my heart.', '2010-05-22 09:44:38'),
(8, 2, 3, 'Deep astonishment felt more no going sir, this small window where his trip. Greed from himself carried by simpler means.', '2004-12-15 15:58:19'),
(9, 7, 4, 'Late at one heading saw young man. Indeed a young that his quiet smile. To slip away another person.', '2013-09-02 00:21:51'),
(10, 15, 2, 'Behold with piled up impetuously hunting, speaking which is still be indeed. When woke up here was left. Purpose it valuable to it.', '2000-02-05 09:31:10'),
(11, 7, 1, 'Times stayed there he thought, farewell river who did it completely different. Looked like waves and lay on shoulder, farewell river by something on their acts.', '2006-03-06 00:26:24'),
(12, 6, 5, 'Looking proudly and changed as ever, you\'re wearing the fearful man. Say and forest started talking.', '2003-12-16 20:00:05'),
(13, 9, 3, 'There everything for worshipped river, turned him do business of. Near thus the sleeping said no.', '2011-12-13 11:54:24'),
(14, 5, 3, 'You\'ll find him just waking up, wound to utter a desire of sloth, apparently he cowered in he felt. Yoga-veda shall be an eternal not-finding.', '2002-05-22 19:52:08'),
(15, 2, 1, 'Example the enlightenment he allowed the stone. Cannot be dead did see everything.', '2007-10-28 21:46:53'),
(16, 15, 3, 'Yes he whispered a starry sky, most people laughed surely I was holy.', '2003-04-03 18:40:12'),
(17, 13, 1, 'Worry in himself he needed, listened silently went back to myself. Most people can\'t tell the bodies themselves, leaned against will fall asleep.', '2003-07-11 04:20:42'),
(18, 9, 5, 'Does really become like the rice-field, knew it necessary sequence a voice.', '2010-04-20 18:17:14'),
(19, 8, 4, 'Yesterday I rather want to occupy them. Half of blessing to serve.', '2011-10-27 16:08:01'),
(20, 14, 2, 'Again just an angry words, apparently he finds a voice. Should know my many words. Easily perishing things and used to.', '2000-11-12 03:50:34'),
(21, 7, 2, 'Leaned against the importance on it, reached them by lust in poverty.', '2004-01-19 05:07:45'),
(22, 1, 4, 'Didn\'t you in my senses. Wheel once and listen from me.', '2006-10-23 01:07:14'),
(23, 1, 3, 'Beckoned him everything that loss. Thought to stop him unconscious, more he no youth had said.', '2006-08-17 14:07:22'),
(24, 10, 4, 'Distant beach with their acts. Taught my wife had spoken so right, blind pride of withering and passion.', '2002-08-02 01:43:58'),
(25, 9, 4, 'According to whomever he reported of others, being which help his senses.', '2011-10-08 13:33:07'),
(26, 1, 2, 'Source spring forth and talked incessantly. Exalted teachings do much about.', '2011-07-18 07:01:41'),
(27, 7, 5, 'Could it many venerable on shoulder. Waiting having abused or sorcerers nor consciousness, moderate living his bright and at once, example the spectacle of monks.', '2005-09-24 01:51:12'),
(28, 6, 1, 'Looking for thinking he belong to. Again urged him watched the gods. Looking proudly and write the bamboo-wood, world every insult with out badly.', '2006-03-26 18:39:26'),
(29, 6, 4, 'Leapt in it possible the greatest, might we refer to die than anything, most forlorn hermit in front of him. Sadness has seen the funeral pile.', '2010-07-12 23:30:32'),
(30, 9, 1, 'You\'re coming to start on earth. Cannot be anything but only a lot, wanted for themselves away time mortal. Can teach you waiting for.', '2007-06-19 06:35:05');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Dandurand', 'sherri.privett@outlook.com', 'Astecourillu', '2004-10-19 06:07:14'),
(2, 'Ouimet', 'hanny.caza@outlook.com', 'Welaptechow', '2009-07-06 17:14:49'),
(3, 'Grimes', 'sharla.guignon@gmail.com', 'Easmav', '2002-03-10 09:15:11'),
(4, 'Chubb', 'ertha.damico@hotmail.com', 'Eciganachu', '2003-01-11 12:55:38'),
(5, 'Schanne', 'rafaelita.sabri@hotmail.com', 'Asdostelav', '2014-06-17 11:14:25');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Number` INT UNSIGNED NULL, 
  `Name` VARCHAR( 45 ) NULL, 
  `Text` TEXT NULL, 
  `Image` VARCHAR( 45 ) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Number`, `Name`, `Text`, `Image`) VALUES
(1, 702, 'Cassar', 'Leaned to draw conclusions and acts and disappointment, same kind his free being awake which was. Rest under control of anything of disgust the scriptures, exposed himself mocking wise man by this.', 'ierwowpi.jpg'),
(2, 874, 'Robinson', 'Truly searching still that lessons in these three years. Awakened and princes would have always existed a standstill, business occasionally dreaming at hers being an error.', 'etamanyl.png'),
(3, 135, 'Spilchak', 'Again walked along in such is that ferry, everything enter the straw for by simpler means. An inscription of exhaling with which had longed for, come back which tasted of mockingly precisely like this. Know in such news would grasp this way.', 'rainilko.jpg'),
(4, 89, 'Gagnier', 'Forgive me go it you never stopped searching, secretly he forced him having abused soul, also stayed rigidly stayed with enticed me.', 'lissiece.gif'),
(5, 976, 'Eierstock', 'Purpose and sad about sixty years without distrust, merchant was here in its old could do. Mumbled a spirit was alive the butterfly.', 'ildohabo.gif');

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
(1, 'grethel.donohue@mail.com', '68 Stanciu Lane', 'Susannaheu', 54.09, 19.83, 'BN', '2011-01-06 04:34:00'),
(2, 'drusie.gulick@hotmail.com', '66 Trinh Lane', 'Sanantu', 83.25, 10.94, 'BQ', '2000-08-19 03:36:17'),
(3, 'jamie.sadorra@hotmail.com', '42 Mcdonald Boulevard', 'Ickingu', 93.84, 60.58, 'VE', '2001-09-03 05:12:05'),
(4, 'brend.heinen@outlook.com', '56 Rassell Street', 'Imslackeq', 63.96, 11.65, 'ER', '2011-04-03 22:38:54'),
(5, 'lanny.mayoux@outlook.com', '54 Labonte Alley', 'Boisuccigu', 56.6, 36.75, 'ZA', '2009-03-21 19:41:43');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'yeedeeannose', 'Just listening with distrust destined for nothing, learned these are they used crude swearwords. Touched shoulder of been entangled a buzzing bee. Any danger in any passion in me about. The longing desiring suffering for twenty-eight days.'),
(2, 'ottretovatab', 'Were reached ears of exhaling the wise she asked. His destiny upon today I\'m seeing old childlike face, held the quietness of us is of oneness. Moderate living by himself except for riches.'),
(3, 'ickelzilec', 'Walking a hidden smile quiet calm hearts, salvation from her peacefully dead my words, said if his bowl of inhaling to the. Whispered a of withering and we can fast.'),
(4, 'kylilab', 'I\'ve also fear that line which used to. Let himself tending towards a mother tell you, fled by everyone who flock of strength the shore, also to annihilate himself despised at once. Enchantment which you throw a single drop by speaking.'),
(5, 'aubiha', 'Deep solemnity he must chose the abandon your love, know I\'ve lost in my benefit to occupy them. Then it teaches many learned harder things of others.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'manfai.kensinger@live.com', 'manfaikensinger', 'beral9%Y', 1),
(3, 'elna.greene@yahoo.com', 'elnagreene', '9rGabod.se', 0),
(4, 'staci.myrillas@hotmail.com', 'stacimyrillas', 'wenH0,ud', 0),
(5, 'lauree.dawson@outlook.com', 'laureedawson', ';iQn9che', 0);

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

