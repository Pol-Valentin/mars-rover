<?php

namespace Mars\Command;

use Mars\Command;
use Mars\Direction;
use Mars\Position;

class Right implements Command
{
    const ALIAS = 'r';


    public function applyToDirection(Position $position, Direction $direction): Direction
    {
        return $direction->rightDirection();
    }

    public function applyToPosition(Position $position, Direction $direction): Position
    {
        // TODO: Implement applyToPosition() method.
    }


}