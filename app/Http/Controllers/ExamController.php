<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\File;
use App\Models\ExamCategory;
use App\Models\Exam;
use App\Models\Subject;
use App\Models\SubjectMark;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ExamController extends Controller
{
    public function createExamCategory()
    {
        return view('exam.exam-catagory');
    }

    public function addExamCategory(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'name' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'color' => 'required',
        ]);

        $path = $request->file('icon')->store('public/files');

        //ExamCategory::create($input);
        $exam_category = new ExamCategory;
        $exam_category->code = $request->code;
        $exam_category->name = $request->name;
        $exam_category->icon = $path;
        $exam_category->color = $request->color;
        $exam_category->save();

        return back()->with('success', 'Thanks you for adding!!');
    }


    public function createExam()
    {
        $exam_category = ExamCategory::all();
        $subject = Subject::all();

        $member = json_decode($subject);
        //die($member);

        return view('exam.add_new_course', compact('exam_category', 'member'));
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


        // $path = $request->file('upload_syllabus')->store('public/files');

        $exam = new Exam();
        $exam->exam_name = $request->exam_name;
        $exam->description = $request->description;
        $exam->features = $request->features;
        $exam->course_code = $request->course_code;
        $exam->catagory_id = $request->catagory_id;
        $exam->duration = $request->duration;
        // $exam->upload_syllabus = $path;

        if ($request->hasfile('upload_syllabus')) {
            $file = $request->file('upload_syllabus');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/upload_syllabus/', $filename);
            $exam->upload_syllabus = $filename;
        } else {
            $exam->upload_syllabus = '';
        }


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

        $examId = $exam->id;

        foreach ($request->all_subjects as $key => $all_sub) {
            $subject_with_marks = new SubjectMark();
            $subject_with_marks->exam_id = $examId;
            $subject_with_marks->all_subjects = $all_sub;
            $subject_with_marks->subject_type = $request->subject_type[$key];
            $subject_with_marks->marks = $request->marks[$key];

            $subject_with_marks->save();
        }


        return redirect()->route('addExam')
            ->with('success', 'Exam created successfully.');
    }

    public function examList(Request $request)
    {
        $exam_list = Exam::with('examCategory')->get();
        return view('exam.courselist', compact('exam_list'))->render();
    }

    public function editExam($id)
    {
        $exam_category = ExamCategory::all();
        $exam = Exam::with('examCategory')->find($id);

        return view('exam.edit_exam', compact('exam_category', 'exam'));
    }

    //Update
    public function updateExam(Request $request, $id)
    {
        $data = $request->except('_method', '_token', 'submit');

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

        $exam = Exam::find($id);

        if ($exam->update($data)) {

            Session::flash('message', 'Update successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect()->route('examList');
        } else {
            Session::flash('message', 'Data not updated!');
            Session::flash('alert-class', 'alert-danger');
        }

        //return Back()->withInput();
    }

    // Delete
    public function deleteExam(Request $request)
    {
        try {
            Exam::where('id', $request->id)->delete();
            return response()->json([
                'success' => true,
                'msg' => 'Exam deleted Successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'msg' => $e->getMessage()
            ]);
        }
    }
}
