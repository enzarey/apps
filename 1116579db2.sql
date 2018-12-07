-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2018 at 05:33 PM
-- Server version: 10.2.18-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1116579db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apps`
--

CREATE TABLE `tbl_apps` (
  `user_id` int(50) NOT NULL,
  `first_name` varchar(200) DEFAULT NULL,
  `last_name` varchar(200) DEFAULT NULL,
  `org_name` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `country` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `usertype_id` int(50) DEFAULT NULL,
  `avatar` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_apps`
--

INSERT INTO `tbl_apps` (`user_id`, `first_name`, `last_name`, `org_name`, `website`, `country`, `email`, `username`, `password`, `usertype_id`, `avatar`, `file`, `date`, `blog`) VALUES
(1, 'Kate', 'Gomez', 'JARKS APPS', 'againstplasticpollutionsociety.ml', 'Philippines', 'kategomez@apps.com', 'admin_kate', 'jarksapps123', 1, '', '', '2018-09-18 14:37:10', NULL),
(2, 'Renz', 'Reyes', 'JARKS APPS', 'againstplasticpollutionsociety.ml', 'Philippines', 'enzareyes@apps.com', 'admin_renz\r\n', 'jarksapps123\r\n', 1, '', '', '2018-09-18 14:37:10', NULL),
(3, 'Anna ', 'Marzo', 'JARKS APPS', 'againstplasticpollutionsociety.ml', 'Philippines', 'anna_marzo@apps.com', 'admin_anna', 'jarksapps123', 1, '', '', '2018-09-18 14:37:10', NULL),
(4, 'Sharlyne', 'Co', 'JARKS APPS', 'againstplasticpollutionsociety.ml', 'Philippines', 'sharlyneco@apps.com', 'admin_shar', 'jarksapps123', 1, '', '', '2018-09-18 14:37:10', NULL),
(5, 'Joan', 'Sy', 'JARKS APPS', 'againstplasticpollutionsociety.ml', 'Philippines', 'joan.sy@rocketmail.com', 'admin_joan', 'jarksapps123', 1, '', '', '2018-09-18 14:37:10', NULL),
(6, 'Bryne ', 'De Jesus', '', 'www.bryne_de_jesus.com', 'Malaysia', 'bryne.dejesus@gmail.com', 'djbryne', 'djbryne123', 2, '', '', '2018-09-18 14:50:26', NULL),
(7, 'Joey', 'Orating', 'MFI Polytechnic Institute', 'www.mfi.org', 'India', 'joey.orating@mfi.org', 'sirjoey', 'joey123', 4, '', '', '2018-09-18 14:55:39', NULL),
(8, 'Glad', 'Rodriguez', NULL, NULL, 'Japan', 'glad_rodriguez@live.com', 'glad.rod', 'gladrod123', 3, '', '', '2018-09-19 10:36:58', NULL),
(9, 'Ako', 'Ito', 'Samahan ng Malalamig Ang Pasko', 'www.kamustana.com', 'Philippines', 'mail@femail.com', 'Akonga', 'secret', 0, '', '', '2018-09-20 10:59:03', NULL),
(10, 'XOXO', 'XOXO', '', NULL, '', 'XOXO@XOXO.com', 'XOXO', 'x', NULL, '', '', '2018-09-22 16:02:01', NULL),
(12, 'si anna', 'may issue', '', NULL, '', 'ann.issue@lokomo.com', 'ako issue', 'abcd', NULL, '', '', '2018-09-27 11:12:31', NULL),
(13, 'si anna', 'may issue', '', NULL, '', 'ann.issue@lokomo.com', 'Akonga', 'mayissue', NULL, '', '', '2018-09-27 11:13:40', NULL),
(14, 'si anna', 'may issue', '', NULL, '', 'ann.issue@lokomo.com', 'Akonga', 'mayissue', NULL, '', '', '2018-09-27 11:14:35', NULL),
(15, 'Ako', 'may issue', '', NULL, '', 'kayanna@friends.com', 'sifriend', 'taskilay', NULL, '', '', '2018-09-27 11:16:14', NULL),
(16, 'Ako', 'may issue', '', NULL, '', 'kayanna@friends.com', 'sifriend', 'taskilay', NULL, '', '', '2018-09-27 11:17:04', NULL),
(17, 'Ako', 'may issue', '', NULL, '', 'kayanna@friends.com', 'sifriend', 'taskilay', NULL, '', '', '2018-09-27 11:17:37', NULL),
(18, 'si anna', 'may issue', '', NULL, '', 'ann.issue@lokomo.com', 'Akonga', 'hhhhhhhhhh', NULL, '', '', '2018-09-27 11:17:55', NULL),
(19, 'Ako', 'si renz', '', NULL, '', 'mytissue@sir.com', 'renz', 'aaa', NULL, '', '', '2018-09-27 11:18:38', NULL),
(20, 'Ako', 'may issue', '', NULL, '', 'wd.kategomez@gmail.com', 'XOXO', 'rrrr', NULL, '', '', '2018-09-27 11:27:17', NULL),
(21, 'Ako', 'may issue', '', NULL, '', 'kayrenz@ann.com', 'Akonga', 'bbb', NULL, '', '', '2018-09-27 11:28:38', NULL),
(22, 'si anna', 'may issue', '', NULL, '', 'wd.kategomez@gmail.com', 'admin_kate', 'aaa', NULL, '', '', '2018-09-27 11:28:54', NULL),
(23, 'sir', 'wala', '', NULL, '', 'maydate@paasa.com', 'sir', '123', NULL, '', '', '2018-09-27 11:29:38', NULL),
(24, 'renz', 'mayissue', '', NULL, '', 'kayfriend@black.com', 'admin', '123', NULL, '', '', '2018-09-27 11:31:47', NULL),
(25, 'Kusanagi', 'Motoko', '', NULL, '', 'sector9@protonmail.com', 'themajor', '*', NULL, '', '', '2018-09-30 03:26:57', NULL),
(26, 'Annalene', 'Marzo', '', NULL, '', 'marzoannalene@gmail.com', 'annedev', 'Anjell13', NULL, '', '', '2018-10-01 01:01:14', NULL),
(27, 'sha', 'co', '', NULL, '', 'sharlyneco@gmail.com', 'sharlyne', '123456', NULL, '', '', '2018-10-08 07:48:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `content_id` int(100) NOT NULL,
  `content_title` varchar(200) NOT NULL,
  `contents` varchar(2000) NOT NULL,
  `date input` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(200) NOT NULL,
  `photo_path` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`content_id`, `content_title`, `contents`, `date input`, `user_id`, `photo_path`) VALUES
