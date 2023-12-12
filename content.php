<div class="container">
    <div class="conTitle">이주전체<span>인기상품</span></div>
    <div class="conMainImg">
<?php
    try { //트라이문 시작
        require("db_connect.php"); //db연결  

        $query = $db->query("SELECT *, AVG(rev_rating)                  -- 상품의 전체, 평점평균
                            FROM product pr, review rv                  -- 상품 리뷰 테이블에서
                            WHERE pr.pro_num= rv.pro_num -- 정렬용
                            GROUP BY pr.pro_num         -- 상품별로 평균
                            ORDER BY AVG(rev_rating) desc");  
                            
        $i = 1;        // 반복카운트 변수

        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {          // 반복문 검색한 상품들 끝날때까지
            
            if($i>3) break;
                    //  반복이 3번을 넘어가면 반복중지
                    
            $pro_num = $row["pro_num"];          // 상품키를 변수에 저장

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
        <div class="CMIP">
            <a href=<?=$url?>>
                <img src=<?=$img?>>
            </a>
            <div class="cmiTxt">
                <div class="cmiTxt1"><?=$name?></div>
                <div class="cmiTxt2"><span><?=$prize?>원</span></div>
            </div>
        </div> 
<?php
            $i++;   // 반복카운트 증가
            }      // 반복 끝          
?>
    </div>
    <div class="conSubImg">
        <div class="csiContent">
            <ul class="gallery">
<?php        
        $i = 1;        // 반복카운트 변수

        $array = [1, 5, 12, 17, 20, 27];

        while ($i<=6) {          //  반복카운트  3번반복마다 클래스 재생성
            //  반복이 6번을 넘어가면 반복중지
            
            $j = $array[$i-1];
            
            $query = $db->query("SELECT * ,AVG(rev_rating)               -- 상품의 전체, 평점평균
                            FROM product pr, review rv                   -- 상품 리뷰 테이블에서
                            WHERE pr.pro_num= rv.pro_num AND cate3_num = '$j' -- 정렬용
                            GROUP BY pr.pro_num         -- 상품별로 평균
                            ORDER BY AVG(rev_rating) desc"); 
                    
            while($row = $query->fetch(PDO::FETCH_ASSOC)){  

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

                $count = $row2["count"];

                if ($row2["count"]==0){                 //만약 리뷰 총합 개수가 0이면
                    $rev_text = '아직 리뷰가 없습니다.';     //대체 텍스트 넣음
                    $pusa = 'https://user-images.githubusercontent.com/126138315/234766281-4bac09fc-2ff6-487a-86ec-d27a592ec212.png';
                } else {                   
                    $rev_text = $row3["rev_text"]; //아니라면 리뷰 불러옴
                    $pusa = 'https://user-images.githubusercontent.com/126138315/234766275-37966cb5-fb4c-4924-b487-3f3595c7583a.png';
                }  
            break;    

        }
            
            // 상품페이지주소 	$url
            // 상품이미지 		$img
            // 상품이름			$name
            // 상품가격			$prize
            // 리뷰평점평균 	$rating
            // 리뷰개수         $count
            // 가장최근리뷰 	$rev_text
?>   

            
            
                <li>
                    <div class="bx"><a href=<?=$url?>>
                        <div class="imgContainer"><img src=<?=$img?>></div>
                        <div class="proText">
                            <div class="proText_title">
                                <div class="proText_title_name">
                                    <b><?=$name?></b>
                                </div>
                                <div>평점 <?=$rating?> 리뷰 <?=$count?></div>
                        
                            </div>
                            <div class="reviewPreview">
                                <div class="reviewPreview1"><img src=<?=$pusa?>></div>
                                <div class="reviewPreview2"><?=$rev_text?></div>
                            </div>
                        </div>
                    </a></div>
                </li>
    <?php

                IF($i%3==0){      //3번반복마다 클래스 csiContent 재생성

    ?>

            </ul>
        </div>
        <div class="csiContent">
            <ul class="gallery">

    <?php
                }

            $i++;   // 반복카운트 증가
            }           // 반복 끝                        
        } catch (PDOException $e) {
            exit($e->getMessage());
        } //트라이문 끝
    ?>
            </ul>
        </div>
    </div>
</div>
