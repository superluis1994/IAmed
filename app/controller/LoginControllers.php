<?php
namespace app\controller;
use core\Utils;

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
}




