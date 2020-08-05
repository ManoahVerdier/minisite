<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemoignagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('temoignages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('conseil_id')->nullable();
			$table->text('texte', 65535)->nullable();
			$table->string('client')->nullable();
			$table->string('certification')->nullable();
			$table->integer('nb_etoiles')->nullable();
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
		Schema::drop('temoignages');
	}

}
