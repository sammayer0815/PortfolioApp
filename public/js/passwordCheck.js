document.addEventListener("DOMContentLoaded", function () {
  let form = document.getElementById("registration-form");

  //check if the password match with the second typed password
  if (form) {
    form.onsubmit = function (event) {
      let password = document.getElementById("password").value;
      let confirmPassword = document.getElementById("confirmPassword").value;

      if (password !== confirmPassword) {
        //User get alert when the password does not match
        alert("Passwords do not match!");
        event.preventDefault(); // Prevent form submission
      }
    };
  }
});
