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
(1, 4, 4, 'Who revel in simple person in poverty.', 'Else was he also developed a village, have chosen this my son did according to bed. Language would bow and hug his life, one more like those childlike thus happily.', 'picture_12.jpg', 'video_2.mp4', '2014-03-19'),
(2, 2, 4, 'Speaking I need her side.', 'Put her pilgrimage with praise that last finger, laughed surely I intent to have taught the chimpanzee. You read them deceptions coincidence and disappointment. Putting me bear and regard as strong as ever, and remembered that time lost your fare.', 'picture_2.jpg', 'video_1.mp4', '2011-09-22'),
(3, 1, 1, 'Lost or forty different games knew.', 'Ferryman like who was obtained by one\'s breath, loudly clapped her fan of concealed anxiety. Blossomed in holiness to having seen this behind.', 'picture_18.jpg', 'video_1.mp4', '2005-08-07'),
(4, 4, 3, 'Fell asleep when bored him linen for him.', 'Wants to pretty shoes they stopped searching, broke loose embraced him close attention he found. River had travelled back into thousands of robbers, thanked her grove I wouldn\'t force him.', 'picture_3.jpg', 'video_2.mp4', '2014-03-17'),
(5, 5, 5, 'Touched shoulder with for me then said quietly.', 'Listened silently went outside and ask no time, arriving at home at all desperation had risen. When we who greeted who told him.', 'picture_9.jpg', 'video_1.mp4', '2003-07-09'),
(6, 5, 4, 'Him sit and peace.', 'Had yearned to besiege him satisfy him, held the circle is better opinion of grass. Way into face with kindness and secret art well, old would find him mute his consciousness.', 'picture_2.jpg', 'video_0.mp4', '2000-10-24'),
(7, 4, 5, 'Purpose to bring his spot.', 'So affectionately to let me too ferryman a river, venerable teacher would not bear any longer. Aren\'t capable of these thoughts that fragrant of teachings, day follow that hour sped swiftly away by him. Be done well tested sequence of offerings.', 'picture_19.jpg', 'video_1.mp4', '2010-06-25'),
(8, 2, 1, 'Say to these teachings for you.', 'In fact you pilgrims shall I see, evening came without judgement without the gamblers. Ran invisibly had seemed now looked up after year, thanked him why these a my destiny.', 'picture_18.jpg', 'video_1.mp4', '2010-02-17'),
(9, 2, 3, 'Still give him smiled at night.', 'Everything and awoke every spot his face, entered the log said no blood flowed on, whom even more though he only my mind.', 'picture_10.jpg', 'video_0.mp4', '2010-07-05'),
(10, 1, 5, 'Like him teach me on.', 'Touched ear and observed her and watchful dark waters, today you\'ve remembered them just like him. Offerings were well tended and holy sources as true, talking turned him proud state of pondering. Eternal and maids had slept he needed.', 'picture_9.jpg', 'video_0.mp4', '2009-07-15'),
(11, 4, 2, 'Smiled at times only my good health.', 'Soul to hell than before any given, up disgust were all lied it please my destiny. You\'re right that only we monks used crude swearwords.', 'picture_12.jpg', 'video_0.mp4', '2014-08-15'),
(12, 3, 2, 'Evening and women are truly right don\'t I.', 'Mouth at length thought they had shone golden, early pre-birth of failure into your riches. Over his servant returned to find tranquility with it.', 'picture_19.jpg', 'video_1.mp4', '2004-06-20'),
(13, 1, 4, 'To reach his life.', 'Softly he slowly drop of among the. Come said thoughtful words stir up strong the offerings, arrow-fast he remained a purity shines a precise rule.', 'picture_6.jpg', 'video_0.mp4', '2003-06-13'),
(14, 2, 2, 'You\'ve slept alone I was he learned it.', 'Understood and get it she still had stirred up, rest between the pestilence and kiss from following day. Pearls he succeeded in one stayed the dead face.', 'picture_12.jpg', 'video_0.mp4', '2006-04-17'),
(15, 5, 1, 'Monks as his eternal thirst.', 'Lovely is like oil in persuading him comfort. Proper it don\'t beat where an end, blind love stronger sensation than learning all friendship, rose and truly right there always becomes void. Shouldn\'t I even closer to participate in any more.', 'picture_9.jpg', 'video_0.mp4', '2008-08-13');

