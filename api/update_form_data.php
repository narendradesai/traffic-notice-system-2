<?php

$data = json_decode(file_get_contents("php://input"));

echo $data->serial_no; 


$conn = new mysqli("localhost", "root", "", "traffic2018");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $sql = "UPDATE notice_details SET unit='$data->unit ',name_of_officer='$data->name_of_officer ',rank='$data->rank ',date_time_of_offence='$data->date_time_of_offence',place_of_offence='$data->place_of_offence ',vehicle_reg_no='$data->vehicle_reg_numb ',type_of_vehicle='$data->type_of_vehicle ',type_of_offence_and_section_of_law_1='$data->type_of_offence_1',type_of_offence_and_section_of_law_2='$data->type_of_offence_2',type_of_offence_and_section_of_law_3='$data->type_of_offence_3',type_of_offence_and_section_of_law_4='$data->type_of_offence_4',date_of_receipt_of_information_slip='$data->date_of_receipt_of_information_slip',date_of_dispatch_of_vehicle_no_to_traffic_cell='$data->date_of_dispatch_of_vehicle_no_to_traffic_cell',date_of_receipt_of_name_and_address_from_traffic_cell='$data->date_of_receipt_of_name_and_address_from_traffic_cell',name_of_violator='$data->name_of_violator ',address_of_violator='$data->address_of_violator ',whatsapp_number='$data->whatsapp_number',date_of_dispatch_of_notice_to_ps='$data->date_of_dispatch_of_notice_to_ps',date_of_receipt_of_served_notice='$data->date_of_receipt_of_served_notice',challan_book_number='$data->challan_book_number ',challan_number='$data->challan_number ',mdl_no='$data->mdl_no ',composition_amount='$data->composition_amount ',court_case_number='$data->court_case_number ',date_of_dispatch_to_court_disposal='$data->date_of_dispatch_to_court_disposal',other_offence='$data->other_offence',other_offence_amount='$data->other_offence_amount' where serial_no='$data->serial_no'";


 if ($conn->query($sql) == TRUE) {
     echo "record updated";
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
