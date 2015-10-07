<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeadingTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heading', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('tag',2);
            $table->string('title');
            $table->string('css_id')->nullable();
            $table->string('css_class')->nullable();
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
        Schema::drop('heading');
    }

}
