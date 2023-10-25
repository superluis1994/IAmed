<?php
// este se utiliza para cargar todos los css y js las librerias
namespace core;

use core\App;

class Utils
{

    // este se utiliza para los enlaces o redireciones en las view 
    static function url($path =  "")
    {
        $url = App::getPath() . $path;
        $url = preg_replace('#/+#', '/', $url);
        return $url;
    }
    // y este se encarga de cargar las view del sistema
    static function assets($path = "")
    {
        $url = App::getPath() . "/resources/assets/{$path}";
        $url = preg_replace('#/+#', '/', $url);
        return $url;
    }
    // Esta carga la view unicas que no tienen vista internas 
    static function view($path = "", $data = [])
    {
        // instancie la clase aqui para tener acceso a sus clases assets
        $utils = new Utils();
        $url = "./resources/views/";
        $path = str_replace(".", "/", $path);
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        $content = "";
        $content .= require_once  $url . "partials/header.php";
        $content .=  require_once $url . '' . $path . ".php";
        $content .= require_once  $url . "partials/footer.php";
        return $content;
    }
    static function viewStatic($path = "", $data = [])
    {
        // instancie la clase aqui para tener acceso a sus clases assets
        $utils = new Utils();
        $url = "./resources/views/";
        $path = explode('.', $path);
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        $content = "";
        $content .= require_once  $url . $path[0]."/partials/header.php";
        $content .=  require_once $url . '' . $path[0] ."/".$path[1]. ".php";
        $content .= require_once  $url . $path[0]."/partials/footer.php";
        return $content;
    }

    
    // Este cargar la views que tiene vistas internas
    static function viewDasboard($path = "", $data = [])
    {
       // instancie la clase aqui para tener acceso a sus clases assets
        $utils = new Utils();
        $url = "./resources/views/";
        $path = explode('.', $path);
        // $path = str_replace(".","/",$path);
        foreach ($data as $key => $value) {
            $$key = $value;
        }
        $content = "";
        $content .= require_once  $url . "partials/header.php";
        $content .= require_once  $url . "" . $path[0] . "/partes/menu.php";
        $content .= require_once  $url . "" . $path[0] . "/" . $path[1] . ".php";
        $content .= require_once  $url . "" . $path[0] . "/partes/menuF.php";
        $content .= require_once  $url . "partials/footer.php";

        return $content;
    }
}
