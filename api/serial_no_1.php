<?php

$conn = new mysqli("localhost", "root", "", "traffic2018");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT max(`serial_no`)+1 as serial_nub FROM `notice_details`";

//$result = pg_query($conn, "SELECT max(`serial_no`)+1 FROM `notice_details`");

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo $row["serial_nub"];
        
        header('Content-Type: application/json');
        echo json_encode($row);
    }
} else {
    echo "0 results";
}
//header('Content-Type: application/json');
//echo json_encode(pg_fetch_assoc($result));

//  if ($conn->query($sql) == TRUE) {
//      echo "record added";
//  } else {
//      echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();

?>