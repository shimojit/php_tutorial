<?php

session_start();
$_SESSION['practice'] = array('age' => 36, 'email' => 'sample@sample.com');
var_dump($_SESSION['practice']);

$_SESSION['practice']['age'] = 40;
$_SESSION['practice']['email'] = '';
var_dump($_SESSION['practice']);