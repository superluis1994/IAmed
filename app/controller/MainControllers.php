<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Repository\Model;
use app\models\BannerModel;
use app\models\DatosPersonalesModel;

class MainControllers{
   private Model $BannerModel;
   private Model $DatosPersonalesModel;
   public function __construct(){
      $this->BannerModel = new BannerModel;
      $this->DatosPersonalesModel = new DatosPersonalesModel;
   }
   public function inicio(){

      /** DATOS DEL CAROUSEL DE LA WEB */
      @$Datos = $this->BannerModel->QueryEspefico(["titulo","descripcion","src","colocacion","seleccionado","efecto"])->Mult_Where([
         [ "atributo"=>"tipo","condicion"=>"=","value"=> "web_carousel","operador"=>"AND"],
         ["atributo"=>"status","condicion"=>"=","value"=> "1","operador"=>""]
      ])->first();

      /** DATOS DE LOS MEJORE MEDICOS */
      //     @$DatosListaMedico = $this->DatosPersonalesModel->QueryEspefico(["datos_personales.nombres","datos_personales.apellidos","especialidades.nombre"])->MultJoin(
      //    [
      //       ["tablaPk" =>"datos_personales","pk" => "id_datos", "tablaFk" => "perfil_afiliado", "fk" => "id_datos"],
      //       ["tablaPk" =>"perfil_afiliado","pk" => "id_afiliado", "tablaFk" => "afiliado_especialidades", "fk" => "id_afiliado"],
      //       ["tablaPk" =>"afiliado_especialidades","pk" => "id_especialidad", "tablaFk" => "especialidades", "fk" => "id_especialidad"]
      //    ]
      // )->Mult_Where([
      //    [ "atributo"=>"datos_personales.id_user","condicion"=>"=","value"=>'2',"operador"=>""],
      // ])->first();
          @$DatosListaMedico = $this->DatosPersonalesModel->QueryEspefico(["datos_personales.nombres","datos_personales.apellidos","especialidades.nombre"])->MultJoin(
         [
            ["tablaPk" =>"datos_personales","pk" => "id_datos", "tablaFk" => "perfil_afiliado", "fk" => "id_datos"],
            ["tablaPk" =>"perfil_afiliado","pk" => "id_afiliado", "tablaFk" => "afiliado_especialidades", "fk" => "id_afiliado"],
            ["tablaPk" =>"afiliado_especialidades","pk" => "id_especialidad", "tablaFk" => "especialidades", "fk" => "id_especialidad"]
         ]
      )->Mult_Where([
         [ "atributo"=>"datos_personales.id_user","condicion"=>"=","value"=>2,"operador"=>""],
      ])->first();
      $Data=[
         "corousel"=>$Datos,
         "especialista"=>$DatosListaMedico,
         "especialista"=>$DatosListaMedico,
         "active"=>0
      ];
      // echo "<pre>";
      // echo var_dump($Data);
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




