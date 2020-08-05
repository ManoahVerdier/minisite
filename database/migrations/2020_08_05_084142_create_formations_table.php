<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('formations', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('titre', 191);
			$table->string('nom', 191);
			$table->string('sous_titre', 191);
			$table->text('objectif', 65535);
			$table->text('infos_pratiques', 65535);
			$table->text('contenu', 65535);
			$table->string('duree', 191);
			$table->string('prix', 191);
			$table->string('type', 191);
			$table->timestamps();
			$table->string('categorie_id', 191);
			$table->string('sous_categorie_id', 191);
			$table->text('sessions', 65535)->nullable();
			$table->string('slug', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('formations');
	}

}
