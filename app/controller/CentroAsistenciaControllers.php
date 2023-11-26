<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;

class CentroAsistenciaControllers extends Token{
   
   public function __construct()
   {

      Utils::tituloPagina("Panel | Nueva Cita");
      
   }
   public function index(){
    return Utils::viewDasboard('dashboard.centroAsistencia',$data=[],"");
    // return Utils::viewDasboard('productos.index');
 }
   /**SE ENCARGA DE CARGAR LOS MENSAJES */
    public function loadMsg()
    {

    }
    /**SE ENCARGA DE GESTIONAR CONSULTAS CON IA Y ALMACENARLAS */
    public function questionMsg()
    {
        
    }
}