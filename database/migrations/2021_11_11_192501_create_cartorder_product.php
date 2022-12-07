<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartorderProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartorder_product', function (Blueprint $table) {

            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->foreignId('cartorder_id')->constrained()->onDelete('cascade');
            $table->integer('qun')->default(1);
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
        Schema::dropIfExists('cartorder_product');
    }
}
