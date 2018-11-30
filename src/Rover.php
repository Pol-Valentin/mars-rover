<?php

namespace Mars;

use Mars\Command\Forward;
use Mars\Command\Left;
use Mars\Command\Right;

class Rover
{
    /** @var Position */
    private $position;
    /** @var Direction */
    private $direction;
    /** @var Command[] */
    private $commands;

    public function __construct(Position $position, Direction $direction)
    {
        $this->position = $position;
        $this->direction = $direction;
        $this->commands = [
            'l' => new Left(),
            'r' => new Right(),
            'f' => new Forward(),
        ];
    }

    public function position(): Position
    {
        return $this->position;
    }

    public function direction(): Direction
    {
        return $this->direction;
    }

    public function apply(string $command)
    {
        $command = $this->commands[$command];
        $this->direction = $command->applyToDirection($this->position, $this->direction);
    }
}