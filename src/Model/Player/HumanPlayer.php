<?php

declare(strict_types = 1);

namespace App\Model\Player;
/**
 * Created by IntelliJ IDEA.
 * User: AissatouDiop
 * Date: 2/13/19
 * Time: 16:56
 */

class HumanPlayer implements PlayerInterface
{
    /**
     * @var string
     */
    static $type = 'Human';
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $money;

    public function __construct(string $name, int $money)
    {
        $this->name = $name;
        $this->money = $money;

    }

    public function bet(Round $round)
    {

    }

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }
    /**
 * @return int
 */
    public function getMoney() :int
    {
        return $this->money;
    }
    /**
     * @return int
     */
    public function getBank() :int
    {
        return $this->money;
    }
}