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

// Parse the query parameters from the URL
$uri = strtok($_SERVER['REQUEST_URI'], '?');
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} elseif ($uri === '/portfolio-person') {
    // Handle /portfolio-person route and its query parameters
    // You can access the 'id' parameter using $_GET['id']
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    require 'controllers/portfolio-person.php';
} else {
    require 'views/404.view.php';
}