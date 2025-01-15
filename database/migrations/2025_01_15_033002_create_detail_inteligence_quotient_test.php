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
        Schema::create('detail_inteligence_quotient_test', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->name('fk_user_inteligence_quotient_test');
            $table->foreignId('inteligence_quotient_test_id')->references('id')->on('inteligence_quotient_test')->name('fk_inteligence_quotient_test');
            $table->integer('answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_inteligence_quotient_test');
    }
};
