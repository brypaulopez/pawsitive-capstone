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
        Schema::create('product_tables', function (Blueprint $table) {
            $table->id('product_id');
            $table->integer('product_vet_id');
            $table->string('vet_name');
            $table->string('product_name');
            $table->string('product_details');
            $table->string('product_category');
            $table->string('product_stock');
            $table->string('product_price');
            $table->string('product_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_tables');
    }
};
