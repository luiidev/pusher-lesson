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

Route::get('/', function () {
    return view('home');
});

Route::any('test',function(){
	$pusher = new Pusher('3af9472db014da6465ce','866c7f4b7d79661af725','220398');

	$pusher->trigger('demoChannel','userLikedPost',[]);

	return 'Done';
});
