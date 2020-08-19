<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slide');
            $table->text('expertise');
            $table->string('img1');
            $table->text('img1_link');
            $table->string('img2');
            $table->text('img2_link');
            $table->string('img3');
            $table->text('img3_link');
            $table->string('img4');
            $table->text('img4_link');
            $table->string('img5');
            $table->text('img5_link');
            $table->boolean('has_secteurs');
            $table->text('clients');
            $table->string('clients_certif_1');
            $table->string('clients_certif_2');
            $table->string('clients_certif_3');
            $table->string('clients_certif_4');
            $table->string('conseil_libelle');
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
        Schema::dropIfExists('homepages');
    }
}
