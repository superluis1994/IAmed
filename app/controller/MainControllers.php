<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class MainControllers{
   public function home(){
      
      return Utils::viewStatic('web.home');
  
   }
   public function about(){
      
      return Utils::viewStatic('web.about');
  
   }
   public function servicios(){
      
      return Utils::viewStatic('web.servicios');
  
   }
   public function contacto(){
      
      return Utils::viewStatic('web.contacto');
  
   }

//    public function show($id){
//       $now = strtotime("now");
//       $key = 'example_key';
//      $payload = [
//     'exp' => $now,
//     'data'=>'1'
// ];
// $jwt = JWT::encode($payload, $key, 'HS256');
// print_r($jwt);
//       // echo $id;
//       return $id;
//    }

}




