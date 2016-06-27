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

App::bind('pusher',function($app){
	$keys = $app['config']->get('services.pusher');
	return new Pusher($keys['public'],$keys['secret'],$keys['app_id']);
});

Route::get('/', function () {
    return view('home');
});

Route::any('test',function(){
	App::make('pusher')->trigger('demoChannel','userLikedPost',['title' => 'My Great New Post']);

	return 'Done';
});
