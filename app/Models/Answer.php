<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'question_id',
        'answer',
        // 'ans_image',
        'is_correct'
    ];

    // protected $casts = [
    //     'ans_image' => array()
    // ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
