<?php
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


/**
 *  Checking if the minimum version of php is installed
**/
if (version_compare(phpversion(), '5.6', '<')) {
    die('PHP Version 5.6 or greater required!');
}


ini_set('display_errors', '1');

/**
 *  Defining BOOT_DIR, directory containing bootstrap files
**/
define('BOOT_DIR', __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR."system".DIRECTORY_SEPARATOR."bootstrap".DIRECTORY_SEPARATOR);

/**
 *  Loading auto class loader.
**/
(file_exists(BOOT_DIR.'autoloader.php')) ? require_once BOOT_DIR.'autoloader.php' : die('Error 0x0MS1: Missing important file!');

/**
 * Sharpening up the blade of AxE to slash
**/
$blade = (file_exists(BOOT_DIR.'blade.php')) ? require_once BOOT_DIR.'blade.php' : die('Error 0x0MS2: Missing important file!');
$blade->slash(realpath(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR));