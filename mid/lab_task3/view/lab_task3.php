<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Donation Form</title>
<link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <div class="form-container">
        <h2 class="section-title">Donor Information</h2>
        <form id ="donationForm">
            <input type="text" id="name" placeholder="Full Name(A-Z only)">
             <input type="email" id="email" placeholder="Email Adress">
              <input type="text" id="phone" placeholder="Phone (11 digits)">
               <input type="password" id="password" placeholder="Password(A-Z,a-z,0-9,special)">
                <input type="number" id="amount" placeholder="Donation Amount">

                <lable> Payment Method</lable>
                <div class ="donation-options">
                    <lable><input type="radio" name= "payment" value="bkash">bkash</lable>
                     <lable><input type="radio" name= "payment" value="nagad">Nagad</lable>
                      <lable><input type="radio" name= "payment" value="rocket">Rocket</lable>
                      
                      <label for="presetAmount">Choose a Donation Amount</label>
            <select id="presetAmount" onchange="document.getElementById('amount').value = this.value">
                <option value="">-- Select Amount --</option>
                <option value="100000">100000</option>
                <option value="200000">200000</option>
                <option value="300000">300000</option>
            </select>


</div>
<label> <input type="checkbox"id="terms">I agree to the Terms & Condition s </label>
<div class="button-group">
    <button type="submit">Submit</button>
</div>
</form>
</div>
<script src="../js/script.js"></script>
</body>
</html>

            
