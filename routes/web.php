<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Models\CertificateRecord;
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
    return view('frontend.courses.index');
})->name('course.index');


Route::get('/FRANCHISE', function () {
    return view('frontend.franchise.index');
})->name('franchise.index');


Route::get('/form', function () {
    return view('frontend.form.index');
})->name('form.index');


Route::get('/exam', function () {
    return view('frontend.exam.index');
})->name('exam.index');


Route::get('/about', function () {
    return view('frontend.about.index');
})->name('about.index');

Route::get('/contact', function () {
    return view('frontend.contact.index');
})->name('contact.index');



Route::get('/student-verify', function () {
    return view('frontend.studentverify.index');
})->name('studentverify.index');

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $bday = Input::get ( 'bday' );
    $user = CertificateRecord::where('register_no','=',$q)->Where('birth_date','=',$bday)->get();
    if(count($user) > 0)
        return view('frontend.studentverify.index')->withDetails($user)->withQuery ( $q );
    else return view ('frontend.studentverify.index')->withMessage('No Details found. Try to search again !');
});

Route::get('/student/pdf/{id}', [UserController::class, 'createPDF'])->name('student.pdf');

Route::get('route-refresh',[RoleController::class, 'getAllAction']);
