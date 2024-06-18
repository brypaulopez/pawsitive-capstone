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
        Schema::create('dogs', function (Blueprint $table) {
            $table->id('dogs_id');
            $table->string('dog_name');
            $table->string('dog_desc');
            $table->string('dog_health');            
            $table->string('dog_grooming');
            $table->string('dog_exercise');
            $table->string('dog_training');
            $table->string('dog_nutrition');
            $table->integer('affectionate_with_family');
            $table->integer('good_with_dogs');
            $table->integer('good_with_children');
            $table->integer('shedding_level');
            $table->integer('grooming_frequency');
            $table->integer('drooling_level');
            $table->string('coat_type');
            $table->string('coat_length');
            $table->integer('good_with_strangers');
            $table->integer('playful');
            $table->integer('protective_nature');
            $table->integer('adaptability_level');
            $table->integer('trainability_level');
            $table->integer('barking_level');
            $table->integer('energy_level');
            $table->string('dog_image');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dogs');
    }
};
