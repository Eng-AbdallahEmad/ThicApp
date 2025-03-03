<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Middleware\CheckLogin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExerciseController;


// Route -> Login
Route::get('/login', AuthController::class . '@loginView');

Route::redirect('/', 'ar/app');

// Route -> App (Students)
Route::middleware([CheckLogin::class])->prefix('{locale}/app/student')->group(function () {

    $locale = request()->route('locale');

    // ضبط اللغة في التطبيق
    App::setLocale('en');

    // Route -> Index
    Route::get('/', [StudentsController::class, 'indexView'])->name('student.index');
    Route::redirect('/index', '/');

    // Route -> Exams
    Route::get('/exams', [StudentsController::class, 'examsView'])->name('student.exams');
    Route::get('/exams/exam', [ExamController::class, 'examView'])->name('student.exam');

    // Route -> Books
    Route::get('/books', [StudentsController::class, 'booksView'])->name('student.books');

    // Route -> Exercises
    Route::get('/exercises', [StudentsController::class, 'exercisesView'])->name('student.exercises');
    Route::get('/exercises/{exercise}', [StudentsController::class, 'exerciseView'])->name('student.exercise');
    Route::get('/exercises/{exercise}/{ex_module?}', [ExerciseController::class, 'exerciseViewModule'])->name('student.exModule');
});
