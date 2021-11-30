<?php

namespace App\Models;

use App\Observers\TaskObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function scopeIndexList($query)
    {
        return $query->orderBy('created_at', 'desc')->get(['id', 'name', 'created_at']);
    }
}
