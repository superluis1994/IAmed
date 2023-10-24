<?php
namespace app\controller;
use core\Utils;

class MainControllers{
   public function index(){
      
      return Utils::view('index');
  
   }

   public function show($id){
      echo $id;
      return $id;
   }
}




