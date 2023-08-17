<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Payment</title>
    <link rel="stylesheet" href="../View/CSS/paynent.css">
	<!-- This is a comment -->
	<script src="js/pay.js"></script>
</head>
<body>
<center><br><br><br><br><br><br>
	<h1>payment </h1>
	<center>
		<fieldset>

	<form method="post" action="../controller/paymentAction.php"onsubmit="return isValid(this);"> 
	
		Guestname: <input type="text" name="gname">
		<br><br>
		Username: <input type="text" name="username">
        <br><br>
        Amount to pay: <input type="tel" name="amount">
		
		<br><br>

        Payment Method: <select name="payment" id="payment">
        <option value="Bkash">Bkash</option>
			<option value="Nogod">Nogod</option>				
			<option value="Visa">Visa</option>
			<option value="Cash">Cash</option>
            
		<input type="submit">
	</form>

	<br>
</fieldset>

    <a href="../View/Home.php"><b> Click here </b></a> to Back Home!
</body>
</html>