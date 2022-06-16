<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageProduit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'page_produits', 
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('slug', 255)->nullable();
                $table->text('description_meta')->nullable();
                $table->text('title')->nullable();
                $table->string('subtitle')->nullable();
                $table->string("lien_amazon");
                $table->string('img')->nullable();
                $table->text("resume")->nullable();
                $table->integer("stars")->nullable();
                $table->text("points_forts")->nullable();
                $table->text("points_faibles")->nullable();
                $table->text('caracteristiques')->nullable();
                $table->text("presentation")->nullable();
                $table->text("conclusion")->nullable();

                $table->text('accordion_text')->nullable();
                $table->text('excerpt')->nullable();
                
                $table->text("description_produit")->nullable();
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
        Schema::dropIfExists('page_produits');
    }
}
