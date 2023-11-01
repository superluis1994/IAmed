<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Models\AuthModel;
use app\repository\Model;
class LoginControllers{
   private Model $AuthModel;
   public function __construct()
  {
    $this->AuthModel = new AuthModel;
  }
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
      
      $Data = $this->AuthModel->Query()->Mult_Where([
         [ "atributo"=>"username",
             "condicion"=>"=",
             "value"=>$user,
             "operador"=>"AND"
          ],
          ["atributo"=> "password",
          "condicion"=>"=",
          "value"=>$password,
          "operador"=>""
          ]
       ])->first();
   
         echo "<pre>";
         echo var_dump($Data);
         echo "</pre>";

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




