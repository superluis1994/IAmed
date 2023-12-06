<?php

namespace app\models;
use app\repository\Model;

class CitasModel extends Model
{
    protected $Tabla = "citas_medicas";
    protected $alias = "as citas_medicas";/// alias de la tabla referente al modelo
    protected $primaryKey = "id_cita";
}