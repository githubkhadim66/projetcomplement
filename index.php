<?php
    // require_once('database/database.php');
    require_once('database/connexion.php');

    // index.php: preparationdes routes
    include 'routes.php';

    $url = $_SERVER['REQUEST_URI'];
    $path = parse_url($url, PHP_URL_PATH);
    $directory = dirname($path);

    // Vérifier si la méthode est POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $url = 'POST:' . $url; // Ajouter la méthode POST à l'URL
        // print $url;
    }
    $url = strtok($url, '?');


    if (array_key_exists($url, $routes)) {
        $controllerAction = $routes[$url];
        list($controllerName, $methodName) = explode('@', $controllerAction);

        require_once 'Controllers/' . $controllerName . '.php';

        $controller = new $controllerName();
        $controller->$methodName();
    } else {
        // Gérer les routes non trouvées
        echo "<p class='bg-danger bg-opacity-75 card text-center fw-bold w-75 mx-auto'>⛔404 Not Found !</p>";
}
?>