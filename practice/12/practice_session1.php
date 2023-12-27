<?php

session_start();
$_SESSION['practice'] = array('age' => 36, 'email' => 'sample@sample.com');
var_dump($_SESSION['practice']);