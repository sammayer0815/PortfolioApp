<?php


// foreach ($_POST as $key => $value) {
//     echo "$key: $value<br>";
// }

// foreach ($_POST['workImage'] as $value) {
//     echo "Value: $value<br>";
// }

// foreach ($_POST['hobby'] as $value) {
//     echo "Value: $value<br>";
// }

session_start();

if (isset($_POST["bericht"]) && isset($_SESSION['email'])) {
    $about = $_POST['bericht'];
    $githubURL = $_POST['githuburl'];
    $linkedInURL = $_POST['linkedinUrl'];

    $skills = isset($_POST['skills']) ? $_POST['skills'] : array();
    $hobbies = isset($_POST['hobby']) ? $_POST['hobby'] : array();

    $user_email = $_SESSION['email'];

    require_once '../core/conn.php';

    $sql = "SELECT id FROM users WHERE email = :user_email";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':user_email', $user_email, PDO::PARAM_STR);

    if ($stmt->execute()) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_id = $row['id'];
    } else {
        header("Location: /addportfolioapp");
    }

    $tmp_file = $_FILES['profileImage']['tmp_name'];
    $new_filename_profile = $user_id . ".png";
    $taget_file = '../uploadedImages/' . $new_filename_profile;

    copy($tmp_file, $taget_file);

    $sql_delete = "DELETE FROM portfolioimages WHERE user_id = :user_id";
    $stmt_delete = $conn->prepare($sql_delete);
    $stmt_delete->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $result_delete = $stmt_delete->execute();

    foreach($_FILES['workImage']['tmp_name'] as $key => $name){
        $imageData = file_get_contents($_FILES['workImage']['tmp_name'][$key]);
        $imageData = base64_encode($imageData);
        

        $sql = "INSERT INTO portfolioimages (user_ID, portfolio_img) VALUES (:user_id, :imageData)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':imageData', $imageData, PDO::PARAM_STR);
        $result = $stmt->execute();
        if (!$result) {
            header("Location: /addportfolioapp");
        }
    }


    // Insert the user's data into the main table
    $sql = "UPDATE users SET about = :about, githuburl = :github_url, linkedinurl = :linkedin_url WHERE id = :user_id";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':about', $about, PDO::PARAM_STR);
    $stmt->bindParam(':github_url', $githubURL, PDO::PARAM_STR);
    $stmt->bindParam(':linkedin_url', $linkedInURL, PDO::PARAM_STR);
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

    $result = $stmt->execute();
    if (!$result) {
        header("Location: /addportfolioapp");
    }

    $sql_delete = "DELETE FROM skills WHERE user_id = :user_id";
    $stmt_delete = $conn->prepare($sql_delete);
    $stmt_delete->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $result_delete = $stmt_delete->execute();

    foreach ($skills as $skill) {
        $sql = "INSERT INTO skills (user_id, skill) VALUES (:user_id, :skill)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':skill', $skill, PDO::PARAM_STR);
        $result = $stmt->execute();
        if (!$result) {
            header("Location: /addportfolioapp");
        }
    }

    $sql_delete = "DELETE FROM hobbies WHERE user_id = :user_id";
    $stmt_delete = $conn->prepare($sql_delete);
    $stmt_delete->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $result_delete = $stmt_delete->execute();

    foreach ($hobbies as $hobby) {
        $sql = "INSERT INTO hobbies (user_ID, hobby) VALUES (:user_id, :hobby)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':hobby', $hobby, PDO::PARAM_STR);
        $result = $stmt->execute();
        if (!$result) {
            header("Location: /addportfolioapp");
        }
    }

    // header("Location: /portfolio-person");
} else {
    header('Location: /');
}


?>