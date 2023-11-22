<?php

namespace routes;

use core\Route;
use core\Utils;

Route::group('/login',function(){
    Route::get('/entrar', "LoginControllers@authenticate");
    Route::get('/publicidadBaner', "LoginControllers@bannerPublicitarios");
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