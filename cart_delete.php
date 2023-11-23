
<?php
  $num   = $_REQUEST["num"  ];

  try {
      require("db_connect.php");


      $db->exec("
      delete from cart where cart_num='$num';
      ");

  } catch (PDOException $e) {
      exit($e->getMessage());
  }

?>

<script>
    location.replace("cart.php");
    
</script>
