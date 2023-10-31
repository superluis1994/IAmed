<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
class LoginControllers{
   public function index(){
      
      return Utils::view('login.index');
   }
   public function registrar(){
      
      return Utils::view('login.registrar');
   }

   public function show($id){
      echo $id;
      return $id;
   }


   public function authenticate()
   {

      // conectarme a una base de datos y validar los datos
      $now = strtotime("now");
      $key = $_ENV['JWT_SECRET_KEY'];
      $payload = [
         'exp' => $now,
         'data' => '1'
      ];
      $jwt = JWT::encode($payload, $key, 'HS256');
      return print_r($jwt);
      // echo $id;
      // return $id;
   }
}




