<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;
use app\Models\CitasModel;
use app\Setting\Encryptar;

class SeguimientoCitaControllers extends Token{
   private CitasModel $CitasModel;
   private Encryptar $Encrypto;
   private $header;
   public function __construct()
   {
      $this->CitasModel = new CitasModel;
      $this->Encrypto = new Encryptar($_ENV["JWT_SECRET_KEY"]);
      $this->header = "Panel | Seguimiento Cita";
      
   }
   public function index(){
    return Utils::viewDasboard('dashboard.seguimientoCita',$data=[],$this->header);
    // return Utils::viewDasboard('productos.index');
   }
   /**SE ENCARGA DE CARGAR LOS SEGUIMIENTOS DE LAS CITAS */
    public function load()
    { 
       
       // echo $id=$this->Encrypto->encryptItem(3);
       // echo $f=$this->Encrypto->decryptItem($_SESSION['datosUser']['id']);
       $Consultas = $this->CitasModel->QueryEspefico(["sesiones.id_user"," sesiones.id_afiliado","datos_personales.nombres as nombre",
                                                      "datos_personales.apellidos as apellido","datos_personales.telefono as cel","citas_medicas.notas",
                                                      "citas_medicas.fecha_hora as tiempo","citas_medicas.status"])->MultJoin([
          ["tablaFk"=>"sesiones","fk"=>"id_sesion","tablaPk"=>"citas_medicas","pk"=>"id_sesion" ],
          ["tablaFk"=>"user","fk"=>"id_user","tablaPk"=>"sesiones","pk"=>"id_user" ],
          ["tablaFk"=>"datos_personales","fk"=>"id_user","tablaPk"=>"user","pk"=>"id_user" ]
          ])->Mult_Where([
             ["atributo"=>"sesiones.id_afiliado","value"=>$this->Encrypto->decryptItem($_SESSION['datosUser']['id']),"condicion"=>"=","operador"=>""]
             ])->first();

             $Data=[
               "consultas"=>$Consultas
             ];
            //  echo "<pre>";
            //  var_dump($Data);
            //  echo "</pre>";
             return Utils::viewDasboard('dashboard.seguimientoCita',$Data,$this->header);
    }
    /**SE ENCARGA DE GESTIONAR CONSULTAS CON IA Y ALMACENARLAS */
    public function questionMsg()
    {
        
    }
}