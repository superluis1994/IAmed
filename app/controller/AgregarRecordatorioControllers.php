<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;
use app\Models\RecordatoriosModel;
use app\Setting\Encryptar;

class AgregarRecordatorioControllers extends Token{
   private RecordatoriosModel $RecordatoriosModel;
   private Encryptar $Encrypto;
   private $header;
   public function __construct()
   {
      $this->RecordatoriosModel = new RecordatoriosModel;
      $this->Encrypto = new Encryptar($_ENV["JWT_SECRET_KEY"]);
      // Utils::tituloPagina("Panel | Nuevo Recordatorio");
      $this->header = "Panel | Nuevo Recordatorio";
      
   }
   public function index(){
    
    return Utils::viewDasboard('dashboard.agregarRecordatorio',$data=[],$this->header);
    // return Utils::viewDasboard('productos.index');
 }
   /** INSERTAMOS LOS DATOS DE RECORDATORIO */
    public function add()
    {
       $arrayDatos=[
          "titulo"=>$_POST["titulo"],
          "descripcion"=>$_POST["descripcion"],
         ];
         
         foreach ($arrayDatos as $key => $value) {
            $arrayDatos[$key] =trim(rtrim(preg_replace("/[^a-zA-Z0-9@# _-]/", "",$value)));
         }
         $fechaHora = explode(" ", $_POST["fechaHora"]);
         $retVal = (isset($_POST["recordarme"])) ? $_POST["recordarme"] : "off" ;
         $arrayDatos["recordarme"]=$retVal;
         $arrayDatos["fecha"]= $fechaHora[0];
         $arrayDatos["hora"]= $fechaHora[1];
         $arrayDatos["completado"]=1;
         $arrayDatos["id_user"]=intval($this->Encrypto->decryptItem($_SESSION['datosUser']['id']));
         
    $Insert = $this->RecordatoriosModel->Insert($arrayDatos);

    
    if($Insert==1){
       $response = [
          'status' => 'success',
          'titulo' => 'Exito',
          'msg' => 'Recordatorio agregado',
          'data' => [
             "retornar"=>Utils::url('/dashboard/recordatorios/agregar'),
             'datos' => $Insert
          ],
       ];
   }else{
      $response = [
         'status' => 'error',
         'titulo' => 'Fallo inesperado',
         'msg' => 'Recordatorio agregado',
         'data' => [
            "retornar"=>"",
            'datos' =>""
         ],
      ];
   }
  
      echo json_encode($response);
      return false;
    }
   /**SE ENCARGA DE CARGAR LOS MENSAJES */
    public function loadMsg()
    {

    }
    /**SE ENCARGA DE GESTIONAR CONSULTAS CON IA Y ALMACENARLAS */
    public function questionMsg()
    {
        
    }
}