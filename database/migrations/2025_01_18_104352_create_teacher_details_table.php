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
        Schema::create('teacher_details', function (Blueprint $table) {
            $table->uuid()->primary()->unique();
            $table->string('teacher_name');
            $table->string('teacher_school_name');
            $table->string('teacher_class');
            $table->string('teacher_subject');
            $table->bigInteger('aadhar_no');
            $table->bigInteger('contact_no');
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_details');
    }
};
