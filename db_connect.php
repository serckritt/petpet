<?php
    // db 쓸때마다 require("db_connect.php")로 이 파일을 연결시켜야함
    $db = new PDO("mysql:host=localhost;port=3307;dbname=phpdb", "php", "1234");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
