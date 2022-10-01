<?php

use App\Http\Controllers\PostsController;
use Barryvdh\Debugbar\Facades\Debugbar as FacadesDebugbar;
use DebugBar\DebugBar;
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
    FacadesDebugbar::info('INFO!');
    return view('welcome');
});

Route::get('/blog', [PostsController::class, 'index']);

Route::resource('blog', PostsController::class);