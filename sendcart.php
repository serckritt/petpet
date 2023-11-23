<?php 
    session_start();

    if($_REQUEST["pro_num" ]==null || $_REQUEST["count" ]==null){
?>
<script>
    alert("잘못된 접근입니다.");
    history.back();
</script>
<?php
    }
    $num =  $_REQUEST["pro_num" ];
    $count =  $_REQUEST["count" ];
    $userid = $_SESSION['userId']; 

    if(isset($_SESSION['userId'])){
        try{
            require("db_connect.php");
            $db->exec("insert into cart (acc_id, pro_num, count)
                values ('$userid','$num','$count')");

        }catch(PDOException $e) {
            exit($e->getMessage());
        }
?>
<script>
    alert("장바구니에 등록되었습니다.");
    location.replace('cart.php');
</script>
<?php
    }else{
?>
<script>
    alert("로그인이 필요합니다.");
    location.replace('login.php');
</script>
<?php
    }

?>