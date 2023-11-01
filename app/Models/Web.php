<?php
namespace app\controller;
use core\Utils;
use app\controller\MainControllers;

class Web extends MainControllers{
   public function index(){
      return Utils::view('index');
   }

   public function show($id){
      echo $id;
      return $id;
   }
}
