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

-- 테이블 데이터 phpdb.record:~15 rows (대략적) 내보내기
/*!40000 ALTER TABLE `record` DISABLE KEYS */;
INSERT INTO `record` (`record_num`, `acc_id`, `name`, `phone`, `email`, `postcode`, `address1`, `address2`, `delivery`, `pro_num`, `count`, `paymath`, `Installment`, `visible`, `date`) VALUES
	(1, 'qwer', '이재원', '01012345678', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 1, 50, 1, 1, 1, 0, '2023-06-11'),
	(2, 'qwer', '이재원', '01012345678', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 1, 40, 2, 1, 1, 1, '2023-06-10'),
	(3, 'qwer', '이재원', '01012345678', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 1, 30, 3, 1, 1, 1, '2023-06-12'),
	(4, 'qwer', '이재원', '01012345678', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 1, 80, 4, 1, 1, 1, '2023-06-13'),
	(5, 'aid', '아이디', '01001010101', 'id@naver.com', '12345', '경기도 성남시', '신구대학교', 2, 81, 1, 1, 1, 1, '2023-06-14'),
	(6, 'qwer', '이재원', '01012345678', 'baer@naver.com', '1234', '경기도 성남시', '신구대학교', 1, 86, 1, 2, 1, 0, '2023-06-15'),
	(7, 'qwer', '이재원', '01012345678', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 1, 32, 1, 2, 1, 0, '2023-06-15'),
	(8, 'qwer', '이재원', '01012345678', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 2, 32, 1, 2, 1, 0, '2023-06-15'),
	(9, 'qwer', '이재원', '01012345678', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 1, 20, 1, 2, 1, 0, '2023-06-15'),
	(10, 'qwer', '이재원2', '01012345678', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 2, 86, 5, 2, 1, 1, '2023-06-15'),
	(11, 'qwer', '이재원2', '01012345678', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 2, 32, 3, 2, 1, 1, '2023-06-15'),
	(12, 'qwer', '이재원2', '01012345678', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 2, 20, 5, 2, 1, 1, '2023-06-15'),
	(13, 'qwer', '이재원', '01012345678', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 2, 20, 1, 3, 1, 1, '2023-06-15'),
	(14, 'qwer', '이재원', '01012345678', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 2, 30, 4, 3, 1, 1, '2023-06-15'),
	(15, 'qwer', '이재원', '01012344444', 'baer@naver.com', '1234', '경기도 성남시', '신구대학교', 2, 32, 1, 2, 1, 1, '2023-06-15'),
	(16, 'qwer', '이재원', '01012344444', 'baer@naver.com', '12345', '경기도 성남시', '신구대학교', 3, 32, 1, 2, 1, 1, '2023-06-15'),
	(17, 'qwer', '이재원', '01012344444', 'baer@naver.com', '12345', 'asdf', 'asf', 1, 35, 1, 1, 1, 1, '2023-09-07');
/*!40000 ALTER TABLE `record` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
