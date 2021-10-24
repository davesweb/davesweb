<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeSkillsTable extends Migration
{
    public function up(): void
    {
        Schema::create('resume_skills', function (Blueprint $table) {
            $table->foreignId('resume_id')->references('id')->on('resumes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('skill_id')->references('id')->on('skills')->cascadeOnUpdate()->cascadeOnDelete();

            $table->primary(['resume_id', 'skill_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('resume_skills');
    }
}
