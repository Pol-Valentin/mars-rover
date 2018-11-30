<?php

namespace Mars\Command;

use Mars\Command;
use Mars\Direction;
use Mars\Position;

class Forward implements Command
{
    const ALIAS = 'f';


    public function applyToDirection(Position $position, Direction $direction): Direction
    {
        return $direction;
    }

    public function applyToPosition(Position $position, Direction $direction): Position
    {
    }


}