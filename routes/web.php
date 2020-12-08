<?php

use Illuminate\Support\Facades\Route;

Route::post('students/newRequest','App\Http\Controllers\AdminPageController@newRequest')->name('new.request');

Route::post('students/removeRequest','App\Http\Controllers\AdminPageController@removeRequest')->name('remove.request');


Route::get('students/requests','App\Http\Controllers\AdminPageController@studRequests')->name('stud-requests');


Route::get('/', 'App\Http\Controllers\AdminPageController@main')->name('main');

Route::get('/adminStudents', 'App\Http\Controllers\AdminPageController@adminStudents')->name('admin-students');

Route::get('/employers', 'App\Http\Controllers\AdminPageController@mainEmployer')->name('admin-employers');
Route::get('/students', 'App\Http\Controllers\AdminPageController@studHome')->name('students');

Route::post('/about/submit','App\Http\Controllers\AdminPageController@submit')->name('about-form');

Route::get('/logout','App\Http\Controllers\AdminPageController@logout')->name('logout');


Route::post('/about/addEmployer','App\Http\Controllers\AdminPageController@addEmployer')->name('employer-add');

Route::get('/update/{id}', 'App\Http\Controllers\AdminPageController@editStudent')->name('student-update');

Route::get('/updateEmployer/{id}', 'App\Http\Controllers\AdminPageController@editEmployer')->name('employer-update');

Route::post('//{id}/update', 'App\Http\Controllers\AdminPageController@saveStudent')->name('student-save');

Route::post('//{id}/updateEmployer', 'App\Http\Controllers\AdminPageController@saveEmployer')->name('employer-save');

Route::post('//{id}/delete', 'App\Http\Controllers\AdminPageController@deleteStudent')->name('student-delete');

Route::post('/employer/{id}/delete', 'App\Http\Controllers\AdminPageController@deleteEmployer')->name('employer-delete');

Route::post('//searchStudent','App\Http\Controllers\AdminPageController@searchStudent')->name('search-student');

Route::get('/Employer/{id}', 'App\Http\Controllers\AdminPageController@employer')->name('employer');

Route::get('/employers/postJob', 'App\Http\Controllers\AdminPageController@employerPostJob')->name('employer-postJob');

Route::get('/employers/applications', 'App\Http\Controllers\AdminPageController@employerApplications')->name('employer-applications');

Route::get('/employers/applicationDetails', 'App\Http\Controllers\AdminPageController@employerApplicationDetails')->name('student-details');

Route::get('/login', 'App\Http\Controllers\AdminPageController@login')->name('login');

Route::get('/login/auth', 'App\Http\Controllers\AdminPageController@auth')->name('auth');

Route::get('/employers/home', 'App\Http\Controllers\AdminPageController@empHome')->name('employer-home');

Route::post('/employers/addJob','App\Http\Controllers\AdminPageController@addJob')->name('add-job');

Route::get('/employers/editJob/{id}','App\Http\Controllers\AdminPageController@detailJob')->name('detail-job');

Route::post('/employers/editJob/{id}','App\Http\Controllers\AdminPageController@editJob')->name('edit-job');

Route::post('/employers/deleteWork/{id}','App\Http\Controllers\AdminPageController@deleteWork')->name('work-delete');

//Route::get('/student', 'App\Http\Controllers\AdminPageController@studHome')->name('stud-hom');



