<?php

/** @var \Laravel\Lumen\Routing\Router $router */



$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/registration', 'RegistrationController@onRegister');
$router->post('/login', 'LoginController@onLogin');


// $router->post('/tokenTest', ['middleware'=>'auth','uses'=>'LoginController@tokenTest']);


$router->post('/insert', ['middleware'=>'auth','uses'=>'PhoneBookController@onInsert']);
$router->post('/select', ['middleware'=>'auth','uses'=>'PhoneBookController@onSelect']);

$router->post('/delete', ['middleware'=>'auth','uses'=>'PhoneBookController@onDelete']);
