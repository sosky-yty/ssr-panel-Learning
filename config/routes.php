<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-7-3
 * Time: 下午6:18
 */

use Slim\App;
use Slim\Container;
use Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware;

$debug = false;
if(defined("DEBUG")){
    $debug = true;
}

$configuration = [
    'setting' =>[
        'debug' => $debug,
        'whoops.editor' => 'sublime',
        'displayErrorDetails' => $debug
    ]
];

$container = new Container($configuration);


$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        return $response->withAddedHeader('Location', '/404');
    };
};

$container['notAllowedHandler'] = function ($c) {
    return function ($request, $response, $methods) use ($c) {
        return $response->withAddedHeader('Location', '/405');
    };
};

if ($debug == false) {
    $container['errorHandler'] = function ($c) {
        return function ($request, $response, $exception) use ($c) {
            return $response->withAddedHeader('Location', '/500');
        };
    };
}

$app = new App($container);
$app->add(new WhoopsMiddleware());

$app->get();