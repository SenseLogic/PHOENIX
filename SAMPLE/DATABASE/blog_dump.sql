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
(1, 4, 5, 'Fear to her young man.', 'Exposed himself had shone into words behind me on, always watched the cycle which seemed now my senses. The cistern the thousandfoldness had noticed here remember this, learned ability to dress at you sir from him.', 'picture_10.jpg', 'video_0.mp4', '2009-11-01'),
(2, 2, 1, 'Just the wheel once heard its surface.', 'Time mortal was never satisfied with this. Didn\'t you beautiful is contained just travelling, well it sang longingly and sleeping answered, majority of all stank it to than force. Followed it says to do so leave you.', 'picture_15.jpg', 'video_1.mp4', '2008-08-05'),
(3, 4, 1, 'Arriving at our business of.', 'Pilgrims do our hair comb his approval, while for themselves they had pulled the ferryman. Monk stopped looking proudly and days to himself.', 'picture_17.jpg', 'video_1.mp4', '2005-10-03'),
(4, 1, 4, 'Body nor overestimated from the.', 'Purpose and disgust felt strong as much sin, let go on all she looked inside. Went on wherever to laugh to deceive others.', 'picture_13.jpg', 'video_1.mp4', '2013-06-18'),
(5, 4, 5, 'Travelled for her boy was sleeping.', 'Knew neither felt hope be like me, willingness delights my predecessor the waterfall at all. Takes everyone who stood there too should live. Glance realized when this myth of sympathy many years, most people had said with very powerful.', 'picture_15.jpg', 'video_1.mp4', '2000-04-19'),
(6, 1, 5, 'Wavered to like into eyes then said no.', 'Placed two hours he searches for food to breathe, I\'ll continue learning which has become mute his hand. As most suitable day he whispered quietly ashamed.', 'picture_5.jpg', 'video_2.mp4', '2006-01-11'),
(7, 4, 2, 'Teachings but it for and to teach you.', 'Behold I said when bathing performing the flying bird, watched it speaks when bathing it sounded new. Close to beg food has come with this, put me so much interests may see that loss, even meat and hesitantly after some of bark.', 'picture_6.jpg', 'video_0.mp4', '2015-07-05'),
(8, 2, 1, 'Lost them quickly you and learning and lazy.', 'Finding it the venerable teacher who at home, years he after he did this area. Never one-sided all friendship and evil words.', 'picture_7.jpg', 'video_2.mp4', '2010-02-11'),
(9, 5, 4, 'Spoke little about this.', 'Body inside that other not recognise me, farewell from horror in hot scent of grass. Even as he awaited not eternal life isn\'t it.', 'picture_1.jpg', 'video_1.mp4', '2000-11-26'),
(10, 2, 2, 'O he accepted a dreariness of patience.', 'Goal which there stood by sleep in grief, pointed them looked back up with doubt. Latter had occurred lost colour and by one\'s heart, as ever over slowly drop out of thirst.', 'picture_2.jpg', 'video_2.mp4', '2005-04-26'),
(11, 2, 4, 'Silently he who greeted you ought to you.', 'Forgive me again suddenly became worthy of love, awakened and preserved by great teacher would understand spoke. Apparently he finally said let\'s go then, what\'s the usual path through it likes I said. Cared little once at every work beautiful.', 'picture_19.jpg', 'video_1.mp4', '2004-10-11'),
(12, 3, 5, 'Indignant he encountered women.', 'Told him under control he can think, ferryman looked down and storage-rooms showed this way. Soon he stopped by one chatted with magic spells, at this had yearned to he asked.', 'picture_7.jpg', 'video_2.mp4', '2000-10-02'),
(13, 1, 5, 'Once a longing to pretty.', 'Like humidity entering into a desire no any given, where were rigidly focused towards goals all these reports. Entire eternal chain which goal because of the. Arriving at every goal lamentingly its contents of rice-cake.', 'picture_4.jpg', 'video_1.mp4', '2010-04-09'),
(14, 4, 1, 'I\'m telling me to.', 'Today how alone like someone reads a river, than learning to spring from and accept. Proper it until it back too I too much, ablutions the order and regained his son.', 'picture_6.jpg', 'video_1.mp4', '2015-10-10'),
(15, 2, 1, 'Said then uttering a healing thought they parted.', 'Propelling themselves and connected without dreams came walking silently, felt desire an oar with an untouchable peace. More time kissed with veneration in it. Monks as his distant spot of thought.', 'picture_18.jpg', 'video_1.mp4', '2007-12-21');

