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
    return view('index');
});
Route::get('/admin', 'ViewController@admin')->name('admin');
Route::get('/add_qstn', 'ViewController@add_qstn')->name('add_qstn');
Route::post('/add_qstn','ViewController@add_qstn_post')->name('add_qstn');
Route::get('/remove_edit', 'ViewController@remove_edit')->name('remove_edit');
Route::get('/add_student', 'ViewController@add_student')->name('add_student');
Route::post('/add_student', 'ViewController@add_student_post')->name('add_student_post');
Route::get('/removeq/{id}', 'ViewController@removeq')->name('removeq');
Route::get('/edit_qstn/{id}', 'ViewController@edit_qstn')->name('edit_qstn');
Route::post('/edit_qstn', 'ViewController@edit_qstn_post')->name('edit_qstn_post');
Route::get('/add_instruction', 'ViewController@add_instruction')->name('add_instruction');
Route::post('/add_instruction', 'ViewController@add_instruction_post')->name('add_instruction_post');
Route::get('/remove_edit_instruction', 'ViewController@remove_edit_instruction')->name('remove_edit_instruction');
Route::get('/edit_qstn/{id}', 'ViewController@edit_qstn')->name('remove_edit_instruction');
Route::get('/remove_delete_instruction/{id}', 'ViewController@remove_delete_instruction')->name('remove_delete_instruction');
Route::get('/edit_instruction/{id}', 'ViewController@edit_instruction')->name('edit_instruction');
Route::post('/edit_instruction', 'ViewController@edit_instruction_post')->name('edit_instruction_post');
Route::get('/type/{id}', 'ViewController@type')->name('type');
Route::post('/student_login', 'ViewController@student_login')->name('student_login');
Route::get('/einstruction', 'ViewController@einstruction')->name('einstruction');
Route::get('/exam', 'ViewController@exam')->name('exam');
Route::post('/score', 'ViewController@score')->name('score');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
