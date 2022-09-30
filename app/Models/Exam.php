<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $fillable = [
        'exam_name',
        'description',
        'features',
        'course_code',
        'catagory_id',
        'duration',
        'upload_syllabus',
        'marks_per_question',
        'negative_marking_per_question',
        'number_of_questions',
        'course_fee',
        'number_of_subjects',
        'discount_fee',
        'registation_fee',
        'exam_fee',
        'commission',
        'ratings',
        'reviews',
        'video_link',
        'curriculam',
        'publish',
        'status',
    ];

    // protected $fillable_relations = ['subject_marks'];
    // protected $with = ['subject_marks'];

    public function examCategory()
    {
        return $this->hasMany(ExamCategory::class, 'id', 'catagory_id');
    }

    function SubjectMark()
    {
        return $this->hasMany(SubjectMark::class, 'exam_id');
    }
}
