<?php

namespace routes;

use core\Route;
use core\Utils;

Route::group('/dashboard', function () {
    Route::get('/', "DashboardControllers@index");
    Route::get('', "DashboardControllers@index");
    Route::get('/chatbot', "ChatbotControllers@chatbot");
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
        Route::get('/chats/{id}', "ChatPacienteControllers@loadMsg");
    });
      /** RUTA PARA SECTOR PRIVADO */
      Route::group('/dashboard/sectorPrivado', function () {
        Route::get('', "SectorPrivadoControllers@index");
        Route::get('/', "SectorPrivadoControllers@index");
    });
    /** RUTA PARA SECTOR PUBLICO */
    Route::group('/dashboard/sectorPublico', function () {
        Route::get('', "SectorPublicoControllers@index");
        Route::get('/', "SectorPublicoControllers@index");
    });
       /** RUTA PARA CENTRO DE ASISTENCIA MEDICA */
       Route::group('/dashboard/centroAsistecia', function () {
        Route::get('', "CentroAsistenciaControllers@index");
        Route::get('/', "CentroAsistenciaControllers@index");
    });
           /** RUTA PARA FARMACIAS */
           Route::group('/dashboard/farmacias', function () {
            Route::get('', "farmaciasControllers@index");
            Route::get('/', "farmaciasControllers@index");
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
    /** RUTA DE CAMBIAR FOTO EN LA CONFIGURACION **/
    Route::group('/dashboard/configuracion/cambiarFoto', function () {
        Route::get('', "CambiarFotoControllers@index");
        Route::get('/', "CambiarFotoControllers@index");
    });
    /** RUTA PARA VER LOS DATOS PERSONALES **/
    Route::group('/dashboard/configuracion/datosPersonales', function () {
        Route::get('', "DatosPersonalesControllers@index");
        Route::get('/', "DatosPersonalesControllers@index");
    });
    /** RUTA DE LAS SUSCRIPCIONES **/
    Route::group('/dashboard/configuracion/suscripciones', function () {
        Route::get('', "SuscripcionesControllers@index");
        Route::get('/', "SuscripcionesControllers@index");
    });
    /** RUTA PARA VER MI PERFIL COMO PROFESIONAL DE LA SALUD **/
    Route::group('/dashboard/configuracion/perfilProfesional', function () {
        Route::get('', "PerfilProfesionalControllers@index");
        Route::get('/', "PerfilProfesionalControllers@index");
    });
    /** RUTA PARA LA COMUNIDAD DE LOS REFERIDOS **/
    Route::group('/dashboard/configuracion/comunidadReferidos', function () {
        Route::get('', "ComunidadReferidosControllers@index");
        Route::get('/', "ComunidadReferidosControllers@index");
    });
    /** CAMBIO DE CONTRASEÑA **/
    Route::group('/dashboard/privacidad/newPassword', function () {
        Route::get('', "CambioPasswordControllers@index");
        Route::get('/', "CambioPasswordControllers@index");
    });
    /** RUTA PARA CITA EN LINEA */
     Route::group('/dashboard/cita/citaEnLinea', function () {
        Route::get('', "CitaEnLineaControllers@index");
        Route::get('/', "CitaEnLineaControllers@index");
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
