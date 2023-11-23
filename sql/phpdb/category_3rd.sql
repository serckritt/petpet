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

-- 테이블 데이터 phpdb.category_3rd:~28 rows (대략적) 내보내기
/*!40000 ALTER TABLE `category_3rd` DISABLE KEYS */;
INSERT INTO `category_3rd` (`cate3_num`, `cate3_name`, `cate2_num`, `cate3_url`) VALUES
	(1, '강아지 사료 전체', 1, NULL),
	(2, '육포/개껌', 1, NULL),
	(3, '동결 건조 간식', 1, NULL),
	(4, '웰빙 간식', 1, NULL),
	(5, '고양이 사료 전체', 2, NULL),
	(6, '캔 사료/간식', 2, NULL),
	(7, '건어물/져키/사시미', 2, NULL),
	(8, '조류 모이 전체', 3, NULL),
	(9, '파충류 먹이 전체', 3, NULL),
	(10, '강아지 피부 의약품', 4, NULL),
	(11, '피부 영양크림', 4, NULL),
	(12, '구강 세척 용품', 4, NULL),
	(13, '안구 세정제', 5, NULL),
	(14, '귀 세척 도구', 5, NULL),
	(15, '개/고양이 유산균', 6, NULL),
	(16, '건강 기능 식품', 6, NULL),
	(17, '장난감', 7, NULL),
	(18, '중.대형견용 목줄', 7, NULL),
	(19, '어깨줄', 7, NULL),
	(20, '원반/훈련용품', 7, NULL),
	(21, '미용가위/자재', 8, NULL),
	(22, '샴푸/린스', 8, NULL),
	(23, '위생 패드', 8, NULL),
	(24, '보습/트리트먼트', 8, NULL),
	(25, '의류/모자', 9, NULL),
	(26, '신발/양말', 9, NULL),
	(27, '일반 목걸이 펜던트', 9, NULL);
/*!40000 ALTER TABLE `category_3rd` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
