SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `anna_php`
--
CREATE DATABASE IF NOT EXISTS `martinho_php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `martinho_php`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `first_name`, `last_name`) VALUES
  (1, 'kasutaja', '69fb46f4c18463dd25002aeffc0257d1', 'Kasutaja', 'Tavaline');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;