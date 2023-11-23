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
    <script src="http://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <title>펫펫</title>
</head>
<?php session_start(); 
    if(!isset($_SESSION['userId'])){
?>
<script>
    alert("로그인이 필요합니다.");
    location.replace('login.php');
</script>
<?php
    }
    $type = 0;
    require("db_connect.php");

    $id=$_SESSION['userId'];
    $query = $db->query("select *                       -- 검색 전부
                                from account                -- 계정 테이블에서 
                                where acc_id = '$id'        -- 조건 세션에 저장된 아이디로
                                ");
    $row = $query->fetch(PDO::FETCH_ASSOC);
    
    $phone1 = substr($row["acc_phone"],3,4);
    $phone2 = substr($row["acc_phone"],-4,4);
    $email1 = substr($row["acc_email"],0,strpos($row["acc_email"],'@'));
    $email2 = substr($row["acc_email"],strpos($row["acc_email"],'@')+1);

?>
<script>

function func(email) {
  document.user.email2.value  = email;
  // 파라미터로 전달받은 셀렉트박스 속성값을 
  // 텍스트 박스 속성값에 전달함
}
    </script>
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
                    <div class="piBx1"><a href="cart.php">01 장바구니</a></div>
                    <div class="piBx2">02 주문결제</div>
                    <div class="piBx1">03 주문완료</div>
                </div>
            </div>
        </div>
        <div class="cartContent">
            <form method="post" action="purchase.php" name="user">
            <div class="cartTitle">주문결제</div>
            <div class="buyContent">
                배송정보<br><br><hr><br>
                주문자명 : <input type="text" placeholder="주문자명" name="name" value=<?=$_SESSION["userName"]?> style="width:315px;height:40px;"/><br><br>
                연락처 : 010 - <input type="text" placeholder="휴대폰 앞자리" name="phone1" value=<?=$phone1?> style="width:120px;height:40px;"/> - 
                <input type="text" placeholder="휴대폰 뒷자리" name="phone2" value=<?=$phone2?> style="width:120px;height:40px;"/><br><br>
                이메일 : <input type="text" placeholder="이메일 아이디" name="email1" value=<?=$email1?> style="width:140px;height:40px;"/> @ 
                <input type="text" placeholder="이메일 서비스 도메인" name="email2" value=<?=$email2?> style="width:140px;height:40px;"/>
                <select name="emailLocal" style="margin-left:5px; width: 100px; height:45px;" onchange="func(this.value)">
                    <option value="">직접입력</option>
                    <option value="naver.com">naver.com</option>
                    <option value="daum.net">daum.net</option>
                    <option value="nate.net">nate.net</option>
                    <option value="gmail.com">gmail.com</option>
                </select><br><br><hr><br>
                <input type="text" name="sample6_postcode" id="sample6_postcode" placeholder="우편번호" style="width:140px;height:40px;"/>
                <button type="button" class="kub" onclick="sample6_execDaumPostcode()">우편번호 찾기</button><br><br>
                <input type="text" placeholder="기본 주소" style="width:500px;height:40px;" name="sample6_address" id="sample6_address"/><br><br>
                <input type="text" placeholder="상세 주소" style="width:500px;height:40px;"
                name="detailAddress" id="detailAddress"/><br><br>
                <select name="deliveryRequest">
                    <option value="0">배송시 요청사항 선택</option>
                    <option value="1">직접 수령하겠습니다.</option>
                    <option value="2">문 앞에 놓아주세요.</option>
                    <option value="3">경비실에 맡겨주세요.</option>
                    <option value="4">대문 앞에 놓아주세요.</option>
                </select><br><br><hr>
                <br>주문상품<br><br><hr>
                <div class="cartItemSE" style="display:flex;">
                    <div style="width:860px; text-align:center;">상품상세정보</div>
                    <div style="width:170px; text-align:center;">가격</div>
                    <div style="width:170px; text-align:center;">배송비</div>
                </div>
<?php
    if(isset($_POST['type'])){
        $po_num = $_POST['pro_num'];
        

        $query2 = $db->query("select *                       -- 검색 전부
                                from product                -- 카트 테이블에서 
                                where pro_num = '$po_num'        -- 조건 세션에 저장된 아이디로
                                ");

    }else{
        
        $query2 = $db->query("select *                       -- 검색 전부
                                    from cart                -- 카트 테이블에서 
                                    where acc_id = '$id'        -- 조건 세션에 저장된 아이디로
                                    ");
    } 
    $sum = 0;
   
    while($row2 = $query2->fetch(PDO::FETCH_ASSOC)){

        $num = $row2['pro_num'];

        if(isset($_POST['type'])){
            $count = $_POST['count'];

            $type=1;
            $sum = $sum + $row2['pro_prize']*$count;
            $prize = number_format($row2['pro_prize']*$count);
            $img = $row2['pro_img'];
            $name = $row2['pro_name'];
        }else{
            $count = $row2['count'];

            $query3 = $db->query("select *                       -- 검색 전부
                                from product                 -- 상품 테이블에서 
                                where pro_num = '$num'       -- 조건 카트에서 검색한 상품키로
                                ");
            $row3 = $query3->fetch(PDO::FETCH_ASSOC); 

            $sum = $sum + $row3['pro_prize']*$count;
            $prize = number_format($row3['pro_prize']*$count);
            $img = $row3['pro_img'];
            $name = $row3['pro_name'];
        }
        
?>
                <div class="cartItem">
                    <div class="buyImg">
                        <a href="productpage.php?num=<?=$num?>"><img src=<?=$img?>></a>
                    </div>
                    <div>
                        <div style="width:730px; padding-left:30px; box-sizing:border-box;">
                            <?=$name?><br><br>
                            <span>수량 <?=$count?>개 선택</span>
                        </div>
                    </div>
                    <div class="pi"><?=$prize?>원</div>
                    <div class="pi">무료</div>
                </div><br>
<?php
    }
?>
                
                
                <hr>
                <br>결제방법<br><br><hr>
                <button type="button" id="payMath">카드사선택</button><br><br>
                <input type="hidden" id="card" name="payMath" value="">
                <input type="hidden" name="type" value=<?=$type?>>
                <input type="hidden" name="pro_num" value=<?=$num?>>
                <input type="hidden" name="count" value=<?=$count?>>
                <div id="payMa">
                    <div class="payMa1">
                        <div id="bankBorder1">
                            <button type="button" style="border: 0; background-color: #ffffff;" id="bank1">
                                <img src="https://user-images.githubusercontent.com/126138315/242484260-1075970b-5045-4131-a167-6554be5bc117.png">
                            </button>
                        </div>
                        <div id="bankBorder2">
                            <button type="button" style="border: 0; background-color: #ffffff;" id="bank2">
                                <img src="https://user-images.githubusercontent.com/126138315/242484264-09d1b703-a2e2-4b24-94f7-1e7810ef195c.png">
                            </button>
                        </div>
                        <div id="bankBorder3">
                            <button type="button" style="border: 0; background-color: #ffffff;" id="bank3">
                                <img src="https://user-images.githubusercontent.com/126138315/242484267-62c5d844-24ed-4afd-87f7-bc950724d84d.png">
                            </button>
                        </div>
                        <div id="bankBorder4">
                            <button type="button" style="border: 0; background-color: #ffffff;" id="bank4">
                                <img src="https://user-images.githubusercontent.com/126138315/243270031-fe2f4523-7f3f-4e9e-b10c-aeb94059fdb8.png">
                            </button>
                        </div>
                        <div id="bankBorder5">
                            <button type="button" style="border: 0; background-color: #ffffff;" id="bank5">
                                <img src="https://user-images.githubusercontent.com/126138315/243270011-ff987a5e-d29a-4e14-a40c-f71fff34cf9a.png">
                            </button>
                        </div>
                    </div>
                    <select name="Installment" style="margin: 0 0 10px 10px;">
                        <option value="1">일시불</option>
                        <option value="2">1개월 무이자</option>
                        <option value="3">2개월 무이자</option>
                        <option value="4">4개월</option>
                        <option value="5">8개월</option>
                    </select>
                </div>
                <div class="lumpSum">
                    <div class="lum1">상품가격 <?=number_format($sum)?>원</div>
                    <div class="lum2">+</div>
                    <div class="lum1">배송비 무료</div>
                    <div class="lum2">=</div>
                    <div class="lum1">총 <?=number_format($sum)?>원</div>
                </div>
            </div>
            <div class="cbtnArea">
                <button type="submit" class="payBtn">
                    결제하기
                </button>
            </div>
            </form>
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
    <script type="text/javascript" src="js/product.js"></script>
</body>
</html>