<?php
//  Connect to MySQL 
$conn = mysqli_connect("localhost", "root", "", "kilimo_high_school");

//  Check connection 
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

//  Select all students 
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

//  Display student data in a table 
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Student ID</th><th>Student Name</th><th>Stream ID</th><th>Date of Birth</th><th>Gender</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["student_id"] . "</td>";
        echo "<td>" . $row["student_name"] . "</td>";
        echo "<td>" . $row["stream_id"] . "</td>";
        echo "<td>" . $row["dob"] . "</td>";
        echo "<td>" . $row["gender"] . "</td>";
        // delete and edit buttons
        echo "<td>";
        echo "<a href='edit_students.php?student_id=" . $row["student_id"] . "'>Edit</a> | ";
        echo "<a href='delete_student.php?student_id=" . $row["student_id"] . "'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No students found";
}

//  Close connection 
mysqli_close($conn);
?>
