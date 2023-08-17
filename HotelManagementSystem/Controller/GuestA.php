<?php
   $Name = $_POST['name'];
   $Contact = $_POST['phone'];
   $Address = $_POST['Address'];
   $RoomNo = $_POST['roomN'];
  

   $conn = new mysqli('localhost','root','','hmsproject');

   if($conn->connect_error){
       die('Connection Failed :'.$conn->connect_error);
   }else{
       $stmt = $conn->prepare("insert into guest(Name, Contact , Address, RoomNo)
      values(?,?,?,?) ");
      $stmt->bind_param("sisi",$Name, $Contact, $Address, $RoomNo);
      $stmt->execute();
      if($stmt->execute()){
      header('location: ../View/GPShow.php');
      }
      $stmt->close();
      $conn->close();
   }



?>