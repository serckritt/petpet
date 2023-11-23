<?php 
    session_start();

    if(isset($_SESSION['userId'])){
        $title = $_POST['title'];
        $rating = $_POST['rating'];
        $text = $_POST['text'];
        $pro_num = $_POST['pro_num'];

        $id = $_SESSION['userId'];
        $date = date("Y-m-d");




        if($rating){
            require("db_connect.php");

            $db->exec("insert into review (rev_text, rev_rating, pro_num, acc_id, date)
                   values ('$text', '$rating', '$pro_num', '$id', '$date')");
                echo "<script>
                   location.replace('productpage.php?num=$pro_num');
                </script>";
        }else{
?>
<script>
    alert("잘못된 접근입니다.");
    history.back();
</script>
<?php
        }
    }else{
?>
<script>
    alert("로그인이 필요합니다.");
    location.replace('login.php');
</script>
<?php
    }
?>