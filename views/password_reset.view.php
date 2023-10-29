<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>
<body>
   <?php include "partials/header.php" ?>
   <main class="reset-page">
        <div class="reset-form-container">
            <div class="resetform">
               <h1>Wachtwoord <br>resetten</h1>
               <form action="#">
                  <input type="email" name="email" id="email" placeholder="Vul hier je email in" required>
                  <input type="submit" value="Wachtwoord resetten">
               </form>
               <a href="/register">Account aanmaken</a>
            </div>
        </div>
   </main>
   <?php include "partials/footer.php" ?>
</body>
</html>