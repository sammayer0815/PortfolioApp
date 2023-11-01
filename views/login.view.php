<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>
<body>
   <div class="grid-container">
      <?php include "partials/header.php" ?>
         <main class="login-page">
            <div class="login-form-container">
                  <div class="loginform">
                     <h1>Login</h1>
                     <form action="#">
                        <input type="email" name="email" id="email" placeholder="Vul hier je email in" required>
                        <input type="password" name="password" id="password" placeholder="wachtwoord" required>
                        <input type="submit" value="Login">
                     </form>
                     <a href="/register">Account aanmaken</a>
                     <a href="/password_reset">Wachtwoord vergeten</a>
                  </div>
            </div>
         </main>
      <?php include "partials/footer.php" ?>
   </div>
</body>
</html>