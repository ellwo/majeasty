<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCityToLocitions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('locitons', function (Blueprint $table) {

            $table->foreignId('city_id')->nullable()->constrained('cities')->nullOnDelete();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('locitons', function (Blueprint $table) {
            //
            $table->dropColumn('city_id');
        });
    }
}
