<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../View/CSS/inhotel.css">
    <script src="../View/JS/inhotel.js" ></script>
</head>
<body>
  <div class="container">
 
   
        <form action="../Controller/InHAction.php" method="post" class="form" id="form" onsubmit="return validation()">
        <h1 style="text-align: center;">Hotel Around Us</h1>
           <div class="form-control">
           <label for="hotel">Hotel Name:</label>
             <input type="text" id="hotel" name="hotel" placeholder="Enter Hotel Name">
             <p class="ErrMsg" id="hotelErr"></p>
           </div>
            <br>
            <br>
            <div class="form-control">
            <label for="phone">Office phone:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter phone number">
            <p class="ErrMsg" id="phoneErr"></p>
            </div>
            <br>
            <br>
           <div class="form-control">
           <label for="vacancy"> Room Vacancy:</label>
            <input type="number" id="vacancy" name="Vacancy" placeholder="Enter Vacancy Number">
            <p class="ErrMsg" id="vacancyErr"></p>
           </div>
<br>
<br>
          <button type="submit">Submit</button>
        </form>
  </div>
   
</body>
</html>