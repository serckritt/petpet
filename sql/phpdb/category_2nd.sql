-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        10.4.27-MariaDB - mariadb.org binary distribution
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- 테이블 데이터 phpdb.category_2nd:~9 rows (대략적) 내보내기
/*!40000 ALTER TABLE `category_2nd` DISABLE KEYS */;
INSERT INTO `category_2nd` (`cate2_num`, `cate2_name`, `cate1_num`) VALUES
	(1, '개/강아지', 1),
	(2, '고양이', 1),
	(3, '조류/파충류', 1),
	(4, '피부/구강 관련', 2),
	(5, '눈/귀 관련', 2),
	(6, '건강 식품', 2),
	(7, '장난감/훈련용품', 3),
	(8, '미용/샴푸', 3),
	(9, '의류/액세서리', 3);
/*!40000 ALTER TABLE `category_2nd` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
