<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationsTable extends Migration
{
    public function up(): void
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id')->references('id')->on('resumes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('education_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('education_id')->references('id')->on('educations')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 8)->index();
            $table->string('title');
            $table->string('location');
            $table->string('timeframe')->nullable();
            $table->json('content')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('education_translations');
        Schema::dropIfExists('educations');
    }
}
