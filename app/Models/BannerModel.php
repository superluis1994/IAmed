<?php

namespace app\models;
use app\repository\Model;

class BannerModel extends Model
{
    protected $Tabla = "bannerspublicitario";
    protected $alias = "as bannerspublicitario";/// alias de la tabla referente al modelo
    protected $primaryKey = "id_banner";
}