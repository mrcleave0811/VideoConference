<?php

  require_once('DbOperations.php');
  $operations->login();
  $operations->registerUser();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Iconscout CS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../Css/login.css"> 

    <title>Login</title>
</head>
<body>
    
    <!-- Login Container-->
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form method="POST" action=""> <!-- Link -->
                  <div class="input-field">
                    <input type="text" placeholder="Enter your email" name="email" required>
                    <i class="uil uil-envelope icon"></i> 
                  </div>
                  <div class="input-field">
                    <input type="password" class="password" placeholder="Enter your password" name="password" required>
                    <i class="uil uil-lock icon"></i> 
                    <i class="uil uil-eye-slash showHidePw"></i>
                  </div>

                  <div class="checkbox-text">
                      <div class="checkbox-content">
                          <input type="checkbox" id="sigCheck">
                          <label for="sigCheck" class="text">Remember me</label>
                      </div>

                      <a href="#" class="text">Forgot Password?</a>
                  </div>

                  <div class="input-field button">
                    <input type="submit" name="login" value="Login">
                  </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup now</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form-->
            <div class="form signup">
                <span class="title">Registration</span>
                <form action="" method="POST"> <!-- Link -->

                  <div class="input-field">
                    <input type="text" placeholder="Enter your first name" name="firstname" required>
                    <i class="uil uil-user"></i>
                  </div>
                  <div class="input-field">
                    <input type="text" placeholder="Enter your last name" name="lastName" required>
                    <i class="uil uil-user"></i> 
                  </div>
                  <div class="input-field">
                    <input type="text" placeholder="Enter your email" name="email" required>
                    <i class="uil uil-envelope icon"></i> 
                  </div>
                  <div class="input-field">
                    <input type="password" class="password" placeholder="Create a password" name="password" required>
                    <i class="uil uil-lock icon"></i> 
                  </div>
                  <div class="input-field">
                    <input type="password" class="password" placeholder="Confirm a password" name="cpassword" required>
                    <i class="uil uil-lock icon"></i> 
                    <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  <div class="input-field">
                    <label>Gender</label>
                    <div class="custom_select">
                        <select required name="gender">
                          <option value="" selected="true" disabled="disabled" >Select Gender</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                    </div>
                  </div>
                  <div class="input-field">
                    <label>Birthdate</label>
                    <input type="date" name="birthDate" required>
                  </div>

                  <br>
                  
                  <div class="checkbox-text">
                      <div class="checkbox-content">
                          <input type="checkbox" id="sigCheck">
                          <label for="sigCheck" class="text">I accept all terms & conditions</label>
                      </div>

                      <!-- <a href="#" class="text">Forgot Password?</a> -->
                  </div>

                  <div class="input-field button">
                    <input type="submit" name="register" value="Register">
                  </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already have an account?
                        <a href="#" class="text login-link">Login now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="../Javascript/script.js"></script>

</body>
</html>