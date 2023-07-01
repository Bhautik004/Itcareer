<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::get('cc', function () {

    \Artisan::call('view:clear');
    \Artisan::call('view:cache');
    \Artisan::call('optimize');
    dd("Cache is cleared");

});

// Route::get('/','Admin\Auth\LoginController@getlogin')->name('home');
// Route::post('/','Admin\Auth\LoginController@login')->name('admin.auth.login');
// Route::post('/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout');

// Route::get('forget-password','Admin\Auth\ForgotPasswordController@showForgetPasswordForm')->name('forget.password.get');
// Route::post('forget-password', 'Admin\Auth\ForgotPasswordController@submitForgetPasswordForm')->name('forget.password.post');
// Route::get('reset-password/{token}', 'Admin\Auth\ForgotPasswordController@showResetPasswordForm')->name('reset.password.get');
// Route::post('reset-password', 'Admin\Auth\ForgotPasswordController@submitResetPasswordForm')->name('reset.password.post');

// Admin Routes

Route::prefix("admin")->group(function(){
    Route::get('/','Admin\Auth\loginController@index')->name('home');
    Route::get('/admin-login','Admin\Auth\loginController@getlogin')->name('admin-login');
    Route::post('/admin-login','Admin\Auth\loginController@login')->name('admin.auth.login');
    Route::get('forget-password','Admin\Auth\ForgotPasswordController@showForgetPasswordForm')->name('forget.password.get');
    Route::post('/logout', 'Admin\Auth\loginController@logout')->name('admin.logout');

    Route::middleware(['auth','role_access'])->group(function()
    {
        Route::get("/home",'Admin\DashboardController@adminHome')->name("admin.home");
        Route::get('/users/viewProfile/{id}', 'Admin\UserController@viewProfile')->name('users.viewProfile');
        Route::post('get-cities-by-state','Admin\DashboardController@getCity');

        Route::resource('roles', Admin\RoleController::class);
        Route::resource('/users', Admin\UserController::class);
        Route::resource('/branchs', Admin\BranchController::class);
        Route::resource('/managers', Admin\ManagerController::class);

        Route::post('users/update', 'Admin\UserController@update')->name('users.update-user');
        Route::post('admin/users/updatepassword/', 'Admin\UserController@updatepassword')->name('users.updatepassword');

        Route::resource('/students', Admin\StudentController::class);
        Route::post('/students/deactive', 'Admin\StudentController@UserApprove')->name('students.deactive');
        Route::post('students/destroy', 'Admin\StudentController@destroy')->name('student.destroy');
       
        Route::post('branch/destroy', 'Admin\BranchController@destroy')->name('branch.destroy');
        Route::post('branch/deactive', 'Admin\BranchController@branchApprove')->name('branchs.deactive');


        Route::post('managers/deactive', 'Admin\ManagerController@UserApprove')->name('managers.deactive');
        Route::post('managers/destroy', 'Admin\ManagerController@destroy')->name('manager.destroy');

        Route::post('import', 'Admin\StudentController@importData')->name('admin.import');

    });
});
    