<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model
{
    use HasFactory, SoftDeletes;

    // // turn off both
    // public $timestamps = false;

    // // turn off only updated_at
    // const DELETED_AT = false;

    protected $fillable = [
        'question_id',
        'answer',
        'ans_image',
        'is_correct'
    ];

    // public function question()
    // {
    //     return $this->belongsTo(Question::class,'question_id');
    // }
}
