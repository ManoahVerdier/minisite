<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableConseilsAddEditableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('conseils', function (Blueprint $table) {
            $table->text('banner_italic')->nullable();
            $table->text('banner_regular_white')->nullable();
            $table->text('banner_regular_black')->nullable();
            $table->text('description1')->nullable();//
            $table->text('description2')->nullable();//
            $table->text('description3')->nullable();//
            $table->text('objectif_content')->nullable();//
            $table->text('metier_black')->nullable();//
            $table->text('metier_blue1')->nullable();//
            $table->text('metier_blue2')->nullable();//
            $table->text('metier_blue3')->nullable();//
            $table->text('avantage1')->nullable();//
            $table->text('avantage2')->nullable();//
            $table->text('avantage3')->nullable();//
            $table->text('avantage4')->nullable();//
            $table->text('avantage5')->nullable();//
            $table->text('services1')->nullable();//
            $table->text('services2')->nullable();//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('conseils', function (Blueprint $table) {
            $table->dropColumn('banner_italic');
            $table->dropColumn('banner_regular');
            $table->dropColumn('description_title');
            $table->dropColumn('description_content');
            $table->dropColumn('description_1');
            $table->dropColumn('description_2');
            $table->dropColumn('description_3');
            $table->dropColumn('objectif_content');
            $table->dropColumn('metier_black');
            $table->dropColumn('metier_blue1');
            $table->dropColumn('metier_blue2');
            $table->dropColumn('metier_blue3');
            $table->dropColumn('avantage1');
            $table->dropColumn('avantage2');
            $table->dropColumn('avantage3');
            $table->dropColumn('avantage4');
            $table->dropColumn('avantage5');
            $table->dropColumn('services1');
            $table->dropColumn('services2');
        });
    }
}
