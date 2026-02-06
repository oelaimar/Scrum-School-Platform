<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('student_achievements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('users')->cascadeOnDelete();
            $table->enum('achievement_type',
            [
                'first_task',
                'sprint_completed',
                'helper',
                'consistent'
            ]);
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->timestamp('earned_at')->useCurrent();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('student_achievements');
    }
};
