
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
	<link rel="stylesheet" href="../View/CSS/Reg.css">
<script src="../View/JS/Reg.js"></script>
</head>
<body>

	
	<hr>
	<div class="container" >
	<form action="../Controller/RegAction.php" method="post" class="form" id="form" onsubmit="return validation()">
		
	<center>
	<h1>Registration</h1>
	</center>
		<div class="form-control">
		<label for="firstname"> First Name:</label>
		 <input type="text" id="firstname" name="firstname" placeholder="Enter First Name">
		 <p class="ErrMsg" id="firstnameErr"></p>
		</div>
		<br><br>
		<div class="form-control">
	<label for="lastname">Last Name:</label> 
	<input type="text" id="lastname" name="lastname" placeholder="Enter Last Name" >
	<p class="ErrMsg" id="lasttnameErr"></p>
		</div>
		<br><br>
		<div class="form-control">
		Gender: <input type="radio" id="g1" name="gender" value="m" placeholder="Please Click On Circle" >
		<label for="g1">Male</label>
		<p class="ErrMsg" id="genderErr"></p>
		<input type="radio" id="g2" name="gender" value="f" placeholder="Please Click On Circle">
		<label for="g2">Female</label>
		<p class="ErrMsg" id="genderErr"></p>
		</div>
		<br><br>
		<div class="form-control">
		<label for="dob"> Date of Birth:</label> 
		<input type="date" name="dob" id="dob" placeholder="Enter DOB">
		<p class="ErrMsg" id="dobErr"></p>
		</div>
		<br><br>
	<br>
	
		
		<div class="form-control">
		<label for="Address"> Address: </label>
		<input type="text" id="Address" name="Address" placeholder="Enter Address">
		<p class="ErrMsg" id="AddressErr"></p>
		</div>
		<br>
		<div class="form-control">
	<label for="phone">	Phone:</label>
	 <input type="tel" id="phone" name="phone" maxlength="11" placeholder="Entrer Phone Number"  >
	 <p class="ErrMsg" id="phoneErr"></p>
		</div>
		<br><br>
		<div class="form-control">
		<label for="email">Email:</label> 
		 <input type="email" id="email" name="email" placeholder="Enter Email" >
		 <p class="ErrMsg" id="emailErr"></p>
		</div>
	
	<br><br>

	<div class="form-control">
<label for="username">	Username:</label>
 <input type="text" id="username" name="username" placeholder="Enter Username" >
 <p class="ErrMsg" id="usernameErr"></p>
	</div>
	<br><br>
	<div class="form-control">
<label for="password">Password:</label>	
 <input type="password" id="password" name="password" placeholder="Enter Password">
 <p class="ErrMsg" id="passwordErr"></p>
	</div>
	
	<br><br>
	<button type="submit">Submit</button>
	<br><br>
	Already have an account? <a href="../View/LogIn.php"><b> Click here </b></a> to login
</form>
	</div>

	<br>

	
</body>
</html>