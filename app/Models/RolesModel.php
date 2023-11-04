<?php

namespace app\models;
use app\repository\Model;

class RolesModel extends Model
{
    protected $Tabla = "roles";
    protected $alias = "as roles";/// alias de la tabla referente al modelo
    protected $primaryKey = "id_rol";
}