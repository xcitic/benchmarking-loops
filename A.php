#!/usr/bin/php
<?php

require('timer.php');
require('dataset.php');

$array = $dataset;
$timer = new Timer();

$timer->start();

$ant = count($array);
for($i = 0; $i<$ant; $i++) {
  echo "[".$array[$i]."]";
}

$timer->end();
$spent = $timer->spent();
echo 'This is script A. Time Spent = '.$spent.'ms';


?>
