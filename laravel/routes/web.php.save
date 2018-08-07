<?php

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
Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('logout', 'Auth\LoginController@logout');
//Route::get('/', 'HomeController@index');
Route::get('/', 'HomeController@ComingSoon');

Route::get('/about', function(){
    return view('about');
});
Route::post('/newsletter', 'HomeController@Newsletter');
Route::get('/rss', 'RssController@store');
Route::get('/privacy', 'HomeController@Privacy');
Route::get('/terms', 'HomeController@Terms');

//must be authenticated to access these specific routes.
Route::group(['middleware' => ['auth']], function() {
    Route::get('/team-registration', 'TeamsController@index');
    Route::post('/team-registration', 'TeamsController@create');

    Route::get('team-control', 'TeamsController@controlpanel');

    Route::get('/profile','ProfileController@index');
    Route::post('/profile','ProfileController@update');

    Route::get('/upgrade', 'PurchaseController@index');

});

/* Oauth Routes */
Route::get('auth/{provider}','Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

/* Account Verification Routes */
Route::get('verify/resend', 'MembersController@ResendVerification');
Route::get('verify/{hash}/{id}', 'VerificationController@verify');


Route::get('omega', 'OmegaFiles@index');
