<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTagsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('project_tags', function (Blueprint $table) {
            $table->foreignId('project_id')->references('id')->on('projects')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tag_id')->references('id')->on('tags')->cascadeOnUpdate()->cascadeOnDelete();

            $table->primary(['project_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('project_tags');
    }
}
