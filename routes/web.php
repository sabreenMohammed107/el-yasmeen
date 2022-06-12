<?php

use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CompanyContactController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\GalleryCategoryController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\WhyUsController;
use App\Http\Controllers\IndexController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class,'index']);
Route::get('/gallery', [IndexController::class,'gallery']);
Route::post('/contact-message', [IndexController::class,'sendMessage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    //slider
    Route::resource('/home-slider', HomeSliderController::class);

    //admin-company-contact
    Route::resource('/admin-company-contact', CompanyContactController::class);
    Route::get('admin-contact-form', [CompanyContactController::class, 'contactForm'])->name('admin-contact-form');
    //deleteContactMsg
    Route::post('deleteContactMsg/{id}', [CompanyContactController::class, 'deleteContactMsg'])->name('deleteContactMsg');
 //admin-feedback
 Route::resource('/admin-feedback', FeedbackController::class);

 //gallery-category
 Route::resource('/admin-gallery-category', GalleryCategoryController::class);
 Route::resource('/admin-gallery', GalleryController::class);
    //whyus
    Route::resource('/whyus', WhyUsController::class);


    //blogs
    Route::resource('/admin-blogs', BlogsController::class);

    Route::resource('/admin-services', ServiceController::class);

});

