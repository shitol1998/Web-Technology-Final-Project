<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../Controller/RsAction.php" method="post">
<fieldset>
        
      Food Services : <select name="food" id="food">
            <option value="" selected disabled>Choose a option</option>
    <option value="B">Bengali</option>
    <option value="I">Indian</option>
    <option value="T">Thai</option>
    <option value="C">Chinese</option>
    <option value="S">Sea food</option>
    </select>

    
    <br>
    <br>
        
    Drink:  <select name="drink" id="drink">
            <option value="" selected disabled>Choose a option</option>
    <option value="W">Water</option>
    <option value="S">Soft drink</option>
    <option value="L">Lacchi</option>
    <option value="J">Juice</option>
    <option value="T">Tea</option>
    <option value="C">Coffie</option>
    </select>


    
    <br>
    <br>
    
      
    SERVICES: <select name="service" id="service">
            <option value="" selected disabled>Choose a option</option>
    <option value="C">Cleaning</option>
    <option value="L.">Laundry</option>
    <option value="T">Telefone</option>
    </select>
    </fieldset>
    <br>
    <br>
    <input type="submit" name="submit" value="submit">
</form>
<br>
<br>
<a href="../View/Home.php"><b> Click here </b></a> to Back Home!
</body>
</html>