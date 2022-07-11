<?php

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
//Route::controller('content', 'ContentController');
Route::name('get-locale')->get('/locale', 'LanguageController@index');
Route::name('set-locale')->get('locale/{locale?}', 'LanguageController@setLocale');

Route::name('language')->get('language/{lang}', 'SessionController@language');
Route::name('programme')->get('/programme', 'ProgrammeController@index');
Route::name('registration')->group(function () {
    Route::get('/registration', 'RegistrationController@index');
    Route::get('/inscription', 'RegistrationController@index');
});

Route::post('/registration/store', 'RegistrationController@store');

Route::name('hosting')->group(function () {
    Route::get('/hosting', 'HostingController@index');
    Route::get('/sejour', 'HostingController@index');
});

Route::name('association')->group(function () {
    Route::get('/denousavous', 'associationController@index');
    Route::get('/summercourses', 'associationController@index');
    Route::get('/we', 'associationController@index');
    Route::get('/association', 'associationController@index');
});

Route::get('/contentList', 'ContentController@showList');
Route::get('/content/{id}', 'ContentController@show')->where('id', '[1-9]*');
Route::get('/content', 'ContentController@show');
Route::get('/', 'HomeController@index');




Route::get('/contact', function () {
    return view('contact');
});


Route::get('/test/{page}', [App\Http\Controllers\ContentController::class, 'showList']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/roles','AdminController@roles');
    Route::get('/registrations','AdminController@index');
    Route::get('/users','AdminController@users');
    Route::post('/users/new', 'AdminController@newUser');
    Route::get('/password/change','AdminController@changePasswordPage');
    Route::post('/password/change/submit','AdminController@updatePassword');

});



