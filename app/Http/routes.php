<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', ['as' => 'backslash', 'uses' => 'HomeController@index']);

Route::get('/feedback/{slug}/new', function($slug) {
		$page_title = "Peer Feedback For ".ucfirst($slug);
    return view('feedback/newxhp', compact('page_title'));
});
