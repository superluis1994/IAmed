<?php

namespace app\models;
use app\Repository\Model;

class UserModel extends Model
{
    protected $Tabla = "user";
    protected $alias = "as user";/// alias de la tabla referente al modelo
    protected $primaryKey = "id_user";
}