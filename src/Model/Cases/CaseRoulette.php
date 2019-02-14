<?php

declare(strict_types=1);
namespace App\Model\Cases;

class CaseRoulette
{
  /** @var int */
  private $finalresult;


  public function __construct()
  {
    $this->finalresult = rand( [0, 36]);
  }
  public function Finalresult(): int
  {
    echo rand( [0, 36]);
  }

}
