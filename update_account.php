<?php session_start(); 
    if(!isset($_SESSION['userId'])){
?>
<script>
    alert("잘못된 접근입니다.");
    location.replace('index.php');
</script>
<?php
    }
    $id=$_SESSION['userId']; // id
    $name = $_POST['name']; // 이름
    $phone1 = $_POST['phone1'];   // 휴대폰 앞자리
    $phone2 = $_POST['phone2'];   // 휴대폰 뒷자리
    $email1 = $_POST['email1']; // 이메일 앞부분
    $email2 = $_POST['email2']; // 이메일 뒷부분

    if($id && $name && $phone1 && $phone2 && $email1 && $email2){

        $phone = '010'.$phone1.$phone2; 
        $email = $email1.'@'.$email2; 
        try {
            require("db_connect.php");
    
            $db->exec("update account set acc_name='$name', acc_phone = '$phone', acc_email = '$email'
            where acc_id = '$id';");

            $_SESSION['userName'] = $name;
    
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
?>

<script>
    alert("회원 정보 수정이 완료되었습니다.");
    location.replace("mypage.php");
    
</script>
