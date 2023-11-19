<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;

class ChatPacienteControllers extends Token{
   
   public function __construct()
   {

      
      
   }
   public function chatPaciente(){
    return Utils::view('dashboard.chatPaciente',$data=[],"");
    echo "chat paciente";
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