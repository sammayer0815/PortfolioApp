<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>

<body>
   <div class="grid-container">
      <?php include "partials/header.php" ?>
      <main class="contact-page">
         <div class="contact-form-container">
            <div class="contactform">
               <h1>Contact ons</h1>
               <form action="#">
                  <input type="text" name="name" id="name" placeholder="Naam" required>
                  <input type="email" name="email" id="email" placeholder="Vul hier je email in" required>
                  <textarea placeholder="Bericht...." required></textarea>
                  <input type="submit" value="Verzenden">
               </form>
            </div>
         </div>
      </main>
      <?php include "partials/footer.php" ?>
   </div>
</body>
</html>