-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Verzija:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for blog
CREATE DATABASE IF NOT EXISTS `blog` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `blog`;

-- Dumping structure for table blog.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(155) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table blog.categories: ~5 rows (approximately)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `title`) VALUES
	(1, 'travel'),
	(2, 'food'),
	(3, 'trip'),
	(4, 'survival'),
	(5, 'Fashion');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table blog.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` varchar(355) COLLATE utf8_bin DEFAULT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_posts_categories` (`category_id`),
  KEY `FK_posts_users` (`user_id`),
  CONSTRAINT `FK_posts_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `FK_posts_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table blog.posts: ~6 rows (approximately)
DELETE FROM `posts`;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `image`, `text`) VALUES
	(3, 1, 3, 'One Mile At A Time ', '/storage/images/pexels-photo-976917.jpeg', 'Scotland is a land of lochs, castles and epic landscapes, all served up with the warm welcome and charm of the locals that call this magical land home. I feel like a traitor being an English boy, but if you are looking for a stunning road trip in the UK, then Scotland should be your first port of call.\r\n\r\nMy road trip in Scotland took me from the countries festival city of Edinburgh to the rugged landscapes of the Isle of Skye, here are some of my favourite spots you shouldnâ€™t miss during your one-week visit to Scotland.'),
	(4, 3, 3, 'Hippie In Heels	 ', '/storage/images/pexels-photo-559768.jpeg', 'Loch Lomond & The Trossachs National Park is a stunning area to spend a lazy afternoon in the Scottish sunshine (I promise, it occasionally happens!)\r\n\r\nThe quaint villages with small houses and colourful flowerbeds around the lake provide car parking opportunities and packing a picnic to have lake-side is a must. For hikers or cyclist the trails around the lake are relatively flat compared to the highlands, and with deer dancing around the woodlands, itâ€™s a picturesque spot to take in without exerting too much energy.'),
	(5, 4, 2, 'I Am Aileen	 ', '/storage/images/pexels-photo-838696.jpeg', 'The small village of Glencoe is most famous for the Glencoe Valley, a must-visit during a Scotland road trip to the highlands. One of the most impressive filming locations of James Bond Skyfall itâ€™s not surprisingly one of the most famous valleys in the country now. Find a place to park the car up and take a hike through the valley where waterfalls roll down the mountain, and the views will leave you in complete awe.'),
	(6, 1, 3, 'The Blonde Abroad	 ', '/storage/images/pexels-photo-559768.jpeg', 'One of the most beautiful castles to visit on a Scotland road trip is Dunrobin castle on the east coast. This stately home is open to the public, and from the grounds, at the back, you get a far more impressive view of the white castle with itâ€™s pointed roofs. Itâ€™s a little bit of a detour unless you plan to go norther on your Scotland road trip but one that is entirely worthwhile.'),
	(7, 3, 2, 'California Through My Lens	 ', '/storage/images/pexels-photo-68369.jpeg', 'When you think of Scotland, it likely isnâ€™t beaches that come to your mind. With the Atlantic Ocean on your doorstep, views across some of Scotlands smallest islands and azure waters against silver sands, this is a true hidden gem in Europe.\r\n\r\nNearby Mallaig is the starting point for ferries and the terminus for one very famous train journey. On the west coast of the Highlands, you can get in some great R&R and enjoy the slow village pace here before continuing on your Scottish road trip. Arisaig is a great spot to hire a Kayak and get that fresh Scottish air into your lungs on the water.'),
	(8, 2, 3, 'To Europe And Beyond	 ', '/storage/images/pexels-photo-910329.jpeg', 'Itâ€™s a given on any visit to Scotland you shouldnâ€™t miss the capital city of Edinburgh. If you are lucky enough to visit during August, then Edinburgh Festivals will be in full spring, but the Edinburgh events calendar is year round with 12 festivals in Edinburgh throughout the year.\r\n\r\nItâ€™s by far one of my favourite cities in the world, and you should check out my article on things to do in Edinburgh to get the most out of your visit to the city.');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table blog.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `lastName` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table blog.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
	(2, 'admin', 'admin', 'admin@admin', '$1$rasmusle$5/Q3BavAhB/ze03htaTLf/\n'),
	(3, 'Luka', 'Savovic', 'lule@lule', '$1$rasmusle$aVuqdO9Kk1K8YzS6AyU7X0\n');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
