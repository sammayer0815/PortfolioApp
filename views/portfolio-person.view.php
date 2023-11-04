<?php
$id = $_GET['id'];

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
                <img src="/public/images/Nilo.png" alt="person image" class="person-img">
            </div>
            <div class="portfolio-person-details">
                <h1>Niloyan Sellathurai</h1>
                <p>Email : hello@niloyansellathurai.dev</p>
                <p>Tel : 0634009522</p>
            </div>
        </section>
        <section class="person-about">
            <h1>Wie ben ik ?</h1>
            <p>Hallo, ik ben Niloyan, een bedreven full stack JavaScript-ontwikkelaar
                met een grote interesse in het ontwerpen van dynamische en boeiende websites. Met een stevige
                basis in webontwikkeling en specialisatie in JavaScript, streef ik ernaar hoogwaardige oplossingen
                te leveren die technische deskundigheid combineren met uitzonderlijke gebruikerservaringen.</p>
        </section>
        <section class="person-skills">
            <h1>Skills</h1>
            <ul>
                <li class="list-items">HTML</li>
                <li class="list-items">CSS</li>
                <li class="list-items">JavaScript</li>
                <li class="list-items">PHP</li>
                <li class="list-items">MySQL</li>
            </ul>
            </div>
        </section>
        <section class="person-hobby">
            <h1>Hobby</h1>
            <ul>
                <li class="list-items">Netflixen</li>
                <li class="list-items">Lezen</li>
                <li class="list-items">Muziek luisteren</li>
                <li class="list-items">Reizen</li>
            </ul>
        </section>
        <section class="portfolio-project-container">
            <h1>Bekijk het werk</h1>
            <div class="portfolio-project">
                <div class="portfolio-project-card">
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
                </div>
                <?php

                $sql = "SELECT * FROM portfolioimages WHERE user_id = :user_id";

                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':user_id', $id, PDO::PARAM_INT);

                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                // var_dump($results);
                
                foreach ($results as $row) {
                    $imgData = $row['Portfolio_img'];
                    $binaryData = base64_decode($imgData);
                    $img = imagecreatefromstring($binaryData);
                    // $filename = $project['project_name'] . "_img";
                    // imagejpeg($img, $filename);
                    // $projectImage = $filename;
                    // imagedestroy($img);
                }

                ?>
            </div>
        </section>
    </main>
    <?php include "partials/footer.php" ?>
</body>

</html>