<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Barryvdh\Debugbar\Facades\Debugbar as FacadesDebugbar;
use DebugBar\DebugBar;
use Illuminate\Support\Facades\Route;
use Ramsey\Uuid\Builder\FallbackBuilder;

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


//GET

// Route::get('/blog/{id}', [PostsController::class, 'show'])->whereNumber('id');
// Route::get('/blog/{id}', [PostsController::class, 'show'])->where('id', '[0-9]+');
// Route::get('/blog/{name}', [PostsController::class, 'show'])->whereAlpha('name');

// Route::get('/blog/{name}', [PostsController::class, 'show'])->where('name', '[A-Za-z]+');

// Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])
// ->where(
//     [
//         'id'=> '[0-9]+',
//         'name'=> '[A-Za-z]+' 
//     ]
// );

// Route::get('/blog/{id}/{name}', [PostsController::class, 'show'])
// ->whereNumber('id')
// ->whereAlpha('name');

//POST


//PUT OR PATCH


//DELETE


// Route::resource('blog', PostsController::class);

Route::prefix('/blog')->group(function(){
    Route::get('/', [PostsController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show');
    Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
    Route::post('/', [PostsController::class, 'store'])->name('blog.store');
    Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostsController::class, 'update'])->name('update');
    Route::delete('/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
});


// Route for invoke method
Route::get('/',HomeController::class);

//Multiple HTTP verbs
// Route::match(['GET','POST'], '/blog', [PostsController::class, 'index']);
// Route::any('/blog', [PostsController::class, 'index']);

//Return View
// Route::view('/blog', 'blog.index', ['name' => 'Code With Gihan']);


//FallBack Route
Route::fallback(FallbackController::class);