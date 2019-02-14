<?php
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
    private $bank;

    public function __construct(string $name, int $bank)
    {
        $this->name = $name;
        $this->bank = $bank;

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
    public function getBank() :int
    {
        return $this->bank;
    }

}