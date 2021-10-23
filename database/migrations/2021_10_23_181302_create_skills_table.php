<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('skill_categories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedInteger('score')->default(0);
            $table->timestamps();
        });

        Schema::create('skill_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('skill_id')->references('id')->on('skills')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 8)->index();
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('skill_translations');
        Schema::dropIfExists('skills');
    }
}
