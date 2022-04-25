<?php

namespace Src\Stack;

class Stack
{
    protected Node|null $top = null;

    public function push(string|int $data): void
    {
        $node = new Node($data);
        $node->next = $this->top;

        $this->top =$node;
    }

    public function pop(): string|int
    {
        if(empty($this->top)){
            return -1;
        }

        $data = $this->top->data;
        $this->top = $this->top->next;

        return $data;
    }
}
