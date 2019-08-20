<?php

// Inclusion des autolaod de Composer
include __DIR__.'/../vendor/autoload.php';

// Inclusion de DBData
require __DIR__.'/../app/Utils/DBdata.php';

// Inclusion des class de Model
require __DIR__.'/../app/Model/Pokemon.php';
require __DIR__.'/../app/Model/Types.php';

// Inclusion des Controllers
include __DIR__.'/../app/Controllers/CoreController.php';
include __DIR__.'/../app/Controllers/MainController.php';
include __DIR__.'/../app/Controllers/TypeController.php';
include __DIR__.'/../app/Controllers/DetailController.php';

// Création de la class AltoRouter
$router = new AltoRouter();

// Route de base pour la génération des routes
$router->setBasePath($_SERVER['BASE_URI']); // route => "/revision2/S05-atelier-revisions-pokedex/public"

// Mapping des routes
$router->map('GET', '/', 'MainController#home', 'home');
$router->map('GET', '/types', 'TypeController#types', 'types'); // vers tous les types de pokemons
$router->map('GET', '/types/[i:id]', 'TypeController#oneType', 'type'); // vers un type de pokemon
$router->map('GET', '/detail/[i:id]', 'DetailController#detail', 'detail'); // vers le detail d'un pokemon

// Vérification du match des routes
// Si match est OK, on exécute le bon controller
// Sinon, on renvoie une 404

$matchRouter = $router->match();


if($matchRouter) {

    // Récupération de la valeur 'MainController#home' qu'on sépare en tableau
    $infosRoute = explode('#', $matchRouter['target']);
    
    $controllerName = $infosRoute[0];
    $methodName = $infosRoute[1];

    // On instancie la class du controller
    $controller = new $controllerName($router);

    // On exécute la méthode du controller
    $controller->$methodName($matchRouter['params']);

} else {
    // 404
    http_response_code(404);
    $controller = new MainController($router);
    $controller->error404();
}