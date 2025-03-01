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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('whatsapp');
            $table->date('birthday');
            $table->string('gender');
            $table->string('address');
            $table->string('position');
            $table->integer('score_iq')->default(0);
            $table->double('score_koleris')->default(0.0);
            $table->double('score_phlegmatis')->default(0.0);
            $table->double('score_sanguinis')->default(0.0);
            $table->double('score_melankolis')->default(0.0);
            $table->boolean('is_admin')->default(false);
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
