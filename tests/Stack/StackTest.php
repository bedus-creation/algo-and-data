<?php

namespace Tests\Stack;

use Src\Stack\Stack;
use Tests\TestCase;

class StackTest extends TestCase
{
    /** @test */
    public function stack_can_be_created()
    {
        $stack = new Stack();

        $stack->push(10);
        $stack->push(20);
        $stack->push(30);

        $this->assertEquals(30, $stack->pop());
        $this->assertEquals(20, $stack->pop());
        $this->assertEquals(10, $stack->pop());
    }
}
