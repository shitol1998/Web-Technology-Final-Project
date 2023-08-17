<?php
    $Food = $_POST['food'];
   $Drinks = $_POST['drink'];
   $Services = $_POST['service'];

    $conn = new mysqli('localhost','root','','hmsproject');

    if($conn->connect_error){
        die('Connection Failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into room(food,drinks,services)
       values(?,?,?) ");
       $stmt->bind_param("sss",$Food,$Drinks,$Services);
       $stmt->execute();
       if($stmt->execute()){
        header('location: ../View/RShow.php');
       }
       $stmt->close();
       $conn->close();
    }
?>