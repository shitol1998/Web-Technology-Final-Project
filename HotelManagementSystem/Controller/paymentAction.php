<?php
   $Guestname = $_POST['gname'];
   $Username = $_POST['username'];
   $Amount = $_POST['amount'];
   $Method = $_POST['payment'];
  

   $conn = new mysqli('localhost','root','','hmsproject');

   if($conn->connect_error){
       die('Connection Failed :'.$conn->connect_error);
   }else{
       $stmt = $conn->prepare("insert into payment(Guestname, Username , Amount, Method)
      values(?,?,?,?) ");
      $stmt->bind_param("ssis",$Guestname, $Username, $Amount, $Method);
      $stmt->execute();
      if($stmt->execute()){
     echo "<h1 >Payment Succesfull<h2>";
      }
      $stmt->close();
      $conn->close();
   }



?>