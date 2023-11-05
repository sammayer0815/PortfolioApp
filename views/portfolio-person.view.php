<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else {
    header('Location: ./portfolio');
}

require_once("./core/conn.php");

$sql = "SELECT username, email, linkedInURL, githubURL, about FROM users WHERE id = :user_id;
        SELECT * FROM skills WHERE user_id = :user_id;
        SELECT * FROM hobbies WHERE user_id = :user_id;
        ";  
$stmt = $conn->prepare($sql);
$stmt->bindParam(':user_id', $id, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt->nextRowset();

$skills = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt->nextRowset();

$hobbies = $stmt->fetchAll(PDO::FETCH_ASSOC);


if ($result) {
    $user_name = $result['username'];
    $email = $result['email'];
    $linkedInURL = $result['linkedInURL'];
    $githubURL = $result['githubURL'];
    $about = $result['about'];
} else {
    echo "User not found.";
}


require_once './core/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>

<body>
    <?php include "partials/header.php" ?>
    <main class="person-view-container">
        <section class="portfolio-person">
            <div class="portfolio-person-image">
                <img src="/uploadedImages/<?php echo $id;?>.png" alt="person image" class="person-img">
            </div>
            <div class="portfolio-person-details">
                <h1><?php echo $user_name ?></h1>
                <p>Email : <?php echo $email ?></p>
            </div>
        </section>
        <section class="person-about">
            <h1>Wie ben ik ?</h1>
            <p><?php echo $about ?></p>
        </section>
        <section class="person-skills">
            <h1>Skills</h1>
            <ul>
                <?php
                foreach ($skills as $skill) {
                    echo '<li class="list-items">' . $skill['skill'] . '</li>';
                }
                ?>
            </ul>
            </div>
        </section>
        <section class="person-hobby">
            <h1>Hobby</h1>
            <ul>
            <?php
                foreach ($hobbies as $hobby) {
                    echo '<li class="list-items">' . $hobby['hobby'] . '</li>';
                }
                ?>
            </ul>
        </section>
        <section class="portfolio-project-container">
            <h1>Bekijk het werk</h1>
            <div class="portfolio-project">
                <!-- <div class="portfolio-project-card">
                    <img src="/public/images/Projecten-1.png" class="portfolio-project-img">
                    <h3>FinanceBook</h3>
                    <p>Auteur : Niloyan Sellathurai</p>
                </div>

                <div class="portfolio-project-card">
                    <img src="/public/images/Projecten-2.png" class="portfolio-project-img">
                    <h3>Hart van India</h3>
                    <p>Auteur : Niloyan Sellathurai</p>
                </div>

                <div class="portfolio-project-card">
                    <img src="/public/images/Projecten-1.png" class="portfolio-project-img">
                    <h3>FinanceBook</h3>
                    <p>Auteur : Niloyan Sellathurai</p>
                </div> -->
                <?php

                $sql = "SELECT * FROM portfolioimages WHERE user_id = :user_id";

                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':user_id', $id, PDO::PARAM_INT);

                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                $counter = 1;

                foreach ($results as $row) {
                    $imgData = $row['Portfolio_img'];
                    $binaryData = base64_decode($imgData);
                    $img = imagecreatefromstring($binaryData);
                    $filename = $counter . "_img.jpg";
                    imagejpeg($img, $filename);
                    $projectImage = $filename;
                    imagedestroy($img);
                    echo '
                    <div class="portfolio-project-card">
                        <img src="' . $projectImage . '" class="portfolio-project-img">
                        <p>Auteur : ' . $user_name . ' </p>
                    </div>
                    ';

                    $counter++; 
                }

                ?>
            </div>
        </section>
    </main>
    <?php include "partials/footer.php" ?>
</body>

</html>