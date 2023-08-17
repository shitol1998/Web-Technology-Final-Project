<?php
    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $Gender = $_POST['gender'];
    $DOB = $_POST['dob'];
    $Address = $_POST['Address'];
    $Phone = $_POST['phone'];
    $Email = $_POST['email'];
    $Username = $_POST['username'];
    $Password = $_POST['password'];

    $conn = new mysqli('localhost','root','','hmsproject');

    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into user(FirstName, LastName, Gender, DOB, Address, Phone, Email, Username, Password)
       values(?,?,?,?,?,?,?,?,?) ");
       $stmt->bind_param("sssisisss",$FirstName, $LastName, $Gender, $DOB, $Address, $Phone, $Email, $Username, $Password);
       $stmt->execute();
       if($stmt->execute()){
        header('location:../View/LogIn.php');
       }
       $stmt->close();
       $conn->close();
    }
?>