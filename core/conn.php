<?php

$hostname = "localhost";
$dbname = "portfolioapp";
$username = "root";
$password = "";
try {
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}


?>