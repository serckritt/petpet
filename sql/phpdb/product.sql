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

-- 테이블 데이터 phpdb.product:~85 rows (대략적) 내보내기
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`pro_num`, `pro_name`, `pro_img`, `pro_prize`, `cate3_num`) VALUES
	(4, '탐하는 고양이 연어포', 'https://user-images.githubusercontent.com/131941441/234773795-21180163-de25-490c-a210-f8e45fe230d8.jpg', 4900, 6),
	(7, '렙칼 비어디 드래곤 사료', 'https://user-images.githubusercontent.com/131941441/234777080-67662940-d9a2-410e-9ece-703b5425f942.jpg', 9620, 9),
	(8, '테트라 육지거북', 'https://user-images.githubusercontent.com/131941441/234776932-3e90a79c-5c66-4345-add5-d66596002be4.jpg', 28000, 9),
	(9, '푸디바이트', 'https://user-images.githubusercontent.com/131941441/234776755-aa1acad9-da9e-4c75-8989-ddb50caf8fad.jpg', 28000, 9),
	(10, '비타민 과일 라페볼 사료 간식', 'https://user-images.githubusercontent.com/131941441/234776220-94781e27-b8aa-4704-a0b3-7f220bce200b.jpg', 35670, 8),
	(11, '카나리아 모이', 'https://user-images.githubusercontent.com/131941441/234775352-132e6271-fa86-4c92-9350-71d1c19c911b.jpg', 9900, 8),
	(12, '민스 프리미엄 핀치사료', 'https://user-images.githubusercontent.com/131941441/234775276-24cb4cf7-01e0-471a-b38d-e5f59d7c19e3.jpg', 7480, 8),
	(13, '야끼가츠오 구운 가다랑어 해산물', 'https://user-images.githubusercontent.com/131941441/234774968-72914f03-75a6-4282-be56-70d6f3d79939.jpg', 9900, 7),
	(14, '아수쿠 헬시미오 비프져키', 'https://user-images.githubusercontent.com/131941441/234774450-2a245cb8-8c9b-4b21-9e39-f0b8aa5a4c37.jpg', 3200, 7),
	(15, '미우와우연어슬라이스', 'https://user-images.githubusercontent.com/131941441/234774214-d056d3e8-483f-484d-ab39-9254eecb4d02.jpg', 2850, 7),
	(16, '챠오츄르 닭가슴살', 'https://user-images.githubusercontent.com/131941441/234773971-da586c85-25e8-4e2f-9446-0694d231860e.jpg', 2300, 6),
	(17, '웨루바 고양이사료 습식 주식캔', 'https://user-images.githubusercontent.com/131941441/234773666-abda8b7c-eb20-4ad8-92f9-a6d3ad51ffd2.jpg', 31120, 6),
	(18, '힐스 사이언스 다이어트 고양이 사료', 'https://user-images.githubusercontent.com/131941441/234773304-78170c1b-16a6-4fa6-8c07-fb4f8dd82e6c.jpg', 36500, 5),
	(19, '팜스코 나비야', 'https://user-images.githubusercontent.com/131941441/234772862-0a3c3303-260c-41f8-a376-ad0af5d97de3.jpg', 32190, 5),
	(20, '뉴캐츠랑 전연령', 'https://user-images.githubusercontent.com/131941441/234772591-9ebfe485-6624-48a1-af1b-9e82d81ed268.jpg', 43300, 5),
	(21, '강아지 비스켓 밀크', 'https://user-images.githubusercontent.com/131941441/234772331-b8f5bf29-efce-421c-b4f6-2d29edb9a948.jpg', 15500, 4),
	(22, '애견사랑 수제간식', 'https://user-images.githubusercontent.com/131941441/234771986-abefc5b5-ccdd-4981-a490-aa7ed96d0520.jpg', 12700, 4),
	(23, '유기농 고구마 애견간식', 'https://user-images.githubusercontent.com/131941441/234771756-95451def-06b6-4744-99b5-6bb35b9ec6a7.jpg', 12500, 4),
	(24, '촉촉트릿 소간', 'https://user-images.githubusercontent.com/131941441/234771368-e24cc481-0fb4-4fa0-b56a-3f88f10288aa.jpg', 10200, 3),
	(25, '동결건조 치킨 트릿', 'https://user-images.githubusercontent.com/131941441/234771246-415cd699-1144-4621-8c93-eb505d407130.jpg', 15900, 3),
	(26, '뽀시래기 북어 큐브 트릿', 'https://user-images.githubusercontent.com/131941441/234770981-8a67e95b-47a3-49ef-8075-aeefe893c4a0.png', 14300, 3),
	(27, '미트 치킨 껌', 'https://user-images.githubusercontent.com/131941441/234770753-0b94b250-69a4-4bd8-b5c8-2b453aaa171f.jpg', 1500, 2),
	(28, '9인치 애견 강아지 껌', 'https://user-images.githubusercontent.com/131941441/234770562-258f098a-5d20-4415-a2e3-41b914a076a5.jpg', 2800, 2),
	(29, '첼시 강아지육포', 'https://user-images.githubusercontent.com/131941441/234770035-ebd41f49-9a08-482a-b8a7-917b31c54111.jpg', 980, 2),
	(30, '강아지 사료 도기 스페셜', 'https://user-images.githubusercontent.com/131941441/234769742-7b712747-1c55-43b0-8ffc-12115ec20a8c.jpg', 40800, 1),
	(31, '나이스', 'https://user-images.githubusercontent.com/131941441/234768874-48c4f339-6df0-4552-b7f2-887dceb2984e.jpg', 23200, 1),
	(32, '대한사료 케니스', 'https://user-images.githubusercontent.com/131941441/234768620-0ba81aa1-af17-4dbc-b00b-2669f1bd96cc.jpg', 28000, 1),
	(33, '복합 개시딘겔', 'https://user-images.githubusercontent.com/126138315/234769759-c102027c-cda8-4b5f-9f81-a7cc95d79f12.png', 22000, 10),
	(34, '개스팟 피부진정 연고', 'https://user-images.githubusercontent.com/126138315/234769963-962c751a-a736-4775-b833-eb52878a2a41.jpg', 24000, 10),
	(35, '다시 보송 파우더', 'https://user-images.githubusercontent.com/126138315/234770185-533aa6c4-3032-47d4-a980-4743d88f7bb2.png', 32000, 10),
	(36, '댕댕카솔 ', 'https://user-images.githubusercontent.com/126138315/234771213-961cf7e8-f53b-4294-80e1-3c3fb8c233fb.png', 43900, 11),
	(37, '히든테이스트 발바닥 연고', 'https://user-images.githubusercontent.com/126138315/234771296-11fec11b-9fb1-4f32-8348-d0b6e15e7c81.png', 39400, 11),
	(38, '결이매끈 케어크림', 'https://user-images.githubusercontent.com/126138315/234771440-f6fcd273-e549-40db-9f31-8c56d7f4f5f7.png', 27900, 11),
	(39, '헬로도기 노블 애견 구강 스프레이', 'https://user-images.githubusercontent.com/126138315/234772235-842ff050-ca08-44b1-95f1-12cf91f38509.png', 9090, 12),
	(40, '브리더 고양이 구강관리 치약', 'https://user-images.githubusercontent.com/126138315/234772377-018ab1fe-f910-4cdd-9702-f853692842d6.png', 8470, 12),
	(41, '코쿤펫 구내염 염증완화 스프레이', 'https://user-images.githubusercontent.com/126138315/234772484-80212451-d098-4719-9f66-c9a71b671bf1.png', 30740, 12),
	(42, '펫퍼스 안구세정제', 'https://user-images.githubusercontent.com/126138315/234773491-91cbf0b0-7219-4ac6-b4ca-4f6377be6b33.png', 6670, 13),
	(43, '바이랩 강아지 아이클리너', 'https://user-images.githubusercontent.com/126138315/234773579-cb9c358e-fa1e-43cb-a7d5-5fe5cf1553f0.png', 17900, 13),
	(44, '냥이 안구 세정제', 'https://user-images.githubusercontent.com/126138315/234773684-07f7ae7e-08c0-4b24-ae40-0a70d417aa09.png', 8400, 13),
	(45, '리스펫 반려동물 귀세정제', 'https://user-images.githubusercontent.com/126138315/234774388-cd23b50b-8949-4238-a0c1-b848c2413487.png', 9900, 14),
	(46, '리앤웹스터 고양이 귀청소패드', 'https://user-images.githubusercontent.com/126138315/234774478-b848694b-17e1-4338-8ce9-82020e9dca05.png', 8900, 14),
	(47, '페토세라 편백수 강아지 고양이 귀세정제 ', 'https://user-images.githubusercontent.com/126138315/234774597-566b3963-9524-4f84-94c8-627807b1a6ed.png', 18000, 14),
	(48, '탐사 펫 생 유산균 파우더', 'https://user-images.githubusercontent.com/126138315/234775232-1b762848-ebb5-453a-af1c-f004ed853a43.png', 18690, 15),
	(49, '후디스펫 장케어 유산균', 'https://user-images.githubusercontent.com/126138315/234775330-d65cfbb4-1f60-42a4-bb3b-ab49f9e30188.png', 39000, 15),
	(50, '캣츠힐 고양이 전용 영양제', 'https://user-images.githubusercontent.com/126138315/234775481-b968a509-2556-42e5-89b5-9e78f94b8683.png', 33000, 15),
	(51, '펫시딘 바이오틱스 영양제 ', 'https://user-images.githubusercontent.com/126138315/234776431-c05e7645-e753-4d84-815e-3e3bdde09a01.png', 24000, 16),
	(52, '리얼펫 햇살비타민', 'https://user-images.githubusercontent.com/126138315/234776520-712c36b1-3e29-4074-b6c2-089c32b36d87.png', 25900, 16),
	(53, '펫트리온 신장튼튼 면역력 영양제', 'https://user-images.githubusercontent.com/126138315/234776644-38c254da-0a5e-457a-8251-cf64cfe54daf.png', 27500, 16),
	(54, '멍냥이랑 롤링 노즈워크 매트', 'https://user-images.githubusercontent.com/131943459/234768905-999da729-e656-4408-bf98-dcc828f28a16.jpg', 22900, 17),
	(55, '묘견인생 CRAZY 마우스', 'https://user-images.githubusercontent.com/131943459/234769560-17530a7f-7ac1-4958-bc80-3c2d33cb4e3c.jpeg', 17900, 17),
	(56, '모견인생 RC 무선 뱀 장난감', 'https://user-images.githubusercontent.com/131943459/234769836-7a0e3ae3-cf40-4e2c-90c1-3c21f41a9c12.jpeg', 23000, 17),
	(57, '올찬 나일론 강아지 목줄 산책줄', 'https://user-images.githubusercontent.com/131943459/234770413-d24bab61-c7c4-4df3-9e76-f3cdb6ccc390.png', 33400, 18),
	(58, '중형견 대형견 트위스트 가죽 목줄+리드줄 세트', 'https://user-images.githubusercontent.com/131943459/234770646-d6b8ed4c-951b-438d-be6b-367ad2602895.jpg', 37100, 18),
	(59, '중형견 대형견 강아지 가죽 목줄', 'https://user-images.githubusercontent.com/131943459/234771047-46bc9f44-6f76-4fa1-9c58-b55c2222372f.jpg', 22800, 18),
	(60, '퍼피아 강아지 소프트 C 가슴줄 하네스 ', 'https://user-images.githubusercontent.com/131943459/234772131-5c564ce3-20eb-44a1-bba5-6e123ebbc446.jpg', 14500, 19),
	(61, '견생견사 소중대형견 하네스 + 리드줄 세트', 'https://user-images.githubusercontent.com/131943459/234772477-f0bb7de6-49ae-411f-8a12-72bc57350a6b.png', 20800, 19),
	(62, '고양이하네스 고양이전용하네스 가슴줄 산책줄 목줄 산책냥이 산책냥 리본', 'https://user-images.githubusercontent.com/131943459/234772693-3f692833-2e1d-4bfb-8a6c-7d77bb4d2c30.jpg', 11400, 19),
	(63, '강아지 원반 소형견 대형견 장난감 젤라틴 표준규격 프리스비', 'https://user-images.githubusercontent.com/131943459/234773204-e9c487d8-53ea-4902-8558-7934b183b0df.jpg', 7500, 20),
	(64, '칼리펫 럭셔리 훈련벨 고양이벨 ', 'https://user-images.githubusercontent.com/131943459/234773469-2763690b-74cc-4e9f-9b8f-050465064f06.jpg', 6900, 20),
	(65, '레디펫 짖음방지기', 'https://user-images.githubusercontent.com/131943459/234773790-4ac2fcd5-1deb-4cd2-980e-8af2a3622999.jpg', 24300, 20),
	(66, '딩동펫 애완 미용가위 5종 세트', 'https://user-images.githubusercontent.com/131943459/234774508-ef374ce3-ae21-4575-91f7-c29a47f73ad2.jpg', 21000, 21),
	(67, '애견 강아지 셀프 미용 목욕 홀더 받침대', 'https://user-images.githubusercontent.com/131943459/234774721-c07efb37-80f4-4abb-a4b2-74a755aa5ded.jpg', 32400, 21),
	(68, '애견 미용거치대 반려견 반려묘 셀프 미용 해먹 손톱손질 편리한 강아지 미', 'https://user-images.githubusercontent.com/131943459/234774938-04faf373-b771-4e57-8168-93810ae740fa.jpg', 15400, 21),
	(69, '페피릴리프 크리미 버블 스킨 강아지 샴푸', 'https://user-images.githubusercontent.com/131943459/234775622-6e9bcd19-2fa3-4ea4-80be-11be87ecc7f3.jpg', 31000, 22),
	(70, '페피릴리프 크리미버블 볼륨 강아지 샴푸', 'https://user-images.githubusercontent.com/131943459/234776450-0fba37ca-33b6-4007-b54d-a4462e21cbd3.jpg', 33000, 22),
	(71, '체리쉬 백모용 린스 4L 대용량 강아지린스', 'https://user-images.githubusercontent.com/131943459/234776727-7ff7e121-a00d-4328-9a4f-1c95fd67de8f.jpg', 25570, 22),
	(72, '한장뚝딱 라이트 강아지 배변 패드', 'https://user-images.githubusercontent.com/131941441/236094379-642b312c-734a-49e2-a559-771c05a71c98.jpg', 33900, 23),
	(73, '유니참 데오토일렛 소취향균패드', 'https://user-images.githubusercontent.com/131941441/236094665-2ad34cc2-a0dd-4f8f-9466-24892661e932.jpg', 21800, 23),
	(74, '조류용 위생 패드', 'https://user-images.githubusercontent.com/131941441/236095012-fdf4aadd-1b83-4205-b9b3-1f7822cde64e.jpg', 10140, 23),
	(75, '레핑찰리 강아지연고', 'https://user-images.githubusercontent.com/126138315/236094835-bd2333aa-50c5-4dd8-b14a-730d7b677865.png', 22900, 24),
	(76, '부들부들 제너럴 린스', 'https://user-images.githubusercontent.com/126138315/236095024-686e4c7a-f92f-4e53-81ac-5b55a8d0e46b.png', 12800, 24),
	(77, '리스펫랩 저자극 고보습 미스트', 'https://user-images.githubusercontent.com/126138315/236095188-e679e8e4-ffcc-412b-9ed8-cf9ae1242e87.png', 12900, 24),
	(78, '도트 반지퍼 후리스', 'https://user-images.githubusercontent.com/131941441/236095420-0fef33cc-d683-49b3-bb8d-b14ed0836ddb.jpg', 31500, 25),
	(79, '공룡 의상 겨울 따뜻한 양털', 'https://user-images.githubusercontent.com/131941441/236095562-6148e518-f0d1-4bfd-834f-e7921fe44c8e.jpg', 7500, 25),
	(80, '조류 겨울옷 보온 후드티', 'https://user-images.githubusercontent.com/131941441/236095823-a96ccf0d-1629-42c4-b444-dd0f0d38cae2.jpg', 23200, 25),
	(81, '카르노코리아 메쉬 화이트 신발', 'https://user-images.githubusercontent.com/126138315/236095758-d1e3b8a1-c731-4c50-86a4-af1665f7ce93.png', 12800, 26),
	(82, '펫카소 미끄럼방지양말', 'https://user-images.githubusercontent.com/126138315/236095774-ec4356e5-b8b5-48f5-9554-c82faba117ab.png', 13900, 26),
	(83, '반려동물 아쿠아 슈즈', 'https://user-images.githubusercontent.com/126138315/236095784-c039dd0e-0da2-4800-bd51-cf154912e52a.png', 7930, 26),
	(84, '힙스터 체인 목걸이', 'https://user-images.githubusercontent.com/131941441/236095996-5beee402-03ee-4554-8d7a-ae1de540821f.jpg', 3480, 27),
	(85, '일본식 고양이 목걸이', 'https://user-images.githubusercontent.com/131941441/236096115-58bf268b-5ffd-4241-a735-17114d4fc68b.jpg', 7200, 27),
	(86, '실버 강아지 고양이 인식표 이름표 목걸이', 'https://user-images.githubusercontent.com/131941441/236096337-d36b2172-7aef-4087-addc-abb426d712cd.jpg', 57600, 27);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
