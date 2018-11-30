<?php

namespace Tests\Mars;

use Mars\Direction;
use PHPUnit\Framework\TestCase;

class DirectionTest extends TestCase
{

    public function provideLeftDirectionExamples()
    {
        return [
            'N' => [new Direction('N'), new Direction('W')],
            'W' => [new Direction('W'), new Direction('S')],
            'S' => [new Direction('S'), new Direction('E')],
            'E' => [new Direction('E'), new Direction('N')],
        ];
    }

    /**
     * @test
     * @dataProvider provideLeftDirectionExamples
     */
    public function it_returns_left_direction(Direction $direction, Direction $expected){
        self::assertEquals($expected, $direction->leftDirection());
    }

    public function provideRightDirectionExamples()
    {
        return [
            'N' => [new Direction('N'), new Direction('E')],
            'W' => [new Direction('W'), new Direction('N')],
            'S' => [new Direction('S'), new Direction('W')],
            'E' => [new Direction('E'), new Direction('S')],
        ];
    }

    /**
     * @test
     * @dataProvider provideRightDirectionExamples
     */
    public function it_returns_right_direction(Direction $direction, Direction $expected){
        self::assertEquals($expected, $direction->rightDirection());
    }
}
