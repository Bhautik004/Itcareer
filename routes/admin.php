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

        Route::resource('roles', Admin\RoleController::class);
        Route::resource('/users', Admin\UserController::class);

        Route::post('users/update', 'Admin\UserController@update')->name('users.update-user');

        Route::post('admin/users/updatepassword/', 'Admin\UserController@updatepassword')->name('users.updatepassword');
    });

});