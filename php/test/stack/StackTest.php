<?php

require __DIR__ . '/../bootscrap.php';
require ROOT_DIR . '/stack/stack.php';

use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{
    public function testCreateStack(): void
    {
        $stack = new Stack();
        $stack->createStack(2);
        $this->assertEquals($stack->leftCapacity(), 2);
    }

    public function testIsFull(): void
    {
        $stack = new Stack();
        $stack->createStack(2);
        $stack->push(1);
        $this->assertFalse($stack->isFull());
        $stack->push(1);
        $this->assertTrue($stack->isFull());
        
    }

    public function testIsEmpty(): void
    {
        $stack = new Stack();
        $this->assertTrue($stack->isEmpty());
        $stack->createStack(2);
        $stack->push(1);
        $this->assertFalse($stack->isEmpty());
    }

    public function testPush() : void
    {
        $stack = new Stack();
        $stack->createStack(2);
        $this->assertTrue($stack->push('a'));
        $this->assertEquals($stack->leftCapacity(), 1);
        $stack->push(1);
        $this->assertFalse($stack->push(1));
    }

    public function testTopAndPush() : void
    {
        $stack = new Stack();
        $stack->createStack(2);
        $this->assertTrue($stack->push('a'));
        $this->assertEquals($stack->leftCapacity(), 1);
        $tmp = $stack->topAndPop();
        $this->assertEquals($tmp, 'a');
        $this->assertEquals($stack->leftCapacity(), 2);
    }

    public function testDisposeStack() : void
    {
        $stack = new Stack();
        $stack->createStack(2);
        $this->assertEquals(-1, $stack->getTopOfStack());
        $stack->push('a');
        $stack->push('b');
        $this->assertEquals(1, $stack->getTopOfStack());
        $this->assertTrue($stack->disposeStack()); 
        $this->assertEquals(-1, $stack->getTopOfStack());
        $this->assertEmpty($stack->getAllElements());
    }

    public function testLIFO() : void
    {
        $stack = new Stack();
        $stack->createStack(2);
        $stack->push('a');
        $stack->push('b');
        $stack->push('c');

        $this->assertEquals('b', $stack->topAndPop());
        $this->assertEquals('a', $stack->topAndPop());
        $this->assertNull($stack->topAndPop());
    }
}