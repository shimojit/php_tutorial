<?php

$err = array();
$img = $_FILES['img'];
var_dump($img);

move_uploaded_file($img['tmp_name'], './img/'.$img['name']);
?>

<html>
  <head>
    <meta charset="UTF-8">
  </head>

  <body>
    <h1>受信ページ</h1>
    <?php if(count($err) > 0) {
      foreach($err as $row) {
        echo '<p>'.$row.'<p>';
      }
      echo '<a href="./sample8-3_send.php">戻る</a>';
    }else{
    ?>
    <div><img src="http://localhost:8080/8/img/<?php echo $img['name']; ?>"></div>
    <?php } ?>
  </body>
</html>