<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function projectAsTeacher()
    {
        return $this->hasMany(Project::class, 'teacher_id');
    }

    public function project()
    {
        return $this->belongsToMany(Project::class, 'project_students', 'student_id');
    }
}
