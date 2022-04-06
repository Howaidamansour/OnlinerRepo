<?php

use Illuminate\Support\Facades\Route;

// User Routes

Route::get('/login_page', 'App\Http\Controllers\UserController@showLoginForm')->name('showLoginForm');

Route::post('/login', 'App\Http\Controllers\UserController@login')->name('login');

Route::get('/registeration', 'App\Http\Controllers\UserController@showRegisterForm')->name('showRegisterForm');

Route::post('/register', 'App\Http\Controllers\UserController@register')->name('register');


// Departments Routes

Route::get('/departments', 'App\Http\Controllers\DepartmentController@index')->name('departments.index');



// Levels Routes

Route::get('departments/{department}/levels', 'App\Http\Controllers\LevelController@index')->name('levels.index');


// Subjects Routes

Route::get('levels/{level}/subjects', 'App\Http\Controllers\SubjectController@index')->name('subjects.index');
Route::get('/subjects/{subject}', 'App\Http\Controllers\SubjectController@show')->name('subjects.show');



// Questions Routes
Route::get('{user}/{subject}/questions', 'App\Http\Controllers\QuestionController@index')->name('questions.index');


// Exams Routes
Route::get('/exams', 'App\Http\Controllers\ExamController@index')->name('exams.index');
Route::get('/exams/{exam}', 'App\Http\Controllers\ExamController@show')->name('exams.show');
Route::post('/exams', 'App\Http\Controllers\ExamController@store')->name('exams.store');

// Test route

Route::get('/hi', function(){
    return 'test working';
});

Route::get('/error', function(){
    return view('error');
});

