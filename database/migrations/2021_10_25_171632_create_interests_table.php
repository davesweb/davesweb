<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('interests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id')->references('id')->on('resumes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('interest_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('interest_id')->references('id')->on('interests')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 8)->index();
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('interest_translations');
        Schema::dropIfExists('interests');
    }
}
