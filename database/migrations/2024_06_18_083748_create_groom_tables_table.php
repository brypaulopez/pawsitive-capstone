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
        Schema::create('groom_tables', function (Blueprint $table) {
            $table->id('groom_id');
            $table->integer('groom_vet_id');
            $table->string('vet_name');
            $table->string('groom_details');
            $table->integer('groom_price');
            $table->string('groom_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groom_tables');
    }
};
