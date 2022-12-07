<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('city_id')->nullable()->constrained('cities');
            $table->foreignId('product_id')->nullable()->constrained('products')->onDelete('cascade');
            $table->integer('qun')->default(1);
            $table->boolean('stat')->default(false);
            $table->text('note')->nullable();

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
        Schema::dropIfExists('orders');
    }
}
