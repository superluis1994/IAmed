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
      if(isset($_SESSION['datosUser']['token'])){
       self::validarToken($_SESSION['datosUser']['token']);
      } 
      
   }
   public function index(){
      
     
      return Utils::viewDasboard('dashboard.home');
      // return Utils::viewDasboard('productos.index');
   }
   public function chatbot(){
      return Utils::viewDasboard('dashboard.chatbot');
      // return Utils::viewDasboard('productos.index');
   }

   public function show($id){
      echo $id;
      return $id;
   }
}




