<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableConseilsAddMeta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formations', function (Blueprint $table) {
            $table->text('description')->nullable();
            $table->text('title')->nullable();
        });
        Schema::table('conseils', function (Blueprint $table) {
            $table->text('description')->nullable();
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
        Schema::table('formations', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('title');
        });
        Schema::table('conseils', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('title');
        });
    }
}
