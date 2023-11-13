<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;
use app\repository\Model;
use app\Models\AuthModel;
class DashboardControllers extends Token{

   private Model $AuthModel;
   public function __construct()
   {
      $this->AuthModel = new AuthModel;
      /**VALIDO QUE EL TOKEN NO EXISTA Y NO ESTE EXPIRADO */
      if(isset($_SESSION['datosUser']['token']) ){
       self::validarToken($_SESSION['datosUser']['token']);
      } 
      else{
         return  header("Location:".Utils::url('/login'));
      }
      
      
   }
   public function index(){
     // @$Data = $this->AuthModel->MongoDB("chats");

<<<<<<< HEAD
      // foreach ($Data as $documento) {
      //   echo $documento["id"] . "\n";
      //   echo " - ".$documento["msg"] . "\n";
      // }
=======

     // foreach ($Data as $documento) {
     //    echo $documento["id"] . "\n";
    //     echo " - ".$documento["msg"] . "\n";
    // }

>>>>>>> e9d7ed65c0f96a5f2b3c59e2a3c80574b6f437df
      // var_dump($Data);
      // $alerta="<script> Swal.fire('SweetAlert2 is working!')</script>";
       $alerta="";
       return Utils::viewDasboard("dashboard.home",$data=[],$alerta);
   }
  

   public function show($id){
      echo $id;
      return $id;
   }
}




