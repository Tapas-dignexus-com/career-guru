<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectMark extends Model
{
    use HasFactory;

    public $table = 'subject_marks';

    protected $fillable = ['exam_id', 'all_subjects', 'subject_type', 'marks'];

    // protected $fillable_relations = ['exam'];

    // protected $casts = [
    //     'subject_type' => 'array',
    //     'marks' => 'array',
    // ];


    function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id');
    }
}
