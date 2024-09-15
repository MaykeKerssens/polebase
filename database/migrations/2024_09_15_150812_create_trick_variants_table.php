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
        Schema::create('trick_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trick_id')->constrained()->cascadeOnDelete();
            $table->foreignId('variant_trick_id')->constrained('tricks')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trick_variants');
    }
};
