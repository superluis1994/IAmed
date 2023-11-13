<?php

namespace routes;

use core\Route;
use core\Utils;

// parametro 1 : Controlador
// parametro 2 :  vista
// Route::get('/', "MainControllers@index");
// Route::group('/login',function(){
//     Route::get('/entrar', "LoginControllers@authenticate");
//     // Route::get('/entrar', "LoginControllers@prueba");
//     Route::get('', "LoginControllers@index");
//     Route::get('/', "LoginControllers@index");
//     Route::get('/resetpassword', "LoginControllers@registrar");
//     Route::get('/cerrar', "LoginControllers@CerrarSession");
//     // Route::get('/registrar/', "LoginControllers@registrar");
// });
// Route::group('/registrar',function(){
//     Route::get('', "RegistrarControllers@index");
//     Route::get('/', "RegistrarControllers@index");
// });

Route::group('/dashboard', function () {
    Route::get('/', "DashboardControllers@index");
    Route::get('', "DashboardControllers@index");
    Route::get('/chatbot', "ChatbotControllers@chatbot");
    // Route::get('/chatMedico', "ChatMedicoControllers@index");
    Route::get('/sectorPrivado', "SectorPrivadoControllers@index");
    Route::get('/farmacias', "farmaciasControllers@index");
    Route::group('/dashboard/chatMedico', function () {
        Route::get('', "ChatMedicoControllers@index");
        Route::get('/', "ChatMedicoControllers@index");
        // Route::get('/chatMedico/{categoria}', function ($route) {
        //     return Utils::viewChat("dashboard.chatMedico.ViewChat.listadoDoctores", ["categoria" => $route["categoria"]]);
        // });
        Route::post('/categoria/{id}',"ChatMedicoControllers@chatMedicos");

        
        Route::get('/chat', "ChatMedicoControllers@chatMedico");
        Route::get('chat/', "ChatMedicoControllers@chatMedico");
        Route::get('/chat/', "ChatMedicoControllers@chatMedico");

    });
    Route::group('/dashboard/comunidaMedica', function () {
        Route::get('', "ComunidaMedicaControllers@index");
        Route::get('/', "ComunidaMedicaControllers@index");
        // Route::get('/chat', "ComunidaMedicaControllers@chatMedico");
        // Route::get('chat/', "ComunidaMedicaControllers@chatMedico");
        // Route::get('/chat/', "ComunidaMedicaControllers@chatMedico");

    });
    // Route::get('/login', function () {
    //     return Utils::view("login.login");
    // });
    // Route::post('',"Ruta inicial POST");
    Route::get('/nombre/{name}', function ($route) {
        return Utils::view("producto.index", ["name" => $route["name"]]);
    });
});
    