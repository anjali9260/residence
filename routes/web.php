<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutFaqController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [FrontController::class, 'homepage'])->name('homepage');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/search', [PortfolioController::class, 'search']);

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::resource('portfolio', PortfolioController::class);

    Route::get('portfolio/setfeatured/{id}', [PortfolioController::class, 'setfeatured'])->name('portfolio.setfeatured');

    Route::get('portfolio/removefeatured/{id}', [PortfolioController::class, 'removefeatured'])->name('portfolio.removefeatured');

    Route::get('portfolio/setoffer/{id}', [PortfolioController::class, 'setoffer'])->name('portfolio.setoffer');

    Route::get('portfolio/removeoffer/{id}', [PortfolioController::class, 'removeoffer'])->name('portfolio.removeoffer');

    Route::resource('about', AboutController::class);

    Route::resource('aboutFaq', AboutFaqController::class);

    Route::resource('product', ProductController::class);

   

});

require __DIR__ . '/auth.php';
