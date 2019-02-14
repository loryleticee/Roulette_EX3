<?php

declare(strict_types = 1);

namespace App\Model\Player;
/**
 * Created by IntelliJ IDEA.
 * User: AissatouDiop
 * Date: 2/13/19
 * Time: 16:56
 */

interface PlayerInterface
{
    /**
     * @param Round $round
     */
    public function bet(Round $round);

    /**
     * @return int
     */
    public function getMoney():int;
}