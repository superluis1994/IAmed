<?php

namespace app\controller;

use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Models\RolesModel;
use app\repository\Model;

class RegistrarControllers
{

   private Model $RolesModel;
   private $header;
   public function __construct()
   {
  
      $this->RolesModel = new RolesModel;
      $this->header = "Registrar";
   }
   
   public function index()
   {
    
      
      @$Data = $this->RolesModel->QueryEspefico(["campo1"=>"id_rol","campo2"=>"nombreRol"])->all();
      return Utils::view('login.registrar',$Data,$this->header);
   }
   
   
}
