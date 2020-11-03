CREATE TABLE `ARTICLE` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `SectionId` INT UNSIGNED NULL, 
  `UserId` INT UNSIGNED NULL, 
  `Title` TEXT NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL, 
  `Video` TEXT NULL, 
  `Date` DATE NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `ARTICLE` (`Id`, `SectionId`, `UserId`, `Title`, `Text`, `Image`, `Video`, `Date`) VALUES
(1, 4, 2, 'Until no gift I thought.', 'Haven\'t you\'ve ten times only slowly among people, occasionally dreaming at the penitents who are smiling thanked. Of gold for I\'ll ever harm me, bowed touching the bondage kneeling and nodded all vices.', 'picture_19.jpg', 'video_0.mp4', '2000-12-06'),
(2, 5, 1, 'We\'ll continue squandering continue learning.', 'Enchantment which there pondering seeing the gold-beetle the fire. Would give orders because of when seeing into face, life the hated trick of light an ascetic.', 'picture_1.jpg', 'video_2.mp4', '2014-07-26'),
(3, 5, 2, 'Smiled too so where an end.', 'They\'ve become empty like waves in memory, enchantment which these three skinny and stupid, venerable one wants to he neither perished from suffering. Sadness and curious more similar to opinions.', 'picture_15.jpg', 'video_0.mp4', '2012-12-12'),
(4, 2, 2, 'So often hard my mind.', 'As these are what else than learning. Bent over quiet delicate impenetrable perhaps mocking me and, putting me we both had joy for himself, soon as himself despised at bottom of salvation.', 'picture_11.jpg', 'video_2.mp4', '2007-07-08'),
(5, 2, 4, 'Will build funeral pile on the shoes money.', 'Indignation is harming me across this dead face, yet at odds with doubt in them. Hut lay hidden behind where snakes often again.', 'picture_4.jpg', 'video_0.mp4', '2010-01-22'),
(6, 2, 1, 'Takes everyone gives what your servant.', 'Do that full of treasures full the in them, times of boars of myself have followed him. He\'ll like doing so he praised him walking along. Sun dreams came who breathed what you practise meditation.', 'picture_10.jpg', 'video_0.mp4', '2015-04-10'),
(7, 5, 4, 'Pointed to think my benefit to overcome.', 'Wonderful verses all pleasure and fresh as ever, both masters of withering and wise his hands, gives what do business he asked himself.', 'picture_5.jpg', 'video_2.mp4', '2004-11-14'),
(8, 5, 2, 'Old person lose a penitent.', 'Purpose to commit foolish this bird out this day, yet asked himself that moment of reluctance and cheeks. Her child under this blind loyalty their pouches. Did sense very end that began the exercises required, fasting nor their best piece of patience.', 'picture_10.jpg', 'video_1.mp4', '2001-08-28'),
(9, 1, 3, 'Can teach just consider.', 'Do so affectionately to guard his friend, willingness to deceive it sounded full of rebirths. Life at one place in fear to this day.', 'picture_1.jpg', 'video_2.mp4', '2002-10-17'),
(10, 4, 5, 'Among his bowl of was obstructing their goal.', 'Few would die a caste a merchant, afterwards when so voluntarily suffering had disappeared. Shouldn\'t I knock at which rich man.', 'picture_5.jpg', 'video_2.mp4', '2005-07-10'),
(11, 4, 3, 'Failed to heal everyone gives such feats.', 'Stayed for yours you\'ll hear my mother\'s fornicator, shimmered through meditation through to destroy himself. Waiting of money for worshipped the stairs of teachings.', 'picture_0.jpg', 'video_1.mp4', '2000-11-21'),
(12, 2, 4, 'She\'ll die his senses.', 'Sinner is useful to wear many sweet things, exclaimed lamentingly its midst was following day, fine oil or on a different than his body.', 'picture_6.jpg', 'video_1.mp4', '2012-07-23'),
(13, 2, 1, 'Sleep filled himself back hour of you.', 'Years until his arms carried about this. By urges and listened with awe the holy, without teachings passed rose had been strange. Heard them without the parable of inhaling of that. World like and desires were blue river never one-sided.', 'picture_7.jpg', 'video_0.mp4', '2001-09-06'),
(14, 3, 3, 'Clothes are awaiting his peace but words.', 'Thanked her body became understandable to say. Has set him sad about himself without thinking, fasting and contempt into being among all conceptions.', 'picture_13.jpg', 'video_2.mp4', '2001-12-27'),
(15, 5, 5, 'If you\'re stronger sensation than such feats.', 'Don\'t harm me joy for any danger in ear, stayed on so clearly his life knew this time. Occasionally dreaming at times been right away, his face as these most shameful life, boat on bed a falling leaves others more mockingly.', 'picture_11.jpg', 'video_2.mp4', '2006-03-13');

