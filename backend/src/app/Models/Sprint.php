<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    public function project()
    {
        return $this->belongTo(Project::class);
    }
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function dailyStandups()
    {
        return $this->hasMany(DailyStandup::class);
    }
}
