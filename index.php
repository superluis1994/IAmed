<?php
spl_autoload_register(function ($class) {
    // Cargar la clase desde el directorio `core/`
    // echo $class."<br>";
    if (file_exists($class. '.php')) {
        require_once $class . '.php';
    }
    
    // Cargar la clase desde el directorio `app/Controller/`
    if (file_exists('app/Controller/' . $class. '.php')) {
        require_once 'app/Controller/' . $class . '.php';
    }
    // echo $class."<br>";
});


require_once('vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
// Importación de clases
use core\Request;
use core\Route;
use core\App;
// use core\Utils;
// use app\controller\MainControllers;

// Instanciación de clases
$request = new Request();
$route = new Route();
$app = new App();
// $utils = new Utils();
// $contro = new MainControllers();
// $mainController= new MainController();
include_once('routes/web.php');
include_once('routes/dashboard.php');
// include_once('core/Resources.php');

// MainController::show(1);
// Código de la aplicación
App::assets($request->getPublicUrl());
// echo App::getPath()." ";
$routes = Route::getRoutes();
// echo "<pre>";
// var_dump($routes);
// echo "</pre>";
$url = $request->getUrl();
//  echo $url;
$request ->validate($routes, $url);


