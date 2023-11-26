<?php

namespace routes;

use core\Route;
use core\Utils;

Route::group('/dashboard', function () {
    Route::get('/', "DashboardControllers@index");
    Route::get('', "DashboardControllers@index");
    Route::get('/chatbot', "ChatbotControllers@chatbot");
    Route::get('/sectorPrivado', "SectorPrivadoControllers@index");
    Route::get('/farmacias', "farmaciasControllers@index");

    /** RUTA PARA ABRIR EL CHAT CON MEDICOS*/
    Route::group('/dashboard/chatMedico', function () {
        Route::get('', "ChatMedicoControllers@index");
        Route::get('/', "ChatMedicoControllers@index");
        Route::post('/categoria/{id}', "ChatMedicoControllers@listadoMedicos");
        Route::get('chat/{id}', "ChatMedicoControllers@chatMedico");
        Route::get('/chat/{id}', "ChatMedicoControllers@chatMedico");
    });
    /** RUTA PARA ABRIR EL CHAT CON PACIENTES */
    Route::group('/dashboard/chatPaciente', function () {
        Route::get('', "ChatPacienteControllers@index");
        Route::get('/', "ChatPacienteControllers@index");
    });

    /** RUTA PARA AGREGAR UNA NUEVA CITA */
    Route::group('/dashboard/cita/agregar', function () {
        Route::get('', "AgregarCitaControllers@index");
        Route::get('/', "AgregarCitaControllers@index");
    });
    /** RUTA DE LLEVAR EL SEGUIMIENTO DE CITAS */
    Route::group('/dashboard/cita/seguimiento', function () {
        Route::get('', "SeguimientoCitaControllers@index");
        Route::get('/', "SeguimientoCitaControllers@index");
    });
    /** RUTA PARA VER TODO EL HISTORIAL MEDICO DE LOS PACIENTES */
    Route::group('/dashboard/cita/historiales', function () {
        Route::get('', "HistorialesClinicosControllers@index");
        Route::get('/', "HistorialesClinicosControllers@index");
    });
    /** RUTAS DE LOS RECODATORIOS */
    Route::group('/dashboard/recordatorios', function () {
        Route::group('/dashboard/recordatorios/agregar', function () {
            Route::get('', "AgregarRecordatorioControllers@index");
            Route::get('/', "AgregarRecordatorioControllers@index");
        });
        Route::group('/dashboard/recordatorios/historial', function () {
            Route::get('', "HistorialRecordatorioControllers@index");
            Route::get('/', "HistorialRecordatorioControllers@index");
        });
    });
    /** RUTA DE LA COMUNIDAD MEDICA */
    Route::group('/dashboard/comunidaMedica', function () {
        Route::get('', "ComunidaMedicaControllers@index");
        Route::get('/', "ComunidaMedicaControllers@index");
    });
    /** RUTA DE LAS SUCRIPCIONES */
    Route::group('/dashboard/suscripciones', function () {
        Route::get('', "SuscripcionesControllers@index");
        Route::get('/', "ComunidaMedicaControllers@index");
    });
});
