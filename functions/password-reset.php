<?php

if(isset($_POST["email"])){
    $email = $_POST["email"];
    $password_hashed = password_hash($_POST["password"], PASSWORD_DEFAULT);

    require_once("../core/conn.php");
    
    $sql = "UPDATE users SET password = :password, Updated_at = NOW() WHERE email = :email";


    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $password_hashed, PDO::PARAM_STR);

    $result = $stmt->execute();

    if($result){
        $_SESSION['email'] = $email;
        header('Location: ../');
    }else{
        header('LocationL ./404');
    }

}else{
    header("Location ./password_new");
}


