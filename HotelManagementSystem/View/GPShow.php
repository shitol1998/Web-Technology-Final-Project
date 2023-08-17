<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About guest</title>
    <style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<h1 style="text-align: center;">Entry Data</h1>
<br>
<br>
<h3>Search</h3>
<h3>Guest: </h3>
<table>
<tr>
<th>Name</th>&nbsp;&nbsp;&nbsp;&nbsp;
<th>Contact</td>&nbsp;&nbsp;&nbsp;&nbsp;
<th>Address</th>&nbsp;&nbsp;&nbsp;&nbsp;
<th>Room No:</th>
<th>Update info.</th>
<?php
$conn = mysqli_connect("localhost", "root", "", "hmsproject");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Name, Contact, Address,RoomNo FROM guest";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Contact"] . "</td><td>"
. $row["Address"]. "</td> <td>"
. $row["RoomNo"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }

$conn->close();
?>
<br>
<br>
<table></table>

 <a href="../View/Home.php"><b> Click here </b></a> to back Home!
</body>

</html>