(1, '0', '0', '0000-00-00 00:00:00', 0, '42300954'),
(2, '0', '0', '0000-00-00 00:00:00', 0, '41894025'),
(3, 'sample lang', '<div>This is a</div><div>Test post<br></div>', '2018-09-26 08:01:05', 0, '41894025_1794736690638511_2450519094248603648_n.jpg'),
(4, 'sample lang', '\r\n\r\n\r\n<div class=\"quoteText\">\r\n      “I asked the Zebra, <br>are you black with white stripes? <br>Or white with black stripes? <br>And the zebra asked me, <br>Are you good with bad habits?<br>Or are you bad with good habits?<br>Are you noisy with quiet times? <br>Or are you quiet with noisy times? <br>Are you happy with some sad days? <br>Or are you sad with some happy days? <br>Are you neat with some sloppy ways? <br>Or are you sloppy with some neat ways? <br>And on and on and on and on and on and on he went.<br>I’ll never ask a zebra about stripes...again.”\r\n  <br>  ―\r\n  <span class=\"authorOrTitle\">\r\n    Shel Silverstein\r\n  </span>\r\n</div>', '2018-09-26 08:14:18', 10, '41894025_1794736690638511_2450519094248603648_n.jpg'),
(5, 'sample lang', 'HELLO THIS IS A TEST!!!!<div><br></div><div><br></div><div>Hello - is it me your looking for? I can see it in your eyes....</div><div>lalalalalala..</div>', '2018-09-26 08:35:36', 0, 'x.jpg'),
(6, 'sample lang', '<span style=\"color: rgb(24, 24, 24); font-family: Merriweather, Georgia, serif; font-size: 14px;\">“However mean your life is, meet and live it; do not shun it and call it hard names. It is not so bad as you are. It looks poorest when you are richest. The fault-finder will find faults even in paradise. Love your life, poor as it is. You may perhaps have some pleasant, thrilling, glorious hours, even in a poorhouse. The setting sun is reflected from the windows of the almshouse as brightly as from the rich man’s abode; the snow melts before its doors as early in the spring. Cultivate property like a garden herb, like sage. Do not trouble yourself much to get new things, whether clothes or friends. Turn the old; return to them. Things do not change; we change. Sell your clothes and keep your thoughts… Superfluous wealth can buy superfluities only. Money is not required to buy one necessary of the soul.”&nbsp;</span><br style=\"color: rgb(24, 24, 24); font-family: Merriweather, Georgia, serif; font-size: 14px;\"><span style=\"color: rgb(24, 24, 24); font-family: Merriweather, Georgia, serif; font-size: 14px;\">―&nbsp;</span><span class=\"authorOrTitle\" style=\"font-family: Lato, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-weight: bold; font-size: 14px;\">Henry David Thoreau,&nbsp;</span><span style=\"color: rgb(24, 24, 24); font-family: Merriweather, Georgia, serif; font-size: 14px;\"></span><span id=\"quote_book_link_16902\" style=\"color: rgb(24, 24, 24); font-family: Merriweather, Georgia, serif; font-size: 14px;\"><a class=\"authorOrTitle\" href=\"https://www.goodreads.com/work/quotes/2361393\" style=\"color: rgb(51, 51, 51); text-decoration-line: none; font-family: Lato, &quot;Helvetica Neue&quot;, Helvetica, sans-serif; font-weight: bold;\">Walden</a></span>', '2018-09-27 08:04:29', 10, '42514409_336807920390131_1307220584127528960_n.jpg'),
(7, 'sample lang', 'sample', '2018-09-27 08:15:57', 10, 'sample.jpg'),
(8, 'sample lang', 'sample again', '2018-09-27 08:37:19', 10, 'sample.jpg'),
(9, 'sample lang', 'Ito na yun!<br>', '2018-09-28 03:37:10', 0, ''),
(10, 'sample lang', 'Enter content here!!', '2018-09-28 03:41:10', 10, ''),
(11, 'sample lang', '<div>glkjdfoiaweuurioaweurpowe</div>', '2018-09-28 10:44:38', 0, ''),
(12, 'sample lang', 'gagana na ba?', '2018-09-28 11:03:40', 0, 'sample.jpg'),
(13, 'Titulo', 'Enter content here!!', '2018-09-30 02:39:25', 0, '41894025_1794736690638511_2450519094248603648_n.jpg'),
(14, 'The War on Plastics: Is It Too Little Too Late?', 'Scientists have long known that microplastics present a hazard to marine\r\n animals that mistakenly eat plastic debris because the tiny fragments \r\nlook like prey. A <a href=\"https://www.technologynetworks.com/applied-sciences/news/taste-not-appearance-drives-corals-to-eat-plastics-293620\" target=\"_blank\">recent study</a>\r\n looking at corals showed that chemicals in the plastics may actually \r\nmake them appealing to eat. However, further work is needed to work out \r\nprecisely which substances are having this unwanted effect.', '2018-09-30 02:43:58', 0, 'the-war-on-plastics-is-it-too-little-too-late-296185.jpg'),
(15, 'A Fungus Could Be One Key to Solving Our Plastic Waste Crisis', '<div>By Emily Petsko</div><div><br></div><div><div>An unusual strain of fungus found last year in a Pakistani garbage \r\ndump could one day provide a solution to our plastic waste woes. As <a href=\"https://www.dezeen.com/2018/09/25/state-of-the-worlds-fungi-report-mushrooms-eat-plastic-kew-gardens/\" target=\"_blank\">Dezeen</a> reports, the <em>Aspergillus tubingensis</em> fungus has the ability to break down the chemical bonds between plastic molecules in a matter of weeks rather than years.</div>\r\n<div>The findings were presented in a 92-page State of the World’s Fungi report, published by London’s Royal Botanic Gardens, Kew [<a href=\"https://stateoftheworldsfungi.org/2018/reports/SOTWFungi_2018_Full_Report.pdf\" target=\"_blank\">PDF</a>].\r\n The report cites recent studies showing that this particular fungus can\r\n help aid the disintegration of polyester polyurethane (PU)—a substance \r\ncommonly used in refrigerator insulation, synthetic leather, and many \r\nother household products. The <a href=\"https://www.sciencedirect.com/science/article/pii/S0269749117300295\" target=\"_blank\">study</a>, by Chinese and Pakistani researchers, revealed that <em>A. tubingensis</em> broke down the plastic in just two months.</div><div><br></div><div>To read full article, click<a href=\"https://mentalfloss.com/article/558405/fungus-could-be-one-key-solving-our-plastic-waste-crisis\" target=\"_blank\"> here.</a><br></div></div><br>', '2018-09-30 05:15:41', 0, '539787-istock-856184274.jpg'),
(16, 'Ocean Plastic Pollution Isn’t Just Immoral, It’s Illegal', '<div>By Oliver Tickell, HuffPost US</div><div><br></div><div>The pollution of oceans with plastic litter, discarded nylon fishing nets and eco-toxic microbeads is well known as one of the great scourges of the modern age ― not just entangling and choking endangered, charismatic species like sea turtles, dolphins and even great whales, but attracting long-lived organic pollutants that end up permeating the entire marine food chain, right up to the fish on our plates.<br><br>Less well known is that all this ocean plastic is illegal.<br><br>​Numerous international and regional treaties, conventions and other agreements impose binding obligations on countries to protect the oceans, their wildlife and their ecosystems from pollution. That includes pollution originating on land, like plastic bottles, shopping bags, crisp packets, cigarette lighters and cellophane wrappers.<br><br>But there is one great problem with international law: The commitments may be solemn and legally binding, but they are hard to uphold. There is no police force or prosecutor tasked with their enforcement. Only state parties to a treaty have the power to raise disputes against other parties, and they are generally reluctant to do so, for understandable reasons. They do not wish to disrupt harmonious diplomatic relations with their neighbors; they may fear the potential costs; and few governments are so perfect themselves as to have no worry of being at the receiving end of similar treatment.<br></div>', '2018-09-30 05:21:40', 0, '5a8c43a02000002d00eaf6ad.jpeg'),
(17, 'You Can Help Turn the Tide on Plastic. Here’s How.', '<div>By Laura Parker</div><div><br></div><div><span itemprop=\"articleBody\" class=\"clearfix\"><div class=\"parbase smartbody section text\">\r\n<div><b>Six Things You Can Do (and Feel No Pain)</b></div></div>\r\n<div class=\"parbase smartbody section text\">\r\n<div><b>1. Give up plastic bags. </b>Take your own reusable ones to the \r\nstore. A trillion plastic shopping bags are used worldwide every year, \r\nand 100 billion in the United States alone—that’s almost one per \r\nAmerican per day. The average Dane, in contrast, goes through four \r\nsingle-use bags <i>per year.</i> Denmark passed the first bag tax in 1993.</div></div>\r\n<div class=\"parbase smartbody section text\">\r\n<div><b>2. Skip straws. </b>Unless you have medical needs, and even then \r\nyou could use paper ones. Americans toss 500 million plastic straws \r\nevery day, or about 1.5 per person.</div></div>\r\n<div class=\"parbase smartbody section text\">\r\n<div><b>3. Pass up plastic bottles. </b>Invest in a refillable water \r\nbottle. Some come with filters if you’re worried about water quality. A \r\nhandful of cities, including Bundanoon, Australia, and San Francisco, \r\nhave banned or partially banned bottled water. But around the world, \r\nnearly a million plastic beverage bottles are sold every minute.</div></div>\r\n<div class=\"parbase smartbody section text\">\r\n<div><b>4. Avoid plastic packaging. </b>Buy bar soap instead of liquid. \r\nBuy in bulk. Avoid produce sheathed in plastic. And while you’re at it, \r\ngive up plastic plates and cups. The French are (partially) banning the \r\nstuff.</div></div>\r\n<div class=\"parbase smartbody section text\">\r\n<div><b>5. Recycle what you can. </b>Even in rich countries, recycling \r\nrates are low. Globally, 18 percent of all plastic is recycled. Europe \r\nmanages 30 percent, China 25—the United States only 9.</div></div>\r\n<div class=\"parbase smartbody section text\">\r\n<div><b>6. Don’t litter. </b>The Ocean Conservancy has run beach cleanups \r\nfor 30 years. Of the top 10 types of trash they find, the', '2018-09-30 05:26:31', 0, 'plastic-waste-single-use-worldwide-consumption-solutions-5.adapt.676.1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usertype_id`
--

CREATE TABLE `usertype_id` (
  `guest_user` int(11) NOT NULL DEFAULT 2,
  `volunteer` int(11) NOT NULL DEFAULT 3,
  `organization` int(11) NOT NULL DEFAULT 4,
  `admin` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_apps`
--
ALTER TABLE `tbl_apps`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `User_ID` (`user_id`);

--
-- Indexes for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`content_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_apps`
--
ALTER TABLE `tbl_apps`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `content_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
