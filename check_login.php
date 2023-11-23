<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
</head>
<body>
   <?php
   session_start();
      require("db_connect.php");  //db 연결
      
      //login.php에서 입력받은 id, password
      $username = $_POST['id'];
      $userpass = $_POST['pw'];
      $prevPage = $_POST['prev'];
      
      
      $q = "SELECT * FROM account WHERE acc_id = '$username' AND acc_pw = '$userpass'"; 
      // login.php에서 입력받은 id pw가 account 테이블에 있는지 검색 
      $result = $db->query($q);
      $row = $result->fetch(PDO::FETCH_ASSOC);
      // row에 검색한 내용이 들어가짐

      //결과가 존재하지 않으면 로그인 실패
      if($row == null){
         echo "<script>alert('존재하지 않는 아이디거나 비밀번호가 틀렸습니다')</script>";
         echo "<script>location.replace('login.php');</script>";
         exit;
      }
      
      //결과가 존재하면 세션 생성
      if ($row != null) {
         $_SESSION['userId'] = $row['acc_id'];
         $_SESSION['userName'] = $row['acc_name'];
   ?>
            <script>
               var jsvar = "<?php echo $_SESSION['userName']; ?>";
               var prev = "<?php echo $prevPage; ?>";
               
               switch(prev){
                  case  "http://localhost/petpet_work3/create_account.php":
                  case  "http://localhost/petpet_work3/sendcart.php":     
                  case  "http://localhost/petpet_work3/buy.php":
                  case  "http://localhost/petpet_work3/check_login.php":         
                     prev =  "http://localhost/petpet_work3/index.php"
               }

               alert('환영합니다, '+jsvar +'님.');
               location.replace(prev);
               // 환영합니다, oo님의 형태로 메시지 뜸
            </script>
      <?php 
         exit;
      }
      ?>
</body>