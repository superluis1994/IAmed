<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;

class ChatMedicoControllers extends Token{
   
   public function __construct()
   {

      
      
   }
   public function index(){
    return Utils::viewChat('dashboard.chatMedico.ViewChat.homePaciente',$data=[],"");
   //  return Utils::viewChat('dashboard.chatMedico.ViewChat.chatDoctor',$data=[],"");
    // return Utils::viewDasboard('productos.index');
 }
   public function chatMedico(){
    
    return Utils::viewChat('dashboard.chatMedico.ViewChat.chatDoctor',$data=[],"");
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