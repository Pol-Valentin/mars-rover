<?php

namespace Mars\Command;

use Mars\Command;
use Mars\Direction;
use Mars\Position;

class Left implements Command
{
    const ALIAS = 'l';


    public function applyToDirection(Position $position, Direction $direction): Direction
    {
        return $direction->leftDirection();
    }

    public function applyToPosition(Position $position, Direction $direction): Position
    {
        // TODO: Implement applyToPosition() method.
    }


}