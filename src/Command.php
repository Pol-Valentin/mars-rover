<?php


namespace Mars;


interface Command
{
    public function applyToDirection(Position $position, Direction $direction): Direction;
    public function applyToPosition(Position $position, Direction $direction): Position;

}