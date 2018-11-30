<?php

namespace Tests\Mars;

use Mars\Command\Forward;
use Mars\Command\Left;
use Mars\Command\Right;
use Mars\Direction;
use Mars\Position;
use Mars\Rover;
use PHPUnit\Framework\TestCase;

class RoverTest extends TestCase
{
    /** @var Rover */
    private $sut;

    public function setUp()
    {
        $this->sut = new Rover(new Position(1, 2), new Direction(Direction::NORTH));
    }

    /** @test */
    public function it_is_initialized()
    {
        self::assertEquals(new Position(1, 2), $this->sut->position());
        self::assertEquals(new Direction(Direction::NORTH), $this->sut->direction());
    }

    /** @test */
    public function it_turns_left()
    {
        $this->sut->apply(Left::ALIAS);
        self::assertEquals(new Direction(Direction::WEST), $this->sut->direction());
        self::assertEquals(new Position(1, 2), $this->sut->position());
    }


    /** @test */
    public function it_turns_right()
    {
        $this->sut->apply(Right::ALIAS);
        self::assertEquals(new Direction(Direction::EAST), $this->sut->direction());
        self::assertEquals(new Position(1, 2), $this->sut->position());

    }

    /** @test */
    public function it_moves_forward()
    {
        $this->sut->apply(Forward::ALIAS);
        self::assertEquals(new Direction(Direction::NORTH), $this->sut->direction());
        self::assertEquals(new Position(1, 3), $this->sut->position());

    }
}
