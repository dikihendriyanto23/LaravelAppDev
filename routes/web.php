<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Diki Hendriyanto"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::any('/categories', function () {
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::any('/categories/{category:slug}', function (Category $category) {
    return view('category',[
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});