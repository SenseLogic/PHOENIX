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
(1, 5, 4, 'Soon grown tired put his friend.', 'Tales and insatiably into being without stirring, so completely different life sin very grateful. After another person until the if I\'ll be alive. My duty to my present and unleash it, attentively to like them suffering and mysterious was broken.', 'picture_10.jpg', 'video_0.mp4', '2005-03-19'),
(2, 2, 5, 'Soon afterwards when so clearly.', 'Business and lovely thought I read this. Surrounded by fasting which people have thought, once at my learned ones from me.', 'picture_4.jpg', 'video_1.mp4', '2007-02-16'),
(3, 3, 1, 'Broke loose embraced the reflection of him.', 'Would doubt in tears as and duties of robbers, truly wanted for long meditative recitation of salvation. Her little bit right don\'t harm me.', 'picture_0.jpg', 'video_1.mp4', '2006-06-21'),
(4, 1, 1, 'Join youth any person has no goal.', 'Watched the entered soul die a mouth, myth had prepared food any danger in them. Perhaps to pretty shoes they have heard everything.', 'picture_1.jpg', 'video_2.mp4', '2013-02-11'),
(5, 5, 5, 'Monk looked up impetuously hunting for an arrow.', 'I\'ve neither fasting waiting his love it is, have pretty at this myth of worship. One he cowered in tears he saw, time into words are right there with equanimity.', 'picture_10.jpg', 'video_0.mp4', '2011-01-23'),
(6, 5, 3, 'Went on which she asked it.', 'Apparently he walked on chance not see everything, meditation there young falcon together with it. Of autumn fear read them there where the verse. Previous births were hurrying the gamblers with sky-blue ones.', 'picture_13.jpg', 'video_0.mp4', '2007-03-05'),
(7, 3, 2, 'Walking among his hands.', 'Deeply he still give an eternity without me and. Continued what fools call of though the nirvana, both followed it heavy tongue no any longer. High in itself whether it teaches many sacrificial songs, image the guest and river looked at night.', 'picture_14.jpg', 'video_0.mp4', '2007-08-04'),
(8, 3, 5, 'Non-eternal things worth keeping he captured by love.', 'Could approve of bamboo forest for you, thoughts and passion with praise you in them. A hut and cramps of rage and hastiness, has overwhelmed me out of unsatisfiable desire, I know people in face lying in secrets.', 'picture_7.jpg', 'video_1.mp4', '2011-07-01'),
(9, 3, 5, 'Sadness as people brought upon him.', 'Exalted one thing as most holy word my mind. Easily perishing things than others tell the sky, placed his the meantime and every year. Venerable father to these words while begging buying bananas.', 'picture_0.jpg', 'video_1.mp4', '2005-12-08'),
(10, 5, 1, 'World a gentleman and used to.', 'Wavered to answer to others tell me exclaimed loudly. Walking in thinking is beginning to breathe, scent of air over every spot his actions. While was scattered as what about it.', 'picture_16.jpg', 'video_2.mp4', '2013-11-04'),
(11, 4, 5, 'Me down by speaking.', 'Sir from mine I love to death, flesh waned from one I\'ll learn thirsty man. Smiled too and solved up a circle, in pain for possession and dull music the rest. And secret was shining from finding means.', 'picture_11.jpg', 'video_1.mp4', '2009-11-15'),
(12, 1, 4, 'Eternal are choosing your love.', 'Or wise and beautiful aren\'t any different nest, he called upon him anything yesterday and obedience. Then returned in order to build an arrow, sinner which used to convince that goal, himself sink down into suffering good days after year.', 'picture_2.jpg', 'video_0.mp4', '2008-11-20'),
(13, 5, 3, 'Read for I need to expect it.', 'Smile the fastest course to understand spoke. Looking into every year and casually as your sleep. Though he lay stiff legs greeting me.', 'picture_2.jpg', 'video_0.mp4', '2002-04-10'),
(14, 1, 4, 'Accustomed to whom had seemed like him.', 'Perhaps see beloved that in perfumed waters, another person\'s life knew what his actions to know. Love practised the damp glance was awaiting him, could never listened to was true bliss. You\'ve seen the log by what do it.', 'picture_12.jpg', 'video_1.mp4', '2006-02-23'),
(15, 2, 2, 'Ran somewhere far he in thinking.', 'Hut he shall not add his worries. Wheel of reflection of it than force. Where the sacrifices breathing forth from following the many. More curious more supple more for about it.', 'picture_0.jpg', 'video_2.mp4', '2011-02-03');

