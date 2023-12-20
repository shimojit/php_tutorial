<?php

$dsn = 'mysql:dbname=testdb;host=localhost8081;charset=utf8';
$user = 'testuser';
$password = 'testpass';

try {
  $dsh = new PDO($dsn, $user, $password);
  $dsh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "";
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
  echo '接続に成功しました。';
}catch(PDOException $e) {
  print($e->getMessage());
  die();
}