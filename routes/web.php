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


Route::resource('comments','CommentController') ; 

Route::get('/user' , function() {
    $cats=CategoryController::getallCategories();
    $books=BookController::getallBooks();
    return view('user',['categories' => $cats,'books'=>$books]); 
}) ;

//Route::get('/user','CategoryController@getallCategories');
Route::get('/admin/books', 'BookController@index')->name('books');
Route::post('addToFav', 'UserBookController@addToFav');
Route::post('leaseBook', 'UserBookController@leaseBook');
Route::resource('books', 'BookController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');