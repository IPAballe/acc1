<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controller\HomeController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/Menu1', function () {
        return Inertia::render('Menu1');
    })->name('Menu1');
    Route::get('/Menu2', function () {
        return Inertia::render('Menu2');
    })->name('Menu2');
    
    Route::get('/article', function () {
        return Inertia::render('Article');
    })->name('article');

    Route::get('/index', [HomeController::class, 'index'])->name('home');
    
    Route::get('/index', function () {
        return Inertia::render('Home/index');
    })->name('index');

});
