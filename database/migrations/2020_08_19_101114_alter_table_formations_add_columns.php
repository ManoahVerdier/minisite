<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableFormationsAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->string('slide');
            $table->text('expertise');
            $table->string('img1');
            $table->boolean('img1_link');
            $table->string('img2');
            $table->boolean('img2_link');
            $table->string('img3');
            $table->boolean('img3_link');
            $table->string('img4');
            $table->boolean('img4_link');
            $table->string('img5');
            $table->boolean('img5_link');
            $table->boolean('has_secteurs');
            $table->text('clients');
            $table->string('clients_certif_1');
            $table->string('clients_certif_2');
            $table->string('clients_certif_3');
            $table->string('clients_certif_4');
            $table->string('conseil_libelle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formations', function (Blueprint $table) {
            //
        });
    }
}
