<?php

namespace app\models;
use app\repository\Model;

class especialidadesModel extends Model
{
    protected $Tabla = "especialidades";
    protected $alias = "as especialidad";/// alias de la tabla referente al modelo
    protected $primaryKey = "id_especialidad";
}