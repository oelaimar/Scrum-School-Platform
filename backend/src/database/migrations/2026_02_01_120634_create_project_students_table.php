<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('project_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('student_id')->constrained('users')->cascadeOnDelete();

            $table->string('role')->default('developer');
            $table->integer('points_earned')->default(0);
            $table->integer('tasks_completed')->default(0);

            $table->timestamp('joined_at')->useCurrent();

            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('project_students');
    }
};
