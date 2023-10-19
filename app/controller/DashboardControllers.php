<?php
namespace app\controller;
use core\Utils;

class DashboardControllers{
   public function index(){
      
      return Utils::view('dashboard.usuario');
   }

   public function show($id){
      echo $id;
      return $id;
   }
}




