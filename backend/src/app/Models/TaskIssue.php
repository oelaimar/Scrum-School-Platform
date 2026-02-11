<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskIssue extends Model
{
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
    public function student()
    {
        return $this->belongTo(User::class, 'student_id');
    }
    public function replies()
    {
        return $this->hasMany(TaskIssueReply::class, 'issue_id');
    }
}
