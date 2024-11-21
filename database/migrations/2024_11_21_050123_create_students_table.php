<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('students', function (Blueprint $table) {
        $table->id(); // Primary key, auto-incrementing
        $table->string('nim', 10)->unique(); // Unique NIM
        $table->string('name', 50); // Student name
        $table->string('study_program', 20); // Study program
        $table->timestamps(); // Created and updated timestamps
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
