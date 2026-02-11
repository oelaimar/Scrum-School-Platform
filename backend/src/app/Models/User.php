<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    protected $hidden = [
        'password',
    ];

    public function projectAsTeacher()
    {
        return $this->hasMany(Project::class, 'teacher_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_students', 'student_id', 'project_id')
            ->withPivot('role','points_earned','tasks_completed')
            ->withTimestamps();
    }
    public function tasks()
    {
        return $this->hasMany(Task::class, 'assigned_to');
    }
    function isTeacher() : bool
    {
        return $this->role === 'teacher';
    }
    function isStudent(): bool
    {
        return $this->role === 'student';
    }
}
