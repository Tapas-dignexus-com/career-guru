<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'topic',
        'subject_id',
        'is_published',
        'level',
    ];

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'id', 'subject_id');
    }
}
