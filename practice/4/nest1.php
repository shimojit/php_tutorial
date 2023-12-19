<?php

$attend = 1;
//欠席は０　出席は１
$place = 'b';

if($attend === 0){
  echo 'パーティを欠席にて承りました。';
}elseif($attend === 1){
  echo 'パーティを出席にて承りました。';
}