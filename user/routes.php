\<?php
/**
 * AxE PHP - Slash your code
 * Copyright (c) 2016, AxE PHP
 *
 *
 * @author AxE Development Team
 * @copyright Copyright (c) 2016, AxE PHP
 * @license MIT License
 * @version 2.0
 *
 * Recommended PHP version 5.6 or greater.
 */

Route::default('home');

Route::get('/login')->to('user/login'); // Default callback to 'index'
 
Route::post('/login')->to('user/login')->run('login');

Route::resource('/profile')->to('user/profile');

Route::get('/{data}')->run(function($data){
	echo "Router is requesting for $data";
});

Route::post('/{data}')->run(function($data){
	echo "POST request received as : ". vd($_POST);
});

# Where,
vd() // Custom Var_Dump function
breakpoint();