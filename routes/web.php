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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'IndexController@index');
// Route::get('/friends', 'FriendsController@index');


Route::resource('profile', Profile::class);

Route::get('/home', 'HomeController@index')->name('home');

//  Route Grouping
Route::middleware(['auth'])->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/users/list', 'IndexController2@users');

    Route::post('/follow', 'FollowerController@follow')->name('follow');
    Route::post('/unfollow', 'FollowerController@unfollow')->name('unfollow');

});

Route::get('/portfolio', 'IndexController@fetch');

Route::get('/user/references', 'IndexController2@references');
Route::post('/user/references', 'IndexConroller2@addReferences');
Route::get('/profile', 'ProfileController@index');
Route::get('/{username}', 'ProfileController@show');

