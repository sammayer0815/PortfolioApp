<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>
<body>
   <?php include "partials/header.php" ?>
   <main class="pswd-new-page">
        <div class="pswd-new-container">
            <div class="pswdnewform">
               <h1>Nieuw wachtwoord instellen</h1>
               <form action="#">
                  <input type="password" name="email" id="email" placeholder="Voer je nieuw wachtwoord in" required>
                  <input type="password" name="email" id="email" placeholder="Voer opnieuw je nieuwe wachtwoord in" required>
                  <input type="submit" value="Wachtwoord instellen">
               </form>
               <a href="/register">Account aanmaken</a>
            </div>
        </div>
   </main>
   <?php include "partials/footer.php" ?>
</body>
</html>