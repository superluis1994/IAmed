<?php

namespace routes;

use core\Route;
use core\Utils;


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
        Route::post('/categoria/{id}',"ChatMedicoControllers@listadoMedicos");
        // Route::get('/chat', "ChatMedicoControllers@chatMedico");
        Route::get('chat/{id}', "ChatMedicoControllers@chatMedico");
        Route::get('/chat/{id}', "ChatMedicoControllers@chatMedico");

    });
    Route::group('/dashboard/chatPaciente', function () { // Ruta del chat paciente
        Route::get('', "ChatPacienteControllers@index");
        Route::get('/', "ChatPacienteControllers@index");
    });


    // INICIO BLOQUE DE CITAS 
   
    Route::group('/dashboard/cita/agregar', function () { // Ruta de agregar una nueva cita
        Route::get('', "AgregarCitaControllers@index");
        Route::get('/', "AgregarCitaControllers@index");
    });
    Route::group('/dashboard/cita/seguimiento', function () { // Ruta de llevar el sguimiento de citas 
        Route::get('', "SeguimientoCitaControllers@index");
        Route::get('/', "SeguimientoCitaControllers@index");
    });
    Route::group('/dashboard/cita/historiales', function () { // Ruta para ver todo el historial medico de los pacientes
        Route::get('', "HistorialesClinicosControllers@index");
        Route::get('/', "HistorialesClinicosControllers@index");
    });
    
    // FIN DEL BLOQUE DE CITAS

    
    // INICIO DEL BLOQUE DE RECORDATORIOS 
    
    Route::group('/dashboard/recordatorios/agregar', function () { // Ruta para agregar un nuevo recordatorio
        Route::get('', "AgregarRecordatorioControllers@index");
        Route::get('/', "AgregarRecordatorioControllers@index");
    });
    Route::group('/dashboard/recordatorios/historial', function () { // Ruta de revisar el historila de recordatorios
        Route::get('', "HistorialRecordatorioControllers@index");
        Route::get('/', "HistorialRecordatorioControllers@index");
    });
    
    // FIN DEL BLOQUE DE RECORDATORIOS

    Route::group('/dashboard/comunidaMedica', function () {
        Route::get('', "ComunidaMedicaControllers@index");
        Route::get('/', "ComunidaMedicaControllers@index");
        // Route::get('/chat', "ComunidaMedicaControllers@chatMedico");
        // Route::get('chat/', "ComunidaMedicaControllers@chatMedico");
        // Route::get('/chat/', "ComunidaMedicaControllers@chatMedico");
    
});
    Route::group('/dashboard/suscripciones', function () {
        Route::get('', "SuscripcionesControllers@index");
        Route::get('/', "ComunidaMedicaControllers@index");


    });
    // Route::get('/login', function () {
    //     return Utils::view("login.login");
    // });
    // Route::post('',"Ruta inicial POST");
    Route::get('/nombre/{name}', function ($route) {
        return Utils::view("producto.index", ["name" => $route["name"]]);
    });
});
    