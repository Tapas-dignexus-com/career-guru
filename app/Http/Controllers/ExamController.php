<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\File;
use App\Models\ExamCategory;
use App\Models\Exam;

class ExamController extends Controller
{
    public function createExam()
    {
        $exam_category = ExamCategory::all();
        return view('exam.add_new_course', compact('exam_category'));
    }

    public function addExam(Request $request)
    {

        $request->validate(
            [
                'exam_name' => 'required',
                'description' => 'required',
                'features' => 'required',
                'course_code' => 'required',
                'catagory_id' => 'required',
                'duration' => 'required',
                'upload_syllabus' => 'required|mimes:pdf|max:5120',
                'marks_per_question' => 'required',
                'negative_marking_per_question' => 'required',
                'number_of_questions' => 'required',
                'course_fee' => 'required',
                'number_of_subjects' => 'required',
                'discount_fee' => 'required',
                'registation_fee' => 'required',
                'exam_fee' => 'required',
                'commission' => 'required',
                'ratings' => 'required',
                'reviews' => 'required',
                'video_link' => 'required',
                'curriculam' => 'required',
            ],
            [
                'catagory_id.required' => 'Exam Category is Required' // custom message
            ]
        );


        $path = $request->file('upload_syllabus')->store('public/files');

        $exam = new Exam;
        $exam->exam_name = $request->exam_name;
        $exam->description = $request->description;
        $exam->features = $request->features;
        $exam->course_code = $request->course_code;
        $exam->catagory_id = $request->catagory_id;
        $exam->duration = $request->duration;
        $exam->upload_syllabus = $path;
        $exam->marks_per_question = $request->marks_per_question;
        $exam->negative_marking_per_question = $request->negative_marking_per_question;
        $exam->number_of_questions = $request->number_of_questions;
        $exam->course_fee = $request->course_fee;
        $exam->number_of_subjects = $request->number_of_subjects;
        $exam->discount_fee = $request->discount_fee;
        $exam->exam_fee = $request->exam_fee;
        $exam->registation_fee = $request->registation_fee;
        $exam->commission = $request->commission;
        $exam->ratings = $request->ratings;
        $exam->reviews = $request->reviews;
        $exam->video_link = $request->video_link;
        $exam->curriculam = $request->curriculam;
        $exam->publish =  $request->publish;
        $exam->status =  $request->status;

        $exam->save();

        return redirect()->route('addExam')
            ->with('success', 'Exam created successfully.');
    }

    public function examList()
    {
        $exam_list = Exam::with('examCategory')->get();
        return view('exam.courselist', compact('exam_list'));
    }
}
