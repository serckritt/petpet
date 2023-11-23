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
    $postcode = $_POST['sample6_postcode']; // 우편번호
    $address1 = $_POST['sample6_address']; // 기본주소
    $address2 = $_POST['detailAddress'];    // 상세주소
    $deliveryRequest = $_POST['deliveryRequest']; // 요청사항
    $payMath = $_POST['payMath'];   // 카드사
    $type = 0;
    $Installment = $_POST['Installment']; // 할부
    if(isset($_POST['type'])){
        $type = $_POST['type']; // 바로구매 여부
    }


    if($id && $name && $phone1 && $phone2 && $email1 && $email2 && $postcode
     && $address1 && $address2 && $deliveryRequest && $payMath && $Installment ){

        
        $phone = '010'.$phone1.$phone2; 
        $email = $email1.'@'.$email2; 
        $date = date("Y-m-d");

        require("db_connect.php");

        if($type == 0){
            $query = $db->query("select *                   -- 검색 전부
                                from cart                -- 카트 테이블에서 
                                where acc_id = '$id'     -- 조건 세션에 저장된 아이디로
                                ");
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $cart_num = $row['cart_num'];
                $pro_num = $row['pro_num'];
                $count = $row['count'];

                $db->exec("insert into record (acc_id, name, phone, email, postcode, address1, 
                    address2, delivery, pro_num, count, payMath, Installment, date)
                    values ('$id','$name', '$phone', '$email','$postcode','$address1','$address2', 
                    '$deliveryRequest','$pro_num','$count', '$payMath', '$Installment', '$date')");

                $db->exec("
                delete from cart where cart_num='$cart_num';
                ");

                echo "<script>
                    location.replace('purchaseSuccess.php');
                    </script>";
            }
        }else{
            $pro_num = $_POST['pro_num'];
            $count = $_POST['count'];

            $db->exec("insert into record (acc_id, name, phone, email, postcode, address1, 
                    address2, delivery, pro_num, count, payMath, Installment, date)
                    values ('$id','$name', '$phone', '$email','$postcode','$address1','$address2', 
                    '$deliveryRequest','$pro_num','$count', '$payMath', '$Installment', '$date')");

            echo "<script>
            location.replace('purchaseSuccess.php');
            </script>";        
        }
        


    } else {// 모든 정보를 입력하지 않으면 결제 실패
        echo "<script>  
            alert('입력하지 않은 항목이 있는지 확인해주십시오.');
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