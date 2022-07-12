<?php

use Illuminate\Support\Facades\Route;

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
    return view('front.main');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/course_plans', 'HomeController@course_plans');
Route::get('/teachers', 'HomeController@teachers');
Route::get('/course_program', 'HomeController@course_program');
Auth::routes();

Route::group(['middleware' => ['auth']], function () {
//    teachers
    Route::group(['prefix' => 'teacher'], function () {
        Route::get('/my-account', 'TeachersController@getTeacherDashboardData');
        Route::get('/student/{id}', 'TeachersController@getStudentInformation')->name('student');
        Route::get('/balance', 'TeachersController@getInformationAboutBalance');
        Route::get('/account-settings', 'TeachersController@editTeacherAccount');
        Route::post('/edit-account-data', 'TeachersController@updateTeacherProfileData');
    });

//    students
    Route::group(['prefix' => 'student'], function () {
//        Route::get('/my-account', 'TeachersController@getTeacherDashboardData');
//        Route::get('/student', 'TeachersController@getStudentInformation');
        Route::get('/balance', 'StudentsController@getInformationAboutBalance');
        Route::get('/account-settings', 'StudentsController@editStudentAccount');
        Route::get('/edit-account-data', 'StudentsController@updateStudentProfileData');
    });
});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



