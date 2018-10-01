

        var ang_app= angular.module("new_entry_form",[]);
        ang_app.controller("submit-form", function($scope,$http,$window,$timeout){
            
            $scope.otherOffenceAmount = {amount:0};

            //initialises serial number to max  number plus 1 
            //and autofills other fields
            initserial =function(){
               $http.get("api/serial_no.php")
			        .then(function(data){
				        $scope.srno = data.data.serial_nub;
                        $scope.vrn = "";
                        $scope.ca = "Rs.";
                        $scope.updateFlag="Submit";
                        $scope.unit=" PS";
                        $scope.valueDisplay="none";
                        
			        },function(error){
                        console.log(error);
                });
            };

            initserial();

                      
              

            switchSection = function(){
                $scope.offence1text = $('#tooasol1 option:selected').text();
                $scope.offence2text = $('#tooasol2 option:selected').text();
                $scope.offence3text = $('#tooasol3 option:selected').text();
                $scope.offence4text = $('#tooasol4 option:selected').text();
                
                                  
                switch($scope.tooasol1){
                    case 'Driving Dangerously' :
                        $scope.tooasol1v=600;
                        break;
                    case 'Overspeed Driving/Riding' :
                        $scope.tooasol1v=300;
                        break;
                    case 'Red Light Jumping' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Zebra Crossing' :
                        $scope.tooasol1v=100;
                        break;   
                    case 'Dangerous Parking' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Riding W/O helmet' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Using Mobile while Driving' :
                        $scope.tooasol1v=600;
                        break;
                    case 'Overtaking' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Lane Cutting' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Riding w/o M.D.L' :
                        $scope.tooasol1v=450;
                        break;
                    case 'Carrying Passenger in Cabin' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Carrying Excess Pillion/Rider' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Carrying Passengers in goods carriage' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Driving Without Seat Belt' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Tinted Glass' :
                        $scope.tooasol1v=100;
                        break;
                    case 'No Parking' :
                        $scope.tooasol1v=100;
                        break;
                    case 'No Entry' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Carrying passengers other than at Bus Stop' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Disobedience of Orders' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Violating of Traffic Signal' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Open Door' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Without Uniform' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Without Tarpoline' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Wrong turn' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Violation of Govt. Notification' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Unauthorized Parking' :
                        $scope.tooasol1v=100;
                        break;
                    case 'W/O No.Plate' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Improper no. Plate' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Delayed Journey' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Without rear mirror' :
                        $scope.tooasol1v=100;
                        break;
                    case 'Right of Pedistrian' :
                        $scope.tooasol1v=100;
                        break;
                   case 'Obstructive to other Traffic' :
                        $scope.tooasol1v=100;
                        break;  
                  case 'Vehical Parked on Zebra Crossing' :
                        $scope.tooasol1v=100;
                        break;
                    default :
                        $scope.tooasol1v=0;
                    
                }

                
                switch($scope.tooasol2){
                    case 'Driving Dangerously' :
                        $scope.tooasol2v=600;
                        break;
                    case 'Overspeed Driving/Riding' :
                        $scope.tooasol2v=300;
                        break;
                    case 'Dangerous Parking' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Red Light Jumping' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Zebra Crossing' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Riding W/O helmet' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Using Mobile while Driving' :
                        $scope.tooasol2v=600;
                        break;
                    case 'Overtaking' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Lane Cutting' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Riding w/o M.D.L' :
                        $scope.tooasol2v=450;
                        break;
                    case 'Carrying Passenger in Cabin' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Carrying Excess Pillion/Rider' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Carrying Passengers in goods carriage' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Driving Without Seat Belt' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Tinted Glass' :
                        $scope.tooasol2v=100;
                        break;
                    case 'No Parking' :
                        $scope.tooasol2v=100;
                        break;
                    case 'No Entry' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Carrying passengers other than at Bus Stop' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Disobedience of Orders' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Violating of Traffic Signal' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Open Door' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Without Uniform' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Without Tarpoline' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Wrong turn' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Violation of Govt. Notification' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Unauthorized Parking' :
                        $scope.tooasol2v=100;
                        break;
                    case 'W/O No.Plate' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Improper no. Plate' :
                        $scope.tooasol2v=100;
                        break;
                       case 'Delayed Journey' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Without rear mirror' :
                        $scope.tooasol2v=100;
                        break;
                    case 'Right of Pedistrian' :
                        $scope.tooasol2v=100;
                        break;
                   case 'Obstructive to other Traffic' :
                        $scope.tooasol2v=100;
                        break;  
                  case 'Vehical Parked on Zebra Crossing' :
                        $scope.tooasol2v=100;
                        break;
                    default :
                        $scope.tooasol2v=0;
                    
                }

                switch($scope.tooasol3){
                    case 'Driving Dangerously' :
                        $scope.tooasol3v=600;
                        break;
                    case 'Overspeed Driving/Riding' :
                        $scope.tooasol3v=300;
                        break;
                    case 'Red Light Jumping' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Zebra Crossing' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Dangerous Parking' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Riding W/O helmet' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Using Mobile while Driving' :
                        $scope.tooasol3v=600;
                        break;
                    case 'Overtaking' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Lane Cutting' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Riding w/o M.D.L' :
                        $scope.tooasol3v=450;
                        break;
                    case 'Carrying Passenger in Cabin' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Carrying Excess Pillion/Rider' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Carrying Passengers in goods carriage' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Driving Without Seat Belt' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Tinted Glass' :
                        $scope.tooasol3v=100;
                        break;
                    case 'No Parking' :
                        $scope.tooasol3v=100;
                        break;
                    case 'No Entry' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Carrying passengers other than at Bus Stop' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Disobedience of Orders' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Violating of Traffic Signal' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Open Door' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Without Uniform' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Without Tarpoline' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Wrong turn' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Violation of Govt. Notification' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Unauthorized Parking' :
                        $scope.tooasol3v=100;
                        break;
                    case 'W/O No.Plate' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Improper no. Plate' :
                        $scope.tooasol3v=100;
                        break;
                        case 'Delayed Journey' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Without rear mirror' :
                        $scope.tooasol3v=100;
                        break;
                    case 'Right of Pedistrian' :
                        $scope.tooasol3v=100;
                        break;
                   case 'Obstructive to other Traffic' :
                        $scope.tooasol3v=100;
                        break;  
                  case 'Vehical Parked on Zebra Crossing' :
                        $scope.tooasol3v=100;
                        break;
                    default :
                        $scope.tooasol3v=0;
                    
                }

                switch($scope.tooasol4){
                    case 'Driving Dangerously' :
                        $scope.tooasol4v=600;
                        break;
                    case 'Overspeed Driving/Riding' :
                        $scope.tooasol4v=300;
                        break;
                    case 'Red Light Jumping' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Zebra Crossing' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Dangerous Parking' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Riding W/O helmet' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Using Mobile while Driving' :
                        $scope.tooasol4v=600;
                        break;
                    case 'Overtaking' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Lane Cutting' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Riding w/o M.D.L' :
                        $scope.tooasol4v=450;
                        break;
                    case 'Carrying Passenger in Cabin' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Carrying Excess Pillion/Rider' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Carrying Passengers in goods carriage' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Driving Without Seat Belt' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Tinted Glass' :
                        $scope.tooasol4v=100;
                        break;
                    case 'No Parking' :
                        $scope.tooasol4v=100;
                        break;
                    case 'No Entry' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Carrying passengers other than at Bus Stop' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Disobedience of Orders' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Violating of Traffic Signal' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Open Door' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Without Uniform' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Without Tarpoline' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Wrong turn' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Violation of Govt. Notification' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Unauthorized Parking' :
                        $scope.tooasol4v=100;
                        break;
                    case 'W/O No.Plate' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Improper no. Plate' :
                        $scope.tooasol4v=100;
                        break;
                       case 'Delayed Journey' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Without rear mirror' :
                        $scope.tooasol4v=100;
                        break;
                    case 'Right of Pedistrian' :
                        $scope.tooasol4v=100;
                        break;
                   case 'Obstructive to other Traffic' :
                        $scope.tooasol4v=100;
                        break;  
                  case 'Vehical Parked on Zebra Crossing' :
                        $scope.tooasol4v=100;
                        break;
                    default :
                        $scope.tooasol4v=0;
                    
                }

            };


            //Uses Sweetalert2 library for modal and downloads backup od database in excel sheet
            $scope.backupDatabase = function(){
                    swal({
                        title: "Do you want to download database backup?",
                        text: "This will download excel sheet with all records.",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Download!",
                        cancelButtonText: "Cancel",
                    }).then(result => {
                        if(result.value){
                            $window.open("api/backup_database.php","_blank");
                            swal("Downloaded", "Excel sheet is downloaded.", "success");
                        } else{
                            swal("Cancelled", "", "error");
                        }
                    });
                       
            };


            //To get records of officer from and to date
            $scope.getOfficerRecords = function(){
                var fromDate =  $scope.fromDate.getFullYear()+"-"+ ( $scope.fromDate.getMonth() -1+2 ) +"-"+$scope.fromDate.getDate();
                var toDate =  $scope.toDate.getFullYear()+"-"+ ( $scope.toDate.getMonth() -1+2 ) +"-"+$scope.toDate.getDate();
                
                $window.open("api/get_number_of_cases.php?from="+fromDate+"&to="+toDate,"_blank");
            }

            

            $scope.populateData = function(){
             		$http.get("api/populate_data.php",{params: {serial_n : $scope.search_serial} } )
                         .then(function(data){
                         //console.log("details ayli",data)
                         $scope.srno=data.data[0].serial_no;
                         $scope.unit=data.data[0].unit;
                         $scope.noo=data.data[0].name_of_officer;
                         $scope.rank=data.data[0].rank;
                         $scope.dof=new Date(data.data[0].date_time_of_offence);
                         $scope.poo=data.data[0].place_of_offence;
                         $scope.vrn=data.data[0].vehicle_reg_no;
                         $scope.tov=data.data[0].type_of_vehicle;
                         $scope.tooasol1=data.data[0].type_of_offence_and_section_of_law_1;
                         $scope.tooasol2=data.data[0].type_of_offence_and_section_of_law_2;
                         $scope.tooasol3=data.data[0].type_of_offence_and_section_of_law_3;
                         $scope.tooasol4=data.data[0].type_of_offence_and_section_of_law_4;
                         $scope.otherOffence=data.data[0].other_offence;
                         $scope.otherOffenceAmount.amount=parseInt(data.data[0].other_offence_amount);
                         $scope.dorois=new Date(data.data[0].date_of_receipt_of_information_slip);
                         $scope.dodovnttc=new Date(data.data[0].date_of_dispatch_of_vehicle_no_to_traffic_cell);
                         $scope.doronaaftc=new Date(data.data[0].date_of_receipt_of_name_and_address_from_traffic_cell);
                         $scope.nov=data.data[0].name_of_violator;
                         $scope.aov=data.data[0].address_of_violator;
                         $scope.wn=data.data[0].whatsapp_number;
                         $scope.dodontps=new Date(data.data[0].date_of_dispatch_of_notice_to_ps);
                         $scope.dorosn=new Date(data.data[0].date_of_receipt_of_served_notice);
                         $scope.cbn=data.data[0].challan_book_number;
                         $scope.cn=data.data[0].challan_number;
                         $scope.mdln=data.data[0].mdl_no;
                         $scope.ca=data.data[0].composition_amount;
                         $scope.ccn=data.data[0].court_case_number;
                         $scope.dodtcd=new Date(data.data[0].date_of_dispatch_to_court_disposal);
                         $scope.updateFlag="Update";
                         $scope.valueDisplay="block";

                        switchSection();
                        
                


                     },function(error){
                         console.log("error from populatedb function ",error);
                 });
            };


            $scope.submission =function(){    
                switchSection();


                var formData = {
                    "unit" : $scope.unit,
                    "name_of_officer" : $scope.noo,
                    "rank" : $scope.rank,
                    "date_time_of_offence" : $scope.dof,
                    "place_of_offence" : $scope.poo,
                    "vehicle_reg_numb" : $scope.vrn,
                    "type_of_vehicle" : $scope.tov,
                    "type_of_offence_1" : $scope.tooasol1,
                    "type_of_offence_2" : $scope.tooasol2,
                    "type_of_offence_3" : $scope.tooasol3,
                    "type_of_offence_4" : $scope.tooasol4,
                    "other_offence" : $scope.otherOffence,
                    "other_offence_amount" : $scope.otherOffenceAmount.amount,
                    "date_of_receipt_of_information_slip" : $scope.dorois,
                    "date_of_dispatch_of_vehicle_no_to_traffic_cell" : $scope.dodovnttc,
                    "date_of_receipt_of_name_and_address_from_traffic_cell" : $scope.doronaaftc,
                    "name_of_violator" : $scope.nov,
                    "address_of_violator" : $scope.aov,
                    "whatsapp_number" : $scope.wn,
                    "date_of_dispatch_of_notice_to_ps" : $scope.dodontps,
                    "date_of_receipt_of_served_notice" : $scope.dorosn,
                    "challan_book_number" : $scope.cbn ,
                    "challan_number" : $scope.cn,
                    "mdl_no" : $scope.mdln,
                    "composition_amount" :$scope.ca ,
                    "court_case_number" : $scope.ccn,
                    "date_of_dispatch_to_court_disposal" : $scope.dodtcd
                };
                

                if($scope.updateFlag=="Submit")
                $http.post("api/store_form_data.php",JSON.stringify(formData),{ headers: {'Content-Type': 'application/json'}})
                .then(function(response){

                    swal({
                        title: "Submitted.. Record Saved..!",
                        text: "Do you want to print NOTICE?",
                        type: "success",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, Print it!",
                        cancelButtonText: "No"
                    }).then(result => {
                        if(result.value){
                            var win = window.open();
							var tmpStr = JSON.stringify(response);
							tmpStr = tmpStr.split(",");
							tmpStr = tmpStr[0].split(":");
							tmpStr = tmpStr[1].split('"');
							document.getElementById('serial_no').innerHTML = tmpStr[1];
							document.getElementById('serial_no1').innerHTML = tmpStr[1];
                            win.document.write(document.getElementById('DivIdToPrint').innerHTML);
                            win.print();
                            win.close();
                           swal("Printed", "Notice is printed", "success");
                        } else{
                            swal("Cancelled", "Your data is saved", "success");
                        }
                    });
                });

                if($scope.updateFlag=="Update"){
                    $http.post("api/update_form_data.php",JSON.stringify(formData),{ headers: {'Content-Type': 'application/json'}})
                    .then(function(response){
                        swal({
                        title: "Updated.. Record Saved..!",
                        text: "Do you want to print updated NOTICE?",
                        type: "success",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, Print it!",
                        cancelButtonText: "No"
                    }).then(result => {
                        if(result.value){
                            var win = window.open();
                            win.document.write(document.getElementById('DivIdToPrint').innerHTML);
                            win.print();
                            win.close();
                            swal("Printed", "Notice is printed", "success");
                        } else{
                            swal("Cancelled", "Your data is saved", "success");
                        }
                    });
                });
                

            }
        };

    });