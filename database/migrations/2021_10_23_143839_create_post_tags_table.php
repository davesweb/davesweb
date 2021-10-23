<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTagsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('post_tags', function (Blueprint $table) {
            $table->foreignId('post_id')->references('id')->on('posts')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tag_id')->references('id')->on('tags')->cascadeOnUpdate()->cascadeOnDelete();

            $table->primary(['post_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('post_tags');
    }
}
