<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConseilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'conseils', 
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('slug', 255)->nullable();
                $table->string('certification', 255)->nullable();
                $table->timestamps();
                $table->text('lien_formation')->nullable();
                $table->text('demarche')->nullable();
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
        Schema::dropIfExists('conseils');
    }
}
