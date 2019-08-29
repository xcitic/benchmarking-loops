#!/usr/bin/php
<?php

// inkluder filer som brukes i alle scripts.
require('timer.php');
require('dataset.php');

// array som holder resultater slik at jeg kan regne et gjennomsnitt.
$resultater = array();
// kjør gjennom 10,000 ganger for å generer et godt gjennomsnitt.
$testset = 10000;

// bind array til dataset
$array = $dataset;

for($i = 0; $i < $testset; $i++) {
  // start timer
  $timer = new Timer();
  $timer->start();


  $ant = count($array);
  for($i = 0; $i<$ant; $i++) {
    echo "[".$array[$i]."]";
  }

  // avslutt timer og regn ut tidsbruk
  $timer->end();
  $spent = $timer->spent();
}

// generer output
$output = "Dette er script A: \n Tidsbruk i millisekunder med 1mill array av int = $spent \n";

// lagre output til en fil med append mode
$f = fopen('benchmark_a.txt','a');
fwrite($f, $output);
fclose($f);


?>
