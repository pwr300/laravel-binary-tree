<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->bigIncrements("id");

            $table->bigInteger("left_node")->unsigned()->nullable();
            $table->foreign("left_node")->references("id")->on("nodes");

            $table->bigInteger("right_node")->unsigned()->nullable();
            $table->foreign("right_node")->references("id")->on("nodes");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nodes');
    }
}
