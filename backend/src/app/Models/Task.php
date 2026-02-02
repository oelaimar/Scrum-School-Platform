<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $casts = [
        'dependencies' => 'array',
    ];

    public function sprint()
    {
        return $this->belongsTo(Sprint::class);
    }

}
