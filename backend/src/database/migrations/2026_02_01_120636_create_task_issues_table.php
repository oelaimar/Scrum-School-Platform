<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('task_issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->constrained()->cascadeOnDelete();
            $table->foreignId('student_id')->constrained('users')->cascadeOnDelete();
            $table->text('message');
            $table->enum('status', ['open', 'resolve'])->default('open');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('task_issues');
    }
};
