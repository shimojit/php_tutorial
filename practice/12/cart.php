<?php

session_start();

$cart = array();

//POSTが行われたら
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $product = $_POST['product'];
  $kind = $_POST['kind'];

  if($kind === 'change') { //変更ボタンが押された場合
    $num = $_POST['num'];
    $_SESSION['cart'][$product] = $num;
  }elseif($kind === 'delete') {
    unset($_SESSION['cart'][$product]);
  }
}

//セッションデータを変数に格納
if(isset($_SESSION['cart'])) {
  $cart = $_SESSION['cart'];
}
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>ショッピングカート</title>
  </head>

  <body>
    <h1>ショッピングカート</h1>
    <p><a href="shop.php">商品一覧へ</a></p>
    <p><a href="delete.php">カートをすべて空に</a></p>
    <table style="text-align:center">
      <tr><th>商品</th><th>数量</th><th>変更ボタン</th><th>削除ボタン</th></tr>

      <?php foreach($cart as $key => $var): ?>
        <tr>
          <td>
            <?php
            swich($key) { //商品IDを商品名に変換
              case 'desk_01';
              echo '業務用デスク';
              break;
              case 'chair_07';
              echo '快適いす';
              break;
            }
            ?>
          </td>
          <td><?php echo $var; ?></td>

          <form action="" method="post">
            <td>
              <select name="num">
                <?php for($i = 1; $i < 10; $i++): ?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php endfor; ?>
              </select>
            </td>
            <td>
              <input type="hidden" name="kind" value="change">
              <input type="hidden" name="product" value="<?php echo $key; ?>">
              <input type="submit" value="変更">
            </td>
          </form>

          <form action="" method="post">
            <td>
              <input type="hidden" name="kind" value="delete">
              <input type="hidden" name="product" value="<?php echo $key; ?>">
              <input type="submit" value="削除">
            </td>
          </form>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>