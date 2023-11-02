<?php

namespace app\controller;

use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Models\AuthModel;
use app\repository\Model;
use app\Setting\Token;

class LoginControllers
{
   private Model $AuthModel;
   public function __construct()
   {
      $this->AuthModel = new AuthModel;
      
   }
   public function index()
   {
      
      // session_destroy();
      if(isset($_SESSION['datosUser']['token'])){
         $JWTT= new Token();
         /**Signature verification failed */
         /**Expired token */
         /**{ ["exp"]=> int(1698945573) ["data"]=> string(1) "1" } */

         $TokenRespon=$JWTT->getToken($_SESSION['datosUser']['token']);
         // echo $TokenRespon->exp;
         if(isset($TokenRespon->exp)){
               echo " invalido";
               header("Location:".Utils::url('/dashboard'));
                return false;
         }
      }

      return Utils::view('login.index');
   }

   public function registrar()
   {
      
      return Utils::view('login.registrar');
   }

   public function show($id)
   {
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

      @$Data = $this->AuthModel->Query()->Mult_Where([
         ["atributo" => "username", "condicion" => "=", "value" => $user, "operador" => "AND"],
         ["atributo" => "password", "condicion" => "=", "value" => $password, "operador" => ""]
      ])->first();

      if (count($Data) > 0) {

         // conectarme a una base de datos y validar los datos
         $now = strtotime("now");
         $key = $_ENV['JWT_SECRET_KEY'];
         $payload = [
            'exp' => $now + (60*60),
            'data' => $Data
         ];
         $jwt = JWT::encode($payload, $key, 'HS256');

         $_SESSION['datosUser'];
         $datos['user'] = $Data[0]['username'];
         $datos['status'] = $Data[0]['status'];
         $datos['token'] = $jwt;
         $_SESSION['datosUser'] = $datos;

         header("Location:".Utils::url('/dashboard'));
         return false;
         //  echo $jwt;
         //  return print_r($jwt);
      } else {
         echo "Datos incorrectos";
      }

   }
   public function CerrarSession(){
      
      session_destroy();
      header("Location:".Utils::url('/login'));
      
   }
}
