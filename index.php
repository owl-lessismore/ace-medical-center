<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Ace Medical Center">
    <meta name="keywords" content="Doctor,Hospital,Center,Emergency,Health Care">
    <meta name="author" content="Jeanefer Jenny Retuerto,Darwin Serocefino,Mark Timbal,Marvin Capa">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <title>Ace Medical Center</title>
    
</head>
<body>
  <!-- Login Container -->
  <div class="container-login">
    <!-- Left Side of the Container -->
    <div class="left">
      <!-- Tabs for Login and Register -->
      <div class="tabs">
        <ul>
          <li class="login_li">Login</li>
          <li class="register_li">Register</li>
        </ul>
      </div>
        <!-- Login Content -->
        <form action="php/login.php" method="POST" onSubmit = "return validateLogin();">
          <div class="login">
            <div class="input_field">
              <input type="text" placeholder="Username = (admin)" class="input" name="username" id="userID">
            </div>
            <div class="input_field">
              <input type="password" placeholder="Password = (admin)" class="input" name="password" id="passID">
            </div>
            <div class="btn">
              <input type="submit" value="Login" class="btn-login">
            </div>
          </div>
        </form>
        <!-- Register Content --> 
        <form action="php/register.php" method="POST" onSubmit = "return validateRegister();">
          <div class="register">
              <div class="input_field">
                <input type="text" placeholder="Username" class="input" name="username" id="reguserID">
              </div>
              <div class="input_field">
                <input type="email" placeholder="E-mail" class="input" name="email" id="regemailID">
              </div>
              <div class="input_field">
                <input type="password" placeholder="Password" class="input" name="password" id="regpassID">
              </div>
              <div class="input_field">
                <input type="password" placeholder="Confirm Password" class="input" name="conpassword" id="regconpassID">
              </div>
              <div class="btn">
                <input type="submit" value="Register" class="btn-register">
              </div>
          </div>
        </form>
    </div>
    <!-- Right Side of the Container -->
    <div class="right">
      <div class = "logo">
        <h1>Ace Medical Center</h1>
      </div>
    </div>
  </div>
  <!-- Script for Tabs on Login/Register Class -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src = "js/main.js"></script>
  <!-- Script for Validating Data1 -->
  <script src="js/validate.js"></script>
</body>
</html>