<?php   
    //joinMember.php에서 입력받은 id, password
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $pw_check = $_POST['pw_check'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];

                                        // 모든 정보를 입력하지 않으면 회원가입 실패
    if($id && $pw && $pw_check && $name && $phone && $email1 && $email2){

        if($pw != $pw_check){           // 비번과 비번확인이 똑같지 않으면 회원가입 실패
            echo "<script>
                alert('비밀번호를 확인하세요.');
                history.back();
            </script>";
        } else {
            

            require("db_connect.php");  //db 연결

            $q = "SELECT * FROM account WHERE acc_id = '$id'"; 
                // login.php에서 입력받은 id pw가 account 테이블에 있는지 검색 
            $result = $db->query($q);
            $row = $result->fetch(PDO::FETCH_ASSOC);
                // row에 검색한 내용이 들어가짐


    
            if($row != null) {      //결과가 존재하면 아이디 중복, 회원가입 실패
                echo "<script>
                    alert('중복되는 아이디입니다.')
                    history.back();
                </script>";
                

            } else {                //최종확인 끝, 회원가입 진행
                
                $email = $email1.'@'.$email2; // . 점 이게 문자열 합치는 연산자 +로 못합침
                $phone = '010'.$phone;                 // . 점 이게 문자열 합치는 연산자 +로 못합침
                $date = date("Y-m-d");



                $db->exec("insert into account (acc_id, acc_pw, acc_name, acc_phone, acc_email, acc_date)
                   values ('$id','$pw','$name', '$phone', '$email', '$date')");
                echo "<script>
                   alert('회원가입이 완료되었습니다.');
                   location.replace('Login.php');
                </script>";
                
            }
        } 

    } else {// 모든 정보를 입력하지 않으면 회원가입 실패
        echo "<script>  
            alert('모든 항목이 빈칸 없이 입력되어야 합니다.');
            history.back();
        </script>";
    }
?> 
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title></title>
</head>
<body>
</body>