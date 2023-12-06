<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;

class SectorPrivadoControllers extends Token{
    private $header;
   public function __construct()
   {

    $this->header = "Panel|SectorPrivado";
      
   }
   /**SE ENCARGA DE MOSTRAR LOS MEDICOS PRIVADOS */
   public function index()
   {
    // $alerta="<script> Swal.fire('SweetAlert2 is working!')</script>";
    $alerta="";
    return Utils::viewDasboard('dashboard.sectorPrivado',$data=[],$this->header);
   }
   /**SE ENCARGA DE MOSTRAR LOS MEDICOS PRIVADOS */
    public function loadPrDoctores()
    {

    }
    /**SE ENCARGA DE MOSTRAR LAS INSTITUCINES PRIVADAS */
    public function loadInstituciones()
    {
        
    }
}