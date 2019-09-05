#!/usr/bin/php
<?php

// inkluder filer som brukes i alle scripts.
require('timer.php');
// Generer output
require('output_helper.php');


// how many times to loop the tests with the dataset
$testsize = readline('Input Testset size:');
// what do you want to save the output as?
$testnavn = readline('Test name:');

$resultater = array();

$array = range(0,999999);

// string dataset
// $string = str_repeat('string to test', 99);

// Instanciate before loop.
$timer = new Timer();

for($n = 0; $n < $testsize; $n++) {
  // start timer
  $timer->start();

  $ant = count($array);
  for($i = 0 ; $i<$ant; $i++){
    echo "[".$array[$i]."]";
  }

  // avslutt timer og regn ut tidsbruk
  $timer->end();
  $spent = $timer->spent();
  // legg til tidsbruk i resultat
  $resultater[] = $spent;

}
$memory = memory_get_usage();
// regn ut gjennomsnitt av tidsbruk
$snitt = array_sum($resultater) / count($resultater);

$output = new out_put_helper($snitt, $testsize, $testnavn, $memory);
$output->save();

?>
