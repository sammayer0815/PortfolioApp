<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>
<body>
   <div class="grid-container">
      <?php include "partials/header.php" ?>
      <main class="register-page">
        <div class="register-form-container">
            <div class="registerform">
               <h1>Registreer nu</h1>
               <form action="#">
                  <input type="text" name="name" id="name" placeholder="Volledige naam" required>
                  <input type="text" name="username" id="username" placeholder="Gebruiksnaam" required>
                  <input type="email" name="email" id="email" placeholder="Vul hier je email in" required>
                  <input type="password" name="password" pattern="^(?=.*[A-Z])(?=.*\d).{8,}$" id="password" placeholder="wachtwoord" required>
                  <input type="password" id="password" placeholder="herhaal wachtwoord" required>
                  <input type="submit" value="Registreren">
               </form>
            </div>
        </div>
      </main>
      <?php include "partials/footer.php" ?>
   </div>
   <script src="./public/js/passwordCheck.js"></script>
</body>
</html>