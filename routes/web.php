<?php

use Illuminate\Routing\Router;
use App\Http\Controllers\Blog\PostController;
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

$router->get('categories', function () {})->name('categories');
$router->get('category/{category_translation:slug}', function () {})->name('categories.show');

$router->get('archive/{year}/{month}', function () {})->name('archives.index');

$router->get('{post_translation:slug}', [PostController::class, 'show'])->name('posts.show');
