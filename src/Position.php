<?php


namespace Mars;


class Position
{
    private $x;
    private $y;

    /**
     * Position constructor.
     * @param $x
     * @param $y
     */
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }


}