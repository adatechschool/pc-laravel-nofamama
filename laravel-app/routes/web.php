<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Http\Request;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('posts', PostController::class);

Route::resource('users', UserController::class);

Route::post('posts/create', function(){
    $attributes = request()->validate([
        'img_url'=>'required',
        'description'=>'required',
        'user_id' =>'required',
    ]);
    $posts = Post::create($attributes);
    return redirect()->route('posts.index');
});

require __DIR__.'/auth.php';
