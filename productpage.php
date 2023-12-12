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
        <?php require("main_area.php"); ?>
    </div>
    <div class="webWidth">
        <?php require("category.php"); ?>
        
<?php
    $num =  $_REQUEST["num" ];

    if($_REQUEST["num" ]==null){    //리퀘스트가 없을때 강제로 이전페이지로 보냄
?>
<script>
    alert("잘못된 접근입니다.");
    history.back();
</script>
<?php
    }
    try{
        require("db_connect.php");

        $query = $db->query("select *                       -- 검색 전부
                                from product                -- 상품 테이블에서 
                                where pro_num = '$num'      -- 조건 리퀘스트 키랑 같은거만
                                ");
        if($row = $query->fetch(PDO::FETCH_ASSOC)){   

            $img = $row["pro_img"];                     //상품 이미지
            $name = $row["pro_name"];                   //상품 이름
            $prize = number_format($row["pro_prize"]);  //상품 가격
            $cate3_num = $row["cate3_num"];     // 소분류 밑에서 쓸거임
?>
        <div class="probox">
            <div class="proimg">
                <img src=<?=$img?>>
            </div>
            <div class="proinfo">
                <div class="pinfo">
                    <b><?=$name?></b>
                </div>
                <div class="line"></div>
                <div class="pinfo1">
                    <span><?=$prize?></span><b style="color:#99004c;">원</b>
                </div>
                <div class="pinfo1">
                    배송비 무료
                </div>
                <div class="line"></div>
                <div class="pcount">
                    <div class="pcount1">수량</div>
                    <div class="pcount2">
                        <button type ="button" onclick="proCount('minus')">-</button>
                        <div id="cResult">1</div>
                        <button type="button" onclick="proCount('plus')">+</button>
                    </div>
                </div>
                <div class="line"></div>
                <div class="pcount">
                    <div class="pcount1">구매 가격</div>
                    <div id="prResult"><?=$prize?></div>원 
                </div>
                <form method="post" name="buy" action="sendcart.php">
                    <div class="pBtn">
                        <input type="hidden" name="pro_num" value=<?=$num?>>
                        <input type="hidden" name="count" id="hiddencnt" value="1"> 
                        <input type="hidden" name="type" value="1"> 
                        <button type="submit" id="shopBasketBtn">장바구니</button>
                        <button type="submit" id="buyNowBtn" formaction="buy.php">바로구매</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="choose">
            <button type="button" id="cBtn1">상품상세</button>
            <button type="button" id="cBtn2">리뷰</button>
        </div>
        <div class="twoMenu">
<?php 
    $query2 = $db->query("select cate1.cate1_num AS cate1_num
                                                    -- 검색 상품의 대분류
                        from product pro, category_1st cate1, category_2nd cate2, category_3rd cate3   
                                                    -- 상품, 대분류, 소분류 테이블에서 

                        where pro.cate3_num = '$cate3_num'  AND cate3.cate3_num = pro.cate3_num
                            and cate2.cate2_num=cate3.cate2_num and cate1.cate1_num = cate2.cate1_num
                                                    -- 조건 상품의 소분류 키 그리고 그 소분류를 가지고 있는 대분류
                        ");

    $row2 = $query2->fetch(PDO::FETCH_ASSOC);

    $requiretxt="";

    $swt= $row2["cate1_num"];
    switch($swt){ //대분류 값에 따라 불러오는 페이지가 다름
        case 1:
            $requiretxt = "page1.html";
            break;
        case 2:
            $requiretxt = "page2.html";
            break;
        case 3:
            $requiretxt = "page3.html";
            break;    
    }


    require($requiretxt); 

    $query3 = $db->query("select *                          -- 검색 리뷰내용
                                from review                 -- 리뷰 테이블에서 
                                WHERE pro_num='$num'        -- 검색했던 상품키와 같은것 중에서
                                order by rev_num desc       -- 리뷰등록시간 내림차순으로
                                ");
?>
            <div id="menu2">
                <button type="button" id="reviewWrite">리뷰쓰기</button>
<?php

    if(!$row444 = $query3->fetch(PDO::FETCH_ASSOC)){
        ?>
            <div class="reviewBx1">
                    <img src="https://user-images.githubusercontent.com/126138315/234766281-4bac09fc-2ff6-487a-86ec-d27a592ec212.png">
                    <div class="rBxName">
                        <br>
                        <div class="wrap-star">
                            <div class='star-rating'>
                                <span style ="width:<?=$wrapstar?>%"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviewBx2">
                    아직 리뷰가 없습니다.
                </div>

    <?php
    }
    $query3 = $db->query("select *                          -- 검색 리뷰내용
                                from review                 -- 리뷰 테이블에서 
                                WHERE pro_num='$num'        -- 검색했던 상품키와 같은것 중에서
                                order by rev_num desc       -- 리뷰등록시간 내림차순으로
                                ");
    while($row3 = $query3->fetch(PDO::FETCH_ASSOC)){
        
        $wrapstar = $row3["rev_rating"] * 20;
        $revtext = $row3["rev_text"];
        $id = $row3["acc_id"];

        $query4 = $db->query("select acc_name                       -- 검색 전부
                                from account              -- 상품 테이블에서 
                                where acc_id = '$id'      -- 조건 리퀘스트 키랑 같은거만
                                ");

        $row4 = $query4->fetch(PDO::FETCH_ASSOC);                        
        $name = $row4["acc_name"];
?>
                <div class="reviewBx1">
                    <img src="https://user-images.githubusercontent.com/126138315/234766275-37966cb5-fb4c-4924-b487-3f3595c7583a.png">
                    <div class="rBxName">
                        <?=$name?><br>
                        <div class="wrap-star">
                            <div class='star-rating'>
                                <span style ="width:<?=$wrapstar?>%"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviewBx2">
                    <?=$revtext?>
                </div>
            
<?php        
    }
?>
            </div>
            <div id="menu3">
                <form method="post" action="review_insert.php">
                <table class="bigTable">
                    <tr>
                        <td class="table1" style=" height:50px; text-align:center; ">제목</td>
                        <td class="table2">
                            <input type="text" name="title"
                            style=" width:1273px; height:20px; margin:10px;">
                        </td>
                    </tr>
                    <tr>
                        <td class="table1" style=" height:50px; text-align:center; ">평점</td>
                        <td class="table2">
                            <div class="pcount3">
                                <button type ="button" onclick="starCount('minus')"
                                style="width:40px; height: 40px; font-size: 1.1em;">-</button>
                                <div id="starBx">
                                    <div class="wrap-star">
                                        <div class='star-rating2'>
                                            <span id="starRate" style ="width:10%"></span>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" onclick="starCount('plus')"
                                style="width:40px; height: 40px; font-size: 1.1em;">+</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="table1" style=" height:300px; text-align:center; ">내용</td>
                        <td class="table2">
                        <input type="hidden" id="starValue" name="rating" value="0.5">
                        <input type="hidden" name="pro_num" value=<?=$num?>>
                            <textarea name="text" style="width:1270px; height: 270px; margin:10px;"></textarea>
                        </td>
                    </tr>
                </table>
                <div style=" text-align: right; margin-top: 20px; "><button id="reviewBtn">리뷰 입력</button></div>
                </form>
            </div>
        </div>
    </div>
<?php
        }else{      
?>
    <script>
        alert("잘못된 접근입니다.");        //리퀘스트가 잘못되었을때 강제로 이전페이지로 보냄
        history.back();
    </script>
<?php
        }
    } catch (PDOException $e) {
        exit($e->getMessage());
    }

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
    <script type="text/javascript" src="js/product.js"></script>
</body>
</html>