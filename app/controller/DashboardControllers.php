<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;

class DashboardControllers extends Token{
   
   public function __construct()
   {
      /**VALIDO QUE EL TOKEN NO EXISTA Y NO ESTE EXPIRADO */
      if(isset($_SESSION['datosUser']['token']) ){
       self::validarToken($_SESSION['datosUser']['token']);
      } 
      else{
         return  header("Location:".Utils::url('/login'));
      }
      
      
   }
   public function index(){
      
      // $alerta="<script> Swal.fire('SweetAlert2 is working!')</script>";
      $alerta="";
      return Utils::viewDasboard("dashboard.".$_SESSION['datosUser']['rol'].".home",$data=[],$alerta);
   }
  

   public function show($id){
      echo $id;
      return $id;
   }
}




