<?php

session_start();

if (isset($_POST["username"]) && !isset($_SESSION['user_id'])) {
    $username = $_POST["username"];
    $password_hashed = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = $_POST["email"];

    require_once("../core/conn.php");
    
    $sql = "INSERT INTO users (username, email, password, Created_at) VALUES (:username, :email, :password, NOW())";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password_hashed, PDO::PARAM_STR);

    $result = $stmt->execute();

    if($result){
        $_SESSION['email'] = $email;
        header('Location: ../');
    }else{
        header('LocationL ../404');
    }



} else {
    header("Location: ../register");
}