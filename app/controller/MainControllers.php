<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Repository\Model;
use app\models\BannerModel;

class MainControllers{
   private Model $BannerModel;
   public function __construct(){
      $this->BannerModel = new BannerModel;
   }
   public function inicio(){

      @$Datos = $this->BannerModel->QueryEspefico(["titulo","descripcion","src"])->Mult_Where([
         [ "atributo"=>"tipo","condicion"=>"=","value"=> "web_carousel","operador"=>"AND"],
         ["atributo"=>"status","condicion"=>"=","value"=> "1","operador"=>""]
      ])->first();
      $Data=[
         "corousel"=>$Datos,
         "active"=>0
      ];
      echo"<pre>";
      echo var_dump($Data);
      echo"</pre>";
      return Utils::viewStatic('web.inicio',$Data);
   
   }
   public function contacto(){
      
      return Utils::viewStatic('web.contacto');
  
   }

//    public function show($id){
//       $now = strtotime("now");
//       $key = 'example_key';
//      $payload = [
//     'exp' => $now,
//     'data'=>'1'
// ];
// $jwt = JWT::encode($payload, $key, 'HS256');
// print_r($jwt);
//       // echo $id;
//       return $id;
//    }

}




