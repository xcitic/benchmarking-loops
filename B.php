#!/usr/bin/php
<?php

// inkluder filer som brukes i alle scripts.
require('timer.php');
// Generer output
require('output_helper.php');


// how many times to loop the tests with the dataset
$testsize = readline('Input Testset size: ');
// name of the test
$testnavn = readline('Test Name: ');

$resultater = array();

// array er lik dataset på 1 mill integers
$array = range(0,999999);

// string dataset
// $string = str_repeat('string to test', 99);

// Instanciate before loop.
$timer = new Timer();

for($n = 0; $n < $testsize; $n++) {
  // start timer
  $timer->start();

    foreach($array as $nr) {
      echo "[".$nr."]";
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
