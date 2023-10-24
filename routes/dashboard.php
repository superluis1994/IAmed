<?php

namespace routes;

use core\Route;
use core\Utils;
Route::get('/', "MainControllers@index");
Route::group('/entrar',function(){
    Route::get('', "LoginControllers@index");
    Route::get('/', "LoginControllers@index");
    Route::get('/registrar', "LoginControllers@registrar");
    // Route::get('/registrar/', "LoginControllers@registrar");

});

Route::group('/dashboard', function () {
    Route::get('/', "DashboardControllers@index");
    Route::get('', "DashboardControllers@index");
    Route::get('/chatbot', "DashboardControllers@chatbot");
    // Route::get('/login', function () {
    //     return Utils::view("login.login");
    // });
    // Route::post('',"Ruta inicial POST");
    Route::get('/nombre/{name}', function ($route) {
        return Utils::view("producto.index", ["name" => $route["name"]]);
    });
});
    