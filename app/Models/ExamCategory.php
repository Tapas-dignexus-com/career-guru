<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExamCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'exam_categories';

    protected $fillable = [
        'code',
        'name',
        'icon',
        'color'
    ];
}
