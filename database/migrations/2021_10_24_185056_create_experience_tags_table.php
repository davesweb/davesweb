<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTagsTable extends Migration
{
    public function up(): void
    {
        Schema::create('experience_tags', function (Blueprint $table) {
            $table->foreignId('experience_id')->references('id')->on('experiences')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tag_id')->references('id')->on('tags')->cascadeOnUpdate()->cascadeOnDelete();

            $table->primary(['experience_id', 'tag_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('experience_tags');
    }
}
