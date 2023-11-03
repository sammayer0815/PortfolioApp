<?php

// session_start();

// //Checks if user is logged in
// if (!isset($_SESSION["email"])){
//     header("Location: /");
// }

?>
<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>

<body>
    <div class="grid-container">
        <?php include "partials/header.php" ?>
        <main class="addportfolio-page">
            <form action="#" method="#">
                <div class="addportfolio-container">
                    <div class="addportfolio-form-inputs box1">
                        <div class="form-input">
                        <h2>Persoonlijke informatie</h2>
                            <label for="Name">Naam</label>
                            <input type="text" name="Name" id="name" required><br>
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" required><br>
                            <label for="telephone">Telefoon</label>
                            <input type="text" name="telephone" id="telephone" required><br>
                    </div>
                    </div>
                    <div class="addportfolio-form-inputs box1">
                        <h2>Vertel hier iets over jezelf</h2>
                        <div class="form-input">
                            <textarea name="bericht" id="bericht" required></textarea>
                        </div>
                    </div>
                    <div class="addportfolio-form-inputs box1">
                        <h3>Upload hier een screenshot van jouw werk</h3>
                        <input type="file" id="files" name="files" multiple><br><br>
                        <h3>Upload hier een foto van jouw</h3>
                        <input type="file" id="files" name="files"><br>
                    </div>
                    <div class="addportfolio-form-inputs">
                        <h3>Geef hier aan welke skills je hebt</h3>
                        <input type="text" name="skills" id="skills1" placeholder="HTML" required><br>
                        <input type="text" name="skills" id="skills2"><br>
                        <input type="text" name="skills" id="skills3"><br>
                        <input type="text" name="skills" id="skills4"><br>  
                    </div>
                    <div class="addportfolio-form-inputs">
                        <h3>Geef hier je hobby's aan</h3>
                        <input type="text" name="hobby" id="hobby1" placeholder="Voetballen" required><br>
                        <input type="text" name="hobby" id="hobby2" ><br>
                        <input type="text" name="hobby" id="hobby3" ><br>
                        <input type="text" name="hobby" id="hobby4" ><br>  
                    </div>
                    <div class="addportfolio-form-inputs">
                        <h2>Bekijk meer over mij</h2>
                            <label for="linkedinUrl">Linkedin Url</label>
                            <input type="text" name="linkedinUrl" id="linkedinUrl" placeholder="https://github.com/NiloyanSellathurai02"><br>
                            <label for="githuburl">Github Url</label>
                            <input type="text" name="githuburl" id="githuburl" placeholder="https://www.linkedin.com/in/niloyan-sellathurai-019b8b170/"><br>
                    </div>
                </div>
                <div class="submitbutton-addportfolio">
                    <input type="submit" value="Toevoegen">
                </div>
            </form>
        </main>
        <?php include "partials/footer.php" ?>
   </div>
</body>
</html>