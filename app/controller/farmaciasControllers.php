<?php
namespace app\controller;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;

class farmaciasControllers extends Token{
    private $header;
   public function __construct()
   {

    $this->header = "Panel|Farmacias";
      
   }
   /**SE ENCARGA DE MOSTRAR LOS MEDICOS PRIVADOS */
   public function index()
   {
    // $alerta="<script> Swal.fire('SweetAlert2 is working!')</script>";
    $alerta="";
    return Utils::viewDasboard('dashboard.farmacias',$data=[],$this->header);
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