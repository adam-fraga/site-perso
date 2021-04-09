<?php
require '../vendor/autoload.php';
$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();

require_once 'elements/header.php';
$router->map('GET', '/', function () {
    require __DIR__ . '/../Views/home.php';
});
$router->map('GET', '/contact', function () {
    require __DIR__ . '/../Views/contact.php';
});
$router->map('GET', '/profil', function () {
    require __DIR__ . '/../Views/profil.php';
});
$router->map('GET', '/dashboard', function () {
    require __DIR__ . '/../Views/soon.php';
});
//Voir pour slug Projets
$router->map('GET', '/projets', function () {
    require __DIR__ . '/../Views/projets.php';
});
$match = $router->match();
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
}
//else {
//    // no route was matched
//    require __DIR__ . '/../Views/404.php';
//}
require_once 'elements/footer.php';
