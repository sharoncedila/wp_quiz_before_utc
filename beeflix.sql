-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 09:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beeflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE `episodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `movie_id` bigint(20) UNSIGNED NOT NULL,
  `episode` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `movie_id`, `episode`, `title`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Superstar vs. Super Loser', NULL, NULL),
(2, 1, 2, 'Tell Me Your Wish', NULL, NULL),
(3, 1, 3, 'Kwon Si-Ah vs Kwon Si-Yeon', NULL, NULL),
(4, 1, 4, 'Beginning of the Miracle', NULL, NULL),
(5, 1, 5, 'Between Romance and Anxiety', NULL, NULL),
(6, 1, 6, 'I Do Not Want to Go Back', NULL, NULL),
(7, 1, 7, 'Chubby Girl\'s Charming Point', NULL, NULL),
(8, 1, 8, 'Secret of the Necklace', NULL, NULL),
(9, 1, 9, 'If We Stay the Same', NULL, NULL),
(10, 1, 10, 'Can I Love Myself', NULL, NULL),
(11, 1, 11, 'It was A Miracle', NULL, NULL),
(12, 1, 12, 'Unexpected Moment', NULL, NULL),
(13, 2, 1, 'The Real Reason', NULL, NULL),
(14, 2, 2, 'His Priority', NULL, NULL),
(15, 2, 3, 'Five Degress of Separation', NULL, NULL),
(16, 2, 4, 'Alone, Together', NULL, NULL),
(17, 2, 5, 'Unspeakable Secrets', NULL, NULL),
(18, 2, 6, 'Something Only I Can Do', NULL, NULL),
(19, 2, 7, 'Watching Her Watching Him', NULL, NULL),
(20, 2, 8, 'My First First Love', NULL, NULL),
(21, 3, 1, 'There\'s No Such Thing as Fate', NULL, NULL),
(22, 3, 2, 'It\'s Only Me', NULL, NULL),
(23, 3, 3, 'It Has Already Begun', NULL, NULL),
(24, 3, 4, 'I Know It Isn\'t Love', NULL, NULL),
(25, 3, 5, 'I Know Nothing Will Change', NULL, NULL),
(26, 3, 6, 'There\'s No Such Thing as Love', NULL, NULL),
(27, 3, 7, 'I Know There\'s No Turning Back', NULL, NULL),
(28, 3, 8, 'I know It\'s a Lie', NULL, NULL),
(29, 3, 9, 'I Know It\'s Over', NULL, NULL),
(30, 3, 10, 'Nevertheless, I Still', NULL, NULL),
(31, 4, 1, 'Rainy Days Bring Out The Mad People', NULL, NULL),
(32, 4, 2, 'People Who Make You Angry', NULL, NULL),
(33, 4, 3, 'Help Me', NULL, NULL),
(34, 4, 4, 'There are No Bad Dogs', NULL, NULL),
(35, 4, 5, 'A Big Barking Dog That Doesn\'t Bite Women', NULL, NULL),
(36, 4, 6, 'Run Away', NULL, NULL),
(37, 4, 7, 'The Bolt Opens', NULL, NULL),
(38, 4, 8, 'Maybe We\'re the Only Okay Ones', NULL, NULL),
(39, 4, 9, 'To Have Any Ally', NULL, NULL),
(40, 4, 10, 'From Today We Are', NULL, NULL),
(41, 4, 11, 'Clear After Rain', NULL, NULL),
(42, 4, 12, 'Love That Didn\'t Hurt Too Much', NULL, NULL),
(43, 4, 13, 'Goodbye and Hello', NULL, NULL),
(44, 5, 1, 'Extreme Spots/Squirrel Record', NULL, NULL),
(45, 5, 2, 'Patrick-Man!/Gary\'s New Toy', NULL, NULL),
(46, 5, 3, 'License to Milkshake/Squid Baby', NULL, NULL),
(47, 5, 4, 'Little Yellow Book/Bumper to Bumper', NULL, NULL),
(48, 5, 5, 'Eek, an Urchin!/Squid\'s Defense', NULL, NULL),
(49, 5, 6, 'Jailbreak!/Evil Spatula', NULL, NULL),
(50, 5, 7, 'Spongebob vs The Goo', NULL, NULL),
(51, 5, 8, 'Safe Deposit Krabs/Plankton\'s Pet', NULL, NULL),
(52, 5, 9, 'Don\'t Look Now', NULL, NULL),
(53, 5, 10, 'Kenny the Cat/Yeti Krabs', NULL, NULL),
(54, 5, 11, 'Spongebob, You\'re Fired!', NULL, NULL),
(55, 5, 12, 'Lost in Bikini Bottom/Tutor Sauce', NULL, NULL),
(56, 6, 1, 'Cabin Raid!', NULL, NULL),
(57, 6, 2, 'Hospital Sweet', NULL, NULL),
(58, 6, 3, 'Microphone Mayhem!', NULL, NULL),
(59, 6, 4, 'Dodgebirds', NULL, NULL),
(60, 6, 5, 'It\'s Raining, It\'s Boring', NULL, NULL),
(61, 6, 6, 'The Big Bird Bake Off', NULL, NULL),
(62, 6, 7, 'Much Ado About Pudding', NULL, NULL),
(63, 6, 8, 'The New Pig', NULL, NULL),
(64, 6, 9, 'Space Oddities', NULL, NULL),
(65, 6, 10, 'Bomb\'s Away', NULL, NULL),
(66, 6, 11, 'Splashageddon!', NULL, NULL),
(67, 6, 12, 'Misadvantures In Hatchling-Sitting', NULL, NULL),
(68, 6, 13, 'The Golden Pineapple', NULL, NULL),
(69, 6, 14, 'A-Haw-Haw', NULL, NULL),
(70, 6, 15, 'Stopped Short', NULL, NULL),
(71, 6, 16, 'Fowl Weather!', NULL, NULL),
(72, 7, 1, 'The Sort of Japanese Restaurant', NULL, NULL),
(73, 7, 2, 'Venice', NULL, NULL),
(74, 7, 3, 'Leimert Park', NULL, NULL),
(75, 7, 4, 'Tovaangar', NULL, NULL),
(76, 7, 5, 'Bob and Nancy', NULL, NULL),
(77, 7, 6, 'Koreatown', NULL, NULL),
(78, 8, 1, 'Spellbound', NULL, NULL),
(79, 8, 2, 'History in the Making', NULL, NULL),
(80, 8, 3, 'Witch Hunt', NULL, NULL),
(81, 8, 4, 'Lady of The Lake', NULL, NULL),
(82, 8, 5, 'Battle Royale', NULL, NULL),
(83, 8, 6, 'Killahead, Part One', NULL, NULL),
(84, 8, 7, 'Killahead, Part Two', NULL, NULL),
(85, 8, 8, 'Wizard Underground', NULL, NULL),
(86, 8, 9, 'Dragon\'s Den', NULL, NULL),
(87, 8, 10, 'Our Final Act', NULL, NULL),
(88, 9, 1, 'Diamond of The First Water', NULL, NULL),
(89, 9, 2, 'Shock and Delight', NULL, NULL),
(90, 9, 3, 'Art of The Swoon', NULL, NULL),
(91, 9, 4, 'An Affair of Honor', NULL, NULL),
(92, 9, 5, 'The Duke and I', NULL, NULL),
(93, 9, 6, 'Swish', NULL, NULL),
(94, 9, 7, 'Oceans Apart', NULL, NULL),
(95, 9, 8, 'After The Rain', NULL, NULL),
(96, 10, 1, 'Life of a VIP', NULL, NULL),
(97, 10, 2, 'The Devil Wore Anna', NULL, NULL),
(98, 10, 3, 'Two Birds, One Throne', NULL, NULL),
(99, 10, 4, 'A Wolf in Chic Clothing', NULL, NULL),
(100, 10, 5, 'Check Out Time', NULL, NULL),
(101, 10, 6, 'Friends in Low Places', NULL, NULL),
(102, 10, 7, 'Cash on Delivery', NULL, NULL),
(103, 10, 8, 'Too Rich for Her Blood', NULL, NULL),
(104, 10, 9, 'Dangerously Close', NULL, NULL),
(105, 11, 1, 'Pilot', NULL, NULL),
(106, 11, 2, 'It\'s All Her Fault', NULL, NULL),
(107, 11, 3, 'Smile, or Go to Jail', NULL, NULL),
(108, 11, 4, 'Let\'s Get to Scooping', NULL, NULL),
(109, 11, 5, 'We\'re Not Friends', NULL, NULL),
(110, 11, 6, 'Freakin\' Whack-A-Mole', NULL, NULL),
(111, 11, 7, 'He Deserved to Die', NULL, NULL),
(112, 11, 8, 'He Has a Wife', NULL, NULL),
(113, 11, 9, 'Kill Me, Kill Me, Kill Me', NULL, NULL),
(114, 11, 10, 'Hello Raskolnikov', NULL, NULL),
(115, 11, 11, 'Best Christmas Ever', NULL, NULL),
(116, 11, 12, 'She\'s a Murderer', NULL, NULL),
(117, 11, 13, 'Mama\'s Here Now', NULL, NULL),
(118, 11, 14, 'The Night Lila Dead', NULL, NULL),
(119, 11, 15, 'It\'s All My Fault ', NULL, NULL),
(120, 12, 1, 'Into the Lion\'s Den', NULL, NULL),
(121, 12, 2, 'They Know', NULL, NULL),
(122, 12, 3, 'Count to Three', NULL, NULL),
(123, 12, 4, 'Downward Spiral', NULL, NULL),
(124, 12, 5, 'The Secret Place', NULL, NULL),
(125, 12, 6, 'Your Dark Side', NULL, NULL),
(126, 12, 7, 'The Third Victim', NULL, NULL),
(127, 12, 8, 'The Mess You Left Behind', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Drama', NULL, NULL),
(2, 'Kids', NULL, NULL),
(3, 'TV Show', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_05_25_143125_create_genres_table', 1),
(3, '2022_05_25_143353_create_movies_table', 1),
(4, '2022_05_25_143412_create_episodes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` blob NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `genre_id`, `title`, `photo`, `description`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 'The Miracle', 0x6d697261636c655f70696374757265, 'Polar opposites in personality and looks, fraternal twin sisters who live completely different lives wake up one day to find they have switched bodies.', 3, NULL, NULL),
(2, 1, 'My First First Love Season 1', 0x66697273746c6f76655f70696374757265, 'Due to various personal reasons, a group of Yun Tae-o\'s friends move into his house, where they experience love, friendship, and everything in between', 4, NULL, NULL),
(3, 1, 'Nevertheless', 0x6e657665727468656c6573735f70696374757265, 'The intoxicating charm of a flirtatious art school classmate pulls a reluctant love cynic into a friends-with-benefits relationship', 5, NULL, NULL),
(4, 1, 'Mad for Each Other', 0x6d6164666f72656163686f746865725f70696374757265, 'Bothered to realize they are next-door neighbors and share a psychiatrist, a man and a woman find it is impossible to stay out of each other\'s way', 3, NULL, NULL),
(5, 2, 'SpongeBob SquarePants season 9', 0x73706f6e6765626f625f70696374757265, 'From his pineapple home base under the sea, SpongeBob and his friends, including his meowing pet snail Gary, get into memorable misadvantures.', 4, NULL, NULL),
(6, 2, 'Angry Birds: Summer Madness', 0x616e67727962697264735f70696374757265, 'Teen birds Red, Chuck, Bomb and Stella are crashing through Camp Splinterwood with their fellow fathered campers for a summer of high-flying hjinks.', 4, NULL, NULL),
(7, 2, 'City of Ghosts', 0x636974796f6667686f7374735f70696374757265, 'Meet the Ghost Club! Their adventures take them all around Los Angeles as they interview ghosts, solve problems and learn about their cty\'s history', 2, NULL, NULL),
(8, 2, 'Wizards: Tales of Arcadia', 0x77697a617264735f70696374757265, 'Merlin\'s apprentice joins Arcadia\'s heroes on a time-bending adventure in Camelot, where conflict is brewing between the human, troll and magical worlds.', 3, NULL, NULL),
(9, 3, 'Bridgerton', 0x62726964676572746f6e5f70696374757265, 'The eight close-knit siblings of the Bridgerton family look for love and happiness in London high society.', 4, NULL, NULL),
(10, 3, 'Inventing Anna', 0x696e76656e74696e67616e6e615f70696374757265, 'Audacious entrepreneur or con artist? A journalist chases down the story of Anna Delvey, who convinced New York\'s elite she was a German heiress.', 3, NULL, NULL),
(11, 3, 'How to Get Away with Murder', 0x686f77746f67657461776179776974686d75726465725f70696374757265, 'Brilliant criminal defense attorney and law professor Annalise Keating, plus five of her students, become involved in a twisted murder case.', 4, NULL, NULL),
(12, 3, 'The Mess you Left Behind', 0x7468656d657373796f756c656674626568696e645f70696374757265, 'A teacher starts her job at a high school but is haunted by a suspicious death that occured three weeks before and begins fearing for her own life', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `episodes`
--
ALTER TABLE `episodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `episodes_movie_id_foreign` (`movie_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movies_genre_id_foreign` (`genre_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `episodes`
--
ALTER TABLE `episodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `episodes`
--
ALTER TABLE `episodes`
  ADD CONSTRAINT `episodes_movie_id_foreign` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`);

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
