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
        Schema::create('academic_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->nullable();
            $table->string('degree',150)->nullable();
            $table->unsignedSmallInteger('obtained_marks')->nullable();
            $table->unsignedSmallInteger('total_marks')->nullable();
            $table->string('cgpa')->nullable();
            $table->unsignedSmallInteger('percentage')->nullable();
            $table->text('institution')->nullable();
            $table->date('year_of_passing')->nullable();
            $table->string('grade',3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_information');
    }
};
