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

-- 테이블 데이터 phpdb.review:~19 rows (대략적) 내보내기
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` (`rev_num`, `rev_text`, `rev_rating`, `pro_num`, `acc_id`, `date`) VALUES
	(4, '우리집 고양이 연어포 좋아해~~', 5, 4, 'aid', '2023-06-14'),
	(6, '고양고양', 4, 18, 'aid', '2023-06-14'),
	(11, '우리집은 이것만 먹여요', 4, 30, '123', '2023-06-14'),
	(12, '나이쓰!', 3, 31, 'aid', '2023-06-14'),
	(13, '평생쓸거같아요!', 5, 32, '123', '2023-06-14'),
	(14, '늘 믿고 먹여요', 5, 20, '123', '2023-06-14'),
	(15, '수가 모자라지 않나', 2.5, 13, 'aid', '2023-06-14'),
	(16, '냄새가 심한거 같아요...', 3, 17, '123', '2023-06-14'),
	(17, '맛..있어요', 3.5, 21, '123', '2023-06-14'),
	(18, '사람은 먹으면 안 돼요!', 4, 25, 'qwer', '2023-06-14'),
	(19, '하루종일 물고있어요', 3, 27, 'qwer', '2023-06-14'),
	(20, '아주 난리가 나요!', 4, 56, '123', '2023-06-14'),
	(21, '없으면 어떻게 해야할지 막막해요', 4.5, 40, 'qwer', '2023-06-14'),
	(23, '좋아요', 4.5, 86, 'aid', '2023-06-14'),
	(24, '사람도 좋아하고 있어요...', 4, 64, '123', '2023-06-14'),
	(26, 'ㅓㅓㅓㅓㅓ', 5, 85, 'qwer', '2023-06-15'),
	(27, 'kmomko', 3.5, 32, 'qwer', '2023-06-15'),
	(28, 'p.p', 3, 53, 'qwer', '2023-06-15'),
	(29, 'dxgg', 3.5, 32, 'qwer', '2023-06-15'),
	(30, 'mlkmlk', 3.5, 30, 'qwer', '2023-06-15');
/*!40000 ALTER TABLE `review` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
