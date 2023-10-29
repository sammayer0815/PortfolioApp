<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>

<body>
    <div class="grid-container">
        <?php include "partials/header.php" ?>
        <main>
            <div class="hero--container">
                <section class="hero">
                    <div class="hero-text">
                        <h1>Welkom bij <br>RocketDev</h1>
                        <p>Wij zijn verheugd je te verwelkomen in onze creatieve digitale ruimte, 
                            waar we trots zijn op de uiteenlopende prestaties van getalenteerde individuen.<br> 
                            Dit portfolio is een viering van diversiteit en expertise.
                        </p>
                        <img width="100" height="100" src="/public/images/scroll-down.png" alt="mouse" />
                    </div>
                    <div class="hero-image">
                        <img src="/public/images/rocket-hero.jpg" alt="rocket image" class="hero-img">
                    </div>
                </section>
            </div>
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