<?php

// j'inclus les dépendances composer
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../app/DBdata.php';
require __DIR__ . '/../app/Controllers/CoreController.php';
require __DIR__ . '/../app/Controllers/MainController.php';

// je crée un nouvel objet AltoRouter pour créer mes routes/urls
$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

// je mappe mes routes
$router->map(
    'GET', 
    '/', 
    [
        'action' => 'home',
        'controller' => 'MainController'
    ],
    'home'
);

$router->map(
    'GET',
    '/liste-types-pokemon/', 
    [
        'action' => 'type',
        'controller' => 'MainController'
    ],
    'types-pokemon'
);

$router->map(
    'GET',
    '/pokemon/[i:id]', 
    [
        'action' => 'detail',
        'controller' => 'MainController'
    ],
    'details-pokemon'
);

$router->map(
    'GET',
    '/types-pokemon/[i:id]', 
    [
        'action' => 'pokemonsByType',
        'controller' => 'MainController'
    ],
    'pokemons-by-type'
);

// Début Dispatcher
$match = $router->match();

//dump($match);


if ($match) {
    
    // On récupére avec altorouteur (le résultat de match()) les données de la route (mappé plus haut)
    $controllerToUse = $match['target']['controller'];
    $methodToUse = $match['target']['action'];

    // php peut utiliser une variable en tant que nom de la méthode
    // $methodToUse est une chaîne de caractères, donc on peut transformer $mainController->$methodToUse() en $mainController->home();
    $controller = new $controllerToUse();
    $controller->$methodToUse($match['params']);

} else {
    // normalement ce serait une 404, car on arrive dans ce bloc de code seulement si on a demandé une page non prévue
    exit('404 Not found');
}

?>


