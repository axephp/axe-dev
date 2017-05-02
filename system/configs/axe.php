<?php

return[
	
	'managers'=>[

		Blade\Managers\RouteManager::class, 
		Blade\Validation\ValidationManager::class

	],

	'aliases'=>[
		'db' => \Blade\Database\Database::class,

		'hash' => \Blade\Hash\Hasher::class

	],

	'libs'=>[
	
		'db',

		'session',

		'config',

		'logs',

		'events',

		'auth',

		'hash',

		'validator'

	]



];