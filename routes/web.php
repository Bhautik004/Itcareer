<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\FranchiseController;
use App\Http\Controllers\Admin\studentEnquiryController;
use App\Models\CertificateRecord;
use App\Models\State;
use App\Models\Course;
use App\Models\Branch;
use Illuminate\Support\Facades\Request as Input;
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
    return view('frontend.index');
});


Route::get('/course', function () {
     $course = Course::where('status','=',1)->get();
     return view('frontend.courses.index')->withDetails($course);
})->name('course.index');


Route::get('/FRANCHISE', function () {
    $data['states'] = State::get(["name","id"]);
    return view('frontend.franchise.index',$data);
})->name('franchise.index');


Route::get('/form', function () {
    $data['states'] = State::get(["name","id"]);
    $data['courses'] = Course::get(["name","id"]);
    $data['branches'] = Branch::get(["name","id"]);

    return view('frontend.form.index',$data);
})->name('form.index');


Route::get('/adminssion', function () {
    $data['states'] = State::get(["name","id"]);
    $data['courses'] = Course::get(["name","id"]);
    $data['branches'] = Branch::get(["name","id"]);

    return view('frontend.adminssion.index',$data);
})->name('admission.index');



Route::get('/exam', function () {
    return view('frontend.exam.index');
})->name('exam.index');


Route::get('/about', function () {
    return view('frontend.about.index');
})->name('about.index');

Route::get('/contact', function () {
    return view('frontend.contact.index');
})->name('contact.index');

Route::post('get-cities-by-state','Admin\DashboardController@getCity');


Route::get('/student-verify', function () {
    return view('frontend.studentverify.index');
})->name('studentverify.index');

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $bday = Input::get ( 'bday' );
    
    $newDate = date("Y-d-m", strtotime($bday));  

    $user = CertificateRecord::where('certificate_no','=',$q)->Where('birth_date','=',$newDate)->get();
    
    if(count($user) > 0)
        return view('frontend.studentverify.index')->withDetails($user)->withQuery ( $q );
    else return view ('frontend.studentverify.index')->withMessage('No Details found. Try to search again !');
});


Route::post('/course-filter', [CourseController::class, 'courseSearch'])->name('student.search');

Route::post('/franchise-form', [FranchiseController::class, 'store'])->name('franchise.store');
Route::post('/student-form', [studentEnquiryController::class, 'store'])->name('studentEnquiry.store');

Route::get('/student/pdf/{id}', [UserController::class, 'createPDF'])->name('student.pdf');

Route::get('route-refresh',[RoleController::class, 'getAllAction']);

