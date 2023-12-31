<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>
<body>
   <?php include "partials/header.php" ?>
   <main class="login-page">
        <div class="login-form-container">
            <div class="loginform">
               <h1>Login</h1>
               <form action="./functions/login.php" method="post">
                  <input type="email" name="email" id="email" placeholder="Vul hier je email in" required>
                  <input type="password" name="password" pattern="^(?=.*[A-Z])(?=.*\d).{8,}$" id="password" placeholder="wachtwoord" required>
                  <input type="submit" value="Login">
               </form>
               <a href="/register">Account aanmaken</a>
               <a href="/password_reset">Wachtwoord vergeten</a>
            </div>
        </div>
   </main>
   <?php include "partials/footer.php" ?>
</body>
</html>