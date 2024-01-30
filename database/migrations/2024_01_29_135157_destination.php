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
        Schema::create('destination', function (Blueprint $table) {
            $table->id();
            $table->string('en_name');
            $table->string('fr_name');
            $table->text('en_description');
            $table->text('fr_description');
            $table->integer('distance');
            $table->integer('duration');
            $table->string('picture');
            $table->string('en_distance_unit');
            $table->string('fr_duration_unit');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destination');
    }
};
