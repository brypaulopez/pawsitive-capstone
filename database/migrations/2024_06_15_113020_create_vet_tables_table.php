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
        Schema::create('vet_tables', function (Blueprint $table) {
            $table->id('vet_id');
            $table->string('vet_name');
            $table->string('vet_groom');
            $table->string('vet_boarding');
            $table->string('vet_products');
            $table->string('vet_city');
            $table->string('vet_municipality');
            $table->string('vet_state');
            $table->string('vet_package');
            $table->string('vet_address');
            $table->string('vet_desc');
            $table->string('vet_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vet_tables');
    }
};
