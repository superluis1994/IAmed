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


      $response = [
         'status' => 'success',
         'titulo' => 'Exito',
         'msg' => 'Recordatorio agregado',
         'data' => [
            'url' => Utils::url('dashboard/recordatorios/agregar')
         ],
      ];

      // $response = [
      //    'status' => 'error',
      //    'titulo' => 'Error',
      //    'msg' => 'Datos Incorrectos',
      //    'data' => [
      //       'url' => Utils::url('dashboard/recordatorios/agregar')
      //    ],
      // ];
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