<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;

class HistorialesClinicosControllers extends Token{
   
   public function __construct()
   {

      Utils::tituloPagina("Panel | Historiales Clinicos");
      
   }
   public function index(){
    return Utils::viewDasboard('dashboard.historialesClinicos',$data=[],"");
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