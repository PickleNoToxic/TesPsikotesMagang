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
        Schema::create('detail_personality_test', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->name('fk_user_personality_test')->onDelete('cascade');
            $table->foreignId('personality_test_id')->references('id')->on('personality_test')->name('fk_personality_test');
            $table->string('answer');
            $table->string('statement')->nullable();
            $table->string('option')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_personality_test');
    }
};
