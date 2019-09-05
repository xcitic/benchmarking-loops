<?php


class Dataset {
  private $type;
  private $size;


  public function __construct(string $type, int $size) {
    $this->type = $type;
    $this->size = $size;
  }

  public function generate() {
    $type = $this->type;

    switch($type) {
      case 'array':
        $this->mk_array($this->size);
        break;
      case 'string':

    }

  }

  public function make_array($size) {
    $arr[] = range(0, $size);
  }

  public function make_string($size) {

  }

  public function associative_array($size) {

  }

}
