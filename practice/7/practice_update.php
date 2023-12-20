<?php

$dsn = 'mysql:dbname=testdb;host=db;charset=utf8;';
$user = 'testuser';
$password = 'testpass';
$email = 'prepare@statement.com';

try {
  $dbh = new PDO($dsn, $user, $password);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "UPDATE user SET email = :email WHERE id = '3'";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->execute();
  echo '接続に成功しました。';
}catch(PDOException $e) {
  print($e->getMessage());
  die();
}