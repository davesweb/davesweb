<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    public function up(): void
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('skill_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skill_id')->references('id')->on('skills')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 8)->index();
            $table->string('title');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('skill_translations');
        Schema::dropIfExists('skills');
    }
}
