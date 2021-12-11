<?php

$url = "localhost:3306";
$database = "test";
$username = "noob";
$password = "7WBT]9yJXdQ77_sl";	

$conn = mysqli_connect($url, $username, $password, $database);
if(!$conn) {
 die("Unable to connect: " . $conn->connect_error);
}

$id=$_POST["id_num"];
$name=$_POST["visitor_name"];
$mail=$_POST["visitor_email"];
$phone=$_POST["visitor_phone"];
$adult=$_POST["total_adults"];
$children=$_POST["total_children"];
$checkin=$_POST["checkin"];
$checkout=$_POST["checkout"];
$room=$_POST["room_preference"];
$comments=$_POST["visitor_message"];

//echo $name . $mail . $phone . $adult . $children . $checkin . $checkout . $room . $comments;

$sql = "DELETE FROM reservations where id=$id";

//echo $sql;

if ($conn->query($sql) === TRUE) {
   echo "record deleted successfully";
   header("Location: myreservations.html");
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }

 $sql2= "INSERT INTO reservations(name,email,phone,adults,children,checkin,checkout,room,comments) values (\"".$name. "\",\"". $mail ."\",". $phone .",". $adult .",". $children .",\"". $checkin ."\",\"". $checkout ."\",\"". $room ."\",\"". $comments ."\")";
 
 if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
    header("Location: myreservations.html");
  } else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
  }
 

 $conn->close();

?>