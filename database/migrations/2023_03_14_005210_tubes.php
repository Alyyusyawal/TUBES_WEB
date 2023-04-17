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
        Schema::create('signups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('NIM')->unique();
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('role');
            $table->string('password');
            $table->timestamps();
        });
        
        Schema::create('signins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('NIM')->unique();
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('role');
            $table->string('status');
            $table->timestamps();
        });
        Schema::create('presensis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('NIM')->unique();
            $table->string('email')->unique();
            $table->string('nama');
            $table->string('kehadiran');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signups');
        Schema::dropIfExists('signins');
        Schema::dropIfExists('presensis');
    }
};
