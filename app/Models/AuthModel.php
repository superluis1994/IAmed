<?php

namespace app\models;
use app\repository\Model;

class AuthModel extends Model
{
    protected $alias = "as user";/// alias de la tabla referente al modelo
    protected $Tabla = "user";
    protected $primaryKey = "id_user";
}