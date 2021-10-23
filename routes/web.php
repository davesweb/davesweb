<?php

use Illuminate\Routing\Router;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\Blog\HomepageController;

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

/* @var Router $router */

$router->get('/', [HomepageController::class, 'index'])->name('homepage');

$router->get('categories', [CategoryController::class, 'index'])->name('categories');
$router->get('category/{category_translation:slug}', [CategoryController::class, 'show'])->name('categories.show');

$router->get('archive/{year}/{month}', [PostController::class, 'archive'])->name('archives.show');

$router->get('search', [PostController::class, 'search'])->name('posts.search');

$router->get('{post_translation:slug}', [PostController::class, 'show'])->name('posts.show');
