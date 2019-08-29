<?php


class Timer {

  public $start;
  public $end;
  public $spent;

  public function __construct() {
    $this->start = 0;
    $this->end = 0;
    $this->spent = 0;
  }


  public function start() {
    $this->start = microtime(TRUE);
  }

  public function end() {
    $this->end = microtime(TRUE);
  }

  public function spent() {
    $difference =  $this->end - $this->start;
    return $difference;
  }
}