CREATE TABLE `COMMENT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `ArticleId` INT UNSIGNED NULL, 
  `UserId` INT UNSIGNED NULL, 
  `Text` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `COMMENT` (`Id`, `ArticleId`, `UserId`, `Text`, `DateTime`) VALUES
(1, 9, 3, 'Black snake was very beginning, touched hers being patient is fasting. Greeted her mouth on loaned money, among all prayers of disgust.', '2013-03-16 06:41:01'),
(2, 6, 2, 'Young that I\'m repeating it, nodded in everything for the street. Name of disappearance she him.', '2010-03-06 18:25:14'),
(3, 10, 5, 'Harmony knowledge only been hearing, might you as bright smile, beckoned him above the sky.', '2007-12-06 09:53:13'),
(4, 7, 4, 'Teachings is time perhaps see you mean, fell asleep when you\'ve last human being. Indeed was annoyed when he laughed, gloomy mind was shimmering in words.', '2009-05-22 06:34:18'),
(5, 4, 1, 'Goal the loincloth and smiling he hated, turned his now my hut. Full height of our business.', '2003-02-27 18:29:10'),
(6, 4, 5, 'Half of arrogance he thought, perhaps your own being a.', '2009-12-26 08:33:52'),
(7, 15, 1, 'Me a waiting nor the rest, passed on her refuge with mockery, finding it he belong to.', '2009-05-18 11:51:45'),
(8, 13, 2, 'More fell into its dinner, awakened I can\'t think of wise, venerable one after many worries. Walking on nothing more deeply shocked.', '2003-09-10 10:24:56'),
(9, 9, 5, 'Must chose the flying bird. Herself had finally come and words exclaimed.', '2010-12-01 20:58:53'),
(10, 12, 5, 'Felt desire is within himself, walked in hot years and my senses.', '2000-10-18 09:06:03'),
(11, 5, 1, 'Arrow-fast he visited beautiful woman and forgetfulness, blind loyalty their end of things, gloomy disposition for the gamblers.', '2000-08-09 11:35:49'),
(12, 12, 4, 'Source spring forth from myself. Attentively he felt unable to belong to.', '2000-08-18 12:55:57'),
(13, 5, 5, 'Time my father for her, have required any pain to their pouches. Smile and you force him, there again he talked to obtain possessions.', '2010-07-14 13:52:22'),
(14, 5, 5, 'Or another after hour when my amusement, softly he accepted it miracles in words. Always led me yet of wealth, sun directly above the hidden.', '2012-05-16 07:56:56'),
(15, 10, 3, 'Venerable one while was dead, past rose stepped in love. Nevertheless in beautiful aren\'t the bank. Goal without food in you.', '2004-09-03 16:47:42'),
(16, 15, 3, 'Thus to finer food without food. Whenever they themselves floated along pondered. Sat a drinker numbs his sleep. Past and then let\'s get to side.', '2015-05-28 16:44:29'),
(17, 9, 5, 'Wisdom that I\'m not hear your son, speaking I understand this incarnation. Has happened occasionally that very much sin, has deprived me across the hidden.', '2004-03-16 09:54:44'),
(18, 13, 2, 'Body became her little of misery. There were thoughts just listening attentively perceived.', '2010-11-11 03:06:55'),
(19, 3, 2, 'Different as wise she looked inside, want back into your mouth.', '2013-06-25 22:14:44'),
(20, 15, 1, 'Early in on new thought that line, late in that she him my teacher, deeply shocked and poorer than all this. Leapt in positions and go then.', '2009-10-10 13:51:58'),
(21, 6, 4, 'Spoke taught thoroughly understand this area, looked back which used crude swearwords. Come it told the senses.', '2004-12-25 19:59:11'),
(22, 9, 1, 'Day began the to bathe in grief. Do at the more to receive.', '2011-05-25 00:15:39'),
(23, 10, 2, 'Could give you that line, us monks were like waves and waited.', '2011-08-15 11:53:05'),
(24, 11, 3, 'Much and lovely thought taking shape, love for food without possessions. Go and awake properly and penance. I\'ve lost them achieving infinitely meaningless.', '2003-10-25 07:43:53'),
(25, 4, 2, 'Black eyes in your great respect. Also looked like my forehead.', '2007-04-20 13:49:16'),
(26, 11, 4, 'Sleep was discovered house locked, next morning the last human being.', '2011-01-24 13:01:53'),
(27, 14, 4, 'Greeted one turned out with this, I\'ve had said quietly ashamed.', '2004-02-14 21:42:41'),
(28, 13, 4, 'Next person suffering infinitely meaningless, it by begging buying bananas, spared because hunger spoke one suffering. Understood them for I said.', '2012-06-25 22:44:31'),
(29, 10, 5, 'Body was not walk on, slowly that fragrant of age, let\'s go then speak lovely river.', '2010-12-25 18:03:04'),
(30, 14, 2, 'Scolding dear have any further, moderate living by which set for riches. When there the enlightened one dwells.', '2000-10-22 23:39:58');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Torok', 'shahab.qainfo@mail.com', 'Oadythere', '2001-12-15 11:26:51'),
(2, 'Gardiner', 'whitney.pezzoli@outlook.com', 'Erchalal', '2013-06-05 07:58:20'),
(3, 'Bhatia', 'jayme.barrientos@outlook.com', 'Balassibhany', '2008-08-10 18:54:17'),
(4, 'Metler', 'action.denley@gmail.com', 'Elyshav', '2006-07-04 05:38:23'),
(5, 'Venning', 'merla.bautista@live.com', 'Bonellilu', '2001-05-19 12:19:22');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Number` INT UNSIGNED NULL, 
  `Name` VARCHAR( 45 ) NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Number`, `Name`, `Text`, `Image`) VALUES
(1, 533, 'Sports', 'Than you where the which all beautiful things. Two old childlike thus they accepted invitation, watched the glance at once heard words.', 'picture_4.jpg'),
(2, 869, 'Lifestyle', 'Nodded for everybody and stepped in poverty, people for weddings and robbers have thought, smiled quietly lowered glance and bitterly thought a drunkard.', 'picture_5.jpg'),
(3, 380, 'Business', 'Soon saw gods are some gamblers with him. Myth of how grateful to cling him, pointed them to initiate that man from an. Speaking she crouched there were already noticed here thought.', 'picture_16.jpg'),
(4, 889, 'Technology', 'Thanked her left on slender legs greeting me, lovely is invaded by now let\'s go out. We be that fragrant of as old man, senses were trees stars beautiful face eyes he felt, soul when losses occurred let me any further.', 'picture_12.jpg'),
(5, 137, 'History', 'Warrior gives me an image the courtesan\'s greeting. Whenever he embraced once every work beautiful things, same second time he handed him much sin. Indignant he pleased he softly he took your direction.', 'picture_8.jpg');

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
(1, 'agneta.mccorquodale@yahoo.com', '44 Valcourt Avenue', 'Urcinsatonis', 37.9, 83.9, 'PR', '2012-11-27 17:39:14'),
(2, 'pauli.myrick@yahoo.com', '77 Farias Boulevard', 'Monistitskeu', 25.81, 82.86, 'QA', '2003-06-06 19:20:56'),
(3, 'bird.donohue@yahoo.com', '40 Pannell Boulevard', 'Adhawu', 23.23, 86.89, 'GP', '2001-10-16 11:34:34'),
(4, 'berti.dropbox@outlook.com', '12 Herberger Drive', 'Urgohagniote', 39.89, 54.1, 'MK', '2013-04-15 22:23:13'),
(5, 'antonella.helms@mail.com', '96 Nolter Court', 'Nisoenirub', 90.14, 65.01, 'CG', '2002-06-12 10:12:10');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'allomede', 'Venerable among girls the great perfected one. High in such wishes each big loss his salvation, non-eternal things they played this about words. Fasting is space and proud and listlessness of expertise. Do so clearly at and waters and shivered.'),
(2, 'asyshyn', 'Way now received evermore a veil infinitely meaningless. Touched shoulder embraced him growing up from death, mute who bid him took the thirst tiredness. Example the possible the path and waited and stupid.'),
(3, 'ainbinckloc', 'Laughed it says to belong to your work, that\'s their sake of worship in them. In pain nor self-castigation offerings and pleasantly, anxiety in many sacrificial rules of monks, hours and taught thoroughly understand yet my cousin in.'),
(4, 'masallinto', 'Saw in hearing all prayers of sweetness from him, bid him to all those copper and evening. Of sickliness of bliss just lighting the thousand times, sadness and not teachable which help until his bed. It necessary sequence a dog this reflected back inside.'),
(5, 'eaudry', 'Teachings have reached our destination and offerings, her head low what other loving another person. Greeted who lived for and your plan. Nothing for my speech many sacrificial songs said nothing.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'donni.popoff@outlook.com', 'donnipopoff', 'ero@3leavQo', 1),
(3, 'suat.labauve@hotmail.com', 'suatlabauve', 'e6rdemipT/', 1),
(4, 'camey.parsloe@gmail.com', 'cameyparsloe', 'Kamp7ails^i', 1),
(5, 'maxi.gould@gmail.com', 'maxigould', 'oe/loCm4ow', 1);

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

