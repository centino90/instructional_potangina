<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\AllFilesController;
use App\Http\Controllers\AssignmentsController;
use App\Http\Controllers\AudioFilesController;
use App\Http\Controllers\DocumentFilesController;
use App\Http\Controllers\ExamsController;
use App\Http\Controllers\ImageFilesController;
use App\Http\Controllers\QuizzesController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VideoFilesController;
use App\Http\Controllers\ZipFilesController;
use Illuminate\Support\Facades\Route;

/* Models */
use App\Models\Subject;
use App\Models\InstructionalResource;
use App\Models\ResourceType;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'globalVars'])->group(function () {
    Route::get('/dashboard', function () {

        $IRs = InstructionalResource::orderByDesc('created_at')
            ->select(
                DB::raw('instructional_resources.*'),
            )
            ->leftJoin('subjects', 'instructional_resources.subject_id', '=', 'subjects.id')
            ->where('subjects.dept_id', auth()->user()->usersInformation->dept_id)
            ->take(4)
            ->get();;


        $haveSubmitted = DB::table('subjects')
            ->select(
                DB::raw('DISTINCT subjects.id, subjects.title'),
            )
            ->leftJoin('instructional_resources', 'instructional_resources.subject_id', '=', 'subjects.id')
            ->where('subjects.dept_id', '=', auth()->user()->usersInformation->dept_id)
            ->where('instructional_resources.resource_type_id', '1')
            ->groupBy('instructional_resources.subject_id', 'subjects.id', 'subjects.title')
            ->get();
        $haveNotSubmitted = DB::table('subjects')
            ->select(
                DB::raw('DISTINCT subjects.id, subjects.title'),
            )
            ->leftJoin('instructional_resources', 'instructional_resources.subject_id', '=', 'subjects.id')
            ->where('subjects.dept_id', '=', auth()->user()->usersInformation->dept_id)
            ->where('instructional_resources.resource_type_id', '!=', '1')
            ->where('subjects.id', '<>', DB::raw('ALL (SELECT DISTINCT subjects.id FROM subjects LEFT JOIN instructional_resources ON subjects.id = instructional_resources.subject_id WHERE instructional_resources.resource_type_id = 1 GROUP BY instructional_resources.subject_id)'))
            ->orWhereNull('instructional_resources.resource_type_id')
            ->groupBy('subjects.id', 'subjects.title')
            ->get();

        return view('dashboard')
            ->with('instructionals', $IRs)
            ->with('subjects', Subject::where('dept_id', auth()->user()->usersInformation->dept_id)->get())
            ->with('syllabiStatus', $haveSubmitted)
            ->with('haveNotSubmitted', $haveNotSubmitted)
            ->with('title', 'home');
    })->name('dashboard');

    /* Subjects */
    Route::resource('subjects', SubjectsController::class);

    /* All Files */
    Route::resource('allFiles', AllFilesController::class);
    Route::post('allFiles/loadMoreFiles/{amount?}', [AllFilesController::class, 'loadMoreFiles'])->name('allFiles.loadMoreFiles');
    Route::get('allFiles/downloadResource/{file?}', [AllFilesController::class, 'downloadResource'])->name('allFiles.downloadResource');
    Route::get('allFiles/delete/{id}', [AllFilesController::class, 'delete'])->name('allFiles.delete');

    /* Users */
    Route::resource('users', UsersController::class);

    /* Reports */
    Route::resource('reports', ReportsController::class);

    /*Instructionals */
    Route::resource('syllabus', SyllabusController::class);
    Route::resource('exams', ExamsController::class);
    Route::resource('activities', ActivitiesController::class);
    Route::resource('quizzes', QuizzesController::class);
    Route::resource('assignments', AssignmentsController::class);

    /*File Library */
    Route::resource('documents', DocumentFilesController::class);
    Route::resource('zips', ZipFilesController::class);
    Route::resource('images', ImageFilesController::class);
    Route::resource('audios', AudioFilesController::class);
    Route::resource('videos', VideoFilesController::class);
});


require __DIR__ . '/auth.php';
