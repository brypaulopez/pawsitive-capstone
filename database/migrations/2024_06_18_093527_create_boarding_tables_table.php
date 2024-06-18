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
        Schema::create('boarding_tables', function (Blueprint $table) {
            $table->id('board_id');
            $table->integer('board_vet_id');
            $table->string('vet_name');
            $table->string('board_inclusions');
            $table->integer('board_price');
            $table->string('board_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boarding_tables');
    }
};
