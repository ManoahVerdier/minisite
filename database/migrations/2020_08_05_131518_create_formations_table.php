<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->string('nom');
            $table->string('sous_titre');
            $table->text('objectif');
            $table->text('infos_pratiques');
            $table->text('contenu');
            $table->string('duree');
            $table->string('prix');
            $table->string('type');
            $table->timestamps();
            $table->string('categorie_id');
            $table->string('sous_categorie_id');
            $table->text('sessions')->nullable();
            $table->string('slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formations');
    }
}
