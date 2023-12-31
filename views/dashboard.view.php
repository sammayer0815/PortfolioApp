<?php

session_start();

//Checks if user is logged in
if (!isset($_SESSION["email"])){
    header("Location: /");
}

session_write_close();

?>
<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>

<body>
    <div class="grid-container">
        <?php include "partials/header.php" ?>
        <main class="dashboard-page">
            <div class="cta-add-portfolio">
                <a href="addportfolio" class="addPortfolioBtn">Voeg toe+</a>
            </div>
                <div class="dashboard-portfolio">
                    <div class="dashboard-portfolio-view-name">
                        <h4>Geen portfolio gevonden</h4>
                    </div>
                    <div class="dashboard-portfolio-crud">
                        <i>Edit</i>
                        <i>Delete</i>
                    </div>
                </div>
        </main>
        <?php include "partials/footer.php" ?>
   </div>
</body>
</html>