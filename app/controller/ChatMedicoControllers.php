<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;
use app\repository\Model;
use app\models\especialidadesModel;

class ChatMedicoControllers extends Token{
   private Model $Especialidad;
   public function __construct()
   {
       $this->Especialidad = new especialidadesModel;
      
      
   }
   public function index(){
   @$Data = $this->Especialidad->QueryEspefico(
                     [
                        "campo1"=>"id_especialidad",
                        "campo2"=>"nombre",
                        "campo3"=>"descripcion"
                     ])->all();
  
    return Utils::viewChat('dashboard.chatMedico.ViewChat.homeMedico',$Data,"");

 }
   public function chatMedico(){
    
    return Utils::viewChat('dashboard.chatMedico.ViewChat.chatDoctor',$data=[],"");
    // return Utils::viewDasboard('productos.index');
 }
   public function chatMedicos($id){



   //  return Utils::viewChat('dashboard.chatMedico.ViewChat.chatDoctor',$data=[],"");
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