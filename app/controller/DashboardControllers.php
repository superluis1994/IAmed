<?php
namespace app\controller;
use core\Utils;

class DashboardControllers{
   public function index(){
      
      return Utils::viewDasboard('dashboard.index');
      // return Utils::viewDasboard('productos.index');
   }
   public function chatbot(){
      
      return Utils::viewDasboard('dashboard.chatbot');
      // return Utils::viewDasboard('productos.index');
   }

   public function show($id){
      echo $id;
      return $id;
   }
}




