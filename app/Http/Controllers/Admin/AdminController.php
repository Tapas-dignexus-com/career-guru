<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function createSubject()
    {
        $subjects = Subject::all();
        return view('subject.subject_management', compact('subjects'));
    }
    public function addSubject(Request $request)
    {
        try {
            Subject::insert([
                'subject' => $request->subject
            ]);
            return response()->json([
                'success' => true,
                'msg' => 'Subject inserted Successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'msg' => $e->getMessage()
            ]);
        }
    }

    public function editSubject(Request $request)
    {
        try {
            $subject = Subject::find($request->id);
            $subject->subject = $request->subject;
            $subject->save();

            return response()->json([
                'success' => true,
                'msg' => 'Subject updated Successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'msg' => $e->getMessage()
            ]);
        }
    }

    public function deleteSubject(Request $request)
    {
        try {
            Subject::where('id', $request->id)->delete();
            return response()->json([
                'success' => true,
                'msg' => 'Subject deleted Successfully!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'msg' => $e->getMessage()
            ]);
        }
    }

    public function listSubject()
    {
        return view('subject.view_subject_list');
    }
}
