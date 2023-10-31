<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Models\SortoModel;
use app\repository\Model;
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

      // Comprobar que los campos no están vacíos
      if (empty(trim($_POST["user"])) || empty(trim($_POST["password"]))) {
         // Mostrar un error
         echo "Los campos usuario y contraseña son obligatorios.";
         exit();
      }

      // Eliminar los caracteres especiales
      $user = rtrim(preg_replace("/[^a-zA-Z0-9@#_-]/", "", trim($_POST["user"])));
      $password = rtrim(preg_replace("/[^a-zA-Z0-9@#_-]/", "", trim($_POST["password"])));

      echo $user." ".$password;


      // conectarme a una base de datos y validar los datos
      // $now = strtotime("now");
      // $key = $_ENV['JWT_SECRET_KEY'];
      // $payload = [
      //    'exp' => $now,
      //    'data' => '1'
      // ];
      // $jwt = JWT::encode($payload, $key, 'HS256');
      // return print_r($jwt);
    
      // echo $id;
      // return $id;
   }
}




