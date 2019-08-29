#!/usr/bin/php
<?php

require('timer.php');

$timer = new Timer();


$timer->start();
sleep(2);
$timer->end();
$spent = $timer->spent();
echo 'Spent Time = '.$spent.'ms';

$ant = count($array);
for($i = 0; $i<$ant; $i++) {
  echo "[".$array[$i]."]";
}


?>
