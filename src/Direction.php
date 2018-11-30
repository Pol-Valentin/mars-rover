<?php


namespace Mars;


class Direction
{
    const NORTH = 'N';
    const SOUTH = 'S';
    const EAST = 'E';
    const WEST = 'W';

    const RIGHT = 'r';

    private $direction;

    private $leftDirections = [
        'N' => 'W',
        'W' => 'S',
        'S' => 'E',
        'E' => 'N',
    ];
    private $rightDirections = [
        'N' => 'E',
        'W' => 'N',
        'S' => 'W',
        'E' => 'S',
    ];

    /**
     * Direction constructor.
     * @param $direction
     */
    public function __construct(string $direction)
    {
        $this->direction = $direction;
    }

    public function leftDirection(): Direction
    {
        return new Direction($this->leftDirections[$this->direction]);
    }
    public function rightDirection(): Direction
    {
        return new Direction($this->rightDirections[$this->direction]);
    }
}