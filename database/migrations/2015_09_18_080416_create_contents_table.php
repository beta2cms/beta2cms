<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('node_id'); // Zeiger auf die Aktuelle Seite
            $table->integer('element_id');
            //$table->integer('module_id'); // Zeiger auf das Moudle, das benutzt wird
            //$table->integer('module_content_id'); // id of module content // Inhalt des Modules
            $table->integer('order')->nullable();
            $table->boolean('active');
        
            $table->timestamps();

            $table->foreign('node_id')
                ->references('id')
                ->on('nodes');


            $table->foreign('element_id')
                ->references('id')
                ->on('elements');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contents');
    }
}
