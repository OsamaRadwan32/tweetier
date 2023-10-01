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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
    return view('auth.login');
});

Route::get('/register', function() {
    return view('auth.register');
});

Auth::routes();

/*
| Home Routes
*/

Route::get('/home', 'TweetsController@tweetFeed');
Route::post('/home', 'TweetsController@uploadTweet');

/*
| Profile Routes
*/

// Route::get('/profile', 'FollowController@getFollowers');
// Route::get('/profile', 'FollowController@getFollowings');
Route::get('/profile', 'TweetsController@userTweets');
// Route::get('/profile', 'FollowController')
//     ->only(['getFollowers', 'getFollowings']);
/*

| Followings Routes
*/
Route::get('/following', 'FollowController@getFollowings');

/*
| Followers Routes
*/
Route::get('/followers', 'FollowController@getFollowers');
