<?php

namespace Tests\Mars\Command;


use Mars\Command\Forward;
use Mars\Direction;
use Mars\Position;
use PHPUnit\Framework\TestCase;

class ForwardTest extends TestCase
{
    /** @var Forward */
    private $sut;

    protected function setUp()
    {
        $this->sut = new Forward();
    }

    /** @test */
    public function it_applies_to_direction()
    {
        $direction = $this->getMockBuilder(Direction::class)->disableOriginalConstructor()->getMock();
        $position = $this->getMockBuilder(Position::class)->disableOriginalConstructor()->getMock();

        self::assertEquals($direction, $this->sut->applyToDirection($position, $direction));

    }

    /** @test */
    public function it_applies_to_position()
    {
        $direction = $this->getMockBuilder(Direction::class)->disableOriginalConstructor()->getMock();
        $position = $this->getMockBuilder(Position::class)->disableOriginalConstructor()->getMock();

        $expectedPosition = new Position(1, 1);
        $position->method('forward')->with($direction)->willReturn($expectedPosition);
        self::assertEquals($expectedPosition, $this->sut->applyToPosition($position, $direction));

    }
}
