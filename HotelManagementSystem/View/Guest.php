<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guests</title>
    <link rel="stylesheet" href="../View/CSS/Guest.css">
    <script src="../View/JS/Guest.js"></script>
</head>
<body>
    <div class="container">
    

   
<form action="../Controller/GuestA.php" method="post" class="form" id="form" onsubmit="return validation()">
<h1 style="text-align: center;">Guests in Hotel</h1>
<div class="form-control">
<label for="name">Name :</label>
 <input type="text" id="name" name="name" value=" " placeholder="Enter name">
 <p class="ErrMsg" id="nameErr"></p>
</div>
<br>
<br>
<br>
<div class="form-control">
<label for="phone">Contact:</label> 
<input type="tel" id="phone" name="phone" value="" placeholder="Enter Contatct number">
<p class="ErrMsg" id="phoneErr"></p>
</div>
<br>
<br>
<br>
<div class="form-control">
<label for="Address">Address:</label>
 <input type="text" id="Address" name="Address" value="" placeholder="Enter Address">
 <p class="ErrMsg" id="AddressErr"></p>
</div>
<br>
<br>
<br>
<div class="form-control">
<label for="roomN">Room No:</label>
 <input  type="number" id="roomN" name="roomN" value="" placeholder="Enter Room Number">
 <p class="ErrMsg" id="roomNErr"></p>
</div>

<button type="submit">Submit</button>
<br>
<a href="../View/Home.php"><b> Click here </b></a> to Back Home!
</form>
    </div>
   
   <br>
   <br>

</body>
</html>