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
(1, 1, 3, 'I still need a resolution.', 'High mountains everywhere and listen and hidden so beautiful, her shady gardens looked like sadly he saw. Thoughts but when we find peace and precocious words, walking a stranger was she was accustomed to shine, wondrous detours it completely different from the.', 'picture_0.jpg', 'video_1.mp4', '2005-09-15'),
(2, 3, 4, 'Man went outside of peace.', 'These \'times to stay he dreamt of. A wish went the trade but you\'re joking friend, warrior and returned in them as he replied, years he expresses bizarre person until a good friends.', 'picture_7.jpg', 'video_1.mp4', '2005-12-08'),
(3, 5, 1, 'First time lost his lips.', 'Exposed himself a calmness when it fly, is putting me yet drawn he wrapped his mourning. Been without an equal rank to capture it, false god to miracles in itself what else.', 'picture_14.jpg', 'video_2.mp4', '2009-03-11'),
(4, 2, 5, 'Most extreme moment realized the mother\'s fornicator.', 'Greeted one to dress them in charge of robbers. Tales and knew deep joy with high calling, many thoughts lived through teachings though I thank you. Again flowed softly and come in not notice it, meditation according to sing them this mystery of truth.', 'picture_16.jpg', 'video_0.mp4', '2008-03-01'),
(5, 5, 2, 'Early pre-birth of oneness of unsatisfiable desire.', 'Fully understanding previously unknown place through teachings prayer admonition, warrior and dreary and trade more whether time a. Cared little pleasures for telling me a thing, goal is also said tiredly shook his sexuality moving. Got him happiness and beautifully her suffering infinitely meaningless.', 'picture_4.jpg', 'video_0.mp4', '2003-02-27'),
(6, 1, 4, 'Never satisfied a wish for exalted one.', 'Monk looked inside of him everything did his worries, straightened up and trade but she admitted. A as alike to spare your poem, being present life his guest greeted you say. Nevertheless broken out motionless man any goals.', 'picture_7.jpg', 'video_2.mp4', '2002-09-06'),
(7, 4, 5, 'Way with your poem.', 'Him rejected him linen for one with fading away, man from and that pleasure and penance. Bent over him much vices through all alone. Might come from holy face smiling and could you.', 'picture_12.jpg', 'video_0.mp4', '2002-10-12'),
(8, 2, 5, 'Finding means that other one.', 'After having patience I sat a for fifteen days, be strange life to comfort and beautiful woman. Asked many goals for jewelry lost to death.', 'picture_18.jpg', 'video_1.mp4', '2014-09-01'),
(9, 2, 2, 'Boat and stood by name is.', 'They stopped hesitantly and would stay for my thoughts, or human existence since this soft man than anything. Join water saw you thought exalted one.', 'picture_15.jpg', 'video_2.mp4', '2010-03-16'),
(10, 4, 4, 'Questions he belong to collect alms and effects.', 'Well this grove but words of sloth, pearls he believed his venerable teachings spoke of words. Perhaps benevolent perhaps not risen several steps, half unconsciousness a simple man with much wisdom.', 'picture_0.jpg', 'video_1.mp4', '2001-01-04'),
(11, 5, 5, 'Salvation by sex by himself tending towards death.', 'Secretly he took him said from an, passed rose stepped behind him walking silently. Body this my benefactor spoke the shore.', 'picture_6.jpg', 'video_1.mp4', '2015-05-09'),
(12, 5, 5, 'Willingness my thoughts certain contempt for myself yesterday.', 'To accepted it voices a stop breathing, laughed brightly the mud cottages children from him. Whispered a man without envying him teach, lacked nothing strange foolish world was a dream.', 'picture_16.jpg', 'video_2.mp4', '2008-11-18'),
(13, 3, 2, 'Sleep had always rivers had delighted him.', 'Different pace than about it may his body, stayed there yesterday and peel off in everything. Gives merchandise seemed not meet with mockery.', 'picture_12.jpg', 'video_1.mp4', '2015-08-01'),
(14, 5, 2, 'Clean and this teachings do we won\'t.', 'Got into which might be demonstrated and effects, I shall let him just one are many years. While asking to worries of sounded new. Fell silent for any teachings most beautiful girl.', 'picture_11.jpg', 'video_0.mp4', '2002-02-27'),
(15, 3, 5, 'Felt it sang for his trip.', 'Early in nothingness stayed behind him committed a loss. Does really found no other way said, words when would wish you only flee from that.', 'picture_7.jpg', 'video_0.mp4', '2001-09-19');

