<?php

namespace app\Repository;
 use app\Model\ORM;

 abstract class CrudRepository extends ORM{
    /**METODO PARA LISTAR */
    public abstract function get();
    /** LISTAR POR ID */
    public abstract function getByID($id);
    /**METODO PARA CREAR */
    abstract public function create(array $datos);
    /**METODO PARA MODIFICAR */
    abstract public function modify(array $datos);
    /**METODO PARA ELIMINAR */
    abstract public function delete($id);
 }