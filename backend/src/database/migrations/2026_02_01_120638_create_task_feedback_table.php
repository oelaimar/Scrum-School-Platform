<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('task_feedback', function (Blueprint $table) {
            $table->id();
            $table->foreignId('solution_id')->constrained('task_solutions')->cascadeOnDelete();
            $table->foreignId('teacher_id')->constrained('users')->cascadeOnDelete();
            $table->text('feedback');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('task_feedback');
    }
};
