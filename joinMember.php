<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/membership.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <title>펫펫 회원가입</title>
</head>
<body>
    <div class="webWidth">
        <div class="memberTop">
            <div class="memberTop1">
                <span class="logo_font"><a href="index.php">
                <img src="https://user-images.githubusercontent.com/126138315/243158653-97e42336-5dab-4fd5-95ae-884410717add.png">
                </a></span>
            </div>
            <div class="memberTop2">회원가입</div>
        </div>
        <div class="bmemberBox">
            <form method="post" action="create_account.php" name="user">
            <div class="memberBox">
                <div class="inputBar">
                    <input type="text" name="id" placeholder="아이디를 입력해주세요" class="idInput"/>
                </div>
                <div class="inputBar">
                    <input type="password" name="pw" placeholder="비밀번호" class="passInput"/>
                </div>
                <div class="inputBar">
                    <input type="password" name="pw_check"placeholder="비밀번호 확인" class="passInput"/>
                </div>
                <div class="inputBar">
                    <input type="text" name="name" placeholder="이름" class="idInput"/>
                </div>
                <div style="display: flex;">
                    <div class="inputBar1">
                        <div class="aa">010 - </div>
                    </div>
                    <div class="inputBar2">
                        <input type="text" name="phone" placeholder="전화번호" class="idInput"/>
                    </div>
                </div>
                <div style="display: flex;">
                    <div class="inputBar2">
                        <input type="text" name="email1" placeholder="이메일" class="idInput" style="width:34%;"/>
                        @ <input type="text" name="email2" placeholder=" 도메인" class="idInput" style="width:34%;"/>
                    </div>
                    <div class="inputBar1">
                        <select name="emailLocal" style="margin-left:5px; width: 100px; height:45px;" onchange="func(this.value)">
                            <option value="">직접입력</option>
                            <option value="naver.com">naver.com</option>
                            <option value="daum.net">daum.net</option>
                            <option value="nate.net">nate.net</option>
                            <option value="gmail.com">gmail.com</option>
                        </select>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center; width: 100%;">
                <button type="submit" class="joinBtn" onclick="button()">
                    회원가입
                </button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>

<script>

function func(email) {
  document.user.email2.value  = email;
  // 파라미터로 전달받은 셀렉트박스 속성값을 
  // 텍스트 박스 속성값에 전달함
}
</script>