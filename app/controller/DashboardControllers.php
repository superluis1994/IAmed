<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;
use app\Repository\Model;
use app\Repository\ModelMongo;
use app\Models\AuthModel;
class DashboardControllers extends Token{

   private Model $AuthModel;
   private ModelMongo $Mongo;
   public function __construct()
   {
      $this->AuthModel = new AuthModel;
      $this->Mongo = new ModelMongo;

      /**VALIDO QUE EL TOKEN NO EXISTA Y NO ESTE EXPIRADO */
      if(isset($_SESSION['datosUser']['token']) ){
       self::validarToken($_SESSION['datosUser']['token']);
      } 
      else{
         return  header("Location:".Utils::url('/login'));
      }
      Utils::tituloPagina("Panel");
      
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
       return Utils::viewDasboard("dashboard.home",$data=[],$alerta);
   }
  

   public function show($id){
      echo $id;
      return $id;
   }
}




