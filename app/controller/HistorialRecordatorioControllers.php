<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Models\RecordatoriosModel;
use app\Setting\Encryptar;
use app\Setting\Token;

class HistorialRecordatorioControllers extends Token{
   private RecordatoriosModel $RecordatoriosModel;
   private Encryptar $Encrypto;
   private $header;
   public function __construct()
   {
      $this->RecordatoriosModel = new RecordatoriosModel;
      $this->Encrypto = new Encryptar($_ENV["JWT_SECRET_KEY"]);
      $this->header = "Panel | Historial Recordatorios";
      
   }
   public function index(){
    return Utils::viewDasboard('dashboard.historialRecordatorio',$data=[],$this->header);
    // return Utils::viewDasboard('productos.index');
   }
   /**SE ENCARGA DE CARGAR LOS MENSAJES */
    public function load()
    {      
       $Consultas = $this->RecordatoriosModel->Query()->Mult_Where([
                  ["atributo"=>"recordatorios.id_user","value"=>$this->Encrypto->decryptItem($_SESSION['datosUser']['id']),"condicion"=>"=","operador"=>""]
                  ])->first();
                  
                  $Data=[
                     "Recordatorios"=>$Consultas
                  ];
                  //  echo "<pre>";
                  //  var_dump($Consultas);
                  //  echo "</pre>";
                  return Utils::viewDasboard('dashboard.historialRecordatorio',$Data,$this->header);

    }
    /**SE ENCARGA DE GESTIONAR CONSULTAS CON IA Y ALMACENARLAS */
    public function questionMsg()
    {
        
    }
}