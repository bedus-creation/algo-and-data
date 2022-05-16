<?php

namespace Src\BST;

class Node
{
    public function __construct(
        public string|int $value,
        public ?Node $left = null,
        public ?Node $right = null
    ){}
}
