<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="../View/CSS/LogIn.css" />
	<script src="../View/JS/LogIn.js"></script>

  </head>
  <body>
    <div class="container">
      <form
        name="infoForm"
        action="../Controller/LogInAction.php"
        method="post"
	    	onsubmit="return validation()"
        class="form"
        id="form"
      >
        <h1>Login</h1>
        <h4 style="text-align: center;">User can login here</h4>
        <hr />
        <div class="form-control">
          <label for="username">Username: </label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Enter Username"
          />
		  <p class="ErrMsg" id="usernameErr"></p>
        </div>
        <br />
        <div class="form-control">
          <label for="password">Password: </label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Enter Password"
          />
		  <p class="ErrMsg" id="passwordErr"></p>

        </div>
        <br /><br />
        <br /><br />
        <!-- <button type="submit">LogIn
		</button> -->

        <button id="submit" type="submit" name="submit" value="Submit">
          Login
        </button>

        <br /><br />
        <a href="../View/Regitration.php"> <b>Click here</b></a> for new
        registration
      </form>
    </div>
  </body>
</html>