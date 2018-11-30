<?php

namespace Tests\Mars\Command;


use Mars\Command\Right;
use Mars\Direction;
use Mars\Position;
use PHPUnit\Framework\TestCase;

class RightTest extends TestCase
{
    /** @var Right */
    private $sut;

    protected function setUp()
    {
        $this->sut = new Right();
    }

    /** @test */
    public function it_applies_to_direction()
    {
        $direction = $this->getMockBuilder(Direction::class)->disableOriginalConstructor()->getMock();
        $position = $this->getMockBuilder(Position::class)->disableOriginalConstructor()->getMock();

        $expectedDirection = new Direction(Direction::NORTH);
        $direction->method('rightDirection')->willReturn($expectedDirection);
        self::assertEquals($expectedDirection, $this->sut->applyToDirection($position, $direction));

    }
}
