<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    public function data()
    {
        return $this->belongsTo(NodeData::class, 'id', 'id');
    }

    public function leftNode()
    {
        return $this->belongsTo(Node::class, 'left_node');
    }

    public function rightNode()
    {
        return $this->belongsTo(Node::class, 'right_node');
    }
}
