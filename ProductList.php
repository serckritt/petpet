<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/proRelated.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <title>펫펫</title>
</head>
<body>
    <div class="nevBg1">
        <div class="nevBg2"></div> <!--이거 네비게이션바 배경입니다.-->
    </div>
    <div class="webWidth">
        <?php require("main_area.php") ?>
    </div>
    <div class="webWidth">
        <?php require("category.php") ?>
        
<?php
    if(isset($_REQUEST["cate1"]))
        $cate1_num = $_REQUEST["cate1"];     // 대분류 검색시 값
    else $cate1_num = -1;                        //없으면 기본값 적용

    if(isset($_REQUEST["cate3"]))
        $cate3_num = $_REQUEST["cate3"];     //소분류 검색시 값
    else $cate3_num = -1;                       // 없으면 기본값 적용

    if(isset($_REQUEST["search"]))
        $search = $_REQUEST["search"];     //검색창에 검색했을경우
    else $search = "";                       // 없으면 기본값 적용
?>
        <div class="listBx">
<?php 
    if($search != ""){

  
?>
            <div class="listText"><i><?=$search?></i> 키워드로 검색하신 결과입니다.</div>
<?php
  }
?>
<?php
    try{ // 트라이문 시작
        require("db_connect.php"); //db연결  

        if($cate1_num != -1){           //대분류가 기본값이 아니면(값이 들어왔으면)
            $query = $db->query("select pro.pro_num AS pro_num, pro.pro_name AS pro_name, 
                                        pro.pro_img AS pro_img, pro.pro_prize AS pro_prize
                                                            -- 검색 상품의 키 이름 이미지 가격
                                from product pro, category_1st cate1, category_2nd cate2, category_3rd cate3   
                                                            -- 상품 대분류 소분류 테이블에서 

                                where cate1.cate1_num = '$cate1_num' and cate1.cate1_num = cate2.cate1_num and 
                                        cate2.cate2_num=cate3.cate2_num AND cate3.cate3_num=pro.cate3_num
                                                            -- 조건 리퀘스트 받은 대분류 키 그리고 대분류 소분류 키가 같은것
                                order by pro.pro_num desc   -- 정렬 상품키 내림차순(최근상품부터)
                                ");
        }else if($cate3_num != -1){      // 소분류가 기본값이 아니면(값이 들어왔으면)
            $query = $db->query("select *                             -- 검색 전부다
                                from product                      -- 상품 테이블에서 
                                where cate3_num = '$cate3_num'    -- 조건 리퀘스트 받은 카테고리 키
                                order by pro_num desc             -- 정렬 상품키 내림차순(최근상품부터)
                                ");
        }else if($search != ""){ // 검색창에 검색했을 경우
           $search = '%'.$search.'%';     //검색창에 검색했을경우

            $query = $db->query("select *                             -- 검색 전부다
                                from product                      -- 상품 테이블에서 
                                where pro_name like '$search'     -- 검색 키워드로
                                order by pro_num desc             -- 정렬 상품키 내림차순(최근상품부터)
                                ");
        }else{                      // 대분류 소분류 모두 기본값이면(값 받은게 없으면)
            $query = $db->query("SELECT *, AVG(rev_rating)                  -- 상품의 전체, 평점평균
                                    FROM product pr, review rv                  -- 상품 리뷰 테이블에서
                                    WHERE pr.pro_num= rv.pro_num -- 정렬용
                                    GROUP BY pr.pro_num         -- 상품별로 평균
                                    ORDER BY AVG(rev_rating) desc");
        }

        

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {          // 반복문 검색한 상품들 끝날때까지                        
            
            $pro_num = $row["pro_num"];          // 상품키를 변수에 저장

            $query2 = $db->query("select round(AVG(rev_rating),2) AS avg, 
                                        COUNT(*)         AS count    -- 검색 평점평균, 리뷰총합
                                from review                          -- 리뷰 테이블에서 
                                WHERE pro_num='$pro_num'             -- 조건 검색했던 상품키와 같은것                      -- 정렬 리뷰키 순서로 --는 sql 주석
                                ");
            
            $row2 = $query2->fetch(PDO::FETCH_ASSOC);

            $query3 = $db->query("select rev_text                    -- 검색 리뷰내용
                                from review                          -- 리뷰 테이블에서 
                                WHERE rev_num = (SELECT max(rev_num) -- 조건 리뷰키최대값(가장최근리뷰)
                                    FROM review 
                                    WHERE pro_num='$pro_num')        -- 검색했던 상품키와 같은것 중에서
                                ");

            $row3 = $query3->fetch(PDO::FETCH_ASSOC);



            $url = "productpage.php?num=".$row["pro_num"];
            //상품페이지 주소

            $img = $row["pro_img"];
            //이미지 경로

            $name = $row["pro_name"];
            //상품 이름

            $prize = number_format($row["pro_prize"]);
            //상품 가격 쉼표붙임


            if ($row2["avg"]==null){ //만약 평점이 없으면
                $rating = 0;     //평점을 0으로 함
            } else{
                $rating = $row2["avg"]; // 아니라면 가져옴
            }

            if ($row2["count"]==0){                 //만약 리뷰 총합 개수가 0이면
                $rev_text = '아직 리뷰가 없습니다.';     //대체 텍스트 넣음
                $rev_img = "https://user-images.githubusercontent.com/126138315/234766281-4bac09fc-2ff6-487a-86ec-d27a592ec212.png";
            } else {                   
                $rev_text = $row3["rev_text"]; //아니라면 리뷰 불러옴
                $rev_img = "https://user-images.githubusercontent.com/126138315/234766275-37966cb5-fb4c-4924-b487-3f3595c7583a.png";
            }

            // 상품페이지주소 	$url
            // 상품이미지 		$img
            // 상품이름			$name
            // 상품가격			$prize
            // 리뷰평점평균 	$rating
            // 가장최근리뷰 	$rev_text

            $pbNum = "pbNum".$pro_num;
            $form = "pro".$pro_num;
            $pbCount = "pbCount".$pro_num;
            $pbPlus = "pbCount".$pro_num."('plus')";
            $pbMinus = "pbCount".$pro_num."('minus')";
?>
            <div class="proBx">
                <div class="proBxImg">
                    <div><a href=<?=$url?>><img src=<?=$img?>></a></div>
                </div>
                <div class="proBxContent">
                    <div class="pbcTitle">
                        <?=$name?><br>
                        <span><?=$prize?></span><b style="color:#87003a">원</b><br>
                        <b style="color:green; font-size:0.6em;">배송비 무료</b>
                    </div>
                    <div class="pbcReview">
                        <div class="pbcIcon">
                            <img src=<?=$rev_img?>>
                        </div>
                        <div class="pbcrContent"><?=$rev_text?></div>
                    </div>
                </div>
                <div class="proBxContent2">
                <form action="sendcart.php" method="post" name=<?=$form?>>
                        <input type="hidden" value=<?=$pro_num?> name="pro_num">
                        <input type="hidden" value="1" name="count">
                    <div>
                        <div class="pbCount">
                            <button type ="button" onclick=<?=$pbMinus?>>-</button>
                            <div class="pbNumber" id=<?=$pbNum?>>1</div>
                            <button type="button" onclick=<?=$pbPlus?>>+</button>
                        </div>
                    </div>
                    <br><br>
                    <div><button type="submit" class="basket">장바구니</button></div>
                </form>
                </div>
            </div>
<?php
        echo '<script>
        function ',$pbCount,'(type) {
            const resultElement = document.getElementById("',$pbNum,'");
            let number = resultElement.innerText;
          
            if (type === "plus") {
              number = parseInt(number) + 1;
            } else if (type === "minus") {
              if (parseInt(number) <= 1) {
                number = number;
              } else {
                number = parseInt(number) - 1;
              }
            }
            resultElement.innerText = number;
            document.',$form,'.count.value  = number;
          }        
        </script>';

        } // 반복 끝
    } catch (PDOException $e) {
        exit($e->getMessage());
    } //트라이문
?>

    <div class="footer">
        <div class="footerBox1">
            <div class="support">
                <b style="font-size: 1.2em;">고객지원센터</b><br><br>
                <b style="font-size: 1.5em;">TEL 031-740-1114 PAX 031-740-1114</b><br>
                <p>평일 오전 10시부터 오후 7시까지/점심시간 12시부터 1시까지<br>
                토요일 오전 10시부터 오후 3시까지<br>
                일요일 휴무</p><br>
                <b style="font-size: 1.2em;">반품배송지</b><br>
                <p>경기도 성남시 신구대학교</p>
            </div>
        </div>
        <div class="footerBox2">
            <div class="support">
                <b style="font-size: 1.2em;">즐겨 찾는 메뉴</b><br><br>
                <p>공지사항</p>
                <p>장바구니</p>
                <p>찜한상품</p>
                <p>상품조회</p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/category.js"></script>
</body>
</html>