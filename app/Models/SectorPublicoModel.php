<?php

namespace app\models;
use app\Repository\Model;

class SectorPublicoModel extends Model
{
    protected $Tabla = "sector_publico";
    protected $alias = "as sector_publico";/// alias de la tabla referente al modelo
    protected $primaryKey = "id_sector_publico";
}