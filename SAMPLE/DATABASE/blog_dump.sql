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
(1, 2, 2, 'Hours sat on hers.', 'Stayed motionless man from who kept the woman, I wished to side lived with one is fasting, tomorrow and renewed themselves intended to such hair. Fine clothes on beautiful courtesan had changed.', 'picture_9.jpg', '2012-10-06'),
(2, 3, 3, 'Herself had again at him.', 'Bowed touching him brightly red smart mouth, smiled at some among carters and empty rumours. Blind love stronger was every gesture of wealth, flesh and with guilt from an act upon himself.', 'picture_11.jpg', '2002-10-01'),
(3, 1, 2, 'Herself had succeeded in soul read for riches.', 'Near which wondrously reminded him forced himself, opened mouth which had soon stop breathing. Merchant and himself like to learn this, did see him go any given upper garments. Nodded for directions for long dreams flowed any more.', 'picture_0.jpg', '2010-07-22'),
(4, 2, 2, 'Opposite bank and disappointments and it all.', 'Pearls he walked the bananas in you recognise me. When you waiting for not waste words. Smile sit and anoint it doesn\'t satisfy him, heard this all value and read this.', 'picture_12.jpg', '2001-04-19'),
(5, 5, 2, 'Too I followed it.', 'Wound also become like into her sedan-chair, being as much with small children with me being. Occasionally he sensed how after some among other one, pointed him on his goals for yourself.', 'picture_11.jpg', '2003-07-17'),
(6, 3, 5, 'Wonderful verses all of worship.', 'Conducted his stakes and washing his shadow, mute and done away nobody knew so dear friend. Have it very powerful noise then let\'s do this, propelling themselves and secret which might be its contents.', 'picture_1.jpg', '2007-01-26'),
(7, 3, 2, 'River over in magic or she admitted.', 'After each one seeking to cling him, mute struggle of men not meet on hers. Wheel of your path rose the sound of rice-cake, yes that you\'re saying it does who seeks unity. Hours of thoughts shall find in himself.', 'picture_13.jpg', '2010-05-07'),
(8, 2, 1, 'Touched and great vomiting he found.', 'Stared at his spear-carrier his pouch and a, have achieved by means of teachings be content, wanted to earthly things had compared himself fall. Down from me have sat down upon himself, I\'ve neither meat nor the sacrificial songs.', 'picture_16.jpg', '2006-09-09'),
(9, 3, 1, 'It\'s not as wise one.', 'Don\'t worry or animallike manner and life from death, soul sent for little which more to receive, more tired felt its essence of are wise one.', 'picture_15.jpg', '2004-10-12'),
(10, 3, 4, 'Words while stopped as bathing it yet sir.', 'Consciousness returned in memory had company the paper, remained forever that you\'re searching said the rest. Saw merchants trading with piled up impetuously hunting. Should incessantly it sucked up but it importance. Bent down his deep joy any sleep.', 'picture_19.jpg', '2010-02-07'),
(11, 5, 5, 'First customers came from it.', 'Urged him everything he sat this bright smile, wanted for you sir is the run-away, being annoyed and wanted for yourself by him.', 'picture_17.jpg', '2015-03-10'),
(12, 1, 5, 'Shouldn\'t I also remembered everything can think.', 'Rest under her bed a searching thus you yesterday, false god when playing as poor in love, been told about himself closely to treat the rice-field. Well it must know you will never one-sided. Occasionally they built the alms-dish of rebirths.', 'picture_8.jpg', '2001-11-25'),
(13, 1, 2, 'Scent of other way my friend.', 'Young had always stand the priests determining the rice-field, clothes and duties of speech many forms of all. Glance before and quietly and impatiently heading for her, well it full the white in beautiful trees.', 'picture_13.jpg', '2014-12-04'),
(14, 1, 2, 'Walking silently went the for him.', 'Pleasure also in bliss just concealed anxiety, yet you abandon the loss that secret from death. Means that proud state of humans in memory. Arrow-fast he handed him like you ran away.', 'picture_8.jpg', '2001-07-16'),
(15, 4, 5, 'My father\'s son she had drawn by letter.', 'Cared little while inhaling of physical form of that, when has reached a spiral we already on water. Smiling face there before seen that perfected one.', 'picture_5.jpg', '2008-07-08');

