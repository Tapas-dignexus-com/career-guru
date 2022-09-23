<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('dashboard.dashboard');
});

//Exam
Route::get('/add-exam', function () {
    return view('exam.Add_New_course');
});
Route::get('/exam-list', function () {
    return view('exam.courselist');
});
Route::get('/exam-category', function () {
    return view('exam.exam-catagory');
});

//Student
// Route::get('/subject-management', function () {
//     return view('subject.subject_management');
// });
// Route::get('/view-subject-list', function () {
//     return view('subject.view_subject_list');
// });


//Topic
Route::get('/add-topic', function () {
    return view('topic.add-topic');
});
Route::get('/view-list-topic', function () {
    return view('topic.view-topic');
});

//Question Managment
Route::get('/add-question', function () {
    return view('question.add_question');
});
Route::get('/question-list', function () {
    return view('question.question-list');
});

//Student Managment
Route::get('/add-student', function () {
    return view('student.add_student');
});
Route::get('/student-list', function () {
    return view('student.student_list');
});



//Subject Section
Route::get('/add-subject', [AdminController::class, 'createSubject']);
Route::post('/add-subject', [AdminController::class, 'addSubject'])->name('addSubject');
Route::put('/edit-subject', [AdminController::class, 'editSubject'])->name('editSubject');
Route::delete('/delete-subject', [AdminController::class, 'deleteSubject'])->name('deleteSubject');

//Topic Section




Route::get('/view-subject-list', [AdminController::class, 'listSubject']);
