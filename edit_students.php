<?php 
//   connect to MySQL 
 $conn = mysqli_connect("localhost", "root", "", "kilimo_high_school");
 
//    Check connection 
 if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     exit();
 }
 
//   Update student data 
 $studentId = $_GET['student_id'];
 $studentName = $_GET['student_name'];
 $StreamId = $_GET['stream_id'];
 $dateOfBirth = $_GET['dob'];
 $gender = $_GET['gender'];
 
 $sql = "UPDATE students SET 
         student_name='$studentName', 
        --  stream_id='$StreamId', 
         dob='$dateOfBirth', 
         gender='$gender' 
         WHERE student_id='$studentId'";
 
 if (mysqli_query($conn, $sql)) {
     echo "Student data updated successfully!";
 } else {
     echo "Error updating student data: " . mysqli_error($conn);
 }
 
//    Close connection 
 mysqli_close($conn);
 
?>