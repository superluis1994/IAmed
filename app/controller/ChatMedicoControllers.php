<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;
use app\repository\Model;
use app\models\especialidadesModel;
use app\Repository\ModelMongo;
use app\Setting\Encryptar;


class ChatMedicoControllers extends Token{
   private ModelMongo $Mongo;
   private Model $Especialidad;
   private Encryptar $Encrypto;
   public function __construct()
   {
      $this->Encrypto = new Encryptar($_ENV["JWT_SECRET_KEY"]);
      $this->Mongo = new ModelMongo;
       $this->Especialidad = new especialidadesModel;
       Utils::tituloPagina("Panel | ChatMedico");
      
   }
   public function index(){
   @$chats = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","consulta"=>["participants.userId"=>intval($_SESSION['datosUser']['id'])]]);
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
      //   echo var_dump($_SESSION['datosUser']);
      //    foreach ($chats as $key=>$document) {
      //       echo $key." = ";
      //          //   echo $chats->$document->participants[0]["doctorId"] ."<br>";
      //   }
      // echo json_encode($chats);
      // $usuarios = iterator_to_array($chats);
   
      // print_r($usuarios);
         // echo $this->Encrypto->encrypt("1");
         
      // var_dump($Data);
    return Utils::viewChat('dashboard.chatMedico.ViewChat.homeMedico',$Data,"");

 }
   public function chatMedico($id){
     
   //  @$Data = $this->Mongo->MongoDBAll("chats");
   @$chat = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","consulta"=>["userId"=>intval($_SESSION['datosUser']['id']),"doctorId"=>intval($id)]]);
   @$chats = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","consulta"=>["participants.userId"=>intval($_SESSION['datosUser']['id'])]]);

   // @$Data = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","consulta"=>["participants.userId"=>intval($_SESSION['datosUser']['id'])]]);
   // foreach ($Data as $documento ) {
   //    echo @$documento["_id"] . "\n";
   // }
   $Data=[
      "msg"=>$chat,
      "chats"=>$chats
   ];
   // print_r($Data);
    return Utils::viewChat('dashboard.chatMedico.ViewChat.chatDoctor',$Data);
    
   }
   public function listadoMedicos($id){
      
    
      return Utils::viewChat('dashboard.chatMedico.ViewChat.chatDoctor',$Data=[]);
 }
//    public function chatMedicos($id){



//    //  return Utils::viewChat('dashboard.chatMedico.ViewChat.chatDoctor',$data=[],"");
//     // return Utils::viewDasboard('productos.index');
//  }
   /**SE ENCARGA DE CARGAR LOS MENSAJES */
    public function loadMsg()
    {

    }
    /**SE ENCARGA DE GESTIONAR CONSULTAS CON IA Y ALMACENARLAS */
    public function questionMsg()
    {
        
    }
}