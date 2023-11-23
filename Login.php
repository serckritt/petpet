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
    <title>펫펫 로그인</title>
</head>
<body>
    <?php
     $prevPage = $_SERVER['HTTP_REFERER'];
    ?>
    <div class="webWidth">
        <div class="loginLogo">
            <span class="logo_font"><a href="index.php">
                <img src="https://user-images.githubusercontent.com/126138315/243158653-97e42336-5dab-4fd5-95ae-884410717add.png">
            </a></span>
        </div>
        <div class="loginBox">
            <form method="post" action="check_login.php">
                <p class="loginText">로그인 하시면 <b style="color:#ff7e7e;">펫<span style="color:#87003a;">펫</span></b>의<br>
                서비스를 이용하실 수 있습니다</p>
                <div class="inputField">
                    <div class="inputBar">
                        <input type="text" name="id" placeholder="아이디" class="idInput"/>
                    </div>
                    <div class="inputBar">
                        <input type="password" name="pw" placeholder="비밀번호" class="passInput"/>
                    </div>    
                    <input type="hidden" name="prev" value=<?=$prevPage?>>
                </div><br><br>
                <button type="submit" class="loginBtn" onclick="button()">
                    로그인
                </button>
            </form>
        </div>
        <div class="loginSupport">
            <a href="joinMember.php">회원가입</a> | 아이디찾기 | 비밀번호찾기
        </div>
    </div>
</body>
</html>