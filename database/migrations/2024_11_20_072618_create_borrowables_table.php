<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('borrowables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->morphs('borrowable'); // Adds `borrowable_type` and `borrowable_id` columns
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->timestamp('borrowed_at')->nullable();
            $table->timestamp('returned_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowables');
    }
};
