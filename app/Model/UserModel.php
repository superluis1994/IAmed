<?php
namespace app\Model;
use app\Repository\CrudRepository;

class UserModel extends CrudRepository{

    private int $id_Tabla;
    private string $name_tipo_tabla;
    public function get(){

    }
    public function getByID($id){

    }
   public function create(array $datos)
   {
    
   }
   public function modify(array $datos)
   {
    
   }
   public function delete($id){

   }
}