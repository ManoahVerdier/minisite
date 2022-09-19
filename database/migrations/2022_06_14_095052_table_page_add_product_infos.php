<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePageAddProductInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('subtitle')->nullable();
            $table->double("stars")->nullable();
            $table->string("lien_amazon");
            $table->text("points_forts")->nullable();
            $table->text("points_faibles")->nullable();
            $table->text("presentation")->nullable();
            $table->text("conclusion")->nullable();
            $table->text("resume")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('subtitle');
            $table->dropColumn('stars');
            $table->dropColumn('lien_amazon');
            $table->dropColumn('points_forts');
            $table->dropColumn('points_faibles');
            $table->dropColumn('presentation');
            $table->dropColumn('conclusion');
            $table->dropColumn('resume');
        });
    }
}
