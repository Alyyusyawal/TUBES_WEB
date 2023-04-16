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
        Schema::create('sign-up', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('identity_number')->unique();
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('role');
            $table->string('password');
            $table->timestamps();
        });
        
        Schema::create('sign-in', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('identity_number')->unique();
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('role');
            $table->string('status');
            $table->timestamps();
        });
        Schema::create('presensi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('identity_number')->unique();
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sign-up');
        Schema::dropIfExists('sign-in');
        Schema::dropIfExists('presensi');
    }
};
