<?php
namespace app\controller;
use core\Utils;

class MainControllers{
   public function home(){
      
      return Utils::viewStatic('web.home');
  
   }
   public function about(){
      
      return Utils::viewStatic('web.about');
  
   }
   public function servicios(){
      
      return Utils::viewStatic('web.servicios');
  
   }
   public function contacto(){
      
      return Utils::viewStatic('web.contacto');
  
   }

   public function show($id){
      echo $id;
      return $id;
   }
}




