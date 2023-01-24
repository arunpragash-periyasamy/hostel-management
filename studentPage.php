<!DOCTYPE html>
<html>
  <head>
    <style>
      .container {
        width: 90%; /* Adjust as needed */
        margin: 0 auto; /* Center the container horizontally */
        padding: 20px; /* Add padding around the content */
        text-align: center; /* Center the content horizontally */
        box-shadow: 0px 0px 10px #ccc; /* Add a box shadow */
      }

      input[type=text], input[type=password] {
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid black;
        border-radius: 4px;
      }

      .btn {
        background-color: orange;
        color: black;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      .login-btn {
        width: 30%; /* make the login button smaller */
      }

      .register-btn, .forget-btn {
        width: 20%; /* make the register and forget password button smaller */
        margin: 0px 10px; /* Add margins between the buttons */
      }

      /* Responsive design */
      @media screen and (max-width: 600px) {
        .container {
          width: 100%; /* Make the container full width on small screens */
        }
        input[type=text], input[type=password] {
          width: 100%; /* Make the input fields full width on small screens */
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Login" class="btn login-btn">
        <a href="register.php" class="btn register-btn">Register</a>
        <a href="forgetpassword.php" class="btn forget-btn">Forget Password</a>
      </form>
    </div>
  </body>
</html>
