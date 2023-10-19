<?php

namespace routes;

use core\Route;
use core\Utils;

Route::get('/dashboard', "DashboardControllers@index");
Route::get('/login', "LoginControllers@index");
Route::get('/registrar', "LoginControllers@registrar");
// Route::post('/api/{id}',"ProductoController@show");
// Route::post('/api/{id}', function ($route) {
//     echo $route['id'];
//     return $route['id'];
// });
// Route::post('/api/{id}-{nombre}', "Ruta inicial GET");
// Route::post('/personas/{id}', "PersonaControllers@show");
// Route::post('/persona/{id}', "MainControllers@index");
Route::group('/dashboard', function () {
    Route::get('/chatbot', function () {
        return Utils::view("login.login");
    });
    // Route::post('',"Ruta inicial POST");
    Route::get('/nombre/{name}', function ($route) {
        return Utils::view("producto.index", ["name" => $route["name"]]);
    });
});
    // Route::get('/',function(){
    //     return [
    //         "id" => 1
    //     ];
    // });
    // print_r(Route::getRoutes());
 