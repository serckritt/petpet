<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/userRelated.css">
    <link rel="stylesheet" href="css/proRelated.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <title>펫펫</title>
</head>
<body bgColor="eeeeee">
    <div class="webWidth">
        <div style="display:flex;">
            <div style="margin-left: 60px; padding-top: 60px;">
                <span class="logo_font"><a href="index.php">
                    <img src="https://user-images.githubusercontent.com/126138315/243158653-97e42336-5dab-4fd5-95ae-884410717add.png">
                </a></span>
            </div>
            <div style="width:1150px; padding-left:800px; box-sizing:border-box;">
                <div class="processIcon">
                    <div class="piBx1">01 장바구니</div>
                    <div class="piBx1">02 주문결제</div>
                    <div class="piBx2">03 주문완료</div>
                </div>
            </div>
        </div>
        <div class="cartContent">
            <div class="purchase">주문 접수가 완료되었습니다</div>
            <div style="width:100%; text-align:center;">
                <button type="button" class="payBtn" onclick="location.href='mypage.php'">
                    구매확인하기
                </button>
            </div>
            <div style="color:#808080;"> ※ 본인 이름으로 입금하셔야 배송이 진행됩니다.</div>
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
    <script type="text/javascript" src="js/category.js"></script>
</body>
</html>