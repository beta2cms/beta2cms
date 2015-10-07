<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Elements are the connection between the contents table and the module with their content
         * The main idea of this table is to reuse the same module + content on different pages.
         */
        Schema::create('elements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('module_id')->unsigend();
            $table->integer('row')->unsigend();
            $table->timestamps();

            $table->foreign('module_id')
                ->references('id')
                ->on('modules');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('elements');
    }
}