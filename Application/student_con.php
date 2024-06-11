<?php
// connect to DB
$conn = mysqli_connect("localhost", "root", "", "kilimo_high_school");

//  check db connection 
if (mysqli_connect_errno()) {
    echo "failed to connect to mysql:" . mysqli_connect_error();
    exit();
 }

//  insert student data into db
$studentName = $_POST['student_name'];
$streamId = $_POST['stream_id'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];

$sql = "INSERT INTO students (student_name, stream_id, dob, gender) VALUES ('$studentName', '$streamId', '$dob', '$gender')";

if (mysqli_query($conn, $sql)){
    echo "student registered successfully!";

 }else {
    echo "Error: " .$sql . "<br>" . mysqli_error($conn);
 }

 
//  close connection 
  mysqli_close($conn);
?>