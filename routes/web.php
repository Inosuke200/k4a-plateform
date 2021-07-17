<?php
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

Route::get('/knowledge', function () {
    return view('welcome');
});

Route::get('/knowledge', [IndexController::class, 'index'])->name('picture');
Route::post('/space', [IndexController::class,'inscription'])->name('test');


Route::get('/', 'App\Http\Controllers\MailController@form')->name('pictures');
Route::post('/knowledge', 'App\Http\Controllers\MailController@sendEmail')->name('indent');


// // Route qui permet de connaître la langue active
// Route::get('locale', 'LocalizationController@getLang')->name('getlang');

// // Route qui permet de modifier la langue
// Route::get('locale/{lang}', 'LocalizationController@setLang')->name('setlang');
