<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>

<body>
    <?php include "partials/header.php" ?>
    <div class="grid-container">

        <main>
            <div class="hero--container">
                <section class="hero">
                    <div class="hero-text">
                        <h1>Welkom bij <br>RocketDev</h1>
                        <p>Wij zijn verheugd je te verwelkomen in onze creatieve digitale ruimte,
                            waar we trots zijn op de uiteenlopende prestaties van getalenteerde individuen.<br>
                            Dit portfolio is een viering van diversiteit en expertise.
                        </p>

                    </div>
                    <div class="hero-image">
                        <img src="/public/images/rocket-hero.jpg" alt="rocket image" class="hero-img">
                    </div>
                </section>
            </div>
            <section class="portfolio-cards--container">
                <h1>Bekijk portfolio</h1>
                    <?php++
                    require_once("./core/conn.php");

                    $sql = "SELECT id, username FROM users WHERE about IS NOT NULL";

                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo '  <div class="portofolio-card">
                                    <img src="/uploadedImages/' . $row['id'] .'.png" alt="foto persoon" class="profile-photo">
                                    <h2>' . $row['username'] . '</h2>
                                    <a href="/portfolio-person?id='. $row['id'] .'" class="cta-profileview">Bekijk</a>
                                </div>';
                    }
                    ?>
                </div>
            </section>
            <section class="hero-register">
                <div class="hero-register-image">
                    <img src="/public/images/register-image.jpg" alt="sollicitatie foto" class="hero-register-img">
                </div>
                <div class="hero-register-text">
                    <h1>Registreer nu</h1>
                    <p>Niet alleen dient je portfolio als showcase van jouw creatieve en professionele competenties, het fungeert tevens als tastbaar bewijs van jouw ervaring en toewijding.</p>
                    <a href="/register" class="cta-hero-register">Registreer nu</a>
                </div>
            </section>
        </main>
        <?php include "partials/footer.php" ?>
    </div>

</body>

</html>