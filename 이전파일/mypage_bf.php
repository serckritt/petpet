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
    <title>펫펫 akdl</title>
</head>
<body>
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
        <?php require("main_area.php") ?>
        <?php require("category.php")?>
        <div class="mypageContent">
            <div class="mypageSubtitle">최근 주문내역</div>
            <div class="buyHistory">
                <div class="proBox">
                    <div class="proSub1">날짜</div>
                    <div class="proSub2">상품정보</div>
                    <div class="proSub3">상태</div>
                    <div class="proSub4">재고</div>
                </div>
                <div class="bhBox">최근 구매 내역이 없습니다.</div>
            </div>
            <div class="mypageSubtitle">최근 봤던 상품내역</div>
            <div class="famProduct">
                <div class="proBox">
                    <div class="proSub1">날짜</div>
                    <div class="proSub2">상품정보</div>
                    <div class="proSub3">상태</div>
                    <div class="proSub4">재고</div>
                </div>
                <div class="bhBox">최근 본 상품이 없습니다.</div>
            </div>
        </div>
    </div>
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
</body>
</html>