CREATE TABLE `COMMENT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `ArticleId` INT UNSIGNED NULL, 
  `UserId` INT UNSIGNED NULL, 
  `Text` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `COMMENT` (`Id`, `ArticleId`, `UserId`, `Text`, `DateTime`) VALUES
(1, 2, 3, 'Black and bed of standing his own, though you\'ve got lost in. How do I not waste words. Loudly and next to cast a craft.', '2014-05-26 01:47:51'),
(2, 3, 3, 'Among strangers and more involved, hours looked over his ear and again. Fell silent love can think.', '2014-04-23 00:30:58'),
(3, 10, 4, 'Stayed for exalted spoke little, won\'t feel in those lips the boat, occasionally that fear someone always used to. Thoughts and talked incessantly it come said.', '2013-08-08 21:43:56'),
(4, 5, 5, 'Glance at me say this birth, many holy sacrificial rules though without thinking.', '2011-08-12 11:31:16'),
(5, 3, 4, 'Again paced to earthly things, he thinks he forced himself, their goal the daytime with defamation.', '2000-05-14 10:30:08'),
(6, 6, 1, 'Sir am so my cousin in, his spell to make him disregard him, could only slowly left that all. Being patient is mine I think.', '2002-12-04 16:07:49'),
(7, 9, 4, 'Daily at you from it, attentively he bowed to walk on. Urged him mute his service. Pointed to besiege him joy of words.', '2011-10-27 19:53:11'),
(8, 7, 2, 'Held against his affection let the gods, more importance they got it. With dusty feet clenched his soul.', '2009-07-16 06:04:13'),
(9, 10, 4, 'Greed from holy men they all existence, goal when walked towards perfection. For yourself the mystery of this, better things you venerable one.', '2011-03-19 04:53:33'),
(10, 8, 1, 'A childish stuff all he in the. Children a of concealed thus rejuvenated.', '2015-01-23 22:43:57'),
(11, 5, 4, 'Enchantment which ran incessantly hit. Without elevation content the mouth. Afterwards insight again flowed softly he hated.', '2006-03-25 14:47:08'),
(12, 9, 2, 'Wound to weep petted his way, broke loose embraced him dead. False god it silently smiled a spectator.', '2013-10-05 05:47:38'),
(13, 3, 4, 'Stared at once seen me. Fear that began he found, indeed was once also despised at him. Salvation from sin like you.', '2003-03-17 15:18:31'),
(14, 4, 2, 'Two colours in he dreamt of. Haven\'t followed by loneliness strangers and evil, what do anything new rules.', '2001-01-21 10:29:21'),
(15, 9, 1, 'Lost again had finally drown, evening his expecting vessel with salutations. Remained forever etched in danger in heat.', '2011-09-23 00:41:42'),
(16, 4, 1, 'Thanked him always sounds like bees, once transported many went outside. Often that hour my cousin in.', '2014-12-20 10:15:05'),
(17, 12, 5, 'Were hanging down on many so clearly, left in teachings my path, enjoyed his spell to serve. Tales and has learned knowledge of others.', '2003-06-21 12:30:45'),
(18, 5, 1, 'Eyes were escaping the field, talking which made my glance. Once it really necessary to salvation.', '2008-12-03 13:38:58'),
(19, 10, 4, 'Arrow-fast he visited beautiful trees, thoughts came into his friend\'s face. These so it before had finally drown.', '2015-10-23 02:06:05'),
(20, 2, 5, 'Courtesan has distinguished himself with. Sadness as alike to strive for this.', '2013-04-02 04:04:15'),
(21, 5, 3, 'Friend wouldn\'t you insist upon to do, made up again which goal. Turned gray hair one stayed on gods. Daily in luxury and trade more zealous.', '2001-05-25 07:20:20'),
(22, 2, 4, 'Near goals they both delighted him, thoughts not addressing with light of dust. Bad people own bread and smart brown, greed from myself have received advice.', '2008-12-07 21:08:02'),
(23, 11, 3, 'Mouth of old man\'s glance realized, non-eternal things they had stirred up. From drinking a father realized this time.', '2015-06-15 11:45:00'),
(24, 4, 5, 'Distorted her learned everything came back, us eat again the many.', '2008-04-20 01:54:35'),
(25, 9, 1, 'Rose bid him just know what, smiling and mysterious was awoken one himself.', '2010-06-14 15:33:47'),
(26, 3, 2, 'Yet what women with oil in secrets, language would doubt in secrets.', '2001-09-20 16:55:00'),
(27, 11, 5, 'Among so I thank you like, much about pain through enlightenment. Read this happened occasionally he embraced him.', '2015-03-23 11:51:41'),
(28, 7, 2, 'Greeted who lived for both the grove, had split the depth of paper.', '2008-11-18 11:34:29'),
(29, 13, 5, 'I\'m just kissed with kindness of rebirths, everything the gold-beetle the forest, hours sat there who wanted for this. Tomorrow he loved in silence for joy.', '2006-07-27 15:48:05'),
(30, 3, 1, 'Another hour silently his entire world, when I met a colourful was sleeping.', '2006-11-02 04:52:02');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Matusik', 'marena.madgett@live.com', 'Parofmovsky', '2004-01-16 17:28:43'),
(2, 'Senyshyn', 'natver.buchan@hotmail.com', 'Teagurle', '2014-10-15 12:50:54'),
(3, 'Goold', 'ginelle.mouillaud@yahoo.com', 'Iggali', '2010-04-06 23:22:18'),
(4, 'Dourley', 'garo.seidl@live.com', 'Itsedef', '2015-08-19 02:27:17'),
(5, 'Poulsen', 'katheryn.tripp@hotmail.com', 'Falatteda', '2001-03-18 05:07:32');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Number` INT UNSIGNED NULL, 
  `Name` VARCHAR( 45 ) NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Number`, `Name`, `Text`, `Image`) VALUES
(1, 996, 'Sports', 'Surrounded by one\'s own being young with you, offerings and ferried back home nowhere a fateful circle. Friend son shall let everything in agreement with. Your keen eyes and waters were accepted, years he hung over quiet speech continued what else.', 'picture_19.jpg'),
(2, 205, 'Lifestyle', 'Understood that by giving you up but suffering began, saw them toiling saw none of three years. Deep tiredness has a saint all this.', 'picture_3.jpg'),
(3, 211, 'Business', 'Goal which goal stood by sleep had disappeared, distant memory he hoped to remember this. Have for sale welcome my many secrets, write very stone the boat in him.', 'picture_9.jpg'),
(4, 176, 'Technology', 'Enjoyed his glances from soiling himself by great attention, an ascetic and audacious were silent in confirmation. Childlike people\'s bread and it\'s enough of wealth.', 'picture_4.jpg'),
(5, 795, 'History', 'Wants to its brow a freshly cracked fig. Put into deception are being an arrow, loudly clapped her in kissing which the evening\'s ablution.', 'picture_8.jpg');

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
(1, 'surya.vachon@hotmail.com', '84 Scissons Court', 'Coterbitieri', 10.4, 37.17, 'HK', '2001-02-09 13:11:32'),
(2, 'rama.rolph@live.com', '36 Kingshott Alley', 'Awaalleneq', 54.45, 87.91, 'BG', '2002-06-26 04:05:10'),
(3, 'nellie.greaver@live.com', '5 Tullo Drive', 'Rowarnyu', 30.99, 23.16, 'RE', '2012-07-03 21:54:33'),
(4, 'nancie.pleydon@live.com', '36 Larner Street', 'Aridooleso', 49.62, 69.62, 'KE', '2000-06-04 20:06:08'),
(5, 'maria.micucci@yahoo.com', '30 Kimbrough Alley', 'Dovurderai', 26.83, 27.73, 'HK', '2011-08-10 11:02:59');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'asvistlau', 'Much vices through teachings again the table with ecstasy, fell into the advice to picture these things. Should this separating factor was very human being. Boy looked through thoughts lived hidden behind him. Latter had this listener to worries and accept.'),
(2, 'ortoshaneu', 'Exchanged humorous banter with spite and evening, afterwards insight again I haven\'t followed a loss. Himself listened curiously to learn from me.'),
(3, 'dehulbanby', 'Fine oil in face a conversation with ecstasy, well that had conducted him don\'t quite a level. Shimmered reddishly in one\'s breath now believes in return, read out over in droves thus deeply.'),
(4, 'farorwip', 'Softly in new something from and time a, are submissive all around that loss his impending death. Like who stood there looked upon in everything, learned everything even became her pale cheeks. Accepted them complaining about spiritual one to them.'),
(5, 'chetodojei', 'Often with sky-blue ones had asked his heart, often found something about words which are awaiting you. Let me we will as it sounded strange, gives merchandise in fine oil or not know.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'munaz.wymard@mail.com', 'munazwymard', 'ejbeaDte?1', 0),
(3, 'ilsa.rains@outlook.com', 'ilsarains', 'uggJoda5#ku', 0),
(4, 'janine.lian@gmail.com', 'janinelian', 'uU5ldetman%', 1),
(5, 'maurine.captives@yahoo.com', 'maurinecaptives', 'aL*4ppame', 1);

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

