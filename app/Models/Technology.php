<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{

    protected $hidden = [
        'created_at',
        'updated_at',
        'pivot',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}
