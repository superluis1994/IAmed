<?php

namespace app\models;
use app\Repository\Model;

class RecordatoriosModel extends Model
{
    protected $Tabla = "recordatorios";
    protected $alias = "as recordatorios";/// alias de la tabla referente al modelo
    protected $primaryKey = "id_recordatorio";
}