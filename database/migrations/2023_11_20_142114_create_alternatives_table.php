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
        Schema::create('alternatives', function (Blueprint $table) {
            $table->id();
            $table->string('alternative',250);
            $table->boolean('correct')->default(false);
            $table->foreignId('question_id')
                ->constrained('questions')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternatives');
    }
};
