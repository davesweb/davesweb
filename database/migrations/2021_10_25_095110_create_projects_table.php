<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id')->references('id')->on('resumes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('project_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->references('id')->on('projects')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 8)->index();
            $table->string('title');
            $table->string('url')->nullable();
            $table->json('content')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('project_translations');
        Schema::dropIfExists('projects');
    }
}
