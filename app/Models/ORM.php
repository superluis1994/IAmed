<?php
namespace app\Model;

use app\setting\Conexion;
class ORM extends Conexion {
    /**METODO PARA CREAR UN INSER A CUALQUIER TABLA  */
    public static function save(string $tabla, array $datos){
        self::$Query = "INSERT INTO $tabla(";
        foreach($datos as $Atributes=>$value){
            self::$Query .="$Atributes, ";
        }
        self::$Query = rtrim(self::$Query,",")."VALUES(";
        foreach($datos as $Atributes=>$value){
            self::$Query .="$Atributes, ";
        }
        self::$Query = rtrim(self::$Query,",");
        try {
            self::$Pps = self::getConexion_()->prepare(self::$Query);
            foreach($datos as $Atributes=>$value){
                self::$Pps->bindValue(":$Atributes",$value);
            }
            return self::$Pps->execute();
        } catch (\Throwable $th) {
           echo $th->getMessage();
        }finally{self::closeConexionBD();}
    }
}