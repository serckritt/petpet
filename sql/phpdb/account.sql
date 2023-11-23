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

-- 테이블 데이터 phpdb.account:~5 rows (대략적) 내보내기
/*!40000 ALTER TABLE `account` DISABLE KEYS */;
INSERT INTO `account` (`acc_num`, `acc_id`, `acc_pw`, `acc_name`, `acc_phone`, `acc_email`, `acc_admin`, `acc_img`, `acc_date`) VALUES
	(6, 'qwer', '1234', '이재원', '01012344444', 'baer@naver.com', 0, NULL, '2023-04-14'),
	(7, '123', '1234', '홍길동', '0101234', '4321@naver.com', 0, NULL, '2023-05-20'),
	(8, 'aid', 'aid', '에이', '01001010101', 'id@naver.com', 0, NULL, '2023-06-14'),
	(9, 'forth', 'forth', '네네네', '01044444444', 'four@daum.net', 0, NULL, '2023-06-15'),
	(10, '12345', '123', 'dyg', '010131313', 'four@daum.net', 0, NULL, '2023-06-15');
/*!40000 ALTER TABLE `account` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
