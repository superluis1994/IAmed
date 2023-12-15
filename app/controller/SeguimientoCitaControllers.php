<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;
use app\Models\CitasModel;
use app\Setting\Encryptar;
use app\Models\UserModel;

class SeguimientoCitaControllers extends Token{
   private UserModel $userModel;
   private CitasModel $CitasModel;
   private Encryptar $Encrypto;
   private $header;
   public function __construct()
   {
      $this->CitasModel = new CitasModel;
      $this->userModel = new UserModel;
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
       
       $Consultas = $this->CitasModel->QueryEspefico(["sesiones.id_user as id_user"," sesiones.id_afiliado","datos_personales.nombres as nombre",
       "datos_personales.apellidos as apellido","datos_personales.telefono as cel","citas_medicas.notas as nota",
                                                      "citas_medicas.fecha_hora as tiempo","citas_medicas.status"])->MultJoin([
                                                         ["tablaFk"=>"sesiones","fk"=>"id_sesion","tablaPk"=>"citas_medicas","pk"=>"id_sesion" ],
                                                         ["tablaFk"=>"user","fk"=>"id_user","tablaPk"=>"sesiones","pk"=>"id_user" ],
          ["tablaFk"=>"datos_personales","fk"=>"id_user","tablaPk"=>"user","pk"=>"id_user" ]
          ])->Mult_Where([
             ["atributo"=>"sesiones.id_afiliado","value"=>$this->Encrypto->decryptItem($_SESSION['datosUser']['id']),"condicion"=>"=","operador"=>""]
             ])->first();
             $Consultas[0]["id_user"]=$this->Encrypto->encryptItem($Consultas[0]["id_user"]);
             $Consultas[0]["url"]="dashboard/cita/seguimiento/DatosPaciente";
             //  echo var_dump($Consultas);
            $Data=[
               "consultas"=>$Consultas
             ];
             return Utils::viewDasboard('dashboard.seguimientoCita',$Data,$this->header);
    }
    /**OBTENER INFORMACION DEL PACIENTE */
    public function DatosPaciente($id)
    {

     $Data = $this->userModel->QueryEspefico(["user.username as user","datos_personales.nombres as nombre","datos_personales.apellidos as apellidos",
     "CONCAT(pais.nombre,' / ',estados.nombre,' / ',ciudad.nombre,' / ',datos_personales.direccion) as ubicacion",
     "datos_personales.documento_de_identidad as Dui","sexos.nombre as sexo"])->MultJoin([
      ["tablaFk"=>"datos_personales","fk"=>"id_user","tablaPk"=>"user","pk"=>"id_user" ],
      ["tablaFk"=>"pais","fk"=>"codigo_pais","tablaPk"=>"datos_personales","pk"=>"pais" ],
      ["tablaFk"=>"estados","fk"=>"codigo_estado","tablaPk"=>"datos_personales","pk"=>"estado" ],
      ["tablaFk"=>"ciudad","fk"=>"codigo_ciudad","tablaPk"=>"datos_personales","pk"=>"ciudad" ],
      ["tablaFk"=>"sexos","fk"=>"id_sex","tablaPk"=>"datos_personales","pk"=>"sexo" ]
     ])->Mult_Where([
      ["atributo"=>"user.id_user","value"=>$this->Encrypto->decryptItem($id),"condicion"=>"=","operador"=>""]
     ])->first();
      $response = [
         'status' => 'success',
         'titulo' => 'Exito',
         'msg' => 'Recordatorio agregado',
         'data' => [
            'datos' => $Data
         ],
      ];
      echo json_encode($response);
      return false;
    }
    /**SE ENCARGA DE GESTIONAR CONSULTAS CON IA Y ALMACENARLAS */
    public function questionMsg()
    {
        
    }
}