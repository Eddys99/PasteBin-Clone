<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Models\Posts;

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

Route::get('/', function() {
    return view('welcome');
});

Route::get('userPosts',[PostsController::class, 'show']);

Route::get('openPost/{id}',[PostsController::class, 'showById']);

Route::post('/', function() {
    $posts = new Posts();
    $posts -> title_text = request('titleText');
    $posts -> this_text = request('thisInput');
    $posts -> save();
    return redirect('/');
});