<?php


class out_put_helper {


  private $snitt;
  private $testsize;
  private $testnavn;
  private $memory;

  private $mb = 1024*1024;

  public function __construct(float $snitt, int $testsize, string $testnavn, float $memory) {
    $this->snitt = $snitt;
    $this->testsize = $testsize;
    $this->testnavn = $testnavn;
    $this->memory = round($memory / $this->mb, 4);
  }

  public function save() {
    $output = [
      'Testcase' => $this->testnavn,
      'TestSet' => $this->testsize,
      'Average' => $this->snitt,
      'Memory in MB' => $this->memory,
    ];
    $output = json_encode($output);
    $file = fopen('benchmark3.json', 'a');
    fwrite($file, $output);
    fclose($file);

  }

  public function outPutToFile($output) {

      return;
  }
}
