<?php

$Username = $_POST['username'];
$Password = $_POST['password'];

$con = new mysqli("localhost","root","","hmsproject");
if($con->connect_error){
    die("Failed to connect : " . $con->connect_error);
}else{
    $stmt = $con->prepare("select * from user where Username = ? ");
    $stmt->bind_param("s",$Username);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
   if($stmt_result->num_rows > 0){
    $data = $stmt_result->fetch_assoc();
    if($data['Password']=== $Password){

        $_SESSION['username'] = $Username;
        header('location: ../View/Home.php');
    }
    else{
        echo "<h2>Invalid Email Or Password</h2>";
    }
   }
}
?>