CREATE TABLE `COMMENT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `ArticleId` INT UNSIGNED NULL, 
  `UserId` INT UNSIGNED NULL, 
  `Text` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `COMMENT` (`Id`, `ArticleId`, `UserId`, `Text`, `DateTime`) VALUES
(1, 10, 3, 'Let\'s do yourself a timid voice, boy did see is full, just outside of everything that teachings.', '2013-08-12 21:46:53'),
(2, 4, 3, 'Spoke sadly he dreamed this, write the seams and denial. Deeply thinking these habits of physical form, clean and dreary and could you.', '2015-03-20 23:34:06'),
(3, 7, 1, 'Putting himself closely in himself. These many brothers and salvation from myself.', '2004-09-02 16:43:37'),
(4, 12, 1, 'Monks came flowing to dust had become, any passion came and patience.', '2010-12-25 06:30:03'),
(5, 1, 1, 'As much with deep sleep. Lost his will seek to read. Perhaps have received evermore a childlike person, distorted from our exercises required.', '2015-01-22 12:50:03'),
(6, 8, 1, 'Most foolish acts of elephants of him, that\'s not flesh and pale from that.', '2009-02-10 23:18:38'),
(7, 15, 5, 'Kindly he on by bees, bid him so be any given.', '2012-12-24 05:43:51'),
(8, 4, 4, 'Deep solemnity he hesitated for you, cared little bit different goal.', '2013-10-14 03:33:54'),
(9, 2, 5, 'Senses against will go then, asked what young woman\'s dress at night. Placed his guest while with ecstasy, indeed as good he tilted his course.', '2003-06-04 08:46:14'),
(10, 2, 2, 'Didn\'t you call climbing a hunter, same fate with me which used to.', '2001-07-22 07:35:13'),
(11, 14, 1, 'Never fully become great pity. This from walking along pondered.', '2011-07-23 08:53:39'),
(12, 4, 2, 'Stared into her peacefully dead face, pearls he slowly she asked it, meditation there aren\'t capable of words. Lost colour and blissfulness of you.', '2014-01-08 11:32:03'),
(13, 5, 2, 'Enjoyed his disciples venerable chiefly his way, wonderful sleep he killed his error. He after a lazy official in grief.', '2010-01-16 12:05:49'),
(14, 13, 1, 'You\'ll hear your father\'s face. Where it if he told him, she owned locked the goal, seeing into his caste in the.', '2004-07-11 01:31:47'),
(15, 15, 1, 'Forgive me over shoulder with distrust, indeed been just as soft just consider.', '2005-03-02 06:10:55'),
(16, 2, 4, 'You\'ll find these clothes for you kidding. Won\'t and feet knew so often again, soon they may be true had become.', '2011-02-11 16:51:06'),
(17, 12, 5, 'Shimmered through teachings even fish felt fear, asked the heat and another time.', '2015-08-20 19:45:26'),
(18, 10, 2, 'Arrow-fast he embraced once again, for several days short numbing is small. According to whomever he wouldn\'t punish him, soul full of old eyes.', '2006-08-16 13:28:40'),
(19, 8, 2, 'Simply thus free thus advise me yet. False god had longed for, they\'ve become one nobody counted them.', '2014-07-09 05:25:37'),
(20, 15, 3, 'Scolding dear you\'ve learned among, again in order and patience. Exclaimed loudly and while asking. Remained thus blindly thus deeply.', '2008-03-19 17:35:30'),
(21, 4, 4, 'Wonderful and thin and teach you. Boy over in spite of thousands.', '2012-06-28 23:14:46'),
(22, 1, 4, 'Cared little boy when has become dead, hours looked back on that you. Myth this joy I\'ve found.', '2012-11-06 07:22:12'),
(23, 12, 1, 'Heard all beings with words, another for jewelry and worry said, forgive me stems from foolishness.', '2015-04-16 23:18:43'),
(24, 14, 4, 'It\'s not somewhere behind his knees, after every goal of followers of talk. Arriving at a carp with salutations.', '2007-01-02 04:06:20'),
(25, 2, 3, 'Majority of been so well from mine, I\'m recognising you ferryman like bees, latter had buzzed but destitute. Do business of more mockingly.', '2015-11-21 03:05:04'),
(26, 6, 4, 'Come let run along in secrets, let me when his childhood all this.', '2015-08-10 01:32:09'),
(27, 7, 3, 'Love them quickly you a child, fled that most always been searching. Hut my duty to gnaw at all, another one roll of sleep.', '2011-09-02 10:11:54'),
(28, 8, 2, 'These most hurriedly walking swiftly along, the still dwelling on pilgrimages and tenacity.', '2008-10-02 14:14:53'),
(29, 8, 2, 'These a look every look at all, this had soon saw anything of disgust.', '2011-06-26 02:25:57'),
(30, 8, 4, 'Still thus the corners of things, finding peace expressed in his companion. Felt death all yearning all friendship, look like stars of pondering.', '2009-06-28 15:29:20');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Ganness', 'huub.poulter@hotmail.com', 'Inoscor', '2012-12-08 03:05:30'),
(2, 'Sager', 'kimmie.eansor@hotmail.com', 'Morleynicy', '2012-07-18 02:35:42'),
(3, 'Chen', 'ediva.craggs@live.com', 'Ottodeges', '2009-10-24 00:40:54'),
(4, 'Prescott', 'alberta.deardurff@live.com', 'Aleber', '2011-06-05 08:18:43'),
(5, 'Muchow', 'leigh.chester@mail.com', 'Ientokuleve', '2014-11-05 22:29:34');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Number` INT UNSIGNED NULL, 
  `Name` VARCHAR( 45 ) NULL, 
  `Text` TEXT NULL, 
  `Image` VARCHAR( 45 ) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Number`, `Name`, `Text`, `Image`) VALUES
(1, 899, 'Bannister', 'Spared from had obeyed the smart said tiredly. These words behind the perfect chain which was. Dreams came he still has died on an error.', 'picture_7.jpg'),
(2, 570, 'Fullum', 'Talking and man thought he speak the golden cage, teachings most suitable day before I went back inside. Mumbled a sadness and as yesterday I used to, farewell from under its end to make you need.', 'picture_11.jpg'),
(3, 143, 'Moxley', 'Yesterday of magic everyone can understand this. You read out for comfort we reach any goals, might oppose this once as himself despised. Against the deepest meditation of wise one.', 'picture_12.jpg'),
(4, 173, 'Pippin', 'Left on their life seemed like it is, sacrifices and bloody shoulders his impending death. Stayed for possession without judgement without me.', 'picture_8.jpg'),
(5, 646, 'Altadonna', 'He read and wait if it fly. Tell him embraced the exercises required any other, been such clothes I knock at night.', 'picture_13.jpg');

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
(1, 'kitty.winterberg@gmail.com', '38 Zabek Court', 'Elrinnes', 74.52, 35.12, 'BS', '2005-05-16 19:25:45'),
(2, 'lucilia.moorevigeant@gmail.com', '98 Alvi Court', 'Phaneerile', 55.88, 31.74, 'GN', '2002-07-25 08:16:23'),
(3, 'joete.psutka@mail.com', '14 Macchiusi Avenue', 'Alyren', 61.6, 97.13, 'PA', '2011-11-08 23:40:23'),
(4, 'cammy.klaudinyi@outlook.com', '97 Briard Court', 'Inghej', 50.36, 61.73, 'FK', '2002-10-11 23:04:44'),
(5, 'hugh.klutts@outlook.com', '38 Dupuis Alley', 'Iacodelilahi', 30.7, 25.6, 'VA', '2001-03-27 04:33:37');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'damakridste', 'Deep meditation he nodded in not destitute, rich house locked the thinking with ropes of that. Next person or whether living according to spell, enchantment which feel in speaking she also die. I searched I too felt cold void.'),
(2, 'ipithintoru', 'Stone and beautifully her the fair charming omen, thoughts this bright almost none but for himself. Understood them up and blissfulness between thoughts not answer.'),
(3, 'ampmimleu', 'All yearning got it rarely talked to listen, having passed by throwing out that teachings. Today he live to which they commanded. Smart less smart brown nipple of rebirths, somehow happened inside of kisses everyone had lost in.'),
(4, 'ivedaraladu', 'Me at night here was already as a basket. My benefit to kill in agreement with, warrior and food for permission my father, go out motionless stood not you were quiet.'),
(5, 'esselagu', 'Life the bow and hesitantly he asked, so thus unsuccessfully and laughed clearly at all. Indignation is very distant beach with sadness.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'josanne.cousineau@gmail.com', 'josannecousineau', 'anQ0-ce', 1),
(3, 'blondy.lingafelter@gmail.com', 'blondylingafelter', 'ok?u8Zyu', 0),
(4, 'roz.platerzyberk@live.com', 'rozplaterzyberk', 'al9yLl;a', 0),
(5, 'kazuo.ritz@live.com', 'kazuoritz', '3engi^V', 1);

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

