<?php

# If some php commands and functions are to be run,
# you can do them here and then use them in your 
# 'template' file using @element().
#
# All the axe library functions work here as well.

//db(), session(), user(), etc.

//$username = user('auth1')->username;
//db()->select()->all();

$year = date("Y");

# Return theme details

return [

	'structure'=>'',
	'template'=>'part.tpl',

	'elements'=> [
		'year'=> $year
	],

	'sections'=> 'sections.tpl'

];