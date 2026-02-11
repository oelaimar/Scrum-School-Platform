<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $casts = ['dependencies' => 'array'];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function sprint()
    {
        return $this->belongsTo(Sprint::class);
    }
    public function assignee()
    {
        return $this->blongsTo(User::class, 'assigned_to');
    }
    public function issues()
    {
        return $this->hasMany(TaskIssue::class);
    }
    public function solution()
    {
        return $this->hasOne(TaskSolution::class);
    }

}
