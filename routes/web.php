<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
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


Route::resource('comments','CommentController') ; 

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::get('user', 'UserController@show')->middleware('auth')->name('user.show');
Route::post('user', 'UserController@updateImage')->middleware('auth')->name('user.updateImage');

Route::get('/user' , function() {
    $cats=CategoryController::getallCategories();
    $books=BookController::getallBooks();
    return view('user',['categories' => $cats,'books'=>$books]); 
}) ;

//Route::get('/user','CategoryController@getallCategories');
Route::post('addToFav', 'UserBookController@addToFav');
Route::post('leaseBook', 'UserBookController@leaseBook');
Route::resource('books', 'BookController');
Route::resource('users', 'UserController');
Route::resource('categories', 'CategoryController');
Route::post('rateBook', 'UserBookController@rateBook');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');