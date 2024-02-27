-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 07:41 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodwall`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(10) NOT NULL,
  `cat_tittle` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `cat_tittle`) VALUES
(1, 'Gujarati'),
(2, 'Kathiyawadi'),
(3, 'Rajasthani'),
(4, 'Punjabi'),
(5, 'South-indian'),
(6, 'Italian'),
(12, 'Dessert'),
(13, 'Sandwich'),
(14, 'Mexican');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_user` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` varchar(255) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `response_to` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_user`, `comment_email`, `comment_content`, `comment_date`, `comment_status`, `response_to`) VALUES
(15, 1, 'prit', 'pritpatel@gmail.com', 'delicious', '2016-04-23', 'approved', 'Daal Rice'),
(16, 22, 'rachit', 'rp@gmail.com', 'Good.', '2016-04-23', 'Unapproved', 'Cold Cut Trio Sandwich');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL,
  `post_category_name` varchar(20) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_price` int(20) NOT NULL,
  `post_restaurant` varchar(255) NOT NULL,
  `post_date_time` datetime NOT NULL,
  `post_image` text NOT NULL,
  `post_tags` text NOT NULL,
  `post_comment_count` int(10) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'not available',
  `post_content` text NOT NULL,
  `post_contact_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_name`, `post_title`, `post_price`, `post_restaurant`, `post_date_time`, `post_image`, `post_tags`, `post_comment_count`, `post_status`, `post_content`, `post_contact_no`) VALUES
(1, 'Gujarati', 'Daal Rice', 91, 'Alpha Restaurant', '2023-04-14 15:06:59', 'daal rice.jpg\r\n\r\n', 'Daal rice , rice daal , daal , rice ', 3, 'available', 'rice - 1 plate , daal - 1 bowl ', 12345),
(2, 'Rajasthani', 'Dal Bati', 120, 'Rajasthani Dalbati', '2020-03-31 23:24:21', 'dalbati.jpg', 'dal bati, rajasthani, dal , bati', 2, 'available', 'baati - 3 pcs , daal - 1 bowl ', 123),
(3, 'Kathiyawadi', 'Sev Tameta', 45, 'Kismat Kathiyavadi', '2020-03-31 23:25:27', 'sev tameta.jpg', 'sev tameta , tameta sev , kathiyaadi , sabji , Gujarati food', 2, 'available', 'sabji - 1 plate , roti - 2 pcs', 334),
(4, 'Italian', 'Margherita Pizza', 125, 'Domino\'s Pizza', '2020-02-13 11:18:01', 'margherita.jpeg', 'pizza,margherita pizza,domino\'s pizza,small size', 0, 'available', 'The simple and delicious margherita pizza in small size made by super cook of domino\'s pizza.', 123456),
(5, 'Dessert', 'Triple Sundae Icecream', 165, 'Satyanarayan Icecream', '2020-03-31 23:30:20', 'triplesundae.jpg', 'icecream, triple sundae icecream, satyanarayan icecream, dessert, sweet ', 0, 'available', '3 scoops of different flavor  ', 2147483647),
(6, 'Punjabi', 'Punjabi Thali', 145, 'Kabir Restaurant', '2020-03-31 23:30:10', 'punjabithali.jpg', 'punjabi thali, punjabi , panner ,  sabji ', 2, 'available', 'sabji - 2 bowls , roti - 2 pcs , rice - 1 bowl, daal - 1 bow, papad -1 pc, chaas - 1 glass', 1234),
(20, 'South-indian', 'Plain Dosa', 45, 'Dosa.com', '2020-03-31 23:31:07', 'dosa.jpeg', 'dosa , plain dosa , south-indian ,south , indian ', 1, 'available', 'dosa -1 pc , sambar - unlimited', 23),
(21, 'South-indian', 'Maysoore Dosa', 50, 'Dosa.com', '2023-01-26 14:11:53', '', 'south indian, dosa, maysoore', 0, 'available', 'Dilicious Maysore Masala Dosa', 123456778),
(22, 'Sandwich', 'Cold Cut Trio Sandwich', 12, 'Subway', '2023-04-16 13:37:02', '', 'Sandwich, Subway, Meat, Salami, Ham, Balooni', 1, 'available', 'Delicious and most popular subway sandwich with tasty meat', 123455);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `rest_id` int(20) NOT NULL,
  `rest_name` varchar(255) NOT NULL,
  `rest_password` varchar(255) NOT NULL,
  `rest_address` varchar(255) NOT NULL,
  `rest_email` varchar(255) NOT NULL,
  `rest_contact_no` int(20) NOT NULL,
  `rest_timings` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`rest_id`, `rest_name`, `rest_password`, `rest_address`, `rest_email`, `rest_contact_no`, `rest_timings`) VALUES
(1, 'Alpha Restaurant', 'alpha123', 'a v road ', 'alpha@gmail.com', 123, '11 to 11'),
(2, 'Rajasthani Dalbati', 'rajdal', 'near panchal hall , vv nagar', 'rajdalbati@gmail.com', 12345, '10 to 9'),
(3, 'Kismat Kathiyavadi', 'kismat123', 'Chikhodara Chokdi , anand', 'kismat@gmail.com', 1212, '12 to 11'),
(4, 'Domino\'s Pizza', 'dominos123', 'Near Big Bazzar ,anand', 'dominosanand@gmail.com', 12112, '10 to 10'),
(5, 'Satyanarayan Icecream', 'satyanarayan123', 'A. V. Road , anand', 'satyanarayan.icecream@gmail.com', 11122, '12 to 11'),
(6, 'Kabir Restaurant', 'kabir123', 'Bhaiakaka circle , vv nagar', 'kabiranand@gmail.com', 7784, '12 to 11'),
(7, 'Dosa.com', 'dosa123', 'near icici bank , vv nagar', 'dosaanand@gmail.com', 112223, '11 to 11'),
(8, 'Subway', 'subway123', '941 progress avenue, Toronto, M1P4T6', 'subway@gmail.com', 416283889, '24 hours');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(4) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `guj_item_1` varchar(255) NOT NULL,
  `guj_item_2` varchar(255) NOT NULL,
  `kath_item_1` varchar(255) NOT NULL,
  `kath_item_2` varchar(255) NOT NULL,
  `raj_item_1` varchar(255) NOT NULL,
  `raj_item_2` varchar(255) NOT NULL,
  `pun_item_1` varchar(255) NOT NULL,
  `pun_item_2` varchar(255) NOT NULL,
  `sout_item_1` varchar(255) NOT NULL,
  `sout_item_2` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL DEFAULT 'user',
  `user_contact_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `guj_item_1`, `guj_item_2`, `kath_item_1`, `kath_item_2`, `raj_item_1`, `raj_item_2`, `pun_item_1`, `pun_item_2`, `sout_item_1`, `sout_item_2`, `user_role`, `user_contact_no`) VALUES
(1, 'admin', 'admin', 'rachit', 'pandya', 'rachit@gmail.com', '', '', '', '', '', '', '', '', '', '', 'admin', 1234),
(6, 'rachit', 'rachit123', 'rachit', 'pandya', 'rachit123@gmail.com', 'daal rice', 'kadhi khichdi', 'sev tameta', 'rotlo', 'dal bati', 'olo', 'punjabi thali', 'panner sabji', 'dosa', 'uttapam', 'user', 12345),
(7, 'meet', 'meet123', 'meet', 'patel', 'meet@gmail.com', 'daal rice', 'kadhi khichdi', 'sev tameta', 'rotlo', 'dal bati', 'olo', 'punjabi thali', 'panner sabji', 'dosa', 'uttapam', 'user', 123),
(12, 'jayesh', 'jayesh123', 'jayesh', 'amodhkar', 'ja@gmail.com', 'N/A', 'N/A', 'N/A', 'N/A', 'daal bati', 'N/A', 'punjabi thali', 'N/A', 'dosa', 'N/A', 'user', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`rest_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `rest_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
