<?php

class Stack {
    // 栈的容量
    private $capacity = 0;

    // 栈顶位置
    private $topOfStack = -1;

    // 栈元素
    private $elements = [];

    /**
     * 创建栈
     * @param $capacity 容量
     * 
     * @return null
     */
    public function createStack(int $capacity)
    {
        $this->capacity = $capacity;
    }   
    
    /**
     * 栈是否为空
     * 
     * @return bool
     */
    public function isEmpty()
    {
        return 0 === count($this->elements);
    }

    /**
     * 栈是否满了
     * 
     * @return bool
     */
    public function isFull()
    {
        return count($this->elements) == $this->capacity;
    }

    /**
     * 栈剩余空间
     * 
     * @return int
     */
    public function leftCapacity()
    {
        return $this->capacity - count($this->elements);
    }

    /**
     * 入栈
     * 
     * @param mixed $element
     * 
     * @return bool
     */
    public function push($element)
    {
        if ($this->isFull() == false) {
            $index = ++$this->topOfStack;
            if (!isset($this->elements[$index])) $this->elements[$index] = '';
            $this->elements[$index] = $element;
            return true;   
        }
        return false;
    }

    /**
     * 获取栈顶是元素
     * 
     * @return mixed
     */
    public function top()
    {
        return isset($this->elements[$this->topOfStack]) ? 
                    $this->elements[$this->topOfStack] : null;
    }

    /**
     * 出栈且获取出栈元素
     * 
     * @return mixed
     */
    public function topAndPop()
    {
        if ($this->isEmpty()) {
            return null;   
        }

        $element = $this->elements[$this->topOfStack];
        unset($this->elements[$this->topOfStack]);
        $this->topOfStack--;
        return $element;
    }

    /**
     * 销毁
     * 
     * @return mixed
     */
    public function disposeStack()
    {
        // unset($this->elements);
        while (false === $this->isEmpty()) {
            $this->topAndPop();
        }

        return true;
    }

    public function getTopOfStack()
    {
        return $this->topOfStack;
    }

    public function getAllElements()
    {
        return $this->elements;
    }
}