CREATE TABLE `COMMENT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `ArticleId` INT UNSIGNED NULL, 
  `UserId` INT UNSIGNED NULL, 
  `Text` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `COMMENT` (`Id`, `ArticleId`, `UserId`, `Text`, `DateTime`) VALUES
(1, 4, 5, 'Close attention with white just travelling. Late at all this vain woman again, us is mouth on my brothers.', '2008-09-27 09:01:50'),
(2, 7, 1, 'Travelled for by it already. Learned ones and food any further, until it\'ll becomes one will meditate.', '2007-02-15 07:22:59'),
(3, 6, 1, 'According to cling him he has, indeed was vexed by simpler means.', '2005-07-23 15:36:54'),
(4, 7, 2, 'Propelling themselves with some idea of anything. Carefully prepared rice for finding, exclaimed indignantly but like this. For sensual lust had been strange.', '2005-10-25 07:04:22'),
(5, 9, 2, 'People businessmen warriors women these beautiful trees, you\'ve seen him over in secrets.', '2013-06-10 00:43:04'),
(6, 4, 4, 'Long strides started after his bread. Most people around a little, straightened up sir intent to satisfy him.', '2003-01-22 03:51:55'),
(7, 6, 1, 'Her mouth on listening with for it, clean and remembered with your fare, clean and nevertheless always becomes void.', '2013-03-20 04:39:58'),
(8, 7, 4, 'Surrounded by this both of the, next morning noon and hardly perceived it.', '2012-06-24 07:30:31'),
(9, 11, 4, 'Look eternal anything new face without food, up whether living by many. What his city-house he dreamt of.', '2008-07-12 23:28:14'),
(10, 8, 3, 'Bowed to enlightenment it than force, else might perhaps reciprocate it. Others which knows what about it, told to discuss with this.', '2010-04-07 17:57:48'),
(11, 11, 3, 'Boat in fact which goal, it you beautiful are moving water. Join us await with only now, indignant he waits he a parable.', '2012-02-23 04:51:41'),
(12, 11, 3, 'Warrior and in yellow in heat. Over my friend had its brow, but hunger would give an eternal not-finding.', '2012-09-05 12:07:08'),
(13, 12, 1, 'Dreams flickered from finding means, exchanged some mocking me on.', '2012-05-02 14:58:30'),
(14, 9, 4, 'Travellers seeing a sadness as true, interrupted him proud state he laughed. Past I put him any sleep.', '2000-08-04 17:45:59'),
(15, 12, 1, 'A bird died how distrustful and stupid, wavered to throw it laughed at all.', '2013-07-08 12:04:05'),
(16, 4, 1, 'Wheel once transported the dice the wrists, simply thus without individuality of teachings.', '2008-05-15 13:12:12'),
(17, 3, 3, 'You\'re like those not destitute, willingness to build an undefeatable feats. Early in blissfulness between evil and hastiness.', '2003-07-06 03:29:54'),
(18, 9, 5, 'Forgive me under him alone like you. Times always becomes void and precocious words.', '2013-03-06 17:39:10'),
(19, 11, 2, 'Deep in ear his way with this, bold is that way delicious or anything.', '2002-12-17 10:30:44'),
(20, 4, 2, 'Easily he where his being, smiled quietly lowered glance pleases the monks.', '2001-02-20 05:17:51'),
(21, 14, 4, 'An ascetic before read this, also build an obstacle they go out. Apparently he won\'t feel inferior every creature.', '2014-01-24 09:43:10'),
(22, 2, 1, 'Glance was and old growing ill, me if you should live. Scolding dear he embraced wrapped his consciousness.', '2008-09-09 21:03:22'),
(23, 13, 1, 'Loved most venerable chiefly his stakes, though they all others but destitute, that you\'re on account of things.', '2003-09-26 11:13:24'),
(24, 11, 5, 'Still unable to spare your direction, had created like holiness to speak.', '2011-07-16 02:30:38'),
(25, 12, 2, 'O he pleased he dreamt of, wound also slowly she became embarrassed, finding his last hut who has taken.', '2003-08-20 10:36:05'),
(26, 10, 1, 'Looked to pay could remember, these many holy year and taught.', '2014-09-09 22:24:16'),
(27, 10, 3, 'Arrow-fast he thinks of merciless self-denial, meditation through meditation was welcome was wise. Travelled to utter a burden, what they won\'t and wait and wait.', '2003-11-25 16:09:23'),
(28, 6, 5, 'Them just slowly become empty of joy, looking up I used crude swearwords.', '2004-05-06 15:55:10'),
(29, 12, 1, 'Greed from greed from foolishness, nodded all lacks completeness roundness oneness. Pilgrims you can think so long. Also had happened more clearly at all.', '2014-10-22 13:42:58'),
(30, 14, 5, 'Perhaps get to war of unsatisfiable desire, rest to ever achieved it.', '2001-09-17 05:11:18');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Roeten', 'genni.lemaire@hotmail.com', 'Witarno', '2012-01-23 09:05:25'),
(2, 'Dassie', 'paige.mickens@gmail.com', 'Annsetierau', '2002-12-19 16:33:41'),
(3, 'Surreau', 'herb.naphan@yahoo.com', 'Allyhaydocka', '2012-05-15 16:41:45'),
(4, 'Schittl', 'dione.ameen@hotmail.com', 'Immoxterello', '2014-12-22 01:51:09'),
(5, 'Eitner', 'jeanyves.clements@hotmail.com', 'Guaychalyu', '2010-02-17 22:09:55');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Number` INT UNSIGNED NULL, 
  `Name` VARCHAR( 45 ) NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Number`, `Name`, `Text`, `Image`) VALUES
(1, 81, 'Sports', 'How foolishly and pointless cycle awaited the greatest. Bad whether this so she got here, clothes for several bows with desire of disgust. Another after hour of sounded the beginning with him. Mumbled a stream and wine the right away.', 'picture_15.jpg'),
(2, 670, 'Lifestyle', 'Sadness and possessions what do is enough to spell, way protect your name any person is small thing, nodded for not my reward of questions but words. Saw rising over the was puzzled by the one, arriving at him down with your breath to smile.', 'picture_18.jpg'),
(3, 524, 'Business', 'Death and sloth of other thousand small advice, mumbled a powerful noise a lake the completion, softly in stubborn disobedience and hug his opinions. Of sounded full breast popped out weighed it fly, exclaimed loudly and business occasionally that a teaching.', 'picture_7.jpg'),
(4, 730, 'Technology', 'Smart eyes see his disposition for fifteen days, wondrous it should he recognised though these reports. Like humidity entering the lanes of bliss and beggar. Myth had killed off in danger in one\'s body, scolding dear come and ate his fear that obstacle.', 'picture_11.jpg'),
(5, 834, 'History', 'Finding means that of children and without stirring, thing in talking turned gray hair by scolding. Smiling oneness of it as far ahead of grass.', 'picture_12.jpg');

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
(1, 'sharone.newkirk@live.com', '57 Notley Avenue', 'Yukinagacau', 30.09, 62.95, 'MU', '2013-02-10 09:38:47'),
(2, 'adnan.uffner@outlook.com', '78 Logue Park', 'Ashasoshany', 88.32, 74.87, 'JP', '2008-11-09 12:51:56'),
(3, 'magdalena.cavnar@yahoo.com', '36 Crolla Street', 'Atudic', 96.44, 42.75, 'RW', '2007-10-21 08:13:38'),
(4, 'enis.mcdonald@outlook.com', '73 Ulgen Avenue', 'Jesichalu', 33.45, 80.77, 'MW', '2014-09-20 16:20:28'),
(5, 'amelie.pascal@gmail.com', '51 Nordstrom Avenue', 'Ingtallihese', 13.56, 96.86, 'KP', '2003-11-07 11:31:31');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'humodru', 'Indeed a detour was mysterious quality of worry said, for himself appeared and submerged his wonderful verses. Curious more and tired and expectation obeyed his counterpart.'),
(2, 'achendendu', 'Travellers the food in its start the perfection. Herself had ran without any teachings and shivered, as possible to gnaw at by myself that you.'),
(3, 'ijobogiakwa', 'Opened his wretched money or another time. Yoga-veda shall let us once seen only a burden, world melted away and almost forever that you\'re, your side of suicide in good to fast. Exposed himself despised at some more zealous.'),
(4, 'chungwotrun', 'Travelled through all prayers of thousands of, leaned to save him which wondrously reminded him unmoved. Sinner but you\'re able to mock the forests, before been searching said you\'ve been ferried me myself.'),
(5, 'offurpirkemo', 'Mumbled a sedan-chair sat and faces rested on shoulder, exalted teacher whose holy or mask of any more, so my resolution I do nothing I think. Deep love for little child and unleash it. With anguish filled his foolish everyone the shore.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'carmina.wintour@hotmail.com', 'carminawintour', '1barisQka%', 0),
(3, 'elnora.swinson@mail.com', 'elnoraswinson', 'ta8@rikytP', 0),
(4, 'jagdish.mckenzie@outlook.com', 'jagdishmckenzie', 'wil1Wibb!o', 0),
(5, 'real.snyder@outlook.com', 'realsnyder', 'ift0onZt/a', 0);

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

