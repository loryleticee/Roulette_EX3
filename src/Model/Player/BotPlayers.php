<?php

declare(strict_types = 1);

/**
 * Created by PhpStorm.
 * User: loryleticee
 * Date: 2019-02-14
 * Time: 11:17
 */

namespace App\Model\Player;


class BotPlayer implements PlayerInterface
{
    /** @var int */
    private $id;
    /**
     * @var string
     */
    static $type = 'Human';
    /**
     * @var int
     */
    private $money;
    /**
     * @var int
     */
    private static $count = 0;

    public function __construct(int $money)
    {
        $this->money = $money;
        $this->id = self::$count++;
    }

    /**
     * @param Round $round
     * @return mixed|void
     */
    public function bet(Round $round)
    {

    }
    /**
     * @return int
     */
    public function getMoney():int{
        return $this->money;
    }
}