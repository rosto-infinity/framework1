<?php

use Router\Router;

require_once"../vendor/autoload.php";

// echo "test1";
// echo $_GET['url'];

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);
define('DB_NAME', 'myappprof');
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PWD', '');

$router = new Router($_GET['url']);

$router->get( '/', 'App\controllers\BlogController@welcome');
// $router->get( '/', 'App\Controllers\BlogController@index');
$router->get( '/posts', 'App\controllers\BlogController@index');
$router->get( '/posts/:id', 'App\Controllers\BlogController@show');

$router->run();