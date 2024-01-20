<!-- .../fsminingsolutions/routes/web.php -->
<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::view('/', 'index')->name('index');
Route::view('/services', 'services')->name('services');


Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
