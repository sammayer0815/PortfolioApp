document.addEventListener("DOMContentLoaded", function() {
  var form = document.getElementById("registration-form");

  if (form) {
    form.onsubmit = function(event) {
      var password = document.getElementById("password").value;
      var confirmPassword = document.getElementById("confirmPassword").value;

      if (password !== confirmPassword) {
        alert("Passwords do not match!");
        event.preventDefault(); // Prevent form submission
      }
    };
  }
});