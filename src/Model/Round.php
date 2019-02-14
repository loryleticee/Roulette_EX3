<?php
declare(strict_types=1);

namespace App\Model;

class Round
{

/** @var int */
  private $WheelsResult;

  public function __construct()
  {
    $this->WheelsResult = rand(0, 36);

  }

}



 ?>
