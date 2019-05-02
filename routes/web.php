<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
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

Route::get('/book/{id}' , 'BookController@show') ;
Route::resource('comments','CommentController') ; 

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);


Route::get('/user' , function() {
    $cats=CategoryController::getallCategories();
    $books=BookController::getallBooks();
    return view('user',['categories' => $cats,'books'=>$books]); 
}) ;

//Route::get('/user','CategoryController@getallCategories');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
