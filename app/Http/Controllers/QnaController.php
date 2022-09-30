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
        try {
            DB::beginTransaction();

            $qst = new Question();
            $qst->exam_id = $request->exam_id;
            $qst->exam_code = $request->exam_code;
            $qst->date = $request->date;
            $qst->topic_id = $request->topic_id;
            $qst->subject = $request->subject;
            $qst->level = $request->level;

            // $qst->question_image = $request->question_image;
            if ($request->hasfile('question_image')) {
                $file = $request->file('question_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/question_image/', $filename);
                $qst->question_image = $filename;
            } else {
                $qst->question_image = '';
            }

            $qst->number_per_question = $request->number_per_question;
            $qst->negative_marking = $request->negative_marking;

            $qst->question = $request->question;
            $qst->answer_logic = $request->answer_logic;

            // $qst->ans_logic_image = $request->ans_logic_image;
            if ($request->hasfile('ans_logic_image')) {
                $file = $request->file('ans_logic_image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/ans_logic_image/', $filename);
                $qst->ans_logic_image = $filename;
            } else {
                $qst->ans_logic_image = '';
            }

            $qst->save();

            $questionId = $qst->id;

            foreach ($request->ans as $key => $answer) {

                if (is_null($request->is_correct)) {
                    return back()->with('warning', 'No option added!');
                }

                $ans = new Answer;
                $ans->question_id = $questionId;
                $ans->answer = $answer;
                // dd($ans->ans_image);

                // $ans->ans_image = $request->file('ans_img')[$key];
                if ($request->hasfile('ans_img')) {
                    foreach ($request->file('ans_img') as $image) {
                        // dd($image);
                        //$file1 = $request->file('ans_img');
                        $extension = $image->getClientOriginalExtension();
                        $filename = time() . '.' . $extension;
                        $image->move('uploads/ans_img/', $filename);
                        $ans->ans_image = $filename[$key];
                        $ans->save();
                    }
                } else {
                    $ans->ans_image = '';
                }

                // if ($request->hasfile('ans_img2')) {
                //     $file = $request->file('ans_img2');
                //     $extension = $file->getClientOriginalExtension();
                //     $filename2 = time() . '.' . $extension;
                //     $file->move('uploads/ans_img2/', $filename2);
                //     $ans->ans_image = $filename2;
                // } else {
                //     $ans->ans_image = '';
                // }

                // if ($request->hasfile('ans_img3')) {
                //     $file = $request->file('ans_img3');
                //     $extension = $file->getClientOriginalExtension();
                //     $filename3 = time() . '.' . $extension;
                //     $file->move('uploads/ans_img3/', $filename3);
                //     $ans->ans_image = $filename3;
                // } else {
                //     $ans->ans_image = '';
                // }

                // if ($request->hasfile('ans_img4')) {
                //     $file = $request->file('ans_img4');
                //     $extension = $file->getClientOriginalExtension();
                //     $filename4 = time() . '.' . $extension;
                //     $file->move('uploads/ans_img4/', $filename4);
                //     $ans->ans_image = $filename4;
                // } else {
                //     $ans->ans_image = '';
                // }

                // for ($i = 0; $i < sizeof($request->is_correct); $i++) {
                //     // print_r($request->is_correct[$i]);
                //     $ans->is_correct = $request->is_correct[$i];
                // }
                // die;
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
        $questions = Question::find($id);

        $exam = Exam::where('id', $questions->exam_id)->get();

        $topic = Topic::where('id', $questions->topic_id)->with('subjects')->get();

        $answer = Answer::where('question_id', $questions->id)->get();

        return view('question.edit-question', compact('questions', 'exam', 'topic', 'answer'));
    }

    public function updateQna(Request $request, $id)
    {
    }
}
