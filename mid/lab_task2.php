<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bank Management System</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e6f2fb;
      margin: 0;
      padding: 20px;
    }

    h1, h2 {
      text-align: center;
      color: #003366;
      margin: 0;
    }

    h2 {
      margin-bottom: 30px;
    }

    .container {
      width: 450px;
      background-color: white;
      padding: 20px;
      border: 1px solid #ccc;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }

    .form-group {
      margin-bottom: 12px;
      display: inline-block;
      width: 100%;
    }

    label {
      display: inline-block;
      width: 150px;
      vertical-align: top;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"],
    textarea,
    select {
      width: 250px;
      padding: 6px;
      border: 1px solid #999;
      border-radius: 3px;
      display: inline-block;
    }

    input[type="file"] {
      margin-top: 5px;
    }

    input:focus, textarea:focus, select:focus {
      outline: 2px solid #0066cc;
    }

    .form-group input[type="radio"] {
      width: auto;
      margin-left: 10px;
    }

    #submitBtn, #resetBtn {
      padding: 8px 15px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      margin-right: 10px;
      cursor: pointer;
      display: inline-block;
    }

    #resetBtn {
      background-color: #e0e0e0;
      color: black;
    }

    .note-box {
      width: 300px;
      height: 60px;
      border: 1px solid brown;
      overflow: auto;
      margin: 15px auto;
      padding: 5px;
      font-size: 14px;
      color: #330000;
      position: relative;
      z-index: 2;
    }
  </style>
</head>
<body>

  <h1>Bank Management System</h1>
  <h2>Your Trusted Financial Partner</h2>

  <div class="container">
    <h3>Customer Registration Form</h3>
    <form>
      <div class="form-group">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" required>
      </div>

      <div class="form-group">
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" required>
      </div>

      <div class="form-group">
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Other">Other
      </div>

      <div class="form-group">
        <label for="marital">Marital Status:</label>
        <select id="marital">
          <option>Single</option>
          <option>Married</option>
          <option>Divorced</option>
        </select>
      </div>

      <div class="form-group">
        <label for="account">Account Type:</label>
        <select id="account">
          <option>Savings</option>
          <option>Current</option>
        </select>
      </div>

      <div class="form-group">
        <label for="deposit">Initial Deposit Amount:</label>
        <input type="text" id="deposit">
      </div>

      <div class="form-group">
        <label for="mobile">Mobile Number:</label>
        <input type="text" id="mobile">
      </div>

      <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="email" id="email">
      </div>

      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" rows="2"></textarea>
      </div>

      <div class="form-group">
        <label for="occupation">Occupation:</label>
        <input type="text" id="occupation">
      </div>

      <div class="form-group">
        <label for="nid">National ID (NID):</label>
        <input type="text" id="nid">
      </div>

      <div class="form-group">
        <label for="password">Set Password:</label>
        <input type="password" id="password">
      </div>

      <div class="form-group">
        <label for="idproof">Upload ID Proof:</label>
        <input type="file" id="idproof">
      </div>

      <div class="form-group">
        <label></label>
        <input type="checkbox" id="agree"> I agree to the terms and conditions
      </div>

      <div class="form-group">
        <label></label>
        <input type="submit" id="submitBtn" value="Register">
        <input type="reset" id="resetBtn" value="Clear">
      </div>
    </form>
  </div>

  <div class="note-box">
    This is a demo text to show how overflow works in a small container with a fixed height and auto-scroll.
    You can use this technique for logs, messages, or extra notes.
  </div>

</body>
</html>