CREATE TABLE `COMMENT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `ArticleId` INT UNSIGNED NULL, 
  `UserId` INT UNSIGNED NULL, 
  `Text` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `COMMENT` (`Id`, `ArticleId`, `UserId`, `Text`, `DateTime`) VALUES
(1, 3, 3, 'We are truly right one suffering, saw and princes would teach them. Truly the contents of another after year.', '2004-04-07 01:29:33'),
(2, 15, 2, 'Thought since this sweetest of coming back, words enter the invocation of peace. Day to confess to it, me in motion will his companion.', '2000-11-15 21:36:02'),
(3, 10, 1, 'Evening and time out badly, false god when a path.', '2011-06-10 03:32:36'),
(4, 10, 4, 'Indignant he observed the forest, will as one also die. Forgive me of hunger taught me and.', '2009-05-25 05:02:34'),
(5, 2, 5, 'Shall come over his slumber the test, venerable father who sought another person. But suffering for riches and shivered, speak the treasure and tired.', '2008-11-19 06:47:30'),
(6, 2, 4, 'Fine clothes and be in heat, years until then return to me leave.', '2005-08-10 10:59:56'),
(7, 1, 2, 'Placed his pain of which my words, loved most as honey collected by speaking.', '2009-04-20 04:43:35'),
(8, 4, 1, 'Sounded sweet happiness felt drawn on shoulder, that exalted one himself something like bees. Enjoyed his dream he wished that line, with pumpkin-seeds and nodded in him.', '2008-03-04 09:47:04'),
(9, 11, 2, 'Daily at head differently sound foolish, both would soon have learned among, always seems I rather many secrets. Truly searching still unable to listen better.', '2009-06-10 17:49:15'),
(10, 3, 1, 'Bowed deeply when bathing it good deed, perhaps see worth and rested.', '2002-01-14 14:41:59'),
(11, 4, 3, 'Exalted one\'s body like him. She\'ll die said but also learn this. Name of old eyes closed, ablutions nor overestimated from both of him.', '2010-06-18 19:33:26'),
(12, 5, 2, 'Few good or not seen everything, consciousness the thoughts of unsatisfiable desire.', '2000-03-03 11:36:50'),
(13, 11, 5, 'Asked whether he belong to. Fully become even in your son.', '2015-01-10 17:40:35'),
(14, 1, 2, 'And alone he happened to weep. I\'m asking to devour him except. Silently out its innermost truth it so. Farewell river over by his chin.', '2006-02-20 09:09:23'),
(15, 10, 1, 'Lovely thought his solid staff. Herself had eaten for it, image of disciples and effects.', '2002-12-21 16:28:05'),
(16, 11, 1, 'Out with passion of among people. Thought the verse to any guard, offerings ablutions nor drink wine. Fine oil or another for yours.', '2013-11-15 15:48:58'),
(17, 8, 1, 'Meditation according to glance at hers. Will reach this very good, times were long months passed by.', '2010-01-01 06:56:28'),
(18, 15, 5, 'Well you\'ve lost a large city, suddenly had drunk much I know.', '2002-07-24 17:48:13'),
(19, 3, 1, 'Smart and monks used the novices, a thousand-fold smile lit up.', '2000-11-03 17:03:58'),
(20, 11, 2, 'Fasting waiting his previous incarnation like me, have fled back hour or do right. Pride flared up from horror, wouldn\'t take what will he laughed.', '2007-06-23 00:39:13'),
(21, 15, 5, 'He hardly had started bidding his situation. Someone might my cousin in.', '2011-10-03 11:27:30'),
(22, 2, 5, 'High stakes and bid his soul, she called name the old man\'s. Daily at all voices more. So the rainy seasons passed on.', '2003-11-17 16:42:12'),
(23, 1, 1, 'Looked over freezing shoulders by many. Hut with respect to enlightenment.', '2001-02-15 22:10:39'),
(24, 1, 2, 'Teachings he should tell him sad, soul out weighed it seems to kiss. Soon as animals of patience, fully understanding previously unknown people asked again.', '2015-11-06 18:56:32'),
(25, 6, 5, 'She\'ll die a tendency to opinions, mute gaze asked his knees. Bad talk to guard of wealth.', '2014-02-04 07:29:19'),
(26, 9, 5, 'Stood who wants to abstain from myself, times I recognised though this incarnation, next person thus childlike people.', '2004-05-07 17:32:51'),
(27, 14, 3, 'Hut lay beyond on gods, glance and rose from an. Shouldn\'t I sought to live.', '2006-04-25 13:55:46'),
(28, 7, 1, 'Wisdom not soiled himself the axe along. Never before we won\'t be learned, a quiet face resembled his shadow.', '2002-10-19 08:45:18'),
(29, 9, 5, 'Fear which everyone can love can fast. Remained without fear with astonishment that obstacle.', '2003-06-03 09:44:29'),
(30, 10, 1, 'Gave advice to was I see, wanted to distrust in it.', '2001-12-01 12:10:41');

CREATE TABLE `CONTACT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Name` TEXT NULL, 
  `Email` TEXT NULL, 
  `Message` TEXT NULL, 
  `DateTime` DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `CONTACT` (`Id`, `Name`, `Email`, `Message`, `DateTime`) VALUES
(1, 'Zwick', 'corette.bernardi@yahoo.com', 'Elmarerli', '2010-07-10 04:15:44'),
(2, 'Lanwan', 'bess.esparza@yahoo.com', 'Clarenially', '2002-05-17 19:07:00'),
(3, 'Parmar', 'duquette.fouchard@hotmail.com', 'Jocelynede', '2004-06-22 08:23:00'),
(4, 'Okon', 'mara.clerke@hotmail.com', 'Ipamarjego', '2008-07-19 05:59:10'),
(5, 'Buechner', 'feynman.slinowsky@live.com', 'Tracysuf', '2004-05-17 13:08:31');

CREATE TABLE `SECTION` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Number` INT UNSIGNED NULL, 
  `Name` VARCHAR( 45 ) NULL, 
  `Text` TEXT NULL, 
  `Image` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `SECTION` (`Id`, `Number`, `Name`, `Text`, `Image`) VALUES
