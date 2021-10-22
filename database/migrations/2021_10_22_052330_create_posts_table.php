<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('categories')->cascadeOnUpdate()->restrictOnDelete();
            $table->dateTime('publish_date')->index();
            $table->unsignedInteger('status')->default(0)->index();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('post_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->references('id')->on('posts')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 8)->index();

            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->json('content')->nullable();

            $table->unique(['locale', 'slug']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('post_translations');
        Schema::dropIfExists('posts');
    }
}
