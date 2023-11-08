<?php 
// namespace app\setting;
// use MongoDB\Client;
// use PDO;

// class Conexion 
// {
//     public static string $Query;

//     private static $Conector = null;

//     public static $Pps = null;

//     private static ?MongoDB\Client $MongoConector = null;
// //prueba de pull requests
//     // realiza la conexión a la base de datos
//     public static function getConexion_()
//     {
//        try {
//         // self::$Conector = new PDO("mysql:host=".$_ENV["DB_HOST"].";dbname=".$_ENV["DB_NAME"]);
//         self::$Conector = new PDO(
//             "mysql:host=" . $_ENV["DB_HOST"] . ";dbname=" . $_ENV["DB_NAME"],
//             $_ENV["DB_USER"],
//             $_ENV["DB_PASSWORD"]
//         );
        
        
//         self::$Conector->exec("set names utf8");
//         self::$Conector->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//        } catch (\Throwable $th) {
//         echo $th->getMessage();
//        }

//        return self::$Conector;
//     }


//     public static function getConexionMongoDB(): ?MongoDB\Client
//     {
//         if (self::$MongoConector === null) {
//             try {
//                 $uri = "mongodb://localhost:27017";
//                 self::$MongoConector = new Client($uri);
//             } catch (\Throwable $th) {
//                 echo $th->getMessage();
//             }
//         }

//         return self::$MongoConector;
//     }


//     /// liberar recursos

//     public static function closeConexionBD()
//     {
//         if(self::$Conector != null)
//         {
//             self::$Conector = null;
//         }

//         if(self::$Pps != null)
//         {
//             self::$Pps = null;
//         }
//     }


// }





namespace app\setting;

use MongoDB\Client;
use PDO;

class Conexion
{
    public static string $Query;

    private static ?Client $MongoConnector = null;

    private static ?PDO $Conector = null;

    public static $Pps = null;


    public static function getConexion_(): ?PDO
    {
        try {
            if (self::$Conector === null) {
                self::$Conector = new PDO(
                    "mysql:host=" . $_ENV["DB_HOST"] . ";dbname=" . $_ENV["DB_NAME"],
                    $_ENV["DB_USER"],
                    $_ENV["DB_PASSWORD"]
                );

                self::$Conector->exec("set names utf8");
                self::$Conector->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            }
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }

        return self::$Conector;
    }

    public static function getMongoConexion()
{
    if (self::$MongoConnector === null) {
        self::$MongoConnector = new Client($_ENV["MONGODB_URI"]);
        
    }

    return self::$MongoConnector;
}


    

    public static function closeConexionBD()
    {
        if (self::$Conector !== null) {
            self::$Conector = null;
        }

        if (self::$Pps !== null) {
            self::$Pps = null;
        }
    }

}


