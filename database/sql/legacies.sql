-- --------------------------------------------------------
-- Sunucu:                       127.0.0.1
-- Sunucu sürümü:                8.0.30 - MySQL Community Server - GPL
-- Sunucu İşletim Sistemi:       Win64
-- HeidiSQL Sürüm:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- tablo yapısı dökülüyor cod_laravel.legacies
CREATE TABLE IF NOT EXISTS `legacies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- cod_laravel.legacies: ~6 rows (yaklaşık) tablosu için veriler indiriliyor
DELETE FROM `legacies`;
INSERT INTO `legacies` (`id`, `key`, `title`, `content`) VALUES
	(1, 'privacy-policy', 'Gizlilik Politikası', '<p style="line-height: 1.68; margin-top: 0pt; margin-bottom: 11pt;"><span style="font-size: 11.5pt; font-family: Arial'),
	(2, 'shipping-policy', 'Kargo Politikası', '<p style="line-height: 1.68; margin-top: 0pt; margin-bottom: 11pt;"><span style="font-size: 11.5pt; font-family: Arial'),
	(3, 'refund-policy', 'Para İade Politikası', '<p>İADELER----Politikamız 30 gün sürer. Satın alma işleminizden bu yana 30 gün geçtiyse'),
	(4, 'terms-and-conditions', 'Hizmet ve Şartlar', '<p>TrendyGods. olarak kişisel verilerinizin 6698 sayılı Kişisel Verilerin Korunması Kanunu\\\'na (“Kanun”) uygun olarak işlenerek'),
	(5, 'contact', 'İletişim', '<p>Burada İletişim içeriği olacak.</p>'),
	(6, 'legal-notice', 'Yasal Bildirim', '<p>Kişisel Verilerin Korunmasına İlişkin Bilgilendirme; TrendyGods olarak kişisel verilerinizin 6698 sayılı Kişisel Verilerin Korunması Kanunu\\\'na (“Kanun”) uygun olarak işlenerek');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
