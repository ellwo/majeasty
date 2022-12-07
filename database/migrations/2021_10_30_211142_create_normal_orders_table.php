<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNormalOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('normal_orders', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('note')->nullable();
            $table->foreignId('product_id')->nullable()->constrained('products')->onDelete('cascade');
            $table->integer('qun');
            $table->text('address')->nullable();
            $table->foreignId('city_id')->nullable()->constrained('cities')->nullOnDelete();
            $table->boolean('stat')->default(false);
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
        Schema::dropIfExists('normal_orders');
    }
}
