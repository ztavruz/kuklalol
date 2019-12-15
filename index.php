<?php
// ini_set('display_errors','On');
// error_reporting('E_ALL');

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/engine/Config/const.php";
$routes = require_once __DIR__ . "/engine/Config/routes.php";

use Engine\Token\Token;
use Engine\Router\Router;
use Api\ApiLoader;
use \RedBeanPHP\R as R;


// use Test\JsonWebTokenTest;
// use Test\Token;
// $token = new Token;
// $test = new JsonWebTokenTest($token);
// $test->run();
// $test->checkExpired();
// var_dump($test->checkExpired());
// use Api\Controllers\User;
// $user = new User();
// var_dump($user->getUserByLogin('xxx'));



$url = trim($_SERVER['REQUEST_URI'], "/");



if (preg_match("#^api.*#", $url)) {

    $api = new ApiLoader($url);
    $api->run();

}else
{
    $router = new Router($routes);
    $router->run();
}