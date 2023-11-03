<?php

//Dit zijn de routing
$routes = [
    "/" => "controllers/index.php",
    "/login" => "controllers/login.php",
    "/register" => "controllers/register.php",
    "/password_reset" => "controllers/password_reset.php",
    "/password_new" => "controllers/password_new.php",
    "/portfolio" => "controllers/portfolio.php",
    "/dashboard" => "controllers/dashboard.php",
    "/404" => "controllers/404.php",
    "/succes" => "controllers/succes.php",
    "/contact" => "controllers/contact.php",
    "/portfolio-person" => "controllers/portfolio-person.php",
    "/addportfolio" => "controllers/addportfolio.php",
];

if (array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    require $routes[$_SERVER['REQUEST_URI']];
} else {
    require 'views/404.view.php';
    // require $routes['/404']; //Routes naar de 404 pagina
}
