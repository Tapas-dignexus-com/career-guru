<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QnaController extends Controller
{
    public function createQna()
    {
        $examDetails = Exam::all();
        $topic = Topic::all();
        //dd($examDetails);
        return view('question.add_question', compact('examDetails', 'topic'));
    }

    public function addQna(Request $request)
    {
        if ($request->file('question_image') == null) {
            $qpath = "";
        } else {
            $qpath = $request->file('question_image')->store('public/exam_image');
        }

        if ($request->file('ans_logic_image') == null) {
            $apath = "";
        } else {
            $apath = $request->file('ans_logic_image')->store('public/exam_image');
        }

        try {
            DB::beginTransaction();
            $questionId = Question::insertGetId([
                'exam_id' => $request->exam_id,
                'exam_code' => $request->exam_code,
                'date' => $request->date,
                'topic_id' => $request->topic_id,
                'subject' => $request->subject,
                'level' => $request->level,
                'question_image' => $qpath,
                'number_per_question' => $request->number_per_question,
                'negative_marking' => $request->negative_marking,
                'question' => $request->question,
                'answer_logic' => $request->answer_logic,
                'ans_logic_image' => $apath
            ]);
            // dd($questionId);
            //dd($request->file('ans_img'));
            foreach ($request->ans as $key => $answer) {
                // $is_correct = '';
                // if ($request->is_correct == true) {
                //     $is_correct = $request->is_correct;
                // } else {
                //     $is_correct = '';
                // }

                if (is_null($request->is_correct)) {
                    return back()->with('warning', 'No option added!');
                }

                $ans = new Answer;
                $ans->question_id = $questionId;
                $ans->answer = $answer;

                // if ($request->file('ans_img') == null) {
                //     $path = "";
                // } else {
                //     foreach ($request->file('ans_img') as $key => $imagefile) {
                //         // print_r($key);
                //         $path = $imagefile->store('public/exam_image');
                //         $ans->ans_image = $path;
                //     }
                // }


                if ($request->file('ans_img1') == null) {
                    $path1 = "";
                } else {
                    $path1 = $request->file('ans_img1')->store('public/exam_image');
                    $ans->ans_image = $path1;
                }
                if ($request->file('ans_img2') == null) {
                    $path2 = "";
                } else {
                    $path2 = $request->file('ans_img2')->store('public/exam_image');
                    $ans->ans_image = $path2;
                }
                if ($request->file('ans_img3') == null) {
                    $path3 = "";
                } else {
                    $path3 = $request->file('ans_img3')->store('public/exam_image');
                    $ans->ans_image = $path3;
                }
                if ($request->file('ans_img4') == null) {
                    $path4 = "";
                } else {
                    $path4 = $request->file('ans_img4')->store('public/exam_image');
                    $ans->ans_image = $path4;
                }

                $ans->is_correct = $request->is_correct;
                $ans->save();
            }
            DB::commit();
            return redirect()->back()->with('success', 'Question inserted successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function ListExam()
    {
        $questions = Question::with(['answers', 'exam', 'topic'])->get();
        //dd($questions);
        return view('question.question-list', compact('questions'));
    }

    public function editQna($id)
    {
        dd($id);
    }
}
