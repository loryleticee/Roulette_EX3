<?php

declare(strict_types = 1);

namespace App\Interfaces;
/**
 * Created by PhpStorm.
 * User: loryleticee
 * Date: 2019-02-14
 * Time: 11:15
 */

interface PlayerInterface
{
    public function bet(Round $round);

}