<?php

namespace app\models;
use app\Repository\Model;

class RolesModel extends Model
{
    protected $Tabla = "roles";
    protected $alias = "as roles";/// alias de la tabla referente al modelo
    protected $primaryKey = "id_rol";
}