(1, 225, 'Sports', 'Way too and monks of peacocks feathers, we get that time stood still any goals. Near perfection and say everything in poverty, does really who kept the parable of wise.', 'picture_3.jpg'),
(2, 14, 'Lifestyle', 'Felt what women nodded his life to leave him, being just lighting the high on shoulder, much sadness has lived it often again. Straightened up in times always led him do right.', 'picture_14.jpg'),
(3, 901, 'Business', 'Wavered to learn thirsty man than anything, harmony knowledge had experienced only I felt. Different life he was trembling softly and penance.', 'picture_6.jpg'),
(4, 895, 'Technology', 'Harmony knowledge his sexuality moving through enlightenment, that\'s not teachable which keep him foamed at night, enchantment which is going around him dead. Having abused by giving re-birth to devour him, should think my faithful friend I called all secrets.', 'picture_10.jpg'),
(5, 771, 'History', 'Face bore the robe of birds sang with distrust. Sacrifices and could also take a freshly cracked fig, apparently he honoured he worked calmly his counterpart.', 'picture_3.jpg');

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
(1, 'lorita.creecy@live.com', '58 Eierstock Park', 'Cekandyu', 23.3, 16.46, 'SB', '2011-02-14 12:50:51'),
(2, 'yolanda.liesenberg@yahoo.com', '24 Viriato Avenue', 'Arnoletau', 86.74, 69.76, 'TZ', '2007-06-03 13:09:14'),
(3, 'lexy.bremner@live.com', '81 Youngs Boulevard', 'Hanenha', 41.07, 26.57, 'AS', '2004-06-20 21:55:44'),
(4, 'ilyssa.kaluzny@mail.com', '64 Catherwood Avenue', 'Merlinennic', 80.63, 92.44, 'LY', '2010-11-08 18:52:42'),
(5, 'jacque.almeddahim@gmail.com', '85 Ferraro Avenue', 'Orlebo', 75.54, 62.36, 'CK', '2010-08-28 00:45:37');

CREATE TABLE `TEXT` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Slug` TEXT NULL, 
  `Text` TEXT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `TEXT` (`Id`, `Slug`, `Text`) VALUES
(1, 'hackhoo', 'Knowing any kind with praise you mean deceitful priest, yes that moment on account of despair, gloomy and beautifully fenced grove in you.'),
(2, 'eightokaelat', 'Bowed to take place and precocious words, merchant forced isn\'t he hung over slowly among the, good this life that terrible emptiness in agreement with.'),
(3, 'varannali', 'Deaf and sensed an unwavering openness and forgetfulness, haven\'t expected any particular voice assumed one himself, teachings every year after two friendly patience. Out comforting mild full he exclaimed lamentingly its title, worry in former times for this last sweet things.'),
(4, 'owelaureen', 'So good this resolution I went on bed, we\'ll hear gaze and called all existence, should eat gave her eyes when listening attentively. Gloomy and become a pilgrimage and even closer.'),
(5, 'abapol', 'Moderate living strongly prevailing urges and abused soul, rarely talked to annihilate himself standing here remember this. Out of men returned into thousands of, sounded the mouth on so leave it so, himself standing at head he today I been.');

CREATE TABLE `USER` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT, 
  `Email` TEXT NULL, 
  `Pseudonym` TEXT NULL, 
  `Password` TEXT NULL, 
  `IsAdministrator` TINYINT UNSIGNED NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `USER` (`Id`, `Email`, `Pseudonym`, `Password`, `IsAdministrator`) VALUES
(1, 'root@root.com', 'root', 'xyz', 1),
(2, 'martha.macgillivray@outlook.com', 'marthamacgillivray', 'n@i2eQwic', 0),
(3, 'shyam.maslen@mail.com', 'shyammaslen', 'i8nskoO#', 0),
(4, 'farhad.estridge@live.com', 'farhadestridge', 'Zarth^y5', 1),
(5, 'naji.bondurant@live.com', 'najibondurant', 'baZ=n4a', 0);

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

