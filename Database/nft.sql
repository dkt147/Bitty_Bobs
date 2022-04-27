-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 01:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nft`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `detail1` longtext DEFAULT NULL,
  `detail2` longtext DEFAULT NULL,
  `detail3` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `detail1`, `detail2`, `detail3`) VALUES
(1, 'Bitty Bobs is a uniquely inclusive NFT collection of 10,000 female dolls who stand confidently and firm in their femininity and strength. Stored as ERC-721 tokens on the Ethereum Blockchain, the collection empowers females and female-identifying folx to tap into their divine feminine without apologizing. The dolls features are intentionally sexualized, and they’re bobbing their heads yes to appease someone who is bothering them… and they all look bothered. Some of the dolls are biting their lips, which is a power move. Their characteristics lure you in… but they aren’t here to please you.', 'Bitty Bobs promotes equality and a wide range of inclusivity for marginalized groups including Women, LGBTQIA, the Physically Disabled and the BIPOC communities. It is one of a kind as an NFT project with its scope of representation, which helps promote female empowerment within the cryptosphere, NFT space and metaverse.', 'Minting on OpenSea on June 6, 2022.');

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `catagory` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `catagory`) VALUES
(1, 'Top selling'),
(2, 'Top trending');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'daniyal ', 'daniyal@gmail.com', 'Hello there');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `h1` longtext DEFAULT NULL,
  `h2` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `h1`, `h2`) VALUES
(1, 'Bitty Bobs', 'A unique NFT collection for the females and female-identifying folx. Just don’t ask us to smile.');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `artist` varchar(200) DEFAULT NULL,
  `size` varchar(200) DEFAULT NULL,
  `created` varchar(200) DEFAULT NULL,
  `collection` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `detail`, `c_id`, `artist`, `size`, `created`, `collection`) VALUES
(2, 'Monkey', 'img2.jpg', 'It is a monkey', 1, 'Daniyal Khan', '400 x 200', '16-04-2022', 'Adventures'),
(4, 'test', 'img3.jpg', 'It is a monkey', 1, 'Daniyal Khan', '200 x 200', '17-04-2022', 'asdasd'),
(5, 'asdas', '', 'sdasd', 1, 'asdas', 'asd', 'asd', 'asdasd'),
(6, 'asdasd', '', 'sdasd', 2, 'asdas', 'asd', '19-04-2022', 'asdasasd');

-- --------------------------------------------------------

--
-- Table structure for table `roadmap`
--

CREATE TABLE `roadmap` (
  `id` int(11) NOT NULL,
  `r1` longtext DEFAULT NULL,
  `r2` longtext DEFAULT NULL,
  `r3` longtext DEFAULT NULL,
  `r4` longtext DEFAULT NULL,
  `r5` longtext DEFAULT NULL,
  `r6` longtext DEFAULT NULL,
  `r7` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roadmap`
--

