<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;

class HistorialCitasPacienteControllers extends Token{
   private $header;
   public function __construct()
   {

      $this->header = "Panel | Historiale paciente";
      
   }
   public function index(){
    return Utils::viewDasboard('dashboard.historialCitasPaciente',$data=[],$this->header);
    // return Utils::viewDasboard('productos.index');
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