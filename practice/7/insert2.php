<?php

$dsn = 'mysql:dbname=testdb;host=db;charset=utf8;';
$user = 'testuser';
$password = 'testpass';
$name = '太田美香';
$age = 32;

try {
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO user (name, age) VALUES (:name, :age)";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':name', $name, PDO::PARAM_STR);
  $stmt->bindValue(':age', $age, PDO::PARAM_INT);
  $stmt->execute();
  echo '接続に成功しました。';
}catch(PDOException $e) {
  print($e->getMessage());
  die();
}