<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;
use app\Repository\ModelMongo;

class ChatPacienteControllers extends Token{
   private ModelMongo $Mongo;
   private $header;
   public function __construct()
   {
      $this->Mongo = new ModelMongo;
      $this->header = "Panel | ChatPaciente";      
   }
   public function index(){
   @$chats = $this->Mongo->MongoDBBusqueda(["collection" => "chats", "consulta" => ["participants.doctorId" => $_SESSION['datosUser']['id']]]);
   $chats = iterator_to_array($chats);
 
   $Data = [
   //   "chats" => $convertedChats,
     "chats" => $chats,
     "item"=>"item"
   ];
   // var_dump($chats[0]["messages"]);
   
   return Utils::viewChat('dashboard.chatPaciente.ViewChat.homePaciente',$Data,$this->header);
}

/**SE ENCARGA DE CARGAR LOS MENSAJES */
public function loadMsg($id)
{
   @$msg = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","consulta"=>["participants.doctorId"=>$_SESSION['datosUser']['id'],"participants.userId"=>$id]]);
   @$chats = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","consulta"=>["participants.doctorId"=>$_SESSION['datosUser']['id']]]);
   $msg = iterator_to_array($msg);
   $chats = iterator_to_array($chats);
   $Data = [
      //   "chats" => $convertedChats,
      "chats" => $chats,
      "msg"=>$msg
   ];
   return Utils::viewChat('dashboard.chatPaciente.ViewChat.chatPaciente',$Data,$this->header);
       

    }
    /**SE ENCARGA DE GESTIONAR CONSULTAS CON IA Y ALMACENARLAS */
    public function questionMsg()
    {
        
    }
}