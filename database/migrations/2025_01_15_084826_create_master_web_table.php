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
        Schema::create('master_web', function (Blueprint $table) {
            $table->id();
            $table->integer('number_of_questions_iq_test');
            $table->integer('number_of_questions_personality_test');
            $table->integer('iq_test_duration');
            $table->integer('personality_test_duration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_web');
    }
};