INSERT INTO `roadmap` (`id`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`) VALUES
(1, 'Giveaway: 150 NFTS - 1 weekbefore mint day', 'Lifetime Access to PrivateDiscord', 'Limited Collection ofHalloween Dolls', 'Merch', 'Limited Collection of Super Rare TraitsDolls', 'Game for Bitty Bobs', 'Real Life Events');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `detail` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `detail`) VALUES
(1, 'Amanda is a creative living in Los Angeles and the founder of Bitty Bobs. Amanda was raised by strong women who instilled in her the intrinsic power of feminism from an early age. She is passionate about equality and equal opportunities for minorities. Bitty Bobs came to her in a daydream. With the assistance and support of software developers along the way, including working with an artist from Ukraine, she was able to execute her vision. She hopes that Bitty Bobs can help bridge the diversity gap in Crypto and even more so in the NFT world, as she strongly believes that femininity can and should be used in powerful ways.');

-- --------------------------------------------------------

--
-- Table structure for table `traits`
--

CREATE TABLE `traits` (
  `id` int(11) NOT NULL,
  `t1` longtext DEFAULT NULL,
  `t2` longtext DEFAULT NULL,
  `t1_1` longtext DEFAULT NULL,
  `t1_2` longtext DEFAULT NULL,
  `t1_3` longtext DEFAULT NULL,
  `t1_4` longtext DEFAULT NULL,
  `t1_5` longtext DEFAULT NULL,
  `t2_1` longtext DEFAULT NULL,
  `t2_2` longtext DEFAULT NULL,
  `t2_3` longtext DEFAULT NULL,
  `t3` varchar(200) DEFAULT NULL,
  `c3` varchar(200) DEFAULT NULL,
  `t4` varchar(200) DEFAULT NULL,
  `c4` varchar(200) DEFAULT NULL,
  `t5` varchar(200) DEFAULT NULL,
  `c5` varchar(200) DEFAULT NULL,
  `t6` varchar(200) DEFAULT NULL,
  `c6` varchar(200) DEFAULT NULL,
  `t7` varchar(200) DEFAULT NULL,
  `c7` varchar(200) DEFAULT NULL,
  `t8` varchar(200) DEFAULT NULL,
  `c8` varchar(200) DEFAULT NULL,
  `t9` varchar(200) DEFAULT NULL,
  `c9` varchar(200) DEFAULT NULL,
  `t10` varchar(200) DEFAULT NULL,
  `c10` varchar(200) DEFAULT NULL,
  `t11` varchar(200) DEFAULT NULL,
  `c11` varchar(200) DEFAULT NULL,
  `t12` varchar(200) DEFAULT NULL,
  `c12` varchar(200) DEFAULT NULL,
  `t13` varchar(200) DEFAULT NULL,
  `c13` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traits`
--

INSERT INTO `traits` (`id`, `t1`, `t2`, `t1_1`, `t1_2`, `t1_3`, `t1_4`, `t1_5`, `t2_1`, `t2_2`, `t2_3`, `t3`, `c3`, `t4`, `c4`, `t5`, `c5`, `t6`, `c6`, `t7`, `c7`, `t8`, `c8`, `t9`, `c9`, `t10`, `c10`, `t11`, `c11`, `t12`, `c12`, `t13`, `c13`) VALUES
(1, 'Common', 'Rare', 'Skin Color: white, yellow, tan, brown, and black.', 'Hair Color: 4 different tones for each brown/black, red-head, silver, blonde, purple, and pink hair, and brown with highlights. Hair Styles range from: bobs, pigtails, braids, long and straight, curly, afro, space buns, textured, bun, pixie cut, shaved head, and pixie with buzzed sides.', 'Eyebrows: 3 different types of eyebrows ranging from thin, thicker, to thick', 'Eye Color: not just blue, green, brown, but also dolls with heterochromia (brown/blue, brown/green, green/blue) Wide range of clothing and accessories with their hands down', 'Include: 3 different types of sunglasses, backwards hat, hair clips, eyeglasses, cowboy hats, flower crowns, necklaces, stud earrings, and cuff earrings.', 'Same dolls as we know and love but with their hands up, holding accessories', 'Nail colors: purple, tan, red, green, and pink Wide range of clothing and accessories with their hands up', 'Include: cigarettes, ice cream cones (chocolate, vanilla, strawberry), pink cell phones, jewel crowns, coffee cups, lollipops, and bubblegum.', 'Ultra-feminine curvier women', '4234', 'Arms crossed', '234', 'Women with saggy chest', '634', 'Hair towel and robe', '234', 'Hijab', '234', 'Hairy armpits', '2', 'Pregnant women', '234', 'Women with bionic arm', '2342', 'Angel costume', '5', 'Woman pumping milk', '5', 'Woman with stretch marks', '5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'fahad', 'fahad123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roadmap`
--
ALTER TABLE `roadmap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traits`
--
ALTER TABLE `traits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roadmap`
--
ALTER TABLE `roadmap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `traits`
--
ALTER TABLE `traits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
