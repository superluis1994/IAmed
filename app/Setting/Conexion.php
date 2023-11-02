<?php 
namespace app\setting;

use PDO;

class Conexion 
{
    public static string $Query;

    private static $Conector = null;

    public static $Pps = null;
//prueba de pull requests
    // realiza la conexión a la base de datos
    public static function getConexion_()
    {
       try {
        // self::$Conector = new PDO("mysql:host=".$_ENV["DB_HOST"].";dbname=".$_ENV["DB_NAME"]);
        self::$Conector = new PDO(
            "mysql:host=" . $_ENV["DB_HOST"] . ";dbname=" . $_ENV["DB_NAME"],
            $_ENV["DB_USER"],
            $_ENV["DB_PASSWORD"]
        );
        
        
        self::$Conector->exec("set names utf8");
        self::$Conector->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

       } catch (\Throwable $th) {
        echo $th->getMessage();
       }

       return self::$Conector;
    }


    /// liberar recursos

    public static function closeConexionBD()
    {
        if(self::$Conector != null)
        {
            self::$Conector = null;
        }

        if(self::$Pps != null)
        {
            self::$Pps = null;
        }
    }


}