<?php

use PHPUnit\Framework\TestCase;

class TestFoo extends TestCase
{
    public function testMockery()
    {
        $mock = \Mockery::mock('Dingen');
        $mock->shouldReceive('hoi')->andReturn('doei');
        $this->assertEquals('doei', $mock->hoi());
    }
}
