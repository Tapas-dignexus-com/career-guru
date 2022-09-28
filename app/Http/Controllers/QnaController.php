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
            foreach ($request->ans as $answer) {
                $is_correct = 0;
                if ($request->is_correct == true) {
                    $is_correct = 1;
                }

                $ans = new Answer;
                $ans->question_id = $questionId;
                $ans->answer = $answer;

                if ($request->file('ans_img') == null) {
                    $path = "";
                } else {
                    foreach ($request->file('ans_img') as $imagefile) {
                        $path = $imagefile->store('public/exam_image');
                        $ans->ans_image = $path;
                    }
                }

                $ans->is_correct = $is_correct;
                $ans->save();
            }
            return redirect()->back()->with('success', 'Question inserted successfully!');
        } catch (\Exception $e) {
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
