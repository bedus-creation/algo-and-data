<?php

namespace Tests\BST;

use Src\BST\BST;
use Src\BST\Closest;
use Tests\BST\Traits\DataProviderTrait;
use Tests\TestCase;

class ClosestTest extends TestCase
{
    use DataProviderTrait;

    /**
     * @dataProvider closestBSTDataProvider
     *
     * @test
     */
    public function a_bst_can_be_searched_for_target_value_recursive(array $tree, int|float $target, int $output)
    {
        $bst  = new BST();
        $root = $bst->create($tree);

        $this->assertEquals($output, (new Closest())->recursive($root, $target));
    }

    /**
     * @dataProvider closestBSTDataProvider
     *
     * @test
     */
    public function a_bst_can_be_searched_for_target_value_iterative(array $tree, int|float $target, int $output)
    {
        $bst  = new BST();
        $root = $bst->create($tree);

        $this->assertEquals($output, (new Closest())->iterative($root, $target));
    }
}
