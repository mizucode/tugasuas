<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'title',
        'tag',
        'description',
        'start_date',
        'due_date',
        'completed',
        'image',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
