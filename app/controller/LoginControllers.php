<?php

namespace app\controller;

use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Models\UserModel;
use app\Models\RolesModel;
use app\repository\Model;
use app\Setting\Token;
use app\models\BannerModel;

class LoginControllers
{
   private Model $UserModel;
   private Model $RolesModel;
   private Model $BannerModel;
   public function __construct()
   {
      $this->UserModel = new UserModel;
      $this->RolesModel = new RolesModel;
      $this->BannerModel = new BannerModel;
   }
   public function index()
   {
      Utils::tituloPagina("Login");

      // session_destroy();
      if (isset($_SESSION['datosUser']['token'])) {
         $JWTT = new Token();
         /**Signature verification failed */
         /**Expired token */
         /**{ ["exp"]=> int(1698945573) ["data"]=> string(1) "1" } */

         $TokenRespon = $JWTT->getToken($_SESSION['datosUser']['token']);
         // echo $TokenRespon->exp;
         if (isset($TokenRespon->exp)) {
            echo " invalido";
            header("Location:" . Utils::url('/dashboard'));
            return false;
         }
      }

      return Utils::view('login.index');
   }

   public function authenticate()
   {

      // Comprobar que los campos no están vacíos
      if (empty(trim(@$_POST["user"])) || empty(trim(@$_POST["password"]))) {
         // Mostrar un error
         // echo "Los campos usuario y contraseña son obligatorios.";
         return Utils::view('error.404', $Data = []);

         exit();
      }
      $usuario = trim($_POST["user"]);
      $passw = trim($_POST["password"]);
      // Eliminar los caracteres especiales
      $user = rtrim(preg_replace("/[^a-zA-Z0-9@#_-]/", "", $usuario));
      $password = rtrim(preg_replace("/[^a-zA-Z0-9@#_-]/", "", $passw));

      /* Data del usuario que se loguio**/
      @$Data = $this->UserModel->QueryEspefico(["user.id_user","user.username","user.status","roles.nombreRol"])->MultJoin([
         ["tablaPk" =>"user","pk" => "rol", "tablaFk" => "roles", "fk" => "id_rol"]
         ])->Mult_Where([
         ["atributo" => "username", "condicion" => "=", "value" => $user, "operador" => "AND"],
         ["atributo" => "password", "condicion" => "=", "value" => $password, "operador" => ""]

      ])->first();
      ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     
      if (count($Data) > 0) {

         // conectarme a una base de datos y validar los datos
         $now = strtotime("now");
         $key = $_ENV['JWT_SECRET_KEY'];
         $payload = [
            'exp' => $now + (60 * 60),
            'data' => $Data
         ];
         $jwt = JWT::encode($payload, $key, 'HS256');


         @$_SESSION['datosUser'];
         $datos['id'] = $Data[0]['id_user'];
         $datos['user'] = $Data[0]['username'];
         $datos['status'] = $Data[0]['status'];
         $datos['rol'] = $Data[0]['nombreRol'];
         $datos['token'] = $jwt;
         $_SESSION['datosUser'] = $datos;
         // header('Content-Type: application/json');
         // header("Location:".Utils::url('/dashboard'));

         $response = [
            'status' => 'success',
            'titulo' => 'Exitoso',
            'msg' => 'Datos Correctos',
            'data' => [
               'url' => Utils::url('/dashboard')
            ],
         ];
         // Codificamos la respuesta en JSON
         //  echo $jwt;
         //  return print_r($jwt);
      } else {

         $response = [
            'status' => 'error',
            'titulo' => 'Error',
            'msg' => 'Datos Incorrectos',
            'data' => [
               'url' => Utils::url('/login')
            ],
         ];
      }
      echo json_encode($response);
      return false;
   }
   public function CerrarSession()
   {

      session_destroy();
      header("Location:" . Utils::url('/login'));
   }


   public function bannerPublicitarios()
   {

      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
         @$Data = $this->BannerModel->Query()->all();
         $response = [
            'status' => 'ok',
            'titulo' => 'Error',
            'url' => Utils::assets("/"),
            'data' => $Data
         ];
         echo json_encode($response);
         return false;
      }
      Utils::view("error.404");
   }
}