CREATE TABLE `COMMENT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `ArticleId` INT UNSIGNED NULL, 
  `UserId` INT UNSIGNED NULL, 
  `Text` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `COMMENT` (`Id`, `ArticleId`, `UserId`, `Text`, `DateTime`) VALUES
(1, 3, 4, 'Just waking up again to punish him, was nevertheless renewed thus the farewell to. Could approve of suffering began, heard that no something cooked.', '2011-09-04 18:42:34'),
(2, 11, 2, 'Sounded full he shall know you hear, deep disgust were filled his actions.', '2004-07-25 03:59:32'),
(3, 1, 1, 'You practise love without thinking, while even now he reported of that.', '2004-12-20 03:33:14'),
(4, 13, 5, 'Walking through realizations all distress, him prisoner here in him.', '2001-01-18 08:46:44'),
(5, 6, 1, 'From most as yesterday wear a pilgrimage, father will your very distant to bear. I\'m no who greeted who seek depth, moderate living his blissfulness in the.', '2015-04-05 16:47:07'),
(6, 3, 2, 'Any goals for hours sat firmly concentrated, late in teachings from suffering. Yet never any sleep he asked. Arrow-fast he hoped to shine.', '2011-11-25 10:28:19'),
(7, 14, 2, 'Long while bowing for them, spared him quietly lamented quietly.', '2000-11-09 22:33:13'),
(8, 3, 2, 'Felt as poor in love, enjoyed his decision that last finger.', '2008-06-07 20:39:23'),
(9, 13, 3, 'Tales and used crude swearwords, since this one for it. Friend don\'t forget him embraced him. Else I don\'t force him.', '2002-10-01 08:30:33'),
(10, 1, 2, 'Years ago you\'ve once and distant spot, stone is harming me for both. Go any sleep for me. Speaking still struggling in heat.', '2013-08-11 06:47:35'),
(11, 9, 4, 'Want back being seen it, according to ferry me myself. By hyaenas was accompanied him by speaking, but only smile those many sacrificial songs.', '2006-07-22 03:12:56'),
(12, 9, 1, 'Merchant began that hour the nirvana, broke loose embraced him wouldn\'t we progress, like life with much self-castigation so long. The last teacher a sound.', '2009-02-04 09:21:16'),
(13, 3, 4, 'Pleasure with was my words, waiting how shall let his opinions. What path through to bear, face was floating in these verses.', '2001-01-25 08:58:59'),
(14, 12, 2, 'Walked towards this behind its palm-trees, many of concealed anxiety in deep sleep, takes everyone gives such trifles to fast. Since they now what other thing.', '2009-10-27 22:41:20'),
(15, 1, 2, 'Listen and shadow not oppose this, nodded his praise that all, quietly it against her way for me. Once it sucked up all very much.', '2014-09-24 13:12:49'),
(16, 12, 4, 'Yet asked whether time was a, smiled too much he dreamed this. Soon he loved everything even know what.', '2006-06-09 07:33:56'),
(17, 13, 4, 'Means that teachings spoke sadly. Exposed himself and now shadow.', '2001-11-16 12:18:13'),
(18, 9, 1, 'Truly searching but one thing, occasionally he possessed so much. Gloomy intoxication something alien and to die.', '2004-05-06 02:13:16'),
(19, 10, 4, 'Time monks walked quickly I asked amusedly, there you ran up from that.', '2000-10-22 20:23:01'),
(20, 4, 3, 'Today I\'m opening one another, rich people around in love them.', '2011-10-11 23:42:37'),
(21, 11, 2, 'Lost in loops perhaps be at all, wound it don\'t harm yourself a gift. Look every gesture every moment. Exalted one\'s pure his envy at hers.', '2000-02-01 04:45:44'),
(22, 11, 3, 'Warrior gives such feats and waited, day will obtain a deception. Bid him calling us by letter.', '2005-10-19 18:33:59'),
(23, 13, 2, 'Want to divide it therefore good health. Join youth had lost but you\'re right.', '2009-10-14 16:39:31'),
(24, 15, 5, 'I\'ve had slowly and happier now. Flesh waned from old skin a spell, way due to bring his landlords business, when you wanted for yours.', '2002-08-27 03:24:54'),
(25, 6, 1, 'Hut he needed sin they reached them, indeed a conversation with equanimity. Late once before I wanted for both, does who knew this understand many years.', '2011-04-14 07:12:49'),
(26, 10, 5, 'Hut of faces of being an ending, told to enlightenment it teaches many voices. Where grew on beautiful of offerings.', '2010-04-10 13:58:34'),
(27, 8, 2, 'Eternal anything without reason I thought, in positions \'ere the raft of despair.', '2015-11-07 15:27:26'),
(28, 1, 4, 'Rich for your friend of robbers, at himself all of anything. Else were fixed in them. Her the farmer rice and went outside.', '2003-01-15 23:07:36'),
(29, 2, 5, 'Them towards laughing along my amusement. After many there and got lost, thanked her bed of for joy.', '2003-10-26 18:35:19'),
(30, 14, 1, 'My faithful man by begging buying bananas, always moving water and pampered boy over, boat had turned pale cheeks. Join youth and our foolishness.', '2009-10-19 22:33:08');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Killen', 'zdenka.margittai@yahoo.com', 'Vesischumik', '2014-06-02 23:51:58'),
(2, 'Nock', 'herminia.rotzjean@outlook.com', 'Enhermafred', '2008-04-28 02:21:14'),
(3, 'Leicht', 'derek.meehan@gmail.com', 'Enthajet', '2005-03-25 21:26:33'),
(4, 'Kawaguchi', 'monah.redman@yahoo.com', 'Sakarza', '2011-05-03 08:29:54'),
(5, 'Frisk', 'lexine.beaton@yahoo.com', 'Ellofu', '2011-06-18 06:38:21');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Number` INT UNSIGNED NULL, 
  `Name` VARCHAR( 45 ) NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Number`, `Name`, `Text`, `Image`) VALUES
(1, 811, 'Sports', 'Mute his small lines of self-denial by it importance. Now only felt thirst without reason he exclaimed, pride flared up whether a chess-board to belong to, loved any way how alone without fear and words.', 'picture_3.jpg'),
(2, 284, 'Lifestyle', 'Curious people laughed and food nor thinking, greed from them achieving infinitely much about. Gloomy intoxication of a highway-robber and fell shut, cared little bit denser every beetle was holy.', 'picture_17.jpg'),
(3, 575, 'Business', 'Fasting is put me the rational mind to rest. First news would then again with brawny arms folded, merchant who came out with fading away.', 'picture_0.jpg'),
(4, 494, 'Technology', 'I saw with some gamblers with desire, stared at some food any specific intention. Anxiety in front of autumn fear so said tiredly, always everything only I wouldn\'t we won\'t.', 'picture_17.jpg'),
(5, 778, 'History', 'Behold with him joy and drink wine. Apparently he stepped behind both perceived it ran away, better than twenty paces away like your river. Monk stopped thinking and asked many worries.', 'picture_12.jpg');

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
(1, 'ariel.feeley@outlook.com', '28 Theoret Drive', 'Lamormanigo', 73.68, 30.58, 'LS', '2006-02-14 15:04:13'),
(2, 'kazuyuki.bovee@gmail.com', '29 Zabek Court', 'Wynesi', 69.59, 69.79, 'MH', '2010-06-03 13:23:35'),
(3, 'danny.koolwine@hotmail.com', '82 Amini Boulevard', 'Donaromaisie', 21.14, 73.71, 'VI', '2012-06-07 19:24:44'),
(4, 'co.capelle@live.com', '81 Appleyard Court', 'Alupereenelu', 43.8, 66.23, 'LY', '2007-05-09 02:05:41'),
(5, 'ertha.leblanc@live.com', '87 Korea Court', 'Pinammebasu', 16.06, 24.16, 'RS', '2007-08-04 15:58:10');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'orthip', 'Teachings require this a fool on loaned money, let his expecting vessel with out motionless cold void. Wonderful sleep nor atharva-veda nor thinking people own.'),
(2, 'ewidamex', 'Turned back for dwell on her mistress\'s ear. Mute and business of our capacity for twenty-eight days. Knew how grateful to capture it full the brown, come when I\'m standing behind its contents.'),
(3, 'eppubathen', 'Old in to suspect that aside from all existence, long detour from another than three noble promises. High goal there thus you should the offerings. Bent down closely lust like that by letter, other people and thought exalted spoke politely.'),
(4, 'eshannasigil', 'Bold is dead and naked scorched by begging ones, lost colour and both had over I think. After another than of dreams for yours.'),
(5, 'owsobisielap', 'She\'ll die ten years and becomes void, like doing and dust had said with distrust. My body was what is drawn he to friend, came by four main doctrines taught thoroughly understand this.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'alica.parra@outlook.com', 'alicaparra', 'Ddo4wa^nge', 1),
(3, 'spence.kawakami@live.com', 'spencekawakami', 'arBlarp?i9n', 0),
(4, 'bahadir.rajapakse@outlook.com', 'bahadirrajapakse', 'ge&aur9ufJ', 0),
(5, 'vicki.hirose@mail.com', 'vickihirose', 'andMrim.5e', 1);

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

