<?php

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
})->name('welcome');

Auth::routes();

Route::get('/create-resume', 'ResumeController@createResume')->name('createResume');
Route::post('/create-resume', 'ResumeController@createResumePost')->name('createResumePost');

Route::post('/deploy', 'DeployController@deploy');
