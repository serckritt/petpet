<div>
    <div class="mpfont">최고 인기 <span>간식</span></div>
    <div class="bxTwo">
    <?php
    try { //트라이문 시작
        require("db_connect.php"); //db연결  

        $query = $db->query("SELECT *, AVG(rev_rating)                  -- 상품의 전체, 평점평균
                            FROM product pr, review rv                  -- 상품 리뷰 테이블에서
                            WHERE (cate3_num = 2 OR cate3_num = 3 OR cate3_num = 4 OR cate3_num = 6 OR cate3_num = 7) 
                                and pr.pro_num= rv.pro_num -- 간식만
                            GROUP BY pr.pro_num         -- 상품별로 평균
                            ORDER BY AVG(rev_rating) desc  -- 평점순 정렬
                            "); 

        
        

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {          // 반복문 검색한 상품들 끝날때까지

            $i = 1;        // 반복카운트 변수
            
            if($i>5) break;
                    //  최대 5개만 가져옴


            $url = "productpage.php?num=".$row["pro_num"];
            //상품페이지 주소

            $img = $row["pro_img"];
            //이미지 경로

            $name = $row["pro_name"];
            //상품 이름

            $prize = number_format($row["pro_prize"]);
            //상품 가격 쉼표붙임




            
            // 상품페이지주소 	$url
            // 상품이미지 		$img
            // 상품이름			$name
            // 상품가격			$prize
            
?>       
        <div class="bx2">
            <div class="bx2IntheBx">
                <div class="imgContainer2">
                    <a href=<?=$url?>>
                        <img src=<?=$img?>>
                    </a>
                </div>
                <div class="proText2">
                    <?=$name?><br><span><?=$prize?></span><b style="color:#87003a;">원</b><br>
                </div>
            </div>
        </div>
<?php

            $i++;   // 반복카운트 증가
        }           // 반복 끝                        
    } catch (PDOException $e) {
        exit($e->getMessage());
    } //트라이문 끝
?>       
    </div>
</div>
    