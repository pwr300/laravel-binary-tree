<?php

use Illuminate\Database\Seeder;

class NodesTableSeeder extends Seeder
{
    const MAX_NODES_COUNT = 30;
    private $i = 1;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Node::class, self::MAX_NODES_COUNT)->create()->each(function (App\Node $node) {
            $node->update([
                'left_node' => $this->shouldMakeNode() ? ++$this->i : null,
                'right_node' => $this->shouldMakeNode() ? ++$this->i : null
            ]);
        });
    }

    private function shouldMakeNode()
    {
        return mt_rand() / mt_getrandmax() < (1 - $this->i * (1 / self::MAX_NODES_COUNT));
    }
}
