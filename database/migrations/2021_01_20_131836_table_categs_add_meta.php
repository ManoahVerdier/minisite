<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableCategsAddMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sous_categories', function (Blueprint $table) {
            $table->text('meta_description')->nullable();
            $table->text('title')->nullable();
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->text('meta_description')->nullable();
            $table->text('title')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sous_categories', function (Blueprint $table) {
            $table->dropColumn('meta_description');
            $table->dropColumn('title');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('meta_description');
            $table->dropColumn('title');
        });
    }
}
