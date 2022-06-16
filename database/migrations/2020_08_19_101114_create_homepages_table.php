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
            $table->string('img')->nullable();
            $table->string('title');
            $table->string('titre_site')->nullable();
            $table->string('soustitre_site')->nullable();
            $table->text('contenu')->nullable();
            $table->string('color');
            $table->string('logo')->nullable();
            $table->text('footer');
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
