<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'exam_id',
        'exam_code',
        'date',
        'topic_id',
        'subject',
        'level',
        'question_image',
        'number_per_question',
        'negative_marking',
        'question',
        'answer_logic',
        'ans_logic_image'
    ];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function exam()
    {
        return $this->hasMany(Exam::class, 'id', 'exam_id');
    }

    public function topic()
    {
        return $this->hasMany(Topic::class, 'id', 'topic_id');
    }
}
