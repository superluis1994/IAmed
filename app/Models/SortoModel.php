<?php

namespace app\models;
use app\repository\Model;

class SortoModel extends Model
{
    protected $alias = "as user";/// alias de la tabla referente al modelo
    protected $Tabla = "user";

    protected $primaryKey = "id_user";
}