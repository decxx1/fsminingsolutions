<!-- .../fsminingsolutions/routes/web.php -->
<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;



Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
//Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/team', 'team')->name('team');
Route::view('/testimonials', 'testimonials')->name('testimonials');
Route::view('/faq', 'faq')->name('faq');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
