<?php

$dsn = 'mysql:dbname=testdb;host=db;charset=utf8;';
$user = 'testuser';
$password = 'testpass';

try {
  $dsh = new PDO($dsn, $user, $password);
  $dsh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO user (id, name, age, email) VALUES (NULL, '田中三郎', '28', 'sample5@sample5.com')";
  $stmt = $dsh->prepare($sql);
  $stmt->execute();
  echo '接続に成功しました。';
}catch(PDOException $e) {
  print($e->getMessage());
  die();
}