<?php

session_start();

if (isset($_POST["email"]) && !isset($_SESSION['user_id'])) {

    $email = $_POST['email'];
    $passwordCheck = $_POST['password'];
    
    require_once("../core/conn.php");

    $sql = "SELECT password FROM users WHERE email = :email";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    $result = $stmt->execute();

    //checks if email exists
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $storedPassword = $row['password'];
    
        // Verify the password
        if (password_verify($passwordCheck, $storedPassword)) {
            //If password is correct
            $_SESSION['email'] = $email;
            header('Location: /');
        } else {
            //If the password is wrong
            header("Location: /login");
        }
    } else {
        //If email does not exists
        header("Location: /login");
    }

}else{
    header('Location: /');
}

