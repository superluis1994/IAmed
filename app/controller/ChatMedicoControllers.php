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
   private $header;
   public function __construct()
   {
      $this->Encrypto = new Encryptar($_ENV["JWT_SECRET_KEY"]);
      $this->Mongo = new ModelMongo;
       $this->Especialidad = new especialidadesModel;
       $this->header = "Panel | ChatMedico";
      
   }
   public function index(){
      
      // $t=$this->Encrypto->decrypt($_SESSION['datosUser']['id']);
      // echo "este es la desec :".$t;
      // echo var_dump($_SESSION['datosUser']['id']);
   // @$chats = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","consulta"=>["participants.userId"=>intval($_SESSION['datosUser']['id'])]]);
   @$chats = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","consulta"=>["participants.userId"=>$_SESSION['datosUser']['id']]]);
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


         // echo $this->Encrypto->encryptItem(2);
      
      // var_dump($Data);
    return Utils::viewChat('dashboard.chatMedico.ViewChat.homeMedico',$Data,$this->header);

 }
   public function chatMedico($id){

   @$msg = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","consulta"=>["participants.userId"=>$_SESSION['datosUser']['id'],"participants.doctorId"=>$id]]);
   @$chats = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","consulta"=>["participants.userId"=>$_SESSION['datosUser']['id']]]);

   // @$Data = $this->Mongo->MongoDBBusqueda(["collection"=>"chats","consulta"=>["participants.userId"=>intval($_SESSION['datosUser']['id'])]]);
   // foreach ($msg as $documento ) {
   //    echo "aqui".@$documento["_id"] . "\n";
   // }
   $msg = iterator_to_array($msg);
   $chats = iterator_to_array($chats);
   $Data = [
      //   "chats" => $convertedChats,
      "chats" => $chats,
      "msg"=>$msg
   ];

// foreach ($msg as $key) {
//         echo "mensaje: ".$key["messages"]["senderId"]."\n";
// }
   
   
// $json = json_decode('{"database": "iamed", "collection": "chats", ...}');

// foreach ($msg as $key => $value) {
//     echo $key . ": " . $value . "\n";
// }
// echo var_dump($Data);

    return Utils::viewChat('dashboard.chatMedico.ViewChat.chatDoctor',$Data,$this->header);
    
   }
   public function listadoMedicos($id){
      
    
      return Utils::viewChat('dashboard.chatMedico.ViewChat.chatDoctor',$Data=[],$this->header);
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