<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $email = $_POST["email"];
   // Process the email from the second form as needed
}else{
   header("Location: ./password_reset");
}
?>
<body>
   <div class="grid-container">
      <?php include "partials/header.php" ?>
      <main class="pswd-new-page">
         <div class="pswd-new-container">
               <div class="pswdnewform">
                  <h1>Nieuw wachtwoord instellen</h1>
                  <form action="./functions/password-reset.php" id="registration-form" method="POST">
                     <input type="hidden" name="email" value="<?php echo $email; ?>" required >
                     <input type="password" name="password" id="password" pattern="^(?=.*[A-Z])(?=.*\d).{8,}$" placeholder="Voer je nieuw wachtwoord in" required>
                     <input type="password" id="confirmPassword" placeholder="Voer opnieuw je nieuwe wachtwoord in" required>
                     <input type="submit" value="Wachtwoord instellen">
                  </form>
                  <a href="/register">Account aanmaken</a>
               </div>
         </div>
      </main>
      <?php include "partials/footer.php" ?>
   </div>
   <script src="./public/js/passwordCheck.js"></script>
</body>
</html>