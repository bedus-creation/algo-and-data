<?php

namespace Tests\BST\Traits;

trait DataProviderTrait
{
    public function closestBSTDataProvider(): array
    {
        return [
            [[4, 2, 5, 1, 3], 3.714286, 4],
            [[1], 4.428, 1]
        ];
    }
}
