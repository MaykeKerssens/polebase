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
        Schema::create('tricks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->text('description')->nullable();
            $table->date('learned_at')->nullable();
            $table->boolean('is_mastered')->default(false);
            $table->enum('difficulty', ['easy', 'medium', 'hard', 'expert']);
            $table->enum('energy_cost', ['low', 'medium', 'high']);
            $table->string('image_url')->nullable();
            $table->string('video_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tricks');
    }
};
