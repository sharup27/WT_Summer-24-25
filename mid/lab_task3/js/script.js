document.getElementById("donationForm").addEventListener("submit", function(e) {

  e.preventDefault();
 
  var name = document.getElementById("name").value.trim();


  var email = document.getElementById("email").value.trim();


  var phone = document.getElementById("phone").value.trim();


  var password = document.getElementById("password").value;


 
  if (!/^\d{11}$/.test(phone)) {

    alert("Phone number must be exactly 11 digits.");

    return;
  }
 
  if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_])/.test(password)) {

    alert("Password must include uppercase, lowercase, number, and special character.");

    return;
  }
 
  alert("Form submitted successfully!");

});
 