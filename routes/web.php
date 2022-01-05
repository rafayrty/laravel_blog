<?php
require __DIR__.'/auth.php'; // Auth Routes
require __DIR__.'/users.php'; // Users CRUD Routes


use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
//Controllers
use App\Http\Controllers\Frontend\ArticlesController;
use App\Http\Controllers\Frontend\HomeController;

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

// Route::get('/admin', function () {
    // return Inertia::render('Auth/Login', [
    //     // 'canLogin' => Route::has('login'),
    //     // 'canRegister' => Route::has('register'),
    //     // 'laravelVersion' => Application::VERSION,
    //     // 'phpVersion' => PHP_VERSION,
    //     // 'canResetPassword' => Route::has('password.request'),
    //     // 'status' => session('status'),
    // ]);
// });
Route::get('/admin/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Admin Panel



// Route::prefix('admin/dashboard')->group(function () {

//     Route::get('/users',function(){
//     return Inertia::render('Dashboard');
// });

// })->middleware(['auth', 'verified']);






Route::get('/{slug}',[ArticlesController::class,'index'])->name('article.index');
Route::get('/',[HomeController::class,'index']);

