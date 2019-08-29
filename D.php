#!/usr/bin/php
<?php

// inkluder filer som brukes i alle scripts.
require('timer.php');
require('dataset.php');

// array som holder resultater slik at jeg kan regne et gjennomsnitt.
$resultater = array();
// kjør gjennom 100 ganger for å generer et bedre gjennomsnitt.
$testset = 100;

// array er lik dataset på 1 mill integers
$array = $dataset;

for($n = 0; $n < $testset; $n++) {
  // start timer
  $timer = new Timer();
  $timer->start();


  for($i = 0; $i<count($array); $i++) {
    echo "[".$array[$i]."]";
  }

  // avslutt timer og regn ut tidsbruk
  $timer->end();
  $spent = $timer->spent();
  // legg til tidsbruk i resultat
  $resultater[] = $spent;
}

// regn ut gjennomsnitt av tidsbruk
$snitt = array_sum($resultater) / count($resultater);



// generer output
$output = "Dette er script D: \n Bruker i gjennomsnitt $snitt millisekunder på å iterere gjennom et dataset av type array med 1 millioner integer verdier \n";

// lagre output til en fil med append mode
$f = fopen('benchmark.txt','a');
fwrite($f, $output);
fclose($f);



?>
