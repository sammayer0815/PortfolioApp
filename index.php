<?php

//Dit zijn de routing
$routes = [
    "/" => "controllers/index.php",
    "/login" => "controllers/login.php",
    "/register" => "controllers/register.php",
    "/password_reset" => "controllers/password_reset.php",
    "/portfolio" => "controllers/portfolio.php",
    "/dashboard" => "controllers/dashboard.php",
    "/404" => "controllers/404.php",

];

if(array_key_exists($_SERVER['REQUEST_URI'], $routes)) {
    require $routes[$_SERVER['REQUEST_URI']];
} else {
    require $routes['404']; //Routes naar de 404 pagina
}

?>
