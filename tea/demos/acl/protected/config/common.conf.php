<?php
/* 
 * Common configuration that can be used throughout the application
 * Access via Singleton, eg. Tea::conf()->BASE_PATH;
 */
error_reporting(E_ALL | E_STRICT);
date_default_timezone_set('Asia/Kuala_Lumpur');

/**
 * for benchmark purpose, call Tea::benchmark() for time used.
 */
//$config['START_TIME'] = microtime(true);


//framework use, must defined, user full absolute path and end with / eg. /var/www/project/
$config['SITE_PATH'] = realpath('..').'/acl/';
//$config['PROTECTED_FOLDER'] = 'protected/';
$config['BASE_PATH'] = realpath('../..').'/Teaframework/';

//for production mode use 'prod'
$config['APP_MODE'] = 'dev';
//----------------- optional, if not defined, default settings are optimized for production mode ----------------
//if your root directory is /var/www/ and you place this in a subfolder eg. 'app', define SUBFOLDER = '/app/'

$config['SUBFOLDER'] = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\','/',$config['SITE_PATH']));
if(strpos($config['SUBFOLDER'], '/')!==0){
	$config['SUBFOLDER'] = '/'.$config['SUBFOLDER'];
}

$config['APP_URL'] = 'http://'.$_SERVER['HTTP_HOST'].$config['SUBFOLDER'];
$config['AUTOROUTE'] = TRUE;
$config['DEBUG_ENABLED'] = TRUE;

//$config['TEMPLATE_COMPILE_ALWAYS'] = TRUE;

//register functions to be used with your template files
//$config['TEMPLATE_GLOBAL_TAGS'] = array('url', 'url2', 'time', 'isset', 'empty');

/**
 * Path to store logs/profiles when using with the logger tool. This is needed for writing log files and using the log viewer tool
 */
//$config['LOG_PATH'] = '/var/logs/';


/**
 * defined either Document or Route to be loaded/executed when requested page is not found
 * A 404 route must be one of the routes defined in routes.conf.php (if autoroute on, make sure the controller and method exist)
 * Error document must be more than 512 bytes as IE sees it as a normal 404 sent if < 512b
 */
//$config['ERROR_404_DOCUMENT'] = 'error.php';
$config['ERROR_404_ROUTE'] = '/error';


/**
 * Settings for memcache server connections, you don't have to set if using localhost only.
 * host, port, persistent, weight
 * $config['MEMCACHE'] = array(
 *                       array('192.168.1.31', '11211', true, 40),
 *                       array('192.168.1.23', '11211', true, 80)
 *                     );
 */
 
 
/**
 * you can include self defined config, retrieved via Tea::conf()->variable
 * Use lower case for you own settings for future Compability with Tea
 */
//$config['pagesize'] = 10;

?>