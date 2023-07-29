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
        Schema::create('post_tags', function (Blueprint $table) {
            $table->bigIncrements('pt_id');
            $table->foreignId('post_id')->references('post_id')->on('posts');
            $table->foreignId('tag_id')->references('tag_id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post__tags');
    }
};
