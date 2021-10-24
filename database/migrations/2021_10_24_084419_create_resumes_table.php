<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    public function up(): void
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('resume_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id')->references('id')->on('resumes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 8)->index();
            $table->string('title');
            $table->json('about_me');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('resume_translations');
        Schema::dropIfExists('resumes');
    }
}
