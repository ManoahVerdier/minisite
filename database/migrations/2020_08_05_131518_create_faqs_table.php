<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'faqs', 
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('slug', 255);
                $table->string('question', 255)->nullable();
                $table->text('reponse')->nullable();
                $table->text('description')->nullable();
                $table->integer('categ_id')->nullable();
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
