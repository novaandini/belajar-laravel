<?php

use App\Models\Menu;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('menu', function () {
    return view('pages/menu/index', ['title' => 'Menu', 'menus' => Menu::all()]);
});

Route::get('post/{slug}', function($slug) {
    return view('pages/post/detail', ['title' => Post::find($slug)['title'], 'post' => Post::find($slug)]);
});

Route::get('post', function() {
    return view('pages/post/index', ['title' => 'Posts', 'posts' => Post::all()]);
});
