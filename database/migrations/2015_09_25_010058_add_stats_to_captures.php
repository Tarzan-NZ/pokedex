<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatsToCaptures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('captures', function (Blueprint $table) {
            $table->smallInteger('attack')->unsigned();
            $table->smallInteger('defense')->unsigned();
            $table->enum('location',['Kanto', 'Johto', 'Hoenn', 'Sinnoh','Unova']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('captures', function (Blueprint $table) {
            $table->dropColumn('attack', 'defense', 'location');
        });
    }
}
