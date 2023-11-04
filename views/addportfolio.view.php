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
<script src='./public/js/addInputField.js'></script>

<body>
    <div class="grid-container">
        <?php include "partials/header.php" ?>
        <main class="addportfolio-page">
            <form action="./functions/update-profile.php" method="post" enctype="multipart/form-data">>
                <div class="addportfolio-container">    
                    <div class="addportfolio-form-inputs box1">
                        <h2>Vertel hier iets over jezelf</h2>
                        <div class="form-input">
                            <textarea name="bericht" id="bericht" required></textarea>
                        </div>
                    </div>
                    <div class="addportfolio-form-inputs box1">
                        <h3>Upload hier een screenshot van jouw werk</h3>
                        <input type="file" id="files" name="workImage[]" multiple accept=".png"><br><br>
                        <h3>Upload hier een foto van jouw</h3>
                        <input type="file" id="files" name="profileImage" accept="*"><br>
                    </div>
                    <div class="addportfolio-form-inputs" id="skillInput">
                        <h3>Geef hier aan welke skills je hebt</h3>
                        <button type="button" id="addSkill">Add Skill</button>
                        <input type="text" name="skills[]" class="skill" placeholder="HTML" required>

                    </div>
                    <div class="addportfolio-form-inputs" id="hobbyInput">
                        <h3>Geef hier je hobby's aan</h3>
                        <button type="button" id="addHobby">Add hobby</button>
                        <input type="text" name="hobby[]" placeholder="Voetballen" required><br>
                    </div>
                    <div class="addportfolio-form-inputs">
                        <h2>Bekijk meer over mij</h2>
                        <label for="linkedinUrl">Linkedin Url</label>
                        <input type="text" name="linkedinUrl" id="linkedinUrl"
                            placeholder="https://www.linkedin.com/in/" required><br>
                        <label for="githuburl">Github Url</label>
                        <input type="text" name="githuburl" id="githuburl"
                            placeholder="https://github.com/" required><br>
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