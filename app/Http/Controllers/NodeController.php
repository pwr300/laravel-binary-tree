<?php

namespace App\Http\Controllers;

use App\Node;
use Illuminate\Http\Request;

class NodeController extends Controller
{
    public function index()
    {
        $nodes = $this->traverse(Node::first());

        return view('welcome', ['nodes' => $nodes]);
    }

    private function traverse(Node $node)
    {
        $list['data'] = $node->data->toArray();

        if ($node->leftNode !== null) {
            $list['nodes']['left'] = $this->traverse($node->leftNode);
        }

        if ($node->rightNode !== null) {
            $list['nodes']['right'] = $this->traverse($node->rightNode);
        }

        return $list;
    }
}
