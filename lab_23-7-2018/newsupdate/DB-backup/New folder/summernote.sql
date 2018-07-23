-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 05:58 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `summernote`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `summertext` longtext NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hide` int(1) NOT NULL DEFAULT '0',
  `edited` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `heading`, `summertext`, `datetime`, `hide`, `edited`) VALUES
(2, 'Test3', '<div class=\"anyipsum-output\"><p>test test</p></div>', '2018-07-18 22:47:01', 0, 1),
(3, 'Another test heading', '<ol><li><b>another dta</b></li><li><b>another another dta</b></li><li><b>another another another dta<br></b></li></ol>', '2018-06-22 18:01:17', 0, 0),
(4, 'Spicy Jalepeno', '<div class=\"anyipsum-output\"><p>Spicy jalapeno bacon ipsum dolor amet \r\nmeatloaf filet mignon venison pork chop ex occaecat, chicken sunt boudin\r\n consectetur officia sausage.  Consectetur turkey flank tempor.  Cupim \r\nconsequat short loin nulla duis, pork t-bone salami.  Aute esse meatloaf\r\n bresaola exercitation.</p><p>Ball tip nulla prosciutto tongue pork ut. \r\n Incididunt kielbasa nostrud dolore picanha drumstick reprehenderit \r\nalcatra pastrami ut.  Pastrami deserunt sint, est incididunt laboris \r\npancetta kevin voluptate pork belly.  Jowl in kielbasa ut veniam irure. \r\n Sunt tenderloin proident tongue beef biltong.</p><p>Burgdoggen nisi \r\ntenderloin occaecat, beef chicken salami ex ea tempor jerky.  Shoulder \r\nsunt short ribs, pork chop dolore rump capicola esse salami sausage duis\r\n eiusmod occaecat id.  Pork consequat adipisicing eu aute pork chop cow \r\nsint jerky chuck pariatur enim in.  Pariatur velit beef ribs deserunt \r\nstrip steak magna short ribs chicken sirloin corned beef chuck picanha. \r\n Duis sunt spare ribs nostrud bacon ground round sirloin eu cow.  \r\nCupidatat ea beef ribs reprehenderit pork loin.  Nisi voluptate velit \r\nshort loin sunt proident culpa pancetta cow.</p><p>Consequat labore \r\npancetta venison.  Cupidatat elit sunt meatball sed fatback dolore \r\ntongue cow.  Laborum short loin bresaola labore ham hock id salami \r\npariatur.  Ribeye in irure elit corned beef pork chop drumstick \r\nburgdoggen ball tip tongue jowl pork culpa consectetur.  Est fatback \r\nullamco, duis leberkas short ribs cupidatat pork deserunt drumstick ex \r\nshank fugiat.  Cow beef ribs cillum shankle meatball nostrud bacon.  \r\nNisi cow magna in meatball brisket lorem, consequat pork loin \r\nfrankfurter shankle ham hock.</p><p>Dolor dolore tenderloin, in sunt in \r\ncorned beef non jerky tail alcatra elit capicola do.  Short ribs non \r\ncorned beef sint pig eiusmod kevin dolore beef duis dolor pastrami \r\nnulla.  Eu shoulder jowl cupim officia, corned beef chuck sint dolor \r\ncapicola doner minim hamburger.  Officia ullamco labore jerky sint \r\nreprehenderit, tail ut dolore.  Aliquip ut ham nostrud ea pork belly, \r\nmagna cupidatat et jerky kielbasa.  Chicken fatback laboris occaecat \r\nflank, sausage officia.</p></div>				Does your lorem ipsum text long for something a little meatier? Give our generator a tryâ€¦ itâ€™s tasty!', '2018-06-22 18:01:17', 0, 0),
(18, 'Messi is removed almost', '<h1 class=\"title mb10\">à¦•à¦¿à¦›à§ à¦¸à¦®à¦°à§à¦¥à¦• à¦®à§‡à¦¸à¦¿à¦•à§‡à¦“ à¦¬à¦¾à¦¦ à¦¦à¦¿à§Ÿà§‡à¦›à§‡à¦¨ à¦à¦•à¦¾à¦¦à¦¶ à¦¥à§‡à¦•à§‡!</h1><p></p><div class=\"row detail_holder\"><div class=\"right_part\">\r\n					<div class=\"col_in\">\r\n						\r\n												\r\n												\r\n						<article itemscope=\"\" itemtype=\"http://schema.org/Article\" class=\"jw_detail_content_holder content mb16\">\r\n							<div itemprop=\"articleBody\" class=\"\"><p><a class=\"jw_media_holder media_image jwMediaContent alignfull pop-media-holder pop-active\" style=\"width: 608px;\"><span class=\"jw-ari ari-fix\" style=\"width: 608px; height: 342px;\" id=\"image-1291956\"><img style=\"display: block;\" alt=\"à¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¿à¦¨à¦¾à¦° à¦¸à¦®à¦°à§à¦¥à¦•à¦¦à§‡à¦° à¦•à¦¾à¦›à§‡ à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦…à¦ªà§à¦°à¦¿à§Ÿ à¦¹à¦¿à¦—à§à§Ÿà§‡à¦‡à¦¨, à¦•à¦¾à¦°à¦“ à¦¤à¦¾à¦²à¦¿à¦•à¦¾à§Ÿ à¦®à§‡à¦¸à¦¿à¦“ à¦†à¦›à§‡à¦¨à¥¤ à¦›à¦¬à¦¿à¦ƒ à¦à¦à¦«à¦ªà¦¿\" src=\"http://paimages.prothom-alo.com/contents/cache/images/640x360x1/uploads/media/2018/06/11/4ccf632843da0f406c85cec8938b230a-5b1e634194c3e.jpg\"></span><span class=\"jw_media_caption\"><span class=\"tt\">à¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¿à¦¨à¦¾à¦° à¦¸à¦®à¦°à§à¦¥à¦•à¦¦à§‡à¦° à¦•à¦¾à¦›à§‡ à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦…à¦ªà§à¦°à¦¿à§Ÿ à¦¹à¦¿à¦—à§à§Ÿà§‡à¦‡à¦¨, à¦•à¦¾à¦°à¦“ à¦¤à¦¾à¦²à¦¿à¦•à¦¾à§Ÿ à¦®à§‡à¦¸à¦¿à¦“ à¦†à¦›à§‡à¦¨à¥¤ à¦›à¦¬à¦¿à¦ƒ à¦à¦à¦«à¦ªà¦¿</span></span></a></p>\r\n<div class=\"palo_web_news_div\">à¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¿à¦¨à¦¾à¦° à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦¦à§ˆà¦¨à¦¿à¦• à¦“à¦²à§‡ à¦œà¦°à¦¿à¦ª \r\nà¦šà¦¾à¦²à¦¿à§Ÿà§‡à¦›à§‡, à¦•à¦¾à¦¦à§‡à¦° à¦¨à¦¿à§Ÿà§‡ à¦—à¦ à¦¨ à¦•à¦°à¦¾ à¦¯à¦¾à§Ÿ à¦¤à¦¾à¦¦à§‡à¦° à¦¸à§à¦¬à¦ªà§à¦¨à¦ªà§‚à¦°à¦£à§‡à¦° à¦¬à¦¿à¦¶à§à¦¬à¦•à¦¾à¦ª à¦à¦•à¦¾à¦¦à¦¶? \r\nà¦¸à§‡à¦–à¦¾à¦¨à§‡ à¦®à¦¨ à¦–à§à¦²à§‡ à¦­à§‹à¦Ÿ à¦¦à¦¿à§Ÿà§‡à¦›à§‡à¦¨ à¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¾à¦‡à¦¨à¦°à¦¾à¥¤ à¦¸à§à¦¬à¦¾à¦­à¦¾à¦¬à¦¿à¦•à¦­à¦¾à¦¬à§‡ à¦¸à§‡à¦–à¦¾à¦¨à§‡ à¦¸à¦¬à¦šà§‡à§Ÿà§‡ \r\nà¦¬à§‡à¦¶à¦¿ à¦­à§‹à¦Ÿ à¦ªà§‡à§Ÿà§‡ à¦à¦—à¦¿à§Ÿà§‡ à¦†à¦›à§‡à¦¨ à¦²à¦¿à¦“à¦¨à§‡à¦² à¦®à§‡à¦¸à¦¿à¥¤ à¦à¦•à¦¾à¦¦à¦¶à§‡ à¦œà¦¾à§Ÿà¦—à¦¾ à¦¹à§Ÿà¦¨à¦¿ à¦—à¦žà§à¦œà¦¾à¦²à§‹ \r\nà¦¹à¦¿à¦—à§à§Ÿà§‡à¦‡à¦¨à§‡à¦°</div>\r\n<p>à¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¿à¦¨à¦¾ à¦¬à¦¿à¦¶à§à¦¬à¦•à¦¾à¦ª à¦–à§‡à¦²à¦¤à§‡ à¦°à¦¾à¦¶à¦¿à§Ÿà¦¾ à¦ªà§Œà¦à¦›à§‡à¦›à§‡ à¦¦à§à¦¦à¦¿à¦¨ à¦¹à¦²à§‹à¥¤ à¦¬à§à¦°à¦¾à¦¨à§‹à§Žà¦¸à¦¿à¦¤à§‡ à¦šà¦²à¦›à§‡\r\n à¦¤à¦¾à¦¦à§‡à¦° à¦¶à§‡à¦· à¦®à§à¦¹à§‚à¦°à§à¦¤à§‡à¦° à¦ªà§à¦°à¦¸à§à¦¤à§à¦¤à¦¿à¥¤ à§§à§¬ à¦œà§à¦¨ à¦†à¦‡à¦¸à¦²à§à¦¯à¦¾à¦¨à§à¦¡à§‡à¦° à¦¬à¦¿à¦ªà¦•à§à¦·à§‡ à¦•à§‹à¦¨ à¦à¦•à¦¾à¦¦à¦¶ \r\nà¦¦à¦¿à§Ÿà§‡ à¦¬à¦¿à¦¶à§à¦¬à¦•à¦¾à¦ª à¦¶à§à¦°à§ à¦•à¦°à¦¬à§‡ à¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¿à¦¨à¦¾, à¦¤à¦¾ à¦¹à§Ÿà¦¤à§‹ à¦¸à¦¾à¦œà¦¿à§Ÿà§‡ à¦«à§‡à¦²à§‡à¦›à§‡à¦¨ à¦¹à§‹à¦°à§à¦¹à§‡ \r\nà¦¸à¦¾à¦®à§à¦ªà¦¾à¦“à¦²à¦¿à¥¤ à¦¤à¦¬à§‡ à¦¦à¦² à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¨à§‡ à¦¤à¦¾à¦à¦•à§‡ à¦•à¦¿à¦›à§ à¦¸à¦¹à¦¾à§Ÿà¦¤à¦¾ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨ à¦¦à§‡à¦¶à§‡à¦° à¦®à¦¾à¦¨à§à¦·à§‡à¦°à¦¾à¥¤\r\n à¦¸à¦¾à¦®à§à¦ªà¦¾à¦“à¦²à¦¿ à¦šà¦¾à¦‡à¦²à§‡ à¦¦à§‡à¦–à§‡ à¦¨à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨, à§©à§¨ à¦¬à¦›à¦°à§‡à¦° à¦¬à¦¿à¦¶à§à¦¬à¦•à¦¾à¦ª à¦–à¦°à¦¾ à¦•à¦¾à¦Ÿà¦¾à¦¤à§‡ à¦¦à§‡à¦¶à§‡à¦° \r\nà¦®à¦¾à¦¨à§à¦· à¦ªà§à¦°à¦¥à¦® à¦à¦•à¦¾à¦¦à¦¶à§‡ à¦•à¦¾à¦¦à§‡à¦° à¦¦à§‡à¦–à¦¤à§‡ à¦šà¦¾à¦¨à¥¤</p>\r\n<p>à¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¿à¦¨à¦¾à¦° à¦œà¦¨à¦ªà§à¦°à¦¿à§Ÿ à¦¦à§ˆà¦¨à¦¿à¦• à¦“à¦²à§‡ à¦œà¦°à¦¿à¦ª à¦šà¦¾à¦²à¦¿à§Ÿà§‡ à¦¦à§‡à¦–à§‡à¦›à§‡, à¦•à¦¾à¦¦à§‡à¦° à¦¨à¦¿à§Ÿà§‡ à¦˜à¦Ÿà¦¨ à¦•à¦°à¦¾\r\n à¦¯à¦¾à§Ÿ à¦¤à¦¾à¦¦à§‡à¦° à¦¸à§à¦¬à¦ªà§à¦¨à¦ªà§‚à¦°à¦£à§‡à¦° à¦¬à¦¿à¦¶à§à¦¬à¦•à¦¾à¦ª à¦à¦•à¦¾à¦¦à¦¶? à¦¸à§‡à¦–à¦¾à¦¨à§‡ à¦®à¦¨ à¦–à§à¦²à§‡ à¦­à§‹à¦Ÿ à¦¦à¦¿à§Ÿà§‡à¦›à§‡ \r\nà¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¾à¦‡à¦¨à¦°à¦¾à¥¤ à¦¸à§à¦¬à¦¾à¦­à¦¾à¦¬à¦¿à¦•à¦­à¦¾à¦¬à§‡ à¦¸à§‡à¦–à¦¾à¦¨à§‡ à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦¬à§‡à¦¶à¦¿ à¦­à§‹à¦Ÿ à¦ªà§‡à§Ÿà§‡ à¦à¦—à¦¿à§Ÿà§‡ à¦†à¦›à§‡à¦¨ \r\nà¦²à¦¿à¦“à¦¨à§‡à¦² à¦®à§‡à¦¸à¦¿à¥¤ à¦†à¦° à¦¸à¦®à¦°à§à¦¥à¦•à§‡à¦°à¦¾ à¦®à§à¦– à¦«à¦¿à¦°à¦¿à§Ÿà§‡ à¦¨à¦¿à§Ÿà§‡à¦›à§‡à¦¨ à¦—à¦žà§à¦œà¦¾à¦²à§‹ à¦¹à¦¿à¦—à§à§Ÿà§‡à¦‡à¦¨à§‡à¦° à¦¦à¦¿à¦• \r\nà¦¥à§‡à¦•à§‡à¥¤ à¦­à§‹à¦Ÿà¦¾à¦­à§à¦Ÿà¦¿à¦¤à§‡ à¦à¦•à¦¾à¦¦à¦¶à§‡ à¦¢à§‹à¦•à¦¾à¦° à¦¸à§à¦¯à§‹à¦— à¦®à§‡à¦²à§‡à¦¨à¦¿ à¦¦à¦²à§‡à¦° à¦®à§‚à¦² à¦«à¦°à§‹à§Ÿà¦¾à¦°à§à¦¡à§‡à¦°!</p>\r\n<p>à¦¸à¦¾à¦®à§à¦ªà§à¦°à¦¤à¦¿à¦• à¦¸à¦®à§Ÿà§‡ à¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¿à¦¨à¦¾ à¦®à§‡à¦¸à¦¿ à¦¨à¦¿à¦°à§à¦­à¦° à¦¦à¦², à¦•à¦¥à¦¾à¦Ÿà¦¿ à¦¸à¦¬à¦¾à¦°à¦‡ à¦œà¦¾à¦¨à¦¾à¥¤ à¦¯à¦¾à¦•à§‡ \r\nà¦˜à¦¿à¦°à§‡à¦‡ à¦ªà§à¦°à¦¤à¦¿à¦ªà¦•à§à¦·à¦¦à§‡à¦° à¦¦à§à¦®à§œà§‡ à¦®à§à¦šà§œà§‡ à¦¦à§‡à¦“à§Ÿà¦¾à¦° à¦œà¦¨à§à¦¯ à¦¸à¦¾à¦®à§à¦ªà¦¾à¦“à¦²à¦¿à¦° à¦¸à¦¬ à¦¨à¦•à¦¶à¦¾ à¦†à¦à¦•à¦¾à¥¤ à¦…à¦¥à¦š \r\nà¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¿à¦¨à¦¾à¦° à¦•à¦¿à¦›à§ à¦®à¦¾à¦¨à§à¦· à¦•à¦¿à¦¨à§à¦¤à§ à¦šà¦¾à¦¨ à¦¨à¦¾, à¦®à§‡à¦¸à¦¿ à¦à¦•à¦¾à¦¦à¦¶à§‡ à¦–à§‡à¦²à§à¦•à¥¤ à¦…à¦¨à§à¦¤à¦¤ à¦œà¦°à¦¿à¦ªà§‡à¦° \r\nà¦«à¦² à¦•à¦¿à¦¨à§à¦¤à§ à¦¤à¦¾à¦‡ à¦¬à¦²à¦›à§‡à¥¤ à¦œà¦°à¦¿à¦ªà§‡ à¦®à§‡à¦¸à¦¿à¦° à¦ªà¦•à§à¦·à§‡ à¦­à§‹à¦Ÿ à¦ªà§œà§‡à¦›à§‡ à§¯à§¯.à§ªà§¬%à¥¤ à¦…à¦°à§à¦¥à¦¾à§Ž à§¦.à§«à§ª \r\nà¦¶à¦¤à¦¾à¦‚à¦¶ à¦®à¦¾à¦¨à§à¦· à¦šà¦¾à¦¨ à¦¨à¦¾ à¦®à§‡à¦¸à¦¿ à¦à¦•à¦¾à¦¦à¦¶à§‡ à¦¥à¦¾à¦•à§à¦•à¥¤ à¦­à¦¾à¦¬à¦¾ à¦¯à¦¾à§Ÿ!</p>\r\n<p>à¦®à¦œà¦¾ à¦†à¦›à§‡ à¦†à¦°à¦“à¥¤ à¦¸à¦®à¦°à§à¦¥à¦•à§‡à¦°à¦¾ à¦à¦•à¦¾à¦¦à¦¶ à¦¸à¦¾à¦œà¦¿à§Ÿà§‡à¦›à§‡à¦¨ à¦®à¦¾à¦¤à§à¦° à¦¤à¦¿à¦¨à¦œà¦¨ à¦¡à¦¿à¦«à§‡à¦¨à§à¦¡à¦¾à¦°à¦¦à§‡à¦° à¦¨à¦¿à§Ÿà§‡à¥¤\r\n à¦†à¦¬à¦¾à¦° à¦—à§‹à¦²à¦°à¦•à§à¦·à¦• à¦¹à¦¿à¦¸à§‡à¦¬à§‡ à¦¤à¦¾à¦°à¦¾ à¦¦à¦²à§‡ à¦šà¦¾à¦šà§à¦›à§‡à¦¨ à¦°à¦¿à¦­à¦¾à¦°à¦ªà§à¦²à§‡à¦Ÿà§‡à¦° à¦—à§‹à¦²à¦°à¦•à§à¦·à¦• à¦†à¦°à¦®à¦¾à¦¨à¦¿à¦•à§‡à¥¤ \r\nà¦¤à¦¿à¦¨à¦¿ à¦­à§‹à¦Ÿ à¦ªà§‡à§Ÿà§‡à¦›à§‡à¦¨ à§¬à§® à¦¶à¦¤à¦¾à¦‚à¦¶à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ à¦¦à¦°à§à¦¶à¦•à§‡à¦°à¦¾ à¦¯à¦¾à¦‡ à¦¬à¦²à§à¦• à¦¸à¦¾à¦®à§à¦ªà¦¾à¦“à¦²à¦¿à¦° à¦à¦•à¦¾à¦¦à¦¶à§‡ \r\nà¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¿à¦¨à¦¾à¦° à¦¤à¦¿à¦¨ à¦•à¦¾à¦ à¦¿ à¦¸à¦¾à¦®à¦²à¦¾à¦¨à§‹à¦° à¦¦à¦¾à§Ÿà¦¿à¦¤à§à¦¬à§‡ à¦¥à¦¾à¦•à¦¾à¦° à¦•à¦¥à¦¾ à¦šà§‡à¦²à¦¸à¦¿ à¦—à§‹à¦²à¦°à¦•à§à¦·à¦• à¦‰à¦‡à¦²à¦¿ \r\nà¦•à§à¦¯à¦¾à¦¬à¦¾à§Ÿà§‡à¦°à§‹à¦°à¥¤ à¦¯à¦¾à¦° à¦ªà¦•à§à¦·à§‡ à¦­à§‹à¦Ÿ à¦ªà§œà§‡à¦›à§‡ à¦®à¦¾à¦¤à§à¦° à§©à§§ à¦­à¦¾à¦—à¥¤ à¦¦à¦°à§à¦¶à¦•à¦¦à§‡à¦° à¦à¦•à¦¾à¦¦à¦¶à§‡ à¦¨à§‡à¦‡ \r\nà¦®à¦¾à¦°à§à¦•à§‹ à¦°à§‹à¦¹à§‹à¦“à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ à¦†à¦‡à¦¸à¦²à§à¦¯à¦¾à¦¨à§à¦¡à§‡à¦° à¦¬à¦¿à¦ªà¦•à§à¦·à§‡ à¦à¦‡ à¦«à§à¦²à¦¬à§à¦¯à¦¾à¦•à§‡à¦°à¦“ à¦¦à¦²à§‡ à¦¥à¦¾à¦•à¦¾ à¦ªà§à¦°à¦¾à§Ÿ \r\nà¦¨à¦¿à¦¶à§à¦šà¦¿à¦¤à¥¤</p>\r\n<p>à¦¦à¦°à§à¦¶à¦•à¦¦à§‡à¦° à¦­à§‹à¦Ÿà§‡à¦° à¦¬à¦¿à¦šà¦¾à¦°à§‡ à¦†à¦°à§à¦œà§‡à¦¨à§à¦Ÿà¦¾à¦‡à¦¨ à¦à¦•à¦¾à¦¦à¦¶à¦ƒ<br>à¦†à¦°à¦®à¦¾à¦¨à¦¿, à¦®à§‡à¦¸à¦¿, à¦“à¦¤à¦¾à¦®à§‡à¦¨à§à¦¡à¦¿, à¦®à¦¾à¦°à¦•à¦¾à¦¦à§‹, à¦¤à¦¾à¦—à¦²à¦¿à§Ÿà¦¾à¦«à¦¿à¦•à§‹, à¦®à¦¾à¦šà§‡à¦°à¦¾à¦¨à§‹, à¦²à§‹ à¦¸à§‡à¦²à¦¸à§‹, à¦ªà¦¾à¦­à§‹à¦¨, à¦†à¦—à§à§Ÿà§‡à¦°à§‹, à¦¡à¦¿ à¦®à¦¾à¦°à¦¿à§Ÿà¦¾ à¦“ à¦®à§‡à¦¸à¦¾</p><p><br></p></div></article></div></div></div><p></p>\">', '2018-07-18 22:55:02', 0, 1),
(19, 'now', '<p>for test</p>', '2018-07-19 13:17:28', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
