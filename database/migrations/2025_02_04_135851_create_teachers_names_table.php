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
        Schema::create('teachers_names', function (Blueprint $table) {
            $table->uuid()->primary()->unique();
            $table->uuid('school_name')->nullable();
            $table->foreign('school_name')->references('uuid')->on('school_details')->onDelete('cascade');
            $table->uuid('teacher_name')->nullable();
            $table->foreign('teacher_name')->references('uuid')->on('teacher_details')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers_names');
    }
};
