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

Route::get('/', function () {
    $user = \App\User::where('admin', 1)->first();
    return view('index', ['user' => $user]);
});

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'AdminController@edit')->name('admin.index');
        Route::post('/user/{user_id}', 'AdminController@store')->name('admin.user.store');
        Route::group(['prefix' => 'experience'], function () {
            Route::get('list', 'WorkExperienceController@index')->name('admin.experience.index');
            Route::get('create', 'WorkExperienceController@create')->name('admin.experience.create');
            Route::post('create', 'WorkExperienceController@store')->name('admin.experience.store');
            Route::get('{experience_id}', 'WorkExperienceController@edit')->name('admin.experience.edit');
            Route::post('{experience_id}', 'WorkExperienceController@update')->name('admin.experience.update');
            Route::delete('{experience_id}', 'WorkExperienceController@delete')->name('admin.experience.delete');
        });
    });
});

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::post('/login', 'Auth\LoginController@authenticate')->name('post.login');
