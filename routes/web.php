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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('main');




// Route::get('user_detail/create', 'UserDetailController@create')->middleware('auth');
// Route::post('user_detail', 'UserDetailController@store')->middleware('auth');
Route::resource('user_detail','UserDetailController')->middleware('auth');
Route::resource('education','EducationController')->middleware('auth');
Route::resource('experience','ExperienceController')->middleware('auth');
Route::resource('skill','SkillController')->middleware('auth');

Route::get('resume', 'ResumeController@index')->name('resume.index')->middleware('auth');
Route::get('view', 'ResumeController@view')->name('resume.view')->middleware('auth');
Route::get('resume/download', 'ResumeController@download')->name('resume.download')->middleware('auth');

Route::get('dashboard', 'HomeController@dashboard')->name('home.dashboard')->middleware('auth');