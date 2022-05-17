<?php

namespace Tests\BST;

use Src\BST\BST;
use Src\BST\Node;
use Tests\TestCase;

class BSTest extends TestCase
{
    /** @test */
    public function create_bst_from_array()
    {
        $data = [3, 2, 6, 8, 4];
        $bst  = new BST();
        $tree = $bst->create($data);

        $this->assertEquals([3, 2, 6, 4, 8], $bst->preorder($tree));
    }

    /** @test */
    public function preorder_traversal_in_bst()
    {
        $tree               = new Node(3);
        $tree->left         = new Node(2);
        $tree->right        = new Node(6);
        $tree->right->right = new Node(8);
        $tree->right->left  = new Node(5);

        $bst = new BST();
        $this->assertEquals([3, 2, 6, 5, 8], $bst->preorder($tree));
    }
}
