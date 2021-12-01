<?php

   //echo htmlspecialchars($_POST["visitor_name"]);
   
   $url = "localhost:3306";
   $database = "test";
   $username = "noob";
   $password = "7WBT]9yJXdQ77_sl";	

   $conn = mysqli_connect($url, $username, $password, $database);
   if(!$conn) {
	die("Unable to connect: " . $conn->connect_error);
   }
   
   $id=$_GET["Cancel"];
   //echo $id;   
   
   //echo $name . $mail . $phone . $adult . $children . $checkin . $checkout . $room . $comments;

   $sql = "delete from reservations where id= $id";

   //echo $sql;

   if ($conn->query($sql) === TRUE) {
      echo "record deleted successfully";      
      header("Refresh:0; url=reservations.html");

    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
   
?>