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
});

Route::get('/cron-job','tester@cronTime')->name('CronJob');

Route::get('/simple-mail','mailingController@simpleMail')->name('simpleMail');
Route::get('/simple-mail-markdown','mailingController@simpleMailMarkdown')->name('simpleMailMarkdown');