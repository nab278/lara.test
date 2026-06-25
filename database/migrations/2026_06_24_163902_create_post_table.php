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
        Schema::create('post', function (Blueprint $table) {
            $table->id(); // Primary key (BigInteger, Auto-Increment)
            $table->string('title'); // VARCHAR column for the post title
            $table->string('slug')->unique(); // Unique index column for URLs
            $table->text('body'); // TEXT column for the body content
            $table->boolean('is_published')->default(false); // Boolean status flag
            $table->timestamps(); // Generates created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
    }
};
