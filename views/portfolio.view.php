<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>

<body>
    <div class="grid-container">
        <?php include "partials/header.php" ?>
        <main>
            <section class="portfolio-cards--container">
                <h1>Bekijk portfolio</h1>
                <div class="portfolio-cards">
                    <div class="portofolio-card">
                        <img src="/public/images/Nilo.png" alt="foto persoon" class="profile-photo">
                        <h2>Niloyan Sellathurai</h2>
                        <a href="/profileview" class="cta-profileview">Bekijk</a>
                    </div>
                    <div class="portofolio-card">
                        <img src="/public/images/sam.png" alt="foto persoon" class="profile-photo">
                        <h2>Sam Maijer </h2>
                        <a href="/profileview" class="cta-profileview">Bekijk</a>
                    </div>
                    <div class="portofolio-card">
                        <img src="/public/images/Fouad.png" alt="foto persoon" class="profile-photo">
                        <h2>Fouad Taissate</h2>
                        <a href="/profileview" class="cta-profileview">Bekijk</a>
                    </div>
                    <?php

                    require_once("./core/conn.php");

                    $sql = "SELECT id, username FROM users WHERE about IS NOT NULL";

                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '  <div class="portofolio-card">
                                    <img src="/uploadedImages/' . $row['id'] .'.png" alt="foto persoon" class="profile-photo">
                                    <h2>' . $row['username'] . '</h2>
                                    <a href="/portfolio-persoon?id='. $row['id'] .'" class="cta-profileview">Bekijk</a>
                                </div>';
                    }

                    ?>
                </div>
            </section>


        </main>
        <?php include "partials/footer.php" ?>
</body>

</html>