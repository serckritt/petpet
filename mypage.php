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
<body>

    <div class="nevBg1">
        <div class="nevBg2"></div> <!--이거 네비게이션바 배경입니다.-->
    </div>
    <div class="webWidth">
<?php require("main_area.php") ;
    if(!isset($_SESSION['userId'])){
?>
<script>
    alert("로그인이 필요합니다.");
    location.replace('login.php');
</script>
<?php
    }

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
    <div class="webWidth">
        <?php require("category.php")?>
        <div class="userinfo">
            <div class="mypageSubtitle">회원정보 수정</div>
            <form action="update_account.php" method="post" name="user">
            <div class="infoContent" >
                이름 : <input type="text" placeholder="주문자명" name="name" value=<?=$_SESSION["userName"]?> style="width:315px;height:40px;"/><br><br>
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
                </select><br><br><hr>
            </div>
            <button type="submit" class="payBtn">
                수정하기
            </button>
            </form>
        </div>
    <script>

function func(email) {
  document.user.email2.value  = email;
  // 파라미터로 전달받은 셀렉트박스 속성값을 
  // 텍스트 박스 속성값에 전달함
}
    </script>
        <div class="mypageContent">
            <div class="mypageSubtitle">최근 주문내역</div>
            <div class="buyHistory">
                <div class="proBox">
                    <div class="proSub1">날짜</div>
                    <div class="proSub2">상품정보</div>
                    <div class="proSub3">상태</div>
                    <div class="proSub4">재고</div>
                </div>
<?php 
    try{
        require("db_connect.php");

        $id = $_SESSION['userId'];          // 세션에서 아이디 가져옴

        $query = $db->query("select *                       -- 검색 전부
                                from record                 -- 기록 테이블에서 
                                where acc_id = '$id' and visible = 1        -- 조건 세션에 저장된 아이디로
                                order by date desc
                                ");
        $wcount = 0;
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {  
            $wcount++;
            $record_num=$row ["record_num"];
            $pro_num= $row["pro_num"];      //카트에 있는 상품키
            $count = $row["count"];         //카트에 저장된 중복 상품 개수
            $date = $row["date"]; 

            $query2 = $db->query("select *                        -- 검색 전부
                                from product                      -- 상품 테이블에서 
                                where pro_num = '$pro_num'        -- 조건 반복문의 집어넣은 카트 행의 상품 번호
                                ");

            $row2 = $query2->fetch(PDO::FETCH_ASSOC);
                    
            $name = $row2["pro_name"];                  //찾아낸 상품이름
            $img = $row2["pro_img"];                    //찾아낸 상품의 이미지
            $prize = number_format($row2["pro_prize"] * $count);     //찾아낸 상품 가격*개수 에다가 쉼표붙임
        
?>

                <div class="cartItem">
                    <div class="ciBx2" style="text-align:center; padding: 50px 0;">
                        <?=$date?>
                    </div>
                    <div class="ciBx2">
                        <a href="productpage.php?num=<?=$pro_num?>"><img src=<?=$img?>></a>
                    </div>
                    <div class="ciBx3">
                        <div style="width: 760px;">
                            <?=$name?><br><br>
                            <span>수량 <?=$count?>개 선택</span>
                        </div>
                        <div>
                            <button type="button" onclick="del(<?=$record_num?>)">X</button>
                        </div>
                    </div>
                    <div class="ciBx4" style="text-align:center;">준비중</div>
                    <div class="ciBx5" style="text-align:center;">없음</div>
                </div>
                

<?php
    }
    if($wcount==0){
?>
                
                <div class="bhBox">
                    <div class="warningIcon"><img src="https://user-images.githubusercontent.com/126138315/234766281-4bac09fc-2ff6-487a-86ec-d27a592ec212.png"></div>
                    <div class="bhBoxContent">구매 내역이 없습니다</div>
                </div>
<?php
            }                      
} catch (PDOException $e) {
    exit($e->getMessage());
}
?> 
            </div>
        </div>
    </div> 
    <script>

function del(record_num) {
  
    if (!confirm("구매 기록을 삭제하시겠습니까?")) {
        // 취소(아니오) 버튼 클릭 시 이벤트
        
    } else{ // post 형식으로 장바구니 삭제페이지로 이동
        var form = document.createElement('form');
        form.setAttribute('method', 'post');
        form.setAttribute('action', 'record_delete.php');
        document.charset = "utf-8";

        var hiddenField = document.createElement('input');
        hiddenField.setAttribute('type', 'hidden');
        hiddenField.setAttribute('name', 'num');
        hiddenField.setAttribute('value', record_num);
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