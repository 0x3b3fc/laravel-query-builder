<?php
use App\Http\Controllers\PostsController;
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

Route::controller(PostsController::class)->group(function (){
    Route::get('posts/','index')->name('posts.index');
    Route::get('posts/create','create')->name('posts.create');
    Route::post('/posts/insert','insert')->name('posts.insert');
    Route::get('/posts/edit/{id}','edit')->name('posts.edit');
    Route::post('posts/update/{id}','update')->name('posts.update');
    Route::get('posts/delete/{id}','destroy')->name('posts.destroy');
    Route::get('posts/destroy/all','delete_all')->name('delete.all');
});


