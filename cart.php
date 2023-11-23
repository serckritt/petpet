<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/userRelated.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <title>펫펫</title>
</head>
<body bgColor="eeeeee">
<?php session_start(); 
    if(!isset($_SESSION['userId'])){
?>
<script>
    alert("로그인이 필요합니다.");
    location.replace('login.php');
</script>
<?php
    }
?>
    
    <div class="webWidth">
        <div style="display:flex;">
            <div style="margin-left: 60px; padding-top: 60px;">
                <span class="logo_font"><a href="index.php">
                <img src="https://user-images.githubusercontent.com/126138315/243158653-97e42336-5dab-4fd5-95ae-884410717add.png">
                </a></span>
            </div>
            <div style="width:1150px; padding-left:800px; box-sizing:border-box;">
                <div class="processIcon">
                    <div class="piBx2">01 장바구니</div>
                    <div class="piBx1">02 주문결제</div>
                    <div class="piBx1">03 주문완료</div>
                </div>
            </div>
        </div>
        <div class="cartContent">
            <div class="cartTitle">장바구니</div>
            <div class="mypageContent">
                <div class="allCheck">
                    <!-- <input type="checkbox" name="allItem">&nbsp; 전체선택 &nbsp;<b>|</b>&nbsp; --><span>전체삭제</span> 
                </div>
                <div class="myConBx">
                    <div class="proBox">
                        <!-- <div class="proSub1">선택</div> -->
                        <div class="proSub2">상품정보</div>
                        <div class="proSub3">상품금액</div>
                        <div class="proSub4">배송비</div>
                    </div>
                    <div class="bhBox">
<?php 
    try{
        require("db_connect.php");

        $id = $_SESSION['userId'];          // 세션에서 아이디 가져옴

        $query = $db->query("select *                       -- 검색 전부
                                from cart                   -- 카트 테이블에서 
                                where acc_id = '$id'        -- 조건 세션에 저장된 아이디로
                                ");

        $sum=0;
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {  
            $cart_num=$row ["cart_num"];
            $pro_num= $row["pro_num"];      //카트에 있는 상품키
            $count = $row["count"];         //카트에 저장된 중복 상품 개수

            $query2 = $db->query("select *                        -- 검색 전부
                                from product                      -- 상품 테이블에서 
                                where pro_num = '$pro_num'        -- 조건 반복문의 집어넣은 카트 행의 상품 번호
                                ");

            $row2 = $query2->fetch(PDO::FETCH_ASSOC);
                    
            $name = $row2["pro_name"];                  //찾아낸 상품이름
            $img = $row2["pro_img"];                    //찾아낸 상품의 이미지
            $prize = number_format($row2["pro_prize"] * $count);     //찾아낸 상품 가격*개수 에다가 쉼표붙임
            $sum = $sum + $row2["pro_prize"]* $count;
?>

                        <div class="cartItem">
                            <div class="ciBx2">
                                <a href="productpage.php?num=<?=$pro_num?>"><img src=<?=$img?>></a>
                            </div>
                            <div class="ciBx3">
                                <div style="width: 730px;">
                                    <?=$name?><br><br>
                                    <span>수량 <?=$count?>개 선택</span>
                                </div>
                                <div>
                                    <button type="button" onclick="del(<?=$cart_num?>)">X</button>
                                </div>
                            </div>
                            <div class="ciBx4"><?=$prize?></div>
                            <div class="ciBx5">무료</div>
                        </div>
<?php
        }                      
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
?>                        
                        <div class="lumpSum">
                            <div class="lum1">상품가격 <?=number_format($sum)?>원</div>
                            <div class="lum2">+</div>
                            <div class="lum1">배송비 무료</div>
                            <div class="lum2">=</div>
                            <div class="lum1">총 <?=number_format($sum)?>원</div>
                        </div>
                    </div>
                </div>
                <div class="cbtnArea">
                    <button type="button" class="payBtn" onclick="location.href='buy.php'">
                        주문하기
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>

function del(cart_num) {
  
    if (!confirm("장바구니에서 삭제하시겠습니까?")) {
        // 취소(아니오) 버튼 클릭 시 이벤트
        
    } else{ // post 형식으로 장바구니 삭제페이지로 이동
        var form = document.createElement('form');
        form.setAttribute('method', 'post');
        form.setAttribute('action', 'cart_delete.php');
        document.charset = "utf-8";

        var hiddenField = document.createElement('input');
        hiddenField.setAttribute('type', 'hidden');
        hiddenField.setAttribute('name', 'num');
        hiddenField.setAttribute('value', cart_num);
        form.appendChild(hiddenField);


        document.body.appendChild(form);
        form.submit();
    }
}
    </script>
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