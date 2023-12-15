<?php

namespace app\models;
use app\Repository\Model;

class DatosPersonalesModel extends Model
{
    protected $Tabla = "datos_personales";
    protected $alias = "as datos_personales";/// alias de la tabla referente al modelo
    protected $primaryKey = "id_datos";
}