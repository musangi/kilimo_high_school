<?php 
//  connect to MySQL 
$conn = mysqli_connect("localhost", "root", "", "kilimo_high_school");

//  Check connection 
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

//   Select all streams 
$sql = "SELECT * FROM streams";
$result = mysqli_query($conn, $sql);

//  Display stream data 

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
echo "<tr> <th>stream ID</th> <th>stream Name</th> </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "tr";
        echo "<td>" . $row["stream_id"] . "</td>";
        echo "<td>" . $row["stream_name"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No streams found";
}

//  Close connection 
mysqli_close($conn);

?>