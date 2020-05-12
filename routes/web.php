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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/profile/create/step/1','userprofile')->middleware('auth');
Route::post('/userprofile', 'IndexController2@userprofile')->name('userprofile');

Auth::routes();

Route::get('/', 'IndexController@index');
// Route::get('/friends', 'FriendsController@index');


Route::resource('profile', Profile::class);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//  Route Grouping
Route::middleware(['auth'])->group(function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/users/list', 'IndexController2@users');

    Route::post('/follow', 'FollowerController@follow')->name('follow');
    Route::post('/unfollow', 'FollowerController@unfollow')->name('unfollow');
    Route::get('/user/educationDetail', 'IndexController2@educationDetail')->name('educationDetail');
    Route::post('/user/addEducationalDetails', 'IndexController2@addEducationDetails')->name('addEducationDetails');
    Route::post('/user/addEducationalDetails2', 'IndexController2@addEducationDetails2')->name('addEducationDetails2');
    Route::get('/user/educationDetail2', 'IndexController2@educationDetail2')->name('educationDetail2');
});
Route::get('getExperience','indexController2@getExperience');
Route::post('getExperience','indexController2@Experience');
Route::view('/social_link',"social_links");

Route::view('/experience',"experience");
Route::post('/experiences','indexController2@experience')->name('sanjaya');

Route::view('/social',"social");
Route::post('/test','indexController2@Social')->name('socials');



Route::get('socialSocial','SocialController@StoreSocial');
Route::post('social_link_store','SocialController@StoreSocial');

Route::any('/form',function(){
    if(request()->isMethod('get'))
        return view('social');
    dd(request()->all());
});






 Route::get('/skills', 'IndexController2@userdetail')->name('skills');

Route::get('/profile', 'ProfileController@index');
Route::get('/{username}', 'ProfileController@show');
<<<<<<< HEAD

//Route::group(['prefix'=>'user',function(){
//    Route::get('/HomeController@index')->name('user');
//}]);

=======
>>>>>>> 451124379218def5a7625b14d204a7f769ed0317
