
<?php
    $num   = $_REQUEST["num"  ];

    try {
        require("db_connect.php");

        $db->exec("update record set visible=0
        where record_num = $num;");

    } catch (PDOException $e) {
        exit($e->getMessage());
    }

?>

<script>
    location.replace("mypage.php");
    
</script>
