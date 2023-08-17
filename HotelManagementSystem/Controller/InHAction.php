<?php
   $HotelName = $_POST['hotel'];
   $Phone = $_POST['phone'];
   $RoomVacancy = $_POST['Vacancy'];
   
  

   $conn = new mysqli('localhost','root','','hmsproject');

   if($conn->connect_error){
       die('Connection Failed :'.$conn->connect_error);
   }else{
       $stmt = $conn->prepare("insert into inhotel(HotelName, Phone , RoomVacancy)
      values(?,?,?) ");
      $stmt->bind_param("sii",$HotelName, $Phone, $RoomVacancy);
      $stmt->execute();
      if($stmt->execute()){
        header('location:../View/Hotelshow.php');
       }
      $stmt->close();
      $conn->close();
   }



?>