<?php

namespace Src\Stack;

class Node
{
    public Node|null $next = null;

    public function __construct(
        public string|int $data
    ){}
}
