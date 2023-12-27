<?php

session_start();
$_SESSION['profile'] = array('user_name' => 'taro', 'location' => '関東');
$_SESSION['cart']['desk_01'] = 3;
$_SESSION['cart']['desk_07'] = 5;
?>

<html>
  <body>
    <h1>セッションの練習</h1>
    <a href="session_check.php">次のページへ</a>
    <a href="session_delete.php">セッションデータ削除</a>
  </body>
</html>