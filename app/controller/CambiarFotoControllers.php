<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;

class CambiarFotoControllers extends Token{
   
   public function __construct()
   {

      Utils::tituloPagina("Panel | Cambiar Foto");
      
   }
   public function index(){
    return Utils::viewDasboard('dashboard.cambiarFoto',$data=[],"");
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