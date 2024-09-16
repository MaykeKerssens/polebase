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
        Schema::create('transitions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->foreignId('start_trick_id')->constrained('tricks');
            $table->foreignId('end_trick_id')->constrained('tricks');
            $table->string('description')->nullable();
            $table->date('learned_at')->nullable();
            $table->boolean('is_mastered')->default(false);
            $table->enum('difficulty', ['easy', 'medium', 'hard', 'expert']);
            $table->enum('energy_cost', ['low', 'medium', 'high']);
            $table->string('video_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transitions');
    }
};
