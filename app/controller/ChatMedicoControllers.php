<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;
use app\repository\Model;
use app\models\especialidadesModel;
use app\Repository\ModelMongo;


class ChatMedicoControllers extends Token{
   private ModelMongo $Mongo;
   private Model $Especialidad;
   public function __construct()
   {
      $this->Mongo = new ModelMongo;
       $this->Especialidad = new especialidadesModel;
      
      
   }
   public function index(){
   @$chats = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","consulta"=>["participants.userId"=>2]]);
   @$especialidades = $this->Especialidad->QueryEspefico(
      [
         "campo1"=>"id_especialidad",
         "campo2"=>"nombre",
         "campo3"=>"descripcion"
         ])->all();
         $Data=[
            "especialidades"=>$especialidades,
            "chats"=>$chats
         ];
      // var_dump($Data);
    return Utils::viewChat('dashboard.chatMedico.ViewChat.homeMedico',$Data,"");

 }
   public function chatMedico(){

   //  @$Data = $this->Mongo->MongoDBAll("chats");
   @$Data = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","userId"=>2,"doctorId"=>1]);
   foreach ($Data as $documento ) {
      echo @$documento["_id"] . "\n";
   }
    return Utils::viewChat('dashboard.chatMedico.ViewChat.chatDoctor',$Data);

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