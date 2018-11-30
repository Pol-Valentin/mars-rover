<?php

namespace Tests\Mars\Command;


use Mars\Command\Left;
use Mars\Direction;
use Mars\Position;
use PHPUnit\Framework\TestCase;

class LeftTest extends TestCase
{
    /** @var Left */
    private $sut;

    protected function setUp()
    {
        $this->sut = new Left();
    }

    /** @test */
    public function it_applies_to_direction()
    {
        $direction = $this->getMockBuilder(Direction::class)->disableOriginalConstructor()->getMock();
        $position = $this->getMockBuilder(Position::class)->disableOriginalConstructor()->getMock();

        $expectedDirection = new Direction(Direction::NORTH);
        $direction->method('leftDirection')->willReturn($expectedDirection);
        self::assertEquals($expectedDirection, $this->sut->applyToDirection($position, $direction));

    }
}
