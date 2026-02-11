<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskSolution extends Model
{
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
    public function feedback()
    {
        return $this->hasOne(TaskFeedback::class, 'solution_id');
    }
}
