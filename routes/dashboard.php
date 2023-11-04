<?php

namespace routes;

use core\Route;
use core\Utils;
// parametro 1 : Controlador
// parametro 2 :  vista
// Route::get('/', "MainControllers@index");
Route::group('/login',function(){
    Route::get('/entrar', "LoginControllers@authenticate");
    // Route::get('/entrar', "LoginControllers@prueba");
    Route::get('', "LoginControllers@index");
    Route::get('/', "LoginControllers@index");
    Route::get('/resetpassword', "LoginControllers@registrar");
    Route::get('/cerrar', "LoginControllers@CerrarSession");
    // Route::get('/registrar/', "LoginControllers@registrar");
});
Route::group('/registrar',function(){
    Route::get('', "RegistrarControllers@index");
    Route::get('/', "RegistrarControllers@index");
});

Route::group('/dashboard', function () {
    Route::get('/', "DashboardControllers@index");
    Route::get('', "DashboardControllers@index");
    Route::get('/chatbot', "DashboardControllers@chatbot");
    Route::get('/sectorPrivado', "SectorPrivadoControllers@index");
    // Route::get('/login', function () {
    //     return Utils::view("login.login");
    // });
    // Route::post('',"Ruta inicial POST");
    Route::get('/nombre/{name}', function ($route) {
        return Utils::view("producto.index", ["name" => $route["name"]]);
    });
});
    