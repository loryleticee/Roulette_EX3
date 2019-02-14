<?php
declare(strict_types=1);

namespace App\Model;

use App\Model\ConsoleInteraction;
use App\Model\CaseRoulette;

class Game
{
  /** @var ConsoleInteraction */
  private $ConsoleInteraction;

  /** @var CaseRoulette */
  private $CaseRoulette;

  /** @var int */
  private $bank = 0;

  //private const CASE = [1, 2, 3, 4];


  public function __construct(ConsoleInteraction $ConsoleInteraction)
  {
    $this->ConsoleInteraction = $ConsoleInteraction;
    echo "Game 1 \n";
  }

  public function start()
  {

    $this->ConsoleInteraction->gameSay("Bienvenue dans la roulette infernale !\n");
    for($i=0; $i < 3; $i++){
      $test = $this->ConsoleInteraction->askText("Votre nom de joueur ");
      if ($test === null) {
        break;
      }
    }


    //$this->ConsoleInteraction->askText("Sur quel chiffre voulez vous parier ?");
    //echo $this->CaseRoulette->Finalresult();
    //$this->ConsoleInteraction->displayWheels($this->CaseRoulette);
    //$this->ConsoleInteraction->askYesNo('Ca roule ?');
  }

  public function getScoreBoard()
  {

  }


}




 ?>
