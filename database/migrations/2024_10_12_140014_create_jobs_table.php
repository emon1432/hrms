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
            $table->foreignId('organization_id')->constrained()->onDelete('cascade');
            $table->foreignId('job_category_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('location');
            $table->string('vacancy');
            $table->string('experience')->nullable();
            $table->string('gender')->nullable();
            $table->string('salary_from');
            $table->string('salary_to');
            $table->date('deadline');
            $table->enum('type', ['Full Time', 'Part Time', 'Internship', 'Temporary', 'Other']);
            $table->enum('status', ['Open', 'Closed', 'Cancelled']);
            $table->longText('description')->nullable();
            $table->string('slug');
            $table->integer('created_by')->unsigned()->nullable();
            $table->integer('updated_by')->unsigned()->nullable();
            $table->integer('view_count')->default(0);
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
