<?php

namespace Src\BST;

class Closest
{
    public function recursive(Node $root, $target): int
    {
        if ( abs($root->left->value ?? 0 - $target) < abs($root->value - $target) ) {
            return $this->recursive($root->left, $target);
        }

        if ( abs($root->right->value ?? 0 - $target) < abs($root->value - $target) ) {
            return $this->recursive($root->right, $target);
        }

        return $root->value;
    }

    public function iterative(Node $root, $target): int
    {
        $currentNode  = $root;

        while ($currentNode) {
            if ( abs($currentNode->left->value ?? 0 - $target) < abs($currentNode->value - $target) ) {
                $currentNode = $currentNode->left;
            }

            else if ( abs($currentNode->right->value ?? 0 - $target) < abs($currentNode->value - $target) ) {
                $currentNode = $currentNode->right;
            }
            else {
                return $currentNode->value;
            }
        }
    }
}
