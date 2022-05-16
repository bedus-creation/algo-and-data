<?php

namespace Src\BST;

class BST
{
    public function __construct(public ?Node $root = null){}

    public function create(iterable $data): ?Node
    {
        $node = null;

        foreach ($data as $datum) {
            $node = $this->insert($node, $datum);
        }

        return $node;
    }

    public function insert(?Node $root, int|string $data): Node
    {
        if ( empty($root) ) {
            return new Node($data);
        }

        if ( $data < $root->value ) {
            $root->left = $this->insert($root->left, $data);
        }

        else if ( $data > $root->value ) {
            $root->right = $this->insert($root->right, $data);
        }

        return $root;
    }

    public function search(int|string $key)
    {
        // TODO: implement search
    }

    public function delete()
    {
        // TODO: implement delete on BST
    }

    /**
     * @param Node|null $node
     * @param array     $data
     *
     * @return array|null
     */
    public function preorder(?Node $node, array $data = []): ?array
    {
        if ( empty($node) ) return $data;

        $data[] = $node->value;
        $data   = $this->preOrder($node->left, $data);

        return $this->preOrder($node->right, $data);
    }
}
