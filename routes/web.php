<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Spatie\Sitemap\SitemapGenerator;

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

Route::get('/', [MainController::class,'index'])->name('index');
Route::get('our-team/', [MainController::class,'members'])->name('members');
Route::get('about-us/', [MainController::class,'about'])->name('about');
Route::get('portfolio/', [MainController::class,'portfolio'])->name('portfolio');
Route::get('services/', [MainController::class,'services'])->name('services');
Route::get('contact-us/', [MainController::class,'contact'])->name('contact');
Route::post('send-mail/', [MainController::class,'send_mail'])->name('send-mail');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/sitemap.xml', function () {
    SitemapGenerator::create(config('app.url'))
        ->writeToFile(public_path('sitemap.xml'));
    
    return response()->file(public_path('sitemap.xml'));
});
