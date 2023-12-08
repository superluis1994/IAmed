<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;
use app\Repository\Model;
use app\Repository\ModelMongo;
use app\Models\UserModel;
class DashboardControllers extends Token{

   private UserModel $UserModel;
   private ModelMongo $Mongo;
   private $header;
   public function __construct()
   {
      $this->UserModel = new UserModel;
      $this->Mongo = new ModelMongo;

      /**VALIDO QUE EL TOKEN NO EXISTA Y NO ESTE EXPIRADO */
      if(isset($_SESSION['datosUser']['token']) ){
       self::validarToken($_SESSION['datosUser']['token']);
      } 
      else{
         return  header("Location:".Utils::url('/login'));
      }
      $this->header = "Panel";
      
   }
   public function index(){
   //    @$Data = $this->Mongo->MongoDBAll(["collection"=>"chats","userId"=>1,"especialista"=>2]);

   //    foreach ($Data as $documento) {
   //       echo @$documento["_id"] . "\n";
   //       foreach(@$documento["messages"] as $value)
   //       echo " - ".@$value["senderId"]." - ".@$value["message"]. "\n".@$value["message"];
   //   }
      // var_dump();
      // print_r($Data);
      // $alerta="<script> Swal.fire('SweetAlert2 is working!')</script>";
       $alerta="";
       return Utils::viewDasboard("dashboard.home",$data=[],$this->header);
   }
  

   public function show($id){
      echo $id;
      return $id;
   }
}




