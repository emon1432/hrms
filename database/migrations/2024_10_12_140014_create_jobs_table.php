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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('location')->nullable();
            $table->string('vacancy')->nullable();
            $table->string('experience')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Both'])->default('Both');
            $table->decimal('salary_from', 10, 2)->nullable();
            $table->decimal('salary_to', 10, 2)->nullable();
            $table->date('deadline')->nullable();
            $table->enum('type', ['Full Time', 'Part Time', 'Internship', 'Temporary', 'Other'])->default('Full Time');
            $table->enum('status', ['Open', 'Closed', 'Cancelled']);
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
