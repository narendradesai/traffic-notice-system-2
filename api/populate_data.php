<?php

    $data = json_decode(file_get_contents("php://input"));
//echo "ddo";
//echo $data->searchSerial; 
//echo $data;
//echo $_GET['serial_n'];


    $conn = new mysqli("localhost", "root", "", "traffic2018");
    // Check connection
    if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM `notice_details` where vehicle_reg_no ='".$_GET['serial_n']."' UNION ALL SELECT * FROM `notice_details` where serial_no ='".$_GET['serial_n']."' UNION ALL SELECT * FROM `notice_details` where name_of_violator ='".$_GET['serial_n']."'";
    $result = $conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo $row["serial_nub"];
        
        header('Content-Type: application/json');
       // echo json_encode($row);
        $data[]=$row;
        
    }
} else {
   // echo "0 results";
}
if($data){
    echo json_encode($data);
}
//  if ($conn->query($sql) == TRUE) {
//      echo "record added";
//  } else {
//      echo "Error: " . $sql . "<br>" . $conn->error;
// }

//$conn->close();


?>