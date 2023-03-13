<?php

declare (strict_types=1);

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = array(
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
);

/**
 * Router function
 *
 * @param string $uri
 * @param array $routes
 * @return void
 */
function routeToController(string $uri, array $routes) :void{
    if(array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}

routeToController($uri, $routes);