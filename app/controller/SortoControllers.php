<?php
namespace app\controller;
use app\Models\SortoModel;
use app\repository\Model;

class SortoControllers
{
  private Model $ModelUser;
  /// inicializar el contructor
 public function __construct()
  {
    $this->ModelUser = new SortoModel;
  }

  /// método para mostrar las categorias

  public function sorto()
  {
 
   
        /// traer desde la base d edatos las categorias existentes
        $Categorias = $this->ModelUser->Query();

        echo json_encode([
            "response"=>$Categorias,
            "status"=>200
        ]);
    
  }
}