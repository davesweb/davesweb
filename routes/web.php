<?php

use Illuminate\Routing\Router;
use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\Blog\CategoryController;
use App\Http\Controllers\Resume\ContactController;
use App\Http\Controllers\Blog\HomepageController as BlogHomepageController;
use App\Http\Controllers\Resume\HomepageController as ResumeHomepageController;

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

$router->get('/', [BlogHomepageController::class, 'index'])->name('homepage');

$router->get('categories', [CategoryController::class, 'index'])->name('categories');
$router->get('category/{category_translation:slug}', [CategoryController::class, 'show'])->name('categories.show');

$router->get('archive/{year}/{month}', [PostController::class, 'archive'])->name('archives.show');

$router->get('search', [PostController::class, 'search'])->name('posts.search');

$router->get('tag/{tag_translation:slug}', [PostController::class, 'tag'])->name('posts.tag');

$router->get('resume', [ResumeHomepageController::class, 'index'])->name('resume');

$router->post('contact', [ContactController::class, 'store'])->name('contact');

$router->get('{post_translation:slug}', [PostController::class, 'show'])->name('posts.show');
