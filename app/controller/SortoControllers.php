<?php
namespace app\controller;
use app\Models\SortoModel;
use app\repository\Model;

class SortoControllers
{
  private Model $ModelCategoria;
  /// inicializar el contructor
 public function __construct()
  {
  

    $this->ModelCategoria = new SortoModel;
  }

  /// método para mostrar las categorias

  public function sorto()
  {
 
   
        /// traer desde la base d edatos las categorias existentes
        $Categorias = $this->ModelCategoria->Query()->all();

        echo json_encode([
            "response"=>$Categorias,
            "status"=>200
        ]);
    
  }
}