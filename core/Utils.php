<?php
// este se utiliza para cargar todos los css y js las librerias
namespace core;
class Utils{

   static function assets($path = ""){
        $url = App::getPath()."/resources/assets/{$path}";
        $url = preg_replace('#/+#', '/',$url);
        return $url;
    }
    // este se utiliza para los enlaces o redireciones en las view 
   static function url($path =  ""){
        $url = App::getPath().$path;
        $url = preg_replace('#/+#', '/',$url);
        return $url;
    }
    // y este se encarga de cargar las view del sistema
//    static function view($path = "",$data=[]){
//         $url = "./resources/views/";
//         $path = str_replace(".","/",$path);
//         foreach ($data as $key => $value) {
//             $$key = $value;
//         }
//         return require_once  $url."partials/header.php";
//         require_once $url.$path.".php";
//         require_once  $url."partials/footer.php";
//     }
static function view($path = "",$data=[]){
    $url = "./resources/views/";
    $path = str_replace(".","/",$path);
    foreach ($data as $key => $value) {
        $$key = $value;
    }
    $content = "";
    $content .= require_once  $url."partials/header.php";
    $content .= require_once $url.$path.".php";;
    $content .= require_once  $url."partials/footer.php";

    return $content;
}



    
}