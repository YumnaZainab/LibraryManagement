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
    return view('welcome');
});

Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/signUp', 'App\Http\Controllers\userController@signup');
Route::get('/SsearchBook', 'App\Http\Controllers\SsearchBookController@search');
Route::get('/adminDashboard', 'App\Http\Controllers\adminDashboardController@dashh');
Route::get('/bookCategory', 'App\Http\Controllers\bookCategoryController@bookk');
Route::get('/addBook', 'App\Http\Controllers\addBookController@index');

Route::get('/deleteBook', 'App\Http\Controllers\deleteBookController@index');
Route::get('/issueBook', 'App\Http\Controllers\issueBookController@issue');
Route::get('/returnBook', 'App\Http\Controllers\returnBookController@returnn');
Route::get('/viewIssued', 'App\Http\Controllers\viewIssuedController@view');
Route::get('/booksAvailable', 'App\Http\Controllers\booksAvailableController@availableBooks');
Route::get('/findBook', 'App\Http\Controllers\findBookController@bookFinding');
Route::get('/findIssueBook', 'App\Http\Controllers\findIssueBookController@issueFinding');

Route::get('/askUpdate', 'App\Http\Controllers\askUpdateController@index');

Route::post('/addAdmin', 'App\Http\Controllers\userController@storeAdmin');
Route::post('/adminLogin', 'App\Http\Controllers\userController@matchAdmin');
Route::post('/addCategory', 'App\Http\Controllers\bookCategoryController@category_add');
Route::post('/bookAdd', 'App\Http\Controllers\addBookController@book_add');
Route::post('/bookIssue', 'App\Http\Controllers\issueBookController@book_issue');
Route::post('/bookReturn', 'App\Http\Controllers\returnBookController@book_return');
Route::post('/delBook', 'App\Http\Controllers\deleteBookController@book_delete');

Route::get('/updBook', 'App\Http\Controllers\askUpdateController@bookCheck');
Route::post('/upBook/{book_title}', 'App\Http\Controllers\updateBookController@book_update');

Route::get('/find', 'App\Http\Controllers\bookFoundController@index');
Route::get('/issued', 'App\Http\Controllers\issueBookFoundController@index');

Route::get('/issueBookFound', 'App\Http\Controllers\issueBookController@index');