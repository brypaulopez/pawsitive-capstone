<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cart_tables', function (Blueprint $table) {
            $table->id('cart_id');
            $table->integer('product_user_id');
            $table->string('cart_name');
            $table->string('cart_price');
            $table->integer('cart_qty');
            $table->string('cart_image');
            $table->string('cart_address');
            $table->string('cart_city');
            $table->string('cart_state');
            $table->integer('zipcode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_tables');
    }
};
