<?php
//  connect to mysql 
$conn = mysqli_connect("localhost", "root", "", "kilimo_high_school");

//  check db connection 
 if (mysqli_connect_errno()) {
    echo "failed to connect to mysql:" . mysqli_connect_error();
    exit();
 }

//   insert stream into DB 

 $streamName = $_POST['stream_name'];
 $sql = "Insert INTO streams (stream_name) values ('$streamName')";

 if (mysqli_query($conn, $sql)){
    echo "Class stream created successfully!";

 }else {
    echo "Error: " .$sql . "<br>" . mysqli_error($conn);
 }

//   close connection 
  mysqli_close($conn);
?>