<?php


foreach ($_POST as $key => $value) {
    echo "$key: $value<br>";
}

foreach ($_POST['skills'] as $value) {
    echo "Value: $value<br>";
}

session_start();

if (isset($_POST["bericht"]) && isset($_SESSION['email'])) {

}else{
    header('Location: /');
}


?>


