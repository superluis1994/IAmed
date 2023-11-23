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
   public function index(){
      return Utils::viewChat('dashboard.chatPaciente.ViewChat.homePaciente',$Data=[],"");
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