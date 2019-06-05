<?php
use App\Article;
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
    $articles = Article::all()->take(8);
    return view('index',compact('articles'));
});

Route::resource('articles','ArticleController');

Route::get('/about', function(){
    return view('pages.about');
});

Route::get('contact', function(){
return view('pages.contact');
});

Route::post('/contact','ContactController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//COMMENTS
Route::post('articles/{article}/comment','CommentController@store');