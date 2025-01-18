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
        Schema::create('personality_test', function (Blueprint $table) {
            $table->id();
            $table->string('option_1');
            $table->string('option_2');
            $table->string('option_3');
            $table->string('option_4');
            $table->string('category_option_1');
            $table->string('category_option_2');
            $table->string('category_option_3');
            $table->string('category_option_4');
            $table->string('statement_1');
            $table->string('statement_2');
            $table->string('statement_3');
            $table->string('statement_4');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personality_test');
    }
};
