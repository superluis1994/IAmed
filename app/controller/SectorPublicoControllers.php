<?php
namespace app\controller;

use app\models\SectorPublicoModel as ModelsSectorPublicoModel;
use core\Utils;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use app\Setting\Token;
use app\Repository\Model;
use app\Models\SectorPublicoModel;

class SectorPublicoControllers extends Token{
  private SectorPublicoModel $sectorPublico; 
  private $header;
   public function __construct()
   {
    
    $this->header = "Panel | SectorPublico";
     $this->sectorPublico = new SectorPublicoModel();   
   }
   /**SE ENCARGA DE MOSTRAR LOS HOSPITALES PUBLICOS */
   public function index()
   {
    @$Data = $this->sectorPublico->QueryEspefico(["sector_publico.nombre","pais.nombre","estados.nombre","ciudad.nombre","direccion"])->MultJoin(
        [
            [
                "tablaPk" => "sector_publico",
                "pk" => "id_pais",
                "tablaFk" => "pais",
                "fk" => "codigo_pais"
            ],
            [
                "tablaPk" => "sector_publico",
                "pk" => "id_estado",
                "tablaFk" => "estados",
                "fk" => "codigo_estado"
            ],
            [
                "tablaPk" => "sector_publico",
                "pk" => "id_ciudad",
                "tablaFk" => "ciudad",
                "fk" => "codigo_ciudad"
            ] 
               
        ])->Mult_Where([["atributo"=>"id_status", "condicion"=>"=","value"=>1,"operador"=>""]])->first();
           // solo falta mostrar los datos
    $alerta="";
    return Utils::viewDasboard('dashboard.sectorPublico',$data=[],$this->header);
   }
   /**SE ENCARGA DE MOSTRAR LOS MEDICOS PUBLICOS */
    public function loadPrDoctores()
    {

    }
    /**SE ENCARGA DE MOSTRAR LAS INSTITUCINES PUBLICAS */
    public function loadInstituciones()
    {
        
    }
}