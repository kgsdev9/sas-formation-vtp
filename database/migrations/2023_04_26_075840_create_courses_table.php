<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->integer('prix');
            $table->string('url_video');
            $table->string('image');
            $table->boolean('popular')->default('0');
            $table->boolean('published')->default('0');
            $table->unsignedBigInteger('level_id');
            $table->unsignedBigInteger('formateur_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('formateur_id')->references('id')->on('formateurs');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
