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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',150)->nullable();
            $table->string('last_name',150)->nullable();
            $table->string('father_name',150)->nullable();
            $table->string('email')->unique();
            $table->string('cnic',20)->unique();
            $table->string('mobile',20)->nullable();
            $table->string('domicile',100)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender',10)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
