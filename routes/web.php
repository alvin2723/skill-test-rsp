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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'LoginController@index')->name('login');

Route::post('/login/submit', 'LoginController@submitLogin');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/courses', 'CourseController@index')->name('courses');

Route::get('/list-courses', 'ListCourseController@index')->name('list-courses');
Route::get('/detail-course', 'DetailCourseController@index')->name('detail-course');

Route::get('/blog', 'BlogController@index');
