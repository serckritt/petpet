<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/mainSlick.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <title>펫펫</title>
</head>
<body>
    <div class="nevBg1">
        <div class="nevBg2"></div> 
    </div>
    <div class="webWidth">
        <?php require("main_area.php") ?>
    </div>
    <div class="webWidth">
        <?php require("category.php") ?>
        <div class="ad">
            <div class="slide">
                <img src="https://user-images.githubusercontent.com/126138315/234767967-05962889-ba90-4fc4-b280-ada091233c62.png" alt="슬라이드 이미지 1">
            </div>
            <div class="slide">
                <img src="https://user-images.githubusercontent.com/126138315/234767977-a8e64e5c-a16d-4a9f-bd5c-2d8bea8c3bdb.png" alt="슬라이드 이미지 2">
            </div>
            <div class="slide">
                <img src="https://user-images.githubusercontent.com/126138315/234767998-b5efd3d8-2ea4-4437-bd2a-ae9b2cf89c00.png" alt="슬라이드 이미지 3">
            </div>
        </div>
        <div class="mpfont">카테고리 별 <span>상품 추천 목록!</span></div> | 오늘의 추천
        
        <?php require("content.php")?>
        
        <?php require("ingi_saryo.php")?>
        <?php require("ingi_gansik.php")?>
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
    <script type="text/javascript" src="js/category.js"></script>
</body>
</html>