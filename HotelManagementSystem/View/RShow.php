
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emergency</title>
    <link rel="stylesheet" href="../View/CSS/style.css">
</head>
<body>
<h1 style="text-align: center;">Thank You For your Order Sir!</h1>
<br>
<br>
<h3>Your Order: </h3>
<table>
<tr>
<th>Food</th>
<th>Drinks</th>
<th>Services</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "hmsproject");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Food, Drinks, Services FROM room";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Food"]. "</td><td>" . $row["Drinks"] . "</td><td>"
. $row["Services"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }

$conn->close();
?>
</table>
<br>
<br>
<a href="../View/Home.php"><b> Click here </b></a> to Back Home!
</body>

</html>