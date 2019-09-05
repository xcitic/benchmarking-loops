#!/usr/bin/php
<?php


$benchmark = fopen('benchmark3.json', 'r');
$data = fread($benchmark, filesize($benchmark));

$dataset = array();

$decoded = json_decode($data);


foreach($decoded as $case) {
  echo $case->Testcase;
}

class Compare {

  protected $users;




  public function save() {

  }

}
